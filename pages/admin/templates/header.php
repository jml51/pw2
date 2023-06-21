<?php 
        @session_start();

        $page = $_SERVER['PHP_SELF'];

        include_once __DIR__ . '/../../../src/utils/auxiliadores.php';

        require_once __DIR__ . '/../../../src/middleware/admin.php';

        $admin = utilizador()

?>
<!DOCTYPE html> 
<html lang="en">
<head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="icon" type="image/x-icon" href="/images/environment/logo-associao.png">
        
        <title>Furna.PW</title>
        
</head>
<body class="container bg-light">
  <div class="row">
    <div class="pt-1 col-3">
      <div class="p-3 mb-1 ">
        <h1>Administraçao</h1>
        <p>admins | back-office | Back-end PHP</p>
      </div>
    </div>
    <section class="pt-1 col-9">
    <div class="table-responsive p-3 mb-5 ">
      <table class="table">
        <thead class="table-secondary">
          <tr>
            <th scope="col">Nome</th> 
            <th scope="col">Telemóvel</th>
            <th scope="col">Email</th>
            <th scope="col">nif</th>
            <th scope="col">telemovel</th>
            
            <th scope="col" class="text-center">Gerenciar</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <th scope="row"><?= $admin['nome'] ?></th>
              <td><?= $admin['telemovel'] ?></td>
              <td><?= $admin['email'] ?></td>
              <td><?= $admin['nif'] ?></td>
              <td><?= $admin['telemovel'] ?></td>
              
              <td>
                <div class="d-flex justify-content">
                  <a href="/src/controller/admin/contr_utilizador.php? <?= 'utilizador=atualizar&id=' . $admin['id'] ?>"><button type="button" class="btn btn-primary me-2">Atualizar</button></a>
                  <a href="/index.php" class="btn btn-danger ">sair</a>
                </div>
              </td>
            </tr>
        </tbody>
      </table>
    </div>
  </section>
  </div> 
  