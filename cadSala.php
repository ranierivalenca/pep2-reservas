<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de salas</title>
	<style type="text/css">
		div.formgroup{
			margin-bottom: 10px;
		}
		fieldset{
			width: 500px;
			margin: auto;
		}
	</style>
</head>
<body>
	<h1>Cadastro de Salas</h1>
	<p>As salas devem serem cadastradas com um nome e o bloco onde se encontram.</p>
	<hr>
	<form method="POST" action="addSala.php">
		<fieldset>
			<legend>Cadastrar salas</legend>
			<div class="formgroup">
			 	<label>Nome da sala: </label><br>
			 	<input type="text" name="nome">		
			</div>
			<div class="formgroup">
			 	<label>Bloco: </label><br>
			 	<input type="text" name="bloco">
			</div>
		 	<input type="submit" value="Cadastrar">
		</fieldset>
	</form>
	
</body>
</html>