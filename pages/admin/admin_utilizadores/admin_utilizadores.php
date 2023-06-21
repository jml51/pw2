<?php

require_once __DIR__ .'/../../../database/repositorio.php';

require_once __DIR__ .'/../../../src/utils/auxiliadores.php';

$admin = utilizador();  

$utilizadores = todos_utilizadores();

require_once __DIR__ . '/../../../pages/admin/templates/header.php';
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<main class="bg-light">
  <section class="py-4">
    <div class="d-flex justify-content">
      <a href="../criar_utilizador/criar_utilizador.php"><button class="btn btn-success px-4 me-2">Criar Utilizador</button></a>
      <a href="../administraçao/administraçao.php"><button class="btn btn-info px-2 me-2">Sair Administração</button></a>
      <form action="/src/controller/client/contr_autenticar.php" method="post">
        <input type="hidden" name="page" value="<?php echo $page; ?>">
        <button class="btn btn-danger px-4" type="submit" name="utilizador" value="logout">Fazer Logout</button>
      </form>
    </div>
  </section>
  <section>
    <?php
    # MOSTRA AS MENSAGENS DE SUCESSO E DE ERRO VINDA DO CONTROLADOR-UTILIZADOR
    if (isset($_SESSION['sucesso'])) {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
      echo $_SESSION['sucesso'] . '<br>';
      echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
      unset($_SESSION['sucesso']);
    }
    if (isset($_SESSION['erros'])) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
      foreach ($_SESSION['erros'] as $erro) {
        echo $erro . '<br>';
      }
      echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
      unset($_SESSION['erros']);
    }
    ?>
  </section>
  <section>
    <div class="table-responsive">
      <table class="table mb-">
        <thead class="table-secondary">
          <tr>
            <th scope="col">Nome</th> 
            <th scope="col">NIF</th>
            <th scope="col">Telemóvel</th>
            <th scope="col">Email</th>
            <th scope="col">Administrador</th>
            <th scope="col">Gerenciar</th>
          </tr>
        </thead>
        <tbody>
          <?php
          # VARRE TODOS OS UTILIZADORES PARA CONSTRUÇÃO DA TABELA
          foreach ($utilizadores as $utilizador) {
          ?>
            <tr>
              <th scope="row"><?= $utilizador['nome'] ?></th>
              <td><?= $utilizador['nif'] ?></td>
              <td><?= $utilizador['telemovel'] ?></td>
              <td><?= $utilizador['email'] ?></td>
              <td><?= $utilizador['administrador'] == '1' ? 'Sim' : 'Não' ?></td>
              <td>
                <div class="d-flex justify-content">
                  <a href="/src/controller/admin/contr_utilizador.php? <?= 'utilizador=atualizar&id=' . $utilizador['id'] ?>"><button type="button" class="btn btn-primary me-2">Atualizar</button></a>
                  <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#deletar<?= $utilizador['id'] ?>">Deletar</button>
                </div>
              </td>
            </tr>
            <!-- Modal -->
            <div class="modal fade" id="deletar<?= $utilizador['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Deletar Utilizador</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Esta operação não poderá ser desfeita. Tem certeza que deseja deletar este utilizador: <b><?= $utilizador['nome']. "-" .$utilizador['id'] ?></b> ?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <a class="btn btn-danger" href="/src/controller/admin/contr_utilizador.php?<?= 'utilizador=deletar&id=' . $utilizador['id'] ?>">Confirmar</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fim Modal -->
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </section>
</main>
<?php
# CARREGA O RODAPE PADRÃO
require_once __DIR__ . '/../../../pages/admin/templates/rodape.php';
?>