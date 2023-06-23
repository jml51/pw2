<?php

    require_once __DIR__."/../connect.php";


    function  all_post(){

        $sql = 'SELECT*FROM posts ';
    
        $get =$GLOBALS['pdo']->query($sql);

        $post = [];

        while($lista  = $get->fetch()){
            $post[] = $lista;   
        }
    
        return $post;
    }    

    function  get_byuser($id){

        $sql = 'SELECT*FROM posts WHERE utilizador = :utilizador ';
    
        $get =$GLOBALS['pdo']->prepare($sql);

        $get->execute([':utilizador' => $id]);

        $post = [];

        while($lista  = $get->fetch()){
            $post[] = $lista;   
        }
    
        return $post;
    }    

    function post_user($id){

        $sql = 'SELECT*FROM utilizadores WHERE id = :id ';

        $get =$GLOBALS['pdo']->prepare($sql);

        $get->bindValue(1, $id, PDO::PARAM_INT);

        $get->execute();

        return $get->fetch();

    }

    function del_post($get){

        $del = $GLOBALS['pdo']->prepare('DELETE FROM posts WHERE id = ?;');

        $del->bindValue(1, $get, PDO::PARAM_INT);

        return $del->execute();

    }

    function atualizar_post($post){

        $sql =("UPDATE posts SET 
                    texto = :texto 
                WHERE 
                    ID = :id");

        $atualizar = $GLOBALS['pdo']->prepare($sql);

        return $atualizar->execute([
            ':id' => $post['id'],
            ':texto' => $post['texto']
        ]);


    }

    function criar_posts($post){
        $sql =("INSERT INTO posts(
                    utilizador,
                    texto 
                )VALUES(
                    :utilizador,
                    :texto
                )");

        $insert = $GLOBALS['pdo']->prepare($sql);

        $insert->execute([
            'utilizador'    => $post['id'],
            'texto'         => $post['texto']
        ]);

        return $insert;
    }