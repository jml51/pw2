<?php
    include_once __DIR__ . '../../../pages/templates/header.php'
?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>

    <link rel="stylesheet" href="mapa.css" />
    
    <script defer src="./mapa.js"></script>
<body>
    
    <header id="header2">
        <h1 id="h1">
            Vilarinho da Furna
        </h1>
        <div class="nav">
        <ul class="navul">
            <li><a href="../../index.php">Home</a></li>
            <li><a href="../furna/furna.php">A Furna</a></li>
            <li><a href="../mapa/mapa.php">MAPA</a></li>
        </ul>
        </div>
    </header>
    <section id="space"></section>
    <div id="fake_body">

    <div id="map_content">

        
        <div id="left">
            <div  >
                <img src="../../fotos/arrow-down-circle.svg" alt=""id="btn-" onclick="plusSlides(-1)"> 
                <h2>Como chegar</h2>
                <div id="textm" class="fade_ block" >
                    <p >
                        O acesso à zona onde a aldeia se encontra submersa é feito através de um caminho em terra batida de uso 
                        privado dos antigos habitantes de Vilarinho da Furna. O acesso de carro é por vezes possível durante os 
                        meses de verão, mediante o pagamento de uma taxa de acesso pela associação “A Furna”, de forma a promover 
                        a manutenção da memória dos hábitos e costumes da antiga aldeia. <br>
                        Durante o resto do ano, o acesso é apenas possível de forma pedonal.
                    </p>
                </div> 
            </div>
            <div >
                <div id="textm" class="fade_ block">
                    <a style="color: rgb(112, 110, 247); margin-top: 20px;" href="https://pt.wikiloc.com/trilhas-trekking/trilho-de-vilarinho-das-furnas-a-lourica-9847467">Trilho de Vilarinho das Furnas:  </a>
                    <p >
                        trilho que começa na barragem de Vilarinho das Furnas, a mesma que causou a inundação da aldeia, e segue a beira ria ate a  nossa esperada vial que é a primeira atração desta trilha mas não a única.
                        <br>
                    </p>   
                </div> 
            </div>
        </div>
        <div id="right">
            <img src="../../fotos/arrow-down-circle.svg" alt="" id="btn" onclick="plusSlides(1)"> 
            <div class="fade_ block2">
                <iframe 
                    id="mapa"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5950.5393140724545!2d-8.203095784333406!3d41.77940185748708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2519c68d23d4f1%3A0x714ef48a2c4e0a77!2sAntiga%20aldeia%20de%20Vilarinho%20da%20Furna!5e0!3m2!1spt-PT!2spt!4v1680888405138!5m2!1spt-PT!2spt" 
                    width="650" 
                    height="450" 
                    style="border-radius: 8px;margin: 60px 28px 0px 0px ; float: right;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    >
                </iframe>
                
            </div> 
            <div  class="fade_ block2">
                <img src="../../fotos/trilha.png" alt="" style="height: 450px; width: 650px; border-radius: 8px;margin: 60px 28px 0px 0px ;  float: right;">
            </div>   
        </div>
        
        


    </div>
    </div>
<?php
    include_once __DIR__ . '../../../pages/templates/rodape.php'
?>