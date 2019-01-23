<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */
require_once(APPPATH . 'models/Header.php');

class Auth_model extends CI_Model
{

    function fetch()
    {
        $this->db->order_by('USERNAME', 'ASC');

        return $this->db->get('USERS');
    }

    function check_user($username, $password)
    {
        $this->db->where('USERNAME', $username);
        $this->db->where('PASSWORD', $password);

        $result = $this->db->get('USERS');

        if ($result->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    function fetch_single_row_data_to_edit($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('USERS');

        return $data;

    }
}

?>