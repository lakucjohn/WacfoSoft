<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/10/18
 * Time: 8:10 PM
 */

?>



<!-- Example DataTables Card-->
<hr>
<p>
<div class="row nowrap clear-both-sides">
    <div class="float-content-left" style="width: 10%;">

    </div>
    <div class="float-content-right" style="width: 90%;">
        <div class="float-content-right">
            <a class="btn btn-primary btn-md space-sm-right" href="<?php echo site_url('production/misean%20cara%20baseline%20surveys/new%20misean%20cara%20baseline%20survey%20economic%20%20security'); ?>"><i class="fa fa-plus-circle"></i> New Misean Cara Baseline Survey Economic Security</a>
            <a class="btn btn-success btn-md space-sm-right" href="#"><i class="fa fa-filter"></i> Filter</a>
            <a class="btn btn-danger btn-md space-sm-right" href="#"><i class="fa fa-file-pdf-o"></i> Generate Pdf</a>
        </div>
    </div>
</div>
</p>
<hr>
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Misean Cara Baseline Survey List</div>
    <div class="card-body">
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

                foreach($data_set->result() as $row){
                    echo '
                        <tr title="Child Id">
                            <td>'.$row -> GRANTEE.'</td>
                            <td>'.$row -> GROUP_NAME.'</td>
                            <td>'.$row -> DISTRICT.'</td>
                            <td>'.$row -> COUNTY.'</td>
                            <td>'.$row -> SUBCOUNTY.'</td>
                            <td>
                                <a href="' . site_url("production/misean%20cara%20baseline%20survey-details/edit/$row->ID") . '" class="btn btn-link" title="Edit Survey Details"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                <button class="btn btn-link" title="Delete This Crop Misean Cara Baseline Survey" data-toggle="modal" data-target="#deleteMiseanCaraBaselineSurveyModal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button>
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


<!-- Modal Dialogs -->


<!-- The modal dialog for deletion -->
<div class="modal" id="deleteMiseanCaraBaselineSurveyModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- The modal header -->
            <div class="modal-header">
                <h4 class="modal-title">Confirm Delete</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- The modal body -->
            <div class="modal-body">
                Are you sure you want to delete this Misean Cara Baseline Survey Information?
            </div>
            <!-- The modal footer -->
            <div class="modal-footer">
                <button class="btn btn-danger">Yes, I'm Sure</button>
                <button type="button" class="btn btn-neutral" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
