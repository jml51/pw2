<?php



//http://localhost:8080/pages/admin/criar_utilizador/criar_utilizador.php?id=2&nome=pedro&nif=123456789&email=8854%40didaxis.org&telemovel=987654987&administrador=&pass_word=%242y%2410%24JOyP1.EQKCATBibe93iI%2F.6atViyAo49FuUwR3Sm5pfwdMEKmXTB.&acao=atualizar

//http://localhost:8080/pages/admin/criar_utilizador/criar_utilizador.php?nome=pedro&email=8854%40didaxis.org&pass_word=&nif=12345&telemovel=987654987&id=2&foto=&utilizador=atualizar



require_once __DIR__ .'/../../../database/connections/repositorio.php';

require_once __DIR__ .'/../../../src/validation/admin/val_utilizador.php';

require_once __DIR__ .'/../../../src/validation/admin/val_pass.php';

require_once __DIR__ .'/../../../src/utils/auxiliadores.php';



if(isset($_POST['utilizador'])){
    if($_POST['utilizador'] == 'criar' ){

        criar($_POST);
       
    }


    if($_POST['utilizador'] == 'perfil' ){

        atual_perfil($_POST);

    }

    if($_POST['utilizador'] == 'new_pass' ){

        atual_pass($_POST);

    }

    if($_POST['utilizador'] == 'atualizar' ){

        atualizar_admin($_POST);
        
    }


}

if(isset($_GET['utilizador'])){

    if($_GET['utilizador'] == 'atualizar'){

        $utilizador = utilizador_data($_GET['id']);

        $utilizador['acao'] = 'atualizar';

        $params = '?' . http_build_query($utilizador);

        header(("location: /pages/admin/criar_utilizador/criar_utilizador.php" . $params));

    };

    if($_GET['utilizador'] == 'deletar'){

        $utilizador_del = utilizador_data($_GET['id']);

        if($utilizador_del['dono']){

            $_SESSION['erros'] = ['Este utilizador é proprietário do sistema e não pode ser apagado.'];

            header('location: /pages/admin/admin_utilizadores/admin_utilizadores.php');

            return false;
        }

        $del = del_utilizador($utilizador_del);

        if($del){
        
            $_SESSION['sucesso'] = 'Utilizador deletado com sucesso!';

            header(("location: /pages/admin/admin_utilizadores/admin_utilizadores.php"));
        }
    }

}



function atual_perfil($post){

    $dados = val_utilizador($post);
 
    if(isset($dados['invalido'])){

        $_SESSION['erros'] = $dados['invalido'];

        $params = '?' . http_build_query($post);

        header('location: /pages/client/perfil/perfil.php'. $params );

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

            header('location: /pages/client/perfil/perfil.php');
        }

    }

}


function atual_pass($post){

    $data = val_password($post);

    if(isset($data['invalido'])){

        $_SESSION['erros'] = $data['invalido'];

        header('location: /pages/client/perfil/pass_word.php');

    }else{
        //
        $data['id'] = utilizadorId();
        //$data['id'] = $_SESSION['id'];

        $update = atualizar_password($data);

        if($update){

            $_SESSION['sucesso'] = 'O utilizador foi atualizado';

            $_SESSION['acao']    = 'atualizar_password';

            header('location: /pages/client/perfil/pass_word.php');

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

            unlink($caminhoFicheiro .'/'. $fotoAntiga['foto']);
        }
    }

    # RETORNA OS DADOS DO FICHEIRO PARA GARDAR NA BASE DE DADOS
    return $dados;
}

function atualizar_admin($post){

    $dado = val_utilizador($post);

    if(isset($dado['invalido'])){

        $_SESSION['erros'] = $dado['invalido'];

        $_SESSION['acao'] = 'atualizar';

        $params = '?' . http_build_query($post);

        header('location: /pages/admin/criar_utilizador/criar_utilizador.php'. $params);
        
        return false;
    }  
        
        $utilizador = utilizador_data($dado['id']);

        if($utilizador['dono'] && $post['administrador'] == false){

            $_SESSION['erros'] = 'este utilizador nao pode ser atualizado';

            header('location: /pages/admin/admin_utilizadores/admin_utilizadores.php');

            return false;
        }

        if(!empty($_FILES['foto']['name'])){

            $dado = save_foto($dado,$post);

        }

        $atullizado = atual_utilizador($dado);

        if($atullizado){

            $_SESSION['sucesso'] = 'Utilizador atualizado com susseco';

            $dado['acao'] = 'atualizar';

            $params = '?' . http_build_query($dado);

            header('location: /pages/admin/admin_utilizadores/admin_utilizadores.php'. $params);

        }

}
function criar($post){


    $dados = val_utilizador($post);

    if(isset($dados['invalido'])){

        $_SESSION['erros'] = $dados['invalido'];

        $params = '?' . http_build_query($post);

        header('location: /pages/admin/criar_utilizador/criar_utilizador.php'. $params );
    }

    if(!empty($_FILES['foto']['name'])){

        $dado = save_foto($dados,$post);

    }

    $criar = criarUtilizador($dados);

    if($criar){

        $_SESSION['sucesso'] = 'Utilizador criado com susseco';

        $dado['acao'] = 'criar';

        $params = '?' . http_build_query($dado);

        header('location: /pages/admin/admin_utilizadores/admin_utilizadores.php'. $params);

    }
}

function del_utilizador($utilizadores_del){

    //$caminhoFicheiro = __DIR__ . '/../../../recursos/imagens/uploads/';

    $del = utilizador_del($utilizadores_del['id']);

    //unlink($caminhoFicheiro . $utilizadores['foto']);

    return $del;
}







