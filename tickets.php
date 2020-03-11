<?php
session_start();

include './includes/header.php';
require './conn/conn.php';

?>

        <h1>Sistema de Login ULTIMATE PHP</h1>
 
        <?php if (isLoggedIn()): ?>
            <p>Olá, <?php echo $_SESSION['user_name']; ?>. <a href="panel.php">Painel</a> | <a href="logout.php">Sair</a></p>
        <?php else: ?>
            <p>Olá, visitante. <a href="form-login.php">Login</a></p>
        <?php endif; ?>


<?php 

include './includes/footer.php';

?>