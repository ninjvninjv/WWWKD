<?php snippet('header') ?>

    <div id='calendarNavigation'>

      <?php snippet('timeline') ?>

    </div>

  <div id='content'>

      <?php snippet('navigation') ?>

    <div class='column' id='events'>


        <div class="ruler"></div>

        <?php snippet('events') ?>

    </div>

    <div class='column' id='seminars'>
        
        <div class="ruler"></div>

        <?php snippet('seminars') ?>
        <div id="seminarglowcol"></div>

    </div>

    <div class='column' id='projects'>

        <?php snippet('projects') ?>

    </div>

    <div class='column' id='people'>

        <?php snippet('people') ?>

    </div>

    <!-- TEST OVERLAY PEOPLE -->
    <?php foreach ($site->find ('people')->children() as $person): ?>
        <?php foreach ($person->images() as $image): ?>
            <img class="profile" id="profile<?= $person->firstname() ?><?= $person->surname() ?>" src="<?= $image->url() ?>">
        <?php endforeach ?>
    <?php endforeach ?>

    <div class='column' id='information'>

        
        <?php snippet('information') ?>

    </div>

      <div class="topglow"></div>

      
  </div>
    
    <div id='sidebarNavigation'>

      <div class='siteTitle' id='headerTitle'><p>K<br>D</p>        
        </div>
      <div class='siteTitle' id='footerTitle'><p>H<br>f<br>G</p></div>
        <div class='siteTitle' id='kaTitle'><p>KA</p></div>
        
    </div>

 <div id='displayInformation'>

        <?php snippet('overlayproject') ?>
        
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

// --- GLOW ---
    


// --- SEMINARS & EVENTS ---

//if you scroll in event or seminar col the whole calendar scrolls

    $(document).ready(function(){

        $('#events').on('scroll',function(){

            $('#seminars').scrollTop($('#events').scrollTop());
            $('#timelinecol').scrollTop($('#events').scrollTop());

        });

        $('#seminars').on('scroll',function(){

            $('#events').scrollTop($('#seminars').scrollTop());
            $('#timelinecol').scrollTop($('#seminars').scrollTop());

        });



        var today = '<?= date("Y-m-d"); ?>';
        var scrollpos = $('#s'+today).offset();
        var scroll = scrollpos.top;


        $('#seminarcol').scrollTop($('#s'+today).offset().top - ($(window).height()/2) - ($('#s'+today).height()/2)).delay( 100000 );
        $('#s'+today).after( '<div class="futureheader" id="seminarfutureheader"> Future</div>' );
        $('#e'+today).after( '<div class="futureheader" id="eventfutureheader"> Future</div>' );
        $('#t'+today).after( '<div class="futureheader" id="timelinefutureheader">↓</div>' );

    });



</script>

<style>

    #events:hover{

        cursor: url('<?= $site->find('home')->image('cursor.svg')->url() ?>');

    }

</style>

<?php snippet('footer') ?>
