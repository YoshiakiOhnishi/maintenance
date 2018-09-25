<div>
    <?= $this->Form->create($sensormakers) ?>
    <fieldset>
    <legend><?= __('Edit') ?></legend>
        <?php
            echo $this->Form->input('maker_id', ['type' => 'text', 'label' => 'メーカID']);
            echo $this->Form->input('name', ['type' => 'text', 'label' => 'メーカ名']);
        ?>
    </fieldset>
    <?= $this->Form->button('Submit') ?>
    <?= $this->Form->end() ?>
</div>