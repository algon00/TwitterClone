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
    <title>通知画面 / titterクローン</title>
    <meta name="discription" content="通知画面です">
</head>
<body　class="home text-center">
    <div class="contaier">
        <?php include_once('./common/side.php'); ?>
        <div class="main">
            <div class="main-header">
                <h1>通知</h1>
            </div>

            <div class="ditch"></div>
            <!--通知リスト-->
            <div class="notification-list">
                <?php if(isset($_GET['case'])) : ?>
                    <p class="no-result">通知はありません。</p>
                <?php else : ?>
                    <div class="notification-item">
                        <div class="user">
                            <img src="<?php echo HOME_URL; ?>img/img_uploaded/user/sample-person.jpg" alt="">
                        </div>
                        <div class="coment">
                            <p>いいねされました。</p>
                        </div>
                    </div>
                    <div class="notification-item">
                        <div class="user">
                            <img src="<?php echo HOME_URL; ?>img/img_uploaded/user/sample-person.jpg" alt="">
                        </div>
                        <div class="content">
                            <p>フォローされました。</p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
    <?php include_once('./common/foot.php'); ?>
</body>
</html>