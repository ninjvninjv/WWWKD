
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
                   
                <div class="person <?= $person->typ() ?>" id="<?= $person->firstname() ?><?= $person->surname() ?>">
                    <div id="persontype">(<?= $person->typ() ?>)</div>
                    <div class="personname"><?= $person->title() ?></div>
                </div>
        
                <script>

                    $('#<?= $person->firstname() ?><?= $person->surname() ?>').on('click',function(){

                        $('.profile').css('visibility', 'hidden');
                        $('#profile<?= $person->firstname() ?><?= $person->surname() ?>').css('visibility', 'visible');

                    })

                </script>
        
            <?php endif ?>
                    
        <?php endforeach ?>
        <div class="peoplespast" id="">Present</div>
        <div class="peoplespast" id="">Past</div>
        <?php foreach ($site->find ('people')->children() as $person): ?>
            <?php if($person->zustand() == 'past'):?>
                    <div class="person <?= $person->typ() ?>" id="<?= $person->firstname() ?><?= $person->surname() ?>">
                        (<?= $person->typ() ?>): <?= $person->title() ?>
                    </div>
        
                <script>

                    $('#<?= $person->firstname() ?><?= $person->surname() ?>').on('click',function(){

                        $('.profile').css('visibility', 'hidden');
                        $('#profile<?= $person->firstname() ?><?= $person->surname() ?>').css('visibility', 'visible');

                    })

                </script>
        
            <?php endif ?>
                    
        <?php endforeach ?>
        
    </div>
</div>
