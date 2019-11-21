<div class="ruler"></div>

<div class="col" id="eventcol">
    
    <p class="orientation">(events)</p>
    
    <div class="past" id="eventpast">
    
        <?php foreach ($site->find('events')->children() as $event): ?>
        
            <div class="pastseminar">
        
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
    
        <div class="day" id="e<?= $value->format("Y-m-d"); ?>"></div>
    
    
    <?php endforeach?>
      
    </div>
        
</div>