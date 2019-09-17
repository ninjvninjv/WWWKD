<div class="col" id="projectcol">
    
    <p>(projects)</p>
    
    
    <?php foreach($site->find('projects')->children() as $semester): ?>

        <?php if ($semester->isEmpty()): ?>
            <p><?= $semester->title() ?></p>   
            <?php foreach ($semester->children() as $project): ?>
                <p><?php $project->title() ?></p>
            <?php endforeach ?>
        <?php endif ?> 

    <?php endforeach ?>
    
</div>