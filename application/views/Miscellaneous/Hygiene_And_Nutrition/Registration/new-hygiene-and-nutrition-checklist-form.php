<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/3/19
 * Time: 9:40 PM
 */
?>
<h3 style="text-align: center;">HYGIENE AND NUTRITION CHECKLIST</h3>
<hr>

<?php echo form_open('miscellaneous%20hygiene%20and%20nutrition/new-recording'); ?>
<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-10">
        <div class="error-msg position-left"><?php echo validation_errors(); ?></div>
    </div>
</div>
<div class="card w-100">

    <div class="document-part-header">Details of the Group</div>
    <hr>
    <div class="document-part-content">
        <div class="row">
            <div class="col-md-6">
                <label for="group_id">Group ID</label>
                <select name="group_id" id="group_id" class="form-control">
                    <option value="">Select a Group ID</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="group_name">Name of the Group</label>
                    <input type="text" class="form-control" name="group_name" id="group_name" value="Name of selected group" disabled />
            </div>
        </div><br>

        <div class="row">
            <div class="col-md-4">
                <label for="parish">Parish</label>
                <input type="text" class="form-control" name="parish" id="parish" value="Parish" disabled />
            </div>
            <div class="col-md-4">
                <label for="subcounty">Sub-County</label>
                <input type="text" class="form-control" name="subcounty" id="subcounty" value="SubCounty" disabled />
            </div>
            <div class="col-md-4">
                <label for="district">District</label>
                <input type="text" class="form-control" name="district" id="district" value="District" disabled />
            </div>
        </div><br>
    </div>
    <hr>
    <div class="document-part-header">Hygiene and Nutrition Information</div>

    <br>
    <div class="document-part-content">
        <div class="row">
            <div class="col-md-8">
                <strong><em>Note: Use of of the following key below to fill the table appropriately</em></strong><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 = Absent <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 = New and in use <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 = Present and in use <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 = Present but not in use <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5 = Renovated and in use <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6 = Renovated but not in use <br>
            </div>
        </div>
        <table class="table table-bordered table-responsive">
            <tr>
                <th>Individual ID</th>
                <th>Name</th>
                <th>Sex</th>
                <th>Pit Latrine</th>
                <th>Tippy Tap</th>
                <th>Plate Drying Rack</th>
                <th>Rubbish Pit</th>
                <th>Bathroom Shelter</th>
                <th>Kitchen Garden</th>
                <th>Fruit Trees</th>
                <th>NRM Practices</th>
                <th>Maize Crib</th>
                <th>Drying Rack</th>
                <th>Tarpaulin</th>
                <th>Granary</th>
                <th>Papyrus Mat</th>
                <th>Earth Floor</th>
                <th>Date</th>
            </tr>

            <tr>
                <td>AP/1/1</td>
                <td>Okunga Jackson</td>
                <td>M</td>
                <td><div class="col-md-12"><input type="number" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" style="width: 45px;" /> </div> </td>
                <td><div class="col-md-12"><input type="number" style="width: 45px;" /> </div> </td>
            </tr>
        </table>
    </div>

    <hr>
    <div class="document-part-header">Details of the person accountable for this information</div>

    <hr>
    <div class="document-part-content">
        <div class="row">
            <div class="col-md-6">
                <label for="checked_by">Checked By: </label>
                <select name="checked_by" id="checked_by" class="form-control">
                    <option value="">Select the staff</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="date_checked">Date: </label>
                <input type="date" name="date_checked" id="date_checked" class="form-control" />
            </div>
        </div>
    </div><br>
    <hr>
    <div class="row">
        <div class="col-md-12" style="font-size: 10px;">
            NB: This <strong style="color: red;">MUST</strong> be checked physically on monthly basis
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12" style="text-align: center;">
            <button type="submit" class="btn btn-primary btn-md">Save Information</button>
        </div>
    </div>
    <br>
</div>
</form>