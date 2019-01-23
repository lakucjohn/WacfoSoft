<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/3/19
 * Time: 9:40 PM
 */
?>
<h3 style="text-align: center;">HYGIENE AND NUTRITION CHECKLIST</h3>
<hr>

<?php echo form_open('miscellaneous%20hygiene%20and%20nutrition/new-recording'); ?>
<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-10">
        <div class="error-msg position-left"><?php echo validation_errors(); ?></div>
    </div>
</div>
<div class="card w-100">

    <div class="document-part-header">Details of the Group</div>
    <hr>
    <div class="document-part-content">
        <div class="row">
            <div class="col-md-6">
                <label for="group_id">Group ID</label>
                <select name="group_id" id="group_id" class="form-control" onchange="fetch_group_members(this.value);">
                    <option value="">Select a Group ID</option>
                    <?php
                    foreach ($groups_list->result() as $group) {
                        echo '<option value="' . $group->GROUP_ID . '">' . $group->GROUP_ID . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-6">

                <label for="group_name">Name of the Group</label>
                <div id="group_name_div">
                    <input type="text" class="form-control" name="group_name" id="group_name" value="Name of selected group" disabled />
                </div>

            </div>
        </div><br>

        <div class="row">
            <div class="col-md-4">
                <label for="parish">Parish</label>
                <input type="text" class="form-control" name="parish" id="parish" value="Parish"/>
            </div>
            <div class="col-md-4">
                <label for="subcounty">Sub-County</label>
                <input type="text" class="form-control" name="subcounty" id="subcounty" value="SubCounty"/>
            </div>
            <div class="col-md-4">
                <label for="district">District</label>
                <input type="text" class="form-control" name="district" id="district" value="District"/>
            </div>
        </div><br>
    </div>
    <hr>
    <div class="document-part-header">Hygiene and Nutrition Information</div>

    <br>
    <div class="document-part-content">
        <div class="row">
            <div class="col-md-8">
                <strong><em>Note: Use the following key below to fill the table appropriately</em></strong><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 = Absent <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 = New and in use <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 = Present and in use <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 = Present but not in use <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5 = Renovated and in use <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6 = Renovated but not in use <br>
            </div>
        </div>
        <div id="checklist_table">

        </div>
    </div>

    <hr>
    <div class="document-part-header">Details of the person accountable for this information</div>

    <hr>
    <div class="document-part-content">
        <div class="row">
            <div class="col-md-6">
                <label for="checked_by">Checked By: </label>
                <select name="checked_by" id="checked_by" class="form-control">
                    <option value="">Select the staff</option>
                    <?php
                    foreach ($staff_list->result() as $row) {
                        echo '<option value="' . $row->STAFF_ID . '">' . $row->NAME . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-6">
                <label for="date_checked">Date: </label>
                <input type="date" name="date_checked" id="date_checked" class="form-control" />
            </div>
        </div>
    </div><br>
    <hr>
    <div class="row">
        <div class="col-md-12" style="font-size: 10px;">
            NB: This <strong style="color: red;">MUST</strong> be checked physically on monthly basis
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12" style="text-align: center;">
            <button type="submit" class="btn btn-primary btn-md">Save Information</button>
        </div>
    </div>
    <br>
</div>
</form>

<script type="text/javascript">

    //    Setting the dropdown for subcounty for parish insertion using ajax
    function fetch_group_members(group_id) {
        if (group_id !== '') {
            $.ajax({
                url: "<?php echo base_url('Miscellaneous/HygieneAndNutrition/hygieneAndNutrition/fetch_group_members');?>",
                method: "POST",
                data: {group_id: group_id},
                success: function (data) {
//                    alert(data);
                    show_group_details(group_id);
                    document.getElementById('checklist_table').innerHTML = data;
                }
            });
        }
    }

    function show_group_details(group_id) {
        $.ajax({
            url: "<?php echo base_url('People/Groupings/groupings/get_group_name');?>",
            method: "POST",
            data: {group_id: group_id},
            success: function (data) {
                document.getElementById('group_name').value = data;
            }
        });
    }
</script>