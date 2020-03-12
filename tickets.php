<?php
session_start();

if (!isLoggedIn()):
header('Location: index.php');
endif;

include './includes/header.php';
require './conn/conn.php';

?>
    <?php include './includes/nav.php' ?>
      <div class="container">
        <div class="row text-center">
          <h1 class="text-center h12">Abra seu chamado!</h1>
        </div>
      </div>
      <div class="container">
        <div class="row formu2">
          <form method="post" action="inserir.php">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control" id="titulo" placeholder="Seu titulo aqui">
              </div>
              <div class="form-group col-md-6">
                <label for="descricao">Descrição do Problema</label>
                <textarea class="form-control" id="texto" rows="3" placeholder="Descreva seu problema aqui."></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="data">Data</label>
              <input type="text" class="form-control" id="data" readonly=“true” value="<?= date("d/m/Y"); ?>">
            </div>
            <div class="form-group">
              <label for="prioridade">Prioridade</label>
              <select id="prioridade" class="form-control">
                  <option selected>Escolha a prioridade</option>
                  <option value="Alta">Alta</option>
                  <option value="Média">Média</option>
                  <option value="Baixa">Baixa</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Abrir chamado</button>
          </form>
        </div>
      </div>
        

<?php 

include './includes/footer.php';

?>