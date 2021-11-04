<?php

/*
Çerez Okuma değişkeni ($_COOKIE)

ÇEREZLER NEDEN KULLANILIR?
 -> Çerezlerin genelde  Üyelik ve Alış veriş sistemlerinde sıkça kullanılır.
 -> Bir siteye kullanıcı adı ve şifre ile giriş yaptığınızda bir sonraki girişinizde
 sizi otomatik olarak kabul eden sistemler çerezlerle yapılır.
 -> Kullanıcı bilgileri(şifre hariç) küçük bir text dosyasında kullanıcının bilgisayarında
 saklanır ve üye bilgileri bu dosyadan okunarak kullanıcıya sunulur.
 -> Alışveriş sitelerinde sepet bilgilerini ve kullanıcının incelediği ürün bilgileri çerez
 olarak saklanır ve alış veriş süresince takip edilir ve kullanılır.

ÇEREZLERİN KULLANIMI

#=> $_COOKIE değişkeni atanmış bir çerezi okumak için kullanılır.
#=> Çerezler setcookie() fonksiyonu ile atanır.

setcookie(anahtar, değer, süre, yol, domain, https, http);
setcookie(key, value, path, time, domain, https, http);

Not: Çerez ataması öncesinde hiçbir şey ekrana yazdırılmaz.
Aksi taktirde çerez ataması yapılmaz ve PHP header üst bilgi uyarısı verecektir.
Parametreler aşağıdaki gibidir.

key(anahtar) => Çerezin ismi.
value(değer) => Çerezin değeri. Bu değer istemcinin bilgisayarında saklanır.
  Güvenlik nedeniyle şifre vb özel bilgiler değer olarak verilmemelidir.
time(süre) => Çerezin zaman aşımına uğrama süresi. Çerezin zaman aşımına uğrayacağı
  süreyi saniye cinsinden ekleyerek verilen değerdir.
  Örneğin time()+60*60*24*30 ile çerez 30 gün sonra zaman aşımına uğrar.
  Eğer 0 veya bir şey belirtmezse, çerez oturumun sonunda(tarayıcı kapandığında)
  zaman aşımına uğrar
path(yol) => Çerezin üzerinde etkin olacağı sunucudaki yol.
    '/' belirtilirse çerez alan'ın tamamında kullanılabilir olacaktır.
    Eğer '/music' belirtilirse, çerez sadece /music/ dizininde ve  /music/mp3/
    gibi alt dizinlerde kullanılabilir olacaktır.
    Ön tanımlı değer çerezin çerezin atandığı içinde bulunan dizindir.
domain => Çerezin kullanılabileceği alan adını tanımlar. Çerezi yahoo.com ve alt
  alanlarında kullanılabilir yapmak için değer olarak '.yahoo.com' belirtmelisiniz.
  Değer olarak, 'mail.yahoo.com' olarak verilirse çerez sadece mail alt alanında
  kullanılabilir olacaktır.
https => Çerezin istemciye güvenli bir HTTPS(Hyper Text Transfer Protocol Security)
  bağlantısı üzerinden mi aktarılması gerektiğini belirtmek için kullanılır.
  TRUE belirtildiği taktirde, çerez sadece güvenli bağlantı mevcutsa gönderilecektir.
  FALSE ön tanımlı değerdir.
http => TRUE olduğu taktirde çerez sadece HTTP protokolü üzerinden erişilebilir olacaktır.
  Yani çerez, JavaScript gibi betik deilleri tarafından erişilebilir olmayacaktır.
  Bu ayarlama, XSS saldırılarıyla kimlik hırsızlığı riskini etkin şekilde azaltmaya
  (tarayıcılar tarafından desteklenmese de ) yardımcı olabilir.
  Değer olarak  TRUE veya FALSE belirtilebilir.



*/
// key(Atanacak çerezin adı), value(Atanan bilgi), time(Geçerli olacağı süre)
setcookie("anahtar", "deger", time()+3600);

// Atanmış bir çerezin key(anahtar) kullanılarak value(değer) okunur.
echo $_COOKIE['anahtar'];

//Örnek -> $_COOKIE oluşturma ve okuma
$value = 'Deneme';
setcookie("Test", $value); //çerezi web tarayıcısına bildirir yani çerezi oluşturduk
echo $_COOKIE['Test']; // Atanan çerezin değerinş okumak içinecho  $_COOKIE['Test']; süper global değişkeni kullanırız.
/*
Bu çereze bir süre ataması yapıldağı için tarıyıcı kapatıldığında çerezin süresi dolacaktır.
*/

/*
ÇEREZ ZAMAN HESAPLAMASI

Çerez atamalarında zaman saniye olarak verilir.
Bu nedenle zaman hesaplaması basitçe 1 dakika 60 saniye ise 60 dakika 1 saat eder.
Aşağıdaki hesaplama ile zamanı istediğimiz bir süre içim hesaplayabiliriz.

1 dakika = 60 saniye
1 saat = 3600 saniye
1 gün 24 saat olduğuna göre 60*60*24 = 86400 saniye eder.
1 ay 30 gün olduğuna göre 60*60*24*30 = 1 ay elde edilir.
1 yıl 365 gün olduğuna göre  60*60*24*365 = 1 yıl elde edilir.
*/

//Örnek -> $_COOKIE süre atamaları
setcookie("Zaman", "30 gün normal cookie", time()+(60*60*24*30) ); //30 gün
echo $_COOKIE['Zaman'];
setcookie("Zaman2", "strtotime() fonksiyonu ile 30 gun", strtotime('+30 days')); //strtotime() fonksiyonu ile 30 gün
echo $_COOKIE['Zaman2'];

/*
strtotime() =>strtotime() fonksiyonu İngilizce olarak verilen zaman bilgilerini ileri(+) yada geri(-)
tarihlere göre bir Unix zaman damgası biçimine dönüştürür.

strtotime("") KULLANIMI

strtotime("+30 seconds") => 30 saniye
strtotime("+1 hours") => 1 saat
strtotime("+1 day") => 1 gün
strtotime("+1 week") => 1 hafta
strtotime("+1 week 2 days 4 hours 1 seconds") => 1 hafta 2 gün 4 saat 2 saniye



*/

 ?>
