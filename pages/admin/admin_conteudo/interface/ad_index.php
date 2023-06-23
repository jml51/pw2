<?php
 
    include_once __DIR__ . '/../../../../database/connections/request.php';

    @require_once __DIR__ . '/../../../../src/middleware/admin.php';

    $data = index();
    
?>

<link rel="stylesheet" href="/pages/admin/admin_conteudo/interface/interface.css" />

    <div class="container p-5">
        <div class="align-items-center justify-content-center">
            <form enctype="multipart/form-data" action="/src/controller/admin/contr_conteudo.php"  method="post">
                <button class="btn btn-outline-secondary" name="conteudo" value="main" type="submit">gravar</button>
                <div class="row">
                    <input type="text"  name="titulo" value="<?= $data['titulo'] ?>">
                </div>
                <div class="row">
                    <label for="img2" class="col-6"><img src="<?= $data['img2'] ?>" alt=""></label>
                    <input type="file" id="img2" accept="image/*" name="img2" style="display: none;">
                    <div class="col-6"></div>
                </div>
                <div class="row">
                <div class="col-6"></div>
                    <div class="col-6 mb-2">
                        <textarea name="texto1" id="" cols="50" rows="10"><?= $data['texto1'] ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="m-3">
                        <textarea name="texto2" id="" cols="100" rows="8"><?= $data['texto2'] ?></textarea>                </div>
                    <div class="m-3">
                        <textarea name="texto3" id="" cols="100" rows="8"><?= $data['texto3'] ?></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>

    

