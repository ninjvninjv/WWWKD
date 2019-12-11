<?= css(['/assets/css/templates/navigation.css', '@auto']) ?>
<div class='navigationMenu'>

  <form class='menu'>

  <!-- MENU EVENTS -->

  <div class='menu navelement checkEvent'>

  <label class='menu checkEvent'>
    <input
      type="checkbox"
      class='menu checkEvent'
      name="checkEvents" checked>
      <span class="checkmark"></span><br>
  </label>
  <p> Events</p>

  <!-- DROPMENU EVENTS -->

  <label class='dropmenu checkEvent'>
    <input
      type="checkbox"
      class='checkEvent'
      onClick='toggleColumn(".checkEvent", "#events")'
      name="checkTalks" checked>
      <span class="checkmark"></span> Talks<br>
  </label>
  <label class='dropmenu checkEvent'>
    <input
      type="checkbox"
      class='checkEvent'
      onClick='toggleColumn(".checkEvent", "#events")'
      name="checkPresentations" checked>
      <span class="checkmark"></span> Presentations<br>
  </label>
  <label class='dropmenu checkEvent'>
    <input
      type="checkbox"
      class='checkEvent'
      onClick='toggleColumn(".checkEvent", "#events")'
      name="checkExhibitions" checked>
      <span class="checkmark"></span> Exhibitions<br>
  </label>

</div>

<!-- MENU SEMINARS -->

<div class='menu navelement checkCourses'>

  <label class='menu checkCourses'>
    <input
      type="checkbox"
      class='menu checkCourses'
      name="checkStudies" checked>
      <span class="checkmark"></span><br>
  </label>
  <p> Studies</p>
<!-- DROPMENU SEMINARS -->

  <label class='dropmenu checkCourses'>
    <input
      type="checkbox"
      class='checkCourses'
      onClick='toggleColumn(".checkCourses", "#seminars")'
      name="checkSeminars" checked>
      <span class="checkmark"></span> Seminars<br>
  </label>
  <label class='dropmenu checkCourses'>
    <input
      type="checkbox"
      class='checkCourses'
      onClick='toggleColumn(".checkCourses", "#seminars")'
      name="checkBasics" checked>
      <span class="checkmark"></span> Grundkurse<br>
  </label>
  <label class='dropmenu checkCourses'>
    <input
      type="checkbox"
      class='checkCourses'
      onClick='toggleColumn(".checkCourses", "#seminars")'
      name="checkWorkshops" checked>
      <span class="checkmark"></span> Workshops<br>
  </label>
</div>

<!-- MENU PROJECTS -->

<div class='menu navelement checkProject'>
  <label class='menu checkProject'>
    <input
      type="checkbox"
      class='menu checkProject'
      name="checkProjects" checked>
      <span class="checkmark"></span><br>
  </label>
  <p>Projects</p>

<!-- DROPMENU PROJECTS -->

    <label class='dropmenu checkProject'>
      <input
        type="checkbox"
        class='checkProject'
        onClick='toggleColumn(".checkProject", "#projects")'
        name="checkSeminarWorks" checked>
        <span class="checkmark"></span> Seminar works<br>
    </label>
    <label class='dropmenu checkProject'>
      <input
        type="checkbox"
        class='checkProject'
        onClick='toggleColumn(".checkProject", "#projects")'
        name="checkFreeProjects" checked>
        <span class="checkmark"></span> Free Projects<br>
    </label>
    <label class='dropmenu checkProject'>
      <input
        type="checkbox"
        class='checkProject'
        onClick='toggleColumn(".checkProject", "#projects")'
        name="checkDiplomas" checked>
        <span class="checkmark"></span> Diplomas<br>
    </label>
    <label class='dropmenu checkProject'>
      <input
        type="checkbox"
        class='checkProject'
        onClick='toggleColumn(".checkProject", "#projects")'
        name="checkPrediplomas" checked>
        <span class="checkmark"></span> Prediplomas<br>
    </label>
</div>

<!-- MENU PEOPLE -->

<div class='menu navelement checkPeople'>
  <label class='menu checkPeople'>
    <input
      type="checkbox"
      class='menu checkPeople'
      name="checkInfos" checked>
      <span class="checkmark"></span><br>
  </label>
  <p>People</p>

<!-- DROPMENU PEOPLE -->

    <label class='dropmenu checkPeople'>
      <input
        type="checkbox"
        class='checkPeople'
        name="checkProfs" checked>
        <span class="checkmark" onClick='toggleColumn(".checkPeople", "#people")'></span> Profs<br>
    </label>
    <label class='dropmenu checkPeople'>
      <input
        type="checkbox"
        class='checkPeople'
        onClick='toggleColumn(".checkPeople", "#people")'
        name="checkGuests" checked>
        <span class="checkmark"></span> Guests<br>
    </label>
    <label class='dropmenu checkPeople'>
      <input
        type="checkbox"
        class='checkPeople'
        onClick='toggleColumn(".checkPeople", "#people")'
        name="checkStudents" checked>
        <span class="checkmark"></span> Students<br>
    </label>
</div>

<!-- MENU INFO -->

<div class='menu  navelement checkInfo'>
  <label class='menu checkInfo'>
      <input
        type="checkbox"
        class='menu checkInfo'
        name="checkPersons" checked>
        <span class="checkmark"></span><br>
    </label>
    <p>Info</p>

<!-- DROPMENU INFO -->

<label class='dropmenu checkInfo'>
  <input
  type="checkbox"
  class='checkInfo'
  onClick='toggleColumn(".checkInfo", "#information")'
  name="checkDepartment" checked>
  <span class="checkmark"></span> Department<br>
</label>
<label class='dropmenu checkInfo'>
  <input
    type="checkbox"
    class='checkInfo'
    onClick='toggleColumn(".checkInfo", "#information")'
    name="checkAteliers" checked>
    <span class="checkmark"></span> Ateliers<br>
</label>
<label class='dropmenu checkInfo'>
  <input
    type="checkbox"
    class='checkInfo'
    onClick='toggleColumn(".checkInfo", "#information")'
    name="checkAdmissions" checked>
    <span class="checkmark"></span> Application<br>
</label>
<label class='dropmenu checkInfo'>
  <input
    type="checkbox"
    class='checkInfo'
    onClick='toggleColumn(".checkInfo", "#information")'
    name="checkContact" checked>
    <span class="checkmark"></span> Contact<br>
</label>
</div>

</form>

  <form class='menuUnchecked'>
  <label class='menuUnchecked checkEvent'>
    <input
      type="checkbox"
      class='menuUnchecked checkEvent'>
      <span class="checkmark"></span> Events<br>
  </label>
  <label class='menuUnchecked checkCourses'>
    <input
      type="checkbox"
      class='menuUnchecked checkCourses'>
      <span class="checkmark"></span> Studies<br>
  </label>
  <label class='menuUnchecked checkProject'>
    <input
      type="checkbox"
      class='menuUnchecked checkProject'>
      <span class="checkmark"></span> Projects<br>
  </label>
  <label class='menuUnchecked checkPeople'>
    <input
      type="checkbox"
      class='menuUnchecked checkPeople'>
      <span class="checkmark"></span> Persons<br>
  </label>
  <label class='menuUnchecked checkInfo'>
      <input
        type="checkbox"
        class='menuUnchecked checkInfo'>
        <span class="checkmark"></span> Info<br>
    </label>
</form>

</div>
