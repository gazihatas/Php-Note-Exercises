<?php
//sessionu başlat
session_start();
//ad sessionuna değer verelim
$_SESSION['ad'] = 'Gazi HATAŞ';

//ip sessionuna değer verelim
$ip = $_SERVER['REMOTE_ADDR'];
$_SESSION['ip'] = $ip;

//mail sessionuna değer verelim
$_SESSION['mail']='test@test.com';
//bir mesaj yazdıralım
echo 'Sessionlar atandı <br>';
 ?>

 <a href="session4_oku.php">Oku</a>
