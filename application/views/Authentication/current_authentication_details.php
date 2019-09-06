<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/27/19
 * Time: 10:23 AM
 */

echo form_open('user-details/edit/' . $row); ?>
<div class="row">
    <div class="col-md-10"><h3>Confirm current login Credentials</h3></div>
</div>
<hr>
<div class="row">
    <div class="col-md-10">
        <label for="username_prev">Current username: </label>
        <input type="text" name="username_prev" id="username_prev" class="form-control"
               value="<?php echo $_SESSION['username']; ?>" required/><br>

        <label for="password_prev">Password: </label>
        <input type="password" name="password_prev" id="password_prev" placeholder="Enter Password"
               value="<?php if (isset($blank)) {
                   echo $blank;
               } ?>" class="form-control" required/><br>

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

<script>
    shout();
    function reset_field() {
        document.getElementById('password_prev').value = ' ';
    }
    //    $(document).ready(function(){
    //        document.getElementById('password_prev').value=' ';
    //    });
</script>