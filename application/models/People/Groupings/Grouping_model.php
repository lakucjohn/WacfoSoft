<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */
require_once (APPPATH.'models/Header.php');
class Grouping_model extends CI_Model{

    function fetch(){
        $this->db->order_by('ID','DESC');

        return $this->db->get('GROUPS');
    }


    function fetch_total()
    {
        $this->db->order_by('ID', 'DESC');

        return $this->db->get('GROUPS')->num_rows();
    }

    function fetch_all_categories()
    {
        $this->db->order_by('ID', 'DESC');

        return $this->db->get('LIVELIHOODGROUPCATEGORIES');

    }

    function get_group_name_from_db($group_id)
    {

        #Obtaining the child name
        $this->db->select('NAME');
        $this->db->where('GROUP_ID', $group_id);
        $this->db->limit(1);

        $child_data = $this->db->get('GROUPS');

        foreach ($child_data->result() as $row) {
            $group_name = $row->NAME;
        }

        return $group_name;

    }

    function fetch_single_record($row_id){
        $this->db->where('ID', $row_id);

        $data = $this->db->get('GROUPS');


        $output = '<div class="table-responsive">
                    <div class="card w-100">
                    <table width="100%">
                    ';

        $output.='<tr style="text-align: center">
                    <td>
                        '.showHeader().'
                    </td>
                  </tr>';

        $output.='<tr>
                    <td>
                        <hr>
                    </td>
                  </tr>';

        $output.='<tr style="font-size: 18px; font-weight: bold;">
                    <td>
                        GROUP INFORMATION
                    </td>
                  </tr>';


            foreach($data->result() as $row) {
                $output .= '
                
                <tr title="' . $row->NAME . '">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px;" border="0" class="table">
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:40%; text-align: right;">Group ID :</td>
                                <td>' . $row->GROUP_ID . '</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Name of the Group :</td>
                                <td>' . $row->NAME . '</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Project Category :</td>
                                <td>' . $row->TYPE . '</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Location :</td>
                                <td>' . $row->LOCATION . '</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Date of Registration :</td>
                                <td>' . $row->DATE_OF_REGISTRATION . '</td>
                            </tr>
                        
                        </table>
                        
                    </td>
                </tr>';
            }


        $output.='<tr>
                    <td>
                        <hr>
                    </td>
                  </tr>';

        $output.='<tr style="font-size: 18px; font-weight: bold;">
                    <td>
                        SUPPORT HISTORY
                    </td>
                  </tr>';


            foreach($data->result() as $row){
                $output .= '
                
                <tr title="'.$row->NAME.'">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px;" border="0" class="table">
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:40%; text-align: right;">Group ID :</td>
                                <td>'.$row->GROUP_ID.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Name of the Group :</td>
                                <td>'.$row->NAME.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Project Category :</td>
                                <td>'.$row->TYPE.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Location :</td>
                                <td>'.$row->LOCATION.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Date of Registration :</td>
                                <td>'.$row->DATE_OF_REGISTRATION.'</td>
                            </tr>
                        
                        </table>
                        
                    </td>
                </tr>
                ';
            }


        $output.='<tr>
                    <td>
                        <hr>
                    </td>
                  </tr>';

        $output.='<tr style="font-size: 18px; font-weight: bold;">
                    <td>
                        TRAININGS PROVIDED
                    </td>
                  </tr>';


        foreach($data->result() as $row){
            $output .= '
                
                <tr title="'.$row->NAME.'">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px;" border="0" class="table">
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:40%; text-align: right;">Group ID :</td>
                                <td>'.$row->GROUP_ID.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Name of the Group :</td>
                                <td>'.$row->NAME.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Project Category :</td>
                                <td>'.$row->TYPE.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Location :</td>
                                <td>'.$row->LOCATION.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Date of Registration :</td>
                                <td>'.$row->DATE_OF_REGISTRATION.'</td>
                            </tr>
                        
                        </table>
                        
                    </td>
                </tr>
                ';
        }


            $output .= '
                            </table>
                        </div>
                    </div>';

        return $output;
    }

    function fetch_all_active_ids()
    {
//        $this->db->select('ID','GROUP_ID','LOCATION');
        $this->db->where('STATUS', TRUE);
        $this->db->order_by('GROUP_ID', 'ASC');

        return $this->db->get('GROUPS');
    }

    function generate_group_id($village_location)
    {

        #Obtaining the prefix code for the location
        $this->db->select('PREFIX_CODE');
        $this->db->where('ID', $village_location);
        $this->db->limit(1);

        $prefix_data = $this->db->get('VILLAGE');

        foreach ($prefix_data->result() as $row) {
            $prefix_code = $row->PREFIX_CODE;
        }

        #Obtaining the next ID to allocate to the group basing on the location
        $this->db->where('LOCATION', $village_location);
        $this->db->limit(1);

        $groups_query = $this->db->get('GROUPS');

        $next_id = $groups_query->num_rows() + 1;

        $group_id = $prefix_code . '/' . $village_location . '/' . $next_id;

        return $group_id;

    }

    function insert_record($field_data)
    {
        $this->db->insert('GROUPS', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function fetch_single_row_data_to_edit($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('GROUPS');

        return $data;

    }

    function get_groups_under_this_category($group)
    {

        #Set the first group in the list

        $first = $group[0];
        $query = $this->db->where('TYPE', $first);

        #Remove the first group;
        unset($group[0]);

        foreach ($group as $item) {

            $query = $this->db->or_where('TYPE', substr($item, 1));
        }
        $query = $this->db->get('GROUPS');

        return $query;
    }

    function update_record($record_id, $field_data)
    {
        $this->db->where('ID', $record_id);
        $this->db->set($field_data);
        $this->db->update('GROUPS');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}

?>