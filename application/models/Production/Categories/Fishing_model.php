<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */
class Fishing_model extends CI_Model
{

    function fetch(){
        $this->db->order_by('ID','DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('FISH_FARMING_RECORDS');
    }

    function fetch_single_record($row_id){
        $this->db->where('ID', $row_id);

        $data = $this->db->get('FISH_FARMING_RECORDS');


        $output = '<div class="table-responsive">
            <table class="table" width="100%" cellspacing="50" cellpadding="50">';


        foreach($data->result() as $row){
            $output .= '
                
                <tr title="'.$row->NAME.'">
                    <td>
                        <p>
                            <strong>Individual: </strong>' . $row->INDIVIDUAL_ID . '<br>
                            <strong>Size of pond: </strong>' . $row->SIZE_OF_POND . '<br>
                            <strong>Number of fish: </strong>' . $row->NUMBER_OF_FISH_HARVESTED . '<br>
                            <strong>Quantity (Kg): </strong>' . $row->QUANTITY_IN_KG . '<br>
                            <strong>Income: </strong>'.$row->INCOME.'<br>
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
        $this->db->insert('FISH_FARMING_RECORDS', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function fetch_single_row_data_to_edit($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('FISH_FARMING_RECORDS');

        return $data;

    }

    function update_record($record_id, $field_data)
    {
        $this->db->where('ID', $record_id);
        $this->db->set($field_data);
        $this->db->update('FISH_FARMING_RECORDS');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}

?>