<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Paneli</title>
    <link rel="stylesheet" href="<?=PATH.'view/css/dist/main.css?v='.time()?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>
    <div class="sidebar">
        <div class="user">
            <span><i class="fas fa-user-tie"></i>&nbsp;&nbsp;<?=$_SESSION['admin']?></span>
            <a title="Çıkış Yap" href="logout"><i class="fas fa-sign-out-alt"></i></a>
        </div>
        <div class="brand">
            <img src="https://www.namedya.com/view/img/namedya5b.png" alt="logo">
        </div>
        <ul class="side-menu">
            <li>
                <a href="panel"><i class="fas fa-tachometer-alt"></i>&nbsp;&nbsp;Anasayfa Düzenle</a>
            </li>
            <li>
                <a href="hakkimizda"><i class="fas fa-address-card"></i>&nbsp;&nbsp;Hakkımımızda Düzenle</a>
            </li>
            <li>
                <a href="ekip"><i class="fab fa-teamspeak"></i>&nbsp;&nbsp;Ekip Düzenle</a>
            </li>
            <li>
                <a href="ayarlar"><i class="fas fa-cog"></i>&nbsp;&nbsp;Site Ayarları</a>
            </li>
        </ul>
    </div>