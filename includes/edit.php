<?php
include './includes/header.php';
require '../conn/conn.php';

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$data = $_POST['data'];
$prioridade = $_POST['prioridade'];
$status = $_POST['status'];


$PDO = db_connect();

$sql1 = "UPDATE tickets SET titulo = '" . $titulo . "' , descricao = '" . $descricao . "' , data = '" . $data . "' , prioridade = '" . $prioridade . "', status = '" . $status . "'  WHERE id = '" . $id . "'";
$stmt = $PDO->prepare($sql1);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);


header('Location: /listar-tickets.php');
?>