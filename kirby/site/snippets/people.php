<div class="col" id="peoplecol">
    
    <p class="orientation">(people)</p>
    <div class="colcontent">
        <?php foreach ($site->find ('people')->children() as $person): ?>
        <div class="person">
            <br>
            <br>
            <?= $person->title() ?>
            <br>
            <br>
            <?= $person->about() ?>
        </div>

        <?php endforeach ?>
    </div> 
    
</div>