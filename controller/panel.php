<?php 
if(!isset($_SESSION['admin']))
{
    echo 'yetkisiz erişim';
}
else
{
    require view('panel'); 
}


?>