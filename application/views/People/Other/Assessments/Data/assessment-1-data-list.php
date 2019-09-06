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
        <a class="btn btn-primary btn-md space-sm-right" href="<?php echo site_url('assessments/form-1/record-a-new-assessment'); ?>"><i class="fa fa-plus-circle"></i> New Assessment 1 Form</a>
        <a class="btn btn-success btn-md space-sm-right" href="#"><i class="fa fa-filter"></i> Filter</a>
        <a class="btn btn-danger btn-md space-sm-right" href="#"><i class="fa fa-file-pdf-o"></i> Generate Pdf</a>
    </div>
</div>
</p>
<hr>
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Assessment Form 1 Data </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered js-exportable" id="dataTable" width="100%" cellspacing="0"
                   style="font-size: 12px;">
                <thead>
                <tr>
                    <th>Child ID</th>
                    <th>Child Name</th>
                    <th>Sex</th>
                    <th>Health centre</th>
                    <th>Disability Type</th>
                    <th>County</th>
                    <th>Parish</th>
                    <th>Village</th>
                    <th>Date Assessed</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>
                <?php

                foreach($data_set->result() as $row) {
                    echo '
                <tr title="' . $row->CHILD_ID . '">
                    <td>' . $row->CHILD_ID . '</td>';
                    ?>
                    <td>
                        <?php
                        foreach ($children_list->result() as $child) {
                            if ($child->CHILD_ID == $row->CHILD_ID) {
                                echo $child->NAME;
                            }
                        }
                        ?>
                    </td>
                    <?php echo
                        '<td>' . $row->SEX . '</td>
                    <td>'.$row -> HEALTH_CENTRE.'</td>
                    <td>' . $row->DISABILITY_TYPE . '</td>'; ?>

                    <?php
                    foreach ($county_settings->result() as $county) {
                        if ($county->ID == $row->COUNTY) {
                            echo '<td>' . $county->COUNTY . '</td>';
                        }
                    }
                    foreach ($parish_settings->result() as $parish) {
                        if ($parish->ID == $row->PARISH) {
                            echo '<td>' . $parish->PARISH . '</td>';
                        }
                    }
                    foreach ($village_settings->result() as $village) {
                        if ($village->ID == $row->VILLAGE) {
                            echo '<td>' . $village->VILLAGE . '</td>';
                        }
                    }

                    echo '
                    <td>'.$row -> DATE_ENTERED.'</td>
                    <td>
                        <a href="' . site_url("assessments/form-1-details/edit/$row->ID") . '" class="btn btn-link" title="Edit Assessment 1 Information"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                        <!-- <button class="btn btn-link" title="Delete This Child" data-toggle="modal" data-target="#deleteAssessment1Modal"><i class="fa fa-remove fa-1x" style="color: red;"></i></button> -->                            
                        <a class="btn btn-link" title="Delete This Record" href="' . base_url('delete_data/delete_row/ASSESSMENT_1_RECORDS/' . $row->ID) . '"><i class="fa fa-remove fa-1x" style="color: red;"></i></a>
                        <a href="' . site_url("assessments/form-1-details/$row->ID") . '" class="btn btn-link" title="Read More about this Assessment"><i class="fa fa-info-circle fa-1x"></i></a>
                        <a href="' . site_url("assessments/form-1/generate-pdf/$row->ID") . '" class="btn btn-link" title="Generate PDF for this Assessment Information"><i class="fa fa-file-pdf-o fa-1x" style="color:red; "></i></a>
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
<div class="modal" id="deleteAssessment1Modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- The modal header -->
            <div class="modal-header">
                <h4 class="modal-title">Confirm Delete</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- The modal body -->
            <div class="modal-body">
                Are you sure you want to delete this Assessment 1 information?
            </div>
            <!-- The modal footer -->
            <div class="modal-footer">
                <button class="btn btn-danger">Yes, I'm Sure</button>
                <button type="button" class="btn btn-neutral" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

