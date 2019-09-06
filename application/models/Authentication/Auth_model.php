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
//        $this->db->where('PASSWORD', password_verify($password, PASSWORD_DEFAULT));

        $resultset = $this->db->get('USERS');

        if ($resultset->num_rows() == 1) {
            foreach ($resultset->result() as $row) {
                if (password_verify($password, $row->PASSWORD)) {
                    return true;
                } else {
                    return false;
                }
            }
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

    function update_record($record_id, $field_data)
    {
        $this->db->where('ID', $record_id);
        $this->db->set($field_data);
        $this->db->update('USERS');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return $this->db->error();
        }
    }
}

?>