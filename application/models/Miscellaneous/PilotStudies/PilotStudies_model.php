<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */

class PilotStudies_model extends CI_Model{

    function fetch(){
        $this->db->order_by('ID','DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('PILOT_STUDIES');
    }

    function fetch_single_record($row_id){
        $this->db->where('ID', $row_id);

        $data = $this->db->get('PILOT_STUDIES');


        $output = '<div class="table-responsive">
            <table class="table" width="100%" cellspacing="50" cellpadding="50">';


            foreach($data->result() as $row){
                $output .= '
                
                <tr title="'.$row->INTERVIEWER.'">
                    <td>
                        <p>
                            <strong>Name of Interviewer: </strong>'.$row->INTERVIEWER.'<br>
                            <strong>Date of Interview: </strong>'.$row->DATE_OF_INTERVIEW.'<br>
                            <strong>Location: </strong>'.$row->LOCATION.'<br>
                            <strong>Name of Respondent: </strong>'.$row->RESPONDENT.'<br>
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
        $this->db->insert('PILOT_STUDIES', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function fetch_single_row_data_to_edit($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('PILOT_STUDIES');

        return $data;

    }

    function generate_report_with_all_data()
    {

    }

    function update_record($record_id, $field_data)
    {
        $this->db->where('ID', $record_id);
        $this->db->set($field_data);
        $this->db->update('PILOT_STUDIES');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}

?>