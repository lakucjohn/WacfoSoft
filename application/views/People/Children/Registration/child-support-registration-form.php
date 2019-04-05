<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 3/6/19
 * Time: 10:47 PM
 */
?>

<?php echo form_open("child-support/create"); ?>
<!-- The modal header -->
<div class="modal-header">
    <h4 class="modal-title">Register New Support for this Member</h4>
</div>
<!-- The modal body -->
<div class="container">
    <div class="row">
        <label for="date_of_support">Date: </label>
        <input type="date" name="date_of_support" id="date_of_support" class="form-control" required/>
    </div>

    <!--  Another row of items -->
    <br>
    <div class="row">
        <!-- Item and its quantity  -->
        <div class="col-md-12 row">
            <div class="col-md-3">
                <input type="checkbox" id="Food_Stuff" name="support_item[]"
                       onchange="turn_on_textfield('Food_Stuff','Food_Stuff_Description');" value="Food Stuff"/> Food
                Stuff
            </div>
            <div class="col-md-9">
                <input type="text" name="support_description[]" id="Food_Stuff_Description" class="form-control"
                       disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->
    </div>

    <!--  Another row of items -->
    <br>
    <div class="row">
        <!-- Item and its quantity  -->
        <div class="col-md-12 row">
            <div class="col-md-3">
                <input type="checkbox" id="Scholastic_materials" name="support_item[]"
                       onchange="turn_on_textfield('Scholastic_materials','Scholastic_materials_Description');"
                       value="Scholastic Materials"/> Scholastic Materials
            </div>
            <div class="col-md-9">
                <input type="text" name="support_description[]" id="Scholastic_materials_Description"
                       class="form-control" disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->
    </div>

    <!--  Another row of items -->
    <br>
    <div class="row">
        <!-- Item and its quantity  -->
        <div class="col-md-12 row">
            <div class="col-md-3">
                <input type="checkbox" id="Assistive_Device" name="support_item[]"
                       onchange="turn_on_textfield('Assistive_Device','Assistive_Device_Description');"
                       value="Assistive Device"/> Assistive Device
            </div>
            <div class="col-md-9">
                <input type="text" name="support_description[]" id="Assistive_Device_Description" class="form-control"
                       disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->
    </div>


    <!--  Another row of items -->
    <br>
    <div class="row">
        <!-- Item and its quantity  -->
        <div class="col-md-12 row">
            <div class="col-md-3">
                <input type="checkbox" id="Farm_Inputs" name="support_item[]"
                       onchange="turn_on_textfield('Farm_Inputs','Farm_Inputs_Description');" value="Farm Inputs"/> Farm
                Inputs
            </div>
            <div class="col-md-9">
                <input type="text" name="support_description[]" id="Farm_Inputs_Description" class="form-control"
                       disabled/>
            </div>

        </div>
        <!-- End of

    <!--  Another row of items -->
    </div>

    <br>
    <div class="row">
        <input type="hidden" name="child_id" id="child_id" value="<?php echo $child_id; ?>" class="form-control"/>

    </div>
</div>
<br>
<!-- The modal footer -->
<div class="col-md-11 modal-footer">
    <button class="btn btn-primary" type="submit">Submit</button>
</div>
</form>

<script>

    function turn_on_textfield(this_checkbox, textfield_id) {

        if (document.getElementById(this_checkbox).checked) {
            document.getElementById(textfield_id).removeAttribute('disabled');
            document.getElementById(textfield_id).setAttribute('required', true);
        } else {
            document.getElementById(textfield_id).setAttribute('disabled', true);
        }
    }

</script>