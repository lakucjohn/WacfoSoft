<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 7:32 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class Training extends AuthContentController {

    public function __construct()
    {
        parent::__construct();

        // Load the models for this controller
        $this->load->model('Trainings/training_model');

    }

    public function index()
    {
        $data = array(

            'title' => 'Training | WACFO',

        );

        $data['data_set'] = $this->training_model->fetch();

        $this->template->load('default', 'Training/Trainings/Data/trainings-data-list', $data);

    }

    public function edit(){
        echo 'OK';

    }

    public function details()
    {

        if($this->uri->segment(2)){
            $row_id = $this->uri->segment(2);

            $data['title'] = 'Training Details';

            $data['training_info'] =  $this->training_model->fetch_single_record($row_id);
            $this->template->load('default','Training/Trainings/Data/training_details',$data);
        }

    }

    public function create(){
        $data = array(
            'title' => 'New Training',
        );

        # Performing Validation Checks
        $this->form_validation->set_rules('name_of_respondent', 'The Name of the Respondent', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'Training/Trainings/Registration/new-training-registration-form', $data);
        } else {
            echo 'OK';
        }
    }

    public function generate_pdf_document(){

    }

    public function generate_detailed_pdf(){

    }

}
?>