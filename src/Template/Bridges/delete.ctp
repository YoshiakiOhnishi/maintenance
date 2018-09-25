<div>
    <?= $this->Form->create($sensor) ?>
    <fieldset>
    <legend><?= __('Delete') ?></legend>
        <p>SISコード: <?= h($sensor->sensor_id); ?></p>
        <p>製品名称: <?= h($sensor->sensor_name); ?></p>
        <p>型名／型番: <?= h($sensor->model_name_number); ?></p>
        <p>メーカID: <?= h($sensor->maker_id); ?></p>
        <p>適用分野: <?= h($sensor->application_areas); ?></p>
        <p>センサ種類: <?= h($sensor->sensor_type); ?></p>
        <p>販売開始日: <?= h($sensor->sales_start_date); ?></p>
        <p>NETIS: <?= h($sensor->NETIS); ?></p>
        <p>測定方式: <?= h($sensor->measurement_method); ?></p>
        <p>測定範囲: <?= h($sensor->measurement_range); ?></p>
        <p>精度: <?= h($sensor->accuracy); ?></p>
        <p>分解能: <?= h($sensor->resolution); ?></p>
        <p>性能: <?= h($sensor->ability); ?></p>
        <p>接点入出力: <?= h($sensor->contact_input_output); ?></p>
        <p>インターフェース: <?= h($sensor->interface); ?></p>
        <p>出力: <?= h($sensor->output); ?></p>
        <p>外形寸法: <?= h($sensor->external_dimensions); ?></p>
        <p>電源: <?= h($sensor->power_source); ?></p>
        <p>重量: <?= h($sensor->weight); ?></p>
        <p>消費電力: <?= h($sensor->power_consumption); ?></p>
        <p>使用温度範囲: <?= h($sensor->temperature_range); ?></p>
        <p>耐環境性: <?= h($sensor->environmental_resistance); ?></p>
        <p>製品情報ＵＲＬ: <?= h($sensor->sensor_info_urlability); ?></p>
        <p>カタログＵＲＬ: <?= h($sensor->catalog_url); ?></p>
        <p>利用事例ＵＲＬ: <?= h($sensor->use_case_url); ?></p>
        <p>関連論文ＵＲＬ: <?= h($sensor->paper_url); ?></p>
        <p>取扱説明書ＵＲＬ: <?= h($sensor->instruction_url); ?></p>
        <p>その他関連資料ＵＲＬ: <?= h($sensor->document_url); ?></p>
        <p>問合せ先電話番号: <?= h($sensor->phone_number); ?></p>
        <p>問合せ先メールアドレス: <?= h($sensor->mail); ?></p>

   </fieldset>
    <?= $this->Form->button('Submit') ?>
    <?= $this->Form->end() ?>
</div>