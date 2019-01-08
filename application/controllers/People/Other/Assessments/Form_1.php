<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 7:32 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class Form_1 extends AuthContentController {

    public function __construct()
    {
        parent::__construct();

        // Load the models for this controller
            $this->load->model('People/Other/Assessments/form_1_model');
    }

    public function index()
    {
        $data = array(

            'title' => 'Assessment 1 Data | WACFO',

        );
        $data['data_set'] = $this->form_1_model->fetch();

        $this->template->load('default', 'People/Other/Assessments/Data/assessment-1-data-list', $data);


    }

    public function create(){
        $data = array(
            'title' => 'Record new Assessment 1 Data',
        );

        # Performing Validation Checks
        $this->form_validation->set_rules('name_of_respondent', 'The Name of the Respondent', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'People/Other/Assessments/Registration/new-assessment-1-record-form', $data);
        } else {
            echo 'OK';
        }


    }

    public function edit(){
        echo 'OK';

    }

    public function details()
    {

        if($this->uri->segment(3)){
            $row_id = $this->uri->segment(3);

            $data['title'] = 'Child Assessment 1 Details';

            $data['assessment_1_info'] =  $this->form_1_model->fetch_single_record($row_id);
            $this->template->load('default','People/Other/Assessments/Data/assessment-1-details',$data);
        }

    }

    public function generate_pdf_document(){

    }

    public function generate_detailed_pdf(){

    }

}
?>