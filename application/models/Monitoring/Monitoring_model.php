<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */

class Monitoring_model extends CI_Model{

    function fetch(){
        $this->db->order_by('ID','DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('MONITORING_VISITS');
    }

    function generate_track_id()
    {
        $TrackId_Digits = '0000000011111111222222223333333344444444555555566666666777777778888888899999999';
        $TrackId_Shuffled = str_shuffle($TrackId_Digits);
        $TrackId = substr($TrackId_Shuffled, 0, 7);

        return $TrackId;

    }

    function fetch_single_record($row_id){
        $this->db->where('ID', $row_id);
        $this->db->where('STATUS', TRUE);

        $data = $this->db->get('MONITORING_VISITS');


        $output = '
        <head>
            <style>
                table td{
                    border: 1px solid;
                    border-collapse: collapse;
                }
                #innertable td{
                    border: 1px solid;
                    border-collapse: collapse;
                }
            </style>
        </head>
        <div class="table-responsive">
                    <div class="card w-100">
                    <table width="100%">
                    ';

        $output .= '<tr style="text-align: center">
                    <td>
                        ' . showHeader() . '
                    </td>
                  </tr>';

        $output .= '<tr style="text-align: center">
                    <td>';


        $output .= '<table class="table table-bordered" width="100%" style="border-collapse: collapse;">';

        foreach ($data->result() as $row) {

            $output .= '<tr>';
            $output .= '<td colspan="4">General Information</td>';
            $output .= '</tr>';
            $output .= '<tr>';
            $output .= '<td style="text-align: right"><strong>Staff ID</strong></td>';
            $output .= '<td>' . $row->STAFF_ID . '</td>';
            $output .= '<td style="text-align: right"><strong>Date of Visit</strong></td>';
            $output .= '<td>' . $row->DATE_OF_VISIT . '</td>';
            $output .= '</tr>';

            $output .= '<tr>';
            $output .= '<td style="text-align: right"><strong>Type of Visit</strong></td>';
            $output .= '<td colspan="3">' . $row->VISIT_TYPE . '</td>';
            $output .= '</tr>';

            $output .= '<tr>';
            $output .= '<td style="text-align: right"><strong>General Comments</strong></td>';
            $output .= '<td colspan="3">' . $row->GENERAL_COMMENTS . '</td>';
            $output .= '</tr>';

            $output .= '<tr>';
            $output .= '<td colspan="4">&nbsp;</td>';
            $output .= '</tr>';

            $output .= '<tr>';
            $output .= '<td colspan="4">DETAILS OF THE VISIT</td>';
            $output .= '</tr>';

            if ($row->VISIT_TYPE == 'Savings Tracking') {
                $output .= $this->fetch_related_savings_tracking_visit($row->TRACK_ID);
            } else if ($row->VISIT_TYPE == 'Field Support') {
                $output .= $this->fetch_related_field_support_visit($row->TRACK_ID);

            }

        }
        $output .= '</table>';

        $output .= '</td>
                  </tr>';

        $output .= '</table>
                    </div>';

        return $output;
    }

    function fetch_related_savings_tracking_visit($track_id)
    {
        $this->db->where('TRACK_ID', $track_id);
        $resultset = $this->db->get('SAVINGS_TRAKING_VISIT');
        $output = '
        <head>
            <style>
                #innertable td, th{
                    border: 1px solid;
                    border-collapse: collapse;
                }
            </style>
        </head>';
        $output .= '<tr>';
        $output .= '<td colspan="4">';
        $output .= '<table id="innertable" class="table table-bordered" style="border-collapse: collapse;">';
        $output .= '<tr>';
        $output .= '<th>GROUP ID</th>';
        $output .= '<th>Total savings per each group</th>';
        $output .= '<th>Amount Loan out</th>';
        $output .= '<th>Total amount paid back</th>';
        $output .= '<th>Interest paid per group</th>';
        $output .= '<th>Issues Identified</th>';
        $output .= '<th>Action taken</th>';
        $output .= '<th>Total amount</th>';
        $output .= '</tr>';

        foreach ($resultset->result() as $row) {
            $output .= '<tr>';
            $output .= '<td>' . $row->GROUP_ID . '</td>';
            $output .= '<td>' . $row->TOTAL_SAVINGS . '</td>';
            $output .= '<td>' . $row->AMOUNT_LOAN_OUT . '</td>';
            $output .= '<td>' . $row->TOTAL_AMOUNT_PAID_BACK . '</td>';
            $output .= '<td>' . $row->INTEREST_PAID . '</td>';
            $output .= '<td>' . $row->ISSUES_IDENTIFIED . '</td>';
            $output .= '<td>' . $row->ACTION_TAKEN . '</td>';
            $output .= '<td>' . $row->TOTAL_AMOUNT . '</td>';
            $output .= '</tr>';
        }
        $output .= '</table>';
        $output .= '</td>';
        $output .= '</tr>';

        return $output;

    }

    function fetch_related_field_support_visit($track_id)
    {
        $this->db->where('TRACK_ID', $track_id);
        $resultset = $this->db->get('FIELD_SUPPORT_MONITORING_VISITS');
        $output = '
        <head>
            <style>
                #innertable td, th{
                    border: 1px solid;
                    border-collapse: collapse;
                }
            </style>
        </head>';
        $output .= '<tr>';
        $output .= '<td colspan="4">';
        $output .= '<table id="innertable" class="table table-bordered" style="border-collapse: collapse;">';
        $output .= '<tr>';
        $output .= '<th>GROUP ID</th>';
        $output .= '<th>Activities Carried Out</th>';
        $output .= '<th>Issues Identified</th>';
        $output .= '<th>Action taken</th>';
        $output .= '</tr>';

        foreach ($resultset->result() as $row) {
            $output .= '<tr>';
            $output .= '<td>' . $row->GROUP_ID . '</td>';
            $output .= '<td>' . $row->ACTIVITIES . '</td>';
            $output .= '<td>' . $row->ISSUES_IDENTIFIED . '</td>';
            $output .= '<td>' . $row->ACTION_TAKEN . '</td>';
            $output .= '</tr>';
        }
        $output .= '</table>';
        $output .= '</td>';
        $output .= '</tr>';

        return $output;

    }

    function insert_monitoring_visit_record($field_data)
    {
        $this->db->insert('MONITORING_VISITS', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function insert_field_support_visit_record($field_data)
    {
        $this->db->insert('FIELD_SUPPORT_MONITORING_VISITS', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function insert_savings_tracking_visit_record($field_data)
    {
        $this->db->insert('SAVINGS_TRAKING_VISIT', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function fetch_single_row_data_to_edit($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('MONITORING_VISITS');

        return $data;

    }

    function fetch_single_row_data_to_edit_saving($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('SAVINGS_TRAKING_VISIT');

        return $data;

    }

    function fetch_single_row_data_to_edit_support($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('FIELD_SUPPORT_MONITORING_VISITS');

        return $data;

    }

    function fetch_total_field_support_visits()
    {
        $this->db->where('VISIT_TYPE', 'Field Support');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('MONITORING_VISITS')->num_rows();
    }

    function fetch_savings_tracking_visits()
    {
        $this->db->where('VISIT_TYPE', 'Savings Tracking');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('MONITORING_VISITS')->num_rows();
    }

    function update_record($record_id, $field_data)
    {
        $this->db->where('ID', $record_id);
        $this->db->set($field_data);
        $this->db->update('MONITORING_VISITS');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }



}

?>