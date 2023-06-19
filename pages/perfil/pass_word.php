<?php
    session_start();

    include_once __DIR__ . '../../../pages/templates/header.php';

    include_once __DIR__ . '/../../src/middleware/autenticado.php';

    include_once __DIR__ . '/../../src/middleware/utilizador.php';

?>

    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<script defer src="./perfil.js"></script>


<body class="container bg-light">
    
    <div class="pt-1 ">
    <div class="p-1 mb-2 ">
      <h1>perfil de Utilizadores</h1>
      <p>Bem vindo <?php echo $utilizador['nome'] ?></p>
    </div>
    <main >   
        <section class="row">
            <div class="col">
            <?php 
                if(isset($_SESSION['erros'])){
                    echo '<div class="alert alert-danger">';
                    foreach($_SESSION['erros'] as $erro){
                        echo $erro. '<br>';
                    }
                    echo '</div>';
                    unset($_SESSION['erros']);
                }


                if(isset($_SESSION['sucesso'])){
                    echo '<div class="alert alert-success">';
                    
                        echo $_SESSION['sucesso'];
                    
                    echo '</div>';
                    unset($_SESSION['sucesso']);
                    
                }
            ?>    
            <form runat="server" enctype="multipart/form-data" action="/src/controller/admin/contr_utilizador.php" method="post"  class="form-control py-4">
                <div class="input-group mb-4">
                    <span class="input-group-text">Nome</span>
                    <input type="text" class="form-control" name="nome" placeholder="nome" maxlength="100" size="100" value="<?= isset($_REQUEST['nome']) ? $_REQUEST['nome'] : $utilizador['nome'] ?>" >
                </div>
                <div class="input-group mb-4">
                    <span class="input-group-text">nova pass word</span>
                    <input type="password" class="form-control" name="pass_word" placeholder="pass_word" maxlength="100" size="100"  required>
                </div>
                <div class="input-group mb-4">
                    <span class="input-group-text">confirma pass word</span>
                    <input type="password" class="form-control" name="conf_pass" placeholder="conf_pass" maxlength="100" size="100"  required>
                </div>

                <div class="row align-items-center justify-content-center text-center">
                    <button  type="submit" name="utilizador" value="new_pass" class="col-3 m-2 btn btn-primary ">alterar pass word</button>
                    <a   class="col-3 m-2 btn btn-danger"style="text-decoration: none;  color: white;" href="./perfil.php">voltar</a>
                </div>
            </form>
            </div>

    
        </section>
        </div>                
    </main>
</div>
</div>




    <?php
    include_once __DIR__ . '../../../pages/templates/rodape.php'
?>