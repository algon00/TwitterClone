<?php 
//ポストコントローラー

//　設定を読み込む
include_once('../config.php');
//　便利な関数を読み込む
include_once('../util.php');
//　ユーザーデータ操作モデルを読み込み
include_once('../Models/users.php');

// ツイートデータ操作モデルを読み込む
include_once('../Models/tweets.php');

// ログインチェック
$user = getUserSession();
if(!$user){
    // ログインしていない
    header('Location:/TwitterClone/Controllers/sign-in.php');
}

// ツイートがある場合
if (isset($_POST['body'])) {
    $image_name = null;
    if (isset($_FILES['image']) && is_uploaded_file($_FILES['image']['tmp_name'])) {
        $image_name = uploadImage($user, $_FILES['image'], 'tweet');
    }

    $data = [
        'user_id' => $user['id'],
        'body' => $_POST['body'],
        'image_name' => $image_name,
    ];

    // つぶやき投稿
    if(createtweet($data)){
        // ホーム画面に移行
        header('Location:/twitterclone/Controllers/home.php');
        exit;
    }
}

// 表示用の変数
$view_user = $user;

// 画面表示
include_once('../Views/post.php');