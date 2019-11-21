<div class="ruler"></div>

<div class="col" id="timelinecol">
    
    <p>(timeline)</p>
    
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
    
        <div class="day" id="t<?= $value->format("Y-m-d"); ?>"></div>
    
    
    <?php endforeach?>
    
    
    
    
    
    
</div>