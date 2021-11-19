<?php
// 設定関連を読み込む
include_once('../config.php');
// 便利な関数を読み込む
include_once('../util.php');

// ログインチェック
$user = getUserSession();
if(!$user){
    // ログインしていない
    header('Location:/twitterclone/controllers/sign-in.php');
}

// 表示用の変数
$view_user = $user;

// 画面表示
include_once('../views/notification.php');