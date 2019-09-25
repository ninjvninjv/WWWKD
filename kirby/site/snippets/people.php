
<script>
  function show(id) {
    document.getElementById(id).style.visibility = "visible";
  }
  function hide(id) {
    document.getElementById(id).style.visibility = "hidden";
  }
</script>

<div class="col" id="peoplecol">
    
    <p class="orientation">(people)</p>
    <div class="colcontent">
        
        
   
        <?php foreach ($site->find ('people')->children() as $person): ?>
                <?php foreach ($person->images() as $image): ?>
        
                    <br>
                    <br>
                    <div class="person" onMouseOver="show('<?= $person ?>')" onMouseOut="hide('<?= $person ?>')"> 
                        <?= $person->title() ?>
                    </div>
                    <br>
                    <br>
                    <?= $person->about() ?>
                <?php endforeach ?>

        <?php endforeach ?>
    </div>  
</div>

