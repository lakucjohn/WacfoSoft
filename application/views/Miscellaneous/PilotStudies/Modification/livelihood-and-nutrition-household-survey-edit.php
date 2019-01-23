<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/29/18
 * Time: 7:26 AM
 */
?>
<h3 style="text-align: center;">ICSAP'S /MC'S SUSTAINABLE LIVELIHOOD AND NUTRITION HOUSEHOLD SURVEY</h3>

<hr>
<p>
<h5 style="text-align: center;">Pilot Version</h5>
</p>
<hr>

<?php
foreach ($default_value_array->result() as $default) {
    echo form_open('miscellaneous%20pilot%20study-details/edit/' . $default->ID);
    ?>
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-10">
            <div class="error-msg position-left"><?php echo validation_errors(); ?></div>
        </div>
    </div>
    <div class="card w-100">
        <div class="document-part-header"> Details of the Interview</div>
        <hr>
        <div class="document-part-content">
            <div class="row">
                <div class="col-md-4">
                    <label for="Name_of_interviewer" class="first-document-content-text">Name of
                        Interviewer: </label>
                    <input value="<?php echo $default->INTERVIEWER; ?>" type="text"
                           class="form-control first-document-content-text" name="Name_of_interviewer"
                           id="Name_of_interviewer"/>
                </div>
                <div class="col-md-4">
                    <label for="Date_of_interview">Date of Interview: </label>
                    <input value="<?php echo $default->DATE_OF_INTERVIEW; ?>" type="date" class="form-control"
                           name="Date_of_interview" id="Date_of_interview"/>
                </div>
                <div class="col-md-4">
                    <label for="Location_of_household" class="last-document-content-text">Location of the
                        household: </label>
                    <input value="<?php echo $default->LOCATION; ?>" type="text"
                           class="form-control last-document-content-text" name="Location_of_household"
                           id="Location_of_household"/>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-4">
                    <label for="Name_of_respondent">Name of Respondent: </label>
                    <input value="<?php echo $default->RESPONDENT; ?>" type="text" class="form-control"
                           name="Name_of_respondent" id="Name_of_respondent"/>
                </div>
                <div class="col-md-4">
                    <label for="Head_of_household">Head of Household: </label>
                    <select class="form-control" name="Head_of_household" id="Head_of_household">
                        <option value="Father" <?php if ($default->HEAD_OF_THE_HOUSEHOLD == 'Father') ?>selected>Father
                            Headed
                        </option>
                        <option value="Mother" <?php if ($default->HEAD_OF_THE_HOUSEHOLD == 'Mother') ?>selected>Mother
                            Headed
                        </option>
                        <option value="Child" <?php if ($default->HEAD_OF_THE_HOUSEHOLD == 'Child') ?>selected>Child
                            Headed
                        </option>
                    </select>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-3">
                    Number of people living in the household (all ages):
                </div>

                <div class="col-md-3">
                    <div style="font-size: 18px; font-weight: bold;">Females</div>
                    <br>
                    <label for="Females_under_5">Under 5: </label>
                    <input value="<?php echo $default->FEMALES_UNDER_5; ?>" type="text" class="form-control"
                           name="Females_under_5" id="Females_under_5"/><br>
                    <label for="Females_between_5_and_18">Between 6 and 18: </label>
                    <input value="<?php echo $default->FEMALES_BETWEEN_6_AND_18; ?>" type="text" class="form-control"
                           name="Females_between_6_and_18"
                           id="Females_between_6_and_18"/>


                </div>

                <div class="col-md-3">
                    <div style="font-size: 18px; font-weight: bold;">Males</div>
                    <br>
                    <label for="Males_under_5" class="last-document-content-text">Under 5: </label>
                    <input value="<?php echo $default->MALES_UNDER_5; ?>" type="text"
                           class="form-control last-document-content-text" name="Males_under_5"
                           id="Males_under_5"/><br>
                    <label for="Males_between_5_and_18" class="last-document-content-text">Between 6 and
                        18: </label>
                    <input value="<?php echo $default->MALES_BETWEEN_6_AND_18; ?>" type="text"
                           class="form-control last-document-content-text" name="Males_between_6_and_18"
                           id="Males_between_6_and_18"/>

                </div>

                <div class="col-md-3">
                    <div style="font-size: 18px; font-weight: bold;">Above 18</div>
                    <br>

                    <label for="Total_between_18_and_45" class="last-document-content-text">Total Between 18 and
                        45: </label>
                    <input value="<?php echo $default->TOTAL_BETWEEN_18_AND_45; ?>" type="text"
                           class="form-control last-document-content-text"
                           name="Total_between_18_and_45" id="Total_between_18_and_45"/><br>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-4">

                    <label for="Length_of_time_involved_in_project">Length of time involved in project (Years,
                        Months): </label>
                    <input value="<?php echo $default->LENGTH_OF_TIME_INVOLVED_IN_PROJECTS; ?>" type="text"
                           class="form-control" name="Length_of_time_involved_in_project"
                           id="Length_of_time_involved_in_project"/>

                </div>
            </div>

            <br>
        </div>

        <hr>

        <div class="document-part-header">Part 1: INCOME GENERATION AND LIVELIHOOD DIVIERSITY</div>
        <hr>
        <div class="document-part-content">
            <div class="row">
                <div class="col-md-12">
                    <strong><em>Ask the respondent the following questions about income and sources of livelihood of
                            the household now and one year ago. Include income coming to all members of the
                            household</em></strong>.
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table cellpadding="0" cellspacing="0" class="table table-responsive table-bordered">
                        <tr>
                            <th width="10%">Narrative</th>
                            <th width="70%"></th>
                            <th width="20%"></th>
                        </tr>
                        <tr>
                            <td class="narrative-title">
                                Income
                            </td>
                            <td>
                                Typical daily household income now
                            </td>
                            <td>
                                <div class="col-md-12">
                                    <input value="<?php echo $default->DAILY_HOUSEHOLD_INCOME_NOW; ?>" type="number"
                                           min="0" maxlength="12" class="form-control"
                                           id="daily_household_income_now" name="daily_household-income_now"
                                           placeholder="Ke Shs"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="narrative-title">
                                Generation
                            </td>
                            <td colspan="2">
                                <table cellspacing="0" cellpadding="0" border="0">
                                    <tr>
                                        <td width="78.5%">
                                            Typical daily household income one year ago
                                        </td>
                                        <td width="21.5%">
                                            <div class="col-md-12">
                                                <input value="<?php echo $default->DAILY_HOUSEHOLD_INCOME_ONE_YEAR_AGO; ?>"
                                                       type="number" min="0" maxlength="12" class="form-control"
                                                       id="daily_household_income_one_year_ago"
                                                       name="daily_household_income_one_year_ago"
                                                       placeholder="Ke Shs"/>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Has there been an increase in household daily income from one year ago
                                            to now?
                                        </td>
                                        <td>
                                            <div class="col-md-12">
                                                <input type="radio"
                                                       id="increase_in_daily_household_income_from_one_year_ago"
                                                       name="increase_in_daily_household_income_from_one_year_ago"
                                                       value="1"
                                                       <?php if ($default->INCREASE_IN_DAILY_HOUSEHOLD_INCOME == 1){ ?>checked<?php } ?>/>Yes
                                                <br>
                                                <input type="radio"
                                                       id="increase_in_daily_household_income_from_one_year_ago"
                                                       name="increase_in_daily_household_income_from_one_year_ago"
                                                       value="0"
                                                       <?php if ($default->INCREASE_IN_DAILY_HOUSEHOLD_INCOME == 0){ ?>checked<?php } ?>/>No
                                            </div>
                                        </td>

                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="narrative-title">
                                Income and
                            </td>
                            <td colspan="2">
                                <table cellspacing="0" cellpadding="0" border="0">
                                    <tr>
                                        <td width="78.5%">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    How many sources of income or livelihood does the household have
                                                    now?
                                                </div>
                                                <div class="col-md-4">
                                                    <input value="<?php echo $default->NUMBER_OF_SOURCES_OF_INCOME_NOW; ?>"
                                                           type="number" min="0" maxlength="12" class="form-control"
                                                           id="number_of_sources_of_income_now"
                                                           name="number_of_sources_of_income_now"
                                                           placeholder="0"/>
                                                </div>
                                            </div>

                                        </td>
                                        <td width="21.5%">
                                            Which ones are they?

                                            <input value="<?php echo $default->SOURCES_OF_INCOME_NOW; ?>" type="text"
                                                   class="form-control"
                                                   id="listed_sources_of_income_now"
                                                   name="listed_sources_of_income_now"/>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    Additional Notes:
                                                </div>
                                                <div class="col-md-7">
                                                <textarea name="income_additional_notes_now" class="form-control"
                                                          id="income_additional_notes_now"><?php echo $default->INCOME_NOW_ADDITIONAL_NOTES; ?></textarea>
                                                </div>
                                            </div>

                                        </td>


                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="narrative-title">
                                Livelihood diveristy
                            </td>
                            <td colspan="2">
                                <table cellspacing="0" cellpadding="0" border="0">
                                    <tr>
                                        <td width="78.5%">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    How many sources of income or livelihood did the household have
                                                    one year ago?
                                                </div>
                                                <div class="col-md-4">
                                                    <input value="<?php echo $default->NUMBER_OF_SOURCES_OF_INCOME_ONE_YEAR_AGO; ?>"
                                                           type="number" min="0" maxlength="12" class="form-control"
                                                           id="number_of_sources_of_income_one_year_ago"
                                                           name="number_of_sources_of_income_one_year_ago"
                                                           placeholder="0"/>
                                                </div>
                                            </div>

                                        </td>
                                        <td width="21.5%">
                                            Which ones are they?

                                            <input value="<?php echo $default->SOURCES_OF_INCOME_1_YEAR_AGO; ?>"
                                                   type="text" class="form-control"
                                                   id="list_sources_of_income_one_year_ago"
                                                   name="list_sources_of_income_one_year_ago"/>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    Additional Notes:
                                                </div>
                                                <div class="col-md-7">
                                                <textarea name="income_additional_notes_one_year_ago"
                                                          class="form-control"
                                                          id="income_additional_notes_one_year_ago"><?php echo $default->INCOME_ONE_YEAR_AGO_ADDITIONAL_NOTES; ?></textarea>
                                                </div>
                                            </div>

                                        </td>


                                    </tr>
                                    <tr>
                                        <td>
                                            Has there been an increase in diversity of sources of income or
                                            livelihood in the household from one year ago to now?
                                        </td>
                                        <td>
                                            <div class="col-md-12">
                                                <input type="radio"
                                                       id="increase_in_diversity_of_income_from_one_year_ago"
                                                       name="increase_in_diversity_of_income_from_one_year_ago"
                                                       <?php if ($default->INCREASE_IN_DIVERSITY_OF_SOURCES_OF_INCOME == 1){ ?>checked<?php } ?> />Yes
                                                <br>
                                                <input type="radio"
                                                       id="increase_in_diversity_of_income_from_one_year_ago"
                                                       name="increase_in_diversity_of_income_from_one_year_ago"
                                                       <?php if ($default->INCREASE_IN_DIVERSITY_OF_SOURCES_OF_INCOME == 0){ ?>checked<?php } ?> />No
                                            </div>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td colspan="2">
                                            What 3 key household needs is income most spent on in order of priority
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <table>
                                                <tr>
                                                    <th style="width: 10%">
                                                        % Medical
                                                    </th>
                                                    <th style="width: 10%">
                                                        % Education
                                                    </th>
                                                    <th style="width: 10%">
                                                        % House Rent
                                                    </th>
                                                    <th style="width: 10%">
                                                        % Clothes
                                                    </th>
                                                    <th style="width: 10%">
                                                        % Food
                                                    </th>
                                                    <th style="width: 10%">
                                                        % Household Assets
                                                    </th>
                                                    <th style="width: 10%">
                                                        % Others
                                                    </th>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input value="<?php echo $default->MEDICAL_EXPENSE; ?>"
                                                                   type="number" class="form-control"
                                                                   id="medical_percentage"
                                                                   name="medical_percentage"/>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input value="<?php echo $default->EDUCATION_EXPENSE; ?>"
                                                                   type="number" class="form-control"
                                                                   name="education_percentage"
                                                                   id="education_percentage"/>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input value="<?php echo $default->HOUSE_EXPENSE; ?>"
                                                                   type="number" class="form-control"
                                                                   name="house_rent_percentage"
                                                                   id="house_rent_percentage"/>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input value="<?php echo $default->CLOTHES_EXPENSE; ?>"
                                                                   type="number" class="form-control"
                                                                   name="clothes_percentage"
                                                                   id="clothes_percentage"/>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input value="<?php echo $default->FOOD_EXPENSE; ?>"
                                                                   type="number" class="form-control"
                                                                   id="food_percentage"
                                                                   name="food_percentage">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input value="<?php echo $default->HOUSEHOLD_ASSETS; ?>"
                                                                   type="number" class="form-control"
                                                                   name="household_assets_percentage"
                                                                   id="household_assets_percentage"/>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input value="<?php echo $default->OTHER_EXPENSES; ?>"
                                                                   type="number" class="form-control"
                                                                   name="others_percentage" id="others_percentage"/>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td class="narrative-title">
                                Household Assets
                            </td>
                            <td colspan="2">
                                <table>
                                    <tr>
                                        <td style="width: 78.5%">
                                            Has there been an increase in the number of household assets from one
                                            year ago to now and which one/s are they?
                                        </td>
                                        <td style="width: 21.5%">
                                            <div class="col-md-12">
                                                <input type="radio"
                                                       id="increase_in_diversity_of_income_from_one_year_ago"
                                                       name="increase_in_diversity_of_income_from_one_year_ago"
                                                       value="1"
                                                       <?php if ($default->INCREASE_IN_HOUSEHOLD_ASSETS == 1){ ?>checked<?php } ?>/>Yes
                                                <br>
                                                <input type="radio"
                                                       id="increase_in_diversity_of_income_from_one_year_ago"
                                                       name="increase_in_diversity_of_income_from_one_year_ago"
                                                       value="0"
                                                       <?php if ($default->INCREASE_IN_HOUSEHOLD_ASSETS == 1){ ?>checked<?php } ?>/>No
                                            </div>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">
                                            <table>
                                                <tr>
                                                    <th style="width: 10%">
                                                        Land
                                                    </th>
                                                    <th style="width: 10%">
                                                        Permanent house
                                                    </th>
                                                    <th style="width: 10%">
                                                        Semi permanent house
                                                    </th>
                                                    <th style="width: 10%">
                                                        Mud / off cut house
                                                    </th>
                                                    <th style="width: 10%">
                                                        Radio / TV
                                                    </th>
                                                    <th style="width: 10%">
                                                        Mobile phone
                                                    </th>
                                                    <th style="width: 10%">
                                                        Bicycle / Motorbike / Car
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="col-md-12">

                                                            <input type="checkbox" name="land_increase"
                                                                   id="land_increase" onclick="show_land_size();"
                                                                   <?php if ($default->LAND_INCREASE){ ?>checked<?php } ?>/>
                                                            <div class="row" style="display: none;"
                                                                 id="land_size_div">
                                                                size: <input type="text" name="land_increase_size"
                                                                             id="land_increase_size"
                                                                             class="form-control"
                                                                             value="<?php echo $default->LAND_SIZE; ?>"/>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="checkbox" name="permanent_house_increase"
                                                                   id="permanent_house_increase"
                                                                   <?php if ($default->PERMANENT_HOUSE){ ?>checked<?php } ?>/>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="checkbox"
                                                                   name="semi_permament_house_increase"
                                                                   id="semi_permament_house_increase"
                                                                   <?php if ($default->SEMI_PERMANENT_HOUSE){ ?>checked<?php } ?>/>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="checkbox"
                                                                   name="mud_or_off_cut_house_increase"
                                                                   id="mud_or_off_cut_house_increase"
                                                                   <?php if ($default->MUD_HOUSE){ ?>checked<?php } ?>/>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="checkbox" name="radio_or_tv_increase"
                                                                   id="radio_or_tv_increase"
                                                                   <?php if ($default->RADIO_OR_TV){ ?>checked<?php } ?>/>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="checkbox" name="mobile_phone_increase"
                                                                   id="mobile_phone_increase"
                                                                   <?php if ($default->MOBILE_PHONE){ ?>checked<?php } ?>/>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="checkbox" name="bicycle_increase"
                                                                   id="bicycle_increase"
                                                                   <?php if ($default->AUTOMOTIVE){ ?>checked<?php } ?>/>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>

                        </tr>
                    </table>
                </div>
            </div>


        </div>
        <hr>
        <div class="document-part-header">Part 2: HOUSEHOLD NUTRITION AND DIET</div>
        <hr>
        <div class="document-part-content">
            <div class="row">
                <div class="col-md-12">
                    <strong>
                        <em>
                            <p>
                                Ask the respondent to describe the foods (meals and snacks that were eaten by
                                <u><strong>all members of the household</strong></u> yesterday during the day and
                                night, whether at home or outside the home. Start with the first food eaten in the
                                morning.
                            </p>

                            <p>
                                Write down all food and drinks mentioned by the respondent in the "Yesterday" row of
                                the table below. When the respondent has finished, probe for meals and snacks not
                                mentioned.
                            </p>
                            Then ask the respondent to recall what was typically eaten in the household one year
                            ago. Respondents may not accurately recall all the detail of what was eaten by all
                            members of the household, but should be encouraged to recall as much as possible. Write
                            down all food and drinks mentioned by the respondent in the "One year ago" row of the
                            table below.
                            <p>

                            </p>
                        </em>
                    </strong>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table cellpadding="0" cellspacing="0" class="table table-responsive table-bordered">
                        <tr>
                            <th width="15%">Narrative</th>
                            <th width="12.5%">Breakfast</th>
                            <th width="12.5%">Snack</th>
                            <th width="12.5%">Lunch</th>
                            <th width="12.5%">Snack</th>
                            <th width="12.5%">Dinner</th>
                            <th width="12.5%">Snack</th>
                        </tr>
                        <tr>
                            <td class="narrative-title">
                                YESTERDAY
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input value="<?php echo $default->BREAKFAST_YESTERDAY; ?>" type="text"
                                               class="form-control" name="breakfast_yesterday"
                                               id="breakfast_yesterday"/>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input value="<?php echo $default->SNACK_FOR_BREAKFAST_YESTERDAY; ?>"
                                               type="text" class="form-control" name="breakfast_snack_yesterday"
                                               id="breakfast_snack_yesterday"/>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input value="<?php echo $default->LUNCH_YESTERDAY; ?>" type="text"
                                               class="form-control" name="lunch_yesterday"
                                               id="lunch_yesterday"/>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input value="<?php echo $default->SNACK_FOR_LUNCH_YESTERDAY; ?>" type="text"
                                               class="form-control" name="lunch_snack_yesterday"
                                               id="lunch_snack_yesterday"/>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input value="<?php echo $default->DINNER_YESTERDAY; ?>" type="text"
                                               class="form-control" name="dinner_yesterday"
                                               id="dinner_yesterday"/>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input value="<?php echo $default->SNACK_FOR_DINNER_YESTERDAY; ?>" type="text"
                                               class="form-control" name="dinner_snack_yesterday"
                                               id="dinner_snack_yesterday"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="narrative-title">
                                ONE YEAR AGO
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input value="<?php echo $default->BREAKFAST_1_YEAR_AGO; ?>" type="text"
                                               class="form-control" name="breakfast_one_year_ago"
                                               id="breakfast_one_year_ago"/>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input value="<?php echo $default->SNACK_FOR_BREAKFAST_1_YEAR_AGO; ?>"
                                               type="text" class="form-control" name="breakfast_snack_one_year_ago"
                                               id="breakfast_snack_one_year_ago"/>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input value="<?php echo $default->LUNCH_1_YEAR_AGO; ?>" type="text"
                                               class="form-control" name="lunch_one_year_ago"
                                               id="lunch_one_year_ago"/>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input value="<?php echo $default->SNACK_FOR_LUNCH_1_YEAR_AGO; ?>" type="text"
                                               class="form-control" name="lunch_snack_one_year_ago"
                                               id="lunch_snack_one_year_ago"/>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input value="<?php echo $default->DINNER_1_YEAR_AGO; ?>" type="text"
                                               class="form-control" name="dinner_one_year_ago"
                                               id="dinner_one_year_ago"/>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input value="<?php echo $default->SNACK_FOR_DINNER_1_YEAR_AGO; ?>" type="text"
                                               class="form-control" name="dinner_snack_one_year_ago"
                                               id="dinner_snack_one_year_ago"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="document-part-content">
            <div class="row">
                <div class="col-md-12">
                    <strong>
                        <em>
                            <p>
                                When the respondent recall is complete, fill in the food groups in the "one year
                                ago" and "Yesterday" columns in the table below, based on the information recorded
                                above. Enter "1" for Yes and "0" for NO. For any food groups not mentioned, ask the
                                respondent if a food item from this group was consumed.
                            </p>
                        </em>
                    </strong>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table cellpadding="0" cellspacing="0" class="table table-responsive table-bordered">
                        <tr>
                            <th width="25%">Food Group</th>
                            <th width="50%">Examples</th>
                            <th width="12.5%">One Year Ago</th>
                            <th width="12.5%">Yesterday</th>
                        </tr>
                        <tr>
                            <td class="narrative-title">
                                1. Cereals
                            </td>
                            <td>
                                <div class="col-md-12">
                                    Ugali, Rice, Porridge, Kitheri
                                    <p>
                                        (local food made from the following: <br>
                                        Corn/Maize, rice, wheat, sorghum, millet or any other grains or foods made
                                        from these (e.g. bread, noodles, porridge or other grain products))
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="cereals_one_year_ago" id="cereals_one_year_ago"
                                               value="1"
                                               <?php if ($default->CEREALS_1_YEAR_AGO == 1){ ?>checked<?php } ?>/> Yes
                                        <br>
                                        <input type="radio" name="cereals_one_year_ago" id="cereals_one_year_ago"
                                               value="0"
                                               <?php if ($default->CEREALS_1_YEAR_AGO == 0){ ?>checked<?php } ?>/> No
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="cereals_yesterday" id="cereals_yesterday"
                                               value="1"
                                               <?php if ($default->CEREALS_YESTERDAY == 1){ ?>checked<?php } ?>/> Yes
                                        <br>
                                        <input type="radio" name="cereals_yesterday" id="cereals_yesterday"
                                               value="0"
                                               <?php if ($default->CEREALS_YESTERDAY == 0){ ?>checked<?php } ?>/> No
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="narrative-title">
                                2. Vitamin A rich vegetables and roots
                            </td>
                            <td>
                                Pumpkin, carrots, squash, or orange flesh, sweet potatoes. <br>
                                Other locally available vitamin-A rich vegetables (e.g. red sweet pepper)
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="vitamin_a_rich_vegetables_and_roots_one_year_ago"
                                               id="vitamin_a_rich_vegetables_and_roots_one_year_ago" value="1"
                                               <?php if ($default->VITAMIN_A_VEGETABLE_1_YEAR_AGO == 1){ ?>checked<?php } ?>/>
                                        Yes
                                        <br>
                                        <input type="radio" name="vitamin_a_rich_vegetables_and_roots_one_year_ago"
                                               id="vitamin_a_rich_vegetables_and_roots_one_year_ago" value="0"
                                               <?php if ($default->VITAMIN_A_VEGETABLE_1_YEAR_AGO == 0){ ?>checked<?php } ?>/>
                                        No
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="vitamin_a_rich_vegetables_and_roots_yesterday"
                                               id="vitamin_a_rich_vegetables_and_roots_yesterday" value="1"
                                               <?php if ($default->VITAMIN_A_VEGETABLE_YESTERDAY == 1){ ?>checked<?php } ?>/>
                                        Yes
                                        <br>
                                        <input type="radio" name="vitamin_a_rich_vegetables_and_roots_yesterday"
                                               id="vitamin_a_rich_vegetables_and_roots_yesterday" value="0"
                                               <?php if ($default->VITAMIN_A_VEGETABLE_YESTERDAY == 0){ ?>checked<?php } ?>/>
                                        No
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="narrative-title">
                                3. White tubers and roots
                            </td>
                            <td>
                                White potatoes, white yams, white cassava, or any other foods made from roots
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="white_tubers_and_roots_one_year_ago"
                                               id="white_tubers_and_roots_one_year_ago" value="1"
                                               <?php if ($default->WHITE_TUBERS_1_YEAR_AGO == 1){ ?>checked<?php } ?>/>
                                        Yes <br>
                                        <input type="radio" name="white_tubers_and_roots_one_year_ago"
                                               id="white_tubers_and_roots_one_year_ago" value="0"
                                               <?php if ($default->WHITE_TUBERS_1_YEAR_AGO == 0){ ?>checked<?php } ?>/>
                                        No
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="white_tubers_and_roots_yesterday"
                                               id="white_tubers_and_roots_yesterday" value="1"
                                               <?php if ($default->WHITE_TUBERS_YESTERDAY == 1){ ?>checked<?php } ?>/>
                                        Yes <br>
                                        <input type="radio" name="white_tubers_and_roots_yesterday"
                                               id="white_tubers_and_roots_yesterday" value="0"
                                               <?php if ($default->WHITE_TUBERS_YESTERDAY == 0){ ?>checked<?php } ?>/>
                                        No
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="narrative-title">
                                4. Dark green leafy vegetables
                            </td>
                            <td>
                                Dark green/leafy vegetables, including wild ones + locally available vitamin-A rich
                                leaves such as amaranth, cassava leaves, kale, pinach, black night shade, African
                                spider, etc
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="dark_green_leafy_vegetables_one_year_ago"
                                               id="dark_green_leafy_vegetables_one_year_ago" value="1"
                                               <?php if ($default->DARK_GREEN_LEAFY_VEGETABLES_1_YEAR_AGO == 1){ ?>checked<?php } ?>/>
                                        Yes <br>
                                        <input type="radio" name="dark_green_leafy_vegetables_one_year_ago"
                                               id="dark_green_leafy_vegetables_one_year_ago" value="0"
                                               <?php if ($default->DARK_GREEN_LEAFY_VEGETABLES_1_YEAR_AGO == 0){ ?>checked<?php } ?>/>
                                        No
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="dark_green_leafy_vegetables_yesterday"
                                               id="dark_green_leafy_vegetables_yesterday" value="1"
                                               <?php if ($default->DARK_GREEN_LEAFY_VEGETABLES_YESTERDAY == 1){ ?>checked<?php } ?>/>
                                        Yes <br>
                                        <input type="radio" name="dark_green_leafy_vegetables_yesterday"
                                               id="dark_green_leafy_vegetables_yesterday" value="0"
                                               <?php if ($default->DARK_GREEN_LEAFY_VEGETABLES_YESTERDAY == 0){ ?>checked<?php } ?>/>
                                        No
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="narrative-title">
                                5. Other vegetables
                            </td>
                            <td>
                                Other vegetables (e.g. tomato, onion, egg plant) including wild vegetables
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="other_vegetables_one_year_ago"
                                               id="other_vegetables_one_year_ago" value="1"
                                               <?php if ($default->OTHER_VEGETABLES_1_YEAR_AGO == 1){ ?>checked<?php } ?>/>
                                        Yes <br>
                                        <input type="radio" name="other_vegetables_one_year_ago"
                                               id="other_vegetables_one_year_ago" value="0"
                                               <?php if ($default->OTHER_VEGETABLES_1_YEAR_AGO == 0){ ?>checked<?php } ?>/>
                                        No
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="other_vegetables_yesterday"
                                               id="other_vegetables_yesterday" value="1"
                                               <?php if ($default->OTHER_VEGETABLES_YESTERDAY == 1){ ?>checked<?php } ?>/>
                                        Yes <br>
                                        <input type="radio" name="other_vegetables_yesterday"
                                               id="other_vegetables_yesterday" value="0"
                                               <?php if ($default->OTHER_VEGETABLES_YESTERDAY == 0){ ?>checked<?php } ?>/>
                                        No
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="narrative-title">
                                6. Vitamin A rich fruits
                            </td>
                            <td>
                                Ripe mangoes, cantaloupe, apricots (fresh or dried), ripe papaya, dried peaches,
                                passion fruits, guava, loquats + other locally available vitamin-A rich fruits
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="vitamin_a_rich_fruits_one_year_ago"
                                               id="vitamin_a_rich_fruits_one_year_ago" value="1"
                                               <?php if ($default->VITAMIN_A_FRUITS_1_YEAR_AGO == 1){ ?>checked<?php } ?>/>
                                        Yes <br>
                                        <input type="radio" name="vitamin_a_rich_fruits_one_year_ago"
                                               id="vitamin_a_rich_fruits_one_year_ago" value="0"
                                               <?php if ($default->VITAMIN_A_FRUITS_1_YEAR_AGO == 0){ ?>checked<?php } ?>/>
                                        No
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="vitamin_a_rich_fruits_yesterday"
                                               id="vitamin_a_rich_fruits_yesterday" value="1"
                                               <?php if ($default->VITAMIN_A_FRUITS_YESTERDAY == 1){ ?>checked<?php } ?>/>
                                        Yes <br>
                                        <input type="radio" name="vitamin_a_rich_fruits_yesterday"
                                               id="vitamin_a_rich_fruits_yesterday" value="0"
                                               <?php if ($default->VITAMIN_A_FRUITS_YESTERDAY == 0){ ?>checked<?php } ?>/>
                                        No
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="narrative-title">
                                7. Other fruits
                            </td>
                            <td>
                                other fruits, including wild fruits - gooseberries
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="other_fruits_one_year_ago"
                                               id="other_fruits_one_year_ago" value="1"
                                               <?php if ($default->OTHER_FRUITS_1_YEAR_AGO == 1){ ?>checked<?php } ?>/>
                                        Yes <br>
                                        <input type="radio" name="other_fruits_one_year_ago"
                                               id="other_fruits_one_year_ago" value="0"
                                               <?php if ($default->OTHER_FRUITS_1_YEAR_AGO == 0){ ?>checked<?php } ?>/>
                                        No
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="other_fruits_yesterday"
                                               id="other_fruits_yesterday" value="1"
                                               <?php if ($default->OTHER_FRUITS_YESTERDAY == 1){ ?>checked<?php } ?>/>
                                        Yes <br>
                                        <input type="radio" name="other_fruits_yesterday"
                                               id="other_fruits_yesterday" value="0"
                                               <?php if ($default->OTHER_FRUITS_YESTERDAY == 0){ ?>checked<?php } ?>/>
                                        No
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="narrative-title">
                                8. Organ meat (iron-rich)
                            </td>
                            <td>
                                Liver, kidney, heart or other organ meats or blood-based foods
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="organ_meat_one_year_ago"
                                               id="organ_meat_one_year_ago" value="1"
                                               <?php if ($default->ORGAN_MEAT_1_YEAR_AGO == 1){ ?>checked<?php } ?>/>
                                        Yes <br>
                                        <input type="radio" name="organ_meat_one_year_ago"
                                               id="organ_meat_one_year_ago" value="0"
                                               <?php if ($default->ORGAN_MEAT_1_YEAR_AGO == 0){ ?>checked<?php } ?>/> No
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="organ_meat_yesterday" id="organ_meat_yesterday"
                                               value="1"
                                               <?php if ($default->ORGAN_MEAT_YESTERDAY == 1){ ?>checked<?php } ?>/> Yes
                                        <br>
                                        <input type="radio" name="organ_meat_yesterday" id="organ_meat_yesterday"
                                               value="0"
                                               <?php if ($default->ORGAN_MEAT_YESTERDAY == 0){ ?>checked<?php } ?>/> No
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="narrative-title">
                                9. Flesh meats
                            </td>
                            <td>
                                Beef, pork, lamb, goat, rabbit, wild game, chicken, duck, or any other birds
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="flesh_meats_one_year_ago"
                                               id="flesh_meats_one_year_ago" value="1"
                                               <?php if ($default->FLESH_MEATS_1_YEAR_AGO == 1){ ?>checked<?php } ?>/>
                                        Yes <br>
                                        <input type="radio" name="flesh_meats_one_year_ago"
                                               id="flesh_meats_one_year_ago" value="0"
                                               <?php if ($default->FLESH_MEATS_1_YEAR_AGO == 0){ ?>checked<?php } ?>/>
                                        No
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="flesh_meats_yesterday" id="flesh_meats_yesterday"
                                               value="1"
                                               <?php if ($default->FLESH_MEATS_YESTERDAY == 1){ ?>checked<?php } ?>/>
                                        Yes <br>
                                        <input type="radio" name="flesh_meats_yesterday" id="flesh_meats_yesterday"
                                               value="0"
                                               <?php if ($default->FLESH_MEATS_YESTERDAY == 0){ ?>checked<?php } ?>/> No
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="narrative-title">
                                10. Eggs
                            </td>
                            <td>
                                Chicken, duck, guinea hen or any other egg
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="eggs_one_year_ago" id="eggs_one_year_ago"
                                               value="1"
                                               <?php if ($default->EGGS_1_YEAR_AGO == 1){ ?>checked<?php } ?>/> Yes <br>
                                        <input type="radio" name="eggs_one_year_ago" id="eggs_one_year_ago"
                                               value="0"
                                               <?php if ($default->EGGS_1_YEAR_AGO == 0){ ?>checked<?php } ?>/> No
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="eggs_yesterday" id="eggs_yesterday" value="1"
                                               <?php if ($default->EGGS_YESTERDAY == 1){ ?>checked<?php } ?>/>
                                        Yes <br>
                                        <input type="radio" name="eggs_yesterday" id="eggs_yesterday" value="0"
                                               <?php if ($default->EGGS_YESTERDAY == 0){ ?>checked<?php } ?>/> No
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="narrative-title">
                                11. Fish
                            </td>
                            <td>
                                Fresh or dried fish or shellfish
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="fish_one_year_ago" id="fish_one_year_ago"
                                               value="1"
                                               <?php if ($default->FISH_1_YEAR_AGO == 1){ ?>checked<?php } ?>/> Yes <br>
                                        <input type="radio" name="fish_one_year_ago" id="fish_one_year_ago"
                                               value="0"
                                               <?php if ($default->FISH_1_YEAR_AGO == 0){ ?>checked<?php } ?>/> No
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="fish_yesterday" id="fish_yesterday" value="1"
                                               <?php if ($default->FISH_YESTERDAY == 1){ ?>checked<?php } ?>/>
                                        Yes <br>
                                        <input type="radio" name="fish_yesterday" id="fish_yesterday" value="0"
                                               <?php if ($default->FISH_YESTERDAY == 0){ ?>checked<?php } ?>/> No
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="narrative-title">
                                12. Legumes, nuts and seeds
                            </td>
                            <td>
                                Beans, peas, lentils, groundnuts, simsim, seeds or foods made from these
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="legumes_nuts_and_seeds_one_year_ago"
                                               id="legumes_nuts_and_seeds_one_year_ago" value="1"
                                               <?php if ($default->LEGUMES_1_YEAR_AGO == 1){ ?>checked<?php } ?>/> Yes
                                        <br>
                                        <input type="radio" name="legumes_nuts_and_seeds_one_year_ago"
                                               id="legumes_nuts_and_seeds_one_year_ago" value="0"
                                               <?php if ($default->LEGUMES_1_YEAR_AGO == 0){ ?>checked<?php } ?>/> No
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="legumes_nuts_and_seeds_yesterday"
                                               id="legumes_nuts_and_seeds_yesterday" value="1"
                                               <?php if ($default->LEGUMES_YESTERDAY == 1){ ?>checked<?php } ?>/> Yes
                                        <br>
                                        <input type="radio" name="legumes_nuts_and_seeds_yesterday"
                                               id="legumes_nuts_and_seeds_yesterday" value="0"
                                               <?php if ($default->LEGUMES_YESTERDAY == 0){ ?>checked<?php } ?>/> No
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="narrative-title">
                                13. Milk and milk products
                            </td>
                            <td>
                                Milk, cheese, yogurt, or any milk products
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="milk_and_milk_products_one_year_ago"
                                               id="milk_and_milk_products_one_year_ago" value="1"
                                               <?php if ($default->MILK_1_YEAR_AGO == 1){ ?>checked<?php } ?>/> Yes <br>
                                        <input type="radio" name="milk_and_milk_products_one_year_ago"
                                               id="milk_and_milk_products_one_year_ago" value="0"
                                               <?php if ($default->MILK_1_YEAR_AGO == 0){ ?>checked<?php } ?>/> No
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="milk_and_milk_products_yesterday"
                                               id="milk_and_milk_products_yesterday" value="1"
                                               <?php if ($default->MILK_YESTERDAY == 1){ ?>checked<?php } ?>/> Yes <br>
                                        <input type="radio" name="milk_and_milk_products_yesterday"
                                               id="milk_and_milk_products_yesterday" value="0"
                                               <?php if ($default->MILK_YESTERDAY == 0){ ?>checked<?php } ?>/> No
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="narrative-title">
                                14. Oils and fats
                            </td>
                            <td>
                                Oil, fats or butter added to food or used for cooking
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="oils_and_fats_one_year_ago"
                                               id="oils_and_fats_one_year_ago" value="1"
                                               <?php if ($default->OILS_AND_FATS_1_YEAR_AGO == 1){ ?>checked<?php } ?>/>
                                        Yes <br>
                                        <input type="radio" name="oils_and_fats_one_year_ago"
                                               id="oils_and_fats_one_year_ago" value="0"
                                               <?php if ($default->OILS_AND_FATS_1_YEAR_AGO == 0){ ?>checked<?php } ?>/>
                                        No
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="oils_and_fats_yesterday"
                                               id="oils_and_fats_yesterday" value="1"
                                               <?php if ($default->OILS_AND_FATS_YESTERDAY == 1){ ?>checked<?php } ?>/>
                                        Yes <br>
                                        <input type="radio" name="oils_and_fats_yesterday"
                                               id="oils_and_fats_yesterday" value="0"
                                               <?php if ($default->OILS_AND_FATS_YESTERDAY == 0){ ?>checked<?php } ?> />
                                        No
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="narrative-title">
                                15. Red palm products
                            </td>
                            <td>
                                Red palm oil, palm nut or palm nut pulp sauce
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="red_palm_products_one_year_ago"
                                               id="red_palm_products_one_year_ago" value="1"
                                               <?php if ($default->RED_PALM_1_YEAR_AGO == 1){ ?>checked<?php } ?>/> Yes
                                        <br>
                                        <input type="radio" name="red_palm_products_one_year_ago"
                                               id="red_palm_products_one_year_ago" value="0"
                                               <?php if ($default->RED_PALM_1_YEAR_AGO == 0){ ?>checked<?php } ?>/> No
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="red_palm_products_yesterday"
                                               id="red_palm_products_yesterday" value="1"
                                               <?php if ($default->RED_PALM_YESTERDAY == 1){ ?>checked<?php } ?>/> Yes
                                        <br>
                                        <input type="radio" name="red_palm_products_yesterday"
                                               id="red_palm_products_yesterday" value="0"
                                               <?php if ($default->RED_PALM_YESTERDAY == 0){ ?>checked<?php } ?>/> No
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="narrative-title">
                                16. Sweets
                            </td>
                            <td>
                                Sugar, honey, sweetened soda or ugary foods such as chocolates, candles, cookies and
                                cakes
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="sweets_one_year_ago" id="sweets_one_year_ago"
                                               value="1"
                                               <?php if ($default->SWEETS_1_YEAR_AGO == 1){ ?>checked<?php } ?>/> Yes
                                        <br>
                                        <input type="radio" name="sweets_one_year_ago" id="sweets_one_year_ago"
                                               value="0"
                                               <?php if ($default->SWEETS_1_YEAR_AGO == 0){ ?>checked<?php } ?>/> No
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="sweets_yesterday" id="sweets_yesterday"
                                               value="1"
                                               <?php if ($default->SWEETS_YESTERDAY == 1){ ?>checked<?php } ?>/> Yes
                                        <br>
                                        <input type="radio" name="sweets_yesterday" id="sweets_yesterday"
                                               value="0"
                                               <?php if ($default->SWEETS_YESTERDAY == 0){ ?>checked<?php } ?>/> No
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="narrative-title">
                                17. Spices, condiments, beverages
                            </td>
                            <td>
                                Spices (black pepper, salt), condiments (soy sauce, hot sauce), coffee, tea,
                                alcoholic beverages or local examples
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="spices_condiments_beverages_one_year_ago"
                                               id="spices_condiments_beverages_one_year_ago" value="1"
                                               <?php if ($default->SPICES_1_YEAR_AGO == 1){ ?>checked<?php } ?>/> Yes
                                        <br>
                                        <input type="radio" name="spices_condiments_beverages_one_year_ago"
                                               id="spices_condiments_beverages_one_year_ago" value="0"
                                               <?php if ($default->SPICES_1_YEAR_AGO == 0){ ?>checked<?php } ?>/> No
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="spices_condiments_beverages_yesterday"
                                               id="spices_condiments_beverages_yesterday" value="1"
                                               <?php if ($default->SPICES_YESTERDAY == 1){ ?>checked<?php } ?>/> Yes
                                        <br>
                                        <input type="radio" name="spices_condiments_beverages_yesterday"
                                               id="spices_condiments_beverages_yesterday" value="0"
                                               <?php if ($default->SPICES_YESTERDAY == 0){ ?>checked<?php } ?>/> No
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" style="font-size: 20px; text-align: center;">
                                Environment and Sanitation
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Does the household have a drying dish rack?
                            </td>
                            <td colspan="2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="household_has_drying_dish_rack"
                                               id="household_has_drying_dish_rack" value="1"
                                               <?php if ($default->DISH_RACK == 1){ ?>checked<?php } ?>/> Yes &nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="household_has_drying_dish_rack"
                                               id="household_has_drying_dish_rack" value="0"
                                               <?php if ($default->DISH_RACK == 0){ ?>checked<?php } ?>/> No
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Does the household have a compost pit?
                            </td>
                            <td colspan="2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="household_has_a_compost_pit"
                                               id="household_has_a_compost_pit" value="1"
                                               <?php if ($default->COMPOST_PIT == 1){ ?>checked<?php } ?>/> Yes &nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="household_has_a_compost_pit"
                                               id="household_has_a_compost_pit" value="0"
                                               <?php if ($default->COMPOST_PIT == 0){ ?>checked<?php } ?>/> No
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Does the household have a cloth drying line?
                            </td>
                            <td colspan="2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="household_has_a_cloth_drying_line"
                                               id="household_has_a_cloth_drying_line" value="1"
                                               <?php if ($default->CLOTH_DRYING_LINE == 1){ ?>checked<?php } ?>/> Yes
                                        &nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="household_has_a_cloth_drying_line"
                                               id="household_has_a_cloth_drying_line" value="0"
                                               <?php if ($default->CLOTH_DRYING_LINE == 0){ ?>checked<?php } ?>/> No
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Does the household have a latrine?
                            </td>
                            <td colspan="2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="household_has_a_latrine"
                                               id="household_has_a_latrine" value="1"
                                               <?php if ($default->LATRINE == 1){ ?>checked<?php } ?>/> Yes &nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="household_has_a_latrine"
                                               id="household_has_a_latrine" value="0"
                                               <?php if ($default->LATRINE == 0){ ?>checked<?php } ?>/> No
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Does the household have a tippy tap?
                            </td>
                            <td colspan="2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="household_has_a_tippy_tap"
                                               id="household_has_a_tippy_tap" value="1"
                                               <?php if ($default->TIPPY_TAP == 1){ ?>checked<?php } ?>/> Yes &nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="household_has_a_tippy_tap"
                                               id="household_has_a_tippy_tap" value="0"
                                               <?php if ($default->TIPPY_TAP == 0){ ?>checked<?php } ?>/> No
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Does the household boil drinking water for household use?
                            </td>
                            <td colspan="2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="household_boils_drinking_water_for_use"
                                               id="household_boils_drinking_water_for_use" value="1"
                                               <?php if ($default->BOILS_WATER == 1){ ?>checked<?php } ?>/> Yes &nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="household_boils_drinking_water_for_use"
                                               id="household_boils_drinking_water_for_use" value="0"
                                               <?php if ($default->BOILS_WATER == 0){ ?>checked<?php } ?>/> No
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="4">
                                Household self appraisal
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">Does the household think they have improved their living situation?</td>
                            <td colspan="2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio"
                                               name="household_thinks_they_have_improved_their_living_situation"
                                               id="household_thinks_they_have_improved_their_living_situation"
                                               value="1"
                                               <?php if ($default->IMPROVED_LIVING_STANDARD == 1){ ?>checked<?php } ?>
                                               onclick="show_significant_story_div();"/> Yes &nbsp;&nbsp;&nbsp;
                                        <input type="radio"
                                               name="household_thinks_they_have_improved_their_living_situation"
                                               id="household_thinks_they_have_improved_their_living_situation"
                                               value="0"
                                               <?php if ($default->IMPROVED_LIVING_STANDARD == 0){ ?>checked<?php } ?>
                                               onclick="show_challenge_story_div();"/> No
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <div class="row" id="significant-story" style="display: none;">
                                    <div class="col-md-12">
                                        <div class="col-md-8">
                                            <label for="significant_story_text"> What is the most significant story
                                                of the household?</label>
                                            <textarea rows="5" class="form-control"
                                                      id="significant_story_text"></textarea>

                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="challenge-story" style="display: none">
                                    <div class="col-md-12">
                                        <div class="col-md-8">
                                            <label for="failure_story_text">Why?</label>
                                            <textarea cols="5" class="form-control"
                                                      id="failure_story_text"></textarea>

                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td colspan="2">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="4" style="font-size: 12px; text-align: center; font-weight: bold;"> Total
                                number of "YES" answers (score 1) entered in each column:
                                &nbsp;&nbsp;One Year Ago = 0; &nbsp; &nbsp; Yesterday = 0
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="col-md-12">
                                    On the basis of the scores above, has this household improved its dietary
                                    diversity from one year ago to now?
                                </div>
                            </td>
                            <td colspan="2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="household_has_increased_its_dietary_diversity"
                                               id="household_has_increased_its_dietary_diversity" value="1"
                                               <?php if ($default->IMPROVED_DIET == 1){ ?>checked<?php } ?>/> Yes
                                        &nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="household_has_increased_its_dietary_diversity"
                                               id="household_has_increased_its_dietary_diversity" value="0"
                                               <?php if ($default->IMPROVED_DIET == 0){ ?>checked<?php } ?>/> No
                                    </div>
                                </div>

                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <div class="col-md-12">
                                    Has this household increased its knowledge of kitchen gardening/horticulture or
                                    agriculture, or received nutritional counseling in the past year?
                                </div>
                            </td>

                            <td colspan="2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio"
                                               name="household_has_increased_its_knowledge_of_kitchen_gardening"
                                               id="household_has_increased_its_knowledge_of_kitchen_gardening"
                                               value="1"
                                               <?php if ($default->IMPROVED_KNOWLEDGE_OF_NUTRITION == 1){ ?>checked<?php } ?>/>
                                        Yes &nbsp;&nbsp;&nbsp;
                                        <input type="radio"
                                               name="household_has_increased_its_knowledge_of_kitchen_gardening"
                                               id="household_has_increased_its_knowledge_of_kitchen_gardening"
                                               value="0"
                                               <?php if ($default->IMPROVED_KNOWLEDGE_OF_NUTRITION == 0){ ?>checked<?php } ?>/>
                                        No
                                    </div>
                                </div>

                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <div class="col-md-12">
                                    Has the household reduced its post-harvest loss through improved storage and
                                    preservation of foodstuff in the past?
                                </div>
                            </td>

                            <td colspan="2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio"
                                               name="household_has_reduced_its_post_harvest_loss_through_improved_storage"
                                               id="household_has_reduced_its_post_harvest_loss_through_improved_storage"
                                               value="1"
                                               <?php if ($default->REDUCED_POST_HARVEST_LOSS_DUE_TO_IMPROVED_STORAGE == 1){ ?>checked<?php } ?>/>
                                        Yes &nbsp;&nbsp;&nbsp;
                                        <input type="radio"
                                               name="household_has_reduced_its_post_harvest_loss_through_improved_storage"
                                               id="household_has_reduced_its_post_harvest_loss_through_improved_storage"
                                               value="0"
                                               <?php if ($default->REDUCED_POST_HARVEST_LOSS_DUE_TO_IMPROVED_STORAGE == 0){ ?>checked<?php } ?>/>
                                        No
                                    </div>
                                </div>

                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <div class="col-md-12">
                                    Has the household increased its asset base?
                                </div>
                            </td>

                            <td colspan="2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="radio" name="household_has_increased_its_asset_base"
                                               id="household_has_increased_its_asset_base" value="1"
                                               <?php if ($default->INCREASED_HOUSEHOLD_ASSET_BASE == 1){ ?>checked<?php } ?>/>
                                        Yes &nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="household_has_increased_its_asset_base"
                                               id="household_has_increased_its_asset_base" value="0"
                                               <?php if ($default->INCREASED_HOUSEHOLD_ASSET_BASE == 0){ ?>checked<?php } ?>/>
                                        No
                                    </div>
                                </div>

                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div class="col-md-12">
                                    <label for="conclusion">Conclusion: </label>
                                    <textarea class="form-control" rows="5" id="conclusion"
                                              name="conclusion"><?php echo $default->CONCLUSION ?>

                                </textarea>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div class="col-md-12">
                                    <label for="recommendation">Recommendations for improvement: </label>
                                    <textarea class="form-control" rows="5" id="recommendation"
                                              name="recommendation"><?php echo $default->RECOMMENDATION; ?>

                                </textarea>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-md-12" style="text-align: center;">
                <button type="submit" class="btn btn-md btn-primary">Save Information</button>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12" style="font-size: 10px;">

                This survey tool is based on a survey form produced by the UN Food and Agriculture Organisation
                Nutrition and Consumer Protection Division (2007). It has been adapted for use in monitoring and
                evaluation in ICSAP intervention activities and will be used to feed into <i>Misean Cara
                    Standardised Results Framework</i>.

            </div>
        </div>
    </div>
    </form>
    <?php
}
?>

<script type="text/javascript">

    function show_land_size() {
        if ($("#land_increase").is(":checked")) {
            $("#land_size_div").show();
        } else {
            $("#land_size_div").hide();
        }
    }

    function show_significant_story_div() {
        document.getElementById('significant-story').style.display = 'block';
        document.getElementById('challenge-story').style.display = 'none';

    }

    function show_challenge_story_div() {
        document.getElementById('significant-story').style.display = 'none';
        document.getElementById('challenge-story').style.display = 'block';

    }

</script>