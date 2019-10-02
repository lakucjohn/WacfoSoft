<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 7:32 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class Visit extends AuthContentController {

    public function __construct()
    {
        parent::__construct();

        // Load the models for this controller
            $this->load->model('People/Other/Visits/visit_model');
        $this->load->model('People/Children/children_model');
        $this->load->model('People/Staff/staff_model');
        $this->load->model('Settings/location_model');
    }

    public function index()
    {
        $data = array(

            'title' => 'Visitations | WACFO',

        );
        $data['data_set'] = $this->visit_model->fetch();

        $this->template->load('default', 'People/Other/Visits/Data/children-visit-data-list', $data);


    }

    public function create(){
        $data = array(
            'title' => 'Register a new Child Visit',
        );

        #Fetching the necessary data
        $data['children_list'] = $this->children_model->fetch();
        $data['subcounty_list'] = $this->location_model->fetch_all_subcounties();
        $data['staff_list'] = $this->staff_model->fetch();

        # Performing Validation Checks
        $this->form_validation->set_rules('date_of_visit', 'Date of Visitation', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'People/Other/Visits/Registration/new-child-visit-record-form', $data);
        } else {
            $date_of_visit = $this->input->post('date_of_visit');
            $visit_type = $this->input->post('visit_type');
            $child_id_visited = $this->input->post('child_id_visited');
            $project_visit_type = $this->input->post('project_visit_type');
            $subcounty = $this->input->post('subcounty');
            $parish = $this->input->post('parish');
            $village = $this->input->post('village');
            $child_visit_activities = $this->input->post('child_visit_activities');
            $child_next_visit_activities = $this->input->post('child_next_visit_activities');
            $child_visit_staff = $this->input->post('child_visit_staff');
            $child_visit_comment = $this->input->post('child_visit_comment');
            $next_date_of_visit = $this->input->post('next_date_of_visit');

            $field_data = array(
                'DATE_OF_VISIT' => $date_of_visit,
                'KIND_OF_VISIT' => $visit_type,
                'CHILD_ID_VISITED' => $child_id_visited,
                'PROJECT' => $project_visit_type,
                'VILLAGE' => $village,
                'PARISH' => $parish,
                'SUBCOUNTY' => $subcounty,
                'ACTIVITY_CARRIED_OUT' => $child_visit_activities,
                'NEXT_VISIT_ACTIVITY' => $child_next_visit_activities,
                'WACFO_STAFF' => $child_visit_staff,
                'COMMENT' => $child_visit_comment,
                'NEXT_VISIT_DATE' => $next_date_of_visit,
            );

            $this->visit_model->insert_record($field_data);

            redirect('visitations');
        }


    }

    public function edit(){
        $record_id = $this->uri->segment(3);
        $data['title'] = 'Edit Child Visitation Information';

        #Fetching the necessary data
        $data['children_list'] = $this->children_model->fetch();
        $data['subcounty_list'] = $this->location_model->fetch_all_subcounties();
        $data['parish_list'] = $this->location_model->fetch_all_parishes();
        $data['village_list'] = $this->location_model->fetch_all_villages();
        $data['staff_list'] = $this->staff_model->fetch();
        $data['row_id'] = $record_id;
        $data['default_value_array'] = $this->visit_model->fetch_single_row_data_to_edit($record_id);

        # Performing Validation Checks
        $this->form_validation->set_rules('date_of_visit', 'Date of Visitation', 'required');

        if ($this->form_validation->run() == FALSE) {
//            echo $record_id;
            $this->template->load('default', 'People/Other/Visits/Modification/edit-child-visit-record-form', $data);
        } else {
            $date_of_visit = $this->input->post('date_of_visit');
            $visit_type = $this->input->post('visit_type');
            $child_id_visited = $this->input->post('child_id_visited');
            $subcounty = $this->input->post('subcounty');
            $parish = $this->input->post('parish');
            $village = $this->input->post('village');
            $child_visit_activities = $this->input->post('child_visit_activities');
            $child_next_visit_activities = $this->input->post('child_next_visit_activities');
            $child_visit_staff = $this->input->post('child_visit_staff');
            $child_visit_comment = $this->input->post('child_visit_comment');
            $next_date_of_visit = $this->input->post('next_date_of_visit');

            $field_data = array(
                'DATE_OF_VISIT' => $date_of_visit,
                'KIND_OF_VISIT' => $visit_type,
                'CHILD_ID_VISITED' => $child_id_visited,
                'VILLAGE' => $village,
                'PARISH	' => $parish,
                'SUBCOUNTY' => $subcounty,
                'ACTIVITY_CARRIED_OUT' => $child_visit_activities,
                'NEXT_VISIT_ACTIVITY' => $child_next_visit_activities,
                'WACFO_STAFF' => $child_visit_staff,
                'COMMENT' => $child_visit_comment,
                'NEXT_VISIT_DATE' => $next_date_of_visit,
            );

            $this->visit_model->update_record($record_id, $field_data);

            redirect('visitations');
        }

    }

    public function details()
    {

        if($this->uri->segment(2)){
            $row_id = $this->uri->segment(2);

            $data['title'] = 'Child Visit Details';

            $data['visit_info'] =  $this->visit_model->fetch_single_record($row_id);
            $this->template->load('default','People/Other/Visits/Data/child-visit-details',$data);
        }

    }

    public function generate_pdf_document(){

    }

    public function generate_detailed_pdf(){

    }

    public function filter_data(){
        $data['title'] = 'Filter Data in this table';
        $this->template->load('default', 'People/Other/Visits/Data/filter-data', $data);
    }

}
?>