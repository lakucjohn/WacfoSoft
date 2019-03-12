<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 3/6/19
 * Time: 10:47 PM
 */
?>
<?php echo form_open("group-support/create"); ?>
<!-- The modal header -->
<div class="modal-header">
    <h4 class="modal-title">Register New Support for this Group</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<!-- The modal body -->
<div class="modal-body">
    <div class="row">
        <label for="date_of_support">Date: </label>
        <input type="date" name="date_of_support" id="date_of_support" class="form-control" required/>
    </div>
    <br>
    <label for="county_name">Select Items: </label>
    <div class="row">
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Beans"/> Beans
        </div>
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Soya"/> Soya
        </div>
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Simsim"/> Simsim
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Okra"/> Okra
        </div>
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Tomatoes"/> Tomatoes
        </div>
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Onions"/> Onions
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Cabbages"/> Cabbages
        </div>
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Egg Plants"/> Egg Plants
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Spade"/> Spade
        </div>
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Wheel Barrow"/> Wheel Barrow
        </div>
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Pick Axes"/> Pick Axes
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Hoes"/> Hoes
        </div>
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Cutlasses"/> Cutlasses
        </div>
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Nails"/> Nails
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Barbed Wires"/> Barbed Wires
        </div>
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Slashers"/> Slashers
        </div>
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Watering Cans"/> Watering Cans
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Sprayers"/> Sprayers
        </div>
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Pumps"/> Pumps
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Pigs"/> Pigs
        </div>
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Fingerings"/> Fingerings
        </div>
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Pig Feeds"/> Pig Feeds
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Fish Feeds"/> Fish Feeds
        </div>
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Drums"/> Drums
        </div>
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Fish Nets"/> Fish Nets
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Bee hives"/> Bee hives
        </div>
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Harvesting equipment"/> Harvesting
            equipment
        </div>
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Crusher"/> Crusher
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Carbonising Ground"/> Carbonising
            Ground
        </div>
        <div class="col-md-4">
            <input type="checkbox" id="support_item" name="support_item[]" value="Briquette Moulds"/> Briquette Moulds
        </div>
        <div class="col-md-4">
            <input type="hidden" id="group_id" name="group_id" value="<?php echo $group_id; ?>"/> Briquette Moulds
        </div>
    </div>
</div>
<!-- The modal footer -->
<div class="modal-footer">
    <button class="btn btn-primary" type="submit">Submit</button>
    <button type="button" class="btn btn-neutral" data-dismiss="modal">Cancel</button>
</div>
</form>
