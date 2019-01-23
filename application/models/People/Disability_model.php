<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */
require_once(APPPATH . 'models/Header.php');

class Disability_model extends CI_Model
{

    function fetch()
    {
        $this->db->order_by('DISABILITY_NAME', 'ASC');

        return $this->db->get('DISABILITIES');
    }

    function generate_child_id($vulnerability)
    {

        #Obtaining the disability prefix
        $this->db->select('DISABILITY_PREFIX');
        $this->db->where('DISABILITY_ID', $vulnerability);
        $this->db->limit(1);

        $prefix_data = $this->db->get('DISABILITIES');

        foreach ($prefix_data->result() as $row) {
            $prefix_code = $row->DISABILITY_PREFIX;
        }

        #Obtaining the next available ID
        $this->db->where('VULNERABILITY', $vulnerability);
        $children_query = $this->db->get('CHILDREN');
        $next_id = $children_query->num_rows() + 1;

        return $prefix_code . '/' . $next_id;

    }

    function fetch_single_record($row_id)
    {
        $this->db->where('ID', $row_id);

        $data = $this->db->get('DISABILITIES');


        $output = '<div class="table-responsive">
                    <div class="card w-100">
                    <table width="100%">
                    ';

        $output .= '<tr style="text-align: center">
                    <td>
                        ' . showHeader() . '
                    </td>
                  </tr>';

        $output .= '<tr>
                    <td>
                        <hr>
                    </td>
                  </tr>';

        $output .= '<tr style="font-size: 18px; font-weight: bold;">
                    <td>
                        STAFF\'S PERSONAL INFORMATION
                    </td>
                  </tr>';


        foreach ($data->result() as $row) {
            $output .= '
                
                <tr title="' . $row->NAME . '">
                    <td>
                    
                        <table style="width: 100%; font-size: 18px;" border="0" class="table">
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:40%; text-align: right;">Name of Disability :</td>
                                <td>' . $row->DISABILITY_NAME . '</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Description of Disability :</td>
                                <td>' . $row->DISABILITY_DESCRIPTION . '</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Disability ID :</td>
                                <td>' . $row->DISABILITY_ID . '</td>
                            </tr>
                            <tr style="white-space: nowrap; height: 40px;">
                                <td style="width:20%; text-align: right;">Disability Prefix :</td>
                                <td>' . $row->DISABILITY_PREFIX . '</td>
                            </tr>
                        
                        </table>
                        
                    </td>
                </tr>';
        }


        $output .= '<tr>
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

    function fetch_single_row_data_to_edit($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('DISABILITIES');

        return $data;

    }
}

?>