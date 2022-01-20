<?php
//1 saat içerinde kaydedilen çerezleri okuyup görüntüleyebiliriz.

error_reporting(0); //Uyarıları gizle.
//Test adlı çerezi okuyalım
echo "Test: ".$_COOKIE['Test'];
echo '<br>';
//ad adlı çerezi okuyalım.
echo 'Uye: '. $_COOKIE['ad'];

 ?>
