<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/4/19
 * Time: 11:41 PM
 */
?>
<h3>CHILD REGISTRATION FORM</h3>

<hr>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-10">
            <p>
                <label for="child_name">Name of the Child:</label>
                <input type="text" name="child_name" id="child_name" class="form-control" />
            </p>

            <p>
                <label for="child_sex">Gender: </label><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_sex" id="child_sex" />Male<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_sex" id="child_sex" />Female
            </p>

            <p>
                <label for="child_vulnerability">Vulnerability: </label>
                <select name="child_vulnerability" id="child_vulnerability" class="form-control">
                    <option value="">Select the vulnerability</option>
                </select>
            </p>

            <p>
                <label for="child_date_of_birth">Date of Birth: </label>
                <input type="date" name="child_date_of_birth" id=child_date_of_birth" class="form-control" />
            </p>
            <p>
                <label for="child_parish">Parish:</label>
                <select name="child_parish" id="child_parish" class="form-control">
                    <option value="">Select the Parish</option>
                </select>

            </p>
            <p>
                <label for="child_village">Village:</label>
                <select name="child_village" id="child_village" class="form-control">
                    <option value="">Select the Village</option>
                </select>
            </p>
            <p>
                <label for="child_date_of_joining">Date of joining: </label>
                <input type="date" name="child_date_of_joining" id="child_date_of_joining" class="form-control" />
            </p>
            <p>
                <label for="child_mother_name">Mother's Name: </label>
                <input type="text" name="child_mother_name" id="child_mother_name" class="form-control" />
            </p>
            <p>
                <label for="child_father_name">Father's Name: </label>
                <input type="text" name="child_father_name" id="child_father_name" class="form-control" />
            </p>
            <p>
                <label for="child_guardian_name">Name of Guardian: </label>
                <input type="text" name="child_guardian_name" id="child_guardian_name" class="form-control" />
            </p>

            <p style="text-align: center;">
                <br>
                <button type="submit" class="btn btn-primary btn-md">Register Child</button>
            </p>

        </div>
    </div>
</div>
