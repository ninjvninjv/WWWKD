<div class="col" id="projectcol">
    
    <p class="orientation">(projects)</p>
    <div class="colcontent">
            <?php foreach($site->find('projects')->children() as $semester): ?>

                <?php if($semester->children()->isNotEmpty()): ?>
                    <div class="prosemester"><?= $semester->title() ?></div> 


                    <?php foreach($semester->children() as $project): ?>

                        <div class="project">
                            
                            <div class="seminarGlow" id="projectGlowDiplom"></div>
                            
                            <div class="protitle"><?= $project->title() ?> <br>(<?= $project->type() ?>)</div>

<<<<<<< HEAD
                            <?php foreach($project->images() as $image): ?>
                                <?php if ($image->template()=="cover"): ?>
                                    <img class="proimage" src="<?= $image->url() ?>">
                                <?php endif ?>
                            <?php endforeach ?> 




                            <!-- goes into the persons textfile and takes data -->
                            <div class="proauthor">

                                <?php $i =0; foreach ($project->author()->toStructure() as $author): 

                                    $autorpath = $author->path();
                                    $i++;

=======

                            <?php foreach($project->images() as $image): ?>
                                <?php if ($image->template()=="cover"): ?>
                                    <img class="proimage" src="<?= $image->url() ?>">
                                <?php endif ?>
                            <?php endforeach ?> 




                            <!-- goes into the persons textfile and takes data -->
                            <div class="proauthor">

                                <?php $i =0; foreach ($project->author()->toStructure() as $author): 

                                    $autorpath = $author->path();
                                    $i++;

>>>>>>> 649c4d085f948c0eb5ba2b67f800a9304caf0ffa
                                ?>
                                
                                <?php if($i > 1): ?>
                                
                                &amp; <?= $autorpath->pages()->toPage()->title() ?>
                                
                                <?php else: ?>
                                
                                von <?= $autorpath->pages()->toPage()->title() ?>
                                
                                <?php endif ?>

                                <?php endforeach ?>

                            </div>
                            
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