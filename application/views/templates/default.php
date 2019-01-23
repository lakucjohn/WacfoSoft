<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 11/29/18
 * Time: 11:55 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $title; ?></title>
    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('Assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('Assets/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url('Assets/vendor/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('Assets/css/sb-admin.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('Assets/css/custom-css.css') ?>" rel="stylesheet">

    <style>
        .navbar-sidenav{
            overflow: auto;
        }
    </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo site_url('dashboard'); ?>">WACFOSOFT</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="<?php echo site_url('dashboard'); ?>">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#peopleCollapseMulti" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-group"></i>
                    <span class="nav-link-text">People</span>
                </a>
                <ul class="sidenav-second-level collapse" id="peopleCollapseMulti">

                    <li>
                        <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#livelihoodCollapseMulti2">Livelihood</a>
                        <ul class="sidenav-third-level collapse" id="livelihoodCollapseMulti2">
                            <li>
                                <a href="<?php echo site_url('groupings'); ?>">Groupings</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('membership'); ?>">Membership</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#childrenCollapseMulti2">Children</a>
                        <ul class="sidenav-third-level collapse" id="childrenCollapseMulti2">
                            <li>
                                <a href="<?php echo site_url('children%20list'); ?>">Children List</a>
                            </li>
                            <li>
                                <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#assessmentCollapseMulti2">Assessments</a>
                                <ul class="sidenav-fourth-level collapse" id="assessmentCollapseMulti2">

                                    <li>
                                        <a href="<?php echo site_url('assessments/form-1'); ?>">Assessment 1</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('assessments/form-2'); ?>">Assessment 2</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="<?php echo site_url('visitations'); ?>">Visit Records</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo site_url('staff'); ?>">Staff</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Trainings">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseTrainings" data-parent="#exampleAccordion">
                    <i class="fa fa-institution"></i>
                    <span class="nav-link-text">Trainings</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseTrainings">
                    <li>
                        <a href="<?php echo site_url('courses%20and%20topics'); ?>">Courses and Topics</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('trainings'); ?>">Trainings</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Monitoring">
                <a class="nav-link" href="<?php echo site_url('monitoring'); ?>">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Monitoring</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#productionCollapseMulti" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-sitemap"></i>
                    <span class="nav-link-text">Production</span>
                </a>
                <ul class="sidenav-second-level collapse" id="productionCollapseMulti">
                    <li>
                        <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#foodCollapseMulti2">Food Category</a>
                        <ul class="sidenav-third-level collapse" id="foodCollapseMulti2">
                            <li>
                                <a href="<?php echo site_url('production/crop%20production'); ?>">Crops and
                                    Vegetables</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('production/fish%20farming'); ?>">Fish Farming</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo site_url('production/misean%20cara%20baseline%20surveys'); ?>" style="font-size: 14px;">Misean Cara Baseline Survey Economic Security</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('production/adoption%20to%20technology'); ?>">Technology Adoption</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('production/challenges'); ?>">Challenges</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('production/increase'); ?>">Increase In Production</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('production/marketing'); ?>">Marketing</a>
                    </li>

                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-book"></i>
                    <span class="nav-link-text">Miscellaneous</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                        <a href="<?php echo site_url('miscellaneous%20pilot%20studies'); ?>" style="font-size: 14px;">Livelihood and Nutrition Household Survey</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('miscellaneous%20baseline%20surveys'); ?>" style="font-size: 14px;">Porticus Baseline Assessment Survey</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('miscellaneous%20hygiene%20and%20nutrition'); ?>" style="font-size: 14px;">Hygiene and Nutrition Checklist</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a class="nav-link" href="<?php echo site_url('backup%20and%20restore/backup'); ?>">
                    <i class="fa fa-fw fa-link"></i>
                    <span class="nav-link-text">Back up and Restore</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a class="nav-link" href="<?php echo site_url('search'); ?>">
                    <i class="fa fa-fw fa-filter"></i>
                    <span class="nav-link-text">Query WacfoSoft</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-bell"></i>
                    <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
                    <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">New Alerts:</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item small" href="#">View all alerts</a>
                </div>
            </li>
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search for...">
                        <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
                    </div>
                </form>
            </li>
            <li class="nav-item space-nav-item">
                <a class="nav-link  mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Women and Children First Organisation<i class="fa fa-fw fa-angle-down"></i>

                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo site_url('settings'); ?>">
                        <i class="fa fa-fw fa-wrench"></i>
                        Settings
                    </a>


                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                </div>

            </li>
        </ul>
    </div>
</nav>
<div class="content-wrapper">
    <div class="container-fluid">
        <?php echo $body; ?>
    </div>
</div>

<!-- /.container-fluid-->
<!-- /.content-wrapper-->

    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright © Women and Children First Organization</small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo site_url('auth/logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('Assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('Assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('Assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('Assets/vendor/chart.js/Chart.min.js') ?>"></script>
    <script src="<?php echo base_url('Assets/vendor/datatables/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('Assets/vendor/datatables/dataTables.bootstrap4.js') ?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('Assets/js/sb-admin.min.js') ?>"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url('Assets/js/sb-admin-datatables.min.js') ?>"></script>
    <script src="<?php echo base_url('Assets/js/sb-admin-charts.min.js') ?>"></script>
<script src="<?php echo base_url('Assets/js/app_main.js') ?>"></script>
</div>
</body>



</html>