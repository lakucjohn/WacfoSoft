<?php

/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 2/25/19
 * Time: 11:27 PM
 */
class Delete_data_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function delete($table, $row)
    {

        $this->db->where('ID', $row);
        $this->db->set('STATUS', 0);
        $this->db->update($table);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return $this->db->error();
        }
    }
}

?>