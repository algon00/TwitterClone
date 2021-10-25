<?php 
//サインインコントローラー

//設定を読み込む
include_once('../config.php');
//便利な関数を読み込む
include_once('../util.php');
//ユーザーデータ操作モデルを読み込み
include_once('../Models/users.php');

//ログイン結果
$try_login_result = null;

//メールアドレスとパスワードが入力されている場合
if(isset($_POST['email']) && isset($_POST['password'])){
    //ログインチェック実行
    $user = findUserAndCheckPassword($_POST['email'], $_POST['password']);
    var_dump($user);
    //ログインに成功した場合
    if($user){
        //ユーザー情報をセッションに保存
        saveUsersession($user);

        //ホーム画面へ移動
        header('Location:/twitterclone/controllers/home.php');
        exit;
    }else{
        //ログインに失敗した場合
        $try_login_result = false;
    }
    
}

//表示用の変数
$view_try_login_result = $try_login_result;
var_dump($view_try_login_result);

//画面表示
include_once('../views/sign-in.php');