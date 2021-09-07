<?php
session_destroy();
echo 'Çıkış yapılıyor...';
header("Refresh:1; url=login");
?>