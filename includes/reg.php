<?php

// inclui o arquivo de inicialização
require '../conn/conn.php';
 
// resgata variáveis do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['password'];

$passwordHash = make_hash($senha);


$PDO = db_connect();

$sql = "INSERT INTO users (id, name, email ,password) VALUES (?,?,?,?)";
$stmt = $PDO->prepare($sql);
$stmt->execute(['', $nome, $email, $passwordHash]);

header('Location: /index.php');