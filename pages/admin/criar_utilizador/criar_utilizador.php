<?php
    session_start();

    include_once __DIR__ . '/../../../pages/admin/templates/header.php';

    include_once __DIR__ . '/../../../src/middleware/admin.php';

    

    
?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<!--<link rel="stylesheet" href="./pages/main/index.css" />



-->
<script defer src="./registo.js"></script>

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

            <form action="/src/controller/client/contr_registo.php" enctype="multipart/form-data" runat="server" method="post">
                <div class="d-flex  mb-3"> 
                    <div class="col-sm-4 col-md-6 p-2 flex-fill ">
                        <p><label for="nome">nome</label></p>
                        <input type="text" name="nome"  id="nome"  required>

                        <p><label for="email">e-mail</label></p>
                        <input type="text" name="email"  id="email"  required>

                        <p><label for="pass_word">pass word</label></p>
                        <input type="password" name="pass_word"  id="pass_word"  required>

                        <p><label for="conf_pass">conferir password</label></p>
                        <input type="text" name="conf_pass"  id="conf_pass"  required>
                    </div>
                    

                    
                </div>    
                <div>
                    <button type="submit" name="utilizador" value="registo" class="btn btn-primary justify-content-center">Submit</button>
                </div>
            </form>

        </div>    
    </main>



         
<?php
    include_once __DIR__ . '/../../../pages/client/templates/rodape.php'
?>






























