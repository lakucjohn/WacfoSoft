<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */
require_once(APPPATH . 'models/Header.php');
class PorticusBaseline_model extends CI_Model{

    function fetch(){
        $this->db->order_by('ID','DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('PORTICUS_BASELINE_ASSESSMENTS');
    }

    function fetch_single_record($row_id){
        $this->db->where('ID', $row_id);

        $data = $this->db->get('PORTICUS_BASELINE_ASSESSMENTS');


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
                        PORTICUS BASELINE ASSESSMENT INFORMATION
                    </td>
                  </tr>';

        $output .= '</table>';

        $output .= '<table class="table table-bordered table-responsive" width="100%" cellspacing="50" cellpadding="50" style="border-collapse: collapse;">';


            foreach($data->result() as $row){
                $output .= '
                
                <tr title="'.$row->NAME_OF_RESPONDENT.'">
                    <td>
                        <table>
                            <tr><td colspan="8">Biodata of Respondent</td></tr>
                            <tr>
                                <td style="text-align: right;"><strong>Name of the Respondent: </strong></td>
                                <td>' . $row->NAME_OF_RESPONDENT . '</td>
                                <td style="text-align: right;"><strong>Age: </strong></td>
                                <td>' . $row->AGE . '</td>
                                <td style="text-align: right;"><strong>Village: </strong></td>
                                <td>' . $row->VILLAGE . '</td>
                                <td style="text-align: right;"><strong>Gender: </strong></td>
                                <td>' . $row->GENDER . '</td>
                            </tr>
                            <tr><td colspan="8">&nbsp;</td></tr>
                            <tr><td colspan="8">Biodata of the Vulnerable</td></tr>
                            <tr>
                                <td style="text-align: right;"><strong>Name of the Vulnerable: </strong></td>
                                <td>' . $row->NAME_OF_VULNERABLE . '</td>
                                <td style="text-align: right;"><strong>Gender: </strong></td>
                                <td>' . $row->GENDER_OF_VULNERABLE . '</td>
                                <td style="text-align: right;"><strong>Age: </strong></td>
                                <td>' . $row->AGE_OF_VULNERABLE . '</td>
                            </tr>
                            <tr><td colspan="8">&nbsp;</td></tr>
                            <tr><td colspan="8">Information from the survey</td></tr>
                            <tr>
                                <td style="text-align: right;"><strong>Category of the disability: </strong></td>
                                <td>' . $row->CATEGORY_OF_DISABILITY . '</td>
                                <td style="text-align: right;"><strong>Name of the Disability: </strong></td>
                                <td>' . $row->NAME_OF_DISABILITY . '</td>
                            </tr>
                            <tr>
                                <td style="text-align: right;"><strong>Marital Status: </strong></td>
                                <td>' . $row->MARITAL_STATUS . '</td>
                                <td style="text-align: right;"><strong>Level of Education: </strong></td>
                                <td>' . $row->LEVEL_OF_EDUCATION . '</td>
                                <td style="text-align: right;"><strong>Occupation: </strong></td>
                                <td>' . $row->OCCUPATION . '</td>
                                <td style="text-align: right;"><strong>Household Monthly Income: </strong></td>
                                <td>' . $row->HOUSEHOLD_MONTHLY_INCOME . '</td>
                            </tr>
                            <tr><td colspan="8">&nbsp;</td></tr>
                            <tr><td colspan="2" style="text-align: right;"><strong>Understanding of the term disability: </strong></td>
                                <td colspan="6">' . $row->DEFINITION_OF_DISABILITY . '</td>
                            </tr>
                            <tr><td colspan="2" style="text-align: right;"><strong>Examples of Disabilities: </strong></td>
                                <td colspan="6">' . $row->LIST_OF_DISABILITIES_KNOWN . '</td>
                            </tr>
                            <tr><td colspan="2" style="text-align: right;"><strong>Causes of Disabilities: </strong></td>
                                <td colspan="6">' . $row->CAUSES_OF_DISABILITIES_KNOWN . '</td>
                            </tr>
                            <tr><td colspan="2" style="text-align: right;"><strong>Haw the disabilities can be prevented: </strong></td>
                                <td colspan="6">' . $row->WAYS_OF_PREVENTION . '</td>
                            </tr>
                            <tr>
                                <td style="text-align: right;" colspan="2"><strong>How the person feels about the disabled child: </strong></td>
                                <td colspan="2">' . $row->FEELING_OF_HAVING_A_VULNERABLE . '</td>
                                <td style="text-align: right;" colspan="2"><strong>How family / community members feel about the disabled child: </strong></td>
                                <td colspan="2">' . $row->FEELING_OF_THE_COMMUNITY . '</td>
                            </tr>';

                $output .= '<tr>
                                        <td style="text-align: right;" colspan="2"><strong>Do the family members give any support?: </strong></td>';

                if ($row->VULNERABLE_SUPPORTED) {
                    $output .= '<td colspan="2">Yes</td>';
                } else {
                    $output .= '<td colspan="2">No</td>';
                }

                if ($row->VULNERABLE_SUPPORTED) {
                    $output .= '<td style="text-align: right;" colspan="2"><strong>Support Given: </strong></td>
                                                            <td colspan="2">' . $row->SUPPORT_GIVEN . '</td>';
                } else {
                    $output .= '<td style="text-align: right;" colspan="2"><strong>Reason: </strong></td>
                                                            <td colspan="2">' . $row->WHY_NOT_SUPPORTED . '</td>';
                }

                $output .= '</tr>';

                $output .= '<tr>
                                        <td style="text-align: right;" colspan="2"><strong>Has the disabled child or family member received rehabilitation services?: </strong></td>';

                if ($row->REHABILITATION_RECEIVED) {
                    $output .= '<td colspan="2">Yes</td>';
                } else {
                    $output .= '<td colspan="2">No</td>';
                }

                if ($row->REHABILITATION_RECEIVED) {
                    $output .= '<td style="text-align: right;" colspan="2"><strong>Help Received From: </strong></td>
                                                            <td colspan="2">' . $row->PLACE_OF_REHABILITATION . '</td>';
                } else {
                    # Pass
                }

                $output .= '</tr>';

                $output .= '
                            <tr>
                                <td style="text-align: right;" colspan="2"><strong>Kind of treatment received: </strong></td>
                                <td colspan="2">' . $row->KIND_OF_TREATMENT_RECEIVED . '</td>
                                <td style="text-align: right;" colspan="2"><strong>Cost of the treatment: </strong></td>
                                <td colspan="2">' . $row->COST_OF_TREATMENT . '</td>
                            </tr>';

                $output .= '
                            <tr>
                                <td style="text-align: right;" colspan="2"><strong>How often the treatment was attended: </strong></td>
                                <td colspan="2">' . $row->FREQUENCY_OF_ATTENDANCE . '</td>
                                <td style="text-align: right;" colspan="2"><strong>How long the treatment was: </strong></td>
                                <td colspan="2">' . $row->DURATION_OF_THE_TREATMENT . '</td>
                            </tr>';

                $output .= '<tr>
                                        <td style="text-align: right;" colspan="2"><strong>Attended Regularly?: </strong></td>';

                if ($row->REGULAR_ATTENDANCE) {
                    $output .= '<td colspan="2">Yes</td>';
                } else {
                    $output .= '<td colspan="2">No</td>';
                }

                if (!$row->REGULAR_ATTENDANCE) {
                    $output .= '<td style="text-align: right;" colspan="2"><strong>Support Given: </strong></td>
                                                        <td colspan="2">' . $row->REASON_FOR_NOT_ATTENDING_REGULARLY . '</td>';
                } else {

                    # Pass
                }

                $output .= '</tr>';

                $output .= '
                            <tr>
                                <td style="text-align: right;" colspan="2"><strong>Perception of the quality of service: </strong></td>
                                <td colspan="2">' . $row->QUALITY_OF_SERVICE . '</td>
                            </tr>';

                $output .= '<tr>
                                    <td style="text-align: right;"><strong>Received training on disability?: </strong></td>';

                if ($row->TRAINING_RECEIVED) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                if ($row->TRAINING_RECEIVED) {
                    $output .= '<td style="text-align: right;"><strong>Trained By: </strong></td>
                                                    <td>' . $row->NAME_OF_TRAINER . '</td>';
                    $output .= '<td style="text-align: right;"><strong>Training Involved: </strong></td>
                                                    <td>' . $row->TRAINING_WAS_ABOUT . '</td>';
                    $output .= '<td style="text-align: right;"><strong>How the knowledge from the training helps: </strong></td>
                                                    <td>' . $row->HELP_OF_THE_TRAINING . '</td>';
                } else {
                    $output .= '<td style="text-align: right;"><strong>The greatest challenges faced in caring for the disabled child: </strong></td>
                                                    <td colspan="5">' . $row->CHALLENGES_FACED_IN_CARING . '</td>';

                }

                $output .= '</tr>';

                $output .= '
                            <tr>
                                <td style="text-align: right;" colspan="2"><strong>Strengths of the disabled child: </strong></td>
                                <td colspan="2">' . $row->STRENGTHS_OF_VULNERABLE . '</td>
                                <td style="text-align: right;" colspan="2"><strong>Weaknesses of the disabled child: </strong></td>
                                <td colspan="2">' . $row->WEAKNESSES_OF_VULNERABLE . '</td>
                            </tr>';

                $output .= '
                            <tr>
                                <td style="text-align: right;" colspan="2"><strong>hope for your disabled child or family member: </strong></td>
                                <td colspan="6">' . $row->HOPE_FOR_THE_VULNERABLE . '</td>
                            </tr>';

                $output .= '
                            <tr>
                                <td style="text-align: right;" colspan="2"><strong>The organization should help with: </strong></td>
                                <td colspan="6">' . $row->ORGANIZATION_HELP_NEEDED . '</td>
                            </tr>';

                $output .= '</table>
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
        $this->db->insert('PORTICUS_BASELINE_ASSESSMENTS', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function fetch_single_row_data_to_edit($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('PORTICUS_BASELINE_ASSESSMENTS');

        return $data;

    }

    function update_record($record_id, $field_data)
    {
        $this->db->where('ID', $record_id);
        $this->db->set($field_data);
        $this->db->update('PORTICUS_BASELINE_ASSESSMENTS');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function generate_report_with_all_data()
    {

    }



}

?>