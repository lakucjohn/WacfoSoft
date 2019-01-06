<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/4/19
 * Time: 9:43 PM
 */

?>
<h3>Staff Registration Form</h3>

<hr>
<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-8">
        <p>
            <label for="staff_name">Name of the Staff:</label>
            <input type="text" name="staff_name" id="staff_name" class="form-control" />
        </p>

        <p>
            <label for="staff_position">Position: </label>
            <input type="text" name="staff-position" id="staff_position" class="form-control" />
        </p>

        <p>
            <label for="staff_department">Department: </label>
            <select name="staff_department" id="staff_department" class="form-control">
                <option value="">Select the department</option>
            </select>
        </p>

        <p>
            <div class="row">
                <label for="staff_telephone">Telephone: </label>
            </div>
            <div class="row">
                <div class="col-md-2" style="text-align: right;">
                    +256
                </div>

                <div class="col-md-10">
                    <input type="number" name="staff_telephone" id="staff_telephone" class="form-control" maxlength="9" />
                </div>

            </div>

        </p>

        <p>
            <label for="staff_email">Email Address: </label>
            <input type="email" name="staff_email" id="staff_email" class="form-control" />
        </p>
    </div>
</div>

<hr>
<div class="row">
    <div class="col-md-12" style="text-align: center;">
        <button class="btn btn-primary btn-md">Register Staff</button>
    </div>
</div>
<br>