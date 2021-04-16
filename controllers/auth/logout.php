<?php


    session_set_cookie_params(0);
    session_start();
    session_destroy();
    setcookie($cookie_name, '', 1);
    setcookie($cookie_name, '', 1, '/');
    header("Location: ../../")
;?>