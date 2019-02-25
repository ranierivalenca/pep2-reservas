<?php

$conexao= new PDO("mysql:host=localhost; dbname=pep2_reservas", 'root', 'ifpe');

$id = $_GET['$id'];

$add=$conexao->prepare("DELETE FROM reservas WHERE id = '$id'");

header('location:index.php');


?>