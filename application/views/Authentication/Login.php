<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 8:52 AM
 */
?>
<style>
    .red-text {
        color: red;
    }
</style>
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">

            <?php echo form_open('auth/login'); ?>

            <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" id="username" name="username" type="text" aria-describedby="emailHelp" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="inputpassword">Password</label>
                    <input class="form-control" id="inputpassword" type="password" name="password" placeholder="Password">
                </div>
                <!--<div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"> Remember Password</label>
                    </div>
                </div>-->

            <div class="error-msg position-left red-text"><?php if (isset($error)) {
                    echo $error;
                } ?></div>
            <br>
                <button class="btn btn-primary space-left col-md-6 " type="submit" name="Login">Login</button>
            </form>
            <!--<div class="text-center">
                <a class="d-block small mt-3" href="register.html">Register an Account</a>
                <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
            </div>-->
        </div>
    </div>
</div>
