<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 7:32 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class Form_1 extends AuthContentController {

    public function __construct()
    {
        parent::__construct();

        // Load the models for this controller
        $this->load->model('People/Other/Assessments/form_1_model');
        $this->load->model('People/Children/children_model');
        $this->load->model('Settings/location_model');
    }

    public function index()
    {
        $data = array(

            'title' => 'Assessment 1 Data | WACFO',

        );
        $data['data_set'] = $this->form_1_model->fetch();
        $data['children_list'] = $this->children_model->fetch();
        $data['county_settings'] = $this->location_model->fetch_all_counties();
        $data['parish_settings'] = $this->location_model->fetch_all_parishes();
        $data['village_settings'] = $this->location_model->fetch_all_villages();

        $this->template->load('default', 'People/Other/Assessments/Data/assessment-1-data-list', $data);


    }

    public function create(){
        $data = array(
            'title' => 'Record new Assessment 1 Data',
        );

        #Fetching the necessary data
        $data['children_list'] = $this->children_model->fetch();
        $data['county_list'] = $this->location_model->fetch_all_counties();

        # Performing Validation Checks
        $this->form_validation->set_rules('child_id', 'Child ID', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'People/Other/Assessments/Registration/new-assessment-1-record-form', $data);
        } else {
            $county = $this->input->post('county');
            $subcounty = $this->input->post('subcounty');
            $parish = $this->input->post('parish');
            $village = $this->input->post('village');
            $health_centre = $this->input->post('health_centre');
            $date_of_recording = $this->input->post('date_of_recording');
            $cbr_worker = $this->input->post('cbr_worker');
            $child_id = $this->input->post('child_id');
            $date_of_birth = $this->input->post('date_of_birth');
            $child_sex = $this->input->post('child_sex');
            $disability_type = $this->input->post('disability_type');
            $where_child_lives = $this->input->post('where_child_lives');
            $other_place = $this->input->post('other_place');
            $availability_of_other_disabled_children_in_family = $this->input->post('availability_of_other_disabled_children_in_family');
            $number_of_disabled_children = $this->input->post('number_of_disabled_children');
            $able_to_provide_basic_needs = $this->input->post('able_to_provide_basic_needs');
            $reason_for_failure_to_provide_basic_needs = $this->input->post('reason_for_failure_to_provide_basic_needs');
            $disability_description = $this->input->post('disability_description');
            $child_uses_medicine = $this->input->post('child_uses_medicine');
            $name_of_medicine = $this->input->post('name_of_medicine');
            $child_has_fits = $this->input->post('child_has_fits');
            $number_of_times = $this->input->post('number_of_times');
            $childs_limb_moves_well = $this->input->post('childs_limb_moves_well');
            $the_limbs_that_move_well = $this->input->post('the_limbs_that_move_well');
            $child_uses_aids = $this->input->post('child_uses_aids');
            $name_of_appliances = $this->input->post('name_of_appliances');
            $child_talks = $this->input->post('child_talks');
            $child_sees = $this->input->post('child_sees');
            $mental_capacity_of_the_child = $this->input->post('mental_capacity_of_the_child');
            $child_washes_and_dries_by_himself = $this->input->post('child_washes_and_dries_by_himself');
            $child_eats_and_drinks_by_himself = $this->input->post('child_eats_and_drinks_by_himself');
            $child_manages_toilet_activities = $this->input->post('child_manages_toilet_activities');
            $how_the_child_moves_inside_and_outside = $this->input->post('how_the_child_moves_inside_and_outside');
            $child_plays_with_other_children = $this->input->post('child_plays_with_other_children');
            $child_helps_with_household_cores = $this->input->post('child_helps_with_household_cores');
            $child_is_accepted_and_loved_by_the_family = $this->input->post('child_is_accepted_and_loved_by_the_family');
            $child_is_accepted_by_the_community = $this->input->post('child_is_accepted_by_the_community');
            $child_goes_to_school = $this->input->post('child_goes_to_school');
            $name_of_school = $this->input->post('name_of_school');
            $comment = $this->input->post('comment');

            $field_data = array(
                'COUNTY' => $county,
                'SUBCOUNTY' => $subcounty,
                'PARISH' => $parish,
                'VILLAGE' => $village,
                'HEALTH_CENTRE' => $health_centre,
                'DATE_ENTERED' => $date_of_recording,
                'CBR_NAME' => $cbr_worker,
                'CHILD_ID' => $child_id,
                'DATE_OF_BIRTH' => $date_of_birth,
                'SEX' => $child_sex,
                'DISABILITY_TYPE' => $disability_type,
                'WHERE_THE_CHILD_LIVES' => $where_child_lives,
                'OTHER_SPECIFIED_PLACE' => $other_place,
                'OTHER_DISABLED_CHILDREN' => $availability_of_other_disabled_children_in_family,
                'NUMBER_OF_OTHER_DISABLED_CHILDREN' => $number_of_disabled_children,
                'ABLE_TO_PROVIDE_BASIC_NEEDS' => $able_to_provide_basic_needs,
                'EXPLANATION_FOR_INABILITY_TO_PROVIDE_BASIC_NEEDS' => $reason_for_failure_to_provide_basic_needs,
                'DISABILITY_DESCRIPTION' => $disability_description,
                'CHILD_USES_MEDICINE' => $child_uses_medicine,
                'NAME_OF_MEDICINE' => $name_of_medicine,
                'CHILD_HAS_FITS' => $child_has_fits,
                'NUMBER_OF_FITS' => $number_of_times,
                'LIMBS_MOVE_WELL' => $childs_limb_moves_well,
                'LIMBS_THAT_MOVE_WELL' => $the_limbs_that_move_well,
                'CHILD_USES_AIDS' => $child_uses_aids,
                'TYPE_OF_AIDS_USED' => $name_of_appliances,
                'CHILD_TALKS' => $child_talks,
                'CHILD_SEES' => $child_sees,
                'MENTAL_CAPACITY' => $mental_capacity_of_the_child,
                'EATS_AND_DRINKS' => $child_eats_and_drinks_by_himself,
                'WASHES_AND_DRESSES' => $child_washes_and_dries_by_himself,
                'TOILET_ACTIVITIES' => $child_manages_toilet_activities,
                'HOW_THE_CHILD_MOVES' => $how_the_child_moves_inside_and_outside,
                'CHILD_PLAYS_WITH_OTHERS' => $child_plays_with_other_children,
                'HELPS_IN_HOUSEHOLD_CORES' => $child_helps_with_household_cores,
                'ACCEPTED_BY_FAMILY_AND_LOVED' => $child_is_accepted_and_loved_by_the_family,
                'ACCEPTED_BY_COMMUNITY' => $child_is_accepted_by_the_community,
                'GOES_TO_SCHOOL' => $child_goes_to_school,
                'SCHOOL' => $name_of_school,
                'COMMENT' => $comment,
            );

            $this->form_1_model->insert_record($field_data);

            redirect('assessments/form-1');
            //echo $village
        }


    }

    public function edit(){
        $data = array(
            'title' => 'Edit Assessment Form 1',
        );

        $record_id = $this->uri->segment(4);

        #Fetching the necessary data
        $data['children_list'] = $this->children_model->fetch();
        $data['county_list'] = $this->location_model->fetch_all_counties();
        $data['subcounty_list'] = $this->location_model->fetch_all_subcounties();
        $data['parish_list'] = $this->location_model->fetch_all_parishes();
        $data['village_list'] = $this->location_model->fetch_all_villages();
        $data['row_id'] = $record_id;
        $data['default_value_array'] = $this->form_1_model->fetch_single_row_data_to_edit($record_id);

        # Performing Validation Checks
        $this->form_validation->set_rules('child_id', 'Child ID', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'People/Other/Assessments/Modification/edit-assessment-1-record-form', $data);

        } else {
            $county = $this->input->post('county');
            $subcounty = $this->input->post('subcounty');
            $parish = $this->input->post('parish');
            $village = $this->input->post('village');
            $health_centre = $this->input->post('health_centre');
            $date_of_recording = $this->input->post('date_of_recording');
            $cbr_worker = $this->input->post('cbr_worker');
            $child_id = $this->input->post('child_id');
            $date_of_birth = $this->input->post('date_of_birth');
            $child_sex = $this->input->post('child_sex');
            $disability_type = $this->input->post('disability_type');
            $where_child_lives = $this->input->post('where_child_lives');
            $other_place = $this->input->post('other_place');
            $availability_of_other_disabled_children_in_family = $this->input->post('availability_of_other_disabled_children_in_family');
            $number_of_disabled_children = $this->input->post('number_of_disabled_children');
            $able_to_provide_basic_needs = $this->input->post('able_to_provide_basic_needs');
            $reason_for_failure_to_provide_basic_needs = $this->input->post('reason_for_failure_to_provide_basic_needs');
            $disability_description = $this->input->post('disability_description');
            $child_uses_medicine = $this->input->post('child_uses_medicine');
            $name_of_medicine = $this->input->post('name_of_medicine');
            $child_has_fits = $this->input->post('child_has_fits');
            $number_of_times = $this->input->post('number_of_times');
            $childs_limb_moves_well = $this->input->post('childs_limb_moves_well');
            $the_limbs_that_move_well = $this->input->post('the_limbs_that_move_well');
            $child_uses_aids = $this->input->post('child_uses_aids');
            $name_of_appliances = $this->input->post('name_of_appliances');
            $child_talks = $this->input->post('child_talks');
            $child_sees = $this->input->post('child_sees');
            $mental_capacity_of_the_child = $this->input->post('mental_capacity_of_the_child');
            $child_washes_and_dries_by_himself = $this->input->post('child_washes_and_dries_by_himself');
            $child_eats_and_drinks_by_himself = $this->input->post('child_eats_and_drinks_by_himself');
            $child_manages_toilet_activities = $this->input->post('child_manages_toilet_activities');
            $how_the_child_moves_inside_and_outside = $this->input->post('how_the_child_moves_inside_and_outside');
            $child_plays_with_other_children = $this->input->post('child_plays_with_other_children');
            $child_helps_with_household_cores = $this->input->post('child_helps_with_household_cores');
            $child_is_accepted_and_loved_by_the_family = $this->input->post('child_is_accepted_and_loved_by_the_family');
            $child_is_accepted_by_the_community = $this->input->post('child_is_accepted_by_the_community');
            $child_goes_to_school = $this->input->post('child_goes_to_school');
            $name_of_school = $this->input->post('name_of_school');
            $comment = $this->input->post('comment');

            $field_data = array(
                'COUNTY' => $county,
                'SUBCOUNTY' => $subcounty,
                'PARISH' => $parish,
                'VILLAGE' => $village,
                'HEALTH_CENTRE' => $health_centre,
                'DATE_ENTERED' => $date_of_recording,
                'CBR_NAME' => $cbr_worker,
                'CHILD_ID' => $child_id,
                'DATE_OF_BIRTH' => $date_of_birth,
                'SEX' => $child_sex,
                'DISABILITY_TYPE' => $disability_type,
                'WHERE_THE_CHILD_LIVES' => $where_child_lives,
                'OTHER_SPECIFIED_PLACE' => $other_place,
                'OTHER_DISABLED_CHILDREN' => $availability_of_other_disabled_children_in_family,
                'NUMBER_OF_OTHER_DISABLED_CHILDREN' => $number_of_disabled_children,
                'ABLE_TO_PROVIDE_BASIC_NEEDS' => $able_to_provide_basic_needs,
                'EXPLANATION_FOR_INABILITY_TO_PROVIDE_BASIC_NEEDS' => $reason_for_failure_to_provide_basic_needs,
                'DISABILITY_DESCRIPTION' => $disability_description,
                'CHILD_USES_MEDICINE' => $child_uses_medicine,
                'NAME_OF_MEDICINE' => $name_of_medicine,
                'CHILD_HAS_FITS' => $child_has_fits,
                'NUMBER_OF_FITS' => $number_of_times,
                'LIMBS_MOVE_WELL' => $childs_limb_moves_well,
                'LIMBS_THAT_MOVE_WELL' => $the_limbs_that_move_well,
                'CHILD_USES_AIDS' => $child_uses_aids,
                'TYPE_OF_AIDS_USED' => $name_of_appliances,
                'CHILD_TALKS' => $child_talks,
                'CHILD_SEES' => $child_sees,
                'MENTAL_CAPACITY' => $mental_capacity_of_the_child,
                'EATS_AND_DRINKS' => $child_eats_and_drinks_by_himself,
                'WASHES_AND_DRESSES' => $child_washes_and_dries_by_himself,
                'TOILET_ACTIVITIES' => $child_manages_toilet_activities,
                'HOW_THE_CHILD_MOVES' => $how_the_child_moves_inside_and_outside,
                'CHILD_PLAYS_WITH_OTHERS' => $child_plays_with_other_children,
                'HELPS_IN_HOUSEHOLD_CORES' => $child_helps_with_household_cores,
                'ACCEPTED_BY_FAMILY_AND_LOVED' => $child_is_accepted_and_loved_by_the_family,
                'ACCEPTED_BY_COMMUNITY' => $child_is_accepted_by_the_community,
                'GOES_TO_SCHOOL' => $child_goes_to_school,
                'SCHOOL' => $name_of_school,
                'COMMENT' => $comment,
            );

            $this->form_1_model->update_record($record_id, $field_data);

            redirect('assessments/form-1');
        }

    }

    public function show_create_for_specific_child()
    {
        $data['county_list'] = $this->location_model->fetch_all_counties();
        $child_row_id = $this->uri->segment(4);
        $child_data = $this->children_model->fetch_child_by_row($child_row_id);
        foreach ($child_data->result() as $row) {
            $child_id = $row->CHILD_ID;
            $child_name = $row->NAME;
        }
        $data['selected_child_id'] = $child_id;
        $data['child_name'] = $child_name;
        $data['title'] = 'Assessment Form 1 for particular child';

        $this->template->load('default', 'People/Other/Assessments/Registration/new-assessment-1-record-form', $data);
    }

    public function details()
    {

        if($this->uri->segment(3)){
            $row_id = $this->uri->segment(3);

            $data['title'] = 'Child Assessment 1 Details';

            $data['assessment_1_info'] =  $this->form_1_model->fetch_single_record($row_id);
            $this->template->load('default','People/Other/Assessments/Data/assessment-1-details',$data);
        }

    }

    public function generate_pdf_document(){

    }

    public function generate_detailed_pdf(){

    }

    public function filter_data(){
        $data['title'] = 'Filter Data in this table';
        $this->template->load('default', 'People/Other/Assessments/Data/filter-data-1', $data);
    }

}
?>