<div class="col" id="projectcol">
    
    <p>(projects)</p>
    
    
    <?php foreach($site->find('projects')->children() as $semester): ?>

        <?php if($semester->children()->isNotEmpty()): ?>
            <br>
            <div class="prosemester"><?= $semester->title() ?></div> 
            
    
            <?php foreach($semester->children() as $project): ?>
                <p><?= $project->title() ?></p>
                <?php foreach($project->images() as $image): ?>
                    <?php if ($image->template()=="cover"): ?>
                        <img id="proimage" src="<?= $image->url() ?>">
                    <?php endif ?>
                <?php endforeach ?> 
            <?php endforeach ?> 
    
           
    
        <?php endif ?> 

    <?php endforeach ?>
    
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">

  /* On click, display projectinfo */

</script>