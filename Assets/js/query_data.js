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
    var fishing_individual_criterion = document.getElementById('fishing_individual_criterion').value;
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
