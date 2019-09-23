<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/20/19
 * Time: 12:43 PM
 */
?>

<h3>Filter Specific Data From WacfoSoft</h3>
<hr>
<div id="query-criteria">
    <div class="row">
        <div class="col-md-12">
            <h5>Category of information to query</h5>
        </div>
        <div class="col-md-12" style="padding-left: 10%;">
            <p>
                <input type="radio" value="1" name="query_category" id="query_category" class="query_category"
                       onclick="show_tables_related('livelihood_table_selections');" required/>Livelihood Groups and
                Membership<br>
                <input type="radio" value="2" name="query_category" id="query_category" class="query_category"
                       onclick="show_tables_related('children_table_selections');" required/>Children and Health<br>
                <input type="radio" value="3" name="query_category" id="query_category" class="query_category"
                       onclick="show_tables_related('staff_table_selections');" required/>Staff<br>
                <input type="radio" value="4" name="query_category" id="query_category" class="query_category"
                       onclick="show_tables_related('training_table_selections');" required/>Trainings<br>
                <input type="radio" value="5" name="query_category" id="query_category" class="query_category"
                       onclick="show_tables_related('monitoring_table_selections');" required/>Monitoring<br>
                <input type="radio" value="6" name="query_category" id="query_category" class="query_category"
                       onclick="show_tables_related('production_table_selections');" required/>Production<br>
                <input type="radio" value="7" name="query_category" id="query_category" class="query_category"
                       onclick="show_tables_related('miscellaneous_table_selections');" required/>Miscellaneous<br>
                <!--                <input type="radio" name="query_category" id="query_category" onclick="show_tables_related('complex_table_selections');"/>Complex<br>-->
            </p>
        </div>

    </div>
    <div class="row" id="table_selections" style="display: none;">
        <hr>
        <div class="col-md-12">
            <h5>Select Required tables</h5>
        </div>

        <!-- Selectable tables -->
        <div class="col-md-12"><p>&nbsp;</p>
            <!-- Selectable tables for livelihood -->
            <table id="livelihood_table_selections" class="table-bordered" cellpadding="10" cellspacing="50"
                   style="width: 100%; display: none">
                <tr>
                    <td colspan="4">SELECTABLE TABLES REGARDING LIVELIHOOD</td>
                </tr>
                <tr>
                    <td style="width: 25%;"><input type="checkbox" name="query_tables" id="livelihood_groups"
                                                   value="GROUPS" onchange="show_table_fields('livelihood_groups');"/>
                        Livelihood Groups
                    </td>
                    <td style="width: 25%;"><input type="checkbox" name="query_tables" id="livelihood_categories"
                                                   value="LIVELIHOODGROUPCATEGORIES" disabled
                                                   onchange="show_table_fields('livelihood_categories');"/> Livelihood
                        Categories
                    </td>
                    <td style="width: 25%;"><input type="checkbox" name="query_tables" id="disabilities"
                                                   value="DISABILITIES" disabled/> Vulnerabilities
                    </td>
                    <td style="width: 25%;"><input type="checkbox" name="query_tables" id="membership"
                                                   value="MEMBERSHIP" onchange="show_table_fields('membership');"/>
                        Membership
                    </td>
                </tr>
            </table>
            <table id="children_table_selections" class="table-bordered" cellpadding="10" cellspacing="50"
                   style="width: 100%; display: none">
                <tr>
                    <td colspan="4">SELECTABLE TABLES REGARDING CHILDREN</td>
                </tr>
                <tr>
                    <td style="width: 25%;"><input type="checkbox" name="query_tables" id="children" value="CHILDREN"
                                                   onchange="show_table_fields('children');"/> Children
                    </td>
                    <td style="width: 25%;"><input type="checkbox" name="query_tables" id="assessment_1_records"
                                                   value="ASSESSMENT_1_RECORDS"
                                                   onchange="show_table_fields('assessment_1_records');"/> Assessment 1
                        Records
                    </td>
                    <td style="width: 25%;"><input type="checkbox" name="query_tables" id="assessment_2_records"
                                                   value="ASSESSMENT_2_RECORDS_NEW"
                                                   onchange="show_table_fields('assessment_2_records');"/> Assessment 2
                        Records
                    </td>
                    <td style="width: 25%;"><input type="checkbox" name="query_tables" id="visit_records"
                                                   value="VISIT_RECORDS"
                                                   onchange="show_table_fields('visit_records');"/> Visitations
                    </td>
                </tr>
            </table>
            <table id="staff_table_selections" class="table-bordered" cellpadding="10" cellspacing="50"
                   style="width: 100%; display: none">
                <tr>
                    <td colspan="4">SELECTABLE TABLES REGARDING STAFF</td>
                </tr>
                <tr>
                    <td style="width: 25%;"><input type="checkbox" name="query_tables" id="organization_departments"
                                                   value="ORGANIZATION_DEPARTMENTS_NEW"
                                                   onchange="show_table_fields('organization_departments');"/>
                        Departments
                    </td>
                    <td style="width: 25%;"><input type="checkbox" name="query_tables" id="organization_staff"
                                                   value="ORGANIZATION_STAFF_NEW"
                                                   onchange="show_table_fields('organization_staff');"/> Staff Members
                    </td>
                </tr>
            </table>
            <table id="training_table_selections" class="table-bordered" cellpadding="10" cellspacing="50"
                   style="width: 100%; display: none">
                <tr>
                    <td colspan="4">SELECTABLE TABLES REGARDING TRAININGS</td>
                </tr>
                <tr>
                    <td style="width: 25%;"><input type="checkbox" name="query_tables" id="courses_and_topics"
                                                   value="COURSES_AND_TOPICS"
                                                   onchange="show_table_fields('courses_and_topics');"/> Courses and
                        Modules
                    </td>
                    <td style="width: 25%;"><input type="checkbox" name="query_tables" id="trainings" value="TRAININGS"
                                                   onchange="show_table_fields('trainings');"/> Trainings
                    </td>
                    <td style="width: 25%;"><input type="checkbox" name="query_tables" id="training_attendance"
                                                   value="TRAINING_ATTENDANCE"
                                                   onchange="show_table_fields('training_attendance');"/> Attendance
                    </td>
                    <td style="width: 25%;"><input type="checkbox" name="query_tables" id="training_outcomes"
                                                   value="TRAINING_OUTCOMES"
                                                   onchange="show_table_fields('training_outcomes');"/> Training
                        Outcomes
                    </td>
                </tr>
            </table>
            <table id="monitoring_table_selections" class="table-bordered" cellpadding="10" cellspacing="50"
                   style="width: 100%; display: none">
                <tr>
                    <td colspan="4">SELECTABLE TABLES REGARDING MONITORING</td>
                </tr>
                <tr>
                    <td style="width: 25%;"><input type="checkbox" name="query_tables" id="monitoring_visits"
                                                   value="MONITORING_VISITS"
                                                   onchange="show_table_fields('monitoring_visits');"/> Monitoring
                        Visits
                    </td>
                </tr>
            </table>
            <table id="production_table_selections" class="table-bordered" cellpadding="10" cellspacing="50"
                   style="width: 100%; display: none">
                <tr>
                    <td colspan="4">SELECTABLE TABLES REGARDING PRODUCTION</td>
                </tr>
                <tr>
                    <td style="width: 25%;"><input type="checkbox" name="query_tables" id="misean_cara_baseline_surveys"
                                                   value="MISEAN_CARA_BASELINE_SURVEYS"
                                                   onchange="show_table_fields('misean_cara_baseline_surveys');"/> Basic
                        Production Details
                    </td>
                    <td style="width: 25%;"><input type="checkbox" name="query_tables" id="production"
                                                   value="VEGETABLE_PRODUCTION_NEW"
                                                   onchange="show_table_fields('production');"/> Crop & Vegetable
                        Production
                    </td>
                    <td style="width: 25%;"><input type="checkbox" name="query_tables" id="fish_farming"
                                                   value="FISH_FARMING_RECORDS"
                                                   onchange="show_table_fields('fish_farming');"/> Fish Farming
                    </td>
                </tr>
                <tr>
                    <td style="width: 25%;"><input type="checkbox" name="query_tables" id="production_problems"
                                                   value="PRODUCTION_PROBLEMS"
                                                   onchange="show_table_fields('production_problems');"/> problems
                        affecting vegetable/crop production & marketing
                    </td>
                    <td style="width: 25%;"><input type="checkbox" name="query_tables" id="misean_cara_beneficiaries"
                                                   value="MISEAN_CARA_BENEFICIARIES_NEW"
                                                   onchange="show_table_fields('misean_cara_beneficiaries');"/> Misean
                        Cara beneficiaries adopting new technologies
                    </td>
                    <td style="width: 25%;"><input type="checkbox" name="query_tables" id="change_in_knowledge"
                                                   value="CHANGE_IN_KNOWLEDGE_NEWER"
                                                   onchange="show_table_fields('change_in_knowledge');"/> Change in
                        People's knowledge on Marketing and Processing
                    </td>
                </tr>
            </table>
            <table id="miscellaneous_table_selections" class="table-bordered" cellpadding="10" cellspacing="50"
                   style="width: 100%; display: none">
                <tr>
                    <td colspan="4">SELECTABLE TABLES REGARDING MISCELLANEOUS DATA</td>
                </tr>
                <tr>
                    <td style="width: 25%;"><input type="checkbox" name="query_tables" id="pilot_studies"
                                                   value="PILOT_STUDIES"
                                                   onchange="show_table_fields('pilot_studies');"/> Livelihood and
                        Nutrition Household Survey
                    </td>
                    <td style="width: 25%;"><input type="checkbox" name="query_tables" id="porticus_baseline_survey"
                                                   value="PORTICUS_BASELINE_ASSESSMENTS"
                                                   onchange="show_table_fields('porticus_baseline_survey');"/> Porticus
                        Baseline Assessment Survey
                    </td>
                    <td style="width: 25%;"><input type="checkbox" name="query_tables"
                                                   id="hygiene_and_nutrition_checklist"
                                                   value="HYGIENE_AND_NUTRITION_CHECKLIST"
                                                   onchange="show_table_fields('hygiene_and_nutrition_checklist');"/>
                        Hygiene and Nutrition Checklist
                    </td>
                </tr>
            </table>
            <table id="complex_table_selections" class="table-bordered" cellpadding="10" cellspacing="50"
                   style="width: 100%; display: none">
                <tr>
                    <td colspan="4">SELECTABLE TABLES FOR COMPLEX QUERY BUILDING</td>
                </tr>
                <tr>
                    <td style="width: 25%;"><input type="checkbox" name="query_tables" id="parish" value="PARISH"
                                                   disabled/> Parish
                    </td>
                    <td style="width: 25%;"><input type="checkbox" name="query_tables" id="village" value="VILLAGE"
                                                   disabled/> Village
                    </td>
                </tr>
            </table>
        </div>

    </div>
    <div class="row" id="fields_selection" style="display: none;">
        <hr>
        <div class="col-md-12">
            <h5>Fields Required for Display</h5>
        </div>

        <div class="col-md-12"><p>&nbsp;</p>

            <div id="livelihood_table_fields" style="display: none; clear: both;">

                <div class="row">
                    <div id="livelihood_groups_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>LIVELIHOOD GROUPS</th>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="livelihood_group_field" value="GROUPS.GROUP_NAME"/> Name of the
                                    Group<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="livelihood_group_field" value="GROUPS.LOCATION"/> Location<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="livelihood_group_field" value="GROUPS.DATE_OF_REGISTRATION"/> Date of
                                    Registration<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="livelihood_group_field" value="GROUPS.GROUP_ID"/> Group ID<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="livelihood_group_field" onchange="turn_on_checkbox('group_type');"
                                           value="GROUPS.TYPE"/> Group Type
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div id="livelihood_categories_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>LIVELIHOOD CATEGORIES</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12">
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="livelihood_category_field"
                                               value="LIVELIHOODGROUPCATEGORIES.CATEGORYNAME"/> CATEGORY NAME
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div id="vulnerabilities_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>VULNERABILITIES</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12">
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="vulnerabilities_field" value="DISABILITIES.DISABILITY_NAME"/>
                                        DISABILITY_NAME
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div id="membership_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>MEMBERSHIP</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12">
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field" value="MEMBERSHIP.NAME"/> Name<br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field" value="MEMBERSHIP.SEX"/> Sex <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field" value="MEMBERSHIP.VULNERABILITY"/> Vulnerability
                                        <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field" value="MEMBERSHIP.TITLE"/> Title <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field" value="MEMBERSHIP.DATE_OF_BIRTH"/> Date of birth
                                        <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field" value="MEMBERSHIP.GROUPS"/> Group <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field" value="MEMBERSHIP.PARISH"
                                               value="MEMBERSHIP.NAME"/> Parish <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field" value="MEMBERSHIP.VILLAGE"/> Village <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field" value="MEMBERSHIP.DATE_OF_JOINING"/> Date of
                                        Joining <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field" value="MEMBERSHIP.TELEPHONE"/> Telephone <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field" value="MEMBERSHIP.MEMBERSHIP_ID" disabled/>
                                        Membership Id <br>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

            <div id="children_table_fields" style="display: none; clear: both;">

                <div class="row">
                    <div id="children_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>CHILDREN</th>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" name="tables_field" id="tables_field" class="children_field"
                                           value="CHILDREN.CHILD_ID"/> CHILD_ID<br>
                                    <input type="checkbox" name="tables_field" id="tables_field" class="children_field"
                                           value="CHILDREN.NAME"/> NAME OF CHILD<br>
                                    <input type="checkbox" name="tables_field" id="tables_field" class="children_field"
                                           value="CHILDREN.SEX"/> SEX<br>
                                    <input type="checkbox" name="tables_field" id="tables_field" class="children_field"
                                           value="CHILDREN.VULNERABILITY"/> VULNERABILITY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field" class="children_field"
                                           value="CHILDREN.DATE_OF_BIRTH"/> DATE OF BIRTH<br>
                                    <input type="checkbox" name="tables_field" id="tables_field" class="children_field"
                                           value="CHILDREN.PARISH" onchange="turn_on_checkbox('parish');"/> PARISH<br>
                                    <input type="checkbox" name="tables_field" id="tables_field" class="children_field"
                                           value="CHILDREN.VILLAGE" onchange="turn_on_checkbox('village');"/>
                                    VILLAGE<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="children_field" value="CHILDREN.PROJECT"/> PROJECT <br>
                                    <input type="checkbox" name="tables_field" id="tables_field" class="children_field"
                                           value="CHILDREN.DATE_OF_JOINING"/> DATE OF JOINING<br>
                                    <input type="checkbox" name="tables_field" id="tables_field" class="children_field"
                                           value="CHILDREN.MOTHER"/> MOTHER<br>
                                    <input type="checkbox" name="tables_field" id="tables_field" class="children_field"
                                           value="CHILDREN.FATHER"/> FATHER<br>
                                    <input type="checkbox" name="tables_field" id="tables_field" class="children_field"
                                           value="CHILDREN.GUARDIAN"/> GUARDIAN<br>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div id="assessment_1_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>ASSESSMENT 1 RECORDS</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12">
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field" value="ASSESSMENT_1_RECORDS.COUNTY"/> COUNTY
                                        <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field" value="ASSESSMENT_1_RECORDS.SUBCOUNTY"/>
                                        SUBCOUNTY <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field" value="ASSESSMENT_1_RECORDS.PARISH"/> PARISH
                                        <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field" value="ASSESSMENT_1_RECORDS.VILLAGE"/> VILLAGE
                                        <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field" value="ASSESSMENT_1_RECORDS.HEALTH_CENTRE"/>
                                        HEALTH CENTRE <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field" value="ASSESSMENT_1_RECORDS.DATE_ENTERED"/>
                                        DATE ENTERED <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field" value="ASSESSMENT_1_RECORDS.CBR_NAME"/> CBR
                                        NAME <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field" value="ASSESSMENT_1_RECORDS.CHILD_ID"/> CHILD
                                        ID <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field" value="ASSESSMENT_1_RECORDS.DATE_OF_BIRTH"/>
                                        DATE OF BIRTH <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field" value="ASSESSMENT_1_RECORDS.SEX"/> SEX <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field" value="ASSESSMENT_1_RECORDS.DISABILITY_TYPE"/>
                                        DISABILITY TYPE <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field"
                                               value="ASSESSMENT_1_RECORDS.WHERE_THE_CHILD_LIVES"/> WHERE THE CHILD
                                        LIVES <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field"
                                               value="ASSESSMENT_1_RECORDS.OTHER_SPECIFIED_PLACE"/> OTHER SPECIFIED
                                        PLACE WHERE CHILD LIVES<br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field"
                                               value="ASSESSMENT_1_RECORDS.OTHER_DISABLED_CHILDREN"/> OTHER DISABLED
                                        CHILDREN <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field"
                                               value="ASSESSMENT_1_RECORDS.NUMBER_OF_OTHER_DISABLED_CHILDREN"/> NUMBER
                                        OF OTHER DISABLED CHILDREN <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field"
                                               value="ASSESSMENT_1_RECORDS.ABLE_TO_PROVIDE_BASIC_NEEDS"/> ABLE TO
                                        PROVIDE BASIC NEEDS <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field"
                                               value="ASSESSMENT_1_RECORDS.EXPLANATION_FOR_INABILITY_TO_PROVIDE_BASIC_NEEDS"/>
                                        EXPLANATION FOR INABILITY TO PROVIDE BASIC NEEDS <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field"
                                               value="ASSESSMENT_1_RECORDS.DISABILITY_DESCRIPTION"/> DISABILITY
                                        DESCRIPTION <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field"
                                               value="ASSESSMENT_1_RECORDS.CHILD_USES_MEDICINE"/> CHILD USES MEDICINE
                                        <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field" value="ASSESSMENT_1_RECORDS.CHILD_HAS_FITS"/>
                                        CHILD HAS FITS <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field" value="ASSESSMENT_1_RECORDS.NUMBER_OF_FITS"/>
                                        NUMBER OF FITS <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field" value="ASSESSMENT_1_RECORDS.LIMBS_MOVE_WELL"/>
                                        LIMBS MOVE WELL <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field"
                                               value="ASSESSMENT_1_RECORDS.LIMBS_THAT_MOVE_WELL"/> LIMBS THAT MOVE WELL
                                        <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field" value="ASSESSMENT_1_RECORDS.CHILD_USES_AIDS"/>
                                        CHILD USES AIDS <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field"
                                               value="ASSESSMENT_1_RECORDS.TYPE_OF_AIDS_USED"/> TYPE OF AIDS USED <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field" value="ASSESSMENT_1_RECORDS.CHILD_TALKS"/>
                                        CHILD TALKS <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field" value="ASSESSMENT_1_RECORDS.CHILD_SEES"/>
                                        CHILD SEES <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field" value="ASSESSMENT_1_RECORDS.MENTAL_CAPACITY"/>
                                        MENTAL CAPACITY <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field" value="ASSESSMENT_1_RECORDS.EATS_AND_DRINKS"/>
                                        EATS AND DRINKS <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field"
                                               value="ASSESSMENT_1_RECORDS.WASHES_AND_DRESSES"/> WASHES AND DRESSES <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field"
                                               value="ASSESSMENT_1_RECORDS.TOILET_ACTIVITIES"/> TOILET ACTIVITIES <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field"
                                               value="ASSESSMENT_1_RECORDS.HOW_THE_CHILD_MOVES"/> HOW THE CHILD MOVES
                                        <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field"
                                               value="ASSESSMENT_1_RECORDS.CHILD_PLAYS_WITH_OTHERS"/> CHILD PLAYS WITH
                                        OTHERS <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field"
                                               value="ASSESSMENT_1_RECORDS.HELPS_IN_HOUSEHOLD_CORES"/> HELPS IN
                                        HOUSEHOLD CORES <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field"
                                               value="ASSESSMENT_1_RECORDS.ACCEPTED_BY_FAMILY_AND_LOVED"/> ACCEPTED BY
                                        FAMILY AND LOVED <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field"
                                               value="ASSESSMENT_1_RECORDS.ACCEPTED_BY_COMMUNITY"/> ACCEPTED BY
                                        COMMUNITY <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field" value="ASSESSMENT_1_RECORDS.GOES_TO_SCHOOL"/>
                                        GOES TO SCHOOL <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field" value="ASSESSMENT_1_RECORDS.SCHOOL"/> SCHOOL
                                        <br>
                                        <input type="checkbox" name="tables_field" id="assessment_1_field"
                                               class="assessment_1_field" value="ASSESSMENT_1_RECORDS.COMMENT"/> COMMENT
                                        <br>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div id="assessment_2_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>ASSESSMENT 2 RECORDS</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12">
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="assessment_2_field" value="ASSESSMENT_2_RECORDS_NEW.CHILD"/> CHILD
                                        <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="assessment_2_field"
                                               value="ASSESSMENT_2_RECORDS_NEW.DATE_OF_FIRST_SCREENING"/> DATE OF FIRST
                                        SCREENING <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="assessment_2_field"
                                               value="ASSESSMENT_2_RECORDS_NEW.IDENTIFIED_BY"/> IDENTIFIED BY <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="assessment_2_field" value="ASSESSMENT_2_RECORDS_NEW.ASSESSED_BY"/>
                                        ASSESSED BY <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="assessment_2_field" value="ASSESSMENT_2_RECORDS_NEW.DISTANCE"/>
                                        DISTANCE <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="assessment_2_field"
                                               value="ASSESSMENT_2_RECORDS_NEW.NEAREST_HEALTH_CENTRE"/> NEAREST HEALTH
                                        CENTRE <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="assessment_2_field"
                                               value="ASSESSMENT_2_RECORDS_NEW.VENUE_FOR_SCREENING"/> VENUE FOR
                                        SCREENING <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="assessment_2_field"
                                               value="ASSESSMENT_2_RECORDS_NEW.MEDICAL_HISTORY"/> MEDICAL HISTORY <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="assessment_2_field" value="ASSESSMENT_2_RECORDS_NEW.FINDINGS"/>
                                        FINDINGS <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="assessment_2_field" value="ASSESSMENT_2_RECORDS_NEW.DISABILITY"/>
                                        DISABILITY <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="assessment_2_field"
                                               value="ASSESSMENT_2_RECORDS_NEW.RECOMMENDATION"/> RECOMMENDATION <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="assessment_2_field" value="ASSESSMENT_2_RECORDS_NEW.SCREENED_BY"/>
                                        SCREENED BY <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="assessment_2_field" value="ASSESSMENT_2_RECORDS_NEW.TITLE"/> TITLE
                                        <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="assessment_2_field"
                                               value="ASSESSMENT_2_RECORDS_NEW.DATE_ENTERED"/> DATE ENTERED <br>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div id="visitation_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>CHILD VISITATIONS</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12">
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="visitation_field" value="VISIT_RECORDS.CHILD_ID_VISITED"/> CHILD
                                        ID <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="visitation_field" value="VISIT_RECORDS.DATE_OF_VISIT"/> DATE OF
                                        VISIT<br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="visitation_field" value="VISIT_RECORDS.KIND_OF_VISIT"/> KIND OF
                                        VISIT <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="visitation_field" value="VISIT_RECORDS.VILLAGE"/> VILLAGE <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="visitation_field" value="VISIT_RECORDS.PARISH"/> PARISH <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="visitation_field" value="VISIT_RECORDS.SUBCOUNTY"/> SUBCOUNTY <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="visitation_field" value="VISIT_RECORDS.ACTIVITY_CARRIED_OUT"/>
                                        ACTIVITY CARRIED OUT <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="visitation_field" value="VISIT_RECORDS.NEXT_VISIT_ACTIVITY"/> NEXT
                                        VISIT ACTIVITY <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="visitation_field" value="VISIT_RECORDS.WACFO_STAFF"/> WACFO STAFF
                                        <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="visitation_field" value="VISIT_RECORDS.COMMENT"/> COMMENT <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="visitation_field" value="VISIT_RECORDS.NEXT_VISIT_DATE"/> NEXT
                                        VISIT DATE <br>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

            <div id="staff_table_fields" style="display: none; clear: both;">

                <div class="row">
                    <div id="department_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>DEPARTMENTS</th>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="department_field" value="ORGANIZATION_DEPARTMENTS_NEW.NAME"/> NAME OF
                                    DEPARTMENT<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="department_field" value="ORGANIZATION_DEPARTMENTS_NEW.PREFIX"/> PREFIX<br>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div id="staff_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>ORGANIZATION STAFF</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12">
                                        <input type="checkbox" name="tables_field" id="tables_field" class="staff_field"
                                               value="ORGANIZATION_STAFF_NEW.NAME"/> NAME <br>
                                        <input type="checkbox" name="tables_field" id="tables_field" class="staff_field"
                                               value="ORGANIZATION_STAFF_NEW.ROLE"/> ROLE <br>
                                        <input type="checkbox" name="tables_field" id="tables_field" class="staff_field"
                                               value="ORGANIZATION_STAFF_NEW.DEPARTMENT"/> DEPARTMENT <br>
                                        <input type="checkbox" name="tables_field" id="tables_field" class="staff_field"
                                               value="ORGANIZATION_STAFF_NEW.EMAIL_ADDRESS"/> EMAIL ADDRESS <br>
                                        <input type="checkbox" name="tables_field" id="tables_field" class="staff_field"
                                               value="ORGANIZATION_STAFF_NEW.TELEPHONE"/> TELEPHONE <br>
                                        <input type="checkbox" name="tables_field" id="tables_field" class="staff_field"
                                               value="ORGANIZATION_STAFF_NEW.STAFF_ID"/> STAFF ID <br>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

            <div id="training_table_fields" style="display: none; clear: both;">

                <div class="row">
                    <div id="courses_and_topics_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>COURSES AND TOPICS</th>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="courses_and_topics_field" value="COURSES_AND_TOPICS.COURSE"/>
                                    COURSE<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="courses_and_topics_field" value="COURSES_AND_TOPICS.TOPIC"/> TOPIC<br>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div id="training_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>TRAININGS</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12">
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="training_field" value="TRAININGS.DATE_OF_TRAINING"/>
                                        DATE_OF_TRAINING <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="training_field" value="TRAININGS.COURSE"/> COURSE <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="training_field" value="TRAININGS.TOPIC"/> TOPIC <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="training_field" value="TRAININGS.OBJECTIVE"/> OBJECTIVE <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="training_field" value="TRAININGS.VENUE"/> VENUE <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="training_field" value="TRAININGS.GROUP_INTENDED"/> GROUP_INTENDED
                                        <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="training_field" value="TRAININGS.CONDUCTED_BY"/> CONDUCTED_BY <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="training_field" value="TRAININGS.IS_STAFF"/> IS_STAFF <br>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div id="attendance_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>TRAINING ATTENDANCE</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12">
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="attendance_field" value="TRAINING_ATTENDANCE.ATTENDANT"/>
                                        ATTENDANT <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="attendance_field" value="TRAINING_ATTENDANCE.TYPE"/> CATEGORY <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="attendance_field" value="TRAINING_ATTENDANCE.ADDRESS"/> ADDRESS
                                        <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="attendance_field" value="TRAINING_ATTENDANCE.CONTACT"/> CONTACT
                                        <br>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div id="training_outcome_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>TRAINING OUTCOMES</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12">
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="training_outcome_field" value="TRAINING_OUTCOMES.OUTCOME"/>
                                        Training Outcome<br>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

            <div id="monitoring_visit_table_fields" style="display: none; clear: both;">

                <div class="row">
                    <div id="monitoring_visit_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>MONITORING VISITS</th>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="monitoring_visit_field" value="MONITORING_VISITS.STAFF_ID"/> STAFF
                                    ATTACHED<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="monitoring_visit_field" value="MONITORING_VISITS.DATE_OF_VISIT"/> DATE
                                    OF VISIT<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="monitoring_visit_field" value="MONITORING_VISITS.VISIT_TYPE"/> TYPE OF
                                    VISIT<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="monitoring_visit_field" value="MONITORING_VISITS.GENERAL_COMMENTS"/>
                                    GENERAL COMMENTS<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="monitoring_visit_field" value="MONITORING_VISITS.TRACK_ID"/> TRACK ID
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div id="field_support_visits_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>FIELD SUPPORT VISITS</th>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="field_support_visit_field"
                                           value="FIELD_SUPPORT_MONITORING_VISITS.GROUP_ID"/> GROUP ID<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="field_support_visit_field"
                                           value="FIELD_SUPPORT_MONITORING_VISITS.ACTIVITIES"/> ACTIVITIES CARRIED
                                    OUT<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="field_support_visit_field"
                                           value="FIELD_SUPPORT_MONITORING_VISITS.ISSUES_IDENTIFIED"/> ISSUES IDENTIFIED<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="field_support_visit_field"
                                           value="FIELD_SUPPORT_MONITORING_VISITS.ACTION_TAKEN"/> ACTION TAKEN<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="field_support_visit_field"
                                           value="FIELD_SUPPORT_MONITORING_VISITS.TRACK_ID"/> TRACK ID
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div id="savings_tracking_visit_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>SAVINGS TRACKING VISITS</th>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="savings_tracking_visit_field" value="SAVINGS_TRAKING_VISIT.GROUP_ID"/>
                                    GROUP ID<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="savings_tracking_visit_field"
                                           value="SAVINGS_TRAKING_VISIT.TOTAL_SAVINGS"/> TOTAL SAVINGS<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="savings_tracking_visit_field"
                                           value="SAVINGS_TRAKING_VISIT.AMOUNT_LOAN_OUT"/> AMOUNT LOAN OUT<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="savings_tracking_visit_field"
                                           value="SAVINGS_TRAKING_VISIT.TOTAL_AMOUNT_PAID_BACK"/> TOTAL AMOUNT PAI
                                    BACK<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="savings_tracking_visit_field"
                                           value="SAVINGS_TRAKING_VISIT.INTEREST_PAID"/> INTEREST PAID<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="savings_tracking_visit_field"
                                           value="SAVINGS_TRAKING_VISIT.ISSUES_IDENTIFIED"/> ISSUES IDENTIFIED<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="savings_tracking_visit_field"
                                           value="SAVINGS_TRAKING_VISIT.ACTION_TAKEN"/> ACTION TAKEN<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="savings_tracking_visit_field"
                                           value="SAVINGS_TRAKING_VISIT.TOTAL_AMOUNT"/> TOTAL AMOUNT<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="savings_tracking_visit_field" value="SAVINGS_TRAKING_VISIT.TRACK_ID"/>
                                    TRACK ID
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

            <div id="production_table_fields" style="display: none; clear: both;">

                <div class="row">
                    <div id="misean_cara_baseline_survey_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>MISEAN CARA BASELINE SURVEY ECONOMIC SECURITY BEFORE PROJECT INTERVENTION</th>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="misean_cara_baseline_survey_field"
                                           value="MISEAN_CARA_BASELINE_SURVEYS.GRANTEE"/> NAME OF THE GRANTEE<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="misean_cara_baseline_survey_field"
                                           value="MISEAN_CARA_BASELINE_SURVEYS.GROUP_NAME"/> GROUP ID<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="misean_cara_baseline_survey_field"
                                           value="MISEAN_CARA_BASELINE_SURVEYS.DISTRICT"/> DISTRICT<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="misean_cara_baseline_survey_field"
                                           value="MISEAN_CARA_BASELINE_SURVEYS.COUNTY"/> COUNTY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="misean_cara_baseline_survey_field"
                                           value="MISEAN_CARA_BASELINE_SURVEYS.SUBCOUNTY"/> SUBCOUNTY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="misean_cara_baseline_survey_field"
                                           value="MISEAN_CARA_BASELINE_SURVEYS.PWD"/> NUMBER OF PWD<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="misean_cara_baseline_survey_field"
                                           value="MISEAN_CARA_BASELINE_SURVEYS.CHH"/> NUMBER OF CHH<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="misean_cara_baseline_survey_field"
                                           value="MISEAN_CARA_BASELINE_SURVEYS.ORPHAN"/> NUMBER OF ORPHANS<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="misean_cara_baseline_survey_field"
                                           value="MISEAN_CARA_BASELINE_SURVEYS.HIV"/> NUMBER OF PEOPLE WITH HIV<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="misean_cara_baseline_survey_field"
                                           value="MISEAN_CARA_BASELINE_SURVEYS.PWD_IN_SCHOOL"/> NUMBER OF PWD IN
                                    SCHOOL<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="misean_cara_baseline_survey_field"
                                           value="MISEAN_CARA_BASELINE_SURVEYS.CHH_IN_SCHOOL"/> NUMBER OF CHH IN
                                    SCHOOL<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="misean_cara_baseline_survey_field"
                                           value="MISEAN_CARA_BASELINE_SURVEYS.ORPHAN_IN_SCHOOL"/> NUMBER OF ORPHANS IN
                                    SCHOOL<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="misean_cara_baseline_survey_field"
                                           value="MISEAN_CARA_BASELINE_SURVEYS.CHILDREN_WITH_HIV_IN_SCHOOL"/> NUMBER OF
                                    CHILDREN WITH HIV IN SCHOOL<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="misean_cara_baseline_survey_field"
                                           value="MISEAN_CARA_BASELINE_SURVEYS.NORMAL_IN_SCHOOL"/> NUMBER OF NORMAL
                                    PEOPLE IN SCHOOL<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="misean_cara_baseline_survey_field"
                                           value="MISEAN_CARA_BASELINE_SURVEYS.MEALS_PER_DAY"/> NUMBER OF MEALS PER
                                    DAY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="misean_cara_baseline_survey_field"
                                           value="MISEAN_CARA_BASELINE_SURVEYS.MEDICAL_TREATMENT"/> ABLE TO PROVIDE
                                    MEDICAL TREATMENT<br>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div id="production_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>CROP / VEGETABLE PRODUCTION</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12">
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="food_production_field"
                                               value="VEGETABLE_PRODUCTION_NEW.INDIVIDUAL"/> INDIVIDUAL <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="food_production_field"
                                               value="VEGETABLE_PRODUCTION_NEW.FOOD_STUFF"/> FOOD STUFF <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="food_production_field" value="VEGETABLE_PRODUCTION_NEW.CATEGORY"/>
                                        CATEGORY <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="food_production_field"
                                               value="VEGETABLE_PRODUCTION_NEW.ACRES_PLANTED"/> ACRES PLANTED <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="food_production_field"
                                               value="VEGETABLE_PRODUCTION_NEW.YIELD_OBTAINED"/> YIELD OBTAINED <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="food_production_field"
                                               value="VEGETABLE_PRODUCTION_NEW.QUANTITY_SOLD"/> QUANTITY SOLD <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="food_production_field" value="VEGETABLE_PRODUCTION_NEW.INCOME"/>
                                        INCOME <br>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div id="fish_farming_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>FISH FARMING</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12">
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="fish_farming_field" value="FISH_FARMING_RECORDS.INDIVIDUAL_ID"/>
                                        INDIVIDUAL ID <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="fish_farming_field" value="FISH_FARMING_RECORDS.SIZE_OF_POND"/>
                                        SIZE OF POND <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="fish_farming_field"
                                               value="FISH_FARMING_RECORDS.NUMBER_OF_FISH_HARVESTED"/> NUMBER OF FISH
                                        HARVESTED <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="fish_farming_field" value="FISH_FARMING_RECORDS.QUANTITY_IN_KG"/>
                                        QUANTITY (KG) <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="fish_farming_field" value="FISH_FARMING_RECORDS.INCOME"/> INCOME
                                        <br>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div id="farming_problems_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>Increase in target group's knowledge on problems affecting vegetable/crop production
                                    and challenges on the marketing aspect
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12">
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="farming_problem_field" value="PRODUCTION_PROBLEMS.GROUP_NAME"/>
                                        GROUP ID<br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="farming_problem_field"
                                               value="PRODUCTION_PROBLEMS.VEGETABLE_PRODUCTION_PROBLEMS"/> VEGETABLE
                                        PRODUCTION PROBLEMS<br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="farming_problem_field"
                                               value="PRODUCTION_PROBLEMS.VEGETABLE_MARKETING_PROBLEMS"/> VEGETABLE
                                        MARKETING PROBLEMS<br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="farming_problem_field"
                                               value="PRODUCTION_PROBLEMS.CROP_PRODUCTION_PROBLEMS"/> CROP PRODUCTION
                                        PROBLEMS<br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="farming_problem_field"
                                               value="PRODUCTION_PROBLEMS.CROP_MARKETING_PROBLEMS"/> CROP MARKETING
                                        PROBLEMS<br>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div id="misean_cara_technology_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>Number of Misean Cara beneficiaries adopting new technologies in vegetables and crop
                                    production
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12">
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="misean_cara_technology_field"
                                               value="MISEAN_CARA_BENEFICIARIES_NEW.INDIVIDUAL_ID"/> INDIVIDUAL ID<br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="misean_cara_technology_field"
                                               value="MISEAN_CARA_BENEFICIARIES_NEW.USED_IMPROVED_SEEDS"/> USED IMPROVED
                                        SEEDS<br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="misean_cara_technology_field"
                                               value="MISEAN_CARA_BENEFICIARIES_NEW.USED_UNDERGROUND_WATER"/> USED
                                        UNDERGROUND WATER<br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="misean_cara_technology_field"
                                               value="MISEAN_CARA_BENEFICIARIES_NEW.USED_PESTICIDES"/> USED
                                        PESTICIDES<br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="misean_cara_technology_field"
                                               value="MISEAN_CARA_BENEFICIARIES_NEW.USED_FARM_IMPLEMENTS"/> USED FARM
                                        IMPLEMENTS<br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="misean_cara_technology_field"
                                               value="MISEAN_CARA_BENEFICIARIES_NEW.IMPROVED_POST_HARVEST_HANDLING"/>
                                        IMPROVED POST HARVEST HANDLING<br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="misean_cara_technology_field"
                                               value="MISEAN_CARA_BENEFICIARIES_NEW.USED_ROW_PLANTING"/> USED ROW
                                        PLANTING<br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="misean_cara_technology_field"
                                               value="MISEAN_CARA_BENEFICIARIES_NEW.OTHER_TECHNIQUES_USED"/> OTHER
                                        TECHNIQUES USED<br>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div id="change_in_marketing_knowledge_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>Change in People's knowledge on Marketing and Processing</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12">
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="change_in_marketing_knowledge_field"
                                               value="CHANGE_IN_KNOWLEDGE_NEWER.INDIVIDUAL_ID"/> INDIVIDUAL ID<br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="change_in_marketing_knowledge_field"
                                               value="CHANGE_IN_KNOWLEDGE_NEWER.SELLS_ALL_VEGETABLES"/> SELLS ALL
                                        VEGETABLES<br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="change_in_marketing_knowledge_field"
                                               value="CHANGE_IN_KNOWLEDGE_NEWER.VEGETABLE_MARKET_PLACE_1"/> VEGETABLE
                                        MARKET: PLACE 1<br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="change_in_marketing_knowledge_field"
                                               value="CHANGE_IN_KNOWLEDGE_NEWER.VEGETABLE_MARKET_PLACE_2"/> VEGETABLE
                                        MARKET: PLACE 2<br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="change_in_marketing_knowledge_field"
                                               value="CHANGE_IN_KNOWLEDGE_NEWER.VEGETABLE_MARKET_PLACE_3"/> VEGETABLE
                                        MARKET: PLACE_3<br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="change_in_marketing_knowledge_field"
                                               value="CHANGE_IN_KNOWLEDGE_NEWER.SELLS_ALL_CROPS"/> SELLS ALL CROPS<br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="change_in_marketing_knowledge_field"
                                               value="CHANGE_IN_KNOWLEDGE_NEWER.CROP_MARKET_PLACE_1"/> CROP MARKET:
                                        PLACE 1<br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="change_in_marketing_knowledge_field"
                                               value="CHANGE_IN_KNOWLEDGE_NEWER.CROP_MARKET_PLACE_2"/> CROP MARKET:
                                        PLACE 2<br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="change_in_marketing_knowledge_field"
                                               value="CHANGE_IN_KNOWLEDGE_NEWER.CROP_MARKET_PLACE_3"/> CROP MARKET:
                                        PLACE 3<br>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

            <div id="miscellaneous_table_fields" style="display: none; clear: both;">

                <div class="row">
                    <div id="pilot_studies_fields" class="col-md-6" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>Livelihood and Nutrition Household Survey</th>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.INTERVIEWER"/> NAME OF THE
                                    INTERVIEWER<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.DATE_OF_INTERVIEW"/> DATE OF
                                    INTERVIEW<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.LOCATION"/> LOCATION<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.RESPONDENT"/> RESPONDENT<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.HEAD_OF_THE_HOUSEHOLD"/>
                                    HEAD OF THE HOUSEHOLD<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.FEMALES_UNDER_5"/> FEMALES
                                    UNDER 5<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.FEMALES_BETWEEN_6_AND_18"/>
                                    FEMALES BETWEEN 6 AND 18<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.MALES_UNDER_5"/> MALES UNDER
                                    5<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.MALES_BETWEEN_6_AND_18"/>
                                    MALES BETWEEN 6 AND 18<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.MALES_BETWEEN_18_AND_45"/>
                                    MALES BETWEEN 18 AND 45<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.FEMALES_BETWEEN_18_AND_45"/>
                                    FEMALES BETWEEN 18 AND 45<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.LENGTH_OF_TIME_INVOLVED_IN_PROJECTS"/> LENGTH OF TIME
                                    INVOLVED IN PROJECTS<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.DAILY_HOUSEHOLD_INCOME_NOW"/> DAILY_HOUSEHOLD INCOME NOW<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.DAILY_HOUSEHOLD_INCOME_ONE_YEAR_AGO"/> DAILY HOUSEHOLD
                                    INCOME ONE YEAR AGO<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.INCREASE_IN_DAILY_HOUSEHOLD_INCOME"/> INCREASE IN DAILY
                                    HOUSEHOLD INCOME<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.NUMBER_OF_SOURCES_OF_INCOME_NOW"/> NUMBER OF SOURCES OF
                                    INCOME NOW<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.SOURCES_OF_INCOME_NOW"/>
                                    SOURCES OF INCOME_NOW<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.NUMBER_OF_SOURCES_OF_INCOME_ONE_YEAR_AGO"/> NUMBER OF
                                    SOURCES OF INCOME ONE YEAR AGO<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.INCOME_NOW_ADDITIONAL_NOTES"/> INCOME NOW ADDITIONAL
                                    NOTES<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.SOURCES_OF_INCOME_1_YEAR_AGO"/> SOURCES OF INCOME 1 YEAR
                                    AGO<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.INCOME_ONE_YEAR_AGO_ADDITIONAL_NOTES"/> INCOME ONE YEAR
                                    AGO ADDITIONAL NOTES<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.INCREASE_IN_DIVERSITY_OF_SOURCES_OF_INCOME"/> INCREASE
                                    IN DIVERSITY OF SOURCES OF INCOME<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.MEDICAL_EXPENSE"/> MEDICAL
                                    EXPENSE<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.EDUCATION_EXPENSE"/>
                                    EDUCATION EXPENSE<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.HOUSE_EXPENSE"/> HOUSE
                                    EXPENSE<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.CLOTHES_EXPENSE"/> CLOTHES
                                    EXPENSE<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.FOOD_EXPENSE"/> FOOD EXPENSE<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.HOUSEHOLD_ASSETS"/>
                                    HOUSEHOLD ASSETS<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.OTHER_EXPENSES"/>
                                    OTHER_EXPENSES<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.INCREASE_IN_HOUSEHOLD_ASSETS"/> INCREASE IN HOUSEHOLD
                                    ASSETS<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.LAND_INCREASE"/> LAND
                                    INCREASE<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.LAND_SIZE"/> LAND SIZE<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.PERMANENT_HOUSE"/> PERMANENT
                                    HOUSE<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.SEMI_PERMANENT_HOUSE"/> SEMI
                                    PERMANENT HOUSE<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.MUD_HOUSE"/> MUD HOUSE<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.RADIO_OR_TV"/> RADIO OR
                                    TV<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.MOBILE_PHONE"/> MOBILE PHONE<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.AUTOMOTIVE"/> AUTOMOTIVE<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.BREAKFAST_YESTERDAY"/>
                                    BREAKFAST YESTERDAY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.SNACK_FOR_BREAKFAST_YESTERDAY"/> SNACK FOR BREAKFAST
                                    YESTERDAY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.LUNCH_YESTERDAY"/> LUNCH
                                    YESTERDAY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.SNACK_FOR_LUNCH_YESTERDAY"/>
                                    SNACK FOR LUNCH YESTERDAY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.DINNER_YESTERDAY"/> DINNER
                                    YESTERDAY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.SNACK_FOR_DINNER_YESTERDAY"/> SNACK FOR DINNER YESTERDAY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.BREAKFAST_1_YEAR_AGO"/>
                                    BREAKFAST 1 YEAR_AGO<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.SNACK_FOR_BREAKFAST_1_YEAR_AGO"/> SNACK FOR BREAKFAST
                                    1_YEAR_AGO<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.LUNCH_1_YEAR_AGO"/> LUNCH 1
                                    YEAR AGO<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.SNACK_FOR_LUNCH_1_YEAR_AGO"/> SNACK FOR LUNCH 1 YEAR AGO<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.DINNER_1_YEAR_AGO"/> DINNER
                                    1 YEAR AGO<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.SNACK_FOR_DINNER_1_YEAR_AGO"/> SNACK FOR DINNER 1 YEAR
                                    AGO<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.CEREALS_YESTERDAY"/> CEREALS
                                    YESTERDAY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.CEREALS_1_YEAR_AGO"/>
                                    CEREALS 1 YEAR AGO<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.VITAMIN_A_VEGETABLE_YESTERDAY"/> VITAMIN A VEGETABLE
                                    YESTERDAY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.VITAMIN_A_VEGETABLE_1_YEAR_AGO"/> VITAMIN A VEGETABLE 1
                                    YEAR AGO<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.WHITE_TUBERS_YESTERDAY"/>
                                    WHITE TUBERS YESTERDAY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.WHITE_TUBERS_1_YEAR_AGO"/>
                                    WHITE TUBERS 1 YEAR AGO<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.DARK_GREEN_LEAFY_VEGETABLES_YESTERDAY"/> DARK GREEN
                                    LEAFY VEGETABLES YESTERDAY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.DARK_GREEN_LEAFY_VEGETABLES_1_YEAR_AGO"/> DARK GREEN
                                    LEAFY VEGETABLES 1 YEAR AGO<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.OTHER_VEGETABLES_YESTERDAY"/> OTHER VEGETABLES YESTERDAY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.OTHER_VEGETABLES_1_YEAR_AGO"/> OTHER VEGETABLES 1 YEAR
                                    AGO<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.VITAMIN_A_FRUITS_YESTERDAY"/> VITAMIN A FRUITS YESTERDAY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.VITAMIN_A_FRUITS_1_YEAR_AGO"/> VITAMIN A FRUITS 1 YEAR
                                    AGO<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.OTHER_FRUITS_YESTERDAY"/>
                                    OTHER FRUITS YESTERDAY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.OTHER_FRUITS_1_YEAR_AGO"/>
                                    OTHER FRUITS 1 YEAR AGO<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.ORGAN_MEAT_YESTERDAY"/>
                                    ORGAN MEAT YESTERDAY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.ORGAN_MEAT_1_YEAR_AGO"/>
                                    ORGAN MEAT 1 YEAR AGO<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.FLESH_MEATS_YESTERDAY"/>
                                    FLESH MEATS YESTERDAY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.FLESH_MEATS_1_YEAR_AGO"/>
                                    FLESH MEATS 1 YEAR AGO<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.EGGS_YESTERDAY"/> EGGS
                                    YESTERDAY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.EGGS_1_YEAR_AGO"/> EGGS 1
                                    YEAR AGO<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.FISH_YESTERDAY"/> FISH
                                    YESTERDAY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.FISH_1_YEAR_AGO"/> FISH 1
                                    YEAR AGO<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.LEGUMES_YESTERDAY"/> LEGUMES
                                    YESTERDAY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.LEGUMES_1_YEAR_AGO"/>
                                    LEGUMES 1 YEAR AGO<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.MILK_YESTERDAY"/> MILK
                                    YESTERDAY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.MILK_1_YEAR_AGO"/> MILK 1
                                    YEAR AGO<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.OILS_AND_FATS_YESTERDAY"/>
                                    OILS AND FATS YESTERDAY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.OILS_AND_FATS_1_YEAR_AGO"/>
                                    OILS AND FATS 1 YEAR AGO<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.RED_PALM_YESTERDAY"/> RED
                                    PALM YESTERDAY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.RED_PALM_1_YEAR_AGO"/> RED
                                    PALM 1 YEAR AGO<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.SWEETS_YESTERDAY"/> SWEETS
                                    YESTERDAY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.SWEETS_1_YEAR_AGO"/> SWEETS
                                    1 YEAR AGO<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.SPICES_YESTERDAY"/> SPICES
                                    YESTERDAY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.SPICES_1_YEAR_AGO"/> SPICES
                                    1 YEAR AGO<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.DISH_RACK"/> DISH RACK<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.COMPOST_PIT"/> COMPOST
                                    PIT<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.CLOTH_DRYING_LINE"/> CLOTH
                                    DRYING LINE<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.LATRINE"/> LATRINE<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.TIPPY_TAP"/> TIPPY TAP<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.BOILS_WATER"/> BOILS
                                    WATER<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.IMPROVED_LIVING_STANDARD"/>
                                    IMPROVED LIVING STANDARD<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.SIGNIFICANT_STORY"/>
                                    SIGNIFICANT STORY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.REASON_FOR_LOW_LIVING_STANDARD"/> REASON FOR LOW LIVING
                                    STANDARD<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.IMPROVED_DIET"/> IMPROVED
                                    DIET<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.IMPROVED_KNOWLEDGE_OF_NUTRITION"/> IMPROVED KNOWLEDGE OF
                                    NUTRITION<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.INCREASED_HOUSEHOLD_ASSET_BASE"/> INCREASED HOUSEHOLD
                                    ASSET BASE<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field"
                                           value="PILOT_STUDIES.REDUCED_POST_HARVEST_LOSS_DUE_TO_IMPROVED_STORAGE"/>
                                    REDUCED POST HARVEST LOSS DUE TO IMPROVED STORAGE<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.CONCLUSION"/> CONCLUSION<br>
                                    <input type="checkbox" name="tables_field" id="tables_field"
                                           class="pilot_studies_field" value="PILOT_STUDIES.RECOMMENDATION"/>
                                    RECOMMENDATION<br>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div id="porticus_fields" class="col-md-6" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>PORTICUS BASELINE ASSESSMENT SURVEY QUESTIONNAIRE ON DISABILITY</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12">
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.NAME_OF_RESPONDENT"/> NAME OF
                                        RESPONDENT <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field" value="PORTICUS_BASELINE_ASSESSMENTS.AGE"/> AGE
                                        <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field" value="PORTICUS_BASELINE_ASSESSMENTS.VILLAGE"/>
                                        VILLAGE <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field" value="PORTICUS_BASELINE_ASSESSMENTS.GENDER"/>
                                        GENDER <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.NAME_OF_VULNERABLE"/> NAME OF
                                        VULNERABLE <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.GENDER_OF_VULNERABLE"/> GENDER OF
                                        VULNERABLE <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.AGE_OF_VULNERABLE"/> AGE OF
                                        VULNERABLE <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.CATEGORY_OF_DISABILITY"/> CATEGORY
                                        OF DISABILITY <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.NAME_OF_DISABILITY"/> NAME OF
                                        DISABILITY <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.MARITAL_STATUS"/> MARITAL STATUS
                                        <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.LEVEL_OF_EDUCATION "/> LEVEL OF
                                        EDUCATION <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field" value="PORTICUS_BASELINE_ASSESSMENTS.OCCUPATION"/>
                                        OCCUPATION <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.HOUSEHOLD_MONTHLY_INCOME"/>
                                        HOUSEHOLD MONTHLY INCOME <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.DEFINITION_OF_DISABILITY"/>
                                        DEFINITION OF DISABILITY <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.LIST_OF_DISABILITIES_KNOWN"/> LIST
                                        OF DISABILITIES KNOWN <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.CAUSES_OF_DISABILITIES_KNOWN"/>
                                        CAUSES OF DISABILITIES KNOWN <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.WAYS_OF_PREVENTION"/> WAYS OF
                                        PREVENTION <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.FEELING_OF_HAVING_A_VULNERABLE"/>
                                        CATEGORY <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.FEELING_OF_THE_COMMUNITY"/> FEELING
                                        OF THE_COMMUNITY <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.VULNERABLE_SUPPORTED"/> VULNERABLE
                                        SUPPORTED <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.SUPPORT_GIVEN"/> SUPPORT GIVEN <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.WHY_NOT_SUPPORTED"/> WHY NOT
                                        SUPPORTED <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.REHABILITATION_RECEIVED"/>
                                        REHABILITATION RECEIVED <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.PLACE_OF_REHABILITATION"/> PLACE OF
                                        REHABILITATION <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.KIND_OF_TREATMENT_RECEIVED"/> KIND
                                        OF TREATMENT RECEIVED <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.COST_OF_TREATMENT"/> COST OF
                                        TREATMENT <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.DURATION_OF_THE_TREATMENT"/>
                                        DURATION OF THE TREATMENT <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.FREQUENCY_OF_ATTENDANCE"/> FREQUENCY
                                        OF ATTENDANCE <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.REGULAR_ATTENDANCE"/> REGULAR
                                        ATTENDANCE <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.REASON_FOR_NOT_ATTENDING_REGULARLY"/>
                                        REASON FOR NOT ATTENDING REGULARLY <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.QUALITY_OF_SERVICE"/> QUALITY OF
                                        SERVICE <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.TRAINING_RECEIVED"/> TRAINING
                                        RECEIVED <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.NAME_OF_TRAINER"/> NAME OF TRAINER
                                        <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.TRAINING_WAS_ABOUT"/> TRAINING WAS
                                        ABOUT <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.HELP_OF_THE_TRAINING"/> HELP OF THE
                                        TRAINING <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.CHALLENGES_FACED_IN_CARING"/>
                                        CHALLENGES FACED IN CARING <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.STRENGTHS_OF_VULNERABLE"/> STRENGTHS
                                        OF VULNERABLE <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.WEAKNESSES_OF_VULNERABLE"/>
                                        WEAKNESSES OF VULNERABLE <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.HOPE_FOR_THE_VULNERABLE"/> HOPE FOR
                                        THE VULNERABLE <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.ORGANIZATION_HELP_NEEDED"/>
                                        ORGANIZATION HELP NEEDED <br>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div id="hygiene_and_nutrition_fields" class="col-md-6" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>HYGIENE AND NUTRITION CHECKLIST</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12">
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="hygiene_and_nutrition_field"
                                               value="HYGIENE_AND_NUTRITION_CHECKLIST.MEMBERSHIP_ID"/> MEMBERSHIP ID
                                        <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="hygiene_and_nutrition_field"
                                               value="HYGIENE_AND_NUTRITION_CHECKLIST.SEX"/> SEX <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="hygiene_and_nutrition_field"
                                               value="HYGIENE_AND_NUTRITION_CHECKLIST.GROUP_NAME"/> GROUP NAME <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="hygiene_and_nutrition_field"
                                               value="HYGIENE_AND_NUTRITION_CHECKLIST.DISTRICT"/> DISTRICT <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="hygiene_and_nutrition_field"
                                               value="HYGIENE_AND_NUTRITION_CHECKLIST.SUBCOUNTY"/> SUBCOUNTY <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="hygiene_and_nutrition_field"
                                               value="HYGIENE_AND_NUTRITION_CHECKLIST.PARISH"/> PARISH <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="hygiene_and_nutrition_field"
                                               value="HYGIENE_AND_NUTRITION_CHECKLIST.PIT_LATRINE"/> PIT LATRINE <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="hygiene_and_nutrition_field"
                                               value="HYGIENE_AND_NUTRITION_CHECKLIST.RUBBISH_PIT"/> RUBBISH PIT <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="hygiene_and_nutrition_field"
                                               value="HYGIENE_AND_NUTRITION_CHECKLIST.BATHING_SHELTER"/> BATHING SHELTER
                                        <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="hygiene_and_nutrition_field"
                                               value="HYGIENE_AND_NUTRITION_CHECKLIST.TIPPY_TAP"/> TIPPY TAP <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="hygiene_and_nutrition_field"
                                               value="HYGIENE_AND_NUTRITION_CHECKLIST.PLATE_DRYING_RACK"/> PLATE DRYING
                                        RACK <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="hygiene_and_nutrition_field"
                                               value="HYGIENE_AND_NUTRITION_CHECKLIST.KITCHEN_GARDEN"/> KITCHEN GARDEN
                                        <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="hygiene_and_nutrition_field"
                                               value="HYGIENE_AND_NUTRITION_CHECKLIST.FRUIT_TREES"/> FRUIT TREES <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="hygiene_and_nutrition_field"
                                               value="HYGIENE_AND_NUTRITION_CHECKLIST.NRM_PRACTICES"/> NRM PRACTICES
                                        <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="hygiene_and_nutrition_field"
                                               value="HYGIENE_AND_NUTRITION_CHECKLIST.MAIZE_CRIB"/> MAIZE CRIB <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="hygiene_and_nutrition_field"
                                               value="HYGIENE_AND_NUTRITION_CHECKLIST.DRYING_RACK"/> DRYING RACK <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="hygiene_and_nutrition_field"
                                               value="HYGIENE_AND_NUTRITION_CHECKLIST.TAPAULIN"/> TAPAULIN <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="hygiene_and_nutrition_field"
                                               value="HYGIENE_AND_NUTRITION_CHECKLIST.GRANARY"/> GRANARY <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="hygiene_and_nutrition_field"
                                               value="HYGIENE_AND_NUTRITION_CHECKLIST.PAPYRUS_MAT"/> PAPYRUS MAT <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="hygiene_and_nutrition_field"
                                               value="HYGIENE_AND_NUTRITION_CHECKLIST.EARTH_FLOOR"/> EARTH FLOOR <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="hygiene_and_nutrition_field"
                                               value="HYGIENE_AND_NUTRITION_CHECKLIST.DATE_CHECKED"/> DATE CHECKED <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="hygiene_and_nutrition_field"
                                               value="HYGIENE_AND_NUTRITION_CHECKLIST.STAFF"/> STAFF <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="hygiene_and_nutrition_field"
                                               value="HYGIENE_AND_NUTRITION_CHECKLIST.DATE_RECORDED"/> DATE RECORDED
                                        <br>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

            <div id="complex_table_fields" style="display: none; clear: both;">

                <div class="row">
                    <div id="complex_parish_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>PARISH</th>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" name="tables_field" id="tables_field" class="parish_name"
                                           value="PARISH.PARISH"/> Parish<br>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div id="complex_village_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>VILLAGE</th>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" name="tables_field" id="tables_field" class="village_name"
                                           value="VILLAGE.VILLAGE"/> Parish<br>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div id="production_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>LIVELIHOOD CATEGORIES</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12">
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="livelihood_category_field"
                                               value="LIVELIHOODGROUPCATEGORIES.CATEGORYNAME"/> CATEGORY NAME
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div id="fish_farming_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>VULNERABILITIES</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12">
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="livelihood_category_field"/> CATEGORY NAME
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div id="farming_problems_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>MEMBERSHIP</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12">
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Name<br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Sex <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Vulnerability <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Title <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Date of birth <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Group <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Parish <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Village <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Date of Joining <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Telephone <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field" disabled/> Membership Id <br>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div id="misean_cara_technology_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>MEMBERSHIP</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12">
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Name<br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Sex <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Vulnerability <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Title <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Date of birth <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Group <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Parish <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Village <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Date of Joining <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Telephone <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field" disabled/> Membership Id <br>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div id="change_in_marketing_knowledge_fields" class="col-md-3" style="display: none;">
                        <table class="table table-bordered">
                            <tr>
                                <th>MEMBERSHIP</th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12">
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Name<br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Sex <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Vulnerability <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Title <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Date of birth <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Group <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Parish <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Village <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Date of Joining <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field"/> Telephone <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="membership_field" disabled/> Membership Id <br>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <div class="row" id="criteria_selection" style="display: none;">
        <hr>
        <div class="col-md-12">
            <h5>Set Criteria / Conditions</h5>
        </div>
        <hr>
        <div class="col-md-12"><p>&nbsp;</p>

            <div class="row">

                <div class="col-md-4" id="livelihood_groups_criteria" style="display: none;">

                    <table class="table table-bordered">
                        <tr>
                            <th colspan="2">LIVELIHOOD GROUPS</th>
                        </tr>
                        <tr>
                            <td>Name of the Group</td>
                            <td><input type="text" name="name_criterion" id="name_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>Location</td>
                            <td><input type="text" name="location_criterion" id="location_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>Date of Registration</td>
                            <td><input type="text" name="registration_date_criterion" id="registration_date_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>Group ID</td>
                            <td><input type="text" name="group_id_criterion" id="group_id_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>Group Type</td>
                            <td><input type="text" name="group_type_criterion" id="group_type_criterion"
                                       class="form-control"/></td>
                        </tr>
                    </table>

                </div>

                <div class="col-md-4" id="membership_criteria" style="display: none;">

                    <table class="table table-bordered">
                        <tr>
                            <th colspan="2">MEMBERSHIP</th>
                        </tr>
                        <tr>
                            <td>NAME</td>
                            <td><input type="text" name="membername_criterion" id="membername_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>SEX</td>
                            <td><input type="text" name="membersex_criterion" id="membersex_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>VULNERABILITY</td>
                            <td><input type="text" name="membervulnerability_criterion"
                                       id="membervulnerability_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>TITLE</td>
                            <td><input type="text" name="membertitle_criterion" id="membertitle_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>DATE OF BIRTH</td>
                            <td><input type="text" name="memberdateofbirth_criterion" id="memberdateofbirth_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>GROUPS</td>
                            <td><input type="text" name="membergroup_criterion" id="membergroup_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>PARISH</td>
                            <td><input type="text" name="memberparish_criterion" id="memberparish_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>VILLAGE</td>
                            <td><input type="text" name="membervillage_criterion" id="membervillage_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>DATE OF JOINING</td>
                            <td><input type="text" name="memberdateofjoining_criterion"
                                       id="memberdateofjoining_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>TELEPHONE</td>
                            <td><input type="text" name="membertelephone_criterion" id="membertelephone_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>MEMBERSHIP ID</td>
                            <td><input type="text" name="membershipid_criterion" id="membershipid_criterion"
                                       class="form-control"/></td>
                        </tr>
                    </table>

                </div>

                <div class="col-md-4" id="children_criteria" style="display: none;">

                    <table class="table table-bordered">
                        <tr>
                            <th colspan="2">CHILDREN</th>
                        </tr>
                        <tr>
                            <td>NAME</td>
                            <td><input type="text" name="childname_criterion" id="childname_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>SEX</td>
                            <td><input type="text" name="childsex_criterion" id="childsex_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>VULNERABILITY</td>
                            <td><input type="text" name="childvulnerability_criterion" id="childvulnerability_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>DATE OF BIRTH</td>
                            <td><input type="text" name="chillddateofbirth_criterion" id="chillddateofbirth_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>PARISH</td>
                            <td><input type="text" name="childparish_criterion" id="childparish_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>VILLAGE</td>
                            <td><input type="text" name="childvillage_criterion" id="childvillage_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>PROJECT</td>
                            <td><input type="text" name="children_project_criterion" id="children_project_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>DATE OF JOINING</td>
                            <td><input type="text" name="childdateofjoining_criterion" id="childdateofjoining_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>MOTHER</td>
                            <td><input type="text" name="childmother_criterion" id="childmother_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>FATHER</td>
                            <td><input type="text" name="childfather_criterion" id="childfather_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>GUARDIAN</td>
                            <td><input type="text" name="childguardian_criterion" id="childguardian_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>CHILD ID</td>
                            <td><input type="text" name="childid_criterion" id="childid_criterion"
                                       class="form-control"/></td>
                        </tr>
                    </table>

                </div>

                <div class="col-md-4" id="assessment_1_criteria" style="display: none;">

                    <table class="table table-bordered">
                        <tr>
                            <th colspan="2">ASSESSMENT 1 RECORDS</th>
                        </tr>
                        <tr>
                            <td>COUNTY</td>
                            <td><input type="text" name="assessment_1_county_criterion"
                                       id="assessment_1_county_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>SUBCOUNTY</td>
                            <td><input type="text" name="assessment_1_subcounty_criterion"
                                       id="assessment_1_subcounty_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>PARISH</td>
                            <td><input type="text" name="assessment_1_parish_criterion"
                                       id="assessment_1_parish_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>VILLAGE</td>
                            <td><input type="text" name="assessment_1_village_criterion"
                                       id="assessment_1_village_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>HEALTH CENTRE</td>
                            <td><input type="text" name="assessment_1_healthcentre_criterion"
                                       id="assessment_1_healthcentre_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>DATE ENTERED</td>
                            <td><input type="text" name="assessment_1_dateentered_criterion"
                                       id="assessment_1_dateentered_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>CBR NAME</td>
                            <td><input type="text" name="assessment_1_cbrname_criterion"
                                       id="assessment_1_cbrname_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>CHILD ID</td>
                            <td><input type="text" name="assessment_1_childid_criterion"
                                       id="assessment_1_childid_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>DATE OF BIRTH</td>
                            <td><input type="text" name="assessment_1_dateofbirth_criterion"
                                       id="assessment_1_dateofbirth_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>SEX</td>
                            <td><input type="text" name="assessment_1_sex_criterion" id="assessment_1_sex_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>DISABILITY TYPE</td>
                            <td><input type="text" name="assessment_1_disabilitytype_criterion"
                                       id="assessment_1_disabilitytype_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>WHERE THE CHILD LIVES</td>
                            <td><input type="text" name="assessment_1_wherechildlives_criterion"
                                       id="assessment_1_wherechildlives_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>OTHER SPECIFIED PLACE</td>
                            <td><input type="text" name="assessment_1_otherspecifiedplace_criterion"
                                       id="assessment_1_otherspecifiedplace_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>OTHER DISABLED CHILDREN</td>
                            <td><input type="text" name="assessment_1_otherdisabledchildren_criterion"
                                       id="assessment_1_otherdisabledchildren_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>NUMBER OF OTHER DISABLED CHILDREN</td>
                            <td><input type="text" name="assessment_1_numberofotherdisabledchildren_criterion"
                                       id="assessment_1_numberofotherdisabledchildren_criterion" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>ABLE TO PROVIDE BASIC NEEDS</td>
                            <td><input type="text" name="assessment_1_abletoprovidebasicneeds_criterion"
                                       id="assessment_1_abletoprovidebasicneeds_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>EXPLANATION FOR INABILITY TO PROVIDE BASIC NEEDS</td>
                            <td><input type="text"
                                       name="assessment_1_explanationforinabilitytoprovidebasicneeds_criterion"
                                       id="assessment_1_explanationforinabilitytoprovidebasicneeds_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>DISABILITY DESCRIPTION</td>
                            <td><input type="text" name="assessment_1_disabilitydescription_criterion"
                                       id="assessment_1_disabilitydescription_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>CHILD USES MEDICINE</td>
                            <td><input type="text" name="assessment_1_childusesmedicine_criterion"
                                       id="assessment_1_childusesmedicine_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>NAME OF MEDICINE</td>
                            <td><input type="text" name="assessment_1_nameofmedicine_criterion"
                                       id="assessment_1_nameofmedicine_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>CHILD HAS_FITS</td>
                            <td><input type="text" name="assessment_1_childhasfits_criterion"
                                       id="assessment_1_childhasfits_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>NUMBER OF FITS</td>
                            <td><input type="text" name="assessment_1_numberoffits_criterion"
                                       id="assessment_1_numberoffits_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>LIMBS MOVE WELL</td>
                            <td><input type="text" name="assessment_1_limbsmovewell_criterion"
                                       id="assessment_1_limbsmovewell_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>LIMBS THAT MOVE WELL</td>
                            <td><input type="text" name="assessment_1_limbsthatmovewell_criterion"
                                       id="assessment_1_limbsthatmovewell_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>CHILD USES AIDS</td>
                            <td><input type="text" name="assessment_1_childusesaids_criterion"
                                       id="assessment_1_childusesaids_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>TYPE OF AIDS USED</td>
                            <td><input type="text" name="assessment_1_typeofaidsused_criterion"
                                       id="assessment_1_typeofaidsused_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>CHILD TALKS</td>
                            <td><input type="text" name="assessment_1_childtalks_criterion"
                                       id="assessment_1_childtalks_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>CHILD SEES</td>
                            <td><input type="text" name="assessment_1_childsees_criterion"
                                       id="assessment_1_childsees_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>MENTAL CAPACITY</td>
                            <td><input type="text" name="assessment_1_mentalcapacity_criterion"
                                       id="assessment_1_mentalcapacity_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>EATS AND DRINKS</td>
                            <td><input type="text" name="assessment_1_eatsandddrinks_criterion"
                                       id="assessment_1_eatsandddrinks_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>WASHES AND DRESSES</td>
                            <td><input type="text" name="assessment_1_washesanddresses_criterion"
                                       id="assessment_1_washesanddresses_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>TOILET ACTIVITIES</td>
                            <td><input type="text" name="assessment_1_toiletactivities_criterion"
                                       id="assessment_1_toiletactivities_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>HOW THE CHILD MOVES</td>
                            <td><input type="text" name="assessment_1_howchildmoves_criterion"
                                       id="assessment_1_howchildmoves_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>CHILD PLAYS WITH OTHERS</td>
                            <td><input type="text" name="assessment_1_childplayswithothers_criterion"
                                       id="assessment_1_childplayswithothers_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>HELPS IN HOUSEHOLD CORES</td>
                            <td><input type="text" name="assessment_1_helpsinhouseholdcores_criterion"
                                       id="assessment_1_helpsinhouseholdcores_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>ACCEPTED BY FAMILY AND LOVED</td>
                            <td><input type="text" name="assessment_1_acceptedbyfamilyandloved_criterion"
                                       id="assessment_1_acceptedbyfamilyandloved_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>ACCEPTED BY COMMUNITY</td>
                            <td><input type="text" name="assessment_1_acceptedbycommunity_criterion"
                                       id="assessment_1_acceptedbycommunity_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>GOES TO SCHOOL</td>
                            <td><input type="text" name="assessment_1_goestoschool_criterion"
                                       id="assessment_1_goestoschool_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>SCHOOL</td>
                            <td><input type="text" name="assessment_1_school_criterion"
                                       id="assessment_1_school_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>COMMENT</td>
                            <td><input type="text" name="assessment_1_comment_criterion"
                                       id="assessment_1_comment_criterion" class="form-control"/></td>
                        </tr>
                    </table>

                </div>

                <div class="col-md-4" id="assessment_2_criteria" style="display: none;">

                    <table class="table table-bordered">
                        <tr>
                            <th colspan="2">ASSESSMENT 2 RECORDS</th>
                        </tr>
                        <tr>
                            <td>CHILD</td>
                            <td><input type="text" name="assessment_2_child_criterion" id="assessment_2_child_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>DATE OF FIRST SCREENING</td>
                            <td><input type="text" name="assessment_2_dateoffirstscreening_criterion"
                                       id="assessment_2_dateoffirstscreening_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>IDENTIFIED BY</td>
                            <td><input type="text" name="assessment_2_identifiedby_criterion"
                                       id="assessment_2_identifiedby_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>ASSESSED BY</td>
                            <td><input type="text" name="assessment_2_assessedby_criterion"
                                       id="assessment_2_assessedby_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>DISTANCE</td>
                            <td><input type="text" name="assessment_2_distance_criterion"
                                       id="assessment_2_distance_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>NEAREST HEALTH CENTRE</td>
                            <td><input type="text" name="assessment_2_nearesthealthcentre_criterion"
                                       id="assessment_2_nearesthealthcentre_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>VENUE FOR SCREENING</td>
                            <td><input type="text" name="assessment_2_venueforscreening_criterion"
                                       id="assessment_2_venueforscreening_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>MEDICAL HISTORY</td>
                            <td><input type="text" name="assessment_2_medicalhistory_criterion"
                                       id="assessment_2_medicalhistory_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>FINDINGS</td>
                            <td><input type="text" name="assessment_2_findings_criterion"
                                       id="assessment_2_findings_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>DISABILITY</td>
                            <td><input type="text" name="assessment_2_disability_criterion"
                                       id="assessment_2_disability_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>RECOMMENDATION</td>
                            <td><input type="text" name="assessment_2_recommendation_criterion"
                                       id="assessment_2_recommendation_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>SCREENED BY</td>
                            <td><input type="text" name="assessment_2_screenedby_criterion"
                                       id="assessment_2_screenedby_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>DATE ENTERED</td>
                            <td><input type="text" name="assessment_2_dateentered_criterion"
                                       id="assessment_2_dateentered_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>TITLE</td>
                            <td><input type="text" name="assessment_2_title_criterion" id="assessment_2_title_criterion"
                                       class="form-control"/></td>
                        </tr>
                    </table>

                </div>

                <div class="col-md-4" id="visitation_criteria" style="display: none;">

                    <table class="table table-bordered">
                        <tr>
                            <th colspan="2">VISITATIONS</th>
                        </tr>
                        <tr>
                            <td>DATE OF VISIT</td>
                            <td><input type="text" name="visitation_dateofvisit_criterion"
                                       id="visitation_dateofvisit_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>KIND OF VISIT</td>
                            <td><input type="text" name="visitation_kindofvisit_criterion"
                                       id="visitation_kindofvisit_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>CHILD ID VISITED</td>
                            <td><input type="text" name="visitation_childidvisited_criterion"
                                       id="visitation_childidvisited_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>VILLAGE</td>
                            <td><input type="text" name="visitation_village_criterion" id="visitation_village_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                        <tr>
                            <td>PARISH</td>
                            <td><input type="text" name="visitation_parish_criterion" id="visitation_parish_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>SUBCOUNTY</td>
                            <td><input type="text" name="visitation_subcounty_criterion"
                                       id="visitation_subcounty_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>ACTIVITY CARRIED OUT</td>
                            <td><input type="text" name="visitation_activitycarriedout_criterion"
                                       id="visitation_activitycarriedout_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>NEXT VISIT ACTIVITY</td>
                            <td><input type="text" name="visitation_nextvisitactivity_criterion"
                                       id="visitation_nextvisitactivity_criterion" class="form-control"/></td>
                        </tr>
                        <td>WACFO STAFF</td>
                        <td><input type="text" name="visitation_wacfostaff_criterion"
                                   id="visitation_wacfostaff_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>COMMENT</td>
                            <td><input type="text" name="visitation_comment_criterion" id="visitation_comment_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>NEXT VISIT DATE</td>
                            <td><input type="text" name="visitation_nextvisitdate_criterion"
                                       id="visitation_nextvisitdate_criterion" class="form-control"/></td>
                        </tr>
                    </table>

                </div>

                <div class="col-md-4" id="department_criteria" style="display: none;">

                    <table class="table table-bordered">
                        <tr>
                            <th colspan="2">DEPARTMENT</th>
                        </tr>
                        <tr>
                            <td>NAME</td>
                            <td><input type="text" name="department_name_criterion" id="department_name_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>PREFIX</td>
                            <td><input type="text" name="department_prefix_criterion" id="department_prefix_criterion"
                                       class="form-control"/></td>
                        </tr>
                    </table>

                </div>

                <div class="col-md-4" id="staff_criteria" style="display: none;">

                    <table class="table table-bordered">
                        <tr>
                            <th colspan="2">STAFF</th>
                        </tr>
                        <tr>
                            <td>NAME</td>
                            <td><input type="text" name="staff_name_criterion" id="staff_name_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>ROLE</td>
                            <td><input type="text" name="staff_role_criterion" id="staff_role_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>DEPARTMENT</td>
                            <td><input type="text" name="staff_department_criterion" id="staff_department_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>EMAIL ADDRESS</td>
                            <td><input type="text" name="staff_emailaddress_criterion" id="staff_emailaddress_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>TELEPHONE</td>
                            <td><input type="text" name="staff_telephone_criterion" id="staff_telephone_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>STAFF ID</td>
                            <td><input type="text" name="staff_staffid_criterion" id="staff_staffid_criterion"
                                       class="form-control"/></td>
                        </tr>
                    </table>

                </div>

                <div class="col-md-4" id="courses_and_topics_criteria" style="display: none;">

                    <table class="table table-bordered">
                        <tr>
                            <th colspan="2">COURSES AND TOPICS</th>
                        </tr>
                        <tr>
                            <td>COURSE</td>
                            <td><input type="text" name="courses_criterion" id="courses_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>TOPIC</td>
                            <td><input type="text" name="topics_criterion" id="topics_criterion" class="form-control"/>
                            </td>
                        </tr>
                    </table>

                </div>

                <div class="col-md-4" id="training_criteria" style="display: none;">

                    <table class="table table-bordered">
                        <tr>
                            <th colspan="2">TRAININGS</th>
                        </tr>
                        <tr>
                            <td>DATE OF TRAINING</td>
                            <td><input type="text" name="training_dateoftraining_criterion"
                                       id="training_dateoftraining_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>COURSE</td>
                            <td><input type="text" name="training_course_criterion" id="training_course_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>TOPIC</td>
                            <td><input type="text" name="training_topic_criterion" id="training_topic_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>OBJECTIVE</td>
                            <td><input type="text" name="training_objective_criterion" id="training_objective_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>VENUE</td>
                            <td><input type="text" name="training_venue_criterion" id="training_venue_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>GROUP INTENDED</td>
                            <td><input type="text" name="training_groupintended_criterion"
                                       id="training_groupintended_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>CONDUCTED BY</td>
                            <td><input type="text" name="training_conductedby_criterion"
                                       id="training_conductedby_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>IS STAFF</td>
                            <td><input type="text" name="training_isstaff_criterion" id="training_isstaff_criterion"
                                       class="form-control"/></td>
                        </tr>
                    </table>

                </div>

                <div class="col-md-4" id="attendance_criteria" style="display: none;">

                    <table class="table table-bordered">
                        <tr>
                            <th colspan="2">TRAINING ATTENDANCE</th>
                        </tr>
                        <tr>
                            <td>ATTENDANT</td>
                            <td><input type="text" name="training_attendance_atttendant_criterion"
                                       id="training_attendance_attendant_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>TYPE</td>
                            <td><input type="text" name="training_attendance_type_criterion"
                                       id="training_attendance_type_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>ADDRESS</td>
                            <td><input type="text" name="training_attendance_address_criterion"
                                       id="training_attendance_address_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>CONTACT</td>
                            <td><input type="text" name="training_attendance_contact_criterion"
                                       id="training_attendance_contact_criterion" class="form-control"/></td>
                        </tr>
                    </table>


                </div>

                <div class="col-md-4" id="training_outcome_criteria" style="display: none;">

                    <table class="table table-bordered">
                        <tr>
                            <th colspan="2">TRAINING OUTCOME</th>
                        </tr>
                        <tr>
                            <td>OUTCOME</td>
                            <td><input type="text" name="training_outcome_outcome_criterion"
                                       id="training_outcome_outcome_criterion" class="form-control"/></td>
                        </tr>
                    </table>

                </div>

                <div class="col-md-4" id="monitoring_visit_criteria" style="display: none;">

                    <table class="table table-bordered">
                        <tr>
                            <th colspan="2">MONITORING VISITS</th>
                        </tr>
                        <tr>
                            <td>STAFF ID</td>
                            <td><input type="text" name="monitoring_staffid_criterion" id="monitoring_staffid_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>DATE OF VISIT</td>
                            <td><input type="text" name="monitoring_dateofvisit_criterion"
                                       id="monitoring_dateofvisit_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>VISIT TYPE</td>
                            <td><input type="text" name="monitoring_visittype_criterion"
                                       id="monitoring_visittype_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>GENERAL COMMENTS</td>
                            <td><input type="text" name="monitoring_generalcomments_criterion"
                                       id="monitoring_generalcomments_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>TRACK ID</td>
                            <td><input type="text" name="monitoring_trackid_criterion" id="monitoring_trackid_criterion"
                                       class="form-control"/></td>
                        </tr>
                    </table>

                </div>

                <div class="col-md-4" id="misean_cara_baseline_survey_criteria" style="display: none;">

                    <table class="table table-bordered">
                        <tr>
                            <th colspan="2">MISEAN CARA BASELINE SURVEY ECONOMIC SECURITY BEFORE PROJECT INTERVENTION
                            </th>
                        </tr>
                        <tr>
                            <td>GRANTEE</td>
                            <td><input type="text" name="misean_cara_grantee_criterion"
                                       id="misean_cara_grantee_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>GROUP ID</td>
                            <td><input type="text" name="misean_cara_groupid_criterion"
                                       id="misean_cara_groupid_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>DISTRICT</td>
                            <td><input type="text" name="misean_cara_district_criterion"
                                       id="misean_cara_district_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>COUNTY</td>
                            <td><input type="text" name="misean_cara_county_criterion" id="misean_cara_county_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>SUBCOUNTY</td>
                            <td><input type="text" name="misean_cara_subcounty_criterion"
                                       id="misean_cara_subcounty_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>PWD</td>
                            <td><input type="text" name="misean_cara_pwd_criterion" id="misean_cara_pwd_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>CHH</td>
                            <td><input type="text" name="misean_cara_chh_criterion" id="misean_cara_chh_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>ORPHAN</td>
                            <td><input type="text" name="misean_cara_orphans_criterion"
                                       id="misean_cara_orphans_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>HIV</td>
                            <td><input type="text" name="misean_cara_hiv_criterion" id="misean_cara_hiv_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>PWD IN SCHOOL</td>
                            <td><input type="text" name="misean_cara_pwdinschool_criterion"
                                       id="misean_cara_pwdinschool_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>CHH IN SCHOOL</td>
                            <td><input type="text" name="misean_cara_chhinschool_criterion"
                                       id="misean_cara_chhinschool_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>ORPHANS IN SCHOOL</td>
                            <td><input type="text" name="misean_cara_orphansinschool_criterion"
                                       id="misean_cara_orphansinschool_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>CHILDREN WITH HIV IN SCHOOL</td>
                            <td><input type="text" name="misean_cara_childrenwithhiv_criterion"
                                       id="misean_cara_childrenwithhiv_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>NORMAL IN SCHOOL</td>
                            <td><input type="text" name="misean_cara_normalinschool_criterion"
                                       id="misean_cara_normalinschool_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>MEALS PER DAY</td>
                            <td><input type="text" name="misean_cara_mealsperday_criterion"
                                       id="misean_cara_mealsperday_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>MEDICAL TREATMENT</td>
                            <td><input type="text" name="misean_cara_medicaltreatment_criterion"
                                       id="misean_cara_medicaltreatment_criterion" class="form-control"/></td>
                        </tr>
                    </table>

                </div>

                <div class="col-md-4" id="production_criteria" style="display: none;">

                    <table class="table table-bordered">
                        <tr>
                            <th colspan="2">CROP /VEGETABLE PRODUCTION</th>
                        </tr>
                        <tr>
                            <td>INDIVIDUAL</td>
                            <td><input type="text" name="production_individual_criterion"
                                       id="production_individual_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>FOOD STUFF</td>
                            <td><input type="text" name="production_foodstuff_criterion"
                                       id="production_foodstuff_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>CATEGORY</td>
                            <td><input type="text" name="production_category_criterion"
                                       id="production_category_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>ACRES PLANTED</td>
                            <td><input type="text" name="production_acresplanted_criterion"
                                       id="production_acresplanted_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>YIELD OBTAINED</td>
                            <td><input type="text" name="production_yieldobtained_criterion"
                                       id="production_yieldobtained_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>QUANTITY SOLD</td>
                            <td><input type="text" name="production_quantitysold_criterion"
                                       id="production_quantitysold_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>INCOME</td>
                            <td><input type="text" name="production_income_criterion" id="production_income_criterion"
                                       class="form-control"/></td>
                        </tr>
                    </table>

                </div>

                <div class="col-md-4" id="fish_farming_criteria" style="display: none;">

                    <table class="table table-bordered">
                        <tr>
                            <th colspan="2">FISH FARMING</th>
                        </tr>
                        <tr>
                            <td>INDIVIDUAL ID</td>
                            <td><input type="text" name="fishing_individual_id_criterion"
                                       id="fishing_individual_id_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>SIZE OF POND</td>
                            <td><input type="text" name="fishing_size_of_pond_criterion"
                                       id="fishing_size_of_pond_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>NUMBER OF FISH HARVESTED</td>
                            <td><input type="text" name="fishing_number_of_fish_criterion"
                                       id="fishing_number_of_fish_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>QUANTITY (KG)</td>
                            <td><input type="text" name="fishing_quantity_criterion" id="fishing_quantity_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>INCOME</td>
                            <td><input type="text" name="fishing_income_criterion" id="fishing_income_criterion"
                                       class="form-control"/></td>
                        </tr>
                    </table>

                </div>

                <div class="col-md-4" id="farming_problems_criteria" style="display: none;">

                    <table class="table table-bordered">
                        <tr>
                            <th colspan="2">problems affecting vegetable/crop production and challenges on the marketing
                                aspect
                            </th>
                        </tr>
                        <tr>
                            <td>GROUP ID</td>
                            <td><input type="text" name="challenges_group_id_criterion"
                                       id="challenges_group_id_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>VEGETABLE PRODUCTION PROBLEMS</td>
                            <td><input type="text" name="challenges_vegetable_production_problems_criterion"
                                       id="challenges_vegetable_production_problems_criterion" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>VEGETABLE MARKETING PROBLEMS</td>
                            <td><input type="text" name="challenges_vegetable_marketing_problems_criterion"
                                       id="challenges_vegetable_marketing_problems_criterion" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>CROP PRODUCTION PROBLEMS</td>
                            <td><input type="text" name="challenges_crop_production_problems_criterion"
                                       id="challenges_crop_production_problems_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>CROP MARKETING PROBLEMS</td>
                            <td><input type="text" name="challenges_crop_marketing_problems_criterion"
                                       id="challenges_crop_marketing_problems_criterion" class="form-control"/></td>
                        </tr>
                    </table>

                </div>

                <div class="col-md-4" id="misean_cara_technology_criteria" style="display: none;">

                    <table class="table table-bordered">
                        <tr>
                            <th colspan="2">Misean Cara beneficiaries adopting new technologies in vegetables and crop
                                production
                            </th>
                        </tr>
                        <tr>
                            <td>INDIVIDUAL ID</td>
                            <td><input type="text" name="misean_cara_technology_individual_id_criterion"
                                       id="misean_cara_technology_individual_id_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>USED IMPROVED SEEDS</td>
                            <td><input type="text" name="misean_cara_technology_imprived_seeds_criterion"
                                       id="misean_cara_technology_imprived_seeds_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>USED UNDERGROUND WATER</td>
                            <td><input type="text" name="misean_cara_technology_underground_water_criterion"
                                       id="misean_cara_technology_underground_water_criterion" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>USED PESTICIDES</td>
                            <td><input type="text" name="misean_cara_technology_pesticide_criterion"
                                       id="misean_cara_technology_pesticide_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>USED FARM IMPLEMENTS</td>
                            <td><input type="text" name="misean_cara_technology_farm_implements_criterion"
                                       id="misean_cara_technology_farm_implements_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>IMPROVED POST HARVEST HANDLING</td>
                            <td><input type="text"
                                       name="misean_cara_technology_improved_post_harvest_handling_criterion"
                                       id="misean_cara_technology_improved_post_harvest_handling_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>USED ROW PLANTING</td>
                            <td><input type="text" name="misean_cara_technology_row_planting_criterion"
                                       id="misean_cara_technology_row_planting_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>OTHER TECHNIQUES USED</td>
                            <td><input type="text" name="misean_cara_technology_other_techniques_criterion"
                                       id="misean_cara_technology_other_techniques_criterion" class="form-control"/>
                            </td>
                        </tr>
                    </table>

                </div>

                <div class="col-md-4" id="change_in_marketing_knowledge_criteria" style="display: none;">

                    <table class="table table-bordered">
                        <tr>
                            <th colspan="2">Change in People's knowledge on Marketing and Processing</th>
                        </tr>
                        <tr>
                            <td>INDIVIDUAL ID</td>
                            <td><input type="text" name="marketing_individual_id_criterion"
                                       id="marketing_individual_id_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>SELLS ALL VEGETABLES</td>
                            <td><input type="text" name="marketing_sells_all_vegetables_criterion"
                                       id="marketing_sells_all_vegetables_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>VEGETABLE MARKET PLACE</td>
                            <td><input type="text" name="marketing_vegetable_market_place_criterion"
                                       id="marketing_vegetable_market_place_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>SELLS ALL CROPS</td>
                            <td><input type="text" name="marketing_sells_all_crops_criterion"
                                       id="marketing_sells_all_crops_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>CROP MARKET PLACE</td>
                            <td><input type="text" name="marketing_crop_place_criterion"
                                       id="marketing_crop_place_criterion" class="form-control"/></td>
                        </tr>
                    </table>

                </div>

                <div class="col-md-6" id="pilot_studies_criteria" style="display: none;">

                    <table class="table table-bordered">
                        <tr>
                            <th colspan="2">LIVELIHOOD AND NUTRITION HOUSEHOLD SURVEY</th>
                        </tr>
                        <tr>
                            <td>INTERVIEWER</td>
                            <td><input type="text" name="pilot_studies_interviewer_criterion"
                                       id="pilot_studies_interviewer_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>DATE OF INTERVIEW</td>
                            <td><input type="text" name="pilot_studies_date_of_interview_criterion"
                                       id="pilot_studies_date_of_interview_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>LOCATION</td>
                            <td><input type="text" name="pilot_studies_location_criterion"
                                       id="pilot_studies_location_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>RESPONDENT</td>
                            <td><input type="text" name="pilot_studies_respondent_criterion"
                                       id="pilot_studies_respondent_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>HEAD OF THE HOUSEHOLD</td>
                            <td><input type="text" name="pilot_studies_head_of_household_criterion"
                                       id="pilot_studies_head_of_household_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>FEMALES UNDER 5</td>
                            <td><input type="text" name="pilot_studies_females_under_5_criterion"
                                       id="pilot_studies_females_under_5_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>FEMALES BETWEEN 6 AND 18</td>
                            <td><input type="text" name="pilot_studies_females_between_6_and_18_criterion"
                                       id="pilot_studies_females_between_6_and_18_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>MALES UNDER 5</td>
                            <td><input type="text" name="pilot_studies_males_under_5_criterion"
                                       id="pilot_studies_males_under_5_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>MALES BETWEEN 6 AND 18</td>
                            <td><input type="text" name="pilot_studies_males_between_6_and_18_criterion"
                                       id="pilot_studies_males_between_6_and_18_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>MALES BETWEEN 18 AND 45</td>
                            <td><input type="text" name="pilot_studies_males_between_18_and_45_criterion"
                                       id="pilot_studies_males_between_18_and_45_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>FEMALES BETWEEN 18 AND 45</td>
                            <td><input type="text" name="pilot_studies_females_between_18_and_45_criterion"
                                       id="pilot_studies_females_between_18_and_45_criterion" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>LENGTH OF TIME INVOLVED IN PROJECTS</td>
                            <td><input type="text" name="pilot_studies_length_of_time_involed_in_projects_criterion"
                                       id="pilot_studies_length_of_time_involed_in_projects_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>DAILY HOUSEHOLD INCOME NOW</td>
                            <td><input type="text" name="pilot_studies_daily_household_income_now_criterion"
                                       id="pilot_studies_daily_household_income_now_criterion" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>DAILY HOUSEHOLD INCOME ONE YEAR AGO</td>
                            <td><input type="text" name="pilot_studies_daily_household_income_one_year_ago_criterion"
                                       id="pilot_studies_daily_household_income_one_year_ago_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>NUMBER OF SOURCES OF INCOME NOW</td>
                            <td><input type="text" name="pilot_studies_number_of_sources_of_income_now_criterion"
                                       id="pilot_studies_number_of_sources_of_income_now_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>SOURCES OF INCOME NOW</td>
                            <td><input type="text" name="pilot_studies_sources_of_income_now_criterion"
                                       id="pilot_studies_sources_of_income_now_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>NUMBER OF SOURCES OF INCOME ONE YEAR AGO</td>
                            <td><input type="text"
                                       name="pilot_studies_number_of_sources_of_income_one_year_ago_criterion"
                                       id="pilot_studies_number_of_sources_of_income_one_year_ago_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>INCOME NOW ADDITIONAL NOTES</td>
                            <td><input type="text" name="pilot_studies_income_now_additional_notes_criterion"
                                       id="pilot_studies_income_now_additional_notes_criterion" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>SOURCES OF INCOME 1 YEAR AGO</td>
                            <td><input type="text" name="pilot_studies_sources_of_income_1_year_ago_criterion"
                                       id="pilot_studies_sources_of_income_1_year_ago_criterion" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>INCOME ONE YEAR AGO ADDITIONAL NOTES</td>
                            <td><input type="text" name="pilot_studies_income_one_year_ago_additional_notes_criterion"
                                       id="pilot_studies_income_one_year_ago_additional_notes_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>INCREASE IN DIVERSITY OF SOURCES OF INCOME</td>
                            <td><input type="text"
                                       name="pilot_studies_increase_in_diversity_of_sources_of_income_criterion"
                                       id="pilot_studies_increase_in_diversity_of_sources_of_income_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>MEDICAL EXPENSE</td>
                            <td><input type="text" name="pilot_studies_medical_expense_criterion"
                                       id="pilot_studies_medical_expense_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>EDUCATION EXPENSE</td>
                            <td><input type="text" name="pilot_studies_education_expense_criterion"
                                       id="pilot_studies_education_expense_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>HOUSE EXPENSE</td>
                            <td><input type="text" name="pilot_studies_house_expense_criterion"
                                       id="pilot_studies_house_expense_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>CLOTHES EXPENSE</td>
                            <td><input type="text" name="pilot_studies_clothes_expense_criterion"
                                       id="pilot_studies_clothes_expense_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>FOOD EXPENSE</td>
                            <td><input type="text" name="pilot_studies_food_expense_criterion"
                                       id="pilot_studies_food_expense_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>HOUSEHOLD ASSETS</td>
                            <td><input type="text" name="pilot_studies_household_assets_criterion"
                                       id="pilot_studies_household_assets_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>OTHER EXPENSES</td>
                            <td><input type="text" name="pilot_studies_other_expenses_criterion"
                                       id="pilot_studies_other_expenses_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>INCREASE IN HOUSEHOLD ASSETS</td>
                            <td><input type="text" name="pilot_studies_increase_in_household_assets_criterion"
                                       id="pilot_studies_increase_in_household_assets_criterion" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>LAND INCREASE</td>
                            <td><input type="text" name="pilot_studies_land_increase_criterion"
                                       id="pilot_studies_land_increase_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>LAND SIZE</td>
                            <td><input type="text" name="pilot_studies_land_size_criterion"
                                       id="pilot_studies_land_size_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>PERMANENT HOUSE</td>
                            <td><input type="text" name="pilot_studies_permanent_house_criterion"
                                       id="pilot_studies_permanent_house_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>SEMI PERMANENT HOUSE</td>
                            <td><input type="text" name="pilot_studies_semi_permanent_house_criterion"
                                       id="pilot_studies_semi_permanent_house_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>MUD HOUSE</td>
                            <td><input type="text" name="pilot_studies_mud_house_criterion"
                                       id="pilot_studies_mud_house_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>RADIO OR TV</td>
                            <td><input type="text" name="pilot_studies_radio_or_tv_criterion"
                                       id="pilot_studies_radio_or_tv_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>MOBILE PHONE</td>
                            <td><input type="text" name="pilot_studies_mobile_phone__criterion"
                                       id="pilot_studies_mobile_phone__criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>AUTOMOTIVE</td>
                            <td><input type="text" name="pilot_studies_automobile_criterion"
                                       id="pilot_studies_automobile_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>BREAKFAST YESTERDAY</td>
                            <td><input type="text" name="pilot_studies_breakfast_yesterday_criterion"
                                       id="pilot_studies_breakfast_yesterday_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>SNACK FOR_BREAKFAST YESTERDAY</td>
                            <td><input type="text" name="pilot_studies_snack_for_breakfast_yesterday_criterion"
                                       id="pilot_studies_snack_for_breakfast_yesterday_criterion" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>LUNCH YESTERDAY</td>
                            <td><input type="text" name="pilot_studies_lunch_yesterday_criterion"
                                       id="pilot_studies_lunch_yesterday_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>SNACK FOR LUNCH YESTERDAY</td>
                            <td><input type="text" name="pilot_studies_snack_for_lunch_yesterday_criterion"
                                       id="pilot_studies_snack_for_lunch_yesterday_criterion" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>DINNER YESTERDAY</td>
                            <td><input type="text" name="pilot_studies_dinner_yesterday_criterion"
                                       id="pilot_studies_dinner_yesterday_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>SNACK FOR DINNER YESTERDAY</td>
                            <td><input type="text" name="pilot_studies_snack_for_dinner_yesterday_criterion"
                                       id="pilot_studies_snack_for_dinner_yesterday_criterion" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>BREAKFAST 1 YEAR AGO</td>
                            <td><input type="text" name="pilot_studies_breakfast_1_year_ago_criterion"
                                       id="pilot_studies_breakfast_1_year_ago_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>SNACK FOR BREAKFAST 1 YEAR AGO</td>
                            <td><input type="text" name="pilot_studies_snack_for_breakfast_1_year_ago_criterion"
                                       id="pilot_studies_snack_for_breakfast_1_year_ago_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>LUNCH 1 YEAR AGO</td>
                            <td><input type="text" name="pilot_studies_lunch_1_year_ago_criterion"
                                       id="pilot_studies_lunch_1_year_ago_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>SNACK FOR LUNCH 1 YEAR AGO</td>
                            <td><input type="text" name="pilot_studies_snack_for_luch_1_year_ago_criterion"
                                       id="pilot_studies_snack_for_luch_1_year_ago_criterion" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>DINNER 1 YEAR_AGO</td>
                            <td><input type="text" name="pilot_studies_dinner_1_year_ago_criterion"
                                       id="pilot_studies_dinner_1_year_ago_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>SNACK FOR DINNER 1 YEAR AGO</td>
                            <td><input type="text" name="pilot_studies_snack_for_dinner_1_year_ago_criterion"
                                       id="pilot_studies_snack_for_dinner_1_year_ago_criterion" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>CEREALS YESTERDAY</td>
                            <td><input type="text" name="pilot_studies_cereals_yesterday_criterion"
                                       id="pilot_studies_cereals_yesterday_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>CEREALS 1 YEAR AGO</td>
                            <td><input type="text" name="pilot_studies_cereals_1_year_ago_criterion"
                                       id="pilot_studies_cereals_1_year_ago_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>VITAMIN A VEGETABLE YESTERDAY</td>
                            <td><input type="text" name="pilot_studies_vitamin_a_vegetable_yesterday_criterion"
                                       id="pilot_studies_vitamin_a_vegetable_yesterday_criterion" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>VITAMIN A VEGETABLE 1 YEAR AGO</td>
                            <td><input type="text" name="pilot_studies_vitamin_a_vegetable_1_year_ago_criterion"
                                       id="pilot_studies_vitamin_a_vegetable_1_year_ago_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>WHITE TUBERS YESTERDAY</td>
                            <td><input type="text" name="pilot_studies_white_tubers_yesterday_criterion"
                                       id="pilot_studies_white_tubers_yesterday_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>WHITE TUBERS 1 YEAR AGO</td>
                            <td><input type="text" name="pilot_studies_white_tubers_1_year_ago_criterion"
                                       id="pilot_studies_white_tubers_1_year_ago_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>DARK GREEN LEAFY VEGETABLES YESTERDAY</td>
                            <td><input type="text" name="pilot_studies_dark_green_leafy_vegetables_yesterday_criterion"
                                       id="pilot_studies_dark_green_leafy_vegetables_yesterday_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>DARK GREEN LEAFY VEGETABLES 1 YEAR AGO</td>
                            <td><input type="text" name="pilot_studies_dark_green_leafy_vegetables_1_year_ago_criterion"
                                       id="pilot_studies_dark_green_leafy_vegetables_1_year_ago_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>OTHER VEGETABLES YESTERDAY</td>
                            <td><input type="text" name="pilot_studies_other_vegetables_yesterday_criterion"
                                       id="pilot_studies_other_vegetables_yesterday_criterion" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>OTHER VEGETABLES 1 YEAR AGO</td>
                            <td><input type="text" name="pilot_studies_other_vegetables_1_year_ago_criterion"
                                       id="pilot_studies_other_vegetables_1_year_ago_criterion" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>VITAMIN A FRUITS YESTERDAY</td>
                            <td><input type="text" name="pilot_studies_vitamin_a_fruits_yesterday_criterion"
                                       id="pilot_studies_vitamin_a_fruits_yesterday_criterion" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>VITAMIN A FRUITS 1 YEAR_AGO</td>
                            <td><input type="text" name="pilot_studies_vitamin_a_fruits_1_year_ago_criterion"
                                       id="pilot_studies_vitamin_a_fruits_1_year_ago_criterion" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>OTHER FRUITS YESTERDAY</td>
                            <td><input type="text" name="pilot_studies_other_fruits_yesterday_criterion"
                                       id="pilot_studies_other_fruits_yesterday_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>OTHER FRUITS 1 YEAR AGO</td>
                            <td><input type="text" name="pilot_studies_other_fruits_year_ago_criterion"
                                       id="pilot_studies_other_fruits_year_ago_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>ORGAN MEAT YESTERDAY</td>
                            <td><input type="text" name="pilot_studies_organ_meat_yesterday_criterion"
                                       id="pilot_studies_organ_meat_yesterday_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>ORGAN MEAT 1 YEAR AGO</td>
                            <td><input type="text" name="pilot_studies_organ_meat_1_year_ago_criterion"
                                       id="pilot_studies_organ_meat_1_year_ago_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>FLESH MEATS YESTERDAY</td>
                            <td><input type="text" name="pilot_studies_flesh_meats_yesterday_criterion"
                                       id="pilot_studies_flesh_meats_yesterday_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>FLESH MEATS 1 YEAR AGO</td>
                            <td><input type="text" name="pilot_studies_flesh_meats_1_year_ago_criterion"
                                       id="pilot_studies_flesh_meats_1_year_ago_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>EGGS YESTERDAY</td>
                            <td><input type="text" name="pilot_studies_eggs_yesterday_criterion"
                                       id="pilot_studies_eggs_yesterday_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>EGGS 1 YEAR AGO</td>
                            <td><input type="text" name="pilot_studies_eggs_1_year_ago_criterion"
                                       id="pilot_studies_eggs_1_year_ago_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>FISH YESTERDAY</td>
                            <td><input type="text" name="pilot_studies_fish_yesterday_criterion"
                                       id="pilot_studies_fish_yesterday_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>FISH 1 YEAR AGO</td>
                            <td><input type="text" name="pilot_studies_fish_1_year_ago_criterion"
                                       id="pilot_studies_fish_1_year_ago_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>LEGUMES YESTERDAY</td>
                            <td><input type="text" name="pilot_studies_legumes_yesterday_criterion"
                                       id="pilot_studies_legumes_yesterday_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>LEGUMES 1 YEAR AGO</td>
                            <td><input type="text" name="pilot_studies_legumes_1_year_ago_criterion"
                                       id="pilot_studies_legumes_1_year_ago_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>MILK YESTERDAY</td>
                            <td><input type="text" name="pilot_studies_milk_yesterday_criterion"
                                       id="pilot_studies_milk_yesterday_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>MILK 1 YEAR AGO</td>
                            <td><input type="text" name="pilot_studies_milk_1_year_ago_criterion"
                                       id="pilot_studies_milk_1_year_ago_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>OILS AND FATS YESTERDAY</td>
                            <td><input type="text" name="pilot_studies_oils_and_fats_yesterday_criterion"
                                       id="pilot_studies_oils_and_fats_yesterday_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>OILS_AND_FATS_1_YEAR_AGO</td>
                            <td><input type="text" name="pilot_studies_oils_and_fats_1_year_ago_criterion"
                                       id="pilot_studies_oils_and_fats_1_year_ago_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>RED PALM YESTERDAY</td>
                            <td><input type="text" name="pilot_studies_red_palm_yesterday_criterion"
                                       id="pilot_studies_red_palm_yesterday_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>RED PALM 1 YEAR AGO</td>
                            <td><input type="text" name="pilot_studies_1_year_ago_criterion"
                                       id="pilot_studies_1_year_ago_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>SWEETS YESTERDAY</td>
                            <td><input type="text" name="pilot_studies_sweets_yesterday_criterion"
                                       id="pilot_studies_sweets_yesterday_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>SWEETS 1 YEAR AGO</td>
                            <td><input type="text" name="pilot_studies_sweets_1_year_ago_criterion"
                                       id="pilot_studies_sweets_1_year_ago_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>SPICES_YESTERDAY</td>
                            <td><input type="text" name="pilot_studies_spices_yesterday_criterion"
                                       id="pilot_studies_spices_yesterday_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>SPICES 1 YEAR AGO</td>
                            <td><input type="text" name="pilot_studies_spices_1_year_ago_criterion"
                                       id="pilot_studies_spices_1_year_ago_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>DISH RACK</td>
                            <td><input type="text" name="pilot_studies_dish_rack_criterion"
                                       id="pilot_studies_dish_rack_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>COMPOST PIT</td>
                            <td><input type="text" name="pilot_studies_compost_pit_criterion"
                                       id="pilot_studies_compost_pit_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>CLOTH DRYING LINE</td>
                            <td><input type="text" name="pilot_studies_cloth_drying_line_criterion"
                                       id="pilot_studies_cloth_drying_line_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>LATRINE</td>
                            <td><input type="text" name="pilot_studies_latrine_criterion"
                                       id="pilot_studies_latrine_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>TIPPY TAP</td>
                            <td><input type="text" name="pilot_studies_tippy_tap_criterion"
                                       id="pilot_studies_tippy_tap_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>BOILS WATER</td>
                            <td><input type="text" name="pilot_studies_boils_water_criterion"
                                       id="pilot_studies_boils_water_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>IMPROVED LIVING STANDARD</td>
                            <td><input type="text" name="pilot_studies_improved_living_standard_criterion"
                                       id="pilot_studies_improved_living_standard_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>SIGNIFICANT STORY</td>
                            <td><input type="text" name="pilot_studies_significant_story_criterion"
                                       id="pilot_studies_significant_story_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>REASON FOR LOW LIVING STANDARD</td>
                            <td><input type="text" name="pilot_studies_reason_for_low_living_standard_criterion"
                                       id="pilot_studies_reason_for_low_living_standard_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>IMPROVED DIET</td>
                            <td><input type="text" name="pilot_studies_improved_diet_criterion"
                                       id="pilot_studies_improved_diet_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>IMPROVED KNOWLEDGE OF NUTRITION</td>
                            <td><input type="text" name="pilot_studies_improved_knowledge_of_nutrition_criterion"
                                       id="pilot_studies_improved_knowledge_of_nutrition_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>INCREASED HOUSEHOLD ASSET BASE</td>
                            <td><input type="text" name="pilot_studies_increased_household_asset_base_criterion"
                                       id="pilot_studies_increased_household_asset_base_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>REDUCED POST HARVEST LOSS DUE TO IMPROVED STORAGE</td>
                            <td><input type="text"
                                       name="pilot_studies_reduced_post_harvest_loss_due_to_improved_storage_criterion"
                                       id="pilot_studies_reduced_post_harvest_loss_due_to_improved_storage_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>CONCLUSION</td>
                            <td><input type="text" name="pilot_studies_conclusion_criterion"
                                       id="pilot_studies_conclusion_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>RECOMMENDATION</td>
                            <td><input type="text" name="pilot_studies_recommendation_criterion"
                                       id="pilot_studies_recommendation_criterion" class="form-control"/></td>
                        </tr>
                    </table>

                </div>

                <div class="col-md-6" id="porticus_criteria" style="display: none;">

                    <table class="table table-bordered">
                        <tr>
                            <th colspan="2">PORTICUS BASELINE ASSESSMENT SURVEY</th>
                        </tr>
                        <tr>
                            <td>NAME OF RESPONDENT</td>
                            <td><input type="text" name="porticus_name_of_respondent_criterion"
                                       id="porticus_name_of_respondent_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>AGE</td>
                            <td><input type="text" name="porticus_age_of_respondent_criterion"
                                       id="porticus_age_of_respondent_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>VILLAGE</td>
                            <td><input type="text" name="porticus_village_criterion" id="porticus_village_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>GENDER</td>
                            <td><input type="text" name="porticus_gender_of_resspondent_criterion"
                                       id="porticus_gender_of_resspondent_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>NAME OF VULNERABLE</td>
                            <td><input type="text" name="porticus_name_of_vulnerable_criterion"
                                       id="porticus_name_of_vulnerable_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>GENDER OF VULNERABLE</td>
                            <td><input type="text" name="porticus_gender_of_vulnerable_criterion"
                                       id="porticus_gender_of_vulnerable_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>AGE OF VULNERABLE</td>
                            <td><input type="text" name="porticus_age_of_vulnerable_criterion"
                                       id="porticus_age_of_vulnerable_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>CATEGORY OF DISABILITY</td>
                            <td><input type="text" name="porticus_category_of_disability_criterion"
                                       id="porticus_category_of_disability_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>NAME OF DISABILITY</td>
                            <td><input type="text" name="porticus_name_of_disability_criterion"
                                       id="porticus_name_of_disability_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>MARITAL STATUS</td>
                            <td><input type="text" name="porticus_marital_status_criterion"
                                       id="porticus_marital_status_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>LEVEL OF EDUCATION</td>
                            <td><input type="text" name="porticus_level_of_education_criterion"
                                       id="porticus_level_of_education_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>OCCUPATION</td>
                            <td><input type="text" name="porticus_occupation_criterion"
                                       id="porticus_occupation_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>HOUSEHOLD MONTHLY INCOME</td>
                            <td><input type="text" name="porticus_household_monthly_income_criterion"
                                       id="porticus_household_monthly_income_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>DEFINITION OF DISABILITY</td>
                            <td><input type="text" name="porticus_definition_of_disability_criterion"
                                       id="porticus_definition_of_disability_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>LIST OF DISABILITIES KNOWN</td>
                            <td><input type="text" name="porticus_list_of_disabilities_criterion"
                                       id="porticus_list_of_disabilities_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>CAUSES OF DISABILITIES KNOWN</td>
                            <td><input type="text" name="porticus_causes_of_disabilities_known_criterion"
                                       id="porticus_causes_of_disabilities_known_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>WAYS OF PREVENTION</td>
                            <td><input type="text" name="porticus_ways_of_prevention_criterion"
                                       id="porticus_ways_of_prevention_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>FEELING OF HAVING A VULNERABLE</td>
                            <td><input type="text" name="porticus_feeling_of_having_a_vulnerable_criterion"
                                       id="porticus_feeling_of_having_a_vulnerable_criterion" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>FEELING OF THE COMMUNITY</td>
                            <td><input type="text" name="porticus_feeling_of_the_community_criterion"
                                       id="porticus_feeling_of_the_community_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>VULNERABLE SUPPORTED</td>
                            <td><input type="text" name="porticus_vulnerable_supported_criterion"
                                       id="porticus_vulnerable_supported_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>SUPPORT GIVEN</td>
                            <td><input type="text" name="porticus_support_given_criterion"
                                       id="porticus_support_given_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>WHY NOT SUPPORTED</td>
                            <td><input type="text" name="porticus_why_not_supported_criterion"
                                       id="porticus_why_not_supported_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>REHABILITATION RECEIVED</td>
                            <td><input type="text" name="porticus_rehabilitation_received_criterion"
                                       id="porticus_rehabilitation_received_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>PLACE OF REHABILITATION</td>
                            <td><input type="text" name="porticus_place_of_rehabilitation_criterion"
                                       id="porticus_place_of_rehabilitation_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>KIND OF TREATMENT RECEIVED</td>
                            <td><input type="text" name="porticus_kind_of_treatment_received_criterion"
                                       id="porticus_kind_of_treatment_received_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>COST OF TREATMENT</td>
                            <td><input type="text" name="porticus_cost_of_treatment_criterion"
                                       id="porticus_cost_of_treatment_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>DURATION OF THE TREATMENT</td>
                            <td><input type="text" name="porticus_duration_of_the_treatment_criterion"
                                       id="porticus_duration_of_the_treatment_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>FREQUENCY OF ATTENDANCE</td>
                            <td><input type="text" name="porticus_frequency_of_attendance_criterion"
                                       id="porticus_frequency_of_attendance_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>REGULAR ATTENDANCE</td>
                            <td><input type="text" name="porticus_regular_attendance_criterion"
                                       id="porticus_regular_attendance_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>REASON FOR NOT ATTENDING REGULARLY</td>
                            <td><input type="text" name="porticus_reason_for_not_attending_daily_criterion"
                                       id="porticus_reason_for_not_attending_daily_criterion" class="form-control"/>
                            </td>
                        </tr>
                        <tr>
                            <td>QUALITY OF SERVICE</td>
                            <td><input type="text" name="porticus_quality_of_service_criterion"
                                       id="porticus_quality_of_service_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>TRAINING RECEIVED</td>
                            <td><input type="text" name="porticus_training_recieved_criterion"
                                       id="porticus_training_recieved_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>NAME OF_TRAINER</td>
                            <td><input type="text" name="porticus_name_of_trainer_criterion"
                                       id="porticus_name_of_trainer_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>TRAINING WAS ABOUT</td>
                            <td><input type="text" name="porticus_training_was_about_criterion"
                                       id="porticus_training_was_about_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>HELP OF_THE TRAINING</td>
                            <td><input type="text" name="porticus_help_of_the_training_criterion"
                                       id="porticus_help_of_the_training_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>CHALLENGES FACED IN CARING</td>
                            <td><input type="text" name="porticus_challenges_faced_in_caring__criterion"
                                       id="porticus_challenges_faced_in_caring__criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>STRENGTHS OF VULNERABLE</td>
                            <td><input type="text" name="porticus_strengths_of_the_vulnerable_criterion"
                                       id="porticus_strengths_of_the_vulnerable_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>WEAKNESSES OF VULNERABLE</td>
                            <td><input type="text" name="porticus_weaknesses_of_the_vulnerable_criterion"
                                       id="porticus_weaknesses_of_the_vulnerable_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>HOPE FOR THE VULNERABLE</td>
                            <td><input type="text" name="porticus_hope_for_the_vulnerable_criterion"
                                       id="porticus_hope_for_the_vulnerable_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>ORGANIZATION HELP NEEDED</td>
                            <td><input type="text" name="porticus_organization_help_needed_criterion"
                                       id="porticus_organization_help_needed_criterion" class="form-control"/></td>
                        </tr>
                    </table>

                </div>

                <div class="col-md-6" id="hygiene_and_nutrition_criteria" style="display: none;">

                    <table class="table table-bordered">
                        <tr>
                            <th colspan="2">HYGIENE AND NUTRITION CHECKLIST</th>
                        </tr>
                        <tr>
                            <td>MEMBERSHIP ID</td>
                            <td><input type="text" name="hygiene_membership_id_criterion"
                                       id="hygiene_membership_id_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>SEX</td>
                            <td><input type="text" name="hygiene_sex_criterion" id="hygiene_sex_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>GROUP NAME</td>
                            <td><input type="text" name="hygiene_group_name_criterion" id="hygiene_group_name_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>DISTRICT</td>
                            <td><input type="text" name="hygiene_district_criterion" id="hygiene_district_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>SUBCOUNTY</td>
                            <td><input type="text" name="hygiene_subcounty_criterion" id="hygiene_subcounty_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>PARISH</td>
                            <td><input type="text" name="hygiene_parish_criterion" id="hygiene_parish_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>PIT LATRINE</td>
                            <td><input type="text" name="hygiene_pit_latrine_criterion"
                                       id="hygiene_pit_latrine_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>RUBBISH PIT</td>
                            <td><input type="text" name="hygiene_rubbish_pit_criterion"
                                       id="hygiene_rubbish_pit_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>BATHING SHELTER</td>
                            <td><input type="text" name="hygiene_bathing_shelter_criterion"
                                       id="hygiene_bathing_shelter_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>TIPPY TAP</td>
                            <td><input type="text" name="hygiene_tippy_tap_criterion" id="hygiene_tippy_tap_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>PLATE DRYING RACK</td>
                            <td><input type="text" name="hygiene_plate_drying_rack_criterion"
                                       id="hygiene_plate_drying_rack_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>KITCHEN GARDEN</td>
                            <td><input type="text" name="hygiene_kitchen_garden_criterion"
                                       id="hygiene_kitchen_garden_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>FRUIT TREES</td>
                            <td><input type="text" name="hygiene_fruit_trees_criterion"
                                       id="hygiene_fruit_trees_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>NRM PRACTICES</td>
                            <td><input type="text" name="hygiene_nrm_practices_criterion"
                                       id="hygiene_nrm_practices_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>MAIZE CRIB</td>
                            <td><input type="text" name="hygiene_maize_crib_criterion" id="hygiene_maize_crib_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>DRYING RACK</td>
                            <td><input type="text" name="hygiene_drying_rack_criterion"
                                       id="hygiene_drying_rack_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>TAPAULIN</td>
                            <td><input type="text" name="hygiene_tapaulin_criterion" id="hygiene_tapaulin_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>GRANARY</td>
                            <td><input type="text" name="hygiene_granary_criterion" id="hygiene_granary_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>PAPYRUS MAT</td>
                            <td><input type="text" name="hygiene_papyrus_mat_criterion"
                                       id="hygiene_papyrus_mat_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>EARTH FLOOR</td>
                            <td><input type="text" name="hygiene_earth_floor_criterion"
                                       id="hygiene_earth_floor_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>DATE CHECKED</td>
                            <td><input type="text" name="hygiene_date_checked_criterion"
                                       id="hygiene_date_checked_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>STAFF</td>
                            <td><input type="text" name="hygiene_staff_criterion" id="hygiene_staff_criterion"
                                       class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>DATE RECORDED</td>
                            <td><input type="text" name="hygiene_date_recorded_criterion"
                                       id="hygiene_date_recorded_criterion" class="form-control"/></td>
                        </tr>
                    </table>

                </div>

            </div>

        </div>

    </div>
    <hr>
    <div class="row">
        <div class="col-md-12" style="text-align: center;" id="start-query-box">
            <button class="btn btn-md-5 btn-primary" onclick="show_results();">Run Query <i
                        class="fa fa-angle-double-right"></i></button>
        </div>
        <div class="col-md-12" style="text-align: center; display: none" id="update-query-box">
            <button class="btn btn-md-5 btn-success" onclick="show_results_update();">Update Results <i
                        class="fa fa-angle-double-right"></i></button>
            <button class="btn btn-md-5 btn-link" id="hide_criteria_button" onclick="hide_criteria();"
                    style="display: block;">Hide Criteria<i class="fa fa-angle-double-up"></i></button>
        </div>
    </div>
    <hr>
</div>
<div id="query-results" style="display: none;">
    <div class="row">
        <div class="col-md-12">
            <h4>Search Results</h4>
        </div>
        <div class="col-md-12">
            <p>&nbsp;</p>
            <div id="preview_query_results" style="overflow-x:scroll;">
                Query Results
            </div>
            <div id="preview_query_results_num" style="display:none;"></div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-2">&nbsp;</div>
        <div class="col-md-6" id="show-div-buttons">
            <button class="btn btn-md-5 btn-default" onclick="show_criteria();" style="margin-right: 5%;">Show Criteria
                <i class="fa fa-angle-double-up"></i></button>
            <button class="btn btn-md-5 btn-primary" onclick="show_criteria_and_results();">Show Criteria and Results <i
                        class="fa fa-angle-double-up"></i></button>
        </div>
        <div class="col-md-4" style="white-space: nowrap;">
            <button class="btn btn-md-5 btn-danger" onclick="print_results();"><i class="fa fa-print"></i> Print Query
                Results <i class="fa fa-angle-double-right"></i></button>
            <button class="btn btn-md-5 btn-warning" onclick="print_num_results();"><i class="fa fa-print"></i> Print
                Number of Results for this Query <i class="fa fa-angle-double-right"></i></button>
            <button class="btn btn-md btn-link" id="show_criteria_button" onclick="show_criteria();"
                    style="display: none;">Show Criteria<i class="fa fa-angle-double-down"></i></button>
        </div>


    </div>
    <hr>
</div>

<script type="text/javascript">
    /**
     * Created by engineer on 3/10/19.
     */
    function show_results() {

        send_to_query_builder();


    }
    function show_criteria() {
        document.getElementById('query-criteria').style.display = 'block';
        document.getElementById('query-results').style.display = 'none';
        document.getElementById('start-query-box').style.display = 'none';
        document.getElementById('update-query-box').style.display = 'block';

        //hide the buttons for opening criteria div
        document.getElementById('show-div-buttons').style.display = 'none';
    }
    function show_criteria_and_results() {
        document.getElementById('query-criteria').style.display = 'block';
        document.getElementById('query-results').style.display = 'block';
        document.getElementById('start-query-box').style.display = 'none';
        document.getElementById('update-query-box').style.display = 'block';

        //hide the buttons for opening criteria div
        document.getElementById('show-div-buttons').style.display = 'none';
    }

    function hide_criteria() {
        document.getElementById('query-criteria').style.display = 'none';
        document.getElementById('show_criteria_button').style.display = 'block';
        document.getElementById('query-results').style.display = 'block';

    }
    function print_results() {
        document.getElementById('query-criteria').style.display = 'none';
        var frame = document.getElementById('preview_query_results');
        var data = frame.innerHTML;
        var win = window.open('', '', 'height=500,width=900');
        win.document.write('<style>@page{size:landscape;}</style><html><head><title></title>');
        win.document.write('</head><body >');
        win.document.write(data);
        win.document.write('</body></html>');
        win.print();
        win.close();
        return true;

    }
    function print_num_results() {
        document.getElementById('query-criteria').style.display = 'none';
        var frame = document.getElementById('preview_query_results_num');
        var data = frame.innerHTML;
        var win = window.open('', '', 'height=500,width=900');
        win.document.write('<style>@page{size:portrait;}</style><html><head><title></title>');
        win.document.write('</head><body >');
        win.document.write(data);
        win.document.write('</body></html>');
        win.print();
        win.close();
        return true;

    }

    function show_results_update() {

        send_to_query_builder();

        //Hide the criteria
        document.getElementById('query-criteria').style.display = 'block';

        //Change the content of the query results
        document.getElementById('preview_query_results').innerHTML = data;

        //Show the query results
        document.getElementById('query-results').style.display = 'block';

        //hide the run query button
        document.getElementById('start-query-box').style.display = 'none';

        //hide the buttons for opening criteria div
        document.getElementById('show-div-buttons').style.display = 'none';

        //Show the update query button
        document.getElementById('update-query-box').style.display = 'block';
        document.getElementById('show_criteria_button').style.display = 'none';


    }

    function show_tables_related(table_selection) {

        //Show the table selections div
        document.getElementById('table_selections').style.display = 'block';

        if (table_selection === 'livelihood_table_selections') {

            //Show the selected div and hide others
            document.getElementById('livelihood_table_selections').style.display = 'block';
            document.getElementById('children_table_selections').style.display = 'none';
            document.getElementById('staff_table_selections').style.display = 'none';
            document.getElementById('training_table_selections').style.display = 'none';
            document.getElementById('monitoring_table_selections').style.display = 'none';
            document.getElementById('production_table_selections').style.display = 'none';
            document.getElementById('miscellaneous_table_selections').style.display = 'none';
            document.getElementById('complex_table_selections').style.display = 'none';

            // Reset the values in other locations
        }

        if (table_selection === 'children_table_selections') {

            //Show the selected div and hide others
            document.getElementById('livelihood_table_selections').style.display = 'none';
            document.getElementById('children_table_selections').style.display = 'block';
            document.getElementById('staff_table_selections').style.display = 'none';
            document.getElementById('training_table_selections').style.display = 'none';
            document.getElementById('monitoring_table_selections').style.display = 'none';
            document.getElementById('production_table_selections').style.display = 'none';
            document.getElementById('miscellaneous_table_selections').style.display = 'none';
            document.getElementById('complex_table_selections').style.display = 'none';

            // Reset the values in other locations
        }

        if (table_selection === 'staff_table_selections') {

            //Show the selected div and hide others
            document.getElementById('livelihood_table_selections').style.display = 'none';
            document.getElementById('children_table_selections').style.display = 'none';
            document.getElementById('staff_table_selections').style.display = 'block';
            document.getElementById('training_table_selections').style.display = 'none';
            document.getElementById('monitoring_table_selections').style.display = 'none';
            document.getElementById('production_table_selections').style.display = 'none';
            document.getElementById('miscellaneous_table_selections').style.display = 'none';
            document.getElementById('complex_table_selections').style.display = 'none';

            // Reset the values in other locations
        }

        if (table_selection === 'training_table_selections') {

            //Show the selected div and hide others
            document.getElementById('livelihood_table_selections').style.display = 'block';
            document.getElementById('children_table_selections').style.display = 'none';
            document.getElementById('staff_table_selections').style.display = 'none';
            document.getElementById('training_table_selections').style.display = 'block';
            document.getElementById('monitoring_table_selections').style.display = 'none';
            document.getElementById('production_table_selections').style.display = 'none';
            document.getElementById('miscellaneous_table_selections').style.display = 'none';
            document.getElementById('complex_table_selections').style.display = 'none';

            // Reset the values in other locations
        }

        if (table_selection === 'monitoring_table_selections') {

            //Show the selected div and hide others
            document.getElementById('livelihood_table_selections').style.display = 'none';
            document.getElementById('children_table_selections').style.display = 'none';
            document.getElementById('staff_table_selections').style.display = 'none';
            document.getElementById('training_table_selections').style.display = 'none';
            document.getElementById('monitoring_table_selections').style.display = 'block';
            document.getElementById('production_table_selections').style.display = 'none';
            document.getElementById('miscellaneous_table_selections').style.display = 'none';
            document.getElementById('complex_table_selections').style.display = 'none';

            // Reset the values in other locations
        }

        if (table_selection === 'production_table_selections') {

            //Show the selected div and hide others
            document.getElementById('livelihood_table_selections').style.display = 'none';
            document.getElementById('children_table_selections').style.display = 'none';
            document.getElementById('staff_table_selections').style.display = 'none';
            document.getElementById('training_table_selections').style.display = 'none';
            document.getElementById('monitoring_table_selections').style.display = 'none';
            document.getElementById('production_table_selections').style.display = 'block';
            document.getElementById('miscellaneous_table_selections').style.display = 'none';
            document.getElementById('complex_table_selections').style.display = 'none';

            // Reset the values in other locations
        }

        if (table_selection === 'miscellaneous_table_selections') {

            //Show the selected div and hide others
            document.getElementById('livelihood_table_selections').style.display = 'none';
            document.getElementById('children_table_selections').style.display = 'none';
            document.getElementById('staff_table_selections').style.display = 'none';
            document.getElementById('training_table_selections').style.display = 'none';
            document.getElementById('monitoring_table_selections').style.display = 'none';
            document.getElementById('production_table_selections').style.display = 'none';
            document.getElementById('miscellaneous_table_selections').style.display = 'block';
            document.getElementById('complex_table_selections').style.display = 'none';

            // Reset the values in other locations
        }

        if (table_selection === 'complex_table_selections') {

            //Show the selected div and hide others
            document.getElementById('livelihood_table_selections').style.display = 'none';
            document.getElementById('children_table_selections').style.display = 'none';
            document.getElementById('staff_table_selections').style.display = 'none';
            document.getElementById('training_table_selections').style.display = 'none';
            document.getElementById('monitoring_table_selections').style.display = 'none';
            document.getElementById('production_table_selections').style.display = 'none';
            document.getElementById('miscellaneous_table_selections').style.display = 'none';
            document.getElementById('complex_table_selections').style.display = 'block';

            // Reset the values in other locations
        }
    }

    function show_table_fields(checkbox_id) {
        // use onchange in the element
        document.getElementById('fields_selection').style.display = 'block';
        document.getElementById('livelihood_table_fields').style.display = 'block';
        document.getElementById('children_table_fields').style.display = 'block';
        document.getElementById('staff_table_fields').style.display = 'block';
        document.getElementById('training_table_fields').style.display = 'block';
        document.getElementById('monitoring_visit_table_fields').style.display = 'block';
        document.getElementById('production_table_fields').style.display = 'block';
        document.getElementById('miscellaneous_table_fields').style.display = 'block';
        document.getElementById('complex_table_fields').style.display = 'block';
        document.getElementById('criteria_selection').style.display = 'block';

        if (checkbox_id === 'livelihood_groups') {


            if (document.getElementById(checkbox_id).checked) {
//                alert(checkbox_id);
                document.getElementById('livelihood_groups_fields').style.display = 'block';
                document.getElementById('livelihood_groups_criteria').style.display = 'block';

            } else {
                document.getElementById('livelihood_groups_fields').style.display = 'none';
                document.getElementById('livelihood_groups_criteria').style.display = 'none';
                document.getElementById('membership').disabled = false;


                $('input.livelihood_group_field').prop('checked', false);


                //unchecking and checking elements
                //document.getElementById('desiredInput').checked = false;
            }
        }

        if (checkbox_id === 'livelihood_categories') {


            if (document.getElementById(checkbox_id).checked) {
//                alert(checkbox_id);
                document.getElementById('livelihood_categories_fields').style.display = 'block';
                document.getElementById('livelihood_categories_criteria').style.display = 'block';

            } else {
                document.getElementById('livelihood_categories_fields').style.display = 'none';
                document.getElementById('livelihood_categories_criteria').style.display = 'none';


                $('input.livelihood_category_field').prop('checked', false);


                //unchecking and checking elements
                //document.getElementById('desiredInput').checked = false;
            }
        }

        if (checkbox_id === 'membership') {


            if (document.getElementById(checkbox_id).checked) {
//                alert(checkbox_id);
                document.getElementById('membership_fields').style.display = 'block';
                document.getElementById('membership_criteria').style.display = 'block';

            } else {
                document.getElementById('membership_fields').style.display = 'none';
                document.getElementById('membership_criteria').style.display = 'none';


                $('input.membership_field').prop('checked', false);


                //unchecking and checking elements
                //document.getElementById('desiredInput').checked = false;
            }
        }

        if (checkbox_id === 'children') {


            if (document.getElementById(checkbox_id).checked) {
//                alert(checkbox_id);
                document.getElementById('children_fields').style.display = 'block';
                document.getElementById('children_criteria').style.display = 'block';

            } else {
                document.getElementById('children_fields').style.display = 'none';
                document.getElementById('children_criteria').style.display = 'none';


                $('input.children_field').prop('checked', false);


                //unchecking and checking elements
                //document.getElementById('desiredInput').checked = false;
            }
        }

        if (checkbox_id === 'assessment_1_records') {


            if (document.getElementById(checkbox_id).checked) {
//                alert(checkbox_id);
                document.getElementById('assessment_1_fields').style.display = 'block';
                document.getElementById('assessment_1_criteria').style.display = 'block';

            } else {
                document.getElementById('assessment_1_fields').style.display = 'none';
                document.getElementById('assessment_1_criteria').style.display = 'none';


                $('input.assessment_1_field').prop('checked', false);


                //unchecking and checking elements
                //document.getElementById('desiredInput').checked = false;
            }
        }

        if (checkbox_id === 'assessment_2_records') {


            if (document.getElementById(checkbox_id).checked) {
//                alert(checkbox_id);
                document.getElementById('assessment_2_fields').style.display = 'block';
                document.getElementById('assessment_2_criteria').style.display = 'block';

            } else {
                document.getElementById('assessment_2_fields').style.display = 'none';
                document.getElementById('assessment_2_criteria').style.display = 'none';


                $('input.assessment_2_field').prop('checked', false);


                //unchecking and checking elements
                //document.getElementById('desiredInput').checked = false;
            }
        }

        if (checkbox_id === 'visit_records') {


            if (document.getElementById(checkbox_id).checked) {
//                alert(checkbox_id);
                document.getElementById('visitation_fields').style.display = 'block';
                document.getElementById('visitation_criteria').style.display = 'block';

            } else {
                document.getElementById('visitation_fields').style.display = 'none';
                document.getElementById('visitation_criteria').style.display = 'none';


                $('input.visitation_field').prop('checked', false);


                //unchecking and checking elements
                //document.getElementById('desiredInput').checked = false;
            }
        }

        if (checkbox_id === 'organization_departments') {


            if (document.getElementById(checkbox_id).checked) {
//                alert(checkbox_id);
                document.getElementById('department_fields').style.display = 'block';
                document.getElementById('department_criteria').style.display = 'block';

            } else {
                document.getElementById('department_fields').style.display = 'none';
                document.getElementById('department_criteria').style.display = 'none';


                $('input.organization_department_field').prop('checked', false);


                //unchecking and checking elements
                //document.getElementById('desiredInput').checked = false;
            }
        }

        if (checkbox_id === 'organization_staff') {


            if (document.getElementById(checkbox_id).checked) {
//                alert(checkbox_id);
                document.getElementById('staff_fields').style.display = 'block';
                document.getElementById('staff_criteria').style.display = 'block';

            } else {
                document.getElementById('staff_fields').style.display = 'none';
                document.getElementById('staff_criteria').style.display = 'none';


                $('input.organization_staff_field').prop('checked', false);


                //unchecking and checking elements
                //document.getElementById('desiredInput').checked = false;
            }
        }

        if (checkbox_id === 'courses_and_topics') {


            if (document.getElementById(checkbox_id).checked) {
//                alert(checkbox_id);
                document.getElementById('courses_and_topics_fields').style.display = 'block';
                document.getElementById('courses_and_topics_criteria').style.display = 'block';

            } else {
                document.getElementById('courses_and_topics_fields').style.display = 'none';
                document.getElementById('courses_and_topics_criteria').style.display = 'none';


                $('input.courses_and_topics_field').prop('checked', false);


                //unchecking and checking elements
                //document.getElementById('desiredInput').checked = false;
            }
        }

        if (checkbox_id === 'trainings') {


            if (document.getElementById(checkbox_id).checked) {
//                alert(checkbox_id);
                document.getElementById('training_fields').style.display = 'block';
                document.getElementById('training_criteria').style.display = 'block';

            } else {
                document.getElementById('training_fields').style.display = 'none';
                document.getElementById('training_criteria').style.display = 'none';


                $('input.training_field').prop('checked', false);


                //unchecking and checking elements
                //document.getElementById('desiredInput').checked = false;
            }
        }

        if (checkbox_id === 'training_attendance') {


            if (document.getElementById(checkbox_id).checked) {
//                alert(checkbox_id);
                document.getElementById('attendance_fields').style.display = 'block';
                document.getElementById('attendance_criteria').style.display = 'block';

            } else {
                document.getElementById('attendance_fields').style.display = 'none';
                document.getElementById('attendance_criteria').style.display = 'none';


                $('input.attendance_field').prop('checked', false);


                //unchecking and checking elements
                //document.getElementById('desiredInput').checked = false;
            }
        }

        if (checkbox_id === 'training_outcomes') {


            if (document.getElementById(checkbox_id).checked) {
//                alert(checkbox_id);
                document.getElementById('training_outcome_fields').style.display = 'block';
                document.getElementById('training_outcome_criteria').style.display = 'block';

            } else {
                document.getElementById('training_outcome_fields').style.display = 'none';
                document.getElementById('training_outcome_criteria').style.display = 'none';


                $('input.training_outcome_field').prop('checked', false);


                //unchecking and checking elements
                //document.getElementById('desiredInput').checked = false;
            }
        }

        if (checkbox_id === 'monitoring_visits') {


            if (document.getElementById(checkbox_id).checked) {
//                alert(checkbox_id);
                document.getElementById('monitoring_visit_fields').style.display = 'block';
                document.getElementById('monitoring_visit_criteria').style.display = 'block';

            } else {
                document.getElementById('monitoring_visit_fields').style.display = 'none';
                document.getElementById('monitoring_visit_criteria').style.display = 'none';


                $('input.monitoring_visit_field').prop('checked', false);


                //unchecking and checking elements
                //document.getElementById('desiredInput').checked = false;
            }
        }

        if (checkbox_id === 'misean_cara_baseline_surveys') {


            if (document.getElementById(checkbox_id).checked) {
//                alert(checkbox_id);
                document.getElementById('misean_cara_baseline_survey_fields').style.display = 'block';
                document.getElementById('misean_cara_baseline_survey_criteria').style.display = 'block';

            } else {
                document.getElementById('misean_cara_baseline_survey_fields').style.display = 'none';
                document.getElementById('misean_cara_baseline_survey_criteria').style.display = 'none';


                $('input.misean_cara_baseline_survey_field').prop('checked', false);


                //unchecking and checking elements
                //document.getElementById('desiredInput').checked = false;
            }
        }

        if (checkbox_id === 'production') {


            if (document.getElementById(checkbox_id).checked) {
//                alert(checkbox_id);
                document.getElementById('production_fields').style.display = 'block';
                document.getElementById('production_criteria').style.display = 'block';

            } else {
                document.getElementById('production_fields').style.display = 'none';
                document.getElementById('production_criteria').style.display = 'none';


                $('input.production_field').prop('checked', false);


                //unchecking and checking elements
                //document.getElementById('desiredInput').checked = false;
            }
        }

        if (checkbox_id === 'fish_farming') {


            if (document.getElementById(checkbox_id).checked) {
//                alert(checkbox_id);
                document.getElementById('fish_farming_fields').style.display = 'block';
                document.getElementById('fish_farming_criteria').style.display = 'block';

            } else {
                document.getElementById('fish_farming_fields').style.display = 'none';
                document.getElementById('fish_farming_criteria').style.display = 'none';


                $('input.fish_farming_field').prop('checked', false);


                //unchecking and checking elements
                //document.getElementById('desiredInput').checked = false;
            }
        }

        if (checkbox_id === 'production_problems') {


            if (document.getElementById(checkbox_id).checked) {
//                alert(checkbox_id);
                document.getElementById('farming_problems_fields').style.display = 'block';
                document.getElementById('farming_problems_criteria').style.display = 'block';

            } else {
                document.getElementById('farming_problems_fields').style.display = 'none';
                document.getElementById('farming_problems_criteria').style.display = 'none';


                $('input.farming_problems_field').prop('checked', false);


                //unchecking and checking elements
                //document.getElementById('desiredInput').checked = false;
            }
        }

        if (checkbox_id === 'misean_cara_beneficiaries') {


            if (document.getElementById(checkbox_id).checked) {
//                alert(checkbox_id);
                document.getElementById('misean_cara_technology_fields').style.display = 'block';
                document.getElementById('misean_cara_technology_criteria').style.display = 'block';

            } else {
                document.getElementById('misean_cara_technology_fields').style.display = 'none';
                document.getElementById('misean_cara_technology_criteria').style.display = 'none';


                $('input.misean_cara_technology_field').prop('checked', false);


                //unchecking and checking elements
                //document.getElementById('desiredInput').checked = false;
            }
        }

        if (checkbox_id === 'change_in_knowledge') {


            if (document.getElementById(checkbox_id).checked) {
//                alert(checkbox_id);
                document.getElementById('change_in_marketing_knowledge_fields').style.display = 'block';
                document.getElementById('change_in_marketing_knowledge_criteria').style.display = 'block';

            } else {
                document.getElementById('change_in_marketing_knowledge_fields').style.display = 'none';
                document.getElementById('change_in_marketing_knowledge_criteria').style.display = 'none';


                $('input.change_in_marketing_knowledge_field').prop('checked', false);


                //unchecking and checking elements
                //document.getElementById('desiredInput').checked = false;
            }
        }

        if (checkbox_id === 'pilot_studies') {


            if (document.getElementById(checkbox_id).checked) {
//                alert(checkbox_id);
                document.getElementById('pilot_studies_fields').style.display = 'block';
                document.getElementById('pilot_studies_criteria').style.display = 'block';

            } else {
                document.getElementById('pilot_studies_fields').style.display = 'none';
                document.getElementById('pilot_studies_criteria').style.display = 'none';


                $('input.pilot_studies_field').prop('checked', false);


                //unchecking and checking elements
                //document.getElementById('desiredInput').checked = false;
            }
        }

        if (checkbox_id === 'porticus_baseline_survey') {


            if (document.getElementById(checkbox_id).checked) {
//                alert(checkbox_id);
                document.getElementById('porticus_fields').style.display = 'block';
                document.getElementById('porticus_criteria').style.display = 'block';

            } else {
                document.getElementById('porticus_fields').style.display = 'none';
                document.getElementById('porticus_criteria').style.display = 'none';


                $('input.porticus_field').prop('checked', false);


                //unchecking and checking elements
                //document.getElementById('desiredInput').checked = false;
            }
        }

        if (checkbox_id === 'hygiene_and_nutrition_checklist') {


            if (document.getElementById(checkbox_id).checked) {
//                alert(checkbox_id);
                document.getElementById('hygiene_and_nutrition_fields').style.display = 'block';
                document.getElementById('hygiene_and_nutrition_criteria').style.display = 'block';

            } else {
                document.getElementById('hygiene_and_nutrition_fields').style.display = 'none';
                document.getElementById('hygiene_and_nutrition_criteria').style.display = 'none';


                $('input.hygiene_and_nutrition_field').prop('checked', false);


                //unchecking and checking elements
                //document.getElementById('desiredInput').checked = false;
            }
        }
    }

    function turn_on_checkbox(checkbox_id) {

        if (checkbox_id === 'group_type') {

            if (document.getElementById('livelihood_categories').checked) {
                document.getElementById('livelihood_categories').checked = false;
                document.getElementById('livelihood_categories_field').checked = false;
            } else {
                document.getElementById('livelihood_categories').checked = true;
                document.getElementById('livelihood_categories_field').checked = true;
            }
        }

        if (checkbox_id === 'disability_type') {

            if (document.getElementById('disabilities').checked) {
                document.getElementById('disabilities').checked = false;
//                document.getElementById('vulnerabilities_field').checked = false;
                $('input.vulnerabilities_field').prop('checked', false);
            } else {
                document.getElementById('disabilities').checked = true;
//                document.getElementById('vulnerabilities_field').checked = true;
//                alert(document.getElementById('vulnerabilities_field').value);
                $('input.vulnerabilities_field').prop('checked', true);
            }
        }

        if (checkbox_id === 'village_code') {

            if (document.getElementById('parish').checked) {
                document.getElementById('parish').checked = false;
                document.getElementById('parish_name').checked = false;
            } else {
                document.getElementById('parish').checked = true;
                document.getElementById('parish_name').checked = true;
            }
        }

        if (checkbox_id === 'parish_code') {

            if (document.getElementById('village').checked) {
                document.getElementById('village').checked = false;
                document.getElementById('village_name').checked = false;
            } else {
                document.getElementById('village').checked = true;
                document.getElementById('village_name').checked = true;
            }
        }

    }

    function send_to_query_builder() {

        var query_tables = [];

        var required_fields = [];

        var joins = [];

        var conditions = [];

        // getting the list of tables
        $("input:checkbox[name=query_tables]:checked").each(function () {
            query_tables.push($(this).val());
        });

        // getting the required fields for display of results
        $("input:checkbox[name=tables_field]:checked").each(function () {
            var fieldname = $(this).val();
//            alert(fieldname);
            if (fieldname !== 'GROUPS.TYPE') {
                required_fields.push($(this).val());
            }
        });

//        if (contains.call(query_tables, 'LIVELIHOODGROUPCATEGORIES')) {
//            var join = [];
//            if (contains.call(query_tables, 'GROUPS')) {
//                join.push('LIVELIHOODGROUPCATEGORIES');
//                join.push('GROUPS.TYPE=LIVELIHOODGROUPCATEGORIES.ID');
//
//                joins.push(join);
//            }
//
//        }
//


//        Preparing the condition segment
        var group_name = document.getElementById('name_criterion').value;
        var group_location = document.getElementById('location_criterion').value;
        var group_registration = document.getElementById('registration_date_criterion').value;
        var group_id = document.getElementById('group_id_criterion').value;
        var group_type = document.getElementById('group_type_criterion').value;

        //MembershipConditions
        var membername_criterion = document.getElementById('membername_criterion').value;
        var membersex_criterion = document.getElementById('membersex_criterion').value;
        var membertitle_criterion = document.getElementById('membertitle_criterion').value;
        var membervulnerability_criterion = document.getElementById('membervulnerability_criterion').value;
        var memberdateofbirth_criterion = document.getElementById('memberdateofbirth_criterion').value;
        var membergroup_criterion = document.getElementById('membergroup_criterion').value;
        var memberparish_criterion = document.getElementById('memberparish_criterion').value;
        var membervillage_criterion = document.getElementById('membervillage_criterion').value;
        var memberdateofjoining_criterion = document.getElementById('memberdateofjoining_criterion').value;
        var membertelephone_criterion = document.getElementById('membertelephone_criterion').value;
        var membershipid_criterion = document.getElementById('membershipid_criterion').value;

        //Children Conditions
        var childname_criterion = document.getElementById('childname_criterion').value;
        var childsex_criterion = document.getElementById('childsex_criterion').value;
        var childvulnerability_criterion = document.getElementById('childvulnerability_criterion').value;
        var chillddateofbirth_criterion = document.getElementById('chillddateofbirth_criterion').value;
        var childparish_criterion = document.getElementById('childparish_criterion').value;
        var childvillage_criterion = document.getElementById('childvillage_criterion').value;
        var childdateofjoining_criterion = document.getElementById('childdateofjoining_criterion').value;
        var childmother_criterion = document.getElementById('childmother_criterion').value;
        var childfather_criterion = document.getElementById('childfather_criterion').value;
        var childguardian_criterion = document.getElementById('childguardian_criterion').value;
        var childid_criterion = document.getElementById('childid_criterion').value;
//
        //Assessment 1 Conditions
        var assessment_1_county_criterion = document.getElementById('assessment_1_county_criterion').value;
        var assessment_1_subcounty_criterion = document.getElementById('assessment_1_subcounty_criterion').value;
        var assessment_1_parish_criterion = document.getElementById('assessment_1_parish_criterion').value;
        var assessment_1_village_criterion = document.getElementById('assessment_1_village_criterion').value;
        var assessment_1_healthcentre_criterion = document.getElementById('assessment_1_healthcentre_criterion').value;
        var assessment_1_dateentered_criterion = document.getElementById('assessment_1_dateentered_criterion').value;
        var assessment_1_cbrname_criterion = document.getElementById('assessment_1_cbrname_criterion').value;
        var assessment_1_childid_criterion = document.getElementById('assessment_1_childid_criterion').value;
        var assessment_1_dateofbirth_criterion = document.getElementById('assessment_1_dateofbirth_criterion').value;
        var assessment_1_sex_criterion = document.getElementById('assessment_1_sex_criterion').value;
        var assessment_1_disabilitytype_criterion = document.getElementById('assessment_1_disabilitytype_criterion').value;
        var assessment_1_wherechildlives_criterion = document.getElementById('assessment_1_wherechildlives_criterion').value;
        var assessment_1_otherspecifiedplace_criterion = document.getElementById('assessment_1_otherspecifiedplace_criterion').value;
        var assessment_1_otherdisabledchildren_criterion = document.getElementById('assessment_1_otherdisabledchildren_criterion').value;
        var assessment_1_numberofotherdisabledchildren_criterion = document.getElementById('assessment_1_numberofotherdisabledchildren_criterion').value;
        var assessment_1_abletoprovidebasicneeds_criterion = document.getElementById('assessment_1_abletoprovidebasicneeds_criterion').value;
        var assessment_1_explanationforinabilitytoprovidebasicneeds_criterion = document.getElementById('assessment_1_explanationforinabilitytoprovidebasicneeds_criterion').value;
        var assessment_1_disabilitydescription_criterion = document.getElementById('assessment_1_disabilitydescription_criterion').value;
        var assessment_1_childusesmedicine_criterion = document.getElementById('assessment_1_childusesmedicine_criterion').value;
        var assessment_1_nameofmedicine_criterion = document.getElementById('assessment_1_nameofmedicine_criterion').value;
        var assessment_1_childhasfits_criterion = document.getElementById('assessment_1_childhasfits_criterion').value;
        var assessment_1_numberoffits_criterion = document.getElementById('assessment_1_numberoffits_criterion').value;
        var assessment_1_limbsmovewell_criterion = document.getElementById('assessment_1_limbsmovewell_criterion').value;
        var assessment_1_limbsthatmovewell_criterion = document.getElementById('assessment_1_limbsthatmovewell_criterion').value;
        var assessment_1_childusesaids_criterion = document.getElementById('assessment_1_childusesaids_criterion').value;
        var assessment_1_typeofaidsused_criterion = document.getElementById('assessment_1_typeofaidsused_criterion').value;
        var assessment_1_childtalks_criterion = document.getElementById('assessment_1_childtalks_criterion').value;
        var assessment_1_childsees_criterion = document.getElementById('assessment_1_childsees_criterion').value;
        var assessment_1_mentalcapacity_criterion = document.getElementById('assessment_1_mentalcapacity_criterion').value;
        var assessment_1_eatsandddrinks_criterion = document.getElementById('assessment_1_eatsandddrinks_criterion').value;
        var assessment_1_washesanddresses_criterion = document.getElementById('assessment_1_washesanddresses_criterion').value;
        var assessment_1_toiletactivities_criterion = document.getElementById('assessment_1_toiletactivities_criterion').value;
        var assessment_1_howchildmoves_criterion = document.getElementById('assessment_1_howchildmoves_criterion').value;
        var assessment_1_childplayswithothers_criterion = document.getElementById('assessment_1_childplayswithothers_criterion').value;
        var assessment_1_helpsinhouseholdcores_criterion = document.getElementById('assessment_1_helpsinhouseholdcores_criterion').value;
        var assessment_1_acceptedbyfamilyandloved_criterion = document.getElementById('assessment_1_acceptedbyfamilyandloved_criterion').value;
        var assessment_1_acceptedbycommunity_criterion = document.getElementById('assessment_1_acceptedbycommunity_criterion').value;
        var assessment_1_goestoschool_criterion = document.getElementById('assessment_1_goestoschool_criterion').value;
        var assessment_1_school_criterion = document.getElementById('assessment_1_school_criterion').value;
        var assessment_1_comment_criterion = document.getElementById('assessment_1_comment_criterion').value;
//
        //Assessment 2 Conditions
        var assessment_2_child_criterion = document.getElementById('assessment_2_child_criterion').value;
        var assessment_2_dateoffirstscreening_criterion = document.getElementById('assessment_2_dateoffirstscreening_criterion').value;
        var assessment_2_identifiedby_criterion = document.getElementById('assessment_2_identifiedby_criterion').value;
        var assessment_2_assessedby_criterion = document.getElementById('assessment_2_assessedby_criterion').value;
        var assessment_2_distance_criterion = document.getElementById('assessment_2_distance_criterion').value;
        var assessment_2_nearesthealthcentre_criterion = document.getElementById('assessment_2_nearesthealthcentre_criterion').value;
        var assessment_2_venueforscreening_criterion = document.getElementById('assessment_2_venueforscreening_criterion').value;
        var assessment_2_medicalhistory_criterion = document.getElementById('assessment_2_medicalhistory_criterion').value;
        var assessment_2_findings_criterion = document.getElementById('assessment_2_findings_criterion').value;
        var assessment_2_disability_criterion = document.getElementById('assessment_2_disability_criterion').value;
        var assessment_2_recommendation_criterion = document.getElementById('assessment_2_recommendation_criterion').value;
        var assessment_2_screenedby_criterion = document.getElementById('assessment_2_screenedby_criterion').value;
        var assessment_2_dateentered_criterion = document.getElementById('assessment_2_dateentered_criterion').value;
        var assessment_2_title_criterion = document.getElementById('assessment_2_title_criterion').value;
//
        //Visitation Conditions
        var visitation_dateofvisit_criterion = document.getElementById('assessment_2_title_criterion').value;
        var visitation_kindofvisit_criterion = document.getElementById('assessment_2_title_criterion').value;
        var visitation_childidvisited_criterion = document.getElementById('assessment_2_title_criterion').value;
        var children_project_criterion = document.getElementById('assessment_2_title_criterion').value;
        var visitation_village_criterion = document.getElementById('assessment_2_title_criterion').value;
        var visitation_parish_criterion = document.getElementById('assessment_2_title_criterion').value;
        var visitation_subcounty_criterion = document.getElementById('assessment_2_title_criterion').value;
        var visitation_activitycarriedout_criterion = document.getElementById('assessment_2_title_criterion').value;
        var visitation_nextvisitactivity_criterion = document.getElementById('assessment_2_title_criterion').value;
        var visitation_wacfostaff_criterion = document.getElementById('assessment_2_title_criterion').value;
        var visitation_comment_criterion = document.getElementById('assessment_2_title_criterion').value;
        var visitation_nextvisitdate_criterion = document.getElementById('assessment_2_title_criterion').value;
//
        //Department Conditions
        var department_name_criterion = document.getElementById('department_name_criterion').value;
        var department_prefix_criterion = document.getElementById('department_prefix_criterion').value;

        //Staff Conditions
        var staff_name_criterion = document.getElementById('staff_name_criterion').value;
        var staff_role_criterion = document.getElementById('staff_role_criterion').value;
        var staff_department_criterion = document.getElementById('staff_department_criterion').value;
        var staff_emailaddress_criterion = document.getElementById('staff_emailaddress_criterion').value;
        var staff_telephone_criterion = document.getElementById('staff_telephone_criterion').value;
        var staff_staffid_criterion = document.getElementById('staff_staffid_criterion').value;
//
        //Courses Conditions
        var courses_criterion = document.getElementById('courses_criterion').value;
        var topics_criterion = document.getElementById('topics_criterion').value;

        //Training Conditions
        var training_dateoftraining_criterion = document.getElementById('training_dateoftraining_criterion').value;
        var training_course_criterion = document.getElementById('training_course_criterion').value;
        var training_topic_criterion = document.getElementById('training_topic_criterion').value;
        var training_objective_criterion = document.getElementById('training_objective_criterion').value;
        var training_venue_criterion = document.getElementById('training_venue_criterion').value;
        var training_groupintended_criterion = document.getElementById('training_groupintended_criterion').value;
        var training_conductedby_criterion = document.getElementById('training_conductedby_criterion').value;
        var training_isstaff_criterion = document.getElementById('training_isstaff_criterion').value;
//
        //Training Attendance Conditions
        var training_attendance_attendant_criterion = document.getElementById('training_attendance_attendant_criterion').value;
        var training_attendance_type_criterion = document.getElementById('training_attendance_type_criterion').value;
        var training_attendance_address_criterion = document.getElementById('training_attendance_address_criterion').value;
        var training_attendance_contact_criterion = document.getElementById('training_attendance_contact_criterion').value;
//
//        //Training Outcome
        var training_outcome_outcome_criterion = document.getElementById('training_outcome_outcome_criterion').value;
//
        //Monitoring Conditions
        var monitoring_staffid_criterion = document.getElementById('monitoring_staffid_criterion').value;
        var monitoring_dateofvisit_criterion = document.getElementById('monitoring_dateofvisit_criterion').value;
        var monitoring_visittype_criterion = document.getElementById('monitoring_visittype_criterion').value;
        var monitoring_generalcomments_criterion = document.getElementById('monitoring_generalcomments_criterion').value;
        var monitoring_trackid_criterion = document.getElementById('monitoring_trackid_criterion').value;

        //Misean Cara Baseline Survey Conditions
        var misean_cara_grantee_criterion = document.getElementById('misean_cara_grantee_criterion').value;
        var misean_cara_groupid_criterion = document.getElementById('misean_cara_groupid_criterion').value;
        var misean_cara_district_criterion = document.getElementById('misean_cara_district_criterion').value;
        var misean_cara_county_criterion = document.getElementById('misean_cara_county_criterion').value;
        var misean_cara_subcounty_criterion = document.getElementById('misean_cara_subcounty_criterion').value;
        var misean_cara_pwd_criterion = document.getElementById('misean_cara_pwd_criterion').value;
        var misean_cara_chh_criterion = document.getElementById('misean_cara_chh_criterion').value;
        var misean_cara_orphans_criterion = document.getElementById('misean_cara_orphans_criterion').value;
        var misean_cara_hiv_criterion = document.getElementById('misean_cara_hiv_criterion').value;
        var misean_cara_pwdinschool_criterion = document.getElementById('misean_cara_pwdinschool_criterion').value;
        var misean_cara_chhinschool_criterion = document.getElementById('misean_cara_chhinschool_criterion').value;
        var misean_cara_orphansinschool_criterion = document.getElementById('misean_cara_orphansinschool_criterion').value;
        var misean_cara_childrenwithhiv_criterion = document.getElementById('misean_cara_childrenwithhiv_criterion').value;
        var misean_cara_normalinschool_criterion = document.getElementById('misean_cara_normalinschool_criterion').value;
        var misean_cara_mealsperday_criterion = document.getElementById('misean_cara_mealsperday_criterion').value;
        var misean_cara_medicaltreatment_criterion = document.getElementById('misean_cara_medicaltreatment_criterion').value;

        //Crop Production Criteria
        var production_individual_criterion = document.getElementById('production_individual_criterion').value;
        var production_foodstuff_criterion = document.getElementById('production_foodstuff_criterion').value;
        var production_category_criterion = document.getElementById('production_category_criterion').value;
        var production_acresplanted_criterion = document.getElementById('production_acresplanted_criterion').value;
        var production_yieldobtained_criterion = document.getElementById('production_yieldobtained_criterion').value;
        var production_quantitysold_criterion = document.getElementById('production_quantitysold_criterion').value;
        var production_income_criterion = document.getElementById('production_income_criterion').value;

        //Fish Production Criteria
        var fishing_individual_id_criterion = document.getElementById('fishing_individual_id_criterion').value;
        var fishing_size_of_pond_criterion = document.getElementById('fishing_size_of_pond_criterion').value;
        var fishing_number_of_fish_criterion = document.getElementById('fishing_number_of_fish_criterion').value;
        var fishing_quantity_criterion = document.getElementById('fishing_quantity_criterion').value;
        var fishing_income_criterion = document.getElementById('fishing_income_criterion').value;

        //Misean Cara Technology Criteria
        var misean_cara_technology_individual_id_criterion = document.getElementById('misean_cara_technology_individual_id_criterion').value;
        var misean_cara_technology_imprived_seeds_criterion = document.getElementById('misean_cara_technology_imprived_seeds_criterion').value;
        var misean_cara_technology_underground_water_criterion = document.getElementById('misean_cara_technology_underground_water_criterion').value;
        var misean_cara_technology_pesticide_criterion = document.getElementById('misean_cara_technology_pesticide_criterion').value;
        var misean_cara_technology_farm_implements_criterion = document.getElementById('misean_cara_technology_farm_implements_criterion').value;
        var misean_cara_technology_improved_post_harvest_handling_criterion = document.getElementById('misean_cara_technology_improved_post_harvest_handling_criterion').value;
        var misean_cara_technology_row_planting_criterion = document.getElementById('misean_cara_technology_row_planting_criterion').value;
        var misean_cara_technology_other_techniques_criterion = document.getElementById('misean_cara_technology_other_techniques_criterion').value;

        // Marketing Criteria
        var marketing_individual_id_criterion = document.getElementById('marketing_individual_id_criterion').value;
        var marketing_sells_all_vegetables_criterion = document.getElementById('marketing_sells_all_vegetables_criterion').value;
        var marketing_vegetable_market_place_criterion = document.getElementById('marketing_vegetable_market_place_criterion').value;
        var marketing_sells_all_crops_criterion = document.getElementById('misean_cara_technology_pesticide_criterion').value;
        var marketing_crop_place_criterion = document.getElementById('marketing_crop_place_criterion').value;

        //Challenges Criteria
        var challenges_group_id_criterion = document.getElementById('challenges_group_id_criterion').value;
        var challenges_vegetable_production_problems_criterion = document.getElementById('challenges_vegetable_production_problems_criterion').value;
        var challenges_vegetable_marketing_problems_criterion = document.getElementById('challenges_vegetable_marketing_problems_criterion').value;
        var challenges_crop_production_problems_criterion = document.getElementById('challenges_crop_production_problems_criterion').value;
        var challenges_crop_marketing_problems_criterion = document.getElementById('challenges_crop_marketing_problems_criterion').value;

        //Pilot Studies Criteria
        var pilot_studies_interviewer_criterion = document.getElementById('pilot_studies_interviewer_criterion').value;
        var pilot_studies_date_of_interview_criterion = document.getElementById('pilot_studies_date_of_interview_criterion').value;
        var pilot_studies_location_criterion = document.getElementById('pilot_studies_location_criterion').value;
        var pilot_studies_respondent_criterion = document.getElementById('pilot_studies_respondent_criterion').value;
        var pilot_studies_head_of_household_criterion = document.getElementById('pilot_studies_head_of_household_criterion').value;
        var pilot_studies_females_under_5_criterion = document.getElementById('pilot_studies_females_under_5_criterion').value;
        var pilot_studies_females_between_6_and_18_criterion = document.getElementById('pilot_studies_females_between_6_and_18_criterion').value;
        var pilot_studies_males_under_5_criterion = document.getElementById('pilot_studies_males_under_5_criterion').value;
        var pilot_studies_males_between_6_and_18_criterion = document.getElementById('pilot_studies_males_between_6_and_18_criterion').value;
        var pilot_studies_males_between_18_and_45_criterion = document.getElementById('pilot_studies_males_between_18_and_45_criterion').value;
        var pilot_studies_females_between_18_and_45_criterion = document.getElementById('pilot_studies_females_between_18_and_45_criterion').value;
        var pilot_studies_length_of_time_involed_in_projects_criterion = document.getElementById('pilot_studies_length_of_time_involed_in_projects_criterion').value;
        var pilot_studies_daily_household_income_now_criterion = document.getElementById('pilot_studies_daily_household_income_now_criterion').value;
        var pilot_studies_daily_household_income_one_year_ago_criterion = document.getElementById('pilot_studies_daily_household_income_one_year_ago_criterion').value;
        var pilot_studies_number_of_sources_of_income_now_criterion = document.getElementById('pilot_studies_number_of_sources_of_income_now_criterion').value;
        var pilot_studies_sources_of_income_now_criterion = document.getElementById('pilot_studies_sources_of_income_now_criterion').value;
        var pilot_studies_number_of_sources_of_income_one_year_ago_criterion = document.getElementById('pilot_studies_number_of_sources_of_income_one_year_ago_criterion').value;
        var pilot_studies_income_now_additional_notes_criterion = document.getElementById('pilot_studies_income_now_additional_notes_criterion').value;
        var pilot_studies_sources_of_income_1_year_ago_criterion = document.getElementById('pilot_studies_sources_of_income_1_year_ago_criterion').value;
        var pilot_studies_income_one_year_ago_additional_notes_criterion = document.getElementById('pilot_studies_income_one_year_ago_additional_notes_criterion').value;
        var pilot_studies_increase_in_diversity_of_sources_of_income_criterion = document.getElementById('pilot_studies_increase_in_diversity_of_sources_of_income_criterion').value;
        var pilot_studies_medical_expense_criterion = document.getElementById('pilot_studies_medical_expense_criterion').value;
        var pilot_studies_education_expense_criterion = document.getElementById('pilot_studies_education_expense_criterion').value;
        var pilot_studies_house_expense_criterion = document.getElementById('pilot_studies_house_expense_criterion').value;
        var pilot_studies_clothes_expense_criterion = document.getElementById('pilot_studies_clothes_expense_criterion').value;
        var pilot_studies_food_expense_criterion = document.getElementById('pilot_studies_food_expense_criterion').value;
        var pilot_studies_household_assets_criterion = document.getElementById('pilot_studies_household_assets_criterion').value;
        var pilot_studies_other_expenses_criterion = document.getElementById('pilot_studies_other_expenses_criterion').value;
        var pilot_studies_increase_in_household_assets_criterion = document.getElementById('pilot_studies_increase_in_household_assets_criterion').value;
        var pilot_studies_land_increase_criterion = document.getElementById('pilot_studies_land_increase_criterion').value;
        var pilot_studies_land_size_criterion = document.getElementById('pilot_studies_land_size_criterion').value;
        var pilot_studies_permanent_house_criterion = document.getElementById('pilot_studies_permanent_house_criterion').value;
        var pilot_studies_semi_permanent_house_criterion = document.getElementById('pilot_studies_semi_permanent_house_criterion').value;
        var pilot_studies_mud_house_criterion = document.getElementById('pilot_studies_mud_house_criterion').value;
        var pilot_studies_radio_or_tv_criterion = document.getElementById('pilot_studies_radio_or_tv_criterion').value;
        var pilot_studies_mobile_phone__criterion = document.getElementById('pilot_studies_mobile_phone__criterion').value;
        var pilot_studies_automobile_criterion = document.getElementById('pilot_studies_automobile_criterion').value;
        var pilot_studies_breakfast_yesterday_criterion = document.getElementById('pilot_studies_breakfast_yesterday_criterion').value;
        var pilot_studies_snack_for_breakfast_yesterday_criterion = document.getElementById('pilot_studies_snack_for_breakfast_yesterday_criterion').value;
        var pilot_studies_lunch_yesterday_criterion = document.getElementById('pilot_studies_lunch_yesterday_criterion').value;
        var pilot_studies_snack_for_lunch_yesterday_criterion = document.getElementById('pilot_studies_snack_for_lunch_yesterday_criterion').value;
        var pilot_studies_dinner_yesterday_criterion = document.getElementById('pilot_studies_dinner_yesterday_criterion').value;
        var pilot_studies_snack_for_dinner_yesterday_criterion = document.getElementById('pilot_studies_snack_for_dinner_yesterday_criterion').value;
        var pilot_studies_breakfast_1_year_ago_criterion = document.getElementById('pilot_studies_breakfast_1_year_ago_criterion').value;
        var pilot_studies_snack_for_breakfast_1_year_ago_criterion = document.getElementById('pilot_studies_snack_for_breakfast_1_year_ago_criterion').value;
        var pilot_studies_lunch_1_year_ago_criterion = document.getElementById('pilot_studies_lunch_1_year_ago_criterion').value;
        var pilot_studies_snack_for_luch_1_year_ago_criterion = document.getElementById('pilot_studies_snack_for_luch_1_year_ago_criterion').value;
        var pilot_studies_dinner_1_year_ago_criterion = document.getElementById('pilot_studies_dinner_1_year_ago_criterion').value;
        var pilot_studies_snack_for_dinner_1_year_ago_criterion = document.getElementById('pilot_studies_snack_for_dinner_1_year_ago_criterion').value;
        var pilot_studies_cereals_yesterday_criterion = document.getElementById('pilot_studies_cereals_yesterday_criterion').value;
        var pilot_studies_cereals_1_year_ago_criterion = document.getElementById('pilot_studies_cereals_1_year_ago_criterion').value;
        var pilot_studies_vitamin_a_vegetable_yesterday_criterion = document.getElementById('pilot_studies_vitamin_a_vegetable_yesterday_criterion').value;
        var pilot_studies_vitamin_a_vegetable_1_year_ago_criterion = document.getElementById('challenges_crop_marketing_problems_criterion').value;
        var pilot_studies_white_tubers_yesterday_criterion = document.getElementById('pilot_studies_white_tubers_yesterday_criterion').value;
        var pilot_studies_white_tubers_1_year_ago_criterion = document.getElementById('pilot_studies_white_tubers_1_year_ago_criterion').value;
        var pilot_studies_dark_green_leafy_vegetables_yesterday_criterion = document.getElementById('pilot_studies_dark_green_leafy_vegetables_yesterday_criterion').value;
        var pilot_studies_dark_green_leafy_vegetables_1_year_ago_criterion = document.getElementById('pilot_studies_dark_green_leafy_vegetables_1_year_ago_criterion').value;
        var pilot_studies_other_vegetables_yesterday_criterion = document.getElementById('pilot_studies_other_vegetables_yesterday_criterion').value;
        var pilot_studies_other_vegetables_1_year_ago_criterion = document.getElementById('pilot_studies_other_vegetables_1_year_ago_criterion').value;
        var pilot_studies_vitamin_a_fruits_yesterday_criterion = document.getElementById('pilot_studies_vitamin_a_fruits_yesterday_criterion').value;
        var pilot_studies_vitamin_a_fruits_1_year_ago_criterion = document.getElementById('pilot_studies_vitamin_a_fruits_1_year_ago_criterion').value;
        var pilot_studies_other_fruits_yesterday_criterion = document.getElementById('pilot_studies_other_fruits_yesterday_criterion').value;
        var pilot_studies_other_fruits_year_ago_criterion = document.getElementById('pilot_studies_other_fruits_year_ago_criterion').value;
        var pilot_studies_organ_meat_yesterday_criterion = document.getElementById('pilot_studies_organ_meat_yesterday_criterion').value;
        var pilot_studies_organ_meat_1_year_ago_criterion = document.getElementById('pilot_studies_organ_meat_1_year_ago_criterion').value;
        var pilot_studies_flesh_meats_yesterday_criterion = document.getElementById('pilot_studies_flesh_meats_yesterday_criterion').value;
        var pilot_studies_flesh_meats_1_year_ago_criterion = document.getElementById('pilot_studies_flesh_meats_1_year_ago_criterion').value;
        var pilot_studies_eggs_yesterday_criterion = document.getElementById('pilot_studies_eggs_yesterday_criterion').value;
        var pilot_studies_eggs_1_year_ago_criterion = document.getElementById('pilot_studies_eggs_1_year_ago_criterion').value;
        var pilot_studies_fish_yesterday_criterion = document.getElementById('pilot_studies_fish_yesterday_criterion').value;
        var pilot_studies_fish_1_year_ago_criterion = document.getElementById('pilot_studies_fish_1_year_ago_criterion').value;
        var pilot_studies_legumes_yesterday_criterion = document.getElementById('pilot_studies_legumes_yesterday_criterion').value;
        var pilot_studies_legumes_1_year_ago_criterion = document.getElementById('pilot_studies_legumes_1_year_ago_criterion').value;
        var pilot_studies_milk_yesterday_criterion = document.getElementById('pilot_studies_milk_yesterday_criterion').value;
        var pilot_studies_milk_1_year_ago_criterion = document.getElementById('pilot_studies_milk_1_year_ago_criterion').value;
        var pilot_studies_oils_and_fats_yesterday_criterion = document.getElementById('pilot_studies_oils_and_fats_yesterday_criterion').value;
        var pilot_studies_oils_and_fats_1_year_ago_criterion = document.getElementById('pilot_studies_oils_and_fats_1_year_ago_criterion').value;
        var pilot_studies_red_palm_yesterday_criterion = document.getElementById('pilot_studies_red_palm_yesterday_criterion').value;
        var pilot_studies_1_year_ago_criterion = document.getElementById('pilot_studies_1_year_ago_criterion').value;
        var pilot_studies_sweets_yesterday_criterion = document.getElementById('pilot_studies_sweets_yesterday_criterion').value;
        var pilot_studies_sweets_1_year_ago_criterion = document.getElementById('pilot_studies_sweets_1_year_ago_criterion').value;
        var pilot_studies_spices_yesterday_criterion = document.getElementById('pilot_studies_spices_yesterday_criterion').value;
        var pilot_studies_spices_1_year_ago_criterion = document.getElementById('pilot_studies_spices_1_year_ago_criterion').value;
        var pilot_studies_dish_rack_criterion = document.getElementById('pilot_studies_dish_rack_criterion').value;
        var pilot_studies_compost_pit_criterion = document.getElementById('pilot_studies_compost_pit_criterion').value;
        var pilot_studies_cloth_drying_line_criterion = document.getElementById('pilot_studies_cloth_drying_line_criterion').value;
        var pilot_studies_latrine_criterion = document.getElementById('pilot_studies_latrine_criterion').value;
        var pilot_studies_tippy_tap_criterion = document.getElementById('pilot_studies_tippy_tap_criterion').value;
        var pilot_studies_boils_water_criterion = document.getElementById('pilot_studies_boils_water_criterion').value;
        var pilot_studies_improved_living_standard_criterion = document.getElementById('pilot_studies_improved_living_standard_criterion').value;
        var pilot_studies_significant_story_criterion = document.getElementById('pilot_studies_significant_story_criterion').value;
        var pilot_studies_reason_for_low_living_standard_criterion = document.getElementById('pilot_studies_reason_for_low_living_standard_criterion').value;
        var pilot_studies_improved_diet_criterion = document.getElementById('pilot_studies_improved_diet_criterion').value;
        var pilot_studies_improved_knowledge_of_nutrition_criterion = document.getElementById('pilot_studies_improved_knowledge_of_nutrition_criterion').value;
        var pilot_studies_increased_household_asset_base_criterion = document.getElementById('pilot_studies_increased_household_asset_base_criterion').value;
        var pilot_studies_reduced_post_harvest_loss_due_to_improved_storage_criterion = document.getElementById('pilot_studies_reduced_post_harvest_loss_due_to_improved_storage_criterion').value;
        var pilot_studies_conclusion_criterion = document.getElementById('pilot_studies_conclusion_criterion').value;
        var pilot_studies_recommendation_criterion = document.getElementById('pilot_studies_recommendation_criterion').value;

        // Porticus Baseline Survey Criteria
        var porticus_name_of_respondent_criterion = document.getElementById('porticus_name_of_respondent_criterion').value;
        var porticus_age_of_respondent_criterion = document.getElementById('porticus_age_of_respondent_criterion').value;
        var porticus_village_criterion = document.getElementById('porticus_village_criterion').value;
        var porticus_gender_of_resspondent_criterion = document.getElementById('porticus_gender_of_resspondent_criterion').value;
        var porticus_name_of_vulnerable_criterion = document.getElementById('porticus_name_of_vulnerable_criterion').value;
        var porticus_gender_of_vulnerable_criterion = document.getElementById('porticus_gender_of_vulnerable_criterion').value;
        var porticus_age_of_vulnerable_criterion = document.getElementById('porticus_age_of_vulnerable_criterion').value;
        var porticus_category_of_disability_criterion = document.getElementById('porticus_category_of_disability_criterion').value;
        var porticus_name_of_disability_criterion = document.getElementById('porticus_name_of_disability_criterion').value;
        var porticus_marital_status_criterion = document.getElementById('porticus_marital_status_criterion').value;
        var porticus_level_of_education_criterion = document.getElementById('porticus_level_of_education_criterion').value;
        var porticus_occupation_criterion = document.getElementById('porticus_occupation_criterion').value;
        var porticus_household_monthly_income_criterion = document.getElementById('porticus_household_monthly_income_criterion').value;
        var porticus_definition_of_disability_criterion = document.getElementById('porticus_definition_of_disability_criterion').value;
        var porticus_list_of_disabilities_criterion = document.getElementById('porticus_list_of_disabilities_criterion').value;
        var porticus_causes_of_disabilities_known_criterion = document.getElementById('porticus_causes_of_disabilities_known_criterion').value;
        var porticus_ways_of_prevention_criterion = document.getElementById('porticus_ways_of_prevention_criterion').value;
        var porticus_feeling_of_having_a_vulnerable_criterion = document.getElementById('porticus_feeling_of_having_a_vulnerable_criterion').value;
        var porticus_feeling_of_the_community_criterion = document.getElementById('porticus_feeling_of_the_community_criterion').value;
        var porticus_vulnerable_supported_criterion = document.getElementById('porticus_vulnerable_supported_criterion').value;
        var porticus_support_given_criterion = document.getElementById('porticus_support_given_criterion').value;
        var porticus_why_not_supported_criterion = document.getElementById('porticus_why_not_supported_criterion').value;
        var porticus_rehabilitation_received_criterion = document.getElementById('porticus_rehabilitation_received_criterion').value;
        var porticus_place_of_rehabilitation_criterion = document.getElementById('porticus_place_of_rehabilitation_criterion').value;
        var porticus_kind_of_treatment_received_criterion = document.getElementById('porticus_kind_of_treatment_received_criterion').value;
        var porticus_cost_of_treatment_criterion = document.getElementById('porticus_cost_of_treatment_criterion').value;
        var porticus_duration_of_the_treatment_criterion = document.getElementById('porticus_duration_of_the_treatment_criterion').value;
        var porticus_frequency_of_attendance_criterion = document.getElementById('porticus_frequency_of_attendance_criterion').value;
        var porticus_regular_attendance_criterion = document.getElementById('porticus_regular_attendance_criterion').value;
        var porticus_reason_for_not_attending_daily_criterion = document.getElementById('porticus_reason_for_not_attending_daily_criterion').value;
        var porticus_quality_of_service_criterion = document.getElementById('porticus_quality_of_service_criterion').value;
        var porticus_training_recieved_criterion = document.getElementById('porticus_training_recieved_criterion').value;
        var porticus_name_of_trainer_criterion = document.getElementById('porticus_name_of_trainer_criterion').value;
        var porticus_training_was_about_criterion = document.getElementById('porticus_training_was_about_criterion').value;
        var porticus_help_of_the_training_criterion = document.getElementById('porticus_help_of_the_training_criterion').value;
        var porticus_challenges_faced_in_caring__criterion = document.getElementById('porticus_challenges_faced_in_caring__criterion').value;
        var porticus_strengths_of_the_vulnerable_criterion = document.getElementById('porticus_strengths_of_the_vulnerable_criterion').value;
        var porticus_weaknesses_of_the_vulnerable_criterion = document.getElementById('porticus_weaknesses_of_the_vulnerable_criterion').value;
        var porticus_hope_for_the_vulnerable_criterion = document.getElementById('porticus_hope_for_the_vulnerable_criterion').value;
        var porticus_organization_help_needed_criterion = document.getElementById('porticus_organization_help_needed_criterion').value;

        // Marketing Criteria
        var hygiene_membership_id_criterion = document.getElementById('hygiene_membership_id_criterion').value;
        var hygiene_sex_criterion = document.getElementById('hygiene_sex_criterion').value;
        var hygiene_group_name_criterion = document.getElementById('hygiene_group_name_criterion').value;
        var hygiene_district_criterion = document.getElementById('hygiene_district_criterion').value;
        var hygiene_subcounty_criterion = document.getElementById('hygiene_subcounty_criterion').value;
        var hygiene_parish_criterion = document.getElementById('hygiene_parish_criterion').value;
        var hygiene_pit_latrine_criterion = document.getElementById('hygiene_pit_latrine_criterion').value;
        var hygiene_rubbish_pit_criterion = document.getElementById('hygiene_rubbish_pit_criterion').value;
        var hygiene_bathing_shelter_criterion = document.getElementById('hygiene_bathing_shelter_criterion').value;
        var hygiene_tippy_tap_criterion = document.getElementById('hygiene_tippy_tap_criterion').value;
        var hygiene_plate_drying_rack_criterion = document.getElementById('hygiene_plate_drying_rack_criterion').value;
        var hygiene_kitchen_garden_criterion = document.getElementById('hygiene_kitchen_garden_criterion').value;
        var hygiene_fruit_trees_criterion = document.getElementById('hygiene_fruit_trees_criterion').value;
        var hygiene_nrm_practices_criterion = document.getElementById('hygiene_nrm_practices_criterion').value;
        var hygiene_maize_crib_criterion = document.getElementById('hygiene_maize_crib_criterion').value;
        var hygiene_drying_rack_criterion = document.getElementById('hygiene_drying_rack_criterion').value;
        var hygiene_tapaulin_criterion = document.getElementById('hygiene_tapaulin_criterion').value;
        var hygiene_granary_criterion = document.getElementById('hygiene_granary_criterion').value;
        var hygiene_papyrus_mat_criterion = document.getElementById('hygiene_papyrus_mat_criterion').value;
        var hygiene_earth_floor_criterion = document.getElementById('hygiene_earth_floor_criterion').value;
        var hygiene_date_checked_criterion = document.getElementById('hygiene_date_checked_criterion').value;
        var hygiene_staff_criterion = document.getElementById('hygiene_staff_criterion').value;
        var hygiene_date_recorded_criterion = document.getElementById('hygiene_date_recorded_criterion').value;


//        alert(document.getElementById('query_category').value);
        if (document.querySelector('input[name="query_category"]:checked') === null) {
            alert('Please select the category of information you want to query');
        } else {
            if (query_tables.length === 0) {
                alert('Please Select the required tables for query building');
            } else {

                /*
                 **********************************************************************************************************
                 * ********************************** Checking the number of table to be used and creating the joins ******
                 */
                if (query_tables.length > 1) {

                    if (contains.call(query_tables, 'CHILDREN') & contains.call(query_tables, 'ASSESSMENT_1_RECORDS')) {
                        var join = [];

                        join.push('ASSESSMENT_1_RECORDS');
                        join.push('CHILDREN.CHILD_ID = ASSESSMENT_1_RECORDS.CHILD_ID');

                        joins.push(join);
                    }

                    if (contains.call(required_fields, 'LIVELIHOODGROUPCATEGORIES')) {
                        var join = [];

                        join.push('LIVELIHOODGROUPCATEGORIES');
                        join.push('CHILDREN.CHILD_ID = ASSESSMENT_1_RECORDS.CHILD_ID');

                        joins.push(join);
                    }


                    if (contains.call(required_fields, 'MEMBERSHIP.VULNERABILITY') & contains.call(query_tables, 'MEMBERSHIP')) {

                        if (contains.call(query_tables, 'TRAININGS') & contains.call(query_tables, 'TRAINING_ATTENDANCE') & contains.call(query_tables, 'MEMBERSHIP')) {
                            var join_1 = [];
                            var join_2 = [];

                            var index = query_tables.indexOf('MEMBERSHIP');

                            query_tables[index] = 'TRAININGS';

                            join_1.push('TRAINING_ATTENDANCE');
                            join_1.push('TRAINING_ATTENDANCE.TRAINING_ID = TRAININGS.ID');

                            joins.push(join_1);

                            join_2.push('MEMBERSHIP');
                            join_2.push('TRAINING_ATTENDANCE.ATTENDANT = MEMBERSHIP.MEMBERSHIP_ID');

                            joins.push(join_2);


                        }

                        else if (contains.call(query_tables, 'TRAINING_ATTENDANCE') & contains.call(query_tables, 'MEMBERSHIP')) {
                            var join = [];

                            join.push('TRAINING_ATTENDANCE');
                            join.push('TRAINING_ATTENDANCE.ATTENDANT = MEMBERSHIP.MEMBERSHIP_ID');

                            joins.push(join);
                        }

                        else if (contains.call(query_tables, 'TRAININGS') & contains.call(query_tables, 'TRAINING_ATTENDANCE')) {
                            var join = [];

                            join.push('TRAINING_ATTENDANCE');
                            join.push('TRAININGS.ID = TRAINING_ATTENDANCE.TRAINING_ID');

                            joins.push(join);
                        }

                        var join_a = [];
                        var index = required_fields.indexOf('MEMBERSHIP.VULNERABILITY');
                        //
                        required_fields[index] = 'DISABILITIES.DISABILITY_NAME';
                        //
                        query_tables.push('DISABILITIES');
                        //
                        join_a.push('DISABILITIES');
                        join_a.push('DISABILITIES.DISABILITY_ID = MEMBERSHIP.VULNERABILITY');
                        //
                        joins.push(join_a);
                    } else {

                        if (contains.call(query_tables, 'TRAININGS') & contains.call(query_tables, 'TRAINING_ATTENDANCE')) {
                            var join = [];

                            join.push('TRAINING_ATTENDANCE');
                            join.push('TRAININGS.ID = TRAINING_ATTENDANCE.TRAINING_ID');

                            joins.push(join);
                        }
                    }


                    if (contains.call(query_tables, 'GROUPS') & contains.call(query_tables, 'MEMBERSHIP')) {
                        var join = [];

                        join.push('MEMBERSHIP');
                        join.push('GROUPS.GROUP_ID = MEMBERSHIP.GROUPS');

                        joins.push(join);
                    }

                    /*                    if (contains.call(query_tables, 'GROUPS') & contains.call(query_tables, 'MEMBERSHIP')) {
                     var join = [];
                     var index = required_fields.indexOf('GROUPS.LOCATION');

                     required_fields[index] = 'VILLAGE.VILLAGE';

                     query_tables.push('VILLAGE');

                     join.push('VILLAGE');
                     join.push('VILLAGE.ID = GROUPS.LOCATION');

                     joins.push(join);
                     }
                     */
                    if (contains.call(query_tables, 'ORGANIZATION_STAFF_NEW') & contains.call(query_tables, 'ORGANIZATION_DEPARTMENTS_NEW')) {
                        var join = [];

                        join.push('ORGANIZATION_STAFF_NEW');
                        join.push('ORGANIZATION_STAFF_NEW.DEPARTMENT = ORGANIZATION_DEPARTMENTS_NEW.ID');

                        joins.push(join);
                    }

                    if (contains.call(query_tables, 'CHILDREN') & contains.call(query_tables, 'ASSESSMENT_2_RECORDS_NEW')) {
                        var join = [];

                        join.push('ASSESSMENT_2_RECORDS_NEW');
                        join.push('CHILDREN.CHILD_ID = ASSESSMENT_2_RECORDS_NEW.CHILD');

                        joins.push(join);
                    }

                    if (contains.call(query_tables, 'CHILDREN') & contains.call(query_tables, 'VISIT_RECORDS')) {
                        var join = [];

                        join.push('VISIT_RECORDS');
                        join.push('CHILDREN.CHILD_ID = VISIT_RECORDS.CHILD_ID_VISITED');

                        joins.push(join);
                    }

                    if (contains.call(query_tables, 'TRAININGS') & contains.call(query_tables, 'TRAINING_OUTCOMES')) {
                        var join = [];

                        join.push('TRAINING_OUTCOMES');
                        join.push('TRAINING_OUTCOMES.TRAINING_ID = TRAININGS.ID');

                        joins.push(join);
                    }

                    if (contains.call(query_tables, 'TRAININGS') & contains.call(query_tables, 'COURSES_AND_TOPICS')) {
                        var join = [];

                        join.push('COURSES_AND_TOPICS');
                        join.push('TRAININGS.TOPIC = COURSES_AND_TOPICS.ID');

                        joins.push(join);
                    }

                    if (contains.call(query_tables, 'MISEAN_CARA_BASELINE_SURVEYS') & contains.call(query_tables, 'VEGETABLE_PRODUCTION_NEW')) {
                        var join = [];

                        join.push('VEGETABLE_PRODUCTION_NEW');
                        join.push('MISEAN_CARA_BASELINE_SURVEYS.TRACK_ID = VEGETABLE_PRODUCTION_NEW.TRACK_ID');

                        joins.push(join);
                    }

                    if (contains.call(query_tables, 'MISEAN_CARA_BASELINE_SURVEYS') & contains.call(query_tables, 'FISH_FARMING_RECORDS')) {
                        var join = [];

                        join.push('VEGETABLE_PRODUCTION_NEW');
                        join.push('MISEAN_CARA_BASELINE_SURVEYS.TRACK_ID = FISH_FARMING_RECORDS.TRACK_ID');

                        joins.push(join);
                    }

                    if (contains.call(query_tables, 'MISEAN_CARA_BASELINE_SURVEYS') & contains.call(query_tables, 'PRODUCTION_PROBLEMS')) {
                        var join = [];

                        join.push('VEGETABLE_PRODUCTION_NEW');
                        join.push('MISEAN_CARA_BASELINE_SURVEYS.TRACK_ID = PRODUCTION_PROBLEMS.TRACK_ID');

                        joins.push(join);
                    }

                    if (contains.call(query_tables, 'MISEAN_CARA_BASELINE_SURVEYS') & contains.call(query_tables, 'MISEAN_CARA_BENEFICIARIES_NEW')) {
                        var join = [];

                        join.push('VEGETABLE_PRODUCTION_NEW');
                        join.push('MISEAN_CARA_BASELINE_SURVEYS.TRACK_ID = MISEAN_CARA_BENEFICIARIES_NEW.TRACK_ID');

                        joins.push(join);
                    }

                    if (contains.call(query_tables, 'MISEAN_CARA_BASELINE_SURVEYS') & contains.call(query_tables, 'CHANGE_IN_KNOWLEDGE_NEWER')) {
                        var join = [];

                        join.push('VEGETABLE_PRODUCTION_NEW');
                        join.push('MISEAN_CARA_BASELINE_SURVEYS.TRACK_ID = CHANGE_IN_KNOWLEDGE_NEWER.TRACK_ID');

                        joins.push(join);
                    }

                }

                /*
                 ************************************************************************************************************
                 * ***************************************** Checking the list of required fields to be displayed     *******
                 *
                 */

                if (required_fields.length === 0) {
                    alert('Please Select the required fields from the list of tables displayed');
                } else {

                    //Setting the values for the condition clause
                    if (group_name !== '') {
                        var record = [];
                        record.push('GROUPS.GROUP_NAME');
                        record.push(group_name);

                        conditions.push(record);
                    }
                    if (group_location !== '') {
                        var record = [];
                        record.push('GROUPS.LOCATION');
                        record.push(group_location);

                        conditions.push(record);

                    }
                    if (group_registration !== '') {
                        var record = [];
                        record.push('GROUPS.DATE_OF_REGISTRATION');
                        record.push(group_registration);

                        conditions.push(record);

                    }
                    if (group_id !== '') {
                        var record = [];
                        record.push('GROUPS.GROUP_ID');
                        record.push(group_id);

                        conditions.push(record);

                    }
                    if (group_type !== '') {
                        var record = [];
                        record.push('LIVELIHOODGROUPCATEGORIES.CATEGORYNAME');
                        record.push(group_type);

                        conditions.push(record);

                    }
                    if (membername_criterion !== '') {
                        var record = [];
                        record.push('MEMBERSHIP.NAME');
                        record.push(membername_criterion);

                        conditions.push(record);

                    }
                    if (membersex_criterion !== '') {
                        var record = [];
                        record.push('MEMBERSHIP.SEX');
                        record.push(membersex_criterion);

                        conditions.push(record);

                    }
                    if (membervulnerability_criterion !== '') {
                        var record = [];
                        record.push('DISABILITIES.DISABILITY_NAME');
                        record.push(membervulnerability_criterion);

                        conditions.push(record);

                    }
                    if (membertitle_criterion !== '') {
                        var record = [];
                        record.push('MEMBERSHIP.TITLE');
                        record.push(membertitle_criterion);

                        conditions.push(record);

                    }
                    if (memberdateofbirth_criterion !== '') {
                        var record = [];
                        record.push('MEMBERSHIP.DATE_OF_BIRTH');
                        record.push(memberdateofbirth_criterion);

                        conditions.push(record);

                    }
                    if (membergroup_criterion !== '') {
                        var record = [];
                        record.push('MEMBERSHIP.GROUPS');
                        record.push(membergroup_criterion);

                        conditions.push(record);

                    }
                    if (memberparish_criterion !== '') {
                        var record = [];
                        record.push('PARISH.PARISH');
                        record.push(memberparish_criterion);

                        conditions.push(record);

                    }
                    if (membervillage_criterion !== '') {
                        var record = [];
                        record.push('VILLAGE.VILLAGE');
                        record.push(membervillage_criterion);

                        conditions.push(record);

                    }
                    if (memberdateofjoining_criterion !== '') {
                        var record = [];
                        record.push('MEMBERSHIP.DATE_OF_JOINING');
                        record.push(memberdateofjoining_criterion);

                        conditions.push(record);

                    }
                    if (membertelephone_criterion !== '') {
                        var record = [];
                        record.push('MEMBERSHIP.TELEPHONE');
                        record.push(membertelephone_criterion);

                        conditions.push(record);

                    }
                    if (membershipid_criterion !== '') {
                        var record = [];
                        record.push('MEMBERSHIP.MEMBERSHIP_ID');
                        record.push(membershipid_criterion);

                        conditions.push(record);

                    }
                    /**
                     * Created by engineer on 3/11/19.
                     */

                    if (childname_criterion !== '') {
                        var record = [];
                        record.push('CHILDREN.NAME');
                        record.push(childname_criterion);

                        conditions.push(record);

                    }
                    if (childsex_criterion !== '') {
                        var record = [];
                        record.push('CHILDREN.SEX');
                        record.push(childsex_criterion);

                        conditions.push(record);

                    }
                    if (childvulnerability_criterion !== '') {
                        var record = [];
                        record.push('DISABILITIES.DISABILITY_NAME');
                        record.push(childvulnerability_criterion);

                        conditions.push(record);

                    }
                    if (chillddateofbirth_criterion !== '') {
                        var record = [];
                        record.push('CHILDREN.DATE_OF_BIRTH');
                        record.push(chillddateofbirth_criterion);

                        conditions.push(record);

                    }
                    if (childparish_criterion !== '') {
                        var record = [];
                        record.push('PARISH.PARISH');
                        record.push(childparish_criterion);

                        conditions.push(record);

                    }
                    if (childvillage_criterion !== '') {
                        var record = [];
                        record.push('VILLAGE.VILLAGE');
                        record.push(childvillage_criterion);

                        conditions.push(record);

                    }
                    if (childdateofjoining_criterion !== '') {
                        var record = [];
                        record.push('CHILDREN.DATE_OF_JOINING');
                        record.push(childdateofjoining_criterion);

                        conditions.push(record);

                    }
                    if (children_project_criterion !== '') {
                        var record = [];
                        record.push('CHILDREN.PROJECT');
                        record.push(children_project_criterion);

                        conditions.push(record);

                    }
                    if (childmother_criterion !== '') {
                        var record = [];
                        record.push('CHILDREN.MOTHER');
                        record.push(childmother_criterion);

                        conditions.push(record);

                    }
                    if (childfather_criterion !== '') {
                        var record = [];
                        record.push('CHILDREN.FATHER');
                        record.push(childfather_criterion);

                        conditions.push(record);

                    }
                    if (childguardian_criterion !== '') {
                        var record = [];
                        record.push('CHILDREN.GUARDIAN');
                        record.push(childguardian_criterion);

                        conditions.push(record);

                    }
                    if (childid_criterion !== '') {
                        var record = [];
                        record.push('CHILDREN.CHILD_ID');
                        record.push(childid_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_county_criterion !== '') {
                        var record = [];
                        record.push('COUNTY.COUNTY');
                        record.push(assessment_1_county_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_subcounty_criterion !== '') {
                        var record = [];
                        record.push('SUBCOUNTY.SUBCOUNTY');
                        record.push(assessment_1_subcounty_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_parish_criterion !== '') {
                        var record = [];
                        record.push('PARISH.PARISH');
                        record.push(assessment_1_parish_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_village_criterion !== '') {
                        var record = [];
                        record.push('VILLAGE.VILLAGE');
                        record.push(assessment_1_village_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_healthcentre_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.HEALTH_CENTRE');
                        record.push(assessment_1_healthcentre_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_dateentered_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.DATE_ENTERED');
                        record.push(assessment_1_dateentered_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_cbrname_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.CBR_NAME');
                        record.push(assessment_1_cbrname_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_childid_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.CHILD_ID');
                        record.push(assessment_1_childid_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_dateofbirth_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.DATE_OF_BIRTH');
                        record.push(assessment_1_dateofbirth_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_sex_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.SEX');
                        record.push(assessment_1_sex_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_disabilitytype_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.DISABILITY_TYPE');
                        record.push(assessment_1_disabilitytype_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_wherechildlives_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.WHERE_THE_CHILD_LIVES');
                        record.push(assessment_1_wherechildlives_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_otherspecifiedplace_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.OTHER_SPECIFIED_PLACE');
                        record.push(assessment_1_otherspecifiedplace_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_otherdisabledchildren_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.OTHER_DISABLED_CHILDREN');
                        record.push(assessment_1_otherdisabledchildren_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_numberofotherdisabledchildren_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.NUMBER_OF_OTHER_DISABLED_CHILDREN');
                        record.push(assessment_1_numberofotherdisabledchildren_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_abletoprovidebasicneeds_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.ABLE_TO_PROVIDE_BASIC_NEEDS');
                        record.push(assessment_1_abletoprovidebasicneeds_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_explanationforinabilitytoprovidebasicneeds_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.EXPLANATION_FOR_INABILITY_TO_PROVIDE_BASIC_NEEDS');
                        record.push(assessment_1_explanationforinabilitytoprovidebasicneeds_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_disabilitydescription_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.DISABILITY_DESCRIPTION');
                        record.push(assessment_1_disabilitydescription_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_childusesmedicine_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.CHILD_USES_MEDICINE');
                        record.push(assessment_1_childusesmedicine_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_nameofmedicine_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.NAME_OF_MEDICINE');
                        record.push(assessment_1_nameofmedicine_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_childhasfits_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.CHILD_HAS_FITS');
                        record.push(assessment_1_childhasfits_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_numberoffits_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.NUMBER_OF_FITS');
                        record.push(assessment_1_numberoffits_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_limbsmovewell_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.LIMBS_MOVE_WELL');
                        record.push(assessment_1_limbsmovewell_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_limbsthatmovewell_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.LIMBS_THAT_MOVE_WELL');
                        record.push(assessment_1_limbsthatmovewell_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_childusesaids_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.CHILD_USES_AIDS');
                        record.push(assessment_1_childusesaids_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_typeofaidsused_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.TYPE_OF_AIDS_USED');
                        record.push(assessment_1_typeofaidsused_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_childtalks_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.CHILD_TALKS');
                        record.push(assessment_1_childtalks_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_childsees_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.CHILD_SEES');
                        record.push(assessment_1_childsees_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_mentalcapacity_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.MENTAL_CAPACITY');
                        record.push(assessment_1_mentalcapacity_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_eatsandddrinks_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.EATS_AND_DRINKS');
                        record.push(assessment_1_eatsandddrinks_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_washesanddresses_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.WASHES_AND_DRESSES');
                        record.push(assessment_1_washesanddresses_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_toiletactivities_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.TOILET_ACTIVITIES');
                        record.push(assessment_1_toiletactivities_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_howchildmoves_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.HOW_THE_CHILD_MOVES');
                        record.push(assessment_1_howchildmoves_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_childplayswithothers_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.CHILD_PLAYS_WITH_OTHERS');
                        record.push(assessment_1_childplayswithothers_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_helpsinhouseholdcores_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.HELPS_IN_HOUSEHOLD_CORES');
                        record.push(assessment_1_helpsinhouseholdcores_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_acceptedbyfamilyandloved_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.ACCEPTED_BY_FAMILY_AND_LOVED');
                        record.push(assessment_1_acceptedbyfamilyandloved_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_acceptedbycommunity_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.ACCEPTED_BY_COMMUNITY');
                        record.push(assessment_1_acceptedbycommunity_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_goestoschool_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.GOES_TO_SCHOOL');
                        record.push(assessment_1_goestoschool_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_school_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.SCHOOL');
                        record.push(assessment_1_school_criterion);

                        conditions.push(record);

                    }
                    if (assessment_1_comment_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_1_RECORDS.COMMENT');
                        record.push(assessment_1_comment_criterion);

                        conditions.push(record);

                    }
                    if (assessment_2_child_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_2_RECORDS_NEW.CHILD');
                        record.push(assessment_2_child_criterion);

                        conditions.push(record);

                    }
                    if (assessment_2_dateoffirstscreening_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_2_RECORDS_NEW.DATE_OF_FIRST_SCREENING');
                        record.push(assessment_2_dateoffirstscreening_criterion);

                        conditions.push(record);

                    }
                    if (assessment_2_identifiedby_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_2_RECORDS_NEW.IDENTIFIED_BY');
                        record.push(assessment_2_identifiedby_criterion);

                        conditions.push(record);

                    }
                    if (assessment_2_assessedby_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_2_RECORDS_NEW.ASSESSED_BY');
                        record.push(assessment_2_assessedby_criterion);

                        conditions.push(record);

                    }
                    if (assessment_2_distance_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_2_RECORDS_NEW.DISTANCE');
                        record.push(assessment_2_distance_criterion);

                        conditions.push(record);

                    }
                    if (assessment_2_nearesthealthcentre_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_2_RECORDS_NEW.NEAREST_HEALTH_CENTRE');
                        record.push(assessment_2_nearesthealthcentre_criterion);

                        conditions.push(record);

                    }
                    if (assessment_2_venueforscreening_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_2_RECORDS_NEW.VENUE_FOR_SCREENING');
                        record.push(assessment_2_venueforscreening_criterion);

                        conditions.push(record);

                    }
                    if (assessment_2_medicalhistory_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_2_RECORDS_NEW.MEDICAL_HISTORY');
                        record.push(assessment_2_medicalhistory_criterion);

                        conditions.push(record);

                    }
                    if (assessment_2_findings_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_2_RECORDS_NEW.FINDINGS');
                        record.push(assessment_2_findings_criterion);

                        conditions.push(record);

                    }
                    if (assessment_2_disability_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_2_RECORDS_NEW.DISABILITY');
                        record.push(assessment_2_disability_criterion);

                        conditions.push(record);

                    }
                    if (assessment_2_recommendation_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_2_RECORDS_NEW.RECOMMENDATION');
                        record.push(assessment_2_recommendation_criterion);

                        conditions.push(record);

                    }
                    if (assessment_2_screenedby_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_2_RECORDS_NEW.SCREENED_BY');
                        record.push(assessment_2_screenedby_criterion);

                        conditions.push(record);

                    }
                    if (assessment_2_dateentered_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_2_RECORDS_NEW.DATE_ENTERED');
                        record.push(assessment_2_dateentered_criterion);

                        conditions.push(record);

                    }
                    if (assessment_2_title_criterion !== '') {
                        var record = [];
                        record.push('ASSESSMENT_2_RECORDS_NEW.TITLE');
                        record.push(assessment_2_title_criterion);

                        conditions.push(record);

                    }
                    if (visitation_dateofvisit_criterion !== '') {
                        var record = [];
                        record.push('VISIT_RECORDS.DATE_OF_VISIT');
                        record.push(visitation_dateofvisit_criterion);

                        conditions.push(record);

                    }
                    if (visitation_kindofvisit_criterion !== '') {
                        var record = [];
                        record.push('VISIT_RECORDS.KIND_OF_VISIT');
                        record.push(visitation_kindofvisit_criterion);

                        conditions.push(record);

                    }
                    if (visitation_childidvisited_criterion !== '') {
                        var record = [];
                        record.push('VISIT_RECORDS.CHILD_ID_VISITED');
                        record.push(visitation_childidvisited_criterion);

                        conditions.push(record);

                    }
                    if (visitation_village_criterion !== '') {
                        var record = [];
                        record.push('VISIT_RECORDS.VILLAGE');
                        record.push(visitation_village_criterion);

                        conditions.push(record);

                    }
                    if (visitation_parish_criterion !== '') {
                        var record = [];
                        record.push('VISIT_RECORDS.PARISH');
                        record.push(visitation_parish_criterion);

                        conditions.push(record);

                    }
                    if (visitation_subcounty_criterion !== '') {
                        var record = [];
                        record.push('VISIT_RECORDS.SUBCOUNTY');
                        record.push(visitation_subcounty_criterion);

                        conditions.push(record);

                    }
                    if (visitation_activitycarriedout_criterion !== '') {
                        var record = [];
                        record.push('VISIT_RECORDS.ACTIVITY_CARRIED_OUT');
                        record.push(visitation_activitycarriedout_criterion);

                        conditions.push(record);

                    }
                    if (visitation_nextvisitactivity_criterion !== '') {
                        var record = [];
                        record.push('VISIT_RECORDS.NEXT_VISIT_ACTIVITY');
                        record.push(visitation_nextvisitactivity_criterion);

                        conditions.push(record);

                    }
                    if (visitation_wacfostaff_criterion !== '') {
                        var record = [];
                        record.push('VISIT_RECORDS.WACFO_STAFF');
                        record.push(visitation_wacfostaff_criterion);

                        conditions.push(record);

                    }
                    if (visitation_comment_criterion !== '') {
                        var record = [];
                        record.push('VISIT_RECORDS.COMMENT');
                        record.push(visitation_comment_criterion);

                        conditions.push(record);

                    }
                    if (visitation_nextvisitdate_criterion !== '') {
                        var record = [];
                        record.push('VISIT_RECORDS.NEXT_VISIT_DATE');
                        record.push(visitation_nextvisitdate_criterion);

                        conditions.push(record);

                    }
                    if (department_name_criterion !== '') {
                        var record = [];
                        record.push('ORGANIZATION_DEPARTMENTS_NEW.NAME');
                        record.push(department_name_criterion);

                        conditions.push(record);

                    }
                    if (department_prefix_criterion !== '') {
                        var record = [];
                        record.push('ORGANIZATION_DEPARTMENTS_NEW.PREFIX');
                        record.push(department_prefix_criterion);

                        conditions.push(record);

                    }
                    if (staff_name_criterion !== '') {
                        var record = [];
                        record.push('ORGANIZATION_STAFF_NEW.NAME');
                        record.push(staff_name_criterion);

                        conditions.push(record);

                    }
                    if (staff_role_criterion !== '') {
                        var record = [];
                        record.push('ORGANIZATION_STAFF_NEW.ROLE');
                        record.push(staff_role_criterion);

                        conditions.push(record);

                    }
                    if (staff_department_criterion !== '') {
                        var record = [];
                        record.push('ORGANIZATION_STAFF_NEW.DEPARTMENT');
                        record.push(staff_department_criterion);

                        conditions.push(record);

                    }
                    if (staff_emailaddress_criterion !== '') {
                        var record = [];
                        record.push('ORGANIZATION_STAFF_NEW.EMAIL_ADDRESS');
                        record.push(staff_emailaddress_criterion);

                        conditions.push(record);

                    }
                    if (staff_telephone_criterion !== '') {
                        var record = [];
                        record.push('ORGANIZATION_STAFF_NEW.TELEPHONE');
                        record.push(staff_telephone_criterion);

                        conditions.push(record);

                    }
                    if (staff_staffid_criterion !== '') {
                        var record = [];
                        record.push('ORGANIZATION_STAFF_NEW.STAFF_ID');
                        record.push(staff_staffid_criterion);

                        conditions.push(record);

                    }
                    if (courses_criterion !== '') {
                        var record = [];
                        record.push('COURSES_AND_TOPICS.COURSE');
                        record.push(courses_criterion);

                        conditions.push(record);

                    }
                    if (topics_criterion !== '') {
                        var record = [];
                        record.push('COURSES_AND_TOPICS.TOPIC');
                        record.push(topics_criterion);

                        conditions.push(record);

                    }
                    if (training_dateoftraining_criterion !== '') {
                        var record = [];
                        record.push('TRAININGS.DATE_OF_TRAINING');
                        record.push(training_dateoftraining_criterion);

                        conditions.push(record);

                    }
                    if (training_course_criterion !== '') {
                        var record = [];
                        record.push('COURSES.COURSE');
                        record.push(training_course_criterion);

                        conditions.push(record);

                    }
                    if (training_topic_criterion !== '') {
                        var record = [];
                        record.push('COURSES_AND_TOPICS.TOPIC');
                        record.push(training_topic_criterion);

                        conditions.push(record);

                    }
                    if (training_objective_criterion !== '') {
                        var record = [];
                        record.push('TRAININGS.OBJECTIVE');
                        record.push(training_objective_criterion);

                        conditions.push(record);

                    }
                    if (training_venue_criterion !== '') {
                        var record = [];
                        record.push('TRAININGS.VENUE');
                        record.push(training_venue_criterion);

                        conditions.push(record);

                    }
                    if (training_groupintended_criterion !== '') {
                        var record = [];
                        record.push('TRAININGS.GROUP_INTENDED');
                        record.push(training_groupintended_criterion);

                        conditions.push(record);

                    }
                    if (training_conductedby_criterion !== '') {
                        var record = [];
                        record.push('TRAININGS.CONDUCTED_BY');
                        record.push(training_conductedby_criterion);

                        conditions.push(record);

                    }
                    if (training_isstaff_criterion !== '') {
                        var record = [];
                        record.push('TRAININGS.IS_STAFF');
                        record.push(training_isstaff_criterion);

                        conditions.push(record);

                    }
                    if (training_attendance_attendant_criterion !== '') {
                        var record = [];
                        record.push('TRAINING_ATTENDANCE.ATTENDANT');
                        record.push(training_attendance_attendant_criterion);

                        conditions.push(record);

                    }
                    if (training_attendance_type_criterion !== '') {
                        var record = [];
                        record.push('TRAINING_ATTENDANCE.TYPE');
                        record.push(training_attendance_type_criterion);

                        conditions.push(record);

                    }
                    if (training_attendance_address_criterion !== '') {
                        var record = [];
                        record.push('TRAINING_ATTENDANCE.ADDRESS');
                        record.push(training_attendance_address_criterion);

                        conditions.push(record);

                    }
                    if (training_attendance_contact_criterion !== '') {
                        var record = [];
                        record.push('TRAINING_ATTENDANCE.CONTACT');
                        record.push(training_attendance_contact_criterion);

                        conditions.push(record);

                    }
                    if (training_outcome_outcome_criterion !== '') {
                        var record = [];
                        record.push('TRAINING_OUTCOMES.OUTCOME');
                        record.push(training_outcome_outcome_criterion);

                        conditions.push(record);

                    }
                    if (monitoring_staffid_criterion !== '') {
                        var record = [];
                        record.push('ORGANIZATION_STAFF_NEW.NAME');
                        record.push(monitoring_staffid_criterion);

                        conditions.push(record);

                    }
                    if (monitoring_dateofvisit_criterion !== '') {
                        var record = [];
                        record.push('MONITORING_VISITS.DATE_OF_VISIT');
                        record.push(monitoring_dateofvisit_criterion);

                        conditions.push(record);

                    }
                    if (monitoring_visittype_criterion !== '') {
                        var record = [];
                        record.push('MONITORING_VISITS.VISIT_TYPE');
                        record.push(monitoring_visittype_criterion);

                        conditions.push(record);

                    }
                    if (monitoring_generalcomments_criterion !== '') {
                        var record = [];
                        record.push('MONITORING_VISITS.GENERAL_COMMENTS');
                        record.push(monitoring_generalcomments_criterion);

                        conditions.push(record);

                    }
                    if (monitoring_trackid_criterion !== '') {
                        var record = [];
                        record.push('MONITORING_VISITS.TRACK_ID');
                        record.push(monitoring_trackid_criterion);

                        conditions.push(record);

                    }
                    if (misean_cara_grantee_criterion !== '') {
                        var record = [];
                        record.push('MISEAN_CARA_BASELINE_SURVEYS.GRANTEE');
                        record.push(misean_cara_grantee_criterion);

                        conditions.push(record);

                    }
                    if (misean_cara_groupid_criterion !== '') {
                        var record = [];
                        record.push('MISEAN_CARA_BASELINE_SURVEYS.GROUP_NAME');
                        record.push(misean_cara_groupid_criterion);

                        conditions.push(record);

                    }
                    if (misean_cara_district_criterion !== '') {
                        var record = [];
                        record.push('MISEAN_CARA_BASELINE_SURVEYS.DISTRICT');
                        record.push(misean_cara_district_criterion);

                        conditions.push(record);

                    }
                    if (misean_cara_county_criterion !== '') {
                        var record = [];
                        record.push('COUNTY.COUNTY');
                        record.push(misean_cara_county_criterion);

                        conditions.push(record);

                    }
                    if (misean_cara_subcounty_criterion !== '') {
                        var record = [];
                        record.push('SUBCOUNTY.SUBCOUNTY');
                        record.push(misean_cara_subcounty_criterion);

                        conditions.push(record);

                    }
                    if (misean_cara_pwd_criterion !== '') {
                        var record = [];
                        record.push('MISEAN_CARA_BASELINE_SURVEYS.PWD');
                        record.push(misean_cara_pwd_criterion);

                        conditions.push(record);

                    }
                    if (misean_cara_chh_criterion !== '') {
                        var record = [];
                        record.push('MISEAN_CARA_BASELINE_SURVEYS.CHH');
                        record.push(misean_cara_chh_criterion);

                        conditions.push(record);

                    }
                    if (misean_cara_orphans_criterion !== '') {
                        var record = [];
                        record.push('MISEAN_CARA_BASELINE_SURVEYS.ORPHAN');
                        record.push(misean_cara_orphans_criterion);

                        conditions.push(record);

                    }
                    if (misean_cara_hiv_criterion !== '') {
                        var record = [];
                        record.push('MISEAN_CARA_BASELINE_SURVEYS.HIV');
                        record.push(misean_cara_hiv_criterion);

                        conditions.push(record);

                    }
                    if (misean_cara_pwdinschool_criterion !== '') {
                        var record = [];
                        record.push('MISEAN_CARA_BASELINE_SURVEYS.PWD_IN_SCHOOL');
                        record.push(misean_cara_pwdinschool_criterion);

                        conditions.push(record);

                    }
                    if (misean_cara_chhinschool_criterion !== '') {
                        var record = [];
                        record.push('MISEAN_CARA_BASELINE_SURVEYS.CHH_IN_SCHOOL');
                        record.push(misean_cara_chhinschool_criterion);

                        conditions.push(record);

                    }
                    if (misean_cara_orphansinschool_criterion !== '') {
                        var record = [];
                        record.push('MISEAN_CARA_BASELINE_SURVEYS.ORPHAN_IN_SCHOOL');
                        record.push(misean_cara_orphansinschool_criterion);

                        conditions.push(record);

                    }
                    if (misean_cara_childrenwithhiv_criterion !== '') {
                        var record = [];
                        record.push('MISEAN_CARA_BASELINE_SURVEYS.CHILDREN_WITH_HIV_IN_SCHOOL');
                        record.push(misean_cara_childrenwithhiv_criterion);

                        conditions.push(record);

                    }
                    if (misean_cara_normalinschool_criterion !== '') {
                        var record = [];
                        record.push('MISEAN_CARA_BASELINE_SURVEYS.NORMAL_IN_SCHOOL');
                        record.push(misean_cara_normalinschool_criterion);

                        conditions.push(record);

                    }
                    if (misean_cara_mealsperday_criterion !== '') {
                        var record = [];
                        record.push('MISEAN_CARA_BASELINE_SURVEYS.MEALS_PER_DAY');
                        record.push(misean_cara_mealsperday_criterion);

                        conditions.push(record);

                    }
                    if (misean_cara_medicaltreatment_criterion !== '') {
                        var record = [];
                        record.push('MISEAN_CARA_BASELINE_SURVEYS.MEDICAL_TREATMENT');
                        record.push(misean_cara_medicaltreatment_criterion);

                        conditions.push(record);

                    }

                    if (fishing_size_of_pond_criterion !== '') {
                        var record = [];
                        record.push('FISH_FARMING_RECORDS.SIZE_OF_POND');
                        record.push(fishing_size_of_pond_criterion);

                        conditions.push(record);

                    }
                    if (fishing_number_of_fish_criterion !== '') {
                        var record = [];
                        record.push('FISH_FARMING_RECORDS.NUMBER_OF_FISH_HARVESTED');
                        record.push(fishing_number_of_fish_criterion);

                        conditions.push(record);

                    }
                    if (fishing_quantity_criterion !== '') {
                        var record = [];
                        record.push('FISH_FARMING_RECORDS.QUANTITY_IN_KG');
                        record.push(fishing_quantity_criterion);

                        conditions.push(record);

                    }
                    if (fishing_income_criterion !== '') {
                        var record = [];
                        record.push('FISH_FARMING_RECORDS.INCOME');
                        record.push(fishing_income_criterion);

                        conditions.push(record);

                    }
                    if (misean_cara_technology_individual_id_criterion !== '') {
                        var record = [];
                        record.push('MISEAN_CARA_BENEFICIARIES_NEW.INDIVIDUAL_ID');
                        record.push(misean_cara_technology_individual_id_criterion);

                        conditions.push(record);

                    }
                    if (misean_cara_technology_imprived_seeds_criterion !== '') {
                        var record = [];
                        record.push('MISEAN_CARA_BENEFICIARIES_NEW.USED_IMPROVED_SEEDS');
                        record.push(misean_cara_technology_imprived_seeds_criterion);

                        conditions.push(record);

                    }
                    if (misean_cara_technology_underground_water_criterion !== '') {
                        var record = [];
                        record.push('MISEAN_CARA_BENEFICIARIES_NEW.USED_UNDERGROUND_WATER');
                        record.push(misean_cara_technology_underground_water_criterion);

                        conditions.push(record);

                    }
                    if (misean_cara_technology_pesticide_criterion !== '') {
                        var record = [];
                        record.push('MISEAN_CARA_BENEFICIARIES_NEW.USED_PESTICIDES');
                        record.push(misean_cara_technology_pesticide_criterion);

                        conditions.push(record);

                    }
                    if (misean_cara_technology_farm_implements_criterion !== '') {
                        var record = [];
                        record.push('MISEAN_CARA_BENEFICIARIES_NEW.USED_FARM_IMPLEMENTS');
                        record.push(misean_cara_technology_farm_implements_criterion);

                        conditions.push(record);

                    }
                    if (misean_cara_technology_improved_post_harvest_handling_criterion !== '') {
                        var record = [];
                        record.push('MISEAN_CARA_BENEFICIARIES_NEW.IMPROVED_POST_HARVEST_HANDLING');
                        record.push(misean_cara_technology_improved_post_harvest_handling_criterion);

                        conditions.push(record);

                    }
                    if (misean_cara_technology_row_planting_criterion !== '') {
                        var record = [];
                        record.push('MISEAN_CARA_BENEFICIARIES_NEW.USED_ROW_PLANTING');
                        record.push(misean_cara_technology_row_planting_criterion);

                        conditions.push(record);

                    }
                    if (misean_cara_technology_other_techniques_criterion !== '') {
                        var record = [];
                        record.push('MISEAN_CARA_BENEFICIARIES_NEW.OTHER_TECHNIQUES_USED');
                        record.push(misean_cara_technology_other_techniques_criterion);

                        conditions.push(record);

                    }
                    if (marketing_individual_id_criterion !== '') {
                        var record = [];
                        record.push('CHANGE_IN_KNOWLEDGE_NEWER.INDIVIDUAL_ID');
                        record.push(marketing_individual_id_criterion);

                        conditions.push(record);

                    }
                    if (marketing_sells_all_vegetables_criterion !== '') {
                        var record = [];
                        record.push('CHANGE_IN_KNOWLEDGE_NEWER.SELLS_ALL_VEGETABLES');
                        record.push(marketing_sells_all_vegetables_criterion);

                        conditions.push(record);

                    }
                    if (marketing_vegetable_market_place_criterion !== '') {
                        var record = [];
                        record.push('CHANGE_IN_KNOWLEDGE_NEWER.VEGETABLE_MARKET_PLACE_1');
                        record.push(marketing_vegetable_market_place_criterion);

                        conditions.push(record);

                    }
                    if (marketing_sells_all_crops_criterion !== '') {
                        var record = [];
                        record.push('CHANGE_IN_KNOWLEDGE_NEWER.SELLS_ALL_CROPS');
                        record.push(marketing_sells_all_crops_criterion);

                        conditions.push(record);

                    }
                    if (marketing_crop_place_criterion !== '') {
                        var record = [];
                        record.push('CHANGE_IN_KNOWLEDGE_NEWER.CROP_MARKET_PLACE_1');
                        record.push(marketing_crop_place_criterion);

                        conditions.push(record);

                    }
                    if (challenges_group_id_criterion !== '') {
                        var record = [];
                        record.push('PRODUCTION_PROBLEMS.GROUP_NAME');
                        record.push(challenges_group_id_criterion);

                        conditions.push(record);

                    }
                    if (challenges_vegetable_production_problems_criterion !== '') {
                        var record = [];
                        record.push('PRODUCTION_PROBLEMS.VEGETABLE_PRODUCTION_PROBLEMS');
                        record.push(challenges_vegetable_production_problems_criterion);

                        conditions.push(record);

                    }
                    if (challenges_vegetable_marketing_problems_criterion !== '') {
                        var record = [];
                        record.push('PRODUCTION_PROBLEMS.VEGETABLE_MARKETING_PROBLEMS');
                        record.push(challenges_vegetable_marketing_problems_criterion);

                        conditions.push(record);

                    }
                    if (challenges_crop_production_problems_criterion !== '') {
                        var record = [];
                        record.push('PRODUCTION_PROBLEMS.CROP_PRODUCTION_PROBLEMS');
                        record.push(challenges_crop_production_problems_criterion);

                        conditions.push(record);

                    }
                    if (challenges_crop_marketing_problems_criterion !== '') {
                        var record = [];
                        record.push('PRODUCTION_PROBLEMS.CROP_MARKETING_PROBLEMS');
                        record.push(challenges_crop_marketing_problems_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_interviewer_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.INTERVIEWER');
                        record.push(pilot_studies_interviewer_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_date_of_interview_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.DATE_OF_INTERVIEW');
                        record.push(pilot_studies_date_of_interview_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_location_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.LOCATION');
                        record.push(pilot_studies_location_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_respondent_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.RESPONDENT');
                        record.push(pilot_studies_respondent_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_head_of_household_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.HEAD_OF_THE_HOUSEHOLD');
                        record.push(pilot_studies_head_of_household_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_females_under_5_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.FEMALES_UNDER_5');
                        record.push(pilot_studies_females_under_5_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_females_between_6_and_18_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.FEMALES_BETWEEN_6_AND_18');
                        record.push(pilot_studies_females_between_6_and_18_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_males_under_5_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.MALES_UNDER_5');
                        record.push(pilot_studies_males_under_5_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_males_between_6_and_18_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.MALES_BETWEEN_6_and_18');
                        record.push(pilot_studies_males_between_6_and_18_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_males_between_18_and_45_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.MALES_BETWEEN_18_and_45');
                        record.push(pilot_studies_males_between_18_and_45_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_females_between_18_and_45_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.FEMALES_BETWEEN_18_and_45');
                        record.push(pilot_studies_females_between_18_and_45_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_length_of_time_involed_in_projects_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.LENGTH_OF_TIME_INVOLVED_IN_PROJECTS');
                        record.push(pilot_studies_length_of_time_involed_in_projects_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_daily_household_income_now_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.DAILY_HOUSEHOLD_INCOME_NOW');
                        record.push(pilot_studies_daily_household_income_now_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_daily_household_income_one_year_ago_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.DAILY_HOUSEHOLD_INCOME_ONE_YEAR_AGO');
                        record.push(pilot_studies_daily_household_income_one_year_ago_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_number_of_sources_of_income_now_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.NUMBER_OF_SOURCES_OF_INCOME_NOW');
                        record.push(pilot_studies_number_of_sources_of_income_now_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_sources_of_income_now_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.SOURCES_OF_INCOME_NOW');
                        record.push(pilot_studies_sources_of_income_now_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_number_of_sources_of_income_one_year_ago_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.INCOME_NOW_ADDITIONAL_NOTES');
                        record.push(pilot_studies_number_of_sources_of_income_one_year_ago_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_income_now_additional_notes_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.NUMBER_OF_SOURCES_OF_INCOME_ONE_YEAR_AGO');
                        record.push(pilot_studies_income_now_additional_notes_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_sources_of_income_1_year_ago_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.SOURCES_OF_INCOME_1_YEAR_AGO');
                        record.push(pilot_studies_sources_of_income_1_year_ago_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_income_one_year_ago_additional_notes_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.INCOME_ONE_YEAR_AGO_ADDITIONAL_NOTES');
                        record.push(pilot_studies_income_one_year_ago_additional_notes_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_increase_in_diversity_of_sources_of_income_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.INCREASE_IN_DIVERSITY_OF_SOURCES_OF_INCOME');
                        record.push(pilot_studies_increase_in_diversity_of_sources_of_income_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_medical_expense_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.MEDICAL_EXPENSE');
                        record.push(pilot_studies_medical_expense_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_education_expense_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.EDUCATION_EXPENSE');
                        record.push(pilot_studies_education_expense_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_house_expense_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.HOUSE_EXPENSE');
                        record.push(pilot_studies_house_expense_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_clothes_expense_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.CLOTHES_EXPENSE');
                        record.push(pilot_studies_clothes_expense_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_food_expense_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.FOOD_EXPENSE');
                        record.push(pilot_studies_food_expense_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_household_assets_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.HOUSEHOLD_ASSETS');
                        record.push(pilot_studies_household_assets_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_other_expenses_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.OTHER_EXPENSES');
                        record.push(pilot_studies_other_expenses_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_increase_in_household_assets_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.INCREASE_IN_DIVERSITY_OF_SOURCES_OF_INCOME');
                        record.push(pilot_studies_increase_in_household_assets_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_land_increase_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.LAND_INCREASE');
                        record.push(pilot_studies_land_increase_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_land_size_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.LAND_SIZE');
                        record.push(pilot_studies_land_size_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_permanent_house_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.PERMANENT_HOUSE');
                        record.push(pilot_studies_permanent_house_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_semi_permanent_house_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.SEMI_PERMANENT_HOUSE');
                        record.push(pilot_studies_semi_permanent_house_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_mud_house_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.MUD_HOUSE');
                        record.push(pilot_studies_mud_house_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_radio_or_tv_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.RADIO_OR_TV');
                        record.push(pilot_studies_radio_or_tv_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_mobile_phone__criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.MOBILE_PHONE');
                        record.push(pilot_studies_mobile_phone__criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_automobile_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.AUTOMOTIVE');
                        record.push(pilot_studies_automobile_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_breakfast_yesterday_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.BREAKFAST_YESTERDAY');
                        record.push(pilot_studies_breakfast_yesterday_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_snack_for_breakfast_yesterday_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.SNACK_FOR_BREAKFAST_YESTERDAY');
                        record.push(pilot_studies_snack_for_breakfast_yesterday_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_lunch_yesterday_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.LUNCH_YESTERDAY');
                        record.push(pilot_studies_lunch_yesterday_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_snack_for_lunch_yesterday_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.SNACK_FOR_LUNCH_YESTERDAY');
                        record.push(pilot_studies_snack_for_lunch_yesterday_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_dinner_yesterday_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.DINNER_YESTERDAY');
                        record.push(pilot_studies_dinner_yesterday_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_snack_for_dinner_yesterday_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.SNACK_FOR_DINNER_YESTERDAY');
                        record.push(pilot_studies_snack_for_dinner_yesterday_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_breakfast_1_year_ago_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.BREAKFAST_1_YEAR_AGO');
                        record.push(pilot_studies_breakfast_1_year_ago_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_snack_for_breakfast_1_year_ago_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.SNACK_FOR_BREAKFAST_1_YEAR_AGO');
                        record.push(pilot_studies_snack_for_breakfast_1_year_ago_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_lunch_1_year_ago_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.LUNCH_1_YEAR_AGO');
                        record.push(pilot_studies_lunch_1_year_ago_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_snack_for_luch_1_year_ago_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.SNACK_FOR_LUNCH_1_YEAR_AGO');
                        record.push(pilot_studies_snack_for_luch_1_year_ago_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_dinner_1_year_ago_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.DINNER_1_YEAR_AGO');
                        record.push(pilot_studies_dinner_1_year_ago_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_snack_for_dinner_1_year_ago_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.SNACK_FOR_DINNER_1_YEAR_AGO');
                        record.push(pilot_studies_snack_for_dinner_1_year_ago_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_cereals_yesterday_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.CEREALS_YESTERDAY');
                        record.push(pilot_studies_cereals_yesterday_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_cereals_1_year_ago_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.CEREALS_1_YEAR_AGO');
                        record.push(pilot_studies_cereals_1_year_ago_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_vitamin_a_vegetable_yesterday_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.VITAMIN_A_VEGETABLE_YESTERDAY');
                        record.push(pilot_studies_vitamin_a_vegetable_yesterday_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_vitamin_a_vegetable_1_year_ago_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.VITAMIN_A_VEGETABLE_1_YEAR_AGO');
                        record.push(pilot_studies_vitamin_a_vegetable_1_year_ago_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_white_tubers_yesterday_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.WHITE_TUBERS_YESTERDAY');
                        record.push(pilot_studies_white_tubers_yesterday_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_white_tubers_1_year_ago_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.WHITE_TUBERS_1_YEAR_AGO');
                        record.push(pilot_studies_white_tubers_1_year_ago_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_dark_green_leafy_vegetables_yesterday_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.DARK_GREEN_LEAFY_VEGETABLES_YESTERDAY');
                        record.push(pilot_studies_dark_green_leafy_vegetables_yesterday_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_dark_green_leafy_vegetables_1_year_ago_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.DARK_GREEN_LEAFY_VEGETABLES_1_YEAR_AGO');
                        record.push(pilot_studies_dark_green_leafy_vegetables_1_year_ago_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_other_vegetables_yesterday_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.OTHER_VEGETABLES_YESTERDAY');
                        record.push(pilot_studies_other_vegetables_yesterday_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_other_vegetables_1_year_ago_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.OTHER_VEGETABLES_1_YEAR_AGO');
                        record.push(pilot_studies_other_vegetables_1_year_ago_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_vitamin_a_fruits_yesterday_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.VITAMIN_A_FRUITS_YESTERDAY');
                        record.push(pilot_studies_vitamin_a_fruits_yesterday_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_vitamin_a_fruits_1_year_ago_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.VITAMIN_A_FRUITS_1_YEAR_AGO');
                        record.push(pilot_studies_vitamin_a_fruits_1_year_ago_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_other_fruits_yesterday_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.OTHER_FRUITS_YESTERDAY');
                        record.push(pilot_studies_other_fruits_yesterday_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_other_fruits_year_ago_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.OTHER_FRUITS_1_YEAR_AGO');
                        record.push(pilot_studies_other_fruits_year_ago_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_organ_meat_yesterday_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.ORGAN_MEAT_YESTERDAY');
                        record.push(pilot_studies_organ_meat_yesterday_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_organ_meat_1_year_ago_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.ORGAN_MEAT_1_YEAR_AGO');
                        record.push(pilot_studies_organ_meat_1_year_ago_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_flesh_meats_yesterday_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.FLESH_MEATS_YESTERDAY');
                        record.push(pilot_studies_flesh_meats_yesterday_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_flesh_meats_1_year_ago_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.FLESH_MEATS_1_YEAR_AGO');
                        record.push(pilot_studies_flesh_meats_1_year_ago_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_eggs_yesterday_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.EGGS_YESTERDAY');
                        record.push(pilot_studies_eggs_yesterday_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_eggs_1_year_ago_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.EGGS_1_YEAR_AGO');
                        record.push(pilot_studies_eggs_1_year_ago_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_fish_yesterday_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.FISH_YESTERDAY');
                        record.push(pilot_studies_fish_yesterday_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_fish_1_year_ago_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.FISH_1_YEAR_AGO');
                        record.push(pilot_studies_fish_1_year_ago_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_legumes_yesterday_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.LEGUMES_YESTERDAY');
                        record.push(pilot_studies_legumes_yesterday_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_legumes_1_year_ago_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.LEGUMES_1_YEAR_AGO');
                        record.push(pilot_studies_legumes_1_year_ago_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_milk_yesterday_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.MILK_YESTERDAY');
                        record.push(pilot_studies_milk_yesterday_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_milk_1_year_ago_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.MILK_1_YEAR_AGO');
                        record.push(pilot_studies_milk_1_year_ago_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_oils_and_fats_yesterday_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.OILS_AND_FATS_YESTERDAY');
                        record.push(pilot_studies_oils_and_fats_yesterday_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_oils_and_fats_1_year_ago_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.OILS_AND_FATS_1_YEAR_AGO');
                        record.push(pilot_studies_oils_and_fats_1_year_ago_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_red_palm_yesterday_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.RED_PALM_YESTERDAY');
                        record.push(pilot_studies_red_palm_yesterday_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_1_year_ago_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.RED_PALM_1_YEAR_AGO');
                        record.push(pilot_studies_1_year_ago_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_sweets_yesterday_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.SWEETS_YESTERDAY');
                        record.push(pilot_studies_sweets_yesterday_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_sweets_1_year_ago_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.SWEETS_1_YEAR_AGO');
                        record.push(pilot_studies_sweets_1_year_ago_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_spices_yesterday_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.SPICES_YESTERDAY');
                        record.push(pilot_studies_spices_yesterday_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_spices_1_year_ago_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.SPICES_1_YEAR_AGO');
                        record.push(pilot_studies_spices_1_year_ago_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_dish_rack_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.DISH_RACK');
                        record.push(pilot_studies_dish_rack_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_compost_pit_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.COMPOST_PIT');
                        record.push(pilot_studies_compost_pit_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_cloth_drying_line_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.CLOTH_DRYING_LINE');
                        record.push(pilot_studies_cloth_drying_line_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_latrine_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.LATRINE');
                        record.push(pilot_studies_latrine_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_tippy_tap_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.TIPPY_TAP');
                        record.push(pilot_studies_tippy_tap_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_boils_water_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.BOILS_WATER');
                        record.push(pilot_studies_boils_water_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_improved_living_standard_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.IMPROVED_LIVING_STANDARD');
                        record.push(pilot_studies_improved_living_standard_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_significant_story_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.SIGNIFICANT_STORY');
                        record.push(pilot_studies_significant_story_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_reason_for_low_living_standard_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.REASON_FOR_LOW_LIVING_STANDARD');
                        record.push(pilot_studies_reason_for_low_living_standard_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_improved_diet_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.IMPROVED_DIET');
                        record.push(pilot_studies_improved_diet_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_improved_knowledge_of_nutrition_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.IMPROVED_KNOWLEDGE_OF_NUTRITION');
                        record.push(pilot_studies_improved_knowledge_of_nutrition_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_increased_household_asset_base_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.INCREASED_HOUSEHOLD_ASSET_BASE');
                        record.push(pilot_studies_increased_household_asset_base_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_reduced_post_harvest_loss_due_to_improved_storage_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.REDUCED_POST_HARVEST_LOSS_DUE_TO_IMPROVED_STORAGE');
                        record.push(pilot_studies_reduced_post_harvest_loss_due_to_improved_storage_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_conclusion_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.CONCLUSION');
                        record.push(pilot_studies_conclusion_criterion);

                        conditions.push(record);

                    }
                    if (pilot_studies_recommendation_criterion !== '') {
                        var record = [];
                        record.push('PILOT_STUDIES.RECOMMENDATION');
                        record.push(pilot_studies_recommendation_criterion);

                        conditions.push(record);

                    }
                    if (porticus_name_of_respondent_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.NAME_OF_RESPONDENT');
                        record.push(porticus_name_of_respondent_criterion);

                        conditions.push(record);

                    }
                    if (porticus_age_of_respondent_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.AGE');
                        record.push(porticus_age_of_respondent_criterion);

                        conditions.push(record);

                    }
                    if (porticus_village_criterion !== '') {
                        var record = [];
                        record.push('VILLAGE.VILLAGE');
                        record.push(porticus_village_criterion);

                        conditions.push(record);

                    }
                    if (porticus_gender_of_resspondent_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.GENDER');
                        record.push(porticus_gender_of_resspondent_criterion);

                        conditions.push(record);

                    }
                    if (porticus_name_of_vulnerable_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.NAME_OF_VULNERABLE');
                        record.push(porticus_name_of_vulnerable_criterion);

                        conditions.push(record);

                    }
                    if (porticus_gender_of_vulnerable_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.GENDER_OF_VULNERABLE');
                        record.push(porticus_gender_of_vulnerable_criterion);

                        conditions.push(record);

                    }
                    if (porticus_age_of_vulnerable_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.AGE_OF_VULNERABLE');
                        record.push(porticus_age_of_vulnerable_criterion);

                        conditions.push(record);

                    }
                    if (porticus_category_of_disability_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.CATEGORY_OF_DISABILITY');
                        record.push(porticus_category_of_disability_criterion);

                        conditions.push(record);

                    }
                    if (porticus_name_of_disability_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.NAME_OF_DISABILITY');
                        record.push(porticus_name_of_disability_criterion);

                        conditions.push(record);

                    }
                    if (porticus_marital_status_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.MARITAL_STATUS');
                        record.push(porticus_marital_status_criterion);

                        conditions.push(record);

                    }
                    if (porticus_level_of_education_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.LEVEL_OF_EDUCATION');
                        record.push(porticus_level_of_education_criterion);

                        conditions.push(record);

                    }
                    if (porticus_occupation_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.OCCUPATION');
                        record.push(porticus_occupation_criterion);

                        conditions.push(record);

                    }
                    if (porticus_household_monthly_income_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.HOUSEHOLD_MONTHLY_INCOME');
                        record.push(porticus_household_monthly_income_criterion);

                        conditions.push(record);

                    }
                    if (porticus_definition_of_disability_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.DEFINITION_OF_DISABILITY');
                        record.push(porticus_definition_of_disability_criterion);

                        conditions.push(record);

                    }
                    if (porticus_list_of_disabilities_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.LIST_OF_DISABILITIES_KNOWN');
                        record.push(porticus_list_of_disabilities_criterion);

                        conditions.push(record);

                    }
                    if (porticus_causes_of_disabilities_known_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.CAUSES_OF_DISABILITIES_KNOWN');
                        record.push(porticus_causes_of_disabilities_known_criterion);

                        conditions.push(record);

                    }
                    if (porticus_ways_of_prevention_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.WAYS_OF_PREVENTION');
                        record.push(porticus_ways_of_prevention_criterion);

                        conditions.push(record);

                    }
                    if (porticus_feeling_of_having_a_vulnerable_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.FEELING_OF_HAVING_A_VULNERABLE');
                        record.push(porticus_feeling_of_having_a_vulnerable_criterion);

                        conditions.push(record);

                    }
                    if (porticus_feeling_of_the_community_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.FEELING_OF_THE_COMMUNITY');
                        record.push(porticus_feeling_of_the_community_criterion);

                        conditions.push(record);

                    }
                    if (porticus_vulnerable_supported_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.VULNERABLE_SUPPORTED');
                        record.push(porticus_vulnerable_supported_criterion);

                        conditions.push(record);

                    }
                    if (porticus_support_given_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.SUPPORT_GIVEN');
                        record.push(porticus_support_given_criterion);

                        conditions.push(record);

                    }
                    if (porticus_why_not_supported_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.WHY_NOT_SUPPORTED');
                        record.push(porticus_why_not_supported_criterion);

                        conditions.push(record);

                    }
                    if (porticus_rehabilitation_received_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.REHABILITATION_RECEIVED');
                        record.push(porticus_rehabilitation_received_criterion);

                        conditions.push(record);

                    }
                    if (porticus_place_of_rehabilitation_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.PLACE_OF_REHABILITATION');
                        record.push(porticus_place_of_rehabilitation_criterion);

                        conditions.push(record);

                    }
                    if (porticus_kind_of_treatment_received_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.KIND_OF_TREATMENT_RECEIVED');
                        record.push(porticus_kind_of_treatment_received_criterion);

                        conditions.push(record);

                    }
                    if (porticus_cost_of_treatment_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.COST_OF_TREATMENT');
                        record.push(porticus_cost_of_treatment_criterion);

                        conditions.push(record);

                    }
                    if (porticus_duration_of_the_treatment_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.DURATION_OF_THE_TREATMENT');
                        record.push(porticus_duration_of_the_treatment_criterion);

                        conditions.push(record);

                    }
                    if (porticus_frequency_of_attendance_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.FREQUENCY_OF_ATTENDANCE');
                        record.push(porticus_frequency_of_attendance_criterion);

                        conditions.push(record);

                    }
                    if (porticus_regular_attendance_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.REGULAR_ATTENDANCE');
                        record.push(porticus_regular_attendance_criterion);

                        conditions.push(record);

                    }
                    if (porticus_reason_for_not_attending_daily_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.REASON_FOR_NOT_ATTENDING_REGULARLY');
                        record.push(porticus_reason_for_not_attending_daily_criterion);

                        conditions.push(record);

                    }
                    if (porticus_quality_of_service_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.QUALITY_OF_SERVICE');
                        record.push(porticus_quality_of_service_criterion);

                        conditions.push(record);

                    }
                    if (porticus_training_recieved_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.TRAINING_RECEIVED');
                        record.push(porticus_training_recieved_criterion);

                        conditions.push(record);

                    }
                    if (porticus_name_of_trainer_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.NAME_OF_TRAINER');
                        record.push(porticus_name_of_trainer_criterion);

                        conditions.push(record);

                    }
                    if (porticus_training_was_about_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.TRAINING_WAS_ABOUT');
                        record.push(porticus_training_was_about_criterion);

                        conditions.push(record);

                    }
                    if (porticus_help_of_the_training_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.HELP_OF_THE_TRAINING');
                        record.push(porticus_help_of_the_training_criterion);

                        conditions.push(record);

                    }
                    if (porticus_challenges_faced_in_caring__criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.CHALLENGES_FACED_IN_CARING');
                        record.push(porticus_challenges_faced_in_caring__criterion);

                        conditions.push(record);

                    }
                    if (porticus_strengths_of_the_vulnerable_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.STRENGTHS_OF_VULNERABLE');
                        record.push(porticus_strengths_of_the_vulnerable_criterion);

                        conditions.push(record);

                    }
                    if (porticus_weaknesses_of_the_vulnerable_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.WEAKNESSES_OF_VULNERABLE');
                        record.push(porticus_weaknesses_of_the_vulnerable_criterion);

                        conditions.push(record);

                    }
                    if (porticus_hope_for_the_vulnerable_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.HOPE_FOR_THE_VULNERABLE');
                        record.push(porticus_hope_for_the_vulnerable_criterion);

                        conditions.push(record);

                    }
                    if (porticus_organization_help_needed_criterion !== '') {
                        var record = [];
                        record.push('PORTICUS_BASELINE_ASSESSMENTS.ORGANIZATION_HELP_NEEDED');
                        record.push(porticus_organization_help_needed_criterion);

                        conditions.push(record);

                    }
                    if (hygiene_membership_id_criterion !== '') {
                        var record = [];
                        record.push('HYGIENE_AND_NUTRITION_CHECKLIST.MEMBERSHIP_ID');
                        record.push(hygiene_membership_id_criterion);

                        conditions.push(record);

                    }
                    if (hygiene_sex_criterion !== '') {
                        var record = [];
                        record.push('HYGIENE_AND_NUTRITION_CHECKLIST.SEX');
                        record.push(hygiene_sex_criterion);

                        conditions.push(record);

                    }
                    if (hygiene_group_name_criterion !== '') {
                        var record = [];
                        record.push('HYGIENE_AND_NUTRITION_CHECKLIST.GROUP_NAME');
                        record.push(hygiene_group_name_criterion);

                        conditions.push(record);

                    }
                    if (hygiene_district_criterion !== '') {
                        var record = [];
                        record.push('HYGIENE_AND_NUTRITION_CHECKLIST.DISTRICT');
                        record.push(hygiene_district_criterion);

                        conditions.push(record);

                    }
                    if (hygiene_subcounty_criterion !== '') {
                        var record = [];
                        record.push('SUBCOUNTY.SUBCOUNTY');
                        record.push(hygiene_subcounty_criterion);

                        conditions.push(record);

                    }
                    if (hygiene_parish_criterion !== '') {
                        var record = [];
                        record.push('PARISH.PARISH');
                        record.push(hygiene_parish_criterion);

                        conditions.push(record);

                    }
                    if (hygiene_pit_latrine_criterion !== '') {
                        var record = [];
                        record.push('HYGIENE_AND_NUTRITION_CHECKLIST.PIT_LATRINE');
                        record.push(hygiene_pit_latrine_criterion);

                        conditions.push(record);

                    }
                    if (hygiene_rubbish_pit_criterion !== '') {
                        var record = [];
                        record.push('HYGIENE_AND_NUTRITION_CHECKLIST.RUBBISH_PIT');
                        record.push(hygiene_rubbish_pit_criterion);

                        conditions.push(record);

                    }
                    if (hygiene_bathing_shelter_criterion !== '') {
                        var record = [];
                        record.push('HYGIENE_AND_NUTRITION_CHECKLIST.BATHING_SHELTER');
                        record.push(hygiene_bathing_shelter_criterion);

                        conditions.push(record);

                    }
                    if (hygiene_tippy_tap_criterion !== '') {
                        var record = [];
                        record.push('HYGIENE_AND_NUTRITION_CHECKLIST.TIPPY_TAP');
                        record.push(hygiene_tippy_tap_criterion);

                        conditions.push(record);

                    }
                    if (hygiene_plate_drying_rack_criterion !== '') {
                        var record = [];
                        record.push('HYGIENE_AND_NUTRITION_CHECKLIST.PLATE_DRYING_RACK');
                        record.push(hygiene_plate_drying_rack_criterion);

                        conditions.push(record);

                    }
                    if (hygiene_kitchen_garden_criterion !== '') {
                        var record = [];
                        record.push('HYGIENE_AND_NUTRITION_CHECKLIST.KITCHEN_GARDEN');
                        record.push(hygiene_kitchen_garden_criterion);

                        conditions.push(record);

                    }
                    if (hygiene_fruit_trees_criterion !== '') {
                        var record = [];
                        record.push('HYGIENE_AND_NUTRITION_CHECKLIST.FRUIT_TREES');
                        record.push(hygiene_fruit_trees_criterion);

                        conditions.push(record);

                    }
                    if (hygiene_nrm_practices_criterion !== '') {
                        var record = [];
                        record.push('HYGIENE_AND_NUTRITION_CHECKLIST.NRM_PRACTICES');
                        record.push(hygiene_nrm_practices_criterion);

                        conditions.push(record);

                    }
                    if (hygiene_maize_crib_criterion !== '') {
                        var record = [];
                        record.push('HYGIENE_AND_NUTRITION_CHECKLIST.MAIZE_CRIB');
                        record.push(hygiene_maize_crib_criterion);

                        conditions.push(record);

                    }
                    if (hygiene_drying_rack_criterion !== '') {
                        var record = [];
                        record.push('HYGIENE_AND_NUTRITION_CHECKLIST.DRYING_RACK');
                        record.push(hygiene_drying_rack_criterion);

                        conditions.push(record);

                    }
                    if (hygiene_tapaulin_criterion !== '') {
                        var record = [];
                        record.push('HYGIENE_AND_NUTRITION_CHECKLIST.TAPAULIN');
                        record.push(hygiene_tapaulin_criterion);

                        conditions.push(record);

                    }
                    if (hygiene_granary_criterion !== '') {
                        var record = [];
                        record.push('HYGIENE_AND_NUTRITION_CHECKLIST.GRANARY');
                        record.push(hygiene_granary_criterion);

                        conditions.push(record);

                    }
                    if (hygiene_papyrus_mat_criterion !== '') {
                        var record = [];
                        record.push('HYGIENE_AND_NUTRITION_CHECKLIST.PAPYRUS_MAT');
                        record.push(hygiene_papyrus_mat_criterion);

                        conditions.push(record);

                    }
                    if (hygiene_earth_floor_criterion !== '') {
                        var record = [];
                        record.push('HYGIENE_AND_NUTRITION_CHECKLIST.EARTH_FLOOR');
                        record.push(hygiene_earth_floor_criterion);

                        conditions.push(record);

                    }
                    if (hygiene_date_checked_criterion !== '') {
                        var record = [];
                        record.push('HYGIENE_AND_NUTRITION_CHECKLIST.DATE_CHECKED');
                        record.push(hygiene_date_checked_criterion);

                        conditions.push(record);

                    }
                    if (hygiene_staff_criterion !== '') {
                        var record = [];
                        record.push('HYGIENE_AND_NUTRITION_CHECKLIST.STAFF');
                        record.push(hygiene_staff_criterion);

                        conditions.push(record);

                    }
                    if (hygiene_date_recorded_criterion !== '') {
                        var record = [];
                        record.push('HYGIENE_AND_NUTRITION_CHECKLIST.DATE_RECORDED');
                        record.push(hygiene_parish_criterion);

                        conditions.push(record);

                    }

                    if (contains.call(required_fields, 'GROUPS.LOCATION')) {
                        var join = [];
                        var index = required_fields.indexOf('GROUPS.LOCATION');

                        required_fields[index] = 'VILLAGE.VILLAGE';

                        query_tables.push('VILLAGE');

                        join.push('VILLAGE');
                        join.push('VILLAGE.ID = GROUPS.LOCATION');

                        joins.push(join);
                    }

                    if (contains.call(required_fields, 'MEMBERSHIP.VULNERABILITY') & contains.call(query_tables, 'MEMBERSHIP')) {

                        var join = [];
                        var index = required_fields.indexOf('MEMBERSHIP.VULNERABILITY');
                        //
                        required_fields[index] = 'DISABILITIES.DISABILITY_NAME';
                        //
                        query_tables.push('DISABILITIES');
                        //
                        join.push('DISABILITIES');
                        join.push('DISABILITIES.DISABILITY_ID = MEMBERSHIP.VULNERABILITY');
                        //
                        joins.push(join);
                    }

                    if (contains.call(required_fields, 'MEMBERSHIP.PARISH') & contains.call(query_tables, 'MEMBERSHIP')) {
                        var join = [];

                        query_tables.push('PARISH');

                        join.push('PARISH');
                        join.push('PARISH.ID = MEMBERSHIP.PARISH');

                        joins.push(join);
                    }

                    if (contains.call(required_fields, 'MEMBERSHIP.VILLAGE') & contains.call(query_tables, 'MEMBERSHIP')) {
                        var join = [];

                        query_tables.push('VILLAGE');

                        join.push('VILLAGE');
                        join.push('VILLAGE.ID = MEMBERSHIP.VILLAGE');

                        joins.push(join);
                    }

                    if (contains.call(required_fields, 'CHILDREN.PARISH')) {
                        var join = [];
                        var index = required_fields.indexOf('CHILDREN.PARISH');

                        required_fields[index] = 'PARISH.PARISH';

                        query_tables.push('PARISH');

                        join.push('PARISH');
                        join.push('PARISH.ID = CHILDREN.PARISH');

                        joins.push(join);
                    }

                    if (contains.call(required_fields, 'CHILDREN.VILLAGE')) {
                        var join = [];
                        var index = required_fields.indexOf('CHILDREN.VILLAGE');

                        required_fields[index] = 'VILLAGE.VILLAGE';

                        query_tables.push('VILLAGE');

                        join.push('VILLAGE');
                        join.push('VILLAGE.ID = CHILDREN.VILLAGE');

                        joins.push(join);
                    }

                    if (contains.call(required_fields, 'ASSESSMENT_1_RECORDS.COUNTY')) {
                        var join = [];
                        var index = required_fields.indexOf('ASSESSMENT_1_RECORDS.COUNTY');

                        required_fields[index] = 'COUNTY.COUNTY';

                        query_tables.push('COUNTY');

                        join.push('COUNTY');
                        join.push('COUNTY.ID = ASSESSMENT_1_RECORDS.COUNTY');

                        joins.push(join);
                    }

                    if (contains.call(required_fields, 'ASSESSMENT_1_RECORDS.SUBCOUNTY')) {
                        var join = [];
                        var index = required_fields.indexOf('ASSESSMENT_1_RECORDS.SUBCOUNTY');

                        required_fields[index] = 'SUBCOUNTY.SUBCOUNTY';

                        query_tables.push('SUBCOUNTY');

                        join.push('SUBCOUNTY');
                        join.push('SUBCOUNTY.ID = ASSESSMENT_1_RECORDS.SUBCOUNTY');

                        joins.push(join);
                    }

                    if (contains.call(required_fields, 'ASSESSMENT_1_RECORDS.PARISH')) {
                        var join = [];
                        var index = required_fields.indexOf('ASSESSMENT_1_RECORDS.PARISH');

                        required_fields[index] = 'PARISH.PARISH';

                        query_tables.push('PARISH');

                        join.push('PARISH');
                        join.push('PARISH.ID = ASSESSMENT_1_RECORDS.PARISH');

                        joins.push(join);
                    }

                    if (contains.call(required_fields, 'ASSESSMENT_1_RECORDS.VILLAGE')) {
                        var join = [];
                        var index = required_fields.indexOf('ASSESSMENT_1_RECORDS.VILLAGE');

                        required_fields[index] = 'VILLAGE.VILLAGE';

                        query_tables.push('VILLAGE');

                        join.push('VILLAGE');
                        join.push('VILLAGE.ID = ASSESSMENT_1_RECORDS.VILLAGE');

                        joins.push(join);
                    }

                    if (contains.call(required_fields, 'CHILDREN.VULNERABILITY')) {
                        var join = [];
                        var index = required_fields.indexOf('CHILDREN.VULNERABILITY');

                        required_fields[index] = 'DISABILITIES.DISABILITY_NAME';

                        query_tables.push('DISABILITIES');

                        join.push('DISABILITIES');
                        join.push('DISABILITIES.ID = CHILDREN.VULNERABILITY');

                        joins.push(join);
                    }

                    if (contains.call(required_fields, 'VISIT_RECORDS.CHILD_ID_VISITED')) {
                        var join = [];
                        var index = required_fields.indexOf('VISIT_RECORDS.CHILD_ID_VISITED');

                        required_fields[index] = 'CHILDREN.NAME';

                        query_tables.push('CHILDREN');

                        required_fields.push('VISIT_RECORDS.CHILD_ID_VISITED');

                        join.push('CHILDREN');
                        join.push('CHILDREN.CHILD_ID = VISIT_RECORDS.CHILD_ID_VISITED');

                        joins.push(join);
                    }

                    if (contains.call(required_fields, 'VISIT_RECORDS.SUBCOUNTY')) {
                        var join = [];
                        var index = required_fields.indexOf('VISIT_RECORDS.SUBCOUNTY');

                        required_fields[index] = 'SUBCOUNTY.SUBCOUNTY';

                        query_tables.push('SUBCOUNTY');

                        join.push('SUBCOUNTY');
                        join.push('SUBCOUNTY.ID = VISIT_RECORDS.SUBCOUNTY');

                        joins.push(join);
                    }

                    if (contains.call(required_fields, 'VISIT_RECORDS.PARISH')) {
                        var join = [];
                        var index = required_fields.indexOf('VISIT_RECORDS.PARISH');

                        required_fields[index] = 'PARISH.PARISH';

                        query_tables.push('PARISH');

                        join.push('PARISH');
                        join.push('PARISH.ID = VISIT_RECORDS.PARISH');

                        joins.push(join);
                    }

                    if (contains.call(required_fields, 'VISIT_RECORDS.VILLAGE')) {
                        var join = [];
                        var index = required_fields.indexOf('VISIT_RECORDS.VILLAGE');

                        required_fields[index] = 'VILLAGE.VILLAGE';

                        query_tables.push('VILLAGE');

                        join.push('VILLAGE');
                        join.push('VILLAGE.ID = VISIT_RECORDS.VILLAGE');

                        joins.push(join);
                    }

                    if (contains.call(required_fields, 'ORGANIZATION_STAFF_NEW.DEPARTMENT')) {
                        var join = [];
                        var index = required_fields.indexOf('ORGANIZATION_STAFF_NEW.DEPARTMENT');
                        //
                        required_fields[index] = 'ORGANIZATION_DEPARTMENTS_NEW.NAME';
                        //
                        query_tables.push('ORGANIZATION_DEPARTMENTS_NEW');
                        //
                        join.push('ORGANIZATION_DEPARTMENTS_NEW');
                        join.push('ORGANIZATION_STAFF_NEW.DEPARTMENT = ORGANIZATION_DEPARTMENTS_NEW.ID');
                        //
                        joins.push(join);
                    }

                    if (contains.call(required_fields, 'COURSES_AND_TOPICS.COURSE')) {
                        var join = [];
                        var index = required_fields.indexOf('COURSES_AND_TOPICS.COURSE');
                        //
                        required_fields[index] = 'COURSES.COURSE';
                        //
                        query_tables.push('COURSES');
                        //
                        join.push('COURSES');
                        join.push('COURSES_AND_TOPICS.COURSE = COURSES.CODE');
                        //
                        joins.push(join);
                    }

                    if (contains.call(required_fields, 'TRAININGS.COURSE')) {
                        var join = [];
                        var index = required_fields.indexOf('TRAININGS.COURSE');
                        //
                        required_fields[index] = 'COURSES.COURSE';
                        //
                        query_tables.push('COURSES');
                        //
                        join.push('COURSES');
                        join.push('TRAININGS.COURSE = COURSES.CODE');
                        //
                        joins.push(join);
                    }

                    if (contains.call(required_fields, 'TRAININGS.TOPIC')) {
                        var join = [];
                        var index = required_fields.indexOf('TRAININGS.TOPIC');
                        //
                        required_fields[index] = 'COURSES_AND_TOPICS.TOPIC';
                        //
                        query_tables.push('COURSES_AND_TOPICS');
                        //
                        join.push('COURSES_AND_TOPICS');
                        join.push('TRAININGS.TOPIC = COURSES_AND_TOPICS.ID');
                        //
                        joins.push(join);
                    }

                    if (contains.call(required_fields, 'LIVELIHOODGROUPCATEGORIES.CATEGORYNAME') & contains.call(query_tables, 'GROUPS')) {
                        var join = [];

                        query_tables.push('LIVELIHOODGROUPCATEGORIES');
                        //
                        join.push('LIVELIHOODGROUPCATEGORIES');
                        join.push('LIVELIHOODGROUPCATEGORIES.ID = GROUPS.TYPE');
                        //
                        joins.push(join);
                    }

                    $.ajax({
                        url: "<?php echo base_url('Query/query/run_query_and_show_results');?>",
                        method: "POST",
                        data: {tables: query_tables, fields: required_fields, joints: joins, conditions: conditions},
                        success: function (data) {

                            //Hide the criteria
                            document.getElementById('query-criteria').style.display = 'none';

                            //Change the content of the query results
                            document.getElementById('preview_query_results').innerHTML = data;

                            //Show the query results
                            document.getElementById('query-results').style.display = 'block';

                            //hide the run query button
                            document.getElementById('start-query-box').style.display = 'none';

                            //Show the update query button
                            document.getElementById('update-query-box').style.display = 'block';

                            //Get the number of results of the query

                            $.ajax({
                                url: "<?php echo base_url('Query/query/show_number_of_results');?>",
                                method: "POST",
                                data: {
                                    tables: query_tables,
                                    fields: required_fields,
                                    joints: joins,
                                    conditions: conditions
                                },
                                success: function (data) {

                                    //Change the content of the query results
                                    document.getElementById('preview_query_results_num').innerHTML = data;


                                }
                            });


                        }
                    });
                }
            }
        }

    }

    var contains = function (needle) {
        // Per spec, the way to identify NaN is that it is not equal to itself
        var findNaN = needle !== needle;
        var indexOf;

        if (!findNaN && typeof Array.prototype.indexOf === 'function') {
            indexOf = Array.prototype.indexOf;
        } else {
            indexOf = function (needle) {
                var i = -1, index = -1;

                for (i = 0; i < this.length; i++) {
                    var item = this[i];

                    if ((findNaN && item !== item) || item === needle) {
                        index = i;
                        break;
                    }
                }

                return index;
            };
        }

        return indexOf.call(this, needle) > -1;
    };

</script>