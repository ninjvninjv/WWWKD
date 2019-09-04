<?php snippet('header') ?>

  <div class='siteTitle' id='headerTitle'><p>Kommunikations<br>design</p></div>
  <div class='siteTitle' id='footerTitle'><p>Hochschule<br>für<br>Gestaltung</p></div>

  <div id='calendarNavigation'></div>

  <img id='easterEgg' src='content/1_projects/2_wwwkd/wwwkdteam.jpeg'>

  <div id='content'>

    <div class='column' id='events'>

      <div class='contentPlazthalter'></div>

    </div>

    <div class='column' id='seminars'>

      <div class='contentPlazthalter'></div>

    </div>

    <div class='column' id='projects'>

      <div class='contentPlazthalter'></div>

    </div>

    <div class='column' id='information'>

      <div class='contentPlazthalter'></div>

    </div>

    <div class='column' id='people'>

      <div class='contentPlazthalter'></div>

    </div>

  </div>

  <div id='sidebarNavigation'>

    <form>
      <input type="checkbox" class='checkEvent' onClick='toggleColumn(".checkEvent", "#events")' name="checkTalks" checked>Vorträge<br>
      <input type="checkbox" class='checkEvent' onClick='toggleColumn(".checkEvent", "#events")' name="checkPresentations">Präsentationen<br>
      <input type="checkbox" class='checkEvent' onClick='toggleColumn(".checkEvent", "#events")' name="checkExhibitions">Austellungen<br><br>

      <input type="checkbox" class='checkCourses' onClick='toggleColumn(".checkCourses", "#seminars")' name="checkSeminars" checked>Seminare<br>
      <input type="checkbox" class='checkCourses' onClick='toggleColumn(".checkCourses", "#seminars")' name="checkBasics">Grundkurse<br>
      <input type="checkbox" class='checkCourses' onClick='toggleColumn(".checkCourses", "#seminars")' name="checkWorkshops">Workshops<br><br>

      <input type="checkbox" class='checkProjects' onClick='toggleColumn(".checkProjects", "#projects")' name="checkSeminarWorks" checked>Seminararbeiten<br>
      <input type="checkbox" class='checkProjects' onClick='toggleColumn(".checkProjects", "#projects")' name="checkFreeProjects">Freie Projekte<br>
      <input type="checkbox" class='checkProjects' onClick='toggleColumn(".checkProjects", "#projects")' name="checkDiplomas">Diplome<br>
      <input type="checkbox" class='checkProjects' onClick='toggleColumn(".checkProjects", "#projects")' name="checkPrediplomas">Vordiplome<br><br>

      <input type="checkbox" class='checkInfo' onClick='toggleColumn(".checkInfo", "#information")' name="checkInfo" checked>Info<br>
      <input type="checkbox" class='checkInfo' onClick='toggleColumn(".checkInfo", "#information")' name="checkAteliers">Werkstätten<br>
      <input type="checkbox" class='checkInfo' onClick='toggleColumn(".checkInfo", "#information")' name="checkAdmissions">Bewerbung<br>
      <input type="checkbox" class='checkInfo' onClick='toggleColumn(".checkInfo", "#information")' name="checkContact">Kontakt<br><br>

      <input type="checkbox" class='checkPeople' onClick='toggleColumn(".checkPeople", "#people")' name="checkProfs" checked>Lehrende<br>
      <input type="checkbox" class='checkPeople' onClick='toggleColumn(".checkPeople", "#people")' name="checkGuests">Gäste<br>
    </form>


  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">

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


</script>

<?php snippet('footer') ?>
