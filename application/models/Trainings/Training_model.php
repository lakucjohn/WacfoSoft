<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */
require_once (APPPATH.'models/Header.php');
class Training_model extends CI_Model{

    function fetch(){
        $this->db->order_by('ID','DESC');

        return $this->db->get('TRAININGS');
    }

    function fetch_total()
    {
        $this->db->order_by('ID', 'DESC');

        return $this->db->get('TRAININGS')->num_rows();
    }

    function fetch_single_record($row_id){
        $this->db->where('ID', $row_id);

        $data = $this->db->get('TRAININGS');


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
                        TRAINING INFORMATION
                    </td>
                  </tr>';


        foreach($data->result() as $row) {
            $output .= '
                
                <tr title="' . $row->TOPIC . '">
                    <td>
                    
                        <table style="width: 86%; font-size: 18px;" border="0" class="table table-responsive">
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Date of the Training :</td>
                                <td style="width: 75%">'.$row->DATE_OF_TRAINING.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Topic :</td>
                                <td style="width: 75%">' . $row->TOPIC . '</td>
                            </tr>
                            <tr style="">
                                <td style="width:20%; text-align: right;">Objective :</td>
                                <td style="width: 75%">' . $row->OBJECTIVE . '</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Venue :</td>
                                <td style="width: 75%">'.$row->VENUE.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Trainer :</td>
                                <td style="width: 75%">'.$row->CONDUCTED_BY.'</td>
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
                        LIST OF ATTENDANTS
                    </td>
                  </tr>';


        foreach($data->result() as $row){
            $output .= '
                
                <tr title="' . $row->TOPIC . '">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px;" border="0" class="table">
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Date of the Training :</td>
                                <td style="width: 75%">'.$row->DATE_OF_TRAINING.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Topic :</td>
                                <td style="width: 75%">' . $row->TOPIC . '</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Objective :</td>
                                <td style="width: 75%">' . $row->OBJECTIVE . '</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Venue :</td>
                                <td style="width: 75%">'.$row->VENUE.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Trainer :</td>
                                <td style="width: 75%">'.$row->CONDUCTED_BY.'</td>
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
                        TRAINING OUTCOMES
                    </td>
                  </tr>';


        foreach($data->result() as $row){
            $output .= '
                
                <tr title="' . $row->TOPIC . '">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px;" border="0" class="table">
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Date of the Training :</td>
                                <td style="width: 75%">'.$row->DATE_OF_TRAINING.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Topic :</td>
                                <td style="width: 75%">' . $row->TOPIC . '</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Objective :</td>
                                <td style="width: 75%">' . $row->OBJECTIVE . '</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Venue :</td>
                                <td style="width: 75%">'.$row->VENUE.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Trainer :</td>
                                <td style="width: 75%">'.$row->CONDUCTED_BY.'</td>
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

    public function insert_record($field_data)
    {
        $this->db->insert('TRAININGS', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function fetch_single_row_data_to_edit($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('TRAININGS');

        return $data;

    }

    function update_record($record_id, $field_data)
    {
        $this->db->where('ID', $record_id);
        $this->db->set($field_data);
        $this->db->update('TRAININGS');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return $this->db->error();
        }
    }


}

?>