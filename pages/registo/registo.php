<?php
    include_once __DIR__ . '../../../pages/templates/header.php';

    session_start();
?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<!--<link rel="stylesheet" href="./pages/main/index.css" />



-->
<script defer src="./registo.js"></script>

<body class="bg-secondary"  >
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container ">
            <a class="navbar-brand h1 col" href="">A furna</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" collapse navbar-collapse  " id="collapsibleNavbar">
                
                    <ul class="navbar-nav col">
                        <li  class="  nav-item    ">
                            <a class=" nav-link active col "  href="../../index.php">Home</a>
                        </li>
                        <li  class="   nav-item   ">
                            <a class=" nav-link active col" href="../furna/furna.php">A Furna</a>
                        </li>
                        <li  class="  nav-item   ">
                            <a class=" nav-link active col" href="../mapa/mapa.php">MAPA</a>
                        </li>
                    </ul>   
            </div> 
        </div>
    </nav>

    <main  class="container   bg-light">
        <div class="row">
            <h2 class="text-center">criaçao de contas furna</h2>
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

            <form action="/src/controller/contr_registo.php" enctype="multipart/form-data" runat="server" method="post">
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
                    
                    <div class=" col-sm-4 col-md-6 p-2 flex-fill  ">
                        <h3>crie um aconta na furna</h3>
                        <!--
                        <input accept="image/*" type="file" name="foto"  id="imgInp"  >
                        <p><label for="imgInp">foto</label></p>
                        <img id="blah" src="#" alt="your image" />
                        -->
                    </div>
                    
                </div>    
                <div>
                    <button type="submit" name="utilizador" value="registo" class="btn btn-primary justify-content-center">Submit</button>
                </div>
            </form>

        </div>    
    </main>



         
<?php
    include_once __DIR__ . '../../../pages/templates/rodape.php'
?>






























