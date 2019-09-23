
<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */
require_once (APPPATH.'models/Header.php');
require_once(APPPATH . 'models/Trainings/Training_model.php');
class Membership_model extends CI_Model{

    private $training_model;

    public function __construct()
    {
        $this->training_model = new Training_model();
    }

    function fetch(){
        $this->db->order_by('MEMBERSHIP_ID', 'ASC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('MEMBERSHIP');
    }

    function fetch_total()
    {
        $this->db->order_by('ID', 'DESC');

        return $this->db->get('MEMBERSHIP')->num_rows();
    }

    function generate_membership_id($group_id)
    {
        $this->db->where('GROUPS', $group_id);
        $members_query = $this->db->get('MEMBERSHIP');
        $next_id = $members_query->num_rows() + 1;

        $membership_id = $group_id . '/' . $next_id;

        return $membership_id;
    }

    function fetch_single_record($row_id){
        $this->db->where('ID', $row_id);

        $data = $this->db->get('MEMBERSHIP');


        $member_id = '';
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
                        PERSONAL DETAILS
                    </td>
                  </tr>';


        foreach($data->result() as $row) {
            $member_id = $row->MEMBERSHIP_ID;
            $output .= '
                
                <tr title="' . $row->NAME . '">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px;" border="0" class="table">
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Membership Id :</td>
                                <td style="width: 75%">'.$row->MEMBERSHIP_ID.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Member\'s Name :</td>
                                <td style="width: 75%">'.$row->NAME.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Gender :</td>
                                <td style="width: 75%">'.$row->SEX.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Group :</td>
                                <td style="width: 75%">' . $this->get_group_name_from_db($row->GROUPS) . '</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Date of birth :</td>
                                <td style="width: 75%">'.$row->DATE_OF_BIRTH.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Joining Date :</td>
                                <td style="width: 75%">'.$row->DATE_OF_JOINING.'</td>
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
                        
                        <div class="col-md-8">SUPPORT HISTORY</div>
                        <div class="col-md-2"><!--<a class="btn btn-primary">New Support</a>-->
                            <a class="btn btn-primary" title="Record New Support" href="' . base_url("People/Membership/membership/create_support/$member_id") . '"><i class="fa fa-plus-circle"></i> New Support</a>
                        </div>
                        <!--<div class="col-md-2"><a class="btn btn-success">New Outcome</a> </div>-->
                    </div>
                    </td>
                  </tr>';


        foreach ($data->result() as $row) {
            $output .= '
                
                <tr title="' . $row->NAME . '">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px; border-collapse: collapse;" border="0" class="table table-bordered" id="member_support_records">
                            <tr>
                                <th style="width: 10%">Date of Support</th>
                                <th style="width:30%;">Support Rendered</th>
                                <th style="width: 40%">OUTCOME</th>
                                <th style="width: 10%">Realisation Date</th>
                                <th style="width: 10%">Options</th>
                            </tr>';
            $this->include_javascript();
            if (empty($this->fetch_support_for_this_entity($member_id))) {
                $output .= '<tr style="text-align: center; color: red;">
                                            <td colspan="5">No Support Provided</td>
                                            
                                        </tr>';
            } else {
                $output .= $this->fetch_support_for_this_entity($member_id);
            }

            $output .= '</table>
                        
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
                    
                        <table style="width: 100%; font-size: 18px; border-collapse: collapse;" border="0" class="table table-bordered">
                            <tr>
                                <th style="width: 10%">Date of Training</th>
                                <th style="width:30%;">Course / Topic</th>
                                <th style="width: 40%">Trainer</th>
                                <th style="width: 10%">Venue</th>
                            </tr>';
            if (empty($this->training_model->fetch_training_information_for_this_member($row->MEMBERSHIP_ID))) {
                $output .= '<tr style="text-align: center; color: red;">
                                                <td colspan="4">No Training Provided</td>
                                                
                                            </tr>';
            } else {
                $output .= $this->training_model->fetch_training_information_for_this_member($row->MEMBERSHIP_ID);
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

    function get_group_name_from_db($group_id)
    {

        #Obtaining the group name
        $this->db->select('GROUP_NAME');
        $this->db->where('GROUP_ID', $group_id);
        $this->db->limit(1);

        $child_data = $this->db->get('GROUPS');

        foreach ($child_data->result() as $row) {
            $group_name = $row->GROUP_NAME;
        }

        return $group_name;

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
                                        onclick="editContent(' . $row->ID . ');"><i class="fa fa-edit"> Edit Outcome</i>
                                </button>&nbsp;&nbsp;<button class="btn btn-success btn-sm" style="display: none;"
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

    function fetch_single_member_and_print($row_id)
    {
        $this->db->where('ID', $row_id);

        $data = $this->db->get('MEMBERSHIP');


        $member_id = '';
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
                        PERSONAL DETAILS
                    </td>
                  </tr>';


        foreach ($data->result() as $row) {
            $member_id = $row->MEMBERSHIP_ID;
            $output .= '
                
                <tr title="' . $row->NAME . '">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px;" border="0" class="table">
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Membership Id :</td>
                                <td style="width: 75%">'.$row->MEMBERSHIP_ID.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Member\'s Name :</td>
                                <td style="width: 75%">'.$row->NAME.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Group :</td>
                                <td style="width: 75%">' . $this->get_group_name_from_db($row->GROUPS) . '</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Gender :</td>
                                <td style="width: 75%">'.$row->SEX.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Date of birth :</td>
                                <td style="width: 75%">'.$row->DATE_OF_BIRTH.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Joining Date :</td>
                                <td style="width: 75%">'.$row->DATE_OF_JOINING.'</td>
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
                        
                        <div class="col-md-8">SUPPORT HISTORY</div>
                    </div>
                    </td>
                  </tr>';


        foreach ($data->result() as $row) {
            $output .= '
                
                <tr title="' . $row->NAME . '">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px; border-collapse: collapse;" border="0" class="table table-bordered" id="member_support_records">
                            <tr>
                                <th style="width: 10%">Date of Support</th>
                                <th style="width:30%;">Support Rendered</th>
                                <th style="width: 40%">OUTCOME</th>
                                <th style="width: 10%">Realisation Date</th>
                            </tr>';
            if (empty($this->fetch_support_for_this_entity_and_print($member_id))) {
                $output .= '<tr style="text-align: center; color: red;">
                                            <td colspan="4">No Support Provided</td>
                                            
                                        </tr>';
            } else {
                $output .= $this->fetch_support_for_this_entity_and_print($member_id);
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
            if (empty($this->training_model->fetch_training_information_for_this_member($row->MEMBERSHIP_ID))) {
                $output .= '<tr style="text-align: center; color: red;">
                                                <td colspan="4">No Training Provided</td>
                                                
                                            </tr>';
            } else {
                $output .= $this->training_model->fetch_training_information_for_this_member($row->MEMBERSHIP_ID);
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

    function return_group_members_list($group_name)
    {
        $this->db->where('GROUPS', $group_name);
        $this->db->order_by('NAME', 'ASC');

        $query = $this->db->get('MEMBERSHIP');

        return $query;
    }

    function fetch_associated_group_members($group_id)
    {

        $this->db->where('GROUPS', $group_id);
        $this->db->order_by('NAME', 'ASC');

        $query = $this->db->get('MEMBERSHIP');

//        return print_r($query->result());

        $output = '
            <table class="table table-bordered table-responsive" id="members-list">
                <tr>
                    <th>Individual ID</th>
                    <th>Name</th>
                    <th>Sex</th>
                    <th>Pit Latrine</th>
                    <th>Tippy Tap</th>
                    <th>Plate Drying Rack</th>
                    <th>Rubbish Pit</th>
                    <th>Bathroom Shelter</th>
                    <th>Kitchen Garden</th>
                    <th>Fruit Trees</th>
                    <th>NRM Practices</th>
                    <th>Maize Crib</th>
                    <th>Drying Rack</th>
                    <th>Tarpaulin</th>
                    <th>Granary</th>
                    <th>Papyrus Mat</th>
                    <th>Earth Floor</th>
                    <th>Energy Saving Stove</th>
                    <th>Date</th>
                </tr>
        ';

        foreach ($query->result() as $row) {
            $output .= '
                <tr>
                <td>' . $row->MEMBERSHIP_ID . '</td>
                <td>' . $row->NAME . '</td>
                <td>' . $row->SEX . '</td>
                <td><div class="col-md-12"><input type="number" name="pit_latrine' . $row->ID . '" id="pit_latrine' . $row->ID . '" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" name="tippy_tap' . $row->ID . '" id="tippy_tap' . $row->ID . '" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" name="plate_drying_rack' . $row->ID . '" id="plate_drying_rack' . $row->ID . '" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" name="rubbish_pit' . $row->ID . '" id="rubbish_pit' . $row->ID . '" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" name="bathroom_shelter' . $row->ID . '" id="bathroom_shelter' . $row->ID . '" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="text" name="kitchen_garden' . $row->ID . '" id="kitchen_garden' . $row->ID . '" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" name="fruit_trees' . $row->ID . '" id="fruit_trees' . $row->ID . '" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" name="nrm_practices' . $row->ID . '" id="nrm_practices' . $row->ID . '" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" name="maize_crib' . $row->ID . '" id="maize_crib' . $row->ID . '" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" name="drying_rack' . $row->ID . '" id="drying_rack' . $row->ID . '" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" name="tarpaulin' . $row->ID . '" id="tarpaulin' . $row->ID . '" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" name="granary' . $row->ID . '" id="granary' . $row->ID . '" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" name="papyrus_mat' . $row->ID . '" id="papyrus_mat' . $row->ID . '" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" name="earth_floor' . $row->ID . '" id="earth_floor' . $row->ID . '" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" name="energy_saving_stove' . $row->ID . '" id="energy_saving_stove' . $row->ID . '" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="date" name="check_date' . $row->ID . '" id="check_date' . $row->ID . '" style="width: 145px;" /> </div> </td>
            </tr>
            ';
        }

        $output .= '</table>';

        return $output;
    }

    function fetch_members_record($member_id, $row_id)
    {

        $this->db->where('MEMBERSHIP_ID', $member_id);

        $this->db->order_by('MEMBERSHIP_ID', 'ASC');

        $query = $this->db->get('MEMBERSHIP');

        $this->db->where('ID', $row_id);
        $hygiene_data = $this->db->get('HYGIENE_AND_NUTRITION_CHECKLIST');

//        return print_r($query->result());

        $output = '
            <table class="table table-bordered table-responsive" id="members-list">
                <tr>
                    <th>Individual ID</th>
                    <th>Name</th>
                    <th>Sex</th>
                    <th>Pit Latrine</th>
                    <th>Tippy Tap</th>
                    <th>Plate Drying Rack</th>
                    <th>Rubbish Pit</th>
                    <th>Bathroom Shelter</th>
                    <th>Kitchen Garden</th>
                    <th>Fruit Trees</th>
                    <th>NRM Practices</th>
                    <th>Maize Crib</th>
                    <th>Drying Rack</th>
                    <th>Tarpaulin</th>
                    <th>Granary</th>
                    <th>Papyrus Mat</th>
                    <th>Earth Floor</th>
                    <th>Date</th>
                </tr>
        ';

        foreach ($query->result() as $row) {
            foreach ($hygiene_data->result() as $data) {
                $output .= '
                <tr>
                <td>' . $row->MEMBERSHIP_ID . '</td>
                <td>' . $row->NAME . '</td>
                <td>' . $row->SEX . '</td>
                
                <td><div class="col-md-12"><input value="' . $data->PIT_LATRINE . '" type="number" name="pit_latrine" id="pit_latrine" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input value="' . $data->TIPPY_TAP . '" type="number" name="tippy_tap" id="tippy_tap" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input value="' . $data->PLATE_DRYING_RACK . '" type="number" name="plate_drying_rack" id="plate_drying_rack" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input value="' . $data->RUBBISH_PIT . '" type="number" name="rubbish_pit" id="rubbish_pit" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input value="' . $data->BATHING_SHELTER . '" type="number" name="bathroom_shelter" id="bathroom_shelter" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input value="' . $data->KITCHEN_GARDEN . '" type="number" name="kitchen_garden" id="kitchen_garden" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input value="' . $data->FRUIT_TREES . '" type="number" name="fruit_trees" id="fruit_trees" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input value="' . $data->NRM_PRACTICES . '" type="number" name="nrm_practices" id="nrm_practices" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input value="' . $data->MAIZE_CRIB . '" type="number" name="maize_crib" id="maize_crib" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input value="' . $data->DRYING_RACK . '" type="number" name="drying_rack" id="drying_rack" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input value="' . $data->TAPAULIN . '" type="number" name="tarpaulin" id="tarpaulin" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input value="' . $data->GRANARY . '" type="number" name="granary" id="granary" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input value="' . $data->PAPYRUS_MAT . '" type="number" name="papyrus_mat" id="papyrus_mat" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input value="' . $data->EARTH_FLOOR . '" type="number" name="earth_floor" id="earth_floor" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input value="' . $data->DATE_CHECKED . '" type="date" name="check_date" id="check_date" style="width: 145px;" /> </div> </td>
            </tr>
            ';
            }
        }

        $output .= '</table>';

        return $output;

    }

    function fetch_fishing_members_record($member_id, $row_id)
    {

        $this->db->where('MEMBERSHIP_ID', $member_id);

        $this->db->order_by('MEMBERSHIP_ID', 'ASC');

        $query = $this->db->get('MEMBERSHIP');

        $this->db->where('ID', $row_id);
        $fishing_data = $this->db->get('FISH_FARMING_RECORDS');

//        return print_r($query->result());

        $output = '
<div class="document-part-header">
    FISH FARMING
</div>
<hr>
<div class="document-part-content">
    <div class="row">
        <div id="fish_farming_table"></div>

    
            <table class="table table-bordered table-responsive">
                <tr style="text-align: left;">
                    <td colspan="8"><div class="row"><div class="col-md-6" style="text-align: right;"> Q1 - % Increase in value of sales (UGX)</div><div class="col-md-6"> <input type="number" name="" id="" class="form-control" /></div></div></td>
                </tr>
                <tr>
                    <td colspan="8"><div class="row"><div class="col-md-6" style="text-align: right;">Q2 - % Increase in productivity (Kg/Acre)</div><div class="col-md-6"> <input type="number" name="" id="" class="form-control" /></div></div></td>
                </tr>
        
                <tr>
                    <td colspan="8">&nbsp;</td>
                </tr>
                <tr>
                    <th style="width: 20%;">Individual</th>
                    <th>Group Member</th>
                    <th>Q3</th>
                    <th>Q4</th>
                    <th colspan="4">Q5 - Fish Farming</th>
                </tr>
                <tr style="font-weight: bold;">
                    <td>
                        <div class="col-md-12">
                            ID
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            Name
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            Sex
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            Vulnerability
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            Size of pond
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            No. of Fish harvested
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            Qty yield (Kg)
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            Income (UGX)
                        </div>
                    </td>
                </tr>
            ';

        foreach ($query->result() as $row) {
            foreach ($fishing_data->result() as $data) {
                $output .= '
                <tr>
            <td>
                <div class="col-md-12">
                    ' . $row->MEMBERSHIP_ID . '
                </div>
            </td>
            <td>
                <div class="col-md-12">
                    ' . $row->NAME . '
                </div>
            </td>
            <td>
                <div class="col-md-12">
                    ' . $row->SEX . '
                </div>
            </td>
            <td>
                <div class="col-md-12">
                    ' . $row->VULNERABILITY . '
                </div>
            </td>
            <td>
                <div class="col-md-12">
                    <input type="number" name="size_of_pond" id="size_of_pond" value="' . $data->SIZE_OF_POND . '" class="form-control" />
                </div>
            </td>
            <td>
                <div class="col-md-12">
                    <input type="number" name="number_of_fish_harvested" id="number_of_fish_harvested" value="' . $data->NUMBER_OF_FISH_HARVESTED . '" class="form-control" />
                </div>
            </td>
            <td>
                <div class="col-md-12">
                    <input type="number" name="quantity_yield_in_kg" id="quantity_yield_in_kg" value="' . $data->QUANTITY_IN_KG . '" class="form-control" />
                </div>
            </td>
            <td>
                <div class="col-md-12">
                    <input type="number" name="income_ugx" id="income_ugx" value="' . $data->INCOME . '" class="form-control" />
                </div>
            </td>
        </tr>
            ';
            }
        }

        $output .= '</table>
                   </div>
                </div>';

        return $output;

    }

    function fetch_crop_farming_members_record($member_id, $row_id)
    {

        $this->db->where('MEMBERSHIP_ID', $member_id);

        $this->db->order_by('MEMBERSHIP_ID', 'ASC');

        $query = $this->db->get('MEMBERSHIP');

        $this->db->where('ID', $row_id);
        $crop_data = $this->db->get('VEGETABLE_PRODUCTION_NEW');

//        return print_r($query->result());
        foreach ($query->result() as $row) {
            foreach ($crop_data->result() as $data) {

                $output = '
                    <table class="table table-bordered table-responsive">
                        <tr>
                            <th>Individual ID</th>
                            <th>Individual Name</th>
                            <th>Sex</th>
                            <th>Vulnerability</th>
                            <th colspan="4"> QN: ' . $data->CATEGORY . ': ' . $data->FOOD_STUFF . '</th>
                        </tr>
                    ';

                $output .= '
                <tr>
                    <td>' . $row->MEMBERSHIP_ID . '</td>
                    <td>' . $row->NAME . '</td>
                    <td>' . $row->SEX . '</td>
                    <td>' . $row->VULNERABILITY . '</td>
                    <td>
                        <div class="col-md-12">
                            ACRES: <input type="number" name="acres" id="acres" value="' . $data->ACRES_PLANTED . '"  style="width: 45px;" />
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            YIELD: <input type="number" name="yield" id="yield" value="' . $data->YIELD_OBTAINED . '"  style="width: 45px;" />
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            SOLD: <input type="number" name="sold" id="sold" value="' . $data->QUANTITY_SOLD . '"  style="width: 45px;" />
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            UGX: <input type="number" name="amount_ugx" id="amount_ugx" value="' . $data->INCOME . '"  style="width: 45px;" />
                        </div>
                    </td>
        </tr>
            ';
            }
        }

        $output .= '</table>';

        return $output;

    }

    public function get_support_list_for_this_group($group_id)
    {

        $this->db->where('BENEFICIARY', $group_id);
        $this->db->order_by('DATE_OF_SUPPORT', 'DESC');

        $query = $this->db->get('SUPPORT_RENDERED');

        $output = '';
        foreach ($query->result() as $row) {
            if (!$this->support_outcome_exists($row->ID, $row->BENEFICIARY)) {
                $output .= '<option value="' . $row->ID . '">' . $row->SUPPORT . ' --> ' . $row->DATE_OF_SUPPORT . '</option>';
            }
        }
    }

    public function support_outcome_exists($support_id, $beneficiary)
    {

        $this->db->where('SUPPORT_ID', $support_id);
        $this->db->where('BENEFICIARY', $beneficiary);

        $query = $this->db->get('SUPPORT_OUTCOMES');

        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function fetch_associated_group_members_for_crop_production($group_id)
    {

        $this->db->where('GROUPS', $group_id);
        $this->db->order_by('NAME', 'ASC');

        $query = $this->db->get('MEMBERSHIP');

//        return print_r($query->result());


        $output = '
        <div class="document-part-header">
            Table 2.0: % Increase in target group\'s knowledge on problems affecting vegetable/crop production and challenges on the marketing aspect
            </div>
        
            <hr>
        
            <div class="document-part-content">
        
                <div class="col-md-12">
                    <table class="table table-bordered table-responsive">
                        <tr>
                            <td style="width: 50%;">
                                <div class="col-md-12">
                                    Q - 12: Mention problems affecting crop production<br><br>
                                    <textarea class="form-control" name="problems_affecting_crop_production"
                                              id="problems_affecting_crop_production"></textarea>
        
                                </div>
                            </td>
                            <td style="width: 50%;">
                                <div class="col-md-12">
                                    Q - 12: Problems hindering marketing crop products<br><br>
                                    <textarea class="form-control" name="problems_hindering_marketing_crop_products"
                                              id="problems_hindering_marketing_crop_products"></textarea>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
           
            <hr>
    <div class="document-part-header">
        Table 4.0: Crop Product
    </div>
    <hr>
    <div class="document-part-content">
        <table class="table table-bordered table-responsive">
            <tr>
                <td style="width: 50%;">
                    <div class="col-md-12">
                        % increase in value of sales (UGX)
                    </div>
                </td>
                <td style="width: 50%;">
                    <div class="col-md-12">
                        <input type="number" name="percentage_increase_in_sale_of_crops"
                               id="percentage_increase_in_sale_of_crops" class="form-control"/>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="width: 50%;">
                    <div class="col-md-12">
                        % increase in productivity (Kg/Acre)
                    </div>
                </td>
                <td style="width: 50%;">
                    <div class="col-md-12">
                        <input type="number" name="percentage_increase_in_productivity_of_crops"
                               id="percentage_increase_in_productivity_of_crops" class="form-control"/>
                    </div>
                </td>
            </tr>
        </table><br>

    </div>
    <hr>';
        $output .= '<div id="crop_production_table">
            <table class="table table-bordered table-responsive">
            <tr>
                <th>Individual ID</th>
                <th>Individual Name</th>
                <th>Sex</th>
                <th>Vulnerability</th>
                <th colspan="5">Q21. Crop 1: Soya Beans</th>
                <th colspan="5">Q26. Crop 2: Simsim</th>
                <th colspan="5">Q31. Crop 3: Sesames</th>
                <th colspan="5">Q36. Crop 4: Beans</th>
            </tr>';

        foreach ($query->result() as $row) {

            $output .= '<tr>
                <td>' . $row->MEMBERSHIP_ID . '</td>
                <td>' . $row->NAME . '</td>
                <td>' . $row->SEX . '</td>
                <td>' . $this->get_vulnerability_name($row->VULNERABILITY) . '</td>
                <td>
                    <div class="col-md-12">
                         <input type="text" name="soya_beans_support' . $row->ID . '" id="soya_beans_support' . $row->ID . '" style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        ACRES: <input type="number" name="soya_beans_acres' . $row->ID . '" id="soya_beans_acres' . $row->ID . '"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        YIELD: <input type="number" name="soya_beans_yield' . $row->ID . '" id="soya_beans_yield' . $row->ID . '"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        SOLD: <input type="number" name="soya_beans_sold' . $row->ID . '"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        UGX: <input type="number" name="soya_beans_amount_ugx' . $row->ID . '" id="soya_beans_amount_ugx' . $row->ID . '"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                         <input type="text" name="simsim_support' . $row->ID . '" id="ground_nuts_support' . $row->ID . '" style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        ACRES: <input type="number" name="simsim_acres' . $row->ID . '" id="ground_nuts_acres' . $row->ID . '"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        YIELD: <input type="number" name="simsim_yield' . $row->ID . '" id="ground_nuts_yield' . $row->ID . '"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        SOLD: <input type="number" name="simsim_sold' . $row->ID . '" id="ground_nuts_sold' . $row->ID . '"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        UGX: <input type="number" name="simsim zmmm_amount_ugx' . $row->ID . '" id="ground_nuts_amount_ugx' . $row->ID . '"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                         <input type="text" name="sesames_support' . $row->ID . '" id="sesames_support' . $row->ID . '" style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        ACRES: <input type="number" name="sesames_acres' . $row->ID . '" id="sesames_acres' . $row->ID . '"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        YIELD: <input type="number" name="sesames_yield' . $row->ID . '" id="sesames_yield' . $row->ID . '"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        SOLD: <input type="number" name="sesames_sold' . $row->ID . '" id="sesames_sold' . $row->ID . '"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        UGX: <input type="number" name="sesames_amount_ugx' . $row->ID . '" id="sesames_amount_ugx' . $row->ID . '"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                         <input type="text" name="beans_support' . $row->ID . '" id="beans_support' . $row->ID . '" style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        ACRES: <input type="number" name="beans_acres' . $row->ID . '" id="beans_acres' . $row->ID . '"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        YIELD: <input type="number" name="beans_yield' . $row->ID . '" id="beans_yield' . $row->ID . '"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        SOLD: <input type="number" name="beans_sold' . $row->ID . '" id="beans_sold' . $row->ID . '"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        UGX: <input type="number" name="beans_amount_ugx' . $row->ID . '" id="beans_amount_ugx' . $row->ID . '"  style="width: 45px;" />
                    </div>
                </td>
            </tr>';
        }
        $output .= '</table></div>';
        $output .= '<hr>

            <hr>
            <div class="document-part-header">Table 5.0: Number of Misean Cara beneficiaries adopting new technologies in vegetables and crop production</div>
            <hr>
            <div class="document-part-content">
                <div class="row">
                    <div class="col-md-12">
                        <strong>Did you use any of the following technologies during your production process?</strong>
                    </div>
                </div><br>
            
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-responsive">
                            <tr>
                                <th>Q - 41: Did you use any improved seed during the year in your production</th>
                                <th>Q - 42: Did you use underground water in your crop production process during the dry season?</th>
                                <th>Q - 43: Did you use any pesticides on your crops(vegetables)?</th>
                                <th>Q - 44: Use of farm imlements e.g. zero tillage during land opening?</th>
                                <th>Q - 45: Have you been using any method of post-harvest handling and processing techniques?</th>
                                <th>Q - 46: Did you have any opportunity in planting your crops in Rows/Lines as oppsed to random
                                    sowing/scattering?
                                </th>
                                <th>Q - 47: What other techniques did you use apart from the ones discussed here? (Name them)</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12">
                                        <input type="radio" name="used_improved_seeds" id="used_improved_seeds" value="1"/>Yes<br>
                                        <input type="radio" name="used_improved_seeds" id="used_improved_seeds" value="2"/>No
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-12">
                                        <input type="radio" name="used_underground_water_during_dry_season"
                                               id="used_underground_water_during_dry_season" value="1"/>Yes<br>
                                        <input type="radio" name="used_underground_water_during_dry_season"
                                               id="used_underground_water_during_dry_season" value="2"/>No
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-12">
                                        <input type="radio" name="used_pesticides" id="used_pesticides" value="1"/>Yes<br>
                                        <input type="radio" name="used_pesticides" id="used_pesticides" value="2"/>No
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-12">
                                        <input type="radio" name="used_farm_implements" id="used_farm_implements" value="1"/>Yes<br>
                                        <input type="radio" name="used_farm_implements" id="used_farm_implements" value="2"/>No
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-12">
                                        <input type="radio" name="used_post_harvest_handling_and_processing_techniques"
                                               id="used_post_harvest_handling_and_processing_techniques" value="1"/>Yes<br>
                                        <input type="radio" name="used_post_harvest_handling_and_processing_techniques"
                                               id="used_post_harvest_handling_and_processing_techniques" value="2"/>No
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-12">
                                        <input type="radio" name="had_the_opportunity_to_plant_crops_in_rows"
                                               id="had_the_opportunity_to_plant_crops_in_rows" value="1"/>Yes<br>
                                        <input type="radio" name="had_the_opportunity_to_plant_crops_in_rows"
                                               id="had_the_opportunity_to_plant_crops_in_rows" value="2"/>No
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-12">
                                        <textarea name="" cols="400" id="other_techniques_used" id="other_techniques_used"
                                                  class="form-control"></textarea>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <hr>
            <div class="document-part-header">Table 6.0: % Change in People\'s knowledge on Marketing and Processing</div>
            
            <hr>
            <div class="document-part-content">
                
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-responsive">
                            <tr>
                                <th style="width: 25%;">Q -48: Do you sell all your crop products?</th>
                                <th colspan="3" style="width: 75%;">Q - 49: In what forms do you market the product?</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12">
                                        <input type="radio" name="sells_all_crop_products" id="sells_all_crop_products" value="1"/>Yes<br>
                                        <input type="radio" name="sells_all_crop_products" id="sells_all_crop_products" value="2"/>No
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-12"">
                                    <label for="place_1">Place 1:</label>
                                    <input type="text" class="form-control" name="crop_market_place_1" id="crop_market_place_1"/>
                    </div>
                    </td>
                    <td>
                        <div class="col-md-12"">
                        <label for="place_2">Place 2:</label>
                        <input type="text" class="form-control" name="crop_market_place_2" id="crop_market_place_2"/>
                </div>
            </td>
            <td>
                <div class="col-md-12"">
                <label for="place_3">Place 3:</label>
                <input type="text" class="form-control" name="crop_market_place_3" id="crop_market_place_3"/>
                </div>
            </td>
            </tr>
            </table>
            </div>
            </div>
            </div>
            <hr>';


        return $output;
    }

//    function fetch_associated_group_members_for_crop_production($group_id)
//    {
//
//        $this->db->where('GROUPS', $group_id);
//        $this->db->order_by('NAME', 'ASC');
//
//        $query = $this->db->get('MEMBERSHIP');
//
////        return print_r($query->result());
//
//
//
//        return $output;
//    }

    function get_vulnerability_name($disability_id)
    {
        $this->db->select('DISABILITY_NAME');
        $this->db->where('DISABILITY_ID', $disability_id);
        $query = $this->db->get('DISABILITIES');

        $disability_name = '';
        foreach ($query->result() as $row) {
            $disability_name = $row->DISABILITY_NAME;
        }
        return $disability_name;
    }

    function fetch_associated_group_members_for_fish_farming($group_id)
    {

        $this->db->where('GROUPS', $group_id);
        $this->db->order_by('NAME', 'ASC');

        $query = $this->db->get('MEMBERSHIP');

//        return print_r($query->result());

        $output = '
            <hr>
            
                <div class="document-part-header">
                    Table 5.0: Fish Farming
                </div>
               <hr>
               <div id="fish_farming">
            <table class="table table-bordered table-responsive">
            <tr>
                <td colspan="9"><div class="row"><div class="col-md-4"> Q1 - % Increase in value of sales (UGX)</div><div class="col-md-6"> <input type="number" name="percentage_increase_in_fish_sales" id="percentage_increase_in_fish_sales" class="form-control" /></div></div></td>
            </tr>
            <tr>
                <td colspan="9"><div class="row"><div class="col-md-4">Q2 - % Increase in productivity (Kg/Acre)</div><div class="col-md-6"> <input type="number" name="percentage_increase_in_fish_productivity" id="percentage_increase_in_fish_productivity" class="form-control" /></div></div></td>
            </tr>

            <tr>
                <td colspan="8">&nbsp;</td>
            </tr>
            <tr>
                <th style="width: 20%;">Individual</th>
                <th>Group Member</th>
                <th>Q3</th>
                <th>Q4</th>
                <th colspan="4">Q5 - Fish Farming</th>
            </tr>
            <tr style="font-weight: bold;">
                <td>
                    <div class="col-md-12">
                        ID
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Name
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Sex
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Vulnerability
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Support
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Size of pond
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        No. of Fish harvested
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Qty yield (Kg)
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Income (UGX)
                    </div>
                </td>
            </tr>
        ';

        foreach ($query->result() as $row) {
            $output .= '
                <tr>
                <td>
                    <div class="col-md-12">
                        ' . $row->MEMBERSHIP_ID . '
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        ' . $row->NAME . '
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        ' . $row->SEX . '
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        ' . $this->get_vulnerability_name($row->VULNERABILITY) . '
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                         <input type="text" name="fish_support' . $row->ID . '" id="fish_support' . $row->ID . '" style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        <input type="number" name="size_of_pond' . $row->ID . '" id="size_of_pond' . $row->ID . '" style="width: 60px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        <input type="number" name="number_of_fish_harvested' . $row->ID . '" id="number_of_fish_harvested' . $row->ID . '" style="width: 60px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        <input type="number" name="quantity_yield_in_kg' . $row->ID . '" id="quantity_yield_in_kg' . $row->ID . '" style="width: 60px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        <input type="number" name="income_ugx' . $row->ID . '" id="income_ugx' . $row->ID . '" style="width: 60px;" />
                    </div>
                </td>
            </tr>
            ';
        }

        $output .= '</table></div>';

        return $output;


    }

    function fetch_associated_group_members_for_piggery($group_id)
    {


        $this->db->where('GROUPS', $group_id);
        $this->db->order_by('NAME', 'ASC');

        $query = $this->db->get('MEMBERSHIP');

//        return print_r($query->result());

        $output = '
            <hr>
            
                <div class="document-part-header">
                    Table 6.0: Piggery
                </div>
               <hr>
               <div id="pig_farming">
            <table class="table table-bordered table-responsive">
            <tr>
                <td colspan="9"><div class="row"><div class="col-md-4"> Q1 - % Increase in value of sales (UGX)</div><div class="col-md-6"> <input type="number" name="percentage_increase_in_pig_sales" id="percentage_increase_in_pig_sales" class="form-control" /></div></div></td>
            </tr>
            <tr>
                <td colspan="9"><div class="row"><div class="col-md-4">Q2 - % Increase in productivity (Kg/Acre)</div><div class="col-md-6"> <input type="number" name="percentage_increase_in_pig_productivity" id="percentage_increase_in_pig_productivity" class="form-control" /></div></div></td>
            </tr>

            <tr>
                <td colspan="9">&nbsp;</td>
            </tr>
            <tr>
                <th style="width: 20%;">Individual</th>
                <th>Group Member</th>
                <th>Q3</th>
                <th>Q4</th>
                <th colspan="5">Q5 - Piggery</th>
            </tr>
            <tr style="font-weight: bold;">
                <td>
                    <div class="col-md-12">
                        ID
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Name
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Sex
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Vulnerability
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Support
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Number of Pigglets
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Uses IMO
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        INCOME
                    </div>
                </td>
            </tr>
        ';

        foreach ($query->result() as $row) {
            $output .= '
                <tr>
                <td>
                    <div class="col-md-12">
                        ' . $row->MEMBERSHIP_ID . '
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        ' . $row->NAME . '
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        ' . $row->SEX . '
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        ' . $this->get_vulnerability_name($row->VULNERABILITY) . '
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                         <input type="text" name="pig_support' . $row->ID . '" id="pig_support' . $row->ID . '" style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        <input type="number" name="number_of_pigglets' . $row->ID . '" id="number_of_pigglets' . $row->ID . '" style="width: 60px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        <input type="checkbox" name="uses_imo' . $row->ID . '" id="uses_imo' . $row->ID . '" style="width: 60px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        <input type="number" name="piggery_income_gained' . $row->ID . '" id="piggery_income_gained' . $row->ID . '" style="width: 60px;" />
                    </div>
                </td>
            </tr>
            ';
        }

        $output .= '</table></div>';

        return $output;
    }

    function fetch_associated_group_members_for_apiary($group_id)
    {


        $this->db->where('GROUPS', $group_id);
        $this->db->order_by('NAME', 'ASC');

        $query = $this->db->get('MEMBERSHIP');

//        return print_r($query->result());

        $output = '
            <hr>
            
                <div class="document-part-header">
                    Table 7.0: Apiary
                </div>
               <hr>
               <div id="apiary_farming">
            <table class="table table-bordered table-responsive">
            <tr>
                <td colspan="9"><div class="row"><div class="col-md-4"> Q1 - % Increase in value of sales (UGX)</div><div class="col-md-6"> <input type="number" name="percentage_increase_in_honey_sales" id="percentage_increase_in_honey_sales" class="form-control" /></div></div></td>
            </tr>
            <tr>
                <td colspan="9"><div class="row"><div class="col-md-4">Q2 - % Increase in productivity (Kg/Acre)</div><div class="col-md-6"> <input type="number" name="percentage_increase_in_honey_productivity" id="percentage_increase_in_honey_productivity" class="form-control" /></div></div></td>
            </tr>

            <tr>
                <td colspan="9">&nbsp;</td>
            </tr>
            <tr>
                <th style="width: 20%;">Individual</th>
                <th>Group Member</th>
                <th>Q3</th>
                <th>Q4</th>
                <th colspan="5">Q5 - Apiary</th>
            </tr>
            <tr style="font-weight: bold;">
                <td>
                    <div class="col-md-12">
                        ID
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Name
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Sex
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Vulnerability
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Support
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Quantity Harvested
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Quantity Sold
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Quantity Consumed
                    </div>
                </td>
                    <div class="col-md-12">
                        Income (UGX)
                    </div>
                </td>
            </tr>
        ';

        foreach ($query->result() as $row) {
            $output .= '
                <tr>
                <td>
                    <div class="col-md-12">
                        ' . $row->MEMBERSHIP_ID . '
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        ' . $row->NAME . '
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        ' . $row->SEX . '
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        ' . $this->get_vulnerability_name($row->VULNERABILITY) . '
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                         <input type="text" name="apiary_support' . $row->ID . '" id="apiary_support' . $row->ID . '" style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        <input type="number" name="honey_quantity_harvested' . $row->ID . '" id="honey_quantity_harvested' . $row->ID . '" style="width: 60px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        <input type="number" name="honey_quantity_sold' . $row->ID . '" id="honey_quantity_sold' . $row->ID . '" style="width: 60px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        <input type="number" name="honey_quantity_consumed' . $row->ID . '" id="honey_quantity_consumed' . $row->ID . '" style="width: 60px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        <input type="number" name="apiary_amount_gained' . $row->ID . '" id="apiary_amount_gained' . $row->ID . '" style="width: 60px;" />
                    </div>
                </td>
            </tr>
            ';
        }

        $output .= '</table></div>';

        return $output;
    }

    function fetch_associated_group_members_for_briquettes_production($group_id)
    {

        $this->db->where('GROUPS', $group_id);
        $this->db->order_by('NAME', 'ASC');

        $query = $this->db->get('MEMBERSHIP');

//        return print_r($query->result());

        $output = '
            <hr>
            
                <div class="document-part-header">
                    Table 8.0: Briquettes Production
                </div>
               <hr>
               <div id="briquettes_production">
            <table class="table table-bordered table-responsive">
            <tr>
                <td colspan="9"><div class="row"><div class="col-md-4"> Q1 - % Increase in value of sales (UGX)</div><div class="col-md-6"> <input type="number" name="percentage_increase_in_briquette_sales" id="percentage_increase_in_briquette_sales" class="form-control" /></div></div></td>
            </tr>
            <tr>
                <td colspan="9"><div class="row"><div class="col-md-4">Q2 - % Increase in productivity (Kg/Acre)</div><div class="col-md-6"> <input type="number" name="percentage_increase_in_briquette_productivity" id="percentage_increase_in_briquette_productivity" class="form-control" /></div></div></td>
            </tr>

            <tr>
                <td colspan="9">&nbsp;</td>
            </tr>
            <tr>
                <th style="width: 20%;">Individual</th>
                <th>Group Member</th>
                <th>Q3</th>
                <th>Q4</th>
                <th colspan="5">Q5 - Briquettes Production</th>
            </tr>
            <tr style="font-weight: bold;">
                <td>
                    <div class="col-md-12">
                        ID
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Name
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Sex
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Vulnerability
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Support
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Quantity Produced
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Quantity Sold
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Quantity Used
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        INCOME (UGX)
                    </div>
                </td>
            </tr>
        ';

        foreach ($query->result() as $row) {
            $output .= '
                <tr>
                <td>
                    <div class="col-md-12">
                        ' . $row->MEMBERSHIP_ID . '
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        ' . $row->NAME . '
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        ' . $row->SEX . '
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        ' . $this->get_vulnerability_name($row->VULNERABILITY) . '
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        <input type="text" name="briquette_support' . $row->ID . '" id="briquette_support' . $row->ID . '" style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        <input type="number" name="briquette_quantity_produced' . $row->ID . '" id="quantity_produced' . $row->ID . '" style="width: 60px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        <input type="number" name="briquette_quantity_sold' . $row->ID . '" id="quantity_sold' . $row->ID . '" style="width: 60px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        <input type="number" name="briquette_quantity_used' . $row->ID . '" id="quantity_used' . $row->ID . '" style="width: 60px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        <input type="number" name="briquette_income' . $row->ID . '" id="briquette_income' . $row->ID . '" style="width: 60px;" />
                    </div>
                </td>
            </tr>
            ';
        }

        $output .= '</table></div>';

        return $output;
    }

    function fetch_associated_group_members_for_run_off($group_id)
    {

        $this->db->where('GROUPS', $group_id);
        $this->db->order_by('NAME', 'ASC');

        $query = $this->db->get('MEMBERSHIP');
        // Did not provide the information
        $output = '<div class="document-part-header">
            Table 2.0: % Increase in target group\'s knowledge on problems affecting vegetable/crop production and challenges on the marketing aspect
            </div>
        
            <hr>
        
            <div class="document-part-content">
        
                <div class="col-md-12">
                    <table class="table table-bordered table-responsive">
                        <tr>
                            <td style="width: 50%;">
                                <div class="col-md-12">
                                    Q - 12: Mention problems affecting vegetable production<br><br>
                                    <textarea class="form-control" name="problems_affecting_vegetable_production"
                                              id="problems_affecting_vegetable_production"></textarea>
        
                                </div>
                            </td>
                            <td style="width: 50%;">
                                <div class="col-md-12"">
                                    Q - 12: Mention the challenges faced in marketing vegetable products<br><br>
                                <textarea class="form-control" name="challenges_faced_in_marketing_vegetable_products"
                                          id="challenges_faced_in_marketing_vegetable_products"></textarea>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <hr>
            <div class="document-part-header">
                Table 3.0: Vegetable Product
            </div>
            <hr>
            <div class="document-part-content">
                <table class="table table-bordered table-responsive">
                    <tr>
                        <td style="width: 50%;">
                            <div class="col-md-12">
                                % increase in value of sales (UGX)
                            </div>
                        </td>
                        <td style="width: 50%;">
                            <div class="col-md-12">
                                <input type="number" name="percentage_increase_in_sale_of_vegetable"
                                       id="percentage_increase_in_sale_of_vegetable" class="form-control"/>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 50%;">
                            <div class="col-md-12">
                                % increase in productivity (Kg/Acre)
                            </div>
                        </td>
                        <td style="width: 50%;">
                            <div class="col-md-12">
                                <input type="number" name="percentage_increase_in_productivity_of_vegetable"
                                       id="percentage_increase_in_productivity_of_vegetable" class="form-control"/>
                            </div>
                        </td>
                    </tr>
                </table><br>   
                <hr>
                <div id="vegetable_table">
                <table class="table table-bordered table-responsive">
                    <tr>
                        <th>Individual ID</th>
                        <th>Individual Name</th>
                        <th>Sex</th>
                        <th>Vulnerability</th>
                        <th colspan="5">Q1. Vegetable 1: Onion</th>
                        <th colspan="5">Q6. Vegetable 2: Tomatoes</th>
                        <th colspan="5">Q11. Vegetable 3: Cabbage</th>
                        <th colspan="5">Q16. Vegetable 4: Okra</th>
                        <th colspan="5">Q16. Vegetable 5: Green Paper</th>
                    </tr>';

        foreach ($query->result() as $row) {

            $output .= '<tr>
                        <td>' . $row->MEMBERSHIP_ID . '</td>
                        <td>' . $row->NAME . '</td>
                        <td>' . $row->SEX . '</td>
                        <td>' . $this->get_vulnerability_name($row->VULNERABILITY) . '</td>
                        <td>
                            <div class="col-md-12">
            <input type="text" name="onions_support' . $row->ID . '" id="onions_support' . $row->ID . '" style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            ACRES: <input type="number" name="onions_acres' . $row->ID . '" id="onions_acres' . $row->ID . '" style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            YIELD: <input type="number" name="onions_yield' . $row->ID . '" id="onions_yield' . $row->ID . '" style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            SOLD: <input type="number" name="onions_sold' . $row->ID . '" id="onions_sold' . $row->ID . '" style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            UGX: <input type="number" name="onions_amount_ugx' . $row->ID . '" id="onions_amount_ugx' . $row->ID . '" style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
             <input type="text" name="tomatoes_support' . $row->ID . '" id="tomatoes_support' . $row->ID . '" style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            ACRES: <input type="number" name="tomatoes_acres' . $row->ID . '" id="tomatoes_acres' . $row->ID . '" style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            YIELD: <input type="number" name="tomatoes_yield' . $row->ID . '" id="tomatoes_yield' . $row->ID . '" style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            SOLD: <input type="number" name="tomatoes_sold' . $row->ID . '" id="tomatoes_sold' . $row->ID . '" style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            UGX: <input type="number" name="tomatoes_amount_ugx' . $row->ID . '" id="tomatoes_amount_ugx' . $row->ID . '" style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
             <input type="text" name="cabbage_support' . $row->ID . '" id="cabbage_support' . $row->ID . '" style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            ACRES: <input type="number" name="cabbage_acres' . $row->ID . '" id="cabbage_acres' . $row->ID . '" style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            YIELD: <input type="number" name="cabbage_yield' . $row->ID . '" id="cabbage_yield' . $row->ID . '"  style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            SOLD: <input type="number" name="cabbage_sold' . $row->ID . '" id="cabbage_sold' . $row->ID . '"  style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            UGX: <input type="number" name="cabbage_amount_ugx' . $row->ID . '" id="cabbage_amount_ugx' . $row->ID . '"  style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
             <input type="text" name="okra_support' . $row->ID . '" id="okra_support' . $row->ID . '" style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            ACRES: <input type="number" name="okra_acres' . $row->ID . '" id="okra_acres' . $row->ID . '"  style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            YIELD: <input type="number" name="okra_yield' . $row->ID . '" id="okra_yield' . $row->ID . '"  style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            SOLD: <input type="number" name="okra_sold' . $row->ID . '" id="okra_sold' . $row->ID . '"  style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            UGX: <input type="number" name="okra_amount_ugx' . $row->ID . '" id="okra_amount_ugx' . $row->ID . '"  style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
             <input type="text" name="green_paper_support' . $row->ID . '" id="green_paper_support' . $row->ID . '" style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            ACRES: <input type="number" name="green_paper_acres' . $row->ID . '" id="green_paper_acres' . $row->ID . '"  style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            YIELD: <input type="number" name="green_paper_yield' . $row->ID . '" id="green_paper_yield' . $row->ID . '"  style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            SOLD: <input type="number" name="green_paper_sold' . $row->ID . '" id="green_paper_sold' . $row->ID . '"  style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            UGX: <input type="number" name="green_paper_amount_ugx' . $row->ID . '" id="green_paper_amount_ugx' . $row->ID . '"  style="width: 45px;" />
                            </div>
                        </td>
                    </tr>';
        }

        $output .= '</table>';
        $output .= '</div>
        
                </div>
            
            <hr>';
        $output .= '
            <div class="document-part-header">Table 5.0: Number of Misean Cara beneficiaries adopting new technologies in vegetables and crop production</div>
            <hr>
            <div class="document-part-content">
                <div class="row">
                    <div class="col-md-12">
                        <strong>Did you use any of the following technologies during your production process?</strong>
                    </div>
                </div><br>
            
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-responsive">
                            <tr>
                                <th>Q - 41: Did you use any improved seed during the year in your production</th>
                                <th>Q - 42: Did you use underground water in your crop production process during the dry season?</th>
                                <th>Q - 43: Did you use any pesticides on your crops(vegetables)?</th>
                                <th>Q - 44: Use of farm imlements e.g. zero tillage during land opening?</th>
                                <th>Q - 45: Have you been using any method of post-harvest handling and processing techniques?</th>
                                <th>Q - 46: Did you have any opportunity in planting your crops in Rows/Lines as oppsed to random
                                    sowing/scattering?
                                </th>
                                <th>Q - 47: What other techniques did you use apart from the ones discussed here? (Name them)</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12">
                                        <input type="radio" name="used_improved_seeds" id="used_improved_seeds" value="1"/>Yes<br>
                                        <input type="radio" name="used_improved_seeds" id="used_improved_seeds" value="2"/>No
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-12">
                                        <input type="radio" name="used_underground_water_during_dry_season"
                                               id="used_underground_water_during_dry_season" value="1"/>Yes<br>
                                        <input type="radio" name="used_underground_water_during_dry_season"
                                               id="used_underground_water_during_dry_season" value="2"/>No
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-12">
                                        <input type="radio" name="used_pesticides" id="used_pesticides" value="1"/>Yes<br>
                                        <input type="radio" name="used_pesticides" id="used_pesticides" value="2"/>No
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-12">
                                        <input type="radio" name="used_farm_implements" id="used_farm_implements" value="1"/>Yes<br>
                                        <input type="radio" name="used_farm_implements" id="used_farm_implements" value="2"/>No
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-12">
                                        <input type="radio" name="used_post_harvest_handling_and_processing_techniques"
                                               id="used_post_harvest_handling_and_processing_techniques" value="1"/>Yes<br>
                                        <input type="radio" name="used_post_harvest_handling_and_processing_techniques"
                                               id="used_post_harvest_handling_and_processing_techniques" value="2"/>No
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-12">
                                        <input type="radio" name="had_the_opportunity_to_plant_crops_in_rows"
                                               id="had_the_opportunity_to_plant_crops_in_rows" value="1"/>Yes<br>
                                        <input type="radio" name="had_the_opportunity_to_plant_crops_in_rows"
                                               id="had_the_opportunity_to_plant_crops_in_rows" value="2"/>No
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-12">
                                        <textarea name="" cols="400" id="other_techniques_used" id="other_techniques_used"
                                                  class="form-control"></textarea>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <hr>
            <div class="document-part-header">Table 6.0: % Change in People\'s knowledge on Marketing and Processing </div >

            <hr >
            <div class="document-part-content" >
                <div class="row" >
                    <div class="col-md-12" >
                        <table class="table table-bordered table-responsive" >
                            <tr >
                                <th style = "width: 25%;" > Q - 48: Do you sell all your vegetable products ?</th >
                                <th colspan = "3" style = "width: 75%;" > Q - 49: In what forms do you market the product ?</th >
                            </tr >
                            <tr >
                                <td >
                                    <div class="col-md-12" >
                                        <input type = "radio" name = "sells_all_vegetable_products" id = "sells_all_vegetable_products"
                                               value = "1" />Yes<br >
                                        <input type = "radio" name = "sells_all_vegetable_products" id = "sells_all_vegetable_products"
                                               value = "2" />No
                                    </div >
                                </td >
                                <td >
                                    <div class="col-md-12">
                                        <label for="place_1">Place 1:</label>
                                    <input type="text" class="form - control" name="vegetable_market_place_1"
                                           id="vegetable_market_place_1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="col - md - 12" >
                                        <label for="place_2" > Place 2:</label >
                                    <input type = "text" class="form-control" name = "vegetable_market_place_2"
                                           id = "vegetable_market_place_2" />
                                    </div >
                                </td >
                                <td >
                                    <div class="col-md-12"">
                                        <label for="place_3">Place 3:</label>
                                    <input type="text" class="form - control" name="vegetable_market_place_3"
                                           id="vegetable_market_place_3"/>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                </div >
                <hr >';

        return $output;

    }

    function fetch_associated_group_members_for_underground_water($group_id)
    {

        $this->db->where('GROUPS', $group_id);
        $this->db->order_by('NAME', 'ASC');

        $query = $this->db->get('MEMBERSHIP');
        // Did not provide the information
        $output = '<div class="document-part-header">
            Table 2.0: % Increase in target group\'s knowledge on problems affecting vegetable/crop production and challenges on the marketing aspect
            </div>
        
            <hr>
        
            <div class="document-part-content">
        
                <div class="col-md-12">
                    <table class="table table-bordered table-responsive">
                        <tr>
                            <td style="width: 50%;">
                                <div class="col-md-12">
                                    Q - 12: Mention problems affecting vegetable production<br><br>
                                    <textarea class="form-control" name="problems_affecting_vegetable_production"
                                              id="problems_affecting_vegetable_production"></textarea>
        
                                </div>
                            </td>
                            <td style="width: 50%;">
                                <div class="col-md-12"">
                                    Q - 12: Mention the challenges faced in marketing vegetable products<br><br>
                                <textarea class="form-control" name="challenges_faced_in_marketing_vegetable_products"
                                          id="challenges_faced_in_marketing_vegetable_products"></textarea>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <hr>
            <div class="document-part-header">
                Table 3.0: Vegetable Product
            </div>
            <hr>
            <div class="document-part-content">
                <table class="table table-bordered table-responsive">
                    <tr>
                        <td style="width: 50%;">
                            <div class="col-md-12">
                                % increase in value of sales (UGX)
                            </div>
                        </td>
                        <td style="width: 50%;">
                            <div class="col-md-12">
                                <input type="number" name="percentage_increase_in_sale_of_vegetable"
                                       id="percentage_increase_in_sale_of_vegetable" class="form-control"/>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 50%;">
                            <div class="col-md-12">
                                % increase in productivity (Kg/Acre)
                            </div>
                        </td>
                        <td style="width: 50%;">
                            <div class="col-md-12">
                                <input type="number" name="percentage_increase_in_productivity_of_vegetable"
                                       id="percentage_increase_in_productivity_of_vegetable" class="form-control"/>
                            </div>
                        </td>
                    </tr>
                </table><br>   
                <hr>
                <div id="vegetable_table">
                <table class="table table-bordered table-responsive">
                    <tr>
                        <th>Individual ID</th>
                        <th>Individual Name</th>
                        <th>Sex</th>
                        <th>Vulnerability</th>
                        <th colspan="5">Q1. Vegetable 1: Onion</th>
                        <th colspan="5">Q6. Vegetable 2: Tomatoes</th>
                        <th colspan="5">Q11. Vegetable 3: Egg Plants</th>
                        <th colspan="5">Q16. Vegetable 4: Okra</th>
                    </tr>';

        foreach ($query->result() as $row) {

            $output .= '<tr>
                        <td>' . $row->MEMBERSHIP_ID . '</td>
                        <td>' . $row->NAME . '</td>
                        <td>' . $row->SEX . '</td>
                        <td>' . $this->get_vulnerability_name($row->VULNERABILITY) . '</td>
                        <td>
                            <div class="col-md-12">
             <input type="text" name="onions_support' . $row->ID . '" id="onions_support' . $row->ID . '" style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            ACRES: <input type="number" name="onions_acres' . $row->ID . '" id="onions_acres' . $row->ID . '" style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            YIELD: <input type="number" name="onions_yield' . $row->ID . '" id="onions_yield' . $row->ID . '" style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            SOLD: <input type="number" name="onions_sold' . $row->ID . '" id="onions_sold' . $row->ID . '" style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            UGX: <input type="number" name="onions_amount_ugx' . $row->ID . '" id="onions_amount_ugx' . $row->ID . '" style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
             <input type="text" name="tomatoes_support' . $row->ID . '" id="tomatoes_support' . $row->ID . '" style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            ACRES: <input type="number" name="tomatoes_acres' . $row->ID . '" id="tomatoes_acres' . $row->ID . '" style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            YIELD: <input type="number" name="tomatoes_yield' . $row->ID . '" id="tomatoes_yield' . $row->ID . '" style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            SOLD: <input type="number" name="tomatoes_sold' . $row->ID . '" id="tomatoes_sold' . $row->ID . '" style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            UGX: <input type="number" name="tomatoes_amount_ugx' . $row->ID . '" id="tomatoes_amount_ugx' . $row->ID . '" style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
             <input type="text" name="egg_plants_support' . $row->ID . '" id="egg_plants_support' . $row->ID . '" style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            ACRES: <input type="number" name="egg_plants_acres' . $row->ID . '" id="egg_plants_acres' . $row->ID . '" style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            YIELD: <input type="number" name="egg_plants_yield' . $row->ID . '" id="egg_plants_yield' . $row->ID . '"  style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            SOLD: <input type="number" name="egg_plants_sold' . $row->ID . '" id="egg_plants_sold' . $row->ID . '"  style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            UGX: <input type="number" name="egg_plants_amount_ugx' . $row->ID . '" id="egg_plants_amount_ugx' . $row->ID . '"  style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
             <input type="text" name="okra_support' . $row->ID . '" id="okra_support' . $row->ID . '" style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            ACRES: <input type="number" name="okra_acres' . $row->ID . '" id="okra_acres' . $row->ID . '"  style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            YIELD: <input type="number" name="okra_yield' . $row->ID . '" id="okra_yield' . $row->ID . '"  style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            SOLD: <input type="number" name="okra_sold' . $row->ID . '" id="okra_sold' . $row->ID . '"  style="width: 45px;" />
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
            UGX: <input type="number" name="okra_amount_ugx' . $row->ID . '" id="okra_amount_ugx' . $row->ID . '"  style="width: 45px;" />
                            </div>
                        </td>
                    </tr>';
        }

        $output .= '</table>';
        $output .= '</div>
        
                </div>
            
            <hr>';
        $output .= '
            <div class="document-part-header">Table 5.0: Number of Misean Cara beneficiaries adopting new technologies in vegetables and crop production</div>
            <hr>
            <div class="document-part-content">
                <div class="row">
                    <div class="col-md-12">
                        <strong>Did you use any of the following technologies during your production process?</strong>
                    </div>
                </div><br>
            
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-responsive">
                            <tr>
                                <th>Q - 41: Did you use any improved seed during the year in your production</th>
                                <th>Q - 42: Did you use underground water in your crop production process during the dry season?</th>
                                <th>Q - 43: Did you use any pesticides on your crops(vegetables)?</th>
                                <th>Q - 44: Use of farm imlements e.g. zero tillage during land opening?</th>
                                <th>Q - 45: Have you been using any method of post-harvest handling and processing techniques?</th>
                                <th>Q - 46: Did you have any opportunity in planting your crops in Rows/Lines as oppsed to random
                                    sowing/scattering?
                                </th>
                                <th>Q - 47: What other techniques did you use apart from the ones discussed here? (Name them)</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12">
                                        <input type="radio" name="used_improved_seeds" id="used_improved_seeds" value="1"/>Yes<br>
                                        <input type="radio" name="used_improved_seeds" id="used_improved_seeds" value="2"/>No
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-12">
                                        <input type="radio" name="used_underground_water_during_dry_season"
                                               id="used_underground_water_during_dry_season" value="1"/>Yes<br>
                                        <input type="radio" name="used_underground_water_during_dry_season"
                                               id="used_underground_water_during_dry_season" value="2"/>No
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-12">
                                        <input type="radio" name="used_pesticides" id="used_pesticides" value="1"/>Yes<br>
                                        <input type="radio" name="used_pesticides" id="used_pesticides" value="2"/>No
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-12">
                                        <input type="radio" name="used_farm_implements" id="used_farm_implements" value="1"/>Yes<br>
                                        <input type="radio" name="used_farm_implements" id="used_farm_implements" value="2"/>No
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-12">
                                        <input type="radio" name="used_post_harvest_handling_and_processing_techniques"
                                               id="used_post_harvest_handling_and_processing_techniques" value="1"/>Yes<br>
                                        <input type="radio" name="used_post_harvest_handling_and_processing_techniques"
                                               id="used_post_harvest_handling_and_processing_techniques" value="2"/>No
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-12">
                                        <input type="radio" name="had_the_opportunity_to_plant_crops_in_rows"
                                               id="had_the_opportunity_to_plant_crops_in_rows" value="1"/>Yes<br>
                                        <input type="radio" name="had_the_opportunity_to_plant_crops_in_rows"
                                               id="had_the_opportunity_to_plant_crops_in_rows" value="2"/>No
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-12">
                                        <textarea name="" cols="400" id="other_techniques_used" id="other_techniques_used"
                                                  class="form-control"></textarea>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <hr>
            <div class="document-part-header">Table 6.0: % Change in People\'s knowledge on Marketing and Processing </div >

            <hr >
            <div class="document-part-content" >
                <div class="row" >
                    <div class="col-md-12" >
                        <table class="table table-bordered table-responsive" >
                            <tr >
                                <th style = "width: 25%;" > Q - 48: Do you sell all your vegetable products ?</th >
                                <th colspan = "3" style = "width: 75%;" > Q - 49: In what forms do you market the product ?</th >
                            </tr >
                            <tr >
                                <td >
                                    <div class="col-md-12" >
                                        <input type = "radio" name = "sells_all_vegetable_products" id = "sells_all_vegetable_products"
                                               value = "1" />Yes<br >
                                        <input type = "radio" name = "sells_all_vegetable_products" id = "sells_all_vegetable_products"
                                               value = "2" />No
                                    </div >
                                </td >
                                <td >
                                    <div class="col-md-12">
                                        <label for="place_1">Place 1:</label>
                                    <input type="text" class="form - control" name="vegetable_market_place_1"
                                           id="vegetable_market_place_1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="col - md - 12" >
                                        <label for="place_2" > Place 2:</label >
                                    <input type = "text" class="form-control" name = "vegetable_market_place_2"
                                           id = "vegetable_market_place_2" />
                                    </div >
                                </td >
                                <td >
                                    <div class="col-md-12"">
                                        <label for="place_3">Place 3:</label>
                                    <input type="text" class="form - control" name="vegetable_market_place_3"
                                           id="vegetable_market_place_3"/>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                </div >
                <hr >';

        return $output;

    }

    function insert_record($field_data)
    {
        $this->db->insert('MEMBERSHIP', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function fetch_single_row_data_to_edit($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('MEMBERSHIP');

        return $data;

    }

    function get_member_name_from_db($member_id)
    {

        #Obtaining the child name
        $this->db->select('NAME');
        $this->db->where('MEMBERSHIP_ID', $member_id);
        $this->db->limit(1);

        $child_data = $this->db->get('MEMBERSHIP');

        foreach ($child_data->result() as $row) {
            $member_name = $row->NAME;
        }

        return $member_name;
    }

    function get_member_sex($member_id)
    {
        $this->db->where('MEMBERSHIP_ID', $member_id);

        $query = $this->db->get('MEMBERSHIP');
        $record_value = '';

        foreach ($query->result() as $record) {
            $record_value = $record->SEX;
        }

        return $record_value;
    }

    function get_fishing_member_group($table, $row_id)
    {
        $this->db->where('ID', $row_id);

        $query = $this->db->get($table);
        $group_id = '';

        foreach ($query->result() as $member) {
            $member_id = $member->INDIVIDUAL_ID;
            $this->db->where('MEMBERSHIP_ID', $member_id);
            $queryset = $this->db->get('MEMBERSHIP');

            foreach ($queryset->result() as $resultset) {
                $group_id = $resultset->GROUPS;
            }
        }

        return $group_id;
    }

    function get_crop_production_member_group($table, $row_id)
    {
        $this->db->where('ID', $row_id);

        $query = $this->db->get($table);
        $group_id = '';

        foreach ($query->result() as $member) {
            $member_id = $member->INDIVIDUAL;
            $this->db->where('MEMBERSHIP_ID', $member_id);
            $queryset = $this->db->get('MEMBERSHIP');

            foreach ($queryset->result() as $resultset) {
                $group_id .= $resultset->GROUPS;
            }
        }

        return $group_id;
    }

    function check_if_this_member_changed_group($row_id, $group_id)
    {
        $this->db->where('ID', $row_id);
        $result = $this->db->get('MEMBERSHIP');

        foreach ($result->result() as $data) {
            if ($data->GROUPS == $group_id) {
                return false;
            } else {
                return true;
            }
        }
    }

    function prepare_list_of_members_for_this_group($group_id)
    {
        $this->db->where('GROUPS', $group_id);
        $this->db->where('STATUS', TRUE);
        $this->db->order_by('NAME', 'ASC');

        $query = $this->db->get('MEMBERSHIP');

        if ($query->num_rows() > 0) {
            $counter = 0;
            $output = '<table border="1px solid" style="border-collapse: collapse;">';
            $output .= '<tr>
                            <th style="width: 80px;">#</th>
                            <th style="width: 200px;">INDIVIDUAL ID</th>
                            <th style="width: 200px;">NAME</th>
                            <th style="width: 200px;">SIGNATURE</th>
                        </tr>
                        ';
            foreach ($query->result() as $row) {
                $output .= '
                    <tr>
                        <td>' . ++$counter . '</td>
                        <td>' . $row->MEMBERSHIP_ID . '</td>
                        <td>' . $row->NAME . '</td>
                        <td>&nbsp;</td>
                    </tr>
                ';
            }
            $output .= '</table>';

            return $output;
        }


    }

    function show_blank_registration_sheet_for_this_group($group_id)
    {
        $this->db->where('GROUPS', $group_id);
        $this->db->where('STATUS', TRUE);
        $this->db->order_by('NAME', 'ASC');

        $query = $this->db->get('MEMBERSHIP');

        if ($query->num_rows() > 0) {
            $counter = 0;
            $output = '<table class="table table-striped" border="1px solid" style="border-collapse: collapse;">';
            $output .= '<tr>
                            <th style="width: 80px; text-align: center"><input type="checkbox" id="select-all" onchange="select_all_members();" /> </th>
                            <th style="width: 400px;">INDIVIDUAL ID</th>
                            <th style="width: 400px;">NAME</th>
                        </tr>
                        ';
            foreach ($query->result() as $row) {
                $output .= '
                    <tr style="height: 30px;">
                        <td style="text-align: center;"><input type="checkbox"  value="' . $row->MEMBERSHIP_ID . '" class="group_members_trained" name="training_group_members_attendants[]" id="training_group_members_attendants" onchange="check_if_a_field_is_unchecked();" /> </td>
                        <td>' . $row->MEMBERSHIP_ID . '</td>
                        <td>' . $row->NAME . '</td>
                    </tr>
                ';
            }
            $output .= '</table>';
            return $output;
        }


    }

    function update_record($record_id, $field_data)
    {
        $this->db->where('ID', $record_id);
        $this->db->set($field_data);
        $this->db->update('MEMBERSHIP');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return $this->db->error();
        }
    }


}


?>