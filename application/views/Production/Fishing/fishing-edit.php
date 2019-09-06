<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/10/18
 * Time: 8:10 PM
 */

?>

<h3>Edit Information on Marketing of Products</h3>
<hr>

<?php
foreach ($default_value_array->result() as $default) {
    echo form_open('miscellaneous%20hygiene%20and%20nutrition-details/edit/' . $default->ID); ?>
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

                        <option value="<?php echo $row->MEMBERSHIP_ID; ?>" <?php if ($row->MEMBERSHIP_ID == $default->INDIVIDUAL_ID) { ?> selected<?php } ?>><?php echo $row->MEMBERSHIP_ID; ?> </option>
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
    </div>
    <hr>
    <div class="row">
        <div id="fishing_data_div">
            <table class="table table-bordered table-responsive">
                <tr>
                    <td colspan="8">&nbsp;</td>
                </tr>
                <tr>
                    <th style="width: 20%;">Individual</th>
                    <th>Group Member</th>
                    <th>Q3</th>
                    <th>Q4</th>
                    <th colspan="4">Q5 - Fish Farming</th>
                </tr>
                <tr style="font-weight: bold;">
                    <td>
                        <div class="col-md-12">
                            ID
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            Size of pond
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            No. of Fish harvested
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            Qty yield (Kg)
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            Income (UGX)
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="col-md-12">
                            <?php echo $default->INDIVIDUAL_ID; ?>
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            <input type="number" name="size_of_pond" id="size_of_pond"
                                   value="<?php echo $default->SIZE_OF_POND; ?>" class="form-control"/>
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            <input type="number" name="number_of_fish_harvested" id="number_of_fish_harvested"
                                   value="<?php echo $default->NUMBER_OF_FISH_HARVESTED; ?>" class="form-control"/>
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            <input type="number" name="quantity_yield_in_kg" id="quantity_yield_in_kg"
                                   value="<?php echo $default->QUANTITY_IN_KG; ?>" class="form-control"/>
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            <input type="number" name="income_ugx" id="income_ugx"
                                   value="<?php echo $default->INCOME; ?>" class="form-control"/>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <?php
}
?>

<script type="text/javascript">

    //    Setting the dropdown for subcounty for parish insertion using ajax
    function fetch_personal_records(member_id) {
        if (member_id !== '') {
            $.ajax({
                url: "<?php echo base_url('Production/FishFarming/fishFarming/fetch_personal_records');?>",
                method: "POST",
                data: {member_id: member_id, record_id:<?php echo $row_id; ?>},
                success: function (data) {
                    show_personal_details(member_id);
                    document.getElementById('fishing_data_div').innerHTML = data;
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