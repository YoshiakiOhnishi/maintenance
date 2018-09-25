<div class="row">
    <h4><?= __('メーカID') ?></h4>
    <?= $this->Text->autoParagraph(h($sensormaker->maker_id)); ?>
</div>
<div class="row">
    <h4><?= __('メーカ名') ?></h4>
    <?= $this->Text->autoParagraph(h($sensormaker->name)); ?>
</div>
<table cellpadding="0" cellspacing="0">
    <tr>
        <th><?= __('センサID') ?></th>
        <th><?= __('センサ名') ?></th>
        <th><?= __('型名/型番') ?></th>
        <th><?= __('適用分野') ?></th>
        <th><?= __('センサ種類') ?></th>
        <th class="actions"><?= __('Actions') ?></th>
    </tr>
    <?php foreach ($sensormaker->sensors as $sensors): ?>
    <tr>
        <td><?= str_pad(h($sensors->sensor_id), 16, 0, STR_PAD_LEFT) ?></td>
        <td><?= h($sensors->sensor_name) ?></td>
        <td><?= h($sensors->model_name_number) ?></td>
        <td><?= h($sensors->application_areas) ?></td>
        <td><?= h($sensors->sensor_type) ?></td>
        <td class="actions">
            <?= $this->Html->link(__('Detail'), ['controller' => 'Sensors',
                'action' => 'detail', $sensors->sensor_id]) ?>

            <?= $this->Html->link(__('Edit'), ['controller' => 'Sensors', 
                'action' => 'edit', $sensors->sensor_id]) ?>

            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sensors', 
                'action' => 'delete', $sensors->sensor_id], 
                ['confirm' => __('Are you sure you want to delete # {0}?', 
                $sensors->sensor_id)]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>