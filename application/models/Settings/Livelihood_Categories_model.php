<?php

/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/9/19
 * Time: 11:48 PM
 */
class Livelihood_Categories_model extends CI_Model
{

    public function fetch()
    {
        $this->db->order_by('ID', 'DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('LIVELIHOODGROUPCATEGORIES');

    }

    function fetch_single_row_data_to_edit($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('LIVELIHOODGROUPCATEGORIES');

        return $data;

    }
}

?>