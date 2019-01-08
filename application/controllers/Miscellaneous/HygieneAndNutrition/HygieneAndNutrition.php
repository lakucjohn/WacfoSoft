<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 7:32 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class HygieneAndNutrition extends AuthContentController {

    public function __construct()
    {
        parent::__construct();

        // Load the models for this controller
        $this->load->model('Miscellaneous/HygieneAndNutrition/hygieneAndNutrition_model');


    }

    public function index()
    {
        $data = array(

            'title' => 'Hygiene and Nutrition Checklist | WACFO',

        );

        $data['data_set'] = $this->hygieneAndNutrition_model->fetch();

        $this->template->load('default', 'Miscellaneous/Hygiene_And_Nutrition/Data/hygiene-and-nutrition-data-list', $data);


    }

    public function create(){
        $data = array(
            'title' => 'New Hygiene and Nutrition Checklist',
        );

        # Performing Validation Checks
        $this->form_validation->set_rules('name_of_respondent', 'The Name of the Respondent', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'Miscellaneous/Hygiene_And_Nutrition/Registration/new-hygiene-and-nutrition-checklist-form', $data);
        } else {
            echo 'OK';
        }

    }

    public function edit(){
        echo 'OK';

    }

    public function details()
    {

        if($this->uri->segment(2)){
            $row_id = $this->uri->segment(2);

            $data['title'] = 'Hygiene and Nutrition Details';

            $data['hygiene_and_nutrition_info'] =  $this->hygieneAndNutrition_model->fetch_single_record($row_id);
            $this->template->load('default','Miscellaneous/Hygiene_And_Nutrition/Data/hygiene_and_nutrition_details',$data);
        }

    }

    public function generate_pdf_document(){

    }

    public function generate_detailed_pdf(){

    }

}
?>