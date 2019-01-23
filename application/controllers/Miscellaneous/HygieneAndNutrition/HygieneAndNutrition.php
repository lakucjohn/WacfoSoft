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
        $this->load->model('People/Groupings/grouping_model');
        $this->load->model('People/Membership/membership_model');
        $this->load->model('People/Staff/staff_model');

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

        #retrieving all ids for groups
        $data['groups_list'] = $this->grouping_model->fetch_all_active_ids();

        #Fetching the list of all staff
        $data['staff_list'] = $this->staff_model->fetch();

        # Performing validation checks
        $group_id = $this->input->post('group_id');
        $district = $this->input->post('district');
        $subcounty = $this->input->post('subcounty');
        $parish = $this->input->post('parish');
        $checked_by = $this->input->post('checked_by');
        $date_checked = $this->input->post('date_checked');



        # Performing Validation Checks
        $this->form_validation->set_rules('group_id', 'Group ID', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'Miscellaneous/Hygiene_And_Nutrition/Registration/new-hygiene-and-nutrition-checklist-form', $data);
        } else {

            $group_Members_List = $this->membership_model->return_group_members_list($group_id);
            foreach ($group_Members_List->result() as $row) {
                $pit_latrine = $this->input->post('pit_latrine' . $row->ID);
                $tippy_tap = $this->input->post('tippy_tap' . $row->ID);
                $plate_drying_rack = $this->input->post('plate_drying_rack' . $row->ID);
                $rubbish_pit = $this->input->post('rubbish_pit' . $row->ID);
                $bathroom_shelter = $this->input->post('bathroom_shelter' . $row->ID);
                $kitchen_garden = $this->input->post('kitchen_garden' . $row->ID);
                $fruit_trees = $this->input->post('fruit_trees' . $row->ID);
                $nrm_practices = $this->input->post('nrm_practices' . $row->ID);
                $maize_crib = $this->input->post('maize_crib' . $row->ID);
                $drying_rack = $this->input->post('drying_rack' . $row->ID);
                $tarpaulin = $this->input->post('tarpaulin' . $row->ID);
                $granary = $this->input->post('granary' . $row->ID);
                $papyrus_mat = $this->input->post('papyrus_mat' . $row->ID);
                $earth_floor = $this->input->post('earth_floor' . $row->ID);
                $check_date = $this->input->post('check_date' . $row->ID);

                $field_data = array(
                    'MEMBERSHIP_ID' => $row->MEMBERSHIP_ID,
                    'SEX' => $row->SEX,
                    'GROUP_NAME' => $group_id,
                    'DISTRICT' => $district,
                    'SUBCOUNTY' => $subcounty,
                    'PARISH' => $parish,
                    'PIT_LATRINE' => $pit_latrine,
                    'RUBBISH_PIT' => $rubbish_pit,
                    'BATHING_SHELTER' => $bathroom_shelter,
                    'TIPPY_TAP' => $tippy_tap,
                    'PLATE_DRYING_RACK' => $plate_drying_rack,
                    'KITCHEN_GARDEN' => $kitchen_garden,
                    'FRUIT_TREES' => $fruit_trees,
                    'NRM_PRACTICES' => $nrm_practices,
                    'MAIZE_CRIB' => $maize_crib,
                    'DRYING_RACK' => $drying_rack,
                    'TAPAULIN' => $tarpaulin,
                    'GRANARY' => $granary,
                    'PAPYRUS_MAT' => $papyrus_mat,
                    'EARTH_FLOOR' => $earth_floor,
                    'DATE_CHECKED' => $check_date,
                    'STAFF' => $checked_by,
                    'DATE_RECORDED' => $date_checked,
                );

                $this->hygieneAndNutrition_model->insert_record($field_data);

            }
            redirect(base_url('miscellaneous%20hygiene%20and%20nutrition'));
        }

    }

    function fetch_group_members()
    {

        if ($this->input->post('group_id')) {
            $group_id = $this->input->post('group_id');
//            echo 'OK';
//            echo $group_id;

            echo $this->membership_model->fetch_associated_group_members($group_id);
        }

    }

    function fetch_personal_records()
    {

        if ($this->input->post('member_id')) {
            $member_id = $this->input->post('member_id');
            $row_id = $this->input->post('record_id');

            echo $this->membership_model->fetch_members_record($member_id, $row_id);
        }

    }

    public function edit(){
        $record_id = $this->uri->segment(3);
        $data = array(
            'title' => 'New Hygiene and Nutrition Checklist',
        );
        $data['row_id'] = $record_id;

        $data['default_value_array'] = $this->hygieneAndNutrition_model->fetch_single_row_data_to_edit($record_id);

        #Fetching the list of all staff
        $data['staff_list'] = $this->staff_model->fetch();
        $group_id = $this->hygieneAndNutrition_model->get_member_group($record_id);
        $data['members_list'] = $this->membership_model->return_group_members_list($group_id);

        # Performing validation checks
        $checked_by = $this->input->post('checked_by');
        $date_checked = $this->input->post('date_checked');

        # Performing Validation Checks
        $this->form_validation->set_rules('member_id', 'Membership ID', 'required');

        if ($this->form_validation->run() == FALSE) {
//            $this->load->view('Miscellaneous/Hygiene_And_Nutrition/Modification/edit-hygiene-and-nutrition-checklist-form',$data);
            $this->template->load('default', 'Miscellaneous/Hygiene_And_Nutrition/Modification/edit-hygiene-and-nutrition-checklist-form', $data);
        } else {
            $member_id = $this->input->post('member_id');
            $pit_latrine = $this->input->post('pit_latrine');
            $tippy_tap = $this->input->post('tippy_tap');
            $plate_drying_rack = $this->input->post('plate_drying_rack');
            $rubbish_pit = $this->input->post('rubbish_pit');
            $bathroom_shelter = $this->input->post('bathroom_shelter');
            $kitchen_garden = $this->input->post('kitchen_garden');
            $fruit_trees = $this->input->post('fruit_trees');
            $nrm_practices = $this->input->post('nrm_practices');
            $maize_crib = $this->input->post('maize_crib');
            $drying_rack = $this->input->post('drying_rack');
            $tarpaulin = $this->input->post('tarpaulin');
            $granary = $this->input->post('granary');
            $papyrus_mat = $this->input->post('papyrus_mat');
            $earth_floor = $this->input->post('earth_floor');
            $check_date = $this->input->post('check_date');

            $field_data = array(
                'MEMBERSHIP_ID' => $member_id,
                'SEX' => $this->membership_model->get_member_sex($member_id),
                'PIT_LATRINE' => $pit_latrine,
                'RUBBISH_PIT' => $rubbish_pit,
                'BATHING_SHELTER' => $bathroom_shelter,
                'TIPPY_TAP' => $tippy_tap,
                'PLATE_DRYING_RACK' => $plate_drying_rack,
                'KITCHEN_GARDEN' => $kitchen_garden,
                'FRUIT_TREES' => $fruit_trees,
                'NRM_PRACTICES' => $nrm_practices,
                'MAIZE_CRIB' => $maize_crib,
                'DRYING_RACK' => $drying_rack,
                'TAPAULIN' => $tarpaulin,
                'GRANARY' => $granary,
                'PAPYRUS_MAT' => $papyrus_mat,
                'EARTH_FLOOR' => $earth_floor,
                'DATE_CHECKED' => $check_date,
                'STAFF' => $checked_by,
                'DATE_RECORDED' => $date_checked,
            );

            $this->hygieneAndNutrition_model->update_record($record_id, $field_data);


            redirect(base_url('miscellaneous%20hygiene%20and%20nutrition'));
        }

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