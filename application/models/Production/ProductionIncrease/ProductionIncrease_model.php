<?php

/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */
class ProductionIncrease_model extends CI_Model
{

    function fetch()
    {
        $this->db->order_by('ID', 'DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('INCREASE_IN_PRODUCTIVITY');
    }

    function fetch_single_record($row_id)
    {
        $this->db->where('ID', $row_id);

        $data = $this->db->get('INCREASE_IN_PRODUCTIVITY');


        $output = '<div class="table-responsive">
            <table class="table" width="100%" cellspacing="50" cellpadding="50">';


        foreach ($data->result() as $row) {
            $output .= '
                
                <tr title="' . $row->NAME . '">
                    <td>
                        <p>
                            <strong>Group: </strong>' . $row->GROUP_ID . '<br>
                            <strong>Percentage Increase in Vegetable Production: </strong>' . $row->INCREASE_IN_VEGETABLE_PRODUCTION . '<br>
                            <strong>Percentage Increase in Vegetable Sales: </strong>' . $row->INCREASE_IN_VEGETABLE_SALES . '<br>
                            <strong>Percentage Increase in Crop Production: </strong>' . $row->INCREASE_IN_CROP_PRODUCTION . '<br>
                            <strong>Percentage Increase in Crop Sales: </strong>' . $row->INCREASE_IN_CROP_SALES . '<br>
                        </p>
                    </td>
                </tr>
                ';
        }


        $output .= '</table>
                    </div>';

        return $output;
    }

    function insert_record($field_data)
    {
        $this->db->insert('INCREASE_IN_PRODUCTIVITY', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function fetch_single_row_data_to_edit($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('INCREASE_IN_PRODUCTIVITY');

        return $data;

    }

    function update_record($record_id, $field_data)
    {
        $this->db->where('ID', $record_id);
        $this->db->set($field_data);
        $this->db->update('INCREASE_IN_PRODUCTIVITY');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}

?>