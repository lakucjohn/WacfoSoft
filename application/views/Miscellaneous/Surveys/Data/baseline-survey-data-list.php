<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/10/18
 * Time: 8:48 PM
 */
?>



<!-- Example DataTables Card-->
<hr>
<p>
<div class="row">
    <div class="col-md-1">

    </div>
    <div class="col-md-10">
        <?php
        if ($this->session->set_flashdata('success_msg')) {

            ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('success_msg') ?>
            </div>
            <?php
        }

        if ($this->session->flashdata('error_msg')) {

            ?>
            <div class="alert alert-danger">
                <?php echo $this->session->set_flashdata('error_msg') ?>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<div class="row nowrap clear-both-sides">
    <div class="float-content-left">

    </div>
    <div class="float-content-right">
        <a class="btn btn-primary btn-md space-sm-right" href="miscellaneous%20baseline%20survey/new_assessment"><i class="fa fa-plus-circle"></i> New Porticus Baseline Survey</a>
        <a class="btn btn-success btn-md space-sm-right" href="#"><i class="fa fa-filter"></i> Filter</a>
        <a class="btn btn-danger btn-md space-sm-right" href="#"><i class="fa fa-file-pdf-o"></i> Generate Pdf</a>
    </div>
</div>
</p>
<hr>
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Porticus Baseline Assessments</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 12px;">
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

                foreach($data_set->result() as $row){
                    echo '
                        <tr title="'.$row -> NAME_OF_RESPONDENT.'" style="white-space: nowrap;">
                            <td>'.$row -> NAME_OF_RESPONDENT.'</td>
                            <td>'.$row -> AGE.'</td>
                            <td>'.$row -> VILLAGE.'</td>
                            <td>'.$row -> GENDER.'</td>
                            <td>'.$row -> NAME_OF_VULNERABLE.'</td>
                            <td>
                                <a href="'.site_url("miscellaneous%20baseline%20survey-details/edit/$row->ID").'" class="btn btn-link" title="Edit Porticus Baseline Survey Details"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                <!-- <button class="btn btn-link" title="Delete This Porticus Baseline Survey Information" data-toggle="modal" data-target="#deleteBaselineSurveyModal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button> -->                           
                                <a class="btn btn-link" title="Delete This Record" href="' . base_url('delete_data/delete_row/PORTICUS_BASELINE_ASSESSMENTS/' . $row->ID) . '"><i class="fa fa-remove fa-1x" style="color: red;"></i></a>
                                <a href="'.site_url("miscellaneous%20baseline%20survey-details/$row->ID").'" class="btn btn-link" title="Read More about this Porticus Baseline Survey Information"><i class="fa fa-info-circle fa-1x"></i></a>
                                <a href="'.site_url("miscellaneous%20baseline%20survey-info/generate-pdf/$row->ID").'" class="btn btn-link" title="Generate PDF for this Porticus Baseline Survey Information"><i class="fa fa-file-pdf-o fa-1x" style="color:red; "></i></a>
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




<!-- Modal Dialogs -->


<!-- The modal dialog for deletion -->
<div class="modal" id="deleteBaselineSurveyModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- The modal header -->
            <div class="modal-header">
                <h4 class="modal-title">Confirm Delete</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- The modal body -->
            <div class="modal-body">
                Are you sure you want to delete this Baseline Survey?
            </div>
            <!-- The modal footer -->
            <div class="modal-footer">
                <button class="btn btn-danger">Yes, I'm Sure</button>
                <button type="button" class="btn btn-neutral" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


