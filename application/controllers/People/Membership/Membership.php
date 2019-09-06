<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 7:32 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class Membership extends AuthContentController {

    public function __construct()
    {
        parent::__construct();

        // Load the models for this controller
        $this->load->model('People/Membership/membership_model');
        $this->load->model('People/Groupings/grouping_model');
        $this->load->model('People/disability_model');
        $this->load->model('Settings/location_model');

    }

    public function index()
    {
        $data = array(

            'title' => 'Membership | WACFO',

        );

        $data['members_list'] = $this->membership_model->fetch();
        $data['disability_list'] = $this->disability_model->fetch();
        $this->template->load('default', 'People/Livelihood/Membership/Data/membership-data-list', $data);

    }

    public function create(){
        $data = array(
            'title' => 'Register a new Livelihood Group Member'
        );

        #Fetching other important data
        $data['parish_list'] = $this->location_model->fetch_all_parishes();
        $data['vulnerability_list'] = $this->disability_model->fetch();
        $data['grouping_list'] = $this->grouping_model->fetch();

        # Performing Validation Checks
        $this->form_validation->set_rules('member_name', 'Name of the member', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'People/Livelihood/Membership/Registration/livelihood-membership-registration-form', $data);
        } else {
            $member_name = $this->input->post('member_name');
            $member_sex = $this->input->post('member_sex');
            $member_vulnerability = $this->input->post('member_vulnerability');
            $member_date_of_birth = $this->input->post('member_date_of_birth');
            $member_group_id = $this->input->post('member_group_name');
            $member_role = $this->input->post('member_role');
            $member_parish = $this->input->post('member_parish');
            $member_village = $this->input->post('member_village');
            $member_date_of_joining = $this->input->post('member_date_of_joining');
            $member_telephone = $this->input->post('member_telephone');

            # Generating the ID for the group member
            $membership_id = $this->membership_model->generate_membership_id($member_group_id);

            $field_data = array(
                'NAME' => $member_name,
                'SEX' => $member_sex,
                'VULNERABILITY' => $member_vulnerability,
                'TITLE' => $member_role,
                'DATE_OF_BIRTH' => $member_date_of_birth,
                'GROUPS' => $member_group_id,
                'PARISH' => $member_parish,
                'VILLAGE' => $member_village,
                'DATE_OF_JOINING' => $member_date_of_joining,
                'TELEPHONE' => $member_telephone,
                'MEMBERSHIP_ID' => $membership_id,
            );

//            echo $membership_id;
            $this->membership_model->insert_record($field_data);
            redirect('membership');
        }


    }

    public function edit(){
        $data = array(
            'title' => 'Modify Livelihood Group Member\'s details'
        );
        $record_id = $this->uri->segment(3);

        # Fetching default values for this field
        $data['default_value_array'] = $this->membership_model->fetch_single_row_data_to_edit($record_id);

        #Fetching other important data
        $data['parish_list'] = $this->location_model->fetch_all_parishes();
        $data['village_list'] = $this->location_model->fetch_all_villages();
        $data['vulnerability_list'] = $this->disability_model->fetch();
        $data['grouping_list'] = $this->grouping_model->fetch();
        $data['row_id'] = $record_id;

        # Performing Validation Checks
        $this->form_validation->set_rules('member_name', 'Name of the member', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'People/Livelihood/Membership/Modification/livelihood-membership-registration-edit', $data);
        } else {
            $member_name = $this->input->post('member_name');
            $member_sex = $this->input->post('member_sex');
            $member_vulnerability = $this->input->post('member_vulnerability');
            $member_date_of_birth = $this->input->post('member_date_of_birth');
            $member_group_id = $this->input->post('member_group_name');
            $member_role = $this->input->post('member_role');
            $member_parish = $this->input->post('member_parish');
            $member_village = $this->input->post('member_village');
            $member_date_of_joining = $this->input->post('member_date_of_joining');
            $member_telephone = $this->input->post('member_telephone');

            #Check the group of the member
            $group_change = $this->membership_model->check_if_this_member_changed_group($record_id, $member_group_id);

//            if($group_change){
//
//                # Generating the ID for the group member
//                $membership_id = $this->membership_model->generate_membership_id($member_group_id);
//
////                echo $membership_id;
//
//                if(empty($member_vulnerability)){
//
//                    $field_data = array(
//                        'NAME' => $member_name,
//                        'SEX' => $member_sex,
//                        'TITLE' => $member_role,
//                        'DATE_OF_BIRTH' => $member_date_of_birth,
//                        'GROUPS' => $member_group_id,
//                        'PARISH' => $member_parish,
//                        'VILLAGE' => $member_village,
//                        'DATE_OF_JOINING' => $member_date_of_joining,
//                        'TELEPHONE' => $member_telephone,
//                        'MEMBERSHIP_ID' => $membership_id,
//                    );
//
//                }else{
//
//                    $field_data = array(
//                        'NAME' => $member_name,
//                        'SEX' => $member_sex,
//                        'VULNERABILITY' => $member_vulnerability,
//                        'TITLE' => $member_role,
//                        'DATE_OF_BIRTH' => $member_date_of_birth,
//                        'PARISH' => $member_parish,
//                        'VILLAGE' => $member_village,
//                        'DATE_OF_JOINING' => $member_date_of_joining,
//                        'TELEPHONE' => $member_telephone,
//                    );
//
//                }
//
//            }else{
            if (empty($member_vulnerability)) {
                $field_data = array(
                    'NAME' => $member_name,
                    'SEX' => $member_sex,
                    'TITLE' => $member_role,
                    'DATE_OF_BIRTH' => $member_date_of_birth,
                    'GROUPS' => $member_group_id,
                    'PARISH' => $member_parish,
                    'VILLAGE' => $member_village,
                    'DATE_OF_JOINING' => $member_date_of_joining,
                    'TELEPHONE' => $member_telephone,
                );

            } else {
                $field_data = array(
                    'NAME' => $member_name,
                    'SEX' => $member_sex,
                    'VULNERABILITY' => $member_vulnerability,
                    'GROUPS' => $member_group_id,
                    'TITLE' => $member_role,
                    'DATE_OF_BIRTH' => $member_date_of_birth,
                    'PARISH' => $member_parish,
                    'VILLAGE' => $member_village,
                    'DATE_OF_JOINING' => $member_date_of_joining,
                    'TELEPHONE' => $member_telephone,
                );

            }

//            }

//            echo $membership_id;
            $this->membership_model->update_record($record_id, $field_data);
            redirect('membership');
        }

    }

    public function details()
    {

        if($this->uri->segment(2)){
            $row_id = $this->uri->segment(2);

            $data['title'] = 'Member Details';

            $data['member_info'] =  $this->membership_model->fetch_single_record($row_id);
            $this->template->load('default','People/Livelihood/Membership/Data/member_details',$data);
        }

    }

    public function get_member_name()
    {
        if ($this->input->post('member_id')) {
            $member_id = $this->input->post('member_id');

            echo $this->membership_model->get_member_name_from_db($member_id);
        }
    }

    public function generate_pdf_document(){

        if ($this->uri->segment(3)) {

            $row_id = $this->uri->segment(3);
            $group_info = $this->grouping_model->fetch_single_member_and_print($row_id);

            $html_content = '<h3>About ' . $row_id . '</h3>';
            $html_content .= $group_info;

            $this->pdf->loadHtml($html_content);
            $this->pdf->setPaper('A4', 'landscape');
            $this->pdf->render();

            $this->pdf->stream("" . $row_id . ".pdf", array("Attachment" => 0));
        }

    }

    public function create_support()
    {
        $data = array();
        $data['title'] = 'Support this Entity';
        $group_id = $this->uri->segment(5) . '/' . $this->uri->segment(6) . '/' . $this->uri->segment(7) . '/' . $this->uri->segment(8);

        $data['group_id'] = $group_id;
        $support = $this->input->post('support_item');
        $support_quantities = $this->input->post('support_quantity');
        $date = $this->input->post('date_of_support');
        $group_supported = $this->input->post('group_id');

        # Performing Validation Checks
        $this->form_validation->set_rules('date_of_support', 'Date', 'required');
        $this->form_validation->set_rules('support_item[]', 'Support Items', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'People/Livelihood/Membership/Registration/support-registration-form', $data);
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
                'CATEGORY' => 'Member',
                'SUPPORT' => $supported_with,
            );
            $this->grouping_model->insert_support_record($field_data);

            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function generate_detailed_pdf(){

    }

}
?>