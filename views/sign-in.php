<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/logo-twitterblue.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="./css/style.css" rel="stylesheet">
    <title>ログイン画面 / titterクローン</title>
    <meta name="discription" content="会員登録画面です">
</head>
<body class="signup text-center">
    <main class="form-signup">
        <form action="sign-in.php" method="post">
            <img src="./img/logo-white.svg" alt="" class="logo-white">
            <h1>ログインする</h1>
            <input type="email" class="form-control" name="email" placeholder="メールアドレス" required autofocus>
            <input type="password" class="form-control" name="password" placeholder="パスワード" required>
            <buttn class="w-100 btn btn-lg" type="submit">ログイン</buttn>
            <p class="mt-3 mb2"><a href="sign-up.php">会員登録する</a></p>
            <p class="mt-2 mb-3">&copy; 2021</p>
        </form>
    </main>
</body>
</html>