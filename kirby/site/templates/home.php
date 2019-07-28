<?php snippet('header') ?>

<main>

<div><?= $site->find("people")->find("jonadienst")->Prename() ?> was here.</div>

  <p><?= $site->find('people')->find('ninaoverkott')->prename() ?> <?= $site->find('people')->find('ninaoverkott')->name() ?></p>


</main>

<?php snippet('footer') ?>
