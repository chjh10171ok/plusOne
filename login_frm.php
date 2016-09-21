<?php
// 載入設定檔案
require_once("/inc/config.php");

// 載入Header
require_once(BASE_ROOT . "/inc/header.php");
?>

<!-- login form -->
<div class="page-header"><h1>登入...</h1></div>
<!-- <div class="jumbotron"> -->
<nav class="navbar navbar-default" role="navigation">
    <form class="navbar-form navbar-left" method="POST" action="<?php echo WEB_ROOT; ?>/login.php">
        <div class="input-group">
            <span class="input-group-addon">帳號</span>
            <input type="text" name="account" id="account" class="form-control" placeholder="帳號..."/>
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">密碼</span>
            <input type="password" name="pwd" id="pwd" class="form-control" placeholder="密碼..."/>
        </div>
        <br>
        <div class="btn-group" role="group">
            <button type="submit" class="btn btn-success">登入</button>
        </div>
    </form>
</nav>
<!-- </div> -->

<?php
// 載入Footer
require_once(BASE_ROOT . "/inc/footer.php");
?>