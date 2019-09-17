<div class="ruler"></div>

<div class="col" id="seminarcol">
    
    <p>(seminars)</p>
    
    <?php 
    
        $begin = new DateTime('2019-09-01');
        $interval = new DateInterval('P1D');
        $end = new DateTime('2019-12-30');
        $period = new DatePeriod(
             $begin,
             $interval,
             $end
         ); 
    
    foreach ($period as $key => $value):
    
    ?>
    
    <div class="day" id="s<?= $value->format("Ymd"); ?>"><?= $value->format("Y.m.d"); ?></div>
    
    <?php endforeach?>
    
</div>