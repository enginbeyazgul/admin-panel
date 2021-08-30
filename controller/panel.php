<?php 
if(!isset($_SESSION['user']))
{
    echo 'yetkisiz erişim';
}
else
{
    require view('panel'); 
}


?>