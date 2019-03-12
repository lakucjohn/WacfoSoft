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
                                           class="livelihood_group_field" value="GROUPS.NAME"/> Name of the Group<br>
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
                                           value="CHILDREN.VULNERABILITY"
                                           onchange="turn_on_checkbox('disability_type');"/> VULNERABILITY<br>
                                    <input type="checkbox" name="tables_field" id="tables_field" class="children_field"
                                           value="CHILDREN.DATE_OF_BIRTH"/> DATE OF BIRTH<br>
                                    <input type="checkbox" name="tables_field" id="tables_field" class="children_field"
                                           value="CHILDREN.PARISH" onchange="turn_on_checkbox('parish');"/> PARISH<br>
                                    <input type="checkbox" name="tables_field" id="tables_field" class="children_field"
                                           value="CHILDREN.VILLAGE" onchange="turn_on_checkbox('village');"/>
                                    VILLAGE<br>
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
                                               class="assessment_2_field" value="ASSESSMENT_2_REDORDS_NEW.CHILD"/> CHILD
                                        <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="assessment_2_field"
                                               value="ASSESSMENT_2_REDORDS_NEW.DATE_OF_FIRST_SCREENING"/> DATE OF FIRST
                                        SCREENING <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="assessment_2_field"
                                               value="ASSESSMENT_2_REDORDS_NEW.IDENTIFIED_BY"/> IDENTIFIED BY <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="assessment_2_field" value="ASSESSMENT_2_REDORDS_NEW.ASSESSED_BY"/>
                                        ASSESSED BY <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="assessment_2_field" value="ASSESSMENT_2_REDORDS_NEW.DISTANCE"/>
                                        DISTANCE <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="assessment_2_field"
                                               value="ASSESSMENT_2_REDORDS_NEW.NEAREST_HEALTH_CENTRE"/> NEAREST HEALTH
                                        CENTRE <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="assessment_2_field"
                                               value="ASSESSMENT_2_REDORDS_NEW.VENUE_FOR_SCREENING"/> VENUE FOR
                                        SCREENING <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="assessment_2_field"
                                               value="ASSESSMENT_2_REDORDS_NEW.MEDICAL_HISTORY"/> MEDICAL HISTORY <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="assessment_2_field" value="ASSESSMENT_2_REDORDS_NEW.FINDINGS"/>
                                        FINDINGS <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="assessment_2_field" value="ASSESSMENT_2_REDORDS_NEW.DISABILITY"/>
                                        DISABILITY <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="assessment_2_field"
                                               value="ASSESSMENT_2_REDORDS_NEW.RECOMMENDATION"/> RECOMMENDATION <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="assessment_2_field" value="ASSESSMENT_2_REDORDS_NEW.SCREENED_BY"/>
                                        SCREENED BY <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="assessment_2_field" value="ASSESSMENT_2_REDORDS_NEW.TITLE"/> TITLE
                                        <br>
                                        <input type="checkbox" name="tables_field" id="tables_field"
                                               class="assessment_2_field"
                                               value="ASSESSMENT_2_REDORDS_NEW.DATE_ENTERED"/> DATE ENTERED <br>
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
                                               class="visitation_field" value="VISIT_RECORDS.PROJECT"/> PROJECT <br>
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
                                               class="training_outcome_field" value="TRAINING_OUTCOME.OUTCOME"/>
                                        Name<br>
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
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.NAME_OF_RESPONDENT"/> NAME OF
                                        RESPONDENT <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field" value="PORTICUS_BASELINE_ASSESSMENTS.AGE"/> AGE
                                        <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field" value="PORTICUS_BASELINE_ASSESSMENTS.VILLAGE"/>
                                        VILLAGE <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field" value="PORTICUS_BASELINE_ASSESSMENTS.GENDER"/>
                                        GENDER <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.NAME_OF_VULNERABLE"/> NAME OF
                                        VULNERABLE <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.GENDER_OF_VULNERABLE"/> GENDER OF
                                        VULNERABLE <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.AGE_OF_VULNERABLE"/> AGE OF
                                        VULNERABLE <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.CATEGORY_OF_DISABILITY"/> CATEGORY
                                        OF DISABILITY <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.NAME_OF_DISABILITY"/> NAME OF
                                        DISABILITY <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.MARITAL_STATUS"/> MARITAL STATUS
                                        <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.LEVEL_OF_EDUCATION "/> LEVEL OF
                                        EDUCATION <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field" value="PORTICUS_BASELINE_ASSESSMENTS.OCCUPATION"/>
                                        OCCUPATION <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.HOUSEHOLD_MONTHLY_INCOME"/>
                                        HOUSEHOLD MONTHLY INCOME <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.DEFINITION_OF_DISABILITY"/>
                                        DEFINITION OF DISABILITY <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.LIST_OF_DISABILITIES_KNOWN"/> LIST
                                        OF DISABILITIES KNOWN <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.CAUSES_OF_DISABILITIES_KNOWN"/>
                                        CAUSES OF DISABILITIES KNOWN <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.WAYS_OF_PREVENTION"/> WAYS OF
                                        PREVENTION <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.FEELING_OF_HAVING_A_VULNERABLE"/>
                                        CATEGORY <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.FEELING_OF_THE_COMMUNITY"/> FEELING
                                        OF THE_COMMUNITY <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.VULNERABLE_SUPPORTED"/> VULNERABLE
                                        SUPPORTED <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.SUPPORT_GIVEN"/> SUPPORT GIVEN <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.WHY_NOT_SUPPORTED"/> WHY NOT
                                        SUPPORTED <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.REHABILITATION_RECEIVED"/>
                                        REHABILITATION RECEIVED <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.PLACE_OF_REHABILITATION"/> PLACE OF
                                        REHABILITATION <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.KIND_OF_TREATMENT_RECEIVED"/> KIND
                                        OF TREATMENT RECEIVED <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.COST_OF_TREATMENT"/> COST OF
                                        TREATMENT <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.DURATION_OF_THE_TREATMENT"/>
                                        DURATION OF THE TREATMENT <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.FREQUENCY_OF_ATTENDANCE"/> FREQUENCY
                                        OF ATTENDANCE <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.REGULAR_ATTENDANCE"/> REGULAR
                                        ATTENDANCE <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.REASON_FOR_NOT_ATTENDING_REGULARLY"/>
                                        REASON FOR NOT ATTENDING REGULARLY <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.QUALITY_OF_SERVICE"/> QUALITY OF
                                        SERVICE <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.TRAINING_RECEIVED"/> TRAINING
                                        RECEIVED <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.NAME_OF_TRAINER"/> NAME OF TRAINER
                                        <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.TRAINING_WAS_ABOUT"/> TRAINING WAS
                                        ABOUT <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.HELP_OF_THE_TRAINING"/> HELP OF THE
                                        TRAINING <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.CHALLENGES_FACED_IN_CARING"/>
                                        CHALLENGES FACED IN CARING <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.STRENGTHS_OF_VULNERABLE"/> STRENGTHS
                                        OF VULNERABLE <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.WEAKNESSES_OF_VULNERABLE"/>
                                        WEAKNESSES OF VULNERABLE <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
                                               class="porticus_field"
                                               value="PORTICUS_BASELINE_ASSESSMENTS.HOPE_FOR_THE_VULNERABLE"/> HOPE FOR
                                        THE VULNERABLE <br>
                                        <input type="checkbox" name="tables_field" id="livelihood_categories_field"
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
                            <td>PROJECT</td>
                            <td><input type="text" name="visitation_project_criterion" id="visitation_project_criterion"
                                       class="form-control"/></td>
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
                            <td><input type="text" name="marketing_individual_id_criterion" id="category_criterion"
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
                                       id="category_criterion" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td>NAME OF DISABILITY</td>
                            <td><input type="text" name="porticus_name_of_disability_criterion"
                                       id="porticus_category_of_disability_criterion" class="form-control"/></td>
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
            <div id="preview_query_results">
                Query Results
            </div>
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
            <button class="btn btn-md btn-link" id="show_criteria_button" onclick="show_criteria();"
                    style="display: none;">Show Criteria<i class="fa fa-angle-double-down"></i></button>
        </div>


    </div>
    <hr>
</div>