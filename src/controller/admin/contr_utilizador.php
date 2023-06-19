<?php

require_once __DIR__ .'/../../../database/repositorio.php';
require_once __DIR__ .'/../../../src/validation/admin/val_utilizador.php';
require_once __DIR__ .'/../../../src/validation/admin/val_pass.php';
require_once __DIR__ .'/../../../src/utils/auxiliadores.php';



if(isset($_POST['utilizador'])){

    if($_POST['utilizador'] == 'perfil' ){

        atual_perfil($_POST);

    }
    if($_POST['utilizador'] == 'new_pass' ){

        atual_pass($_POST);

    }
}



function atual_perfil($post){

    $dados = val_utilizador($post);

    if(isset($dados['invalido'])){

        $_SESSION['erros'] = $dados['invalido'];

        $params = '?' . http_build_query($post);

        header('location: /pages/perfil/perfil.php'. $params );

    }else{

        $utilizador = utilizador();

        $dados['id'] = $utilizador['id'];
        $dados['administrador'] = $utilizador['administrador'];

        if(!empty($_FILES['foto']['name'])){

            $dados = save_foto($dados, $utilizador);

        }

        $update = atual_utilizador($dados);

        if($update){
            $_SESSION['sucesso'] = 'O utilizador foi atualizado';

            $_SESSION['acao']    = 'atualizar';

            header('location: /pages/perfil/perfil.php');
        }

    }

}


function atual_pass($post){

    $data = val_password($post);

    if(isset($data['invalido'])){

        $_SESSION['erros'] = $data['invalido'];

        header('location: /pages/perfil/pass_word.php');

    }else{
        //
        $data['id'] = utilizadorId();
        //$data['id'] = $_SESSION['id'];

        $update = atualizar_password($data);

        if($update){

            $_SESSION['sucesso'] = 'O utilizador foi atualizado';

            $_SESSION['acao']    = 'atualizar_password';

            header('location: /pages/perfil/pass_word.php');

        }
    }
}

function save_foto($dados, $fotoAntiga = null)
{
    
    $nomeFicheiro = $_FILES['foto']['name'];

    
    $ficheiroTemporario = $_FILES['foto']['tmp_name'];

    
    $extensao = pathinfo($nomeFicheiro, PATHINFO_EXTENSION);

    
    $extensao = strtolower($extensao);

    
    $novoNome = uniqid('foto_') . '.' . $extensao;

    $caminhoFicheiro = __DIR__ . '/../../../images/upload/';

    
    $ficheiro = $caminhoFicheiro . $novoNome;

    
    if (move_uploaded_file($ficheiroTemporario, $ficheiro)) {

       
        $dados['foto'] = $novoNome;


        if (isset($dados['utilizador']) && ($dados['utilizador'] == 'atualizar') || ($dados['utilizador'] == 'perfil')) {

            unlink($caminhoFicheiro . $fotoAntiga['foto']);
        }
    }

    # RETORNA OS DADOS DO FICHEIRO PARA GARDAR NA BASE DE DADOS
    return $dados;
}







