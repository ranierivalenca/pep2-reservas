<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Laila');
	* {
		font-family: 'Laila', serif;
	}
	fieldset{
		margin-left: 40em;
		margin-right: 40em;
		margin-top: 10em;
	}
</style>
<body>
	<h1> Autenticação </h1>
	<p> Tela de Autenticação do usuário </p>
<hr>
	<fieldset>
		<legend> Autenticação </legend>
			<div id="login" align="center">
			<form action="action_login.php" method="post">
				<label>Nome do usuario</label></br>
				<input type="text" name="login" required=""> <br><br>
				<label>Senha</label></br>
				<input type="password" name="senha" required=""><br><br>
				<input type="submit" name="enviar" value="Enviar">
			</form>
		</div>
	</fieldset>
</body>
</html>