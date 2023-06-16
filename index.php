<?php
include_once __DIR__ . '/pages/templates/header.php';
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>


<link rel="stylesheet" href="./pages/main/index.css" />

<script defer src="./pages/main/index.js"></script>

<body id="body" onload="addload()">
        
<!---                primeiro menu                      -->
       
            <h1 id="h1">
                Vilarinho <br />
                da <br /> 
                Furna
            </h1>
            <header id="header2">
                <div class="nav container">
                    <ul class="navul row">
                        <li class="col"><button id="btnscrollup">BACK</button></li>
                        <li class="col"><a href="index.php">Home</a></li>
                        <li class="col"><a href="./pages/furna/furna.php">A Furna</a></li>
                        <li class="col"><a href="./pages/mapa/mapa.php">MAPA</a></li>
                        <li class="col"><button id="login_abrir" >conta</button></li>
                    </ul>
                </div>
            </header>

            <div class="login_form" id="form_login">
                <form action="/action_page.php" class="form-container">
                    <h3>Login</h3>

                    <label for="email" class="form-label"><b>Email</b></label>
                    <input class="form-control" type="text" placeholder="Enter Email" name="email" value="<?= isset($_REQUEST['email']) ? $_REQUEST['email']: null  ?>" required>

                    <label for="psw" class="form-label"><b>Password</b></label>
                    <input class="form-control" type="password" placeholder="Enter Password" name="pass" value="<?=isset($_REQUEST['pass']) ? $_REQUEST['pass']: null  ?>"  required>

                    <div class="container">
                            <button class="btn btn-success" type="submit" name="utilizador" value="login">Login</button>
                            <a href="./pages/registo/registo.php" class="btn btn-primary">registar</button></a>
                    </div>    
                </form>
            </div>
<div class="noscrooll" id="noscrooll">
    
            <section id="space">


                <button id="btnscrolldown" >
                    down<i class="fa-sharp fa-light fa-square-arrow-down"></i>
                </button>
                
            </section>
        </div>


<!---                conteudo                       -->
        <div id="line"></div>
        <section id="conta" style="max-width:100%;height:auto;">
            <div class="hoverconta " style="max-width:100%; height:auto;">
                
                <section style="width: 100%; height: 100px;"></section>
                <div class="content">
                    <h3 class="he">Vilarinho da Furna</h3>

                    <div  >
                        <img id="conimg" class="he"  style="max-width:100%; height:auto;" src="./fotos/transferir.jpeg" alt="">
                        <div  >
                            <p id="first-p" class="he "> 
                                <br>
                                A aldeia de Vilarinho da Furna era um lugar da freguesia de Campo do Gerês, 
                                situada na zona Nordeste do Concelho de Terras de Bouro. Esta aldeia foi submersa 
                                no início dos anos 70 e com ela grande riqueza etnográfica, que parcialmente está bem 
                                retratada na exposição do museu, sobretudo as actividades agro-silvo-pastoris, vivências 
                                e espírito comunitário do seu povo, das habitações e outras histórias do passado
                                <br>
                            </p>
                        </div>   
                    </div>
                    <div  >
                        <p id="second-p" class="he "> 
                            <br>
                                Vilarinho da Furna contínua a ser conhecida como “extinta aldeia comunitária”, 
                                submersa pelas águas da albufeira de Vilarinho das Furnas. Mas, nem tudo se 
                                extinguiu, pois, os vestígios que se conservam mantêm viva a memória deste espaço. 
                                Esta aldeia, perdida entre serras do Gerês e Amarela, não possui elementos que 
                                permitam datar o seu estabelecimento, sendo certo que há vestígios remotos de vida 
                                humana.
                                <br>
                                <br>
                                Vilarinho da Furna foi uma aldeia comunitária, cujas origens se perdem nas brumas 
                                da memória. Desde 1971 que esta aldeia está submersa pela albufeira da barragem de 
                                Vilarinho da Furnas e com ela uma grande riqueza etnográfica. Contudo, quando a 
                                barragem é esvaziada para limpeza ou quando desce o nível das águas em períodos de 
                                seca, podem ver-se ainda as casas, os caminhos e os muros da antiga aldeia.
                                
                            <br>
                        </p>
                    </div> 







                    
<!--  // --------------------   list display  --------------------------- //-->

                    <div class="dropdown-ul" >

                        <div class="dropdown he" id="dropdown_1" >
                            <a href=""><img  src="./fotos/transferir.jpeg" alt="Cinque Terre" width="225" height="110" style="border-radius: 5px;"></a>
                        </div>
                    
                        <div class="dropdown he" id="dropdown_2">
                            <a href="./pages/furna/furna.php"><img  src="./fotos/logo-associao.png" alt="Cinque Terre" width="110" height="110"  style="margin-left: 60px; border-radius: 5px;"></a>
                        </div>

                        <div class="dropdown he" id="dropdown_3">
                            <a href="./pages/mapa/mapa.php"><img  src="./fotos/mapa.png" alt="Cinque Terre" width="225" height="110" style="border-radius: 5px;"></a>
                        </div>   
                    </div>
                    

                    <div id="dropdown_display" class="he" >
                        <div id="dropdown_display_img"></div>
                        <p id="dropdown_display_text"> 
                            
                        </p>
                        
                    </div>    
                    
<!--// --------------------     --------------------------- //--> 


                    <section style="height: 130px;"></section>






                
            </div>
        </section>
 
<?php
    include_once __DIR__ . '/pages/templates/rodape.php'
?>