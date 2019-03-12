<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 2/20/19
 * Time: 10:15 AM
 */
echo form_open('settings/new_disability');

?>
<div class="col-md-12"><h3>Record New Disability / Vulnerability</h3></div>
<hr>
<div class="col-md-12">
    <div class="col-md-1"></div>
    <div class="col-md-10">

        <label for="disability_name">Name of Disability: </label>
        <input type="text" name="disability_name" id="disability_name" class="form-control"/><br>

        <label for="disability_description">Description: </label>
        <textarea name="disability_description" id="disability_description" class="form-control"></textarea> <br>

        <label for="disability_prefix">Prefix Code: </label>
        <input type="text" name="disability_prefix" id="disability_prefix" class="form-control"/>

    </div>
    <div class="col-md-1"></div>
</div>
<hr>
<div class="col-md-12">
    <div class="col-md-1" style="text-align: right;"></div>
    <div class="col-md-10">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <div class="col-md-1"></div>
</div>
</form>
