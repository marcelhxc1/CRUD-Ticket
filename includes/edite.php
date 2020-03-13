<?php
$PDO = db_connect();

$user = $_SESSION['user_name'];


$PDO = db_connect();
$sql1 = "SELECT * FROM users WHERE name =" . " '$user' " ;
$stmt = $PDO->prepare($sql1);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

$retorno = $users[0]['id'];

$sql = "SELECT * FROM tickets WHERE id =" . " '$id' " . "AND usuario =" . " '$retorno' ";
$stmt = $PDO->prepare($sql);
$stmt->execute();
$tickets = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>