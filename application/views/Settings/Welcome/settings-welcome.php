<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/3/19
 * Time: 4:39 PM
 */
?>
<style>
    .card-header{
        height: 40px;
        padding: .1rem 1.25rem;
    }

</style>
<div class="container">

    <div class="card w-100">
        <h3 style="padding-left: 2%; padding-top: 2%;">Application Settings</h3>

        <hr>

        <div id="accordion">

            <div class="card">
                <div class="card-header" id="categoriesHeading">
                    <h5 class="mb-0">
                        <button class="btn btn-link setting-item collapsed setting-item" data-toggle="collapse"
                                data-target="#categories" aria-expanded="false" aria-controls="collapseOne">
                            Livelihood Group categories
                        </button>
                    </h5>
                </div>

                <div id="categories" class="collapse" aria-labelledby="categoriesHeading" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                These are the categories of livelihood groups that are supported by the organization
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-primary" title="Create New Livelihood Category"
                                        data-toggle="modal" data-target="#addCategoryModal"><i
                                            class="fa fa-plus-circle"></i>New Livelihood Category
                                </button>
                            </div>
                        </div>
                        <br>

                        <hr>

                        <div class="card mb-3">
                            <div class="card-header">
                                <i class="fa fa-table"></i> Acceptable Livelihood Group Categories in the Organization
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                                           style="font-size: 12px;">
                                        <thead>
                                        <tr>
                                            <th>Livelihood Category Name</th>
                                            <th>Options</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php

                                        foreach ($livelihood_categories_settings->result() as $row) {
                                            echo '
                                                <tr title="' . $row->ID . '" style="white-space: nowrap;">
                                                    <td>' . $row->CATEGORYNAME . '</td>
                                                    <td>
                                                        <a href="' . site_url("category-details/edit/1") . '" class="btn btn-link" title="Edit Category Information"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                                        <button class="btn btn-link" title="Delete This Category" data-toggle="modal" data-target="#deleteCategoryModal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button>
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
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="locationHeading">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed setting-item" data-toggle="collapse"
                                data-target="#location" aria-expanded="false" aria-controls="collapseOne">
                            Location
                        </button>
                    </h5>
                </div>

                <div id="location" class="collapse" aria-labelledby="locationHeading" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                This is the area scope of that the organization support can reach
                            </div>
                            <div class="col-md-8">
                                <button class="btn btn-default btn-sm" title="Record New County" data-toggle="modal"
                                        data-target="#createCountyModal"><i class="fa fa-plus-circle"></i>New County
                                </button>
                                <button class="btn btn-warning btn-sm" title="Record New Sub-County" data-toggle="modal"
                                        data-target="#createSubCountyModal"><i class="fa fa-plus-circle"></i>New
                                    Sub-County
                                </button>
                                <button class="btn btn-success btn-sm" title="Record New Parish" data-toggle="modal"
                                        data-target="#createParishModal"><i class="fa fa-plus-circle"></i>New Parish
                                </button>
                                <button class="btn btn-primary btn-sm" title="Record New Village" data-toggle="modal"
                                        data-target="#createVillageModal"><i class="fa fa-plus-circle"></i>New Village
                                </button>
                            </div>
                        </div>
                        <br>

                        <hr>

                        <div class="row">
                            <div class="col-md-4">
                                <select name="location-display-selector" id="location-display-selector"
                                        class="form-control" onchange="set_location_displayed(this.value);">
                                    <option value="county">County</option>
                                    <option value="subcounty">Sub-County</option>
                                    <option value="parish">Parish</option>
                                    <option value="village" selected>Village</option>
                                </select>
                            </div>
                        </div>

                        <hr>

                        <div class="card mb-3">
                            <div class="card-header">
                                <i class="fa fa-table"></i> List of acceptable location information
                            </div>
                            <div class="card-body">
                                <div id="county-div" style="display: none;">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                                               style="font-size: 12px;">
                                            <thead>
                                            <tr>
                                                <th>County</th>
                                                <th>Options</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php

                                            foreach ($county_settings->result() as $row) {
                                                echo '
                                                <tr title="' . $row->ID . '" style="white-space: nowrap;">
                                                    <td>' . $row->COUNTY . '</td>
                                                    <td>
                                                        <a href="' . site_url("county-details/edit/1") . '" class="btn btn-link" title="Edit County Information"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                                        <button class="btn btn-link" title="Delete This County" data-toggle="modal" data-target="#deleteCountyModal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button>
                                                    </td>
                                                </tr>
                                                ';
                                            }

                                            ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div id="subcounty-div" style="display: none;">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                                               style="font-size: 12px;">
                                            <thead>
                                            <tr>
                                                <th>County</th>
                                                <th>Sub-County</th>
                                                <th>Options</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php

                                            foreach ($subcounty_settings->result() as $row) {

                                                $county_name = '';

                                                echo '
                                                <tr title="' . $row->ID . '" style="white-space: nowrap;">';

                                                foreach ($county_settings->result() as $county) {
                                                    if ($county->ID == $row->COUNTY) {
                                                        $county_name = $county->COUNTY;
                                                    }
                                                }
                                                echo '
                                                    <td>' . $county_name . '</td>
                                                    <td>' . $row->SUBCOUNTY . '</td>
                                                    <td>
                                                        <a href="' . site_url("subcounty-details/edit/1") . '" class="btn btn-link" title="Edit Sub-County Information"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                                        <button class="btn btn-link" title="Delete This Sub-County" data-toggle="modal" data-target="#deleteSubCountyModal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button>
                                                    </td>
                                                </tr>
                                                ';
                                            }

                                            ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div id="parish-div" style="display: none;">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                                               style="font-size: 12px;">
                                            <thead>
                                            <tr>
                                                <th>County</th>
                                                <th>Sub-County</th>
                                                <th>Parish</th>
                                                <th>Options</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php

                                            foreach ($parish_settings->result() as $row) {

                                                $subcounty_name = '';
                                                $subcounty_county_id = 0;
                                                $county_name = '';

                                                echo '
                                                <tr title="' . $row->ID . '" style="white-space: nowrap;">';

                                                foreach ($subcounty_settings->result() as $subcounty) {
                                                    if ($subcounty->ID == $row->ID) {
                                                        $subcounty_name = $subcounty->SUBCOUNTY;
                                                        $subcounty_county_id = $subcounty->ID;
                                                    }
                                                }

                                                foreach ($county_settings->result() as $county) {
                                                    if ($county->ID == $subcounty_county_id) {
                                                        $county_name = $county->COUNTY;
                                                    }
                                                }
                                                echo '
                                                    <td>' . $county_name . '</td>
                                                    <td>' . $subcounty_name . '</td>
                                                    <td>' . $row->PARISH . '</td>
                                                    <td>
                                                        <a href="' . site_url("parish-details/edit/1") . '" class="btn btn-link" title="Edit Parish Information"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                                        <button class="btn btn-link" title="Delete This Parish" data-toggle="modal" data-target="#deleteParishModal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button>
                                                    </td>
                                                </tr>
                                                ';
                                            }

                                            ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div id="village-div" style="display: block;">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                                               style="font-size: 12px;">
                                            <thead>
                                            <tr>
                                                <th>County</th>
                                                <th>Sub-County</th>
                                                <th>Parish</th>
                                                <th>Village</th>
                                                <th>Prefix Code</th>
                                                <th>Options</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php

                                            foreach ($village_settings->result() as $row) {

                                                $parish_name = '';
                                                $parish_subcounty_id = 0;
                                                $subcounty_name = '';
                                                $parish_county_id = 0;
                                                $county_name = '';

                                                echo '
                                                <tr title="' . $row->ID . '" style="white-space: nowrap;">';
                                                foreach ($parish_settings->result() as $parish) {
                                                    if ($parish->ID == $row->PARISH) {
                                                        $parish_name = $parish->PARISH;
                                                        $parish_subcounty_id = $parish->SUBCOUNTY;
                                                    }
                                                }

                                                foreach ($subcounty_settings->result() as $subcounty) {
                                                    if ($subcounty->ID == $parish_subcounty_id) {
                                                        $subcounty_name = $subcounty->SUBCOUNTY;
                                                        $parish_county_id = $subcounty->ID;
                                                    }
                                                }

                                                foreach ($county_settings->result() as $county) {
                                                    if ($county->ID == $parish_county_id) {
                                                        $county_name = $county->COUNTY;
                                                    }
                                                }
                                                echo '<td>' . $county_name . '</td>
                                                    <td>' . $subcounty_name . '</td>
                                                    <td>' . $parish_name . '</td>
                                                    <td>' . $row->VILLAGE . '</td>
                                                    <td>' . $row->PREFIX_CODE . '</td>
                                                    <td>
                                                        <a href="' . site_url("village-details/edit/1") . '" class="btn btn-link" title="Edit Village Information"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                                        <button class="btn btn-link" title="Delete This Village" data-toggle="modal" data-target="#deletVillageModal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button>
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
                        </div>

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="disabilitiesHeading">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed setting-item" data-toggle="collapse"
                                data-target="#disabilities" aria-expanded="false" aria-controls="collapseOne">
                            Disabilities
                        </button>
                    </h5>
                </div>

                <div id="disabilities" class="collapse" aria-labelledby="disabilitiesHeading" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                These are the different types of disabilities that affect children and the organization
                                can support
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-primary" title="Record New Disability" data-toggle="modal"
                                        data-target="#addDisabilityModal"><i class="fa fa-plus-circle"></i>New
                                    Disability
                                </button>
                            </div>
                        </div>
                        <br>

                        <hr>

                        <div class="card mb-3">
                            <div class="card-header">
                                <i class="fa fa-table"></i> List of recorded / recordable disabilities
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                                           style="font-size: 12px;">
                                        <thead>
                                        <tr>
                                            <th>Disability Name</th>
                                            <th>Description</th>
                                            <th>Disability ID</th>
                                            <th>Options</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php

                                        foreach ($disabilities_settings->result() as $row) {
                                            echo '
                                                <tr title="' . $row->ID . '" style="white-space: nowrap;">
                                                    <td>' . $row->DISABILITY_NAME . '</td>
                                                    <td>' . $row->DISABILITY_DESCRIPTION . '</td>
                                                    <td>' . $row->DISABILITY_ID . '</td>
                                                    <td>
                                                        <a href="' . site_url("disability-details/edit/1") . '" class="btn btn-link" title="Edit DIsability Information"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                                        <button class="btn btn-link" title="Delete This Disability" data-toggle="modal" data-target="#deleteDisabilityModal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button>
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
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="userHeading">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed setting-item" data-toggle="collapse" data-target="#user"
                                aria-expanded="false" aria-controls="collapseOne">
                            User Authentication
                        </button>
                    </h5>
                </div>

                <div id="user" class="collapse" aria-labelledby="userHeading" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                These are the details of the currently authenticated user to operate in this system
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-primary" title="Create New User Account" data-toggle="modal"
                                        data-target="#addUserModal"><i class="fa fa-plus-circle"></i>Create New User
                                </button>
                            </div>
                        </div>
                        <br>

                        <hr>

                        <div class="card mb-3">
                            <div class="card-header">
                                <i class="fa fa-table"></i> User Accounts in WacfoSoft
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                                           style="font-size: 12px;">
                                        <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Options</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php

                                        foreach ($user_authentication_settings->result() as $row) {
                                            echo '
                                                <tr title="' . $row->ID . '" style="white-space: nowrap;">
                                                    <td>' . $row->USERNAME . '</td>
                                                    <td>*********************************</td>
                                                    <td>
                                                        <a href="' . site_url("user-details/edit/1") . '" class="btn btn-link" title="Edit User Information"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                                        <button class="btn btn-link" title="Delete This User" data-toggle="modal" data-target="#deleteUserModal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button>
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
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="departmentsHeading">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed setting-item" data-toggle="collapse" data-target="#departments" aria-expanded="false" aria-controls="collapseOne">
                            Departments
                        </button>
                    </h5>
                </div>

                <div id="departments" class="collapse" aria-labelledby="departmentsHeading" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                These are the only acceptable departments operating the organization and the system is
                                constrained to work with these departments only
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-primary" title="Record New Department in the Organization"
                                        data-toggle="modal" data-target="#addDepartmentModal"><i
                                            class="fa fa-plus-circle"></i>New Department
                                </button>
                            </div>
                        </div>
                        <br>

                        <hr>

                        <div class="card mb-3">
                            <div class="card-header">
                                <i class="fa fa-table"></i> Departments in the organization
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                                           style="font-size: 12px;">
                                        <thead>
                                        <tr>
                                            <th>Department Name</th>
                                            <th>Prefix</th>
                                            <th>Options</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php

                                        foreach ($departments_settings->result() as $row) {
                                            echo '
                                                <tr title="' . $row->ID . '" style="white-space: nowrap;">
                                                    <td>' . $row->NAME . '</td>
                                                    <td>' . $row->PREFIX . '</td>
                                                    <td>
                                                        <a href="' . site_url("user-details/edit/1") . '" class="btn btn-link" title="Edit User Information"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                                        <button class="btn btn-link" title="Delete This User" data-toggle="modal" data-target="#deleteUserModal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button>
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
                    </div>
                </div>
            </div>

        </div>

    </div>
    <br><br>
    <div class="row">
        <div class="col-md-12">
            <strong><em>Note: </em></strong><br><br>
            These settings are used within other forms in the system for consistence in data collection, data manipulation, data integrity and data validation

        </div>
    </div>

</div>

<!-- Modal Dialogs  -->

<!--   Deletion Dialogs    -->
<div class="modal" id="deleteLocationModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- The modal header -->
            <div class="modal-header">
                <h4 class="modal-title">Confirm Delete</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- The modal body -->
            <div class="modal-body">
                Are you sure you want to delete this Location?
            </div>
            <!-- The modal footer -->
            <div class="modal-footer">
                <button class="btn btn-danger">Yes, I'm Sure</button>
                <button type="button" class="btn btn-neutral" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


<!-- Insertion Dialogs  -->

<!--Create County-->

<div class="modal" id="createCountyModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <form>
                <!-- The modal header -->
                <div class="modal-header">
                    <h4 class="modal-title">Create New County</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- The modal body -->
                <div class="modal-body">
                    <label for="county_name">Name of County: </label>
                    <input type="text" name="county_name" id="county_name" class="form-control"/>
                </div>
                <!-- The modal footer -->
                <div class="modal-footer">
                    <button class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-neutral" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Create Subcounty-->
<div class="modal" id="createSubCountyModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <form>
                <!-- The modal header -->
                <div class="modal-header">
                    <h4 class="modal-title">Create New Sub-County</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- The modal body -->
                <div class="modal-body">

                    <div id="new-parish-county">
                        <label for="subcounty_county_input">County:</label>
                        <select name="subcounty_county_input" id="subcounty_county_input" class="form-control" required>
                            <option value="">Select County</option>
                            <?php
                            foreach ($county_settings->result() as $row) {
                                echo '<option value="' . $row->ID . '">' . $row->COUNTY . '</option>';
                            }

                            ?>
                        </select>
                    </div>
                    <label for="county_name">Name of Sub-County: </label>
                    <input type="text" name="county_name" id="county_name" class="form-control" required/>
                </div>
                <!-- The modal footer -->
                <div class="modal-footer">
                    <button class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-neutral" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Create Parish-->
<div class="modal" id="createParishModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <form>
                <!-- The modal header -->
                <div class="modal-header">
                    <h4 class="modal-title">Create New Parish</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- The modal body -->
                <div class="modal-body">

                    <label for="parish_county_input">County:</label>
                    <select name="parish_county_input" id="parish_county_input" class="form-control"
                            onchange="fetch_associated_subcounty_for_parish(this.value);" required>
                        <option value="">Select County</option>
                        <?php
                        foreach ($county_settings->result() as $row) {
                            echo '<option value="' . $row->ID . '">' . $row->COUNTY . '</option>';
                        }

                        ?>
                    </select>

                    <br>
                    <div id="parish_subcounty_input_div">
                        <label for="parish_subcounty_input">Sub-County:</label>
                        <select name="parish_subcounty_input" id="parish_subcounty_input" class="form-control" required>
                            <option value="">Select Sub-County</option>

                        </select>
                    </div>
                    <br>
                    <label for="parish_name">Name of Parish: </label>
                    <input type="text" name="parish_name" id="parish_name" class="form-control" required/>
                </div>
                <!-- The modal footer -->
                <div class="modal-footer">
                    <button class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-neutral" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Create Village-->
<div class="modal" id="createVillageModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <form>
                <!-- The modal header -->
                <div class="modal-header">
                    <h4 class="modal-title">Create New Village</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- The modal body -->
                <div class="modal-body">
                    <label for="village_county_input">County:</label>
                    <select name="village_county_input" id="village_county_input" class="form-control"
                            onchange="fetch_associated_subcounty_for_village(this.value);" required>
                        <option value="">Select County</option>
                        <?php
                        foreach ($county_settings->result() as $row) {
                            echo '<option value="' . $row->ID . '">' . $row->COUNTY . '</option>';
                        }

                        ?>
                    </select>

                    <br>
                    <div id="village_subcounty_input_div">
                        <label for="village_subcounty_input">Sub-County:</label>
                        <select name="village_subcounty_input" id="village_subcounty_input" class="form-control"
                                onchange="fetch_associated_parish_for_village(this.value);" required>
                            <option value="">Select Sub-County</option>

                        </select>
                    </div>
                    <br>
                    <div id="village_parish_input_div">
                        <label for="village_parish_input">Parish:</label>
                        <select name="village_parish_input" id="village_parish_input" class="form-control" required>
                            <option value="">Select Parish</option>

                        </select>
                    </div>
                    <br>
                    <label for="village_name">Name of Village: </label>
                    <input type="text" name="village_name" id="village_name" class="form-control" required/>
                </div>
                <!-- The modal footer -->
                <div class="modal-footer">
                    <button class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-neutral" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!--    Edit Dialogs    -->

<div class="modal" id="deleteLocationModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- The modal header -->
            <div class="modal-header">
                <h4 class="modal-title">Confirm Delete</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- The modal body -->
            <div class="modal-body">
                Are you sure you want to delete this Location?
            </div>
            <!-- The modal footer -->
            <div class="modal-footer">
                <button class="btn btn-danger">Yes, I'm Sure</button>
                <button type="button" class="btn btn-neutral" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- Javascript for the page  -->
<script type="text/javascript">
    function set_location_displayed(location_type) {
        if (location_type) {
            OptionValue = document.getElementById("location-display-selector").value;

            if (OptionValue === 'county') {
                document.getElementById("county-div").style.display = "block";
                document.getElementById("subcounty-div").style.display = "none";
                document.getElementById("parish-div").style.display = "none";
                document.getElementById("village-div").style.display = "none";
            } else if (OptionValue === 'subcounty') {
                document.getElementById("county-div").style.display = "none";
                document.getElementById("subcounty-div").style.display = "block";
                document.getElementById("parish-div").style.display = "none";
                document.getElementById("village-div").style.display = "none";
            } else if (OptionValue === 'parish') {
                document.getElementById("county-div").style.display = "none";
                document.getElementById("subcounty-div").style.display = "none";
                document.getElementById("parish-div").style.display = "block";
                document.getElementById("village-div").style.display = "none";
            } else if (OptionValue === 'village') {
                document.getElementById("county-div").style.display = "none";
                document.getElementById("subcounty-div").style.display = "none";
                document.getElementById("parish-div").style.display = "none";
                document.getElementById("village-div").style.display = "block";
            }
        }


    }

    //    Setting the dropdown for subcounty for parish insertion using ajax
    function fetch_associated_subcounty_for_parish(county_id) {
        if (county_id !== '') {
            $.ajax({
                url: "<?php echo base_url('Settings/Welcome/settings/fetch_subcounty_for_parish');?>",
                method: "POST",
                data: {county_id: county_id},
                success: function (data) {
                    document.getElementById('parish_subcounty_input_div').innerHTML = data;
                }
            });
        }
    }

    function fetch_associated_subcounty_for_village(county_id) {
        if (county_id !== '') {
            $.ajax({
                url: "<?php echo base_url('Settings/Welcome/settings/fetch_subcounty_for_village');?>",
                method: "POST",
                data: {village_county_id: county_id},
                success: function (data) {
                    document.getElementById('village_subcounty_input_div').innerHTML = data;
                }
            });
        }
    }

    function fetch_associated_parish_for_village(subcounty_id) {
        if (subcounty_id !== '') {
            $.ajax({
                url: "<?php echo base_url('Settings/Welcome/settings/fetch_parish_for_village');?>",
                method: "POST",
                data: {village_subcounty_id: subcounty_id},
                success: function (data) {
                    document.getElementById('village_parish_input_div').innerHTML = data;
                }
            });
        }
    }

</script>

