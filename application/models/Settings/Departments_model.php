<?php

/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/9/19
 * Time: 11:48 PM
 */
class Departments_model extends CI_Model
{

    public function fetch()
    {
        $this->db->order_by('ID', 'DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('ORGANIZATION_DEPARTMENTS_NEW');

    }

    public function generate_new_staff_id($department_id)
    {

        #Obtaining the disability prefix
        $this->db->select('PREFIX');
        $this->db->where('ID', $department_id);
        $this->db->limit(1);

        $prefix_data = $this->db->get('ORGANIZATION_DEPARTMENTS_NEW');

        foreach ($prefix_data->result() as $row) {
            $prefix_code = $row->PREFIX;
        }

        #Obtaining the next available ID
        $this->db->where('DEPARTMENT', $department_id);
        $children_query = $this->db->get('ORGANIZATION_STAFF_NEW');
        $next_id = $children_query->num_rows() + 1;

        return $prefix_code . '/' . $next_id;

    }

    function fetch_single_row_data_to_edit($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('ORGANIZATION_DEPARTMENTS_NEW');

        return $data;

    }

    function insert($field_data)
    {

        $this->db->insert('ORGANIZATION_DEPARTMENTS_NEW', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}

?>