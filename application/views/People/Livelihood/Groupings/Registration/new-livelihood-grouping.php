<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/30/18
 * Time: 10:23 PM
 */
?>
<h3>Livelihood Group Registration Form</h3>
<hr>

<div class="col-md-12">
    <div class="row">
        <div class="col-md-2">

        </div>

        <div class="col-md-8">
            <p>
                <label for="group_name">Name of the Group: </label>
                <input type="text" name="group_name" id="group_name" class="form-control" />
            </p>

            <p>
                <label for="group_parish">Parish: </label>
                <select name="group_parish" id="group_parish" class="form-control">
                    <option value="">Select Parish</option>
                </select>
            </p>

            <p>
                <label for="group_village">Village: </label>
                <select name="group_village" id="group_village" class="form-control">
                    <option value="">Select Village</option>
                </select>
            </p>

            <p>
                <label for="group_type">Livelihood Category: </label>
                <select name="group_type" id="group_type" class="form-control">
                    <option value="">Select Livelihood Category</option>
                </select>
            </p>

            <p>
                <label for="date_of_registration">Date of Registration: </label>
                <input type="date" name="date_of_registration" id="date_of_registration" class="form-control" />
            </p>
        </div>
    </div><br>
    <hr>

    <div class="row">
        <div class="col-md-12" style="text-align: center;">
            <button type="submit" class="btn btn-primary btn-md">Register Livelihood Group</button>
        </div>
    </div>
    <hr>
</div>
