<div class="ruler"></div>

<div class="col" id="eventcol">
    
    <p>(events)</p>
    
     <?php 
         $period = new DatePeriod(
             new DateTime('2019-09-01'),
             new DateInterval('P1D'),
             new DateTime('2019-09-30')
         ); 
    
    foreach ($period as $key => $value):
    
    ?>
    
    <div class="day"></div>
    
    <?php endforeach?>
    
</div>