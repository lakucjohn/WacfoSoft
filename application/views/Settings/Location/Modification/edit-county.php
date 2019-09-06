<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 6/26/19
 * Time: 6:57 AM
 */
echo form_open('settings/new_county'); ?>
<hr>
<h4 class="modal-title">Edit County</h4>
<hr>
<label for="county_name">Name of County: </label>
<input type="text" name="county_name" id="county_name" class="form-control"/>

<button class="btn btn-primary">Submit</button>
<button type="button" class="btn btn-neutral" data-dismiss="modal">Cancel</button>
</form>
