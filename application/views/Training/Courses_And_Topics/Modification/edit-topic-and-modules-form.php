<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/3/19
 * Time: 11:48 PM
 */
?>
<h3>
    NEW COURSE AND MODULE REGISTRATION FORM
</h3>

<hr>

<?php
echo form_open('course-details/edit/' . $row_id);
?>
<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-10">
        <div class="error-msg position-left"><?php echo validation_errors(); ?></div>
    </div>
</div>
<div class="card w-100">


    <?php
    foreach ($default_value_array->result() as $default) {

        ?>

        <div class="document-part-header">
            Details of the Course
        </div>

        <hr>

        <div class="document-part-content">
            <div class="row">

                <div class="col-md-6">
                    <label for="course_name">Name of the Course:</label>
                    <input type="text" value="<?php echo $default->COURSE; ?>" name="course_name" id="course_name"
                           class="form-control"/>
                </div>
                <div class="col-md-6">
                    <label for="course_code">Course Code:</label>
                    <input type="text" value="<?php echo $default->CODE; ?>" name="course_code" id="course_code"
                           class="form-control"/>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-12">
                    <label for="course_details">Description: </label>
                    <textarea name="course_description" id="course_description"
                              class="form-control"><?php echo $default->DESCRIPTION; ?></textarea>
                </div>
            </div>
            <br>

            <div class="row">

                <div class="col-md-12">
                    <table class="table table-bordered table-responsive" style="width: 100%;">

                        <tr>
                            <th colspan="6">Select The Target Categories</th>
                        </tr>

                        <tr>
                            <td>
                                <div class="col-md-12">
                                    <input type="checkbox" name="all_groups" id="all_groups" value="all"/>All Groups
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <div class="row">
                                    <?php

                                    $category_array = explode(',', $default->GROUP_TRAINED);

                                    foreach ($category_list->result() as $row) {

                                        ?>
                                        <div class="col-md-3" style="margin-bottom: 0.2rem; font-size: 12px;">
                                            <input type="checkbox" name="target_group" id="target_group"
                                                   value="<?php echo $row->ID; ?>"
                                                   <?php if (in_array($row->ID, $category_array)){ ?>checked <?php } ?> /> <?php echo $row->CATEGORYNAME; ?>
                                        </div>
                                        <?php

                                    }
                                    ?>
                                </div>
                            </td>
                        </tr>


                    </table>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    <hr>
    <div class="document-part-header">
        Modules in the course
    </div>

    <hr>
    <div class="document-part-content">
        <div class="row">
            <div class="col-md-12">
                <!--                --><?php //print_r($course_modules->result()); ?>
                <table class="table table-bordered table-responsive" id="modules_table">
                    <tr>
                        <th style="width: 80%;">Name of the module</th>
                        <th style="width: 20%;">Options</th>
                    </tr>
                    <?php
                    $id = 0;
                    foreach ($course_modules->result() as $module) {
                        $id++;
                        ?>
                        <tr>
                            <td id="module_name<?php echo $id; ?>"><?php echo $module->TOPIC ?></td>
                            <td id="option-col<?php echo $id; ?>" style="white-space: nowrap;">
                                <button class="btn btn-info btn-sm" type="button" id="editRow<?php echo $id; ?>"
                                        onclick="editContent(<?php echo $id; ?>);"><i class="fa fa-edit"> Edit</i>
                                </button>&nbsp;&nbsp;<button class="btn btn-success btn-sm" style="display: none;"
                                                             type="button" id="saveRow<?php echo $id; ?>"
                                                             onclick="saveEditedContent(<?php echo $id; ?>);"><i
                                            class="fa fa-save"> Save</i></button>&nbsp;&nbsp;<button
                                        class="btn btn-danger btn-sm" type="button"><i class="fa fa-remove"
                                                                                       onclick="deleteRow(<?php echo $id; ?>);">
                                        Delete</i></button>
                        </tr>

                        <?php
                    }
                    ?>

                    <tr>
                        <td>
                            <div class="col-md-12">
                                <input type="text" id="module_name" name="module_name" class="form-control"/>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12">
                                <button type="button" class="btn btn-primary" onclick="add_new_row();">Insert Record
                                </button>
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
            <button type="button" class="btn btn-primary btn-md" onclick="save_information();">Update The Course and Its
                Modules
            </button>
        </div>

    </div>
    <hr>
</div>
<input type="hidden" id="row_id" value="<?php echo $row_id; ?>"/>
</form>

<script type="text/javascript">


    function add_new_row() {
        var tablerowcount = $('#modules_table tr').length;
        var c = tablerowcount - 2;
        var cc = c + 1;

        var module_name = document.getElementById("module_name").value;

        if (module_name !== '') {
            var row_html = '<tr id="' + c + '"></td><td id="module_name' + c + '">' + module_name + '</td><td id="option-col' + c + '" style="white-space: nowrap;"><button class="btn btn-info btn-sm" type="button" id="editRow' + c + '" onclick="editContent(' + c + ');"><i class="fa fa-edit"> Edit</i> </button>&nbsp;&nbsp;<button class="btn btn-success btn-sm" style="display: none;" type="button" id="saveRow' + c + '" onclick="saveEditedContent(' + c + ');"><i class="fa fa-save"> Save</i> </button>&nbsp;&nbsp;<button class="btn btn-danger btn-sm" type="button"><i class="fa fa-remove" onclick="deleteRow(' + c + ');"> Delete</i> </button></td></tr>';

            $('#modules_table > tbody:last tr:eq(' + c + ')').after(row_html);

            c = c + 1;

            document.getElementById("module_name").value = '';

        } else {
            alert('Please Enter the name of the module');
        }
    }

    function editContent(row_id) {
        var module_name = document.getElementById("module_name" + row_id);

        var module_name_data = module_name.innerHTML;

        module_name.innerHTML = "<input type='text' class='form-control' id='module_name_Edited" + row_id + "' value='" + module_name_data + "'/>";

        document.getElementById('editRow' + row_id).style.display = 'none';
        document.getElementById('saveRow' + row_id).style.display = 'inline-block';

    }

    function saveEditedContent(row_id) {
        var edited_module_name = document.getElementById('module_name_Edited' + row_id).value;

        //Save the new values after editing

        document.getElementById('module_name' + row_id).innerHTML = edited_module_name;

        document.getElementById('editRow' + row_id).style.display = 'inline-block';
        document.getElementById('saveRow' + row_id).style.display = 'none';

    }

    function deleteRow(rowid) {
        var row = document.getElementById(rowid);
        row.parentNode.removeChild(row);
    }

    function save_information() {

//        event.preventDefault();
        var row_id = document.getElementById('row_id').value;

        var course_details = [];

        var module_details = [];

        //Fetching the information about the course
        var course_name = document.getElementById('course_name').value;
        var course_code = document.getElementById('course_code').value;
        var course_description = document.getElementById('course_description').value;

        var target_categories = [];
        $("input:checkbox[name=target_group]:checked").each(function () {

            target_categories.push($(this).val());
        });

        course_record = {
            'course_name': course_name,
            'course_code': course_code,
            'course_description': course_description,
            'target_groups': target_categories
        };

        course_details.push(course_record);

        //Now fetching the list of entered modules
        $('#modules_table> tbody > tr').not(':first').not(':last').each(function () {

            var this_row = $(this);

            var module_name = $.trim(this_row.find('td:eq(0)').html());//td:eq(0) means first td of this row

//            alert(module_name);

            if (module_name !== '') {

                module_details.push(module_name);
            }

        });

//        alert(module_data);
        if ($('#modules_table tr').length === 2) {
            alert('Please enter the modules in this course');
        } else {

            // Now post the modules to be registered
            $.ajax({
                url: "<?php echo base_url('Training/courses/update_course_modules'); ?>",
                data: {module_data: module_details, course_details: course_details, row_id: row_id},
                type: 'post',
                success: function (data) {
//                    alert(data);
                    window.location.replace("<?php echo site_url('courses%20and%20topics'); ?>");
                }
            });
        }

    }

</script>