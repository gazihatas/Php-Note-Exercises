<?php
if(empty($_POST['ad'])) :
    echo 'Ad Boş gönderildi';
else :
    echo $_POST['ad'];
endif;

?>