<?php snippet('header') ?>

  <div class='siteTitle' id='headerTitle'><p>K<br>D</p></div>
  <div class='siteTitle' id='footerTitle'><p>H<br>f<br>G</p></div>
    <div class='siteTitle' id='kaTitle'><p>KA</p></div>

    <div id='calendarNavigation'>

      <?php snippet('timeline') ?>

    </div>

  <img id='easterEgg' src='content/1_projects/2_wwwkd/wwwkdteam.jpeg'>

  <div class=''></div>

  <div id='content'>

    <div class='column' id='events'>

        <?php snippet('events') ?>

    </div>

    <div class='column' id='seminars'>

        <?php snippet('seminars') ?>

    </div>

    <div class='column' id='projects'>

        <?php snippet('projects') ?>

    </div>

    <div class='column' id='information'>

        <?php snippet('information') ?>

    </div>
      
    <!-- TEST OVERLAY PEOPLE -->
    <?php foreach ($site->find ('people')->children() as $person): ?>
        <?php foreach ($person->images() as $image): ?>
            <img class="profile" id="<?= $person ?>" src="<?= $image->url() ?>">
        <?php endforeach ?>
    <?php endforeach ?>

    <div class='column' id='people'>

        <?php snippet('people') ?>

    </div>
      
    

  </div>

 <!--Navigation new-->
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
</div> 


      
    <div id='sidebarNavigation'>
    <form>

      <!--Events Column-->
      <label>
        <input
          type="checkbox"
          class='checkEvent'
          onClick='toggleColumn(".checkEvent", "#events")'
          name="checkTalks" checked>
          <span class="checkmark"></span> Vorträge<br>
      </label>
      <label>
        <input
          type="checkbox"
          class='checkEvent'
          onClick='toggleColumn(".checkEvent", "#events")'
          name="checkPresentations">
          <span class="checkmark"></span> Präsentationen<br>
      </label>
      <label>
        <input
          type="checkbox"
          class='checkEvent'
          onClick='toggleColumn(".checkEvent", "#events")'
          name="checkExhibitions">
          <span class="checkmark"></span> Austellungen<br>
      </label><br>

      <!--Seminare Column-->
      <div class="button">Studium</div>
      <label>
        <input
          type="checkbox"
          class='checkCourses'
          onClick='toggleColumn(".checkCourses", "#seminars")'
          name="checkSeminars" checked>
          <span class="checkmark"></span> Seminare<br>
      </label>
      <label>
        <input
          type="checkbox"
          class='checkCourses'
          onClick='toggleColumn(".checkCourses", "#seminars")'
          name="checkBasics">
          <span class="checkmark"></span> Grundkurse<br>
      </label>
      <label>
        <input
          type="checkbox"
          class='checkCourses'
          onClick='toggleColumn(".checkCourses", "#seminars")'
          name="checkWorkshops">
          <span class="checkmark"></span> Workshops<br>
      </label><br>

      <!--Projects Column-->
      <div class="button">Projects</div>
      <label>
        <input
          type="checkbox"
          class='checkProjects'
          onClick='toggleColumn(".checkProjects", "#projects")'
          name="checkSeminarWorks" checked>
          <span class="checkmark"></span> Seminararbeiten<br>
      </label>
      <label>
        <input
          type="checkbox"
          class='checkProjects'
          onClick='toggleColumn(".checkProjects", "#projects")'
          name="checkFreeProjects">
          <span class="checkmark"></span> Freie Projekte<br>
      </label>
      <label>
        <input
          type="checkbox"
          class='checkProjects'
          onClick='toggleColumn(".checkProjects", "#projects")'
          name="checkDiplomas">
          <span class="checkmark"></span> Diplome<br>
      </label>
      <label>
        <input
          type="checkbox"
          class='checkProjects'
          onClick='toggleColumn(".checkProjects", "#projects")'
          name="checkPrediplomas">
          <span class="checkmark"></span> Vordiplome<br>
      </label><br>

      <!--Info Column-->
        <div class="button">Info</div>
      <label>
        <input
        type="checkbox"
        class='checkInfo'
        onClick='toggleColumn(".checkInfo", "#information")'
        name="checkInfo" checked>
        <span class="checkmark"></span> Info<br>
      </label>
      <label>
        <input
          type="checkbox"
          class='checkInfo'
          onClick='toggleColumn(".checkInfo", "#information")'
          name="checkAteliers">
          <span class="checkmark"></span> Werkstätten<br>
      </label>
      <label>
        <input
          type="checkbox"
          class='checkInfo'
          onClick='toggleColumn(".checkInfo", "#information")'
          name="checkAdmissions">
          <span class="checkmark"></span> Bewerbung<br>
      </label>
      <label>
        <input
          type="checkbox"
          class='checkInfo'
          onClick='toggleColumn(".checkInfo", "#information")'
          name="checkContact">
          <span class="checkmark"></span> Kontakt<br>
      </label><br>

      <!--People Column-->
        <div class="button">People</div>
      <label>
        <input
          type="checkbox"
          class='checkPeople'
          onClick='toggleColumn(".checkPeople", "#people")'
          name="checkProfs" checked>
          <span class="checkmark"></span> Lehrende<br>
      </label>
      <label>
        <input
          type="checkbox"
          class='checkPeople'
          onClick='toggleColumn(".checkPeople", "#people")'
          name="checkGuests">
          <span class="checkmark"></span> Gäste<br>
      </label>
      <label>
        <input
          type="checkbox"
          class='checkPeople'
          onClick='toggleColumn(".checkPeople", "#people")'
          name="checkStudents">
          <span class="checkmark"></span> Studierende<br>
      </label>

    </form>
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">

// --- CHECKBOXES ---

  /* On click, check if any of the column's checkboxes is :checked:
       a) If YES, display column
       b) If NO, hide column */

  function toggleColumn(columnCheckboxes, column) {
    var isChecked = 0;
    $(columnCheckboxes).each(function() {
      var checking = $( this ).prop( "checked" );
      if (checking == true) {
        isChecked = isChecked + 1;
      }
    });
    if (isChecked > 0) {
      $(column).css('display', 'block');
    } else {
      $(column).css('display', 'none');
    }
    var numberOfColumns = 0;
    $('.column').each(function() {
      if($(this).is(":visible")){
        console.log('plusone');
        numberOfColumns = numberOfColumns + 1;
      }
    });
    $('.column').css('width', 'calc(100%/' + numberOfColumns + ')');
  }

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

//if you scroll in event or semianr col the whole calendar scrolls


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


</script>

<style>

    #events:hover{

        cursor: url('<?= $site->find('home')->image('cursor.svg')->url() ?>');

    }

</style>

<?php snippet('footer') ?>
