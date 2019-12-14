<div class="ruler"></div>

<div class="col calendar" id="timelinecol">
    
    <div class="top"></div>
    
    <img id="datesymbol" src="<?= $site->find('home')->image('datesymbol.svg')->url() ?>">
    
    <div class="past" id="timelinepast">
    
        
    
    </div>
    
    <div class="archive" id="timelinearchive">↑</div>
    
    
    <div class="future" id="timelinefuture">

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

            <div class="day" id="t<?= $value->format("Y-m-d"); ?>">
        
                <div class="timelinedate" id="td<?= $value->format("Y-m-d"); ?>"></div>
        
            </div>


        <?php endforeach?>
    
    </div>
    
    
    
    
</div>