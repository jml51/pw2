<?php
    session_start();


    include_once __DIR__ . '/../../../pages/client/templates/header.php';

    include_once __DIR__ . '/../../../src/utils/auxiliadores.php';

    include_once __DIR__ . '/../../../src/middleware/autenticado.php';

    include_once __DIR__ . '/../../../src/controller/content/contr_content.php';

    $session_id = utilizador();


?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<script defer src="../blog/blog.js"></script>

<link rel="stylesheet" href="../blog/blog.css">


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


<div class="container"  >
    <div class="">
        <div class="">  
            <div class="row bg-secondary mb-3">
                <div class="col-4"></div>
                <h1 class="col-6 text-white">crie o post</h1>
            </div> 
                                    
            
                <form action="/src/controller/content/contr_content.php" method="post">
                    <input type="hidden" name="id" value="<?= $session_id['id']; ?>" >
                    <textarea name="texto" id="" cols="120" rows="10">
                        
                    </textarea>
            
                <div class="row">
                    <button type="submit" name="acao" value="criar" class="btn m-1 btn-sm btn-success">criar</button>
                    <a class="btn m-1 btn-sm btn-danger" href="../blog/blog.php">voltar</a>
                </div>
            </form>
        </div>
    </div>     
</div>      

    
    
<?php
    include_once __DIR__ . '/../../../pages/client/templates/rodape.php'
?>