<div>
    <?= $this->Form->create($bridge) ?>
    <fieldset>
    <legend><?= __('Add Bridge') ?></legend>
    <?php
        echo $this->Form->input('bridge_id', ['type' => 'text', 'label' => '橋梁ID']);
        echo $this->Form->input('bridge_name', ['type' => 'text', 'label' => '橋梁名']);
        echo $this->Form->input('bridge_name_ruby', ['type' => 'text', 'label' => 'ふりがな']);
        echo $this->Form->input('location_start', ['type' => 'text', 'label' => '所在地（自）']);
        echo $this->Form->input('location_end', ['type' => 'text', 'label' => '所在地（至）']);
        echo $this->Form->input('route_name', ['type' => 'text', 'label' => '路線名']);
        echo $this->Form->input('road_type',  ['type' => 'text', 'label' => '道路種別']);
        echo $this->Form->input('bridge_classification', ['type' => 'text', 'label' => '橋分類']);
        echo $this->Form->input('bridge_type', ['type' => 'text', 'label' => '橋種']);
        echo $this->Form->input('structure_type', ['type' => 'text', 'label' => '構造種別']);
        echo $this->Form->input('structure_system', ['type' => 'text', 'label' => '構造システム']);
        echo $this->Form->input('structure_diagram', ['type' => 'text', 'label' => '構造図']);
        echo $this->Form->input('bridge_length', ['type' => 'text', 'label' => '橋長']);
        echo $this->Form->input('bridge_area', ['type' => 'text', 'label' => '橋面積']);
        echo $this->Form->input('bridge_width', ['type' => 'text', 'label' => '全幅員']);
        echo $this->Form->input('roadway_width', ['type' => 'text', 'label' => '車道幅']);
        echo $this->Form->input('sidewalk_width', ['type' => 'text', 'label' => '歩道幅']);
        echo $this->Form->input('wheel_guard_width', ['type' => 'text', 'label' => '地覆幅']);
        echo $this->Form->input('design_live_load', ['type' => 'text', 'label' => '設計活荷重']);
        echo $this->Form->input('design_horizontal_seismic_coefficient', ['type' => 'text', 'label' => '設計震度（垂直）']);
        echo $this->Form->input('design_vertical_seismic_coefficient', ['type' => 'text', 'label' => '設計震度（水平）']);
        echo $this->Form->input('specifications', ['type' => 'text', 'label' => '適用示方書']);
        echo $this->Form->input('in-service_date', ['type' => 'text', 'label' => '供用年月日']);
        echo $this->Form->input('the-number-of-span', ['type' => 'text', 'label' => '径間数']);
        echo $this->Form->input('manager_id', ['type' => 'text', 'label' => '管理者ID']);

    ?>
    </fieldset>
    <?= $this->Form->button('Submit') ?>
    <?= $this->Form->end() ?>
</div>