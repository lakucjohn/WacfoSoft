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
        <a class="btn btn-primary btn-md space-sm-right" href="<?php echo site_url('staff/register-new'); ?>"><i class="fa fa-plus-circle"></i> New Staff</a>
        <a class="btn btn-success btn-md space-sm-right" href="#"><i class="fa fa-filter"></i> Filter</a>
        <a class="btn btn-danger btn-md space-sm-right" href="#"><i class="fa fa-file-pdf-o"></i> Generate Pdf</a>
    </div>
</div>
</p>
<hr>
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Staff Members of WACFO</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered js-exportable" id="dataTable" width="100%" cellspacing="0"
                   style="font-size: 12px;">
                <thead>
                <tr>
                    <th>Staff Id</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Email Address</th>
                    <th>Telephone</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>
                <?php

                foreach($staff_list->result() as $row){
                    echo '
                        <tr title="'.$row -> STAFF_ID.'" style="white-space: nowrap;">
                            <td>'.$row -> STAFF_ID.'</td>
                            <td>'.$row -> NAME.'</td>
                            <td>'.$row -> ROLE.'</td>
                            <td>'.$row -> EMAIL_ADDRESS.'</td>
                            <td>'.$row -> TELEPHONE.'</td>
                            <td>
                                <a href="'.site_url("staff-details/edit/$row->ID").'" class="btn btn-link" title="Edit Staff Information"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                <!-- <button class="btn btn-link" title="Delete This Staff Member" data-toggle="modal" data-target="#deleteStaffModal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button> -->                            
                                <a class="btn btn-link" title="Delete This Staff Member" href="' . base_url('delete_data/delete_row/ORGANIZATION_STAFF_NEW/' . $row->ID) . '"><i class="fa fa-remove fa-1x" style="color: red;"></i></a>
                                <a href="'.site_url("staff-details/$row->ID").'" class="btn btn-link" title="Read More about this Staff"><i class="fa fa-info-circle fa-1x"></i></a>
                                <a href="'.site_url("staff-info/generate-pdf/$row->ID").'" class="btn btn-link" title="Generate PDF for this Staff\'s Information"><i class="fa fa-file-pdf-o fa-1x" style="color:red; "></i></a>
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
<div class="modal" id="deleteStaffModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- The modal header -->
            <div class="modal-header">
                <h4 class="modal-title">Confirm Delete</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- The modal body -->
            <div class="modal-body">
                Are you sure you want to delete this Staff?
            </div>
            <!-- The modal footer -->
            <div class="modal-footer">
                <button class="btn btn-danger">Yes, I'm Sure</button>
                <button type="button" class="btn btn-neutral" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

