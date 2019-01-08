<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 7:32 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class Monitoring extends AuthContentController {

    public function __construct()
    {
        parent::__construct();

        // Load the models for this controller
        $this->load->model('Monitoring/monitoring_model');

    }

    public function index()
    {
        $data = array(

            'title' => 'Monitoring | WACFO',

        );

        $data['data_set'] = $this->monitoring_model->fetch();

        $this->template->load('default', 'Monitoring/Data/monitoring-data-list', $data);

    }

    public function create_field_support_visit(){
        $data = array(

            'title' => 'New Field Support Visit',

        );

        # Performing Validation Checks
        $this->form_validation->set_rules('name_of_respondent', 'The Name of the Respondent', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'Monitoring/Registration/field-support-visits-form', $data);
        } else {
            echo 'OK';
        }



    }

    public function create_group_savings_tracking_record(){
        $data = array(

            'title' => 'Record Tracking Information of group savings',

        );

        # Performing Validation Checks
        $this->form_validation->set_rules('name_of_respondent', 'The Name of the Respondent', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'Monitoring/Registration/savings-information-tracking-form', $data);
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

            $data['title'] = 'Group Details';

            $data['group_info'] =  $this->grouping_model->fetch_single_record($row_id);
            $this->template->load('default','People/Livelihood/Groupings/group_details',$data);
        }
    }

    public function generate_pdf_document(){

    }

    public function generate_detailed_pdf(){

    }

}
?>