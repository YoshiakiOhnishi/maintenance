<div class="row">
    <h4><?= __('SISコード') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->sensor_id)); ?>
</div>
<div class="row">
    <h4><?= __('製品名称') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->sensor_name)); ?>
</div>
<div class="row">
    <h4><?= __('型名／型番') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->model_name_number)); ?>
</div>
<div class="row">
    <h4><?= __('メーカID') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->maker_id)); ?>
</div>
<div class="row">
    <h4><?= __('適用分野') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->application_areas)); ?>
</div>
<div class="row">
    <h4><?= __('センサ種類') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->sensor_type)); ?>
</div>
<div class="row">
    <h4><?= __('販売開始日') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->sales_start_date)); ?>
</div>
<div class="row">
    <h4><?= __('NETIS') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->NETIS)); ?>
</div>
<div class="row">
    <h4><?= __('測定方式') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->measurement_method)); ?>
</div>
<div class="row">
    <h4><?= __('測定範囲') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->measurement_range)); ?>
</div>
<div class="row">
    <h4><?= __('精度') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->accuracy)); ?>
</div>
<div class="row">
    <h4><?= __('分解能') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->resolution)); ?>
</div>
<div class="row">
    <h4><?= __('性能') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->ability)); ?>
</div>
<div class="row">
    <h4><?= __('接点入出力') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->contact_input_output)); ?>
</div>
<div class="row">
    <h4><?= __('インターフェース') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->interface)); ?>
</div>
<div class="row">
    <h4><?= __('出力') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->output)); ?>
</div>
<div class="row">
    <h4><?= __('外形寸法') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->external_dimensions)); ?>
</div>
<div class="row">
    <h4><?= __('電源') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->power_source)); ?>
</div>
<div class="row">
    <h4><?= __('重量') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->weight)); ?>
</div>
<div class="row">
    <h4><?= __('消費電力') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->power_consumption)); ?>
</div>
<div class="row">
    <h4><?= __('使用温度範囲') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->temperature_range)); ?>
</div>
<div class="row">
    <h4><?= __('耐環境性') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->environmental_resistance)); ?>
</div>
<div class="row">
    <h4><?= __('製品情報ＵＲＬ') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->sensor_info_url)); ?>
</div>
<div class="row">
    <h4><?= __('カタログＵＲＬ') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->catalog_url)); ?>
</div>
<div class="row">
    <h4><?= __('利用事例ＵＲＬ') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->use_case_url)); ?>
</div>
<div class="row">
    <h4><?= __('関連論文ＵＲＬ') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->paper_url)); ?>
</div>
<div class="row">
    <h4><?= __('取扱説明書ＵＲＬ') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->instruction_url)); ?>
</div>
<div class="row">
    <h4><?= __('その他関連資料ＵＲＬ') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->document_url)); ?>
</div>
<div class="row">
    <h4><?= __('問合せ先電話番号') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->phone_number)); ?>
</div>
<div class="row">
    <h4><?= __('問合せ先メールアドレス') ?></h4>
    <?= $this->Text->autoParagraph(h($sensor->mail)); ?>
</div>
