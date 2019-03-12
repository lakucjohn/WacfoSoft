<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 2/19/19
 * Time: 10:34 PM
 */
echo form_open('user-details/change/' . $row);
?>

<div class="row">
    <div class="col-md-10"><h3>Enter New User Credentials</h3></div>
</div>
<hr>
<div class="row">
    <div class="col-md-10">
        <label for="username_new">New username: </label>
        <input type="text" name="username_new" id="username_new" class="form-control"
               value="<?php echo $_SESSION['username']; ?>" required/><br>

        <label for="password_new">Password: </label>
        <input type="password" name="password_new" id="password_new" placeholder="Enter Password" value=""
               class="form-control" required/><br>

        <label for="confirm_password_new">Confirm Password: </label>
        <input type="password" name="confirm_password_new" id="confirm_password_new" placeholder="Confirm Password"
               value="" class="form-control" required/><br>

    </div>
    <div class="col-md-10" style="color: red; text-align: center;">
        <?php
        if (isset($error_message)) {
            echo $error_message;
        }
        ?>
    </div>
</div>
<hr>
<div class="row" style="text-align: right">
    <div class="col-md-10">
        <button type="submit" class="btn btn-primary">Continue</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" class="btn btn-default">Cancel</button>
    </div>
</div>


</form>
