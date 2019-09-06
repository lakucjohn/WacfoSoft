<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/2/19
 * Time: 11:38 PM
 */
?>


<h3 style="text-align: center;">FIELD SUPPORT VISITS FORM TEMPLATE FOR WEEKLY STAFFS MONITORING GROUP</h3>

<hr>

<?php echo form_open('monitoring/new-field-support-visit'); ?>
<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-10">
        <div class="error-msg position-left"><?php echo validation_errors(); ?></div>
    </div>
</div>
<div class="row">
    <table class="table table-bordered table-responsive" id="field_visit_table">
        <tr>
            <th>ACTIVITIES DONE IN PARTICULAR GROUPS</th>
            <th>NAME OF GROUP</th>
            <th>ACTIVITIES</th>
            <th>ISSUES IDENTIFIED</th>
            <th>ACTION TAKEN</th>
            <th>&nbsp;</th>
        </tr>
        <tr>
            <td>
                <div class="col-md-12">
                    NEW GROUP
                </div>
            </td>
            <td>
                <div class="col-md-12">

                    <label for="group_id">Group ID</label>
                    <select name="group_id" id="group_id" class="form-control"
                            onchange="show_group_details(this.value)">
                        <option value="">Select the group id</option>
                        <?php
                        foreach ($group_list->result() as $row) {
                            echo '<option value="' . $row->GROUP_ID . '">' . $row->GROUP_ID . '</option>';
                        }
                        ?>
                    </select><br>


                    <input type="text" name="group_name" id="group_name" class="form-control" disabled/>
                </div>
            </td>

            <td>
                <div class="col-md-12">
                    <textarea name="activities" id="activities" class="form-control"></textarea>
                </div>
            </td>

            <td>
                <div class="col-md-12">
                    <textarea name="issues_identified" id="issues_identified" class="form-control"></textarea>

                </div>
            </td>

            <td>
                <div class="col-md-12">
                    <textarea name="action_taken" id="action_taken" class="form-control"></textarea>

                </div>
            </td>
            <td>
                <button type="button" class="btn btn-primary" onclick="add_new_row();">Insert Record</button>
            </td>
        </tr>
    </table>
</div>
<br>
<div class="row">
    <div class="col-md-8">
        <label for="general_comments">General Comments</label>
        <textarea name="general_comments" id="general_comments" class="form-control"></textarea>
    </div>

    <div class="col-md-4">
        <label for="monitoring_date">Date: </label>
        <input type="date" name="monitoring_date" id="monitoring_date" class="form-control"/>
    </div>
</div>
<hr>
<div class="col-md-12" style="text-align: center;">
    <button class="btn btn-primary btn-md" onclick="save_information();">Save Information</button>
</div>
<hr>
</form>

<script type="text/javascript">

    function show_group_details(group_id) {
        if (group_id !== '') {
            $.ajax({
                url: "<?php echo base_url('People/Groupings/groupings/get_group_name');?>",
                method: "POST",
                data: {group_id: group_id},
                success: function (data) {
                    document.getElementById('group_name').value = data;
                }
            });
        }
    }

    function add_new_row() {
        var tablerowcount = $('#field_visit_table tr').length;
        var c = tablerowcount - 2;
        var cc = c + 1;


        var group_id = document.getElementById("group_id").value;
        var activities = document.getElementById("activities").value;
        var issues_identified = document.getElementById("issues_identified").value;
        var action_taken = document.getElementById("action_taken").value;

        if (group_id !== '' && activities !== '' && issues_identified !== '' && action_taken !== '') {
            var row_html = '<tr id="' + c + '"><td>GROUP ' + cc + '</td><td id="group_id' + c + '">' + group_id + '</td><td id="activities' + c + '">' + activities + '</td><td id="issues_identified' + c + '">' + issues_identified + '</td><td id="action_taken' + c + '">' + action_taken + '<td id="option-col' + c + '" style="white-space: nowrap;"><button class="btn btn-info btn-sm" type="button" id="editRow' + c + '" onclick="editContent(' + c + ');"><i class="fa fa-edit"> Edit</i> </button>&nbsp;&nbsp;<button class="btn btn-success btn-sm" style="display: none;" type="button" id="saveRow' + c + '" onclick="saveEditedContent(' + c + ');"><i class="fa fa-save"> Save</i> </button>&nbsp;&nbsp;<button class="btn btn-danger btn-sm" type="button"><i class="fa fa-remove" onclick="deleteRow(' + c + ');"> Delete</i> </button></td></tr>';

            $('#field_visit_table > tbody:last tr:eq(' + c + ')').after(row_html);

            c = c + 1;

            document.getElementById("group_id").value = '';
            document.getElementById("activities").value = '';
            document.getElementById("issues_identified").value = '';
            document.getElementById("action_taken").value = '';
        } else {
            alert('Please Fill All Fields');
        }
    }

    function editContent(row_id) {
        var group_id = document.getElementById("group_id" + row_id);
        var activities = document.getElementById("activities" + row_id);
        var issues_identified = document.getElementById("issues_identified" + row_id);
        var action_taken = document.getElementById("action_taken" + row_id);

        var group_id_data = group_id.innerHTML;
        var activities_data = activities.innerHTML;
        var issues_identified_data = issues_identified.innerHTML;
        var action_taken_data = action_taken.innerHTML;

        group_id.innerHTML = "<textarea class='form-control' rows='5' cols='10' id='group_id_Edited" + row_id + "'>" + group_id_data + "</textarea>";
        activities.innerHTML = "<textarea class='form-control' rows='5' cols='10' id='activities_Edited" + row_id + "'>" + activities_data + "</textarea>";
        issues_identified.innerHTML = "<textarea class='form-control' rows='5' cols='10'  id='issues_identified_Edited" + row_id + "'>" + issues_identified_data + "</textarea>";
        action_taken.innerHTML = "<textarea class='form-control' rows='5' cols='10' id='action_taken_Edited" + row_id + "'>" + action_taken_data + "</textarea>";

        document.getElementById('editRow' + row_id).style.display = 'none';
        document.getElementById('saveRow' + row_id).style.display = 'inline-block';

    }

    function saveEditedContent(row_id) {
        var edited_group_id = document.getElementById('group_id_Edited' + row_id).value;
        var edited_activities = document.getElementById('activities_Edited' + row_id).value;
        var edited_issues_identified = document.getElementById('issues_identified_Edited' + row_id).value;
        var edited_actions_taken = document.getElementById('action_taken_Edited' + row_id).value;

        //Save the new values after editing

        document.getElementById('group_id' + row_id).innerHTML = edited_group_id;
        document.getElementById('activities' + row_id).innerHTML = edited_activities;
        document.getElementById('issues_identified' + row_id).innerHTML = edited_issues_identified;
        document.getElementById('action_taken' + row_id).innerHTML = edited_actions_taken;
        document.getElementById('editRow' + row_id).style.display = 'inline-block';
        document.getElementById('saveRow' + row_id).style.display = 'none';

    }

    function deleteRow(rowid) {
        var row = document.getElementById(rowid);
        row.parentNode.removeChild(row);
    }

    function save_information() {

        var new_complete_document = [];
        var document_data = [];

        $("#field_visit_table tr:gt(0)").each(function () {

            if ()
                var this_row = $(this);

            var group_id = $.trim(this_row.find('td:eq(1)').html());//td:eq(0) means first td of this row
            var activities = $.trim(this_row.find('td:eq(2)').html());
            var issues_identified = $.trim(this_row.find('td:eq(3)').html());
            var actiontaken = $.trim(this_row.find('td:eq(4)').html());
            alert(actiontaken);

            if (group_id !== '' && activities !== '' && issues_identified !== '' && actiontaken !== '') {
                var record = {
                    'group_id': group_id,
                    'activities': activities,
                    'issues_identified': issues_identified,
                    'action_taken': actiontaken,
                };


                document_data.push(record);
            }


        });
//        alert(document_data.stringify());
//        $.ajax({
//            url:<?php //echo base_url('Monitoring/monitoring/create_field_support_visit'); ?>//,
//            data:{document_data:document_data},
//            type:'post',
//            success: function(data){
//                alert(data);
//            }
//        });
    }
</script>