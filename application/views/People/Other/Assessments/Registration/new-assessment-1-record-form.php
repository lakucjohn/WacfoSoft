<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/5/19
 * Time: 11:08 AM
 */
?>
<h3>New Assessment Form 1</h3>
<hr>

<?php echo form_open('assessments/form-1/record-a-new-assessment'); ?>
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
            <div class="row">
                <div class="col-md-3">
                    <label for="county">County: </label>
                    <select name="county" id="county" class="form-control" onchange="fetch_subcounty_list(this.value)">
                        <option value="">Select the county</option>
                        <?php
                        foreach ($county_list->result() as $row) {
                            echo '<option value="' . $row->ID . '">' . $row->COUNTY . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <div id="subcounty_div">
                        <label for="subcounty">Sub-County: </label>
                        <select name="subcounty" id="subcounty" class="form-control">
                            <option value="">Select the Sub-County</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="parish_div">
                        <label for="parish">Parish: </label>
                        <select name="parish" id="parish" class="form-control">
                            <option value="">Select the parish</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="village_div">
                        <label for="village">Village: </label>
                        <select name="village" id="village" class="form-control">
                            <option value="">Select the village</option>
                        </select>
                    </div>
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-6">
                    <label for="health_centre">Health Centre: </label>
                    <input type="text" name="health_centre" id="health_centre" class="form-control" />
                </div>
                <div class="col-md-6">
                    <label for="date_of_recording">Date Recorded: </label>
                    <input type="date" name="date_of_recording" id="date_of_recording" class="form-control" />
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-12">
                    <label for="cbr_worker">Name of the CBR Worker (Information on the child obtained by CBR Worker):</label>
                    <input type="text" name="cbr_worker" id="cbr_worker" class="form-control"/>
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-6">
                    <label for="child_id">Child ID: </label>
                    <?php
                    if (isset($selected_child_id)) {
                        ?>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="child_id" id="child_id"
                                       value="<?php echo $selected_child_id; ?>" class="form-control"/>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="child_name" id="child_name" value="<?php echo $child_name; ?>"
                                       class="form-control"/>
                            </div>

                        </div>
                        <?php
                    } else if (isset($children_list)) {
                        ?>
                        <select name="child_id" id="child_id" class="form-control"
                                onchange="show_child_details(this.value);">
                            <option value="">Select a child</option>
                            <?php
                            foreach ($children_list->result() as $row) {
                                echo '<option value="' . $row->CHILD_ID . '">' . $row->CHILD_ID . '</option>';
                            }
                            ?>
                        </select><br>
                        <input type="text" name="child_name" id="child_name"
                               value="The details of the selected child will appear here" class="form-control"
                               disabled/>

                        <?php
                    }
                    ?>

                </div>
                <div class="col-md-6">

                    <label for="date_of_birth">Date of Birth: </label>
                    <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" />
                    <br>

                    <label for="child_sex">Gender: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_sex" id="child_sex"
                                                                           value="M"/>Male<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_sex" id="child_sex"
                                                                           value="F"/>Female
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-6">
                    <label for="disability_type">Disability Type</label>
                    <select name="disability_type" id="disability_type" class="form-control">
                        <option value="">Select the Disability Type</option>
                        <option value="P">P</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                    </select><br>
                </div>
                <div class="col-md-6">
                    <label for="where_child_lives">Where the child lives:</label>
                    <select name="where_child_lives" id="where_child_lives" class="form-control"
                            onchange="check_value_for_other(this.value);">
                        <option value="">Select one</option>
                        <option value="With Parents">With Parents</option>
                        <option value="With Other Relatives">With Other Relatives</option>
                        <option value="Other">Other</option>
                    </select>
                    <br><br>
                    <div style="display:none" id="name_of_place_div">
                        <label for="other_place">If Other, specify where: </label>
                        <input type="text" name="other_place" id="other_place" class="form-control"/>

                    </div>
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-6">
                    <label for="availability_of_other_disabled_children_in_family">Are there other disabled children in the family?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                           name="availability_of_other_disabled_children_in_family"
                                                                           id="availability_of_other_disabled_children_in_family"
                                                                           value="1"
                                                                           onclick="turn_on_field('number_of_disabled_children_div');"/>Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                           name="availability_of_other_disabled_children_in_family"
                                                                           id="availability_of_other_disabled_children_in_family"
                                                                           value="0"
                                                                           onclick="turn_off_field('number_of_disabled_children_div')"/>No<br><br>
                    <div style="display:none" id="number_of_disabled_children_div">
                        <label for="number_of_disabled_children">If yes, how many?: </label>
                        <input type="number" name="number_of_disabled_children" id="number_of_disabled_children"
                               class="form-control"/>

                    </div>
                </div>
                <div class="col-md-6">
                    <label for="able_to_provide_basic_needs">Are the Parents/Guardians able to provide basic
                        needs?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                           name="able_to_provide_basic_needs"
                                                                           id="able_to_provide_basic_needs" value="1"
                                                                           onclick="turn_off_field('failure_reason_div');"/>Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                           name="able_to_provide_basic_needs"
                                                                           id="able_to_provide_basic_needs" value="0"
                                                                           onclick="turn_on_field('failure_reason_div');"/>No<br><br>
                    <div style="display:none" id="failure_reason_div">
                        <label for="reason_for_failure_to_provide_basic_needs">If No, Explain why?</label>
                        <textarea name="reason_for_failure_to_provide_basic_needs"
                                  id="reason_for_failure_to_provide_basic_needs" class="form-control"></textarea>

                    </div>
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-12">
                    <label for="disability_description">Description of the disability: </label>
                    <textarea rows="5" name="disability_description" id="disability_description" class="form-control"></textarea>
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-6">
                    <label for="child_uses_medicine">Does the child use medicine?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_uses_medicine"
                                                                           id="child_uses_medicine" value="1"
                                                                           onclick="turn_on_field('medicine_name_div');"/>Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_uses_medicine"
                                                                           id="child_uses_medicine"
                                                                           value="0"
                                                                           onclick="turn_off_field('medicine_name_div');"/>No<br><br>
                    <div style="display:none" id="medicine_name_div">
                        <label for="name_of_medicine">If yes, give its name:</label>
                        <input type="text" name="name_of_medicine" id="name_of_medicine" class="form-control"/>

                    </div>
                </div>
                <div class="col-md-6">
                    <label for="child_has_fits">Does the child have fits?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_has_fits"
                                                                           id="child_has_fits" value="1"
                                                                           onclick="turn_on_field('number_of_fits_div');"/>Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_has_fits"
                                                                           id="child_has_fits" value="0"
                                                                           onclick="turn_off_field('number_of_fits_div');"/>No<br><br>
                    <div style="display:none" id="number_of_fits_div">
                        <label for="number_of_times">If yes, how many times?:</label>
                        <input type="number" name="number_of_times" id="number_of_times" class="form-control"/>
                    </div>
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-6">
                    <label for="childs_limb_moves_well">Does the child's limbs move well?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="childs_limb_moves_well"
                                                                           id="childs_limb_moves_well" value="1"
                                                                           onclick="turn_off_field('moving_limbs_div');"/>Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="childs_limb_moves_well"
                                                                           id="childs_limb_moves_well" value="0"
                                                                           onclick="turn_off_field('moving_limbs_div');"/>No<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="childs_limb_moves_well"
                                                                           id="childs_limb_moves_well" value="2"
                                                                           onclick="turn_on_field('moving_limbs_div');"/>Some<br><br>
                    <div style="display:none" id="moving_limbs_div">
                        <label for="the_limbs_that_move_well">If some, which ones?: </label>
                        <input type="text" name="the_limbs_that_move_well" id="the_limbs_that_move_well"
                               class="form-control"/>

                    </div>
                </div>
                <div class="col-md-6">
                    <label for="child_uses_aids">Does the child use aids/appliances?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_uses_aids"
                                                                           id="child_uses_aids" value="1"
                                                                           onclick="turn_on_field('appliances_name_div');"/>Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_uses_aids"
                                                                           id="child_uses_aids" value="0"
                                                                           onclick="turn_off_field('appliances_name_div');"/>No<br><br>
                    <div style="display:none" id="appliances_name_div">
                        <label for="name_of_appliances">If yes, which ones?:</label>
                        <input type="text" name="name_of_appliances" id="name_of_appliances" class="form-control"/>
                    </div>
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-4">
                    <label for="child_talks">can the child talk?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_talks"
                                                                           id="child_talks" value="1"/>Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_talks"
                                                                           id="child_talks" value="0"/>No<br>
                </div>
                <div class="col-md-4">
                    <label for="child_sees">Can the child see?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_sees"
                                                                           id="child_sees" value="1"/>Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_sees"
                                                                           id="child_sees" value="0"/>No<br>
                </div>
                <div class="col-md-4">
                    <label for="mental_capacity_of_the_child">Mental capacity of the child:</label>
                    <select name="mental_capacity_of_the_child" id="mental_capacity_of_the_child" class="form-control">
                        <option value="">Select one</option>
                        <option value="Normal">Normal</option>
                        <option value="Below Normal">Below Normal</option>
                        <option value="Severely Impaired">Severely Impaired</option>
                    </select>
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-4">
                    <label for="child_eats_and_drinks_by_himself">Can the child eat and drink by himself?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                           name="child_eats_and_drinks_by_himself"
                                                                           id="child_eats_and_drinks_by_himself"
                                                                           value="1"/>Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                           name="child_eats_and_drinks_by_himself"
                                                                           id="child_eats_and_drinks_by_himself"
                                                                           value="0"/>No<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                           name="child_eats_and_drinks_by_himself"
                                                                           id="child_eats_and_drinks_by_himself"
                                                                           value="2"/>With help<br>
                </div>
                <div class="col-md-4">
                    <label for="child_washes_and_dries_by_himself">Can the child wash and dry by himself?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                           name="child_washes_and_dries_by_himself"
                                                                           id="child_washes_and_dries_by_himself"
                                                                           value="1"/>Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                           name="child_washes_and_dries_by_himself"
                                                                           id="child_washes_and_dries_by_himself"
                                                                           value="0"/>No<br>
                </div>
                <div class="col-md-4">
                    <label for="child_manages_toilet_activities">Can the child manage toilet activities?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                           name="child_manages_toilet_activities"
                                                                           id="child_manages_toilet_activities"
                                                                           value="1"/>Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                           name="child_manages_toilet_activities"
                                                                           id="child_manages_toilet_activities"
                                                                           value="0"/>No<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                           name="child_manages_toilet_activities"
                                                                           id="child_manages_toilet_activities"
                                                                           value="2"/>With help<br>
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-4">
                    <label for="how_the_child_moves_inside_and_outside">How does the child move inside and outside?:</label>
                    <input type="text" name="how_the_child_moves_inside_and_outside" id="how_the_child_moves_inside_and_outside" class="form-control" />
                </div>
                <div class="col-md-4">
                    <label for="child_plays_with_other_children">Does the child play with other children?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                           name="child_plays_with_other_children"
                                                                           id="child_plays_with_other_children"
                                                                           value="1"/>Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                           name="child_plays_with_other_children"
                                                                           id="child_plays_with_other_children"
                                                                           value="0"/>No<br>
                </div>
                <div class="col-md-4">
                    <label for="child_helps_with_household_cores">Does the child help with household cores?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                           name="child_helps_with_household_cores"
                                                                           id="child_helps_with_household_cores"
                                                                           value="1"/>Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                           name="child_helps_with_household_cores"
                                                                           id="child_helps_with_household_cores"
                                                                           value="0"/>No<br>
                </div>
            </div><br>



            <div class="row">
                <div class="col-md-4">
                    <label for="child_is_accepted_and_loved_by_the_family">Is the child accepted by the family and loved?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                           name="child_is_accepted_and_loved_by_the_family"
                                                                           id="child_is_accepted_and_loved_by_the_family"
                                                                           value="1"/>Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                           name="child_is_accepted_and_loved_by_the_family"
                                                                           id="child_is_accepted_and_loved_by_the_family"
                                                                           value="0"/>No<br>
                </div>
                <div class="col-md-4">
                    <label for="child_is_accepted_by_the_community">Is the child accepted by the community?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                           name="child_is_accepted_by_the_community"
                                                                           id="child_is_accepted_by_the_community"
                                                                           value="1"/>Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                           name="child_is_accepted_by_the_community"
                                                                           id="child_is_accepted_by_the_community"
                                                                           value="0"/>No<br>
                </div>
                <div class="col-md-4">
                    <label for="child_goes_to_school">Does the child go to school?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_goes_to_school"
                                                                           id="child_goes_to_school" value="1"
                                                                           onclick="turn_on_field('school_name_div');"/>Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_goes_to_school"
                                                                           id="child_goes_to_school" value="0"
                                                                           onclick="turn_off_field('school_name_div');"/>No<br><br>

                    <div style="display:none" id="school_name_div">
                        <label for="name_of_school">If yes, which ones?:</label>
                        <select name="name_of_school" id="name_of_school" class="form-control">
                            <option value="">Select one</option>
                            <option value="Nursery">Nursery</option>
                            <option value="Special Unit">Special Unit</option>
                            <option value="Primary">Primary</option>
                        </select>
                    </div>
                </div>
            </div><br>



            <div class="row">

                    <label for="comment">Comment: </label>
                    <textarea name="comment" id="comment" class="form-control"></textarea>

            </div><br>

            <hr>

            <div class="row">
                <div class="col-md-12" style="text-align: center;">
                    <button type="submit" class="btn btn-primary btn-md">Save Information</button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

<script type="text/javascript">
    function check_value_for_other(place) {
        if (place === 'Other') {
            document.getElementById('name_of_place_div').style.display = 'block';
        } else {
            document.getElementById('name_of_place_div').style.display = 'none';
        }
    }

    function show_child_details(child_id) {
        if (child_id !== '') {
            $.ajax({
                url: "<?php echo base_url('People/Children/children/get_child_name');?>",
                method: "POST",
                data: {child_id: child_id},
                success: function (data) {
                    document.getElementById('child_name').value = data;
                }
            });
        }
    }

    function turn_on_field(field_name) {
        document.getElementById(field_name).style.display = 'block';
    }

    function turn_off_field(field_name) {
        document.getElementById(field_name).style.display = 'none';
    }

    function fetch_subcounty_list(county_id) {
        if (county_id !== '') {
            $.ajax({
                url: "<?php echo base_url('Settings/Welcome/settings/fetch_subcounties_in_county_for_assessment');?>",
                method: "POST",
                data: {county_id: county_id},
                success: function (data) {
                    document.getElementById('subcounty_div').innerHTML = data;
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