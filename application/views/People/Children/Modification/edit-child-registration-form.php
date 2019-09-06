<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/4/19
 * Time: 11:41 PM
 */
?>
<h3>EDIT THE INFORMATION ABOUT THE CHILD</h3>

<hr>

<?php
echo form_open('child-details/edit/' . $row_id);
foreach ($default_value_array->result() as $default) {
    ?>
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-10">
            <div class="error-msg position-left"><?php echo validation_errors(); ?></div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-1">

            </div>
            <div class="col-md-10">
                <p>
                    <label for="child_name">Name of the Child:</label>
                    <input value="<?php echo $default->NAME; ?>" type="text" name="child_name" id="child_name"
                           class="form-control"/>
                </p>

                <p>
                    <label for="child_sex">Gender: </label><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_sex"
                                                                           id="child_sex" value="Male"
                                                                           <?php if ($default->SEX == 'M' | $default->SEX == 'Male'){ ?>checked<?php } ?>/>Male<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="child_sex"
                                                                           id="child_sex" value="Female"
                                                                           <?php if ($default->SEX == 'F' | $default->SEX == 'Female'){ ?>checked<?php } ?>/>Female
                </p>

                <p>
                    <label for="child_vulnerability">Vulnerability: </label>
                    <select name="child_vulnerability" id="child_vulnerability" class="form-control">
                        <option value="">Select the vulnerability</option>

                        <?php
                        foreach ($vulnerability_list->result() as $row) {
                            ?>
                            <option value="<?php echo $row->DISABILITY_ID; ?>"
                                    <?php if ($default->VULNERABILITY == $row->DISABILITY_ID){ ?>selected<?php } ?>><?php echo $row->DISABILITY_NAME; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </p>

                <p>
                    <label for="child_date_of_birth">Date of Birth: </label>
                    <input value="<?php echo $default->DATE_OF_BIRTH; ?>" type="date" name="child_date_of_birth"
                           id=child_date_of_birth" class="form-control"/>
                </p>
                <p>
                    <label for="child_parish">Parish:</label>
                    <select name="child_parish" id="child_parish" class="form-control"
                            onchange="fetch_villages(this.value);">
                        <?php
                        $village_parish = '';

                        foreach ($village_list->result() as $village) {
                            if ($village->ID == $default->LOCATION) {

                                $village_parish = $village->PARISH;
                            }
                        }

                        if ($village_parish != '') {
                            foreach ($parish_list->result() as $parish) {
                                if ($parish->ID == $village_parish) {

                                    ?>

                                    <option value="<?php echo $parish->ID; ?>"><?php echo $parish->PARISH; ?></option>
                                    <?php
                                } else {
                                    ?>
                                    <option value="">Select Parish</option>
                                    <?php
                                    foreach ($parish_list->result() as $row) {
                                        ?>
                                        <option value="<?php echo $row->ID; ?>"><?php echo $row->PARISH; ?></option>
                                        <?php
                                    }
                                }
                            }
                        } else {
                            ?>
                            <option value="">Select Parish</option>
                            <?php
                            foreach ($parish_list->result() as $row) {
                                ?>
                                <option value="<?php echo $row->ID; ?>"><?php echo $row->PARISH; ?></option>
                                <?php
                            }
                        }
                        ?>

                        <?php

                        ?>
                    </select>

                </p>
                <p>
                <div id="child_village_div">
                    <label for="child_village">Village:</label>
                    <select name="" id="" class="form-control">
                        <?php
                        foreach ($village_list->result() as $village) {
                            if ($village->ID == $default->LOCATION) {

                                ?>
                                <option value="<?php echo $default->LOCATION; ?>"
                                        selected><?php echo $village->VILLAGE; ?></option>
                                <?php


                            }
                        }
                        ?>
                    </select>
                </div>

                </p>
                <p>
                    <label for="project_visit_type">Project: </label>
                    <select name="project_visit_type" id="project_visit_type" class="form-control">
                        <option value="">Select a project</option>
                        <option value="DSP" <?php if ($default->PROJECT == 'DSP'){ ?>selected<?php } ?>>DSP</option>
                        <option value="Porticus" <?php if ($default->PROJECT == 'Porticus'){ ?>selected<?php } ?>>
                            Porticus
                        </option>
                        <option value="Victorbraun" <?php if ($default->PROJECT == 'Victorbraun'){ ?>selected<?php } ?>>
                            Victorbraun
                        </option>
                    </select>
                </p>
                <p>
                    <label for="child_date_of_joining">Date of joining: </label>
                    <input value="<?php echo $default->DATE_OF_JOINING; ?>" type="date" name="child_date_of_joining"
                           id="child_date_of_joining"
                           class="form-control"/>
                </p>
                <p>
                    <label for="child_mother_name">Mother's Name: </label>
                    <input value="<?php echo $default->MOTHER; ?>" type="text" name="child_mother_name"
                           id="child_mother_name" class="form-control"/>
                </p>
                <p>
                    <label for="child_father_name">Father's Name: </label>
                    <input value="<?php echo $default->FATHER; ?>" type="text" name="child_father_name"
                           id="child_father_name" class="form-control"/>
                </p>
                <p>
                    <label for="child_guardian_name">Name of Guardian: </label>
                    <input value="<?php echo $default->GUARDIAN; ?>" type="text" name="child_guardian_name"
                           id="child_guardian_name" class="form-control"/>
                </p>

                <p style="text-align: center;">
                    <br>
                    <button type="submit" class="btn btn-primary btn-md">Update The Child's Information</button>
                </p>

            </div>
        </div>
    </div>
    <?php
}
?>
</form>

<script type="text/javascript">
    function fetch_villages(parish_id) {
        if (parish_id !== '') {
            $.ajax({
                url: "<?php echo base_url('Settings/Welcome/settings/fetch_villages_for_parish');?>",
                method: "POST",
                data: {parish_id: parish_id},
                success: function (data) {
                    document.getElementById('child_village_div').innerHTML = data;
                }
            });
        }
    }
</script>