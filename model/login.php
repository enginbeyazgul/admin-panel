<?php
$query = $db->prepare('SELECT * FROM adminler WHERE user = :username');
$query->execute([
    'username' => $username
]);
$row = $query->fetch(PDO::FETCH_ASSOC);
?>