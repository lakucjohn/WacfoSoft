<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */

class Crop_model extends CI_Model{

    function fetch(){
        $this->db->order_by('ID','DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('VEGETABLE_PRODUCTION_NEW');
    }

    function fetch_single_record($row_id){
        $this->db->where('ID', $row_id);

        $data = $this->db->get('VEGETABLE_PRODUCTION_NEW');


        $output = '<div class="table-responsive">
            <table class="table" width="100%" cellspacing="50" cellpadding="50">';


            foreach($data->result() as $row){
                $output .= '
                
                <tr title="'.$row->NAME.'">
                    <td>
                        <p>
                            <strong>Individual: </strong>'.$row->INDIVIDUAL.'<br>
                            <strong>Food Stuff: </strong>' . $row->FOOD_STUFF . '<br>
                            <strong>Category: </strong>' . $row->CATEGORY . '<br>
                            <strong>Income: </strong>'.$row->INCOME.'<br>
                            <strong>Acres Planted: </strong>' . $row->ACRES_PLANTED . '<br>
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
        $this->db->insert('VEGETABLE_PRODUCTION_NEW', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function fetch_single_row_data_to_edit($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('VEGETABLE_PRODUCTION_NEW');

        return $data;

    }

    function update_record($record_id, $field_data)
    {
        $this->db->where('ID', $record_id);
        $this->db->set($field_data);
        $this->db->update('VEGETABLE_PRODUCTION_NEW');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}

?>