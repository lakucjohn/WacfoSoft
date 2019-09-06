<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/10/18
 * Time: 8:10 PM
 */

?>

<h3>Edit Information on Marketing of Products</h3>
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
<div class="document-part-header">Table 6.0: % Change in People's knowledge on Marketing and Processing</div>

<hr>
<div class="document-part-content">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-responsive">
                <tr>
                    <th style="width: 25%;">Q - 48: Do you sell all your vegetable products?</th>
                    <th colspan="3" style="width: 75%;">Q - 49: In what forms do you market the product?</th>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-12">
                            <input type="radio" name="sells_all_vegetable_products" id="sells_all_vegetable_products"
                                   value="1"/>Yes<br>
                            <input type="radio" name="sells_all_vegetable_products" id="sells_all_vegetable_products"
                                   value="2"/>No
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12"
                        ">
                        <label for="place_1">Place 1:</label>
                        <input type="text" class="form-control" name="vegetable_market_place_1"
                               id="vegetable_market_place_1"/>
        </div>
        </td>
        <td>
            <div class="col-md-12"
            ">
            <label for="place_2">Place 2:</label>
            <input type="text" class="form-control" name="vegetable_market_place_2" id="vegetable_market_place_2"/>
    </div>
    </td>
    <td>
        <div class="col-md-12"
        ">
        <label for="place_3">Place 3:</label>
        <input type="text" class="form-control" name="vegetable_market_place_3" id="vegetable_market_place_3"/>
</div>
</td>
</tr>
</table>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered table-responsive">
            <tr>
                <th style="width: 25%;">Q -48: Do you sell all your crop products?</th>
                <th colspan="3" style="width: 75%;">Q - 49: In what forms do you market the product?</th>
            </tr>
            <tr>
                <td>
                    <div class="col-md-12">
                        <input type="radio" name="sells_all_crop_products" id="sells_all_crop_products"
                               value="1"/>Yes<br>
                        <input type="radio" name="sells_all_crop_products" id="sells_all_crop_products" value="2"/>No
                    </div>
                </td>
                <td>
                    <div class="col-md-12"
                    ">
                    <label for="place_1">Place 1:</label>
                    <input type="text" class="form-control" name="crop_market_place_1" id="crop_market_place_1"/>
    </div>
    </td>
    <td>
        <div class="col-md-12"
        ">
        <label for="place_2">Place 2:</label>
        <input type="text" class="form-control" name="crop_market_place_2" id="crop_market_place_2"/>
</div>
</td>
<td>
    <div class="col-md-12"
    ">
    <label for="place_3">Place 3:</label>
    <input type="text" class="form-control" name="crop_market_place_3" id="crop_market_place_3"/>
    </div>
</td>
</tr>
</table>
</div>
</div>
</div>