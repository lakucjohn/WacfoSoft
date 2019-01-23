<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/9/19
 * Time: 10:50 PM
 */
?>
<!-- Example DataTables Card-->
<hr>
<p>
<div class="row nowrap clear-both-sides">
    <div class="float-content-left">

    </div>
    <div class="float-content-right">
        <a class="btn btn-primary btn-md space-sm-right" href="<?php echo site_url('location/new-village'); ?>"><i
                    class="fa fa-plus-circle"></i> New Village</a>
    </div>
</div>
</p>
<hr>
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> List of acceptable location information
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 12px;">
                <thead>
                <tr>
                    <th>County</th>
                    <th>Sub-County</th>
                    <th>Parish</th>
                    <th>Village</th>
                    <th>Prefix Code</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>
                <?php

                foreach ($location_list->result() as $row) {
                    echo '
                        <tr title="' . $row->STAFF_ID . '" style="white-space: nowrap;">
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                            <td>
                                <a href="' . site_url("location-details/edit/1") . '" class="btn btn-link" title="Edit Location Information"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                <button class="btn btn-link" title="Delete This Location" data-toggle="modal" data-target="#deleteLocationModal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button>
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
<div class="modal" id="deleteLocationModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- The modal header -->
            <div class="modal-header">
                <h4 class="modal-title">Confirm Delete</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- The modal body -->
            <div class="modal-body">
                Are you sure you want to delete this Location?
            </div>
            <!-- The modal footer -->
            <div class="modal-footer">
                <button class="btn btn-danger">Yes, I'm Sure</button>
                <button type="button" class="btn btn-neutral" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

