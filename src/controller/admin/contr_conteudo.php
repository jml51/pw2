<?php

    session_start();

    require_once __DIR__ .'/../../../database/connections/request.php';


    if(isset($_POST)){

        if($_POST['conteudo'] == 'main'){

            main_post($_POST);

        }

        if($_POST['conteudo'] == 'furna'){
           
            furna_post($_POST);

        }

        if($_POST['conteudo'] == 'mapa'){
            
            mapa_post($_POST);

        }

    }


    function main_post($post){

        if(isset($_FILES['img2']['name'])){

            $post = save_foto2($post, 'img2' );
        }
        $atualizar = atual_main($post);

        if($atualizar){

            $_SESSION['sucesso'] = 'pagina atualizada com sucesso';

            header('location: /pages/admin/admin_conteudo/admin_conteudo.php');

            
        }else{

            $_SESSION['erros'] = 'Ocorreu um erro na atualizaçao da pagina ';


            
        }

    }

    function furna_post($post){

        if($_FILES['img1']['name']){

            $post = save_foto2($post, 'img1' );
        }

        $atualizar = atual_furna($post);

        if($atualizar){

            $_SESSION['sucesso'] = 'pagina atualizada com sucesso';

            header('location: /pages/admin/admin_conteudo/admin_conteudo.php');

            
        }else{

            $_SESSION['erros'] = 'Ocorreu um erro na atualizaçao da pagina ';


            
        }

    }

    function mapa_post($post){

        if($_FILES['img2']['name']){

            $post = save_foto2($post, 'img2' );
        }

        $atualizar = atual_mapa($post);


        if($atualizar){

            $_SESSION['sucesso'] = 'pagina atualizada com sucesso';

            header('location: /pages/admin/admin_conteudo/admin_conteudo.php');

            
        }else{

            $_SESSION['erros'] = 'Ocorreu um erro na atualizaçao da pagina ';


            
        }
    }





    function save_foto2($dados, $fotoAntiga )
    {
        
        $nomeFicheiro = $_FILES[$fotoAntiga]['name'];
    
        
        $ficheiroTemporario = $_FILES[$fotoAntiga]['tmp_name'];
    
        
        $extensao = pathinfo($nomeFicheiro, PATHINFO_EXTENSION);
    
        
        $extensao = strtolower($extensao);
    
        
        $novoNome = uniqid($fotoAntiga) . '.' . $extensao;
    
        $caminhoFicheiro = __DIR__ . '/../../../images/environment/';
    
        
        $ficheiro = $caminhoFicheiro . $novoNome;
    
        
        if (move_uploaded_file($ficheiroTemporario, $ficheiro)) {
    
           
            $dados[$fotoAntiga] = '/../../../images/environment/'.$novoNome;
    
    
        }
    
        # RETORNA OS DADOS DO FICHEIRO PARA GARDAR NA BASE DE DADOS
        return $dados;
    }
