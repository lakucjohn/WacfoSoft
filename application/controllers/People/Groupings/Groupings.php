<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 7:32 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class Groupings extends AuthContentController {

    public function __construct()
    {
        parent::__construct();

        // Load the models for this controller
        $this->load->model('People/Groupings/grouping_model');
        $this->load->model('Settings/location_model');

    }

    public function index()
    {
        $data = array(

            'title' => 'Livelihood Groups | WACFO',

        );
        $data['livelihood_categories'] = $this->grouping_model->fetch_all_categories();

            $data['group_list'] = $this->grouping_model->fetch();
        $data['villages'] = $this->location_model->fetch_all_villages();

            $this->template->load('default', 'People/Livelihood/Groupings/Data/groupings-data-list', $data);



    }

    public function details(){

        if($this->uri->segment(2)){
            $row_id = $this->uri->segment(2);

            $data['title'] = 'Group Details';

            $data['group_info'] =  $this->grouping_model->fetch_single_record($row_id);
            $this->template->load('default','People/Livelihood/Groupings/Data/group_details',$data);
        }
    }

    public function create(){
        $data = array(
            'title' => 'New Livelihood Group',
        );

        # Fetching the list of group categories
        $data['category_list'] = $this->grouping_model->fetch_all_categories();
        #Fetching the list of parishes
        $data['parish_list'] = $this->location_model->fetch_all_parishes();

        # Performing Validation Checks
        $this->form_validation->set_rules('group_name', 'Name of the Group', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'People/Livelihood/Groupings/Registration/new-livelihood-grouping', $data);
        } else {
            $group_name = $this->input->post('group_name');
            $group_parish = $this->input->post('group_parish');
            $group_village = $this->input->post('group_village');
            $group_type = $this->input->post('group_type');
            $date_of_registration = $this->input->post('date_of_registration');

            #Processing the group ID
            $group_id = $this->grouping_model->generate_group_id($group_village);

            $field_data = array(
                'GROUP_NAME' => $group_name,
                'LOCATION' => $group_village,
                'DATE_OF_REGISTRATION' => $date_of_registration,
                'GROUP_ID' => $group_id,
                'TYPE' => $group_type,
            );
            $this->grouping_model->insert_record($field_data);

            redirect('groupings');

        }


    }

    public function get_group_name()
    {
        if ($this->input->post('group_id')) {
            $group_id = $this->input->post('group_id');

            echo $this->grouping_model->get_group_name_from_db($group_id);
        }
    }

    public function edit(){
        $data = array(
            'title' => 'Edit Livelihood Group Basic Information',
        );

        $record_id = $this->uri->segment(3);
        $data['row_id'] = $record_id;

        #Fetching the defult values
        $data['default_value_array'] = $this->grouping_model->fetch_single_row_data_to_edit($record_id);

        # Fetching the list of group categories
        $data['category_list'] = $this->grouping_model->fetch_all_categories();
        #Fetching the list of parishes
        $data['parish_list'] = $this->location_model->fetch_all_parishes();

        # Fetching the list of all villages
        $data['village_list'] = $this->location_model->fetch_all_villages();

        # Performing Validation Checks
        $this->form_validation->set_rules('group_name', 'Name of the Group', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'People/Livelihood/Groupings/Modification/edit-livelihood-grouping', $data);
        } else {
            $group_name = $this->input->post('group_name');
            $group_village = $this->input->post('group_village');
            $group_type = $this->input->post('group_type');
            $date_of_registration = $this->input->post('date_of_registration');

            $field_data = array(
                'GROUP_NAME' => $group_name,
                'LOCATION' => $group_village,
                'DATE_OF_REGISTRATION' => $date_of_registration,
                'TYPE' => $group_type,
            );
            $this->grouping_model->update_record($record_id, $field_data);

            redirect('groupings');
        }

    }

    public function generate_pdf_document(){

        if($this->uri->segment(3)) {

            $row_id = $this->uri->segment(3);
            $group_info = $this->grouping_model->fetch_single_group_and_print($row_id);

            $html_content = '<h3>About '.$row_id.'</h3>';
            $html_content .= $group_info;

            $this->pdf->loadHtml($html_content);
            $this->pdf->setPaper('A4', 'landscape');
            $this->pdf->render();

            $this->pdf->stream("".$row_id.".pdf",array("Attachment"=>0));
        }

    }

    public function create_support()
    {
        $data = array();
        $data['title'] = 'Support this Entity';
        $group_id = $this->uri->segment(5) . '/' . $this->uri->segment(6) . '/' . $this->uri->segment(7);
        $track_id = $this->grouping_model->generate_track_id();

        $data['group_id'] = $group_id;
        $support = $this->input->post('support_item');
        $date = $this->input->post('date_of_support');
        $group_supported = $this->input->post('group_id');
        $support_quantities = $this->input->post('support_quantity');

        # Performing Validation Checks
        $this->form_validation->set_rules('date_of_support', 'Date', 'required');
        $this->form_validation->set_rules('support_item[]', 'Support Items', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'People/Livelihood/Groupings/Registration/support-registration-form', $data);
        } else {

            $i = 0;
            $support_items_and_their_quantities = array();
            while ($i < count($support)) {
                array_push($support_items_and_their_quantities, $support[$i] . ' (' . $support_quantities[$i] . ')');

                $i++;
            }

            $supported_with = implode(', ', $support_items_and_their_quantities);

            $field_data = array(
                'DATE_OF_SUPPORT' => $date,
                'BENEFICIARY' => $group_supported,
                'CATEGORY' => 'Group',
                'SUPPORT' => $supported_with,
                'TRACK_ID' => $track_id,
            );
            $this->grouping_model->insert_support_record($field_data);

            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function filter_data(){
        $data['title'] = 'Filter Data in this table';
        $this->template->load('default', 'People/Livelihood/Groupings/Data/filter-data', $data);
    }

}
?>