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
        document.getElementById('livelihood_table_selections').style.display = 'none';
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

    if (contains.call(query_tables, 'LIVELIHOODGROUPCATEGORIES')) {
        var join = [];
        if (contains.call(query_tables, 'GROUPS')) {
            join.push('LIVELIHOODGROUPCATEGORIES');
            join.push('GROUPS.TYPE=LIVELIHOODGROUPCATEGORIES.ID');

            joins.push(join);
        }

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
    var visitation_project_criterion = document.getElementById('assessment_2_title_criterion').value;
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
    var pilot_studies_spices_1_year_ago_criterion = document.getElementById('pilot_studies_spices_yesterday_criterion').value;
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
                    record.push('GROUPS.NAME');
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
                    record.push('GROUPS.TYPE');
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
                    record.push('MEMBERSHIP.VULNERABILITY');
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
                    record.push('MEMBERSHIP.PARISH');
                    record.push(memberparish_criterion);

                    conditions.push(record);

                }
                if (membervillage_criterion !== '') {
                    var record = [];
                    record.push('MEMBERSHIP.VILLAGE');
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
                    record.push('CHILDREN.VULNERABILITY');
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
                    record.push('CHILDREN.PARISH');
                    record.push(childparish_criterion);

                    conditions.push(record);

                }
                if (childvillage_criterion !== '') {
                    var record = [];
                    record.push('CHILDREN.VILLAGE');
                    record.push(childvillage_criterion);

                    conditions.push(record);

                }
                if (childdateofjoining_criterion !== '') {
                    var record = [];
                    record.push('CHILDREN.DATE_OF_JOINING');
                    record.push(childdateofjoining_criterion);

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
                    record.push('ASSESSMENT_1_RECORDS.COUNTY');
                    record.push(assessment_1_county_criterion);

                    conditions.push(record);

                }
                if (assessment_1_subcounty_criterion !== '') {
                    var record = [];
                    record.push('ASSESSMENT_1_RECORDS.SUBCOUNTY');
                    record.push(assessment_1_subcounty_criterion);

                    conditions.push(record);

                }
                if (assessment_1_parish_criterion !== '') {
                    var record = [];
                    record.push('ASSESSMENT_1_RECORDS.PARISH');
                    record.push(assessment_1_parish_criterion);

                    conditions.push(record);

                }
                if (assessment_1_village_criterion !== '') {
                    var record = [];
                    record.push('ASSESSMENT_1_RECORDS.VILLAGE');
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
                // if (visitation_kindofvisit_criterion !== '') {
                //     var record = [];
                //     record.push('VISIT_RECORDS.KIND_OF_VISIT');
                //     record.push(visitation_kindofvisit_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (visitation_childidvisited_criterion !== '') {
                //     var record = [];
                //     record.push('VISIT_RECORDS.CHILD_ID_VISITED');
                //     record.push(visitation_childidvisited_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (visitation_project_criterion !== '') {
                //     var record = [];
                //     record.push('VISIT_RECORDS.PROJECT');
                //     record.push(visitation_project_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (visitation_village_criterion !== '') {
                //     var record = [];
                //     record.push('VISIT_RECORDS.VILLAGE');
                //     record.push(visitation_village_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (visitation_parish_criterion !== '') {
                //     var record = [];
                //     record.push('VISIT_RECORDS.PARISH');
                //     record.push(visitation_parish_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (visitation_subcounty_criterion !== '') {
                //     var record = [];
                //     record.push('VISIT_RECORDS.SUBCOUNTY');
                //     record.push(visitation_subcounty_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (visitation_activitycarriedout_criterion !== '') {
                //     var record = [];
                //     record.push('VISIT_RECORDS.ACTIVITY_CARRIED_OUT');
                //     record.push(visitation_activitycarriedout_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (visitation_nextvisitactivity_criterion !== '') {
                //     var record = [];
                //     record.push('VISIT_RECORDS.NEXT_VISIT_ACTIVITY');
                //     record.push(visitation_nextvisitactivity_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (visitation_wacfostaff_criterion !== '') {
                //     var record = [];
                //     record.push('VISIT_RECORDS.WACFO_STAFF');
                //     record.push(visitation_wacfostaff_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (visitation_comment_criterion !== '') {
                //     var record = [];
                //     record.push('VISIT_RECORDS.COMMENT');
                //     record.push(visitation_comment_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (visitation_nextvisitdate_criterion !== '') {
                //     var record = [];
                //     record.push('VISIT_RECORDS.NEXT_VISIT_DATE');
                //     record.push(visitation_nextvisitdate_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (department_name_criterion !== '') {
                //     var record = [];
                //     record.push('ORGANIZATION_DEPARTMENTS_NEW.NAME');
                //     record.push(department_name_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (department_prefix_criterion !== '') {
                //     var record = [];
                //     record.push('ORGANIZATION_DEPARTMENTS_NEW.PREFIX');
                //     record.push(department_prefix_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (staff_name_criterion !== '') {
                //     var record = [];
                //     record.push('ORGANIZATION_STAFF_NEW.NAME');
                //     record.push(staff_name_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (staff_role_criterion !== '') {
                //     var record = [];
                //     record.push('ORGANIZATION_STAFF_NEW.ROLE');
                //     record.push(staff_role_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (staff_department_criterion !== '') {
                //     var record = [];
                //     record.push('ORGANIZATION_STAFF_NEW.DEPARTMENT');
                //     record.push(staff_department_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (staff_emailaddress_criterion !== '') {
                //     var record = [];
                //     record.push('ORGANIZATION_STAFF_NEW.EMAIL_ADDRESS');
                //     record.push(staff_emailaddress_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (staff_telephone_criterion !== '') {
                //     var record = [];
                //     record.push('ORGANIZATION_STAFF_NEW.TELEPHONE');
                //     record.push(staff_telephone_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (staff_staffid_criterion !== '') {
                //     var record = [];
                //     record.push('ORGANIZATION_STAFF_NEW.STAFF_ID');
                //     record.push(staff_staffid_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (courses_criterion !== '') {
                //     var record = [];
                //     record.push('COURSES_AND_TOPICS.COURSE');
                //     record.push(courses_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (topics_criterion !== '') {
                //     var record = [];
                //     record.push('COURSES_AND_TOPICS.TOPIC');
                //     record.push(topics_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (training_dateoftraining_criterion !== '') {
                //     var record = [];
                //     record.push('TRAININGS.DATE_OF_TRAINING');
                //     record.push(training_dateoftraining_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (training_course_criterion !== '') {
                //     var record = [];
                //     record.push('TRAININGS.COURSE');
                //     record.push(training_course_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (training_topic_criterion !== '') {
                //     var record = [];
                //     record.push('TRAININGS.TOPIC');
                //     record.push(training_topic_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (training_objective_criterion !== '') {
                //     var record = [];
                //     record.push('TRAININGS.OBJECTIVE');
                //     record.push(training_objective_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (training_venue_criterion !== '') {
                //     var record = [];
                //     record.push('TRAININGS.VENUE');
                //     record.push(training_venue_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (training_groupintended_criterion !== '') {
                //     var record = [];
                //     record.push('TRAININGS.GROUP_INTENDED');
                //     record.push(training_groupintended_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (training_conductedby_criterion !== '') {
                //     var record = [];
                //     record.push('TRAININGS.CONDUCTED_BY');
                //     record.push(training_conductedby_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (training_isstaff_criterion !== '') {
                //     var record = [];
                //     record.push('TRAININGS.IS_STAFF');
                //     record.push(training_isstaff_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (training_attendance_attendant_criterion !== '') {
                //     var record = [];
                //     record.push('TRAINING_ATTENDANCE.ATTENDANT');
                //     record.push(training_attendance_attendant_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (training_attendance_type_criterion !== '') {
                //     var record = [];
                //     record.push('TRAINING_ATTENDANCE.TYPE');
                //     record.push(training_attendance_type_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (training_attendance_address_criterion !== '') {
                //     var record = [];
                //     record.push('TRAINING_ATTENDANCE.ADDRESS');
                //     record.push(training_attendance_address_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (training_attendance_contact_criterion !== '') {
                //     var record = [];
                //     record.push('TRAINING_ATTENDANCE.CONTACT');
                //     record.push(training_attendance_contact_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (training_outcome_outcome_criterion !== '') {
                //     var record = [];
                //     record.push('TRAINING_OUTCOMES.OUTCOME');
                //     record.push(training_outcome_outcome_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (monitoring_staffid_criterion !== '') {
                //     var record = [];
                //     record.push('MONITORING_VISITS.STAFF_ID');
                //     record.push(monitoring_staffid_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (monitoring_dateofvisit_criterion !== '') {
                //     var record = [];
                //     record.push('MONITORING_VISITS.DATE_OF_VISIT');
                //     record.push(monitoring_dateofvisit_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (monitoring_visittype_criterion !== '') {
                //     var record = [];
                //     record.push('MONITORING_VISITS.VISIT_TYPE');
                //     record.push(monitoring_visittype_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (monitoring_generalcomments_criterion !== '') {
                //     var record = [];
                //     record.push('MONITORING_VISITS.GENERAL_COMMENTS');
                //     record.push(monitoring_generalcomments_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (monitoring_trackid_criterion !== '') {
                //     var record = [];
                //     record.push('MONITORING_VISITS.TRACK_ID');
                //     record.push(monitoring_trackid_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (misean_cara_grantee_criterion !== '') {
                //     var record = [];
                //     record.push('MISEAN_CARA_BASELINE_SURVEYS.GRANTEE');
                //     record.push(misean_cara_grantee_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (misean_cara_groupid_criterion !== '') {
                //     var record = [];
                //     record.push('MISEAN_CARA_BASELINE_SURVEYS.GROUP_NAME');
                //     record.push(misean_cara_groupid_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (misean_cara_district_criterion !== '') {
                //     var record = [];
                //     record.push('MISEAN_CARA_BASELINE_SURVEYS.DISTRICT');
                //     record.push(misean_cara_district_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (misean_cara_county_criterion !== '') {
                //     var record = [];
                //     record.push('MISEAN_CARA_BASELINE_SURVEYS.COUNTY');
                //     record.push(misean_cara_county_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (misean_cara_subcounty_criterion !== '') {
                //     var record = [];
                //     record.push('MISEAN_CARA_BASELINE_SURVEYS.SUBCOUNTY');
                //     record.push(misean_cara_subcounty_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (misean_cara_pwd_criterion !== '') {
                //     var record = [];
                //     record.push('MISEAN_CARA_BASELINE_SURVEYS.PWD');
                //     record.push(misean_cara_pwd_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (misean_cara_chh_criterion !== '') {
                //     var record = [];
                //     record.push('MISEAN_CARA_BASELINE_SURVEYS.CHH');
                //     record.push(misean_cara_chh_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (misean_cara_orphans_criterion !== '') {
                //     var record = [];
                //     record.push('MISEAN_CARA_BASELINE_SURVEYS.ORPHAN');
                //     record.push(misean_cara_orphans_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (misean_cara_hiv_criterion !== '') {
                //     var record = [];
                //     record.push('MISEAN_CARA_BASELINE_SURVEYS.HIV');
                //     record.push(misean_cara_hiv_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (misean_cara_pwdinschool_criterion !== '') {
                //     var record = [];
                //     record.push('MISEAN_CARA_BASELINE_SURVEYS.PWD_IN_SCHOOL');
                //     record.push(misean_cara_pwdinschool_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (misean_cara_chhinschool_criterion !== '') {
                //     var record = [];
                //     record.push('MISEAN_CARA_BASELINE_SURVEYS.CHH_IN_SCHOOL');
                //     record.push(misean_cara_chhinschool_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (misean_cara_orphansinschool_criterion !== '') {
                //     var record = [];
                //     record.push('MISEAN_CARA_BASELINE_SURVEYS.ORPHAN_IN_SCHOOL');
                //     record.push(misean_cara_orphansinschool_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (misean_cara_childrenwithhiv_criterion !== '') {
                //     var record = [];
                //     record.push('MISEAN_CARA_BASELINE_SURVEYS.CHILDREN_WITH_HIV_IN_SCHOOL');
                //     record.push(misean_cara_childrenwithhiv_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (misean_cara_normalinschool_criterion !== '') {
                //     var record = [];
                //     record.push('MISEAN_CARA_BASELINE_SURVEYS.NORMAL_IN_SCHOOL');
                //     record.push(misean_cara_normalinschool_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (misean_cara_mealsperday_criterion !== '') {
                //     var record = [];
                //     record.push('MISEAN_CARA_BASELINE_SURVEYS.MEALS_PER_DAY');
                //     record.push(misean_cara_mealsperday_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (misean_cara_medicaltreatment_criterion !== '') {
                //     var record = [];
                //     record.push('MISEAN_CARA_BASELINE_SURVEYS.MEDICAL_TREATMENT');
                //     record.push(misean_cara_medicaltreatment_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (production_individual_criterion !== '') {
                //     var record = [];
                //     record.push('VEGETABLE_PRODUCTION_NEW.INDIVIDUAL');
                //     record.push(production_individual_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (production_foodstuff_criterion !== '') {
                //     var record = [];
                //     record.push('VEGETABLE_PRODUCTION_NEW.FOOD_STUFF');
                //     record.push(production_foodstuff_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (production_category_criterion !== '') {
                //     var record = [];
                //     record.push('VEGETABLE_PRODUCTION_NEW.CATEGORY');
                //     record.push(production_category_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (production_acresplanted_criterion !== '') {
                //     var record = [];
                //     record.push('VEGETABLE_PRODUCTION_NEW.ACRES_PLANTED');
                //     record.push(production_acresplanted_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (production_yieldobtained_criterion !== '') {
                //     var record = [];
                //     record.push('VEGETABLE_PRODUCTION_NEW.YIELD_OBTAINED');
                //     record.push(production_yieldobtained_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (production_quantitysold_criterion !== '') {
                //     var record = [];
                //     record.push('VEGETABLE_PRODUCTION_NEW.QUANTITY_SOLD');
                //     record.push(production_quantitysold_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (production_income_criterion !== '') {
                //     var record = [];
                //     record.push('VEGETABLE_PRODUCTION_NEW.INCOME');
                //     record.push(production_income_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (fishing_individual_id_criterion !== '') {
                //     var record = [];
                //     record.push('FISH_FARMING_RECORDS.INDIVIDUAL_ID');
                //     record.push(fishing_individual_id_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (fishing_size_of_pond_criterion !== '') {
                //     var record = [];
                //     record.push('FISH_FARMING_RECORDS.SIZE_OF_POND');
                //     record.push(fishing_size_of_pond_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (fishing_number_of_fish_criterion !== '') {
                //     var record = [];
                //     record.push('FISH_FARMING_RECORDS.NUMBER_OF_FISH_HARVESTED');
                //     record.push(fishing_number_of_fish_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (fishing_quantity_criterion !== '') {
                //     var record = [];
                //     record.push('FISH_FARMING_RECORDS.QUANTITY_IN_KG');
                //     record.push(fishing_quantity_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (fishing_income_criterion !== '') {
                //     var record = [];
                //     record.push('FISH_FARMING_RECORDS.INCOME');
                //     record.push(fishing_income_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (misean_cara_technology_individual_id_criterion !== '') {
                //     var record = [];
                //     record.push('MISEAN_CARA_BENEFICIARIES_NEW.INDIVIDUAL_ID');
                //     record.push(misean_cara_technology_individual_id_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (misean_cara_technology_imprived_seeds_criterion !== '') {
                //     var record = [];
                //     record.push('MISEAN_CARA_BENEFICIARIES_NEW.USED_IMPROVED_SEEDS');
                //     record.push(misean_cara_technology_imprived_seeds_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (misean_cara_technology_underground_water_criterion !== '') {
                //     var record = [];
                //     record.push('MISEAN_CARA_BENEFICIARIES_NEW.USED_UNDERGROUND_WATER');
                //     record.push(misean_cara_technology_underground_water_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (misean_cara_technology_pesticide_criterion !== '') {
                //     var record = [];
                //     record.push('MISEAN_CARA_BENEFICIARIES_NEW.USED_PESTICIDES');
                //     record.push(misean_cara_technology_pesticide_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (misean_cara_technology_farm_implements_criterion !== '') {
                //     var record = [];
                //     record.push('MISEAN_CARA_BENEFICIARIES_NEW.USED_FARM_IMPLEMENTS');
                //     record.push(misean_cara_technology_farm_implements_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (misean_cara_technology_improved_post_harvest_handling_criterion !== '') {
                //     var record = [];
                //     record.push('MISEAN_CARA_BENEFICIARIES_NEW.IMPROVED_POST_HARVEST_HANDLING');
                //     record.push(misean_cara_technology_improved_post_harvest_handling_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (misean_cara_technology_row_planting_criterion !== '') {
                //     var record = [];
                //     record.push('MISEAN_CARA_BENEFICIARIES_NEW.USED_ROW_PLANTING');
                //     record.push(misean_cara_technology_row_planting_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (misean_cara_technology_other_techniques_criterion !== '') {
                //     var record = [];
                //     record.push('MISEAN_CARA_BENEFICIARIES_NEW.OTHER_TECHNIQUES_USED');
                //     record.push(misean_cara_technology_other_techniques_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (marketing_individual_id_criterion !== '') {
                //     var record = [];
                //     record.push('CHANGE_IN_KNOWLEDGE_NEWER.INDIVIDUAL_ID');
                //     record.push(marketing_individual_id_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (marketing_sells_all_vegetables_criterion !== '') {
                //     var record = [];
                //     record.push('CHANGE_IN_KNOWLEDGE_NEWER.SELLS_ALL_VEGETABLES');
                //     record.push(marketing_sells_all_vegetables_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (marketing_vegetable_market_place_criterion !== '') {
                //     var record = [];
                //     record.push('CHANGE_IN_KNOWLEDGE_NEWER.VEGETABLE_MARKET_PLACE_1');
                //     record.push(marketing_vegetable_market_place_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (marketing_sells_all_crops_criterion !== '') {
                //     var record = [];
                //     record.push('CHANGE_IN_KNOWLEDGE_NEWER.SELLS_ALL_CROPS');
                //     record.push(marketing_sells_all_crops_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (marketing_crop_place_criterion !== '') {
                //     var record = [];
                //     record.push('CHANGE_IN_KNOWLEDGE_NEWER.CROP_MARKET_PLACE_1');
                //     record.push(marketing_crop_place_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (challenges_group_id_criterion !== '') {
                //     var record = [];
                //     record.push('PRODUCTION_PROBLEMS.GROUP_NAME');
                //     record.push(challenges_group_id_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (challenges_vegetable_production_problems_criterion !== '') {
                //     var record = [];
                //     record.push('PRODUCTION_PROBLEMS.VEGETABLE_PRODUCTION_PROBLEMS');
                //     record.push(challenges_vegetable_production_problems_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (challenges_vegetable_marketing_problems_criterion !== '') {
                //     var record = [];
                //     record.push('PRODUCTION_PROBLEMS.VEGETABLE_MARKETING_PROBLEMS');
                //     record.push(challenges_vegetable_marketing_problems_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (challenges_crop_production_problems_criterion !== '') {
                //     var record = [];
                //     record.push('PRODUCTION_PROBLEMS.CROP_PRODUCTION_PROBLEMS');
                //     record.push(challenges_crop_production_problems_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (challenges_crop_marketing_problems_criterion !== '') {
                //     var record = [];
                //     record.push('PRODUCTION_PROBLEMS.CROP_MARKETING_PROBLEMS');
                //     record.push(challenges_crop_marketing_problems_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_interviewer_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.INTERVIEWER');
                //     record.push(pilot_studies_interviewer_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_date_of_interview_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.DATE_OF_INTERVIEW');
                //     record.push(pilot_studies_date_of_interview_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_location_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.LOCATION');
                //     record.push(pilot_studies_location_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_respondent_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.RESPONDENT');
                //     record.push(pilot_studies_respondent_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_head_of_household_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.HEAD_OF_THE_HOUSEHOLD');
                //     record.push(pilot_studies_head_of_household_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_females_under_5_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.FEMALES_UNDER_5');
                //     record.push(pilot_studies_females_under_5_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_females_between_6_and_18_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.FEMALES_BETWEEN_6_AND_18');
                //     record.push(pilot_studies_females_between_6_and_18_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_males_under_5_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.MALES_UNDER_5');
                //     record.push(pilot_studies_males_under_5_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_males_between_6_and_18_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.MALES_BETWEEN_6_and_18');
                //     record.push(pilot_studies_males_between_6_and_18_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_males_between_18_and_45_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.MALES_BETWEEN_18_and_45');
                //     record.push(pilot_studies_males_between_18_and_45_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_females_between_18_and_45_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.FEMALES_BETWEEN_18_and_45');
                //     record.push(pilot_studies_females_between_18_and_45_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_length_of_time_involed_in_projects_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.LENGTH_OF_TIME_INVOLVED_IN_PROJECTS');
                //     record.push(pilot_studies_length_of_time_involed_in_projects_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_daily_household_income_now_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.DAILY_HOUSEHOLD_INCOME_NOW');
                //     record.push(pilot_studies_daily_household_income_now_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_daily_household_income_one_year_ago_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.DAILY_HOUSEHOLD_INCOME_ONE_YEAR_AGO');
                //     record.push(pilot_studies_daily_household_income_one_year_ago_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_number_of_sources_of_income_now_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.NUMBER_OF_SOURCES_OF_INCOME_NOW');
                //     record.push(pilot_studies_number_of_sources_of_income_now_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_sources_of_income_now_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.SOURCES_OF_INCOME_NOW');
                //     record.push(pilot_studies_sources_of_income_now_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_number_of_sources_of_income_one_year_ago_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.INCOME_NOW_ADDITIONAL_NOTES');
                //     record.push(pilot_studies_number_of_sources_of_income_one_year_ago_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_income_now_additional_notes_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.NUMBER_OF_SOURCES_OF_INCOME_ONE_YEAR_AGO');
                //     record.push(pilot_studies_income_now_additional_notes_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_sources_of_income_1_year_ago_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.SOURCES_OF_INCOME_1_YEAR_AGO');
                //     record.push(pilot_studies_sources_of_income_1_year_ago_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_income_one_year_ago_additional_notes_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.INCOME_ONE_YEAR_AGO_ADDITIONAL_NOTES');
                //     record.push(pilot_studies_income_one_year_ago_additional_notes_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_increase_in_diversity_of_sources_of_income_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.INCREASE_IN_INCOME');
                //     record.push(pilot_studies_increase_in_diversity_of_sources_of_income_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_medical_expense_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.MEDICAL_EXPENSE');
                //     record.push(pilot_studies_medical_expense_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_education_expense_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.EDUCATION_EXPENSE');
                //     record.push(pilot_studies_education_expense_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_house_expense_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.HOUSE_EXPENSE');
                //     record.push(pilot_studies_house_expense_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_clothes_expense_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.CLOTHES_EXPENSE');
                //     record.push(pilot_studies_clothes_expense_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_food_expense_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.FOOD_EXPENSE');
                //     record.push(pilot_studies_food_expense_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_household_assets_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.HOUSEHOLD_ASSETS');
                //     record.push(pilot_studies_household_assets_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_other_expenses_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.OTHER_EXPENSES');
                //     record.push(pilot_studies_other_expenses_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_increase_in_household_assets_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.INCREASE_IN_DIVERSITY_OF_SOURCES_OF_INCOME');
                //     record.push(pilot_studies_increase_in_household_assets_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_land_increase_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.LAND_INCREASE');
                //     record.push(pilot_studies_land_increase_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_land_size_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.LAND_SIZE');
                //     record.push(pilot_studies_land_size_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_permanent_house_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.PERMANENT_HOUSE');
                //     record.push(pilot_studies_permanent_house_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_semi_permanent_house_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.SEMI_PERMANENT_HOUSE');
                //     record.push(pilot_studies_semi_permanent_house_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_mud_house_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.MUD_HOUSE');
                //     record.push(pilot_studies_mud_house_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_radio_or_tv_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.RADIO_OR_TV');
                //     record.push(pilot_studies_radio_or_tv_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_mobile_phone__criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.MOBILE_PHONE');
                //     record.push(pilot_studies_mobile_phone__criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_automobile_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.AUTOMOTIVE');
                //     record.push(pilot_studies_automobile_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_breakfast_yesterday_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.BREAKFAST_YESTERDAY');
                //     record.push(pilot_studies_breakfast_yesterday_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_snack_for_breakfast_yesterday_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.SNACK_FOR_BREAKFAST_YESTERDAY');
                //     record.push(pilot_studies_snack_for_breakfast_yesterday_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_lunch_yesterday_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.LUNCH_YESTERDAY');
                //     record.push(pilot_studies_lunch_yesterday_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_snack_for_lunch_yesterday_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.SNACK_FOR_LUNCH_YESTERDAY');
                //     record.push(pilot_studies_snack_for_lunch_yesterday_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_dinner_yesterday_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.DINNER_YESTERDAY');
                //     record.push(pilot_studies_dinner_yesterday_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_snack_for_dinner_yesterday_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.SNACK_FOR_DINNER_YESTERDAY');
                //     record.push(pilot_studies_snack_for_dinner_yesterday_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_breakfast_1_year_ago_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.BREAKFAST_1_YEAR_AGO');
                //     record.push(pilot_studies_breakfast_1_year_ago_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_snack_for_breakfast_1_year_ago_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.SNACK_FOR_BREAKFAST_1_YEAR_AGO');
                //     record.push(pilot_studies_snack_for_breakfast_1_year_ago_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_lunch_1_year_ago_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.LUNCH_1_YEAR_AGO');
                //     record.push(pilot_studies_lunch_1_year_ago_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_snack_for_luch_1_year_ago_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.SNACK_FOR_LUNCH_1_YEAR_AGO');
                //     record.push(pilot_studies_snack_for_luch_1_year_ago_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_dinner_1_year_ago_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.DINNER_1_YEAR_AGO');
                //     record.push(pilot_studies_dinner_1_year_ago_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_snack_for_dinner_1_year_ago_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.SNACK_FOR_DINNER_1_YEAR_AGO');
                //     record.push(pilot_studies_snack_for_dinner_1_year_ago_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_cereals_yesterday_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.CEREALS_YESTERDAY');
                //     record.push(pilot_studies_cereals_yesterday_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_cereals_1_year_ago_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.CEREALS_1_YEAR_AGO');
                //     record.push(pilot_studies_cereals_1_year_ago_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_vitamin_a_vegetable_yesterday_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.VITAMIN_A_VEGETABLE_YESTERDAY');
                //     record.push(pilot_studies_vitamin_a_vegetable_yesterday_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_vitamin_a_vegetable_1_year_ago_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.VITAMIN_A_VEGETABLE_1_YEAR_AGO');
                //     record.push(pilot_studies_vitamin_a_vegetable_1_year_ago_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_white_tubers_yesterday_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.WHITE_TUBERS_YESTERDAY');
                //     record.push(pilot_studies_white_tubers_yesterday_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_white_tubers_1_year_ago_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.WHITE_TUBERS_1_YEAR_AGO');
                //     record.push(pilot_studies_white_tubers_1_year_ago_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_dark_green_leafy_vegetables_yesterday_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.DARK_GREEN_LEAFY_VEGETABLES_YESTERDAY');
                //     record.push(pilot_studies_dark_green_leafy_vegetables_yesterday_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_dark_green_leafy_vegetables_1_year_ago_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.DARK_GREEN_LEAFY_VEGETABLES_1_YEAR_AGO');
                //     record.push(pilot_studies_dark_green_leafy_vegetables_1_year_ago_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_other_vegetables_yesterday_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.OTHER_VEGETABLES_YESTERDAY');
                //     record.push(pilot_studies_other_vegetables_yesterday_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_other_vegetables_1_year_ago_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.OTHER_VEGETABLES_1_YEAR_AGO');
                //     record.push(pilot_studies_other_vegetables_1_year_ago_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_vitamin_a_fruits_yesterday_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.VITAMIN_A_FRUITS_YESTERDAY');
                //     record.push(pilot_studies_vitamin_a_fruits_yesterday_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_vitamin_a_fruits_1_year_ago_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.VITAMIN_A_FRUITS_1_YEAR_AGO');
                //     record.push(pilot_studies_vitamin_a_fruits_1_year_ago_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_other_fruits_yesterday_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.OTHER_FRUITS_YESTERDAY');
                //     record.push(pilot_studies_other_fruits_yesterday_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_other_fruits_year_ago_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.OTHER_FRUITS_1_YEAR_AGO');
                //     record.push(pilot_studies_other_fruits_year_ago_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_organ_meat_yesterday_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.ORGAN_MEAT_YESTERDAY');
                //     record.push(pilot_studies_organ_meat_yesterday_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_organ_meat_1_year_ago_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.ORGAN_MEAT_1_YEAR_AGO');
                //     record.push(pilot_studies_organ_meat_1_year_ago_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_flesh_meats_yesterday_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.FLESH_MEATS_YESTERDAY');
                //     record.push(pilot_studies_flesh_meats_yesterday_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_flesh_meats_1_year_ago_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.FLESH_MEATS_1_YEAR_AGO');
                //     record.push(pilot_studies_flesh_meats_1_year_ago_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_eggs_yesterday_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.EGGS_YESTERDAY');
                //     record.push(pilot_studies_eggs_yesterday_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_eggs_1_year_ago_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.EGGS_1_YEAR_AGO');
                //     record.push(pilot_studies_eggs_1_year_ago_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_fish_yesterday_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.FISH_YESTERDAY');
                //     record.push(pilot_studies_fish_yesterday_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_fish_1_year_ago_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.FISH_1_YEAR_AGO');
                //     record.push(pilot_studies_fish_1_year_ago_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_legumes_yesterday_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.LEGUMES_YESTERDAY');
                //     record.push(pilot_studies_legumes_yesterday_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_legumes_1_year_ago_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.LEGUMES_1_YEAR_AGO');
                //     record.push(pilot_studies_legumes_1_year_ago_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_milk_yesterday_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.MILK_YESTERDAY');
                //     record.push(pilot_studies_milk_yesterday_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_milk_1_year_ago_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.MILK_1_YEAR_AGO');
                //     record.push(pilot_studies_milk_1_year_ago_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_oils_and_fats_yesterday_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.OILS_AND_FATS_YESTERDAY');
                //     record.push(pilot_studies_oils_and_fats_yesterday_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_oils_and_fats_1_year_ago_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.OILS_AND_FATS_1_YEAR_AGO');
                //     record.push(pilot_studies_oils_and_fats_1_year_ago_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_red_palm_yesterday_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.RED_PALM_YESTERDAY');
                //     record.push(pilot_studies_red_palm_yesterday_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_1_year_ago_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.RED_PALM_1_YEAR_AGO');
                //     record.push(pilot_studies_1_year_ago_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_sweets_yesterday_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.SWEETS_YESTERDAY');
                //     record.push(pilot_studies_sweets_yesterday_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_sweets_1_year_ago_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.SWEETS_1_YEAR_AGO');
                //     record.push(pilot_studies_sweets_1_year_ago_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_spices_yesterday_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.SPICES_YESTERDAY');
                //     record.push(pilot_studies_spices_yesterday_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_spices_1_year_ago_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.SPICES_1_YEAR_AGO');
                //     record.push(pilot_studies_spices_1_year_ago_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_dish_rack_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.DISH_RACK');
                //     record.push(pilot_studies_dish_rack_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_compost_pit_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.COMPOST_PIT');
                //     record.push(pilot_studies_compost_pit_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_cloth_drying_line_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.CLOTH_DRYING_LINE');
                //     record.push(pilot_studies_cloth_drying_line_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_latrine_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.LATRINE');
                //     record.push(pilot_studies_latrine_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_tippy_tap_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.TIPPY_TAP');
                //     record.push(pilot_studies_tippy_tap_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_boils_water_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.BOILS_WATER');
                //     record.push(pilot_studies_boils_water_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_improved_living_standard_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.IMPROVED_LIVING_STANDARD');
                //     record.push(pilot_studies_improved_living_standard_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_significant_story_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.SIGNIFICANT_STORY');
                //     record.push(pilot_studies_significant_story_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_reason_for_low_living_standard_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.REASON_FOR_LOW_LIVING_STANDARD');
                //     record.push(pilot_studies_reason_for_low_living_standard_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_improved_diet_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.IMPROVED_DIET');
                //     record.push(pilot_studies_improved_diet_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_improved_knowledge_of_nutrition_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.IMPROVED_KNOWLEDGE_OF_NUTRITION');
                //     record.push(pilot_studies_improved_knowledge_of_nutrition_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_increased_household_asset_base_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.INCREASED_HOUSEHOLD_ASSET_BASE');
                //     record.push(pilot_studies_increased_household_asset_base_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_reduced_post_harvest_loss_due_to_improved_storage_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.REDUCED_POST_HARVEST_LOSS_DUE_TO_IMPROVED_STORAGE');
                //     record.push(pilot_studies_reduced_post_harvest_loss_due_to_improved_storage_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_conclusion_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.CONCLUSION');
                //     record.push(pilot_studies_conclusion_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (pilot_studies_recommendation_criterion !== '') {
                //     var record = [];
                //     record.push('PILOT_STUDIES.RECOMMENDATION');
                //     record.push(pilot_studies_recommendation_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_name_of_respondent_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.NAME_OF_RESPONDENT');
                //     record.push(porticus_name_of_respondent_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_age_of_respondent_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.AGE');
                //     record.push(porticus_age_of_respondent_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_village_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.VILLAGE');
                //     record.push(porticus_village_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_gender_of_resspondent_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.GENDER');
                //     record.push(porticus_gender_of_resspondent_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_name_of_vulnerable_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.NAME_OF_VULNERABLE');
                //     record.push(porticus_name_of_vulnerable_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_gender_of_vulnerable_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.GENDER_OF_VULNERABLE');
                //     record.push(porticus_gender_of_vulnerable_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_age_of_vulnerable_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.AGE_OF_VULNERABLE');
                //     record.push(porticus_age_of_vulnerable_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_category_of_disability_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.CATEGORY_OF_DISABILITY');
                //     record.push(porticus_category_of_disability_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_name_of_disability_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.NAME_OF_DISABILITY');
                //     record.push(porticus_name_of_disability_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_marital_status_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.MARITAL_STATUS');
                //     record.push(porticus_marital_status_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_level_of_education_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.LEVEL_OF_EDUCATION');
                //     record.push(porticus_level_of_education_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_occupation_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.OCCUPATION');
                //     record.push(porticus_occupation_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_household_monthly_income_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.HOUSEHOLD_MONTHLY_INCOME');
                //     record.push(porticus_household_monthly_income_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_definition_of_disability_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.DEFINITION_OF_DISABILITY');
                //     record.push(porticus_definition_of_disability_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_list_of_disabilities_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.LIST_OF_DISABILITIES_KNOWN');
                //     record.push(porticus_list_of_disabilities_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_causes_of_disabilities_known_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.CAUSES_OF_DISABILITIES_KNOWN');
                //     record.push(porticus_causes_of_disabilities_known_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_ways_of_prevention_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.WAYS_OF_PREVENTION');
                //     record.push(porticus_ways_of_prevention_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_feeling_of_having_a_vulnerable_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.FEELING_OF_HAVING_A_VULNERABLE');
                //     record.push(porticus_feeling_of_having_a_vulnerable_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_feeling_of_the_community_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.FEELING_OF_THE_COMMUNITY');
                //     record.push(porticus_feeling_of_the_community_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_vulnerable_supported_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.VULNERABLE_SUPPORTED');
                //     record.push(porticus_vulnerable_supported_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_support_given_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.SUPPORT_GIVEN');
                //     record.push(porticus_support_given_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_why_not_supported_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.WHY_NOT_SUPPORTED');
                //     record.push(porticus_why_not_supported_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_rehabilitation_received_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.REHABILITATION_RECEIVED');
                //     record.push(porticus_rehabilitation_received_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_place_of_rehabilitation_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.PLACE_OF_REHABILITATION');
                //     record.push(porticus_place_of_rehabilitation_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_kind_of_treatment_received_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.KIND_OF_TREATMENT_RECEIVED');
                //     record.push(porticus_kind_of_treatment_received_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_cost_of_treatment_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.COST_OF_TREATMENT');
                //     record.push(porticus_cost_of_treatment_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_duration_of_the_treatment_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.DURATION_OF_THE_TREATMENT');
                //     record.push(porticus_duration_of_the_treatment_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_frequency_of_attendance_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.FREQUENCY_OF_ATTENDANCE');
                //     record.push(porticus_frequency_of_attendance_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_regular_attendance_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.REGULAR_ATTENDANCE');
                //     record.push(porticus_regular_attendance_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_reason_for_not_attending_daily_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.REASON_FOR_NOT_ATTENDING_REGULARLY');
                //     record.push(porticus_reason_for_not_attending_daily_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_quality_of_service_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.QUALITY_OF_SERVICE');
                //     record.push(porticus_quality_of_service_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_training_recieved_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.TRAINING_RECEIVED');
                //     record.push(porticus_training_recieved_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_name_of_trainer_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.NAME_OF_TRAINER');
                //     record.push(porticus_name_of_trainer_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_training_was_about_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.TRAINING_WAS_ABOUT');
                //     record.push(porticus_training_was_about_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_help_of_the_training_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.HELP_OF_THE_TRAINING');
                //     record.push(porticus_help_of_the_training_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_challenges_faced_in_caring__criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.CHALLENGES_FACED_IN_CARING');
                //     record.push(porticus_challenges_faced_in_caring__criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_strengths_of_the_vulnerable_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.STRENGTHS_OF_VULNERABLE');
                //     record.push(porticus_strengths_of_the_vulnerable_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_weaknesses_of_the_vulnerable_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.WEAKNESSES_OF_VULNERABLE');
                //     record.push(porticus_weaknesses_of_the_vulnerable_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_hope_for_the_vulnerable_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.HOPE_FOR_THE_VULNERABLE');
                //     record.push(porticus_hope_for_the_vulnerable_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (porticus_organization_help_needed_criterion !== '') {
                //     var record = [];
                //     record.push('PORTICUS_BASELINE_ASSESSMENTS.ORGANIZATION_HELP_NEEDED');
                //     record.push(porticus_organization_help_needed_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (hygiene_membership_id_criterion !== '') {
                //     var record = [];
                //     record.push('HYGIENE_AND_NUTRITION_CHECKLIST.MEMBERSHIP_ID');
                //     record.push(hygiene_membership_id_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (hygiene_sex_criterion !== '') {
                //     var record = [];
                //     record.push('HYGIENE_AND_NUTRITION_CHECKLIST.SEX');
                //     record.push(hygiene_sex_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (hygiene_group_name_criterion !== '') {
                //     var record = [];
                //     record.push('HYGIENE_AND_NUTRITION_CHECKLIST.GROUP_NAME');
                //     record.push(hygiene_group_name_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (hygiene_district_criterion !== '') {
                //     var record = [];
                //     record.push('HYGIENE_AND_NUTRITION_CHECKLIST.DISTRICT');
                //     record.push(hygiene_district_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (hygiene_subcounty_criterion !== '') {
                //     var record = [];
                //     record.push('HYGIENE_AND_NUTRITION_CHECKLIST.SUBCOUNTY');
                //     record.push(hygiene_subcounty_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (hygiene_parish_criterion !== '') {
                //     var record = [];
                //     record.push('HYGIENE_AND_NUTRITION_CHECKLIST.PARISH');
                //     record.push(hygiene_parish_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (hygiene_pit_latrine_criterion !== '') {
                //     var record = [];
                //     record.push('HYGIENE_AND_NUTRITION_CHECKLIST.PIT_LATRINE');
                //     record.push(hygiene_pit_latrine_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (hygiene_rubbish_pit_criterion !== '') {
                //     var record = [];
                //     record.push('HYGIENE_AND_NUTRITION_CHECKLIST.RUBBISH_PIT');
                //     record.push(hygiene_rubbish_pit_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (hygiene_bathing_shelter_criterion !== '') {
                //     var record = [];
                //     record.push('HYGIENE_AND_NUTRITION_CHECKLIST.BATHING_SHELTER');
                //     record.push(hygiene_bathing_shelter_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (hygiene_tippy_tap_criterion !== '') {
                //     var record = [];
                //     record.push('HYGIENE_AND_NUTRITION_CHECKLIST.TIPPY_TAP');
                //     record.push(hygiene_tippy_tap_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (hygiene_plate_drying_rack_criterion !== '') {
                //     var record = [];
                //     record.push('HYGIENE_AND_NUTRITION_CHECKLIST.PLATE_DRYING_RACK');
                //     record.push(hygiene_plate_drying_rack_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (hygiene_kitchen_garden_criterion !== '') {
                //     var record = [];
                //     record.push('HYGIENE_AND_NUTRITION_CHECKLIST.KITCHEN_GARDEN');
                //     record.push(hygiene_kitchen_garden_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (hygiene_fruit_trees_criterion !== '') {
                //     var record = [];
                //     record.push('HYGIENE_AND_NUTRITION_CHECKLIST.FRUIT_TREES');
                //     record.push(hygiene_fruit_trees_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (hygiene_nrm_practices_criterion !== '') {
                //     var record = [];
                //     record.push('HYGIENE_AND_NUTRITION_CHECKLIST.NRM_PRACTICES');
                //     record.push(hygiene_nrm_practices_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (hygiene_maize_crib_criterion !== '') {
                //     var record = [];
                //     record.push('HYGIENE_AND_NUTRITION_CHECKLIST.MAIZE_CRIB');
                //     record.push(hygiene_maize_crib_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (hygiene_drying_rack_criterion !== '') {
                //     var record = [];
                //     record.push('HYGIENE_AND_NUTRITION_CHECKLIST.DRYING_RACK');
                //     record.push(hygiene_drying_rack_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (hygiene_tapaulin_criterion !== '') {
                //     var record = [];
                //     record.push('HYGIENE_AND_NUTRITION_CHECKLIST.TAPAULIN');
                //     record.push(hygiene_tapaulin_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (hygiene_granary_criterion !== '') {
                //     var record = [];
                //     record.push('HYGIENE_AND_NUTRITION_CHECKLIST.GRANARY');
                //     record.push(hygiene_granary_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (hygiene_papyrus_mat_criterion !== '') {
                //     var record = [];
                //     record.push('HYGIENE_AND_NUTRITION_CHECKLIST.PAPYRUS_MAT');
                //     record.push(hygiene_papyrus_mat_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (hygiene_earth_floor_criterion !== '') {
                //     var record = [];
                //     record.push('HYGIENE_AND_NUTRITION_CHECKLIST.EARTH_FLOOR');
                //     record.push(hygiene_earth_floor_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (hygiene_date_checked_criterion !== '') {
                //     var record = [];
                //     record.push('HYGIENE_AND_NUTRITION_CHECKLIST.DATE_CHECKED');
                //     record.push(hygiene_date_checked_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (hygiene_staff_criterion !== '') {
                //     var record = [];
                //     record.push('HYGIENE_AND_NUTRITION_CHECKLIST.STAFF');
                //     record.push(hygiene_staff_criterion);
                //
                //     conditions.push(record);
                //
                // }
                // if (hygiene_date_recorded_criterion !== '') {
                //     var record = [];
                //     record.push('HYGIENE_AND_NUTRITION_CHECKLIST.DATE_RECORDED');
                //     record.push(hygiene_parish_criterion);
                //
                //     conditions.push(record);
                //
                // }

                $.ajax({
                    url: "<?php echo base_url('Query/query/run_query_and_show_results');?>",
                    method: "POST",
                    data: {tables: query_tables, fields: required_fields, joints: joins, conditions: conditions},
                    success: function (data) {
                        alert(data);

//                            //Hide the criteria
//                            document.getElementById('query-criteria').style.display = 'none';
//
//                            //Change the content of the query results
//                            document.getElementById('preview_query_results').innerHTML = data;
//
//                            //Show the query results
//                            document.getElementById('query-results').style.display = 'block';
//
//                            //hide the run query button
//                            document.getElementById('start-query-box').style.display = 'none';
//
//                            //Show the update query button
//                            document.getElementById('update-query-box').style.display = 'block';
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
