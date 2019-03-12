<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 3/7/19
 * Time: 9:27 AM
 */
echo form_open('training-outcome/' . $row_id . '/record-new-outcome');
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
        <h3>Record New Training Outcome</h3><br>

        <label for="outcome">Outcome:</label>
        <textarea name="outcome" id="outcome" class="form-control" rows="6"></textarea><br>

        <input type="submit" class="btn btn-primary" value="Submit"/>
    </div>
    <div class="col-md-2">

    </div>
</div>
</form>
