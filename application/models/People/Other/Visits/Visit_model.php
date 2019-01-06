<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */
require_once (APPPATH.'models/Header.php');
class Visit_model extends CI_Model{

    function fetch(){
        $this->db->order_by('ID','DESC');

        return $this->db->get('VISIT_RECORDS');
    }

    function fetch_single_record($row_id){
        $this->db->where('ID', $row_id);

        $data = $this->db->get('VISIT_RECORDS');


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
                        CHILD VISITATION DETAILS
                    </td>
                  </tr>';


        foreach($data->result() as $row) {
            $output .= '
                
                <tr title="' . $row->CHILD_NAME . '">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px;" border="0" class="table">
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:40%; text-align: right;">Date of Visit :</td>
                                <td>'.$row->DATE_OF_VISIT.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Nature of the visit :</td>
                                <td>'.$row->KIND_OF_VISIT.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Child Visited :</td>
                                <td>ID: '.$row->CHILD_ID_VISITED.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAME:'.$row->CHILD_NAME.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Project :</td>
                                <td>'.$row->PROJECT.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Village :</td>
                                <td>'.$row->VILLAGE.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Parish :</td>
                                <td>'.$row->PARISH.'</td>
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


        $output .= '
                            </table>
                        </div>
                    </div>';

        return $output;
    }



}

?>