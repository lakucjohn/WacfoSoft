<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/3/19
 * Time: 4:39 PM
 */
?>
<!--<style>-->
<!--    .card-header{-->
<!--        height: 40px;-->
<!--        padding: .1rem 1.25rem;-->
<!--    }-->
<!--    .setting-item{-->
<!--        width: 100%;-->
<!--        text-align: left;-->
<!--    }-->
<!--    .setting-item.collapsed::after{-->
<!--        font-family: "Font Awesome 5 Free";-->
<!--        /*content: '\f054';*/-->
<!--        content: '\f138';-->
<!--        float: right;-->
<!--        font-weight: 900;-->
<!--    }-->
<!--    .setting-item::after{-->
<!--        font-family: "Font Awesome 5 Free";-->
<!--        /*content: '\f078';*/-->
<!--        content: '\f13a';-->
<!--        float: right;-->
<!--        font-weight: 900;-->
<!--    }-->
<!--</style>-->
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
                <div class="card-header" id="schoolHeading">
                    <h5 class="mb-0">
                        <button class="btn btn-link setting-item collapsed setting-item" data-toggle="collapse" data-target="#school" aria-expanded="false" aria-controls="collapseOne">
                            Livelihood Group categories
                        </button>
                    </h5>
                </div>

                <div id="school" class="collapse" aria-labelledby="schoolHeading" data-parent="#accordion">
                    <div class="card-body">
                        These are the categories of livelihood groups that are supported by the organization
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="classHeading">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed setting-item" data-toggle="collapse" data-target="#class" aria-expanded="false" aria-controls="collapseOne">
                            Location
                        </button>
                    </h5>
                </div>

                <div id="class" class="collapse" aria-labelledby="classHeading" data-parent="#accordion">
                    <div class="card-body">
                        This is the area scope of that the organization support can reach
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="subjectsHeading">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed setting-item" data-toggle="collapse" data-target="#subjects" aria-expanded="false" aria-controls="collapseOne">
                            Disabilities
                        </button>
                    </h5>
                </div>

                <div id="subjects" class="collapse" aria-labelledby="subjectsHeading" data-parent="#accordion">
                    <div class="card-body">
                        These are the different types of disabilities that affect children and the organization can support
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="gradingHeading">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed setting-item" data-toggle="collapse" data-target="#grading" aria-expanded="false" aria-controls="collapseOne">
                            User Authentication
                        </button>
                    </h5>
                </div>

                <div id="grading" class="collapse" aria-labelledby="gradingHeading" data-parent="#accordion">
                    <div class="card-body">
                        These are the details of the currently authenticated user to operate in this system
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
                        These are the only acceptable departments operating the organization and the system is constrained to work with these departments only
                    </div>
                </div>
            </div>

        </div><br>

    </div>
    <br><br>
    <div class="row">
        <div class="col-md-12">
            <strong><em>Note: </em></strong><br><br>
            These settings are used within other forms in the system for consistence in data collection, data manipulation, data integrity and data validation

        </div>
    </div>

</div>

