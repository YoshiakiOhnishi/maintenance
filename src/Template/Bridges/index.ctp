<div>
    <h3>Bridge List</h3>
    <table>
    <thead>
        <tr>
            <th>橋梁ID</th>
            <th>橋梁名</th>
            <th>橋分類</th>
            <th>橋種</th>
            <th>構造種別</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($bridges as $bridge): ?>
        <tr>
        <td><?= h($bridge->bridge_id) ?></td>
        <td><?= h($bridge->bridge_name) ?></td>
        <td><?= h($bridge->bridge_classification) ?></td>
        <td><?= h($bridge->bridge_type) ?></td>
        <td><?= h($bridge->structure_type) ?></td>
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