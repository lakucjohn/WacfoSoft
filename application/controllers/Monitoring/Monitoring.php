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
        $this->load->model('People/Groupings/grouping_model');
        $this->load->model('People/Staff/staff_model');

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

        # Fetching important data
        $data['group_list'] = $this->grouping_model->fetch();
        $data['staff_list'] = $this->staff_model->fetch();

        # Generating a track id
        $track_id = $this->monitoring_model->generate_track_id();

        # Performing Validation Checks
        $this->form_validation->set_rules('monitoring_staff', 'Staff', 'required');
        $this->form_validation->set_rules('monitoring_date', 'Date', 'required');

        if (!empty($this->input->post('group_id_1'))) {
            $this->form_validation->set_rules('activities_1', 'Group 1: Activities', 'required');
            #$this->form_validation->set_rules('issues_identified_1', 'Group 1: Issues Identified', 'required');
            #$this->form_validation->set_rules('action_taken_1', 'Group 1: Action Taken', 'required');
        }

        if (!empty($this->input->post('group_id_1'))) {
            $this->form_validation->set_rules('activities_1', 'Group 1: Activities', 'required');
            #$this->form_validation->set_rules('issues_identified_1', 'Group 1: Issues Identified', 'required');
            #$this->form_validation->set_rules('action_taken_1', 'Group 1: Action Taken', 'required');
        }

        if (!empty($this->input->post('group_id_2'))) {
            $this->form_validation->set_rules('activities_2', 'Group 2: Activities', 'required');
            #$this->form_validation->set_rules('issues_identified_2', 'Group 2: Issues Identified', 'required');
            #$this->form_validation->set_rules('action_taken_2', 'Group 2: Action Taken', 'required');
        }

        if (!empty($this->input->post('group_id_3'))) {
            $this->form_validation->set_rules('activities_3', 'Group 3: Activities', 'required');
            #$this->form_validation->set_rules('issues_identified_3', 'Group 3: Issues Identified', 'required');
            #$this->form_validation->set_rules('action_taken_3', 'Group 3: Action Taken', 'required');
        }

        if (!empty($this->input->post('group_id_4'))) {
            $this->form_validation->set_rules('activities_4', 'Group 4: Activities', 'required');
            #$this->form_validation->set_rules('issues_identified_4', 'Group 4: Issues Identified', 'required');
            #$this->form_validation->set_rules('action_taken_4', 'Group 4: Action Taken', 'required');
        }

        if (!empty($this->input->post('group_id_5'))) {
            $this->form_validation->set_rules('activities_5', 'Group 5: Activities', 'required');
            #$this->form_validation->set_rules('issues_identified_5', 'Group 5: Issues Identified', 'required');
            #$this->form_validation->set_rules('action_taken_5', 'Group 5: Action Taken', 'required');
        }

        if (!empty($this->input->post('group_id_6'))) {
            $this->form_validation->set_rules('activities_6', 'Group 6: Activities', 'required');
            #$this->form_validation->set_rules('issues_identified_6', 'Group 6: Issues Identified', 'required');
            #$this->form_validation->set_rules('action_taken_6', 'Group 6: Action Taken', 'required');
        }

        if (!empty($this->input->post('group_id_7'))) {
            $this->form_validation->set_rules('activities_7', 'Group 7: Activities', 'required');
            #$this->form_validation->set_rules('issues_identified_7', 'Group 7: Issues Identified', 'required');
            #$this->form_validation->set_rules('action_taken_7', 'Group 7: Action Taken', 'required');
        }

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'Monitoring/Registration/field-support-visits-form', $data);
        } else {

            # Saving the general information about the monitoring visit
            $general_comments = $this->input->post('general_comments');
            $monitoring_date = $this->input->post('monitoring_date');
            $monitoring_staff = $this->input->post('monitoring_staff');

            $monitoring_data = array(
                'STAFF_ID' => $monitoring_staff,
                'DATE_OF_VISIT' => $monitoring_date,
                'VISIT_TYPE' => 'Field Support',
                'GENERAL_COMMENTS' => $general_comments,
                'TRACK_ID' => $track_id,
            );
            $this->monitoring_model->insert_monitoring_visit_record($monitoring_data);

            # Saving the table values
            if (!empty($this->input->post('group_id_1'))) {
                $group_id_1 = $this->input->post('group_id_1');
                $activities_1 = $this->input->post('activities_1');
                $issues_identified_1 = $this->input->post('issues_identified_1');
                $action_taken_1 = $this->input->post('action_taken_1');

                $field_data = array(
                    'GROUP_ID' => $group_id_1,
                    'ACTIVITIES' => $activities_1,
                    'ISSUES_IDENTIFIED' => $issues_identified_1,
                    'ACTION_TAKEN' => $action_taken_1,
                    'TRACK_ID' => $track_id,
                );
                $this->monitoring_model->insert_field_support_visit_record($field_data);

            }
            if (!empty($this->input->post('group_id_2'))) {
                $group_id_2 = $this->input->post('group_id_2');
                $activities_2 = $this->input->post('activities_2');
                $issues_identified_2 = $this->input->post('issues_identified_2');
                $action_taken_2 = $this->input->post('action_taken_2');

                $field_data = array(
                    'GROUP_ID' => $group_id_2,
                    'ACTIVITIES' => $activities_2,
                    'ISSUES_IDENTIFIED' => $issues_identified_2,
                    'ACTION_TAKEN' => $action_taken_2,
                    'TRACK_ID' => $track_id,
                );
                $this->monitoring_model->insert_field_support_visit_record($field_data);
            }
            if (!empty($this->input->post('group_id_3'))) {
                $group_id_3 = $this->input->post('group_id_3');
                $activities_3 = $this->input->post('activities_3');
                $issues_identified_3 = $this->input->post('issues_identified_3');
                $action_taken_3 = $this->input->post('action_taken_3');

                $field_data = array(
                    'GROUP_ID' => $group_id_3,
                    'ACTIVITIES' => $activities_3,
                    'ISSUES_IDENTIFIED' => $issues_identified_3,
                    'ACTION_TAKEN' => $action_taken_3,
                    'TRACK_ID' => $track_id,
                );
                $this->monitoring_model->insert_field_support_visit_record($field_data);
            }
            if (!empty($this->input->post('group_id_4'))) {
                $group_id_4 = $this->input->post('group_id_4');
                $activities_4 = $this->input->post('activities_4');
                $issues_identified_4 = $this->input->post('issues_identified_4');
                $action_taken_4 = $this->input->post('action_taken_4');

                $field_data = array(
                    'GROUP_ID' => $group_id_4,
                    'ACTIVITIES' => $activities_4,
                    'ISSUES_IDENTIFIED' => $issues_identified_4,
                    'ACTION_TAKEN' => $action_taken_4,
                    'TRACK_ID' => $track_id,
                );
                $this->monitoring_model->insert_field_support_visit_record($field_data);
            }
            if (!empty($this->input->post('group_id_5'))) {
                $group_id_5 = $this->input->post('group_id_5');
                $activities_5 = $this->input->post('activities_5');
                $issues_identified_5 = $this->input->post('issues_identified_5');
                $action_taken_5 = $this->input->post('action_taken_5');

                $field_data = array(
                    'GROUP_ID' => $group_id_5,
                    'ACTIVITIES' => $activities_5,
                    'ISSUES_IDENTIFIED' => $issues_identified_5,
                    'ACTION_TAKEN' => $action_taken_5,
                    'TRACK_ID' => $track_id,
                );
                $this->monitoring_model->insert_field_support_visit_record($field_data);
            }
            if (!empty($this->input->post('group_id_6'))) {
                $group_id_6 = $this->input->post('group_id_6');
                $activities_6 = $this->input->post('activities_6');
                $issues_identified_6 = $this->input->post('issues_identified_6');
                $action_taken_6 = $this->input->post('action_taken_6');

                $field_data = array(
                    'GROUP_ID' => $group_id_6,
                    'ACTIVITIES' => $activities_6,
                    'ISSUES_IDENTIFIED' => $issues_identified_6,
                    'ACTION_TAKEN' => $action_taken_6,
                    'TRACK_ID' => $track_id,
                );
            }
            if (!empty($this->input->post('group_id_7'))) {
                $group_id_7 = $this->input->post('group_id_7');
                $activities_7 = $this->input->post('activities_7');
                $issues_identified_7 = $this->input->post('issues_identified_7');
                $action_taken_7 = $this->input->post('action_taken_7');

                $field_data = array(
                    'GROUP_ID' => $group_id_7,
                    'ACTIVITIES' => $activities_7,
                    'ISSUES_IDENTIFIED' => $issues_identified_7,
                    'ACTION_TAKEN' => $action_taken_7,
                    'TRACK_ID' => $track_id,
                );
                $this->monitoring_model->insert_field_support_visit_record($field_data);
            }

            redirect('monitoring');
        }



    }

    public function create_group_savings_tracking_record(){
        $data = array(

            'title' => 'Record Tracking Information of group savings',

        );

        # Fetching important data
        $data['group_list'] = $this->grouping_model->fetch();
        $data['staff_list'] = $this->staff_model->fetch();

        # Generating a track id
        $track_id = $this->monitoring_model->generate_track_id();

        # Performing Validation Checks
        $this->form_validation->set_rules('monitoring_staff', 'Staff', 'required');
        $this->form_validation->set_rules('monitoring_date', 'Date', 'required');

        if (!empty($this->input->post('group_id_1'))) {
            $this->form_validation->set_rules('total_savings_1', 'Group 1: Total Savings', 'required');
            $this->form_validation->set_rules('amount_loan_out_1', ' Group 1: Amount Loan Out', 'required');
            $this->form_validation->set_rules('total_amount_paid_back_1', 'Group 1: Total Amount Paid Back', 'required');
            $this->form_validation->set_rules('interest_paid_per_group_1', 'Group 1: Interest per group', 'required');
            $this->form_validation->set_rules('issues_identified_1', 'Group 1: Issues Identified', 'required');
            $this->form_validation->set_rules('action_taken_1', ' Group1: Action Taken', 'required');
        }
        if (!empty($this->input->post('group_id_2'))) {
            $this->form_validation->set_rules('total_savings_2', 'Group 2: Total Savings', 'required');
            $this->form_validation->set_rules('amount_loan_out_2', ' Group 2: Amount Loan Out', 'required');
            $this->form_validation->set_rules('total_amount_paid_back_2', 'Group 2: Total Amount Paid Back', 'required');
            $this->form_validation->set_rules('interest_paid_per_group_2', 'Group 2: Interest per group', 'required');
            $this->form_validation->set_rules('issues_identified_2', 'Group 2: Issues Identified', 'required');
            $this->form_validation->set_rules('action_taken_2', ' Group 2: Action Taken', 'required');
        }
        if (!empty($this->input->post('group_id_3'))) {
            $this->form_validation->set_rules('total_savings_3', 'Group 3: Total Savings', 'required');
            $this->form_validation->set_rules('amount_loan_out_3', ' Group 3: Amount Loan Out', 'required');
            $this->form_validation->set_rules('total_amount_paid_back_3', 'Group 3: Total Amount Paid Back', 'required');
            $this->form_validation->set_rules('interest_paid_per_group_3', 'Group 3: Interest per group', 'required');
            $this->form_validation->set_rules('issues_identified_3', 'Group 3: Issues Identified', 'required');
            $this->form_validation->set_rules('action_taken_3', ' Group 3: Action Taken', 'required');
        }
        if (!empty($this->input->post('group_id_4'))) {
            $this->form_validation->set_rules('total_savings_4', 'Group 4: Total Savings', 'required');
            $this->form_validation->set_rules('amount_loan_out_4', ' Group 4: Amount Loan Out', 'required');
            $this->form_validation->set_rules('total_amount_paid_back_4', 'Group 4: Total Amount Paid Back', 'required');
            $this->form_validation->set_rules('interest_paid_per_group_4', 'Group 4: Interest per group', 'required');
            $this->form_validation->set_rules('issues_identified_4', 'Group 4: Issues Identified', 'required');
            $this->form_validation->set_rules('action_taken_4', ' Group 4: Action Taken', 'required');
        }
        if (!empty($this->input->post('group_id_5'))) {
            $this->form_validation->set_rules('total_savings_5', 'Group 5: Total Savings', 'required');
            $this->form_validation->set_rules('amount_loan_out_5', ' Group 5: Amount Loan Out', 'required');
            $this->form_validation->set_rules('total_amount_paid_back_5', 'Group 5: Total Amount Paid Back', 'required');
            $this->form_validation->set_rules('interest_paid_per_group_5', 'Group 5: Interest per group', 'required');
            $this->form_validation->set_rules('issues_identified_5', 'Group 5: Issues Identified', 'required');
            $this->form_validation->set_rules('action_taken_5', ' Group 5: Action Taken', 'required');
        }


        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'Monitoring/Registration/savings-information-tracking-form', $data);
        } else {

            # Saving the general information about the monitoring visit
            $general_comments = $this->input->post('general_comments');
            $monitoring_date = $this->input->post('monitoring_date');
            $monitoring_staff = $this->input->post('monitoring_staff');

            $monitoring_data = array(
                'STAFF_ID' => $monitoring_staff,
                'DATE_OF_VISIT' => $monitoring_date,
                'VISIT_TYPE' => 'Savings Tracking',
                'GENERAL_COMMENTS' => $general_comments,
                'TRACK_ID' => $track_id,
            );
            $this->monitoring_model->insert_monitoring_visit_record($monitoring_data);

            # Savin the input from the table
            if (!empty($this->input->post('group_id_1'))) {
                $group_id_1 = $this->input->post('group_id_1');
                $total_savings_1 = $this->input->post('total_savings_1');
                $amount_loan_out_1 = $this->input->post('amount_loan_out_1');
                $total_amount_paid_back_1 = $this->input->post('total_amount_paid_back_1');
                $interest_paid_per_group_1 = $this->input->post('interest_paid_per_group_1');
                $issues_identified_1 = $this->input->post('issues_identified_1');
                $action_taken_1 = $this->input->post('action_taken_1');
                $total_amount_1 = $this->input->post('total_amount_1');

                $field_data = array(
                    'GROUP_ID' => $group_id_1,
                    'TOTAL_SAVINGS' => $total_savings_1,
                    'AMOUNT_LOAN_OUT' => $amount_loan_out_1,
                    'TOTAL_AMOUNT_PAID_BACK' => $total_amount_paid_back_1,
                    'INTEREST_PAID' => $interest_paid_per_group_1,
                    'ISSUES_IDENTIFIED' => $issues_identified_1,
                    'ACTION_TAKEN' => $action_taken_1,
                    'TOTAL_AMOUNT' => $total_amount_1,
                    'TRACK_ID' => $track_id,
                );
                $this->monitoring_model->insert_savings_tracking_visit_record($field_data);

            }

            if (!empty($this->input->post('group_id_2'))) {
                $group_id_2 = $this->input->post('group_id_2');
                $total_savings_2 = $this->input->post('total_savings_2');
                $amount_loan_out_2 = $this->input->post('amount_loan_out_2');
                $total_amount_paid_back_2 = $this->input->post('total_amount_paid_back_2');
                $interest_paid_per_group_2 = $this->input->post('interest_paid_per_group_2');
                $issues_identified_2 = $this->input->post('issues_identified_2');
                $action_taken_2 = $this->input->post('action_taken_2');
                $total_amount_2 = $this->input->post('total_amount_2');

                $field_data = array(
                    'GROUP_ID' => $group_id_2,
                    'TOTAL_SAVINGS' => $total_savings_2,
                    'AMOUNT_LOAN_OUT' => $amount_loan_out_2,
                    'TOTAL_AMOUNT_PAID_BACK' => $total_amount_paid_back_2,
                    'INTEREST_PAID' => $interest_paid_per_group_2,
                    'ISSUES_IDENTIFIED' => $issues_identified_2,
                    'ACTION_TAKEN' => $action_taken_2,
                    'TOTAL_AMOUNT' => $total_amount_2,
                    'TRACK_ID' => $track_id,
                );
                $this->monitoring_model->insert_savings_tracking_visit_record($field_data);
            }

            if (!empty($this->input->post('group_id_3'))) {
                $group_id_3 = $this->input->post('group_id_3');
                $total_savings_3 = $this->input->post('total_savings_3');
                $amount_loan_out_3 = $this->input->post('amount_loan_out_3');
                $total_amount_paid_back_3 = $this->input->post('total_amount_paid_back_3');
                $interest_paid_per_group_3 = $this->input->post('interest_paid_per_group_3');
                $issues_identified_3 = $this->input->post('issues_identified_3');
                $action_taken_3 = $this->input->post('action_taken_3');
                $total_amount_3 = $this->input->post('total_amount_3');

                $field_data = array(
                    'GROUP_ID' => $group_id_3,
                    'TOTAL_SAVINGS' => $total_savings_3,
                    'AMOUNT_LOAN_OUT' => $amount_loan_out_3,
                    'TOTAL_AMOUNT_PAID_BACK' => $total_amount_paid_back_3,
                    'INTEREST_PAID' => $interest_paid_per_group_3,
                    'ISSUES_IDENTIFIED' => $issues_identified_3,
                    'ACTION_TAKEN' => $action_taken_3,
                    'TOTAL_AMOUNT' => $total_amount_3,
                    'TRACK_ID' => $track_id,
                );
                $this->monitoring_model->insert_savings_tracking_visit_record($field_data);

            }

            if (!empty($this->input->post('group_id_4'))) {
                $group_id_4 = $this->input->post('group_id_4');
                $total_savings_4 = $this->input->post('total_savings_4');
                $amount_loan_out_4 = $this->input->post('amount_loan_out_4');
                $total_amount_paid_back_4 = $this->input->post('total_amount_paid_back_4');
                $interest_paid_per_group_4 = $this->input->post('interest_paid_per_group_4');
                $issues_identified_4 = $this->input->post('issues_identified_4');
                $action_taken_4 = $this->input->post('action_taken_4');
                $total_amount_4 = $this->input->post('total_amount_4');

                $field_data = array(
                    'GROUP_ID' => $group_id_4,
                    'TOTAL_SAVINGS' => $total_savings_4,
                    'AMOUNT_LOAN_OUT' => $amount_loan_out_4,
                    'TOTAL_AMOUNT_PAID_BACK' => $total_amount_paid_back_4,
                    'INTEREST_PAID' => $interest_paid_per_group_4,
                    'ISSUES_IDENTIFIED' => $issues_identified_4,
                    'ACTION_TAKEN' => $action_taken_4,
                    'TOTAL_AMOUNT' => $total_amount_4,
                    'TRACK_ID' => $track_id,
                );
                $this->monitoring_model->insert_savings_tracking_visit_record($field_data);

            }

            if (!empty($this->input->post('group_id_5'))) {
                $group_id_5 = $this->input->post('group_id_5');
                $total_savings_5 = $this->input->post('total_savings_5');
                $amount_loan_out_5 = $this->input->post('amount_loan_out_5');
                $total_amount_paid_back_5 = $this->input->post('total_amount_paid_back_5');
                $interest_paid_per_group_5 = $this->input->post('interest_paid_per_group_5');
                $issues_identified_5 = $this->input->post('issues_identified_5');
                $action_taken_5 = $this->input->post('action_taken_5');
                $total_amount_5 = $this->input->post('total_amount_5');

                $field_data = array(
                    'GROUP_ID' => $group_id_5,
                    'TOTAL_SAVINGS' => $total_savings_5,
                    'AMOUNT_LOAN_OUT' => $amount_loan_out_5,
                    'TOTAL_AMOUNT_PAID_BACK' => $total_amount_paid_back_5,
                    'INTEREST_PAID' => $interest_paid_per_group_5,
                    'ISSUES_IDENTIFIED' => $issues_identified_5,
                    'ACTION_TAKEN' => $action_taken_5,
                    'TOTAL_AMOUNT' => $total_amount_5,
                    'TRACK_ID' => $track_id,
                );
                $this->monitoring_model->insert_savings_tracking_visit_record($field_data);

            }

            redirect('monitoring');

        }




    }

    public function edit(){
        $record_id = $this->uri->segment(3);

        #echo $record_id;
        $data['title'] = 'Edit Project Monitoring Information';

        $data['row_id'] = $record_id;

        $data['default_value_array'] = $this->monitoring_model->fetch_single_row_data_to_edit($record_id);

        # Performing validation checks
        $this->form_validation->set_rules('general_comments', 'General Comments', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'Monitoring/Modification/edit-monitoring-info', $data);
        } else {
            $general_comments = $this->input->post('general_comments');

            $field_data = array(
                'GENERAL_COMMENTS' => $general_comments,
            );

            $this->monitoring_model->update_record($record_id, $field_data);

            redirect('monitoring');

        }

    }

    public function details()
    {

        if($this->uri->segment(2)){
            $row_id = $this->uri->segment(2);

            $data['title'] = 'Monitoring Details';

            $data['monitoring_info'] = $this->monitoring_model->fetch_single_record($row_id);
            $this->template->load('default', 'Monitoring/Data/monitoring_details', $data);
        }
    }

    public function generate_pdf_document(){

        if ($this->uri->segment(3)) {

            $row_id = $this->uri->segment(3);
            $page_data = $this->monitoring_model->fetch_single_record($row_id);

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

}
?>