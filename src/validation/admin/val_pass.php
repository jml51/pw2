<?php


function val_password($data){

    foreach($data as $key => $value){
        $data[$key] = trim($data[$key]);
    }

    if(empty($data['nome']) || strlen($data['nome']) < 4 || strlen($data['nome']) > 10 ){
        $erros['nome'] = 'O seu nome é obrigatorio e tem de ter entre 4 a 10 caracteres';
    }

    if(empty($data['pass_word']) || strlen($data['pass_word']) < 6 ){
        $erros['pass_word'] = 'A sua pass word é obrigatorio e tem de ter 6 caracteres';
    }

    if(empty($data['pass_conf']) && $data['conf_pass'] != $data['pass_word']){
        $erros['pass_conf'] = 'confirmaçao de password incorreta';
    }
    
    if (isset($erros)) {
        return ['invalido' => $erros];
    }

    return $data;
}