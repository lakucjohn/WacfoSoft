<?php

/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/18/18
 * Time: 9:19 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class MiseanCaraBaselineSurvey extends AuthContentController
{

    public function __construct()
    {
        parent::__construct();

       // Load the models for this controller
        $this->load->model('Production/MiseanCaraBaselineSurveys/baseline_survey_model');


    }

    public function index()
    {
        $data = array(

            'title' => 'Crop Production | WACFO',

        );

        $data['data_set'] = $this->baseline_survey_model->fetch();

        $this->template->load('default', 'Production/Survey/Data/misean-cara-baseline-survey-data-list', $data);

    }

    public function create(){
        $data = array(
            'title' => 'New Misean Cara Baseline Survey Economic Security before project intervention',
        );

        $this->template ->load('default', 'Production/Survey/Registration/misean-cara-baseline-survey-economic-security-form', $data);
    }

    public function edit(){
        echo 'OK';

    }

    public function details()
    {

        if($this->uri->segment(2)){
            $row_id = $this->uri->segment(2);

            $data['title'] = 'Baseline Survey Details';

            $data['baseline_survey_info'] =  $this->baseline_survey_model->fetch_single_record($row_id);
            $this->template->load('default','Production/Survey/baseline_survey_details',$data);
        }

    }

    public function generate_pdf_document(){

    }

    public function generate_detailed_pdf(){

    }


}