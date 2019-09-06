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

<?php echo form_open('visitations/record-a-new-visit'); ?>
<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-10">
        <div class="error-msg position-left"><?php echo validation_errors(); ?></div>
    </div>
</div>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-1">

        </div>

        <div class="col-md-10">
            <p>
                <label for="date_of_visit">Date of Visitation: </label>
                <input type="date" name="date_of_visit" id="date_of_visit" class="form-control" />
            </p>
            <p>
                <label for="child_id_visited">Child ID: </label>
                <select name="child_id_visited" id="child_id_visited" class="form-control"
                        onchange="show_child_details(this.value)">
                    <option value="">Select the child ID</option>
                    <?php
                    foreach ($children_list->result() as $row) {
                        echo '<option value="' . $row->CHILD_ID . '">' . $row->CHILD_ID . '</option>';
                    }
                    ?>
                </select><br>

                <input type="text" class="form-control" name="child_name_visited" id="child_name_visited" value="The Details of the selected child will appear here" disabled>
            </p>
            <p>
                <label for="visit_type">Type of visit: </label>
                <select name="visit_type" id="visit_type" class="form-control">
                    <option value="">Select a visit type</option>
                    <option value="Follow Up">Follow Up</option>
                    <option value="Home">Home</option>
                    <option value="School">School</option>
                </select>
            </p>
            <p>
                <label for="subcounty">Sub-County:</label>
                <select name="subcounty" id="subcounty" class="form-control" onchange="fetch_parish_list(this.value)">
                    <option value="">Select the Sub-County</option>
                    <?php
                    foreach ($subcounty_list->result() as $row) {
                        echo '<option value="' . $row->ID . '">' . $row->SUBCOUNTY . '</option>';
                    }
                    ?>
                </select>

            </p>
            <p>
            <div id="parish_div">
                <label for="parish">Parish:</label>
                <select name="parish" id="parish" class="form-control">
                    <option value="">Select the Parish</option>
                </select>
            </div>

            </p>
            <p>
            <div id="village_div">
                <label for="village">Village:</label>
                <select name="village" id="village" class="form-control">
                    <option value="">Select the Village</option>
                </select>
            </div>
            </p>

            <p>
                <label for="child_visit_activities">Activitie Carried Out: </label>
                <textarea rows="5" name="child_visit_activities" id="child_visit_activities" class="form-control"></textarea>
            </p>

            <p>
                <label for="child_next_visit_activities">Activities to be carried out in the next visit: </label>
                <textarea rows="5" name="child_next_visit_activities" id="child_next_visit_activities" class="form-control"></textarea>
            </p>

            <p>
                <label for="child_visit_staff">Staff:</label>
                <select name="child_visit_staff" id="child_visit_staff" class="form-control">
                    <option value="">Select the Active Staff</option>
                    <?php
                    foreach ($staff_list->result() as $row) {
                        echo '<option value="' . $row->STAFF_ID . '">' . $row->NAME . '</option>';
                    }
                    ?>
                </select>

            </p>

            <p>
                <label for="child_visit_comment">Comment: </label>
                <textarea rows="5" name="child_visit_comment" id="child_visit_comment" class="form-control"></textarea>
            </p>

            <p>
                <label for="next_date_of_visit">Date of Next Visit</label>
                <input type="date" name="next_date_of_visit" id="next_date_of_visit" class="form-control" />
            </p>

            <hr>
            <p style="text-align: center;">
                <button type="submit" class="btn btn-primary btn-md">Save Visitation Information</button>
            </p>

        </div>

    </div>
</div>
</form>

<script type="text/javascript">

    function show_child_details(child_id) {
        if (child_id !== '') {
            $.ajax({
                url: "<?php echo base_url('People/Children/children/get_child_name');?>",
                method: "POST",
                data: {child_id: child_id},
                success: function (data) {
                    document.getElementById('child_name_visited').value = data;
                }
            });
        }
    }

    function fetch_parish_list(subcounty_id) {
        if (subcounty_id !== '') {
            $.ajax({
                url: "<?php echo base_url('Settings/Welcome/settings/fetch_parishes_in_subcounty_for_assessment');?>",
                method: "POST",
                data: {subcounty_id: subcounty_id},
                success: function (data) {
                    document.getElementById('parish_div').innerHTML = data;
                }
            });
        }
    }

    function fetch_village_list(parish_id) {
        if (parish_id !== '') {
            $.ajax({
                url: "<?php echo base_url('Settings/Welcome/settings/fetch_villages_in_parish_for_assessment');?>",
                method: "POST",
                data: {parish_id: parish_id},
                success: function (data) {
                    document.getElementById('village_div').innerHTML = data;
                }
            });
        }
    }
</script>