<div class="ruler"></div>

<div class="col" id="eventcol">
    
    <p>(events)</p>
    
        <?php 
    
        $day = array();
        $i = 0;
        $begin = new DateTime('2019-01-01');
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
    
    
    <?php endforeach?>
      
</div>