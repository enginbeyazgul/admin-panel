<?php
ob_start();
session_start();
// veri tabanı bağlantısı yapıldı
try{$db = new PDO('mysql:host=localhost;dbname=namedya','root','');}
catch (PDOException $e) {$e -> getMessage();}
// fonksiyonlar sayfası dahil edildi
require 'functions.php';
// adres cubuğu parçalandı ve diziye atandı "print_r($url);" ile görüntülenebilir
$url = explode('/',$_SERVER['REQUEST_URI']);
// $url dizisindeki 0. ve 1. eleman silindi
unset($url[0],$url[1]);
// index numaraları sıfırlandı
$url = array_values($url);
// $url[0] değişkenindeki veri tanımlı ve boşluksa
if(isset($url[0]) && $url[0] == trim(""))
{
    $url[0] = 'login';
}
if(file_exists(controller($url[0])))
{
    require controller($url[0]);
}

?>
