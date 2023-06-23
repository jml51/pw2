<?php

require_once __DIR__ .'/../../../database/connections/repositorio.php';



$utilizadores = todos_utilizadores();

$ultimos = ultimos();

require_once __DIR__ . '/../../../pages/admin/templates/header.php';
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<main class="container">
    <div class="bg-light">
        <div class="row lign-items-center justify-content-center">

            <div class="col-5 rounded-4 p-3 text-white" style="background-color:#204060;">
                <h3>utilizadores</h3>
                <div class="row">
                    <div class="col lign-items-center justify-content-center    ">
                        <div class="table table text-white">
                            <table>
                                <?php foreach($ultimos as $ultimos){ ?>   
                                <tr> 
                                    <td><?= $ultimos['id'] ?></td>   
                                    <td><?= $ultimos['nome'] ?></td>
                                    <td><?= $ultimos['email'] ?></td>
                                    <td><?= $ultimos['administrador'] == '1' ? 'Sim' : 'Não' ?></td>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                    <div class="col lign-items-center justify-content-center text-center">
                        <a class="btn btn-outline-light" href="../admin_utilizadores/admin_utilizadores.php">utilizadores</a>
                    </div>
                </div>
            </div>

            <div class="col-1"></div>

            <div class="col-5 rounded-4 p-3 text-white" style="background-color:#204060;">
                <h3>conteudo</h3>
                <div class="row">
                    <div class="col lign-items-center justify-content-center    ">
                        <div class="table table text-white">
                            
                        </div>
                    </div>
                    <div class="col lign-items-center justify-content-center text-center">
                        <a class="btn btn-outline-light" href="../admin_conteudo/admin_conteudo.php">conteudo</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row"></div>
    </div>
</main>



    
<?php
# CARREGA O RODAPE PADRÃO
require_once __DIR__ . '/../../../pages/admin/templates/rodape.php';
?>