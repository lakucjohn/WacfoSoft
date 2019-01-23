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
                    GROUP 1
                </div>
            </td>
            <td>
                <div class="col-md-12">

                    <label for="group_id_1">Group ID</label>
                    <select name="group_id_1" id="group_id_1" class="form-control"
                            onchange="show_group_details(this.value,'group_name_1')" required>
                        <option value="">Select the group id</option>
                        <?php
                        foreach ($group_list->result() as $row) {
                            echo '<option value="' . $row->GROUP_ID . '">' . $row->GROUP_ID . '</option>';
                        }
                        ?>
                    </select><br>


                    <input type="text" name="group_name_1" id="group_name_1" class="form-control" disabled/>
                </div>
            </td>

            <td>
                <div class="col-md-12">
                    <textarea name="activities_1" id="activities_1" class="form-control" required></textarea>
                </div>
            </td>

            <td>
                <div class="col-md-12">
                    <textarea name="issues_identified_1" id="issues_identified_1" class="form-control"
                              required></textarea>

                </div>
            </td>

            <td>
                <div class="col-md-12">
                    <textarea name="action_taken_1" id="action_taken_1" class="form-control" required></textarea>

                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-md-12">
                    GROUP 2
                </div>
            </td>
            <td>
                <div class="col-md-12">

                    <label for="group_id_2">Group ID</label>
                    <select name="group_id_2" id="group_id_2" class="form-control"
                            onchange="show_group_details(this.value,'group_name_2')">
                        <option value="">Select the group id</option>
                        <?php
                        foreach ($group_list->result() as $row) {
                            echo '<option value="' . $row->GROUP_ID . '">' . $row->GROUP_ID . '</option>';
                        }
                        ?>
                    </select><br>


                    <input type="text" name="group_name_2" id="group_name_2" class="form-control" disabled/>
                </div>
            </td>

            <td>
                <div class="col-md-12">
                    <textarea name="activities_2" id="activities_2" class="form-control"></textarea>
                </div>
            </td>

            <td>
                <div class="col-md-12">
                    <textarea name="issues_identified_2" id="issues_identified_2" class="form-control"></textarea>

                </div>
            </td>

            <td>
                <div class="col-md-12">
                    <textarea name="action_taken_2" id="action_taken_2" class="form-control"></textarea>

                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-md-12">
                    GROUP 3
                </div>
            </td>
            <td>
                <div class="col-md-12">

                    <label for="group_id_3">Group ID</label>
                    <select name="group_id_3" id="group_id_3" class="form-control"
                            onchange="show_group_details(this.value, 'group_name_3')">
                        <option value="">Select the group id</option>
                        <?php
                        foreach ($group_list->result() as $row) {
                            echo '<option value="' . $row->GROUP_ID . '">' . $row->GROUP_ID . '</option>';
                        }
                        ?>
                    </select><br>


                    <input type="text" name="group_name_3" id="group_name_3" class="form-control" disabled/>
                </div>
            </td>

            <td>
                <div class="col-md-12">
                    <textarea name="activities_3" id="activities_3" class="form-control"></textarea>
                </div>
            </td>

            <td>
                <div class="col-md-12">
                    <textarea name="issues_identified_3" id="issues_identified_3" class="form-control"></textarea>

                </div>
            </td>

            <td>
                <div class="col-md-12">
                    <textarea name="action_taken_3" id="action_taken_3" class="form-control"></textarea>

                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-md-12">
                    GROUP 4
                </div>
            </td>
            <td>
                <div class="col-md-12">

                    <label for="group_id_4">Group ID</label>
                    <select name="group_id_4" id="group_id_4" class="form-control"
                            onchange="show_group_details(this.value, 'group_name_4')">
                        <option value="">Select the group id</option>
                        <?php
                        foreach ($group_list->result() as $row) {
                            echo '<option value="' . $row->GROUP_ID . '">' . $row->GROUP_ID . '</option>';
                        }
                        ?>
                    </select><br>


                    <input type="text" name="group_name_4" id="group_name_4" class="form-control" disabled/>
                </div>
            </td>

            <td>
                <div class="col-md-12">
                    <textarea name="activities_4" id="activities_4" class="form-control"></textarea>
                </div>
            </td>

            <td>
                <div class="col-md-12">
                    <textarea name="issues_identified_4" id="issues_identified_4" class="form-control"></textarea>

                </div>
            </td>

            <td>
                <div class="col-md-12">
                    <textarea name="action_taken_4" id="action_taken_4" class="form-control"></textarea>

                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-md-12">
                    GROUP 5
                </div>
            </td>
            <td>
                <div class="col-md-12">

                    <label for="group_id_5">Group ID</label>
                    <select name="group_id_5" id="group_id_5" class="form-control"
                            onchange="show_group_details(this.value, 'group_name_5');">
                        <option value="">Select the group id</option>
                        <?php
                        foreach ($group_list->result() as $row) {
                            echo '<option value="' . $row->GROUP_ID . '">' . $row->GROUP_ID . '</option>';
                        }
                        ?>
                    </select><br>


                    <input type="text" name="group_name_5" id="group_name_5" class="form-control" disabled/>
                </div>
            </td>

            <td>
                <div class="col-md-12">
                    <textarea name="activities_5" id="activities_5" class="form-control"></textarea>
                </div>
            </td>

            <td>
                <div class="col-md-12">
                    <textarea name="issues_identified_5" id="issues_identified_5" class="form-control"></textarea>

                </div>
            </td>

            <td>
                <div class="col-md-12">
                    <textarea name="action_taken_5" id="action_taken_5" class="form-control"></textarea>

                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-md-12">
                    GROUP 6
                </div>
            </td>
            <td>
                <div class="col-md-12">

                    <label for="group_id">Group ID</label>
                    <select name="group_id_6" id="group_id_6" class="form-control"
                            onchange="show_group_details(this.value, 'group_name_6')">
                        <option value="">Select the group id</option>
                        <?php
                        foreach ($group_list->result() as $row) {
                            echo '<option value="' . $row->GROUP_ID . '">' . $row->GROUP_ID . '</option>';
                        }
                        ?>
                    </select><br>


                    <input type="text" name="group_name_6" id="group_name_6" class="form-control" disabled/>
                </div>
            </td>

            <td>
                <div class="col-md-12">
                    <textarea name="activities_6" id="activities_6" class="form-control"></textarea>
                </div>
            </td>

            <td>
                <div class="col-md-12">
                    <textarea name="issues_identified_6" id="issues_identified_6" class="form-control"></textarea>

                </div>
            </td>

            <td>
                <div class="col-md-12">
                    <textarea name="action_taken_6" id="action_taken_6" class="form-control"></textarea>

                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="col-md-12">
                    GROUP 7
                </div>
            </td>
            <td>
                <div class="col-md-12">

                    <label for="group_id_7">Group ID</label>
                    <select name="group_id_7" id="group_id_7" class="form-control"
                            onchange="show_group_details(this.value, 'group_name_7')">
                        <option value="">Select the group id</option>
                        <?php
                        foreach ($group_list->result() as $row) {
                            echo '<option value="' . $row->GROUP_ID . '">' . $row->GROUP_ID . '</option>';
                        }
                        ?>
                    </select><br>


                    <input type="text" name="group_name_7" id="group_name_7" class="form-control" disabled/>
                </div>
            </td>

            <td>
                <div class="col-md-12">
                    <textarea name="activities_7" id="activities_7" class="form-control"></textarea>
                </div>
            </td>

            <td>
                <div class="col-md-12">
                    <textarea name="issues_identified_7" id="issues_identified_7" class="form-control"></textarea>

                </div>
            </td>

            <td>
                <div class="col-md-12">
                    <textarea name="action_taken_7" id="action_taken_7" class="form-control"></textarea>

                </div>
            </td>
        </tr>
    </table>
</div>
<br>
<div class="row">
    <div class="col-md-8">
        <label for="general_comments">General Comments</label>
        <textarea name="general_comments" id="general_comments" class="form-control"></textarea>
    </div>

    <div class="col-md-4">
        <label for="monitoring_date">Date: </label>
        <input type="date" name="monitoring_date" id="monitoring_date" class="form-control" />
    </div>
</div><br>

<div class="row">
    <div class="col-md-4">
        <label for="monitoring_staff">Staff: </label>
        <select name="monitoring_staff" id="monitoring_staff" class="form-control">
            <option value="">Select Staff</option>
            <?php
            foreach ($staff_list->result() as $row) {
                echo '<option value="' . $row->STAFF_ID . '">' . $row->NAME . '</option>';
            }
            ?>
        </select>
    </div>
</div>
<hr>
<div class="col-md-12" style="text-align: center;">
    <button class="btn btn-primary btn-md">Save Information</button>
</div>
<hr>
</form>

<script type="text/javascript">

    function show_group_details(group_id, group_name_field) {
        if (group_id !== '') {
            $.ajax({
                url: "<?php echo base_url('People/Groupings/groupings/get_group_name');?>",
                method: "POST",
                data: {group_id: group_id},
                success: function (data) {
                    document.getElementById(group_name_field).value = data;
                }
            });
        }
    }
</script>