<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */

class HygieneAndNutrition_model extends CI_Model{

    function fetch(){
        $this->db->order_by('ID','DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('HYGIENE_AND_NUTRITION_CHECKLIST');
    }

    function fetch_single_record($row_id){
        $this->db->where('ID', $row_id);

        $data = $this->db->get('HYGIENE_AND_NUTRITION_CHECKLIST');


        $output = '<div class="table-responsive">
            <table class="table" width="100%" cellspacing="50" cellpadding="50">';


            foreach($data->result() as $row){
                $output .= '
                
                <tr title="'.$row->NAME_OF_FARMER.'">
                    <td>
                        <p>
                            <strong>Farmer\'s Name: </strong>'.$row->NAME_OF_FARMER.'<br>
                            <strong>Gender: </strong>'.$row->SEX.'<br>
                            <strong>Group: </strong>'.$row->GROUP_NAME.'<br>
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
        $this->db->insert('HYGIENE_AND_NUTRITION_CHECKLIST', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function fetch_single_row_data_to_edit($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('HYGIENE_AND_NUTRITION_CHECKLIST');

        return $data;

    }

    function generate_report_with_all_data()
    {

    }

    function get_member_group($row_id)
    {
        $this->db->where('ID', $row_id);

        $query = $this->db->get('HYGIENE_AND_NUTRITION_CHECKLIST');
        $group_id = '';

        foreach ($query->result() as $group) {
            $group_id = $group->GROUP_NAME;
        }

        return $group_id;
    }

    function update_record($record_id, $field_data)
    {
        $this->db->where('ID', $record_id);
        $this->db->set($field_data);
        $this->db->update('HYGIENE_AND_NUTRITION_CHECKLIST');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }


}

?>