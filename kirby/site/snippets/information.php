<div class="col" id="infocol">
    
    <div class="top"></div>
  
    <div class="colcontent">
        <?php foreach ($site->find ('infos')->children() as $infotext): ?>
        <div class="infotext">
            <br>
            <br>
            <?= $infotext->texttitle() ?>
            <br>
            <br>
            <?= $infotext->text() ?>
        </div>

        <?php endforeach ?>
    </div>
</div>
