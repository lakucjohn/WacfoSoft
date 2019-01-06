<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/5/19
 * Time: 1:59 AM
 */
?>
<h3>CHILD VISITATION REGISTER</h3>
<hr>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-1">

        </div>

        <div class="col-md-10">
            <p>
                <input type="date" name="date_of_visit" id="date_of_visit" class="form-control" />
            </p>
            <p>
                <select name="visit_type" id="visit_type" class="form-control">
                    <option value="">Select a visit type</option>
                    <option value="">Follow Up</option>
                    <option value="">Home</option>
                    <option value="">School</option>
                </select>
            </p>
            <p>
                <select name="child_id_visited" id="child_id_visited" class="form-control">
                    <select name="">Select the child ID</select>
                </select><br>

                <input type="text" class="form-control" name="child_name_visited" id="child_name_visited" value="The Details of the selected child will appear here" disabled>
            </p>
            <p>
                <select name="project_visit_type" id="project_visit_type" class="form-control">
                    <option value="">Select a project</option></select>
                    <option value="">DSP</option>
                    <option value="">Porticus</option>
                    <option value="">Victorbraun</option>
            </p>
            <p>
                <label for="child_visit_subcounty">Parish:</label>
                <select name="child_visit_subcounty" id="child_visit_subcounty" class="form-control">
                    <option value="">Select the Sub-County</option>
                </select>

            </p>
            <p>
                <label for="child_visit_parish">Parish:</label>
                <select name="child_visit_village" id="child_visit_village" class="form-control">
                    <option value="">Select the Parish</option>
                </select>

            </p>
            <p>
                <label for="child_visit_village">Village:</label>
                <select name="child_visit_village" id="child_visit_village" class="form-control">
                    <option value="">Select the Village</option>
                </select>
            </p>

            <p>
                <textarea rows="5" name="child_visit_activities" id="child_visit_activities" class="form-control"></textarea>
            </p>

            <p>
                <textarea rows="5" name="child_next_visit_activities" id="child_next_visit_activities" class="form-control"></textarea>
            </p>

            <p>
                <label for="child_visit_staff">Parish:</label>
                <select name="child_visit_staff" id="child_visit_staff" class="form-control">
                    <option value="">Select the Active Staff</option>
                </select>

            </p>

            <p>
                <textarea rows="5" name="child_visit_comment" id="child_visit_comment" class="form-control"></textarea>
            </p>

            <p>
                <input type="date" name="next_date_of_visit" id="next_date_of_visit" class="form-control" />
            </p>

            <hr>
            <p style="text-align: center;">
                <button type="submit" class="btn btn-primary btn-md">Save Visitation Information</button>
            </p>

        </div>

    </div>
</div>
