<?php
    require_once __DIR__."/connect.php";



    function utilizador_data($id){

        $get = $GLOBALS['pdo']->prepare('SELECT*FROM utilizadores WHERE id = ?;');

        $get->bindValue(1, $id, PDO::PARAM_INT);

        $get->execute();

        return $get->fetch();

    }


    function selectpor_email($email){

        $get = $GLOBALS['pdo']->prepare('SELECT*FROM utilizadores WHERE email = ? LIMIT 1;');

        $get->bindValue(1, $email);
        
        $get->execute();

        return $get->fetch();

    }


    function registar_utilizador($data){

        $data['pass_word'] = password_hash($data['pass_word'], PASSWORD_DEFAULT);

        $sql='INSERT INTO utilizadores(
                    nome,
                    email,
                    pass_word
                )VALUES(
                    :nome,
                    :email,
                    :pass_word
                )';
        
        $prep= $GLOBALS['pdo']->prepare($sql);

        $insert = $prep->execute([
            ':nome'             => $data['nome'],
            ':pass_word'    => $data['pass_word'],
            ':email'            => $data['email']
        ]);    
        
        if($insert){
            $data['id'] = $GLOBALS['pdo']->lastInsertId();

            return $data;
        }

        return false;
    }
    

?>