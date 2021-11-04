<?php
//session başlatalım
session_start();
//ismi ad olan sessionu okuyalım
echo $_SESSION['ad'];
echo '<br>';

//ismi ip olan sessionu okuyalım
echo $_SESSION['ip'];
echo '<br>';

//ismi mail olan sessionu okuyalımç
echo $_SESSION['mail'];

 ?>
