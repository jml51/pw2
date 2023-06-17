<?php
    session_start();

    include_once __DIR__ . '../../../pages/templates/header.php'
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
                        <li><a href="../../index.php">Home</a></li>
                        <li><a href="../furna/furna.php">A Furna</a></li>
                        <li><a href="../mapa/mapa.php">MAPA</a></li>
                        <li class="col"><button id="login_abrir" >conta</button></li>
                    </ul>
                </div>
        </header>
        <?php
            if(isset($_SESSION['id'])){
            ?>
                
                <div class="login_form" id="form_login">
                <div class="form_l">
                    <h2>boas a tudos</h2>
                    <?php
                        echo '<table border="1">'."\n";
                        echo '<tr><td>';
                            echo ($_SESSION['id']);
                        echo '</td><td>';
                            echo ($_SESSION['nome']);
                        echo '</tr>';
                        echo '</table >';
                    ?>
                    <form action="/src/controller/contr_autenticar.php" method="post">
                        <button class="btn btn-danger" type="submit"  name="utilizador" value="logout">Logout</button>
                    </form>
                </div>    
            </div>

            <?php 
            }else{
            ?>
                <div class="login_form" id="form_login">
                    <form action="/src/controller/contr_autenticar.php"  method="post"  class="form-container form_l">
                        <h3>Login</h3>

                        <label for="email" class="form-label"><b>Email</b></label>
                        <input class="form-control" type="text" placeholder="Enter Email" name="email"  required>

                        <label for="psw" class="form-label"><b>Password</b></label>
                        <input class="form-control" type="password" placeholder="Enter Password" name="pass"   required>

                        <div class="container">
                                <button class="btn btn-success" type="submit" name="utilizador" value="login">Login</button>
                                <a href="./pages/registo/registo.php" class="btn btn-primary">registar</button></a>
                        </div>    
                    </form>
                </div>
                    
              
            <?php     
            };    
            ?>
        <div id="logo">
            <div  class="flip-card">
                <a href="https://afurna.pt/">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img  src="../../fotos/logo-associao.png" alt="Avatar" >
                        </div>
                        <div class="flip-card-back">
                            <p></p>
                            <h2>Associação AFURNA</h2> 
                            <p>
                                fundada em Outubro de 1985 <br>
                                AFURNA tem por objectivo a defesa, valorização <br> e promoção do património cultural, colectivo e/ou <br> comunitário do antigo povo de Vilarinho da Furna
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
                        Com sede no Museu Etnográfico de Vilarinho da Furna, “AFURNA – 
                        Associação dos Antigos Habitantes de Vilarinho da Furna” é uma 
                        instituição cultural, dotada de personalidade jurídica, que tem 
                        como objetivo <br> a defesa, valorização e promoção do património cultural, 
                        coletivo e/ou comunitário, do antigo povo de Vilarinho da Furna, 
                        desenvolvendo atividades sociais para benefício dos ex-habitantes de Vilarinho 
                        da Furna e seus familiares.
                        Desde a sua criação, em outubro de 1985, AFURNA tem, além das atividades ambientais, 
                        lutado pela preservação da história e da cultura desse povo tão peculiar.
                        </p>
                </section>
            </section>
        </div>


<!---                conteudo                       -->
        
        
<?php
    include_once __DIR__ . '../../../pages/templates/rodape.php'
?>