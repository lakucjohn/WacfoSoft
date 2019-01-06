<style>
    .right-content{
        float: right;
        width: 40%;
        text-align: right;
    }
    
    .left-content{
        float: left;
        width: 60%;
    }
    .main-content{
        clear: both;
        padding-bottom: 3rem;
    }
</style>
<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */
require_once (APPPATH.'models/Header.php');
class Courses_model extends CI_Model{

    function fetch(){
        $this->db->order_by('ID','DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('COURSES');
    }

    function fetch_single_record($row_id){
        $this->db->where('ID', $row_id);

        $data = $this->db->get('COURSES');


        $output = '<div class="table-responsive">
                    <div class="card w-100">
                    <table width="100%">
                    ';

        $output.='<tr style="font-size: 18px; font-weight: bold; height: 48px;">
                    <td>
                        COURSE DETAILS
                    </td>
                  </tr>';


        foreach($data->result() as $row) {
            $output .= '
                
                <tr title="' . $row->COURSE . '">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px;" border="0" class="table">
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:40%; text-align: right;">Course :</td>
                                <td>'.$row->COURSE.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Code :</td>
                                <td>'.$row->CODE.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Group(s) Intended :</td>
                                <td>'.$row->GROUP_TRAINED.'</td>
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
                    <div class="main-content">
                            <div class="left-content">
                                MODULES IN THIS COURSE
                            </div>
                            
                            <div class="right-content">
                                <a class="btn btn-primary btn-md space-sm-right" href="#"><i class="fa fa-plus-circle"></i> New Module in this course</a>
                            </div>
                        </div>
                    </td>
                  </tr>';


        foreach($data->result() as $row) {
            $output .= '
                
                <tr title="' . $row->COURSE . '">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px;" border="0" class="table">
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:40%; text-align: right;">Course :</td>
                                <td>'.$row->COURSE.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Code :</td>
                                <td>'.$row->CODE.'</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Group(s) Intended :</td>
                                <td>'.$row->GROUP_TRAINED.'</td>
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