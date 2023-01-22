<?php

/*
 * Ödev
Kullanıcıdan sayı değeri alabileceğiniz bir form hazırlayın.
Gelen sayı değerlerinin 3 ile bölümünden kalanın 0 olup olmadığını kontrol eden bir fonksiyon yazın.
Kullanıcıya girilen değerin 3 bölünebilirliğini, bölünemiyorsa bölünebilen ilk değeri kullanıcıya bildirin.
Boş değer gönderilirse değerin boş olmayacağını bildirin.


Örnek:

Girilen Sayı : 4
Girdiğiniz sayı 3'e bölünemez. Bölünebilecek ilk sayı 6'dır.
 *
 */

if (isset($_POST['gonder']))
{
    $sayi = $_POST['sayi'];
    if ($sayi=="") :
        echo "Sayı girin!";
    else :
        echo "Girilen Sayı: ${sayi} <br>";
        if($sayi%3 === 0):
            echo "${sayi} sayısı  3 değerine tam bölünebiliyor.";
        else :
             $sonrakiSayi = $sayi;
                $sonrakiSayi++;
                while ($sonrakiSayi % 3 !== 0) {
                    $sonrakiSayi++;
                }
            echo "${sayi} sayısı 3'e tam bölünemez. Bölünebilecek ilk sayı: ${sonrakiSayi}";
        endif;

    endif;


}


?>

<form action="" method="post">
    <input type="number" name="sayi">
    <button type="submit" name="gonder">Gönder</button>
</form>
