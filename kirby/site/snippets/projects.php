<div class="col" id="projectcol">
    
    <p class="orientation">(projects)</p>
    <div class="colcontent">
        <?php foreach($site->find('projects')->children() as $semester): ?>

            <?php if($semester->children()->isNotEmpty()): ?>
                <div class="prosemester"><?= $semester->title() ?></div> 


                <?php foreach($semester->children() as $project): ?>

                    <?php foreach($project->images() as $image): ?>
                        <?php if ($image->template()=="cover"): ?>
                            <img class="proimage" src="<?= $image->url() ?>">
                        <?php endif ?>
                    <?php endforeach ?> 
        
                     <div class="protitle"><?= $project->title() ?> (<?= $project->type() ?>)</div>
        

                    <!-- goes into the persons textfile and takes data -->
        <div class="proauthor">

                    <?php foreach ($project->author()->toStructure() as $author): 

                        $autorpath = $author->path();

                    ?>

                    <?= $autorpath->pages()->toPage()->title() ?>,

                    <?php endforeach ?>
            </div>

                <?php endforeach ?> 

            <?php endif ?> 

        <?php endforeach ?>
       
    </div> 
    
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">

  /* On click, display projectinfo */
    
    

</script>