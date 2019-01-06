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
<div class="row nowrap clear-both-sides">
    <div class="float-content-left">

    </div>
    <div class="float-content-right">
        <a class="btn btn-primary btn-md space-sm-right" href="<?php echo site_url('miscellaneous%20hygiene%20and%20nutrition/new-recording'); ?>"><i class="fa fa-plus-circle"></i> New Hygiene and Nutrition Checklist</a>
        <a class="btn btn-success btn-md space-sm-right" href="#"><i class="fa fa-filter"></i> Filter</a>
        <a class="btn btn-danger btn-md space-sm-right" href="#"><i class="fa fa-file-pdf-o"></i> Generate Pdf</a>
    </div>
</div>
</p>
<hr>
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Hygiene and Nutrition Checklist</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 12px;">
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

                foreach($data_set->result() as $row){
                    echo '
                        <tr title="'.$row -> NAME_OF_FARMER.'" style="white-space: nowrap;">
                            <td>'.$row -> NAME_OF_FARMER.'</td>
                            <td>'.$row -> SEX.'</td>
                            <td>'.$row -> GROUP_NAME.'</td>
                            <td>
                                <a href="'.site_url("miscellaneous%20hygiene%20and%20nutrition-details/edit/$row->ID").'" class="btn btn-link" title="Edit Hygiene and Nutrition Details"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                <button class="btn btn-link" title="Delete This Pilot Study" data-toggle="modal" data-target="#deleteHygieneAndNutritionModal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button>
                                <a href="'.site_url("miscellaneous%20hygiene%20and%20nutrition-details/$row->ID").'" class="btn btn-link" title="Read More about this Hygiene and Nutrition Information"><i class="fa fa-info-circle fa-1x"></i></a>
                                <a href="'.site_url("miscellaneous%20hygiene%20and%20nutrition-info/generate-pdf/$row->ID").'" class="btn btn-link" title="Generate PDF for this Hygiene and Nutrition Information"><i class="fa fa-file-pdf-o fa-1x" style="color:red; "></i></a>
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
<div class="modal" id="deleteHygieneAndNutritionModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- The modal header -->
            <div class="modal-header">
                <h4 class="modal-title">Confirm Delete</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- The modal body -->
            <div class="modal-body">
                Are you sure you want to delete this Hygiene and Nutrition Checklist?
            </div>
            <!-- The modal footer -->
            <div class="modal-footer">
                <button class="btn btn-danger">Yes, I'm Sure</button>
                <button type="button" class="btn btn-neutral" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

