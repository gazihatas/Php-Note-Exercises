<?php
session_start();
include 'fonksiyon/helper.php';

$user = [
    'gazihatas' =>'123456',
    'demo' => '123456'
];

if(get('islem')=='giris') :

        $_SESSION['username'] = post('username');
        $_SESSION['password'] = post('password');

        if(!post('username')){
            $_SESSION['error']= "lütfen asdfkullanıcı adınızı giriniz.";
            header('Location:login.php');
            exit();
        }elseif(!post('password')){
          $_SESSION['error']= "lütfen kullanıcı şifrenizi giriniz.";
          header('Location:login.php');
          exit();
        }else {
                if(array_key_exists(post('username'),$user)) :

                else :
                    $_SESSION['error']
                endif;
        }

endif;