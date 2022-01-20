<?php
error_reporting(0);//uyarı gizle
//session başlat
session_start();
//Bütün sessionları yok edelim
session_destroy();
echo 'Merhaba'.$_SESSION['ad'];
echo '<br>';

echo 'IP adres: '.$_SESSION['ip'];
echo '<br>';

echo 'Eposta : '.$_SESSION['mail'];
echo '<br>';

echo 'Tüm session işlemleri <b>session_destroy();</b> fonksiyonu sayesinde silindi.';
 ?>
