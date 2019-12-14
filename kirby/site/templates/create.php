<?php

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://www.googleapis.com/calendar/v3/calendars/4e76jq9kp5tooil0nbl92uvn68@group.calendar.google.com/events?key=AIzaSyAun17rUsshrEgSRoG8c0dxlRmkgkBu-78&timeMin='.date("Y-m-d").'T10:00:00-00:00&orderBy=startTime&singleEvents=true&maxResults=4500');

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
$i = 0;
foreach($items as $item):
$i++;
$ex = true;
?>

    <?php $k = 0; foreach($site->find('courses')->drafts() as $seminar):?>

        <?php if($item->summary == $seminar->title()){ $ex = false; echo 'gleich!';}else{echo 'ungleich!';}; ?>

    <?php endforeach ?>

    <?php if($ex){
    
        echo $ex;
        if(isset($item->description)){
                $text =  $item->description;}
            else{
                $text = 'Hier gibt es leider keinen Text...';
            };


                    $k++;
                    $content = [
                      'title' => $item->summary,
                      'about'  => $text,
                      'supervisor' => 'Unknown',
                      'kind' => 'Seminar',
                      'Semester' => 'WS19',
                    ];

                    $site->find('courses')->createChild([
                      'content'  => $content,
                      'slug'     => $item->summary . $i . $k,
                      'template' => 'course'
                    ]);
    
    };?>


<?php endforeach; $filename = fopen("result.json", "w") or die("Unable to open file!");
fwrite($filename, $json_response);
fclose($filename);?>

<?php 
            /*if(isset($item->description)){
                $text =  $item->description;}
            else{
                $text = 'Hier gibt es leider keinen Text...';
            };


                    $k++;
                    $content = [
                      'title' => $item->summary,
                      'about'  => $text,
                      'supervisor' => 'Unknown',
                      'kind' => 'Seminar',
                      'Semester' => 'WS19',
                    ];

                    $site->find('courses')->createChild([
                      'content'  => $content,
                      'slug'     => $item->summary . $i . $k,
                      'template' => 'course'
                    ]); */
    ?>