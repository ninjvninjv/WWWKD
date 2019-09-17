<div class="col" id="projectcol">
    
    <p>(projects)</p>
    <?php for ($i=10; $i<=30; $i++):?>
    <p> SS 20<?= $i?> </p>  
    <p> WS 20<?= $i?> / 20<?= $i+1 ?> </p>

        <?php foreach($site->find('projects')->children() as $project): $t = $project->semester(); ?>
            <?php if ($t == "WS$i"):?>
            <p> <?= $project->title()?> </p>
            <?php endif ?>

        <?php endforeach ?>
    <?php endfor ?>
    
</div>