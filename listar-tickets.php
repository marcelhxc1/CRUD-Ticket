<?php
session_start();
include './includes/header.php';
require './conn/conn.php';



include './includes/list.php';

?>
<?php include './includes/nav.php' ?>

<div class="container spaces spaces2">
    <div class="row">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titulo</th>
            <th scope="col">Descrição</th>
            <th scope="col">Data</th>
            <th scope="col">Prioridade</th>
            <th scope="col">Status</th>
            <th scope="col">Editar</th>
            <th scope="col">Remover</th>
          </tr>
        </thead>
        <tbody>
        <?php
            foreach($tickets as $key => $value):
        ?>
          <tr>
            <th scope="row"><?= $value['id'] ?></th>
            <td><?= $value['titulo'] ?></td>
            <td><?= $value['descricao'] ?></td>
            <td><?= $value['data'] ?></td>
            <td><?= $value['prioridade'] ?></td>
            <td><?= $value['status'] ?></td>
            <form action="/editar-tickets.php" method="POST">
                <input type="hidden" name="id" value="<?= $value['id'] ?>" />
                <td><button class="tim">Editar
                </button></td>
            </form>
            <form action="./includes/deletar.php" method="POST">
                <input type="hidden" name="id" value="<?= $value['id'] ?>" />
                <td><button class="tim">Remover
                </button></td>
            </form>
            </tr>
        <?php
          endforeach;
        ?>
        </tbody>
      </table>
  </div>
</div>
<script src="https://use.fontawesome.com/8329355284.js"></script>
<?php 

include './includes/footer.php';

?>