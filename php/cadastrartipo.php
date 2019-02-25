<?php

$tipo = $_POST['tipo'];

include 'conexao.php';

$u = new users;
$u->conexao();
$u->cadastroDeTipo($tipo);
header('location:cadastroTipo.php');

?>