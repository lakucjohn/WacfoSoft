<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/10/18
 * Time: 8:48 PM
 */

?>

<div class="container">
    <div id="backup" class="tab-pane active show">
        <style>
            .spacer{
                width:70%;
                margin-left: 10%;
            }
            #back-up-content-1{
                width: 80%;
                background-color: rgba(143,197,233,0.38);
            }
            #back-up-content-2{
                width: 80%;
                background-color: rgba(189, 189, 189, 0.38);
            }
            .cpace{
                margin-top: 5px;
                margin-bottom: 5px;
            }
        </style>
        <p>Backing up your data will create an sql file with the latest information stored in your database.</p>


        <button type="button" onclick="SelectContent('SelectContent');" name="backup" class="btn btn-lg btn-primary">Back up your company data now</button>

        <p>&nbsp;</p>
        <p>

        </p><div id="SelectContent" style="display: none">
            <form class="cpace" action="backup/contacts.php" method="post">
                <div id="back-up-content-1" class="row"><div class="spacer">Customer and Their Contacts</div> <button type="submit" class="btn btn-xs btn-info right-btn" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/address_set.php" method="post">
                <div id="back-up-content-2" class="row"><div class="spacer">List of Customer Address</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/children.php" method="post">
                <div id="back-up-content-1" class="row"><div class="spacer">List of Children and their information</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/amaemia_and_malaria_prevention.php" method="post">
                <div id="back-up-content-2" class="row"><div class="spacer">Anaemia and Malaria Prevention Information</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/complication_and_husband_health.php" method="post">
                <div id="back-up-content-1" class="row"><div class="spacer">Patients' Health Complications</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/consultationrecorddata.php" method="post">
                <div id="back-up-content-2" class="row"><div class="spacer">Consultation Visit Records</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/contactgroupnames.php" method="post">
                <div id="back-up-content-1" class="row"><div class="spacer">Customer Groups Naming</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/failedsms.php" method="post">
                <div id="back-up-content-2" class="row"><div class="spacer">SMS That Weren't Sent</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/feeding_options.php" method="post">
                <div id="back-up-content-1" class="row"><div class="spacer">Mother's Feeding Options</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/groupmembers.php" method="post">
                <div id="back-up-content-2" class="row"><div class="spacer">Grouped List of Customers</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/healthnotes.php" method="post">
                <div id="back-up-content-1" class="row"><div class="spacer">Health Records of different customers</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/itncheck.php" method="post">
                <div id="back-up-content-2" class="row"><div class="spacer">List of patients who have mosquito nets</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/obstetric_and_gynaecologiical_history.php" method="post">
                <div id="back-up-content-1" class="row"><div class="spacer">Past Records of Expectant Mothers</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/other_drugs.php" method="post">
                <div id="back-up-content-2" class="row"><div class="spacer">Drug Prescription of Expectant Mothers</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/pmtc_dates.php" method="post">
                <div id="back-up-content-1" class="row"><div class="spacer">PMTC Data</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/possible_education.php" method="post">
                <div id="back-up-content-2" class="row"><div class="spacer">Selection List of Levels of Education</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/possible_health_issues.php" method="post">
                <div id="back-up-content-1" class="row"><div class="spacer">Possible Health Issues</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/possible_next_of_kin.php" method="post">
                <div id="back-up-content-2" class="row"><div class="spacer">Selection List of Next of Kin</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/pregnancies.php" method="post">
                <div id="back-up-content-1" class="row"><div class="spacer">List of all Pregnancies</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/pregnancy_examination.php" method="post">
                <div id="back-up-content-2" class="row"><div class="spacer">Pregnancy Examination Records</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/pregnancy_info.php" method="post">
                <div id="back-up-content-1" class="row"><div class="spacer">General Information about different pregnancies handled</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/referral_feedback.php" method="post">
                <div id="back-up-content-2" class="row"><div class="spacer">Referral Feedback</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/referral_notes.php" method="post">
                <div id="back-up-content-1" class="row"><div class="spacer">Referral Notes</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/scheduledsms.php" method="post">
                <div id="back-up-content-2" class="row"><div class="spacer">Successfully Scheduled Text Messages</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/scheduledsmsfailed.php" method="post">
                <div id="back-up-content-1" class="row"><div class="spacer">Failed Scheduled Messages</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/selectable_purpose.php" method="post">
                <div id="back-up-content-2" class="row"><div class="spacer">Selectable List of Clients' Visiting Purpose</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/sentsms.php" method="post">
                <div id="back-up-content-1" class="row"><div class="spacer">Successfully Sent Text Messages</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/smstemplates.php" method="post">
                <div id="back-up-content-2" class="row"><div class="spacer">Text Message Templates</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/social_and_medical_history.php" method="post">
                <div id="back-up-content-1" class="row"><div class="spacer">Social and Medical Historical Data</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/surgical_history.php" method="post">
                <div id="back-up-content-2" class="row"><div class="spacer">Surgical Data</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/tt_prevention_services.php" method="post">
                <div id="back-up-content-1" class="row"><div class="spacer">TT Prevention Information</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/users.php" method="post">
                <div id="back-up-content-2" class="row"><div class="spacer">List of all Users</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/user_levels.php" method="post">
                <div id="back-up-content-1" class="row"><div class="spacer">Various User Levels in the company</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>


            <form class="cpace" action="backup/visitation_purpose.php" method="post">
                <div id="back-up-content-2" class="row"><div class="spacer">Clients and Their Visitation Purposes</div> <button type="submit" class="btn btn-xs btn-info" name="backup">back up</button></div>
            </form>

            <br>
            <button type="button" class="btn btn-sm btn-danger" onclick="CloseSelectPane('SelectContent');">Close Panel</button>
        </div> <p></p>
        <p>&nbsp;</p>
        <p>Did you save some data that you would like to update your database with now? You can update you database with that data now by restoring.</p>
        Please note that some data may be lost when restoration is performed
        <p>&nbsp;</p>

        <p><button type="button" name="restore" class="btn btn-lg btn-warning" onclick="SelectContent('RestoreContent');">Restore your data now</button></p>

        <p>
        </p><div id="RestoreContent" style="display: none">
            <div class="spacer">
                <form enctype="multipart/form-data" method="post" role="form" action="backup/restore.php">
                    <div class="form-group">
                        <label for="exampleInputFile">File Upload</label>
                        <input name="file" type="file" multiple="multiple" size="150">
                        <p class="help-block">Only Excel/CSV File Import.</p>
                    </div>
                    <button type="submit" class="btn btn-primary btn-xs" name="restore" value="submit">Upload</button>
                </form>
            </div>


            <br>
            <button type="button" class="btn btn-sm btn-danger" onclick="CloseSelectPane('RestoreContent');">Close Panel</button>
        </div>
        <p></p>

        <script>
            function SelectContent(id) {
                if(id === 'SelectContent') {
                    document.getElementById('SelectContent').style.display = "block";
                    document.getElementById('RestoreContent').style.display = "none";
                }else if(id === 'RestoreContent'){
                    document.getElementById('RestoreContent').style.display = "block";
                    document.getElementById('SelectContent').style.display = "none";
                }
            }
            function CloseSelectPane(id) {
                document.getElementById(id).style.display = "none";
            }
        </script>
    </div>
</div>