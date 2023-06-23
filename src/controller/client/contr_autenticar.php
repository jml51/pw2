<?php

session_start();

include_once __DIR__.'/../../../database/connections/repositorio.php';

include_once __DIR__.'/../../../src/validation/client/val_login.php';


if(isset($_POST['utilizador'])){
    if($_POST['utilizador'] == 'logout'){
        logout($_POST['page']);
    };
}

if(isset($_POST['utilizador'])){
    if($_POST['utilizador'] == 'login'){
        login($_POST);
    };
}

function login($post){

    $data = val_login($post);

    $validado = veri_erros($data, $post);

    if($validado){

        $data = val_pass($data);

    };

    $utilizador = veri_erros($data, $post);
    
    if($utilizador){

        fazer_login($data, $post['page']);

    };
    
};

function fazer_login($utilizador, $page){

    $_SESSION['id'] = $utilizador['id'];
    $_SESSION['nome'] = $utilizador['nome'];

    setcookie("id", $utilizador['id'], time() + (60 * 60 * 24 * 30), "/");
    setcookie("nome", $utilizador['nome'], time() + (60 * 60 * 24 * 30), "/");


    header("location: $page");

}


function logout($page){
    $_SESSION = array();

    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(), '', time() - 3600);
    };
    session_destroy();

    header("location: $page");
};

function veri_erros($data, $post){

    if(isset($data['invalidos'])){
        $_SESSION['erros'] = $data['invalidos'];

        header('location: /index.php');

        return false;
    }

    unset($_SESSION['erros']);

    return true;

}