<?php
//Form  POST edilmiş ve ad alanı boş değilse
if(!empty($_POST['ad'])) {
//mail ve şifre doğrumu kontrol edelim
    if ($_POST['mail'] == 'test@test.com' && $_POST['sifre'] == 1234)
    {
        //Beni hatırla seçeneği aktif ise çerezi 30 günlüğüne atayalım
        if ($_POST['hatirla'] == 1)
        {
            setcookie("uyead", $_POST['ad'], strtotime('+30 days'));
            setcookie("mail", $_POST['mail'], strtotime('+30 days'));
        } else {
            //Beni hatırla seçeneği işaretli değil ise süre vermeyelim
            setcookie("uyead", $_POST['ad']);
            setcookie("mail", $_POST['mail']);
        }
        //Çerez atandıktan sonra çerezleri elde etmek için yönlendirelim
        header('location: cerez_sayfa1.php');
    }
}
?>

<!doctype html>
<html lang="en">j
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Çerez Ataması</title>
</head>
<body>
<?php
if (isset($_COOKIE['uyead'])) { //Çerez atanmış ise hoşgeldin ile karşıla
    echo "<p>Sayın <b>{$_COOKIE['uyead']}</b> Hoş Geldiniz</p>";
    echo "<p>Eposta adresiniz <b>{$_COOKIE['mail']}</b></p>";
} else{
    echo "<h2>Giriş</h2>
    <form action='cerez_sayfa1.php' method='POST'>
        Adınız: <input type='text' name='ad'><br>
        Email: <input type='text' name='mail'><br>
        Şifre: <input type='text' name='sifre'><br>
        Beni Hatırla <input type='checkbox' name='hatirla' value='1'><br>
        <input type='submit' value='Giriş Yap'>
    </form>";
}
?>
</body>
</html>
