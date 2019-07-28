<?php snippet('header') ?>

<main>




<?php $janosch = $site->find('people')->find('janoschbelakratz')?>
    

<p style= 'font-family: serif; color: blue;'>

    <?= $site->find('people')->find('johannaschaefer')->Prename()?> <?= $site->find('people')->find('johannaschaefer')->Name()?>
</p>
    
<div><?= $site->find('people')->find('jonadienst')->Prename() ?> was here.</div>

  <p><?= $site->find('people')->find('ninaoverkott')->prename() ?> <?= $site->find('people')->find('ninaoverkott')->name() ?></p>

    <p id='student <?= $janosch->Title() ?>'> Mein Name ist <?= $janosch->Prename() ?> <?= $janosch->Name() ?></p>

</main>

<?php snippet('footer') ?>
