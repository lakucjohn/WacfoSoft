<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/10/18
 * Time: 8:47 PM
 */

?>

<!-- Example DataTables Card-->
<hr>
<p>
<div class="row nowrap clear-both-sides">
    <div class="float-content-left">

    </div>
    <div class="float-content-right">
        <a class="btn btn-primary btn-md space-sm-right" href="<?php echo site_url('children%20list/register-new-child'); ?>"><i class="fa fa-plus-circle"></i> New Child</a>
        <a class="btn btn-success btn-md space-sm-right" href="#"><i class="fa fa-filter"></i> Filter</a>
        <a class="btn btn-danger btn-md space-sm-right" href="#"><i class="fa fa-file-pdf-o"></i> Generate Pdf</a>
    </div>
</div>
</p>
<hr>
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Children in WACFO </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 12px;">
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

        foreach($children_list->result() as $row) {
            echo '
                <tr title="'.$row -> NAME.'">
                    <td>'.$row -> NAME.'</td>
                    <td>'.$row -> SEX.'</td>
                    <td>'.$row -> DATE_OF_BIRTH.'</td>
                    <td>';

            foreach ($disability_list->result() as $disability) {
                if ($disability->DISABILITY_ID == $row->VULNERABILITY) {
                    echo $disability->DISABILITY_NAME;
                }
            }

            echo '</td>
                    <td>'.$row -> DATE_OF_JOINING.'</td>
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

<!-- Modal Dialogs -->

<!-- The modal dialog for deletion -->
<div class="modal" id="deleteChildModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- The modal header -->
            <div class="modal-header">
                <h4 class="modal-title">Confirm Delete</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- The modal body -->
            <div class="modal-body">
                Are you sure you want to delete this Child and all related information?
            </div>
            <!-- The modal footer -->
            <div class="modal-footer">
                <button class="btn btn-danger">Yes, I'm Sure</button>
                <button type="button" class="btn btn-neutral" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
