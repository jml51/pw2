<?php
    session_start();

    include_once __DIR__ . '../../../pages/templates/header.php';

    include_once __DIR__ . '/../../src/middleware/autenticado.php';

    include_once __DIR__ . '/../../src/middleware/utilizador.php';

?>

    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<script defer src="./perfil.js"></script>


<body >
    <div class="container-fluid bg-light">
    <div class="pt-1 ">
    <div class="p-1 mb-2 ">
      <h1>perfil de Utilizadores</h1>
      <p>Bem vindo <?php echo $utilizador['nome'] ?></p>
    </div>
    <main>
        <section>

        </section>    
        <section class="row">
            <div class="col-6">
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
                    <span class="input-group-text">nif </span>
                    <input type="text" class="form-control" name="nif" placeholder="nif" maxlength="100" size="100" value="<?= isset($_REQUEST['nif']) ? $_REQUEST['nif'] : $utilizador['nif'] ?>" required>
                </div>
                <div class="input-group mb-4">
                    <span class="input-group-text">email</span>
                    <input type="text" class="form-control" name="email" placeholder="email" maxlength="100" size="100" value="<?= isset($_REQUEST['email']) ? $_REQUEST['email'] : $utilizador['email'] ?>" >
                </div>
                <div class="input-group mb-4">
                    <span class="input-group-text">telemovel</span>
                    <input type="text" class="form-control " name="telemovel" placeholder="telemovel" maxlength="100" size="100" value="<?= isset($_REQUEST['telemovel']) ? $_REQUEST['telemovel'] : $utilizador['telemovel'] ?>"required >
                </div>
                <?php if(admin()){ ?>
                    <div class="input-group mb-4">
                        <span class="input-group-text">administrador</span>
                        <input type="text" class="form-control" name="administrador" placeholder="administrador" maxlength="100" size="100" value="<?= isset($_REQUEST['administrador']) ? $_REQUEST['administrador'] : $utilizador['administrador'] ?>" disabled>
                    </div>
                <?php } ?>
                <div class=" mb-4 ">
                    <label for="imgInp" class="input-text">foto</label>
                    <input id="imgInp" accept="image/*" type="file" class="form-control" name="foto">
                </div>
                <div class="row align-items-center justify-content-center text-center">
                    <button  type="submit" name="utilizador" value="perfil" class="col-3 m-2 btn btn-primary ">Submit</button>
                    <a   class="col-3 m-2 btn btn-success"style="text-decoration: none;  color: white;" href="./pass_word.php">alterar pass word</a>
                    <a   class="col-3 m-2 btn btn-danger"style="text-decoration: none;  color: white;" href="/index.php">voltar</a>
                </div>
            </form>
            </div>
            <div class="col-6 align-items-center justify-content-center text-center">
                <img style="border: 2px solid" id="imgp" src="#" class="img-rounded" alt="your image" />
            </div>
    
        </section>
        </div>                
    </main>
</div>
</div>




    <?php
    include_once __DIR__ . '../../../pages/templates/rodape.php'
?>