<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/16/18
 * Time: 9:23 PM
 */
require_once(APPPATH . 'models/Header.php');
class PilotStudies_model extends CI_Model{

    function fetch(){
        $this->db->order_by('ID','DESC');
        $this->db->where('STATUS', TRUE);

        return $this->db->get('PILOT_STUDIES');
    }

    function fetch_single_record($row_id){
        $this->db->where('ID', $row_id);

        $data = $this->db->get('PILOT_STUDIES');


        $output = '<div class="table-responsive">
                    <style>
            
                        #innertable td{
                            border-collapse: collapse;
                            border: 1px solid black;
                        }
                    </style>
                    <div class="card w-100">
                    <table width="100%">
                    ';

        $output .= '<tr style="text-align: center">
                    <td>
                        ' . showHeader() . '
                    </td>
                  </tr>';

        $output .= '<tr>
                    <td>
                        <hr>
                    </td>
                  </tr>';

        $output .= '<tr style="font-size: 18px; font-weight: bold;">
                    <td>
                        LIVELIHOOD AND NUTRITION HOUSEHOLD SURVEY
                    </td>
                  </tr>';

        $output .= '</table>';

        $output .= '<table id="innertable" class="table" width="100%" style="border-collapse: collapse; font-size: 13px;">';



            foreach($data->result() as $row){
                $output .= '
                
                <tr title="'.$row->INTERVIEWER.'">
                    <td>
                        <table>
                            <tr><td colspan="8">Details of the interview</td></tr>
                            <tr>
                                <td style="text-align: right;"><strong>Name of Interviewer: </strong></td>
                                <td colspan="2">' . $row->INTERVIEWER . '</td>
                                <td style="text-align: right;"><strong>Date of Interview: </strong></td>
                                <td colspan="2">' . $row->DATE_OF_INTERVIEW . '</td>
                                <td style="text-align: right;"><strong>Location: </strong></td>
                                <td>' . $row->LOCATION . '</td>
                            </tr>';

                $output .= '<tr>
                                <td style="text-align: right;"><strong>Name of Respondent: </strong></td>
                                <td colspan="2">' . $row->RESPONDENT . '</td>
                                <td style="text-align: right;"><strong>Head of the household: </strong></td>
                                <td colspan="4">' . $row->HEAD_OF_THE_HOUSEHOLD . '</td>
                            </tr>';

                $output .= '<tr><td colspan="8">Number of people living in the household</td></tr>
                            <tr>
                                <td style="text-align: right;"><strong>Females under 5: </strong></td>
                                <td>' . $row->FEMALES_UNDER_5 . '</td>
                                <td style="text-align: right;" colspan="2"><strong>Females between 6 and 18: </strong></td>
                                <td>' . $row->FEMALES_BETWEEN_6_AND_18 . '</td>
                                <td style="text-align: right;" colspan="2"><strong>Females between 18 and 45: </strong></td>
                                <td>' . $row->FEMALES_BETWEEN_18_AND_45 . '</td>
                            </tr>';

                $output .= '<tr>
                                <td style="text-align: right;"><strong>Males under 5: </strong></td>
                                <td>' . $row->MALES_UNDER_5 . '</td>
                                <td style="text-align: right;" colspan="2"><strong>Males between 6 and 18: </strong></td>
                                <td>' . $row->MALES_BETWEEN_6_AND_18 . '</td>
                                <td style="text-align: right;" colspan="2"><strong>Males between 18 and 45: </strong></td>
                                <td>' . $row->MALES_BETWEEN_18_AND_45 . '</td>
                            </tr>';

                $output .= '<tr><td colspan="8">&nbsp;</td></tr>
                            <tr>
                                <td style="text-align: right;" colspan="4"><strong>Length of time involved in projects: </strong></td>
                                <td colspan="4">' . $row->LENGTH_OF_TIME_INVOLVED_IN_PROJECTS . '</td>
                            </tr>';

                $output .= '<tr><td colspan="8">Part 1: INCOME GENERATION AND LIVELIHOOD DIVERSITY</td></tr>';

                $output .= '<tr>
                                <td style="text-align: right;" colspan="4"><strong>Typical daily household income now : </strong></td>
                                <td colspan="4">' . $row->DAILY_HOUSEHOLD_INCOME_NOW . '</td>
                            </tr>';

                $output .= '<tr>
                                <td style="text-align: right;" colspan="4"><strong>Typical daily household income one year ago  : </strong></td>
                                <td colspan="4">' . $row->DAILY_HOUSEHOLD_INCOME_ONE_YEAR_AGO . '</td>
                            </tr>';

                $output .= '<tr>
                                <td style="text-align: right;" colspan="4"><strong>Has there been an increase in household daily income from one year ago to now? : </strong></td>
                                <td colspan="4">' . $row->INCREASE_IN_DAILY_HOUSEHOLD_INCOME . '</td>
                            </tr>';

                $output .= '<tr>
                                <td style="text-align: right;" colspan="4"><strong>How many sources of income or livelihood does the household have now? : </strong></td>
                                <td colspan="4">' . $row->NUMBER_OF_SOURCES_OF_INCOME_NOW . '</td>
                            </tr>';

                $output .= '<tr>
                                <td style="text-align: right;" colspan="4"><strong>Which ones are they? : </strong></td>
                                <td colspan="4">' . $row->SOURCES_OF_INCOME_NOW . '</td>
                            </tr>';

                $output .= '<tr>
                                <td style="text-align: right;" colspan="4"><strong>Additional Notes: </strong></td>
                                <td colspan="4">' . $row->INCOME_NOW_ADDITIONAL_NOTES . '</td>
                            </tr>';

                $output .= '<tr>
                                <td style="text-align: right;" colspan="4"><strong>How many sources of income or livelihood did the household have one year ago? : </strong></td>
                                <td colspan="4">' . $row->NUMBER_OF_SOURCES_OF_INCOME_ONE_YEAR_AGO . '</td>
                            </tr>';

                $output .= '<tr>
                                <td style="text-align: right;" colspan="4"><strong>Which ones are they? : </strong></td>
                                <td colspan="4">' . $row->SOURCES_OF_INCOME_1_YEAR_AGO . '</td>
                            </tr>';

                $output .= '<tr>
                                <td style="text-align: right;" colspan="4"><strong>Additional Notes: </strong></td>
                                <td colspan="4">' . $row->INCOME_ONE_YEAR_AGO_ADDITIONAL_NOTES . '</td>
                            </tr>';

                $output .= '<tr>
                                <td style="text-align: right;" colspan="4"><strong>Has there been an increase in diversity of sources of income or livelihood in the household from one year ago to now?: </strong></td>';

                if ($row->INCREASE_IN_DIVERSITY_OF_SOURCES_OF_INCOME) {
                    $output .= '<td colspan="4">Yes</td>';
                } else {
                    $output .= '<td colspan="4">No</td>';
                }


                $output .= '</tr>';

                $output .= '<tr><td colspan="8">What 3 key household needs is income most spent on in order of priority </td></tr>';

                $output .= '<tr>
                                <td><strong>% Medical</strong></td>
                                <td><strong>% Education</strong></td>
                                <td><strong>% House Rent </strong></td>
                                <td><strong>% Clothes </strong></td>
                                <td><strong>% Food</strong></td>
                                <td><strong>% Household Assets</strong></td>
                                <td colspan="2"><strong>% Others</strong></td>
                            </tr>';

                $output .= '<tr>
                                <td>' . $row->MEDICAL_EXPENSE . '</td>
                                <td>' . $row->EDUCATION_EXPENSE . '</td>
                                <td>' . $row->HOUSE_EXPENSE . '</td>
                                <td>' . $row->CLOTHES_EXPENSE . '</td>
                                <td>' . $row->FOOD_EXPENSE . '</td>
                                <td>' . $row->HOUSEHOLD_ASSETS . '</td>
                                <td colspan="2">' . $row->OTHER_EXPENSES . '</td>
                            </tr>';

                $output .= '<tr><td colspan="8">&nbsp;</td></tr>';

                $output .= '<tr>
                                <td style="text-align: right;" colspan="4"><strong>Has there been an increase in the number of household assets from one year ago to now and which one/s are they? : </strong></td>';

                if ($row->INCREASE_IN_HOUSEHOLD_ASSETS) {
                    $output .= '<td colspan="4">Yes</td>';
                } else {
                    $output .= '<td colspan="4">No</td>';
                }
                $output .= '</tr>';

                $output .= '<tr>
                                <td><strong>Land</strong></td>
                                <td><strong>Permanent house </strong></td>
                                <td><strong>Semi permanent house </strong></td>
                                <td><strong>Mud / off cut house</strong></td>
                                <td><strong>Radio / TV</strong></td>
                                <td><strong>Mobile phone </strong></td>
                                <td colspan="2"><strong>Bicycle / Motorbike / Car </strong></td>
                            </tr>';

                $output .= '<tr>';
                if ($row->LAND_INCREASE) {
                    $output .= '<td>Yes <br><br>' . $row->LAND_SIZE . '</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                if ($row->PERMANENT_HOUSE) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                if ($row->SEMI_PERMANENT_HOUSE) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                if ($row->MUD_HOUSE) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                if ($row->RADIO_OR_TV) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                if ($row->MOBILE_PHONE) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                if ($row->AUTOMOTIVE) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }
                $output .= '</tr>';

                $output .= '<tr><td colspan="8">Part 2: HOUSEHOLD NUTRITION AND DIET</td></tr>';

                $output .= '<tr>
                                <td colspan="2"><strong>Breakfast Yesterday</strong></td>
                                <td><strong>Snack Yesterday</strong></td>
                                <td colspan="2"><strong>Lunch Yesterday</strong></td>
                                <td><strong>Snack Yesterday</strong></td>
                                <td><strong>Dinner Yesterday</strong></td>
                                <td><strong>Snack Yesterday</strong></td>
                            </tr>';

                $output .= '<tr>
                                <td colspan="2">' . $row->BREAKFAST_YESTERDAY . '</td>
                                <td>' . $row->SNACK_FOR_BREAKFAST_YESTERDAY . '</td>
                                <td colspan="2">' . $row->LUNCH_YESTERDAY . '</td>
                                <td>' . $row->SNACK_FOR_LUNCH_YESTERDAY . '</td>
                                <td>' . $row->DINNER_YESTERDAY . '</td>
                                <td>' . $row->SNACK_FOR_DINNER_YESTERDAY . '</td>
                            </tr>';

                $output .= '<tr><td colspan="8">&nbsp;</td></tr>';

                $output .= '<tr>
                                <td colspan="2"><strong>Breakfast One Year Ago</strong></td>
                                <td><strong>Snack One Year Ago</strong></td>
                                <td colspan="2"><strong>Lunch One Year Ago</strong></td>
                                <td><strong>Snack One Year Ago</strong></td>
                                <td><strong>Dinner One Year Ago</strong></td>
                                <td><strong>Snack One Year Ago</strong></td>
                            </tr>';

                $output .= '<tr>
                                <td colspan="2">' . $row->BREAKFAST_1_YEAR_AGO . '</td>
                                <td>' . $row->SNACK_FOR_BREAKFAST_1_YEAR_AGO . '</td>
                                <td colspan="2">' . $row->LUNCH_1_YEAR_AGO . '</td>
                                <td>' . $row->SNACK_FOR_LUNCH_1_YEAR_AGO . '</td>
                                <td>' . $row->DINNER_1_YEAR_AGO . '</td>
                                <td>' . $row->SNACK_FOR_DINNER_1_YEAR_AGO . '</td>
                            </tr>';

                $output .= '<tr><td colspan="8">&nbsp;</td></tr>';

                $output .= '<tr>
                                <td colspan="2"><strong>Food Group</strong></td>
                                <td colspan="4"><strong>Examples</strong></td>
                                <td><strong>One Year Ago</strong></td>
                                <td><strong>Yesterday</strong></td>
                            </tr>';

                $output .= '<tr>
                                <td colspan="2">1. Cereals </td>
                                <td colspan="4"> Ugali, Rice, Porridge, Kitheri(local food made from the following:Corn/Maize, rice, wheat, sorghum, millet or any other grains or foods made from these (e.g. bread, noodles, porridge or other grain products)) </td>';

                if ($row->CEREALS_1_YEAR_AGO) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                if ($row->CEREALS_YESTERDAY) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }
                $output .= '</tr>';

                $output .= '<tr>
                                <td colspan="2">2. Vitamin A rich vegetables and roots </td>
                                <td colspan="4">Pumpkin, carrots, squash, or orange flesh, sweet potatoes. Other locally available vitamin-A rich vegetables (e.g. red sweet pepper) </td>';

                if ($row->VITAMIN_A_VEGETABLE_1_YEAR_AGO) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                if ($row->VITAMIN_A_VEGETABLE_YESTERDAY) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }
                $output .= '</tr>';

                $output .= '<tr>
                                <td colspan="2">3. White tubers and roots </td>
                                <td colspan="4">White potatoes, white yams, white cassava, or any other foods made from roots </td>';

                if ($row->WHITE_TUBERS_1_YEAR_AGO) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                if ($row->WHITE_TUBERS_YESTERDAY) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }
                $output .= '</tr>';

                $output .= '<tr>
                                <td colspan="2">4. Dark green leafy vegetables </td>
                                <td colspan="4">Dark green/leafy vegetables, including wild ones + locally available vitamin-A rich leaves such as amaranth, cassava leaves, kale, pinach, black night shade, African spider, etc </td>';

                if ($row->DARK_GREEN_LEAFY_VEGETABLES_1_YEAR_AGO) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                if ($row->DARK_GREEN_LEAFY_VEGETABLES_YESTERDAY) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }
                $output .= '</tr>';

                $output .= '<tr>
                                <td colspan="2">5. Other vegetables </td>
                                <td colspan="4">Other vegetables (e.g. tomato, onion, egg plant) including wild vegetables </td>';

                if ($row->OTHER_VEGETABLES_1_YEAR_AGO) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                if ($row->OTHER_VEGETABLES_YESTERDAY) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }
                $output .= '</tr>';

                $output .= '<tr>
                                <td colspan="2">6. Vitamin A rich fruits </td>
                                <td colspan="4">Ripe mangoes, cantaloupe, apricots (fresh or dried), ripe papaya, dried peaches, passion fruits, guava, loquats + other locally available vitamin-A rich fruits </td>';

                if ($row->VITAMIN_A_FRUITS_1_YEAR_AGO) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                if ($row->VITAMIN_A_FRUITS_YESTERDAY) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }
                $output .= '</tr>';

                $output .= '<tr>
                                <td colspan="2">7. Other fruits </td>
                                <td colspan="4"> Other fruits, including wild fruits - gooseberries </td>';

                if ($row->OTHER_FRUITS_1_YEAR_AGO) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                if ($row->OTHER_FRUITS_YESTERDAY) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }
                $output .= '</tr>';

                $output .= '<tr>
                                <td colspan="2">8. Organ meat (iron-rich) </td>
                                <td colspan="4">Liver, kidney, heart or other organ meats or blood-based foods </td>';

                if ($row->ORGAN_MEAT_1_YEAR_AGO) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                if ($row->ORGAN_MEAT_YESTERDAY) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }
                $output .= '</tr>';

                $output .= '<tr>
                                <td colspan="2"> 9. Flesh meats </td>
                                <td colspan="4">Beef, pork, lamb, goat, rabbit, wild game, chicken, duck, or any other birds </td>';

                if ($row->FLESH_MEATS_1_YEAR_AGO) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                if ($row->FLESH_MEATS_YESTERDAY) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }
                $output .= '</tr>';

                $output .= '<tr>
                                <td colspan="2">10. Eggs </td>
                                <td colspan="4">Chicken, duck, guinea hen or any other egg </td>';

                if ($row->EGGS_1_YEAR_AGO) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                if ($row->EGGS_YESTERDAY) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }
                $output .= '</tr>';

                $output .= '<tr>
                                <td colspan="2">11. Fish </td>
                                <td colspan="4"> Fresh or dried fish or shellfish </td>';

                if ($row->FISH_1_YEAR_AGO) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                if ($row->FISH_YESTERDAY) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }
                $output .= '</tr>';

                $output .= '<tr>
                                <td colspan="2">12. Legumes, nuts and seeds </td>
                                <td colspan="4">Beans, peas, lentils, groundnuts, simsim, seeds or foods made from these</td>';

                if ($row->LEGUMES_1_YEAR_AGO) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                if ($row->LEGUMES_YESTERDAY) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }
                $output .= '</tr>';

                $output .= '<tr>
                                <td colspan="2">13. Milk and milk products </td>
                                <td colspan="4">Milk, cheese, yogurt, or any milk products</td>';

                if ($row->MILK_1_YEAR_AGO) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                if ($row->MILK_YESTERDAY) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }
                $output .= '</tr>';

                $output .= '<tr>
                                <td colspan="2">14. Oils and fats </td>
                                <td colspan="4">Oil, fats or butter added to food or used for cooking </td>';

                if ($row->OILS_AND_FATS_1_YEAR_AGO) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                if ($row->OILS_AND_FATS_YESTERDAY) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }
                $output .= '</tr>';

                $output .= '<tr>
                                <td colspan="2">15. Red palm products </td>
                                <td colspan="4">Red palm oil, palm nut or palm nut pulp sauce </td>';

                if ($row->RED_PALM_1_YEAR_AGO) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                if ($row->RED_PALM_YESTERDAY) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }
                $output .= '</tr>';

                $output .= '<tr>
                                <td colspan="2">16. Sweets </td>
                                <td colspan="4">Sugar, honey, sweetened soda or ugary foods such as chocolates, candles, cookies and cakes </td>';

                if ($row->SWEETS_1_YEAR_AGO) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                if ($row->SWEETS_YESTERDAY) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }
                $output .= '</tr>';

                $output .= '<tr>
                                <td colspan="2">17. Spices, condiments, beverages </td>
                                <td colspan="4"> Spices (black pepper, salt), condiments (soy sauce, hot sauce), coffee, tea, alcoholic beverages or local examples</td>';

                if ($row->SPICES_1_YEAR_AGO) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                if ($row->SPICES_YESTERDAY) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }
                $output .= '</tr>';

                $output .= '<tr><td colspan="8">&nbsp;</td></tr>';

                $output .= '<tr><td colspan="8">Environment and Sanitation</td></tr>';

                $output .= '<tr>
                                <td style="text-align: right;" colspan="4"><strong>Does the household have a drying dish rack? : </strong></td>';

                if ($row->DISH_RACK) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                $output .= '</tr>';

                $output .= '<tr>
                                <td style="text-align: right;" colspan="4"><strong>Does the household have a compost pit? : </strong></td>';

                if ($row->COMPOST_PIT) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                $output .= '</tr>';

                $output .= '<tr>
                                <td style="text-align: right;" colspan="4"><strong> Does the household have a cloth drying line? : </strong></td>';

                if ($row->CLOTH_DRYING_LINE) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                $output .= '</tr>';

                $output .= '<tr>
                                <td style="text-align: right;" colspan="4"><strong>Does the household have a latrine? : </strong></td>';

                if ($row->LATRINE) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                $output .= '</tr>';

                $output .= '<tr>
                                <td style="text-align: right;" colspan="4"><strong> Does the household have a tippy tap? : </strong></td>';

                if ($row->TIPPY_TAP) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                $output .= '</tr>';

                $output .= '<tr>
                                <td style="text-align: right;" colspan="4"><strong> Does the household boil drinking water for household use? : </strong></td>';

                if ($row->BOILS_WATER) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                $output .= '</tr>';

                $output .= '<tr><td colspan="8">&nbsp;</td></tr>';

                $output .= '<tr><td colspan="8"> Household self appraisal</td></tr>';

                $output .= '<tr>
                                <td style="text-align: right;" colspan="4"><strong>Does the household think they have improved their living situation?: </strong></td>';

                if ($row->IMPROVED_LIVING_STANDARD) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                $output .= '</tr>';

                if ($row->IMPROVED_LIVING_STANDARD) {
                    $output .= '<tr>
                                <td style="text-align: right;" colspan="4"><strong>What is the most significant story of the household?: </strong></td>
                                <td colspan="4">' . $row->SIGNIFICANT_STORY . '</td>
                            </tr>';
                } else {
                    $output .= '<tr>
                                <td style="text-align: right;" colspan="4"><strong>Why?: </strong></td>
                                <td colspan="4">' . $row->REASON_FOR_LOW_LIVING_STANDARD . '</td>
                            </tr>';
                }

                $output .= '<tr><td colspan="8">&nbsp;</td></tr>';

                $output .= '<tr><td colspan="8">Total number of "YES" answers (score 1) entered in each column:   One Year Ago = 0;     Yesterday = 0 </td></tr>';

                $output .= '<tr>
                                <td style="text-align: right;" colspan="4"><strong>On the basis of the scores above, has this household improved its dietary diversity from one year ago to now? : </strong></td>';

                if ($row->IMPROVED_DIET) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                $output .= '</tr>';

                $output .= '<tr>
                                <td style="text-align: right;" colspan="4"><strong> Has this household increased its knowledge of kitchen gardening/horticulture or agriculture, or received nutritional counseling in the past year? : </strong></td>';

                if ($row->IMPROVED_KNOWLEDGE_OF_NUTRITION) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                $output .= '</tr>';

                $output .= '<tr>
                                <td style="text-align: right;" colspan="4"><strong> Has the household reduced its post-harvest loss through improved storage and preservation of foodstuff in the past? : </strong></td>';

                if ($row->REDUCED_POST_HARVEST_LOSS_DUE_TO_IMPROVED_STORAGE) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                $output .= '</tr>';

                $output .= '<tr>
                                <td style="text-align: right;" colspan="4"><strong> Has the household increased its asset base? : </strong></td>';

                if ($row->INCREASED_HOUSEHOLD_ASSET_BASE) {
                    $output .= '<td>Yes</td>';
                } else {
                    $output .= '<td>No</td>';
                }

                $output .= '</tr>';

                $output .= '<tr>
                                <td style="text-align: right;" colspan="4"><strong>Conclusion : </strong></td>
                                <td colspan="4">' . $row->CONCLUSION . '</td>
                            </tr>';

                $output .= '<tr>
                                <td style="text-align: right;" colspan="4"><strong>Recommendations for improvement: </strong></td>
                                <td colspan="4">' . $row->RECOMMENDATION . '</td>
                            </tr>';


                $output .= '</table>
                    </td>
                </tr>
                ';
            }


            $output .= '</table>
                    </div>';

        return $output;
    }

    function insert_record($field_data)
    {
        $this->db->insert('PILOT_STUDIES', $field_data);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function fetch_single_row_data_to_edit($row)
    {
        $this->db->where('ID', $row);

        $data = $this->db->get('PILOT_STUDIES');

        return $data;

    }

    function generate_report_with_all_data()
    {

    }

    function update_record($record_id, $field_data)
    {
        $this->db->where('ID', $record_id);
        $this->db->set($field_data);
        $this->db->update('PILOT_STUDIES');

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}

?>