<?php snippet('header') ?>

<main>


    <?php 
        $janosch = $site->find('people')->find('janoschbelakratz'); 
        $johanna = $site->find('people')->find('johannaschaefer'); 
        $nina = $site->find('people')->find('ninaoverkott'); 
        $jona = $site->find('people')->find('jonadienst'); 
    ?>


    <p style= 'font-family: serif; color: blue;'>
        <?= $johanna->Prename()?> <?= $johanna->Name()?>
    </p>

    <p><?= $jona->Prename() ?> was here.
    </p>

    <p><?= $nina->prename() ?> <?= $nina->name() ?>
    </p>

    <p id='student <?= $janosch->Title() ?>'> Mein Name ist <?= $janosch->Prename() ?> <?= $janosch->Name() ?>
    </p>

</main>

<?php snippet('footer') ?>
