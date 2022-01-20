<?php
//sessionu başlatalım
session_start();

//ismi ad olan sessiona değer verelim
$_SESSION['ad']='Gazi';

//Bu öylesine bir satır olsun
echo 'Session ataması yapıyoruz <br>';
 ?>

 <a href="session1_oku.php">Oku</a>
