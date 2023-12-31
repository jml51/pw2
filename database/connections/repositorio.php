<?php
    require_once __DIR__."/../connect.php";



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



    function ultimos(){

        $get = $GLOBALS['pdo']->query('SELECT id, nome, email, administrador FROM utilizadores ORDER BY id DESC LIMIT 4;');

        $utilizadores = [];

        while($lista  = $get->fetch()){
            $utilizadores[] = $lista;   
        }
        
        return $utilizadores;

    }



    function todos_utilizadores(){
        $get = $GLOBALS['pdo']->query('SELECT*FROM utilizadores;'); 

        $utilizadores = [];

        while($lista  = $get->fetch()){
            $utilizadores[] = $lista;   
        }

        return $utilizadores;
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
    
function criarUtilizador($dados){

    $dados['pass_word'] = password_hash($dados['pass_word'],PASSWORD_DEFAULT);

    $sql = "INSERT INTO utilizadores(
            nome,            
            nif,          
            email,                
            telemovel,           
            foto,             
            administrador,                  
            pass_word) 
        VALUES(  
            :nome,
            :nif,
            :email,  
            :telemovel,    
            :foto, 
            :administrador,
            :pass_word 
        )";

    $request = $GLOBALS['pdo']->prepare($sql);


    $post = $request->execute([
        ':nome'         => $dados['nome'],
        ':nif'          => $dados['nif'],
        ':email'        => $dados['email'],
        ':telemovel'    => $dados['telemovel'],
        ':foto'         => $dados['foto'],
        ':administrador'=> $dados['administrador'],
        ':pass_word'    => $dados['pass_word']
    ]);

    if ($post) {
        $utilizador['id'] = $GLOBALS['pdo']->lastInsertId();
    }

    return $post;
}

function atual_utilizador($dados){

    if(isset($dados['pass_word']) && !empty($dados['pass_word'])){

        $dados['pass_word'] = password_hash($dados['pass_word'],PASSWORD_DEFAULT);

        $sql = "UPDATE utilizadores SET
            nome            = :nome,
            nif             = :nif,
            email           = :email,        
            telemovel       = :telemovel,        
            foto            = :foto,        
            administrador   = :administrador,        
            dono            = :dono,        
            pass_word       = :pass_word        
        WHERE id = :id;    ";

        $update = $GLOBALS['pdo']->prepare($sql);

         return $update->execute([
            ':id'              => $dados['id'],
            ':nome'            => $dados[' nome'],
            ':nif'             => $dados[' nif'],
            ':email'           => $dados[' email'],        
            ':telemovel'       => $dados[' telemovel'],        
            ':foto'            => $dados[' foto'],        
            ':administrador'   => $dados[' administrador'],        
            ':dono'            => $dados[' dono'],        
            ':pass_word'       => $dados[' pass_word'] 

         ]); 

    }else{
        $sql = "UPDATE utilizadores SET
            nome            = :nome,
            nif             = :nif,
            email           = :email,        
            telemovel       = :telemovel,        
            foto            = :foto,        
            administrador   = :administrador     
        WHERE id = :id;";

        $update = $GLOBALS['pdo']->prepare($sql);

        return $update->execute([
            ':id'              => $dados['id'],
            ':nome'            => $dados['nome'],
            ':nif'             => $dados['nif'],
            ':email'           => $dados['email'],        
            ':telemovel'       => $dados['telemovel'],        
            ':foto'            => $dados['foto'],        
            ':administrador'   => $dados['administrador']           
        ]); 

    }
}

function atualizar_password($dados){
    if(isset($dados['pass_word']) && !empty($dados['pass_word'])){

        $dados['pass_word'] = password_hash($dados['pass_word'],PASSWORD_DEFAULT);

        $sql = "UPDATE utilizadores SET
            nome            = :nome,      
            pass_word       = :pass_word        
        WHERE id = :id;";

        $update = $GLOBALS['pdo']->prepare($sql);

         return $update->execute([
            ':id'              => $dados['id'],
            ':nome'            => $dados['nome'],       
            ':pass_word'       => $dados['pass_word'] 
         ]); 

    }
}


function utilizador_del($id){

    $get = $GLOBALS['pdo']->prepare('DELETE FROM utilizadores WHERE id = ?;');

    $get->bindValue(1, $id, PDO::PARAM_INT);

    return $get->execute();

}