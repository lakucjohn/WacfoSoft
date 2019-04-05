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

        $child_id = $prefix_code . '/' . $next_id;

        while (true) {
            $this->db->where('CHILD_ID', $child_id);
            $query_result = $this->db->get('CHILDREN');

            if ($query_result->num_rows() > 0) {
                $next_id++;
                $child_id = $prefix_code . '/' . $next_id;
            } else {
                $child_id = $prefix_code . '/' . $next_id;
                break;
            }
        }

        return $child_id;

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

    function get_disability_name($disability_id)
    {
        $this->db->select('DISABILITY_NAME');
        $this->db->where('ID', $disability_id);
        $query = $this->db->get('DISABILITIES');

        foreach ($query->result() as $row) {
            return $row->DISABILITY_NAME;
        }
    }

    function insert($field_data)
    {

        $this->db->insert('DISABILITIES', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function generate_disability_id()
    {
        $query = $this->db->get('DISABILITIES');

        $current_id = $query->num_rows();
        $final_return = '';
        //Checking if the id has been used
        while (true) {
            $this->db->where('DISABILITY_ID', $current_id);
            $query_result = $this->db->get('DISABILITIES');

            if ($query_result->num_rows() > 0) {
                $current_id++;
            } else {
                $final_id = $current_id;
                break;
            }
        }

        if (strlen($final_id) == 1) {
            $final_return .= '00' . $final_id;
        } else if (strlen($final_id) == 2) {
            $final_return .= '0' . $final_id;
        } else if (strlen($final_id) == 3) {
            $final_return .= $final_id;
        }
        return $final_return;
    }
}

?>