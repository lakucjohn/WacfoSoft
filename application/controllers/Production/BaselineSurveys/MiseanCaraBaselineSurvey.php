<?php

/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/18/18
 * Time: 9:19 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

include_once (APPPATH.'controllers/AuthContentController.php');
class MiseanCaraBaselineSurvey extends AuthContentController
{

    public function __construct()
    {
        parent::__construct();

       // Load the models for this controller
        $this->load->model('Production/MiseanCaraBaselineSurveys/baseline_survey_model');
        $this->load->model('People/Groupings/grouping_model');
        $this->load->model('People/Membership/membership_model');
        $this->load->model('Production/Challenges/challenges_model');
        $this->load->model('Production/Categories/crop_model');
        $this->load->model('Production/Categories/fishing_model');
        $this->load->model('Production/Categories/apiary_model');
        $this->load->model('Production/Categories/piggery_model');
        $this->load->model('Production/Categories/briquettes_model');
        $this->load->model('Production/Marketing/marketing_model');
        $this->load->model('Production/Technology/technology_model');
        $this->load->model('Production/ProductionIncrease/productionIncrease_model');


    }

    public function index()
    {
        $data = array(

            'title' => 'Crop Production | WACFO',

        );

        $data['data_set'] = $this->baseline_survey_model->fetch();

        $this->template->load('default', 'Production/Survey/Data/misean-cara-baseline-survey-data-list', $data);

    }

    public function create(){
        $data = array(
            'title' => 'New Misean Cara Baseline Survey Economic Security before project intervention',
        );

        #retrieving all ids for groups
        $data['groups_list'] = $this->grouping_model->fetch_all_active_ids();

        # Now getting the values of the input
        $name_of_the_grantee = $this->input->post('name_of_the_grantee');
        $group_id = $this->input->post('group_id');
        $district = $this->input->post('district');
        $county = $this->input->post('county');
        $parish = $this->input->post('parish');
        $number_of_children_with_pwd = $this->input->post('number_of_children_with_pwd');
        $number_of_children_with_chh = $this->input->post('number_of_children_with_chh');
        $number_of_children_orphan = $this->input->post('number_of_children_orphan');
        $number_of_children_with_hiv = $this->input->post('number_of_children_with_hiv');
        $number_of_children_with_pwd_in_school = $this->input->post('number_of_children_with_pwd_in_school');
        $number_of_children_with_chh_in_school = $this->input->post('number_of_children_with_chh_in_school');
        $number_of_children_orphan_in_school = $this->input->post('number_of_children_orphan_in_school');
        $number_of_children_with_hiv_in_school = $this->input->post('number_of_children_with_hiv_in_school');
        $number_of_children_normal_in_school = $this->input->post('number_of_children_normal_in_school');
        $number_of_meals_per_day = $this->input->post('number_of_meals_per_day');
        $able_to_meet_medical_expenses_for_children = $this->input->post('able_to_meet_medical_expenses_for_children');
        $problems_affecting_vegetable_production = $this->input->post('problems_affecting_vegetable_production');
        $challenges_faced_in_marketing_vegetable_products = $this->input->post('challenges_faced_in_marketing_vegetable_products');
        $problems_affecting_crop_production = $this->input->post('problems_affecting_crop_production');
        $problems_hindering_marketing_crop_products = $this->input->post('problems_hindering_marketing_crop_products');
        $percentage_increase_in_sale_of_vegetable = $this->input->post('percentage_increase_in_sale_of_vegetable');
        $percentage_increase_in_productivity_of_vegetable = $this->input->post('percentage_increase_in_productivity_of_vegetable');
        $percentage_increase_in_sale_of_crops = $this->input->post('percentage_increase_in_sale_of_crops');
        $percentage_increase_in_productivity_of_crops = $this->input->post('percentage_increase_in_productivity_of_crops');
        $used_improved_seeds = $this->input->post('used_improved_seeds');
        $used_underground_water_during_dry_season = $this->input->post('used_underground_water_during_dry_season');
        $used_pesticides = $this->input->post('used_pesticides');
        $used_farm_implements = $this->input->post('used_farm_implements');
        $used_post_harvest_handling_and_processing_techniques = $this->input->post('used_post_harvest_handling_and_processing_techniques');
        $had_the_opportunity_to_plant_crops_in_rows = $this->input->post('had_the_opportunity_to_plant_crops_in_rows');
        $other_techniques_used = $this->input->post('other_techniques_used');
        $sells_all_vegetable_products = $this->input->post('sells_all_vegetable_products');
        $vegetable_market_place_1 = $this->input->post('vegetable_market_place_1');
        $vegetable_market_place_2 = $this->input->post('vegetable_market_place_2');
        $vegetable_market_place_3 = $this->input->post('vegetable_market_place_3');
        $sells_all_crop_products = $this->input->post('sells_all_crop_products');
        $crop_market_place_1 = $this->input->post('crop_market_place_1');
        $crop_market_place_2 = $this->input->post('crop_market_place_2');
        $crop_market_place_3 = $this->input->post('crop_market_place_3');
        $percentage_increase_in_fish_productivity = $this->input->post('percentage_increase_in_fish_productivity');
        $percentage_increase_in_fish_sales = $this->input->post('percentage_increase_in_fish_sales');


        # Performing Validation Checks
        $this->form_validation->set_rules('name_of_the_grantee', 'Name of the Grantee', 'required');
        $this->form_validation->set_rules('group_id', 'Group ID', 'required');
        $this->form_validation->set_rules('county', 'County', 'required');
        $this->form_validation->set_rules('parish', 'Parish', 'required');
        $this->form_validation->set_rules('number_of_meals_per_day', 'Number of Meals able to provide per day', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'Production/Survey/Registration/misean-cara-baseline-survey-economic-security-form', $data);
        } else {
            $track_id = $this->baseline_survey_model->generate_track_id();
            $field_data_basic = array(
                'GRANTEE' => $name_of_the_grantee,
                'GROUP_NAME' => $group_id,
                'DISTRICT' => $district,
                'COUNTY' => $county,
                'SUBCOUNTY' => $parish,
                'PWD' => $number_of_children_with_pwd,
                'CHH' => $number_of_children_with_chh,
                'ORPHAN' => $number_of_children_orphan,
                'HIV' => $number_of_children_with_hiv,
                'PWD_IN_SCHOOL' => $number_of_children_with_pwd_in_school,
                'CHH_IN_SCHOOL' => $number_of_children_with_chh_in_school,
                'ORPHAN_IN_SCHOOL' => $number_of_children_orphan_in_school,
                'CHILDREN_WITH_HIV_IN_SCHOOL' => $number_of_children_with_hiv_in_school,
                'NORMAL_IN_SCHOOL' => $number_of_children_normal_in_school,
                'MEALS_PER_DAY' => $number_of_meals_per_day,
                'MEDICAL_TREATMENT' => $able_to_meet_medical_expenses_for_children,
                'TRACK_ID' => $track_id,
            );

            $result = $this->baseline_survey_model->insert_record($field_data_basic);
            if ($result) {
                $this->session->set_flashdata('success_msg', 'Record Submitted Successfully');
            } else {
                $this->session->set_flashdata('error_msg', 'Failed to submit record');
            }

            # Inserting the production problems
            $field_data_problems = array(
                'GROUP_NAME' => $group_id,
                'VEGETABLE_PRODUCTION_PROBLEMS' => $problems_affecting_vegetable_production,
                'VEGETABLE_MARKETING_PROBLEMS' => $challenges_faced_in_marketing_vegetable_products,
                'CROP_PRODUCTION_PROBLEMS' => $problems_affecting_crop_production,
                'CROP_MARKETING_PROBLEMS' => $problems_hindering_marketing_crop_products,
                'TRACK_ID' => $track_id,
            );

            $result = $this->challenges_model->insert_record($field_data_problems);
            if ($result) {
                $this->session->set_flashdata('success_msg', 'Record Submitted Successfully');
            } else {
                $this->session->set_flashdata('error_msg', 'Failed to submit record');
            }

            #Inserting misean cara technology beneficiaries
            $field_data_techonology = array(
                'INDIVIDUAL_ID' => $group_id,
                'USED_IMPROVED_SEEDS' => $used_improved_seeds,
                'USED_UNDERGROUND_WATER' => $used_underground_water_during_dry_season,
                'USED_PESTICIDES' => $used_pesticides,
                'USED_FARM_IMPLEMENTS' => $used_farm_implements,
                'IMPROVED_POST_HARVEST_HANDLING' => $used_post_harvest_handling_and_processing_techniques,
                'USED_ROW_PLANTING' => $had_the_opportunity_to_plant_crops_in_rows,
                'OTHER_TECHNIQUES_USED' => $other_techniques_used,
                'TRACK_ID' => $track_id,
            );

            $result = $this->technology_model->insert_record($field_data_techonology);
            if ($result) {
                $this->session->set_flashdata('success_msg', 'Record Submitted Successfully');
            } else {
                $this->session->set_flashdata('error_msg', 'Failed to submit record');
            }


            #Inserting marketing data
            $field_data_marketing_knowledge = array(
                'INDIVIDUAL_ID' => $group_id,
                'SELLS_ALL_VEGETABLES' => $sells_all_vegetable_products,
                'VEGETABLE_MARKET_PLACE_1' => $vegetable_market_place_1,
                'VEGETABLE_MARKET_PLACE_2' => $vegetable_market_place_2,
                'VEGETABLE_MARKET_PLACE_3' => $vegetable_market_place_3,
                'SELLS_ALL_CROPS' => $sells_all_crop_products,
                'CROP_MARKET_PLACE_1' => $crop_market_place_1,
                'CROP_MARKET_PLACE_2' => $crop_market_place_2,
                'CROP_MARKET_PLACE_3' => $crop_market_place_3,
                'TRACK_ID' => $track_id,
            );

            $result = $this->marketing_model->insert_record($field_data_marketing_knowledge);
            if ($result) {
                $this->session->set_flashdata('success_msg', 'Record Submitted Successfully');
            } else {
                $this->session->set_flashdata('error_msg', 'Failed to submit record');
            }


            #Inserting productivity data
            $field_data_increase_in_productivity = array(
                'GROUP_ID' => $group_id,
                'INCREASE_IN_VEGETABLE_PRODUCTION' => $percentage_increase_in_productivity_of_vegetable,
                'INCREASE_IN_VEGETABLE_SALES' => $percentage_increase_in_sale_of_vegetable,
                'INCREASE_IN_CROP_PRODUCTION' => $percentage_increase_in_productivity_of_crops,
                'INCREASE_IN_CROP_SALES' => $percentage_increase_in_sale_of_crops,
                'INCREASE_IN_FISH_PRODUCTIVITY' => $percentage_increase_in_fish_productivity,
                'INCREASE_IN_FISH_SALES' => $percentage_increase_in_fish_sales,
                'TRACK_ID' => $track_id,
            );

            $result = $this->productionIncrease_model->insert_record($field_data_increase_in_productivity);
            if ($result) {
                $this->session->set_flashdata('success_msg', 'Record Submitted Successfully');
            } else {
                $this->session->set_flashdata('error_msg', 'Failed to submit record');
            }


            # Now retrieving dynamic content

            $group_Members_List = $this->membership_model->return_group_members_list($group_id);

            foreach ($group_Members_List->result() as $row) {

                if (isset($_POST['onions_support' . $row->ID]) && !empty($_POST['onions_support' . $row->ID])) {

                    $onions_support = $this->input->post('onions_support' . $row->ID);
                    $onions_acres = $this->input->post('onions_acres' . $row->ID);
                    $onions_yield = $this->input->post('onions_yield' . $row->ID);
                    $onions_sold = $this->input->post('onions_sold' . $row->ID);
                    $onions_amount_ugx = $this->input->post('onions_amount_ugx' . $row->ID);

                    # Inserting production data to the database
                    #Prepare the data for onions

                    $field_data_onion = array(
                        'INDIVIDUAL' => $row->MEMBERSHIP_ID,
                        'SUPPORT' => $onions_support,
                        'FOOD_STUFF' => 'Onion',
                        'CATEGORY' => 'Vegetable',
                        'ACRES_PLANTED' => $onions_acres,
                        'YIELD_OBTAINED' => $onions_yield,
                        'QUANTITY_SOLD' => $onions_sold,
                        'INCOME' => $onions_amount_ugx,
                        'TRACK_ID' => $track_id,
                    );

                    $this->crop_model->insert_record($field_data_onion);
                }

                if (isset($_POST['tomatoes_support' . $row->ID]) && !empty($_POST['tomatoes_support' . $row->ID])) {

                    $tomatoes_support = $this->input->post('tomatoes_support' . $row->ID);
                    $tomatoes_acres = $this->input->post('tomatoes_acres' . $row->ID);
                    $tomatoes_yield = $this->input->post('tomatoes_yield' . $row->ID);
                    $tomatoes_sold = $this->input->post('tomatoes_sold' . $row->ID);
                    $tomatoes_amount_ugx = $this->input->post('tomatoes_amount_ugx' . $row->ID);

                    #Prepare the data for tomatoes

                    $field_data_tomatoes = array(
                        'INDIVIDUAL' => $row->MEMBERSHIP_ID,
                        'SUPPORT' => $tomatoes_support,
                        'FOOD_STUFF' => 'Tomatoes',
                        'CATEGORY' => 'Vegetable',
                        'ACRES_PLANTED' => $tomatoes_acres,
                        'YIELD_OBTAINED' => $tomatoes_yield,
                        'QUANTITY_SOLD' => $tomatoes_sold,
                        'INCOME' => $tomatoes_amount_ugx,
                        'TRACK_ID' => $track_id,
                    );

                    $this->crop_model->insert_record($field_data_tomatoes);
                }

                if (isset($_POST['cabbage_support' . $row->ID]) && !empty($_POST['cabbage_support' . $row->ID])) {
                    $cabbage_support = $this->input->post('cabbage_support' . $row->ID);
                    $cabbage_acres = $this->input->post('cabbage_acres' . $row->ID);
                    $cabbage_yield = $this->input->post('cabbage_yield' . $row->ID);
                    $cabbage_sold = $this->input->post('cabbage_sold' . $row->ID);
                    $cabbage_amount_ugx = $this->input->post('cabbage_amount_ugx' . $row->ID);

                    #Prepare the data for egg plants

                    $field_data_cabbage = array(
                        'INDIVIDUAL' => $row->MEMBERSHIP_ID,
                        'SUPPORT' => $cabbage_support,
                        'FOOD_STUFF' => 'Cabbage',
                        'CATEGORY' => 'Vegetable',
                        'ACRES_PLANTED' => $cabbage_acres,
                        'YIELD_OBTAINED' => $cabbage_yield,
                        'QUANTITY_SOLD' => $cabbage_sold,
                        'INCOME' => $cabbage_amount_ugx,
                        'TRACK_ID' => $track_id,
                    );

                    $this->crop_model->insert_record($field_data_cabbage);
                }

                if (isset($_POST['okra_support' . $row->ID]) && !empty($_POST['okra_support' . $row->ID])) {
                    $okra_support = $this->input->post('okra_support' . $row->ID);
                    $okra_acres = $this->input->post('okra_acres' . $row->ID);
                    $okra_yield = $this->input->post('okra_yield' . $row->ID);
                    $okra_sold = $this->input->post('okra_sold' . $row->ID);
                    $okra_amount_ugx = $this->input->post('okra_amount_ugx' . $row->ID);

                    #Prepare the data for okra

                    $field_data_okra = array(
                        'INDIVIDUAL' => $row->MEMBERSHIP_ID,
                        'SUPPORT' => $okra_support,
                        'FOOD_STUFF' => 'Okra',
                        'CATEGORY' => 'Vegetable',
                        'ACRES_PLANTED' => $okra_acres,
                        'YIELD_OBTAINED' => $okra_yield,
                        'QUANTITY_SOLD' => $okra_sold,
                        'INCOME' => $okra_amount_ugx,
                        'TRACK_ID' => $track_id,
                    );

                    $this->crop_model->insert_record($field_data_okra);
                }

                if (isset($_POST['greenpaper_support' . $row->ID]) && !empty($_POST['greenpaper_support' . $row->ID])) {
                    $greenpaper_support = $this->input->post('greenpaper_support' . $row->ID);
                    $greenpaper_acres = $this->input->post('greenpaper_acres' . $row->ID);
                    $greenpaper_yield = $this->input->post('greenpaper_yield' . $row->ID);
                    $greenpaper_sold = $this->input->post('greenpaper_sold' . $row->ID);
                    $greenpaper_amount_ugx = $this->input->post('greenpaper_amount_ugx' . $row->ID);

                    #Prepare the data for okra

                    $field_data_greenpaper = array(
                        'INDIVIDUAL' => $row->MEMBERSHIP_ID,
                        'SUPPORT' => $greenpaper_support,
                        'FOOD_STUFF' => 'Green Pepper',
                        'CATEGORY' => 'Vegetable',
                        'ACRES_PLANTED' => $greenpaper_acres,
                        'YIELD_OBTAINED' => $greenpaper_yield,
                        'QUANTITY_SOLD' => $greenpaper_sold,
                        'INCOME' => $greenpaper_amount_ugx,
                        'TRACK_ID' => $track_id,
                    );

                    $this->crop_model->insert_record($field_data_greenpaper);
                }

                if (isset($_POST['soya_beans_support' . $row->ID]) && !empty($_POST['soya_beans_support' . $row->ID])) {

                    $soya_beans_support = $this->input->post('soya_beans_support' . $row->ID);
                    $soya_beans_acres = $this->input->post('soya_beans_acres' . $row->ID);
                    $soya_beans_yield = $this->input->post('soya_beans_yield' . $row->ID);
                    $soya_beans_sold = $this->input->post('soya_beans_sold' . $row->ID);
                    $soya_beans_amount_ugx = $this->input->post('soya_beans_amount_ugx' . $row->ID);

                    #Prepare the data for soya beans

                    $field_data_soya_beans = array(
                        'INDIVIDUAL' => $row->MEMBERSHIP_ID,
                        'SUPPORT' => $soya_beans_support,
                        'FOOD_STUFF' => 'Soya Beans',
                        'CATEGORY' => 'Crop',
                        'ACRES_PLANTED' => $soya_beans_acres,
                        'YIELD_OBTAINED' => $soya_beans_yield,
                        'QUANTITY_SOLD' => $soya_beans_sold,
                        'INCOME' => $soya_beans_amount_ugx,
                        'TRACK_ID' => $track_id,
                    );

                    $this->crop_model->insert_record($field_data_soya_beans);
                }

                if (isset($_POST['simsim_support' . $row->ID]) && !empty($_POST['simsim_support' . $row->ID])) {

                    $simsim_support = $this->input->post('simsim_support' . $row->ID);
                    $simsim_acres = $this->input->post('simsim_acres' . $row->ID);
                    $simsim_yield = $this->input->post('simsim_yield' . $row->ID);
                    $simsim_sold = $this->input->post('simsim_sold' . $row->ID);
                    $simsim_amount_ugx = $this->input->post('simsim_amount_ugx' . $row->ID);

                    #Prepare the data for ground nuts

                    $field_data_simsim = array(
                        'INDIVIDUAL' => $row->MEMBERSHIP_ID,
                        'SUPPORT' => $simsim_support,
                        'FOOD_STUFF' => 'Simsim',
                        'CATEGORY' => 'Crop',
                        'ACRES_PLANTED' => $simsim_acres,
                        'YIELD_OBTAINED' => $simsim_yield,
                        'QUANTITY_SOLD' => $simsim_sold,
                        'INCOME' => $simsim_amount_ugx,
                        'TRACK_ID' => $track_id,
                    );

                    $this->crop_model->insert_record($field_data_simsim);
                }

                if (isset($_POST['sesames_support' . $row->ID]) && !empty($_POST['sesames_support' . $row->ID])) {

                    $sesames_support = $this->input->post('sesames_support' . $row->ID);
                    $sesames_acres = $this->input->post('sesames_acres' . $row->ID);
                    $sesames_yield = $this->input->post('sesames_yield' . $row->ID);
                    $sesames_sold = $this->input->post('sesames_sold' . $row->ID);
                    $sesames_amount_ugx = $this->input->post('sesames_amount_ugx' . $row->ID);

                    #Prepare the data for sesames

                    $field_data_sesames = array(
                        'INDIVIDUAL' => $row->MEMBERSHIP_ID,
                        'SUPPORT' => $sesames_support,
                        'FOOD_STUFF' => 'Sesames',
                        'CATEGORY' => 'Crop',
                        'ACRES_PLANTED' => $sesames_acres,
                        'YIELD_OBTAINED' => $sesames_yield,
                        'QUANTITY_SOLD' => $sesames_sold,
                        'INCOME' => $sesames_amount_ugx,
                        'TRACK_ID' => $track_id,
                    );

                    $this->crop_model->insert_record($field_data_sesames);
                }

                if (isset($_POST['beans_support' . $row->ID]) && !empty($_POST['beans_support' . $row->ID])) {

                    $beans_support = $this->input->post('beans_support' . $row->ID);
                    $beans_acres = $this->input->post('beans_acres' . $row->ID);
                    $beans_yield = $this->input->post('beans_yield' . $row->ID);
                    $beans_sold = $this->input->post('beans_sold' . $row->ID);
                    $beans_amount_ugx = $this->input->post('beans_amount_ugx' . $row->ID);

                    #Prepare the data for beans

                    $field_data_beans = array(
                        'INDIVIDUAL' => $row->MEMBERSHIP_ID,
                        'SUPPORT' => $beans_support,
                        'FOOD_STUFF' => 'Beans',
                        'CATEGORY' => 'Crop',
                        'ACRES_PLANTED' => $beans_acres,
                        'YIELD_OBTAINED' => $beans_yield,
                        'QUANTITY_SOLD' => $beans_sold,
                        'INCOME' => $beans_amount_ugx,
                        'TRACK_ID' => $track_id,
                    );

                    $this->crop_model->insert_record($field_data_beans);
                }

                if (isset($_POST['fish_support' . $row->ID]) && !empty($_POST['fish_support' . $row->ID])) {
                    $fish_support = $this->input->post('fish_support' . $row->ID);
                    $size_of_pond = $this->input->post('size_of_pond' . $row->ID);
                    $number_of_fish_harvested = $this->input->post('number_of_fish_harvested' . $row->ID);
                    $quantity_yield_in_kg = $this->input->post('quantity_yield_in_kg' . $row->ID);
                    $income_ugx = $this->input->post('income_ugx' . $row->ID);

                    # Prepare fishing data

                    $field_data_fish = array(
                        'INDIVIDUAL_ID' => $row->MEMBERSHIP_ID,
                        'SUPPORT' => $fish_support,
                        'SIZE_OF_POND' => $fish_support,
                        'NUMBER_OF_FISH_HARVESTED' => $number_of_fish_harvested,
                        'QUANTITY_IN_KG' => $quantity_yield_in_kg,
                        'INCOME' => $income_ugx,
                        'TRACK_ID' => $track_id,
                    );

                    $this->fishing_model->insert_record($field_data_fish);
                }

                if (isset($_POST['pig_support' . $row->ID]) && !empty($_POST['pig_support' . $row->ID])) {
                    $pig_support = $this->input->post('pig_support' . $row->ID);
                    $number_of_pigglets = $this->input->post('number_of_pigglets' . $row->ID);

                    if (isset($_POST['uses_imo' . $row->ID])) {
                        $uses_imo = true;
                    } else {
                        $uses_imo = false;
                    }

                    # Prepare piggery data

                    $field_data_pig = array(
                        'INDIVIDUAL_ID' => $row->MEMBERSHIP_ID,
                        'SUPPORT' => $pig_support,
                        'NUMBER_OF_PIGGLETS' => $number_of_pigglets,
                        'USES_IMO' => $uses_imo
                    );

                    $this->piggery_model->insert_record($field_data_pig);
                }

                if (isset($_POST['apiary_support' . $row->ID]) && !empty($_POST['apiary_support' . $row->ID])) {
                    $apiary_support = $this->input->post('apiary_support' . $row->ID);
                    $honey_quantity_harvested = $this->input->post('honey_quantity_harvested' . $row->ID);
                    $honey_quantity_sold = $this->input->post('honey_quantity_sold' . $row->ID);
                    $honey_quantity_consumed = $this->input->post('honey_quantity_consumed' . $row->ID);

                    # Prepare apiary data

                    $field_data_apiary = array(
                        'INDIVIDUAL_ID' => $row->MEMBERSHIP_ID,
                        'SUPPORT' => $apiary_support,
                        'QUANTITY_HARVESTED' => $honey_quantity_harvested,
                        'QUANTITY_SOLD' => $honey_quantity_sold,
                        'QUANTITY_CONSUMED' => $honey_quantity_consumed,
                    );

                    $this->piggery_model->insert_record($field_data_apiary);
                }

                if (isset($_POST['briquette_support' . $row->ID]) && !empty($_POST['briquette_support' . $row->ID])) {
                    $briquette_support = $this->input->post('briquette_support' . $row->ID);
                    $briquette_quantity_produced = $this->input->post('briquette_quantity_produced' . $row->ID);
                    $briquette_quantity_sold = $this->input->post('briquette_quantity_sold' . $row->ID);
                    $briquette_quantity_used = $this->input->post('briquette_quantity_used' . $row->ID);

                    # Prepare briquette data

                    $field_data_briquette = array(
                        'INDIVIDUAL_ID' => $row->MEMBERSHIP_ID,
                        'SUPPORT' => $briquette_support,
                        'QUANTITY_PRODUCED' => $briquette_quantity_produced,
                        'QUANTITY_SOLD' => $briquette_quantity_sold,
                        'QUANTITY_USED' => $briquette_quantity_used,
                    );

                    $this->piggery_model->insert_record($field_data_briquette);
                }
            }
//            print_r($field_data_fish);
            redirect('production/misean%20cara%20baseline%20surveys');
        }


    }

    public function create_group_support_outcome()
    {
        $data = array(
            'title' => 'New Misean Cara Baseline Survey Economic Security before project intervention',
        );

        #retrieving all ids for groups
        #$data['group_id'] = $group_id;
        $usable_group_id = $this->uri->segment(5) . '/' . $this->uri->segment(6) . '/' . $this->uri->segment(7);
        $data['group_id'] = $usable_group_id;
        $data['group_name'] = $this->get_group_name($usable_group_id);
        $data['production_tables'] = $this->check_and_display_list_as_per_group_type_for_this_group($usable_group_id);
        $usable_track_id = $this->uri->segment(8);
        $data['track_id'] = $usable_track_id;
        # Now getting the values of the input
        $name_of_the_grantee = $this->input->post('name_of_the_grantee');
        $district = $this->input->post('district');
        $county = $this->input->post('county');
        $parish = $this->input->post('parish');
        $number_of_children_with_pwd = $this->input->post('number_of_children_with_pwd');
        $number_of_children_with_chh = $this->input->post('number_of_children_with_chh');
        $number_of_children_orphan = $this->input->post('number_of_children_orphan');
        $number_of_children_with_hiv = $this->input->post('number_of_children_with_hiv');
        $number_of_children_with_pwd_in_school = $this->input->post('number_of_children_with_pwd_in_school');
        $number_of_children_with_chh_in_school = $this->input->post('number_of_children_with_chh_in_school');
        $number_of_children_orphan_in_school = $this->input->post('number_of_children_orphan_in_school');
        $number_of_children_with_hiv_in_school = $this->input->post('number_of_children_with_hiv_in_school');
        $number_of_children_normal_in_school = $this->input->post('number_of_children_normal_in_school');
        $number_of_meals_per_day = $this->input->post('number_of_meals_per_day');
        $able_to_meet_medical_expenses_for_children = $this->input->post('able_to_meet_medical_expenses_for_children');
        $problems_affecting_vegetable_production = $this->input->post('problems_affecting_vegetable_production');
        $challenges_faced_in_marketing_vegetable_products = $this->input->post('challenges_faced_in_marketing_vegetable_products');
        $problems_affecting_crop_production = $this->input->post('problems_affecting_crop_production');
        $problems_hindering_marketing_crop_products = $this->input->post('problems_hindering_marketing_crop_products');
        $percentage_increase_in_sale_of_vegetable = $this->input->post('percentage_increase_in_sale_of_vegetable');
        $percentage_increase_in_productivity_of_vegetable = $this->input->post('percentage_increase_in_productivity_of_vegetable');
        $percentage_increase_in_sale_of_crops = $this->input->post('percentage_increase_in_sale_of_crops');
        $percentage_increase_in_productivity_of_crops = $this->input->post('percentage_increase_in_productivity_of_crops');
        $used_improved_seeds = $this->input->post('used_improved_seeds');
        $used_underground_water_during_dry_season = $this->input->post('used_underground_water_during_dry_season');
        $used_pesticides = $this->input->post('used_pesticides');
        $used_farm_implements = $this->input->post('used_farm_implements');
        $used_post_harvest_handling_and_processing_techniques = $this->input->post('used_post_harvest_handling_and_processing_techniques');
        $had_the_opportunity_to_plant_crops_in_rows = $this->input->post('had_the_opportunity_to_plant_crops_in_rows');
        $other_techniques_used = $this->input->post('other_techniques_used');
        $sells_all_vegetable_products = $this->input->post('sells_all_vegetable_products');
        $vegetable_market_place_1 = $this->input->post('vegetable_market_place_1');
        $vegetable_market_place_2 = $this->input->post('vegetable_market_place_2');
        $vegetable_market_place_3 = $this->input->post('vegetable_market_place_3');
        $sells_all_crop_products = $this->input->post('sells_all_crop_products');
        $crop_market_place_1 = $this->input->post('crop_market_place_1');
        $crop_market_place_2 = $this->input->post('crop_market_place_2');
        $crop_market_place_3 = $this->input->post('crop_market_place_3');
        $percentage_increase_in_fish_productivity = $this->input->post('percentage_increase_in_fish_productivity');
        $percentage_increase_in_fish_sales = $this->input->post('percentage_increase_in_fish_sales');


        # Performing Validation Checks
        $this->form_validation->set_rules('name_of_the_grantee', 'Name of the Grantee', 'required');
        $this->form_validation->set_rules('group_id', 'Group ID', 'required');
        $this->form_validation->set_rules('county', 'County', 'required');
        $this->form_validation->set_rules('parish', 'Parish', 'required');
        $this->form_validation->set_rules('number_of_meals_per_day', 'Number of Meals able to provide per day', 'required');

        if ($this->form_validation->run() == FALSE) {
            #echo $usable_track_id;
            $this->template->load('default', 'Production/Survey/Registration/known-misean-cara-baseline-survey-economic-security-form', $data);
            #$this->load->view('Production/Survey/Registration/known-misean-cara-baseline-survey-economic-security-form', $data);
        } else {
            #$track_id = $this->baseline_survey_model->generate_track_id();
            $field_data_basic = array(
                'GRANTEE' => $name_of_the_grantee,
                'GROUP_NAME' => $usable_group_id,
                'DISTRICT' => $district,
                'COUNTY' => $county,
                'SUBCOUNTY' => $parish,
                'PWD' => $number_of_children_with_pwd,
                'CHH' => $number_of_children_with_chh,
                'ORPHAN' => $number_of_children_orphan,
                'HIV' => $number_of_children_with_hiv,
                'PWD_IN_SCHOOL' => $number_of_children_with_pwd_in_school,
                'CHH_IN_SCHOOL' => $number_of_children_with_chh_in_school,
                'ORPHAN_IN_SCHOOL' => $number_of_children_orphan_in_school,
                'CHILDREN_WITH_HIV_IN_SCHOOL' => $number_of_children_with_hiv_in_school,
                'NORMAL_IN_SCHOOL' => $number_of_children_normal_in_school,
                'MEALS_PER_DAY' => $number_of_meals_per_day,
                'MEDICAL_TREATMENT' => $able_to_meet_medical_expenses_for_children,
                'TRACK_ID' => $usable_track_id,
            );

            $result = $this->baseline_survey_model->insert_record($field_data_basic);
            if ($result) {
                $this->session->set_flashdata('success_msg', 'Record Submitted Successfully');
            } else {
                $this->session->set_flashdata('error_msg', 'Failed to submit record');
            }

            # Inserting the production problems
            $field_data_problems = array(
                'GROUP_NAME' => $usable_group_id,
                'VEGETABLE_PRODUCTION_PROBLEMS' => $problems_affecting_vegetable_production,
                'VEGETABLE_MARKETING_PROBLEMS' => $challenges_faced_in_marketing_vegetable_products,
                'CROP_PRODUCTION_PROBLEMS' => $problems_affecting_crop_production,
                'CROP_MARKETING_PROBLEMS' => $problems_hindering_marketing_crop_products,
                'TRACK_ID' => $usable_track_id,
            );

            $result = $this->challenges_model->insert_record($field_data_problems);
            if ($result) {
                $this->session->set_flashdata('success_msg', 'Record Submitted Successfully');
            } else {
                $this->session->set_flashdata('error_msg', 'Failed to submit record');
            }

            #Inserting misean cara technology beneficiaries
            $field_data_techonology = array(
                'INDIVIDUAL_ID' => $usable_group_id,
                'USED_IMPROVED_SEEDS' => $used_improved_seeds,
                'USED_UNDERGROUND_WATER' => $used_underground_water_during_dry_season,
                'USED_PESTICIDES' => $used_pesticides,
                'USED_FARM_IMPLEMENTS' => $used_farm_implements,
                'IMPROVED_POST_HARVEST_HANDLING' => $used_post_harvest_handling_and_processing_techniques,
                'USED_ROW_PLANTING' => $had_the_opportunity_to_plant_crops_in_rows,
                'OTHER_TECHNIQUES_USED' => $other_techniques_used,
                'TRACK_ID' => $usable_track_id,
            );

            $result = $this->technology_model->insert_record($field_data_techonology);
            if ($result) {
                $this->session->set_flashdata('success_msg', 'Record Submitted Successfully');
            } else {
                $this->session->set_flashdata('error_msg', 'Failed to submit record');
            }


            #Inserting marketing data
            $field_data_marketing_knowledge = array(
                'INDIVIDUAL_ID' => $usable_group_id,
                'SELLS_ALL_VEGETABLES' => $sells_all_vegetable_products,
                'VEGETABLE_MARKET_PLACE_1' => $vegetable_market_place_1,
                'VEGETABLE_MARKET_PLACE_2' => $vegetable_market_place_2,
                'VEGETABLE_MARKET_PLACE_3' => $vegetable_market_place_3,
                'SELLS_ALL_CROPS' => $sells_all_crop_products,
                'CROP_MARKET_PLACE_1' => $crop_market_place_1,
                'CROP_MARKET_PLACE_2' => $crop_market_place_2,
                'CROP_MARKET_PLACE_3' => $crop_market_place_3,
                'TRACK_ID' => $usable_track_id,
            );

            $result = $this->marketing_model->insert_record($field_data_marketing_knowledge);
            if ($result) {
                $this->session->set_flashdata('success_msg', 'Record Submitted Successfully');
            } else {
                $this->session->set_flashdata('error_msg', 'Failed to submit record');
            }


            #Inserting productivity data
            $field_data_increase_in_productivity = array(
                'GROUP_ID' => $usable_group_id,
                'INCREASE_IN_VEGETABLE_PRODUCTION' => $percentage_increase_in_productivity_of_vegetable,
                'INCREASE_IN_VEGETABLE_SALES' => $percentage_increase_in_sale_of_vegetable,
                'INCREASE_IN_CROP_PRODUCTION' => $percentage_increase_in_productivity_of_crops,
                'INCREASE_IN_CROP_SALES' => $percentage_increase_in_sale_of_crops,
                'INCREASE_IN_FISH_PRODUCTIVITY' => $percentage_increase_in_fish_productivity,
                'INCREASE_IN_FISH_SALES' => $percentage_increase_in_fish_sales,
                'TRACK_ID' => $usable_track_id,
            );

            $result = $this->productionIncrease_model->insert_record($field_data_increase_in_productivity);
            if ($result) {
                $this->session->set_flashdata('success_msg', 'Record Submitted Successfully');
            } else {
                $this->session->set_flashdata('error_msg', 'Failed to submit record');
            }


            # Now retrieving dynamic content

            $group_Members_List = $this->membership_model->return_group_members_list($group_id);

            foreach ($group_Members_List->result() as $row) {

                if (isset($_POST['onions_support' . $row->ID]) && !empty($_POST['onions_support' . $row->ID])) {

                    $onions_support = $this->input->post('onions_support' . $row->ID);
                    $onions_acres = $this->input->post('onions_acres' . $row->ID);
                    $onions_yield = $this->input->post('onions_yield' . $row->ID);
                    $onions_sold = $this->input->post('onions_sold' . $row->ID);
                    $onions_amount_ugx = $this->input->post('onions_amount_ugx' . $row->ID);

                    # Inserting production data to the database
                    #Prepare the data for onions

                    $field_data_onion = array(
                        'INDIVIDUAL' => $row->MEMBERSHIP_ID,
                        'SUPPORT' => $onions_support,
                        'FOOD_STUFF' => 'Onion',
                        'CATEGORY' => 'Vegetable',
                        'ACRES_PLANTED' => $onions_acres,
                        'YIELD_OBTAINED' => $onions_yield,
                        'QUANTITY_SOLD' => $onions_sold,
                        'INCOME' => $onions_amount_ugx,
                        'TRACK_ID' => $usable_track_id,
                    );

                    $this->crop_model->insert_record($field_data_onion);
                }

                if (isset($_POST['tomatoes_support' . $row->ID]) && !empty($_POST['tomatoes_support' . $row->ID])) {

                    $tomatoes_support = $this->input->post('tomatoes_support' . $row->ID);
                    $tomatoes_acres = $this->input->post('tomatoes_acres' . $row->ID);
                    $tomatoes_yield = $this->input->post('tomatoes_yield' . $row->ID);
                    $tomatoes_sold = $this->input->post('tomatoes_sold' . $row->ID);
                    $tomatoes_amount_ugx = $this->input->post('tomatoes_amount_ugx' . $row->ID);

                    #Prepare the data for tomatoes

                    $field_data_tomatoes = array(
                        'INDIVIDUAL' => $row->MEMBERSHIP_ID,
                        'SUPPORT' => $tomatoes_support,
                        'FOOD_STUFF' => 'Tomatoes',
                        'CATEGORY' => 'Vegetable',
                        'ACRES_PLANTED' => $tomatoes_acres,
                        'YIELD_OBTAINED' => $tomatoes_yield,
                        'QUANTITY_SOLD' => $tomatoes_sold,
                        'INCOME' => $tomatoes_amount_ugx,
                        'TRACK_ID' => $usable_track_id,
                    );

                    $this->crop_model->insert_record($field_data_tomatoes);
                }

                if (isset($_POST['cabbage_support' . $row->ID]) && !empty($_POST['cabbage_support' . $row->ID])) {
                    $cabbage_support = $this->input->post('cabbage_support' . $row->ID);
                    $cabbage_acres = $this->input->post('cabbage_acres' . $row->ID);
                    $cabbage_yield = $this->input->post('cabbage_yield' . $row->ID);
                    $cabbage_sold = $this->input->post('cabbage_sold' . $row->ID);
                    $cabbage_amount_ugx = $this->input->post('cabbage_amount_ugx' . $row->ID);

                    #Prepare the data for egg plants

                    $field_data_cabbage = array(
                        'INDIVIDUAL' => $row->MEMBERSHIP_ID,
                        'SUPPORT' => $cabbage_support,
                        'FOOD_STUFF' => 'Cabbage',
                        'CATEGORY' => 'Vegetable',
                        'ACRES_PLANTED' => $cabbage_acres,
                        'YIELD_OBTAINED' => $cabbage_yield,
                        'QUANTITY_SOLD' => $cabbage_sold,
                        'INCOME' => $cabbage_amount_ugx,
                        'TRACK_ID' => $usable_track_id,
                    );

                    $this->crop_model->insert_record($field_data_cabbage);
                }

                if (isset($_POST['okra_support' . $row->ID]) && !empty($_POST['okra_support' . $row->ID])) {
                    $okra_support = $this->input->post('okra_support' . $row->ID);
                    $okra_acres = $this->input->post('okra_acres' . $row->ID);
                    $okra_yield = $this->input->post('okra_yield' . $row->ID);
                    $okra_sold = $this->input->post('okra_sold' . $row->ID);
                    $okra_amount_ugx = $this->input->post('okra_amount_ugx' . $row->ID);

                    #Prepare the data for okra

                    $field_data_okra = array(
                        'INDIVIDUAL' => $row->MEMBERSHIP_ID,
                        'SUPPORT' => $okra_support,
                        'FOOD_STUFF' => 'Okra',
                        'CATEGORY' => 'Vegetable',
                        'ACRES_PLANTED' => $okra_acres,
                        'YIELD_OBTAINED' => $okra_yield,
                        'QUANTITY_SOLD' => $okra_sold,
                        'INCOME' => $okra_amount_ugx,
                        'TRACK_ID' => $usable_track_id,
                    );

                    $this->crop_model->insert_record($field_data_okra);
                }

                if (isset($_POST['greenpaper_support' . $row->ID]) && !empty($_POST['greenpaper_support' . $row->ID])) {
                    $greenpaper_support = $this->input->post('greenpaper_support' . $row->ID);
                    $greenpaper_acres = $this->input->post('greenpaper_acres' . $row->ID);
                    $greenpaper_yield = $this->input->post('greenpaper_yield' . $row->ID);
                    $greenpaper_sold = $this->input->post('greenpaper_sold' . $row->ID);
                    $greenpaper_amount_ugx = $this->input->post('greenpaper_amount_ugx' . $row->ID);

                    #Prepare the data for okra

                    $field_data_greenpaper = array(
                        'INDIVIDUAL' => $row->MEMBERSHIP_ID,
                        'SUPPORT' => $greenpaper_support,
                        'FOOD_STUFF' => 'Green Pepper',
                        'CATEGORY' => 'Vegetable',
                        'ACRES_PLANTED' => $greenpaper_acres,
                        'YIELD_OBTAINED' => $greenpaper_yield,
                        'QUANTITY_SOLD' => $greenpaper_sold,
                        'INCOME' => $greenpaper_amount_ugx,
                        'TRACK_ID' => $usable_track_id,
                    );

                    $this->crop_model->insert_record($field_data_greenpaper);
                }

                if (isset($_POST['soya_beans_support' . $row->ID]) && !empty($_POST['soya_beans_support' . $row->ID])) {

                    $soya_beans_support = $this->input->post('soya_beans_support' . $row->ID);
                    $soya_beans_acres = $this->input->post('soya_beans_acres' . $row->ID);
                    $soya_beans_yield = $this->input->post('soya_beans_yield' . $row->ID);
                    $soya_beans_sold = $this->input->post('soya_beans_sold' . $row->ID);
                    $soya_beans_amount_ugx = $this->input->post('soya_beans_amount_ugx' . $row->ID);

                    #Prepare the data for soya beans

                    $field_data_soya_beans = array(
                        'INDIVIDUAL' => $row->MEMBERSHIP_ID,
                        'SUPPORT' => $soya_beans_support,
                        'FOOD_STUFF' => 'Soya Beans',
                        'CATEGORY' => 'Crop',
                        'ACRES_PLANTED' => $soya_beans_acres,
                        'YIELD_OBTAINED' => $soya_beans_yield,
                        'QUANTITY_SOLD' => $soya_beans_sold,
                        'INCOME' => $soya_beans_amount_ugx,
                        'TRACK_ID' => $usable_track_id,
                    );

                    $this->crop_model->insert_record($field_data_soya_beans);
                }

                if (isset($_POST['simsim_support' . $row->ID]) && !empty($_POST['simsim_support' . $row->ID])) {

                    $simsim_support = $this->input->post('simsim_support' . $row->ID);
                    $simsim_acres = $this->input->post('simsim_acres' . $row->ID);
                    $simsim_yield = $this->input->post('simsim_yield' . $row->ID);
                    $simsim_sold = $this->input->post('simsim_sold' . $row->ID);
                    $simsim_amount_ugx = $this->input->post('simsim_amount_ugx' . $row->ID);

                    #Prepare the data for ground nuts

                    $field_data_simsim = array(
                        'INDIVIDUAL' => $row->MEMBERSHIP_ID,
                        'SUPPORT' => $simsim_support,
                        'FOOD_STUFF' => 'Simsim',
                        'CATEGORY' => 'Crop',
                        'ACRES_PLANTED' => $simsim_acres,
                        'YIELD_OBTAINED' => $simsim_yield,
                        'QUANTITY_SOLD' => $simsim_sold,
                        'INCOME' => $simsim_amount_ugx,
                        'TRACK_ID' => $usable_track_id,
                    );

                    $this->crop_model->insert_record($field_data_simsim);
                }

                if (isset($_POST['sesames_support' . $row->ID]) && !empty($_POST['sesames_support' . $row->ID])) {

                    $sesames_support = $this->input->post('sesames_support' . $row->ID);
                    $sesames_acres = $this->input->post('sesames_acres' . $row->ID);
                    $sesames_yield = $this->input->post('sesames_yield' . $row->ID);
                    $sesames_sold = $this->input->post('sesames_sold' . $row->ID);
                    $sesames_amount_ugx = $this->input->post('sesames_amount_ugx' . $row->ID);

                    #Prepare the data for sesames

                    $field_data_sesames = array(
                        'INDIVIDUAL' => $row->MEMBERSHIP_ID,
                        'SUPPORT' => $sesames_support,
                        'FOOD_STUFF' => 'Sesames',
                        'CATEGORY' => 'Crop',
                        'ACRES_PLANTED' => $sesames_acres,
                        'YIELD_OBTAINED' => $sesames_yield,
                        'QUANTITY_SOLD' => $sesames_sold,
                        'INCOME' => $sesames_amount_ugx,
                        'TRACK_ID' => $usable_track_id,
                    );

                    $this->crop_model->insert_record($field_data_sesames);
                }

                if (isset($_POST['beans_support' . $row->ID]) && !empty($_POST['beans_support' . $row->ID])) {

                    $beans_support = $this->input->post('beans_support' . $row->ID);
                    $beans_acres = $this->input->post('beans_acres' . $row->ID);
                    $beans_yield = $this->input->post('beans_yield' . $row->ID);
                    $beans_sold = $this->input->post('beans_sold' . $row->ID);
                    $beans_amount_ugx = $this->input->post('beans_amount_ugx' . $row->ID);

                    #Prepare the data for beans

                    $field_data_beans = array(
                        'INDIVIDUAL' => $row->MEMBERSHIP_ID,
                        'SUPPORT' => $beans_support,
                        'FOOD_STUFF' => 'Beans',
                        'CATEGORY' => 'Crop',
                        'ACRES_PLANTED' => $beans_acres,
                        'YIELD_OBTAINED' => $beans_yield,
                        'QUANTITY_SOLD' => $beans_sold,
                        'INCOME' => $beans_amount_ugx,
                        'TRACK_ID' => $usable_track_id,
                    );

                    $this->crop_model->insert_record($field_data_beans);
                }

                if (isset($_POST['fish_support' . $row->ID]) && !empty($_POST['fish_support' . $row->ID])) {
                    $fish_support = $this->input->post('fish_support' . $row->ID);
                    $size_of_pond = $this->input->post('size_of_pond' . $row->ID);
                    $number_of_fish_harvested = $this->input->post('number_of_fish_harvested' . $row->ID);
                    $quantity_yield_in_kg = $this->input->post('quantity_yield_in_kg' . $row->ID);
                    $income_ugx = $this->input->post('income_ugx' . $row->ID);

                    # Prepare fishing data

                    $field_data_fish = array(
                        'INDIVIDUAL_ID' => $row->MEMBERSHIP_ID,
                        'SUPPORT' => $fish_support,
                        'SIZE_OF_POND' => $size_of_pond,
                        'NUMBER_OF_FISH_HARVESTED' => $number_of_fish_harvested,
                        'QUANTITY_IN_KG' => $quantity_yield_in_kg,
                        'INCOME' => $income_ugx,
                        'TRACK_ID' => $usable_track_id,
                    );

                    $this->fishing_model->insert_record($field_data_fish);
                }

                if (isset($_POST['pig_support' . $row->ID]) && !empty($_POST['pig_support' . $row->ID])) {
                    $pig_support = $this->input->post('pig_support' . $row->ID);
                    $number_of_pigglets = $this->input->post('number_of_pigglets' . $row->ID);
                    $piggery_income = $this->input->post('piggery_income_gained' . $row->ID);

                    if (isset($_POST['uses_imo' . $row->ID])) {
                        $uses_imo = true;
                    } else {
                        $uses_imo = false;
                    }

                    # Prepare piggery data

                    $field_data_pig = array(
                        'INDIVIDUAL_ID' => $row->MEMBERSHIP_ID,
                        'SUPPORT' => $pig_support,
                        'NUMBER_OF_PIGGLETS' => $number_of_pigglets,
                        'USES_IMO' => $uses_imo,
                        'INCOME' => $piggery_income,
                        'TRACK_ID' => $usable_track_id,
                    );

                    $this->piggery_model->insert_record($field_data_pig);
                }

                if (isset($_POST['apiary_support' . $row->ID]) && !empty($_POST['apiary_support' . $row->ID])) {
                    $apiary_support = $this->input->post('apiary_support' . $row->ID);
                    $honey_quantity_harvested = $this->input->post('honey_quantity_harvested' . $row->ID);
                    $honey_quantity_sold = $this->input->post('honey_quantity_sold' . $row->ID);
                    $honey_quantity_consumed = $this->input->post('honey_quantity_consumed' . $row->ID);
                    $apiary_amount_gained = $this->input->post('apiary_amount_gained' . $row->ID);

                    # Prepare apiary data

                    $field_data_apiary = array(
                        'INDIVIDUAL_ID' => $row->MEMBERSHIP_ID,
                        'SUPPORT' => $apiary_support,
                        'QUANTITY_HARVESTED' => $honey_quantity_harvested,
                        'QUANTITY_SOLD' => $honey_quantity_sold,
                        'QUANTITY_CONSUMED' => $honey_quantity_consumed,
                        'INCOME' => $apiary_amount_gained,
                        'TRACK_ID' => $usable_track_id,
                    );

                    $this->apiary_model->insert_record($field_data_apiary);
                }

                if (isset($_POST['briquette_support' . $row->ID]) && !empty($_POST['briquette_support' . $row->ID])) {
                    $briquette_support = $this->input->post('briquette_support' . $row->ID);
                    $briquette_quantity_produced = $this->input->post('briquette_quantity_produced' . $row->ID);
                    $briquette_quantity_sold = $this->input->post('briquette_quantity_sold' . $row->ID);
                    $briquette_quantity_used = $this->input->post('briquette_quantity_used' . $row->ID);
                    $briquette_income = $this->input->post('briquette_income' . $row->ID);

                    # Prepare briquette data

                    $field_data_briquette = array(
                        'INDIVIDUAL_ID' => $row->MEMBERSHIP_ID,
                        'SUPPORT' => $briquette_support,
                        'QUANTITY_PRODUCED' => $briquette_quantity_produced,
                        'QUANTITY_SOLD' => $briquette_quantity_sold,
                        'QUANTITY_USED' => $briquette_quantity_used,
                        'INCOME' => $briquette_income,
                        'TRACK_ID' => $usable_track_id,
                    );

                    $this->briquettes_model->insert_record($field_data_briquette);
                }
            }
//            print_r($field_data_fish);
            redirect('production/misean%20cara%20baseline%20surveys');
        }


    }

    public function get_group_name($group_id)
    {

        return $this->grouping_model->get_group_name_from_db($group_id);

    }

    function check_and_display_list_as_per_group_type_for_this_group($group_id)
    {
        #echo $group_id;

        $group_type = $this->grouping_model->get_livelihood_group_category_from_db($group_id);

        //convert the case of the category to lower case
        $group_type = strtolower($group_type);

        //remove blank spaces
        $group_type = preg_replace('/\s+/', '_', $group_type);

        //load appropriate functions for the selected group
        $function_name = 'fetch_group_members_for_' . $group_type;
        //$func = 'fetch_group_members_for_'.$group_type;
        //$func($group_id);

        //checking if the function for the group exists

        if (method_exists($this, $function_name)) {
            $func = 'fetch_group_members_for_' . $group_type;
            //$func($group_id);
            //call_user_func('fetch_group_members_for_'.$group_type, $group_id);
            return $this->$func($group_id);
        } else {
            #return $group_id;
            return 'Function ' . $function_name . ' was not found';

        }
        //echo $group_type;
//            echo $group_id;
        //if($group_type )

    }

    function check_and_display_list_as_per_group_type()
    {

        if ($this->input->post('group_id')) {
            $group_id = $this->input->post('group_id');

            $group_type = $this->grouping_model->get_livelihood_group_category_from_db($group_id);

            //convert the case of the category to lower case
            $group_type = strtolower($group_type);

            //remove blank spaces
            $group_type = preg_replace('/\s+/', '_', $group_type);

            //load appropriate functions for the selected group
            $function_name = 'fetch_group_members_for_' . $group_type;
            //$func = 'fetch_group_members_for_'.$group_type;
            //$func($group_id);

            //checking if the function for the group exists

            if (method_exists($this, $function_name)) {
                $func = 'fetch_group_members_for_' . $group_type;
                //$func($group_id);
                //call_user_func('fetch_group_members_for_'.$group_type, $group_id);
                echo $this->$func($group_id);
            } else {
                echo 'Function ' . $function_name . ' was not found';
            }
            //echo $group_type;
//            echo $group_id;
            //if($group_type )
        }

    }

    function fetch_group_members_for_crop_production($group_id)
    {

        //if ($this->input->post('group_id')) {
        //$group_id = $this->input->post('group_id');
//            echo 'OK';
        //echo 'Successful';

        return $this->membership_model->fetch_associated_group_members_for_crop_production($group_id);
        //}

    }


    function fetch_group_members_for_vegetable_production($group_id)
    {

        //if ($this->input->post('group_id')) {
        //$group_id = $this->input->post('group_id');

        return $this->membership_model->fetch_associated_group_members_for_vegetable_production($group_id);
        //}

    }

    function fetch_group_members_for_fish_farming($group_id)
    {

        //if ($this->input->post('group_id')) {
        //$group_id = $this->input->post('group_id');

        return $this->membership_model->fetch_associated_group_members_for_fish_farming($group_id);
        //}

    }

    function fetch_group_members_for_apiary($group_id)
    {

        //if ($this->input->post('group_id')) {
        //$group_id = $this->input->post('group_id');

        return $this->membership_model->fetch_associated_group_members_for_apiary($group_id);
        //}

    }

    function fetch_group_members_for_piggery($group_id)
    {

        //if ($this->input->post('group_id')) {
        //$group_id = $this->input->post('group_id');

        return $this->membership_model->fetch_associated_group_members_for_piggery($group_id);
        //}

    }

    function fetch_group_members_for_briquettes_production($group_id)
    {

        //if ($this->input->post('group_id')) {
        //$group_id = $this->input->post('group_id');

        return $this->membership_model->fetch_associated_group_members_for_briquettes_production($group_id);
        //}

    }

    function fetch_group_members_for_run_off($group_id)
    {

        //if ($this->input->post('group_id')) {
        //$group_id = $this->input->post('group_id');

        return $this->membership_model->fetch_associated_group_members_for_run_off($group_id);
        //}

    }

    function fetch_group_members_for_underground_water($group_id)
    {

        //if ($this->input->post('group_id')) {
        //$group_id = $this->input->post('group_id');

        return $this->membership_model->fetch_associated_group_members_for_underground_water($group_id);
        //}

    }

    public function edit(){
        $record_id = $this->uri->segment(4);
        $data['row_id'] = $record_id;
        $data['default_value_array'] = $this->baseline_survey_model->fetch_single_row_data_to_edit($record_id);

        #retrieving all ids for groups
        $data['groups_list'] = $this->grouping_model->fetch_all_active_ids();
        $data['title'] = 'Edit Basic Details of Misean Cara Baseline Survey Economic Security';

        # Now getting the values of the input
        $name_of_the_grantee = $this->input->post('name_of_the_grantee');
        $district = $this->input->post('district');
        $county = $this->input->post('county');
        $parish = $this->input->post('parish');
        $number_of_children_with_pwd = $this->input->post('number_of_children_with_pwd');
        $number_of_children_with_chh = $this->input->post('number_of_children_with_chh');
        $number_of_children_orphan = $this->input->post('number_of_children_orphan');
        $number_of_children_with_hiv = $this->input->post('number_of_children_with_hiv');
        $number_of_children_with_pwd_in_school = $this->input->post('number_of_children_with_pwd_in_school');
        $number_of_children_with_chh_in_school = $this->input->post('number_of_children_with_chh_in_school');
        $number_of_children_orphan_in_school = $this->input->post('number_of_children_orphan_in_school');
        $number_of_children_with_hiv_in_school = $this->input->post('number_of_children_with_hiv_in_school');
        $number_of_children_normal_in_school = $this->input->post('number_of_children_normal_in_school');
        $number_of_meals_per_day = $this->input->post('number_of_meals_per_day');
        $able_to_meet_medical_expenses_for_children = $this->input->post('able_to_meet_medical_expenses_for_children');# Performing Validation Checks
        $this->form_validation->set_rules('name_of_the_grantee', 'Name of the Grantee', 'required');
        $this->form_validation->set_rules('county', 'County', 'required');
        $this->form_validation->set_rules('parish', 'Parish', 'required');
        $this->form_validation->set_rules('number_of_meals_per_day', 'Number of Meals able to provide per day', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('default', 'Production/Survey/Modification/misean-cara-baseline-survey-economic-security-edit', $data);
        } else {
            $field_data_basic = array(
                'GRANTEE' => $name_of_the_grantee,
                'DISTRICT' => $district,
                'COUNTY' => $county,
                'SUBCOUNTY' => $parish,
                'PWD' => $number_of_children_with_pwd,
                'CHH' => $number_of_children_with_chh,
                'ORPHAN' => $number_of_children_orphan,
                'HIV' => $number_of_children_with_hiv,
                'PWD_IN_SCHOOL' => $number_of_children_with_pwd_in_school,
                'CHH_IN_SCHOOL' => $number_of_children_with_chh_in_school,
                'ORPHAN_IN_SCHOOL' => $number_of_children_orphan_in_school,
                'CHILDREN_WITH_HIV_IN_SCHOOL' => $number_of_children_with_hiv_in_school,
                'NORMAL_IN_SCHOOL' => $number_of_children_normal_in_school,
                'MEALS_PER_DAY' => $number_of_meals_per_day,
                'MEDICAL_TREATMENT' => $able_to_meet_medical_expenses_for_children,
            );

            $result = $this->baseline_survey_model->update_record($record_id, $field_data_basic);
            if ($result) {
                $this->session->set_flashdata('success_msg', 'Record Submitted Successfully');
            } else {
                $this->session->set_flashdata('error_msg', 'Failed to submit record');
            }

            redirect('production/misean%20cara%20baseline%20surveys');
        }

    }

    public function details()
    {

        if ($this->uri->segment(3)) {
            $row_id = $this->uri->segment(3);
//            echo $row_id;

            $data['title'] = 'Baseline Survey Details';

            $data['baseline_survey_info'] =  $this->baseline_survey_model->fetch_single_record($row_id);
            $this->template->load('default', 'Production/Survey/Data/misean-cara-baseline-survey-details', $data);
        }

    }

    public function generate_pdf_document(){

        if ($this->uri->segment(4)) {

            $row_id = $this->uri->segment(4);
//            echo $row_id;
            $page_data = $this->baseline_survey_model->fetch_single_record($row_id);

            $html_content = '<h3>About ' . $row_id . '</h3>';
            $html_content .= $page_data;
////
            $this->pdf->loadHtml($html_content);
            $this->pdf->setPaper('A4', 'landscape');
            $this->pdf->render();

            $this->pdf->stream("" . $row_id . ".pdf", array("Attachment" => 0));
        }

    }

    public function generate_detailed_pdf(){

    }

    public function filter_data(){
        $data['title'] = 'Filter Data in this table';
        $this->template->load('default', 'Production/Survey/Data/filter-data', $data);
    }


}