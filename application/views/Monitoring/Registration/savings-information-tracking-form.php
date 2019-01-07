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
                    <label for="group_id">Group ID</label>
                    <select name="group_id" id="group_id" class="form-control">
                        <option value="">Select the group id</option>
                    </select><br>

                    <label for="group_name">Name of the Group</label>
                    <select name="group_name" id="group_name" class="form-control" disabled>
                        <option value="">Select the group group name</option>
                    </select>
                </th>
                <th>
                    <label for="group_id">Group ID</label>
                    <select name="group_id" id="group_id" class="form-control">
                        <option value="">Select the group id</option>
                    </select><br>

                    <label for="group_name">Name of the Group</label>
                    <select name="group_name" id="group_name" class="form-control" disabled>
                        <option value="">Select the group group name</option>
                    </select>
                </th>
                <th>
                    <label for="group_id">Group ID</label>
                    <select name="group_id" id="group_id" class="form-control">
                        <option value="">Select the group id</option>
                    </select><br>

                    <label for="group_name">Name of the Group</label>
                    <select name="group_name" id="group_name" class="form-control" disabled>
                        <option value="">Select the group group name</option>
                    </select>
                </th>
                <th>
                    <label for="group_id">Group ID</label>
                    <select name="group_id" id="group_id" class="form-control">
                        <option value="">Select the group id</option>
                    </select><br>

                    <label for="group_name">Name of the Group</label>
                    <select name="group_name" id="group_name" class="form-control" disabled>
                        <option value="">Select the group group name</option>
                    </select>
                </th>
                <th>
                    <label for="group_id">Group ID</label>
                    <select name="group_id" id="group_id" class="form-control">
                        <option value="">Select the group id</option>
                    </select><br>

                    <label for="group_name">Name of the Group</label>
                    <select name="group_name" id="group_name" class="form-control" disabled>
                        <option value="">Select the group group name</option>
                    </select>
                </th>
            </tr>

            <tr>
                <td><div class="col-md-12">Total savings per each group</div></td>
                <td><div class="col-md-12"><input type="text" name="total_savings" id="total_savings" class="form-control" /></div></td>
                <td><div class="col-md-12"><input type="text" name="total_savings" id="total_savings" class="form-control" /></div> </td>
                <td><div class="col-md-12"><input type="text" name="total_savings" id="total_savings" class="form-control" /></div> </td>
                <td><div class="col-md-12"><input type="text" name="total_savings" id="total_savings" class="form-control" /></div> </td>
                <td><div class="col-md-12"><input type="text" name="total_savings" id="total_savings" class="form-control" /></div> </td>
            </tr>

            <tr>
                <td><div class="col-md-12">Amount Loan out</div></td>
                <td><div class="col-md-12"><input type="text" name="amount_loan_out" id="total_savings" class="form-control" /></div> </td>
                <td><div class="col-md-12"><input type="text" name="amount_loan_out" id="total_savings" class="form-control" /></div> </td>
                <td><div class="col-md-12"><input type="text" name="amount_loan_out" id="total_savings" class="form-control" /></div> </td>
                <td><div class="col-md-12"><input type="text" name="amount_loan_out" id="total_savings" class="form-control" /></div> </td>
                <td><div class="col-md-12"><input type="text" name="amount_loan_out" id="total_savings" class="form-control" /></div> </td>
            </tr>

            <tr>
                <td><div class="col-md-12">Total amount paid back</div></td>
                <td><div class="col-md-12"><input type="text" name="total_amount_paid_back" id="total_savings" class="form-control" /></div> </td>
                <td><div class="col-md-12"><input type="text" name="total_amount_paid_back" id="total_savings" class="form-control" /></div> </td>
                <td><div class="col-md-12"><input type="text" name="total_amount_paid_back" id="total_savings" class="form-control" /></div> </td>
                <td><div class="col-md-12"><input type="text" name="total_amount_paid_back" id="total_savings" class="form-control" /></div> </td>
                <td><div class="col-md-12"><input type="text" name="total_amount_paid_back" id="total_savings" class="form-control" /></div> </td>
            </tr>

            <tr>
                <td><div class="col-md-12">Interest paid per group</div></td>
                <td><div class="col-md-12"><input type="text" name="interest_paid_per_group" id="total_savings" class="form-control" /></div> </td>
                <td><div class="col-md-12"><input type="text" name="interest_paid_per_group" id="total_savings" class="form-control" /></div> </td>
                <td><div class="col-md-12"><input type="text" name="interest_paid_per_group" id="total_savings" class="form-control" /></div> </td>
                <td><div class="col-md-12"><input type="text" name="interest_paid_per_group" id="total_savings" class="form-control" /></div> </td>
                <td><div class="col-md-12"><input type="text" name="interest_paid_per_group" id="total_savings" class="form-control" /></div> </td>
            </tr>

            <tr>
                <td><div class="col-md-12">Issues Identified</div></td>
                <td><div class="col-md-12"><textarea name="issues_identified" id="total_savings" class="form-control" ></textarea></div> </td>
                <td><div class="col-md-12"><textarea name="issues_identified" id="total_savings" class="form-control" ></textarea>></textarea></div> </td>
                <td><div class="col-md-12"><textarea name="issues_identified" id="total_savings" class="form-control" ></textarea></div> </td>
                <td><div class="col-md-12"><textarea name="issues_identified" id="total_savings" class="form-control" ></textarea></div> </td>
                <td><div class="col-md-12"><textarea name="issues_identified" id="total_savings" class="form-control" ></textarea></div> </td>
            </tr>

            <tr>
                <td><div class="col-md-12">Action taken</div></td>
                <td><div class="col-md-12"><textarea name="action_taken" id="total_savings" class="form-control"></textarea></div> </td>
                <td><div class="col-md-12"><textarea name="action_taken" id="total_savings" class="form-control"></textarea></div> </td>
                <td><div class="col-md-12"><textarea name="action_taken" id="total_savings" class="form-control"></textarea></div> </td>
                <td><div class="col-md-12"><textarea name="action_taken" id="total_savings" class="form-control"></textarea></div> </td>
                <td><div class="col-md-12"><textarea name="action_taken" id="total_savings" class="form-control"></textarea></div> </td>
            </tr>

            <tr>
                <td><div class="col-md-12">Total amount</div></td>
                <td><div class="col-md-12"><input type="text" name="total_amount" id="total_savings" class="form-control" /></div> </td>
                <td><div class="col-md-12"><input type="text" name="total_amount" id="total_savings" class="form-control" /></div> </td>
                <td><div class="col-md-12"><input type="text" name="total_amount" id="total_savings" class="form-control" /></div> </td>
                <td><div class="col-md-12"><input type="text" name="total_amount" id="total_savings" class="form-control" /></div> </td>
                <td><div class="col-md-12"><input type="text" name="total_amount" id="total_savings" class="form-control" /></div> </td>
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
</div>
<hr>
<div class="col-md-12" style="text-align: center;">
    <button class="btn btn-primary btn-md">Save Information</button>
</div>
<hr>
</form>