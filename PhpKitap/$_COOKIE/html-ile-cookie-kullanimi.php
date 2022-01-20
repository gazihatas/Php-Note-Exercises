<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
  $deger = "Deneme İçerik";
  setcookie("Test", $deger, time()+3600);
  echo '<a href="oku.php">Cerezi Oku</a>';
  echo $_COOKIE['Test'];
   ?>

   <p>
     Eğer HTML ile çerez kullanmayı düşünüyorsanız
     programın en başında <mark>ob_start(); ve en sonunda ob_end_flush();</mark> fonksiyonarını yazmanız gerekir.
     Bu fonksiyon header a ait bilgiyi çerez atandıktan sonra bizim için yapar.
   </p>

   <?php
    setcookie("urunler", "Elma", time()+3600, "/sepet/", ".test.com", 1, 1);
    ?>
    <p>
      setcookie("urunler", "Elma", time()+3600, "/sepet/", ".test.com", 1, 1);
      <br>
      test.com/sepet adresine göre atanır ve sadece sepet dizinindeki dosyalardan okunabilir.
      <br>
      Bu çerez sadece PHP ile okunabilir. Javascriptler erişemez.
      <br>
      HTTPS iptal etmek için sondan ikinci 1 değeri yerine false yada 0 yazılmalıdır.
    </p>

  </body>
</html>
<?php ob_end_flush(); ?>
