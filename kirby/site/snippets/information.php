<div class="col" id="infocol">
    
    <p>(info)</p>
    
    <?php foreach ($site->find ('infos')->children() as $infotext): ?>
    <?= $infotext->texttitle() ?>
    <br>
    <br>
    <?= $infotext->text() ?>
    
    <?php endforeach ?>
    
</div>