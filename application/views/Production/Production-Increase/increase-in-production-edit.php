<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/10/18
 * Time: 8:10 PM
 */

?>

<h3>Edit Information on Increase on Production</h3>
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
    Table 3.0: Vegetable Product
</div>
<hr>
<div class="document-part-content">
    <table class="table table-bordered table-responsive">
        <tr>
            <td style="width: 50%;">
                <div class="col-md-12">
                    % increase in value of sales (UGX)
                </div>
            </td>
            <td style="width: 50%;">
                <div class="col-md-12">
                    <input type="number" name="percentage_increase_in_sale_of_vegetable"
                           id="percentage_increase_in_sale_of_vegetable" class="form-control"/>
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 50%;">
                <div class="col-md-12">
                    % increase in productivity (Kg/Acre)
                </div>
            </td>
            <td style="width: 50%;">
                <div class="col-md-12">
                    <input type="number" name="percentage_increase_in_productivity_of_vegetable"
                           id="percentage_increase_in_productivity_of_vegetable" class="form-control"/>
                </div>
            </td>
        </tr>
    </table>

</div>
<hr>

<div class="document-part-header">
    Table 4.0: Crop Product
</div>
<hr>
<div class="document-part-content">
    <table class="table table-bordered table-responsive">
        <tr>
            <td style="width: 50%;">
                <div class="col-md-12">
                    % increase in value of sales (UGX)
                </div>
            </td>
            <td style="width: 50%;">
                <div class="col-md-12">
                    <input type="number" name="percentage_increase_in_sale_of_crops"
                           id="percentage_increase_in_sale_of_crops" class="form-control"/>
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 50%;">
                <div class="col-md-12">
                    % increase in productivity (Kg/Acre)
                </div>
            </td>
            <td style="width: 50%;">
                <div class="col-md-12">
                    <input type="number" name="percentage_increase_in_productivity_of_crops"
                           id="percentage_increase_in_productivity_of_crops" class="form-control"/>
                </div>
            </td>
        </tr>
    </table>

</div>
<hr>

<div class="document-part-header">
    Table 5.0: Fish Farming
</div>
<hr>
<div class="document-part-content">
    <table class="table table-bordered table-responsive">
        <tr>
            <td style="width: 50%;">
                <div class="col-md-12">
                    % increase in value of sales (UGX)
                </div>
            </td>
            <td style="width: 50%;">
                <div class="col-md-12">
                    <input type="number" name="percentage_increase_in_fish_sales" id="percentage_increase_in_fish_sales"
                           class="form-control"/>
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 50%;">
                <div class="col-md-12">
                    % increase in productivity (Kg/Acre)
                </div>
            </td>
            <td style="width: 50%;">
                <div class="col-md-12">
                    <input type="number" name="percentage_increase_in_fish_productivity"
                           id="percentage_increase_in_fish_productivity" class="form-control"/>
                </div>
            </td>
        </tr>
    </table>

</div>
<hr>