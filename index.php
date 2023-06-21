<?php
    include_once __DIR__ . '/pages/client/templates/header.php';

    
    include_once __DIR__ . '/database/request.php';


    $data = index();
    
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>


<link rel="stylesheet" href="/pages/client/main/index.css" />

<script defer src="/pages/client/main//index.js"></script>

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
                        <li class="col"><a href="./pages/client/furna/furna.php">A Furna</a></li>
                        <li class="col"><a href="./pages/client/mapa/mapa.php">MAPA</a></li>
                        <li class="col"><button id="login_abrir" >conta</button></li>
                    </ul>
                </div>
            </header>



            <?php

                include_once __DIR__ . '/pages/client/templates/login_form.php';

            ?>



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
                    <h3 class="he"><?php echo $data['titulo']; ?></h3>

                    <div  >
                        <img id="conimg" class="he"  style="max-width:100%; height:auto;" src="<?= $data['img2']; ?>" alt="">
                        <div  >
                            <p id="first-p" class="he "> 
                                <br>
                                    <?php
                                        echo $data['texto1'];
                                    ?>
                                <br>
                            </p>
                        </div>   
                    </div>
                    <div  >
                        <p id="second-p" class="he "> 
                            
                                <?php
                                    echo $data['texto2'];
                                ?>
                                <br>
                                <br>
                                <?php
                                    echo $data['texto3'];
                                ?>
                                
                            
                        </p>
                    </div> 



                    



                    
<!--  // --------------------   list display  --------------------------- //-->

                    <div class="dropdown-ul" >

                        <div class="dropdown he" id="dropdown_1" >
                            <a href=""><img  src="<?= $data['img2']; ?>" alt="Cinque Terre" width="225" height="110" style="border-radius: 5px;"></a>
                        </div>
                    
                        <div class="dropdown he" id="dropdown_2">
                            <a href="./pages/client/furna/furna.php"><img  src="<?= $data['img3']; ?>" alt="Cinque Terre" width="110" height="110"  style="margin-left: 60px; border-radius: 5px;"></a>
                        </div>

                        <div class="dropdown he" id="dropdown_3">
                            <a href="./pages/client/mapa/mapa.php"><img  src="<?= $data['img4']; ?>" alt="Cinque Terre" width="225" height="110" style="border-radius: 5px;"></a>
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
    include_once __DIR__ . '/pages/client/templates/rodape.php'
?>
