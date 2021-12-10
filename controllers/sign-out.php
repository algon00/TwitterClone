<?php
//サインアウトコントローラー

//設定を読み込む
include_once('../config.php');
//便利な関数を読み込む
include_once('../util.php');

// ユーザー情報をセッションから削除
deleteUsersession();

// ログイン画面に移動
header('Location:/TwitterClone/Controllers/sign-in.php');
exit;

