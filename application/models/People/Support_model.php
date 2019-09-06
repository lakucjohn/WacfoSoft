<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */
require_once(APPPATH . 'models/Header.php');

class Support_model extends CI_Model
{

    function insert($field_data)
    {
        $this->db->insert('SUPPORT_OUTCOMES', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return $this->db->error();
        }
    }

    function get_supported_entity_value($row_id)
    {

        #Obtaining the group name
        $this->db->select('BENEFICIARY');
        $this->db->where('ID', $row_id);
        $this->db->limit(1);

        $category_data = $this->db->get('SUPPORT_RENDERED');

        foreach ($category_data->result() as $row) {
            $supported_name = $row->BENEFICIARY;
        }

        return $supported_name;
    }
}

?>