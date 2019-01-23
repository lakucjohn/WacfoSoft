<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/4/19
 * Time: 10:41 PM
 */
?>
<h3>Livelihood Membership Registration Form</h3>
<hr>

<?php
echo form_open('member-details/edit/' . $row_id);
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
                <div class="card w-100">
                    <div class="document-part-header">Personal Details</div>
                    <hr>
                    <div class="document-part-content">
                        <p>
                            <label for="member_name">Name of Member:</label>
                            <input value="<?php echo $default->NAME ?>" type="text" name="member_name" id="member_name"
                                   class="form-control"/>
                        </p>

                        <p>
                            <label for="member_sex">Gender: </label><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="member_sex"
                                                                                   id="member_sex"
                                                                                   value="M"
                                                                                   <?php if ($default->SEX == 'M') ?>checked/>Male<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="member_sex"
                                                                                   id="member_sex" value="F"
                                                                                   <?php if ($default->SEX == 'F') ?>checked/>Female
                        </p>

                        <p>
                            <label for="member_vulnerability">Vulnerability: </label>
                            <select name="member_vulnerability" id="member_vulnerability" class="form-control">
                                <option value=""><?php echo $default->VULNERABILITY; ?></option>

                                <?php
                                foreach ($vulnerability_list->result() as $row) {
                                    echo '<option value="' . $row->DISABILITY_ID . '">' . $row->DISABILITY_NAME . '</option>';
                                }
                                ?>
                            </select>
                        </p>

                        <p>
                            <label for="member_date_of_birth">Date of Birth: </label>
                            <input value="<?php echo $default->DATE_OF_BIRTH; ?>" type="date"
                                   name="member_date_of_birth" id="member_date_of_birth"
                                   class="form-control"/>
                        </p>
                    </div>
                    <hr>
                    <div class="document-part-header">Group Information</div>
                    <hr>
                    <div class="document-part-content">
                        <p>
                            <label for="member_group_name">Group Name: </label>
                            <select name="member_group_name" id="member_group_name" class="form-control"
                                    onchange="show_group_name(this.value);">
                                <option value="">Select the Group ID</option>

                                <?php
                                foreach ($grouping_list->result() as $row) {
                                    ?>
                                    <option value="<?php echo $row->GROUP_ID; ?>" title="<?php echo $row->NAME; ?>"
                                            <?php if ($row->GROUP_ID == $default->GROUPS){ ?>selected<?php } ?>><?php echo $row->NAME; ?></option>
                                    <?php
                                }
                                ?>
                            </select><br>

                            <input type="text" name="member_group_id" id="member_group_id" class="form-control"
                                   value="<?php echo $default->GROUPS; ?>" disabled/>
                        </p>

                        <p>
                            <label for="member_role">Position: </label>
                            <select name="member_role" id="member_role" class="form-control">
                                <option value="">Select the position of member in the group</option>
                                <option value="Chairperson" <?php if ($default->TITLE == 'Chairperson') ?>selected>
                                    Chairperson
                                </option>
                                <option value="Vice Chairperson"
                                        <?php if ($default->TITLE == 'Vice Chairperson') ?>selected>Vice Chairperson
                                </option>
                                <option value="Secretary" <?php if ($default->TITLE == 'Secretary') ?>selected>
                                    Secretary
                                </option>
                                <option value="Treasurer" <?php if ($default->TITLE == 'Treasurer') ?>selected>
                                    Treasurer
                                </option>
                                <option value="Member" <?php if ($default->TITLE == 'Member') ?>selected>Member</option>
                            </select>
                        </p>
                    </div>
                    <hr>
                    <div class="document-part-header">Residential Address</div>
                    <hr>
                    <div class="document-part-content">
                        <p>
                            <label for="member_parish">Parish: </label>
                            <select name="member_parish" id="member_parish" class="form-control"
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
                        <div id="member_village_div">
                            <label for="member_village">Village</label>
                            <select name="member_village" id="member_village" class="form-control">
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
                    </div>

                    <hr>
                    <div class="document-part-header">Other Information</div>
                    <hr>

                    <div class="document-part-content">
                        <p>
                            <label for="member_date_of_joining">Date of joining: </label>
                            <input value="<?php echo $default->DATE_OF_JOINING; ?>" type="date"
                                   name="member_date_of_joining" id="member_date_of_joining"
                                   class="form-control"/>
                        </p>

                        <p>
                        <div class="row">
                            <label for="member_telephone">Telephone: </label>
                        </div>
                        <div class="row">
                            <div class="col-md-2" style="text-align: right;">
                                +256
                            </div>

                            <div class="col-md-10">
                                <input value="<?php echo $default->TELEPHONE; ?>" type="number" name="member_telephone"
                                       id="member_telephone"
                                       class="form-control" maxlength="9"/>
                            </div>

                        </div>
                        </p>
                    </div>

                    <hr>
                    <div class="col-md-12" style="text-align: center;">
                        <button class="btn btn-primary btn-md">Update Member Details</button>
                    </div>
                    <br>

                </div>
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
                url: "<?php echo base_url('Settings/Welcome/settings/fetch_villages_for_member_parish');?>",
                method: "POST",
                data: {parish_id: parish_id},
                success: function (data) {
                    document.getElementById('member_village_div').innerHTML = data;
                }
            });
        }
    }

    function show_group_name(groupname) {
        if (groupname !== '') {
            document.getElementById('member_group_id').value = groupname;
        } else {
            document.getElementById('member_group_id').value = 'The ID of the selected group will appear here';
        }
    }
</script>