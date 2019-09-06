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

<?php echo form_open('production/misean%20cara%20baseline%20surveys/new%20misean%20cara%20baseline%20survey%20economic%20%20security'); ?>
<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-10">
        <div class="error-msg position-left"><?php echo validation_errors(); ?></div>
    </div>
</div>
<div  class="card w-100">
    <div class="document-part-header">Details of the Grantee</div>

    <hr>

    <div class="document-part-content">
        <div class="row">
            <div class="col-md-4">
                <label for="name_of_the_grantee">Name of the Grantee</label>
                <input type="text" name="name_of_the_grantee" id="name_of_the_grantee" class="form-control" />
            </div>
            <div class="col-md-4">
                <label for="group_id">Group ID</label>
                <select name="group_id" id="group_id" class="form-control"
                        onchange="fetch_group_members_for_production(this.value);">
                    <option value="" title="">Select a Group ID</option>
                    <?php
                    foreach ($groups_list->result() as $group) {
                        echo '<option value="' . $group->GROUP_ID . '">' . $group->GROUP_ID . '</option>';
                    }
                    ?>
                </select><br>
                <!--                <input type="hidden" name="group_id" id="group_id"/>-->
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
                <input type="text" name="county" id="county" class="form-control" />

            </div>
            <div class="col-md-4">
                <label for="parish">Parish Sub-County</label>
                <input type="text" name="parish" id="parish" class="form-control" />

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
                                        How many children between 7-18 years are attending school in your group? Please categorize them by their level of vulnerability indicated.<br>


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
                                                               id="number_of_children_with_pwd" value="0"
                                                               style="width: 45px;"/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <input type="number" name="number_of_children_with_chh"
                                                               id="number_of_children_with_chh" value="0"
                                                               style="width: 45px;"/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <input type="number" name="number_of_children_orphan"
                                                               id="number_of_children_orphan" value="0"
                                                               style="width: 45px;"/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <input type="number" name="number_of_children_with_hiv"
                                                               id="number_of_children_with_hiv" value="0"
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
                                                               id="number_of_children_with_pwd_in_school" value="0"
                                                               style="width: 45px;"/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <input type="number"
                                                               name="number_of_children_with_chh_in_school"
                                                               id="number_of_children_with_chh_in_school" value="0"
                                                               style="width: 45px;"/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <input type="number" name="number_of_children_orphan_in_school"
                                                               id="number_of_children_orphan_in_school" value="0"
                                                               style="width: 45px;"/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <input type="number"
                                                               name="number_of_children_with_hiv_in_school"
                                                               id="number_of_children_with_hiv_in_school" value="0"
                                                               style="width: 45px;"/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <input type="number" name="number_of_children_normal_in_school"
                                                               id="number_of_children_normal_in_school" value="0"
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
                                        Q10 - How many times do you provide meals to your children aged 0-18 years per day?<br>
                                        <br>
                                        <select name="number_of_meals_per_day" id="number_of_meals_per_day"
                                                class="form-control">
                                            <option value="1">Once</option>
                                            <option value="2">Twice</option>
                                            <option value="3">Thrice</option>
                                            <option value="4">Whenever available</option>
                                        </select>
                                    </div>
                                </td>
                                <td style="width: 20%;">
                                    <div class="col-md-12">
                                        Q11 - Were you able to meet the medical expenses for your children (0-18) wherever they got sick?<br>
                                        <br>
                                        <select name="able_to_meet_medical_expenses_for_children"
                                                id="able_to_meet_medical_expenses_for_children" class="form-control">
                                            <option value="1">Yes</option>
                                            <option value="2">No</option>
                                            <option value="3">Sometimes</option>
                                            <option value="4">I am supported</option>
                                            <option value="5">I get free treatment</option>
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

    <div id="production_tables">

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

<script type="text/javascript">

    //    Setting the dropdown for subcounty for parish insertion using ajax

    function fetch_group_members_for_production(group_id) {
        if (group_id !== '') {
            //Posting data to the crop production table
            $.ajax({
                url: "<?php echo base_url('Production/BaselineSurveys/miseanCaraBaselineSurvey/check_and_display_list_as_per_group_type');?>",
                method: "POST",
                data: {group_id: group_id},
                success: function (data) {
//                    alert(data);
                    show_group_details(group_id);
                    document.getElementById('production_tables').innerHTML = data;
//                    document.getElementById('group_id').value = group_id;

                    //Posting data to the vegetable production table
//                    $.ajax({
//                        url: "<?php //echo base_url('Production/BaselineSurveys/miseanCaraBaselineSurvey/fetch_group_members_for_vegetable_production');?>//",
//                        method: "POST",
//                        data: {group_id: group_id},
//                        success: function (data) {
//                            document.getElementById('vegetable_table').innerHTML = data;
//
//                            //Posting data to the fish farming table
//                            $.ajax({
//                                url: "<?php //echo base_url('Production/BaselineSurveys/miseanCaraBaselineSurvey/fetch_group_members_for_fish_farming');?>//",
//                                method: "POST",
//                                data: {group_id: group_id},
//                                success: function (data) {
//                                    document.getElementById('fish_farming_table').innerHTML = data;
//                                    show_group_details(group_id);
//                                }
//                            });
//                        }
//                    });
                }
            });
        }
    }

    function show_group_details(group_id) {
        $.ajax({
            url: "<?php echo base_url('People/Groupings/groupings/get_group_name');?>",
            method: "POST",
            data: {group_id: group_id},
            success: function (data) {
                document.getElementById('name_of_the_group').value = data;
            }
        });
    }
</script>