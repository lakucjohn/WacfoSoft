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
        $this->load->model('People/Children/children_model');
        $this->load->model('People/Other/Assessments/form_2_model');
    }

    public function index()
    {
        $data = array(

            'title' => 'Assessment 2 Data | WACFO',

        );
        $data['data_set'] = $this->form_2_model->fetch();
        $data['children_list'] = $this->children_model->fetch();

        $this->template->load('default', 'People/Other/Assessments/Data/assessment-2-data-list', $data);


    }

    public function create(){
        $data = array(
            'title' => 'Record new Assessment 2 Data',
        );

        #Fetching the necessary data
        $data['children_list'] = $this->children_model->fetch();

        # Performing Validation Checks
        $this->form_validation->set_rules('child_id', 'Child ID', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'People/Other/Assessments/Registration/new-assessment-2-record-form', $data);
        } else {
            $child_id = $this->input->post('child_id');
            $date_of_first_screening = $this->input->post('date_of_first_screening');
            $identified_by = $this->input->post('identified_by');
            $assessed_by = $this->input->post('assessed_by');
            $nearest_hc = $this->input->post('nearest_hc');
            $distance_in_km = $this->input->post('distance_in_km');
            $venue_for_screening = $this->input->post('venue_for_screening');
            $medical_history = $this->input->post('medical_history');
            $findings = $this->input->post('findings');
            $disability = $this->input->post('disability');
            $recommendations = $this->input->post('recommendations');
            $screened_by = $this->input->post('screened_by');
            $title = $this->input->post('title');
            $date_of_recording = $this->input->post('date_of_recording');

            $field_data = array(
                'CHILD' => $child_id,
                'DATE_OF_FIRST_SCREENING' => $date_of_first_screening,
                'IDENTIFIED_BY' => $identified_by,
                'ASSESSED_BY' => $assessed_by,
                'DISTANCE' => $distance_in_km,
                'NEAREST_HEALTH_CENTRE' => $nearest_hc,
                'VENUE_FOR_SCREENING' => $venue_for_screening,
                'MEDICAL_HISTORY' => $medical_history,
                'FINDINGS' => $findings,
                'DISABILITY' => $disability,
                'RECOMMENDATION' => $recommendations,
                'SCREENED_BY' => $screened_by,
                'DATE_ENTERED' => $date_of_recording,
                'TITLE' => $title,
            );

            $this->form_2_model->insert_record($field_data);
            redirect('assessments/form-2');
        }


    }

    public function edit(){
        $record_id = $this->uri->segment(4);
        $data = array(
            'title' => 'Record new Assessment 2 Data',
            'row_id' => $record_id,
        );

        #Fetching the necessary data
        $data['children_list'] = $this->children_model->fetch();
        $data['default_value_array'] = $this->form_2_model->fetch_single_row_data_to_edit($record_id);

        # Performing Validation Checks
        $this->form_validation->set_rules('child_id', 'Child ID', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'People/Other/Assessments/Modification/edit-assessment-2-record-form', $data);
        } else {
            $child_id = $this->input->post('child_id');
            $date_of_first_screening = $this->input->post('date_of_first_screening');
            $identified_by = $this->input->post('identified_by');
            $assessed_by = $this->input->post('assessed_by');
            $nearest_hc = $this->input->post('nearest_hc');
            $distance_in_km = $this->input->post('distance_in_km');
            $venue_for_screening = $this->input->post('venue_for_screening');
            $medical_history = $this->input->post('medical_history');
            $findings = $this->input->post('findings');
            $disability = $this->input->post('disability');
            $recommendations = $this->input->post('recommendations');
            $screened_by = $this->input->post('screened_by');
            $title = $this->input->post('title');
            $date_of_recording = $this->input->post('date_of_recording');

            $field_data = array(
                'CHILD' => $child_id,
                'DATE_OF_FIRST_SCREENING' => $date_of_first_screening,
                'IDENTIFIED_BY' => $identified_by,
                'ASSESSED_BY' => $assessed_by,
                'DISTANCE' => $distance_in_km,
                'NEAREST_HEALTH_CENTRE' => $nearest_hc,
                'VENUE_FOR_SCREENING' => $venue_for_screening,
                'MEDICAL_HISTORY' => $medical_history,
                'FINDINGS' => $findings,
                'DISABILITY' => $disability,
                'RECOMMENDATION' => $recommendations,
                'SCREENED_BY' => $screened_by,
                'DATE_ENTERED' => $date_of_recording,
                'TITLE' => $title,
            );

            $this->form_2_model->update_record($record_id, $field_data);
            redirect('assessments/form-2');
        }

    }

    public function show_create_for_specific_child()
    {
        $child_row_id = $this->uri->segment(4);
        $child_data = $this->children_model->fetch_child_by_row($child_row_id);
        foreach ($child_data->result() as $row) {
            $child_id = $row->CHILD_ID;
            $child_name = $row->NAME;
        }
        $data['selected_child_id'] = $child_id;
        $data['child_name'] = $child_name;
        $data['title'] = 'Assessment Form 2 for particular child';

        $this->template->load('default', 'People/Other/Assessments/Registration/new-assessment-2-record-form', $data);
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