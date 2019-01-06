<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */

class Challenges_model extends CI_Model{

    function fetch(){
        $this->db->order_by('ID','DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('PRODUCTION_PROBLEMS');
    }

    function fetch_single_record($row_id){
        $this->db->where('ID', $row_id);

        $data = $this->db->get('PRODUCTION_PROBLEMS');


        $output = '<div class="table-responsive">
            <table class="table" width="100%" cellspacing="50" cellpadding="50">';


            foreach($data->result() as $row){
                $output .= '
                
                <tr title="'.$row->NAME.'">
                    <td>
                        <p>
                            <strong>Group: </strong>'.$row->GROUP_NAME.'<br>
                            <strong>Vegetable Production Problem: </strong>'.$row->VEGETABLE_PRODUCTION_PROBLEMS.'<br>
                            <strong>Crop Production Problem: </strong>'.$row->CROP_PRODUCTION_PROBLEMS.'<br>
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