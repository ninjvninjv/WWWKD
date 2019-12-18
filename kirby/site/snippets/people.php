
<script>
  function show(id) {
    document.getElementById(id).style.visibility = "visible";
  }
  function hide(id) {
    document.getElementById(id).style.visibility = "hidden";
  }
</script>

<div class="col" id="peoplecol">
    
    <div class="top"></div>
    
    <div class="colcontent">



        <?php foreach ($site->find ('people')->children() as $person): ?>
            <?php if($person->zustand() == 'present'):?>
                    <div class="person <?= $person->typ() ?>" id="<?= $person->title() ?>" onMouseOver="show('<?= $person ?>')" onMouseOut="hide('<?= $person ?>')">
                        <div id="persontype">(<?= $person->typ() ?>)</div>
                        <div class="personname"><?= $person->title() ?></div>
                    </div>
            <?php endif ?>
                    
        <?php endforeach ?>
        <div class="peoplespast" id="">Present</div>
        <div class="peoplespast" id="">Past</div>
        <?php foreach ($site->find ('people')->children() as $person): ?>
            <?php if($person->zustand() == 'past'):?>
                    <div class="person <?= $person->typ() ?>" id="<?= $person->title() ?>" onMouseOver="show('<?= $person ?>')" onMouseOut="hide('<?= $person ?>')">
                        (<?= $person->typ() ?>): <?= $person->title() ?>
                    </div>
            <?php endif ?>
                    
        <?php endforeach ?>
        
    </div>
</div>
