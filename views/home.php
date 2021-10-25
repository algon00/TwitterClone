<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include_once('../views/common/head.php'); ?>
    <title>ホーム画面 / titterクローン</title>
    <meta name="discription" content="ホーム画面です">
</head>
<body　class="home">
    <div class="contaier">
        <?php include_once('../views/common/side.php'); ?>
        <div class="main">
            <div class="main-header">
                <h1>ホーム</h1>
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
            <?php if(empty($view_tweets)) : ?>
                <p class="p-3">ツイートがありません</p>
            <?php else :?>
                <div class="tweet-list">
                    <?php foreach($view_tweets as $view_tweets):?>
                　　　　 <?php include('../views/common/tweet.php'); ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php include_once('../views/common/foot.php'); ?>
</body>
</html>