<div>
    <?= $this->Form->create() ?>
    <fieldset>
    <h4>データ登録</h4>
    <form>
        <select name="register">
            <option value="http://localhost/maintenance/sensors/add">sensor portal</option>
            <option value="http://localhost/maintenance/sensormakers/add">sensor maker</option>
            <option value="http://localhost/maintenance/sensorsettings/add">sensor setting</option>
            <option value="http://localhost/maintenance/bridges/add">bridge</option>
            <option value="http://localhost/maintenance/superstructures/add">superstructure</option>
            <option value="http://localhost/maintenance/substructures/add">substructure</option>
            <option value="http://localhost/maintenance/bridgemembers/add">bridge member</option>
            <option value="http://localhost/maintenance/inspections/add">inspection</option>
            <option value="http://localhost/maintenance/deteriorations/add">deterioration</option>
            <option value="http://localhost/maintenance/repairs/add">repair</option>
        </select>
        <input type="button" onclick="top.location.href=register.value" value="登録画面へ">
    </form><br><br>
    
    <h4>データ検索</h4>
    <form>
        <select name="find">
        <option value="http://localhost/maintenance/sensors/find">sensor portal</option>
            <option value="http://localhost/maintenance/sensormakers/find">sensor maker</option>
            <option value="http://localhost/maintenance/sensorsettings/find">sensor setting</option>
            <option value="http://localhost/maintenance/bridges/find">bridge</option>
            <option value="http://localhost/maintenance/superstructures/find">superstructure</option>
            <option value="http://localhost/maintenance/substructures/find">substructure</option>
            <option value="http://localhost/maintenance/bridgemembers/find">bridge member</option>
            <option value="http://localhost/maintenance/inspections/find">inspection</option>
            <option value="http://localhost/maintenance/deteriorations/find">deterioration</option>
            <option value="http://localhost/maintenance/repairs/find">repair</option>
        </select>
        <input type="button" onclick="top.location.href=find.value" value="検索画面へ">
    </form><br><br>
    </fieldset>
    <?= $this->Form->end() ?>
</div>