<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/3/19
 * Time: 11:50 PM
 */

?>
<h3>Attendance Registration Sheet for Members</h3>
<hr>
<?php echo form_open('training-attendants/' . $row_id . '/record-member-list'); ?>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-6">
            <?php
            if ($input_form) {
                echo $input_form;
            }
            ?>
        </div>
        <div class="col-md-6">
            <input type="text" name="group_id_selected" class="form-control" id="group_id_selected" disabled/>
        </div>
    </div>
</div>
<hr>

<div class="col-md-12" id="group_members_list">
    The List of Group members of the selected group will be displayed here
</div>

<hr>

<div class="col-md-12" style="text-align: center">
    <button type="submit" class="btn btn-primary btn-md-5">Submit Register</button>
</div>

</form>

<script type="text/javascript">
    function display_members(group_id) {


        if (group_id !== '') {
            document.getElementById('group_id_selected').value = group_id;

            $.ajax({
                url: "<?php echo base_url('Training/training/generate_empty_list_of_attendants');?>",
                method: "POST",
                data: {group_id: group_id},
                success: function (data) {
//                    alert('OK');
                    document.getElementById('group_members_list').innerHTML = data;
                }
            });
        }
    }

    function select_all_members() {

        if (document.getElementById('select-all').checked) {
            $('input.group_members_trained').prop('checked', true);
        }

    }

    function check_if_a_field_is_unchecked() {
        if ($(this).prop("checked", false)) {
            $('#select-all').prop('checked', false);
        } else {
            $('#select-all').prop('checked', true);
        }

    }
</script>