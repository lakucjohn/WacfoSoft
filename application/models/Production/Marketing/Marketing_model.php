<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */

require_once(APPPATH . 'models/Header.php');
class Marketing_model extends CI_Model{

    function fetch(){
        $this->db->order_by('ID','DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('CHANGE_IN_KNOWLEDGE_NEWER');
    }

    function fetch_single_record($row_id){
        $this->db->where('ID', $row_id);

        $data = $this->db->get('CHANGE_IN_KNOWLEDGE_NEWER');


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

        $output .= '<tr><td colspan="6">Table 6.0: % Change in People\'s knowledge on Marketing and Processing</td></tr>';

        foreach ($data->result() as $row) {

            $output .= '<tr>
                                <td colspan="2"><strong>Do you sell all your vegetable products?</strong></td>
                                <td colspan="4">' . $row->SELLS_ALL_VEGETABLES . '</td>
                            </tr>';

            $output .= '<tr>
                                <td colspan="2"><strong>In what forms do you market the product?</strong></td>
                                <td>Place 1</td>
                                <td>Place 2</td>
                                <td colspan="2">Place 3</td>
                            </tr>';

            $output .= '<tr>
                                <td colspan="2">&nbsp;</td>
                                <td>' . $row->VEGETABLE_MARKET_PLACE_1 . '</td>
                                <td>' . $row->VEGETABLE_MARKET_PLACE_2 . '</td>
                                <td colspan="2">' . $row->VEGETABLE_MARKET_PLACE_3 . '</td>
                            </tr>';
        }

        $output .= '<tr><td colspan="6">&nbsp;</td></tr>';

        foreach ($data->result() as $row) {

            $output .= '<tr>
                                <td colspan="2"><strong>Do you sell all your crop products?</strong></td>
                                <td colspan="4">' . $row->SELLS_ALL_CROPS . '</td>
                            </tr>';

            $output .= '<tr>
                                <td colspan="2"><strong>In what forms do you market the product?</strong></td>
                                <td>Place 1</td>
                                <td>Place 2</td>
                                <td colspan="2">Place 3</td>
                            </tr>';

            $output .= '<tr>
                                <td colspan="2">&nbsp;</td>
                                <td>' . $row->CROP_MARKET_PLACE_1 . '</td>
                                <td>' . $row->CROP_MARKET_PLACE_2 . '</td>
                                <td colspan="2">' . $row->CROP_MARKET_PLACE_3 . '</td>
                            </tr>';
        }


            $output .= '</table>
                    </div>';

        return $output;
    }

    function insert_record($field_data)
    {
        $this->db->insert('CHANGE_IN_KNOWLEDGE_NEWER', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function fetch_single_row_data_to_edit($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('CHANGE_IN_KNOWLEDGE_NEWER');

        return $data;

    }

    function update_record($record_id, $field_data)
    {
        $this->db->where('ID', $record_id);
        $this->db->set($field_data);
        $this->db->update('CHANGE_IN_KNOWLEDGE_NEWER');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}

?>