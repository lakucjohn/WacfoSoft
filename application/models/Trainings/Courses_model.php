
<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */
require_once (APPPATH.'models/Header.php');
class Courses_model extends CI_Model{

    function fetch(){
        $this->db->order_by('ID','DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('COURSES');
    }

    function fetch_modules()
    {
        $this->db->order_by('ID', 'DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('COURSES_AND_TOPICS');
    }

    function fetch_total()
    {
        $this->db->order_by('ID', 'DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('COURSES')->num_rows();
    }

    function fetch_single_record($row_id){
        $this->db->where('ID', $row_id);

        $data = $this->db->get('COURSES');


        $output = '<div class="table-responsive">
                    <div class="card w-100">
                    <table width="100%">
                    ';

        $output.='<tr style="font-size: 18px; font-weight: bold; height: 48px;">
                    <td>
                        COURSE DETAILS
                    </td>
                  </tr>';


        foreach($data->result() as $row) {
            $output .= '
                <style>

                    .right-content{
                        float: right;
                        width: 40%;
                        text-align: right;
                    }
                
                    .left-content{
                        float: left;
                        width: 60%;
                    }
                    .main-content{
                        clear: both;
                        padding-bottom: 3rem;
                    }
                
                </style>
                
                <tr title="' . $row->COURSE . '">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px;" border="0" class="table">
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:40%; text-align: right;">Course :</td>
                                <td>'.$row->COURSE.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Code :</td>
                                <td>'.$row->CODE.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Group(s) Intended :</td>
                                <td>' . $this->return_category_names_separated_by_commas($row->GROUP_TRAINED) . '</td>
                            </tr>
                        
                        </table>
                        
                    </td>
                </tr>';

            $output .= '<tr>
                    <td>
                        <hr>
                    </td>
                  </tr>';

            $output .= '<tr style="font-size: 18px; font-weight: bold;">
                    <td>
                    <div class="main-content">
                            <div class="left-content">
                                MODULES IN THIS COURSE
                            </div>
                            
                            <div class="right-content">
                                <a class="btn btn-primary btn-md space-sm-right" href="#"><i class="fa fa-plus-circle"></i> New Module in this course</a>
                            </div>
                        </div>
                    </td>
                  </tr>';

            $output .= $this->fetch_modules_under_this_course($row->CODE);


            $output .= '
                            </table>
                        </div>
                    </div>';
        }

        return $output;
    }

    public function return_category_names_separated_by_commas($category_string)
    {
        $category_string_to_array = explode(', ', $category_string);

        $category_name_string = '';
        $category_name_array = array();
        foreach ($category_string_to_array as $category) {
            $category_name_string = $this->get_category_name($category);
            array_push($category_name_array, $category_name_string);
        }


        return implode(', ', $category_name_array);

    }

    public function get_category_name($category_id)
    {
        $this->db->where('ID', $category_id);
        $resultset = $this->db->get('LIVELIHOODGROUPCATEGORIES');

        $category_name = '';
        foreach ($resultset->result() as $result) {
            $category_name = $result->CATEGORYNAME;
        }

        return $category_name;
    }

    public function fetch_modules_under_this_course($course_code)
    {

        $this->db->where('COURSE', $course_code);
        $this->db->where('STATUS', TRUE);
        $this->db->order_by('TOPIC', 'ASC');

        $query = $this->db->get('COURSES_AND_TOPICS');

        $output = '';
        $counter = 0;
        $output .= '<tr>';
        $output .= '<td>';
        $output .= '<table class="table table-bordered">';
        foreach ($query->result() as $row) {
            $output .= '<tr title="' . $row->ID . '">';

            $output .= '<td style="text-align: right; width: 10%;">' . ++$counter . '</td>';
            $output .= '<td style="width: 50%;">' . $row->TOPIC . '</td>';
            $output .= '<td style="width: 30%;"><a data-toggle="collapse" href="#trainingCollapse' . $row->ID . '" role="button" aria-expanded="false" aria-controls="trainingCollapse' . $row->ID . '">View History of Training This Course</a> </td>';

            $output .= '</tr>';
            $output .= '<tr>';
            $output .= '<td colspan="3">
                            <div class="collapse" id="trainingCollapse' . $row->ID . '">
                              <div class="card card-body">';
            $output .= $this->fetch_groups_trained_in_this_module($course_code, $row->ID);
            if ($this->fetch_groups_trained_in_this_module($course_code, $row->ID) !== '<div style="color:red;">No Training Records Found for this Module</div>') {
                $output .= '<div class="col-md-12"><a href="' . base_url('Training/courses/generate_training_information_for_this_module/' . $course_code . '/' . $row->ID) . '" class="btn btn-danger">Print This text</a> </div>';
            }

            $output .= '</div>
                            </div>
                        </td>';
            $output .= '<tr>';

        }
        $output .= '</table>';
        $output .= '</td>';
        $output .= '</tr>';
        return $output;
    }

    function fetch_groups_trained_in_this_module($course_code, $row_id)
    {

        $this->db->where('COURSE', $course_code);
        $this->db->where('TOPIC', $row_id);
        $this->db->set('STATUS', TRUE);
        $training_result = $this->db->get('TRAININGS');

        $output = '';

        if ($training_result->num_rows() != 0) {

            $this->db->where('STATUS', TRUE);
            $groups = $this->db->get('GROUPS');


            $output = '
                <head>
                 <style>
                
                    #innertable td{
                        border-collapse: collapse;
                        border: 1px solid black;
                    }
                
                    #innertable-2 td, th{
                        border-collapse: collapse;
                        border: 1px solid black;
                    }
                </style>
                </head>';

            $output .= '<table id="innertable-2" class="table table-bordered" style="border: 1px solid; border-collapse: collapse;">';
            $output .= '<tr>';
            $output .= '<th>DATE OF TRAINING</th>';
            $output .= '<th>OBJECTIVE</th>';
            $output .= '<th>VENUE</th>';
            $output .= '<th>CONDUCTED BY</th>';
            $output .= '<th>IS STAFF</th>';
            $output .= '<th>GROUP ID</td>';
            $output .= '<th>GROUP NAME</td>';
            $output .= '</tr>';

            foreach ($training_result->result() as $training) {
                foreach ($groups->result() as $group) {
                    if ($this->check_if_a_group_member_attended_this_training($group->GROUP_ID)) {
                        $output .= '<tr>';
                        $output .= '<td>' . $training->DATE_OF_TRAINING . '</td>';
                        $output .= '<td>' . $training->OBJECTIVE . '</td>';
                        $output .= '<td>' . $training->VENUE . '</td>';
                        $output .= '<td>' . $training->CONDUCTED_BY . '</td>';
                        $output .= '<td>' . $training->IS_STAFF . '</td>';
                        $output .= '<td>' . $group->GROUP_ID . '</td>';
                        $output .= '<td>' . $group->NAME . '</td>';
                        $output .= '</tr>';
                    }
                }

            }

            $output .= '</table>';

        } else {
            $output .= '<div style="color:red;">No Training Records Found for this Module</div>';
        }

        return $output;

    }

    function check_if_a_group_member_attended_this_training($group_id)
    {
        $this->db->like('ATTENDANT', $group_id);
        $this->db->where('STATUS', TRUE);
        $attendants = $this->db->get('TRAINING_ATTENDANCE');

        if ($attendants->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insert_course($field_data)
    {
        $this->db->insert('COURSES', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insert_module($field_data)
    {
        $this->db->insert('COURSES_AND_TOPICS', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    public function fetch_modules_in_course($course_code)
    {
        $this->db->where('COURSE', $course_code);
        $this->db->where('STATUS', TRUE);
        $this->db->order_by('TOPIC', 'ASC');

        $query = $this->db->get('COURSES_AND_TOPICS');

        $output = '<label for="training_module">Module:</label>
                    <select name="training_module" id="training_module" class="form-control">
                        <option value="">Select the module</option>';

        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->ID . '">' . $row->TOPIC . '</option>';
        }

        $output .= '</select>';

        return $output;
    }

    function fetch_single_row_data_to_edit_course($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('COURSES');

        return $data;

    }

    function fetch_single_row_data_to_edit($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('COURSES');

        return $data;

    }

    function fetch_course_modules_to_edit($course_code)
    {
        $this->db->where('COURSE', $course_code);
        $this->db->where('STATUS', TRUE);

        $data = $this->db->get('COURSES_AND_TOPICS');

        return $data;

    }

    function return_modules_in_course($course_code)
    {

        $this->db->where('COURSE', $course_code);
        $this->db->where('STATUS', TRUE);
        $this->db->order_by('TOPIC', 'ASC');

        $query = $this->db->get('COURSES_AND_TOPICS');

        return $query;
    }

    function fetch_course_target_groups($course_code)
    {
        $this->db->where('CODE', $course_code);
        $this->db->where('STATUS', TRUE);

        $query = $this->db->get('COURSES');

        return $query;
    }

    function get_name_of_topic($topic)
    {
        $this->db->where('ID', $topic);
        $this->db->where('STATUS', TRUE);

        $query = $this->db->get('COURSES_AND_TOPICS');

        foreach ($query->result() as $row) {
            $topic_name = $row->TOPIC;
        }

        return $topic_name;

    }

    function update_course($record_id, $field_data)
    {
        $this->db->where('ID', $record_id);
        $this->db->set($field_data);
        $this->db->update('COURSES');

//        $this->db->update('COURSES', $field_data, array('ID' => $record_id));

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function delete_course($row_id)
    {

        $this->db->where('ID', $row_id);
        $this->db->set('STATUS', FALSE);
        $this->db->update('COURSES');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function delete_module($course_code, $module_name)
    {

        $this->db->where('COURSE', $course_code);
        $this->db->where('TOPIC', $module_name);
        $this->db->set('STATUS', FALSE);
        $this->db->update('COURSES_AND_TOPICS');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return $this->db->error();
        }
    }


}

?>