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

        $output .= '<tr><td colspan="6">&nbsp;</td></tr>';
        $output .= '<tr><td colspan="6">Fish Farming </td></tr>';
        $output .= '<tr>
                        <td colspan="2">Individual ID</td>
                        <td>Size of pond</td>
                        <td>No. of Fish harvested</td>
                        <td>Qty yield (Kg) </td>
                        <td>Income (UGX)</td>
                    </tr>';
        foreach ($data->result() as $row) {
            $output .= '<tr>
                        <td colspan="2">' . $row->INDIVIDUAL_ID . '</td>
                        <td>' . $row->SIZE_OF_POND . '</td>
                        <td>' . $row->NUMBER_OF_FISH_HARVESTED . '</td>
                        <td>' . $row->QUANTITY_IN_KG . '</td>
                        <td>' . $row->INCOME . '</td>
                    </tr>';
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