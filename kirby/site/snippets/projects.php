<div class="col" id="projectcol">
    
    <p>(projects)</p>
    
    
    <?php foreach($site->find('projects')->children() as $semester): ?>

        <?php if($semester->children()->isNotEmpty()): ?>
    
            <p><?= $semester->title() ?></p>   
    
            <?php foreach($semester->children() as $project): ?>
    
                <p><?= $project->title() ?></p>
    
            <?php endforeach ?> 
    
        <?php endif ?> 

    <?php endforeach ?>
    
</div>