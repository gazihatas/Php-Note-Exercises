<?php


function get($get){
    if (isset($_GET[$get])) :
        return trim($_GET[$get]);
    else:
        return false;
    endif;
}

function post ($post){
    if(isset($_POST[$post])) :
        return trim($_GET[$post]);
    else:
        return false;
    endif;
}


function session($session){
    if(isset($_SESSION[$session])) :
        return trim($_SESSION[$session]);
    else:
        return false;
    endif;
}

?>