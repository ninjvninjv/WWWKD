<div class="ruler"></div>

<div class="col" id="seminarcol">
    
    <p>(seminars)</p>
    
    <?php 
         $period = new DatePeriod(
             new DateTime('2010-10-01'),
             new DateInterval('P1D'),
             new DateTime('2011-10-10')
         ); 
    
    foreach ($period as $key => $value):
    
    ?>
    
    <div class="day"></div>
    
    <?php endforeach?>
    
</div>