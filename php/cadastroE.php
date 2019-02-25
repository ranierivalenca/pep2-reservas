<?php

$nome =$_POST['nome'];
$type_id = $_POST['type_id'];
 
 include 'conexao.php';

 
 $a = new Conexao();
 $a->cadastroDeEquip($nome,$type_id);

 header('location:cadastroTipo.php');	
?>