<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kdv ve Kargo durumlarına göre Hesap</title>
</head>
<body>

 <?php 

    $urun_adet  = 1;
    $urun_fiyat = 10.00;
    $urun_kdv   = 18;
    $urun_kargo = 5.00;
    $urun_toplam= $urun_fiyat * $urun_adet;

    if ($urun_kdv > 0) {
        $kdv_tutar = $urun_toplam * ($urun_kdv / 100);
    } else {
        $kdv_tutar = 0;
    }


    if ($urun_kargo > 0) {
        $toplam = $urun_toplam + $kdv_tutar + $urun_kargo;
        $kargo  = "Kargo +";
    } else {
        $toplam = $urun_toplam + $kdv_tutar;
        $kargo  = "Kargo Ücretsiz.";
    }

    $toplam = number_format($toplam, 2, ',', '.');
    echo "<div> $urun_adet adet Resim Çerçevesi <em> $urun_toplam TL</em>";
    echo "<br> <b> $kargo KDV Dahil</b> Toplam: <b>$toplam</b> TL </div>";
 
 ?>
    
</body>
</html>