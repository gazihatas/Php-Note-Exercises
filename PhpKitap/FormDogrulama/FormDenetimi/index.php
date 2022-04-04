<?php 
$hata ='';
//Form POST metodu ile gönderilmiş ise bilgileri alalım ve kontrol edelim
$ad = $_POST ? trim($_POST['ad']) : ''; //sağ ve soldaki boşlukları silelim
$ad = strip_tags($ad); //Bilgilerde HTML varsa temizleyelim
$email = $_POST ? trim($_POST['email']) : '';
$cinsiyet = isset($_POST['cinsiyet']) ? $_POST['cinsiyet'] : '';

//Kullanıcı telefonunu 053 99 87 99 gibi boşluklu girmiş olabilir
$tel = $_POST ? str_replace(' ','',$_POST['tel']) : ''; //boşlukları sil
$tel = ltrim($tel, '0'); //telefon numarasının başındaki 0 silelim
$dil = isset($_POST['dil']) ? $_POST['dil'] : '';
$zaman = $_POST ? $_POST['zaman'] : '';

//Kullanıcının en azından adı ve soyadı arasında bir boşluk olmalı
if (empty($ad) || (strpos($ad, ' ')===false) ) :
    $hata .='Adınızı ve Soyadınızı yazın  <br>';
endif;

//Kullanıcının eposta adresi doğrumu kontrol edelim
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) :
    $hata .='Eposta adresinizi doğru yazın<br>';
endif;

//Kullanıcı  cinsiyetini belirlemiş mi ? kontrol edelim
if (empty($cinsiyet)) :
    $hata .='Cinsiyetinizi seçin<br>';
endif;

//telefon numarasını sayısal olmalı ve 10 rakamdan küçük veya büyük olmamalı
//(strlen($tel) == 10) koşulu her iki strlen denetimini yapabilir.
if (!is_int($tel) && (strlen($tel) < 10) || (strlen($tel) > 10) ) :
    $hata .='Telefonunuzu doğru yazın<br>';
endif;

//Kullanıcı kurs alacağı seçenekten en az birisini seçmiş mi Kontrol edelim
if (empty($dil)) :
    $hata .='Kurs dilini seçin<br>';
endif;

//Kullanıcı kurs zamanını seçmiş mi  Kontrol edelim
if (empty($zaman)) :
    $hata .='Kurs zamanını seçin<br>';
endif;

//Hata durumunda kullanıcının seçtiği seçenekleri tekrar işaretleyelim
//Kullanıcı checkbox ve radio seçeneklerini işaretlemiş ise gösterelim
$erkek = ($cinsiyet == "Erkek") ? 'checked' : '';
$kadin = ($cinsiyet == "Kadın") ? 'checked' : '';
$ing = !empty($dil[0]) && ($dil[0] == "ingilizce") ? 'checked' : '';
$alm = !empty($dil[1]) && ($dil[1] == "almanca") ? 'checked' : '';

//Kullanıcı select,option, seçeneklerini seçmiş ise gösterelim
$sabah = ($zaman == "Sabah") ? 'selected' : '';
$aksam = ($zaman == "Aksam") ? 'selected' : '';
$hata = $_POST ? $hata : '';
$form_kodu = <<<SABLON
<h3>Kurs Başvuru Formu</h3>
$hata
<style>.sol{float:left; width:100px} form{width: 300px}</style>
<form action="" method="POST">

    <div class="sol">Ad Soyad *</div>
    <div><input type="text" name="ad" value="$ad"></div>

    <div class="sol">Eposta *</div>
    <div><input type="text" name="email" value="$email"></div>

    <div class="sol">Cinsiyet *</div>
    <div>
        <input type="radio" name="cinsiyet" $erkek value="Erkek">Erkek
        <input type="radio" name="cinsiyet" $kadin value="Kadın">Kadın
    </div>
    
    <div class="sol">Cep Telefonu *</div>
    <div><input type="text" name="tel" value="$tel"></div>
    
    <div class="sol">Kurs Seçin *</div>
    <div>
        <input type="checkbox" name="dil[0]" $ing value="ingilizce">İngilizce
        <input type="checkbox" name="dil[1]" $alm value="almanca">Almanca
    </div>
    
    <div class="sol">Kurs Zamanı *</div>
    <div>
        <select name="zaman">
            <option value=""></option>
            <option value="Sabah" $sabah>Sabah</option>
            <option value="Aksam" $aksam>Akşam</option>
        </select>
    </div>
    
    <input type="submit" value="Gönder">
</form>
SABLON;

//POST metodu yoksa formu kullanıcıya gösterelim
if (!$_POST) :
    echo $form_kodu; //formu tekrar ekrana yazalım.
endif;

/*
 * Formda zorunlu alanlarda hata varsa formu yeniden gösterelim
 * $hata değişkeni boş değilse ve POST varsa hata var demrktir.
 */

if ($hata != '' && $_POST) :
    echo $form_kodu; //formu ekrana yazalım
    /*
     * Hata yok ve POST metodu varsa herşey yolunda demektir, bilgiler veritabanına kaydedilir yada eposta ile gönderilir.
     */
elseif ($hata == '' && $_POST) :
    echo "Başvurunuz alınmıştır. Teşekkür ederiz.";
endif;

?>