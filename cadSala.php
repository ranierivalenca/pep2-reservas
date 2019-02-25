<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de salas</title>
	<style type="text/css">
		div.formgroup{
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
 <form method="POST" action="addSala.php">
	<fieldset>
		<legend>Cadastrar salas</legend>
		<div class="formgroup">
		 	<label>Nome da sala: </label>
		 	<input type="text" name="nome">		
		</div>
		<div class="formgroup">
		 	<label>Bloco: </label>
		 	<input type="text" name="bloco">
		</div>
	 	<input type="submit" value="Cadastrar">
	</fieldset>
 </form>
	
</body>
</html>