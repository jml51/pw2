<?php

    include_once __DIR__ . '/../../../pages/client/templates/header.php';

    include_once __DIR__ . '/../../../database/request.php';

    $data = furna();

?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>

    <link rel="stylesheet" href="furna.css" />
    
    <script defer src="./furna.js"></script>

<body id="body">
        
<!---                primeiro menu                      -->
        <header id="header2">
            <h1 id="h1">
                Vilarinho <br />
                da <br /> 
                Furna
            </h1>
            
                <div class="nav">
                    <ul class="navul">
                        <li><a href="/index.php">Home</a></li>
                        <li><a href="../furna/furna.php">A Furna</a></li>
                        <li><a href="../mapa/mapa.php">MAPA</a></li>
                        <li class="col"><button id="login_abrir" >conta</button></li>
                    </ul>
                </div>
        </header>


        <?php
            include_once __DIR__ . '/../../../pages/client/templates/login_form.php';
        ?>


        <div id="logo">
            <div  class="flip-card">
                <a href="https://afurna.pt/">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img  src=<?="$data[img1]"; ?> alt="Avatar" >
                        </div>
                        <div class="flip-card-back">
                            <p></p>
                            <h2><?php echo $data['titulo']; ?></h2> 
                            <p>
                                <?php echo $data['texto1']; ?>
                            </p> 
                        
                        </div>
                    </div>
                </a>
            </div>
            
        </div>
<div class="noscrooll" id="noscrooll">
    <div id="line"></div>
            <section id="space" class="container-fluid" >
                <section>
                    <p id="info">
                        <?php 
                            echo $data['texto2']; 
                        ?>
                    </p>
                </section>
            </section>
        </div>


<!---                conteudo                       -->
        
        
<?php
    include_once __DIR__ . '/../../../pages/client/templates/rodape.php'
?>