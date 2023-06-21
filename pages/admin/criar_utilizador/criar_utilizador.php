<?php
    session_start();

    include_once __DIR__ . '/../../../pages/admin/templates/header.php';

    include_once __DIR__ . '/../../../src/middleware/admin.php';

    

    
?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


<body class="bg-secondary"  >

    <main  class="container   bg-light">
        <div class="row">

            <section>
                <?php 
                if(isset($_SESSION['erros'])){
                    echo '<div class="alert alert-danger">';
                    foreach($_SESSION['erros'] as $error){
                        echo $error .'<br>';
                    };
                    echo '</div>';
                };
                unset($_SESSION['erros']);
                ?>
                
                 
            </section>      
        </div>
        <div class="row mh-100" >

        <form action="/src/controller/admin/contr_utilizador.php" enctype="multipart/form-data" runat="server" method="post">
                
                <div class="  mb-3"> 
                    <div class="row">
                        <div class="col-5 p-2  ">
                            <div class="input-group mb-3 input-group">
                                <span class="input-group-text">nome</span>  
                                <input class="form-control" type="text" name="nome"  id="nome"  value="<?= isset($_REQUEST['nome']) ? $_REQUEST['nome'] :null ?>" required>
                            </div>
                            <div class="input-group mb-3 input-group">
                                <span class="input-group-text">e-mail</span>
                                <input class="form-control" type="text" name="email"  id="email" value="<?= isset($_REQUEST['email']) ? $_REQUEST['email'] :null ?>" required>
                            </div>
                            <div class="input-group mb-3 input-group">
                                <span class="input-group-text">pass word</span>
                                <input class="form-control" type="password" name="pass_word"  id="pass_word"  >
                            </div>
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" name="administrador" role="switch" id="flexSwitchCheckChecked" <?= isset($_REQUEST['administrador']) && $_REQUEST['administrador'] == true ? 'checked' : null ?>>
                                <label class="form-check-label" for="flexSwitchCheckChecked">Administrador</label>
                            </div>
                        </div> 
                        <div class="col-1"></div>
                        <div class="col-5 p-2  ">   
                            <div class="input-group mb-3 ">
                                <span class="input-group-text">nif</span>
                                <input class="form-control" type="text" name="nif"  id="nif" value="<?= isset($_REQUEST['nif']) ? $_REQUEST['nif'] :null ?>"  required>
                            </div>
                            <div class="input-group mb-3 ">
                                <span class="input-group-text">telemovel</span>
                                <input class="form-control" type="text" name="telemovel"  id="telemovel" value="<?= isset($_REQUEST['telemovel']) ? $_REQUEST['telemovel'] :null ?>" required>
                            </div>
                            <div class=" mb-3 ">
                                <label for="imgInp" class="input-text">foto</label>
                                <input id="imgInp" accept="image/*" type="file" class="form-control" name="foto">
                            </div>
                            <input type="hidden" name="id" value="<?= isset($_REQUEST['id']) ? $_REQUEST['id'] : null ?>">
                            <input type="hidden" name="foto" value="<?= isset($_REQUEST['foto']) ? $_REQUEST['foto'] : null ?>">

                        </div>    
                    </div>
                </div >    
                <div>
                    <button type="submit" name="utilizador"  class="btn btn-primary justify-content-center" <?= isset($_REQUEST['acao']) && $_REQUEST['acao'] == 'atualizar' ? 'value="atualizar"' : 'value="criar"' ?>>Submit</button>
                </div>
            </form>

        </div>    
    </main>



         
<?php
    include_once __DIR__ . '/../../../pages/client/templates/rodape.php'
?>






























