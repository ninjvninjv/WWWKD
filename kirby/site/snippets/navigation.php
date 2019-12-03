<?= css(['/assets/css/templates/navigation.css', '@auto']) ?>
<div class='navigationMenu'>

  <form class='menu'>
  <label class='menu checkEvent'>
    <input
      type="checkbox"
      class='menu checkEvent'
      name="checkEvents" checked>
      <span class="checkmark"></span> Events<br>
  </label>
  <label class='menu checkCourses'>
    <input
      type="checkbox"
      class='menu checkCourses'
      name="checkStudies" checked>
      <span class="checkmark"></span> Studies<br>
  </label>
  <label class='menu checkProject'>
    <input
      type="checkbox"
      class='menu checkProject'
      name="checkProjects" checked>
      <span class="checkmark"></span> Projects<br>
  </label>
  <label class='menu checkInfo'>
    <input
      type="checkbox"
      class='menu checkInfo'
      name="checkInfos" checked>
      <span class="checkmark"></span> Info<br>
  </label>
  <label class='menu checkPeople'>
      <input
        type="checkbox"
        class='menu checkPeople'
        name="checkPersons" checked>
        <span class="checkmark"></span> Persons<br>
    </label>
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
  <label class='menuUnchecked checkInfo'>
    <input
      type="checkbox"
      class='menuUnchecked checkInfo'>
      <span class="checkmark"></span> Info<br>
  </label>
  <label class='menuUnchecked checkPeople'>
      <input
        type="checkbox"
        class='menuUnchecked checkPeople'>
        <span class="checkmark"></span> Persons<br>
    </label>
</form>

</div>

  <!--Events Column-->
<form>
  <label class='dropmenu'>
    <input
      type="checkbox"
      class='checkEvent'
      onClick='toggleColumn(".checkEvent", "#events")'
      name="checkTalks">
      <span class="checkmark"></span> Talks<br>
  </label>
  <label class='dropmenu'>
    <input
      type="checkbox"
      class='checkEvent'
      onClick='toggleColumn(".checkEvent", "#events")'
      name="checkPresentations">
      <span class="checkmark"></span> Presentations<br>
  </label>
  <label class='dropmenu'>
    <input
      type="checkbox"
      class='checkEvent'
      onClick='toggleColumn(".checkEvent", "#events")'
      name="checkExhibitions">
      <span class="checkmark"></span> Exhibitions<br>
  </label>
</form>

  <!--Seminare Column-->
<form>
  <label class='dropmenu'>
    <input
      type="checkbox"
      class='checkCourses'
      onClick='toggleColumn(".checkCourses", "#seminars")'
      name="checkSeminars">
      <span class="checkmark"></span> Seminars<br>
  </label>
  <label class='dropmenu'>
    <input
      type="checkbox"
      class='checkCourses'
      onClick='toggleColumn(".checkCourses", "#seminars")'
      name="checkBasics">
      <span class="checkmark"></span> Grundkurse<br>
  </label>
  <label class='dropmenu'>
    <input
      type="checkbox"
      class='checkCourses'
      onClick='toggleColumn(".checkCourses", "#seminars")'
      name="checkWorkshops">
      <span class="checkmark"></span> Workshops<br>
  </label>
</form>

  <!--Projects Column-->
<form>
  <label class='dropmenu'>
    <input
      type="checkbox"
      class='checkProject'
      onClick='toggleColumn(".checkProject", "#projects")'
      name="checkSeminarWorks">
      <span class="checkmark"></span> Seminar works<br>
  </label>
  <label class='dropmenu'>
    <input
      type="checkbox"
      class='checkProject'
      onClick='toggleColumn(".checkProject", "#projects")'
      name="checkFreeProjects">
      <span class="checkmark"></span> Free Projects<br>
  </label>
  <label class='dropmenu'>
    <input
      type="checkbox"
      class='checkProject'
      onClick='toggleColumn(".checkProject", "#projects")'
      name="checkDiplomas">
      <span class="checkmark"></span> Diplomas<br>
  </label>
  <label class='dropmenu'>
    <input
      type="checkbox"
      class='checkProject'
      onClick='toggleColumn(".checkProject", "#projects")'
      name="checkPrediplomas">
      <span class="checkmark"></span> Prediplomas<br>
  </label>
</form>

  <!--Info Column-->
<form>
  <label class='dropmenu'>
    <input
    type="checkbox"
    class='checkInfo'
    onClick='toggleColumn(".checkInfo", "#information")'
    name="checkDepartment">
    <span class="checkmark"></span> Department<br>
  </label>
  <label class='dropmenu'>
    <input
      type="checkbox"
      class='checkInfo'
      onClick='toggleColumn(".checkInfo", "#information")'
      name="checkAteliers">
      <span class="checkmark"></span> Ateliers<br>
  </label>
  <label class='dropmenu'>
    <input
      type="checkbox"
      class='checkInfo'
      onClick='toggleColumn(".checkInfo", "#information")'
      name="checkAdmissions">
      <span class="checkmark"></span> Application<br>
  </label>
  <label class='dropmenu'>
    <input
      type="checkbox"
      class='checkInfo'
      onClick='toggleColumn(".checkInfo", "#information")'
      name="checkContact">
      <span class="checkmark"></span> Contact<br>
  </label>
</form>

  <!--People Column-->
<form>
  <label class='dropmenu'>
    <input
      type="checkbox"
      class='checkPeople'
      onClick='toggleColumn(".checkPeople", "#people")'
      name="checkProfs">
      <span class="checkmark"></span> Profs<br>
  </label>
  <label class='dropmenu'>
    <input
      type="checkbox"
      class='checkPeople'
      onClick='toggleColumn(".checkPeople", "#people")'
      name="checkGuests">
      <span class="checkmark"></span> Guests<br>
  </label>
  <label class='dropmenu'>
    <input
      type="checkbox"
      class='checkPeople'
      onClick='toggleColumn(".checkPeople", "#people")'
      name="checkStudents">
      <span class="checkmark"></span> Students<br>
  </label>
</form>
