<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/2/19
 * Time: 11:38 PM
 */
?>


<h3 style="text-align: center;">FIELD SUPPORT VISITS FORM TEMPLATE FOR WEEKLY STAFFS MONITORING GROUP</h3>

<hr>

<?php echo form_open('monitoring/new-field-support-visit'); ?>
<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-10">
        <div class="error-msg position-left"><?php echo validation_errors(); ?></div>
    </div>
</div>
<div class="row">
    <table class="table table-bordered table-responsive" id="field_visit_table">
        <tr>
            <th>ACTIVITIES DONE IN PARTICULAR GROUPS</th>
            <th>NAME OF GROUP</th>
            <th>ACTIVITIES</th>
            <th>ISSUES IDENTIFIED</th>
            <th>ACTION TAKEN</th>
        </tr>
        <tr>
            <td>
                <div class="col-md-12">
                    GROUP
                </div>
            </td>
            <td>
                <div class="col-md-12">

                    <label for="group_id">Group ID</label>
                    <select name="group_id" id="group_id" class="form-control"
                            onchange="show_group_details(this.value)">
                        <option value="">Select the group id</option>
                        <?php
                        foreach ($group_list->result() as $row) {
                            echo '<option value="' . $row->GROUP_ID . '">' . $row->GROUP_ID . '</option>';
                        }
                        ?>
                    </select><br>


                    <input type="text" name="group_name" id="group_name" class="form-control" disabled/>
                </div>
            </td>

            <td>
                <div class="col-md-12">
                    <textarea name="activities" id="activities" class="form-control"></textarea>
                </div>
            </td>

            <td>
                <div class="col-md-12">
                    <textarea name="issues_identified" id="issues_identified" class="form-control"></textarea>

                </div>
            </td>

            <td>
                <div class="col-md-12">
                    <textarea name="action_taken" id="action_taken" class="form-control"></textarea>

                </div>
            </td>
        </tr>
    </table>
</div>
<br>
<hr>
<div class="col-md-12" style="text-align: center;">
    <button class="btn btn-primary btn-md">Save Information</button>
</div>
<hr>
</form>

<script type="text/javascript">

    function show_group_details(group_id) {
        if (group_id !== '') {
            $.ajax({
                url: "<?php echo base_url('People/Groupings/groupings/get_group_name');?>",
                method: "POST",
                data: {group_id: group_id},
                success: function (data) {
                    document.getElementById('group_name').value = data;
                }
            });
        }
    }
</script>