<div>
    <?= $this->Form->create($sensor_maker) ?>
    <fieldset>
    <legend><?= __('Add Maker') ?></legend>
    <?php
            echo $this->Form->input('maker_id', ['type' => 'text', 'label' => 'メーカID']);
            echo $this->Form->input('name', ['type' => 'text', 'label' => 'メーカ名']);
    ?>
    </fieldset>
    <?= $this->Form->button('Submit') ?>
    <?= $this->Form->end() ?>
</div>