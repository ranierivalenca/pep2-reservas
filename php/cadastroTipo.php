<?php
session_start();

include 'conexao.php';


$u = new Conexao();


$_comp=$u->conn->prepare('SELECT id,tipo FROM equip_types');
$_comp->execute();
$show=$_comp->fetchALL(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<fieldset>
	<form action="cadastrartipo.php" method="POST">
		
		<h3>Cadastro do tipo do Equipamento</h3>
		
		<p>escreva o tipo <input type="text" name="tipo" placeholder="Tipo"></p>

		<input type="submit" value="cadastrar">
	</form>
</fieldset>
<fieldset>
	<form action="cadastroE.php" method="POST">
		<h3>cadastro do Equipamento</h3>
		
		<p>nome do equipamento<input type="text" name="nome" placeholder="Equipamento"></p>
		
		<p>selecione o tipo do equipamento <select name="type_id" >
                <?php foreach ($show as $see ) :?>
                    <option   value="<?=$see['id']?>"><?=$see['tipo']?></option>
                <?php endforeach ; ?>
                </select></p> 
		<input type="submit" value="cadastrar Equipamento">
	</form>
</fieldset>
</body>
</html>