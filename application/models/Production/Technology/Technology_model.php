<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */

require_once(APPPATH . 'models/Header.php');
class Technology_model extends CI_Model{

    function fetch(){
        $this->db->order_by('ID','DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('MISEAN_CARA_BENEFICIARIES_NEW');
    }

    function fetch_single_record($row_id){
        $this->db->where('ID', $row_id);

        $data = $this->db->get('MISEAN_CARA_BENEFICIARIES_NEW');


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

        $output .= '<table class="table table-bordered table-responsive" width="100%" cellspacing="50" cellpadding="50" style="border-collapse: collapse;">';


        $output .= '<tr><td colspan="6">Table 5.0: Number of Misean Cara beneficiaries adopting new technologies in vegetables and crop production</td></tr>';

        foreach ($data->result() as $row) {

            $output .= '<tr>
                                <td colspan="3"><strong>Did you use any improved seed during the year in your production</strong></td>
                                <td colspan="3">' . $row->USED_IMPROVED_SEEDS . '</td>
                            </tr>';

            $output .= '<tr>
                                <td colspan="3"><strong>Did you use underground water in your crop production process during the dry season?</strong></td>
                                <td colspan="3">' . $row->USED_UNDERGROUND_WATER . '</td>
                            </tr>';

            $output .= '<tr>
                                <td colspan="3"><strong>Did you use any pesticides on your crops(vegetables)?</strong></td>
                                <td colspan="3">' . $row->USED_PESTICIDES . '</td>
                            </tr>';

            $output .= '<tr>
                                <td colspan="3"><strong>Use of farm imlements e.g. zero tillage during land opening?</strong></td>
                                <td colspan="3">' . $row->USED_FARM_IMPLEMENTS . '</td>
                            </tr>';

            $output .= '<tr>
                                <td colspan="3"><strong>Have you been using any method of post-harvest handling and processing techniques?</strong></td>
                                <td colspan="3">' . $row->IMPROVED_POST_HARVEST_HANDLING . '</td>
                            </tr>';

            $output .= '<tr>
                                <td colspan="3"><strong>Did you have any opportunity in planting your crops in Rows/Lines as oppsed to random sowing/scattering? </strong></td>
                                <td colspan="3">' . $row->USED_ROW_PLANTING . '</td>
                            </tr>';

            $output .= '<tr>
                                <td colspan="3"><strong>What other techniques did you use apart from the ones discussed here? (Name them)</strong></td>
                                <td colspan="3">' . $row->OTHER_TECHNIQUES_USED . '</td>
                            </tr>';
        }


            $output .= '</table>
                    </div>';

        return $output;
    }

    function insert_record($field_data)
    {
        $this->db->insert('MISEAN_CARA_BENEFICIARIES_NEW', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function fetch_single_row_data_to_edit($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('MISEAN_CARA_BENEFICIARIES_NEW');

        return $data;

    }

    function update_record($record_id, $field_data)
    {
        $this->db->where('ID', $record_id);
        $this->db->set($field_data);
        $this->db->update('MISEAN_CARA_BENEFICIARIES_NEW');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}

?>