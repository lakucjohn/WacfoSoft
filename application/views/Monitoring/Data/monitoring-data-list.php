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
    <div class="float-content-left">

    </div>
    <div class="float-content-right">
        <a class="btn btn-primary btn-md space-sm-right" href="<?php echo site_url('monitoring/new-field-support-visit'); ?>"><i class="fa fa-plus-circle"></i> New Field Support Visit</a>
        <a class="btn btn-warning btn-md space-sm-right" href="<?php echo site_url('monitoring/new-group-savings-tracking'); ?>"><i class="fa fa-plus-circle"></i> New Savings Information</a>
        <a class="btn btn-success btn-md space-sm-right" href="#"><i class="fa fa-filter"></i> Filter</a>
        <a class="btn btn-danger btn-md space-sm-right" href="#"><i class="fa fa-file-pdf-o"></i> Generate Pdf</a>
    </div>
</div>
</p>
<hr>
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> List of Monitoring Visits</div>
    <div class="card-body">
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

                foreach($data_set->result() as $row){
                    echo '
                        <tr title="' . $row->TRACK_ID . '">
                            <td>' . $row->STAFF_ID . '</td>
                            <td>' . $row->STAFF_ID . '</td>
                            <td>' . $row->DATE_OF_VISIT . '</td>
                            <td>' . $row->VISIT_TYPE . '</td>
                            <td>'.$row -> TRACK_ID.'</td>
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


<!-- Modal Dialogs -->


<!-- The modal dialog for deletion -->
<div class="modal" id="deleteMonitoringModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- The modal header -->
            <div class="modal-header">
                <h4 class="modal-title">Confirm Delete</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- The modal body -->
            <div class="modal-body">
                Are you sure you want to delete this Monitoring Record Completely?
            </div>
            <!-- The modal footer -->
            <div class="modal-footer">
                <button class="btn btn-danger">Yes, I'm Sure</button>
                <button type="button" class="btn btn-neutral" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

