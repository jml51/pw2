<?php

session_start();



include_once __DIR__.'/../../database/repositorio.php';


if(isset($_POST['utilizador'])){
    if($_POST['utilizador'] == 'logout'){
        logout();
    };
}


function logout(){
    $_SESSION = array();

    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(), '', time() - 3600);
    };
    session_destroy();

    header('location: /index.php');
};

