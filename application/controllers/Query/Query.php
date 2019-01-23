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
        echo 'continue and build the query with your query builder';

        $generated_sql = $this->build_query($table = array(), $fields = array(), $joins = array(), $cosnditions = array());

//        $result_set = $this->query_model->execute_query($generated_sql);
        echo $generated_sql;
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


    }

    public function test()
    {
        $this->build_query($tables = array('MEMBERSHIP', 'GROUPS'), $fields = array('GROUPS.*', 'MEMBERSHIP.*'), $joins = array(array('GROUPS', 'GROUPS.GROUP_ID=MEMBERSHIP.MEMBERSHIP_ID'), array('VEGETABLE_PRODUCTION_NEW', 'VEGETABLE_PRODUCTION_NEW.INDIVIDUAL=MEMBERSHIP.MEMBERSHIP_ID')), $conditions = array('OR' => array("MEMBERSHIP.VULNERABILITY='YOUTH'", "MEMBERSHIP.VULNERABILITY='EVI'", "MEMBERSHIP.VULNERABILITY='WIDOWS'"), 'AND' => array("MEMBERSHIP.GROUPS = 'AB/2/4'", "MEMBERSHIP.SEX = 'F'")));
    }

}

?>