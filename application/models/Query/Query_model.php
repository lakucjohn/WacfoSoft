<?php

/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/21/19
 * Time: 12:47 AM
 */
class Query_model extends CI_Model
{
    public function execute_query($sql)
    {
        $query = $this->db->query($sql);
//        $query = $this->db->where('STATUS',TRUE);

        if ($query) {
            return $query;
        } else {
            return $this->db->error();
        }
    }

    public function get_number_of_results($sql)
    {
        $query = $this->db->query($sql);
//        $query = $this->db->where('STATUS',TRUE);

        if ($query) {
            return $query->num_rows();
        } else {
            return $this->db->error();
        }
    }

    public function search_groups($content_to_search)
    {
        $this->db->like('GROUP_NAME', $content_to_search);
        $this->db->or_like('DATE_OF_REGISTRATION', $content_to_search);
        $this->db->or_like('GROUP_ID', $content_to_search);
        $this->db->where('STATUS', TRUE);

        $query = $this->db->get('GROUPS');

        return $query;
    }

    public function search_membership($content_to_search)
    {
        $this->db->like('NAME', $content_to_search);
        $this->db->or_like('TITLE', $content_to_search);
        $this->db->or_like('DATE_OF_BIRTH', $content_to_search);
        $this->db->or_like('TELEPHONE', $content_to_search);
        $this->db->or_like('DATE_OF_JOINING', $content_to_search);
        $this->db->or_like('MEMBERSHIP_ID', $content_to_search);
        $this->db->where('STATUS', TRUE);

        $query = $this->db->get('MEMBERSHIP');

        return $query;
    }

    public function search_children($content_to_search)
    {
        $this->db->like('NAME', $content_to_search);
        $this->db->or_like('DATE_OF_BIRTH', $content_to_search);
        $this->db->or_like('DATE_OF_JOINING', $content_to_search);
        $this->db->or_like('PROJECT', $content_to_search);
        $this->db->or_like('MOTHER', $content_to_search);
        $this->db->or_like('FATHER', $content_to_search);
        $this->db->or_like('GUARDIAN', $content_to_search);
        $this->db->or_like('CHILD_ID', $content_to_search);
        $this->db->where('STATUS', TRUE);

        $query = $this->db->get('CHILDREN');

        return $query;
    }

    public function search_staff($content_to_search)
    {
        $this->db->like('NAME', $content_to_search);
        $this->db->or_like('ROLE', $content_to_search);
        $this->db->or_like('EMAIL_ADDRESS', $content_to_search);
        $this->db->or_like('TELEPHONE', $content_to_search);
        $this->db->or_like('STAFF_ID', $content_to_search);
        $this->db->where('STATUS', TRUE);

        $query = $this->db->get('ORGANIZATION_STAFF_NEW');

        return $query;
    }

    public function search_department($content_to_search)
    {
        $this->db->like('NAME', $content_to_search);
        $this->db->or_like('PREFIX', $content_to_search);

        $query = $this->db->get('ORGANIZATION_DEPARTMENTS_NEW');

        return $query;
    }

    public function search_livelihood_survey($content_to_search)
    {
        $this->db->like('INTERVIEWER', $content_to_search);
        $this->db->or_like('DATE_OF_INTERVIEW', $content_to_search);
        $this->db->or_like('LOCATION', $content_to_search);
        $this->db->or_like('RESPONDENT', $content_to_search);
        $this->db->or_like('HEAD_OF_THE_HOUSEHOLD', $content_to_search);
        $this->db->or_like('SOURCES_OF_INCOME_NOW', $content_to_search);
        $this->db->or_like('INCOME_NOW_ADDITIONAL_NOTES', $content_to_search);
        $this->db->or_like('SOURCES_OF_INCOME_1_YEAR_AGO', $content_to_search);
        $this->db->or_like('INCOME_ONE_YEAR_AGO_ADDITIONAL_NOTES', $content_to_search);
        $this->db->or_like('BREAKFAST_YESTERDAY', $content_to_search);
        $this->db->or_like('SNACK_FOR_BREAKFAST_YESTERDAY', $content_to_search);
        $this->db->or_like('LUNCH_YESTERDAY', $content_to_search);
        $this->db->or_like('SNACK_FOR_LUNCH_YESTERDAY', $content_to_search);
        $this->db->or_like('DINNER_YESTERDAY', $content_to_search);
        $this->db->or_like('SNACK_FOR_DINNER_YESTERDAY', $content_to_search);
        $this->db->or_like('BREAKFAST_1_YEAR_AGO', $content_to_search);
        $this->db->or_like('SNACK_FOR_BREAKFAST_1_YEAR_AGO', $content_to_search);
        $this->db->or_like('LUNCH_1_YEAR_AGO', $content_to_search);
        $this->db->or_like('SNACK_FOR_LUNCH_1_YEAR_AGO', $content_to_search);
        $this->db->or_like('DINNER_1_YEAR_AGO', $content_to_search);
        $this->db->or_like('SNACK_FOR_DINNER_1_YEAR_AGO', $content_to_search);
        $this->db->or_like('SIGNIFICANT_STORY', $content_to_search);
        $this->db->or_like('REASON_FOR_LOW_LIVING_STANDARD', $content_to_search);
        $this->db->or_like('CONCLUSION', $content_to_search);
        $this->db->or_like('RECOMMENDATION', $content_to_search);
        $this->db->where('STATUS', TRUE);

        $query = $this->db->get('PILOT_STUDIES');

        return $query;
    }

    public function search_porticus($content_to_search)
    {
        $this->db->like('NAME_OF_RESPONDENT', $content_to_search);
        $this->db->or_like('VILLAGE', $content_to_search);
        $this->db->or_like('NAME_OF_VULNERABLE', $content_to_search);
        $this->db->or_like('CATEGORY_OF_DISABILITY', $content_to_search);
        $this->db->or_like('NAME_OF_DISABILITY', $content_to_search);
        $this->db->or_like('MARITAL_STATUS', $content_to_search);
        $this->db->or_like('LEVEL_OF_EDUCATION', $content_to_search);
        $this->db->or_like('OCCUPATION', $content_to_search);
        $this->db->or_like('DEFINITION_OF_DISABILITY', $content_to_search);
        $this->db->or_like('LIST_OF_DISABILITIES_KNOWN', $content_to_search);
        $this->db->or_like('CAUSES_OF_DISABILITIES_KNOWN', $content_to_search);
        $this->db->or_like('WAYS_OF_PREVENTION', $content_to_search);
        $this->db->or_like('FEELING_OF_HAVING_A_VULNERABLE', $content_to_search);
        $this->db->or_like('FEELING_OF_THE_COMMUNITY', $content_to_search);
        $this->db->or_like('SUPPORT_GIVEN', $content_to_search);
        $this->db->or_like('WHY_NOT_SUPPORTED', $content_to_search);
        $this->db->or_like('PLACE_OF_REHABILITATION', $content_to_search);
        $this->db->or_like('KIND_OF_TREATMENT_RECEIVED', $content_to_search);
        $this->db->or_like('REASON_FOR_NOT_ATTENDING_REGULARLY', $content_to_search);
        $this->db->or_like('FREQUENCY_OF_ATTENDANCE', $content_to_search);
        $this->db->or_like('QUALITY_OF_SERVICE', $content_to_search);
        $this->db->or_like('NAME_OF_TRAINER', $content_to_search);
        $this->db->or_like('TRAINING_WAS_ABOUT', $content_to_search);
        $this->db->or_like('HELP_OF_THE_TRAINING', $content_to_search);
        $this->db->or_like('CHALLENGES_FACED_IN_CARING', $content_to_search);
        $this->db->or_like('STRENGTHS_OF_VULNERABLE', $content_to_search);
        $this->db->or_like('WEAKNESSES_OF_VULNERABLE', $content_to_search);
        $this->db->or_like('HOPE_FOR_THE_VULNERABLE', $content_to_search);
        $this->db->or_like('ORGANIZATION_HELP_NEEDED', $content_to_search);
        $this->db->where('STATUS', TRUE);

        $query = $this->db->get('PORTICUS_BASELINE_ASSESSMENTS');

        return $query;
    }

    public function search_production($content_to_search)
    {
        $this->db->like('GRANTEE', $content_to_search);
        $this->db->or_like('GROUP_NAME', $content_to_search);
        $this->db->or_like('DISTRICT', $content_to_search);
        $this->db->or_like('COUNTY', $content_to_search);
        $this->db->or_like('SUBCOUNTY', $content_to_search);
        $this->db->or_like('MEALS_PER_DAY', $content_to_search);
        $this->db->or_like('MEDICAL_TREATMENT', $content_to_search);
        $this->db->or_like('TRACK_ID', $content_to_search);
        $this->db->where('STATUS', TRUE);

        $query = $this->db->get('MISEAN_CARA_BASELINE_SURVEYS');

        return $query;
    }

    public function search_challenges($content_to_search)
    {
        $this->db->like('GROUP_NAME', $content_to_search);
        $this->db->or_like('VEGETABLE_PRODUCTION_PROBLEMS', $content_to_search);
        $this->db->or_like('VEGETABLE_MARKETING_PROBLEMS', $content_to_search);
        $this->db->or_like('CROP_PRODUCTION_PROBLEMS', $content_to_search);
        $this->db->or_like('CROP_MARKETING_PROBLEMS', $content_to_search);
        $this->db->or_like('TRACK_ID', $content_to_search);
        $this->db->where('STATUS', TRUE);

        $query = $this->db->get('PRODUCTION_PROBLEMS');

        return $query;
    }

    public function search_monitoring($content_to_search)
    {
        $this->db->like('STAFF_ID', $content_to_search);
        $this->db->or_like('DATE_OF_VISIT', $content_to_search);
        $this->db->or_like('VISIT_TYPE', $content_to_search);
        $this->db->or_like('GENERAL_COMMENTS', $content_to_search);
        $this->db->or_like('TRACK_ID', $content_to_search);
        $this->db->where('STATUS', TRUE);

        $query = $this->db->get('MONITORING_VISITS');

        return $query;
    }

    public function search_field_support_visits($content_to_search)
    {
        $this->db->like('GROUP_ID', $content_to_search);
        $this->db->or_like('ACTIVITIES', $content_to_search);
        $this->db->or_like('ISSUES_IDENTIFIED', $content_to_search);
        $this->db->or_like('ACTION_TAKEN', $content_to_search);

        $query = $this->db->get('FIELD_SUPPORT_MONITORING_VISITS');

        return $query;
    }

    public function search_savings_tracking_visits($content_to_search)
    {
        $this->db->like('GROUP_ID', $content_to_search);
        $this->db->or_like('TOTAL_SAVINGS', $content_to_search);
        $this->db->or_like('AMOUNT_LOAN_OUT', $content_to_search);
        $this->db->or_like('TOTAL_AMOUNT_PAID_BACK', $content_to_search);
        $this->db->or_like('INTEREST_PAID', $content_to_search);
        $this->db->or_like('ISSUES_IDENTIFIED', $content_to_search);
        $this->db->or_like('ACTION_TAKEN', $content_to_search);
        $this->db->or_like('TOTAL_AMOUNT', $content_to_search);
        $this->db->or_like('TRACK_ID', $content_to_search);

        $query = $this->db->get('SAVINGS_TRAKING_VISIT');

        return $query;
    }

    public function search_hygiene_and_nutrition_checklist($content_to_search)
    {
        $this->db->like('MEMBERSHIP_ID', $content_to_search);
        $this->db->or_like('GROUP_NAME', $content_to_search);
        $this->db->or_like('DISTRICT', $content_to_search);
        $this->db->or_like('SUBCOUNTY', $content_to_search);
        $this->db->or_like('PARISH', $content_to_search);
        $this->db->or_like('DATE_CHECKED', $content_to_search);
        $this->db->or_like('STAFF', $content_to_search);
        $this->db->or_like('DATE_RECORDED', $content_to_search);
        $this->db->where('STATUS', TRUE);

        $query = $this->db->get('HYGIENE_AND_NUTRITION_CHECKLIST');

        return $query;
    }

    public function search_assessment_1_records($content_to_search)
    {
        $this->db->like('COUNTY', $content_to_search);
        $this->db->or_like('SUBCOUNTY', $content_to_search);
        $this->db->or_like('PARISH', $content_to_search);
        $this->db->or_like('VILLAGE', $content_to_search);
        $this->db->or_like('HEALTH_CENTRE', $content_to_search);
        $this->db->or_like('DATE_ENTERED', $content_to_search);
        $this->db->or_like('CBR_NAME', $content_to_search);
        $this->db->or_like('CHILD_ID', $content_to_search);
        $this->db->or_like('DATE_OF_BIRTH', $content_to_search);
        $this->db->or_like('DISABILITY_TYPE', $content_to_search);
        $this->db->or_like('WHERE_THE_CHILD_LIVES', $content_to_search);
        $this->db->or_like('OTHER_SPECIFIED_PLACE', $content_to_search);
        $this->db->or_like('NUMBER_OF_OTHER_DISABLED_CHILDREN', $content_to_search);
        $this->db->or_like('EXPLANATION_FOR_INABILITY_TO_PROVIDE_BASIC_NEEDS', $content_to_search);
        $this->db->or_like('DISABILITY_DESCRIPTION', $content_to_search);
        $this->db->or_like('NAME_OF_MEDICINE', $content_to_search);
        $this->db->or_like('LIMBS_THAT_MOVE_WELL', $content_to_search);
        $this->db->or_like('TYPE_OF_AIDS_USED', $content_to_search);
        $this->db->or_like('MENTAL_CAPACITY', $content_to_search);
        $this->db->or_like('HOW_THE_CHILD_MOVES', $content_to_search);
        $this->db->or_like('SCHOOL', $content_to_search);
        $this->db->or_like('COMMENT', $content_to_search);
        $this->db->where('STATUS', TRUE);

        $query = $this->db->get('ASSESSMENT_1_RECORDS');

        return $query;
    }

    public function search_assessment_2_records($content_to_search)
    {
        $this->db->like('CHILD', $content_to_search);
        $this->db->or_like('DATE_OF_FIRST_SCREENING', $content_to_search);
        $this->db->or_like('IDENTIFIED_BY', $content_to_search);
        $this->db->or_like('ASSESSED_BY', $content_to_search);
        $this->db->or_like('DISTANCE', $content_to_search);
        $this->db->or_like('NEAREST_HEALTH_CENTRE', $content_to_search);
        $this->db->or_like('VENUE_FOR_SCREENING', $content_to_search);
        $this->db->or_like('MEDICAL_HISTORY', $content_to_search);
        $this->db->or_like('FINDINGS', $content_to_search);
        $this->db->or_like('DISABILITY', $content_to_search);
        $this->db->or_like('RECOMMENDATION', $content_to_search);
        $this->db->or_like('SCREENED_BY', $content_to_search);
        $this->db->or_like('DATE_ENTERED', $content_to_search);
        $this->db->or_like('TITLE', $content_to_search);
        $this->db->where('STATUS', TRUE);

        $query = $this->db->get('ASSESSMENT_2_RECORDS_NEW');

        return $query;
    }

    public function search_visit_records($content_to_search)
    {
        $this->db->like('DATE_OF_VISIT', $content_to_search);
        $this->db->or_like('KIND_OF_VISIT', $content_to_search);
        $this->db->or_like('CHILD_ID_VISITED', $content_to_search);
        $this->db->or_like('VILLAGE', $content_to_search);
        $this->db->or_like('PARISH', $content_to_search);
        $this->db->or_like('SUBCOUNTY', $content_to_search);
        $this->db->or_like('ACTIVITY_CARRIED_OUT', $content_to_search);
        $this->db->or_like('NEXT_VISIT_ACTIVITY', $content_to_search);
        $this->db->or_like('WACFO_STAFF', $content_to_search);
        $this->db->or_like('COMMENT', $content_to_search);
        $this->db->or_like('NEXT_VISIT_DATE', $content_to_search);
        $this->db->where('STATUS', TRUE);

        $query = $this->db->get('VISIT_RECORDS');

        return $query;
    }

    public function search_marketing_places($content_to_search)
    {
        $this->db->like('INDIVIDUAL_ID', $content_to_search);
        $this->db->or_like('VEGETABLE_MARKET_PLACE_1', $content_to_search);
        $this->db->or_like('VEGETABLE_MARKET_PLACE_2', $content_to_search);
        $this->db->or_like('VEGETABLE_MARKET_PLACE_3', $content_to_search);
        $this->db->or_like('CROP_MARKET_PLACE_1', $content_to_search);
        $this->db->or_like('CROP_MARKET_PLACE_2', $content_to_search);
        $this->db->or_like('CROP_MARKET_PLACE_3', $content_to_search);
        $this->db->where('STATUS', TRUE);

        $query = $this->db->get('CHANGE_IN_KNOWLEDGE_NEWER');

        return $query;
    }

    public function search_courses($content_to_search)
    {
        $this->db->like('COURSE', $content_to_search);
        $this->db->or_like('CODE', $content_to_search);
        $this->db->or_like('DESCRIPTION', $content_to_search);
        $this->db->or_like('GROUP_TRAINED', $content_to_search);
        $this->db->where('STATUS', TRUE);

        $query = $this->db->get('COURSES');

        return $query;
    }

    public function search_topics($content_to_search)
    {
        $this->db->like('COURSE', $content_to_search);
        $this->db->or_like('TOPIC', $content_to_search);
        $this->db->where('STATUS', TRUE);

        $query = $this->db->get('COURSES_AND_TOPICS');

        return $query;
    }

}