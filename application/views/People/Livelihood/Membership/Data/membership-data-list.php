<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 7:35 AM
 */

?>


<!-- Example DataTables Card-->
<hr>
<p>
<div class="row nowrap clear-both-sides">
    <div class="float-content-left">

    </div>
    <div class="float-content-right">
        <a class="btn btn-primary btn-md space-sm-right" href="<?php echo site_url('membership/register-new-member');?>"><i class="fa fa-plus-circle"></i> New Member</a>
        <a class="btn btn-success btn-md space-sm-right" href="#"><i class="fa fa-filter"></i> Filter</a>
        <a class="btn btn-danger btn-md space-sm-right" href="#"><i class="fa fa-file-pdf-o"></i> Generate Pdf</a>
    </div>
</div>
</p>
<hr>
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> List all Members and their Livelihood Groups</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered js-exportable" id="dataTable" width="100%" cellspacing="0"
                   style="font-size: 12px;">
                <thead>
                <tr>
                    <th>Membership Id</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Vulnerability</th>
                    <th>Group</th>
                    <th>Telephone</th>
                    <th>Options</th>
                </tr>
                </thead>

                <tbody>
                <?php

                foreach($members_list->result() as $row){
                    echo '
                        <tr title="'.$row -> MEMBERSHIP_ID.'" style="white-space: nowrap;">
                            <td>'.$row -> MEMBERSHIP_ID.'</td>
                            <td>'.$row -> NAME.'</td>
                            <td>' . $row->SEX . '</td>';
                    echo '<td>';

                    foreach ($disability_list->result() as $disability) {
                        if ($disability->DISABILITY_ID == $row->VULNERABILITY) {
                            echo $disability->DISABILITY_NAME;
                        }
                    }
                    echo '</td>';


                    echo '<td>' . $row->GROUPS . '</td>
                            <td>'.$row -> TELEPHONE.'</td>
                            <td>
                                <a href="'.site_url("member-details/edit/$row->ID").'" class="btn btn-link" title="Edit Member Information"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                <!-- <button class="btn btn-link" title="Delete This Member" data-toggle="modal" data-target="#deleteMemberModal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button>-->                            
                                <a class="btn btn-link" title="Delete This Member" href="' . base_url('delete_data/delete_row/MEMBERSHIP/' . $row->ID) . '"><i class="fa fa-remove fa-1x" style="color: red;"></i></a>
                                <a href="'.site_url("member-details/$row->ID").'" class="btn btn-link" title="Read More about this Group"><i class="fa fa-info-circle fa-1x"></i></a>
                                <a href="'.site_url("member-info/generate-pdf/$row->ID").'" class="btn btn-link" title="Generate PDF for this Member\'s Information"><i class="fa fa-file-pdf-o fa-1x" style="color:red; "></i></a>
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
<div class="modal" id="deleteMemberModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- The modal header -->
            <div class="modal-header">
                <h4 class="modal-title">Confirm Delete</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- The modal body -->
            <div class="modal-body">
                Are you sure you want to delete this Member and all information related?
            </div>
            <!-- The modal footer -->
            <div class="modal-footer">
                <button class="btn btn-danger">Yes, I'm Sure</button>
                <button type="button" class="btn btn-neutral" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
