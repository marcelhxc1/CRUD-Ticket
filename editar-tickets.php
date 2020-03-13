<?php
session_start();
include './includes/header.php';
require './conn/conn.php';

$id = $_POST['id'];

include './includes/edite.php';

?>

    <?php include './includes/nav.php' ?>
      <div class="container">
        <div class="row text-center">
          <h1 class="text-center h12">Edite seu chamado</h1>
        </div>
      </div>
      <div class="container spaces">
        <div class="row formu2">
          <form method="post" action="./includes/edit.php" name="forms">
            <div class="form-row">
              <div class="form-group coluna">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control" id="titulo" required name="titulo" placeholder="Seu titulo aqui" value="<?= $tickets[0]['titulo'] ?>">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group coluna">
                <label for="descricao">Descrição do Problema</label>
                <textarea class="form-control coluna" id="texto" rows="3" required name="descricao" placeholder="<?= $tickets[0]['descricao'] ?>"></textarea>
              </div>
            </div>
            <div class="form-group coluna">
              <label for="data">Data</label>
              <input type="text" class="form-control" id="data"  name="data" readonly=“true” value="<?= date("d/m/Y"); ?>">
            </div>
            <div class="form-group coluna">
              <label for="prioridade">Prioridade</label>
              <select id="prioridade" class="form-control" required name="prioridade">
                  <option selected value="">Escolha a prioridade</option>
                  <option value="Alta">Alta</option>
                  <option value="Média">Média</option>
                  <option value="Baixa">Baixa</option>
                </select>
            </div>
            <div class="form-group coluna">
              <label for="status">Status</label>
              <select id="status" class="form-control" required name="status">
                  <option selected value="">Status</option>
                  <option value="Aberto">Aberto</option>
                  <option value="Fechado">Fechado</option>
                  <option value="Redirecionado">Redirecionado</option>
                </select>
            </div>
            <input type="hidden" name="id" value="<?= $id ?>" />
            <button type="submit" class="btn btn-primary">Editar chamado</button>
          </form>
        </div>
      </div>
        

<?php 

include './includes/footer.php';

?>