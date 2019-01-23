<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/2/19
 * Time: 10:59 AM
 */
?>
    <h3 style="text-align: center;">MISEAN CARA BASELINE SURVEY ECONOMIC SECURITY BEFORE PROJECT INTERVENTION</h3>

    <hr>

<?php
foreach ($default_value_array->result() as $default) {
    echo form_open('production/misean%20cara%20baseline%20survey-details/edit/' . $row_id); ?>
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-10">
            <div class="error-msg position-left"><?php echo validation_errors(); ?></div>
        </div>
    </div>
    <div class="card w-100">
        <div class="document-part-header">Details of the Grantee</div>

        <hr>

        <div class="document-part-content">
            <div class="row">
                <div class="col-md-4">
                    <label for="name_of_the_grantee">Name of the Grantee</label>
                    <input type="text" value="<?php echo $default->GRANTEE ?>" name="name_of_the_grantee"
                           id="name_of_the_grantee" class="form-control"/>
                </div>
                <div class="col-md-4">
                    <label for="group_id">Group ID</label>
                    <select name="group_name" id="group_name" class="form-control"
                            onchange="fetch_group_members_for_production(this.value, this.title);" disabled>
                        <option value="" title="">Select a Group ID</option>
                        <?php
                        foreach ($groups_list->result() as $group) {
                            ?>
                            <option value="<?php echo $group->NAME; ?>" <?php if ($group->GROUP_ID == $default->GROUP_NAME) { ?> selected<?php } ?>><?php echo $group->GROUP_ID ?></option>
                            <?php
                        }
                        ?>
                    </select><br>
                    <input type="hidden" name="group_id" id="group_id"/>
                    <label for="name_of_the_group">Name of the Group</label>
                    <input type="text" name="name_of_the_group" id="name_of_the_group" class="form-control" disabled/>

                </div>
                <div class="col-md-4">
                    <label for="district">District</label>
                    <input type="text" name="district" id="district" value="Amuru" class="form-control" disabled/>

                </div>
            </div>
            <br>

            <div class="row">

                <div class="col-md-4">
                    <label for="county">County</label>
                    <input type="text" value="<?php echo $default->COUNTY ?>" name="county" id="county"
                           class="form-control"/>

                </div>
                <div class="col-md-4">
                    <label for="parish">Parish Sub-County</label>
                    <input type="text" value="<?php echo $default->SUBCOUNTY ?>" name="parish" id="parish"
                           class="form-control"/>

                </div>

            </div>
        </div>

        <hr>
        <div class="document-part-header">
            Table 1.0: IR 24% of households able to provide medical treatment to Children 0-18 years in their household
        </div>

        <hr>
        <div class="document-part-content">
            <div class="row">
                <div class="col-md-6">
                    <strong><em>Key: </em></strong><br>
                    PWD = Child with Disability<br>
                    CHH = Child Headed Household<br>
                    Orphan = A child that has lost either the mother or father or both<br>
                    HIV+ child
                </div>
            </div>
            <div class="row">
                <table class="table table-bordered table-responsive">
                    <tr>
                        <td style="width: 60%;">
                            <table class="table table-bordered table-responsive">
                                <tr>
                                    <td style="width: 30%;">
                                        <div class="col-md-12">
                                            How many children aged 7-18 years are there in your group?<br>


                                        </div>
                                    </td>
                                    <td style="width: 30%;">
                                        <div class="col-md-12">
                                            How many children between 7-18 years are attending school in your group?
                                            Please categorize them by their level of vulnerability indicated.<br>


                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="col-md-12">
                                            <table class="table table-bordered table-responsive">
                                                <tr>
                                                    <th style="width: 20%;">Q1 - PWD</th>
                                                    <th style="width: 20%;">Q2 - CHH</th>
                                                    <th style="width: 20%;">Q3 - Orphan</th>
                                                    <th style="width: 20%;">Q4 - HIV+</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="number" name="number_of_children_with_pwd"
                                                                   id="number_of_children_with_pwd"
                                                                   value="<?php echo $default->PWD ?>"
                                                                   style="width: 45px;"/>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="number" name="number_of_children_with_chh"
                                                                   id="number_of_children_with_chh"
                                                                   value="<?php echo $default->CHH ?>"
                                                                   style="width: 45px;"/>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="number" name="number_of_children_orphan"
                                                                   id="number_of_children_orphan"
                                                                   value="<?php echo $default->ORPHAN ?>"
                                                                   style="width: 45px;"/>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="number" name="number_of_children_with_hiv"
                                                                   id="number_of_children_with_hiv"
                                                                   value="<?php echo $default->HIV ?>"
                                                                   style="width: 45px;"/>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-12">
                                            <table class="table table-bordered table-responsive">
                                                <tr>
                                                    <th style="width: 20%;">Q5 - PWD</th>
                                                    <th style="width: 20%;">Q6 - CHH</th>
                                                    <th style="width: 20%;">Q7 - Orphan</th>
                                                    <th style="width: 20%;">Q8 - HIV+</th>
                                                    <th style="width: 20%;">Q9 - Normal</th>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="number"
                                                                   name="number_of_children_with_pwd_in_school"
                                                                   id="number_of_children_with_pwd_in_school"
                                                                   value="<?php echo $default->PWD_IN_SCHOOL ?>"
                                                                   style="width: 45px;"/>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="number"
                                                                   name="number_of_children_with_chh_in_school"
                                                                   id="number_of_children_with_chh_in_school"
                                                                   value="<?php echo $default->CHH_IN_SCHOOL ?>"
                                                                   style="width: 45px;"/>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="number"
                                                                   name="number_of_children_orphan_in_school"
                                                                   id="number_of_children_orphan_in_school"
                                                                   value="<?php echo $default->ORPHAN_IN_SCHOOL ?>"
                                                                   style="width: 45px;"/>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="number"
                                                                   name="number_of_children_with_hiv_in_school"
                                                                   id="number_of_children_with_hiv_in_school"
                                                                   value="<?php echo $default->CHILDREN_WITH_HIV_IN_SCHOOL ?>"
                                                                   style="width: 45px;"/>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-12">
                                                            <input type="number"
                                                                   name="number_of_children_normal_in_school"
                                                                   id="number_of_children_normal_in_school"
                                                                   value="<?php echo $default->NORMAL_IN_SCHOOL ?>"
                                                                   style="width: 45px;"/>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table class="table table-bordered table-responsive">
                                <tr>
                                    <td style="width: 20%;">
                                        <div class="col-md-12">
                                            Q10 - How many times do you provide meals to your children aged 0-18 years
                                            per day?<br>
                                            <br>
                                            <select name="number_of_meals_per_day" id="number_of_meals_per_day"
                                                    class="form-control">
                                                <option value="1"
                                                        <?php if ($default->MEALS_PER_DAY == 1) ?>selected<?php ?>>Once
                                                </option>
                                                <option value="2"
                                                        <?php if ($default->MEALS_PER_DAY == 2) ?>selected<?php ?>>Twice
                                                </option>
                                                <option value="3"
                                                        <?php if ($default->MEALS_PER_DAY == 3) ?>selected<?php ?>>
                                                    Thrice
                                                </option>
                                                <option value="4"
                                                        <?php if ($default->MEALS_PER_DAY == 4) ?>selected<?php ?>>
                                                    Whenever available
                                                </option>
                                            </select>
                                        </div>
                                    </td>
                                    <td style="width: 20%;">
                                        <div class="col-md-12">
                                            Q11 - Were you able to meet the medical expenses for your children (0-18)
                                            wherever they got sick?<br>
                                            <br>
                                            <select name="able_to_meet_medical_expenses_for_children"
                                                    id="able_to_meet_medical_expenses_for_children"
                                                    class="form-control">
                                                <option value="1"
                                                        <?php if ($default->MEDICAL_TREATMENT == 1) ?>selected<?php ?>>
                                                    Yes
                                                </option>
                                                <option value="2"
                                                        <?php if ($default->MEDICAL_TREATMENT == 2) ?>selected<?php ?>>
                                                    No
                                                </option>
                                                <option value="3"
                                                        <?php if ($default->MEDICAL_TREATMENT == 3) ?>selected<?php ?>>
                                                    Sometimes
                                                </option>
                                                <option value="4"
                                                        <?php if ($default->MEDICAL_TREATMENT == 4) ?>selected<?php ?>>I
                                                    am supported
                                                </option>
                                                <option value="5"
                                                        <?php if ($default->MEDICAL_TREATMENT == 5) ?>selected<?php ?>>I
                                                    get free treatment
                                                </option>
                                            </select>
                                        </div>

                                    </td>
                                </tr>

                            </table>

                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12" style="text-align: center;">
                <button type="submit" class="btn btn-primary btn-md">Save Information</button>
            </div>
        </div>
        <hr>
    </div>
    </form>
    <?php
}
?>