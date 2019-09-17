<div class="col" id="projectcol">
    
    <p>(projects)</p>
    
    <?php foreach($site->find('projects')->children() as $project):?>
    
        <p> <?= $project->title() ?> </p>
    
    <?php endforeach ?>
    
</div>