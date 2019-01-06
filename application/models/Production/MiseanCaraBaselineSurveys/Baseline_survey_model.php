<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */

class Baseline_survey_model extends CI_Model{

    function fetch(){
        $this->db->order_by('ID','DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('MISEAN_CARA_BASELINE_SURVEYS');
    }

    function fetch_single_record($row_id){
        $this->db->where('ID', $row_id);

        $data = $this->db->get('MISEAN_CARA_BASELINE_SURVEYS');


        $output = '<div class="table-responsive">
            <table class="table" width="100%" cellspacing="50" cellpadding="50">';


            foreach($data->result() as $row){
                $output .= '
                
                <tr title="'.$row->GRANTEE.'">
                    <td>
                        <p>
                            <strong>Grantee: </strong>'.$row->GRANTEE.'<br>
                            <strong>Group Name: </strong>'.$row->GROUP_NAME.'<br>
                            <strong>District: </strong>'.$row->DISTRICT.'<br>
                            <strong>County: </strong>'.$row->COUNTY.'<br>
                            <strong>Sub-COunty: </strong>'.$row->SUBCOUNTY.'<br>
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