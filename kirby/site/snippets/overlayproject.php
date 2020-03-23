        <div class='textinfo' id='info'>
            <div class="informationmenu"><img id="arrow" src="<?php echo kirby()->urls()->assets() . '/images/arrowright.svg' ?>"><img id="x" src="<?php echo kirby()->urls()->assets() . '/images/X.svg' ?>"></div>
            <div class='infotitle'></div>
            <div class='infoheader'>
                <div class='infotype'></div>
                <div class='infodate'></div>
                <div class='infoauthor'></div>
                <div class='infosupervisor'></div>
            </div>
            <div class='informationtext'></div>
            <div class='infocategory'></div>
        </div>
        
        <div class="infopics">
        
            <div class="infopiccol" id="infopiccol1">
            
                
                
            </div>
        
        </div>

        <script>
        
            $('.informationmenu img').on('click', function(){
                
                $('#displayInformation').css('pointer-events', 'none');
                
                 $('#displayInformation').animate({opacity:0},500,function(){
                            
                     
                     $('.infopiccol').html('');
                                            
                });
                
                
            })
        
        </script>
