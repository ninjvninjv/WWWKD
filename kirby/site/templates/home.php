<?php snippet('header') ?>

    <div id='calendarNavigation'>

      <?php snippet('timeline') ?>
        <div class="topglow"></div>

    </div>

  <div id='content'>

      <?php snippet('navigation') ?>
      <div class="topglow"></div>

    <div class='column' id='events'>

      <?php snippet('events') ?>
      <div class="topglow"></div>

    </div>

    <div class='column' id='seminars'>

        <?php snippet('seminars') ?>
        <div class="topglow"></div>

    </div>

    <div class='column' id='projects'>

        <?php snippet('projects') ?>
        <div class="topglow"></div>

    </div>

    <div class='column' id='people'>

        <?php snippet('people') ?>
        <div class="topglow"></div>

    </div>

    <!-- TEST OVERLAY PEOPLE -->
    <?php foreach ($site->find ('people')->children() as $person): ?>
        <?php foreach ($person->images() as $image): ?>
            <img class="profile" id="<?= $person ?>" src="<?= $image->url() ?>">
        <?php endforeach ?>
    <?php endforeach ?>

    <div class='column' id='information'>


        <?php snippet('information') ?>
        <div class="topglow"></div>

    </div>



  </div>

    <div id='sidebarNavigation'>


      <div class='siteTitle' id='headerTitle'><p>K<br>D</p>        <div class="topglow"></div>
</div>
      <div class='siteTitle' id='footerTitle'><p>H<br>f<br>G</p></div>
        <div class='siteTitle' id='kaTitle'><p>KA</p></div>

    </div>

    <div id='displayInformation'>

        <div id='info' class='textinfo'>
            <div class='infotitle'>a</div>
            <div class='infoheader'>
                <div class='infotype'>a</div>
                <div class='infodate'></div>
                <div class='infoauthor'></div>
                <div class='infosupervisor'></div>
            </div>
            <div class='informationtext'>a</div>
        </div>

    </div>


<!---SCRIPTS--->

<script type="text/javascript">

// --- NAVIGATION ---

///////////////////////////
// toggle columns
function toggleColumn(checkColumn, column) {
  $("input" + checkColumn).click(function(){
    var isChecked = 0;
    $(".dropmenu" + checkColumn).each(function() {
      var checking = $( this ).prop( "checked" );
      if (checking == true) {
        isChecked = isChecked + 1;
      }
    });
    $(".menu" + checkColumn).each(function() {
      var checking = $( this ).prop( "checked" );
      if (checking == true) {
        isChecked = isChecked + 1;
      }
    });
    if ( $(this).hasClass("menu") ) {
      console.log('hide');
      $(column).css('display', 'none');
      $('div.menu' + checkColumn).css('display', 'none');
      $('label.menuUnchecked' + checkColumn).css('display', 'inline-block');
    }
    else if ( $(this).hasClass("menuUnchecked") ) {
      console.log('show');
      $(column).css('display', 'block');
      $('label.menu' + checkColumn).css('display', 'block');
      $('label.menuUnchecked' + checkColumn).css('display', 'none');
      $('input.menu' + checkColumn).prop('checked', true);
      $('input.menuUnchecked' + checkColumn).checked = false;
      var menuchecking = $('input.menu' + checkColumn).prop( "checked" );
      console.log(menuchecking)
    }
    else if (isChecked = 0) {
      $(column).css('display', 'none');
      $('label.menu' + checkColumn).css('display', 'none');
      $('label.menuUnchecked' + checkColumn).css('display', 'inline-block');
    }
    var numberOfColumns = 0;
    $('.column').each(function() {
      if($(this).is(":visible")){
        numberOfColumns = numberOfColumns + 1;
      }
    });
    ///////////////////////////
    // recalculate column width
      $('.column').css('width', 'calc(100%/' + numberOfColumns + ')');
      ///////////////////////////
      // recalculate font sizes relative to column width
      $('.seminartitle').css('font-size', $('.column').width()/15);
      $('.eventtitle').css('font-size', $('.column').width()/15);
      $('.protitle').css('font-size', $('.column').width()/15);
      $('.infotext').css('font-size', $('.column').width()/20);
      $('#peoplecol').css('font-size', $('.column').width()/20);

      $('div.menu').css('width', 'calc((100%/' + numberOfColumns + ' - 10px)');
      width = $('div.menu').css('width')
      $('label.menuUnchecked').css('width', width);
  });
}

toggleColumn(".checkEvent", "#events");
toggleColumn(".checkCourses", "#seminars");
toggleColumn(".checkProject", "#projects");
toggleColumn(".checkInfo", "#information");
toggleColumn(".checkPeople", "#people");

///////////////////////////
// display dropdown menues
function toggleDropMenues(checkColumn) {
  $(".navelement" + checkColumn + " p").click(function(){
    $(".dropmenu:not(" + checkColumn +")").css('display', 'none');
    $(".dropmenu" + checkColumn).toggle();
  }
)};

toggleDropMenues(".checkEvent");
toggleDropMenues(".checkCourses");
toggleDropMenues(".checkPeople");
toggleDropMenues(".checkProject");
toggleDropMenues(".checkInfo");

var ent, x, num;
$('.navigationMenu').mouseenter(function(event) {
  ent = event.pageX;
})
$('.navigationMenu').mousemove(function(event) {
  x = event.pageX
  num = (ent - x)*1.2;
  if (num < 0) {
    $('.navigationMenu').css('left', num);
  }

})

$(window).resize(function(){

    $('.seminartitle').css('font-size', $('.column').width()/15);
    $('.eventtitle').css('font-size', $('.column').width()/15);
    $('.protitle').css('font-size', $('.column').width()/15);
    $('.infotext').css('font-size', $('.column').width()/20);
    $('#peoplecol').css('font-size', $('.column').width()/20);

});

//--- TITLE SCROLL ---

 /* var marg = 0;
  var marg2 = 0
  $('.col').scroll(function () {
    marg = marg += 0.4
    if (marg < 84) {
      $('#headerTitle').css('left', marg + 'vw');
      $('#footerTitle').css('left', marg + 'vw');
    } else if (marg < 85) {
      $('#headerTitle').css('font-family', 'mf_basis_monou40_p80');
      $('#footerTitle').css('font-family', 'mf_basis_monou40_p80');
      $('.hideTitle').css('opacity', '0.5');
      $('.siteTitle').css('margin-left', '1vw');
    } else {
      $('#headerTitle').css('font-family', 'mf_basis_monou50_p80');
      $('#footerTitle').css('font-family', 'mf_basis_monou50_p80');
      $('.hideTitle').css('opacity', '0');
    }
  });*/

// --- RULER ---

    $(document).mousemove(function(){

        $('.ruler').css('top',event.pageY);

    });


// --- SEMINARS & EVENTS ---

//if you scroll in event or seminar col the whole calendar scrolls

    $(document).ready(function(){

        $('#eventcol').scroll(function(){

            $('#seminarcol').scrollTop($('#eventcol').scrollTop());
            $('#timelinecol').scrollTop($('#eventcol').scrollTop());

        });

        $('#seminarcol').scroll(function(){

            $('#eventcol').scrollTop($('#seminarcol').scrollTop());
            $('#timelinecol').scrollTop($('#seminarcol').scrollTop());

        });



        var today = '<?= date("Y-m-d"); ?>';
        var scrollpos = $('#s'+today).offset();
        var scroll = scrollpos.top;


        $('#seminarcol').scrollTop($('#s'+today).offset().top - ($(window).height()/2) - ($('#s'+today).height()/2)).delay( 100000 );
        $('#s'+today).after( '<div class="futureheader" id="seminarfutureheader">↓ Zukunft ↓</div>' );
        $('#e'+today).after( '<div class="futureheader" id="eventfutureheader">↓ Zukunft ↓</div>' );
        $('#t'+today).after( '<div class="futureheader" id="timelinefutureheader">↓</div>' );


        //SCROLLING IN GENERAL without a scrollbar

        var i = 0;
        var k = 0;

        $('.col.calendar').on('mousewheel DOMMouseScroll', function(e){

            if (typeof e.originalEvent.wheelDelta == 'number') {
                if(e.originalEvent.wheelDelta < 0) {




                    k = ($('#seminarcol').height() - $(window).height()) * -1;
                    kk = ($('#eventcol').height() - $(window).height()) * -1;

                    if(i-k > 0 || i-kk > 0){

                        i = i-10;
                        $('#seminarcol').css('top', i);
                        $('#eventcol').css('top', i);
                        $('#timelinecol').css('top', i);

                    }

                } else if(e.originalEvent.wheelDelta > 0) {

                    if(i<0){
                        i = i+10;
                        $('#seminarcol').css('top', i);
                        $('#eventcol').css('top', i);
                        $('#timelinecol').css('top', i);
                    };

                };
            };
        });



    });



</script>

<style>

    #events:hover{

        cursor: url('<?= $site->find('home')->image('cursor.svg')->url() ?>');

    }

    #displayInformation {
      display: none;
    }

</style>

<?php snippet('footer') ?>
