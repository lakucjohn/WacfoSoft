<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/10/18
 * Time: 8:51 PM
 */
#include (APPPATH.'models/Settings/Location_model.php');
//$location = new Location_model();
?>


<!-- Example DataTables Card-->
<hr>
<p>
<div class="row nowrap clear-both-sides">
    <div class="float-content-left">

    </div>
    <div class="float-content-right">
        <a class="btn btn-primary btn-md space-sm-right" href="<?php echo site_url('groupings/register-new-livelihood-group'); ?>"><i class="fa fa-plus-circle"></i> New Livelihood Group</a>
        <a class="btn btn-success btn-md space-sm-right" href="#"><i class="fa fa-filter"></i> Filter</a>
        <a class="btn btn-danger btn-md space-sm-right" href="#"><i class="fa fa-file-pdf-o"></i> Generate Pdf</a>
    </div>
</div>
</p>
<hr>

<?php
if(isset($group_list)){

    ?>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> List of all Livelihood Groups</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 12px;">
                    <thead>
                    <tr>
                        <th>Group Id</th>
                        <th>Group Name</th>
                        <th>Category</th>
                        <th>Location</th>
                        <th>Options</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php

                        foreach($group_list->result() as $row){
                            echo '
                                <tr title="'.$row -> GROUP_ID.'" style="white-space: nowrap;">
                                    <td>'.$row -> GROUP_ID.'</td>
                                    <td>'.$row -> NAME.'</td>
                                    <td>
                                    ';

                            foreach ($livelihood_categories->result() as $category) {
                                if ($category->ID == $row->TYPE) {
                                    ?>
                                    <?php echo $category->CATEGORYNAME; ?>
                                    <?php
                                }
                            }
                            echo '</td>
                                <td>';

                            foreach ($villages->result() as $village) {
                                if ($village->ID == $row->LOCATION) {
                                    ?>
                                    <?php echo $village->VILLAGE; ?>
                                    <?php
                                }
                            }

                            echo '</td>
                                    <td>
                                        <a href="'.site_url("group-details/edit/$row->ID").'" class="btn btn-link" title="Edit Group Information"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                        <!-- <button class="btn btn-link delete-btn" title="Delete This Group" data-toggle="modal" data-id="' . $row->ID . '" data-target="#deleteGroupingModal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button> -->                                        
                                        <a class="btn btn-link" title="Delete This Group" href="' . base_url('delete_data/delete_row/GROUPS/' . $row->ID) . '"><i class="fa fa-remove fa-1x" style="color: red;"></i></a>
                                        <a href="'.site_url("group-details/$row->ID").'" class="btn btn-link" title="Read More about this Group"><i class="fa fa-info-circle fa-1x"></i></a>
                                        <a href="'.site_url("group-info/generate-pdf/$row->ID").'" class="btn btn-link" title="Generate PDF for this Group\'s Information"><i class="fa fa-file-pdf-o fa-1x" style="color:red; "></i></a>
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
<?php
}

?>



<!-- Modal Dialogs -->


<!-- The modal dialog for deletion -->
<div class="modal" id="deleteGroupingModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <form action="" method="post">
                <!-- The modal header -->
                <div class="modal-header">
                    <h4 class="modal-title">Confirm Delete</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- The modal body -->
                <div class="modal-body">
                    Are you sure you want to delete this Group and all information related to it?
                </div>
                <input type="text" name="RowToDelete" id="RowToDelete"/>
                <!-- The modal footer -->
                <div class="modal-footer">
                    <button class="btn btn-danger">Yes, I'm Sure</button>
                    <button type="button" class="btn btn-neutral" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>