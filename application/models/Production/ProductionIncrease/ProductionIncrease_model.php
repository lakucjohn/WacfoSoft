<?php

/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */
require_once(APPPATH . 'models/Header.php');
class ProductionIncrease_model extends CI_Model
{

    function fetch()
    {
        $this->db->order_by('ID', 'DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('INCREASE_IN_PRODUCTIVITY');
    }

    function fetch_single_record($row_id)
    {
        $this->db->where('ID', $row_id);

        $data = $this->db->get('INCREASE_IN_PRODUCTIVITY');


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

        $output .= '<tr><td colspan="6">Table 3.0: Vegetable Product </td></tr>';

        foreach ($data->result() as $row) {

            $output .= '<tr>
                                <td colspan="3"><strong>% increase in value of sales (UGX)</strong></td>
                                <td colspan="3">' . $row->INCREASE_IN_VEGETABLE_SALES . '</td>
                            </tr>';

            $output .= '<tr>
                                <td colspan="3"><strong>% increase in productivity (Kg/Acre)</strong></td>
                                <td colspan="3">' . $row->INCREASE_IN_VEGETABLE_PRODUCTION . '</td>
                            </tr>';
        }

        $output .= '<tr><td colspan="6">&nbsp;</td></tr>';

        $output .= '<tr><td colspan="6">Table 4.0: Crop Product </td></tr>';

        foreach ($data->result() as $row) {

            $output .= '<tr>
                                <td colspan="3"><strong>% increase in value of sales (UGX)</strong></td>
                                <td colspan="3">' . $row->INCREASE_IN_CROP_SALES . '</td>
                            </tr>';

            $output .= '<tr>
                                <td colspan="3"><strong>% increase in productivity (Kg/Acre)</strong></td>
                                <td colspan="3">' . $row->INCREASE_IN_CROP_PRODUCTION . '</td>
                            </tr>';
        }

        $output .= '<tr><td colspan="6">&nbsp;</td></tr>';

        $output .= '<tr><td colspan="6">Table 7.0: Fish Farming</td></tr>';

        foreach ($data->result() as $row) {

            $output .= '<tr>
                                <td colspan="3"><strong>% increase in value of sales (UGX)</strong></td>
                                <td colspan="3">' . $row->INCREASE_IN_FISH_SALES . '</td>
                            </tr>';

            $output .= '<tr>
                                <td colspan="3"><strong>% increase in productivity (Kg/Acre)</strong></td>
                                <td colspan="3">' . $row->INCREASE_IN_FISH_PRODUCTIVITY . '</td>
                            </tr>';
        }


        $output .= '</table>
                    </div>';

        return $output;
    }

    function insert_record($field_data)
    {
        $this->db->insert('INCREASE_IN_PRODUCTIVITY', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function fetch_single_row_data_to_edit($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('INCREASE_IN_PRODUCTIVITY');

        return $data;

    }

    function update_record($record_id, $field_data)
    {
        $this->db->where('ID', $record_id);
        $this->db->set($field_data);
        $this->db->update('INCREASE_IN_PRODUCTIVITY');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}

?>