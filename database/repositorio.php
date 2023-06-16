<?php
    require_once __DIR__."/connect.php";


    function registar_utilizador($data){

        $data['pass_word'] = password_hash($data['pass_word'], PASSWORD_DEFAULT);

        $sql='INSERT INTO utilizadores(
                    nome,
                    email,
                    palavra_passe
                )VALUES(
                    :nome,
                    :email,
                    :palavra_passe
                )';
        
        $prep= $GLOBALS['pdo']->prepare($sql);

        $insert = $prep->execute([
            ':nome'             => $data['nome'],
            ':palavra_passe'    => $data['pass_word'],
            ':email'            => $data['email']
        ]);    
        
        if($insert){
            $data['id'] = $GLOBALS['pdo']->lastInsertId();

            return $data;
        }

        return false;
    }
    

?>