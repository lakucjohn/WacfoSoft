<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

#Anonynous Urls
$route['default_controller'] = 'content';
$route['404_override'] = '';
//$route['translate_uri_dashes'] = FALSE;

#Authentication Urls
$route['auth/login'] = 'Authentication/user';
$route['auth/logout'] = 'Authentication/logout';
$route['user-details/edit/(:any)'] = 'Authentication/user/check_user_login';
$route['user-details/change/(:any)'] = 'Authentication/user/change_user_login';

# Dashboard Urls
$route['dashboard'] = 'Dashboard/dashboard';

# People Urls
//$route['groupings'];
$route['membership'] = 'People/Membership/membership';
$route['membership/register-new-member'] = 'People/Membership/membership/create';
$route['member-support/create'] = 'People/Membership/membership/create_support';
$route['member-details/(:any)'] = 'People/Membership/membership/details';
$route['member-details/edit/(:any)'] = 'People/Membership/membership/edit';
$route['member-info/generate-pdf/(:any)'] = 'People/Membership/membership/generate_detailed_pdf';

$route['groupings'] = 'People/Groupings/groupings';
$route['groupings/register-new-livelihood-group'] = 'People/Groupings/groupings/create';
$route['group-details/(:any)'] = 'People/Groupings/groupings/details';
$route['group-details/edit/(:any)'] = 'People/Groupings/groupings/edit';
$route['group-support/create/(:any)'] = 'People/Groupings/groupings/create_support';
$route['group-support/create'] = 'People/Groupings/groupings/create_support';
$route['group-info/generate-pdf/(:any)'] = 'People/Groupings/groupings/generate_pdf_document';

$route['children%20list'] = 'People/Children/children';
$route['children%20list/register-new-child'] = 'People/Children/children/create';
$route['child-details/(:any)'] = 'People/Children/children/details';
$route['child-details/edit/(:any)'] = 'People/Children/children/edit';
$route['child-info/generate-pdf/(:any)'] = 'People/Children/children/generate_pdf_document';

$route['staff'] = 'People/Staff/staff';
$route['staff/register-new'] = 'People/Staff/staff/create';
$route['staff-details/(:any)'] = 'People/Staff/staff/details';
$route['staff-details/edit/(:any)'] = 'People/Staff/staff/edit';
$route['staff-info/generate-pdf/(:any)'] = 'People/Staff/staff/generate_pdf_document';

#Health Urls
$route['visitations'] = 'People/Other/Visits/visit';
$route['visitations/record-a-new-visit'] = 'People/Other/Visits/visit/create';
$route['visitation-details/(:any)'] = 'People/Other/Visits/visit/details';
$route['visitation-details/edit/(:any)'] = 'People/Other/Visits/visit/edit';
$route['visitation-info/generate-pdf/(:any)'] = 'People/Other/Visits/visit/generate_pdf_document';

$route['assessments/form-1'] = 'People/Other/Assessments/form_1';
$route['assessments/form-1/record-a-new-assessment'] = 'People/Other/Assessments/form_1/create';
$route['assessments/form-1-details/(:any)'] = 'People/Other/Assessments/form_1/details';
$route['assessments/form-1-details/edit/(:any)'] = 'People/Other/Assessments/form_1/edit';
$route['assessments/form-1/generate-pdf/(:any)'] = 'People/Other/Assessments/form_1/generate_pdf_document';

$route['assessments/form-2'] = 'People/Other/Assessments/form_2';
$route['assessments/form-2/record-a-new-assessment'] = 'People/Other/Assessments/form_2/create';
$route['assessments/form-2-details/(:any)'] = 'People/Other/Assessments/form_2/details';
$route['assessments/form-2-details/edit/(:any)'] = 'People/Other/Assessments/form_2/edit';
$route['assessments/form-2/generate-pdf/(:any)'] = 'People/Other/Assessments/form_2/generate_pdf_document';

#Training Urls
$route['trainings'] = 'Training/training';
$route['trainings/new-training'] = 'Training/training/create';
$route['training-details/(:any)'] = 'Training/training/details';
$route['training-details/edit/(:any)'] = 'Training/training/edit';
$route['training-info/generate-pdf/(:any)'] = 'Training/training/generate_pdf_document';
$route['training-info/generate-attendance-sheet-pdf/(:any)'] = 'Training/training/generate_attendance_sheet_pdf';
$route['training-attendants/(:any)/record-member-list'] = 'Training/training/register_member_attendants';
$route['training-attendants/(:any)/record-new-beneficiary-list'] = 'Training/training/register_beneficiaries';
$route['training-outcome/(:any)/record-new-outcome'] = 'Training/training/register_training_outcome';

$route['courses%20and%20topics'] = 'Training/courses';
$route['courses%20and%20topics/new-course'] = 'Training/courses/create';
$route['course-details/(:any)'] = 'Training/courses/details';
$route['course-details/edit/(:any)'] = 'Training/courses/edit';
$route['course-info/generate-pdf/(:any)'] = 'Training/courses/generate_pdf_document';

#Production Urls
//$route['production'];
$route['production/crop%20production'] = 'Production/Crop/cropProduction';
$route['production/crop%20production-details/(:any)'] = 'Production/Crop/cropProduction/details';
$route['production/crop%20production-details/edit/(:any)'] = 'Production/Crop/cropProduction/edit';
$route['production/crop%20production-info/generate-pdf/(:any)'] = 'Production/Crop/cropProduction/generate_detailed_pdf';

$route['production/fish%20farming'] = 'Production/FishFarming/fishFarming';
$route['production/fish%20farming-details/(:any)'] = 'Production/FishFarming/fishFarming/details';
$route['production/fish%20farming-details/edit/(:any)'] = 'Production/FishFarming/fishFarming/edit';
$route['production/fish%20farming-info/generate-pdf/(:any)'] = 'Production/FishFarming/fishFarming/generate_detailed_pdf';

$route['production/misean%20cara%20baseline%20surveys'] = 'Production/BaselineSurveys/miseanCaraBaselineSurvey';
$route['production/misean%20cara%20baseline%20surveys/new%20misean%20cara%20baseline%20survey%20economic%20%20security'] = 'Production/BaselineSurveys/miseanCaraBaselineSurvey/create';
$route['production/misean%20cara%20baseline%20survey-details/(:any)'] = 'Production/BaselineSurveys/miseanCaraBaselineSurvey/details';
$route['production/misean%20cara%20baseline%20survey-details/edit/(:any)'] = 'Production/BaselineSurveys/miseanCaraBaselineSurvey/edit';
$route['production/misean%20cara%20baseline%20survey-info/generate-pdf/(:any)'] = 'Production/BaselineSurveys/miseanCaraBaselineSurvey/generate_pdf_document';

$route['production/adoption%20to%20technology'] = 'Production/TechnologyAdoption/adoptionToTechnology';
$route['production/adoption%20to%20technology-details/(:any)'] = 'Production/TechnologyAdoption/adoptionToTechnology/details';
$route['production/adoption%20to%20technology-details/edit/(:any)'] = 'Production/TechnologyAdoption/adoptionToTechnology/edit';
$route['production/adoption%20to%20technology-info/generate-pdf/(:any)'] = 'Production/TechnologyAdoption/adoptionToTechnology/generate_detailed_pdf';

$route['production/challenges'] = 'Production/Challenges/challenge';
$route['production/challenge-details/(:any)'] = 'Production/Challenges/challenge/details';
$route['production/challenge-details/edit/(:any)'] = 'Production/Challenges/challenge/edit';
$route['production/challenge-info/generate-pdf/(:any)'] = 'Production/Challenges/challenge/generate_pdf_document';

$route['production/marketing'] = 'Production/Marketing/marketing';
$route['production/marketing-details/(:any)'] = 'Production/Marketing/marketing/details';
$route['production/marketing-details/edit/(:any)'] = 'Production/Marketing/marketing/edit';
$route['production/marketing-info/generate-pdf/(:any)'] = 'Production/Marketing/marketing/generate_pdf_document';

$route['production/increase'] = 'Production/ProductionIncrease/productionIncrease';
$route['production/increase/edit/(:any)'] = 'Production/ProductionIncrease/productionIncrease/edit';
$route['production/increase-details/(:any)'] = 'Production/ProductionIncrease/productionIncrease/details';
$route['production/increase-details/generate-pdf/(:any)'] = 'Production/ProductionIncrease/productionIncrease/generate_pdf_document';

# Monitoring Urls
$route['monitoring'] = 'Monitoring/monitoring';
$route['monitoring-details/(:any)'] = 'Monitoring/monitoring/details';
$route['monitoring/new-field-support-visit'] = 'Monitoring/monitoring/create_field_support_visit';
$route['monitoring/new-group-savings-tracking'] = 'Monitoring/monitoring/create_group_savings_tracking_record';
$route['monitoring-details/edit/(:any)'] = 'Monitoring/monitoring/edit';
$route['monitoring-info/generate-detailed-pdf/(:any)'] = 'Monitoring/monitoring/generate_detailed_pdf';
$route['monitoring-info/generate-pdf/(:any)'] = 'Monitoring/monitoring/generate_pdf_document';

#Miscellaneous Urls
$route['miscellaneous%20baseline%20surveys'] = 'Miscellaneous/BaselineSurveys/baselineSurveys';
$route['miscellaneous%20baseline%20survey-details/(:any)'] = 'Miscellaneous/BaselineSurveys/baselineSurveys/details';
$route['miscellaneous%20baseline%20survey-details/edit/(:any)'] = 'Miscellaneous/BaselineSurveys/baselineSurveys/edit';
$route['miscellaneous%20baseline%20survey/new_assessment'] = 'Miscellaneous/BaselineSurveys/baselineSurveys/create';
$route['miscellaneous%20baseline%20survey-info/generate-pdf/(:any)'] = 'Miscellaneous/BaselineSurveys/baselineSurveys/generate_pdf_document/';

$route['miscellaneous%20pilot%20studies'] = 'Miscellaneous/PilotStudies/pilotStudies';
$route['miscellaneous%20pilot%20study-details/(:any)'] = 'Miscellaneous/PilotStudies/pilotStudies/details';
$route['miscellaneous%20pilot%20study-details/edit/(:any)'] = 'Miscellaneous/PilotStudies/pilotStudies/edit/';
$route['miscellaneous%20pilot%20studies/new_record'] = 'Miscellaneous/PilotStudies/pilotStudies/create/';
$route['miscellaneous%20pilot%20study-info/generate-pdf/(:any)'] = 'Miscellaneous/PilotStudies/pilotStudies/generate_pdf_document/';
$route['miscellaneous%20pilot%20studies'] = 'Miscellaneous/PilotStudies/pilotStudies';

$route['miscellaneous%20hygiene%20and%20nutrition'] = 'Miscellaneous/HygieneAndNutrition/hygieneAndNutrition';
$route['miscellaneous%20hygiene%20and%20nutrition/new-recording'] = 'Miscellaneous/HygieneAndNutrition/hygieneAndNutrition/create';
$route['miscellaneous%20hygiene%20and%20nutrition-details/(:any)'] = 'Miscellaneous/HygieneAndNutrition/hygieneAndNutrition/details';
$route['miscellaneous%20hygiene%20and%20nutrition-details/edit/(:any)'] = 'Miscellaneous/HygieneAndNutrition/hygieneAndNutrition/edit/';
$route['miscellaneous%20hygiene%20and%20nutrition-info/generate-pdf/(:any)'] = 'Miscellaneous/HygieneAndNutrition/hygieneAndNutrition/generate_pdf_document/';

#Back up and restore urls
$route['backup%20and%20restore/backup'] = 'BackupAndRestore/Backup/backItup';
$route['backup%20and%20restore/restore'] = 'BackupAndRestore/Restore/restore';

#Settings Urls
$route['settings'] = 'Settings/Welcome/settings';
$route['settings/new_disability'] = 'Settings/Disabilities/disability/create';
$route['settings/new_livelihood_category'] = 'Settings//Livelihood/livelihood/create';
$route['settings/new_county'] = 'Settings/Location/county/create';
$route['settings/new_subcounty'] = 'Settings/Location/subcounty/create';
$route['settings/new_parish'] = 'Settings/Location/parish/create';
$route['settings/new_village'] = 'Settings/Location/village/create';
$route['settings/new_department'] = 'Settings/Department/department/create';

#Urls for querying data
$route['search'] = 'Query/query';
