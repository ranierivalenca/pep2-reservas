<?php 
include 'conexao.php';
$nome=$_POST['nome'];
$bloco=$_POST['bloco'];

$pdo=$conn -> prepare("INSERT INTO salas (nome, bloco ) values (?,?)");
$pdo -> bindParam(1,$nome);
$pdo -> bindParam(2,$bloco);
$pdo -> execute();

header("Location: cadSala.php");


 ?>