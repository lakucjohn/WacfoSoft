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


        $output = '<div class="table-responsive">
            <table class="table" width="100%" cellspacing="50" cellpadding="50">';


            foreach($data->result() as $row){
                $output .= '
                
                <tr title="'.$row->NAME.'">
                    <td>
                        <p>
                            <strong>Staff: </strong>' . $row->STAFF_ID . '<br>
                            <strong>Date of Visit: </strong>' . $row->DATE_OF_VISIT . '<br>
                            <strong>Type of Visit: </strong>' . $row->VISIT_TYPE . '<br>
                            <strong>Track Id: </strong>'.$row->TRACK_ID.'<br>
                            <strong>General Comments: </strong>' . $row->GENERAL_COMMENTS . '<br>
                        </p>
                    </td>
                </tr>
                ';
            }


            $output .= '</table>
                    </div>';

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