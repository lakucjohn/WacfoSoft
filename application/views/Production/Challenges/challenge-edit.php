<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/10/18
 * Time: 8:10 PM
 */

?>

<h3>Edit Information on Production Challenge</h3>
<hr>
<div class="document-part-content">
    <div class="row">
        <div class="col-md-4">
            <label for="name_of_the_grantee">Name of the Grantee</label>
            <input type="text" name="name_of_the_grantee" id="name_of_the_grantee" class="form-control" disabled/>
        </div>
        <div class="col-md-4">
            <label for="group_id">Group ID</label>
            <input name="group_id" id="group_id" class="form-control" value="" disabled>

            <!--                <input type="hidden" name="group_id" id="group_id"/>-->
            <label for="name_of_the_group">Name of the Group</label>
            <input type="text" name="name_of_the_group" id="name_of_the_group" class="form-control" disabled/>

        </div>
        <div class="col-md-4">
            <label for="district">District</label>
            <input type="text" name="district" id="district" value="Amuru" class="form-control" disabled/>

        </div>
    </div>
    <br>

    <div class="row">

        <div class="col-md-4">
            <label for="county">County</label>
            <input type="text" name="county" id="county" class="form-control" disabled/>

        </div>
        <div class="col-md-4">
            <label for="parish">Parish Sub-County</label>
            <input type="text" name="parish" id="parish" class="form-control" disabled/>

        </div>

    </div>
</div>
<hr>

<div class="document-part-header">
    Table 2.0: % Increase in target group's knowledge on problems affecting vegetable/crop production and challenges on
    the marketing aspect
</div>

<hr>

<div class="document-part-content">

    <div class="col-md-12">
        <table class="table table-bordered table-responsive">
            <tr>
                <td style="width: 50%;">
                    <div class="col-md-12">
                        Q - 12: Mention problems affecting vegetable production<br><br>
                        <textarea class="form-control" name="problems_affecting_vegetable_production"
                                  id="problems_affecting_vegetable_production"></textarea>

                    </div>
                </td>
                <td style="width: 50%;">
                    <div class="col-md-12"
                    ">
                    Q - 12: Mention the challenges faced in marketing vegetable products<br><br>
                    <textarea class="form-control" name="challenges_faced_in_marketing_vegetable_products"
                              id="challenges_faced_in_marketing_vegetable_products"></textarea>
    </div>
    </td>
    </tr>
    <tr>
        <td style="width: 50%;">
            <div class="col-md-12">
                Q - 12: Mention problems affecting crop production<br><br>
                <textarea class="form-control" name="problems_affecting_crop_production"
                          id="problems_affecting_crop_production"></textarea>

            </div>
        </td>
        <td style="width: 50%;">
            <div class="col-md-12">
                Q - 12: Problems hindering marketing crop products<br><br>
                <textarea class="form-control" name="problems_hindering_marketing_crop_products"
                          id="problems_hindering_marketing_crop_products"></textarea>
            </div>
        </td>
    </tr>
    </table>
</div>
</div>