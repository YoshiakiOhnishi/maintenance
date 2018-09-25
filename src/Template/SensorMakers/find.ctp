<div>
    <?= $this->Form->create() ?>
    <fieldset>
    <legend><?= __('Find') ?></legend>
        <?= $this->Form->input('find'); ?>
        <?= $this->Form->button('Submit') ?>
        <?= $this->Form->end() ?>
    </fieldset>
    <table>
    <thead>
        <tr>
            <th>メーカID</th>
            <th>メーカ名</th>
        </tr>
    </thead>
    <?php if($count){
        echo '検索数：'.$count;
    }
    ?>
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
    
    <?php if($sensormakers){
    echo $this->Paginator->first('<<first');
    echo $this->Paginator->prev('<prev');
    echo $this->Paginator->numbers();
    echo $this->Paginator->next('next>');
    echo $this->Paginator->last('last>>');
    }
    ?>
</div>