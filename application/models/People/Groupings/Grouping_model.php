<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */
require_once (APPPATH.'models/Header.php');
require_once(APPPATH . 'models/Trainings/Training_model.php');
require_once(APPPATH . 'models/Settings/Location_model.php');
class Grouping_model extends CI_Model{

    private $training_model;

    public function __construct()
    {
        $this->training_model = new Training_model();
        $this->location = new Location_model();
    }

    function fetch(){
        $this->db->order_by('ID','DESC');
        $this->db->where('STATUS', TRUE);

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
        $this->db->select('GROUP_NAME');
        $this->db->where('GROUP_ID', $group_id);
        $this->db->limit(1);

        $group_name = '';
        $group_data = $this->db->get('GROUPS');

        foreach ($group_data->result() as $row) {
            $group_name .= $row->GROUP_NAME;
        }

        return $group_name;

    }


    function get_livelihood_group_category_from_db($group_id)
    {

        #Obtaining the group type id
        $this->db->select('TYPE');
        $this->db->where('GROUP_ID', $group_id);
        $this->db->limit(1);
        $group_id_data = $this->db->get('GROUPS');

        $group_type_id = '';
        foreach ($group_id_data->result() as $row) {
            $group_type_id .= $row->TYPE;
        }

        $group_type_name = '';

        #Obtaining the group type name
        $this->db->select('CATEGORYNAME');
        $this->db->where('ID', $group_type_id);
        $this->db->limit(1);
        $group_type_data = $this->db->get('LIVELIHOODGROUPCATEGORIES');

        foreach ($group_type_data->result() as $row) {
            $group_type_name .= $row->CATEGORYNAME;
        }


        return $group_type_name;

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

        $output.='<tr style="font-size: 18px; font-weight: bold;">
                    <td>
                        GROUP INFORMATION
                    </td>
                  </tr>';


            foreach($data->result() as $row) {
                $group_id = $row->GROUP_ID;
                $output .= '
                
                <tr title="' . $row->GROUP_NAME . '">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px;" border="0" class="table">
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:40%; text-align: right;">Group ID :</td>
                                <td>' . $row->GROUP_ID . '</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Name of the Group :</td>
                                <td>' . $row->GROUP_NAME . '</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Project Category :</td>
                                <td>' . $this->get_category_name_from_db($row->TYPE) . '</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Location :</td>
                                <td>' . $this->location->get_village_name($row->LOCATION) . '</td>
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
                
                <tr title="' . $row->GROUP_NAME . '">
                    <td>
                    
                        <table id="group_support_table" style="width: 100%; font-size: 18px; border-collapse: collapse;" border="0" class="table table-bordered" id="group_support_records">
                            <tr>
                                <th style="width: 10%">Date of Support</th>
                                <th style="width:30%;">Support Rendered</th>
                                <th style="width: 40%">OUTCOME</th>
                                <th style="width: 10%">Realisation Date</th>
                                <th style="width: 10%">Options</th>
                            </tr>';
            $this->include_javascript();
            if (empty($this->fetch_support_for_this_entity($group_id))) {
                $output .= '<tr style="text-align: center; color: red;">
                                            <td colspan="5">No Support Provided</td>
                                            
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
                
                <tr title="' . $row->GROUP_NAME . '">
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

    function get_category_name_from_db($category_id)
    {
        #Obtaining the group name
        $this->db->select('CATEGORYNAME');
        $this->db->where('ID', $category_id);
        $this->db->limit(1);

        $category_data = $this->db->get('LIVELIHOODGROUPCATEGORIES');

        foreach ($category_data->result() as $row) {
            $category_name = $row->CATEGORYNAME;
        }

        return $category_name;

    }

    function include_javascript()
    {
        $js = '<script type="text/javascript">
            
                function editContent(row_id) {
                    
                    var support_outcome = document.getElementById("support_outcome" + row_id);
                    var realisation_date = document.getElementById("realisation_date" + row_id);
            
                    var support_outcome_data = support_outcome.innerHTML;
                    var realisation_date_data = realisation_date.innerHTML;
            
                    support_outcome.innerHTML = "<input type=\'text\' class=\'form-control\' id=\'support_outcome_Edited" + row_id + "\' value=\'" + support_outcome_data + "\'/>";
                    realisation_date.innerHTML = "<input type=\'date\' class=\'form-control\' id=\'realisation_date_Edited" + row_id + "\' value=\'" + realisation_date_data + "\'/>";
            
                    document.getElementById(\'editRow\' + row_id).style.display = \'none\';
                    document.getElementById(\'saveRow\' + row_id).style.display = \'inline-block\';
            
                }
            
                function saveEditedContent(row_id) {
                    var edited_support_outcome = document.getElementById(\'support_outcome_Edited\' + row_id).value;
                    var edited_realisation_date = document.getElementById(\'realisation_date_Edited\' + row_id).value;
            
                    //Save the new values after editing
            
                    document.getElementById(\'support_outcome\' + row_id).innerHTML = edited_support_outcome;
                    document.getElementById(\'realisation_date\' + row_id).innerHTML = edited_realisation_date;
            
                    document.getElementById(\'editRow\' + row_id).style.display = \'inline-block\';
                    document.getElementById(\'saveRow\' + row_id).style.display = \'none\';
                    
                    
                    // Now post the modules to be registered
                        $.ajax({
                            url: "' . base_url("People/Other/support_outcome/edit_support_outcome_content") . '",
                            data: {row_id: row_id, support_outcome: edited_support_outcome, realisation_date: edited_realisation_date, support_type: "Member" },
                            type: \'post\',
                            success: function (data) {
//                                window.location.replace("<?php echo site_url(\'groupings\'); ?>");
                            }
                        });
            
                }
            
                function deleteRow(rowid) {
                    var row = document.getElementById(rowid);
                    row.parentNode.removeChild(row);
                }

        </script>';

        echo $js;
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
                $output .= '<td id="support_outcome' . $row->ID . '">&nbsp;</td>';
                $output .= '<td id="realisation_date' . $row->ID . '">&nbsp;</td>';
                $output .= '<td id="option-col<?php echo $id; ?>" style="white-space: nowrap;">
                                <button class="btn btn-info btn-sm" type="button" id="editRow' . $row->ID . '"
                                        onclick="editContent(' . $row->ID . ');"><i class="fa fa-edit"> Edit Group Outcome</i>
                                </button>&nbsp;&nbsp;&nbsp;
                                <a class="btn btn-warning btn-sm" href="' . site_url('Production/BaselineSurveys/miseanCaraBaselineSurvey/create_group_support_outcome/' . $row->BENEFICIARY . '/' . $row->TRACK_ID) . '"
                                        <i class="fa fa-edit"> Edit Outcome Per Member</i>
                                </a>
                                &nbsp;&nbsp;<button class="btn btn-success btn-sm" style="display: none;"
                                                             type="button" id="saveRow' . $row->ID . '"
                                                             onclick="saveEditedContent(' . $row->ID . ');"><i
                                            class="fa fa-save"> Save</i></button>&nbsp;&nbsp;<a class="btn btn-danger btn-sm" href="' . base_url('delete_data/delete_row/SUPPORT_RENDERED/' . $row->ID) . '"><i class="fa fa-remove">
                                        </i>Delete</a>
                            </td>';
            }

            $output .= '</tr>';
        }

        return $output;

    }

    function get_support_outcome_for_this_support($support_id)
    {
        $this->db->where('SUPPORT_ID', $support_id);
        $this->db->where('STATUS', TRUE);
        $this->db->order_by('ID', 'DESC');
        $this->db->limit(1);

        $query_results = $this->db->get('SUPPORT_OUTCOMES');

        $output = '';
        foreach ($query_results->result() as $row) {
            $output .= '<td id="support_outcome' . $support_id . '">' . $row->OUTCOME . '</td>';
            $output .= '<td id="realisation_date' . $support_id . '">' . $row->TIMESTAMP . '</td>';
            $output .= '<td id="option-col' . $support_id . '" style="white-space: nowrap;">
                                <button class="btn btn-info btn-sm" type="button" id="editRow' . $support_id . '"
                                        onclick="editContent(' . $support_id . ');"><i class="fa fa-edit"> Edit Outcome</i>
                                </button>&nbsp;&nbsp;<button class="btn btn-success btn-sm" style="display: none;"
                                                             type="button" id="saveRow' . $support_id . '"
                                                             onclick="saveEditedContent(' . $support_id . ');"><i
                                            class="fa fa-save"> Save</i></button>&nbsp;&nbsp;<a class="btn btn-danger btn-sm" href="' . base_url('delete_data/delete_row/SUPPORT_RENDERED/' . $support_id) . '"><i class="fa fa-remove">
                                        </i>Delete</a>
                            </td>';
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
                
                <tr title="' . $row->GROUP_NAME . '">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px;" border="0" class="table">
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:40%; text-align: right;">Group ID :</td>
                                <td>' . $row->GROUP_ID . '</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Name of the Group :</td>
                                <td>' . $row->GROUP_NAME . '</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Project Category :</td>
                                <td>' . $this->get_category_name_from_db($row->TYPE) . '</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Location :</td>
                                <td>' . $this->location->get_village_name($row->LOCATION) . '</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Date of Registration :</td>
                                <td>' . $row->DATE_OF_REGISTRATION . '</td>
                            </tr>
                        
                        </table>
                        
                    </td>';
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
                
                <tr title="' . $row->GROUP_NAME . '">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px; border-collapse: collapse;" border="0" class="table table-bordered">
                            <tr>
                                <th style="width: 10%">Date of Support</th>
                                <th style="width:30%;">Support Rendered</th>
                                <th style="width: 40%">OUTCOME</th>
                                <th style="width: 10%">Realisation Date</th>
                            </tr>';
            if (empty($this->fetch_support_for_this_entity_and_print($group_id))) {
                $output .= '<tr style="text-align: center; color: red;">
                                            <td colspan="4">No Support Provided</td>
                                            
                                        </tr>';
            } else {
                $output .= $this->fetch_support_for_this_entity_and_print($group_id);
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
                
                <tr title="' . $row->GROUP_NAME . '">
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

    function fetch_support_for_this_entity_and_print($entity)
    {
        $this->db->where('BENEFICIARY', $entity);
        $this->db->where('STATUS', TRUE);

        $query_results = $this->db->get('SUPPORT_RENDERED');

        $output = '';
        foreach ($query_results->result() as $row) {
            $output .= '<tr>
                            <td>' . $row->DATE_OF_SUPPORT . '</td>
                            <td>' . $row->SUPPORT . '</td>';
            if (!empty($this->get_support_outcome_for_this_support_and_print($row->ID))) {
                $output .= $this->get_support_outcome_for_this_support_and_print($row->ID);
            } else {
                $output .= '<td id="support_outcome' . $row->ID . '">&nbsp;</td>';
                $output .= '<td id="realisation_date' . $row->ID . '">&nbsp;</td>';
            }

            $output .= '</tr>';
        }

        return $output;

    }

    function get_support_outcome_for_this_support_and_print($support_id)
    {
        $this->db->where('SUPPORT_ID', $support_id);
        $this->db->where('STATUS', TRUE);
        $this->db->order_by('ID', 'DESC');
        $this->db->limit(1);

        $query_results = $this->db->get('SUPPORT_OUTCOMES');

        $output = '';
        foreach ($query_results->result() as $row) {
            $output .= '<td id="support_outcome' . $support_id . '">' . $row->OUTCOME . '</td>';
            $output .= '<td id="realisation_date' . $support_id . '">' . $row->TIMESTAMP . '</td>';
        }

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
        $query = $this->db->order_by('GROUP_NAME', 'ASC');
        $query = $this->db->get('GROUPS');

        $output = '<select name="training_group_attendants" id="training_group_attendants" class="form-control" onchange="display_members(this.value);" required>
                        <option value="">Select a Group</option>
                    ';

        $counter = 0;
        foreach ($query->result() as $row) {
            $output .= '
                        <option value="' . $row->GROUP_ID . '">' . $row->GROUP_NAME . '</option>
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

    function generate_track_id()
    {
        $TrackId_Digits = '0000000011111111222222223333333344444444555555566666666777777778888888899999999AAAAAAAABBBBBBBBCCCCCCCCDDDDDDDDEEEEEEEEFFFFFFFF';
        $TrackId_Shuffled = str_shuffle($TrackId_Digits);
        $TrackId = substr($TrackId_Shuffled, 0, 11);

        return $TrackId;

    }


}

?>
