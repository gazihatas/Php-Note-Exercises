<?php 
//Örnek başlığımız
$baslik = 'Bugün havalar soğuyacak';
//Örnek haber açıklamamız
$aciklama = 'Balkanlar üzerinden gelen soğuk hava dalgası bütün yurdu etkileyecek.';
$kelime_sayisi = 6; // özet uzunluğu 6 kelime olsun

echo "<h3>$baslik</h3>";

if(str_word_count($aciklama) > $kelime_sayisi) :
    $kelime = str_word_count($aciklama, 2); 
    /* 2 ile kelimeleri sıralarına gore dizi yaparız. Eğer 1 olsaydı sadece kelimeleri dizi yapacaktı */
    $pos = array_keys($kelime); //kelimelerin sırasını elde eder.
    $ozet = substr($aciklama, 0, $pos[$kelime_sayisi]) . '...';
    echo "<div>$ozet <a href='detay.php?id=12'>Devamını Oku >></a></div>";
else :
    echo "<div>". $aciklama."</div/>";
endif;
?>