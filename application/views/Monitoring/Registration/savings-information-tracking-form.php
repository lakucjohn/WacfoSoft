<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/2/19
 * Time: 11:38 PM
 */
?>


<h3 style="text-align: center;">TEMPLATE FOR TRACKING SAVING INFORMATION ON WEEKLY BASES BY FIELD STAFFS</h3>

<hr>

<?php echo form_open('monitoring/new-group-savings-tracking'); ?>
<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-10">
        <div class="error-msg position-left"><?php echo validation_errors(); ?></div>
    </div>
</div>
<div class="row">

    <div class="col-md-12">
        <table class="table table-bordered table-responsive">
            <tr>
                <th>LIST OF ACTIVITIES DONE IN THE GROUPS</th>
                <th>
                    <label for="group_id_1">Group ID</label>
                    <select name="group_id_1" id="group_id_1" class="form-control"
                            onchange="show_group_details(this.value,'group_name_1')">
                        <option value="">Select the group id</option>
                        <?php
                        foreach ($group_list->result() as $row) {
                            echo '<option value="' . $row->GROUP_ID . '">' . $row->GROUP_ID . '</option>';
                        }
                        ?>
                    </select><br>

                    <input type="text" name="group_name_1" id="group_name_1" class="form-control" disabled/>
                </th>
                <th>
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
                </th>
                <th>
                    <label for="group_id_3">Group ID</label>
                    <select name="group_id_3" id="group_id_3" class="form-control"
                            onchange="show_group_details(this.value,'group_name_3')">
                        <option value="">Select the group id</option>
                        <?php
                        foreach ($group_list->result() as $row) {
                            echo '<option value="' . $row->GROUP_ID . '">' . $row->GROUP_ID . '</option>';
                        }
                        ?>
                    </select><br>

                    <input type="text" name="group_name_3" id="group_name_3" class="form-control" disabled/>
                </th>
                <th>
                    <label for="group_id_4">Group ID</label>
                    <select name="group_id_4" id="group_id_4" class="form-control"
                            onchange="show_group_details(this.value,'group_name_4')">
                        <option value="">Select the group id</option>
                        <?php
                        foreach ($group_list->result() as $row) {
                            echo '<option value="' . $row->GROUP_ID . '">' . $row->GROUP_ID . '</option>';
                        }
                        ?>
                    </select><br>

                    <input type="text" name="group_name_4" id="group_name_4" class="form-control" disabled/>
                </th>
                <th>
                    <label for="group_id_5">Group ID</label>
                    <select name="group_id_5" id="group_id_5" class="form-control"
                            onchange="show_group_details(this.value,'group_name_5')">
                        <option value="">Select the group id</option>
                        <?php
                        foreach ($group_list->result() as $row) {
                            echo '<option value="' . $row->GROUP_ID . '">' . $row->GROUP_ID . '</option>';
                        }
                        ?>
                    </select><br>

                    <input type="text" name="group_name_5" id="group_name_5" class="form-control" disabled/>
                </th>
            </tr>

            <tr>
                <td><div class="col-md-12">Total savings per each group</div></td>
                <td>
                    <div class="col-md-12"><input type="number" name="total_savings_1" id="total_savings_1"
                                                  class="form-control"/></div>
                </td>
                <td>
                    <div class="col-md-12"><input type="number" name="total_savings_2" id="total_savings_2"
                                                  class="form-control"/></div>
                </td>
                <td>
                    <div class="col-md-12"><input type="number" name="total_savings_3" id="total_savings_3"
                                                  class="form-control"/></div>
                </td>
                <td>
                    <div class="col-md-12"><input type="number" name="total_savings_4" id="total_savings_4"
                                                  class="form-control"/></div>
                </td>
                <td>
                    <div class="col-md-12"><input type="number" name="total_savings_5" id="total_savings_5"
                                                  class="form-control"/></div>
                </td>
            </tr>

            <tr>
                <td><div class="col-md-12">Amount Loan out</div></td>
                <td>
                    <div class="col-md-12"><input type="number" name="amount_loan_out_1" id="amount_loan_out_1"
                                                  class="form-control"/></div>
                </td>
                <td>
                    <div class="col-md-12"><input type="number" name="amount_loan_out_2" id="amount_loan_out_2"
                                                  class="form-control"/></div>
                </td>
                <td>
                    <div class="col-md-12"><input type="number" name="amount_loan_out_3" id="amount_loan_out_3"
                                                  class="form-control"/></div>
                </td>
                <td>
                    <div class="col-md-12"><input type="number" name="amount_loan_out_4" id="amount_loan_out_4"
                                                  class="form-control"/></div>
                </td>
                <td>
                    <div class="col-md-12"><input type="number" name="amount_loan_out_5" id="amount_loan_out_5"
                                                  class="form-control"/></div>
                </td>
            </tr>

            <tr>
                <td><div class="col-md-12">Total amount paid back</div></td>
                <td>
                    <div class="col-md-12"><input type="number" name="total_amount_paid_back_1"
                                                  id="total_amount_paid_back_1" class="form-control"/></div>
                </td>
                <td>
                    <div class="col-md-12"><input type="number" name="total_amount_paid_back_2"
                                                  id="total_amount_paid_back_2" class="form-control"/></div>
                </td>
                <td>
                    <div class="col-md-12"><input type="number" name="total_amount_paid_back_3"
                                                  id="total_amount_paid_back_3" class="form-control"/></div>
                </td>
                <td>
                    <div class="col-md-12"><input type="number" name="total_amount_paid_back_4"
                                                  id="total_amount_paid_back_4" class="form-control"/></div>
                </td>
                <td>
                    <div class="col-md-12"><input type="number" name="total_amount_paid_back_5"
                                                  id="total_amount_paid_back_5" class="form-control"/></div>
                </td>
            </tr>

            <tr>
                <td><div class="col-md-12">Interest paid per group</div></td>
                <td>
                    <div class="col-md-12"><input type="number" name="interest_paid_per_group_1"
                                                  id="interest_paid_per_group_1" class="form-control"/></div>
                </td>
                <td>
                    <div class="col-md-12"><input type="number" name="interest_paid_per_group_2"
                                                  id="interest_paid_per_group_2" class="form-control"/></div>
                </td>
                <td>
                    <div class="col-md-12"><input type="number" name="interest_paid_per_group_3"
                                                  id="interest_paid_per_group_3" class="form-control"/></div>
                </td>
                <td>
                    <div class="col-md-12"><input type="number" name="interest_paid_per_group_4"
                                                  id="interest_paid_per_group_4" class="form-control"/></div>
                </td>
                <td>
                    <div class="col-md-12"><input type="number" name="interest_paid_per_group_5"
                                                  id="interest_paid_per_group_5" class="form-control"/></div>
                </td>
            </tr>

            <tr>
                <td><div class="col-md-12">Issues Identified</div></td>
                <td>
                    <div class="col-md-12"><textarea name="issues_identified_1" id="issues_identified_1"
                                                     class="form-control"></textarea></div>
                </td>
                <td>
                    <div class="col-md-12"><textarea name="issues_identified_2" id="issues_identified_2"
                                                     class="form-control"></textarea></textarea></div>
                </td>
                <td>
                    <div class="col-md-12"><textarea name="issues_identified_3" id="issues_identified_3"
                                                     class="form-control"></textarea></div>
                </td>
                <td>
                    <div class="col-md-12"><textarea name="issues_identified_4" id="issues_identified_4"
                                                     class="form-control"></textarea></div>
                </td>
                <td>
                    <div class="col-md-12"><textarea name="issues_identified_5" id="issues_identified_5"
                                                     class="form-control"></textarea></div>
                </td>
            </tr>

            <tr>
                <td><div class="col-md-12">Action taken</div></td>
                <td>
                    <div class="col-md-12"><textarea name="action_taken_1" id="action_taken_1"
                                                     class="form-control"></textarea></div>
                </td>
                <td>
                    <div class="col-md-12"><textarea name="action_taken_2" id="action_taken_2"
                                                     class="form-control"></textarea></div>
                </td>
                <td>
                    <div class="col-md-12"><textarea name="action_taken_3" id="action_taken_3"
                                                     class="form-control"></textarea></div>
                </td>
                <td>
                    <div class="col-md-12"><textarea name="action_taken_4" id="action_taken_4"
                                                     class="form-control"></textarea></div>
                </td>
                <td>
                    <div class="col-md-12"><textarea name="action_taken_5" id="action_taken_5"
                                                     class="form-control"></textarea></div>
                </td>
            </tr>

            <tr>
                <td><div class="col-md-12">Total amount</div></td>
                <td>
                    <div class="col-md-12"><input type="number" name="total_amount_1" id="total_amount_1"
                                                  class="form-control"/></div>
                </td>
                <td>
                    <div class="col-md-12"><input type="number" name="total_amount_2" id="total_amount_2"
                                                  class="form-control"/></div>
                </td>
                <td>
                    <div class="col-md-12"><input type="number" name="total_amount_3" id="total_amount_3"
                                                  class="form-control"/></div>
                </td>
                <td>
                    <div class="col-md-12"><input type="number" name="total_amount_4" id="total_amount_4"
                                                  class="form-control"/></div>
                </td>
                <td>
                    <div class="col-md-12"><input type="number" name="total_amount_5" id="total_amount_5"
                                                  class="form-control"/></div>
                </td>
            </tr>
        </table>
    </div>

</div>
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

<script>

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