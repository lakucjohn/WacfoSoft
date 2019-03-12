<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */
require_once (APPPATH.'models/Header.php');
class Training_model extends CI_Model{

    function fetch(){
        $this->db->order_by('ID','DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('TRAININGS');
    }

    function fetch_total()
    {
        $this->db->order_by('ID', 'DESC');

        return $this->db->get('TRAININGS')->num_rows();
    }

    function fetch_single_record($row_id){
        $this->db->where('ID', $row_id);

        $data = $this->db->get('TRAININGS');

        $groups_list = array();

        # Retrieving the list of attendants

        #Group Members
        $member_attendants = $this->db->where('TYPE', 'Member');
        $member_attendants = $this->db->where('TRAINING_ID', $row_id);
        $member_attendants = $this->db->where('STATUS', TRUE);
        $member_attendants = $this->db->get('TRAINING_ATTENDANCE');

        #Non Group Members
        $non_member_attendants = $this->db->where('TYPE', 'Non-Member');
        $non_member_attendants = $this->db->where('TRAINING_ID', $row_id);
        $non_member_attendants = $this->db->where('STATUS', TRUE);
        $non_member_attendants = $this->db->get('TRAINING_ATTENDANCE');

        #Getting the group of the attendants
        foreach ($member_attendants->result() as $attendant) {
            $member_details = $this->db->where('MEMBERSHIP_ID', $attendant->ATTENDANT);
            $member_details = $this->db->get('MEMBERSHIP');

            foreach ($member_details->result() as $detail) {
                if (!in_array($detail->GROUPS, $groups_list)) {
                    array_push($groups_list, $detail->GROUPS);
                }
            }
        }

        $training_outcomes = $this->db->where('TRAINING_ID', $row_id);
        $training_outcomes = $this->db->where('STATUS', TRUE);
        $training_outcomes = $this->db->get('TRAINING_OUTCOMES');

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

        $output .= '<tr style="font-size: 18px; font-weight: bold; background-color: #0c5460; color: #ffffff;">
                    <td>
                        TRAINING INFORMATION
                    </td>
                  </tr>';


        foreach($data->result() as $row) {
            $output .= '
                
                <tr title="' . $row->TOPIC . '">
                    <td>
                    
                        <table style="width: 86%; font-size: 18px;" border="0" class="table table-responsive">
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Date of the Training :</td>
                                <td style="width: 75%">'.$row->DATE_OF_TRAINING.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Topic :</td>
                                <td style="width: 75%">' . $row->TOPIC . '</td>
                            </tr>
                            <tr style="">
                                <td style="width:20%; text-align: right;">Objective :</td>
                                <td style="width: 75%">' . $row->OBJECTIVE . '</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Venue :</td>
                                <td style="width: 75%">'.$row->VENUE.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Trainer :</td>
                                <td style="width: 75%">'.$row->CONDUCTED_BY.'</td>
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

        $output .= '<tr style="font-size: 18px; font-weight: bold; background-color: #0c5460; color: #ffffff;">
                    <td>
                        LIST OF ATTENDANTS
                    </td>
                  </tr>';


        foreach($data->result() as $row){
            $output .= '
                
                <tr title="' . $row->TOPIC . '">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px;" border="0" class="table">
                            <tr style="text-align: right;"><td><a href="' . site_url("training-attendants/$row_id/record-member-list") . '" class="btn btn-primary" style="margin-right: 3rem;">Register Attendants From Registered Group</a>
                            <a href="' . site_url("training-attendants/$row_id/record-new-beneficiary-list") . '" class="btn btn-success">Register Other Attendants</a> </td></tr>' ?>
            <!--                            <tr style="white-space: nowrap; height: 40px;">-->
            <!--                                <td colspan="2" style="text-align: left; font-weight: bold; background-color: rgba(142,124,223,0.41)">* * * * * * * * * * * * * * * * * * * * * * * * MEMBERS FROM REGISTERED GROUPS * * * * * * * * * * * * * * * * * * * * * *</td>-->
            <!--                            </tr>-->
            <?php
            $output .= '<tr style="white-space: nowrap; height: 20px; border-collapse: collapse;">
                                <td colspan="2" style="text-align: left;">
                                    
                                    <div id="accordion">';

            $collapse_row = 0;

            foreach ($groups_list as $group) {

                ++$collapse_row;

                $output .= '<div class="card">
                                                            <div class="card-header" style="height: 40px; padding: .05rem 1.25rem;" id="' . $collapse_row . '">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link" data-toggle="collapse"
                                                                            data-target="#' . $group . '" aria-expanded="true"
                                                                            aria-controls="' . $collapse_row . '">
                                                                                ' . $this->get_group_name_from_db($group) . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#' . $group . '
                                                                    </button>
                                                                </h5>
                                                            </div>
                        
                                                            <div id="' . $group . '" class="collapse" aria-labelledby="' . $collapse_row . '"
                                                                 data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <table class="table table-bordered" style="border-collapse: collapse;">
                                                                        <tr>
                                                                            <th style="width: 10%">#</th>
                                                                            <th style="width: 30%">MEMBERSHIP ID</th>
                                                                            <th style="width: 60%">NAME</th>
                                                                        </tr>';
                #Getting the group of the attendants
                $counter = 0;
                foreach ($member_attendants->result() as $attendant) {
                    $member_details = $this->db->where('MEMBERSHIP_ID', $attendant->ATTENDANT);
                    $member_details = $this->db->get('MEMBERSHIP');

                    foreach ($member_details->result() as $detail) {
                        if ($detail->GROUPS == $group) {
                            $output .= '
                                                                                    <tr>
                                                                                        <td>' . ++$counter . '</td>
                                                                                        <td>' . $detail->MEMBERSHIP_ID . '</td>
                                                                                        <td>' . $detail->NAME . '</td>
                                                                                    </tr>
                                                                                ';
                        }

                    }
                }

                $output .= '</table>
                                                                </div>
                                                            </div>
                                                         </div>';

            }

            $output .= '<div class="card">
                                                            <div class="card-header" style="height: 40px; padding: .05rem 1.25rem;" id="other_attendants">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link" data-toggle="collapse"
                                                                            data-target="#noneMembers" aria-expanded="true"
                                                                            aria-controls="other_attendants">
                                                                                OTHER BENEFICIARIES
                                                                    </button>
                                                                </h5>
                                                            </div>
                        
                                                            <div id="noneMembers" class="collapse" aria-labelledby="other_attendants"
                                                                 data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <table class="table table-bordered" style="border-collapse: collapse;">
                                                                        <tr>
                                                                            <th style="width: 10%">#</th>
                                                                            <th style="width: 40%">NAME</th>
                                                                            <th style="width: 30%">ADDRESS</th>
                                                                            <th style="width: 20%">CONTACT</th>
                                                                        </tr>';

            $counter = 0;

            foreach ($non_member_attendants->result() as $non_member) {

                $output .= '<tr>
                                                                            <td>' . ++$counter . '</td>
                                                                            <td>' . $non_member->ATTENDANT . '</td>
                                                                            <td>' . $non_member->ADDRESS . '</td>
                                                                            <td>' . $non_member->CONTACT . '</td>
                                                                        </tr>';
            }
            $output .= '</table>
                                                                </div>
                                                            </div>
                                                         </div>';

            $output .= '</div>
                                </td>
                            </tr>';
            ?>
            <!--                            <tr style="white-space: nowrap; height: 40px;">-->
            <!--                                <td colspan="2" style="text-align: left; font-weight: bold; background-color: rgba(142,124,223,0.41)">* * * * * * * * * * * * * * * * * * * * * * * * OTHER BENEFICIARIES * * * * * * * * * * * * * * * * * * * * * *</td>-->
            <!--                            </tr>-->
            <!--                            <tr style="white-space: nowrap; height: 40px;">-->
            <!--                                <td colspan="2" style="text-align: left;">Trainer :</td>-->
            <!--                            </tr>-->

            <?php $output .= '</table>
                        
                    </td>
                </tr>
                ';
        }


        $output.='<tr>
                    <td>
                        <hr>
                    </td>
                  </tr>';

        $output .= '<tr style="font-size: 18px; font-weight: bold; background-color: #0c5460; color: #ffffff;">
                    <td>
                        TRAINING OUTCOMES
                    </td>
                  </tr>';


        foreach($data->result() as $row){
            $output .= '
                
                <tr title="' . $row->TOPIC . '">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px;" border="0" class="table">
                            <tr style="text-align: right"><td><a href="' . site_url("training-outcome/$row_id/record-new-outcome") . '" class="btn btn-primary">Record New Training Outcome</a> </td></tr>';
            if ($training_outcomes->num_rows() > 0) {
                foreach ($training_outcomes->result() as $outcome) {
                    $output .= '<tr style = "white-space: nowrap; height: 40px;" >
                                                <td style = "width:20%; text-align: left;" > ' . $outcome->OUTCOME . '</td >
                                            </tr >';
                }
            } else {
                $output .= '<tr style = "white-space: nowrap; height: 40px; color: red;" >
                                                <td style = "width:20%; text-align: left;" >No Records Found</td >
                                            </tr >';
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
        $this->db->select('NAME');
        $this->db->where('GROUP_ID', $group_id);
        $this->db->limit(1);

        $child_data = $this->db->get('GROUPS');

        foreach ($child_data->result() as $row) {
            $group_name = $row->NAME;
        }

        return $group_name;

    }

    function fetch_single_training_and_print($row_id)
    {
        $this->db->where('ID', $row_id);

        $data = $this->db->get('TRAININGS');

        $groups_list = array();

        # Retrieving the list of attendants

        #Group Members
        $member_attendants = $this->db->where('TYPE', 'Member');
        $member_attendants = $this->db->where('TRAINING_ID', $row_id);
        $member_attendants = $this->db->where('STATUS', TRUE);
        $member_attendants = $this->db->get('TRAINING_ATTENDANCE');

        #Non Group Members
        $non_member_attendants = $this->db->where('TYPE', 'Beneficiary');
        $non_member_attendants = $this->db->where('TRAINING_ID', $row_id);
        $non_member_attendants = $this->db->where('STATUS', TRUE);
        $non_member_attendants = $this->db->get('TRAINING_ATTENDANCE');

        #Getting the group of the attendants
        foreach ($member_attendants->result() as $attendant) {
            $member_details = $this->db->where('MEMBERSHIP_ID', $attendant->ATTENDANT);
            $member_details = $this->db->get('MEMBERSHIP');

            foreach ($member_details->result() as $detail) {
                if (!in_array($detail->GROUPS, $groups_list)) {
                    array_push($groups_list, $detail->GROUPS);
                }
            }
        }

        $training_outcomes = $this->db->where('TRAINING_ID', $row_id);
        $training_outcomes = $this->db->where('STATUS', TRUE);
        $training_outcomes = $this->db->get('TRAINING_OUTCOMES');

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

        $output .= '<tr style="font-size: 18px; font-weight: bold; background-color: #0c5460; color: #ffffff;">
                    <td>
                        TRAINING INFORMATION
                    </td>
                  </tr>';


        foreach ($data->result() as $row) {
            $output .= '
                
                <tr title="' . $row->TOPIC . '">
                    <td>
                    
                        <table style="width: 86%; font-size: 18px;" border="0" class="table table-bordered">
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Date of the Training :</td>
                                <td style="width: 75%">'.$row->DATE_OF_TRAINING.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Topic :</td>
                                <td style="width: 75%">' . $row->TOPIC . '</td>
                            </tr>
                            <tr style="">
                                <td style="width:20%; text-align: right;">Objective :</td>
                                <td style="width: 75%">' . $row->OBJECTIVE . '</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Venue :</td>
                                <td style="width: 75%">'.$row->VENUE.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Trainer :</td>
                                <td style="width: 75%">'.$row->CONDUCTED_BY.'</td>
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

        $output .= '<tr style="font-size: 18px; font-weight: bold; background-color: #0c5460; color: #ffffff;">
                    <td>
                        LIST OF ATTENDANTS
                    </td>
                  </tr>';


        foreach ($data->result() as $row) {
            $output .= '
                
                <tr title="' . $row->TOPIC . '">
                    <td>';

            if (!empty($this->fetch_member_attendants_for_this_training($row->ID))) {
                $output .= $this->fetch_member_attendants_for_this_training($row->ID);
            } else {
                $output .= 'No Records Found';
            }

            $output .= '</td>
                </tr>
                ';
        }


        $output .= '<tr>
                    <td>
                        <hr>
                    </td>
                  </tr>';

        $output .= '<tr style="font-size: 18px; font-weight: bold; background-color: #0c5460; color: #ffffff;">
                    <td>
                        TRAINING OUTCOMES
                    </td>
                  </tr>';


        foreach ($data->result() as $row) {
            $output .= '

                <tr title="' . $row->TOPIC . '">
                    <td>

                        <table style="width: 100%; font-size: 18px;" border="0" class="table">';
            if ($training_outcomes->num_rows() > 0) {
                foreach ($training_outcomes->result() as $outcome) {
                    $output .= '<tr style = "white-space: nowrap; height: 40px;" >
                                                <td style = "width:20%; text-align: left;" > ' . $outcome->OUTCOME . '</td >
                                            </tr >';
                }
            } else {
                $output .= '<tr style = "white-space: nowrap; height: 40px; color: red;" >
                                                <td style = "width:20%; text-align: left;" >No Records Found</td >
                                            </tr >';
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

    public function fetch_member_attendants_for_this_training($training_id)
    {
        $this->db->where('TRAINING_ID', $training_id);
        $this->db->where('STATUS', TRUE);

        $query = $this->db->get('TRAINING_ATTENDANCE');

        $output = '<table class="table table-bordered" style="border-collapse: collapse; width: 100%;">';
        $counter = 0;
        foreach ($query->result() as $row) {
            $output .= '<tr>
                            <td style="width: 10%;">' . ++$counter . '</td>';
            $output .= '<td style="width: 30%;">' . $row->ATTENDANT . '</td>';
            $output .= '<td style="width: 10%;">' . $row->TYPE . '</td>';
            $output .= '<td style="width: 20%;">' . $row->ADDRESS . '</td>';
            $output .= '<td style="width: 30%">' . $row->CONTACT . '</td>';
            $output .= '</tr>';
        }

        $output .= '</table>';

        return $output;
    }

    public function insert_record($field_data)
    {
        $this->db->insert('TRAININGS', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function fetch_single_row_data_to_edit($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('TRAININGS');

        return $data;

    }

    function update_record($record_id, $field_data)
    {
        $this->db->where('ID', $record_id);
        $this->db->set($field_data);
        $this->db->update('TRAININGS');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    public function insert_attendance_record($field_data)
    {
        $this->db->insert('TRAINING_ATTENDANCE', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insert_outcome_record($field_data)
    {
        $this->db->insert('TRAINING_OUTCOMES', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function fetch_training_information_for_this_group($group_id)
    {
        $this->db->where('GROUPS', $group_id);
        $this->db->where('STATUS', TRUE);

        $members_query_results = $this->db->get('MEMBERSHIP');

        $this->db->where('STATUS', TRUE);
        $trainings_query_results = $this->db->get('TRAININGS');

        $output = '';

        foreach ($trainings_query_results->result() as $trainings_query_result) {
            foreach ($members_query_results->result() as $members_query_result) {

                if ($this->check_if_member_attended_a_training($members_query_result->MEMBERSHIP_ID, $trainings_query_result->ID)) {
                    $output .= '<tr>
                                <td>' . $trainings_query_result->DATE_OF_TRAINING . '</td>
                                <td>' . $trainings_query_result->TOPIC . '</td>
                                <td>' . $trainings_query_result->CONDUCTED_BY . '</td>
                                <td>' . $trainings_query_result->VENUE . '</td>
                            </tr>';
                    break;
                }

            }

        }
        return $output;
    }

    function check_if_member_attended_a_training($member, $training_id)
    {
        $this->db->where('ATTENDANT', $member);
        $this->db->where('TRAINING_ID', $training_id);
        $this->db->where('STATUS', TRUE);

        $query_result = $this->db->get('TRAINING_ATTENDANCE');

        if ($query_result->num_rows() > 0) {
            return true;
        } else {
            return false;
        }

    }

    public function fetch_training_information_for_this_member($member_id)
    {
        $this->db->where('STATUS', TRUE);
        $query_results = $this->db->get('TRAININGS');

        $output = '';


        foreach ($query_results->result() as $row) {
            if ($this->check_if_member_attended_a_training($member_id, $row->ID)) {
                $output .= '<tr>
                            <td>' . $row->DATE_OF_TRAINING . '</td>
                            <td>' . $row->TOPIC . '</td>
                            <td>' . $row->CONDUCTED_BY . '</td>
                            <td>' . $row->VENUE . '</td>
                        </tr>';
            }
        }


        return $output;

    }


}

?>