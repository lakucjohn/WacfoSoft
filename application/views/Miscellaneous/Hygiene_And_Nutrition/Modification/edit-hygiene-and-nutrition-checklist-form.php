<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/3/19
 * Time: 9:40 PM
 */
?>
<h3 style="text-align: center;">HYGIENE AND NUTRITION CHECKLIST</h3>
<hr>

<?php
foreach ($default_value_array->result() as $default) {
    echo form_open('miscellaneous%20hygiene%20and%20nutrition-details/edit/' . $default->ID); ?>
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-10">
            <div class="error-msg position-left"><?php echo validation_errors(); ?></div>
        </div>
    </div>
    <div class="card w-100">

        <div class="document-part-header">Details of the Member</div>
        <hr>
        <div class="document-part-content">
            <div class="row">
                <div class="col-md-6">
                    <label for="member_id">Membership ID</label>
                    <select name="member_id" id="member_id" class="form-control"
                            onchange="fetch_personal_records(this.value);">
                        <option value="">Select a Member ID</option>
                        <?php
                        foreach ($members_list->result() as $row) {

                            ?>

                            <option value="<?php echo $row->MEMBERSHIP_ID; ?>" <?php if ($row->MEMBERSHIP_ID == $default->MEMBERSHIP_ID) { ?> selected<?php } ?>><?php echo $row->MEMBERSHIP_ID; ?> </option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-6">

                    <label for="group_name">Name of the Member</label>
                    <div id="member_name_div">
                        <input type="text" class="form-control" name="member_name" id="member_name"
                               value="Name of selected member" disabled/>
                    </div>

                </div>
            </div>
            <br>

            <!--                <div class="row">-->
            <!--                    <div class="col-md-6">-->
            <!--                        -->
            <!--                    </div>-->
            <!--                </div>-->
        </div>
        <hr>
        <div class="document-part-header">Hygiene and Nutrition Information</div>

        <br>
        <div class="document-part-content">
            <div class="row">
                <div class="col-md-8">
                    <strong><em>Note: Use the following key below to fill the table
                            appropriately</em></strong><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 = Absent <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 = New and in use <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 = Present and in use <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 = Present but not in use <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5 = Renovated and in use <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6 = Renovated but not in use <br>
                </div>
            </div>
            <div id="checklist_table">
                <table class="table table-bordered table-responsive" id="members-list">
                    <tr>
                        <th>Individual ID</th>
                        <th>Name</th>
                        <th>Sex</th>
                        <th>Pit Latrine</th>
                        <th>Tippy Tap</th>
                        <th>Plate Drying Rack</th>
                        <th>Rubbish Pit</th>
                        <th>Bathroom Shelter</th>
                        <th>Kitchen Garden</th>
                        <th>Fruit Trees</th>
                        <th>NRM Practices</th>
                        <th>Maize Crib</th>
                        <th>Drying Rack</th>
                        <th>Tarpaulin</th>
                        <th>Granary</th>
                        <th>Papyrus Mat</th>
                        <th>Earth Floor</th>
                        <th>Date</th>
                    </tr>
                    <tr>
                        <td><?php echo $default->MEMBERSHIP_ID; ?></td>
                        <td><?php echo $default->MEMBERSHIP_ID; ?></td>
                        <td><?php echo $default->SEX; ?></td>

                        <td>
                            <div class="col-md-12"><input value="<?php echo $default->PIT_LATRINE; ?>" type="number"
                                                          name="pit_latrine" id="pit_latrine" style="width: 45px;"/>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12"><input value="<?php echo $default->TIPPY_TAP; ?>" type="number"
                                                          name="tippy_tap" id="tippy_tap" style="width: 45px;"/></div>
                        </td>
                        <td>
                            <div class="col-md-12"><input value="<?php echo $default->PLATE_DRYING_RACK; ?>"
                                                          type="number" name="plate_drying_rack" id="plate_drying_rack"
                                                          style="width: 45px;"/></div>
                        </td>
                        <td>
                            <div class="col-md-12"><input value="<?php echo $default->RUBBISH_PIT; ?>" type="number"
                                                          name="rubbish_pit" id="rubbish_pit" style="width: 45px;"/>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12"><input value="<?php echo $default->BATHING_SHELTER; ?>" type="number"
                                                          name="bathroom_shelter" id="bathroom_shelter"
                                                          style="width: 45px;"/></div>
                        </td>
                        <td>
                            <div class="col-md-12"><input value="<?php echo $default->KITCHEN_GARDEN; ?>" type="number"
                                                          name="kitchen_garden" id="kitchen_garden"
                                                          style="width: 45px;"/></div>
                        </td>
                        <td>
                            <div class="col-md-12"><input value="<?php echo $default->FRUIT_TREES; ?>" type="number"
                                                          name="fruit_trees" id="fruit_trees" style="width: 45px;"/>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12"><input value="<?php echo $default->NRM_PRACTICES; ?>" type="number"
                                                          name="nrm_practices" id="nrm_practices" style="width: 45px;"/>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12"><input value="<?php echo $default->MAIZE_CRIB; ?>" type="number"
                                                          name="maize_crib" id="maize_crib" style="width: 45px;"/></div>
                        </td>
                        <td>
                            <div class="col-md-12"><input value="<?php echo $default->DRYING_RACK; ?>" type="number"
                                                          name="drying_rack" id="drying_rack" style="width: 45px;"/>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12"><input value="<?php echo $default->TAPAULIN; ?>" type="number"
                                                          name="tarpaulin" id="tarpaulin" style="width: 45px;"/></div>
                        </td>
                        <td>
                            <div class="col-md-12"><input value="<?php echo $default->GRANARY; ?>" type="number"
                                                          name="granary" id="granary" style="width: 45px;"/></div>
                        </td>
                        <td>
                            <div class="col-md-12"><input value="<?php echo $default->PAPYRUS_MAT; ?>" type="number"
                                                          name="papyrus_mat" id="papyrus_mat" style="width: 45px;"/>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12"><input value="<?php echo $default->EARTH_FLOOR; ?>" type="number"
                                                          name="earth_floor" id="earth_floor" style="width: 45px;"/>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12"><input value="<?php echo $default->DATE_CHECKED; ?>" type="date"
                                                          name="check_date" id="check_date" style="width: 145px;"/>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <hr>
        <div class="document-part-header">Details of the person accountable for this information</div>

        <hr>
        <div class="document-part-content">
            <div class="row">
                <div class="col-md-6">
                    <label for="checked_by">Checked By: </label>
                    <select name="checked_by" id="checked_by" class="form-control">
                        <option value="">Select the staff</option>
                        <?php
                        foreach ($staff_list->result() as $row) {

                            ?>

                            <option value="<?php echo $row->STAFF_ID; ?>" <?php if ($row->STAFF_ID == $default->STAFF) { ?> selected<?php } ?>><?php echo $row->NAME; ?> </option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="date_checked">Date: </label>
                    <input type="date" name="date_checked" id="date_checked" class="form-control"
                           value="<?php echo $default->DATE_RECORDED; ?>"/>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <div class="row">
            <div class="col-md-12" style="font-size: 10px;">
                NB: This <strong style="color: red;">MUST</strong> be checked physically on monthly basis
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12" style="text-align: center;">
                <button type="submit" class="btn btn-primary btn-md">Save Information</button>
            </div>
        </div>
        <br>
    </div>
    </form>
    <?php
}
?>

<script type="text/javascript">

    //    Setting the dropdown for subcounty for parish insertion using ajax
    function fetch_personal_records(member_id) {
        if (member_id !== '') {
            $.ajax({
                url: "<?php echo base_url('Miscellaneous/HygieneAndNutrition/hygieneAndNutrition/fetch_personal_records');?>",
                method: "POST",
                data: {member_id: member_id, record_id:<?php echo $row_id; ?>},
                success: function (data) {
                    show_personal_details(member_id);
                    document.getElementById('checklist_table').innerHTML = data;
                }
            });
        }
    }

    function show_personal_details(member_id) {
        $.ajax({
            url: "<?php echo base_url('People/Membership/membership/get_member_name');?>",
            method: "POST",
            data: {member_id: member_id},
            success: function (data) {
                document.getElementById('member_name').value = data;
            }
        });
    }
</script>