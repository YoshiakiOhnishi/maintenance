<div>
    <?= $this->Form->create($sensor) ?>
    <fieldset>
    <legend><?= __('Add Sensor') ?></legend>
    <?php
        echo $this->Form->input('sensor_id', ['type' => 'text', 'label' => 'センサID']);
        echo $this->Form->input('sensor_name', ['type' => 'text', 'label' => 'センサ名']);
        echo $this->Form->input('model_name_number', ['type' => 'text', 'label' => '型名/型番']);
        echo $this->Form->input('maker_id', ['type' => 'text', 'label' => 'メーカID']);
        echo $this->Form->input('application_areas', ['type' => 'text', 'label' => '適用分野']);
        echo $this->Form->input('sensor_type', ['type' => 'text', 'label' => 'センサ種類']);
        echo $this->Form->input('sales_start_date', [ 'label' => '販売開始日']);
        echo $this->Form->input('NETIS', ['type' => 'text', 'label' => 'NETIS']);
        echo $this->Form->input('measurement_method', ['type' => 'text', 'label' => '測定方式']);
        echo $this->Form->input('measurement_range', ['type' => 'text', 'label' => '測定範囲']);
        echo $this->Form->input('accuracy', ['type' => 'text', 'label' => '精度']);
        echo $this->Form->input('resolution', ['type' => 'text', 'label' => '分解能']);
        echo $this->Form->input('ability', ['type' => 'text', 'label' => '性能']);
        echo $this->Form->input('contact_input_output', ['type' => 'text', 'label' => '接点入出力']);
        echo $this->Form->input('interface', ['type' => 'text', 'label' => 'インタフェース']);
        echo $this->Form->input('output', ['type' => 'text', 'label' => '出力']);
        echo $this->Form->input('external_dimensions', ['type' => 'text', 'label' => '外形寸法']);
        echo $this->Form->input('power_source', ['type' => 'text', 'label' => '電源']);
        echo $this->Form->input('weight', ['type' => 'text', 'label' => '重量']);
        echo $this->Form->input('power_consumption', ['type' => 'text', 'label' => '消費電力']);
        echo $this->Form->input('temperature_range', ['type' => 'text', 'label' => '使用温度範囲']);
        echo $this->Form->input('environmental_resistance', ['type' => 'text', 'label' => '耐環境性']);
        echo $this->Form->input('sensor_info_url', ['type' => 'text', 'label' => '製品情報URL']);
        echo $this->Form->input('catalog_url', ['type' => 'text', 'label' => 'カタログURL']);
        echo $this->Form->input('use_case_url', ['type' => 'text', 'label' => '利用事例URL']);
        echo $this->Form->input('paper_url', ['type' => 'text', 'label' => '関連論文URL']);
        echo $this->Form->input('instruction_url', ['type' => 'text', 'label' => '取扱説明書URL']);
        echo $this->Form->input('document_url', ['type' => 'text', 'label' => 'その他関連資料URL']);
        echo $this->Form->input('phone_number', ['type' => 'text', 'label' => '問い合わせ先電話番号']);
        echo $this->Form->input('mail', ['type' => 'text', 'label' => '問い合わせ先メールアドレス']);

    ?>
    </fieldset>
    <?= $this->Form->button('Submit') ?>
    <?= $this->Form->end() ?>
</div>