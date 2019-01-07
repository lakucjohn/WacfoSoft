<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/3/19
 * Time: 11:48 PM
 */
?>
<h3>
    NEW COURSE AND MODULE REGISTRATION FORM
</h3>

<hr>

<?php echo form_open('staff/register-new'); ?>
<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-10">
        <div class="error-msg position-left"><?php echo validation_errors(); ?></div>
    </div>
</div>
<div class="card w-100">
    <div class="document-part-header">
        Details of the Course
    </div>

    <hr>

    <div class="document-part-content">
        <div class="row">

                <div class="col-md-6">
                    <label for="course_name">Name of the Course:</label>
                    <input type="text" name="course_name" id="course_name" class="form-control" />
                </div>
                <div class="col-md-6">
                    <label for="course_code">Course Code:</label>
                    <input type="text" name="course_code" id="course_code" class="form-control" />
                </div>
        </div><br>

        <div class="row">
            <div class="col-md-12">
                <label for="course_details">Description: </label>
                <textarea name="course_details" id="course_details" class="form-control"></textarea>
            </div>
        </div><br>

        <div class="row">

            <div class="col-md-12">
                <table class="table table-bordered table-responsive">

                    <tr>
                        <th colspan="6">Select The Target Groups</th>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-md-12">
                                <input type="checkbox" name="all_groups" id="all_groups" value="all" />All Groups
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-md-12">
                                <input type="checkbox" name="target_group" id="target_group" value="" />Group Name
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <input type="checkbox" name="target_group" id="target_group" value="" />Group Name
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <input type="checkbox" name="target_group" id="target_group" value="" />Group Name
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <input type="checkbox" name="target_group" id="target_group" value="" />Group Name
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <input type="checkbox" name="target_group" id="target_group" value="" />Group Name
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <input type="checkbox" name="target_group" id="target_group" value="" />Group Name
                            </div>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>

    <hr>
    <div class="document-part-header">
        Modules in the course
    </div>

    <hr>
    <div class="document-part-content">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-responsive">
                    <tr>
                        <th style="width:60%;">Name of the module</th>
                        <th style="width: 40%;">Options</th>
                    </tr>

                    <tr>
                        <td>
                            <div class="col-md-12">
                                <input type="text" class="form-control" />
                            </div>
                        </td>
                        <td><div class="col-md-12"><button type="button" class="btn btn-success">Edit</button></div> </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12" style="text-align: center;">
            <button type="submit" class="btn btn-primary btn-md">Register Course and Modules</button>
        </div>

    </div>
    <hr>
</div>
</form>