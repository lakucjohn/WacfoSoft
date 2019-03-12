<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/2/19
 * Time: 12:07 AM
 */
?>

<h3 style="text-align: center;">PORTICUS BASELINE ASSESSMENT SURVEY QUESTIONNAIRE ON DISABILITY IN PABO SUB-COUNTY</h3>

<hr>

<?php


foreach ($default_value_array->result() as $default) {
    echo form_open('miscellaneous%20baseline%20survey-details/edit/' . $default->ID);

    ?>

    <p>

    <div class="row"">
    <div class="col-md-12" style="text-align: center;">
        <h5 style="padding-right: 0.75rem;">Instructions:</h5>
        Please <strong>TICK</strong> where appropriate in the box and <strong>FILL</strong> in the spaces provided
        where necessary.
    </div>
    </div>
    </p>
    <hr>
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-10">
            <div class="error-msg position-left"><?php echo validation_errors(); ?></div>
        </div>
    </div>
    <hr>
    <div class="card w-100">
        <div class="document-part-header">
            SECTION A
        </div>
        <hr>
        <div class="document-part-content">
            <div class="col-md-12" style="font-size: large; font-weight: bold;">
                1. Please Indicate:
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">

                    <label for="name_of_respondent">Name of Respondent: </label>
                    <input type="text" value="<?php echo $default->NAME_OF_RESPONDENT; ?>" name="name_of_respondent"
                           id="name_of_respondent" class="form-control"/>

                </div>
                <div class="col-md-2">

                    <label for="age_of_respondent">Age: </label>
                    <input type="number" value="<?php echo $default->AGE; ?>" maxlength="3" name="age_of_respondent"
                           id="age_of_respondent"
                           class="form-control"/>

                </div>
                <div class="col-md-4">

                    <label for="village_of_respondent">Village: </label>
                    <input type="text" value="<?php echo $default->VILLAGE; ?>" name="village_of_respondent"
                           id="village_of_respondent"
                           class="form-control"/>

                </div>
                <div class="col-md-2">

                    <label for="gender_of_respondent">Gender: </label><br>
                    <?php
                    if ($default->GENDER == 'M')
                    ?>
                    &nbsp;&nbsp;&nbsp;<input type="radio" name="gender_of_respondent" id="gender_of_respondent"
                                             value="M" <?php if ($default->GENDER == 'M') { ?> checked <?php } ?>/>Male<br>
                    &nbsp;&nbsp;&nbsp;<input type="radio" name="gender_of_respondent" id="gender_of_respondent"
                                             value="F" <?php if ($default->GENDER == 'F') { ?> checked <?php } ?>/>Female

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">

                    <label for="name_of_disabled">Name of the disabled family member: </label>
                    <input value="<?php echo $default->NAME_OF_VULNERABLE; ?>" type="text" name="name_of_disabled"
                           id="name_of_disabled" class="form-control"/>

                </div>
                <div class="col-md-2">

                    <label for="age_of_disabled">Age: </label>
                    <input value="<?php echo $default->AGE_OF_VULNERABLE; ?>" type="number" maxlength="2"
                           name="age_of_disabled" id="age_of_disabled"
                           class="form-control"/>

                </div>
                <div class="col-md-2">

                    <label for="gender_of_disabled">Gender: </label><br>
                    &nbsp;&nbsp;&nbsp;<input type="radio" name="gender_of_disabled" id="gender_of_disabled"
                                             value="M" <?php if ($default->GENDER_OF_VULNERABLE == 'M') { ?> checked <?php } ?>/>Male<br>
                    &nbsp;&nbsp;&nbsp;<input type="radio" name="gender_of_disabled" id="gender_of_disabled"
                                             value="F" <?php if ($default->GENDER_OF_VULNERABLE == 'F') { ?> checked <?php } ?>/>Female

                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-4">
                    <label for="category_of_disability">Category of disability: </label>
                    <input value="<?php echo $default->CATEGORY_OF_DISABILITY; ?>" type="text"
                           name="category_of_disability" id="category_of_disability"
                           class="form-control"/>
                </div>
                <div class="col-md-4">
                    <label for="name_of_disability">Name of Disability: </label>
                    <input value="<?php echo $default->NAME_OF_DISABILITY; ?>" type="text" name="name_of_disability"
                           id="name_of_disability" class="form-control"/>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-4">
                    <label for="marital_status_of_respondent">What is your marital status?</label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                                 name="marital_status_of_respondent"
                                                                                 id="marital_status_of_respondent"
                                                                                 value="Married" <?php if ($default->MARITAL_STATUS == 'Married') { ?> checked <?php } ?>/>Married<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                                 name="marital_status_of_respondent"
                                                                                 id="marital_status_of_respondent"
                                                                                 value="Divorced" <?php if ($default->MARITAL_STATUS == 'Divorced') { ?> checked <?php } ?>/>Divorced<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                                 name="marital_status_of_respondent"
                                                                                 id="marital_status_of_respondent"
                                                                                 value="Separated" <?php if ($default->MARITAL_STATUS == 'Separated') { ?> checked <?php } ?>/>Separated<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                                 name="marital_status_of_respondent"
                                                                                 id="marital_status_of_respondent"
                                                                                 value="Widow" <?php if ($default->MARITAL_STATUS == 'Widow') { ?> checked <?php } ?>/>Widow<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                                 name="marital_status_of_respondent"
                                                                                 id="marital_status_of_respondent"
                                                                                 value="Single" <?php if ($default->MARITAL_STATUS == 'Single') { ?> checked <?php } ?>/>Single
                </div>
                <div class="col-md-4">
                    <label for="level_of_education_of_respondent">What is your level of education?</label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                                 name="level_of_education_of_respondent"
                                                                                 id="level_of_education_of_respondent"
                                                                                 value="Primary" <?php if ($default->LEVEL_OF_EDUCATION == 'Primary') { ?> checked <?php } ?>/>Primary<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                                 name="level_of_education_of_respondent"
                                                                                 id="level_of_education_of_respondent"
                                                                                 value="Secondary" <?php if ($default->LEVEL_OF_EDUCATION == 'Secondary') { ?> checked <?php } ?>/>Secondary<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                                 name="level_of_education_of_respondent"
                                                                                 id="level_of_education_of_respondent"
                                                                                 value="Tertiary" <?php if ($default->LEVEL_OF_EDUCATION == 'Tertiary') { ?> checked <?php } ?>/>Tertiary<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                                 name="level_of_education_of_respondent"
                                                                                 id="level_of_education_of_respondent"
                                                                                 value="None" <?php if ($default->LEVEL_OF_EDUCATION == 'None') { ?> checked <?php } ?>/>None
                </div>
                <div class="col-md-4">
                    <label for="occupation_of_respondent">What is your occupation?</label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                                 name="occupation_of_respondent"
                                                                                 id="occupation_of_respondent"
                                                                                 value="Peasant" <?php if ($default->OCCUPATION == 'Peasant') { ?> checked <?php } ?>/>Peasant<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                                 name="occupation_of_respondent"
                                                                                 id="occupation_of_respondent"
                                                                                 value="Employed" <?php if ($default->OCCUPATION == 'Employed') { ?> checked <?php } ?>/>Employed<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                                 name="occupation_of_respondent"
                                                                                 id="occupation_of_respondent"
                                                                                 value="Petty Business" <?php if ($default->OCCUPATION == 'Petty Business') { ?> checked <?php } ?>/>Petty
                    Business<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                                 name="occupation_of_respondent"
                                                                                 id="occupation_of_respondent"
                                                                                 value="Casual Labour" <?php if ($default->OCCUPATION == 'Casual Labour') { ?> checked <?php } ?>/>Casual
                    Labour
                </div>
            </div>
            <br>

            <div class="row">

                <div class="col-md-4">
                    <label for="monthly_household_income">What is your household monthly income?</label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                                 name="monthly_household_income"
                                                                                 id="monthly_household_income"
                                                                                 value="Less than 50,000" <?php if ($default->HOUSEHOLD_MONTHLY_INCOME == 'Less than 50,000') { ?> checked <?php } ?>/>Less
                    than
                    50,000<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                                 name="monthly_household_income"
                                                                                 id="monthly_household_income"
                                                                                 value="50,000 - 100,000" <?php if ($default->HOUSEHOLD_MONTHLY_INCOME == '50,000 - 100,000') { ?> checked <?php } ?>/>50,000
                    -
                    100,000<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                                 name="monthly_household_income"
                                                                                 id="monthly_household_income"
                                                                                 value="100,000- 150,000" <?php if ($default->HOUSEHOLD_MONTHLY_INCOME == '100,000- 150,000') { ?> checked <?php } ?>/>100,000-
                    150,000<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                                 name="monthly_household_income"
                                                                                 id="monthly_household_income"
                                                                                 value="Above 150,000" <?php if ($default->HOUSEHOLD_MONTHLY_INCOME == 'Above 150,000') { ?> checked <?php } ?>/>Above
                    150,000
                </div>
            </div>

        </div>

        <hr>
        <div class="document-part-header">
            SECTION B
        </div>
        <hr>
        <div class="document-part-content">
            <div class="row">
                <div class="col-md-12">
                    <label for="understanding_of_the_term_disability">1. What do you understand about the term
                        disability?</label>
                    <input value="<?php echo $default->DEFINITION_OF_DISABILITY; ?>"
                           name="understanding_of_the_term_disability" id="understanding_of_the_term_disability"
                           class="form-control"/>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-12">
                    <label for="list_of_known_disabilities">2. Can you list some of the disabilities you
                        know?</label>
                    <input value="<?php echo $default->LIST_OF_DISABILITIES_KNOWN; ?>" type="text"
                           name="list_of_known_disabilities" id="list_of_known_disabilities"
                           class="form-control"/>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-12">
                    <label for="causes_of_the_known_disabilities">3. Do you know what causes the disability(ies) you
                        listed above?</label>
                    <textarea rows="5" name="causes_of_the_known_disabilities" id="causes_of_the_known_disabilities"
                              class="form-control"><?php echo $default->CAUSES_OF_DISABILITIES_KNOWN; ?></textarea>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-12">
                    <label for="prevention_of_the_known_disabilities">4. Do you know how the disability(ies) you
                        listed above can be prevented?</label>
                    <textarea rows="5" name="prevention_of_the_known_disabilities"
                              id="prevention_of_the_known_disabilities"
                              class="form-control"><?php echo $default->WAYS_OF_PREVENTION; ?></textarea>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-12">
                    <label for="feeling_of_respondent">5. How do you feel about your disabled child or family
                        member?</label>
                    <input type="text" value="<?php echo $default->FEELING_OF_HAVING_A_VULNERABLE; ?>"
                           name="feeling_of_respondent" id="feeling_of_respondent"
                           class="form-control"/>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-12">
                    <label for="feeling_of_family_members">6. How does the family or community feel about your
                        disabled child?</label>
                    <input value="<?php echo $default->FEELING_OF_THE_COMMUNITY; ?>" type="text"
                           name="feeling_of_family_members" id="feeling_of_family_members"
                           class="form-control"/>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-4">
                    <label for="family_members_support">7. Do the family members give any form of support to you or
                        your disabled child?</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="family_members_support"
                                                               id="family_members_support"
                                                               value="1" <?php if ($default->VULNERABLE_SUPPORTED == 1) { ?> checked <?php } ?>
                                                               onclick="show_support_div();"/>Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="family_members_support"
                                                               id="family_members_support"
                                                               value="0" <?php if ($default->VULNERABLE_SUPPORTED == 0) { ?> checked <?php } ?>
                                                               onclick="show_no_support_div();"/>No
                </div>
                <div class="col-md-8">
                    <div id="support_given" style="display: none;">
                        <label for="nature_of_support_given">What form of support do they give?</label>
                        <input value="<?php echo $default->SUPPORT_GIVEN; ?>" type="text" name="nature_of_support_given"
                               id="nature_of_support_given"
                               class="form-control"/>
                    </div>
                    <div id="support_not_given" style="display: none;">
                        <label for="reason_why_not_supported">Why?</label>
                        <input value="<?php echo $default->WHY_NOT_SUPPORTED; ?>" type="text"
                               name="reason_why_not_supported" id="reason_why_not_supported"
                               class="form-control"/>
                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-4">
                    <label for="received_rehabilitation_services">8. Has the disabled child or family member
                        received
                        rehabilitation services?</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="received_rehabilitation_services"
                                                               id="received_rehabilitation_services"
                                                               value="1" <?php if ($default->REHABILITATION_RECEIVED == 1) { ?> checked <?php } ?>
                                                               onclick="show_rehabilitation_div();"/>Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="received_rehabilitation_services"
                                                               id="received_rehabilitation_services"
                                                               value="0" <?php if ($default->REHABILITATION_RECEIVED == 0) { ?> checked <?php } ?>
                                                               onclick="show_no_rehabilitation_div();"/>No
                </div>
                <div class="col-md-8">
                    <div id="rehabilitation_received" style="display: none;">
                        <label for="gets_help_from">Where do you receive help?</label>
                        <input value="<?php echo $default->PLACE_OF_REHABILITATION; ?>" type="text"
                               name="gets_help_from" id="gets_help_from" class="form-control"/>
                    </div>
                </div>
            </div>
            <br>

            <div class="row">

                <?php
                $kinds_of_treatment = explode(', ', $default->KIND_OF_TREATMENT_RECEIVED);

                ?>

                <div class="col-md-8">
                    <label for="kind_of_treatment_received">9. What kind of treatment did you receive?</label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"
                                                                                 name="kind_of_treatment_received[]"
                                                                                 id="kind_of_treatment_received"
                                                                                 value="Medical"
                                                                                 <?php if (in_array('Medical', $kinds_of_treatment)){ ?>checked <?php } ?>/>Medical<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"
                                                                                 name="kind_of_treatment_received[]"
                                                                                 id="kind_of_treatment_received"
                                                                                 value="Surgical"
                                                                                 <?php if (in_array('Surgical', $kinds_of_treatment)){ ?>checked <?php } ?>/>Surgical<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"
                                                                                 name="kind_of_treatment_received[]"
                                                                                 id="kind_of_treatment_received"
                                                                                 value="Physical/ Occupational Therapy"
                                                                                 <?php if (in_array('Physical/ Occupational Therapy', $kinds_of_treatment)){ ?>checked <?php } ?>/>Physical
                    / Occupational therapy<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"
                                                                                 name="kind_of_treatment_received[]"
                                                                                 id="kind_of_treatment_received"
                                                                                 value="Orthopaedics"
                                                                                 <?php if (in_array('Orthopaedics', $kinds_of_treatment)){ ?>checked <?php } ?>/>Orthopaedics
                </div>


            </div>
            <br>

            <div class="row">
                <div class="col-md-4">
                    <label for="cost_of_the_treatment">10. Was the treatment for free or at a fee?</label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="cost_of_the_treatment"
                                                               id="cost_of_the_treatment" value="free"
                                                               onclick="show_no_treatment_cost_div();" <?php if ($default->COST_OF_TREATMENT == 0) { ?> checked <?php } ?>/>Free<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="cost_of_the_treatment"
                                                               id="cost_of_the_treatment" value="charged"
                                                               onclick="show_treatment_cost_div();" <?php if ($default->COST_OF_TREATMENT != 0) { ?> checked <?php } ?>/>At
                    a fee

                </div>
                <div class="col-md-8">
                    <div id="cost_of_treatment_in_figures" style="display: none;">
                        <label for="cost_of_treatment_in_figures">What were the fees you paid in figures?</label>
                        <input type="number" value="<?php echo $default->COST_OF_TREATMENT; ?>"
                               name="cost_of_treatment_in_figures" id="cost_of_treatment_in_figures"
                               class="form-control"/>
                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-8">
                    <label for="frequency_of_attending_the_treatment">11. How often did you attend the
                        treatment?</label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                               name="frequency_of_attending_the_treatment"
                                                               id="frequency_of_attending_the_treatment"
                                                               value="daily" <?php if ($default->FREQUENCY_OF_ATTENDANCE == 'daily') { ?> checked <?php } ?>/>Daily<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                               name="frequency_of_attending_the_treatment"
                                                               id="frequency_of_attending_the_treatment"
                                                               value="weekly" <?php if ($default->FREQUENCY_OF_ATTENDANCE == 'weekly') { ?> checked <?php } ?>/>Weekly<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                               name="frequency_of_attending_the_treatment"
                                                               id="frequency_of_attending_the_treatment"
                                                               value="fortnight" <?php if ($default->FREQUENCY_OF_ATTENDANCE == 'fortnight') { ?> checked <?php } ?>/>Every
                    after 2 weeks<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                               name="frequency_of_attending_the_treatment"
                                                               id="frequency_of_attending_the_treatment"
                                                               value="monthly" <?php if ($default->FREQUENCY_OF_ATTENDANCE == 'monthly') { ?> checked <?php } ?>/>Monthly

                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-8">
                    <label for="duration_of_the_treatment">12. How long was the treatment?</label>
                    <input type="text" value="<?php echo $default->DURATION_OF_THE_TREATMENT; ?>"
                           name="duration_of_the_treatment" id="duration_of_the_treatment"
                           class="form-control"/>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-4">
                    <label for="attended_regularly">13. Did you attend regularly?</label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="attended_regularly"
                                                               id="attended_regularly" value="1"
                                                               onclick="show_regular_attendance_div();" <?php if ($default->FREQUENCY_OF_ATTENDANCE == 1) { ?> checked <?php } ?>/>Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="attended_regularly"
                                                               id="attended_regularly" value="0"
                                                               onclick="show_no_regular_attendance_div();" <?php if ($default->FREQUENCY_OF_ATTENDANCE == 0) { ?> checked <?php } ?>/>No

                </div>
                <div class="col-md-8">
                    <?php
                    $reasons_for_not_attending_regularly = explode(', ', $default->REASON_FOR_NOT_ATTENDING_REGULARLY)
                    ?>
                    <div id="stopped_attending" style="display: none;">
                        <label for="reason_stopped_attending">Why did you stop attending?</label><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="reason_stopped_attending[]"
                                                                   id="reason_stopped_attending"
                                                                   value="Treatment ended"
                                                                   <?php if (in_array('Treatment ended', $reasons_for_not_attending_regularly)){ ?>checked <?php } ?>/>Treatment
                        ended<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="reason_stopped_attending[]"
                                                                   id="reason_stopped_attending"
                                                                   value="Could not afford treatment fee"
                                                                   <?php if (in_array('Could not afford treatment fee', $reasons_for_not_attending_regularly)){ ?>checked <?php } ?>/>Could
                        not
                        afford
                        treatment fee<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="reason_stopped_attending[]"
                                                                   id="reason_stopped_attending"
                                                                   value="Could not afford transport"
                                                                   <?php if (in_array('Could not afford transport', $reasons_for_not_attending_regularly)){ ?>checked <?php } ?>/>Could
                        not
                        afford
                        transport<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="reason_stopped_attending[]"
                                                                   id="reason_stopped_attending"
                                                                   value="Felt no progress was being made"
                                                                   <?php if (in_array('Felt no progress was being made', $reasons_for_not_attending_regularly)){ ?>checked <?php } ?>/>Felt
                        no
                        progress
                        was being made<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="reason_stopped_attending[]"
                                                                   id="reason_stopped_attending"
                                                                   value="Could not understand the condition and required treatment"
                                                                   <?php if (in_array('Could not understand the condition and required treatment', $reasons_for_not_attending_regularly)){ ?>checked <?php } ?>/>Could
                        not understand the condition and required treatment<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="reason_stopped_attending[]"
                                                                   id="reason_stopped_attending"
                                                                   value="Did not have any one to leave other children with at home"
                                                                   <?php if (in_array('Did not have any one to leave other children with at home', $reasons_for_not_attending_regularly)){ ?>checked <?php } ?>/>Did
                        not have any one to leave other children with at home

                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-8">
                    <label for="perception_of_quality_of_service">14. How did you perceive the quality of
                        service?</label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="perception_of_quality_of_service"
                                                               id="perception_of_quality_of_service"
                                                               value="Excellent" <?php if ($default->QUALITY_OF_SERVICE == 'Excellent') { ?> checked <?php } ?>/>Excellent<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="perception_of_quality_of_service"
                                                               id="perception_of_quality_of_service"
                                                               value="Very good" <?php if ($default->QUALITY_OF_SERVICE == 'Very good') { ?> checked <?php } ?>/>Very
                    good<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="perception_of_quality_of_service"
                                                               id="perception_of_quality_of_service"
                                                               value="Good" <?php if ($default->QUALITY_OF_SERVICE == 'Good') { ?> checked <?php } ?>/>Good<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="perception_of_quality_of_service"
                                                               id="perception_of_quality_of_service"
                                                               value="Poor" <?php if ($default->QUALITY_OF_SERVICE == 'Poor') { ?> checked <?php } ?>/>Poor

                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-4">
                    <label for="attended_regularly">15. Have you ever received training on disability?</label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="received_training_on_disability"
                                                               id="received_training_on_disability" value="1"
                                                               onclick="show_disability_training_div();" <?php if ($default->TRAINING_RECEIVED == 1) { ?> checked <?php } ?>/>Yes<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="received_training_on_disability"
                                                               id="received_training_on_disability" value="0"
                                                               onclick="show_no_disability_training_div();" <?php if ($default->TRAINING_RECEIVED == 0) { ?> checked <?php } ?>/>No

                </div>
                <div class="col-md-8">
                    <div id="training_details" style="display: none;">
                        <label for="name_of_trainer">Who provided the training?</label><br>
                        <input value="<?php echo $default->NAME_OF_TRAINER; ?>" type="text" name="name_of_trainer"
                               id="name_of_trainer" class="form-control"/><br>
                        <label for="training_involved">16. What did the training involve?</label><br>
                        <textarea name="training_involved" id="training_involved"
                                  class="form-control"><?php echo $default->TRAINING_WAS_ABOUT; ?></textarea><br>
                        <label for="use_of_training_knowledge">17. How have you used the knowledge you gained from
                            the training?</label><br>
                        <textarea name="use_of_training_knowledge" id="use_of_training_knowledge"
                                  class="form-control"><?php echo $default->HELP_OF_THE_TRAINING; ?></textarea><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div id="no_training_details" style="display: none;">
                        <?php
                        $challenges_faced_in_caring_for_the_disabled_person = explode(', ', $default->CHALLENGES_FACED_IN_CARING);
                        ?>
                        <label for="challenges_faced_caring_for_the_disabled">18. What are the greatest challenges
                            you face in providing care to the disabled child?</label><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"
                                                                   name="challenges_faced_caring_for_the_disabled[]"
                                                                   id="challenges_faced_caring_for_the_disabled"
                                                                   value="Information on where to to go for help for the disabled child"
                                                                   <?php if (in_array('Information on where to to go for help for the disabled child', $challenges_faced_in_caring_for_the_disabled_person)){ ?>checked <?php } ?> />Information
                        on where to to go for help for the disabled child<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"
                                                                   name="challenges_faced_caring_for_the_disabled[]"
                                                                   id="challenges_faced_caring_for_the_disabled"
                                                                   value="Knowledge on how to help a disabled child at home"
                                                                   <?php if (in_array('Knowledge on how to help a disabled child at home', $challenges_faced_in_caring_for_the_disabled_person)){ ?>checked <?php } ?>/>Knowledge
                        on how to help a disabled child at home<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"
                                                                   name="challenges_faced_caring_for_the_disabled[]"
                                                                   id="challenges_faced_caring_for_the_disabled"
                                                                   value="Long distances to access health care services"
                                                                   <?php if (in_array('Long distances to access health care services', $challenges_faced_in_caring_for_the_disabled_person)){ ?>checked <?php } ?>/>Long
                        distances to access health care services<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"
                                                                   name="challenges_faced_caring_for_the_disabled[]"
                                                                   id="challenges_faced_caring_for_the_disabled"
                                                                   value="Limited resources to acquire assistive aids like wheelchairs"
                                                                   <?php if (in_array('Limited resources to acquire assistive aids like wheelchairs', $challenges_faced_in_caring_for_the_disabled_person)){ ?>checked <?php } ?>/>Limited
                        resources to acquire assistive aids like wheelchairs<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"
                                                                   name="challenges_faced_caring_for_the_disabled[]"
                                                                   id="challenges_faced_caring_for_the_disabled"
                                                                   value="Inaccessible health personnel with special training on disability"
                                                                   <?php if (in_array('Inaccessible health personnel with special training on disability', $challenges_faced_in_caring_for_the_disabled_person)){ ?>checked <?php } ?>/>Inaccessible
                        health personnel with special training on disability<br>

                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-6">
                    <label for="strengths_of_the_disabled_child">19. What are the strengths of the disabled child or
                        member in the family?</label>
                    <textarea name="strengths_of_the_disabled_child" id="strengths_of_the_disabled_child"
                              class="form-control"><?php echo $default->STRENGTHS_OF_VULNERABLE; ?></textarea>
                </div>
                <div class="col-md-6">
                    <label for="weaknesses_of_the_disabled_child">19. What are the weaknesses of the disabled member
                        in the family?</label>
                    <textarea name="weaknesses_of_the_disabled_child" id="weaknesses_of_the_disabled_child"
                              class="form-control"><?php echo $default->WEAKNESSES_OF_VULNERABLE; ?></textarea>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-12">
                    <label for="hope_for_the_disabled_child">21. What do you hope for your disabled child or family
                        member?</label>
                    <textarea name="hope_for_the_disabled_child" id="hope_for_the_disabled_child"
                              class="form-control"><?php echo $default->HOPE_FOR_THE_VULNERABLE; ?></textarea>
                </div>
            </div>
            <br>

            <div class="row">
                <?php
                $help_required = explode(',', $default->ORGANIZATION_HELP_NEEDED);
                ?>
                <div class="col-md-12">
                    <label for="help_required_from_the_organisation">22. What do you want the organization to help
                        you with?</label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="help_required_from_the_organisation[]"
                                                   id="help_required_from_the_organisation"
                                                   value="Advice on positioning or therapy" <?php if (in_array('Advice on positioning or therapy', $help_required)) { ?> checked <?php } ?>/>
                    Advice on positioning
                    or
                    therapy<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="help_required_from_the_organisation[]"
                                                   id="help_required_from_the_organisation"
                                                   value="Knowing who or where to go for more advice or treatment" <?php if (in_array('Knowing who or where to go for more advice or treatment', $help_required)) { ?> checked <?php } ?>/>
                    Knowing
                    who or where to go for more advice or treatment<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="help_required_from_the_organisation[]"
                                                   id="help_required_from_the_organisation"
                                                   value="Understanding the reasons why the child has the problems" <?php if (in_array('Understanding the reasons why the child has the problems', $help_required)) { ?> checked <?php } ?>/>
                    Understanding the reasons why the child has the problems<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="help_required_from_the_organisation[]"
                                                   id="help_required_from_the_organisation"
                                                   value="Knowing what else they can do at home to help the child" <?php if (in_array('Knowing what else they can do at home to help the child', $help_required)) { ?> checked <?php } ?>/>
                    Knowing
                    what else they can do at home to help the child<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="help_required_from_the_organisation[]"
                                                   id="help_required_from_the_organisation"
                                                   value="Resources for specialised treatment" <?php if (in_array('Resources for specialised treatment', $help_required)) { ?> checked <?php } ?>/>
                    Resources for
                    specialised
                    treatment<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="help_required_from_the_organisation[]"
                                                   id="help_required_from_the_organisation"
                                                   value="Provision of appropriate assistive aids like wheelchairs and others" <?php if (in_array('Provision of appropriate assistive aids like wheelchairs and others', $help_required)) { ?> checked <?php } ?>/>
                    Provision of appropriate assistive aids like wheelchairs and others

                </div>
            </div>
            <br>

            <hr>
            <div class="row">
                <div class="col-md-12" style="text-align: center;">
                    <button class="btn btn-primary btn-md">Save Information</button>
                </div>
            </div>

            <hr>
        </div>
    </div>
    </form>
    <?php
}
?>

<!--
Loading the javascript of this form
-->

<script type="text/javascript">

    function show_support_div() {
        document.getElementById('support_given').style.display = 'block';
        document.getElementById('support_not_given').style.display = 'none';
    }

    function show_no_support_div() {
        document.getElementById('support_given').style.display = 'none';
        document.getElementById('support_not_given').style.display = 'block';
    }

    function show_rehabilitation_div() {
        document.getElementById('rehabilitation_received').style.display = 'block';
    }

    function show_no_rehabilitation_div() {
        document.getElementById('rehabilitation_received').style.display = 'none';
    }

    function show_no_treatment_cost_div() {
        document.getElementById('cost_of_treatment_in_figures').style.display = 'none';
    }

    function show_treatment_cost_div() {
        document.getElementById('cost_of_treatment_in_figures').style.display = 'block';
    }

    function show_no_regular_attendance_div() {
        document.getElementById('stopped_attending').style.display = 'block';
    }

    function show_regular_attendance_div() {
        document.getElementById('stopped_attending').style.display = 'none';
    }

    function show_disability_training_div() {
        document.getElementById('no_training_details').style.display = 'none';
        document.getElementById('training_details').style.display = 'block';
    }

    function show_no_disability_training_div() {
        document.getElementById('no_training_details').style.display = 'block';
        document.getElementById('training_details').style.display = 'none';
    }
</script>
