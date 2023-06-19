<?php

session_start();

include_once __DIR__.'/../../../src/validation/client/val_registo.php';

include_once __DIR__.'/../../../database/repositorio.php';


if(isset($_POST['utilizador'])){
    if($_POST['utilizador'] == 'registo'){
        registar($_POST);
    };
};

function registar($post){

    $data = val_registo($post);

    if(isset($data['validade'])){

        $_SESSION['erros'] = $data['validade'];

        header('location: /pages/registo/registo.php');

    }else{

        $conta = registar_utilizador($data);

    };

    if($conta){
        $_SESSION['id'] = $conta['id'];
        $_SESSION['nome'] = $conta['nome'];

        setcookie("id",     $conta['id'], time() + (60 * 60 * 24 * 30), "/");
        setcookie("nome",   $conta['nome'], time() + (60 * 60 * 24 * 30), "/");

        $_SESSION['sucesso'] = 'bem vindo';

        header('location: /index.php');
    }


};


