<div class="col">
    
    <p>(timeline)</p>
    
    <div class="ruler"></div>
    
    <?php 
         $period = new DatePeriod(
             new DateTime('2010-10-01'),
             new DateInterval('P1D'),
             new DateTime('2011-10-10')
         ); 
    
    foreach ($period as $key => $value):
    
    ?>
    
    <div class="day"><?= $key ?></div>
    
    <?php endforeach?>
    
</div>