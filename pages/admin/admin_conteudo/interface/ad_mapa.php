<?php
 
    include_once __DIR__ . '/../../../../database/connections/request.php';


    $data = mapa();
    
?>

<link rel="stylesheet" href="/pages/admin/admin_conteudo/interface/interface.css" />


    <main class="container p-5">
        <form enctype="multipart/form-data" action="/src/controller/admin/contr_conteudo.php" method="post">
            <button class="btn btn-outline-secondary" name="conteudo" value="mapa" type="submit">gravar</button>
            <div class="row">
                    <div class="col-6">
                        <input class="m-3" type="text" name="titulo" value="<?= $data['titulo']?>">
                        <div class="col m-3">
                            <textarea name="texto1" id="" cols="60" rows="10"><?= $data['texto1']?></textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="col-4 m-3">
                            <label for="img2" class="col-6"><img src="<?= $data['img2'] ?>" alt=""></label>
                            <input type="file" id="img2" accept="image/*" name="img2" style="display: none;">
                            <div class="col-6"></div>
                        </div>
                    </div>
            </div>
        </form>
    </main>
    
