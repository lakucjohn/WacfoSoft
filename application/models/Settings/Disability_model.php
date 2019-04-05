<?php

/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/9/19
 * Time: 11:48 PM
 */
class Disability_model extends CI_Model
{

    public function fetch()
    {
        $this->db->order_by('ID', 'DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('DISABILITIES');

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