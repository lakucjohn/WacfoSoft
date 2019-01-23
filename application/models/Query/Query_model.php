<?php

/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/21/19
 * Time: 12:47 AM
 */
class Query_model extends CI_Model
{
    public function execute_query($sql)
    {
        $query = $this->db->query($sql);

        print_r($query->result());
    }

}