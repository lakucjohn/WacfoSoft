<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/10/18
 * Time: 8:54 PM
 */
?>

<!-- Example DataTables Card-->
<hr>
<p>
<div class="row nowrap clear-both-sides">
    <div class="float-content-left">

    </div>
    <div class="float-content-right">
        <a class="btn btn-primary btn-md space-sm-right" href="<?php echo site_url('trainings/new-training'); ?>"><i class="fa fa-plus-circle"></i> New Training</a>
        <a class="btn btn-success btn-md space-sm-right" href="#"><i class="fa fa-filter"></i> Filter</a>
        <a class="btn btn-danger btn-md space-sm-right" href="#"><i class="fa fa-file-pdf-o"></i> Generate Pdf</a>
    </div>
</div>
</p>
<hr>
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> List of Trainings</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size: 12px;">
                <thead>
                <tr>
                    <th>Date of training</th>
                    <th>Topic</th>
                    <th>Venue</th>
                    <th>Trainer</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>

                <?php

                foreach($data_set->result() as $row){
                    echo '
                        <tr title="' . $row->TOPIC . '" style="white-space: nowrap;">
                            <td>' . $row->DATE_OF_TRAINING . '</td>';
                    ?>

                    <td>
                        <?php
                        foreach ($courses->result() as $course) {
                            if ($course->CODE == $row->COURSE) {
                                foreach ($topics->result() as $topic) {
                                    if ($topic->ID == $row->TOPIC) {
                                        echo $topic->TOPIC;
                                    }
                                }
                            }
                        }
                        ?>
                    </td>
                    <?php
                    echo '<td>' . $row->VENUE . '</td>
                            <td>'.$row -> CONDUCTED_BY.'</td>
                            <td>
                                <a href="'.site_url("training-details/edit/$row->ID").'" class="btn btn-link" title="Edit Training Details"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                <button class="btn btn-link" title="Delete This Training" data-toggle="modal" data-target="#deleteTrainingModal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button>
                                <a href="'.site_url("training-details/$row->ID").'" class="btn btn-link" title="Read More about this Group"><i class="fa fa-info-circle fa-1x"></i></a>
                                <a href="'.site_url("training-info/generate-pdf/$row->ID").'" class="btn btn-link" title="Generate PDF for this Training\'s Information"><i class="fa fa-file-pdf-o fa-1x" style="color:red; "></i></a>
                                <a href="' . site_url("training-info/generate-attendance-sheet-pdf/$row->ID") . '" class="btn btn-link" title="Generate Blank Attendance Sheet for this Training"><i class="fa fa-users fa-1x" style="color:black; "></i></a>
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
<div class="modal fade in" id="deleteTrainingModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- The modal header -->
            <div class="modal-header">
                <h4 class="modal-title">Confirm Delete</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- The modal body -->
            <div class="modal-body">
                Are you sure you want to delete this Training and all its information?

                <p>&nbsp;</p>

                <p>
                    <small>The data to be lost</small>

                </p>
            </div>
            <!-- The modal footer -->
            <div class="modal-footer">
                <button class="btn btn-danger">Yes, I'm Sure</button>
                <button type="button" class="btn btn-neutral" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
