<?php

/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/9/19
 * Time: 11:24 PM
 */
class Location_model extends CI_Model
{

    public function fetch_all_villages()
    {
        $this->db->order_by('ID', 'DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('VILLAGE');

    }

    public function fetch_all_parishes()
    {
        $this->db->order_by('ID', 'DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('PARISH');

    }

    public function fetch_all_subcounties()
    {
        $this->db->order_by('ID', 'DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('SUBCOUNTY');

    }

    public function fetch_all_counties()
    {
        $this->db->order_by('ID', 'DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('COUNTY');

    }

    function fetch_villages_in_parish($parish_id)
    {
        $this->db->where('PARISH', $parish_id);
        $this->db->order_by('VILLAGE', 'ASC');

        $query = $this->db->get('VILLAGE');

        $output = '<label for="child_village">Village:</label>
                    <select name="child_village" id="child_village" class="form-control" required>
                        <option value="">Select the Village</option>';

        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->ID . '">' . $row->VILLAGE . '</option>';
        }

        $output .= '</select>';

        return $output;
    }

    function fetch_villages_in_parish_for_group($parish_id)
    {
        $this->db->where('PARISH', $parish_id);
        $this->db->order_by('VILLAGE', 'ASC');

        $query = $this->db->get('VILLAGE');

        $output = '<label for="group_village">Village:</label>
                    <select name="group_village" id="group_village" class="form-control" required>
                        <option value="">Select Village</option>';

        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->ID . '">' . $row->VILLAGE . '</option>';
        }

        $output .= '</select>';

        return $output;

    }

    public function fetch_villages_in_parish_for_member($parish_id)
    {
        $this->db->where('PARISH', $parish_id);
        $this->db->order_by('VILLAGE', 'ASC');

        $query = $this->db->get('VILLAGE');

        $output = '<label for="member_village">Village:</label>
                    <select name="member_village" id="member_village" class="form-control" required>
                        <option value="">Select the Village</option>';

        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->ID . '">' . $row->VILLAGE . '</option>';
        }

        $output .= '</select>';

        return $output;

    }

    public function fetch_villages_in_parish_for_assessment($parish_id)
    {
        $this->db->where('PARISH', $parish_id);
        $this->db->order_by('VILLAGE', 'ASC');

        $query = $this->db->get('VILLAGE');

        $output = '<label for="village">Village:</label>
                    <select name="village" id="village" class="form-control" required>
                        <option value="">Select the Village</option>';

        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->ID . '">' . $row->VILLAGE . '</option>';
        }

        $output .= '</select>';

        return $output;

    }

    public function fetch_parishes_in_subcounty_for_assessment($subcounty_id)
    {
        $this->db->where('SUBCOUNTY', $subcounty_id);
        $this->db->order_by('PARISH', 'ASC');

        $query = $this->db->get('PARISH');

        $output = '<label for="parish">Parish:</label>
                    <select name="parish" id="parish" class="form-control" onchange="fetch_village_list(this.value);" required>
                        <option value="">Select the parish</option>';

        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->ID . '">' . $row->PARISH . '</option>';
        }

        $output .= '</select>';

        return $output;

    }

    public function fetch_subcounties_in_county_for_assessment($county_id)
    {
        $this->db->where('COUNTY', $county_id);
        $this->db->order_by('SUBCOUNTY', 'ASC');

        $query = $this->db->get('SUBCOUNTY');

        $output = '<label for="subcounty">Sub-County:</label>
                    <select name="subcounty" id="subcounty" class="form-control" onchange="fetch_parish_list(this.value);" required>
                        <option value="">Select the sub-county</option>';

        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->ID . '">' . $row->SUBCOUNTY . '</option>';
        }

        $output .= '</select>';

        return $output;

    }

    function fetch_associated_subcounty_for_parish($county_id)
    {
        $this->db->where('COUNTY', $county_id);
        $this->db->order_by('SUBCOUNTY', 'ASC');

        $query = $this->db->get('SUBCOUNTY');

        $output = '<label for="subcounty_county_input">Sub-County:</label>
                    <select name="subcounty_county_input" id="subcounty_county_input" class="form-control" required>
                        <option value="">Select Sub-County</option>';

        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->ID . '">' . $row->SUBCOUNTY . '</option>';
        }

        $output .= '</select>';

        return $output;

    }

    function fetch_associated_subcounty_for_village($county_id)
    {
        $this->db->where('COUNTY', $county_id);
        $this->db->order_by('SUBCOUNTY', 'ASC');

        $query = $this->db->get('SUBCOUNTY');

        $output = '<label for="village_subcounty_input">Sub-County:</label>
                    <select name="village_subcounty_input" id="village_subcounty_input" class="form-control" onchange="fetch_associated_parish_for_village(this.value);" required>
                        <option value="">Select</option>';

        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->ID . '">' . $row->SUBCOUNTY . '</option>';
        }

        $output .= '</select>';

        return $output;

    }

    function fetch_associated_parish_for_village($subcounty_id)
    {
        $this->db->where('SUBCOUNTY', $subcounty_id);
        $this->db->order_by('PARISH', 'ASC');

        $query = $this->db->get('PARISH');

        $output = '<label for="village_parish_input">Parish:</label>
                    <select name="village_parish_input" id="village_parish_input" class="form-control" required>
                        <option value="">Select</option>';

        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->ID . '">' . $row->PARISH . '</option>';
        }

        $output .= '</select>';

        return $output;

    }

    function fetch_single_row_data_to_edit_county($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('COUNTY');

        return $data;

    }

    function fetch_single_row_data_to_edit_parish($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('PARISH');

        return $data;

    }

    function fetch_single_row_data_to_edit_subcounty($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('SUBCOUNTY');

        return $data;

    }

    function fetch_single_row_data_to_edit_village($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('VILLAGE');

        return $data;

    }

}

?>