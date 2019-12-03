
<script>
  function show(id) {
    document.getElementById(id).style.visibility = "visible";
  }
  function hide(id) {
    document.getElementById(id).style.visibility = "hidden";
  }
</script>

<div class="col" id="peoplecol">
    
    <div class="colcontent">



        <?php foreach ($site->find ('people')->children() as $person): ?>
                    <br>
                    <br>
                    <div class="person" onMouseOver="show('<?= $person ?>')" onMouseOut="hide('<?= $person ?>')">
                        <?= $person->title() ?>
                    </div>
                    <br>
                    <br>
                    <?= $person->about() ?>
        <?php endforeach ?>
    </div>
</div>
