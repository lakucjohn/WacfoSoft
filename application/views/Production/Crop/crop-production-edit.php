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

                        <option value="<?php echo $row->MEMBERSHIP_ID; ?>" <?php if ($row->MEMBERSHIP_ID == $default->INDIVIDUAL) { ?> selected<?php } ?>><?php echo $row->MEMBERSHIP_ID; ?> </option>
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

        <div id="crop_production_data_div">
            <table class="table table-bordered table-responsive">
                <tr>
                    <th>Individual ID</th>
                    <th colspan="4">Q21. Crop 1: Soya Beans</th>
                </tr>

                <tr>
                    <td><?php echo $default->INDIVIDUAL; ?></td>
                    <td>
                        <div class="col-md-12">
                            ACRES: <input type="number" name="acres" id="acres"
                                          value="<?php echo $default->ACRES_PLANTED; ?>" style="width: 45px;"/>
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            YIELD: <input type="number" name="yield" id="yield"
                                          value="<?php echo $default->YIELD_OBTAINED; ?>" style="width: 45px;"/>
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            SOLD: <input type="number" name="sold" id="sold"
                                         value="<?php echo $default->QUANTITY_SOLD; ?>" style="width: 45px;"/>
                        </div>
                    </td>
                    <td>
                        <div class="col-md-12">
                            UGX: <input type="number" name="amount_ugx" id="amount_ugx"
                                        value="<?php echo $default->INCOME; ?>" style="width: 45px;"/>
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
//            alert(member_id);
            $.ajax({
                url: "<?php echo base_url('Production/Crop/cropProduction/fetch_personal_records');?>",
                method: "POST",
                data: {member_id: member_id, record_id:<?php echo $row_id; ?>},
                success: function (data) {
                    show_personal_details(member_id);
                    document.getElementById('crop_production_data_div').innerHTML = data;
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