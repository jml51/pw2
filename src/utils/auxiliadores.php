<?php

    session_start();

    include_once __DIR__.'/../../database/repositorio.php';


function autenticado(){

    return isset($_SESSION['id']) ? true : false; 

}


function utilizador(){

    if(autenticado()){
                
        return utilizador_data($_SESSION['id']);
    }else{
        
        return false;
    }
}

function utilizadorId(){

    if(autenticado()){
                
        return  $_SESSION['id'];
        
    }else{
        
        return false;
    }
}


function admin(){

    $utilizador =  utilizador();

    return $utilizador['administrador'] ? true : false;

}

function dono(){

    $utilizador =  utilizador();

    return $utilizador['dono'] ? true : false;

}











