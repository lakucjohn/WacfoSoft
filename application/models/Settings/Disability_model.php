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

    function insert($field_data)
    {

        $this->db->insert('DISABILITIES', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}

?>