<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SensorMaker $sensorMaker
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sensor Maker'), ['action' => 'edit', $sensorMaker->maker_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sensor Maker'), ['action' => 'delete', $sensorMaker->maker_id], ['confirm' => __('Are you sure you want to delete # {0}?', $sensorMaker->maker_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sensor Maker'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sensor Maker'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sensorMaker view large-9 medium-8 columns content">
    <h3><?= h($sensorMaker->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Maker Id') ?></th>
            <td><?= h($sensorMaker->maker_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($sensorMaker->name) ?></td>
        </tr>
    </table>
</div>
