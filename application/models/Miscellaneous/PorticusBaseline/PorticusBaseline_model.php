<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */

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
            <table class="table" width="100%" cellspacing="50" cellpadding="50">';


            foreach($data->result() as $row){
                $output .= '
                
                <tr title="'.$row->NAME_OF_RESPONDENT.'">
                    <td>
                        <p>
                            <strong>Nameof the Respondent: </strong>'.$row->NAME_OF_RESPONDENT.'<br>
                            <strong>Age: </strong>'.$row->AGE.'<br>
                            <strong>Village: </strong>'.$row->VILLAGE.'<br>
                            <strong>Gender: </strong>'.$row->GENDER.'<br>
                            <strong>Name of the Vulnerable: </strong>'.$row->NAME_OF_VULNERABLE.'<br>
                        </p>
                    </td>
                </tr>
                ';
            }


            $output .= '</table>
                    </div>';

        return $output;
    }



}

?>