<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 7:32 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class Children extends AuthContentController {

    public function __construct()
    {
        parent::__construct();

        // Load the models for this controller
        $this->load->model('People/Children/children_model');
        $this->load->model('People/Groupings/grouping_model');
        $this->load->model('People/disability_model');
        $this->load->model('Settings/location_model');
    }

    public function index()
    {
        $data = array(

            'title' => 'Children | WACFO',

        );
        $data['disability_list'] = $this->disability_model->fetch();
        $data['children_list'] = $this->children_model->fetch();

        $this->template->load('default', 'People/Children/Data/children-data-list', $data);


    }

    public function create(){
        $data = array(
            'title' => 'Register a new Child',
        );

        # Fetching the list of vulnerabilities

        $data['vulnerability_list'] = $this->disability_model->fetch();
        $data['parish_list'] = $this->location_model->fetch_all_parishes();

        # Performing Validation Checks
        $this->form_validation->set_rules('child_name', 'Name of the Child', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'People/Children/Registration/child-registration-form', $data);
        } else {
            $child_name = $this->input->post('child_name');
            $child_sex = $this->input->post('child_sex');
            $child_vulnerability = $this->input->post('child_vulnerability');
            $child_date_of_birth = $this->input->post('child_date_of_birth');
            $child_parish = $this->input->post('child_parish');
            $child_village = $this->input->post('child_village');
            $project_visit_type = $this->input->post('project_visit_type');
            $child_date_of_joining = $this->input->post('child_date_of_joining');
            $child_mother_name = $this->input->post('child_mother_name');
            $child_father_name = $this->input->post('child_father_name');
            $child_guardian_name = $this->input->post('child_guardian_name');

            # Retrieving the ID Format for the disability
            $child_id = $this->disability_model->generate_child_id($child_vulnerability);

            $field_data = array(
                'NAME' => $child_name,
                'SEX' => $child_sex,
                'VULNERABILITY' => $child_vulnerability,
                'DATE_OF_BIRTH' => $child_date_of_birth,
                'PARISH' => $child_parish,
                'VILLAGE' => $child_village,
                'PROJECT' => $project_visit_type,
                'DATE_OF_JOINING' => $child_date_of_joining,
                'MOTHER' => $child_mother_name,
                'FATHER' => $child_father_name,
                'GUARDIAN' => $child_guardian_name,
                'CHILD_ID' => $child_id,
            );

            $this->children_model->insert_record($field_data);

            redirect('children%20list');

//            echo $child_id;
        }


    }

    public function edit(){
        $data = array(
            'title' => 'Edit the Child\'s',
        );
        $record_id = $this->uri->segment(3);

        # Fetching the list of vulnerabilities

        $data['vulnerability_list'] = $this->disability_model->fetch();

        # Fetching Location information
        $data['parish_list'] = $this->location_model->fetch_all_parishes();
        $data['village_list'] = $this->location_model->fetch_all_villages();

        # Setting the row id as the id to be edited
        $data['row_id'] = $record_id;

        # Fetching The default values
        $data['default_value_array'] = $this->children_model->fetch_single_row_data_to_edit($record_id);

        # Performing Validation Checks
        $this->form_validation->set_rules('child_name', 'Name of the Child', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'People/Children/Modification/edit-child-registration-form', $data);
//            echo $record_id;
        } else {
            $child_name = $this->input->post('child_name');
            $child_sex = $this->input->post('child_sex');
            $child_vulnerability = $this->input->post('child_vulnerability');
            $child_date_of_birth = $this->input->post('child_date_of_birth');
            $child_parish = $this->input->post('child_parish');
            $child_village = $this->input->post('child_village');
            $project_visit_type = $this->input->post('project_visit_type');
            $child_date_of_joining = $this->input->post('child_date_of_joining');
            $child_mother_name = $this->input->post('child_mother_name');
            $child_father_name = $this->input->post('child_father_name');
            $child_guardian_name = $this->input->post('child_guardian_name');

            #Check the disability of the child was changed
            $disability_change = $this->children_model->check_if_this_disability_changed($record_id, $child_vulnerability);

            if ($disability_change) {
                # Retrieving the ID Format for the disability
                $child_id = $this->disability_model->generate_child_id($child_vulnerability);

                $field_data = array(
                    'NAME' => $child_name,
                    'SEX' => $child_sex,
                    'VULNERABILITY' => $child_vulnerability,
                    'DATE_OF_BIRTH' => $child_date_of_birth,
                    'PARISH' => $child_parish,
                    'VILLAGE' => $child_village,
                    'PROJECT' => $project_visit_type,
                    'DATE_OF_JOINING' => $child_date_of_joining,
                    'MOTHER' => $child_mother_name,
                    'FATHER' => $child_father_name,
                    'GUARDIAN' => $child_guardian_name,
                    'CHILD_ID' => $child_id,
                );
            } else {

                $field_data = array(
                    'NAME' => $child_name,
                    'SEX' => $child_sex,
                    'DATE_OF_BIRTH' => $child_date_of_birth,
                    'PARISH' => $child_parish,
                    'VILLAGE' => $child_village,
                    'PROJECT' => $project_visit_type,
                    'DATE_OF_JOINING' => $child_date_of_joining,
                    'MOTHER' => $child_mother_name,
                    'FATHER' => $child_father_name,
                    'GUARDIAN' => $child_guardian_name,
                );
            }


            $this->children_model->update_record($record_id, $field_data);

            redirect('children%20list');
        }

    }

    public function details()
    {

        if($this->uri->segment(2)){
            $row_id = $this->uri->segment(2);

            $data['title'] = 'Child Details';

            $data['child_info'] =  $this->children_model->fetch_single_record($row_id);
            $this->template->load('default','People/Children/Data/child_details',$data);
        }

    }

    public function generate_pdf_document(){

        if ($this->uri->segment(3)) {

            $row_id = $this->uri->segment(3);
            $page_data = $this->children_model->fetch_single_record_and_print($row_id);

            $html_content = '<h3>About ' . $row_id . '</h3>';
            $html_content .= $page_data;

            $this->pdf->loadHtml($html_content);
            $this->pdf->setPaper('A4', 'landscape');
            $this->pdf->render();

            $this->pdf->stream("" . $row_id . ".pdf", array("Attachment" => 0));
        }

    }

    public function generate_detailed_pdf(){

    }

    public function get_child_name()
    {
        if ($this->input->post('child_id')) {
            $child_id = $this->input->post('child_id');

            echo $this->children_model->get_child_name_from_db($child_id);
        }
    }

    public function create_support()
    {
        $data = array();
        $data['title'] = 'Support this Entity';
        $child_id = $this->uri->segment(5) . '/' . $this->uri->segment(6);

        $data['child_id'] = $child_id;
        $support = $this->input->post('support_item');
        $date = $this->input->post('date_of_support');
        $entity_supported = $this->input->post('child_id');
        $support_description = $this->input->post('support_description');

        # Performing Validation Checks
        $this->form_validation->set_rules('date_of_support', 'Date', 'required');
        $this->form_validation->set_rules('support_item[]', 'Support Items', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'People/Children/Registration/child-support-registration-form', $data);
        } else {

            $i = 0;
            $support_items_and_their_quantities = array();
            while ($i < count($support)) {
                array_push($support_items_and_their_quantities, $support[$i] . ' (' . $support_description[$i] . ')');

                $i++;
            }

            $supported_with = implode(', ', $support_items_and_their_quantities);

            $field_data = array(
                'DATE_OF_SUPPORT' => $date,
                'BENEFICIARY' => $entity_supported,
                'CATEGORY' => 'Child',
                'SUPPORT' => $supported_with,
            );
            $this->grouping_model->insert_support_record($field_data);

            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function filter_data(){
        $data['title'] = 'Filter Data in this table';
        $this->template->load('default', 'People/Children/Data/filter-data', $data);
    }

}
?>