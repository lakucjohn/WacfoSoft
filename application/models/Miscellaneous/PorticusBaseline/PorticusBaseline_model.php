<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */

class PorticusBaseline_model extends CI_Model{

    function fetch(){
        $this->db->order_by('ID','DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('PORTICUS_BASELINE_ASSESSMENTS');
    }

    function fetch_single_record($row_id){
        $this->db->where('ID', $row_id);

        $data = $this->db->get('PORTICUS_BASELINE_ASSESSMENTS');


        $output = '<div class="table-responsive">
            <table class="table" width="100%" cellspacing="50" cellpadding="50">';


            foreach($data->result() as $row){
                $output .= '
                
                <tr title="'.$row->NAME_OF_RESPONDENT.'">
                    <td>
                        <p>
                            <strong>Nameof the Respondent: </strong>'.$row->NAME_OF_RESPONDENT.'<br>
                            <strong>Age: </strong>'.$row->AGE.'<br>
                            <strong>Village: </strong>'.$row->VILLAGE.'<br>
                            <strong>Gender: </strong>'.$row->GENDER.'<br>
                            <strong>Name of the Vulnerable: </strong>'.$row->NAME_OF_VULNERABLE.'<br>
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
        $this->db->insert('PORTICUS_BASELINE_ASSESSMENTS', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function fetch_single_row_data_to_edit($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('PORTICUS_BASELINE_ASSESSMENTS');

        return $data;

    }

    function update_record($record_id, $field_data)
    {
        $this->db->where('ID', $record_id);
        $this->db->set($field_data);
        $this->db->update('PORTICUS_BASELINE_ASSESSMENTS');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function generate_report_with_all_data()
    {

    }



}

?>