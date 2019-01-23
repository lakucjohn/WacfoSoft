<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 7:32 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class Courses extends AuthContentController {

    public function __construct()
    {
        parent::__construct();

        // Load the models for this controller
        $this->load->model('Trainings/courses_model');
        $this->load->model('People/Groupings/grouping_model');

    }

    public function index()
    {
        $data = array(

            'title' => 'Courses | WACFO',

        );



            $data['data_set'] = $this->courses_model->fetch();

            $this->template->load('default', 'Training/Courses_And_Topics/Data/courses-and-topics-data-list', $data);



    }

    public function details(){

        if($this->uri->segment(2)){
            $row_id = $this->uri->segment(2);

            $data['title'] = 'Course Details';

            $data['course_info'] =  $this->courses_model->fetch_single_record($row_id);
            $this->template->load('default','Training/Courses_And_Topics/Data/course_details',$data);
        }
    }

    public function create(){
        $data = array(
            'title' => 'New Course and Modules',
        );

        #Preparing relevant data
        $data['category_list'] = $this->grouping_model->fetch_all_categories();

        # Performing Validation Checks
        $this->form_validation->set_rules('course_name', 'Name of the Course', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'Training/Courses_And_Topics/Registration/new-topic-and-modules-form', $data);
        }

    }

    public function get_and_create_modules()
    {

        # Retrieving the details of the course
        if (json_encode($_POST['course_details'])) {
            $course_details = $_POST['course_details'];

            $course_name = $course_details[0]['course_name'];
            $course_code = $course_details[0]['course_code'];
            $course_description = $course_details[0]['course_description'];

            $target_groups = $course_details[0]['target_groups'];

            $target_groups = implode(', ', $target_groups);

            $field_data = array(
                'COURSE' => $course_name,
                'CODE' => $course_code,
                'DESCRIPTION' => $course_description,
                'GROUP_TRAINED' => $target_groups,
            );

            #Inserting the course to the database

            $this->courses_model->insert_course($field_data);

            # Preparing to save each module
            if ($_POST['module_data']) {
                $modules = $_POST['module_data'];

                foreach ($modules as $module) {
                    $module_field_data = array(
                        'COURSE' => $course_code,
                        'TOPIC' => $module,
                    );

                    #Insert the module to the database
                    $this->courses_model->insert_module($module_field_data);

                }

            }

        }

    }

    public function fetch_list_of_modules()
    {
        if ($this->input->post('course_code')) {
            $course_code = $this->input->post('course_code');

            echo $this->courses_model->fetch_modules_in_course($course_code);
        }
    }

    public function edit(){
        $record_id = $this->uri->segment(3);

        $data['title'] = 'Edit Course Info';

        $data['row_id'] = $record_id;

        #Preparing relevant data
        $data['category_list'] = $this->grouping_model->fetch_all_categories();
        $data['default_value_array'] = $this->courses_model->fetch_single_row_data_to_edit($record_id);

        $row_data = $this->courses_model->fetch_single_row_data_to_edit($record_id);

        foreach ($row_data->result() as $row) {
            $course_code = $row->CODE;
        }

        $data['course_modules'] = $this->courses_model->fetch_course_modules_to_edit($course_code);

        $this->form_validation->set_rules('course_name', 'Name of the Course', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'Training/Courses_And_Topics/Modification/edit-topic-and-modules-form', $data);
//            echo $course_code;
        }

    }

    public function generate_pdf_document(){

        if($this->uri->segment(3)) {

            $row_id = $this->uri->segment(3);
            $group_info =  $this->grouping_model->fetch_single_record($row_id);

            $html_content = '<h3>About '.$row_id.'</h3>';
            $html_content .= $group_info;

            $this->pdf->loadHtml($html_content);
            $this->pdf->setPaper('A4', 'landscape');
            $this->pdf->render();

            $this->pdf->stream("".$row_id.".pdf",array("Attachment"=>0));
        }

    }

    public function update_course_modules()
    {

        # Retrieving the details of the course
        if (isset($_POST['course_details']) & isset($_POST['row_id'])) {
            $course_details = $_POST['course_details'];

            $course_name = $course_details[0]['course_name'];
            $course_code = $course_details[0]['course_code'];
            $course_description = $course_details[0]['course_description'];

            $target_groups = $course_details[0]['target_groups'];

            $target_groups = implode(', ', $target_groups);

            # Picking the row of the course to update
            if ($_POST['row_id']) {
                $record_id = $_POST['row_id'];
            }

            $field_data = array(
                'COURSE' => $course_name,
                'CODE' => $course_code,
                'DESCRIPTION' => $course_description,
                'GROUP_TRAINED' => $target_groups,
            );

            #Updating the information about the course

            $result = $this->courses_model->update_course($record_id, $field_data);
            if ($result) {

                if (isset($_POST['module_data'])) {
//                    echo 'OK';
//                    # Now preparing to update the list of modules
                    $first_module_list = $this->courses_model->return_modules_in_course($course_code);
//                    print_r($first_module_list->result());

                    foreach ($first_module_list->result() as $module) {
//                        echo $module->TOPIC;
                        $this->courses_model->delete_module($module->COURSE, $module->TOPIC);

                    }


                    # Preparing to save each module
                    if ($_POST['module_data']) {
                        $modules = $_POST['module_data'];

//                        print_r($modules);

                        foreach ($modules as $module) {
                            $module_field_data = array(
                                'COURSE' => $course_code,
                                'TOPIC' => $module,
                            );
//                            echo $course_code;

                            #Insert the module to the database
                            $result = $this->courses_model->insert_module($module_field_data);
                            if ($result) {
                                echo "Update Successful" . '<br>';
                            } else {

                            }

                        }

//                        echo 'Successfully Updated Modules';
                    }

                }
            }


        }

    }

    public function generate_detailed_pdf(){

    }

}
?>