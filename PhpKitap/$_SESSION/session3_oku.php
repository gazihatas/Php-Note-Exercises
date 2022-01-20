<?php
error_reporting(0);//uyarı gizle
//sessionu başlatın
session_start();
//ad sessionunu yok edelim
unset($_SESSION['ad']);

//ismi ad olan sessionu okuyalım
echo 'Merhaba '.$_SESSION['ad'];

 ?>
