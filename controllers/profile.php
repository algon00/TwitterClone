<?php
// 設定関連を読み込む
include_once('../config.php');
// 便利な関数を読み込む
include_once('../util.php');

// ログインチェック
$user = getUserSession();
if(!$user){
    // ログインしていない
    header('Location:/TwitterClone/Controllers/sign-in.php');
}

// 表示用の変数
$view_user = $user;

// ツイート一覧
$view_tweets = [
    [
        'user_id' => 1,
        'user_name' => 'taro',
        'user_nickname' => '太郎',
        'user_image_name' => 'sample-person.jpg',
        'tweet_body' => '今プログラミングをしています。',
        'tweet_image_name' => null,
        'tweet_created_at' => '2021-03-15 14:00:00',
        'like_id' => null,
        'like_count' => 0,
    ],
];

// 画面表示
include_once('../Views/profile.php');