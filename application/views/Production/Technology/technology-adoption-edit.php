<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/20/19
 * Time: 3:03 PM
 */
?>
<h3>Edit Information on Technology Adoption</h3>
<hr>

<?php
foreach ($default_value_array->result() as $default) {
    echo form_open('production/adoption%20to%20technology-details/edit/' . $row_id); ?>
    <div class="document-part-content">
        <div class="row">
            <div class="col-md-4">
                <label for="name_of_the_grantee">Name of the Grantee</label>
                <input type="text" name="name_of_the_grantee" id="name_of_the_grantee" class="form-control" disabled/>
            </div>
            <div class="col-md-4">
                <label for="group_id">Group ID</label>
                <input name="group_id" id="group_id" class="form-control" value="<?php echo $default->INDIVIDUAL_ID; ?>"
                       disabled>

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
                <input type="text" name="county" id="county" class="form-control" disabled/>

            </div>
            <div class="col-md-4">
                <label for="parish">Parish Sub-County</label>
                <input type="text" name="parish" id="parish" class="form-control" disabled/>

            </div>

        </div>
    </div>
    <hr>
    <div class="document-part-content">
        <div class="row">
            <div class="col-md-12">
                <strong>Did you use any of the following technologies during your production process?</strong>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-responsive">
                    <tr>
                        <th>Q - 41: Did you use any improved seed during the year in your production</th>
                        <th>Q - 42: Did you use underground water in your crop production process during the dry
                            season?
                        </th>
                        <th>Q - 43: Did you use any pesticides on your crops(vegetables)?</th>
                        <th>Q - 44: Use of farm imlements e.g. zero tillage during land opening?</th>
                        <th>Q - 45: Have you been using any method of post-harvest handling and processing techniques?
                        </th>
                        <th>Q - 46: Did you have any opportunity in planting your crops in Rows/Lines as oppsed to
                            random sowing/scattering?
                        </th>
                        <th>Q - 47: What other techniques did you use apart from the ones discussed here? (Name them)
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-md-12">
                                <input type="radio" name="used_improved_seeds" id="used_improved_seeds" value="1"
                                       <?php if ($default->USED_IMPROVED_SEEDS == 1) ?>checked<?php ?> />Yes<br>
                                <input type="radio" name="used_improved_seeds" id="used_improved_seeds" value="2"
                                       <?php if ($default->USED_IMPROVED_SEEDS == 2) ?>checked<?php ?> />No
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <input type="radio" name="used_underground_water_during_dry_season"
                                       id="used_underground_water_during_dry_season" value="1"
                                       <?php if ($default->USED_UNDERGROUND_WATER == 1) ?>checked<?php ?> />Yes<br>
                                <input type="radio" name="used_underground_water_during_dry_season"
                                       id="used_underground_water_during_dry_season" value="2"
                                       <?php if ($default->USED_UNDERGROUND_WATER == 2) ?>checked<?php ?> />No
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <input type="radio" name="used_pesticides" id="used_pesticides" value="1"
                                       <?php if ($default->USED_PESTICIDES == 1) ?>checked<?php ?> />Yes<br>
                                <input type="radio" name="used_pesticides" id="used_pesticides" value="2"
                                       <?php if ($default->USED_PESTICIDES == 2) ?>checked<?php ?> />No
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <input type="radio" name="used_farm_implements" id="used_farm_implements" value="1"
                                       <?php if ($default->USED_FARM_IMPLEMENTS == 1) ?>checked<?php ?> />Yes<br>
                                <input type="radio" name="used_farm_implements" id="used_farm_implements" value="2"
                                       <?php if ($default->USED_FARM_IMPLEMENTS == 2) ?>checked<?php ?> />No
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <input type="radio" name="used_post_harvest_handling_and_processing_techniques"
                                       id="used_post_harvest_handling_and_processing_techniques" value="1"
                                       <?php if ($default->IMPROVED_POST_HARVEST_HANDLING == 1) ?>checked<?php ?> />Yes<br>
                                <input type="radio" name="used_post_harvest_handling_and_processing_techniques"
                                       id="used_post_harvest_handling_and_processing_techniques" value="2"
                                       <?php if ($default->IMPROVED_POST_HARVEST_HANDLING == 2) ?>checked<?php ?> />No
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <input type="radio" name="had_the_opportunity_to_plant_crops_in_rows"
                                       id="had_the_opportunity_to_plant_crops_in_rows" value="1"
                                       <?php if ($default->USED_ROW_PLANTING == 1) ?>checked<?php ?> />Yes<br>
                                <input type="radio" name="had_the_opportunity_to_plant_crops_in_rows"
                                       id="had_the_opportunity_to_plant_crops_in_rows" value="2"
                                       <?php if ($default->USED_ROW_PLANTING == 2) ?>checked<?php ?> />No
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <textarea name="" cols="400" id="other_techniques_used" id="other_techniques_used"
                                          class="form-control"><?php echo $default->OTHER_TECHNIQUES_USED ?></textarea>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-12" style="text-align: center;">
            <button type="submit" class="btn btn-md btn-primary">Save Information</button>
        </div>
    </div>
    <hr>
    </form>
    <?php
}
?>
