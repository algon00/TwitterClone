<?php
/**
 * 画像ファイル名から画像のURLを作成する
 * @param string $name 画像ファイル名
 * @param string $type　user/tweet
 * @return string
 */
function buildImagepath(string $name = null,string $type){
    if($type === 'user' && !isset($name)){
        return HOME_URL.'img/icon-default-user.svg';
    }

    return HOME_URL . 'img/img_uploaded/' . $type . '/' . htmlspecialchars($name);
};

/**指定した日からどれだけ経過したかを取得
 * @param string $datetime 日時
 * @return string
 */
function convertToDayTimeAgo(string $datetime){
    $unix = strtotime($datetime);
    $now = time();
    $diff_sec = $now - $unix;
 
    if ($diff_sec < 60) {
        $time = $diff_sec;
        $unit = '秒前';
    } elseif ($diff_sec < 3600) {
        $time = $diff_sec / 60;
        $unit = '分前';
    } elseif ($diff_sec < 86400) {
        $time = $diff_sec / 3600;
        $unit = '時間前';
    } elseif ($diff_sec < 2764800) {
        $time = $diff_sec / 86400;
        $unit = '日前';
    } else {
 
        if (date('Y') !== date('Y', $unix)) {
            $time = date('Y年n月j日', $unix);
        } else {
            $time = date('n月j日', $unix);
        }
        return $time;
    }
 
    return (int)$time . $unit;
}

/**
 * ユーザー情報をセッションに保存
 * @param array $user
 * @return void
 */
function saveUsersession(array $user){
    //セッションを開始していない場合
    if(session_status() === PHP_SESSION_NONE){
        //セッション開始
        session_start();
    }

    $_SESSION['USER'] = $user;
}

/**
 * ユーザー情報をセッションから削除
 * @param array $user
 * @return void
 */
function deleteUsersession(){
    //セッションを開始していない場合
    if(session_status() === PHP_SESSION_NONE){
        //セッション開始
        session_start();
    }

    unset($_SESSION['USER']);
}

/**
 * セッションのユーザー情報を取得
 * 
 * @return array|false
 */

 function getUserSession(){
     //セッションを開始していない場合
    if(session_status() === PHP_SESSION_NONE){
        //セッション開始
        session_start();
    }

    if(!isset($_SESSION['USER'])){
        // セッションにユーザー情報がない場合
        return false;
    }

    $user = $_SESSION['USER'];

    // 画像のファイル名からファイルのURLを取得
    if(!isset($user['image_name'])){
        $user['image_name'] = null;
    }
    $user['image_path'] = buildImagepath($user['image_name'], 'user');

    return $user;
 }
?>