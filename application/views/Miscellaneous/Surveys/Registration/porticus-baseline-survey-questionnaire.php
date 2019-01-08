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

<?php echo form_open('miscellaneous%20baseline%20survey/new_assessment'); ?>

<p>

<div class="row"">
    <div class="col-md-12" style="text-align: center;">
        <h5 style="padding-right: 0.75rem;">Instructions:</h5>
        Please <strong>TICK</strong> where appropriate in the box and <strong>FILL</strong> in the spaces provided  where necessary.
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
<div  class="card w-100">
    <div class="document-part-header">
        SECTION A
    </div>
    <hr>
    <div class="document-part-content">
        <div class="col-md-12" style="font-size: large; font-weight: bold;">
            1. Please Indicate:
        </div><br>
        <div class="row">
            <div class="col-md-4">

                    <label for="name_of_respondent">Name of Respondent: </label>
                    <input type="text" name="name_of_respondent" id="name_of_respondent" class="form-control" />

            </div>
            <div class="col-md-2">

                    <label for="age_of_respondent">Age: </label>
                    <input type="number" maxlength="3" name="age_of_respondent" id="age_of_respondent" class="form-control" />

            </div>
            <div class="col-md-4">

                    <label for="village_of_respondent">Village: </label>
                    <input type="text" name="village_of_respondent" id="village_of_respondent" class="form-control" />

            </div>
            <div class="col-md-2">

                <label for="gender_of_respondent">Gender: </label><br>
                &nbsp;&nbsp;&nbsp;<input type="radio" name="gender_of_respondent" id="gender_of_respondent" value="M"/>Male<br>
                &nbsp;&nbsp;&nbsp;<input type="radio" name="gender_of_respondent" id="gender_of_respondent" value="F"/>Female

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">

                <label for="name_of_disabled">Name of the disabled family member: </label>
                <input type="text" name="name_of_disabled" id="name_of_disabled" class="form-control" />

            </div>
            <div class="col-md-2">

                <label for="age_of_disabled">Age: </label>
                <input type="number" maxlength="2" name="age_of_disabled" id="age_of_disabled" class="form-control" />

            </div>
            <div class="col-md-2">

                <label for="gender_of_disabled">Gender: </label><br>
                &nbsp;&nbsp;&nbsp;<input type="radio" name="gender_of_disabled" id="gender_of_disabled" value="M" />Male<br>
                &nbsp;&nbsp;&nbsp;<input type="radio" name="gender_of_disabled" id="gender_of_disabled" value="F" />Female

            </div>
        </div><br>

        <div class="row">
            <div class="col-md-4">
                <label for="category_of_disability">Category of disability: </label>
                <input type="text" name="category_of_disability" id="category_of_disability" class="form-control" />
            </div>
            <div class="col-md-4">
                <label for="name_of_disability">Name of Disability: </label>
                <input type="text" name="name_of_disability" id="name_of_disability" class="form-control"/>
            </div>
        </div><br>

        <div class="row">
            <div class="col-md-4">
                <label for="marital_status_of_respondent">What is your marital status?</label><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                             name="marital_status_of_respondent"
                                                                             id="marital_status_of_respondent"
                                                                             value="Married"/>Married<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                             name="marital_status_of_respondent"
                                                                             id="marital_status_of_respondent"
                                                                             value="Divorced"/>Divorced<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                             name="marital_status_of_respondent"
                                                                             id="marital_status_of_respondent"
                                                                             value="Separated"/>Separated<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                             name="marital_status_of_respondent"
                                                                             id="marital_status_of_respondent"
                                                                             value="Widow"/>Widow<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                             name="marital_status_of_respondent"
                                                                             id="marital_status_of_respondent"
                                                                             value="Single"/>Single
            </div>
            <div class="col-md-4">
                <label for="level_of_education_of_respondent">What is your level of education?</label><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                             name="level_of_education_of_respondent"
                                                                             id="level_of_education_of_respondent"
                                                                             value="Primary"/>Primary<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                             name="level_of_education_of_respondent"
                                                                             id="level_of_education_of_respondent"
                                                                             value="Secondary"/>Secondary<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                             name="level_of_education_of_respondent"
                                                                             id="level_of_education_of_respondent"
                                                                             value="Tertiary"/>Tertiary<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                             name="level_of_education_of_respondent"
                                                                             id="level_of_education_of_respondent"
                                                                             value="None"/>None
            </div>
            <div class="col-md-4">
                <label for="occupation_of_respondent">What is your occupation?</label><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                             name="occupation_of_respondent"
                                                                             id="occupation_of_respondent"
                                                                             value="Peasant"/>Peasant<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                             name="occupation_of_respondent"
                                                                             id="occupation_of_respondent"
                                                                             value="Employed"/>Employed<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                             name="occupation_of_respondent"
                                                                             id="occupation_of_respondent"
                                                                             value="Petty Business"/>Petty Business<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                             name="occupation_of_respondent"
                                                                             id="occupation_of_respondent"
                                                                             value="Casual Labour"/>Casual Labour
            </div>
        </div><br>

        <div class="row">

            <div class="col-md-4">
                <label for="monthly_household_income">What is your household monthly income?</label><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                             name="monthly_household_income"
                                                                             id="monthly_household_income"
                                                                             value="Less than 50,000"/>Less than
                50,000<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                             name="monthly_household_income"
                                                                             id="monthly_household_income"
                                                                             value="50,000 - 100,000"/>50,000 -
                100,000<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                             name="monthly_household_income"
                                                                             id="monthly_household_income"
                                                                             value="100,000- 150,000"/>100,000-
                150,000<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"
                                                                             name="monthly_household_income"
                                                                             id="monthly_household_income"
                                                                             value="Above 150,000"/>Above 150,000
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
                <label for="understanding_of_the_term_disability">1. What do you understand about the term disability?</label>
                <input name="understanding_of_the_term_disability" id="understanding_of_the_term_disability" class="form-control" />
            </div>
        </div><br>

        <div class="row">
            <div class="col-md-12">
                <label for="list_of_known_disabilities">2. Can you list som of the disabilities you know?</label>
                <input type="text" name="list_of_known_disabilities" id="list_of_known_disabilities" class="form-control" />
            </div>
        </div><br>

        <div class="row">
            <div class="col-md-12">
                <label for="causes_of_the_known_disabilities">3. Do you know what causes the disability(ies) you listed above?</label>
                <textarea rows="5" name="causes_of_the_known_disabilities" id="causes_of_the_known_disabilities" class="form-control"></textarea>
            </div>
        </div><br>

        <div class="row">
            <div class="col-md-12">
                <label for="prevention_of_the_known_disabilities">4. Do you know how the disability(ies) you listed above can be prevented?</label>
                <textarea rows="5" name="prevention_of_the_known_disabilities" id="prevention_of_the_known_disabilities" class="form-control"></textarea>
            </div>
        </div><br>

        <div class="row">
            <div class="col-md-12">
                <label for="feeling_of_respondent">5. How do you feel about your disabled child or family member?</label>
                <input type="text" name="feeling_of_respondent" id="feeling_of_respondent" class="form-control" />
            </div>
        </div><br>

        <div class="row">
            <div class="col-md-12">
                <label for="feeling_of_family_members">6. How does the family or community feel about your disabled child?</label>
                <input type="text" name="feeling_of_family_members" id="feeling_of_family_members" class="form-control" />
            </div>
        </div><br>

        <div class="row">
            <div class="col-md-4">
                <label for="family_members_support">7. Do the family members give any form of support to you or your disabled child?</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="family_members_support"
                                                           id="family_members_support" value="1"
                                                           onclick="show_support_div();"/>Yes<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="family_members_support"
                                                           id="family_members_support" value="0"
                                                           onclick="show_no_support_div();"/>No
            </div>
            <div class="col-md-8">
                <div id="support_given" style="display: none;">
                    <label for="nature_of_support_given">What form of support do they give?</label>
                    <input type="text" name="nature_of_support_given" id="nature_of_support_given" class="form-control" />
                </div>
                <div id="support_not_given" style="display: none;">
                    <label for="reason_why_not_supported">Why?</label>
                    <input type="text" name="reason_why_not_supported" id="reason_why_not_supported" class="form-control" />
                </div>
            </div>
        </div><br>

        <div class="row">
            <div class="col-md-4">
                <label for="received_rehabilitation_services">8. Has the disabled child or family member received
                    rehabilitation services?</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="received_rehabilitation_services"
                                                           id="received_rehabilitation_services" value="1"
                                                           onclick="show_rehabilitation_div();"/>Yes<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="received_rehabilitation_services"
                                                           id="received_rehabilitation_services" value="0"
                                                           onclick="show_no_rehabilitation_div();"/>No
            </div>
            <div class="col-md-8">
                <div id="rehabilitation_received" style="display: none;">
                    <label for="gets_help_from">Where do you receive help?</label>
                    <input type="text" name="gets_help_from" id="gets_help_from" class="form-control" />
                </div>
            </div>
        </div><br>

        <div class="row">

            <div class="col-md-8">
                <label for="kind_of_treatment_received">9. What kind of treatment did you receive?</label><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"
                                                                             name="kind_of_treatment_received[]"
                                                                             id="kind_of_treatment_received"
                                                                             value="Medical"/>Medical<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"
                                                                             name="kind_of_treatment_received[]"
                                                                             id="kind_of_treatment_received"
                                                                             value="Surgical"/>Surgical<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"
                                                                             name="kind_of_treatment_received[]"
                                                                             id="kind_of_treatment_received"
                                                                             value="Physical/ Occupational Therapy"/>Physical
                / Occupational therapy<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"
                                                                             name="kind_of_treatment_received[]"
                                                                             id="kind_of_treatment_received"
                                                                             value="Orthopaedics"/>Orthopaedics
            </div>


        </div><br>

        <div class="row">
            <div class="col-md-4">
                <label for="cost_of_the_treatment">10. Was the treatment for free or at a fee?</label>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="cost_of_the_treatment"
                                                           id="cost_of_the_treatment" value="free"
                                                           onclick="show_no_treatment_cost_div();"/>Free<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="cost_of_the_treatment"
                                                           id="cost_of_the_treatment" value="charged"
                                                           onclick="show_treatment_cost_div();"/>At a fee

            </div>
            <div class="col-md-8">
                <div id="cost_of_treatment_in_figures" style="display: none;">
                    <label for="cost_of_treatment_in_figures">What were the fees you paid in figures?</label>
                    <input type="number" name="cost_of_treatment_in_figures" id="cost_of_treatment_in_figures" class="form-control" />
                </div>
            </div>
        </div><br>

        <div class="row">
            <div class="col-md-8">
                <label for="frequency_of_attending_the_treatment">11. How often did you attend the treatment?</label><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="frequency_of_attending_the_treatment" id="frequency_of_attending_the_treatment" value="daily" />Daily<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="frequency_of_attending_the_treatment" id="frequency_of_attending_the_treatment" value="weekly" />Weekly<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="frequency_of_attending_the_treatment" id="frequency_of_attending_the_treatment" value="fortnight" />Every after 2 weeks<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="frequency_of_attending_the_treatment" id="frequency_of_attending_the_treatment" value="monthly" />Monthly

            </div>
        </div><br>

        <div class="row">
            <div class="col-md-8">
                <label for="duration_of_the_treatment">12. How long was the treatment?</label>
                <input type="text" name="duration_of_the_treatment" id="duration_of_the_treatment" class="form-control" />
            </div>
        </div><br>

        <div class="row">
            <div class="col-md-4">
                <label for="attended_regularly">13. Did you attend regularly?</label><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="attended_regularly"
                                                           id="attended_regularly" value="1"
                                                           onclick="show_regular_attendance_div();"/>Yes<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="attended_regularly"
                                                           id="attended_regularly" value="0"
                                                           onclick="show_no_regular_attendance_div();"/>No

            </div>
            <div class="col-md-8">
                <div id="stopped_attending" style="display: none;">
                    <label for="reason_stopped_attending">Why did you stop attending?</label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="reason_stopped_attending[]"
                                                               id="reason_stopped_attending" value="Treatment ended"/>Treatment
                    ended<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="reason_stopped_attending[]"
                                                               id="reason_stopped_attending"
                                                               value="Could not afford treatment fee"/>Could not afford
                    treatment fee<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="reason_stopped_attending[]"
                                                               id="reason_stopped_attending"
                                                               value="Could not afford transport"/>Could not afford
                    transport<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="reason_stopped_attending[]"
                                                               id="reason_stopped_attending"
                                                               value="Felt no progress was being made"/>Felt no progress
                    was being made<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="reason_stopped_attending[]"
                                                               id="reason_stopped_attending"
                                                               value="Could not understand the condition and required treatment"/>Could
                    not understand the condition and required treatment<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="reason_stopped_attending[]"
                                                               id="reason_stopped_attending"
                                                               value="Did not have any one to leave other children with at home"/>Did
                    not have any one to leave other children with at home

                </div>
            </div>
        </div><br>

        <div class="row">
            <div class="col-md-8">
                <label for="perception_of_quality_of_service">14. How did you perceive the quality of
                    service?</label><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="perception_of_quality_of_service"
                                                           id="perception_of_quality_of_service" value="Excellent"/>Excellent<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="perception_of_quality_of_service"
                                                           id="perception_of_quality_of_service" value="Very good"/>Very
                good<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="perception_of_quality_of_service"
                                                           id="perception_of_quality_of_service" value="Good"/>Good<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="perception_of_quality_of_service"
                                                           id="perception_of_quality_of_service" value="Poor"/>Poor

            </div>
        </div><br>

        <div class="row">
            <div class="col-md-4">
                <label for="attended_regularly">15. Have you ever received training on disability?</label><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="received_training_on_disability"
                                                           id="received_training_on_disability" value="1"
                                                           onclick="show_disability_training_div();"/>Yes<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="received_training_on_disability"
                                                           id="received_training_on_disability" value="0"
                                                           onclick="show_no_disability_training_div();"/>No

            </div>
            <div class="col-md-8">
                <div id="training_details" style="display: none;">
                    <label for="name_of_trainer">Who provided the training?</label><br>
                    <input type="text" name="name_of_trainer" id="name_of_trainer" class="form-control" /><br>
                    <label for="training_involved">16. What did the training involve?</label><br>
                    <textarea name="training_involved" id="training_involved" class="form-control"></textarea><br>
                    <label for="use_of_training_knowledge">17. How have you used the knowledge you gained from the training?</label><br>
                    <textarea name="use_of_training_knowledge" id="use_of_training_knowledge" class="form-control"></textarea><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                <div id="no_training_details" style="display: none;">
                    <label for="challenges_faced_caring_for_the_disabled">18. What are the greatest challenges you face in providing care to the disabled child?</label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"
                                                               name="challenges_faced_caring_for_the_disabled[]"
                                                               id="challenges_faced_caring_for_the_disabled"
                                                               value="Information on where to to go for help for the disabled child"/>Information
                    on where to to go for help for the disabled child<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"
                                                               name="challenges_faced_caring_for_the_disabled[]"
                                                               id="challenges_faced_caring_for_the_disabled"
                                                               value="Knowledge on how to help a disabled child at home"/>Knowledge
                    on how to help a disabled child at home<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"
                                                               name="challenges_faced_caring_for_the_disabled[]"
                                                               id="challenges_faced_caring_for_the_disabled"
                                                               value="Long distances to access health care services"/>Long
                    distances to access health care services<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"
                                                               name="challenges_faced_caring_for_the_disabled[]"
                                                               id="challenges_faced_caring_for_the_disabled"
                                                               value="Limited resources to acquire assistive aids like wheelchairs"/>Limited
                    resources to acquire assistive aids like wheelchairs<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"
                                                               name="challenges_faced_caring_for_the_disabled[]"
                                                               id="challenges_faced_caring_for_the_disabled"
                                                               value="Inaccessible health personnel with special training on disability"/>Inaccessible
                    health personnel with special training on disability<br>

                </div>
            </div>
        </div><br>

        <div class="row">
            <div class="col-md-6">
                <label for="strengths_of_the_disabled_child">19. What are the strengths of the disabled child or member in the family?</label>
                <textarea name="strengths_of_the_disabled_child" id="strengths_of_the_disabled_child" class="form-control" ></textarea>
            </div>
            <div class="col-md-6">
                <label for="weaknesses_of_the_disabled_child">19. What are the weaknesses of the disabled member in the family?</label>
                <textarea name="weaknesses_of_the_disabled_child" id="weaknesses_of_the_disabled_child" class="form-control" ></textarea>
            </div>
        </div><br>

        <div class="row">
            <div class="col-md-12">
                <label for="hope_for_the_disabled_child">21. What do you hope for your disabled child or family member?</label>
                <textarea name="hope_for_the_disabled_child" id="hope_for_the_disabled_child" class="form-control" ></textarea>
            </div>
        </div><br>

        <div class="row">
            <div class="col-md-12">
                <label for="help_required_from_the_organisation">22. What do you want the organization to help you with?</label><br>
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="help_required_from_the_organisation[]"
                                               id="help_required_from_the_organisation"
                                               value="Advice on positioning or therapy"/> Advice on positioning or
                therapy<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="help_required_from_the_organisation[]"
                                               id="help_required_from_the_organisation"
                                               value="Knowing who or where to go for more advice or treatment"/> Knowing
                who or where to go for more advice or treatment<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="help_required_from_the_organisation[]"
                                               id="help_required_from_the_organisation"
                                               value="Understanding the reasons why the child has the problems"/>
                Understanding the reasons why the child has the problems<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="help_required_from_the_organisation[]"
                                               id="help_required_from_the_organisation"
                                               value="Knowing what else they can do at home to help the child"/> Knowing
                what else they can do at home to help the child<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="help_required_from_the_organisation[]"
                                               id="help_required_from_the_organisation"
                                               value="Resources for specialised treatment"/> Resources for specialised
                treatment<br>
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="help_required_from_the_organisation[]"
                                               id="help_required_from_the_organisation"
                                               value="Provision of appropriate assistive aids like wheelchairs and others"/>
                Provision of appropriate assistive aids like wheelchairs and others

            </div>
        </div><br>

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
