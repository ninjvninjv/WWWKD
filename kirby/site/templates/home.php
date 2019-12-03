<?php snippet('header') ?>


    <div id='calendarNavigation'>

      <?php snippet('timeline') ?>

    </div>

  <div id='content'>

    <?php snippet('navigation') ?>

    <div class='column' id='events'>

        <?php snippet('events') ?>

    </div>

    <div class='column' id='seminars'>

        <?php snippet('seminars') ?>

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
            <img class="profile" id="<?= $person ?>" src="<?= $image->url() ?>">
        <?php endforeach ?>
    <?php endforeach ?>

    <div class='column' id='information'>

        <?php snippet('information') ?>

    </div>



  </div>

 <!--Navigation new-->
<!--
<div id="mainNavigation">
    <div class="content">
    <ul class="menu">
        <li class="button">Events</li>
        <li class="button">Studium</li>
        <li class="button">Projects</li>
        <li class="button">People</li>
        <li class="button">Info</li>
        </ul>
    </div>
</div> -->



    <div id='sidebarNavigation'>

      <div class='siteTitle' id='headerTitle'><p>K<br>D</p></div>
      <div class='siteTitle' id='footerTitle'><p>H<br>f<br>G</p></div>
        <div class='siteTitle' id='kaTitle'><p>KA</p></div>

    </div>

  <div id='displayInformation' style='display: none;'>

    <div id='project' class='displayProject'>
      <div class='sidebar'>
        <div class='header'>
          <p class='title'></p>
          <p class='type'></p>
          <p class='date'></p>
          <p class='author'></p>
        </div>
        <div class='text'></div>
      </div>
      <div class="images"></div>
    </div>

    <div id='seminar' class='displaySeminar'>
      <div class='sidebar'>
        <div class='header'>
          <p class='type'></p>
          <p class='title'></p>
          <p class='author'></p>
          <p class='date'></p>
        </div>
        <div class='text'></div>
      </div>
      <div class="images"></div>
    </div>

    <div id='event' class='displayEvent'>
      <div class='sidebar'>
        <div class='header'>
          <p class='title'></p>
          <p class='type'></p>
          <p class='date'></p>
          <p class='author'></p>
        </div>
        <div class='text'></div>
      </div>
      <div class="images"></div>
    </div>

  </div>


<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
<script type="text/javascript">

// --- CHECKBOXES ---

//Check if input has class of "menu"
  //If yes, hide column and display "menuUnchecked"
  //If no, check if input has class of "menuUnchecked"
    //If yes, show column
    //If no, check if input of same class and "menu"/"dropmenu" is isChecked
      //

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
      $('label.menu' + checkColumn).css('display', 'none');
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
    $('.column').css('width', 'calc(100%/' + numberOfColumns + ')');
    $('label.menu').css('width', 'calc((100%/' + numberOfColumns + ' - 10px)');
    $('label.menuUnchecked').css('width', 'calc((100%/' + numberOfColumns + ' - 10px)');
  });
}

toggleColumn(".checkEvent", "#events");
toggleColumn(".checkCourses", "#seminars");
toggleColumn(".checkProject", "#projects");
toggleColumn(".checkInfo", "#information");
toggleColumn(".checkPeople", "#people");


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

</script>

<style>

    #events:hover{

        cursor: url('<?= $site->find('home')->image('cursor.svg')->url() ?>');

    }

</style>

<?php snippet('footer') ?>
