<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/30/18
 * Time: 10:23 PM
 */
?>
<h3>Livelihood Group Registration Form</h3>
<hr>

<?php
echo form_open('group-details/edit/' . $row_id);
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
            <div class="col-md-2">

            </div>

            <div class="col-md-8">
                <p>
                    <label for="group_name">Name of the Group: </label>
                    <input value="<?php echo $default->NAME; ?>" type="text" name="group_name" id="group_name"
                           class="form-control"/>
                </p>

                <p>
                    <label for="group_parish">Parish: </label>
                    <select name="group_parish" id="group_parish" class="form-control"
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
                <div id="group_village_div">
                    <label for="group_village">Village: </label>
                    <select name="group_village" id="group_village" class="form-control" required>

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
                    <label for="group_type">Livelihood Category: </label>
                    <select name="group_type" id="group_type" class="form-control" required>
                        <option value="">Select Livelihood Category</option>

                        <?php
                        foreach ($category_list->result() as $row) {
                            ?>
                            <option value="<?php echo $row->ID; ?>" <?php if ($default->TYPE == $row->ID) { ?> selected <?php } ?>><?php echo $row->CATEGORYNAME; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </p>

                <p>
                    <label for="date_of_registration">Date of Registration: </label>
                    <input value="<?php echo $default->DATE_OF_REGISTRATION; ?>" type="date" name="date_of_registration"
                           id="date_of_registration" class="form-control"/>
                </p>
            </div>
        </div>
        <br>
        <hr>

        <div class="row">
            <div class="col-md-12" style="text-align: center;">
                <button type="submit" class="btn btn-primary btn-md">Update Livelihood Group Information</button>
            </div>
        </div>
        <hr>
    </div>
    <?php
}
?>
</form>

<script type="text/javascript">
    function fetch_villages(parish_id) {
        if (parish_id !== '') {
            $.ajax({
                url: "<?php echo base_url('Settings/Welcome/settings/fetch_villages_for_parish_for_group');?>",
                method: "POST",
                data: {parish_id: parish_id},
                success: function (data) {
                    document.getElementById('group_village_div').innerHTML = data;
                }
            });
        }
    }
</script>
