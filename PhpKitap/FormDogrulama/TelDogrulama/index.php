<?php
//Form POST edilmemiş ise (Gönderilmediyse) formu gösterelim
if(!$_POST) : ?>
    <form action="" method="post">
        Cep tel:<br>
        <input type="text" name="tel" value=""><br>
        <input type="submit" value="Gönder">
    </form>  
<?php endif;

if($_POST) :
    $tel = ltrim($_POST['tel'], '0'); //telefon numarasının başındaki 0 silelim
    //telefon numarası sayı olmalı ve 10 rakamdan küçük veya küçük olmamalı
    if(!is_int($tel) && (strlen($tel) < 10) || (strlen($tel) > 10)) :
        echo 'Telefonunuzu doğru yazın';
    else :
        echo 'Telefon numarası uygun formatta';
    endif; 
endif;
?>