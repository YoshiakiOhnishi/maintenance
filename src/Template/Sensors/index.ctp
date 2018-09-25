<div>
    <h3>Sensor List</h3>
    <table>
    <thead>
        <tr>
            <th>SISコード</th>
            <th>製品名称</th>
            <th>型名・型番</th>
            <th>適用範囲</th>
            <th>センサ種類</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($sensors as $sensor): ?>
        <tr>
        <td><?= str_pad(h($sensor->sensor_id), 16, 0, STR_PAD_LEFT) ?></td>
        <td><?= h($sensor->sensor_name) ?></td>
        <td><?= h($sensor->model_name_number) ?></td>
        <td><?= h($sensor->application_areas) ?></td>
        <td><?= h($sensor->sensor_type) ?></td>
        <td class="actions">
            <?= $this->Html->link(__('Detail'), ['controller' => 'Sensors',
                'action' => 'detail', $sensor->sensor_id]) ?>

            <?= $this->Html->link(__('Edit'), ['controller' => 'Sensors', 
                'action' => 'edit', $sensor->sensor_id]) ?>

            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sensors', 
                'action' => 'delete', $sensor->sensor_id], 
                ['confirm' => __('Are you sure you want to delete # {0}?', 
                $sensor->sensor_id)]) ?>
        </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>

    <?= $this->Paginator->first('<<first'); ?>
    <?= $this->Paginator->prev('<prev'); ?>
    <?= $this->Paginator->numbers(); ?>
    <?= $this->Paginator->next('next>'); ?>
    <?= $this->Paginator->last('last>>'); ?>
</div>