<div class="ruler"></div>

<div class="col" id="timelinecol">
    
    <p>(timeline)</p>
    
    <?php 
         $period = new DatePeriod(
             new DateTime('2019-09-01'),
             new DateInterval('P1D'),
             new DateTime('2019-12-30')
         ); 
    
    foreach ($period as $key => $value):
    
    ?>
    
    <div class="day"><?= $key ?></div>
    
    <?php endforeach?>
    
</div>