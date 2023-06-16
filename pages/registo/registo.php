<?php
    include_once __DIR__ . '../../../pages/templates/header.php'
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<!--<link rel="stylesheet" href="./pages/main/index.css" />


-->
<script defer src="./registo.js"></script>

<body >
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

    <main  class="container   m-1000  bg-light">
        <div class="container-fluid mh-100" >
            <form action="" runat="server">
                <div class="d-flex  mb-3"> 
                    <div class="p-2 flex-fill ">
                        <p><label for="nome">nome</label></p>
                        <input type="text" name="nome"  id="nome"  required>
                        <p><label for="nif">nif</label></p>
                        <input type="text" name="nif"  id="nif"  required>

                        <p><label for="email">e-mail</label></p>
                        <input type="text" name="email"  id="email"  required>

                        <p><label for="pass_word">pass word</label></p>
                        <input type="password" name="pass_word"  id="pass_word"  required>
                    </div>
                    <div class=" p-2 flex-fill  ">
                        <input accept="image/*" type="file" name="foto"  id="imgInp"  >
                        <p><label for="imgInp">foto</label></p>
                        <img id="blah" src="#" alt="your image" />
                    </div>
                </div>    
                <div>
                    <button type="submit" class="btn btn-primary justify-content-center">Submit</button>
                </div>
            </form>
        </div>    
    </main>



         
<?php
    include_once __DIR__ . '../../../pages/templates/rodape.php'
?>






























