<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/21/19
 * Time: 11:41 PM
 */
?>
    <h3>Edit the General Information about this monitoring visit</h3>
    <hr>
<?php
echo form_open('monitoring-details/edit/' . $row_id);

foreach ($default_value_array->result() as $default) {

    ?>
    <div class="col-md-12">
        <table>
            <tr>
                <td align="right"><strong>Date of the visit: </strong></td>
                <td><?php echo $default->DATE_OF_VISIT; ?></td>
            </tr>
            <tr>
                <td align="right"><strong>Visit Type: </strong></td>
                <td><?php echo $default->VISIT_TYPE; ?></td>
            </tr>
            <tr>
                <td align="right"><strong>Staff In Charge: </strong></td>
                <td><?php echo $default->STAFF_ID; ?></td>
            </tr>
            <tr>
                <td align="right"><strong>Track ID: </strong></td>
                <td><?php echo $default->TRACK_ID; ?></td>
            </tr>
        </table>
    </div>
    <hr>
    <div class="col-md-12">
        <div class="col-md-4"></div>
        <div class="col-md-8">
            <label for="general_comments">General Comments</label>
            <textarea rows="10" name="general_comments" id="general_comments"
                      class="form-control"><?php echo $default->GENERAL_COMMENTS; ?></textarea>
        </div>
    </div>
    <hr>
    <div class="col-md-12" style="text-align: center;">
        <button class="btn btn-primary btn-md">Save Information</button>
    </div>
    </form>
    <?php
}
?>