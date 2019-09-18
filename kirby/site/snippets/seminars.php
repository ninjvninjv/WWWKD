<div class="ruler"></div>

<div class="col" id="seminarcol">
    
    <p>(seminars)</p>
    
    <?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://www.googleapis.com/calendar/v3/calendars/4e76jq9kp5tooil0nbl92uvn68@group.calendar.google.com/events?key=AIzaSyAun17rUsshrEgSRoG8c0dxlRmkgkBu-78&timeMin=2010-01-01T10:00:00-00:00&orderBy=startTime&singleEvents=true&maxResults=2500');

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
    <div class="day">
        <div class="course" id="">
    
            <div class="seminarteacher"><?= $item->summary; ?></div>
            <div class="seminarstart"><?= $item->start->dateTime; ?></div>
            <div class="seminarend"><?= $item->end->dateTime; ?></div>
    
        </div>
    </div>
    
<?php endforeach; $filename = fopen("result.json", "w") or die("Unable to open file!");
fwrite($filename, $json_response);
fclose($filename);?>
    
</div>