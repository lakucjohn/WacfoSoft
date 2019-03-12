<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 2/20/19
 * Time: 8:30 AM
 */
echo form_open('settings/new_department');

?>
<div class="col-md-12"><h3>Record New Department in the Organization</h3></div>
<hr>
<div class="col-md-12">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <label for="department_name">Name of Department: </label>
        <input type="text" name="department_name" id="department_name" class="form-control"/><br>

        <label for="department_prefix">Department Prefix Code: </label>
        <input type="text" name="department_prefix" id="department_prefix" class="form-control"/><br>
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