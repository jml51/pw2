<?php

  require_once __DIR__ .'/../../../src/utils/auxiliadores.php';


  require_once __DIR__ .'/../../../database/connections/request.php';

  $admin = utilizador();  

  $data = furna();
    
  require_once __DIR__ . '/../../../pages/admin/templates/header.php';
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<script src="./admin_conteudo.js"></script>
  
<div class="container" >

  <div class="row">
      <?php 
      if(isset($_SESSION['erros'])){
        echo '<div class="alert alert-danger">';
        foreach($_SESSION['erros'] as $erro){
            echo $erro;
        }
        echo '</div>';
      }
      unset($_SESSION['erros']);

      if(isset($_SESSION['sucesso'])){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
        echo $_SESSION['sucesso'] . '<br>';
        echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        echo '</div>';
      }
      unset($_SESSION['sucesso']);
      ?>

  </div>

  
   <!-- Indicators/dots -->
   <div class="row align-items-center justify-content-center m-3">
    <button type="button" id="index" onclick="page_shange('p_index')"  class="col-2 m-2  btn btn-outline-dark">main</button>
    <button type="button" id="furna" onclick="page_shange('p_furna')"  class="col-2 m-2 btn btn-outline-dark" >furna</button>
    <button type="button" id="mapa"  onclick="page_shange('p_mapa')"   class="col-2 m-2  btn btn-outline-dark" >map</button>
  </div>
  
  

  <div class="carousel-inner" id="display">
    <div class="req bg-dark text-white" id="p_index" style="display:none">
          <?= require __DIR__ . "/../../../pages/admin/admin_conteudo/interface/ad_index.php";?>
    </div>

    <div class="req bg-dark text-white" id="p_furna" style="display:none">
          <?= require __DIR__ . '/../../../pages/admin/admin_conteudo/interface/ad_furna.php';?> 
    </div>

    <div class="req bg-dark text-white" id="p_mapa" style="display:none">
          <?= require __DIR__ . '/../../../pages/admin/admin_conteudo/interface/ad_mapa.php';?>
    </div>
    
  </div>
  
  
 
</div>


<?php
  require_once __DIR__ .'/../../../pages/admin/templates/rodape.php';
?>