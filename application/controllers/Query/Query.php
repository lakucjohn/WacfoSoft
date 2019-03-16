<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/20/19
 * Time: 1:00 PM
 */

include_once(APPPATH . 'controllers/AuthContentController.php');

class Query extends AuthContentController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Query/query_model');
    }

    public function index()
    {
        $data = array(
            'title' => 'Query WacfoSoft'
        );

        $this->template->load('default', 'Query/search-specific-data', $data);
    }

    public function run_query_and_show_results()
    {
        $tableslist = array();
        $fieldslist = array();
        $joinslist = array();
        $conditionslist = array();
//        echo 'continue and build the query with your query builder';
        if (isset($_POST['tables'])) {
            $tableslist = $_POST['tables'];
        }
        if (isset($_POST['fields'])) {
            $fieldslist = $_POST['fields'];
        }
        if (isset($_POST['joints'])) {
            $joinslist = $_POST['joints'];
        }
        if (isset($_POST['conditions'])) {
            $conditionslist = $_POST['conditions'];
        }

//        print_r($tableslist);
//        echo '<br><br>';
//        print_r($fieldslist);
//        echo '<br><br>';
//        print_r($joinslist);
//        echo '<br><br>';
//        print_r($conditionslist);

        $final_or_conditions_array = array();
        $final_and_conditions_array = array();
        $final_conditions = array();

        if (isset($conditionslist) & count($conditionslist) != 0) {
            foreach ($conditionslist as $condition) {
                # Checking the or for date query strings if it doesn't exists
                if (!preg_match('/\bBETWEEN\b/i', $condition[1])) {

                    if (preg_match('/\bOR\b/i', $condition[1])) {
//                        $or_conditions = explode(' OR ', $condition[1]);
//                        foreach ($or_conditions as $or_condition) {
//                            $conditionsegment = $condition[0] . " LIKE '%" . $or_condition . "%'";
//
//                            array_push($final_or_conditions_array, $conditionsegment);
//                        }
                    } else {
                        $condition_segment = $condition[0] . " LIKE '%" . $condition[1] . "%'";
//                        echo $condition_segment;
                        array_push($final_and_conditions_array, $condition_segment);
                    }
                } else {
                    # Working the query string for date
                    if (preg_match('/\bOR\b/i', $condition[1])) {
                        $or_conditions = explode(' OR ', $condition[1]);
                        foreach ($or_conditions as $or_condition) {
                            $conditionsegment = $condition[0] . ' ' . $or_condition;

                            array_push($final_or_conditions_array, $conditionsegment);
                        }
                    } else {
                        $conditionsegment = $condition[0] . ' ' . $condition[1];
                        array_push($final_and_conditions_array, $conditionsegment);
                    }
                }
//
            }
        }

//        $final_conditions = array('AND' => $final_and_conditions_array, 'OR' => $final_or_conditions_array);
        if (isset($final_and_conditions_array) & count($final_and_conditions_array) != 0) {

            $final_conditions['AND'] = $final_and_conditions_array;
        }

        if (isset($final_or_conditions_array) & count($final_or_conditions_array) != 0) {

            $final_conditions['OR'] = $final_or_conditions_array;
        }

//        print_r($final_conditions);

//        print_r($final_conditions);

//        print_r($conditionslist);

//        print_r($fieldslist);

        $generated_sql = $this->build_query($table = $tableslist, $fields = $fieldslist, $joins = $joinslist, $conditions = $final_conditions);

//        # Format of a query builder input pattern
////        $generated_sql = $this->build_query($table = array(), $fields = array(), $joins = array(), $cosnditions = array());
///
//            echo $generated_sql;
//        print_r($tableslist);
//
        $result_set = $this->query_model->execute_query($generated_sql);

        $output = '
                <head>
                 <style>

                    #innertable td{
                        border-collapse: collapse;
                        border: 1px solid black;
                    }

                    #innertable-2 td, th{
                        border: 1px solid black;
                        border-collapse: collapse;
                    }
                </style>
                </head>';
        $output .= '<table class="table table-bordered" id="innertable-2" style="border-collapse: collapse;">';
        $output .= '<tr>';
        $output .= '<th>#</th>';

        foreach ($result_set->list_fields() as $field) {
            if ($field = str_replace('_', ' ', $field)) {
                $fieldname = $field;
            } else {
                $fieldname = $field;
            }

            $output .= '<th>' . $fieldname . '</th>';
        }

        $output .= '</tr>';
        $counter = 0;

        foreach ($result_set->result_array() as $row) {

            $output .= '<tr>';
            $output .= '<td>' . ++$counter . '</td>';
            foreach ($result_set->list_fields() as $field) {
                $output .= '<td>' . $row[$field] . '</td>';
            }
            $output .= '</tr>';
            #print_r($row);

        }

        #$colspan = count($result_set->list_fields())+1;
        #$output .= '<td style="text-align:right;" colspan='.$colspan.'>&nbsp;</td>';
        #$output .= '<td style="text-align:right;" colspan='.$colspan.'>'.$result_set->num_rows().' Results Found</td>';
        $output .= '</table><br><br>';


        $currentDateTime = date('Y-m-d H:i:s');
        $output .= $currentDateTime;

        echo $output;

    }

    public function build_query($tables = array(), $fields = array(), $joins = array(), $conditions = array())
    {

        # Initialising the sql statement
        $sql = '';
        $condition_sql = '';

        # Confirming if there are tables in the array
        if (!empty($tables)) {
            $initial_table = $tables[0];

            # Remove the first element of the tables array
            unset($tables[0]);

            #Setting the required fields
            $query_fields = implode(',', $fields);

            #Inititialising the sql statement
            $sql = "SELECT " . $query_fields . " FROM " . $initial_table;
        }

        #Initialising the join section of the sql
        $join_portion = "";

        #Ensuring the sql generation started successfully
        if (!empty($sql)) {
            #Checking if joins are needed
            if (!empty($joins)) {
                foreach ($joins as $join) {
                    $join_portion .= ' LEFT OUTER JOIN ' . $join[0] . ' ON ' . $join[1] . ' ';
                }
            }

            # Initialising the AND and OR Sections of the WHERE clause
            $and_sql = '';
            $or_sql = '';

            #Checking if conditions are provided and manipulating them
            if (!empty($conditions)) {
                foreach ($conditions as $condition => $condition_set) {

                    if ($condition == 'AND') {
                        $and_sql .= implode(' AND ', $condition_set);

                    }
                }
                foreach ($conditions as $condition => $condition_set) {
                    if ($condition == 'OR') {

                        #Checking if the AND string exists
                        if (!empty($and_sql)) {

                            #Inititialation the first part of the OR statement
                            $or_element_init = $condition_set[0];

                            # Removing the first condition from the OR segment
                            unset($condition_set[0]);

                            #Checking the remainder of the OR segment
                            if (count($condition_set) != 1) {
                                $or_sql = $or_element_init . ' AND ' . $and_sql . ' OR ' . implode(' AND ' . $and_sql . ' OR ', $condition_set) . ' AND ' . $and_sql;
                            } else {
                                foreach ($condition_set as $last_condition) {
                                    $or_last_portion = ' AND ' . $and_sql . ' OR ' . $last_condition . ' AND ' . $and_sql;
                                }

                                $or_sql = $or_element_init .= $or_last_portion;
                            }

                        } else {
                            # If the AND segment doesn't exist
                            $or_sql = implode(' OR ', $condition_set);
                        }
                    }
                }
            }

            # Confirming that the query has been built with conditions attached
            if (!empty($and_sql) & !empty($or_sql)) {
                $condition_sql = ' WHERE ' . $or_sql;
            } else if (!empty($and_sql)) {
                $condition_sql = ' WHERE ' . $and_sql;
            } else if (!empty($or_sql)) {
                $condition_sql = ' WHERE ' . $or_sql;
            } else {
                $condition_sql = '';
            }
        }


        # Joining the segments of the resultant query
        $sql .= $join_portion . $condition_sql;

        /*
         * The Final SQL STATEMENT IS OF THE FORMAT BELOW
         *
         * SELECT GROUPS.NAME, MEMBERSHIP.NAME,MEMBERSHIP.VULNERABILITY,MEMBERSHIP.MEMBERSHIP_ID, VEGETABLE_PRODUCTION_NEW.FOOD_STUFF FROM MEMBERSHIP LEFT OUTER JOIN GROUPS ON GROUPS.GROUP_ID=MEMBERSHIP.GROUPS LEFT OUTER JOIN VEGETABLE_PRODUCTION_NEW ON VEGETABLE_PRODUCTION_NEW.INDIVIDUAL=MEMBERSHIP.MEMBERSHIP_ID WHERE MEMBERSHIP.VULNERABILITY='YOUTH' AND MEMBERSHIP.GROUPS='AB/2/4' OR MEMBERSHIP.VULNERABILITY='EVI' AND MEMBERSHIP.GROUPS='AB/2/4'
         *
         *
         * The function test is used to test the query builder on real data
         */

        return $sql;
//        $query_result_set = $this->query_model->execute_query($sql);

    }

    public function test()
    {
        echo $this->build_query($tables = array('MEMBERSHIP', 'GROUPS'), $fields = array('GROUPS.*', 'MEMBERSHIP.*'), $joins = array(array('GROUPS', 'GROUPS.GROUP_ID=MEMBERSHIP.MEMBERSHIP_ID'), array('VEGETABLE_PRODUCTION_NEW', 'VEGETABLE_PRODUCTION_NEW.INDIVIDUAL=MEMBERSHIP.MEMBERSHIP_ID')), $conditions = array('OR' => array("MEMBERSHIP.VULNERABILITY='YOUTH'", "MEMBERSHIP.VULNERABILITY='EVI'", "MEMBERSHIP.VULNERABILITY='WIDOWS'"), 'AND' => array("MEMBERSHIP.GROUPS = 'AB/2/4'", "MEMBERSHIP.SEX = 'F'")));
    }

}

?>