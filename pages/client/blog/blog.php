<?php
    session_start();


    include_once __DIR__ . '/../../../pages/client/templates/header.php';

    include_once __DIR__ . '/../../../src/utils/auxiliadores.php';

    include_once __DIR__ . '/../../../src/controller/content/contr_content.php';

    $session_id = utilizador();

    $posts = get_all();

?>

    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<script defer src="./blog.js"></script>

<link rel="stylesheet" href="./blog.css">


    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container ">
            <a class="navbar-brand h1 col" href="">A furna</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" collapse navbar-collapse  " id="collapsibleNavbar">
                
                    <ul class="navbar-nav col">
                        <li  class="  nav-item    ">
                            <a class=" nav-link active col "  href="/index.php">Home</a>
                        </li>
                        <li  class="   nav-item   ">
                            <a class=" nav-link active col" href="/pages/client/furna/furna.php">A Furna</a>
                        </li>
                        <li  class="  nav-item   ">
                            <a class=" nav-link active col" href="/pages/client/mapa/mapa.php">MAPA</a>
                        </li>
                        <li class="col">
                            <button id="login_abrir" >conta</button>
                        </li>
                        <?php
                            include_once __DIR__ . '/../../../pages/client/templates/login_form.php';
                        ?> 
                    </ul>  
                    
            </div> 
        </div>
    </nav>

    <main >
        <section class="container">
            
            <div class="row bg-dark  mt-5 mb-1">
                <div class="col-4" ></div>
                <?php
                    if($session_id){
                        echo '<a href="../criar_post/criar_post.php"class="col-3 btn btn-secondary m-4" >criar o seu post</a>';
                    }else{
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                        echo 'presisa de se autenticar para criar um post';
                        echo '</div>';
                    }
                ?>
                
            </div>
        
            <?php

            if (isset($_SESSION['sucesso'])) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
            echo $_SESSION['sucesso'] . '<br>';
            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            unset($_SESSION['sucesso']);
            }

            if (isset($_SESSION['erros'])) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';

            foreach ($_SESSION['erros'] as $erro) {
                echo $erro . '<br>';
            }

            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
            unset($_SESSION['erros']);
            }
            ?>
        </section> 
        <section class="bg-secondary container text-white mb-2">  
                <div class="container">
                    <div >
                        



                        <?php
                        $num = 0;

                            foreach($posts as $post){
                                $user_post = user_post($post['utilizador']);
                                $num++;
                        ?>

                        <div class="row "> <?php echo $num ?></div>

                        <div class="row ">
                            <div class="col-3 "></div>

                            <div class="col-6">
                                <div class="row border border-dark rounded-top ">
                                    <div class="col-6 ">
                                        <?php echo $post['utilizador']; ?>
                                        <?php echo $user_post['nome'];  ?>
                                    </div>    
                                    <div class="col-6">    
                                        <?php 
                                            if($post['utilizador'] == $session_id['id'] || $session_id['administrador'] == '1'){ 
                                            ?>  
                                                <div class=" float-end">
                                                    <button type="button" data-bs-toggle="modal" data-bs-target='#modal_<?= $post['id']?>'accesskey="" class="btn btn-sm btn-success" >editar</button>
                                                    <a href="/src/controller/content/contr_content.php?<?='acao=deletar&id=' . $post['id'] ?>" class="btn m-1 btn-sm btn-danger">eliminar</a>
                                                </div>
                                        <?php        
                                            }
                                        ?>
                                    </div>    
                                </div> 
                            
                                <div class='row border border-dark rounded-botton'>
                                        <?php echo $post['texto']; ?>
                                </div>
                            </div>    
                        </div>


                        <!--         modal         -->
                        <div class="modal" id='modal_<?= $post['id']?>'>
                            <div class="modal-dialog">
                                <div class="modal-content">  
                                    <div class="modal-header">
                                        <h4 class="modal-title">atualiza o post</h4>
                                        
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div> 
                                    
                                    <div class="modal-body">text
                                        <form action="/src/controller/content/contr_content.php" method="post">
                                            <input type="hidden" name="id" value="<?= $post['id']; ?>" >
                                            <textarea name="texto" id="" cols="45" rows="10">
                                                <?php echo $post['texto']; ?>
                                            </textarea>backdrop
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" name="acao" value="atualizar" class="btn m-1 btn-sm btn-success">atualizar</button>
                                    </div>
                                    </form>
                                </div>
                            </div>     
                        </div>                              


                        <?php
                            }
                        ?>  
                        
                        



                    </div>             
                </div>
        </section>
    </main>



                  






    
<?php
    include_once __DIR__ . '/../../../pages/client/templates/rodape.php'
?>