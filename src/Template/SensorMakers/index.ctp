<div>
    <h3>Sensor Maker List</h3>
    <table>
    <thead>
        <tr>
            <th>メーカID</th>
            <th>メーカ名</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($sensormakers as $sensormaker): ?>
        <tr>
        <td><?php 
            $number = $this->Number->format($sensormaker->maker_id);
            $turn_number = str_replace(',','',$number); 
            echo $turn_number;
            ?>
        </td>
    <td><?= __($sensormaker->name) ?></td>
    <td class="actions">
        <?= $this->Html->link(__('List'), 
            ['action' => 'list', $sensormaker->maker_id]) ?>
        <?= $this->Html->link(__('Edit'), 
            ['action' => 'edit', $sensormaker->maker_id]) ?>
        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', 
            $sensormaker->maker_id], 
            ['confirm' => __('Are you sure you want to delete # {0}?',
             $sensormaker->maker_id)]) ?>
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