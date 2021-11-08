<?php 
//ホームコントローラー

//設定を読み込む
include_once('../config.php');
//便利な関数を読み込む
include_once('../util.php');
//ツイート操作モデルを読み込み
include_once('../Models/tweets.php');

// ログインチェック
$user = getUserSession();
if(!$user){
    // ログインしていない
    header('Location:/twitterclone/controllers/sign-in.php');
}

// 表示用の変数
$view_user = $user;

//ツイート一覧
$view_tweets = findTweet($user);

// 画面表示
include_once('../views/home.php');
