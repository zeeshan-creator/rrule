<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index | RRULE</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.1.9/jquery.datetimepicker.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.1.9/jquery.datetimepicker.min.js">
    </script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/mar-rrule@2.2.0/lib/rrule.js"></script>

    <!-- <script src="./rrule.js"></script> -->
</head>
<style>
    .checkboxes {
        margin-top: 10px !important;
    }
</style>

<body>
    <div class="container mt-4">

        <h1>RRULE.js demo</h1>

        <h4>RRule String :</h4>
        <div id="rule_string" style="padding: 10px; border: 1px solid black; font-weight: 500;"></div>

        <div class="form-group row mt-4">
            <label for="title" class="col-sm-2 col-form-label">Title :</label>
            <div class="">
                <input type="text" class="form-control" name="title" id="title" placeholder="Event title">
            </div>
        </div>


        <div class="form-check mt-4">
            <input class="form-check-input" type="checkbox" value="" id="all_day">
            <label class="form-check-label" for="all_day">
                All Day
            </label>
        </div>

        <div class="form-group row mt-4">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Freq :</label>
            <div class="">
                <select class="custom-select" name="freq" id="freq">
                    <option value="0">RRule.YEARLY</option>
                    <option value="1">RRule.MONTHLY</option>
                    <option value="2">RRule.WEEKLY</option>
                    <option value="3" selected>RRule.DAILY</option>
                </select>
            </div>
        </div>

        <div class="form-group row mt-4">
            <label for="dtstart" class="col-sm-2 col-form-label">Start :</label>
            <div class="">
                <input type="datetime-local" class="form-control" min="1" name="dtstart" id="dtstart" value="" placeholder="Start dateTime">
            </div>
        </div>

        <div class="form-group row mt-4">
            <label for="until" class="col-sm-2 col-form-label">Until :</label>
            <div class="">
                <div class="">
                    <input class="form-check-input checkboxes" type="checkbox" value="" id="until_checkbox">
                </div>
                <input type="date" class="form-control" min="1" name="until" id="until" value="" placeholder="Start dateTime">
            </div>
        </div>
        <pre style="margin-left: 150px;" id="until_count_note">Check any one of them -> until or count.</pre>

        <div class="form-group row mt-4">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Count :</label>
            <div class="">
                <div class="">
                    <input class="form-check-input checkboxes" type="checkbox" value="" id="count_checkbox">
                </div>
                <input type="number" class="form-control" max="1000" min="1" name="count" id="count" value="10" placeholder="Count">
            </div>
        </div>

        <div class="form-group row mt-4">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Interval :</label>
            <div class="">
                <input type="number" class="form-control" min="1" name="interval" id="interval" value="1" placeholder="Count">
            </div>
        </div>
    </div>
</body>

<script>
    $(document).ready(function() {
        $('#freq').trigger("change");

        $("#count").change(function() {
            $('select#freq').trigger("change");
        });

        $("#title").change(function() {
            $('select#freq').trigger("change");
        });

        $("#interval").change(function() {
            $('select#freq').trigger("change");
        });

        $("#dtstart").change(function() {
            $('select#freq').trigger("change");
        });

        $("#until").change(function() {
            $('select#freq').trigger("change");
        });

        $("#all_day").change(function() {
            if (this.checked) {
                $('#dtstart').attr('type', 'date');
                $('#until').attr('disabled', 'true');
                $('#freq').attr('disabled', 'true');
            } else {
                $('#dtstart').attr('type', 'datetime-local');
                $('#until').removeAttr('disabled');
                $('#freq').removeAttr('disabled');
            }
            $('select#freq').trigger("change");
        });

        $("#until_checkbox").change(function() {
            if (this.checked) {
                // enable
                $('#until').removeAttr('disabled');

                // disable
                $('#count').attr('disabled', 'true');
                $('#count_checkbox').removeAttr('checked');
            }

            $('select#freq').trigger("change");
        });

        $("#count_checkbox").change(function() {
            if (this.checked) {
                // enable
                $('#count').removeAttr('disabled');

                // disable
                $('#until').attr('disabled', 'true');
                $('#until_checkbox').removeAttr('checked');
            }

            $('select#freq').trigger("change");
        });

    });

    $("select#freq").change(function() {
        // variables
        var freq;
        var count;
        var interval;
        var dtstart;
        var until;
        var all_day;
        var title = $("#title").val();

        // Object
        var rruleObj = {};

        all_day = $('#all_day');

        if (all_day.is(":checked")) {
            freq = 3;
        } else {
            freq = parseInt($('#freq option:selected').val());
        }

        // 0 > RRule.YEARLY
        // 1 > RRule.MONTHLY
        // 2 > RRule.WEEKLY
        // 3 > RRule.DAILY

        if (freq == 3) {
            $('#dtstart').attr('disabled', 'true');

            $('#until_count_note').css('display', 'inline');


            if ($('#until_checkbox').is(":checked")) {
                // enable
                $('#until').removeAttr('disabled');
                // disable
                $('#count').attr('disabled', 'true');
                $('#count_checkbox').removeAttr('checked');
            }

            if ($('#count_checkbox').is(":checked")) {
                // enable
                $('#count').removeAttr('disabled');
                // disable
                $('#until').attr('disabled', 'true');
                $('#until_checkbox').removeAttr('checked');
            }
        } else {
            $('#until_count_note').css('display', 'none');
        }

        count = ($('#count').attr('disabled')) ? '' : parseInt($('#count').val());
        interval = ($('#interval').attr('disabled')) ? '' : parseInt($('#interval').val());
        dtstart = ($('#dtstart').attr('disabled')) ? '' : $('#dtstart').val();
        until = ($('#until').attr('disabled')) ? '' : $('#until').val();


        (freq) ? rruleObj.freq = freq: '';
        (count) ? (rruleObj.count = count) : '';
        (interval) ? (rruleObj.interval = interval) : '';
        (dtstart) ? (rruleObj.dtstart = new Date(dtstart)) : '';
        (until) ? (rruleObj.until = new Date(until)) : '';

        var rrule = new RRule(rruleObj);
        var ruleString = rrule.toString();

        $('#rule_string').html('RRULE: ' + ruleString);

        // Event details - NEED TO ADD RECURRANCE HERE!
        var parameters = {};

        (title) ? (parameters.summary = title) : '';
        (ruleString) ? (parameters.recurrence = ('RRULE:' + ruleString)) : '';

        (freq) ? (parameters.freq = freq) : '';


        const options = {
            year: 'numeric',
            month: 'numeric',
            day: 'numeric'
        };

        var date = new Date(rrule.all()[count - 1])

        var date = date.toLocaleDateString("en-US", {
            day: 'numeric'
        }) + "-" + date.toLocaleDateString("en-US", {
            month: 'numeric'
        }) + "-" + date.toLocaleDateString("en-US", {
            year: 'numeric'
        })

        console.log(date);

    });
</script>

</html>