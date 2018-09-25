<div>
<?php if(empty($_POST["name"])): ?>
    <main>
    <h3>ユーザ登録</h3>
    <?= $this->Form->create($user) ?>
    <fieldset>
    <?php
        echo $this->Form->input('name', array('type'=>'text;','style'=>'width:300px; height:30px;',"label" => "名前"));
        echo $this->Form->input('password', array('style'=>'width:300px; height:30px;',"label" => "パスワード"));
    ?>
    <?= $this->Form->button('登録') ?>
    <?= $this->Form->end() ?>
    </fieldset>
    </main>
    <!--<aside>
        <h6>もうツイッターに登録していますか？<a href="http://localhost/cakephp/users/login">ログイン</a></h6>
    </aside>-->
    <?php elseif(!empty($_POST["name"])): ?>
    <h3>ユーザ登録を完了しました</h3>
    <?= $this->Form->create() ?>
    <fieldset>
    <?php
        echo $_POST["name"]."さんのユーザ登録を完了しました．";
        echo nl2br("\n");
        echo "ログインをクリックしてログインしてください．";
        echo nl2br("\n");
    ?>
    <button type="button">
    <a href="http://localhost/maintenance/users/login">ログイン</a>
    </button>
    </fieldset>
    <?= $this->Form->end() ?>
    <?php endif; ?>
</div>