<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */
require_once (APPPATH.'models/Header.php');
class Children_model extends CI_Model{

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
                        CHILD\'S PERSONAL DETAILS
                    </td>
                  </tr>';


        foreach($data->result() as $row) {
            $output .= '
                
                <tr title="' . $row->NAME . '">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px;" border="0" class="table">
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Name of the Child :</td>
                                <td style="width: 75%">'.$row->NAME.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Gender :</td>
                                <td style="width: 75%">'.$row->SEX.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Date of Birth :</td>
                                <td style="width: 75%">'.$row->DATE_OF_BIRTH.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Vulnerability :</td>
                                <td style="width: 75%">'.$row->VULNERABILITY.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Date of Joining :</td>
                                <td style="width: 75%">'.$row->DATE_OF_JOINING.'</td>
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

        $output.='<tr style="font-size: 18px; font-weight: bold;">
                    <td>
                        ASSESSMENT RECORDS
                    </td>
                  </tr>';


        foreach($data->result() as $row){
            $output .= '
                
                <tr title="'.$row->NAME.'">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px;" border="0" class="table">
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Name of the Child :</td>
                                <td style="width: 75%">'.$row->NAME.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Gender :</td>
                                <td style="width: 75%">'.$row->SEX.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Date of Birth :</td>
                                <td style="width: 75%">'.$row->DATE_OF_BIRTH.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Vulnerability :</td>
                                <td style="width: 75%">'.$row->VULNERABILITY.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Date of Joining :</td>
                                <td style="width: 75%">'.$row->DATE_OF_JOINING.'</td>
                            </tr>
                        
                        </table>
                        
                    </td>
                </tr>
                ';
        }


        $output.='<tr>
                    <td>
                        <hr>
                    </td>
                  </tr>';

        $output.='<tr style="font-size: 18px; font-weight: bold;">
                    <td>
                        SUPPORT RENDERED
                    </td>
                  </tr>';


        foreach($data->result() as $row){
            $output .= '
                
                <tr title="'.$row->NAME.'">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px;" border="0" class="table">
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Name of the Child :</td>
                                <td style="width: 75%">'.$row->NAME.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Gender :</td>
                                <td style="width: 75%">'.$row->SEX.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Date of Birth :</td>
                                <td style="width: 75%">'.$row->DATE_OF_BIRTH.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Vulnerability :</td>
                                <td style="width: 75%">'.$row->VULNERABILITY.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Date of Joining :</td>
                                <td style="width: 75%">'.$row->DATE_OF_JOINING.'</td>
                            </tr>
                        
                        </table>
                        
                    </td>
                </tr>
                ';
        }


        $output.='<tr>
                    <td>
                        <hr>
                    </td>
                  </tr>';

        $output.='<tr style="font-size: 18px; font-weight: bold;">
                    <td>
                        VISIT RECORDS
                    </td>
                  </tr>';


        foreach($data->result() as $row){
            $output .= '
                
                <tr title="'.$row->NAME.'">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px;" border="0" class="table">
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Name of the Child :</td>
                                <td style="width: 75%">'.$row->NAME.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Gender :</td>
                                <td style="width: 75%">'.$row->SEX.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Date of Birth :</td>
                                <td style="width: 75%">'.$row->DATE_OF_BIRTH.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Vulnerability :</td>
                                <td style="width: 75%">'.$row->VULNERABILITY.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Date of Joining :</td>
                                <td style="width: 75%">'.$row->DATE_OF_JOINING.'</td>
                            </tr>
                        
                        </table>
                        
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