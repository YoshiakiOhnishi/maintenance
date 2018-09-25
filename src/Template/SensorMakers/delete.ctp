<div>
    <?= $this->Form->create($sensormakers) ?>
    <fieldset>
    <legend><?= __('Add Maker') ?></legend>
        <p>メーカID: <?= h($sensormakers->maker_id); ?></p>
        <p>メーカ名: <?= h($sensormakers->name); ?></p>
   </fieldset>
    <?= $this->Form->button('Submit') ?>
    <?= $this->Form->end() ?>
</div>