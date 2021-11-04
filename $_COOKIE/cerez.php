<?php
//Çerez için değer tanımlandı.
$value = "Deneme içerik";
//Çerezin adı Test, 1 saat süre verildi.
setcookie("Test", $deger, time()+3600);

//Çerez için değer tanımlandı.
$uye = "Gazi";
//Çerezin adı ad, 1 saat süre verildi.
setcookie("ad", $uye, strtotime("+1 hours"));

//Çerezi okuyacak dosyaya link verildi.
echo '<a href="oku.php">Çerezleri Oku </a>';
echo '<a href="cikis.php">Çıkış Yap</a>';

 ?>
