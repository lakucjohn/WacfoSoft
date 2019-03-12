<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 3/7/19
 * Time: 9:27 AM
 */
echo form_open('training-attendants/' . $row_id . '/record-new-beneficiary-list');
?>
<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-8">

        <div class="error-msg position-left"><?php echo validation_errors(); ?></div>

    </div>
    <div class="col-md-2">

    </div>
</div>

<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-8">
        <h3>Register Other Beneficiaries</h3>

        <label for="name_of_attendant">Name:</label>
        <input type="text" name="name_of_attendant" class="form-control"/><br>

        <label for="address_of_attendant">Address:</label>
        <input type="text" name="address_of_attendant" class="form-control"/><br>

        <label for="contact_of_attendant">Contact:</label>
        <input type="text" name="contact_of_attendant" class="form-control"/><br>

        <input type="submit" class="btn btn-primary" value="Submit"/>
    </div>
    <div class="col-md-2">

    </div>
</div>
</form>
