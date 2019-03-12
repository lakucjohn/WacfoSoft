<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */

require_once(APPPATH . 'models/Header.php');
class Baseline_survey_model extends CI_Model{

    function fetch(){
        $this->db->order_by('ID','DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('MISEAN_CARA_BASELINE_SURVEYS');
    }

    function fetch_single_record($row_id){
        $this->db->where('ID', $row_id);

        $data = $this->db->get('MISEAN_CARA_BASELINE_SURVEYS');


        $output = '
                <head>
                 <style>
                
                    #innertable td{
                        border-collapse: collapse;
                        border: 1px solid black;
                    }
                    
                    table td{
                        border-collapse: collapse;
                    }
                </style>
                </head>
<div class="table-responsive">
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
        ?>

        <?php

        $output .= '<table class="table" width="100%" style="border-collapse: collapse;">';


        foreach ($data->result() as $row) {
            $output .= '

                <tr title="' . $row->GROUP_NAME . '">
                    <td>
                        <table id="innertable" style="font-size: 12px; width: 100%;">
                            <tr><td colspan="6">Basic Information</td></tr>
                            <tr>
                                <td style="text-align: right;"><strong>Grantee: </strong></td>
                                <td colspan="2">' . $row->GRANTEE . '</td>
                                <td style="text-align: right;"><strong>Group Name: </strong></td>
                                <td colspan="2">' . $row->GROUP_NAME . '</td>
                                </tr>
                            <tr>
                                <td style="text-align: right;"><strong>District: </strong></td>
                                <td>' . $row->DISTRICT . '</td>
                                <td style="text-align: right;"><strong>County: </strong></td>
                                <td>' . $row->COUNTY . '</td>
                                <td style="text-align: right;"><strong>Sub-County: </strong></td>
                                <td>' . $row->SUBCOUNTY . '</td>
                            </tr>';
            $output .= '<tr>
                                        <td colspan="6">&nbsp;</td>
    
                               </tr>';
            $output .= '<tr>
                                        <td colspan="6"><strong>Table 1.0: IR 24% of households able to provide medical treatment to Children 0-18 years in their household </strong></td>

                               </tr>';
            $output .= '<tr>
                                        <td colspan="6"><strong>How many children aged 7-18 years are there in your group?</strong></td>

                               </tr>';

            $output .= '<tr>
                                        <td style="text-align: right;"><strong>Child with Disability: </strong></td>
                                        <td>' . $row->PWD . '</td>
                                        <td style="text-align: right;"><strong>Child Headed Household: </strong></td>
                                        <td>' . $row->CHH . '</td>
                                        <td style="text-align: right;"><strong>Orphan: </strong></td>
                                        <td>' . $row->ORPHAN . '</td>
                                    </tr>';
            //
            $output .= '<tr>
                                        <td style="text-align: right;"><strong>HIV+</strong></td>
                                        <td>' . $row->HIV . '</td>
                                        <td colspan="4">&nbsp;</td>
                                    </tr>';
            $output .= '<tr>
                                        <td colspan="6"><strong>How many children between 7-18 years are attending school in your group?</strong></td>

                               </tr>';

            $output .= '<tr>
                                        <td style="text-align: right;"><strong>Child with Disability: </strong></td>
                                        <td>' . $row->PWD_IN_SCHOOL . '</td>
                                        <td style="text-align: right;"><strong>Child Headed Household: </strong></td>
                                        <td>' . $row->CHH_IN_SCHOOL . '</td>
                                        <td style="text-align: right;"><strong>Orphan: </strong></td>
                                        <td>' . $row->ORPHAN_IN_SCHOOL . '</td>
                                    </tr>';

            $output .= '<tr>
                                        <td style="text-align: right;"><strong>HIV+</strong></td>
                                        <td>' . $row->CHILDREN_WITH_HIV_IN_SCHOOL . '</td>
                                        <td style="text-align: right;"><strong>Normal: </strong></td>
                                        <td>' . $row->NORMAL_IN_SCHOOL . '</td>
                                        <td colspan="2">&nbsp;</td>
                                    </tr>';

            $output .= '<tr>
                                        <td style="text-align: right;" colspan="4"><strong>How many times do you provide meals to your children aged 0-18 years per day?</strong></td>
                                        <td colspan="2">' . $row->HIV . '</td>
                                    </tr>';

            $output .= '<tr>
                                        <td style="text-align: right;" colspan="4"><strong>Were you able to meet the medical expenses for your children (0-18) wherever they got sick?</strong></td>
                                        <td colspan="2">' . $row->HIV . '</td>
                                    </tr>';
            $output .= '<tr>
                                        <td colspan="6">&nbsp;</td>

                               </tr>';
            $output .= '<tr>
                                        <td colspan="6"><strong>Table 2.0: % Increase in target group\'s knowledge on problems affecting vegetable/crop production and challenges on the marketing aspect </strong></td>

                               </tr>';
            $output .= $this->fetch_related_challenges($row->TRACK_ID);
            $output .= $this->fetch_related_vegetable_productivity_increase($row->TRACK_ID);
            $output .= $this->fetch_related_crop_or_vegetable_production($row->TRACK_ID, 'Vegetable', $row->GROUP_NAME);
            $output .= $this->fetch_related_crop_productivity_increase($row->TRACK_ID);
            $output .= $this->fetch_related_crop_or_vegetable_production($row->TRACK_ID, 'Crop', $row->GROUP_NAME);
            $output .= $this->fetch_related_technology($row->TRACK_ID);
            $output .= $this->fetch_related_marketing($row->TRACK_ID);
            $output .= $this->fetch_related_fishing_productivity($row->TRACK_ID);
            $output .= $this->fetch_related_fish_production_record($row->TRACK_ID);

            $output .= '</table>';
            }


        $output .= '</td>';
        $output .= '</tr>';
            $output .= '</table>
                    </div>';

        return $output;
    }

    function fetch_related_challenges($track_id)
    {

        $this->db->order_by('ID', 'DESC');
        $this->db->where('TRACK_ID', $track_id);
        $this->db->where('STATUS', TRUE);
        $result = $this->db->get('PRODUCTION_PROBLEMS');

        $output = '';

        foreach ($result->result() as $row) {


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

        return $output;
    }

    function fetch_related_vegetable_productivity_increase($track_id)
    {

        $this->db->order_by('ID', 'DESC');
        $this->db->where('TRACK_ID', $track_id);
        $this->db->where('STATUS', TRUE);
        $result = $this->db->get('INCREASE_IN_PRODUCTIVITY');

        $output = '<tr><td colspan="6">&nbsp;</td></tr>';

        $output .= '<tr><td colspan="6">Table 3.0: Vegetable Product </td></tr>';

        foreach ($result->result() as $row) {

            $output .= '<tr>
                                <td colspan="3"><strong>% increase in value of sales (UGX)</strong></td>
                                <td colspan="3">' . $row->INCREASE_IN_VEGETABLE_SALES . '</td>
                            </tr>';

            $output .= '<tr>
                                <td colspan="3"><strong>% increase in productivity (Kg/Acre)</strong></td>
                                <td colspan="3">' . $row->INCREASE_IN_VEGETABLE_PRODUCTION . '</td>
                            </tr>';
        }

        return $output;
    }

    function fetch_related_crop_or_vegetable_production($track_id, $category, $group_id)
    {

        $this->db->order_by('ID', 'DESC');
        $this->db->where('TRACK_ID', $track_id);
        $this->db->where('CATEGORY', $category);
        $this->db->where('STATUS', TRUE);
        $result = $this->db->get('VEGETABLE_PRODUCTION_NEW');

        $this->db->order_by('MEMBERSHIP_ID', 'ASC');
        $this->db->where('STATUS', TRUE);
        $this->db->where('GROUPS', $group_id);
        $members_list = $this->db->get('MEMBERSHIP');

        $output = '<tr><td colspan="6">&nbsp;</td></tr>';

        if ($category == 'Crop') {
            $output .= '<tr>
                        <td>Individual ID</td>
                        <td>Vegetable</td>
                        <td>Acres</td>
                        <td>Yield</td>
                        <td>Quantity Sold</td>
                        <td>Income</td>
                    </tr>';


            foreach ($members_list->result() as $member_row) {
                foreach ($result->result() as $row) {
                    if ($member_row->MEMBERSHIP_ID == $row->INDIVIDUAL) {
                        $output .= '<tr>';

                        $output .= '<td>' . $member_row->MEMBERSHIP_ID . '</td>';
                        $output .= '<td>' . $row->FOOD_STUFF . '</td>';
                        $output .= '<td>' . $row->ACRES_PLANTED . '</td>';
                        $output .= '<td>' . $row->YIELD_OBTAINED . '</td>';
                        $output .= '<td>' . $row->QUANTITY_SOLD . '</td>';
                        $output .= '<td>' . $row->INCOME . '</td>';

                        $output .= '</tr>';

                    }
                }
            }
        } else if ($category == 'Vegetable') {
            $output .= '<tr>
                        <td>Individual ID</td>
                        <td>Vegetable</td>
                        <td>Acres</td>
                        <td>Yield</td>
                        <td>Quantity Sold</td>
                        <td>Income</td>
                    </tr>';


            foreach ($members_list->result() as $member_row) {
                foreach ($result->result() as $row) {
                    if ($member_row->MEMBERSHIP_ID == $row->INDIVIDUAL) {
                        $output .= '<tr>';

                        $output .= '<td>' . $member_row->MEMBERSHIP_ID . '</td>';
                        $output .= '<td>' . $row->FOOD_STUFF . '</td>';
                        $output .= '<td>' . $row->ACRES_PLANTED . '</td>';
                        $output .= '<td>' . $row->YIELD_OBTAINED . '</td>';
                        $output .= '<td>' . $row->QUANTITY_SOLD . '</td>';
                        $output .= '<td>' . $row->INCOME . '</td>';

                        $output .= '</tr>';

                    }
                }


            }

        }
        return $output;
    }

    function fetch_related_crop_productivity_increase($track_id)
    {

        $this->db->order_by('ID', 'DESC');
        $this->db->where('TRACK_ID', $track_id);
        $this->db->where('STATUS', TRUE);
        $result = $this->db->get('INCREASE_IN_PRODUCTIVITY');

        $output = '<tr><td colspan="6">&nbsp;</td></tr>';

        $output .= '<tr><td colspan="6">Table 4.0: Crop Product </td></tr>';

        foreach ($result->result() as $row) {

            $output .= '<tr>
                                <td colspan="3"><strong>% increase in value of sales (UGX)</strong></td>
                                <td colspan="3">' . $row->INCREASE_IN_CROP_SALES . '</td>
                            </tr>';

            $output .= '<tr>
                                <td colspan="3"><strong>% increase in productivity (Kg/Acre)</strong></td>
                                <td colspan="3">' . $row->INCREASE_IN_CROP_PRODUCTION . '</td>
                            </tr>';
        }

        return $output;
    }

    function fetch_related_technology($track_id)
    {

        $this->db->order_by('ID', 'DESC');
        $this->db->where('TRACK_ID', $track_id);
        $this->db->where('STATUS', TRUE);
        $result = $this->db->get('MISEAN_CARA_BENEFICIARIES_NEW');

        $output = '<tr><td colspan="6">&nbsp;</td></tr>';

        $output .= '<tr><td colspan="6">Table 5.0: Number of Misean Cara beneficiaries adopting new technologies in vegetables and crop production</td></tr>';

        foreach ($result->result() as $row) {

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

        return $output;
    }

    function fetch_related_marketing($track_id)
    {

        $this->db->order_by('ID', 'DESC');
        $this->db->where('TRACK_ID', $track_id);
        $this->db->where('STATUS', TRUE);
        $result = $this->db->get('CHANGE_IN_KNOWLEDGE_NEWER');

        $output = '<tr><td colspan="6">&nbsp;</td></tr>';

        $output .= '<tr><td colspan="6">Table 6.0: % Change in People\'s knowledge on Marketing and Processing</td></tr>';

        foreach ($result->result() as $row) {

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

        foreach ($result->result() as $row) {

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

        return $output;
    }

    function fetch_related_fishing_productivity($track_id)
    {

        $this->db->order_by('ID', 'DESC');
        $this->db->where('TRACK_ID', $track_id);
        $this->db->where('STATUS', TRUE);
        $result = $this->db->get('INCREASE_IN_PRODUCTIVITY');

        $output = '<tr><td colspan="6">&nbsp;</td></tr>';

        $output .= '<tr><td colspan="6">Table 7.0: Fish Farming</td></tr>';

        foreach ($result->result() as $row) {

            $output .= '<tr>
                                <td colspan="3"><strong>% increase in value of sales (UGX)</strong></td>
                                <td colspan="3">' . $row->INCREASE_IN_FISH_SALES . '</td>
                            </tr>';

            $output .= '<tr>
                                <td colspan="3"><strong>% increase in productivity (Kg/Acre)</strong></td>
                                <td colspan="3">' . $row->INCREASE_IN_FISH_PRODUCTIVITY . '</td>
                            </tr>';
        }
        return $output;
    }

    function fetch_related_fish_production_record($track_id)
    {

        $this->db->order_by('ID', 'DESC');
        $this->db->where('TRACK_ID', $track_id);
        $this->db->where('STATUS', TRUE);
        $result = $this->db->get('FISH_FARMING_RECORDS');

        $output = '<tr><td colspan="6">&nbsp;</td></tr>';
        $output .= '<tr><td colspan="6">Fish Farming </td></tr>';
        $output .= '<tr>
                        <td colspan="2">Individual ID</td>
                        <td>Size of pond</td>
                        <td>No. of Fish harvested</td>
                        <td>Qty yield (Kg) </td>
                        <td>Income (UGX)</td>
                    </tr>';
        foreach ($result->result() as $row) {
            $output .= '<tr>
                        <td colspan="2">' . $row->INDIVIDUAL_ID . '</td>
                        <td>' . $row->SIZE_OF_POND . '</td>
                        <td>' . $row->NUMBER_OF_FISH_HARVESTED . '</td>
                        <td>' . $row->QUANTITY_IN_KG . '</td>
                        <td>' . $row->INCOME . '</td>
                    </tr>';
        }
        return $output;
    }

    function insert_record($field_data)
    {
        $this->db->insert('MISEAN_CARA_BASELINE_SURVEYS', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function fetch_single_row_data_to_edit($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('MISEAN_CARA_BASELINE_SURVEYS');

        return $data;

    }

    function update_record($record_id, $field_data)
    {
        $this->db->where('ID', $record_id);
        $this->db->set($field_data);
        $this->db->update('MISEAN_CARA_BASELINE_SURVEYS');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function generate_track_id()
    {
        $TrackId_Digits = '0000000011111111222222223333333344444444555555566666666777777778888888899999999AAAAAAAABBBBBBBBCCCCCCCCDDDDDDDDEEEEEEEEFFFFFFFF';
        $TrackId_Shuffled = str_shuffle($TrackId_Digits);
        $TrackId = substr($TrackId_Shuffled, 0, 11);

        return $TrackId;

    }


}

?>