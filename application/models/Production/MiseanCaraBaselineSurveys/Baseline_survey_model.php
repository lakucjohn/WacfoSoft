<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */

class Baseline_survey_model extends CI_Model{

    function fetch(){
        $this->db->order_by('ID','DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('MISEAN_CARA_BASELINE_SURVEYS');
    }

    function fetch_single_record($row_id){
        $this->db->where('ID', $row_id);

        $data = $this->db->get('MISEAN_CARA_BASELINE_SURVEYS');


        $output = '<div class="table-responsive">
            <table class="table" width="100%" cellspacing="50" cellpadding="50">';


            foreach($data->result() as $row){
                $output .= '
                
                <tr title="'.$row->GRANTEE.'">
                    <td>
                        <p>
                            <strong>Grantee: </strong>'.$row->GRANTEE.'<br>
                            <strong>Group Name: </strong>'.$row->GROUP_NAME.'<br>
                            <strong>District: </strong>'.$row->DISTRICT.'<br>
                            <strong>County: </strong>'.$row->COUNTY.'<br>
                            <strong>Sub-COunty: </strong>'.$row->SUBCOUNTY.'<br>
                        </p>
                    </td>
                </tr>
                ';
            }


            $output .= '</table>
                    </div>';

        return $output;
    }

    function insert_record($field_data)
    {
        $this->db->insert('MISEAN_CARA_BASELINE_SURVEYS', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function fetch_single_row_data_to_edit($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('MISEAN_CARA_BASELINE_SURVEYS');

        return $data;

    }

    function update_record($record_id, $field_data)
    {
        $this->db->where('ID', $record_id);
        $this->db->set($field_data);
        $this->db->update('MISEAN_CARA_BASELINE_SURVEYS');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}

?>