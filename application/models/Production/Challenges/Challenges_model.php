<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */

require_once(APPPATH . 'models/Header.php');
class Challenges_model extends CI_Model{

    function fetch(){
        $this->db->order_by('ID','DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('PRODUCTION_PROBLEMS');
    }

    function fetch_single_record($row_id){
        $this->db->where('ID', $row_id);

        $data = $this->db->get('PRODUCTION_PROBLEMS');


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


        foreach ($data->result() as $row) {


            $output .= '<tr>
                                <td colspan="3"><strong>Mention problems affecting vegetable production</strong></td>
                                <td colspan="3"><strong> Mention the challenges faced in marketing vegetable products</strong></td>
                            </tr>';

            $output .= '<tr>
                                <td colspan="3">' . $row->VEGETABLE_PRODUCTION_PROBLEMS . '</td>
                                <td colspan="3">' . $row->VEGETABLE_MARKETING_PROBLEMS . '</td>
                            </tr>';

            $output .= '<tr>
                                <td colspan="3"><strong>Mention problems affecting crop production</strong></td>
                                <td colspan="3"><strong>Problems hindering marketing crop products</strong></td>
                            </tr>';

            $output .= '<tr>
                                <td colspan="3">' . $row->CROP_PRODUCTION_PROBLEMS . '</td>
                                <td colspan="3">' . $row->CROP_MARKETING_PROBLEMS . '</td>
                            </tr>';
        }


            $output .= '</table>
                    </div>';

        return $output;
    }

    function insert_record($field_data)
    {
        $this->db->insert('PRODUCTION_PROBLEMS', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function fetch_single_row_data_to_edit($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('PRODUCTION_PROBLEMS');

        return $data;

    }

    function update_record($record_id, $field_data)
    {
        $this->db->where('ID', $record_id);
        $this->db->set($field_data);
        $this->db->update('PRODUCTION_PROBLEMS');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}

?>