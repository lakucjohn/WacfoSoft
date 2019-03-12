<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */
require_once (APPPATH.'models/Header.php');
require_once(APPPATH . 'models/Trainings/Training_model.php');
class Grouping_model extends CI_Model{

    private $training_model;

    public function __construct()
    {
        $this->training_model = new Training_model();
    }

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

        #Obtaining the group name
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
        $group_id = '';
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
                $group_id = $row->GROUP_ID;
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
                    <div class="row">
                        
                        <div class="col-md-10">SUPPORT HISTORY</div>
                        <div class="col-md-2"><a class="btn btn-primary" title="Record New Support" href="' . base_url("People/Groupings/groupings/create_support/$group_id") . '"><i class="fa fa-plus-circle"></i> New Support</a> </div>
                        <!--<div class="col-md-2"><a class="btn btn-success" title="Record New Sub-County" data-toggle="modal" data-target="#createSupportOutcomeDialog"><i class="fa fa-plus-circle"></i> New Outcome</a> </div>-->
                    </div>
                    </td>
                  </tr>';


        foreach ($data->result() as $row) {
            $output .= '
                
                <tr title="'.$row->NAME.'">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px; border-collapse: collapse;" border="0" class="table table-bordered" id="group_support_records">
                            <tr>
                                <th style="width: 10%">Date of Support</th>
                                <th style="width:30%;">Support Rendered</th>
                                <th style="width: 40%">OUTCOME</th>
                                <th style="width: 10%">Realisation Date</th>
                            </tr>';
            if (empty($this->fetch_support_for_this_entity($group_id))) {
                $output .= '<tr style="text-align: center; color: red;">
                                            <td colspan="4">No Support Provided</td>
                                            
                                        </tr>';
            } else {
                $output .= $this->fetch_support_for_this_entity($group_id);
            }

            $output .= '</table>
                        
                    </td>
                </tr>
                ';
        }


        $output .= '<tr>
                    <td>
                        <hr>
                    </td>
                  </tr>';

        $output .= '<tr style="font-size: 18px; font-weight: bold;">
                    <td>
                        TRAININGS PROVIDED
                    </td>
                  </tr>';


        foreach ($data->result() as $row) {
            $output .= '
                
                <tr title="' . $row->NAME . '">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px; border-collapse: collapse;" border="0" class="table table-bordered">
                            <tr>
                                <th style="width: 10%">Date of Training</th>
                                <th style="width:30%;">Course / Topic</th>
                                <th style="width: 40%">Trainer</th>
                                <th style="width: 10%">Venue</th>
                            </tr>';
            if (empty($this->training_model->fetch_training_information_for_this_group($group_id))) {
                $output .= '<tr style="text-align: center; color: red;">
                                <td colspan="4">No Training Provided</td>
                                
                            </tr>';
            } else {
                $output .= $this->training_model->fetch_training_information_for_this_group($group_id);
            }

            $output .= '</table>
                        
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

    function fetch_support_for_this_entity($entity)
    {
        $this->db->where('BENEFICIARY', $entity);
        $this->db->where('STATUS', TRUE);

        $query_results = $this->db->get('SUPPORT_RENDERED');

        $output = '';
        foreach ($query_results->result() as $row) {
            $output .= '<tr>
                            <td>' . $row->DATE_OF_SUPPORT . '</td>
                            <td>' . $row->SUPPORT . '</td>';
            if (!empty($this->get_support_outcome_for_this_support($row->ID))) {
                $output .= $this->get_support_outcome_for_this_support($row->ID);
            } else {
                $output .= '<td>&nbsp;</td>';
                $output .= '<td>&nbsp;</td>';
            }
            $output .= '</tr>';
        }

        return $output;

    }

    function get_support_outcome_for_this_support($support_id)
    {
        $this->db->where('SUPPORT_ID', $support_id);
        $this->db->where('STATUS', TRUE);

        $query_results = $this->db->get('SUPPORT_OUTCOMES');

        $output = '';
        foreach ($query_results->result() as $row) {
            $output .= '<td>' . $row->OUTCOME . '</td>
            <td>' . $row->TIMESTAMP . '</td>';
        }

        return $output;

    }

    function fetch_single_group_and_print($row_id)
    {
        $group_id = '';
        $this->db->where('ID', $row_id);

        $data = $this->db->get('GROUPS');


        $output = '<div class="table-responsive">
                    <div class="card w-100">
                    <table width="100%">
                    ';

        $output .= '<tr style="text-align: center">
                    <td>
                        ' . showHeader() . '
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


        foreach ($data->result() as $row) {
            $group_id = $row->GROUP_ID;
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


        $output .= '<tr>
                    <td>
                        &nbsp;
                    </td>
                  </tr>';

        $output .= '<tr style="font-size: 18px; font-weight: bold;">
                    <td>
                    <div class="row">
                        
                        <div class="col-md-10">SUPPORT HISTORY</div>
                    </div>
                    </td>
                  </tr>';


        foreach ($data->result() as $row) {
            $output .= '
                
                <tr title="' . $row->NAME . '">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px; border-collapse: collapse;" border="0" class="table table-bordered">
                            <tr>
                                <th style="width: 10%">Date of Support</th>
                                <th style="width:30%;">Support Rendered</th>
                                <th style="width: 40%">OUTCOME</th>
                                <th style="width: 10%">Realisation Date</th>
                            </tr>';
            if (empty($this->fetch_support_for_this_entity($group_id))) {
                $output .= '<tr style="text-align: center; color: red;">
                                            <td colspan="4">No Support Provided</td>
                                            
                                        </tr>';
            } else {
                $output .= $this->fetch_support_for_this_entity($group_id);
            }

            $output .= '</table>
                        
                    </td>
                </tr>
                ';
        }


        $output .= '<tr>
                    <td>
                        &nbsp;
                    </td>
                  </tr>';

        $output .= '<tr style="font-size: 18px; font-weight: bold;">
                    <td>
                        TRAININGS PROVIDED
                    </td>
                  </tr>';


        foreach ($data->result() as $row) {
            $output .= '
                
                <tr title="' . $row->NAME . '">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px; border-collapse: collapse;" border="0" class="table table-bordered">
                            <tr>
                                <th style="width: 10%">Date of Training</th>
                                <th style="width:30%;">Course / Topic</th>
                                <th style="width: 40%">Trainer</th>
                                <th style="width: 10%">Venue</th>
                            </tr>';
            if (empty($this->training_model->fetch_training_information_for_this_group($group_id))) {
                $output .= '<tr style="text-align: center; color: red;">
                                <td colspan="4">No Training Provided</td>
                                
                            </tr>';
            } else {
                $output .= $this->training_model->fetch_training_information_for_this_group($group_id);
            }

            $output .= '</table>
                        
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

        //Checking if the id has been used
        while (true) {
            $this->db->where('GROUP_ID', $group_id);
            $query_result = $this->db->get('GROUPS');

            if ($query_result->num_rows() > 0) {
                $next_id++;
                $group_id = $prefix_code . '/' . $village_location . '/' . $next_id;
            } else {
                $group_id = $prefix_code . '/' . $village_location . '/' . $next_id;
                break;
            }
        }




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

    function insert_support_record($field_data)
    {
        $this->db->insert('SUPPORT_RENDERED', $field_data);

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

    function get_groups_under_this_category_as_dropdown($group)
    {

        #Set the first group in the list

        $first = $group[0];
        $query = $this->db->where('TYPE', $first);

        #Remove the first group;
        unset($group[0]);

        foreach ($group as $item) {

            $query = $this->db->or_where('TYPE', substr($item, 1));
        }
        $query = $this->db->order_by('NAME', 'ASC');
        $query = $this->db->get('GROUPS');

        $output = '<select name="training_group_attendants" id="training_group_attendants" class="form-control" onchange="display_members(this.value);" required>
                        <option value="">Select a Group</option>
                    ';

        $counter = 0;
        foreach ($query->result() as $row) {
            $output .= '
                        <option value="' . $row->GROUP_ID . '">' . $row->NAME . '</option>
                        ';
        }
        $output .= '</select>';

        return $output;
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