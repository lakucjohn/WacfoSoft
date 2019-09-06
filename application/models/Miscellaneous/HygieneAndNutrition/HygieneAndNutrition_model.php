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
                            ';
            if ($row->PIT_LATRINE == 1) {
                $output .= '<td>Absent</td>';
            } else if ($row->PIT_LATRINE == 2) {
                $output .= '<td>New and in use</td>';
            } else if ($row->PIT_LATRINE == 3) {
                $output .= '<td>Present and in use</td>';
            } else if ($row->PIT_LATRINE == 4) {
                $output .= '<td>Present but not in use</td>';
            } else if ($row->PIT_LATRINE == 5) {
                $output .= '<td>Renovated and in use</td>';
            } else if ($row->PIT_LATRINE == 6) {
                $output .= '<td>Renovated but not in use</td>';
            } else {
                $output .= '<td>N/A</td>';
            }


            if ($row->RUBBISH_PIT == 1) {
                $output .= '<td>Absent</td>';
            } else if ($row->RUBBISH_PIT == 2) {
                $output .= '<td>New and in use</td>';
            } else if ($row->RUBBISH_PIT == 3) {
                $output .= '<td>Present and in use</td>';
            } else if ($row->RUBBISH_PIT == 4) {
                $output .= '<td>Present but not in use</td>';
            } else if ($row->RUBBISH_PIT == 5) {
                $output .= '<td>Renovated and in use</td>';
            } else if ($row->RUBBISH_PIT == 6) {
                $output .= '<td>Renovated but not in use</td>';
            } else {
                $output .= '<td>N/A</td>';
            }


            if ($row->BATHING_SHELTER == 1) {
                $output .= '<td>Absent</td>';
            } else if ($row->BATHING_SHELTER == 2) {
                $output .= '<td>New and in use</td>';
            } else if ($row->BATHING_SHELTER == 3) {
                $output .= '<td>Present and in use</td>';
            } else if ($row->BATHING_SHELTER == 4) {
                $output .= '<td>Present but not in use</td>';
            } else if ($row->BATHING_SHELTER == 5) {
                $output .= '<td>Renovated and in use</td>';
            } else if ($row->BATHING_SHELTER == 6) {
                $output .= '<td>Renovated but not in use</td>';
            } else {
                $output .= '<td>N/A</td>';
            }


            if ($row->TIPPY_TAP == 1) {
                $output .= '<td>Absent</td>';
            } else if ($row->TIPPY_TAP == 2) {
                $output .= '<td>New and in use</td>';
            } else if ($row->TIPPY_TAP == 3) {
                $output .= '<td>Present and in use</td>';
            } else if ($row->TIPPY_TAP == 4) {
                $output .= '<td>Present but not in use</td>';
            } else if ($row->TIPPY_TAP == 5) {
                $output .= '<td>Renovated and in use</td>';
            } else if ($row->TIPPY_TAP == 6) {
                $output .= '<td>Renovated but not in use</td>';
            } else {
                $output .= '<td>N/A</td>';
            }


            if ($row->PLATE_DRYING_RACK == 1) {
                $output .= '<td>Absent</td>';
            } else if ($row->PLATE_DRYING_RACK == 2) {
                $output .= '<td>New and in use</td>';
            } else if ($row->PLATE_DRYING_RACK == 3) {
                $output .= '<td>Present and in use</td>';
            } else if ($row->PLATE_DRYING_RACK == 4) {
                $output .= '<td>Present but not in use</td>';
            } else if ($row->PLATE_DRYING_RACK == 5) {
                $output .= '<td>Renovated and in use</td>';
            } else if ($row->PLATE_DRYING_RACK == 6) {
                $output .= '<td>Renovated but not in use</td>';
            } else {
                $output .= '<td>N/A</td>';
            }

            $output .= '</tr>
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
                        <tr>';

//                            if($row->KITCHEN_GARDEN=="1"){
//                                $output .= '<td>Absent</td>';
//                            }else if($row->KITCHEN_GARDEN=="RB"){
//                                $output .= '<td>Raise Bed</td>';
//                            }else if($row->KITCHEN_GARDEN=="DD"){
//                                $output .= '<td>Double dug</td>';
//                            }else if($row->KITCHEN_GARDEN=="SB"){
//                                $output .= '<td>Sunken Bed</td>';
//                            }else if($row->KITCHEN_GARDEN=="DM"){
//                                $output .= '<td>Ditch Method</td>';
//                            }else if($row->KITCHEN_GARDEN=="M"){
//                                $output .= '<td>Mandella</td>';
//                            }else{
//                                $output .= '<td>N/A</td>';
//                            }

            if ($row->KITCHEN_GARDEN == "1") {
                $output .= '<td>Absent</td>';
            } else {
                $kitchen_garden = explode(',', $row->KITCHEN_GARDEN);
                $selected_kitchen_garden_set = array();

                if (count($kitchen_garden) == 0) {
                    $output .= '<td>N/A</td>';
                } else {
                    if (in_array('RB', $kitchen_garden)) {
                        array_push($selected_kitchen_garden_set, 'Raise Bed');
                    }
                    if (in_array('DD', $kitchen_garden)) {
                        array_push($selected_kitchen_garden_set, 'Double dug');
                    }
                    if (in_array('SB', $kitchen_garden)) {
                        array_push($selected_kitchen_garden_set, 'Sunken Bed');
                    }
                    if (in_array('DM', $kitchen_garden)) {
                        array_push($selected_kitchen_garden_set, 'Ditch Method');
                    }
                    if (in_array('M', $kitchen_garden)) {
                        array_push($selected_kitchen_garden_set, 'Mandella');
                    }

                    #$output .= implode(',',$selected_kitchen_garden_set);
                    $output .= '<td>' . implode(',', $selected_kitchen_garden_set) . '</td>';
                }
            }

            if ($row->FRUIT_TREES == 1) {
                $output .= '<td>Absent</td>';
            } else if ($row->FRUIT_TREES == 2) {
                $output .= '<td>New and in use</td>';
            } else if ($row->FRUIT_TREES == 3) {
                $output .= '<td>Present and in use</td>';
            } else if ($row->FRUIT_TREES == 4) {
                $output .= '<td>Present but not in use</td>';
            } else if ($row->FRUIT_TREES == 5) {
                $output .= '<td>Renovated and in use</td>';
            } else if ($row->FRUIT_TREES == 6) {
                $output .= '<td>Renovated but not in use</td>';
            } else {
                $output .= '<td>N/A</td>';
            }

            if ($row->NRM_PRACTICES == 1) {
                $output .= '<td>Absent</td>';
            } else if ($row->NRM_PRACTICES == 2) {
                $output .= '<td>New and in use</td>';
            } else if ($row->NRM_PRACTICES == 3) {
                $output .= '<td>Present and in use</td>';
            } else if ($row->NRM_PRACTICES == 4) {
                $output .= '<td>Present but not in use</td>';
            } else if ($row->NRM_PRACTICES == 5) {
                $output .= '<td>Renovated and in use</td>';
            } else if ($row->NRM_PRACTICES == 6) {
                $output .= '<td>Renovated but not in use</td>';
            } else {
                $output .= '<td>N/A</td>';
            }

            if ($row->MAIZE_CRIB == 1) {
                $output .= '<td>Absent</td>';
            } else if ($row->MAIZE_CRIB == 2) {
                $output .= '<td>New and in use</td>';
            } else if ($row->MAIZE_CRIB == 3) {
                $output .= '<td>Present and in use</td>';
            } else if ($row->MAIZE_CRIB == 4) {
                $output .= '<td>Present but not in use</td>';
            } else if ($row->MAIZE_CRIB == 5) {
                $output .= '<td>Renovated and in use</td>';
            } else if ($row->MAIZE_CRIB == 6) {
                $output .= '<td>Renovated but not in use</td>';
            } else {
                $output .= '<td>N/A</td>';
            }

            if ($row->DRYING_RACK == 1) {
                $output .= '<td>Absent</td>';
            } else if ($row->DRYING_RACK == 2) {
                $output .= '<td>New and in use</td>';
            } else if ($row->DRYING_RACK == 3) {
                $output .= '<td>Present and in use</td>';
            } else if ($row->DRYING_RACK == 4) {
                $output .= '<td>Present but not in use</td>';
            } else if ($row->DRYING_RACK == 5) {
                $output .= '<td>Renovated and in use</td>';
            } else if ($row->DRYING_RACK == 6) {
                $output .= '<td>Renovated but not in use</td>';
            } else {
                $output .= '<td>N/A</td>';
            }

//                            <td>' . $row->KITCHEN_GARDEN . '</td>
//                            <td>' . $row->FRUIT_TREES . '</td>
//                            <td>' . $row->NRM_PRACTICES . '</td>
//                            <td>' . $row->MAIZE_CRIB . '</td>
//                            <td>' . $row->DRYING_RACK . '</td>
            $output .= '</tr>
                        <tr>
                            <td colspan="5">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>TAPAULIN</td>
                            <td>GRANARY</td>
                            <td>PAPYRUS MAT</td>
                            <td>EARTH FLOOR</td>
                            <td>ENERGY SAVING STOVE</td>
                        </tr>
                        <tr>';

            if ($row->TAPAULIN == 1) {
                $output .= '<td>Absent</td>';
            } else if ($row->TAPAULIN == 2) {
                $output .= '<td>New and in use</td>';
            } else if ($row->TAPAULIN == 3) {
                $output .= '<td>Present and in use</td>';
            } else if ($row->TAPAULIN == 4) {
                $output .= '<td>Present but not in use</td>';
            } else if ($row->TAPAULIN == 5) {
                $output .= '<td>Renovated and in use</td>';
            } else if ($row->TAPAULIN == 6) {
                $output .= '<td>Renovated but not in use</td>';
            } else {
                $output .= '<td>N/A</td>';
            }

            if ($row->GRANARY == 1) {
                $output .= '<td>Absent</td>';
            } else if ($row->GRANARY == 2) {
                $output .= '<td>New and in use</td>';
            } else if ($row->GRANARY == 3) {
                $output .= '<td>Present and in use</td>';
            } else if ($row->GRANARY == 4) {
                $output .= '<td>Present but not in use</td>';
            } else if ($row->GRANARY == 5) {
                $output .= '<td>Renovated and in use</td>';
            } else if ($row->GRANARY == 6) {
                $output .= '<td>Renovated but not in use</td>';
            } else {
                $output .= '<td>N/A</td>';
            }

            if ($row->PAPYRUS_MAT == 1) {
                $output .= '<td>Absent</td>';
            } else if ($row->PAPYRUS_MAT == 2) {
                $output .= '<td>New and in use</td>';
            } else if ($row->PAPYRUS_MAT == 3) {
                $output .= '<td>Present and in use</td>';
            } else if ($row->PAPYRUS_MAT == 4) {
                $output .= '<td>Present but not in use</td>';
            } else if ($row->PAPYRUS_MAT == 5) {
                $output .= '<td>Renovated and in use</td>';
            } else if ($row->PAPYRUS_MAT == 6) {
                $output .= '<td>Renovated but not in use</td>';
            } else {
                $output .= '<td>N/A</td>';
            }

            if ($row->EARTH_FLOOR == 1) {
                $output .= '<td>Absent</td>';
            } else if ($row->EARTH_FLOOR == 2) {
                $output .= '<td>New and in use</td>';
            } else if ($row->EARTH_FLOOR == 3) {
                $output .= '<td>Present and in use</td>';
            } else if ($row->EARTH_FLOOR == 4) {
                $output .= '<td>Present but not in use</td>';
            } else if ($row->EARTH_FLOOR == 5) {
                $output .= '<td>Renovated and in use</td>';
            } else if ($row->EARTH_FLOOR == 6) {
                $output .= '<td>Renovated but not in use</td>';
            } else {
                $output .= '<td>N/A</td>';
            }

            if ($row->ENERGY_SAVING_STOVE == 1) {
                $output .= '<td>Absent</td>';
            } else if ($row->ENERGY_SAVING_STOVE == 2) {
                $output .= '<td>New and in use</td>';
            } else if ($row->ENERGY_SAVING_STOVE == 3) {
                $output .= '<td>Present and in use</td>';
            } else if ($row->ENERGY_SAVING_STOVE == 4) {
                $output .= '<td>Present but not in use</td>';
            } else if ($row->ENERGY_SAVING_STOVE == 5) {
                $output .= '<td>Renovated and in use</td>';
            } else if ($row->ENERGY_SAVING_STOVE == 6) {
                $output .= '<td>Renovated but not in use</td>';
            } else {
                $output .= '<td>N/A</td>';
            }
//                            <td>' . $row->TAPAULIN . '</td>
//                            <td>' . $row->GRANARY . '</td>
//                            <td>' . $row->PAPYRUS_MAT . '</td>
//                            <td>' . $row->EARTH_FLOOR . '</td>
//                            <td>' . $row->ENERGY_SAVING_STOVE . '</td>
            $output .= '</tr>
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