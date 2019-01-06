<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */

class Vegetable_model extends CI_Model{

    function fetch(){
        $this->db->order_by('ID','DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('VEGETABLE_PRODUCTION_NEW');
    }

    function fetch_single_record($row_id){
        $this->db->where('ID', $row_id);

        $data = $this->db->get('VEGETABLE_PRODUCTION_NEW');


        $output = '<div class="table-responsive">
            <table class="table" width="100%" cellspacing="50" cellpadding="50">';


        foreach($data->result() as $row){
            $output .= '
                
                <tr title="'.$row->NAME.'">
                    <td>
                        <p>
                            <strong>Individual: </strong>'.$row->INDIVIDUAL.'<br>
                            <strong>Crop: </strong>'.$row->VEGETABLE.'<br>
                            <strong>Income: </strong>'.$row->INCOME.'<br>
                            <strong>Sales Increase: </strong>'.$row->SALES_INCREASE.'<br>
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