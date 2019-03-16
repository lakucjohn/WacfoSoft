<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 3/6/19
 * Time: 10:47 PM
 */
?>

<?php echo form_open("member-support/create"); ?>
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
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Beans" name="support_item[]"
                       onchange="turn_on_textfield('Beans','Beans_quantity');" value="Beans"/> Beans
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Beans_quantity" class="form-control" disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->

        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Soya" name="support_item[]"
                       onchange="turn_on_textfield('Soya','Soya_quantity');" value="Soya"/> Soya
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Soya_quantity" class="form-control" disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->

        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Simsim" name="support_item[]"
                       onchange="turn_on_textfield('Simsim','Simsim_quantity');" value="Simsim"/> Simsim
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Simsim_quantity" class="form-control" disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->
    </div>

    <!--  Another row of items -->
    <br>
    <div class="row">
        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Okra" name="support_item[]"
                       onchange="turn_on_textfield('Okra','Okra_quantity');" value="Okra"/> Okra
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Okra_quantity" class="form-control" disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->

        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Tomatoes" name="support_item[]"
                       onchange="turn_on_textfield('Tomatoes','Tomatoes_quantity');" value="Tomatoes"/> Tomatoes
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Tomatoes_quantity" class="form-control" disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->

        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Onions" name="support_item[]"
                       onchange="turn_on_textfield('Onions','Onions_quantity');" value="Onions"/> Onions
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Onions_quantity" class="form-control" disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->
    </div>

    <!--  Another row of items -->
    <br>
    <div class="row">
        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Cabbages" name="support_item[]"
                       onchange="turn_on_textfield('Cabbages','Cabbages_quantity');" value="Cabbages"/> Cabbages
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Cabbages_quantity" class="form-control" disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->

        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Egg_Plants" name="support_item[]"
                       onchange="turn_on_textfield('Egg_Plants','Egg_Plants_quantity');" value="Egg Plants"/> Egg Plants
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Egg_Plants_quantity" class="form-control" disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->

    </div>

    <!--  Another row of items -->
    <br>
    <div class="row">
        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Spade" name="support_item[]"
                       onchange="turn_on_textfield('Spade','Spade_quantity');" value="Spade"/> Spade
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Spade_quantity" class="form-control" disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->

        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Wheel_Barrow" name="support_item[]"
                       onchange="turn_on_textfield('Wheel_Barrow','Wheel_Barrow_quantity');" value="Wheel Barrow"/>
                Wheel Barrows
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Wheel_Barrow_quantity" class="form-control" disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->

        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Pick_Axes" name="support_item[]"
                       onchange="turn_on_textfield('Pick_Axes','Pick_Axes_quantity');" value="Pick Axes"/> Pick Axes
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Pick_Axes_quantity" class="form-control" disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->
    </div>

    <!--  Another row of items -->
    <br>
    <div class="row">
        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Hoes" name="support_item[]"
                       onchange="turn_on_textfield('Hoes','Hoes_quantity');" value="Hoes"/> Hoes
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Hoes_quantity" class="form-control" disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->

        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Cutlasses" name="support_item[]"
                       onchange="turn_on_textfield('Cutlasses','Cutlasses_quantity');" value="Cutlasses"/> Cutlasses
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Cutlasses_quantity" class="form-control" disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->

        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Nails" name="support_item[]"
                       onchange="turn_on_textfield('Nails','Nails_quantity');" value="Nails"/> Nails
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Nails_quantity" class="form-control" disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->
    </div>

    <!--  Another row of items -->
    <br>
    <div class="row">
        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Barbed_Wires" name="support_item[]"
                       onchange="turn_on_textfield('Barbed_Wires','Barbed_Wires_quantity');" value="Barbed Wires"/>
                Barbed Wires
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Barbed_Wires_quantity" class="form-control" disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->

        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Slashers" name="support_item[]"
                       onchange="turn_on_textfield('Slashers','Slashers_quantity');" value="Slashers"/> Slashers
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Slashers_quantity" class="form-control" disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->

        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Watering_Cans" name="support_item[]"
                       onchange="turn_on_textfield('Watering_Cans','Watering_Cans_quantity');" value="Watering Cans"/>
                Watering Cans
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Watering_Cans_quantity" class="form-control" disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->
    </div>

    <!--  Another row of items -->
    <br>
    <div class="row">
        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Sprayers" name="support_item[]"
                       onchange="turn_on_textfield('Sprayers','Sprayers_quantity');" value="Sprayers"/> Sprayers
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Sprayers_quantity" class="form-control" disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->

        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Pumps" name="support_item[]"
                       onchange="turn_on_textfield('Pumps','Pumps_quantity');" value="Pumps"/> Pumps
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Pumps_quantity" class="form-control" disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->

    </div>

    <!--  Another row of items -->
    <br>
    <div class="row">
        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Pigs" name="support_item[]"
                       onchange="turn_on_textfield('Pigs','Pigs_quantity');" value="Pigs"/> Pigs
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Pigs_quantity" class="form-control" disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->

        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Fingerings" name="support_item[]"
                       onchange="turn_on_textfield('Fingerings','Fingerings_quantity');" value="Fingerings"/> Fingerings
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Fingerings_quantity" class="form-control" disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->

        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Pig_Feeds" name="support_item[]"
                       onchange="turn_on_textfield('Pig_Feeds','Pig_Feeds_quantity');" value="Pig Feeds"/> Pig Feeds
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Pig_Feeds_quantity" class="form-control" disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->
    </div>

    <!--  Another row of items -->
    <br>
    <div class="row">
        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Drums" name="support_item[]"
                       onchange="turn_on_textfield('Drums','Drums_quantity');" value="Drums"/> Drums
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Drums_quantity" class="form-control" disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->

        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Fish_Nets" name="support_item[]"
                       onchange="turn_on_textfield('Fish_Nets','Fish_Nets_quantity');" value="Fish Nets"/> Fish Nets
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Fish_Nets_quantity" class="form-control" disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->

        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Bee_hives" name="support_item[]"
                       onchange="turn_on_textfield('Bee_hives','Bee_hives_quantity');" value="Bee hives"/> Bee hives
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Bee_hives_quantity" class="form-control" disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->
    </div>

    <!--  Another row of items -->
    <br>
    <div class="row">
        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Harvesting_equipment" name="support_item[]"
                       onchange="turn_on_textfield('Harvesting_equipment','Harvesting_equipment_quantity');"
                       value="Harvesting equipment"/> Harvesting
                equipment
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Harvesting_equipment_quantity" class="form-control"
                       disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->

        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Crusher" name="support_item[]"
                       onchange="turn_on_textfield('Crusher','Crusher_quantity');" value="Crusher"/> Crusher
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Crusher_quantity" class="form-control" disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->
    </div>

    <!--  Another row of items -->
    <br>
    <div class="row">
        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Carbonising_Ground" name="support_item[]"
                       onchange="turn_on_textfield('Carbonising_Ground','Carbonising_Ground_quantity');"
                       value="Carbonising Ground"/> Carbonising
                Ground
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Carbonising_Ground_quantity" class="form-control"
                       disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->

        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="checkbox" id="Briquette_Moulds" name="support_item[]"
                       onchange="turn_on_textfield('Briquette_Moulds','Briquette_Moulds_quantity');"
                       value="Briquette Moulds"/> Briquette Moulds
            </div>
            <div class="col-md-6">
                <input type="text" name="support_quantity[]" id="Briquette_Moulds_quantity" class="form-control"
                       disabled/>
            </div>

        </div>
        <!-- End of Item and its quantity  -->

        <!-- Item and its quantity  -->
        <div class="col-md-4 row">
            <div class="col-md-6">
                <input type="hidden" id="group_id" name="group_id" value="<?php echo $group_id; ?>"/>
            </div>
            <div class="col-md-6">
            </div>

        </div>
        <!-- End of Item and its quantity  -->
    </div>

</div>
<!-- The modal footer -->
<div class="modal-footer">
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