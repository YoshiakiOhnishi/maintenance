<div>
    <h3>ログイン</h3>
    <main>
    <?= $this->Form->create() ?>
    <fieldset>
    <?php
        echo $this->Form->input('name', array('style'=>'width:300px; height:30px;',"label" => "ユーザ名"));
        echo $this->Form->input('password', array('style'=>'width:300px; height:30px;',"label" => "パスワード"));
        echo $this->Form->button('ログイン');
    ?>
    <br>
    <a href="http://localhost/maintenance/users/register">ユーザ登録へ</a>
    </fieldset>
    <?= $this->Form->end() ?>
    </main>
</div>