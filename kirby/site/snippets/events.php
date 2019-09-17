<div class="ruler"></div>

<div class="col" id="eventcol">
    
    <p>(events)</p>
    
    <?php 
    
        $day = array();
        $i = 0;
        $begin = new DateTime('2019-09-01');
        $interval = new DateInterval('P1D');
        $end = new DateTime('2019-12-30');
        $period = new DatePeriod(
             $begin,
             $interval,
             $end
         ); 
    
        foreach ($period as $key => $value):
    
        $day[$i] = $value;
        $i++;
    
    ?>
    
    <div class="day" id="e<?= $value->format("Y-m-d"); ?>"></div>
    
    <?php $j =0; foreach($site->find('events')->children() as $event): 
    
        $date = $event->day();
        $j++;
    ?>
    
        <?php if($date == $value->format("Y-m-d")): ?>
        <div class="event" id="">
    
            <div class="eventtitle"><?= $event->title() ?></div>
            <div class="eventstart"></div>
            <div class="eventend"></div>
    
        </div>
        <?php endif ?>
    
    <?php endforeach ?>  
    
    <?php endforeach?>
      
</div>