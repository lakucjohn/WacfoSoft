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

<div class="col-md-12">
    <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-4">
                    <label for="county">County: </label>
                    <select name="county" id="county" class="form-control">
                        <option value="">Select the county</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="parish">Parish: </label>
                    <select name="parish" id="parish" class="form-control">
                        <option value="">Select the village</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="village">Village: </label>
                    <select name="village" id="village" class="form-control">
                        <option value="">Select the village</option>
                    </select>
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
                    <input type="text" name="cbr-worker" id="cbr_worker" class="form-control" />
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-6">
                    <label for="child_id">Child ID: </label>
                    <select name="child_id" id="child_id" class="form-control">
                        <option value="">Select the child</option>
                    </select><br>
                    <input type="text" name="child_name" id="child_name" class="form-control" value="Details of the selected child will appear here" disabled />

                </div>
                <div class="col-md-6">

                    <label for="date_of_birth">Date of Birth: </label>
                    <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" />
                    <br>

                    <label for="child_sex">Gender: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_sex" id="child_sex" />Male<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_sex" id="child_sex" />Female
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
                    <select name="where_child_lives" id="where_child_lives" class="form-control">
                        <option value="">Select one</option>
                        <option value="">With Parents</option>
                        <option value="">With Other Relatives</option>
                        <option value="">Other</option>
                    </select>
                    <br><br>
                    <div style="display:none" id="name_of_place_div">
                        <label for="other_place">If Other, specify where: </label>
                        <input type="text" name="other_place" id="other_place" class="form-control" style="display: none;"/>

                    </div>
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-6">
                    <label for="availability_of_other_disabled_children_in_family">Are there other disabled children in the family?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="availability_of_other_disabled_children_in_family" id="availability_of_other_disabled_children_in_family" />Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="availability_of_other_disabled_children_in_family" id="availability_of_other_disabled_children_in_family" />No<br><br>
                    <div style="display:none" id="number_of_disabled_children_div">
                        <label for="number_of_disabled_children">If yes, how many?: </label>
                        <input type="number" name="number_of_disabled_children" id="number_of_disabled_children" class="form-control" style="display: none;"/>

                    </div>
                </div>
                <div class="col-md-6">
                    <label for="able_to_provide_basic_needs">Are there other disabled children in the family?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="able_to_provide_basic_needs" id="able_to_provide_basic_needs" />Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="able_to_provide_basic_needs" id="able_to_provide_basic_needs" />No<br><br>
                    <div style="display:none" id="failure_reason_div">
                        <label for="reason_for_failure_to_provide_basic_needs">If No, Explain why?</label>
                        <textarea name="reason_for_failure_to_provide_basic_needs" id="reason_for_failure_to_provide_basic_needs" class="form-control" style="display: none;"></textarea>

                    </div>
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-12">
                    <textarea rows="5" name="disability_description" id="disability_description" class="form-control"></textarea>
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-6">
                    <label for="child_uses_medicine">Does the child use medicine?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_uses_medicine" id="child_uses_medicine" />Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_uses_medicine" id="child_uses_medicine" />No<br><br>
                    <div style="display:none" id="medicine_name_div">
                        <label for="name_of_medicine">If yes, give its name:</label>
                        <input type="text" name="name_of_medicine" id="name_of_medicine" class="form-control" style="display: none;"/>

                    </div>
                </div>
                <div class="col-md-6">
                    <label for="child_has_fits">Does the child have fits?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_has_fits" id="child_has_fits" />Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_has_fits" id="child_has_fits" />No<br><br>
                    <div style="display:none" id="number_of_fits_div">
                        <label for="number_of_times">If yes, how many times?:</label>
                        <input type="number" name="number_of_times" id="number_of_times" class="form-control" style="display: none;"/>
                    </div>
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-6">
                    <label for="childs_limb_moves_well">Does the child's limbs move well?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_has_fits" id="child_has_fits" />Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_has_fits" id="child_has_fits" />Some<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_has_fits" id="child_has_fits" />Some<br><br>
                    <div style="display:none" id="moving_limbs_div">
                        <label for="the_limbs_that_move_well">If some, which ones?: </label>
                        <input type="text" name="the_limbs_that_move_well" id="the_limbs_that_move_well" class="form-control" style="display: none;"/>

                    </div>
                </div>
                <div class="col-md-6">
                    <label for="child_uses_aids">Does the child use aids/appliances?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_uses_aids" id="child_uses_aids" />Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_uses_aids" id="child_uses_aids" />No<br><br>
                    <div style="display:none" id="appliances_name_div">
                        <label for="name_of_appliances">If yes, which ones?:</label>
                        <input type="number" name="name_of_appliances" id="name_of_appliances" class="form-control" style="display: none;"/>
                    </div>
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-4">
                    <label for="child_talks">can the child talk?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_talks" id="child_talks" />Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_talks" id="child_talks" />No<br>
                </div>
                <div class="col-md-4">
                    <label for="child_sees">Can the child see?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_sees" id="child_sees" />Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_sees" id="child_sees" />No<br>
                </div>
                <div class="col-md-4">
                    <label for="mental_capacity_of_the_child">Mental capacity of the child:</label>
                    <select name="mental_capacity_of_the_child" id="mental_capacity_of_the_child" class="form-control">
                        <option value="">Select one</option>
                        <option value="">Normal</option>
                        <option value="">Below Normal</option>
                        <option value="">Severe Impaired</option>
                    </select>
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-4">
                    <label for="child_eats_and_drinks_by_himself">Can the child eat and drink by himself?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_eats_and_drinks_by_himself" id="child_eats_and_drinks_by_himself" />Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_eats_and_drinks_by_himself" id="child_eats_and_drinks_by_himself" />No<br>
                </div>
                <div class="col-md-4">
                    <label for="child_washes_and_dries_by_himself">Can the child wash and dry by himself?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_washes_and_dries_by_himself" id="child_washes_and_dries_by_himself" />Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_washes_and_dries_by_himself" id="child_washes_and_dries_by_himself" />No<br>
                </div>
                <div class="col-md-4">
                    <label for="child_manages_toilet_activities">Can the child manage toilet activities?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_manages_toilet_activities" id="child_manages_toilet_activities" />Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_manages_toilet_activities" id="child_manages_toilet_activities" />No<br>
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-4">
                    <label for="how_the_child_moves_inside_and_outside">How does the child move inside and outside?:</label>
                    <input type="text" name="how_the_child_moves_inside_and_outside" id="how_the_child_moves_inside_and_outside" class="form-control" />
                </div>
                <div class="col-md-4">
                    <label for="child_plays_with_other_children">Does the child play with other children?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_plays_with_other_children" id="child_plays_with_other_children" />Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_plays_with_other_children" id="child_plays_with_other_children" />No<br>
                </div>
                <div class="col-md-4">
                    <label for="child_helps_with_household_cores">Does the child help with household cores?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_helps_with_household_cores" id="child_helps_with_household_cores" />Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_helps_with_household_cores" id="child_helps_with_household_cores" />No<br>
                </div>
            </div><br>



            <div class="row">
                <div class="col-md-4">
                    <label for="child_is_accepted_and_loved_by_the_family">Is the child accepted by the family and loved?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_is_accepted_and_loved_by_the_family" id="child_is_accepted_and_loved_by_the_family" />Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_is_accepted_and_loved_by_the_family" id="child_is_accepted_and_loved_by_the_family" />No<br>
                </div>
                <div class="col-md-4">
                    <label for="child_is_accepted_by_the_community">Is the child accepted by the community?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_is_accepted_by_the_community" id="child_is_accepted_by_the_community" />Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_is_accepted_by_the_community" id="child_is_accepted_by_the_community" />No<br>
                </div>
                <div class="col-md-4">
                    <label for="child_goes_to_school">Does the child go to school?: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_goes_to_school" id="child_goes_to_school" />Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_goes_to_school" id="child_goes_to_school" />No<br><br>

                    <div style="display:none" id="school_name_div">
                        <label for="name_of_school">If yes, which ones?:</label>
                        <select name="name_of_school" id="name_of_school" class="form-control">
                            <option value="">Select one</option>
                            <option value="">Nursery</option>
                            <option value="">Unit</option>
                            <option value="">Primary</option>
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
