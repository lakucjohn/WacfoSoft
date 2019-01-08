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

        # Performing Validation Checks
        $this->form_validation->set_rules('name_of_respondent', 'The Name of the Respondent', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'Training/Courses_And_Topics/Registration/new-topic-and-modules-form', $data);
        } else {
            echo 'OK';
        }

    }

    public function edit(){

        $data['title'] = 'Edit Group Info';

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

    public function generate_detailed_pdf(){

    }

}
?>