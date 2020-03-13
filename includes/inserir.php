<?php
 session_start();
// inclui o arquivo de inicialização
require '../conn/conn.php';
 
// resgata variáveis do formulário
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$data = $_POST['data'];
$prioridade = $_POST['prioridade'];
$status = $_POST['status'];
$user = $_SESSION['user_name'];


$PDO = db_connect();
$sql1 = "SELECT * FROM users WHERE name =" . " '$user' " ;
$stmt = $PDO->prepare($sql1);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);


$sql = "INSERT INTO tickets (id, titulo, descricao,data,prioridade,status, usuario) VALUES (?,?,?,?,?,?,?)";
$stmt = $PDO->prepare($sql);
$stmt->execute(['', $titulo, $descricao, $data, $prioridade, $status, $users[0]['id']]);

header('Location: /tickets.php');