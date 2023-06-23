<?php
 
    include_once __DIR__ . '/../../../../database/connections/request.php';


    $data = furna();
    
?>

<link rel="stylesheet" href="/pages/admin/admin_conteudo/interface/interface.css" />

<div class="container p-5">
        <div class="align-items-center justify-content-center">
            <form enctype="multipart/form-data" action="/src/controller/admin/contr_conteudo.php"  method="post">
                <button class="btn btn-outline-secondary" name="conteudo" value="furna" type="submit">gravar</button>
                <div class="row mb-3">
                    <div class="col bg-dark text-white mt-3" >
                        <div class="row mb-3">
                            <input type="text" name="titulo" value="<?= $data['titulo'] ?>">
                        </div>   
                        <div class="row ">
                            <textarea name="texto1" id="" cols="30" rows="10"><?= $data['texto1'] ?></textarea>
                        </div>     
                    </div>
                    <div class="col  bg-dark">
                        <div >
                            <label for="img1" class="col-6"><img src="<?= $data['img1'] ?>" alt=""></label>
                            <input type="file" id="img1" accept="image/*" name="img1" style="display: none;">
                            
                        </div>    
                    </div>
                </div>
                <div class="row">
                <div class="col-6"></div>
                    <div class=" mb-2">
                        <textarea name="texto2" id="" cols="90" rows="10"><?= $data['texto2'] ?></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
