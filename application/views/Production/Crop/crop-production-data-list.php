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
        <a class="btn btn-primary btn-md space-sm-right" href="#"><i class="fa fa-plus-circle"></i> New Crop Production Record</a>
        <a class="btn btn-success btn-md space-sm-right" href="#"><i class="fa fa-filter"></i> Filter</a>
        <a class="btn btn-danger btn-md space-sm-right" href="#"><i class="fa fa-file-pdf-o"></i> Generate Pdf</a>
    </div>
</div>
</p>
<hr>
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Crop Production Information</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Individual</th>
                    <th>Crop</th>
                    <th>Income</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>

                <?php

                foreach($data_set->result() as $row){
                    echo '
                        <tr title="Child Id">
                            <td>'.$row -> INDIVIDUAL.'</td>
                            <td>'.$row -> CROP.'</td>
                            <td>'.$row -> INCOME.'</td>
                            <td>
                                <a href="'.site_url("production/crop%20production-details/edit/$row->ID").'" class="btn btn-link" title="Edit Training Details"><i class="fa fa-edit fa-2x" style="color: green;"></i></a>
                                <button class="btn btn-link" title="Delete This Crop Production Record" data-toggle="modal" data-target="#deleteCropProductionModal"><i class="fa fa-remove fa-2x" style="color: red;"></i></button>
                                <a href="'.site_url("production/crop%20production-details/$row->ID").'" class="btn btn-link" title="Read More about this Crop Production"><i class="fa fa-info-circle fa-2x"></i></a>
                                <a href="'.site_url("production/crop%20production-info/generate-pdf/$row->ID").'" class="btn btn-link" title="Generate PDF for this Crop Production Information"><i class="fa fa-file-pdf-o fa-2x" style="color:red; "></i></a>
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
<div class="modal" id="deleteCropProductionModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- The modal header -->
            <div class="modal-header">
                <h4 class="modal-title">Confirm Delete</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- The modal body -->
            <div class="modal-body">
                Are you sure you want to delete this Crop Production Information?
            </div>
            <!-- The modal footer -->
            <div class="modal-footer">
                <button class="btn btn-danger">Yes, I'm Sure</button>
                <button type="button" class="btn btn-neutral" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
