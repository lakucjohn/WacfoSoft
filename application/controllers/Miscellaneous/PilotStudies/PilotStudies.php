<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 7:32 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class PilotStudies extends AuthContentController {

    public function __construct()
    {
        parent::__construct();

        // Load the models for this controller
        $this->load->model('Miscellaneous/PilotStudies/pilotStudies_model');

    }

    public function index()
    {
        $data = array(

            'title' => 'Pilot Studies | WACFO',

        );

        $data['data_set'] = $this->pilotStudies_model->fetch();

        $this->template->load('default', 'Miscellaneous/PilotStudies/Data/pilot-studies-data-list', $data);


    }

    public function create(){

        $data = array(
            'title' => 'New Misean Cara Livelihood and Nutrition Household Survey'
        );

        # Retrieving values from the form

        $Name_of_interviewer = $this->input->post('Name_of_interviewer');
        $Date_of_interview = $this->input->post('Date_of_interview');
        $Location_of_household = $this->input->post('Location_of_household');
        $Name_of_respondent = $this->input->post('Name_of_respondent');
        $Head_of_household = $this->input->post('Head_of_household');
        $Females_under_5 = $this->input->post('Females_under_5');
        $Females_between_5_and_18 = $this->input->post('Females_between_6_and_18');
        $Males_under_5 = $this->input->post('Males_under_5');
        $Males_between_5_and_18 = $this->input->post('Males_between_6_and_18');
        $Males_between_18_and_45 = $this->input->post('Males_between_18_and_45');
        $Females_between_18_and_45 = $this->input->post('Females_between_18_and_45');
        $Length_of_time_involved_in_project = $this->input->post('Length_of_time_involved_in_project');
        $daily_household_income_now = $this->input->post('daily_household_income_now');
        $daily_household_income_one_year_ago = $this->input->post('daily_household_income_one_year_ago');
        $increase_in_daily_household_income_from_one_year_ago = $this->input->post('increase_in_daily_household_income_from_one_year_ago');
        $number_of_sources_of_income_now = $this->input->post('number_of_sources_of_income_now');
        $listed_sources_of_income_now = $this->input->post('listed_sources_of_income_now');
        $income_additional_notes_now = $this->input->post('income_additional_notes_now');
        $number_of_sources_of_income_one_year_ago = $this->input->post('');
        $list_sources_of_income_one_year_ago = $this->input->post('list_sources_of_income_one_year_ago');
        $income_additional_notes_one_year_ago = $this->input->post('income_additional_notes_one_year_ago');
        $increase_in_diversity_of_income_from_one_year_ago = $this->input->post('increase_in_diversity_of_income_from_one_year_ago');
        $medical_percentage = $this->input->post('medical_percentage');
        $education_percentage = $this->input->post('education_percentage');
        $house_rent_percentage = $this->input->post('house_rent_percentage');
        $clothes_percentage = $this->input->post('clothes_percentage');
        $food_percentage = $this->input->post('food_percentage');
        $household_assets_percentage = $this->input->post('household_assets_percentage');
        $others_percentage = $this->input->post('others_percentage');
        $land_increase = $this->input->post('land_increase');
        $land_increase_size = $this->input->post('land_increase_size');
        $permanent_house_increase = $this->input->post('permanent_house_increase');
        $semi_permament_house_increase = $this->input->post('semi_permament_house_increase');
        $mud_or_off_cut_house_increase = $this->input->post('mud_or_off_cut_house_increase');
        $radio_or_tv_increase = $this->input->post('radio_or_tv_increase');
        $mobile_phone_increase = $this->input->post('mobile_phone_increase');
        $bicycle_increase = $this->input->post('bicycle_increase');
        $breakfast_yesterday = $this->input->post('breakfast_yesterday');
        $breakfast_snack_yesterday = $this->input->post('breakfast_snack_yesterday');
        $lunch_yesterday = $this->input->post('lunch_yesterday');
        $lunch_snack_yesterday = $this->input->post('lunch_snack_yesterday');
        $dinner_yesterday = $this->input->post('dinner_yesterday');
        $dinner_snack_yesterday = $this->input->post('dinner_snack_yesterday');
        $breakfast_one_year_ago = $this->input->post('breakfast_one_year_ago');
        $breakfast_snack_one_year_ago = $this->input->post('breakfast_snack_one_year_ago');
        $lunch_one_year_ago = $this->input->post('lunch_one_year_ago');
        $lunch_snack_one_year_ago = $this->input->post('lunch_snack_one_year_ago');
        $dinner_one_year_ago = $this->input->post('dinner_one_year_ago');
        $dinner_snack_one_year_ago = $this->input->post('dinner_snack_one_year_ago');
        $cereals_one_year_ago = $this->input->post('cereals_one_year_ago');
        $cereals_yesterday = $this->input->post('cereals_yesterday');
        $vitamin_a_rich_vegetables_and_roots_one_year_ago = $this->input->post('vitamin_a_rich_vegetables_and_roots_one_year_ago');
        $vitamin_a_rich_vegetables_and_roots_yesterday = $this->input->post('vitamin_a_rich_vegetables_and_roots_yesterday');
        $white_tubers_and_roots_one_year_ago = $this->input->post('white_tubers_and_roots_one_year_ago');
        $white_tubers_and_roots_yesterday = $this->input->post('white_tubers_and_roots_yesterday');
        $dark_green_leafy_vegetables_one_year_ago = $this->input->post('dark_green_leafy_vegetables_one_year_ago');
        $dark_green_leafy_vegetables_yesterday = $this->input->post('dark_green_leafy_vegetables_yesterday');
        $other_vegetables_one_year_ago = $this->input->post('other_vegetables_one_year_ago');
        $other_vegetables_yesterday = $this->input->post('other_vegetables_yesterday');
        $vitamin_a_rich_fruits_one_year_ago = $this->input->post('vitamin_a_rich_fruits_one_year_ago');
        $vitamin_a_rich_fruits_yesterday = $this->input->post('vitamin_a_rich_fruits_yesterday');
        $other_fruits_one_year_ago = $this->input->post('other_fruits_one_year_ago');
        $other_fruits_yesterday = $this->input->post('other_fruits_yesterday');
        $organ_meat_one_year_ago = $this->input->post('organ_meat_one_year_ago');
        $organ_meat_yesterday = $this->input->post('organ_meat_yesterday');
        $flesh_meats_one_year_ago = $this->input->post('flesh_meats_one_year_ago');
        $flesh_meats_yesterday = $this->input->post('flesh_meats_yesterday');
        $eggs_one_year_ago = $this->input->post('eggs_one_year_ago');
        $eggs_yesterday = $this->input->post('eggs_yesterday');
        $fish_one_year_ago = $this->input->post('fish_one_year_ago');
        $fish_yesterday = $this->input->post('fish_yesterday');
        $legumes_nuts_and_seeds_one_year_ago = $this->input->post('legumes_nuts_and_seeds_one_year_ago');
        $legumes_nuts_and_seeds_yesterday = $this->input->post('legumes_nuts_and_seeds_yesterday');
        $milk_and_milk_products_one_year_ago = $this->input->post('milk_and_milk_products_one_year_ago');
        $milk_and_milk_products_yesterday = $this->input->post('milk_and_milk_products_yesterday');
        $oils_and_fats_one_year_ago = $this->input->post('oils_and_fats_one_year_ago');
        $oils_and_fats_yesterday = $this->input->post('oils_and_fats_yesterday');
        $red_palm_products_one_year_ago = $this->input->post('red_palm_products_one_year_ago');
        $red_palm_products_yesterday = $this->input->post('red_palm_products_yesterday');
        $sweets_one_year_ago = $this->input->post('sweets_one_year_ago');
        $sweets_yesterday = $this->input->post('sweets_yesterday');
        $spices_condiments_beverages_one_year_ago = $this->input->post('spices_condiments_beverages_one_year_ago');
        $spices_condiments_beverages_yesterday = $this->input->post('spices_condiments_beverages_yesterday');
        $household_has_drying_dish_rack = $this->input->post('household_has_drying_dish_rack');
        $household_has_a_compost_pit = $this->input->post('household_has_a_compost_pit');
        $household_has_a_cloth_drying_line = $this->input->post('household_has_a_cloth_drying_line');
        $household_has_a_latrine = $this->input->post('household_has_a_latrine');
        $household_has_a_tippy_tap = $this->input->post('household_has_a_tippy_tap');
        $household_boils_drinking_water_for_use = $this->input->post('household_boils_drinking_water_for_use');
        $household_thinks_they_have_improved_their_living_situation = $this->input->post('household_thinks_they_have_improved_their_living_situation');
        $significant_story_text = $this->input->post('significant_story_text');
        $failure_story_text = $this->input->post('failure_story_text');
        $household_has_increased_its_dietary_diversity = $this->input->post('household_has_increased_its_dietary_diversity');
        $household_has_increased_its_knowledge_of_kitchen_gardening = $this->input->post('household_has_increased_its_knowledge_of_kitchen_gardening');
        $household_has_reduced_its_post_harvest_loss_through_improved_storage = $this->input->post('household_has_reduced_its_post_harvest_loss_through_improved_storage');
        $household_has_increased_its_asset_base = $this->input->post('household_has_increased_its_asset_base');
        $conclusion = $this->input->post('conclusion');
        $recommendation = $this->input->post('recommendation');

        # Performing Validation Checks
        $this->form_validation->set_rules('Name_of_interviewer', 'Name of Interviewer', 'required');
        $this->form_validation->set_rules('Date_of_interview', 'Date of Interview', 'required');
        $this->form_validation->set_rules('Location_of_household', 'Location of the household', 'required');
        $this->form_validation->set_rules('Name_of_respondent', 'Name of Respondent', 'required');
        $this->form_validation->set_rules('Head_of_household', 'Head of Household', 'required');
        $this->form_validation->set_rules('Females_under_5', 'Females Under 5', 'required');
        $this->form_validation->set_rules('Females_between_6_and_18', 'Females Between 5 and 18', 'required');
        $this->form_validation->set_rules('Males_under_5', 'Males under 5', 'required');
        $this->form_validation->set_rules('Males_between_6_and_18', 'Males Between 5 and 18', 'required');
        $this->form_validation->set_rules('Males_between_18_and_45', 'Males Between 18 and 45', 'required');
        $this->form_validation->set_rules('Femaes_between_18_and_45', 'Females Between 18 and 45', 'required');
        $this->form_validation->set_rules('Length_of_time_involved_in_project', 'Length of time involved in project', 'required');
        $this->form_validation->set_rules('daily_household_income_now', 'Typical daily household income now', 'required');
        $this->form_validation->set_rules('daily_household_income_one_year_ago', 'Typical daily household income one year ago', 'required');
        $this->form_validation->set_rules('increase_in_daily_household_income_from_one_year_ago', 'Has there been an increase in household daily income from one year ago to now', 'required');
        $this->form_validation->set_rules('number_of_sources_of_income_now', 'How many sources of income or livelihood does the household have now', 'required');
        $this->form_validation->set_rules('number_of_sources_of_income_one_year_ago', '', 'required');
        $this->form_validation->set_rules('increase_in_diversity_of_income_from_one_year_ago', 'Has there been an increase in diversity of sources of income or livelihood in the household from one year ago to now', 'required');
        $this->form_validation->set_rules('medical_percentage', 'Percentage spent on medical care', 'required');
        $this->form_validation->set_rules('education_percentage', 'Percentage spent on education', 'required');
        $this->form_validation->set_rules('house_rent_percentage', 'Percentage Spent on House Rent', 'required');
        $this->form_validation->set_rules('clothes_percentage', 'Percentage spent on clothes', 'required');
        $this->form_validation->set_rules('household_assets_percentage', 'Percentage spent on household assets', 'required');
        $this->form_validation->set_rules('others_percentage', 'Percentage spent on Others', 'required');
        $this->form_validation->set_rules('food_percentage', 'Percentage spent on food', 'required');
        $this->form_validation->set_rules('increase_in_diversity_of_income_from_one_year_ago', 'Has there been an increase in the number of household assets from one year ago to now and which', 'required');
        $this->form_validation->set_rules('breakfast_yesterday', 'Breakfast yesterday', 'required');
        $this->form_validation->set_rules('breakfast_snack_yesterday', 'Snack for breakfast yesterday', 'required');
        $this->form_validation->set_rules('lunch_yesterday', 'Lunch yesterday', 'required');
        $this->form_validation->set_rules('lunch_snack_yesterday', 'Snack for lunch yesterday', 'required');
        $this->form_validation->set_rules('dinner_yesterday', 'Dinner yesterday', 'required');
        $this->form_validation->set_rules('dinner_snack_yesterday', 'Snack for dinner yesterday', 'required');
        $this->form_validation->set_rules('breakfast_one_year_ago', 'Breakfast one year ago', 'required');
        $this->form_validation->set_rules('breakfast_snack_one_year_ago', 'Snack for breakfast one year ago', 'required');
        $this->form_validation->set_rules('lunch_one_year_ago', 'Lunch one year ago', 'required');
        $this->form_validation->set_rules('lunch_snack_one_year_ago', 'Snack for lunch one year ago', 'required');
        $this->form_validation->set_rules('dinner_one_year_ago', 'Dinner one year ago', 'required');
        $this->form_validation->set_rules('dinner_snack_one_year_ago', 'SNack for dinner one year ago', 'required');
        $this->form_validation->set_rules('cereals_one_year_ago', 'Cereals One year ago', 'required');
        $this->form_validation->set_rules('cereals_yesterday', 'Cereals Yesterday', 'required');
        $this->form_validation->set_rules('vitamin_a_rich_vegetables_and_roots_one_year_ago', 'Vitamin A rich vegetables nd roots one year ago', 'required');
        $this->form_validation->set_rules('vitamin_a_rich_vegetables_and_roots_yesterday', 'Vitamin A rich vegetables and roots yesterday', 'required');
        $this->form_validation->set_rules('white_tubers_and_roots_one_year_ago', 'White tubers and roots one yer ago', 'required');
        $this->form_validation->set_rules('white_tubers_and_roots_yesterday', 'White tubers and roots yesterday', 'required');
        $this->form_validation->set_rules('dark_green_leafy_vegetables_one_year_ago', 'Dark green leafy vegetables one year ago', 'required');
        $this->form_validation->set_rules('dark_green_leafy_vegetables_yesterday', 'Dark green leafy vegetables yesterday', 'required');
        $this->form_validation->set_rules('other_vegetables_one_year_ago', 'Other vegetables one year ago', 'required');
        $this->form_validation->set_rules('other_vegetables_yesterday', 'Other vegetables yesterday', 'required');
        $this->form_validation->set_rules('vitamin_a_rich_fruits_one_year_ago', 'Vitamin A rich fruits one year ago', 'required');
        $this->form_validation->set_rules('vitamin_a_rich_fruits_yesterday', 'Vitamin A rich fruits yesterday', 'required');
        $this->form_validation->set_rules('other_fruits_one_year_ago', 'Other fruits one year ago', 'required');
        $this->form_validation->set_rules('other_fruits_yesterday', 'Other fruits yesterday', 'required');
        $this->form_validation->set_rules('organ_meat_one_year_ago', 'Organ meat one year ago', 'required');
        $this->form_validation->set_rules('organ_meat_yesterday', 'Organ meat yesterday', 'required');
        $this->form_validation->set_rules('flesh_meats_one_year_ago', 'flesh meats one year ago', 'required');
        $this->form_validation->set_rules('flesh_meats_yesterday', 'Flesh meats yesterday', 'required');
        $this->form_validation->set_rules('eggs_one_year_ago', 'Eggs one year ago', 'required');
        $this->form_validation->set_rules('eggs_yesterday', 'Eggs yesterday', 'required');
        $this->form_validation->set_rules('fish_one_year_ago', 'Fish one year ago', 'required');
        $this->form_validation->set_rules('fish_yesterday', 'Fish yesterday', 'required');
        $this->form_validation->set_rules('legumes_nuts_and_seeds_one_year_ago', 'Legumes, Nuts and Seeds One year ago', 'required');
        $this->form_validation->set_rules('legumes_nuts_and_seeds_yesterday', 'Legumes, Nuts and Seeds Yesterday', 'required');
        $this->form_validation->set_rules('milk_and_milk_products_one_year_ago', 'Milk and milk products One year ago', 'required');
        $this->form_validation->set_rules('milk_and_milk_products_yesterday', 'Milk and Milk products yesterday', 'required');
        $this->form_validation->set_rules('oils_and_fats_one_year_ago', 'Oils and Fats One year ago', 'required');
        $this->form_validation->set_rules('oils_and_fats_yesterday', 'Oils and Fats yesterday', 'required');
        $this->form_validation->set_rules('red_palm_products_one_year_ago', 'Red Palm Products One year ago', 'required');
        $this->form_validation->set_rules('red_palm_products_yesterday', 'Red Palm Products Yesterday', 'required');
        $this->form_validation->set_rules('sweets_one_year_ago', 'Sweets One year ago', 'required');
        $this->form_validation->set_rules('sweets_yesterday', 'Sweets Yesterday', 'required');
        $this->form_validation->set_rules('spices_condiments_beverages_one_year_ago', 'Spices, condiments, beverages One year ago', 'required');
        $this->form_validation->set_rules('spices_condiments_beverages_yesterday', 'Spices, condiments, beverages Yesterday', 'required');
        $this->form_validation->set_rules('household_has_drying_dish_rack', 'Does the household have a drying dish rack', 'required');
        $this->form_validation->set_rules('household_has_a_compost_pit', 'Does the household have a compost pit', 'required');
        $this->form_validation->set_rules('household_has_a_cloth_drying_line', 'Does the household have a cloth drying line', 'required');
        $this->form_validation->set_rules('household_has_a_latrine', 'Does the household have a latrine', 'required');
        $this->form_validation->set_rules('household_has_a_tippy_tap', 'Does the household have a tippy tap', 'required');
        $this->form_validation->set_rules('household_boils_drinking_water_for_use', 'Does the household boil drinking water for household use', 'required');
        $this->form_validation->set_rules('household_thinks_they_have_improved_their_living_situation', 'Does the household think they have improved their living situation', 'required');

        if ($this->input->post('household_thinks_they_have_improved_their_living_situation') == 1) {
            $this->form_validation->set_rules('significant_story_text', 'What is the most significant story of the household', 'required');
        } else {
            $this->form_validation->set_rules('failure_story_text', 'Why', 'required');
        }
        $this->form_validation->set_rules('household_has_increased_its_dietary_diversity', 'On the basis of the scores above, has this household improved its dietary diversity from one year ago to now', 'required');
        $this->form_validation->set_rules('household_has_increased_its_knowledge_of_kitchen_gardening', 'Has this household increased its knowledge of kitchen gardening/horticulture or agriculture, or received nutritional counseling in the past year', 'required');
        $this->form_validation->set_rules('household_has_reduced_its_post_harvest_loss_through_improved_storage', 'Has the household reduced its post-harvest loss through improved storage and preservation of foodstuff in the past', 'required');
        $this->form_validation->set_rules('household_has_increased_its_asset_base', 'Has the household increased its asset base', 'required');
        $this->form_validation->set_rules('conclusion', 'Conclusion', 'required');
        $this->form_validation->set_rules('recommendation', 'Recommendations for improvement', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'Miscellaneous/PilotStudies/Registration/livelihood-and-nutrition-household-survey-form', $data);
        } else {
            # Prepare the array od data for insertion

            $field_data = array(
                'INTERVIEWER' => $Name_of_interviewer,
                'DATE_OF_INTERVIEW' => $Date_of_interview,
                'LOCATION' => $Location_of_household,
                'RESPONDENT' => $Name_of_respondent,
                'HEAD_OF_THE_HOUSEHOLD' => $Head_of_household,
                'FEMALES_UNDER_5' => $Females_under_5,
                'FEMALES_BETWEEN_6_AND_18' => $Females_between_5_and_18,
                'MALES_UNDER_5' => $Males_under_5,
                'MALES_BETWEEN_6_and_18' => $Males_between_5_and_18,
                'MALES_BETWEEN_18_and_45' => $Males_between_18_and_45,
                'FEMALES_BETWEEN_18_and_45' => $Females_between_18_and_45,
                'LENGTH_OF_TIME_INVOLVED_IN_PROJECTS' => $Length_of_time_involved_in_project,
                'DAILY_HOUSEHOLD_INCOME_NOW' => $daily_household_income_now,
                'DAILY_HOUSEHOLD_INCOME_ONE_YEAR_AGO' => $daily_household_income_one_year_ago,
                'NUMBER_OF_SOURCES_OF_INCOME_NOW' => $number_of_sources_of_income_now,
                'SOURCES_OF_INCOME_NOW' => $listed_sources_of_income_now,
                'INCOME_NOW_ADDITIONAL_NOTES' => $income_additional_notes_now,
                'NUMBER_OF_SOURCES_OF_INCOME_ONE_YEAR_AGO' => $number_of_sources_of_income_one_year_ago,
                'SOURCES_OF_INCOME_1_YEAR_AGO' => $list_sources_of_income_one_year_ago,
                'INCOME_ONE_YEAR_AGO_ADDITIONAL_NOTES' => $income_additional_notes_one_year_ago,
                'INCREASE_IN_INCOME' => $increase_in_daily_household_income_from_one_year_ago,
                'MEDICAL_EXPENSE' => $medical_percentage,
                'EDUCATION_EXPENSE' => $education_percentage,
                'HOUSE_EXPENSE' => $house_rent_percentage,
                'CLOTHES_EXPENSE' => $clothes_percentage,
                'FOOD_EXPENSE' => $food_percentage,
                'HOUSEHOLD_ASSETS' => $household_assets_percentage,
                'OTHER_EXPENSES' => $others_percentage,
                'INCREASE_IN_DIVERSITY_OF_SOURCES_OF_INCOME' => $increase_in_diversity_of_income_from_one_year_ago,
                'LAND_INCREASE' => $land_increase,
                'LAND_SIZE' => $land_increase_size,
                'PERMANENT_HOUSE' => $permanent_house_increase,
                'SEMI_PERMANENT_HOUSE' => $semi_permament_house_increase,
                'MUD_HOUSE' => $mud_or_off_cut_house_increase,
                'RADIO_OR_TV' => $radio_or_tv_increase,
                'MOBILE_PHONE' => $mobile_phone_increase,
                'AUTOMOTIVE' => $bicycle_increase,
                'BREAKFAST_YESTERDAY' => $breakfast_yesterday,
                'SNACK_FOR_BREAKFAST_YESTERDAY' => $breakfast_snack_yesterday,
                'LUNCH_YESTERDAY' => $lunch_yesterday,
                'SNACK_FOR_LUNCH_YESTERDAY' => $lunch_snack_yesterday,
                'DINNER_YESTERDAY' => $dinner_yesterday,
                'SNACK_FOR_DINNER_YESTERDAY' => $dinner_snack_yesterday,
                'BREAKFAST_1_YEAR_AGO' => $breakfast_one_year_ago,
                'SNACK_FOR_BREAKFAST_1_YEAR_AGO' => $breakfast_snack_one_year_ago,
                'LUNCH_1_YEAR_AGO' => $lunch_one_year_ago,
                'SNACK_FOR_LUNCH_1_YEAR_AGO' => $lunch_snack_one_year_ago,
                'DINNER_1_YEAR_AGO' => $dinner_one_year_ago,
                'SNACK_FOR_DINNER_1_YEAR_AGO' => $dinner_snack_one_year_ago,
                'CEREALS_YESTERDAY' => $cereals_yesterday,
                'CEREALS_1_YEAR_AGO' => $cereals_one_year_ago,
                'VITAMIN_A_VEGETABLE_YESTERDAY' => $vitamin_a_rich_vegetables_and_roots_yesterday,
                'VITAMIN_A_VEGETABLE_1_YEAR_AGO' => $vitamin_a_rich_vegetables_and_roots_one_year_ago,
                'WHITE_TUBERS_YESTERDAY' => $white_tubers_and_roots_yesterday,
                'WHITE_TUBERS_1_YEAR_AGO' => $white_tubers_and_roots_one_year_ago,
                'DARK_GREEN_LEAFY_VEGETABLES_YESTERDAY' => $dark_green_leafy_vegetables_yesterday,
                'DARK_GREEN_LEAFY_VEGETABLES_1_YEAR_AGO' => $dark_green_leafy_vegetables_one_year_ago,
                'OTHER_VEGETABLES_YESTERDAY' => $other_vegetables_yesterday,
                'OTHER_VEGETABLES_1_YEAR_AGO' => $other_vegetables_one_year_ago,
                'VITAMIN_A_FRUITS_YESTERDAY' => $vitamin_a_rich_fruits_yesterday,
                'VITAMIN_A_FRUITS_1_YEAR_AGO' => $vitamin_a_rich_fruits_one_year_ago,
                'OTHER_FRUITS_YESTERDAY' => $other_fruits_yesterday,
                'OTHER_FRUITS_1_YEAR_AGO' => $other_fruits_one_year_ago,
                'ORGAN_MEAT_YESTERDAY' => $organ_meat_yesterday,
                'ORGAN_MEAT_1_YEAR_AGO' => $organ_meat_one_year_ago,
                'FLESH_MEATS_YESTERDAY' => $flesh_meats_yesterday,
                'FLESH_MEATS_1_YEAR_AGO' => $flesh_meats_one_year_ago,
                'EGGS_YESTERDAY' => $eggs_yesterday,
                'EGGS_1_YEAR_AGO' => $eggs_one_year_ago,
                'FISH_YESTERDAY' => $fish_yesterday,
                'FISH_1_YEAR_AGO' => $fish_one_year_ago,
                'LEGUMES_YESTERDAY' => $legumes_nuts_and_seeds_yesterday,
                'LEGUMES_1_YEAR_AGO' => $legumes_nuts_and_seeds_one_year_ago,
                'MILK_YESTERDAY' => $milk_and_milk_products_yesterday,
                'MILK_1_YEAR_AGO' => $milk_and_milk_products_one_year_ago,
                'OILS_AND_FATS_YESTERDAY' => $oils_and_fats_yesterday,
                'OILS_AND_FATS_1_YEAR_AGO' => $oils_and_fats_one_year_ago,
                'RED_PALM_YESTERDAY' => $red_palm_products_yesterday,
                'RED_PALM_1_YEAR_AGO' => $red_palm_products_one_year_ago,
                'SWEETS_YESTERDAY' => $sweets_yesterday,
                'SWEETS_1_YEAR_AGO' => $sweets_one_year_ago,
                'SPICES_YESTERDAY' => $spices_condiments_beverages_yesterday,
                'SPICES_1_YEAR_AGO' => $spices_condiments_beverages_one_year_ago,
                'DISH_RACK' => $household_has_drying_dish_rack,
                'COMPOST_PIT' => $household_has_a_compost_pit,
                'CLOTH_DRYING_LINE' => $household_has_a_cloth_drying_line,
                'LATRINE' => $household_has_a_latrine,
                'TIPPY_TAP' => $household_has_a_tippy_tap,
                'BOILS_WATER' => $household_boils_drinking_water_for_use,
                'IMPROVED_LIVING_STANDARD' => $household_thinks_they_have_improved_their_living_situation,
                'SIGNIFICANT_STORY' => $significant_story_text,
                'REASON_FOR_LOW_LIVING_STANDARD' => $failure_story_text,
                'IMPROVED_DIET' => $household_has_increased_its_dietary_diversity,
                'IMPROVED_KNOWLEDGE_OF_NUTRITION' => $household_has_increased_its_knowledge_of_kitchen_gardening,
                'INCREASED_HOUSEHOLD_ASSET_BASE' => $household_has_increased_its_asset_base,
                'REDUCED_POST_HARVEST_LOSS_DUE_TO_IMPROVED_STORAGE' => $household_has_reduced_its_post_harvest_loss_through_improved_storage,
                'CONCLUSION' => $conclusion,
                'RECOMMENDATION' => $recommendation,

            );

            $result = $this->pilotStudies_model->insert_record($field_data);
            if ($result) {
                $this->session->set_flashdata('success_msg', 'Record Submitted Successfully');
            } else {
                $this->session->set_flashdata('error_msg', 'Failed to submit record');
            }
            redirect(base_url('miscellaneous%20pilot%20studies'));
        }

    }

    public function edit(){

        $data = array(
            'title' => 'Edit Misean Cara Livelihood and Nutrition Household Survey'
        );
        $row = $this->uri->segment(3);

        $data['default_value_array'] = $this->pilotStudies_model->fetch_single_row_data_to_edit($row);

        # Retrieving values from the form

        $Name_of_interviewer = $this->input->post('Name_of_interviewer');
        $Date_of_interview = $this->input->post('Date_of_interview');
        $Location_of_household = $this->input->post('Location_of_household');
        $Name_of_respondent = $this->input->post('Name_of_respondent');
        $Head_of_household = $this->input->post('Head_of_household');
        $Females_under_5 = $this->input->post('Females_under_5');
        $Females_between_5_and_18 = $this->input->post('Females_between_6_and_18');
        $Males_under_5 = $this->input->post('Males_under_5');
        $Males_between_5_and_18 = $this->input->post('Males_between_6_and_18');
        $Males_between_18_and_45 = $this->input->post('Males_between_18_and_45');
        $Females_between_18_and_45 = $this->input->post('Females_between_18_and_45');
        $Length_of_time_involved_in_project = $this->input->post('Length_of_time_involved_in_project');
        $daily_household_income_now = $this->input->post('daily_household_income_now');
        $daily_household_income_one_year_ago = $this->input->post('daily_household_income_one_year_ago');
        $number_of_sources_of_income_now = $this->input->post('number_of_sources_of_income_now');
        $listed_sources_of_income_now = $this->input->post('listed_sources_of_income_now');
        $income_additional_notes_now = $this->input->post('income_additional_notes_now');
        $number_of_sources_of_income_one_year_ago = $this->input->post('');
        $list_sources_of_income_one_year_ago = $this->input->post('list_sources_of_income_one_year_ago');
        $income_additional_notes_one_year_ago = $this->input->post('income_additional_notes_one_year_ago');
        $increase_in_diversity_of_income_from_one_year_ago = $this->input->post('increase_in_diversity_of_income_from_one_year_ago');
        $medical_percentage = $this->input->post('medical_percentage');
        $education_percentage = $this->input->post('education_percentage');
        $house_rent_percentage = $this->input->post('house_rent_percentage');
        $clothes_percentage = $this->input->post('clothes_percentage');
        $food_percentage = $this->input->post('food_percentage');
        $household_assets_percentage = $this->input->post('household_assets_percentage');
        $others_percentage = $this->input->post('others_percentage');
        $land_increase = $this->input->post('land_increase');
        $land_increase_size = $this->input->post('land_increase_size');
        $permanent_house_increase = $this->input->post('permanent_house_increase');
        $semi_permament_house_increase = $this->input->post('semi_permament_house_increase');
        $mud_or_off_cut_house_increase = $this->input->post('mud_or_off_cut_house_increase');
        $radio_or_tv_increase = $this->input->post('radio_or_tv_increase');
        $mobile_phone_increase = $this->input->post('mobile_phone_increase');
        $bicycle_increase = $this->input->post('bicycle_increase');
        $breakfast_yesterday = $this->input->post('breakfast_yesterday');
        $breakfast_snack_yesterday = $this->input->post('breakfast_snack_yesterday');
        $lunch_yesterday = $this->input->post('lunch_yesterday');
        $lunch_snack_yesterday = $this->input->post('lunch_snack_yesterday');
        $dinner_yesterday = $this->input->post('dinner_yesterday');
        $dinner_snack_yesterday = $this->input->post('dinner_snack_yesterday');
        $breakfast_one_year_ago = $this->input->post('breakfast_one_year_ago');
        $breakfast_snack_one_year_ago = $this->input->post('breakfast_snack_one_year_ago');
        $lunch_one_year_ago = $this->input->post('lunch_one_year_ago');
        $lunch_snack_one_year_ago = $this->input->post('lunch_snack_one_year_ago');
        $dinner_one_year_ago = $this->input->post('dinner_one_year_ago');
        $dinner_snack_one_year_ago = $this->input->post('dinner_snack_one_year_ago');
        $cereals_one_year_ago = $this->input->post('cereals_one_year_ago');
        $cereals_yesterday = $this->input->post('cereals_yesterday');
        $vitamin_a_rich_vegetables_and_roots_one_year_ago = $this->input->post('vitamin_a_rich_vegetables_and_roots_one_year_ago');
        $vitamin_a_rich_vegetables_and_roots_yesterday = $this->input->post('vitamin_a_rich_vegetables_and_roots_yesterday');
        $white_tubers_and_roots_one_year_ago = $this->input->post('white_tubers_and_roots_one_year_ago');
        $white_tubers_and_roots_yesterday = $this->input->post('white_tubers_and_roots_yesterday');
        $dark_green_leafy_vegetables_one_year_ago = $this->input->post('dark_green_leafy_vegetables_one_year_ago');
        $dark_green_leafy_vegetables_yesterday = $this->input->post('dark_green_leafy_vegetables_yesterday');
        $other_vegetables_one_year_ago = $this->input->post('other_vegetables_one_year_ago');
        $other_vegetables_yesterday = $this->input->post('other_vegetables_yesterday');
        $vitamin_a_rich_fruits_one_year_ago = $this->input->post('vitamin_a_rich_fruits_one_year_ago');
        $vitamin_a_rich_fruits_yesterday = $this->input->post('vitamin_a_rich_fruits_yesterday');
        $other_fruits_one_year_ago = $this->input->post('other_fruits_one_year_ago');
        $other_fruits_yesterday = $this->input->post('other_fruits_yesterday');
        $organ_meat_one_year_ago = $this->input->post('organ_meat_one_year_ago');
        $organ_meat_yesterday = $this->input->post('organ_meat_yesterday');
        $flesh_meats_one_year_ago = $this->input->post('flesh_meats_one_year_ago');
        $flesh_meats_yesterday = $this->input->post('flesh_meats_yesterday');
        $eggs_one_year_ago = $this->input->post('eggs_one_year_ago');
        $eggs_yesterday = $this->input->post('eggs_yesterday');
        $fish_one_year_ago = $this->input->post('fish_one_year_ago');
        $fish_yesterday = $this->input->post('fish_yesterday');
        $legumes_nuts_and_seeds_one_year_ago = $this->input->post('legumes_nuts_and_seeds_one_year_ago');
        $legumes_nuts_and_seeds_yesterday = $this->input->post('legumes_nuts_and_seeds_yesterday');
        $milk_and_milk_products_one_year_ago = $this->input->post('milk_and_milk_products_one_year_ago');
        $milk_and_milk_products_yesterday = $this->input->post('milk_and_milk_products_yesterday');
        $oils_and_fats_one_year_ago = $this->input->post('oils_and_fats_one_year_ago');
        $oils_and_fats_yesterday = $this->input->post('oils_and_fats_yesterday');
        $red_palm_products_one_year_ago = $this->input->post('red_palm_products_one_year_ago');
        $red_palm_products_yesterday = $this->input->post('red_palm_products_yesterday');
        $sweets_one_year_ago = $this->input->post('sweets_one_year_ago');
        $sweets_yesterday = $this->input->post('sweets_yesterday');
        $spices_condiments_beverages_one_year_ago = $this->input->post('spices_condiments_beverages_one_year_ago');
        $spices_condiments_beverages_yesterday = $this->input->post('spices_condiments_beverages_yesterday');
        $household_has_drying_dish_rack = $this->input->post('household_has_drying_dish_rack');
        $household_has_a_compost_pit = $this->input->post('household_has_a_compost_pit');
        $household_has_a_cloth_drying_line = $this->input->post('household_has_a_cloth_drying_line');
        $household_has_a_latrine = $this->input->post('household_has_a_latrine');
        $household_has_a_tippy_tap = $this->input->post('household_has_a_tippy_tap');
        $household_boils_drinking_water_for_use = $this->input->post('household_boils_drinking_water_for_use');
        $household_thinks_they_have_improved_their_living_situation = $this->input->post('household_thinks_they_have_improved_their_living_situation');
        $significant_story_text = $this->input->post('significant_story_text');
        $failure_story_text = $this->input->post('failure_story_text');
        $household_has_increased_its_dietary_diversity = $this->input->post('household_has_increased_its_dietary_diversity');
        $household_has_increased_its_knowledge_of_kitchen_gardening = $this->input->post('household_has_increased_its_knowledge_of_kitchen_gardening');
        $household_has_reduced_its_post_harvest_loss_through_improved_storage = $this->input->post('household_has_reduced_its_post_harvest_loss_through_improved_storage');
        $household_has_increased_its_asset_base = $this->input->post('household_has_increased_its_asset_base');
        $conclusion = $this->input->post('conclusion');
        $recommendation = $this->input->post('recommendation');
        $increase_in_daily_household_income_from_one_year_ago = $this->input->post('increase_in_daily_household_income_from_one_year_ago');

        # Performing Validation Checks
        $this->form_validation->set_rules('Name_of_interviewer', 'Name of Interviewer', 'required');
        $this->form_validation->set_rules('Date_of_interview', 'Date of Interview', 'required');
        $this->form_validation->set_rules('Location_of_household', 'Location of the household', 'required');
        $this->form_validation->set_rules('Name_of_respondent', 'Name of Respondent', 'required');
        $this->form_validation->set_rules('Head_of_household', 'Head of Household', 'required');
        $this->form_validation->set_rules('Females_under_5', 'Females Under 5', 'required');
        $this->form_validation->set_rules('Females_between_6_and_18', 'Females Between 5 and 18', 'required');
        $this->form_validation->set_rules('Males_under_5', 'Males under 5', 'required');
        $this->form_validation->set_rules('Males_between_6_and_18', 'Males Between 5 and 18', 'required');
        $this->form_validation->set_rules('Males_between_18_and_45', 'Males Between 18 and 45', 'required');
        $this->form_validation->set_rules('Females_between_18_and_45', 'Females Between 18 and 45', 'required');
        $this->form_validation->set_rules('Length_of_time_involved_in_project', 'Length of time involved in project', 'required');
        $this->form_validation->set_rules('daily_household_income_one_year_ago', 'Typical daily household income one year ago', 'required');
        $this->form_validation->set_rules('increase_in_daily_household_income_from_one_year_ago', 'Has there been an increase in household daily income from one year ago to now', 'required');
        $this->form_validation->set_rules('number_of_sources_of_income_now', 'How many sources of income or livelihood does the household have now', 'required');
        $this->form_validation->set_rules('number_of_sources_of_income_one_year_ago', '', 'required');
        $this->form_validation->set_rules('increase_in_diversity_of_income_from_one_year_ago', 'Has there been an increase in diversity of sources of income or livelihood in the household from one year ago to now', 'required');
        $this->form_validation->set_rules('increase_in_diversity_of_income_from_one_year_ago', 'Has there been an increase in the number of household assets from one year ago to now and which', 'required');
        $this->form_validation->set_rules('cereals_one_year_ago', 'Cereals One year ago', 'required');
        $this->form_validation->set_rules('cereals_yesterday', 'Cereals Yesterday', 'required');
        $this->form_validation->set_rules('vitamin_a_rich_vegetables_and_roots_one_year_ago', 'Vitamin A rich vegetables nd roots one year ago', 'required');
        $this->form_validation->set_rules('vitamin_a_rich_vegetables_and_roots_yesterday', 'Vitamin A rich vegetables and roots yesterday', 'required');
        $this->form_validation->set_rules('white_tubers_and_roots_one_year_ago', 'White tubers and roots one yer ago', 'required');
        $this->form_validation->set_rules('white_tubers_and_roots_yesterday', 'White tubers and roots yesterday', 'required');
        $this->form_validation->set_rules('dark_green_leafy_vegetables_one_year_ago', 'Dark green leafy vegetables one year ago', 'required');
        $this->form_validation->set_rules('dark_green_leafy_vegetables_yesterday', 'Dark green leafy vegetables yesterday', 'required');
        $this->form_validation->set_rules('other_vegetables_one_year_ago', 'Other vegetables one year ago', 'required');
        $this->form_validation->set_rules('other_vegetables_yesterday', 'Other vegetables yesterday', 'required');
        $this->form_validation->set_rules('vitamin_a_rich_fruits_one_year_ago', 'Vitamin A rich fruits one year ago', 'required');
        $this->form_validation->set_rules('vitamin_a_rich_fruits_yesterday', 'Vitamin A rich fruits yesterday', 'required');
        $this->form_validation->set_rules('other_fruits_one_year_ago', 'Other fruits one year ago', 'required');
        $this->form_validation->set_rules('other_fruits_yesterday', 'Other fruits yesterday', 'required');
        $this->form_validation->set_rules('organ_meat_one_year_ago', 'Organ meat one year ago', 'required');
        $this->form_validation->set_rules('organ_meat_yesterday', 'Organ meat yesterday', 'required');
        $this->form_validation->set_rules('flesh_meats_one_year_ago', 'flesh meats one year ago', 'required');
        $this->form_validation->set_rules('flesh_meats_yesterday', 'Flesh meats yesterday', 'required');
        $this->form_validation->set_rules('eggs_one_year_ago', 'Eggs one year ago', 'required');
        $this->form_validation->set_rules('eggs_yesterday', 'Eggs yesterday', 'required');
        $this->form_validation->set_rules('fish_one_year_ago', 'Fish one year ago', 'required');
        $this->form_validation->set_rules('fish_yesterday', 'Fish yesterday', 'required');
        $this->form_validation->set_rules('legumes_nuts_and_seeds_one_year_ago', 'Legumes, Nuts and Seeds One year ago', 'required');
        $this->form_validation->set_rules('legumes_nuts_and_seeds_yesterday', 'Legumes, Nuts and Seeds Yesterday', 'required');
        $this->form_validation->set_rules('milk_and_milk_products_one_year_ago', 'Milk and milk products One year ago', 'required');
        $this->form_validation->set_rules('milk_and_milk_products_yesterday', 'Milk and Milk products yesterday', 'required');
        $this->form_validation->set_rules('oils_and_fats_one_year_ago', 'Oils and Fats One year ago', 'required');
        $this->form_validation->set_rules('oils_and_fats_yesterday', 'Oils and Fats yesterday', 'required');
        $this->form_validation->set_rules('red_palm_products_one_year_ago', 'Red Palm Products One year ago', 'required');
        $this->form_validation->set_rules('red_palm_products_yesterday', 'Red Palm Products Yesterday', 'required');
        $this->form_validation->set_rules('sweets_one_year_ago', 'Sweets One year ago', 'required');
        $this->form_validation->set_rules('sweets_yesterday', 'Sweets Yesterday', 'required');
        $this->form_validation->set_rules('spices_condiments_beverages_one_year_ago', 'Spices, condiments, beverages One year ago', 'required');
        $this->form_validation->set_rules('spices_condiments_beverages_yesterday', 'Spices, condiments, beverages Yesterday', 'required');
        $this->form_validation->set_rules('household_has_drying_dish_rack', 'Does the household have a drying dish rack', 'required');
        $this->form_validation->set_rules('household_has_a_compost_pit', 'Does the household have a compost pit', 'required');
        $this->form_validation->set_rules('household_has_a_cloth_drying_line', 'Does the household have a cloth drying line', 'required');
        $this->form_validation->set_rules('household_has_a_latrine', 'Does the household have a latrine', 'required');
        $this->form_validation->set_rules('household_has_a_tippy_tap', 'Does the household have a tippy tap', 'required');
        $this->form_validation->set_rules('household_boils_drinking_water_for_use', 'Does the household boil drinking water for household use', 'required');
        $this->form_validation->set_rules('household_thinks_they_have_improved_their_living_situation', 'Does the household think they have improved their living situation', 'required');
        $this->form_validation->set_rules('household_has_increased_its_dietary_diversity', 'On the basis of the scores above, has this household improved its dietary diversity from one year ago to now', 'required');
        $this->form_validation->set_rules('household_has_increased_its_knowledge_of_kitchen_gardening', 'Has this household increased its knowledge of kitchen gardening/horticulture or agriculture, or received nutritional counseling in the past year', 'required');
        $this->form_validation->set_rules('household_has_reduced_its_post_harvest_loss_through_improved_storage', 'Has the household reduced its post-harvest loss through improved storage and preservation of foodstuff in the past', 'required');
        $this->form_validation->set_rules('household_has_increased_its_asset_base', 'Has the household increased its asset base', 'required');
        $this->form_validation->set_rules('conclusion', 'Conclusion', 'required');
        $this->form_validation->set_rules('recommendation', 'Recommendations for improvement', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'Miscellaneous/PilotStudies/Modification/livelihood-and-nutrition-household-survey-edit', $data);
        } else {
            # Prepare the array od data for insertion

            $field_data = array(
                'INTERVIEWER' => $Name_of_interviewer,
                'DATE_OF_INTERVIEW' => $Date_of_interview,
                'LOCATION' => $Location_of_household,
                'RESPONDENT' => $Name_of_respondent,
                'HEAD_OF_THE_HOUSEHOLD' => $Head_of_household,
                'FEMALES_UNDER_5' => $Females_under_5,
                'FEMALES_BETWEEN_6_AND_18' => $Females_between_5_and_18,
                'MALES_UNDER_5' => $Males_under_5,
                'MALES_BETWEEN_6_and_18' => $Males_between_5_and_18,
                'MALES_BETWEEN_18_and_45' => $Males_between_18_and_45,
                'FEMALES_BETWEEN_18_and_45' => $Females_between_18_and_45,
                'LENGTH_OF_TIME_INVOLVED_IN_PROJECTS' => $Length_of_time_involved_in_project,
                'DAILY_HOUSEHOLD_INCOME_NOW' => $daily_household_income_now,
                'DAILY_HOUSEHOLD_INCOME_ONE_YEAR_AGO' => $daily_household_income_one_year_ago,
                'NUMBER_OF_SOURCES_OF_INCOME_NOW' => $number_of_sources_of_income_now,
                'SOURCES_OF_INCOME_NOW' => $listed_sources_of_income_now,
                'INCOME_NOW_ADDITIONAL_NOTES' => $income_additional_notes_now,
                'NUMBER_OF_SOURCES_OF_INCOME_ONE_YEAR_AGO' => $number_of_sources_of_income_one_year_ago,
                'SOURCES_OF_INCOME_1_YEAR_AGO' => $list_sources_of_income_one_year_ago,
                'INCOME_ONE_YEAR_AGO_ADDITIONAL_NOTES' => $income_additional_notes_one_year_ago,
                'INCREASE_IN_DAILY_HOUSEHOLD_INCOME' => $increase_in_daily_household_income_from_one_year_ago,
                'INCREASE_IN_INCOME' => $increase_in_daily_household_income_from_one_year_ago,
                'MEDICAL_EXPENSE' => $medical_percentage,
                'EDUCATION_EXPENSE' => $education_percentage,
                'HOUSE_EXPENSE' => $house_rent_percentage,
                'CLOTHES_EXPENSE' => $clothes_percentage,
                'FOOD_EXPENSE' => $food_percentage,
                'HOUSEHOLD_ASSETS' => $household_assets_percentage,
                'OTHER_EXPENSES' => $others_percentage,
                'INCREASE_IN_DIVERSITY_OF_SOURCES_OF_INCOME' => $increase_in_diversity_of_income_from_one_year_ago,
                'LAND_INCREASE' => $land_increase,
                'LAND_SIZE' => $land_increase_size,
                'PERMANENT_HOUSE' => $permanent_house_increase,
                'SEMI_PERMANENT_HOUSE' => $semi_permament_house_increase,
                'MUD_HOUSE' => $mud_or_off_cut_house_increase,
                'RADIO_OR_TV' => $radio_or_tv_increase,
                'MOBILE_PHONE' => $mobile_phone_increase,
                'AUTOMOTIVE' => $bicycle_increase,
                'BREAKFAST_YESTERDAY' => $breakfast_yesterday,
                'SNACK_FOR_BREAKFAST_YESTERDAY' => $breakfast_snack_yesterday,
                'LUNCH_YESTERDAY' => $lunch_yesterday,
                'SNACK_FOR_LUNCH_YESTERDAY' => $lunch_snack_yesterday,
                'DINNER_YESTERDAY' => $dinner_yesterday,
                'SNACK_FOR_DINNER_YESTERDAY' => $dinner_snack_yesterday,
                'BREAKFAST_1_YEAR_AGO' => $breakfast_one_year_ago,
                'SNACK_FOR_BREAKFAST_1_YEAR_AGO' => $breakfast_snack_one_year_ago,
                'LUNCH_1_YEAR_AGO' => $lunch_one_year_ago,
                'SNACK_FOR_LUNCH_1_YEAR_AGO' => $lunch_snack_one_year_ago,
                'DINNER_1_YEAR_AGO' => $dinner_one_year_ago,
                'SNACK_FOR_DINNER_1_YEAR_AGO' => $dinner_snack_one_year_ago,
                'CEREALS_YESTERDAY' => $cereals_yesterday,
                'CEREALS_1_YEAR_AGO' => $cereals_one_year_ago,
                'VITAMIN_A_VEGETABLE_YESTERDAY' => $vitamin_a_rich_vegetables_and_roots_yesterday,
                'VITAMIN_A_VEGETABLE_1_YEAR_AGO' => $vitamin_a_rich_vegetables_and_roots_one_year_ago,
                'WHITE_TUBERS_YESTERDAY' => $white_tubers_and_roots_yesterday,
                'WHITE_TUBERS_1_YEAR_AGO' => $white_tubers_and_roots_one_year_ago,
                'DARK_GREEN_LEAFY_VEGETABLES_YESTERDAY' => $dark_green_leafy_vegetables_yesterday,
                'DARK_GREEN_LEAFY_VEGETABLES_1_YEAR_AGO' => $dark_green_leafy_vegetables_one_year_ago,
                'OTHER_VEGETABLES_YESTERDAY' => $other_vegetables_yesterday,
                'OTHER_VEGETABLES_1_YEAR_AGO' => $other_vegetables_one_year_ago,
                'VITAMIN_A_FRUITS_YESTERDAY' => $vitamin_a_rich_fruits_yesterday,
                'VITAMIN_A_FRUITS_1_YEAR_AGO' => $vitamin_a_rich_fruits_one_year_ago,
                'OTHER_FRUITS_YESTERDAY' => $other_fruits_yesterday,
                'OTHER_FRUITS_1_YEAR_AGO' => $other_fruits_one_year_ago,
                'ORGAN_MEAT_YESTERDAY' => $organ_meat_yesterday,
                'ORGAN_MEAT_1_YEAR_AGO' => $organ_meat_one_year_ago,
                'FLESH_MEATS_YESTERDAY' => $flesh_meats_yesterday,
                'FLESH_MEATS_1_YEAR_AGO' => $flesh_meats_one_year_ago,
                'EGGS_YESTERDAY' => $eggs_yesterday,
                'EGGS_1_YEAR_AGO' => $eggs_one_year_ago,
                'FISH_YESTERDAY' => $fish_yesterday,
                'FISH_1_YEAR_AGO' => $fish_one_year_ago,
                'LEGUMES_YESTERDAY' => $legumes_nuts_and_seeds_yesterday,
                'LEGUMES_1_YEAR_AGO' => $legumes_nuts_and_seeds_one_year_ago,
                'MILK_YESTERDAY' => $milk_and_milk_products_yesterday,
                'MILK_1_YEAR_AGO' => $milk_and_milk_products_one_year_ago,
                'OILS_AND_FATS_YESTERDAY' => $oils_and_fats_yesterday,
                'OILS_AND_FATS_1_YEAR_AGO' => $oils_and_fats_one_year_ago,
                'RED_PALM_YESTERDAY' => $red_palm_products_yesterday,
                'RED_PALM_1_YEAR_AGO' => $red_palm_products_one_year_ago,
                'SWEETS_YESTERDAY' => $sweets_yesterday,
                'SWEETS_1_YEAR_AGO' => $sweets_one_year_ago,
                'SPICES_YESTERDAY' => $spices_condiments_beverages_yesterday,
                'SPICES_1_YEAR_AGO' => $spices_condiments_beverages_one_year_ago,
                'DISH_RACK' => $household_has_drying_dish_rack,
                'COMPOST_PIT' => $household_has_a_compost_pit,
                'CLOTH_DRYING_LINE' => $household_has_a_cloth_drying_line,
                'LATRINE' => $household_has_a_latrine,
                'TIPPY_TAP' => $household_has_a_tippy_tap,
                'BOILS_WATER' => $household_boils_drinking_water_for_use,
                'IMPROVED_LIVING_STANDARD' => $household_thinks_they_have_improved_their_living_situation,
                'SIGNIFICANT_STORY' => $significant_story_text,
                'REASON_FOR_LOW_LIVING_STANDARD' => $failure_story_text,
                'IMPROVED_DIET' => $household_has_increased_its_dietary_diversity,
                'IMPROVED_KNOWLEDGE_OF_NUTRITION' => $household_has_increased_its_knowledge_of_kitchen_gardening,
                'INCREASED_HOUSEHOLD_ASSET_BASE' => $household_has_increased_its_asset_base,
                'REDUCED_POST_HARVEST_LOSS_DUE_TO_IMPROVED_STORAGE' => $household_has_reduced_its_post_harvest_loss_through_improved_storage,
                'CONCLUSION' => $conclusion,
                'RECOMMENDATION' => $recommendation,

            );

            $result = $this->pilotStudies_model->update_record($row, $field_data);
            if ($result) {
                $this->session->set_flashdata('success_msg', 'Record Submitted Successfully');
            } else {
                $this->session->set_flashdata('error_msg', 'Failed to submit record');
            }
            redirect(base_url('miscellaneous%20pilot%20studies'));
        }

    }

    public function details()
    {

        if($this->uri->segment(2)){
            $row_id = $this->uri->segment(2);

            $data['title'] = 'Pilot Study Details';

            $data['pilot_study_info'] =  $this->pilotStudies_model->fetch_single_record($row_id);
            $this->template->load('default','Miscellaneous/PilotStudies/Data/pilot_study_details',$data);
        }

    }

    public function generate_pdf_document(){

        if ($this->uri->segment(3)) {

            $row_id = $this->uri->segment(3);
            $page_data = $this->pilotStudies_model->fetch_single_record($row_id);

            $html_content = '<h3>About ' . $row_id . '</h3>';
            $html_content .= $page_data;

            $this->pdf->loadHtml($html_content);
            $this->pdf->setPaper('A4', 'landscape');
            $this->pdf->render();

            $this->pdf->stream("" . $row_id . ".pdf", array("Attachment" => 0));
        }

    }

    public function generate_detailed_pdf(){

    }

}
?>