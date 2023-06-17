<?php

function  val_login($data){

    foreach($data as $key => $value){
        $data[$key] = trim($data[$key]);
    }

    if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL) ){
        $erros['email'] = 'O seu email é obrigatorio e tem de ser valido';
    }

    if(empty($data['pass']) || strlen($data['pass']) < 6 ){
        $erros['pass_word'] = 'O seu password é obrigatorio e tem de ter pelo menos 6 caracteres';
    }

    if(isset($erros)){
        return['invalidos' => $erros];
    };

    
    return $data;

}

function val_pass($credenciais){

    if(!isset($_SESSION['id'])){

        $utiliador = selectpor_email($credenciais['email']);

        if(!$utiliador){
            $erros['mail'] = "email incoreto";
        }

        if(!password_verify($credenciais['pass'], $utiliador['pass_word'])){
            $erros['pass_word'] = "pass word incoreta";
        }

        if(isset($erros)){
            return ['invalidos' => $erros];
        }

        return $utiliador;

    }



}