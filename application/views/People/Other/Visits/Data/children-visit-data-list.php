<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/5/19
 * Time: 2:00 AM
 */
?>

<hr>
<p>
<div class="row nowrap clear-both-sides">
    <div class="float-content-left">

    </div>
    <div class="float-content-right">
        <a class="btn btn-primary btn-md space-sm-right" href="<?php echo site_url('visitations/record-a-new-visit'); ?>"><i class="fa fa-plus-circle"></i> New Child</a>
        <a class="btn btn-success btn-md space-sm-right" href="#"><i class="fa fa-filter"></i> Filter</a>
        <a class="btn btn-danger btn-md space-sm-right" href="#"><i class="fa fa-file-pdf-o"></i> Generate Pdf</a>
    </div>
</div>
</p>
<hr>
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Children Visitation Data </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 12px;">
                <thead>
                <tr>
                    <th>Date of Visit</th>
                    <th>Child ID</th>
                    <th>Child Name</th>
                    <th>Nature of Visit</th>
                    <th>Project</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>
                <?php

                foreach($data_set->result() as $row) {
                    echo '
                <tr title="'.$row -> CHILD_NAME.'">
                    <td>'.$row -> DATE_OF_VISIT.'</td>
                    <td>'.$row -> CHILD_ID_VISITED.'</td>
                    <td>'.$row -> CHILD_NAME.'</td>
                    <td>'.$row -> KIND_OF_VISIT.'</td>
                    <td>'.$row -> PROJECT.'</td>
                    <td>
                        <a href="' . site_url("visitation-details/edit/$row->ID") . '" class="btn btn-link" title="Edit Visit Information"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                        <button class="btn btn-link" title="Delete This Child" data-toggle="modal" data-target="#deleteVisitModal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button>
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

<!-- Modal Dialogs -->


<!-- The modal dialog for deletion -->
<div class="modal" id="deleteVisitModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- The modal header -->
            <div class="modal-header">
                <h4 class="modal-title">Confirm Delete</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- The modal body -->
            <div class="modal-body">
                Are you sure you want to delete this Visitation information?
            </div>
            <!-- The modal footer -->
            <div class="modal-footer">
                <button class="btn btn-danger">Yes, I'm Sure</button>
                <button type="button" class="btn btn-neutral" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

