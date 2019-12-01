<div class="ruler"></div>

    <script>
    
        var startvar = 0;
        var seminars = [];
    
    </script>

<div class="col" id="seminarcol">
    
    <p>(seminars)</p>
    
        <?php 
    
        $day = array();
        $i = 0;
        $begin = new DateTime('2019-01-01');
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
    
        <div class="day" id="s<?= $value->format("Y-m-d"); ?>">
        

    
        </div>
    
    
    <?php endforeach?>

            <?php
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://www.googleapis.com/calendar/v3/calendars/4e76jq9kp5tooil0nbl92uvn68@group.calendar.google.com/events?key=AIzaSyAun17rUsshrEgSRoG8c0dxlRmkgkBu-78&timeMin=2019-01-01T10:00:00-00:00&orderBy=startTime&singleEvents=true&maxResults=4500');

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
                
                $(document).ready(function(){
                    
                    $('.seminartitle').css('font-size', $('.column').width()/20);
                    
                    var $timestamp = '<?php if (isset($item->start->dateTime)){echo $item->start->dateTime;} ?>';
                    var seminarstart = $timestamp.substring(11, 16);
                    var starttime = timeToSeconds(seminarstart);
                    
                    var $timestampend = '<?php if (isset($item->end->dateTime)){echo $item->end->dateTime;} ?>';
                    var seminarend = $timestampend.substring(11, 16);
                    var seminardate = $timestamp.substring(0, 10);
                    var seminarday = seminardate.substring(8, 10);
                    var seminarmonth = seminardate.substring(5, 7);
                    var seminaryear = seminardate.substring(0, 4);                

                    $('#s'+seminardate).append('<div class="seminar" id="<?= $item->summary; ?>"><div class="seminartime">'+seminarstart + '–' + seminarend +'</div><div class="seminarroom">Raum '+Math.floor((Math.random() * 222) + 214)+'</div><div class="rightline"></div><div class="seminartitle"><?= $item->summary; ?></div><div class="endline"></div></div>'); // this adds all the informations in a seminar div to the calendar
                    
                    $('#t'+seminardate).html(''); // this empties the date line 
                    $('#t'+seminardate).append(seminarday + '.' + seminarmonth); // and just prints it once
                
                    $('.seminartitle').css('font-size', $('.column').width()/20); // sets the font-size depending on the column width
                
                    
                    
                    //values for todays row
                    var today = '<?= date("Y-m-d"); ?>';
                    $('#t'+today).html('');
                    $('#t'+today).append('Heute');
                    $('#s'+today).css('background-color', 'darkseagreen');
                    $('#e'+today).css('background-color', 'darkseagreen');
                    $('#t'+today).css('background-color', 'darkseagreen');
                    $('#s'+today).css('height', '20vh');
                    $('#e'+today).css('height', '20vh');
                    $('#t'+today).css('height', '20vh');

                    //fits the height of the day to the biggest
                    
                    $('#s'+seminardate).css('height', 'auto'); // first sets it auto,
                    $('#e'+seminardate).css('height', 'auto'); // so the div can fit around the content
                    
                    var sheight = $('#s'+seminardate).height();
                    var eheight = $('#e'+seminardate).height();
                    
                    if(eheight > sheight){

                        $('#s'+seminardate).height(eheight);
                        $('#t'+seminardate).height(eheight);

                    }else{

                        $('#e'+seminardate).height(sheight);
                        $('#t'+seminardate).height(sheight);

                    };
                    
                    $(window).resize(function(){
                        
                        $('#s'+seminardate).css('height', 'auto');
                        $('#e'+seminardate).css('height', 'auto');
                        var sheight = $('#s'+seminardate).height();
                        var eheight = $('#e'+seminardate).height();

                        if(eheight > sheight){

                            $('#s'+seminardate).height(eheight);
                            $('#t'+seminardate).height(eheight);

                        }else{

                            $('#e'+seminardate).height(sheight);
                            $('#t'+seminardate).height(sheight);

                        };
                        
                        $('.seminartitle').css('font-size', $('.column').width()/20);
                        
                    }); //fits the height of the day to the biggest when resizing the window
                    
                    $('#sidebarNavigation').on('click', function(){
                        
                        $('#s'+seminardate).css('height', 'auto');
                        $('#e'+seminardate).css('height', 'auto');
                        
                        var sheight = $('#s'+seminardate).height();
                        var eheight = $('#e'+seminardate).height();

                        if(eheight > sheight){

                            $('#s'+seminardate).height(eheight);
                            $('#t'+seminardate).height(eheight);

                        }else{

                            $('#e'+seminardate).height(sheight);
                            $('#t'+seminardate).height(sheight);

                        };      
                        
                        $('.seminartitle').css('font-size', $('.column').width()/20);
                        
                    }); //fits the height of the day to the biggest when klick on sidebar 
                                
                    
    
                });
            
                
            </script>
        
    
        <?php endforeach; $filename = fopen("result.json", "w") or die("Unable to open file!");
        fwrite($filename, $json_response);
        fclose($filename);?>

    
</div>



<!--html structure seminar-->
<!--
<div class="day">
        <div class="course" id="">
    
            <div class="seminarteacher"><?= $item->summary; ?></div>
            <div class="seminarstart"><?= $item->start->dateTime; ?></div>
            <div class="seminarend"><?= $item->end->dateTime; ?></div>
    
        </div>
</div>-->
