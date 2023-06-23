<?php

    @session_start();


    include_once __DIR__.'/../../../database/connections/request_cont.php';


    if(isset($_POST)){
    
        if($_POST['acao'] == 'criar'){

            criar_post($_POST);

        }
        
        if($_POST['acao'] == 'atualizar'){

            atual_post($_POST);

        }
        
    }




if(isset($_GET)) {
    if(isset($_GET['acao'])){
        if($_GET['acao'] == 'deletar'){
            
            $del = del_post($_GET['id']);

            if($del){

                $_SESSION['sucesso'] = 'post deletado com sucesso';

                header('location: /pages/client/blog/blog.php');

                return true;

            }

            $_SESSION['erros'] = 'erro ao deletar o post';

            header('location: /pages/client/blog/blog.php');

            return false;

        }
    }
}

function atual_post($post){

    $atualizar = atualizar_post($post);

    if($atualizar){
        $_SESSION['sucesso'] = 'post atualizado com sucesso';

        header('location: /pages/client/blog/blog.php');

        return true;
    }

    $_SESSION['erros'] = 'erro ao atualizar o post';

    header('location: /pages/client/blog/blog.php');

    return false;
}




function user_post($id){

    $user_data = post_user($id);

    //return $user_data['nome'];
    return $user_data;

}


function criar_post($post){

    $criar = criar_posts($post);

    if($criar){
        $_SESSION['sucesso'] = 'post criado com sucesso';

        header('location: /pages/client/blog/blog.php');

        return true;
    }

    $_SESSION['erros'] = 'erro ao criar o post';

    header('location: /pages/client/blog/blog.php');

    return false;
}