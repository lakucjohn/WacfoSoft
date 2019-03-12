<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 2/20/19
 * Time: 8:30 AM
 */
echo form_open('settings/new_livelihood_category');

?>
<div class="col-md-12"><h3>Record New Livelihood Category</h3></div>
<hr>
<div class="col-md-12">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <label for="category_name">Name of : </label>
        <input type="text" name="category_name" id="category_name" class="form-control"/><br>
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