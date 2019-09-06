<head>
    <style>
        .message_danger {
            color: red;
        }
    </style>
</head>
<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 3/31/19
 * Time: 10:44 PM
 */

$total_search_results = 0;

if (isset($group_search)) {
    $total_search_results += $group_search->num_rows();
}

if (isset($membership_search)) {
    $total_search_results += $membership_search->num_rows();
}

if (isset($children_search)) {
    $total_search_results += $children_search->num_rows();
}

if (isset($staff_search)) {
    $total_search_results += $staff_search->num_rows();
}

//if(isset($department_search)){
//    $total_search_results += $department_search->num_rows();
//}

if (isset($livelihood_survey_search)) {
    $total_search_results += $livelihood_survey_search->num_rows();
}

if (isset($porticus_search)) {
    $total_search_results += $porticus_search->num_rows();
}

if (isset($production_search)) {
    $total_search_results += $production_search->num_rows();
}

if (isset($challenges_search)) {
    $total_search_results += $challenges_search->num_rows();
}

if (isset($monitoring_search)) {
    $total_search_results += $monitoring_search->num_rows();
}

//if(isset($field_support_visits_search)){
//    $total_search_results += $field_support_visits_search->num_rows();
//}
//
//if(isset($savings_tracking_visits_search)){
//    $total_search_results += $savings_tracking_visits_search->num_rows();
//}

if (isset($hygiene_and_nutrition_checklist_search)) {
    $total_search_results += $hygiene_and_nutrition_checklist_search->num_rows();
}

if (isset($assessment_1_records_search)) {
    $total_search_results += $assessment_1_records_search->num_rows();
}

if (isset($assessment_2_records_search)) {
    $total_search_results += $assessment_2_records_search->num_rows();
}

if (isset($visit_records_search)) {
    $total_search_results += $visit_records_search->num_rows();
}

if (isset($marketing_places_search)) {
    $total_search_results += $marketing_places_search->num_rows();
}

if (isset($courses_search)) {
    $total_search_results += $courses_search->num_rows();
}

//if(isset($topics_search)){
//    $total_search_results += $topics_search->num_rows();
//}

?>

<h3>Query Results Data From WacfoSoft</h3>
<hr>

<div class="card w-100" style="margin-top: 0.2rem;">
    <div class="card-header bg-light">Search Results</div>
    <?php
    if ($total_search_results != 0) {
        ?>


        <div class="row">
            <div class="col-md-12" style="padding-left: 20%; margin-top: 2rem; margin-bottom: 1rem;">
                <?php
                echo $total_search_results . ' Results Found';
                ?>
            </div>
        </div>
        <hr>
        <ul class="nav nav-tabs nav-pills" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#all_search_results" role="tab" data-toggle="tab">All Results</a>
            </li>

            <?php

            if ($group_search->num_rows() != 0) {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="#group_search_results" role="tab" data-toggle="tab">Livelihood Groups</a>
                </li>
                <?php
            }

            if ($membership_search->num_rows() != 0) {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="#membership_search_results" role="tab" data-toggle="tab">Membership</a>
                </li>
                <?php
            }

            if ($children_search->num_rows() != 0) {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="#children_search_results" role="tab" data-toggle="tab">Children</a>
                </li>
                <?php
            }

            if ($staff_search->num_rows() != 0) {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="#staff_search_results" role="tab" data-toggle="tab">Staff</a>
                </li>
                <?php
            }

            //                    if ($department_search->num_rows() != 0) {
            //                        ?>
            <!--                        <li class="nav-item">-->
            <!--                            <a class="nav-link" href="#department_search_results" role="tab" data-toggle="tab">Departments</a>-->
            <!--                        </li>-->
            <!--                        --><?php
            //                    }

            if ($livelihood_survey_search->num_rows() != 0) {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="#livelihood_survey_search_results" role="tab" data-toggle="tab">Livelihood
                        Surveys</a>
                </li>
                <?php
            }

            if ($porticus_search->num_rows() != 0) {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="#porticus_search_results" role="tab" data-toggle="tab">Porticus</a>
                </li>
                <?php
            }

            if ($production_search->num_rows() != 0) {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="#production_search_results" role="tab" data-toggle="tab">Production</a>
                </li>
                <?php
            }

            if ($challenges_search->num_rows() != 0) {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="#challenges_search_results" role="tab" data-toggle="tab">Production
                        Challenges</a>
                </li>
                <?php
            }

            if ($monitoring_search->num_rows() != 0) {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="#monitoring_search_results" role="tab" data-toggle="tab">Monitoring</a>
                </li>
                <?php
            }

            //                    if ($field_support_visits_search->num_rows() != 0) {
            //                        ?>
            <!--                        <li class="nav-item">-->
            <!--                            <a class="nav-link" href="#field_support_visits_search_results" role="tab" data-toggle="tab">Field Support</a>-->
            <!--                        </li>-->
            <!--                        --><?php
            //                    }
            //
            //                    if ($savings_tracking_visits_search->num_rows() != 0) {
            //                        ?>
            <!--                        <li class="nav-item">-->
            <!--                            <a class="nav-link" href="#savings_tracking_visits_search_results" role="tab" data-toggle="tab">Savings Tracking</a>-->
            <!--                        </li>-->
            <!--                        --><?php
            //                    }

            if ($hygiene_and_nutrition_checklist_search->num_rows() != 0) {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="#hygiene_and_nutrition_checklist_search_results" role="tab"
                       data-toggle="tab">Hygiene</a>
                </li>
                <?php
            }

            if ($assessment_1_records_search->num_rows() != 0) {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="#assessment_1_records_search_results" role="tab" data-toggle="tab">Assessment
                        1</a>
                </li>
                <?php
            }

            if ($assessment_2_records_search->num_rows() != 0) {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="#assessment_2_records_search_results" role="tab" data-toggle="tab">Assessment
                        2</a>
                </li>
                <?php
            }

            if ($visit_records_search->num_rows() != 0) {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="#visit_records_search_results" role="tab" data-toggle="tab">Visit
                        Records</a>
                </li>
                <?php
            }

            if ($marketing_places_search->num_rows() != 0) {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="#marketing_places_search_results" role="tab" data-toggle="tab">Marketing
                        Places</a>
                </li>
                <?php
            }

            if ($courses_search->num_rows() != 0) {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="#courses_search_results" role="tab" data-toggle="tab">Courses</a>
                </li>
                <?php
            }

            //                    if ($topics_search->num_rows() != 0) {
            //                        ?>
            <!--                        <li class="nav-item">-->
            <!--                            <a class="nav-link" href="#topics_search_results" role="tab" data-toggle="tab">Modules</a>-->
            <!--                        </li>-->
            <!--                        --><?php
            //                    }
            ?>
        </ul>

        <div class="tab-content">

            <div role="tabpanel" class="tab-pane active" id="all_search_results">
                <div class="container">
                    <p>&nbsp;</p>
                    All Search Results
                </div>
            </div>

            <?php

            if (isset($group_search)) {
                ?>
                <div role="tabpanel" class="tab-pane" id="group_search_results">
                    <div class="container">
                        <p>&nbsp;</p>

                        <?php
                        echo $group_search->num_rows() . ' Livelihood Groups';
                        ?>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                                   style="font-size: 12px;">
                                <thead>
                                <tr>
                                    <th>Group Id</th>
                                    <th>Group Name</th>
                                    <th>Category</th>
                                    <th>Location</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php

                                foreach ($group_search->result() as $row) {
                                    echo '
                                <tr title="' . $row->GROUP_ID . '" style="white-space: nowrap;">
                                    <td>' . $row->GROUP_ID . '</td>
                                    <td>' . $row->NAME . '</td>
                                    <td>
                                    ';

                                    foreach ($livelihood_categories->result() as $category) {
                                        if ($category->ID == $row->TYPE) {
                                            ?>
                                            <?php echo $category->CATEGORYNAME; ?>
                                            <?php
                                        }
                                    }
                                    echo '</td>
                                <td>';

                                    foreach ($villages->result() as $village) {
                                        if ($village->ID == $row->LOCATION) {
                                            ?>
                                            <?php echo $village->VILLAGE; ?>
                                            <?php
                                        }
                                    }

                                    echo '</td>
                                    <td>
                                        <a href="' . site_url("group-details/edit/$row->ID") . '" class="btn btn-link" title="Edit Group Information"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                        <!-- <button class="btn btn-link delete-btn" title="Delete This Group" data-toggle="modal" data-id="' . $row->ID . '" data-target="#deleteGroupingModal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button> -->                                        
                                        <a class="btn btn-link" title="Delete This Group" href="' . base_url('delete_data/delete_row/GROUPS/' . $row->ID) . '"><i class="fa fa-remove fa-1x" style="color: red;"></i></a>
                                        <a href="' . site_url("group-details/$row->ID") . '" class="btn btn-link" title="Read More about this Group"><i class="fa fa-info-circle fa-1x"></i></a>
                                        <a href="' . site_url("group-info/generate-pdf/$row->ID") . '" class="btn btn-link" title="Generate PDF for this Group\'s Information"><i class="fa fa-file-pdf-o fa-1x" style="color:red; "></i></a>
                                    </td>
                                </tr>
                            ';
                                }

                                ?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <?php
            }

            if (isset($membership_search)) {
                ?>
                <div role="tabpanel" class="tab-pane" id="membership_search_results">
                    <div class="container">
                        <p>&nbsp;</p>

                        <?php
                        echo $membership_search->num_rows() . ' Livelihood Members';
                        ?>

                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                                   style="font-size: 12px;">
                                <thead>
                                <tr>
                                    <th>Membership Id</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Vulnerability</th>
                                    <th>Group</th>
                                    <th>Telephone</th>
                                    <th>Options</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php

                                foreach ($membership_search->result() as $row) {
                                    echo '
                                            <tr title="' . $row->MEMBERSHIP_ID . '" style="white-space: nowrap;">
                                                <td>' . $row->MEMBERSHIP_ID . '</td>
                                                <td>' . $row->NAME . '</td>
                                                <td>' . $row->SEX . '</td>';
                                    echo '<td>';

                                    foreach ($disability_list->result() as $disability) {
                                        if ($disability->DISABILITY_ID == $row->VULNERABILITY) {
                                            echo $disability->DISABILITY_NAME;
                                        }
                                    }
                                    echo '</td>';


                                    echo '<td>' . $row->GROUPS . '</td>
                                                <td>' . $row->TELEPHONE . '</td>
                                                <td>
                                                    <a href="' . site_url("member-details/edit/$row->ID") . '" class="btn btn-link" title="Edit Member Information"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                                    <!-- <button class="btn btn-link" title="Delete This Member" data-toggle="modal" data-target="#deleteMemberModal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button>-->                            
                                                    <a class="btn btn-link" title="Delete This Member" href="' . base_url('delete_data/delete_row/MEMBERSHIP/' . $row->ID) . '"><i class="fa fa-remove fa-1x" style="color: red;"></i></a>
                                                    <a href="' . site_url("member-details/$row->ID") . '" class="btn btn-link" title="Read More about this Group"><i class="fa fa-info-circle fa-1x"></i></a>
                                                    <a href="' . site_url("member-info/generate-pdf/$row->ID") . '" class="btn btn-link" title="Generate PDF for this Member\'s Information"><i class="fa fa-file-pdf-o fa-1x" style="color:red; "></i></a>
                                                </td>
                                            </tr>
                                        ';
                                }

                                ?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <?php
            }

            if (isset($children_search)) {
                ?>
                <div role="tabpanel" class="tab-pane" id="children_search_results">
                    <div class="container">
                        <p>&nbsp;</p>

                        <?php
                        echo $children_search->num_rows() . ' Children';
                        ?>

                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                                   style="font-size: 12px;">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Date of Birth</th>
                                    <th>Vulnerability</th>
                                    <th>Joining Date</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                foreach ($children_search->result() as $row) {
                                    echo '
                                            <tr title="' . $row->NAME . '">
                                                <td>' . $row->NAME . '</td>
                                                <td>' . $row->SEX . '</td>
                                                <td>' . $row->DATE_OF_BIRTH . '</td>
                                                <td>';

                                    foreach ($disability_list->result() as $disability) {
                                        if ($disability->DISABILITY_ID == $row->VULNERABILITY) {
                                            echo $disability->DISABILITY_NAME;
                                        }
                                    }

                                    echo '</td>
                                                <td>' . $row->DATE_OF_JOINING . '</td>
                                                <td>
                                                    <a href="' . site_url("child-details/edit/$row->ID") . '" class="btn btn-link" title="Edit Child Information"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                                    <!-- <button class="btn btn-link" title="Delete This Child" data-toggle="modal" data-target="#deleteChildModal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button> -->                            
                                                    <a class="btn btn-link" title="Delete This Child" href="' . base_url('delete_data/delete_row/CHILDREN/' . $row->ID) . '"><i class="fa fa-remove fa-1x" style="color: red;"></i></a>
                                                    <a href="' . site_url("child-details/$row->ID") . '" class="btn btn-link" title="Read More about this Child"><i class="fa fa-info-circle fa-1x"></i></a>
                                                    <a href="' . site_url("child-info/generate-pdf/$row->ID") . '" class="btn btn-link" title="Generate PDF for this Child\'s Information"><i class="fa fa-file-pdf-o fa-1x" style="color:red; "></i></a>
                                                </td>
                                            </tr>';
                                }

                                ?>


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <?php
            }

            if (isset($staff_search)) {
                ?>
                <div role="tabpanel" class="tab-pane" id="staff_search_results">
                    <div class="container">
                        <p>&nbsp;</p>

                        <?php
                        echo $staff_search->num_rows() . ' Staff Members';
                        ?>

                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                                   style="font-size: 12px;">
                                <thead>
                                <tr>
                                    <th>Staff Id</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Email Address</th>
                                    <th>Telephone</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                foreach ($staff_search->result() as $row) {
                                    echo '
                                            <tr title="' . $row->STAFF_ID . '" style="white-space: nowrap;">
                                                <td>' . $row->STAFF_ID . '</td>
                                                <td>' . $row->NAME . '</td>
                                                <td>' . $row->ROLE . '</td>
                                                <td>' . $row->EMAIL_ADDRESS . '</td>
                                                <td>' . $row->TELEPHONE . '</td>
                                                <td>
                                                    <a href="' . site_url("staff-details/edit/$row->ID") . '" class="btn btn-link" title="Edit Staff Information"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                                    <!-- <button class="btn btn-link" title="Delete This Staff Member" data-toggle="modal" data-target="#deleteStaffModal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button> -->                            
                                                    <a class="btn btn-link" title="Delete This Staff Member" href="' . base_url('delete_data/delete_row/ORGANIZATION_STAFF_NEW/' . $row->ID) . '"><i class="fa fa-remove fa-1x" style="color: red;"></i></a>
                                                    <a href="' . site_url("staff-details/$row->ID") . '" class="btn btn-link" title="Read More about this Staff"><i class="fa fa-info-circle fa-1x"></i></a>
                                                    <a href="' . site_url("staff-info/generate-pdf/$row->ID") . '" class="btn btn-link" title="Generate PDF for this Staff\'s Information"><i class="fa fa-file-pdf-o fa-1x" style="color:red; "></i></a>
                                                </td>
                                            </tr>
                                                ';
                                }

                                ?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <?php
            }

            //                if (isset($department_search)) {
            //                    ?>
            <!--                    <div role="tabpanel" class="tab-pane" id="department_search_results">-->
            <!--                        <div class="container">-->
            <!--                            <p>&nbsp;</p>-->
            <!---->
            <!--                            --><?php
            //                            echo $department_search->num_rows() . ' Departments';
            //                            ?>
            <!---->
            <!--                        </div>-->
            <!--                    </div>-->
            <!---->
            <!--                    --><?php
            //                }

            if (isset($livelihood_survey_search)) {
                ?>
                <div role="tabpanel" class="tab-pane" id="livelihood_survey_search_results">
                    <div class="container">
                        <p>&nbsp;</p>

                        <?php
                        echo $livelihood_survey_search->num_rows() . ' Livelihood Household Surveys';
                        ?>

                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                                   style="font-size: 12px;">
                                <thead>
                                <tr>
                                    <th>Interviewer</th>
                                    <th>Date</th>
                                    <th>Location</th>
                                    <th>Respondent</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                foreach ($livelihood_survey_search->result() as $row) {
                                    echo '
                                            <tr title="' . $row->INTERVIEWER . '" style="white-space: nowrap;">
                                                <td>' . $row->INTERVIEWER . '</td>
                                                <td>' . $row->DATE_OF_INTERVIEW . '</td>
                                                <td>' . $row->LOCATION . '</td>
                                                <td>' . $row->RESPONDENT . '</td>
                                                <td>
                                                    <a href="' . site_url("miscellaneous%20pilot%20study-details/edit/$row->ID") . '" class="btn btn-link" title="Edit Pilot Study Details"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                                   <!-- <button class="btn btn-link" title="Delete This Pilot Study" data-toggle="modal" data-target="#deletePilotStudyModal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button> -->                           
                                                            <a class="btn btn-link" title="Delete This Record" href="' . base_url('delete_data/delete_row/PILOT_STUDIES/' . $row->ID) . '"><i class="fa fa-remove fa-1x" style="color: red;"></i></a>
                                                    <a href="' . site_url("miscellaneous%20pilot%20study-details/$row->ID") . '" class="btn btn-link" title="Read More about this Pilot Study Information"><i class="fa fa-info-circle fa-1x"></i></a>
                                                    <a href="' . site_url("miscellaneous%20pilot%20study-info/generate-pdf/$row->ID") . '" class="btn btn-link" title="Generate PDF for this Pilot Study Information"><i class="fa fa-file-pdf-o fa-1x" style="color:red; "></i></a>
                                                </td>
                                            </tr>
                                        ';
                                }

                                ?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <?php
            }

            if (isset($porticus_search)) {
                ?>
                <div role="tabpanel" class="tab-pane" id="porticus_search_results">
                    <div class="container">
                        <p>&nbsp;</p>

                        <?php
                        echo $porticus_search->num_rows() . ' Porticus Baseline Surveys';
                        ?>

                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                                   style="font-size: 12px;">
                                <thead>
                                <tr>
                                    <th>Name of Respondent</th>
                                    <th>Age</th>
                                    <th>Village</th>
                                    <th>Gender</th>
                                    <th>Name of Vulnerable</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php

                                foreach ($porticus_search->result() as $row) {
                                    echo '
                                            <tr title="' . $row->NAME_OF_RESPONDENT . '" style="white-space: nowrap;">
                                                <td>' . $row->NAME_OF_RESPONDENT . '</td>
                                                <td>' . $row->AGE . '</td>
                                                <td>' . $row->VILLAGE . '</td>
                                                <td>' . $row->GENDER . '</td>
                                                <td>' . $row->NAME_OF_VULNERABLE . '</td>
                                                <td>
                                                    <a href="' . site_url("miscellaneous%20baseline%20survey-details/edit/$row->ID") . '" class="btn btn-link" title="Edit Porticus Baseline Survey Details"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                                    <!-- <button class="btn btn-link" title="Delete This Porticus Baseline Survey Information" data-toggle="modal" data-target="#deleteBaselineSurveyModal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button> -->                           
                                                    <a class="btn btn-link" title="Delete This Record" href="' . base_url('delete_data/delete_row/PORTICUS_BASELINE_ASSESSMENTS/' . $row->ID) . '"><i class="fa fa-remove fa-1x" style="color: red;"></i></a>
                                                    <a href="' . site_url("miscellaneous%20baseline%20survey-details/$row->ID") . '" class="btn btn-link" title="Read More about this Porticus Baseline Survey Information"><i class="fa fa-info-circle fa-1x"></i></a>
                                                    <a href="' . site_url("miscellaneous%20baseline%20survey-info/generate-pdf/$row->ID") . '" class="btn btn-link" title="Generate PDF for this Porticus Baseline Survey Information"><i class="fa fa-file-pdf-o fa-1x" style="color:red; "></i></a>
                                                </td>
                                            </tr>
                                        ';
                                }

                                ?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <?php
            }

            if (isset($production_search)) {
                ?>
                <div role="tabpanel" class="tab-pane" id="production_search_results">
                    <div class="container">
                        <p>&nbsp;</p>

                        <?php
                        echo $production_search->num_rows() . ' Production Records';
                        ?>

                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Grantee</th>
                                    <th>Group</th>
                                    <th>District</th>
                                    <th>County</th>
                                    <th>Sub-County</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php

                                foreach ($production_search->result() as $row) {
                                    echo '
                                            <tr title="' . $row->ID . '">
                                                <td>' . $row->GRANTEE . '</td>
                                                <td>' . $row->GROUP_NAME . '</td>
                                                <td>' . $row->DISTRICT . '</td>
                                                <td>' . $row->COUNTY . '</td>
                                                <td>' . $row->SUBCOUNTY . '</td>
                                                <td>
                                                    <a href="' . site_url("production/misean%20cara%20baseline%20survey-details/edit/$row->ID") . '" class="btn btn-link" title="Edit Survey Details"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                                    <a class="btn btn-link" title="Delete This Crop Misean Cara Baseline Survey" href="' . base_url('delete_data/delete_row/MISEAN_CARA_BASELINE_SURVEYS/' . $row->ID) . '"><i class="fa fa-remove fa-1x" style="color: red;"></i></a>
                                                    <a href="' . site_url("production/misean%20cara%20baseline%20survey-details/$row->ID") . '" class="btn btn-link" title="Read More about this Survey"><i class="fa fa-info-circle fa-1x"></i></a>
                                                    <a href="' . site_url("production/misean%20cara%20baseline%20survey-info/generate-pdf/$row->ID") . '" class="btn btn-link" title="Generate PDF for this Crop Survey Information"><i class="fa fa-file-pdf-o fa-1x" style="color:red; "></i></a>
                                                </td>
                                            </tr>
                                        ';
                                }

                                ?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <?php
            }

            if (isset($challenges_search)) {
                ?>
                <div role="tabpanel" class="tab-pane" id="challenges_search_results">
                    <div class="container">
                        <p>&nbsp;</p>

                        <?php
                        echo $challenges_search->num_rows() . ' Production Challenges';
                        ?>

                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Group</th>
                                    <th>Vegetable Production Challenge</th>
                                    <th>Crop Production Challenge</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php

                                foreach ($challenges_search->result() as $row) {
                                    echo '
                                            <tr title="' . $row->GROUP_NAME . '">
                                                <td>' . $row->GROUP_NAME . '</td>
                                                <td>' . $row->VEGETABLE_PRODUCTION_PROBLEMS . '</td>
                                                <td>' . $row->CROP_PRODUCTION_PROBLEMS . '</td>
                                                <td>
                                                    <a href="' . site_url("production/challenge-details/edit/$row->ID") . '" class="btn btn-link" title="Edit Challenge Details"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                                    <a class="btn btn-link" title="Delete This Challenge" href="' . base_url('delete_data/delete_row/PRODUCTION_PROBLEMS/' . $row->ID) . '"><i class="fa fa-remove fa-1x" style="color: red;"></i></a>
                                                    <a href="' . site_url("production/challenge-details/$row->ID") . '" class="btn btn-link" title="Read More about this Challenge"><i class="fa fa-info-circle fa-1x"></i></a>
                                                    <a href="' . site_url("production/challenge-info/generate-pdf/$row->ID") . '" class="btn btn-link" title="Generate PDF for this Challenge Information"><i class="fa fa-file-pdf-o fa-1x" style="color:red; "></i></a>
                                                </td>
                                            </tr>
                                        ';
                                }

                                ?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <?php
            }

            if (isset($monitoring_search)) {
                ?>
                <div role="tabpanel" class="tab-pane" id="monitoring_search_results">
                    <div class="container">
                        <p>&nbsp;</p>

                        <?php
                        echo $monitoring_search->num_rows() . ' Monitoring Visits';
                        ?>

                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Staff ID</th>
                                    <th>Staff Name</th>
                                    <th>Date of Visit</th>
                                    <th>Type of Visit</th>
                                    <th>Track Id</th>
                                    <th>Options</th>

                                </tr>
                                </thead>
                                <tbody>

                                <?php

                                foreach ($monitoring_search->result() as $row) {
                                    echo '
                                            <tr title="' . $row->TRACK_ID . '">
                                                <td>' . $row->STAFF_ID . '</td>
                                                <td>' . $row->STAFF_ID . '</td>
                                                <td>' . $row->DATE_OF_VISIT . '</td>
                                                <td>' . $row->VISIT_TYPE . '</td>
                                                <td>' . $row->TRACK_ID . '</td>
                                                <td>
                                                    <a href="' . site_url("monitoring-details/edit/$row->ID") . '" class="btn btn-link" title="Edit Monitoring Details"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                                    <a class="btn btn-link" title="Delete This Monitoring Activity" href="' . base_url('delete_data/delete_row/MONITORING_VISITS/' . $row->ID) . '"><i class="fa fa-remove fa-1x" style="color: red;"></i></a>
                                                    <a href="' . site_url("monitoring-details/$row->ID") . '" class="btn btn-link" title="Read More about this Group"><i class="fa fa-info-circle fa-1x"></i></a>
                                                    <a href="' . site_url("monitoring-info/generate-pdf/$row->ID") . '" class="btn btn-link" title="Generate PDF for this Monitoring Information"><i class="fa fa-file-pdf-o fa-1x" style="color:red; "></i></a>
                                                </td>
                                            </tr>
                                        ';
                                }

                                ?>
                            </table>
                        </div>

                    </div>
                </div>

                <?php
            }

            //                if (isset($field_support_visits_search)) {
            //                    ?>
            <!--                    <div role="tabpanel" class="tab-pane" id="field_support_visits_search_results">-->
            <!--                        <div class="container">-->
            <!--                            <p>&nbsp;</p>-->
            <!---->
            <!--                            --><?php
            //                            echo $field_support_visits_search->num_rows() . ' Field Support Visits';
            //                            ?>
            <!---->
            <!--                        </div>-->
            <!--                    </div>-->
            <!---->
            <!--                    --><?php
            //                }
            //
            //                if (isset($savings_tracking_visits_search)) {
            //                    ?>
            <!--                    <div role="tabpanel" class="tab-pane" id="savings_tracking_visits_search_results">-->
            <!--                        <div class="container">-->
            <!--                            <p>&nbsp;</p>-->
            <!---->
            <!--                            --><?php
            //                            echo $savings_tracking_visits_search->num_rows() . ' Savings';
            //                            ?>
            <!---->
            <!--                        </div>-->
            <!--                    </div>-->
            <!---->
            <!--                    --><?php
            //                }

            if (isset($hygiene_and_nutrition_checklist_search)) {
                ?>
                <div role="tabpanel" class="tab-pane" id="hygiene_and_nutrition_checklist_search_results">
                    <div class="container">
                        <p>&nbsp;</p>

                        <?php
                        echo $hygiene_and_nutrition_checklist_search->num_rows() . ' Hygiene and Nutrition Checklists';
                        ?>

                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                                   style="font-size: 12px;">
                                <thead>
                                <tr>
                                    <th>Farmer's Name</th>
                                    <th>Gender</th>
                                    <th>Group</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                foreach ($hygiene_and_nutrition_checklist_search->result() as $row) {
                                    echo '
                                            <tr title="' . $row->MEMBERSHIP_ID . '" style="white-space: nowrap;">
                                                <td>' . $row->MEMBERSHIP_ID . '</td>
                                                <td>' . $row->SEX . '</td>
                                                <td>' . $row->GROUP_NAME . '</td>
                                                <td>
                                                    <a href="' . site_url("miscellaneous%20hygiene%20and%20nutrition-details/edit/$row->ID") . '" class="btn btn-link" title="Edit Hygiene and Nutrition Details"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                                    <!-- <button class="btn btn-link" title="Delete This Pilot Study" data-toggle="modal" data-target="#deleteHygieneAndNutritionModal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button> -->                                     
                                                            <a class="btn btn-link" title="Delete This Record" href="' . base_url('delete_data/delete_row/HYGIENE_AND_NUTRITION_CHECKLIST/' . $row->ID) . '"><i class="fa fa-remove fa-1x" style="color: red;"></i></a>
                                                    <a href="' . site_url("miscellaneous%20hygiene%20and%20nutrition-details/$row->ID") . '" class="btn btn-link" title="Read More about this Hygiene and Nutrition Information"><i class="fa fa-info-circle fa-1x"></i></a>
                                                    <a href="' . site_url("miscellaneous%20hygiene%20and%20nutrition-info/generate-pdf/$row->ID") . '" class="btn btn-link" title="Generate PDF for this Hygiene and Nutrition Information"><i class="fa fa-file-pdf-o fa-1x" style="color:red; "></i></a>
                                                </td>
                                            </tr>
                                        ';
                                }

                                ?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <?php
            }

            if (isset($assessment_1_records_search)) {
                ?>
                <div role="tabpanel" class="tab-pane" id="assessment_1_records_search_results">
                    <div class="container">
                        <p>&nbsp;</p>

                        <?php
                        echo $assessment_1_records_search->num_rows() . ' Assessment 1 Records';
                        ?>

                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                                   style="font-size: 12px;">
                                <thead>
                                <tr>
                                    <th>Child ID</th>
                                    <th>Child Name</th>
                                    <th>Sex</th>
                                    <th>Health centre</th>
                                    <th>Disability Type</th>
                                    <th>County</th>
                                    <th>Parish</th>
                                    <th>Village</th>
                                    <th>Date Assessed</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                foreach ($assessment_1_records_search->result() as $row) {
                                    echo '
                                    <tr title="' . $row->CHILD_ID . '">
                                        <td>' . $row->CHILD_ID . '</td>';
                                    ?>
                                    <td>
                                        <?php
                                        foreach ($children_list->result() as $child) {
                                            if ($child->CHILD_ID == $row->CHILD_ID) {
                                                echo $child->NAME;
                                            }
                                        }
                                        ?>
                                    </td>
                                    <?php echo
                                        '<td>' . $row->SEX . '</td>
                                            <td>' . $row->HEALTH_CENTRE . '</td>
                                            <td>' . $row->DISABILITY_TYPE . '</td>
                                            <td>' . $row->COUNTY . '</td>
                                            <td>' . $row->PARISH . '</td>
                                            <td>' . $row->VILLAGE . '</td>
                                            <td>' . $row->DATE_ENTERED . '</td>
                                            <td>
                                                <a href="' . site_url("assessments/form-1-details/edit/$row->ID") . '" class="btn btn-link" title="Edit Assessment 1 Information"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                                <!-- <button class="btn btn-link" title="Delete This Child" data-toggle="modal" data-target="#deleteAssessment1Modal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button> -->                            
                                                <a class="btn btn-link" title="Delete This Record" href="' . base_url('delete_data/delete_row/ASSESSMENT_1_RECORDS/' . $row->ID) . '"><i class="fa fa-remove fa-1x" style="color: red;"></i></a>
                                                <a href="' . site_url("assessments/form-1-details/$row->ID") . '" class="btn btn-link" title="Read More about this Assessment"><i class="fa fa-info-circle fa-1x"></i></a>
                                                <a href="' . site_url("assessments/form-1/generate-pdf/$row->ID") . '" class="btn btn-link" title="Generate PDF for this Assessment Information"><i class="fa fa-file-pdf-o fa-1x" style="color:red; "></i></a>
                                            </td>
                                        </tr>';
                                }

                                ?>


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <?php
            }

            if (isset($assessment_2_records_search)) {
                ?>
                <div role="tabpanel" class="tab-pane" id="assessment_2_records_search_results">
                    <div class="container">
                        <p>&nbsp;</p>

                        <?php
                        echo $assessment_2_records_search->num_rows() . ' Assessment 2 Records';
                        ?>

                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                                   style="font-size: 12px;">
                                <thead>
                                <tr>
                                    <th>Child ID</th>
                                    <th>Child Name</th>
                                    <th>Date of first screening</th>
                                    <th>Identified By</th>
                                    <th>Assessed By</th>
                                    <th>Venue</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                foreach ($assessment_2_records_search->result() as $row) {
                                    echo '
                                    <tr title="' . $row->CHILD . '">
                                        <td>' . $row->CHILD . '</td>';
                                    ?>

                                    <td>
                                        <?php
                                        foreach ($children_list->result() as $child) {
                                            if ($child->CHILD_ID == $row->CHILD) {
                                                echo $child->NAME;
                                            }
                                        }
                                        ?>
                                    </td>
                                    <?php echo
                                        '<td>' . $row->DATE_OF_FIRST_SCREENING . '</td>
                                            <td>' . $row->IDENTIFIED_BY . '</td>
                                            <td>' . $row->ASSESSED_BY . '</td>
                                            <td>' . $row->VENUE_FOR_SCREENING . '</td>
                                            <td>
                                                <a href="' . site_url("assessments/form-2-details/edit/$row->ID") . '" class="btn btn-link" title="Edit Assessment 2 Information"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                                <!-- <button class="btn btn-link" title="Delete This Child" data-toggle="modal" data-target="#deleteAssessment2Modal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button> -->                            
                                                <a class="btn btn-link" title="Delete This Record" href="' . base_url('delete_data/delete_row/ASSESSMENT_2_RECORDS_NEW/' . $row->ID) . '"><i class="fa fa-remove fa-1x" style="color: red;"></i></a>
                                                <a href="' . site_url("assessments/form-2-details/$row->ID") . '" class="btn btn-link" title="Read More about this Assessment"><i class="fa fa-info-circle fa-1x"></i></a>
                                                <a href="' . site_url("assessments/form-2/generate-pdf/$row->ID") . '" class="btn btn-link" title="Generate PDF for this Assessment Information"><i class="fa fa-file-pdf-o fa-1x" style="color:red; "></i></a>
                                            </td>
                                        </tr>';
                                }

                                ?>


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <?php
            }

            if (isset($visit_records_search)) {
                ?>
                <div role="tabpanel" class="tab-pane" id="visit_records_search_results">
                    <div class="container">
                        <p>&nbsp;</p>

                        <?php
                        echo $visit_records_search->num_rows() . ' Visitations';
                        ?>

                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                                   style="font-size: 12px;">
                                <thead>
                                <tr>
                                    <th>Date of Visit</th>
                                    <th>Child ID</th>
                                    <th>Nature of Visit</th>
                                    <th>Activities Carried Out</th>
                                    <th>Project</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                foreach ($visit_records_search->result() as $row) {
                                    echo '
                                            <tr title="' . $row->CHILD_ID_VISITED . '">
                                                <td>' . $row->DATE_OF_VISIT . '</td>
                                                <td>' . $row->CHILD_ID_VISITED . '</td>
                                                <td>' . $row->KIND_OF_VISIT . '</td>
                                                <td>' . $row->ACTIVITY_CARRIED_OUT . '</td>
                                                <td>' . $row->PROJECT . '</td>
                                                <td>
                                                    <a href="' . site_url("visitation-details/edit/$row->ID") . '" class="btn btn-link" title="Edit Visit Information"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                                    <!-- <button class="btn btn-link" title="Delete This Child" data-toggle="modal" data-target="#deleteVisitModal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button> -->                            
                                                    <a class="btn btn-link" title="Delete This Group" href="' . base_url('') . '"><i class="fa fa-remove fa-1x" style="color: red;"></i></a>
                                                    <a href="' . site_url("visitation-details/$row->ID") . '" class="btn btn-link" title="Read More about this Visit"><i class="fa fa-info-circle fa-1x"></i></a>
                                                    <a href="' . site_url("visitation-info/generate-pdf/$row->ID") . '" class="btn btn-link" title="Generate PDF for this Visit Information"><i class="fa fa-file-pdf-o fa-1x" style="color:red; "></i></a>
                                                </td>
                                            </tr>';
                                }

                                ?>


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <?php
            }

            if (isset($marketing_places_search)) {
                ?>
                <div role="tabpanel" class="tab-pane" id="marketing_places_search_results">
                    <div class="container">
                        <p>&nbsp;</p>

                        <?php
                        echo $marketing_places_search->num_rows() . ' Marketing Places';
                        ?>

                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Individual</th>
                                    <th>Sells all vegetables</th>
                                    <th>Sells all Crops</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php

                                foreach ($marketing_places_search->result() as $row) {
                                    echo '
                                            <tr title="' . $row->INDIVIDUAL_ID . '">
                                                <td>' . $row->INDIVIDUAL_ID . '</td>
                                                <td>' . $row->SELLS_ALL_VEGETABLES . '</td>
                                                <td>' . $row->SELLS_ALL_CROPS . '</td>
                                                <td>
                                                    <a href="' . site_url("production/marketing-details/edit/$row->ID") . '" class="btn btn-link" title="Edit Challenge Details"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                                    <a class="btn btn-link" title="Delete This Marketing Information" href="' . base_url('delete_data/delete_row/CHANGE_IN_KNOWLEDGE_NEWER/' . $row->ID) . '"><i class="fa fa-remove fa-1x" style="color: red;"></i></a>
                                                    <a href="' . site_url("production/marketing-details/$row->ID") . '" class="btn btn-link" title="Read More about this Marketing Information"><i class="fa fa-info-circle fa-1x"></i></a>
                                                    <a href="' . site_url("production/marketing-info/generate-pdf/$row->ID") . '" class="btn btn-link" title="Generate PDF for this Marketing Information"><i class="fa fa-file-pdf-o fa-1x" style="color:red; "></i></a>
                                                </td>
                                            </tr>
                                        ';
                                }

                                ?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <?php
            }

            //                if (isset($topics_search)) {
            //                    ?>
            <!--                    <div role="tabpanel" class="tab-pane" id="topics_search_results">-->
            <!--                        <div class="container">-->
            <!--                            <p>&nbsp;</p>-->
            <!---->
            <!--                            --><?php
            //                            echo $courses_search->num_rows() . ' Courses';
            //                            ?>
            <!---->
            <!--                        </div>-->
            <!--                    </div>-->
            <!---->
            <!--                    --><?php
            //                }

            if (isset($courses_search)) {
                ?>
                <div role="tabpanel" class="tab-pane" id="courses_search_results">
                    <div class="container">
                        <p>&nbsp;</p>

                        <?php
                        echo $courses_search->num_rows() . ' Modules';
                        ?>

                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                                   style="font-size: 12px;">
                                <thead>
                                <tr>
                                    <th>Course Code</th>
                                    <th>Course</th>
                                    <th>Group Intended</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                foreach ($courses_search->result() as $row) {
                                    echo '
                                            <tr title="' . $row->CODE . '" style="white-space: nowrap;">
                                                <td>' . $row->CODE . '</td>
                                                <td>' . $row->COURSE . '</td>
                                                <td>';

                                    $targets = explode(',', $row->GROUP_TRAINED);
                                    $target_names = array();
                                    foreach ($targets as $target) {
                                        foreach ($livelihood_categories->result() as $livelihood_category) {
                                            if ($livelihood_category->ID == $target) {
                                                array_push($target_names, $livelihood_category->CATEGORYNAME);
                                            }
                                        }
                                    }
                                    echo implode(', ', $target_names);

                                    echo '</td>
                                                <td>
                                                    <a href="' . site_url("course-details/edit/$row->ID") . '" class="btn btn-link" title="Edit Course Information"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                                    <a class="btn btn-link" title="Delete This Course" href="' . base_url('delete_data/delete_row/COURSES/' . $row->ID) . '"><i class="fa fa-remove fa-1x" style="color: red;"></i></a>
                                                    <a href="' . site_url("course-details/$row->ID") . '" class="btn btn-link" title="Read More about this Course"><i class="fa fa-info-circle fa-1x"></i></a>
                                                    <a href="' . site_url("course-info/generate-pdf/$row->ID") . '" class="btn btn-link" title="Generate PDF for this Course\'s Information"><i class="fa fa-file-pdf-o fa-1x" style="color:red; "></i></a>
                                                </td>
                                            </tr>
                    ';
                                }

                                ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <?php
            }
            ?>

        </div>

        <?php
    } else {

        ?>
        <div class="card-body message_danger">
            <p class="card-text">No Results Found for this Search. Please Try out another phrase</p>


        </div>
        <?php
    }
    ?>
</div>
