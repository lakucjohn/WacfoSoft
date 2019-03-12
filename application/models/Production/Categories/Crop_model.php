<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */

require_once(APPPATH . 'models/Header.php');
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
                    <div class="card w-100">
                    <table width="100%">
                    ';

        $output .= '<tr style="text-align: center">
                    <td>
                        ' . showHeader() . '
                    </td>
                  </tr>';

        $output .= '<tr>
                    <td>
                        <hr>
                    </td>
                  </tr>';

        $output .= '<tr style="font-size: 18px; font-weight: bold;">
                    <td>
                        GROUP INFORMATION
                    </td>
                  </tr>';

        $output .= '</table>';

        $output .= '<table class="table table-bordered" width="100%" cellspacing="50" cellpadding="50" style="border-collapse: collapse;">';

        $output .= '<tr>
                        <td>Individual ID</td>
                        <td>Food Stuff</td>
                        <td>Category</td>
                        <td>Acres</td>
                        <td>Yield</td>
                        <td>Quantity Sold</td>
                        <td>Income</td>
                    </tr>';
        foreach ($data->result() as $row) {
            $output .= '<tr>';

            $output .= '<td>' . $row->INDIVIDUAL . '</td>';
            $output .= '<td>' . $row->FOOD_STUFF . '</td>';
            $output .= '<td>' . $row->CATEGORY . '</td>';
            $output .= '<td>' . $row->ACRES_PLANTED . '</td>';
            $output .= '<td>' . $row->YIELD_OBTAINED . '</td>';
            $output .= '<td>' . $row->QUANTITY_SOLD . '</td>';
            $output .= '<td>' . $row->INCOME . '</td>';

            $output .= '</tr>';


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