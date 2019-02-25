<?php

$tipo = $_POST['tipo'];

include 'conexao.php';


$u = new Conexao();
$u->cadastroDeTipo($tipo);
header('location:cadastroTipo.php');

?>