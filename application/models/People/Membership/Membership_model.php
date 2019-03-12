
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
                            <a class="btn btn-primary" title="Record New Support" href="' . base_url("People/Groupings/groupings/create_support/$member_id") . '"><i class="fa fa-plus-circle"></i> New Support</a>
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
                            </tr>';
            if (empty($this->fetch_support_for_this_entity($member_id))) {
                $output .= '<tr style="text-align: center; color: red;">
                                            <td colspan="4">No Support Provided</td>
                                            
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
            if (empty($this->fetch_support_for_this_entity($member_id))) {
                $output .= '<tr style="text-align: center; color: red;">
                                            <td colspan="4">No Support Provided</td>
                                            
                                        </tr>';
            } else {
                $output .= $this->fetch_support_for_this_entity($member_id);
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
                <td><div class="col-md-12"><input type="number" name="kitchen_garden' . $row->ID . '" id="kitchen_garden' . $row->ID . '" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" name="fruit_trees' . $row->ID . '" id="fruit_trees' . $row->ID . '" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" name="nrm_practices' . $row->ID . '" id="nrm_practices' . $row->ID . '" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" name="maize_crib' . $row->ID . '" id="maize_crib' . $row->ID . '" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" name="drying_rack' . $row->ID . '" id="drying_rack' . $row->ID . '" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" name="tarpaulin' . $row->ID . '" id="tarpaulin' . $row->ID . '" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" name="granary' . $row->ID . '" id="granary' . $row->ID . '" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" name="papyrus_mat' . $row->ID . '" id="papyrus_mat' . $row->ID . '" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" name="earth_floor' . $row->ID . '" id="earth_floor' . $row->ID . '" style="width: 45px;" /> </div> </td>
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

        $output .= '</table>';

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

    function fetch_associated_group_members_for_vegetable_production($group_id)
    {

        $this->db->where('GROUPS', $group_id);
        $this->db->order_by('NAME', 'ASC');

        $query = $this->db->get('MEMBERSHIP');

//        return print_r($query->result());

        $output = '
            <table class="table table-bordered table-responsive">
            <tr>
                <th>Individual ID</th>
                <th>Individual Name</th>
                <th>Sex</th>
                <th>Vulnerable</th>
                <th colspan="4">Q1. Vegetable 1: Onion</th>
                <th colspan="4">Q6. Vegetable 2: Tomatoes</th>
                <th colspan="4">Q11. Vegetable 3: Egg Plants</th>
                <th colspan="4">Q16. Vegetable 4: Okra</th>
            </tr>';

        foreach ($query->result() as $row) {

            $output .= '<tr>
                <td>' . $row->MEMBERSHIP_ID . '</td>
                <td>' . $row->NAME . '</td>
                <td>' . $row->SEX . '</td>
                <td>' . $row->VULNERABILITY . '</td>
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

        return $output;
    }

    function fetch_associated_group_members_for_crop_production($group_id)
    {

        $this->db->where('GROUPS', $group_id);
        $this->db->order_by('NAME', 'ASC');

        $query = $this->db->get('MEMBERSHIP');

//        return print_r($query->result());

        $output = '
            <table class="table table-bordered table-responsive">
            <tr>
                <th>Individual ID</th>
                <th>Individual Name</th>
                <th>Sex</th>
                <th>Vulnerable</th>
                <th colspan="4">Q21. Crop 1: Soya Beans</th>
                <th colspan="4">Q26. Crop 2: Groundnuts</th>
                <th colspan="4">Q31. Crop 3: Sesames</th>
                <th colspan="4">Q36. Crop 4: Beans</th>
            </tr>';

        foreach ($query->result() as $row) {

            $output .= '<tr>
                <td>' . $row->MEMBERSHIP_ID . '</td>
                <td>' . $row->NAME . '</td>
                <td>' . $row->SEX . '</td>
                <td>' . $row->VULNERABILITY . '</td>
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
                        ACRES: <input type="number" name="ground_nuts_acres' . $row->ID . '" id="ground_nuts_acres' . $row->ID . '"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        YIELD: <input type="number" name="ground_nuts_yield' . $row->ID . '" id="ground_nuts_yield' . $row->ID . '"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        SOLD: <input type="number" name="ground_nuts_sold' . $row->ID . '" id="ground_nuts_sold' . $row->ID . '"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        UGX: <input type="number" name="ground_nuts_amount_ugx' . $row->ID . '" id="ground_nuts_amount_ugx' . $row->ID . '"  style="width: 45px;" />
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

        $output .= '</table>';

        return $output;
    }

    function fetch_associated_group_members_for_fish_farming($group_id)
    {

        $this->db->where('GROUPS', $group_id);
        $this->db->order_by('NAME', 'ASC');

        $query = $this->db->get('MEMBERSHIP');

//        return print_r($query->result());

        $output = '
            <table class="table table-bordered table-responsive">
            <tr>
                <td colspan="8"><div class="row"><div class="col-md-4"> Q1 - % Increase in value of sales (UGX)</div><div class="col-md-6"> <input type="number" name="percentage_increase_in_fish_sales" id="percentage_increase_in_fish_sales" class="form-control" /></div></div></td>
            </tr>
            <tr>
                <td colspan="8"><div class="row"><div class="col-md-4">Q2 - % Increase in productivity (Kg/Acre)</div><div class="col-md-6"> <input type="number" name="percentage_increase_in_fish_productivity" id="percentage_increase_in_fish_productivity" class="form-control" /></div></div></td>
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

        $output .= '</table>';

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
                $group_id = $resultset->GROUPS;
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