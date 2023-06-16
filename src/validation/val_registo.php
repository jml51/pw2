<?php


function val_registo($data){
    
    //--------trim espasos
    foreach($data as $key => $value){
        $data[$key] = trim($data[$key]);
    }

    //--------val nome
    if(empty($data['nome']) || strlen($data['nome']) < 4 || strlen($data['nome']) > 10 ){
        $erros['nome'] = 'O seu nome é obrigatorio e tem de ter entre 4 a 10 caracteres';
    }

    if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL) ){
        $erros['email'] = 'O seu email é obrigatorio e tem de ser valido';
    }

    if(empty($data['pass_word']) || strlen($data['pass_word']) < 6 ){
        $erros['pass_word'] = 'O seu password é obrigatorio e tem de pelo menos 6 caracteres';
    }

    if($data['pass_word'] != $data['conf_pass']){
        $erros['conf_pass'] = 'Ambas as passwords tem que ser iguais';
    }

    if(isset($erros)){
        return['validade' => $erros];
    };

    
    return $data;
}

