<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/2/19
 * Time: 10:59 AM
 */
?>
<h3 style="text-align: center;">MISEAN CARA BASELINE SURVEY ECONOMIC SECURITY BEFORE PROJECT INTERVENTION</h3>

<hr>

<?php echo form_open('production/misean%20cara%20baseline%20surveys/new%20misean%20cara%20baseline%20survey%20economic%20%20security'); ?>
<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-10">
        <div class="error-msg position-left"><?php echo validation_errors(); ?></div>
    </div>
</div>
<div  class="card w-100">
    <div class="document-part-header">Details of the Grantee</div>

    <hr>

    <div class="document-part-content">
        <div class="row">
            <div class="col-md-4">
                <label for="name_of_the_grantee">Name of the Grantee</label>
                <input type="text" name="name_of_the_grantee" id="name_of_the_grantee" class="form-control" />
            </div>
            <div class="col-md-4">
                <label for="name_of_the_group">Name of the Group</label>
                <input type="text" name="name_of_the_group" id="name_of_the_group" class="form-control" />

            </div>
            <div class="col-md-4">
                <label for="district">District</label>
                <input type="text" name="district" id="district" class="form-control" />

            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label for="county">County</label>
                <input type="text" name="county" id="county" class="form-control" />

            </div>
            <div class="col-md-4">
                <label for="parish">Parish Sub-County</label>
                <input type="text" name="parish" id="parish" class="form-control" />

            </div>

        </div>
    </div>

    <hr>
    <div class="document-part-header">
        Table 1.0: IR 24% of households able to provide medical treatment to Children 0-18 years in their household
    </div>

    <hr>
    <div class="document-part-content">
        <div class="row">
            <div class="col-md-6">
                <strong><em>Key: </em></strong><br>
                PWD = Child with Disability<br>
                CHH = Child Headed Household<br>
                Orphan = A child that has lost either the mother or father or both<br>
                HIV+ child
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered table-responsive">
                <tr>
                    <td style="width: 60%;">
                        <table class="table table-bordered table-responsive">
                            <tr>
                                <td style="width: 30%;">
                                    <div class="col-md-12">
                                        How many children aged 7-18 years are there in your group?<br>



                                    </div>
                                </td>
                                <td style="width: 30%;">
                                    <div class="col-md-12">
                                        How many children between 7-18 years are attending school in your group? Please categorize them by their level of vulnerability indicated.<br>


                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-12">
                                        <table class="table table-bordered table-responsive">
                                            <tr>
                                                <th style="width: 20%;">Q1 - PWD</th>
                                                <th style="width: 20%;">Q2 - CHH</th>
                                                <th style="width: 20%;">Q3 - Orphan</th>
                                                <th style="width: 20%;">Q4 - HIV+</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="col-md-12">
                                                        <input type="number" style="width: 45px;" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <input type="number" style="width: 45px;" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <input type="number" style="width: 45px;" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <input type="number" style="width: 45px;" />
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-12">
                                        <table class="table table-bordered table-responsive">
                                            <tr>
                                                <th style="width: 20%;">Q5 - PWD</th>
                                                <th style="width: 20%;">Q6 - CHH</th>
                                                <th style="width: 20%;">Q7 - Orphan</th>
                                                <th style="width: 20%;">Q8 - HIV+</th>
                                                <th style="width: 20%;">Q9 - Normal</th>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <div class="col-md-12">
                                                        <input type="number"  style="width: 45px;" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <input type="number"  style="width: 45px;" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <input type="number"  style="width: 45px;" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <input type="number"  style="width: 45px;" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <input type="number"  style="width: 45px;" />
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table class="table table-bordered table-responsive">
                            <tr>
                                <td style="width: 20%;">
                                    <div class="col-md-12">
                                        Q10 - How many times do you provide meals to your children aged 0-18 years per day?<br>
                                        <br>
                                        <select name="" id="" class="form-control">
                                            <option value="1">Once</option>
                                            <option value="2">Twice</option>
                                            <option value="3">Thrice</option>
                                            <option value="4">Whenever available</option>
                                        </select>
                                    </div>
                                </td>
                                <td style="width: 20%;">
                                    <div class="col-md-12">
                                        Q11 - Were you able to meet the medical expenses for your children (0-18) wherever they got sick?<br>
                                        <br>
                                        <select name="" id="" class="form-control">
                                            <option value="1">Yes</option>
                                            <option value="2">No</option>
                                            <option value="3">Sometimes</option>
                                            <option value="4">I am supported</option>
                                            <option value="5">I get free treatment</option>
                                        </select>
                                    </div>

                                </td>
                            </tr>

                        </table>

                    </td>
                </tr>
            </table>
        </div>
    </div>


    <hr>

    <div class="document-part-header">
        Table 2.0: % Increase in target group's knowledge on problems affecting vegetable/crop production and challenges on the marketing aspect
    </div>

    <hr>

    <div class="document-part-content">

        <div class="col-md-12">
            <table class="table table-bordered table-responsive">
                <tr>
                    <td style="width: 50%;">
                        <div class="col-md-12">
                            Q - 12: Mention problems affecting vegetable production<br><br>
                            <textarea class="form-control"></textarea>

                        </div>
                    </td>
                    <td style="width: 50%;">
                        <div class="col-md-12"">
                            Q - 12: Mention the challenges faced in marketing vegetable products<br><br>
                        <textarea class="form-control"></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="width: 50%;">
                        <div class="col-md-12">
                            Q - 12: Mention problems affecting crop production<br><br>
                            <textarea class="form-control"></textarea>

                        </div>
                    </td>
                    <td style="width: 50%;">
                        <div class="col-md-12">
                            Q - 12: Problems hindering marketing crop products<br><br>
                            <textarea class="form-control"></textarea>
                        </div>
                    </td>
                </tr>
            </table>
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
                        <input type="number" class="form-control" />
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
                        <input type="number" class="form-control" />
                    </div>
                </td>
            </tr>
        </table><br>

        <table class="table table-bordered table-responsive">
            <tr>
                <th>Individual ID</th>
                <th>Individual Name</th>
                <th>Sex</th>
                <th>Vulnerable</th>
                <th colspan="4">Q1. Vegetable 1: Onion</th>
                <th colspan="4">Q6. Vegetable 2: Tomatoes</th>
                <th colspan="4">Q11. Vegetable 3: Egg Plants</th>
                <th colspan="4">Q16. Vegetable 4: Okra</th>
            </tr>

            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>SEX</td>
                <td>VULNERABILITY</td>
                <td>
                    <div class="col-md-12">
                        ACRES: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        YIELD: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        SOLD: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        UGX: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        ACRES: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        YIELD: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        SOLD: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        UGX: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        ACRES: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        YIELD: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        SOLD: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        UGX: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        ACRES: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        YIELD: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        SOLD: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        UGX: <input type="number"  style="width: 45px;" />
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
                        <input type="number" class="form-control" />
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
                        <input type="number" class="form-control" />
                    </div>
                </td>
            </tr>
        </table><br>

        <table class="table table-bordered table-responsive">
            <tr>
                <th>Individual ID</th>
                <th>Individual Name</th>
                <th>Sex</th>
                <th>Vulnerable</th>
                <th colspan="4">Q21. Crop 1: Soya Beans</th>
                <th colspan="4">Q26. Crop 2: Groundnuts</th>
                <th colspan="4">Q31. Crop 3: Sesames</th>
                <th colspan="4">Q36. Crop 4: Beans</th>
            </tr>

            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>SEX</td>
                <td>VULNERABILITY</td>
                <td>
                    <div class="col-md-12">
                        ACRES: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        YIELD: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        SOLD: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        UGX: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        ACRES: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        YIELD: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        SOLD: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        UGX: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        ACRES: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        YIELD: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        SOLD: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        UGX: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        ACRES: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        YIELD: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        SOLD: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        UGX: <input type="number"  style="width: 45px;" />
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <hr>

<hr>
<div class="document-part-header">Table 5.0: Number of Misean Cara beneficiaries adopting new technologies in vegetables and crop production</div>
<hr>
<div class="document-part-content">
    <div class="row">
        <div class="col-md-12">
            <strong>Did you use any of the following technologies during your production process?</strong>
        </div>
    </div><br>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-responsive">
                <tr>
                    <th>Q - 41: Did you use any improved seed during the year in your production</th>
                    <th>Q - 42: Did you use underground water in your crop production process during the dry season?</th>
                    <th>Q - 43: Did you use any pesticides on your crops(vegetables)?</th>
                    <th>Q - 44: Use of farm imlements e.g. zero tillage during land opening?</th>
                    <th>Q - 45: Have you been using any method of post-harvest handling and processing techniques?</th>
                    <th>Q - 46: Did you have any opportunity inplanting your crops in Rows/Lines as oppsed to random sowing/scattering?</th>
                    <th>Q - 47: What other techniques did you use apart from the ones discussed here? (Name them)</th>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-12">
                            <input type="radio" name="" id="" value="1" />Yes<br>
                            <input type="radio" name="" id="" value="2" />No
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            <input type="radio" name="" id="" value="1" />Yes<br>
                            <input type="radio" name="" id="" value="2" />No
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            <input type="radio" name="" id="" value="1" />Yes<br>
                            <input type="radio" name="" id="" value="2" />No
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            <input type="radio" name="" id="" value="1" />Yes<br>
                            <input type="radio" name="" id="" value="2" />No
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            <input type="radio" name="" id="" value="1" />Yes<br>
                            <input type="radio" name="" id="" value="2" />No
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            <input type="radio" name="" id="" value="1" />Yes<br>
                            <input type="radio" name="" id="" value="2" />No
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            <textarea name="" cols="400" id="" class="form-control"></textarea>
                        </div>
                    </td>
                </tr>
            </table>
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
                    <th style="width: 25%;">Q -48: Do you sell all your vegetable products?</th>
                    <th colspan="3" style="width: 75%;">Q - 49: In what forms do you market the product?</th>
                </tr>
                <tr>
                    <td>
                        <div class="col-md-12">
                            <input type="radio" name="" id="" value="1" />Yes<br>
                            <input type="radio" name="" id="" value="2" />No
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12"">
                            <label for="place_1">Place 1:</label>
                            <input type="text" class="form-control" name="place_1" id="place_1"/>
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12"">
                            <label for="place_2">Place 2:</label>
                            <input type="text" class="form-control" name="place_2" id="place_2"/>
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12"">
                            <label for="place_3">Place 3:</label>
                            <input type="text" class="form-control" name="place_3" id="place_3"/>
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
                            <input type="radio" name="" id="" value="1" />Yes<br>
                            <input type="radio" name="" id="" value="2" />No
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12"">
                        <label for="place_1">Place 1:</label>
                        <input type="text" class="form-control" name="place_1" id="place_1"/>
        </div>
        </td>
        <td>
            <div class="col-md-12"">
            <label for="place_2">Place 2:</label>
            <input type="text" class="form-control" name="place_2" id="place_2"/>
    </div>
</td>
<td>
    <div class="col-md-12"">
    <label for="place_3">Place 3:</label>
    <input type="text" class="form-control" name="place_3" id="place_3"/>
    </div>
</td>
</tr>
</table>
</div>
</div>
</div>
<hr>
<div class="document-part-header">
    FISH FARMING
</div>
<hr>
<div class="document-part-content">
    <div class="row">
        <table class="table table-bordered table-responsive">
            <tr>
                <td colspan="8"><div class="row"><div class="col-md-6" style="text-align: right;"> Q1 - % Increase in value of sales (UGX)</div><div class="col-md-6"> <input type="number" name="" id="" class="form-control" /></div></div></td>
            </tr>
            <tr>
                <td colspan="8"><div class="row"><div class="col-md-6" style="text-align: right;">Q2 - % Increase in productivity (Kg/Acre)</div><div class="col-md-6"> <input type="number" name="" id="" class="form-control" /></div></div></td>
            </tr>

            <tr>
                <td colspan="8">&nbsp;</td>
            </tr>
            <tr>
                <th style="width: 20%;">Individual</th>
                <th>Group Member</th>
                <th>Q3</th>
                <th>Q4</th>
                <th colspan="4">Q5 - Fish Farming</th>
            </tr>
            <tr style="font-weight: bold;">
                <td>
                    <div class="col-md-12">
                        ID
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Name
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Sex
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Vulnerability
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Size of pond
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        No. of Fish harvested
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Qty yield (Kg)
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Income (UGX)
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <div class="col-md-12">
                        AP/1/1
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        Okunga Deo
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        M
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        HIV+
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        <input type="number" name="" id="" class="form-control" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        <input type="number" name="" id="" class="form-control" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        <input type="number" name="" id="" class="form-control" />
                    </div>
                </td>
                <td>
                    <div class="col-md-12">
                        <input type="number" name="" id="" class="form-control" />
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-12" style="text-align: center;">
        <button type="submit" class="btn btn-primary btn-md">Save Information</button>
    </div>
</div>
<hr>
</div>
</form>