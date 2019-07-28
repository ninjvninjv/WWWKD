<?php snippet('header') ?>

<main>


<?php $janosch = $site->find('people')->find('janoschbelakratz')?>
    

<div id="Johanna" style="font-family: serif; colour: aquamarine;">
    <?= $site->find("people")->find("johannaschaefer")->Prename()?> <?= $site->find("people")->find("johannaschaefer")->Name()?>
</div>
    
<div><?= $site->find("people")->find("jonadienst")->Prename() ?> was here.</div>

  <p><?= $site->find('people')->find('ninaoverkott')->prename() ?> <?= $site->find('people')->find('ninaoverkott')->name() ?></p>

    <div id="student <?= $janosch->Title() ?>"> Mein Name ist <?= $janosch->Prename() ?> <?= $janosch->Name() ?></div>

</main>

<?php snippet('footer') ?>
