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
    <title>つぶやく画面 / titterクローン</title>
    <meta name="discription" content="つぶやく画面です">
</head>
<body　class="home">
    <div class="contaier">
        <?php include_once('./common/side.php'); ?>
        <div class="main">
            <div class="main-header">
                <h1>つぶやく</h1>
            </div>

            <div class="tweet-post">
                <div class="my-icon">
                    <img src="<?php echo HOME_URL; ?>img/img_uploaded/user/sample-person.jpg" alt="">
                </div>
                <div class="input-area">
                    <form action="post.php" method="post" enctype="multipart/form-date">
                        <textarea name="body" placeholder="今どうしてる" maxlenth="140"></textarea>
                        <div class="bottom-area">
                            <div class="mb-0">
                                <input type="file" name="image" class="form-control form-control-sm">
                            </div>
                            <button class="btn" type="sumbit">つぶやく</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="ditch"></div>
        </div>
    </div>
    <?php include_once('./common/foot.php'); ?>
</body>
</html>