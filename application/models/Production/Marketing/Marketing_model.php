<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */

class Marketing_model extends CI_Model{

    function fetch(){
        $this->db->order_by('ID','DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('CHANGE_IN_KNOWLEDGE_NEWER');
    }

    function fetch_single_record($row_id){
        $this->db->where('ID', $row_id);

        $data = $this->db->get('CHANGE_IN_KNOWLEDGE_NEWER');


        $output = '<div class="table-responsive">
            <table class="table" width="100%" cellspacing="50" cellpadding="50">';


            foreach($data->result() as $row){
                $output .= '
                
                <tr title="'.$row->NAME.'">
                    <td>
                        <p>
                            <strong>Individual: </strong>'.$row->INDIVIDUAL_ID.'<br>
                            <strong>Sells all the Vegetables: </strong>'.$row->SELLS_ALL_VEGETABLES.'<br>
                            <strong>Sells all the Crops: </strong>'.$row->SELLS_ALL_CROPS.'<br>
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