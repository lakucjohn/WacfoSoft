<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/4/19
 * Time: 9:43 PM
 */

?>
<h3>Staff Registration Form</h3>

<hr>
<?php
echo form_open('staff-details/edit/' . $row_id);
foreach ($default_value_array->result() as $default) {

    ?>
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-10">
            <div class="error-msg position-left"><?php echo validation_errors(); ?></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
            <p>
                <label for="staff_name">Name of the Staff:</label>
                <input value="<?php echo $default->NAME; ?>" type="text" name="staff_name" id="staff_name"
                       class="form-control"/>
            </p>

            <p>
                <label for="staff_position">Position: </label>
                <input value="<?php echo $default->ROLE; ?>" type="text" name="staff_position" id="staff_position"
                       class="form-control"/>
            </p>

            <p>
                <label for="staff_department">Department: </label>
                <select name="staff_department" id="staff_department" class="form-control">
                    <option value="">Select the department</option>
                    <?php
                    foreach ($department_list->result() as $row) {
                        ?>
                        <option value="<?php echo $row->ID; ?>"
                                <?php if ($row->ID == $default->DEPARTMENT){ ?>selected<?php } ?>><?php echo $row->NAME; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </p>

            <p>
            <div class="row">
                <label for="staff_telephone">Telephone: </label>
            </div>
            <div class="row">
                <div class="col-md-2" style="text-align: right;">
                    +256
                </div>

                <div class="col-md-10">
                    <input value="<?php echo substr($default->TELEPHONE, 3); ?>" type="number" name="staff_telephone"
                           id="staff_telephone" class="form-control"
                           maxlength="9"/>
                </div>

            </div>

            </p>

            <p>
                <label for="staff_email">Email Address: </label>
                <input value="<?php echo $default->EMAIL_ADDRESS; ?>" type="email" name="staff_email" id="staff_email"
                       class="form-control"/>
            </p>
        </div>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-12" style="text-align: center;">
            <button class="btn btn-primary btn-md">Update Staff Details</button>
        </div>
    </div>
    <br>
    <?php
}
?>
</form>