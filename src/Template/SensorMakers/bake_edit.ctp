<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SensorMaker $sensorMaker
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sensorMaker->maker_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sensorMaker->maker_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sensor Maker'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="sensorMaker form large-9 medium-8 columns content">
    <?= $this->Form->create($sensorMaker) ?>
    <fieldset>
        <legend><?= __('Edit Sensor Maker') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
