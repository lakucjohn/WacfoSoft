<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 7:32 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class Form_2 extends AuthContentController {

    public function __construct()
    {
        parent::__construct();

        // Load the models for this controller
            $this->load->model('People/Other/Assessments/form_2_model');
    }

    public function index()
    {
        $data = array(

            'title' => 'Assessment 2 Data | WACFO',

        );
        $data['data_set'] = $this->form_2_model->fetch();

        $this->template->load('default', 'People/Other/Assessments/Data/assessment-2-data-list', $data);


    }

    public function create(){
        $data = array(
            'title' => 'Record new Assessment 2 Data',
        );

        $this->template->load('default', 'People/Other/Assessments/Registration/new-assessment-2-record-form', $data);
    }

    public function edit(){
        echo 'OK';

    }

    public function details()
    {

        if($this->uri->segment(3)){
            $row_id = $this->uri->segment(3);

            $data['title'] = 'Child Assessment 2 Details';

            $data['assessment_2_info'] =  $this->form_2_model->fetch_single_record($row_id);
            $this->template->load('default','People/Other/Assessments/Data/assessment-2-details',$data);
        }

    }

    public function generate_pdf_document(){

    }

    public function generate_detailed_pdf(){

    }

}
?>