<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 1/20/19
 * Time: 12:43 PM
 */
?>

<h3>Filter Specific Data From WacfoSoft</h3>
<hr>
<div id="query-criteria">
    <div class="row">
        <div class="col-md-12">
            <h5>Category of information to query</h5>
        </div>
        <div class="col-md-12" style="padding-left: 10%;">
            <p>
                <input type="radio" name="query_category" id="query_category" onclick=""/>Livelihood Groups and
                Membership<br>
                <input type="radio" name="query_category" id="query_category" onclick=""/>Children and Health<br>
                <input type="radio" name="query_category" id="query_category" onclick=""/>Staff<br>
                <input type="radio" name="query_category" id="query_category" onclick=""/>Trainings<br>
                <input type="radio" name="query_category" id="query_category" onclick=""/>Monitoring<br>
                <input type="radio" name="query_category" id="query_category" onclick=""/>Production<br>
                <input type="radio" name="query_category" id="query_category" onclick=""/>Miscellaneous<br>
                <input type="radio" name="query_category" id="query_category" onclick=""/>Complex<br>
            </p>
        </div>

    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <h5>Select Required tables</h5>
        </div>

        <div class="col-md-12"><p>&nbsp;</p>
            <table class="table-bordered" cellpadding="10" cellspacing="50" style="width: 100%;">
                <tr>
                    <td style="width: 25%;">Table 1</td>
                    <td style="width: 25%;">Table 2</td>
                    <td style="width: 25%;">Table 3</td>
                    <td style="width: 25%;">Table 4</td>
                </tr>
            </table>
        </div>

    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <h5>Fields Required for Display</h5>
        </div>

        <div class="col-md-12"><p>&nbsp;</p>
            <table class="table-bordered" cellpadding="10" cellspacing="50" style="width: 100%;">
                <tr>
                    <td style="width: 25%;">Table 1</td>
                    <td style="width: 25%;">Table 2</td>
                    <td style="width: 25%;">Table 3</td>
                    <td style="width: 25%;">Table 4</td>
                </tr>
                <tr>
                    <td style="width: 25%;">Table 1</td>
                    <td style="width: 25%; display: none;">Table 2</td>
                    <td style="width: 25%;">&nbsp;</td>
                    <td style="width: 25%;">Table 3</td>
                    <td style="width: 25%;">Table 4</td>
                </tr>
            </table>
        </div>

    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <h5>Criteria / Conditions</h5>
        </div>

        <div class="col-md-12"><p>&nbsp;</p>
            <table class="table-bordered" cellpadding="10" cellspacing="50" style="width: 100%;">
                <tr>
                    <td style="width: 25%;">Table 1</td>
                    <td style="width: 25%;">Table 2</td>
                    <td style="width: 25%;">Table 3</td>
                    <td style="width: 25%;">Table 4</td>
                </tr>
            </table>
        </div>

    </div>
    <hr>
    <div class="row">
        <div class="col-md-12" style="text-align: center;" id="start-query-box">
            <button class="btn btn-md-5 btn-primary" onclick="show_results();">Run Query <i
                        class="fa fa-angle-double-right"></i></button>
        </div>
        <div class="col-md-12" style="text-align: center; display: none" id="update-query-box">
            <button class="btn btn-md-5 btn-success" onclick="show_results_update();">Update Results <i
                        class="fa fa-angle-double-right"></i></button>
            <button class="btn btn-md-5 btn-link" id="hide_criteria_button" onclick="hide_criteria();"
                    style="display: block;">Hide Criteria<i class="fa fa-angle-double-up"></i></button>
        </div>
    </div>
    <hr>
</div>
<div id="query-results" style="display: none;">
    <div class="row">
        <div class="col-md-12">
            <h4>Search Results</h4>
        </div>
        <div class="col-md-12">
            <p>&nbsp;</p>
            <div id="preview_query_results">
                Query Results
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-2">&nbsp;</div>
        <div class="col-md-6" id="show-div-buttons">
            <button class="btn btn-md-5 btn-default" onclick="show_criteria();" style="margin-right: 5%;">Show Criteria
                <i class="fa fa-angle-double-up"></i></button>
            <button class="btn btn-md-5 btn-primary" onclick="show_criteria_and_results();">Show Criteria and Results <i
                        class="fa fa-angle-double-up"></i></button>
        </div>
        <div class="col-md-4" style="white-space: nowrap;">
            <button class="btn btn-md-5 btn-danger" onclick="print_results();"><i class="fa fa-print"></i> Print Query
                Results <i class="fa fa-angle-double-right"></i></button>
            <button class="btn btn-md btn-link" id="show_criteria_button" onclick="show_criteria();"
                    style="display: none;">Show Criteria<i class="fa fa-angle-double-down"></i></button>
        </div>


    </div>
    <hr>
</div>

<!--     Javascript for this document        -->
<script type="text/javascript">
    function show_results() {

        send_to_query_builder();


    }
    function show_criteria() {
        document.getElementById('query-criteria').style.display = 'block';
        document.getElementById('query-results').style.display = 'none';
        document.getElementById('start-query-box').style.display = 'none';
        document.getElementById('update-query-box').style.display = 'block';

        //hide the buttons for opening criteria div
        document.getElementById('show-div-buttons').style.display = 'none';
    }
    function show_criteria_and_results() {
        document.getElementById('query-criteria').style.display = 'block';
        document.getElementById('query-results').style.display = 'block';
        document.getElementById('start-query-box').style.display = 'none';
        document.getElementById('update-query-box').style.display = 'block';

        //hide the buttons for opening criteria div
        document.getElementById('show-div-buttons').style.display = 'none';
    }

    function hide_criteria() {
        document.getElementById('query-criteria').style.display = 'none';
        document.getElementById('show_criteria_button').style.display = 'block';
        document.getElementById('query-results').style.display = 'block';

    }
    function print_results() {
        document.getElementById('query-criteria').style.display = 'none';

    }

    function send_to_query_builder() {
        $.ajax({
            url: "<?php echo site_url('Query/query/run_query_and_show_results');?>",
            method: "POST",
            data: {table: 'table 1'},
            success: function (data) {

                //Hide the criteria
                document.getElementById('query-criteria').style.display = 'none';

                //Change the content of the query results
                document.getElementById('preview_query_results').innerHTML = data;

                //Show the query results
                document.getElementById('query-results').style.display = 'block';

                //hide the run query button
                document.getElementById('start-query-box').style.display = 'none';

                //Show the update query button
                document.getElementById('update-query-box').style.display = 'block';
            }
        });
    }

    function show_results_update() {
        $.ajax({
            url: "<?php echo site_url('Query/query/run_query_and_show_results');?>",
            method: "POST",
            data: {table: 'table 1'},
            success: function (data) {

                //Hide the criteria
                document.getElementById('query-criteria').style.display = 'block';

                //Change the content of the query results
                document.getElementById('preview_query_results').innerHTML = data;

                //Show the query results
                document.getElementById('query-results').style.display = 'block';

                //hide the run query button
                document.getElementById('start-query-box').style.display = 'none';

                //hide the buttons for opening criteria div
                document.getElementById('show-div-buttons').style.display = 'none';

                //Show the update query button
                document.getElementById('update-query-box').style.display = 'block';
                document.getElementById('show_criteria_button').style.display = 'none';
            }
        });
    }
</script>