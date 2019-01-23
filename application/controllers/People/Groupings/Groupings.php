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



            $data['group_list'] = $this->grouping_model->fetch();

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
                'NAME' => $group_name,
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
                'NAME' => $group_name,
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
            $group_info =  $this->grouping_model->fetch_single_record($row_id);

            $html_content = '<h3>About '.$row_id.'</h3>';
            $html_content .= $group_info;

            $this->pdf->loadHtml($html_content);
            $this->pdf->setPaper('A4', 'landscape');
            $this->pdf->render();

            $this->pdf->stream("".$row_id.".pdf",array("Attachment"=>0));
        }

    }

}
?>