<?php
//設定関連を読み込む
include_once('../config.php');
//便利な関数を読み込む
include_once('../util.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include_once('./common/head.php'); ?>
    <title>ログイン画面 / titterクローン</title>
    <meta name="discription" content="会員登録画面です">
</head>
<body class="signup text-center">
    <main class="form-signup">
        <form action="sign-in.php" method="post">
            <img src="<?php echo HOME_URL; ?>img/logo-white.svg" alt="" class="logo-white">
            <h1>ログインする</h1>
            <input type="email" class="form-control" name="email" placeholder="メールアドレス" required autofocus>
            <input type="password" class="form-control" name="password" placeholder="パスワード" required>
            <buttn class="w-100 btn btn-lg" type="submit">ログイン</buttn>
            <p class="mt-3 mb2"><a href="sign-up.php">会員登録する</a></p>
            <p class="mt-2 mb-3">&copy; 2021</p>
        </form>
    </main>
    <?php include_once('./common/foot.php'); ?>
</body>
</html>