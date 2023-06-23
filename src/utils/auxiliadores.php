<?php

    @session_start();

    include_once __DIR__.'/../../database/connections/repositorio.php';

    include_once __DIR__.'/../../database/connections/request_cont.php';


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

function get_all(){

    return all_post();

}

function get_post_byuser($id){

    return get_byuser($id);

}

function admin(){

    $utilizador =  utilizador();

    return $utilizador['administrador'] ? true : false;

}

function dono(){

    $utilizador =  utilizador();

    return $utilizador['dono'] ? true : false;

}











