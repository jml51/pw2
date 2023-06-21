<?php



require_once __DIR__ .'/../../../src/utils/auxiliadores.php';

require_once __DIR__ .'/../../../database/request.php';

require_once __DIR__ .'/../../../database/request.php';

$admin = utilizador();  

$data = furna();

require_once __DIR__ . '/../../../pages/admin/templates/header.php';
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">





<?php 
  echo $data['img1'];
?>


  <!--
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images//environment//Vilarinho-da-Furna.jpg" alt="Los Angeles" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="/images//environment//trilha.png" alt="Chicago" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <?php 
        require_once __DIR__ . '/../../../pages/admin/templates/rodape.php';
      ?>
    </div>
  </div>
  
  
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div class="container-fluid mt-3">
  <h3>Carousel Example</h3>
  <p>The following example shows how to create a basic carousel with indicators and controls.</p>
</div>
-->
</body>
</html>