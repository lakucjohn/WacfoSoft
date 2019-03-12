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
    <!--<div class="row nowrap clear-both-sides">-->
    <!--    <div class="float-content-left">-->
    <!---->
    <!--    </div>-->
    <!--    <div class="float-content-right">-->
    <!--        <a class="btn btn-primary btn-md space-sm-right" href="#">Button a a a a a a a </a>-->
    <!--        <a class="btn btn-primary btn-md space-sm-right" href="#">Button b b b b b b b</a>-->
    <!--        <a class="btn btn-primary btn-md space-sm-right" href="#">Button c c c c c c c</a>-->
    <!--    </div>-->
    <!--</div>-->
    <!--</p>-->
<hr>
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Misean Cara Beneficiaries Technology Adoption in Vegetable and Crop Production
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Group ID</th>
                    <th>Improved Seeds</th>
                    <th>Underground Water</th>
                    <th>Pesticides</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>

                <?php

                foreach($data_set->result() as $row){
                    echo '
                        <tr title="Child Id">
                            <td>'.$row -> INDIVIDUAL_ID.'</td>
                            <td>'.$row -> USED_IMPROVED_SEEDS.'</td>
                            <td>'.$row -> USED_UNDERGROUND_WATER.'</td>
                            <td>'.$row -> USED_PESTICIDES.'</td>
                            <td>
                                <a href="' . site_url("production/adoption%20to%20technology-details/edit/$row->ID") . '" class="btn btn-link" title="Edit Survey Details"><i class="fa fa-edit fa-1x" style="color: green;"></i></a>
                                <a class="btn btn-link" title="Delete This Crop Misean Cara Baseline Survey" href="' . base_url('delete_data/delete_row/MISEAN_CARA_BENEFICIARIES_NEW/' . $row->ID) . '"><i class="fa fa-remove fa-1x" style="color: red;"></i></a>
                                <a href="' . site_url("production/adoption%20to%20technology-details/$row->ID") . '" class="btn btn-link" title="Read More about this Survey"><i class="fa fa-info-circle fa-1x"></i></a>
                                <a href="' . site_url("production/adoption%20to%20technology-info/generate-pdf/$row->ID") . '" class="btn btn-link" title="Generate PDF for this Crop Survey Information"><i class="fa fa-file-pdf-o fa-1x" style="color:red; "></i></a>
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
<div class="modal" id="deleteTechnologyAdoptionModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- The modal header -->
            <div class="modal-header">
                <h4 class="modal-title">Confirm Delete</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- The modal body -->
            <div class="modal-body">
                Are you sure you want to delete this Misean Cara Baseline Survey Information?
            </div>
            <!-- The modal footer -->
            <div class="modal-footer">
                <button class="btn btn-danger">Yes, I'm Sure</button>
                <button type="button" class="btn btn-neutral" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
