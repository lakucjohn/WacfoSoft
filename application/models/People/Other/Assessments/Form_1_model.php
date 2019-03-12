<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */
require_once (APPPATH.'models/Header.php');
class Form_1_model extends CI_Model{

    function fetch(){
        $this->db->order_by('ID','DESC');

        return $this->db->get('ASSESSMENT_1_RECORDS');
    }

    function fetch_single_record($row_id){
        $this->db->where('ID', $row_id);

        $data = $this->db->get('ASSESSMENT_1_RECORDS');


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
                        CHILD ASSESSMENT 1 DETAILS
                    </td>
                  </tr>';


        foreach($data->result() as $row) {
            $output .= '
                
                <tr title="' . $row->CHILD_ID . '">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px;" border="0" class="table">
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:40%; text-align: right;">County :</td>
                                <td>'.$row->COUNTY.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Parish:</td>
                                <td>ID: '.$row->PARISH.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Village :</td>
                                <td>'.$row->VILLAGE.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Health Centre :</td>
                                <td>'.$row->HEALTH_CENTRE.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Date Entered :</td>
                                <td>'.$row->DATE_ENTERED.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">CBR Name :</td>
                                <td>'.$row->CBR_NAME.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Child Name :</td>
                                <td>' . $row->CHILD_ID . '</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Date of Birth :</td>
                                <td>'.$row->DATE_OF_BIRTH.'</td>
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

    function insert_record($field_data)
    {
        $this->db->insert('ASSESSMENT_1_RECORDS', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function fetch_single_row_data_to_edit($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('ASSESSMENT_1_RECORDS');

        return $data;

    }

    function update_record($record_id, $field_data)
    {
        $this->db->where('ID', $record_id);
        $this->db->set($field_data);
        $this->db->update('ASSESSMENT_1_RECORDS');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }



}

?>