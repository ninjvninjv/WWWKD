<?php snippet('header') ?>

<main>

    <?php $janosch = $site->find('people')->find('janoschbelakratz')?>
    
<div><?= $site->find("people")->find("jonadienst")->Prename() ?> was here.</div>

  <p><?= $site->find('people')->find('ninaoverkott')->prename() ?> <?= $site->find('people')->find('ninaoverkott')->name() ?></p>

    <div id="student <?= $janosch->Title() ?>"> Mein Name ist <?= $janosch->Prename() ?> <?= $janosch->Name() ?></div>

</main>

<?php snippet('footer') ?>
