<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/5/19
 * Time: 11:07 AM
 */

?>
<h3>DISABILITY ASSESSMENT FORM 2</h3>
<hr>

<?php echo form_open('assessments/form-2/record-a-new-assessment'); ?>
<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-10">
        <div class="error-msg position-left"><?php echo validation_errors(); ?></div>
    </div>
</div>
<div class="row">
    <div class="col-md-1">

    </div>

    <div class="col-md-10">
        <p>
            <label for="child_id">Child ID: </label>
            <select name="child_id" id="child_id" class="form-control">
                <option value="">Select a child</option>
            </select><br>
            <input type="text" name="child_name" id="child_name" value="The details of the selected child will appear here" class="form-control" disabled />
        </p>

        <p>
            <label for="">Date of first screening: </label>
            <input type="date" name="date_of_first_screening" id="date_of_first_screening" class="form-control" />
        </p>

        <p>
            <label for="">Identified By: </label>
            <input type="text" name="identified_by" id="identified_by" class="form-control" />
        </p>

        <p>
            <label for="">Assessed By: </label>
            <input type="text" name="assessed_by" id="assessed_by" class="form-control" />
        </p>

        <p>
            <label for="">Nearest Health Centre: </label>
            <input type="text" name="nearest_hc" id="nearest_hc" class="form-control" />
        </p>

        <p>
            <label for="distance_in_km">Distance (in KM)</label>
            <input type="number" name="distance_in_km" id="distance_in_km" class="form-control" />
        </p>

        <p>
            <label for="venue_for_screening">Venue: </label>
            <input type="text" name="venue_for_screening" id="venue_for_screening" class="form-control" />
        </p>

        <p>
            <label for="medical_history">Medical History: </label>
            <textarea name="medical_history" id="medical_history" class="form-control"></textarea>
        </p>

        <p>
            <label for="findings">Findings: </label>
            <textarea name="findings" id="findings" class="form-control" ></textarea>
        </p>

        <p>
            <label for="disability">Disability: </label>
            <textarea name="disability" id="disability" class="form-control" ></textarea>
        </p>

        <p>
            <label for="recommendations">Recommendations: </label>
            <textarea name="recommendations" id="recommendations" class="form-control" ></textarea>
        </p>

        <p>
            <label for="screened_by">Screened By: </label>
            <input type="text" name="screened_by" id="screened_by" class="form-control" />
        </p>

        <p>
            <label for="title">Title: </label>
            <input type="text" name="title" id="title" class="form-control" />
        </p>

        <p>
            <label for="date_of_recording">Date of Recording: </label>
            <input type="date" name="date_of_recording" id="date_of_recording" class="form-control" />
        </p>

        <hr>
        <p style="text-align: center;">
            <button type="submit" class="btn btn-primary btn-md">Save Assessment Information</button>
        </p>
    </div>
</div>
</form>