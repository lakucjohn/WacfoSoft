<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/3/19
 * Time: 11:49 PM
 */

?>

<h3>Training Registration Form</h3>
<hr>

<?php echo form_open('trainings/new-training'); ?>
<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-10">
        <div class="error-msg position-left"><?php echo validation_errors(); ?></div>
    </div>
</div>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-2">
            <p>&nbsp;</p>
        </div>
        <div class="col-md-8">
            <p>
                <label for="training_course">Course:</label>
                <select name="training_course" id="training_course" class="form-control"
                        onchange="fetch_list_of_modules(this.value);">
                    <option value="">Select a course</option>
                    <?php
                    foreach ($courses_list->result() as $row) {
                        echo '<option value="' . $row->CODE . '">' . $row->COURSE . '</option>';
                    }
                    ?>
                </select>
            </p>
            <p>
            <div id="modules_div">
                <label for="training_module">Module:</label>
                <select name="training_module" id="training_module" class="form-control">
                    <option value="">Select the module</option>
                </select>
            </div>

            </p>

            <p>
                <label for="objective_of_the_training">Objectives of the training:</label>
                <textarea rows="5" name="objective_of_the_training" id="objective_of_the_training" class="form-control"></textarea>
            </p>

            <p>
                <label for="date_of_the_training">Date of the training:</label>
                <input type="date" name="date_of_the_training" id="date_of_the_training" class="form-control" />
            </p>

            <p>
                <label for="venue_of_the_training">Venue: </label>
                <input type="text" name="venue_of_the_training" id="venue_of_the_training" class="form-control" />
            </p>

            <p>
                <label for="name_of_trainer">Name of the trainer: </label>
                <input type="text" name="name_of_trainer" id="name_of_trainer" class="form-control" />
            </p>

            <p>
                <input type="checkbox" name="trainer_is_staff" id="trainer_is_staff" /> This trainer is a staff
            </p>
        </div>
    </div>
</div>

<hr>
<div class="col-md-12" style="text-align: center;">
    <button type="submit" class="btn btn-primary btn-md">Register Training</button>
</div>
<br>
</form>

<script type="text/javascript">
    function fetch_list_of_modules(course_code) {
        if (course_code !== '') {
            $.ajax({
                url: "<?php echo base_url('Training/courses/fetch_list_of_modules');?>",
                method: "POST",
                data: {course_code: course_code},
                success: function (data) {
                    document.getElementById('modules_div').innerHTML = data;
                }
            });
        }
    }
</script>