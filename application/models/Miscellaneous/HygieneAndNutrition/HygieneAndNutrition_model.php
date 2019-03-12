<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */
require_once(APPPATH . 'models/Header.php');
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
                        NUTRITION AND HYGIENE CHECKLIST
                    </td>
                  </tr>';

        $output .= '</table>';

        $output .= '<table class="table table-bordered table-responsive" width="100%" cellspacing="50" cellpadding="50" style="border-collapse: collapse;">';


        foreach ($data->result() as $row) {
            $output .= '
            
            <tr>
                <td>
                    <strong>Farmer\'s ID: </strong>
                </td>
                <td>
                    ' . $row->MEMBERSHIP_ID . '
                </td>
                <td>
                    <strong>Farmer\'s Name: </strong>
                </td>
                <td>
                    ' . $row->MEMBERSHIP_ID . '
                </td>
            </tr>
            <tr>
                <td>
                     <strong>Gender: </strong>
                </td>
                <td>
                     ' . $row->SEX . '<br>
                </td>
                <td>
                    <strong>Group: </strong>
                </td>
                <td>
                    ' . $row->GROUP_NAME . '<br>
                </td>
            </tr>
            <tr>
                <td>
                     <strong>Subcounty: </strong>
                </td>
                <td>
                     ' . $row->SUBCOUNTY . '<br>
                </td>
                <td>
                    <strong>Parish: </strong>
                </td>
                <td>
                    ' . $row->PARISH . '<br>
                </td>
            </tr>
            
            <tr>
                <td colspan="4">&nbsp;</td>
            </tr>
            
            <tr>
                <td colspan="4">DETAILS</td>
            </tr>
            
            <tr>
                <td colspan="4">
                    
                    <table>
                        <tr>
                            <td>PIT LATRINE</td>
                            <td>RUBBISH PIT</td>
                            <td>BATHING SHELTER</td>
                            <td>TIPPY TAP</td>
                            <td>PLATE DRYING_RACK</td>
                        </tr>
                        <tr>
                            <td>' . $row->PIT_LATRINE . '</td>
                            <td>' . $row->RUBBISH_PIT . '</td>
                            <td>' . $row->BATHING_SHELTER . '</td>
                            <td>' . $row->TIPPY_TAP . '</td>
                            <td>' . $row->PLATE_DRYING_RACK . '</td>
                        </tr>
                        <tr>
                            <td colspan="5">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>KITCHEN GARDEN</td>
                            <td>FRUIT TREES</td>
                            <td>NRM PRACTICES</td>
                            <td>MAIZE CRIB</td>
                            <td>DRYING RACK</td>
                        </tr>
                        <tr>
                            <td>' . $row->KITCHEN_GARDEN . '</td>
                            <td>' . $row->FRUIT_TREES . '</td>
                            <td>' . $row->NRM_PRACTICES . '</td>
                            <td>' . $row->MAIZE_CRIB . '</td>
                            <td>' . $row->DRYING_RACK . '</td>
                        </tr>
                        <tr>
                            <td colspan="5">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>TAPAULIN</td>
                            <td>GRANARY</td>
                            <td>PAPYRUS MAT</td>
                            <td>EARTH FLOOR</td>
                        </tr>
                        <tr>
                            <td>' . $row->TAPAULIN . '</td>
                            <td>' . $row->GRANARY . '</td>
                            <td>' . $row->PAPYRUS_MAT . '</td>
                            <td>' . $row->EARTH_FLOOR . '</td>
                        </tr>
                    </table>
                    
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