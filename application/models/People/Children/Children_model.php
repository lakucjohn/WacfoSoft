<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */
require_once (APPPATH.'models/Header.php');
require_once(APPPATH . 'models/Settings/Location_model.php');
require_once(APPPATH . 'models/Settings/Disability_model.php');
class Children_model extends CI_Model{

    private $location;
    private $disability;

    public function __construct()
    {
        $this->location = new Location_model();
        $this->disability = new Disability_model();
    }

    function fetch(){
        $this->db->order_by('ID','DESC');

        return $this->db->get('CHILDREN');
    }

    function fetch_total()
    {
        $this->db->order_by('ID', 'DESC');

        return $this->db->get('CHILDREN')->num_rows();
    }

    function fetch_single_record($row_id){
        $this->db->where('ID', $row_id);

        $data = $this->db->get('CHILDREN');


        $output = '
                <head>
                 <style>
                
                    #innertable td{
                        border-collapse: collapse;
                        border: 1px solid black;
                    }
                
                    #innertable-2 td, th{
                        border-collapse: collapse;
                        border: 1px solid black;
                    }
                </style>
                </head>
                <div class="table-responsive">
                    <div class="card w-100">
                    <table width="100%" class="table table-bordered">
                    ';

        $output.='<tr style="text-align: center">
                    <td>
                        '.showHeader().'
                    </td>
                  </tr>';

        $output.='<tr style="font-size: 18px; font-weight: bold;">
                    <td>
                        CHILD\'S PERSONAL DETAILS
                    </td>
                  </tr>';


        foreach($data->result() as $row) {
            $output .= '
                
                <tr title="' . $row->NAME . '">
                    <td>
                    
                        <table id="innertable" class="table table-bordered" style="border-collapse: collapse; width: 100%; font-size: 12px;">
                            <tr style="height: 40px;">
                                <td style="font-weight:bold; text-align: right;">Child ID:</td>
                                <td>' . $row->CHILD_ID . '</td>
                                <td style="font-weight:bold; text-align: right;">Name of the Child :</td>
                                <td>' . $row->NAME . '</td>
                                <td style="font-weight:bold; text-align: right;">Gender :</td>
                                <td>' . $row->SEX . '</td>
                            </tr>
                            <tr style="height: 40px;">
                                <td style="font-weight:bold; text-align: right;">Date of Birth :</td>
                                <td>' . $row->DATE_OF_BIRTH . '</td>
                                <td style="font-weight:bold; text-align: right;">Vulnerability :</td>
                                <td>' . $this->disability->get_disability_name($row->VULNERABILITY) . '</td>
                                <td style="font-weight:bold; text-align: right;">Date of Joining :</td>
                                <td>' . $row->DATE_OF_JOINING . '</td>
                            </tr>
                            <tr style="height: 40px;">
                                <td style="font-weight:bold; text-align: right;">Mother\'s Name :</td>
                                <td>' . $row->MOTHER . '</td>
                                <td style="font-weight:bold; text-align: right;">Father\'s Name :</td>
                                <td>' . $row->FATHER . '</td>
                                <td style="font-weight:bold; text-align: right;">Guardian\'s Name :</td>
                                <td>' . $row->GUARDIAN . '</td>
                            </tr>
                            
                            <tr><td colspan="6">&nbsp;</td></tr>
                            
                            <tr style="font-size: 18px; font-weight: bold;"><td colspan="6">ASSESSMENT RECORDS</td></tr>
                            
                            ' . $this->fetch_assessment_1_records_for_this_child($row->CHILD_ID) . '
                            
                            <tr><td colspan="6">&nbsp;</td></tr>
                            ' . $this->fetch_assessment_2_records_for_this_child($row->CHILD_ID) . '
                            <tr><td colspan="6">&nbsp;</td></tr>
                            
                            <tr style="font-size: 18px; font-weight: bold;"><td colspan="6">VISIT RECORDS</td></tr>
                            
                            ' . $this->fetch_child_visitation_records($row->CHILD_ID) . '
                        
                        </table>
                        
                    </td>
                </tr>';
        }


        $output .= '
                            </table>
                        </div>
                    </div>';

        return $output;
    }

    function fetch_assessment_1_records_for_this_child($child_id)
    {
        $this->db->where('CHILD_ID', $child_id);
        $this->db->where('STATUS', TRUE);

        $query = $this->db->get('ASSESSMENT_1_RECORDS');

        $output = '';
        foreach ($query->result() as $row) {
            $output .= '<tr style="font-weight: bold"><td colspan="6">PART 1: ASSESSMENT FORM 1</td> </tr>                        
                        <tr style="height: 40px;">
                            <td style="font-weight:bold; text-align: right;">County :</td>
                            <td>' . $this->location->get_county_name($row->COUNTY) . '</td>
                            <td style="font-weight:bold; text-align: right;">Sub-county :</td>
                            <td>' . $this->location->get_subcounty_name($row->SUBCOUNTY) . '</td>
                            <td style="font-weight:bold; text-align: right;">Parish :</td>
                            <td>' . $this->location->get_parish_name($row->PARISH) . '</td>
                        </tr>
                        <tr style="height: 40px;">
                            <td style="font-weight:bold; text-align: right;">Village :</td>
                            <td colspan="5">' . $this->location->get_village_name($row->VILLAGE) . '</td>
                        </tr>  
                        <tr style="height: 40px;">
                            <td colspan="6">&nbsp;</td>
                        </tr>                   
                        <tr style="white-space: pre-wrap; height: 40px;">
                            <td style="font-weight:bold; text-align: right;">Health Centre :</td>
                            <td>' . $row->HEALTH_CENTRE . '</td>
                            <td style="font-weight:bold; text-align: right;">Name of the CBR Worker: </td>
                            <td>' . $row->CBR_NAME . '</td>
                            <td style="font-weight:bold; text-align: right;">Date Recorded: </td>
                            <td>' . $row->DATE_ENTERED . '</td>
                        </tr>
                        <tr style="height: 40px;">
                            <td style="font-weight:bold; text-align: right;">Disability Type :</td>
                            <td colspan="5">' . $row->DISABILITY_TYPE . '</td>
                        </tr>';
            $output .= '<tr style="height: 40px;">';
            $output .= '<td style="font-weight:bold; text-align: right;">Where the child lives :</td>';

            if ($row->WHERE_THE_CHILD_LIVES != 'Other') {
                $output .= '<td colspan="5">' . $row->WHERE_THE_CHILD_LIVES . '</td>';
            } else {
                $output .= '<td colspan="5">' . $row->OTHER_SPECIFIED_PLACE . '</td>';
            }

            $output .= '</tr>';

            $output .= '<tr style="height: 40px;">';
            $output .= '<td style="font-weight:bold; text-align: right;">Are there other disabled children in the family?:</td>';

            if (!$row->OTHER_DISABLED_CHILDREN) {
                $output .= '<td colspan="5">No</td>';
            } else {
                $output .= '<td>Yes</td>';
                $output .= '<td>How many?</td>';
                $output .= '<td colspan="3">' . $row->NUMBER_OF_OTHER_DISABLED_CHILDREN . '</td>';
            }

            $output .= '</tr>';

            $output .= '<tr style="height: 40px;">';
            $output .= '<td style="font-weight:bold; text-align: right;">Are the Parents/Guardians able to provide basic needs?:</td>';

            if ($row->ABLE_TO_PROVIDE_BASIC_NEEDS) {
                $output .= '<td colspan="5">Yes</td>';
            } else {
                $output .= '<td>No</td>';
                $output .= '<td>Explain why?</td>';
                $output .= '<td colspan="3">' . $row->EXPLANATION_FOR_INABILITY_TO_PROVIDE_BASIC_NEEDS . '</td>';
            }

            $output .= '</tr>';

            $output .= '<tr style="height: 40px;">
                            <td style="font-weight:bold; text-align: right;">Description of the disability :</td>
                            <td colspan="5">' . $row->DISABILITY_DESCRIPTION . '</td>
                        </tr>';

            $output .= '</tr>';

            $output .= '<tr style="height: 40px;">';
            $output .= '<td style="font-weight:bold; text-align: right;">Does the child use medicine?:</td>';

            if (!$row->CHILD_USES_MEDICINE) {
                $output .= '<td colspan="5">No</td>';
            } else {
                $output .= '<td>Yes</td>';
                $output .= '<td>Give its name</td>';
                $output .= '<td colspan="3">' . $row->NAME_OF_MEDICINE . '</td>';
            }

            $output .= '</tr>';

            $output .= '<tr style="height: 40px;">';
            $output .= '<td style="font-weight:bold; text-align: right;">Does the child have fits?: </td>';

            if ($row->CHILD_HAS_FITS) {
                $output .= '<td colspan="5">Yes</td>';
            } else {
                $output .= '<td>No</td>';
                $output .= '<td> How many times?</td>';
                $output .= '<td colspan="3">' . $row->NUMBER_OF_FITS . '</td>';
            }

            $output .= '</tr>';

            $output .= '<tr style="height: 40px;">';
            $output .= '<td style="font-weight:bold; text-align: right;">Does the child\'s limbs move well?: </td>';

            if ($row->LIMBS_MOVE_WELL == 1) {
                $output .= '<td colspan="5">Yes</td>';
            } else if ($row->LIMBS_MOVE_WELL == 0) {
                $output .= '<td colspan="5">No</td>';
            } else if ($row->LIMBS_MOVE_WELL == 2) {
                $output .= '<td>Some</td>';
                $output .= '<td> Which ones?</td>';
                $output .= '<td colspan="3">' . $row->LIMBS_THAT_MOVE_WELL . '</td>';
            }

            $output .= '</tr>';

            $output .= '<tr style="height: 40px;">';
            $output .= '<td style="font-weight:bold; text-align: right;">Does the child use aids/appliances?: </td>';

            if (!$row->CHILD_USES_AIDS) {
                $output .= '<td colspan="5">No</td>';
            } else {
                $output .= '<td>Yes</td>';
                $output .= '<td> Which ones?</td>';
                $output .= '<td colspan="3">' . $row->TYPE_OF_AIDS_USED . '</td>';
            }

            $output .= '</tr>';
            $output .= '<tr style="white-space: pre-wrap; height: 40px;">';
            $output .= '<td style="font-weight:bold; text-align: right;">Can the child talk?:</td>';

            if (!$row->CHILD_TALKS) {
                $output .= '<td>No</td>';
            } else {
                $output .= '<td>Yes</td>';
            }

            $output .= '<td style="font-weight:bold; text-align: right;">Can the child see?: </td>';

            if (!$row->CHILD_SEES) {
                $output .= '<td>No</td>';
            } else {
                $output .= '<td>Yes</td>';
            }

            $output .= '<td style="font-weight:bold; text-align: right;">Mental capacity of the child: </td>';
            $output .= '<td>' . $row->MENTAL_CAPACITY . '</td>';
            $output .= '</tr>';

            $output .= '<tr style="white-space: pre-wrap; height: 40px;">';
            $output .= '<td style="font-weight:bold; text-align: right;">Can the child eat and drink by himself?:</td>';

            if (!$row->EATS_AND_DRINKS) {
                $output .= '<td>No</td>';
            } else {
                $output .= '<td>Yes</td>';
            }

            $output .= '<td style="font-weight:bold; text-align: right;">Can the child wash and dry by himself?:</td>';

            if (!$row->WASHES_AND_DRESSES) {
                $output .= '<td>No</td>';
            } else {
                $output .= '<td>Yes</td>';
            }

            $output .= '<td style="font-weight:bold; text-align: right;">Can the child manage toilet activities?:</td>';

            if (!$row->TOILET_ACTIVITIES) {
                $output .= '<td>No</td>';
            } else {
                $output .= '<td>Yes</td>';
            }
            $output .= '</tr>';

            $output .= '<tr style="white-space: pre-wrap; height: 40px;">';
            $output .= '<td style="font-weight:bold; text-align: right;">How does the child move inside and outside?:</td>';

            $output .= '<td>' . $row->HOW_THE_CHILD_MOVES . '</td>';

            $output .= '<td style="font-weight:bold; text-align: right;">The child plays with other children?:</td>';

            if (!$row->CHILD_PLAYS_WITH_OTHERS) {
                $output .= '<td>No</td>';
            } else {
                $output .= '<td>Yes</td>';
            }

            $output .= '<td style="font-weight:bold; text-align: right;">The child helps with household cores?:</td>';

            if (!$row->HELPS_IN_HOUSEHOLD_CORES) {
                $output .= '<td>No</td>';
            } else {
                $output .= '<td>Yes</td>';
            }
            $output .= '</tr>';

            $output .= '<tr style="white-space: pre-wrap; height: 40px;">';

            $output .= '<td style="font-weight:bold; text-align: right;">The child is accepted by the family and loved?: </td>';

            if (!$row->ACCEPTED_BY_FAMILY_AND_LOVED) {
                $output .= '<td>No</td>';
            } else {
                $output .= '<td>Yes</td>';
            }

            $output .= '<td style="font-weight:bold; text-align: right;">The child is accepted by the community?:</td>';

            if (!$row->ACCEPTED_BY_COMMUNITY) {
                $output .= '<td colspan="3">No</td>';
            } else {
                $output .= '<td  colspan="3">Yes</td>';
            }
            $output .= '</tr>';

            $output .= '<tr style="white-space: pre-wrap; height: 40px;">';

            $output .= '<td style="font-weight:bold; text-align: right;">The child goes to school?: </td>';

            if (!$row->GOES_TO_SCHOOL) {
                $output .= '<td>No</td>';
            } else {
                $output .= '<td>Yes</td>';
                $output .= '<td>which one?:</td>';
                $output .= '<td colspan="3">' . $row->SCHOOL . '</td>';
            }
            $output .= '</tr>';
            $output .= '</tr>';

            $output .= '<tr style="white-space: pre-wrap; height: 40px;">';

            $output .= '<td style="font-weight:bold; text-align: right;">Does the child go to school?: </td>';

            if (!$row->GOES_TO_SCHOOL) {
                $output .= '<td>No</td>';
            } else {
                $output .= '<td>Yes</td>';
                $output .= '<td>which one?:</td>';
                $output .= '<td colspan="3">' . $row->SCHOOL . '</td>';
            }
            $output .= '</tr>';

            $output .= '<tr style="white-space: pre-wrap; height: 40px;">';

            $output .= '<td style="font-weight:bold; text-align: right;">Comment: </td>';

            $output .= '<td colspan="5">' . $row->COMMENT . '</td>';
            $output .= '</tr>';

        }

        return $output;
    }

    function fetch_assessment_2_records_for_this_child($child_id)
    {
        $this->db->where('CHILD', $child_id);
        $this->db->where('STATUS', TRUE);

        $query = $this->db->get('ASSESSMENT_2_RECORDS_NEW');

        $output = '';
        foreach ($query->result() as $row) {
            $output .= '<tr style="font-weight: bold"><td colspan="6">PART 2: ASSESSMENT FORM 2</td> </tr>
                        <tr style="height: 40px;">
                            <td style="font-weight:bold; text-align: right;">Date of first screening:</td>
                            <td colspan="5">' . $row->DATE_OF_FIRST_SCREENING . '</td>
                        </tr>';
            $output .= '
                        <tr style="height: 40px;">
                            <td style="font-weight:bold; text-align: right;">Identified By: </td>
                            <td colspan="2">' . $row->IDENTIFIED_BY . '</td>
                            <td style="font-weight:bold; text-align: right;">Assessed By: </td>
                            <td colspan="2">' . $row->ASSESSED_BY . '</td>
                        </tr>';
            $output .= '
                        <tr style="height: 40px;">
                            <td style="font-weight:bold; text-align: right;">Nearest Health Centre: </td>
                            <td colspan="2">' . $row->NEAREST_HEALTH_CENTRE . '</td>
                            <td style="font-weight:bold; text-align: right;">Distance (in KM): </td>
                            <td colspan="2">' . $row->DISTANCE . '</td>
                        </tr>';
            $output .= '
                        <tr style="height: 40px;">
                            <td style="font-weight:bold; text-align: right;">Venue: </td>
                            <td colspan="5">' . $row->VENUE_FOR_SCREENING . '</td>
                        </tr>';
            $output .= '
                        <tr style="height: 40px;">
                            <td style="font-weight:bold; text-align: right;">Medical History:  </td>
                            <td colspan="5">' . $row->MEDICAL_HISTORY . '</td>
                        </tr>';
            $output .= '
                        <tr style="height: 40px;">
                            <td style="font-weight:bold; text-align: right;">Findings: </td>
                            <td colspan="5">' . $row->FINDINGS . '</td>
                        </tr>';
            $output .= '
                        <tr style="height: 40px;">
                            <td style="font-weight:bold; text-align: right;">Disability: </td>
                            <td colspan="5">' . $row->DISABILITY . '</td>
                        </tr>';
            $output .= '
                        <tr style="height: 40px;">
                            <td style="font-weight:bold; text-align: right;">Recommendations: </td>
                            <td colspan="5">' . $row->RECOMMENDATION . '</td>
                        </tr>';
            $output .= '
                        <tr style="height: 40px;">
                            <td style="font-weight:bold; text-align: right;">Screened By: </td>
                            <td colspan="2">' . $row->SCREENED_BY . '</td>
                            <td style="font-weight:bold; text-align: right;">Title: </td>
                            <td colspan="2">' . $row->TITLE . '</td>
                        </tr>';
            $output .= '
                        <tr style="height: 40px;">
                            <td style="font-weight:bold; text-align: right;">Date of Recording: </td>
                            <td colspan="5">' . $row->DATE_ENTERED . '</td>
                        </tr>';
        }

        return $output;

    }

    function fetch_child_visitation_records($child_id)
    {
        $this->db->where('CHILD_ID_VISITED', $child_id);
        $this->db->where('STATUS', TRUE);
        $query = $this->db->get('VISIT_RECORDS');

        $output = '<tr><td colspan="6">';
        $output .= '<table id="innertable-2" class="table table-bordered" style="border-collapse: collapse; width: 100%; font-size: 12px;">';
        $output .= '<tr>';
        $output .= '<th>DATE OF VISIT</th>';
        $output .= '<th>KIND OF VISIT</th>';
        $output .= '<th>PROJECT</th>';
        $output .= '<th>VILLAGE</th>';
        $output .= '<th>ACTIVITY CARRIED OUT</th>';
        $output .= '<th>COMMENT</th>';
        $output .= '<th>NEXT VISIT ACTIVITY</th>';
        $output .= '<th>NEXT VISIT_DATE </th>';
        $output .= '<th> STAFF</th>';
        $output .= '</tr>';
        foreach ($query->result() as $row) {
            $output .= '<tr>';
            $output .= '<td>' . $row->DATE_OF_VISIT . '</td>';
            $output .= '<td>' . $row->KIND_OF_VISIT . '</td>';
            $output .= '<td>' . $row->PROJECT . '</td>';
            $output .= '<td>' . $this->location->get_village_name($row->VILLAGE) . '</td>';
            $output .= '<td>' . $row->ACTIVITY_CARRIED_OUT . '</td>';
            $output .= '<td>' . $row->COMMENT . '</td>';
            $output .= '<td>' . $row->NEXT_VISIT_ACTIVITY . '</td>';
            $output .= '<td>' . $row->NEXT_VISIT_DATE . '</td>';
            $output .= '<td>' . $row->WACFO_STAFF . '</td>';
            $output .= '</tr>';
        }
        $output .= '</table>';
        $output .= '</td></tr>';

        return $output;
    }

    function insert_record($field_data)
    {
        $this->db->insert('CHILDREN', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function get_child_name_from_db($child_id)
    {

        #Obtaining the child name
        $this->db->select('NAME');
        $this->db->where('CHILD_ID', $child_id);
        $this->db->limit(1);

        $child_data = $this->db->get('CHILDREN');

        foreach ($child_data->result() as $row) {
            $child_name = $row->NAME;
        }

        return $child_name;

    }

    function fetch_single_row_data_to_edit($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('CHILDREN');

        return $data;

    }

    function check_if_this_disability_changed($row_id, $disability)
    {
        $this->db->where('ID', $row_id);
        $result = $this->db->get('CHILDREN');

        foreach ($result->result() as $data) {
            if ($data->VULNERABILITY == $disability) {
                return false;
            } else {
                return true;
            }
        }
    }

    function update_record($record_id, $field_data)
    {
        $this->db->where('ID', $record_id);
        $this->db->set($field_data);
        $this->db->update('CHILDREN');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return $this->db->error();
        }
    }

}

?>