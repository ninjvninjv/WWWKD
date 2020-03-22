<div class="col" id="projectcol">
    
    <div class="top"></div>

    <div class="colcontent">
            <?php $z=0; foreach($site->find('projects')->children() as $semester): ?>

                <?php if($semester->children()->isNotEmpty()): ?>
                    <div class="prosemester"><?= $semester->title() ?></div>


                    <?php foreach($semester->children() as $project): 
                    $z++;?>

                        <div class="project" id="project<?= $z ?>">

                            <div class="projectGlow<?= $project->type() ?>" id="projectGlow"></div>
                            
                            <div class="protitle" id="protitle"><?= $project->title() ?></div>
                            <div class="protype">(<?= $project->type() ?>)</div>


                            <?php foreach($project->images() as $image): ?>
                                <?php if ($image->template()=="cover"): ?>
                                    <img class="proimage" src="<?= $image->url() ?>">
                                <?php endif ?>
                            <?php endforeach ?>




                            <!-- goes into the persons textfile and takes data -->
                            <div class="proauthor" id="proauthor<?= $z ?>">

                                <?php $i =0; foreach ($project->author()->toStructure() as $author):

                                    $autorpath = $author->path();
                                    $i++;

                                ?>

                                <?php if($i > 1): ?>

                                &amp; <?= $autorpath->pages()->toPage()->title() ?>

                                <?php else: ?>

                                von <?= $autorpath->pages()->toPage()->title() ?>

                                <?php endif ?>

                                <?php endforeach ?>

                            </div>

                        </div>
        
                        <script>

                                    $('#project<?= $z ?>').on('click',function(){
                                        
                                        $('.infotitle').html('<?= $project->title() ?>');
                                            $('.infotype').html('<?= $project->type() ?>');
                                            $('.infoauthor').text($('#proauthor<?= $z ?>').text());
                                            $('.informationtext').text('<?= $project->about() ?>');
                                        
                                        $('#displayInformation').animate({opacity:1},1000,function(){
                                            
                                            
                                        });
                                        
                                        
                                    });

                        </script>
        

                    <?php endforeach ?>
        
                <?php endif ?>

            <?php endforeach ?>
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">

  $(document).ready(function(){
      
      
  });



</script>
