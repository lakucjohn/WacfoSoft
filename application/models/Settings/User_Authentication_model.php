<?php

/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/9/19
 * Time: 11:48 PM
 */
class User_Authentication_model extends CI_Model
{

    public function fetch()
    {
        $this->db->order_by('ID', 'DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('USERS');

    }

    function fetch_single_row_data_to_edit($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('USERS');

        return $data;

    }
}

?>