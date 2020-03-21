<div class="col calendar" id="eventcol">
  
    <div class="top"></div>

    <div class="past" id="eventpast">

        <?php foreach ($site->find('events')->children() as $event): ?>

            <div class="pastevent">

                <div class="pasteventtitle" id="<?= $event->title() ?>title"><?= $event->title() ?></div>
                <div class="pasteventtype" id="<?= $event->kind() ?>type"><?= $event->kind() ?></div>

            </div>

        <?php endforeach ?>

    </div>

    <div class="archive" id="eventarchive">↑ Archiv ↑</div>

    <div class="future" id="eventfuture">

        <?php

        $day = array();
        $i = 0;
        $begin = new DateTime(date("Y-m-d"));
        $interval = new DateInterval('P1D');
        $end = new DateTime('2020-02-30');
        $period = new DatePeriod(
             $begin,
             $interval,
             $end
         );

        foreach ($period as $key => $value):

        $day[$i] = $value;
        $i++;

    ?>

        <div class="day" id="e<?= $value->format("Y-m-d"); ?>">



        </div>


    <?php endforeach?>

        <?php
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://www.googleapis.com/calendar/v3/calendars/sbhjb68hrplr1266cesvjc5p50@group.calendar.google.com/events?key=AIzaSyDjqPZGVEKDeDWCpjcuxEn5Hxmuw1KH6xI&timeMin=2019-01-01T10:00:00-00:00&orderBy=startTime&singleEvents=true&maxResults=4500');



        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json'));

        $json_response = curl_exec($curl);
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        if ($status != 200) {
            die("Error: $status, response $json_response, curl_error " . curl_error($curl) . ', curl_errno ' . curl_errno($curl));
        }
        curl_close($curl);


        $json_array = json_decode($json_response);

        $items = $json_array->items;

        foreach($items as $item):
        ?>


            <script type='text/javascript'>


                function timeToSeconds(time) {
                    time = time.split(/:/);
                    return time[0];
                }

                function getCategory(summary) {
                    summary = summary.split("///");
                    return summary[0];
                }

                function getType(summary) {
                    summary = summary.split("///");
                    return summary[1];
                }

                function getName(summary) {
                    summary = summary.split('///');
                    return summary[2];
                }



                $(document).ready(function(){

                //-----PRESETS-----



                    // $('.eventtitle').css('font-size', $('.column').width()/20);

                    var $timestamp = '<?php if (isset($item->start->dateTime)){echo $item->start->dateTime;} ?>';
                    var eventstart = $timestamp.substring(11, 16);
                    var starttime = timeToSeconds(eventstart);

                    var eventname = getName('<?= $item->summary; ?>');
                    var eventlocation = '<?= $item->location; ?>';
                    var eventtype = getType('<?= $item->summary; ?>');

                    var $timestampend = '<?php if (isset($item->end->dateTime)){echo $item->end->dateTime;} ?>';
                    var eventend = $timestampend.substring(11, 16);
                    var eventdate = $timestamp.substring(0, 10);
                    var eventday = eventdate.substring(8, 10);
                    var eventmonth = eventdate.substring(5, 7);
                    var eventyear = eventdate.substring(0, 4);

                    $('#e'+eventdate).append('<div class="event" id="<?= $item->summary; ?>"><div class="eventtime">'+eventstart + '–' + eventend +'</div><div class="eventroom">'+eventlocation+'</div><div class="rightline"></div><div class="eventtitle">'+eventname+'</div><div class="eventtype">'+eventtype+'</div><div class="endline"></div></div>'); // this adds all the informations in a event div to the calendar

                    $('#td'+eventdate).html(''); // this empties the date line
                    $('#td'+eventdate).append(eventday + '.' + eventmonth); // and just prints it once

                    // $('.eventtitle').css('font-size', $('.column').width()/20); // sets the font-size depending on the column width
                });
            </script>

        <?php endforeach; $filename = fopen("result.json", "w") or die("Unable to open file!");
        fwrite($filename, $json_response);
        fclose($filename);?>

    </div>

</div>
