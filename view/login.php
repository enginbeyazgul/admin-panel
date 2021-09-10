<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?=PATH.'view/css/dist/main.css?v='.time()?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
</head>
<body>
    <div class="container">
        <div class="login">
            <img src="https://www.namedya.com/view/img/namedya5b.png" alt="logo">
            <form action="" method="post">
                <div class="baslik">
                    <h3>Admin Paneli</h3>
                </div>
                <input name="user" type="text" class="fontAwesome" name="emailAddress" placeholder="&#xf007;">
                <input name="pass" type="password" class="fontAwesome" name="emailAddress" placeholder="&#xf023;">
                <input type="submit" value="Giriş yap">
            </form>
        </div>
    </div>
</body>
</html>