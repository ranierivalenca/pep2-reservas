<?php
//Mude aqui as Menssagens
$mensagem = "Senha alterada com sucesso"; //Menssagem exibida se a senha for alterada com sucesso
$mensagem1 = "Error ao alterar a senha"; // Mensagem de error caso a senha não foi alterada


if(isset($_POST['login']) && isset($_POST['senha']) && isset($_POST['nsenha']) && isset($_POST['type']) && $_POST['type'] == "1") {
	require('SQL.php');
	$login = anti_injection($_POST['login']);
	$senha = md5(anti_injection($_POST['senha']));
	$nsenha = md5(anti_injection($_POST['nsenha']));
	$query = mysql_query("SELECT * FROM usuarios WHERE login='$login' AND senha='$senha'") or die(mysql_error());
	$n_rows = mysql_num_rows($query);
	$row = mysql_fetch_assoc($query);
	if($n_rows > "0"){
		$update = mysql_query("UPDATE usuarios SET senha='$nsenha' WHERE login='$login'") or die(mysql_error());
		echo "<font face=\"verdana\" color=\"#FF0000\"><b>" . $mensagem . "</b></font><br>";
	} else {
		echo "<font face=\"verdana\" color=\"#FF0000\"><b>" . $mensagem1 . "</b></font><br>";
	}
}

if(isset($_POST['login']) && isset($_POST['email']) && isset($_POST['nsenha']) && isset($_POST['type']) && $_POST['type'] == "2") {
	require('SQL.php');
	$login = anti_injection($_POST['login']);
	$email = anti_injection($_POST['email']);
	$nsenha = md5(anti_injection($_POST['nsenha']));
	$query = mysql_query("SELECT * FROM usuarios WHERE login='$login' AND email='$email'") or die(mysql_error());
	$n_rows = mysql_num_rows($query);
	$row = mysql_fetch_assoc($query);
	if($n_rows > "0"){
		$update = mysql_query("UPDATE usuarios SET senha='$nsenha' WHERE login='$login'") or die(mysql_error());
		echo "<font face=\"verdana\" color=\"#FF0000\"><b>" . $mensagem . "</b></font><br>";
	} else {
		echo "<font face=\"verdana\" color=\"#FF0000\"><b>" . $mensagem1 . "</b></font><br>";
	}
}
?>
<html>
<head>
<title>Mudar Senha</title>
</head>
<body>

<form name="form1" id="form1" action="mudar_senha.php" method="POST">
<center>
<table border="0" width="100%">
<tr>
<td>Login:</td>
<td><input type="text" name="login" id="login">
</td>
</tr>
<tr>
<td>Senha Antiga:</td>
<td><input type="password" name="senha" id="senha">
</td>
</tr>
<tr>
<td>Nova Senha:</td>
<td><input type="password" name="nsenha" id="nsenha">
</td>
</tr>
<tr>
<td>E-mail:</td>
<td><input type="text" name="email" id="email">
</td>
</tr>
<tr>
<td>Tipo:</td>
<td><input name="type" type="radio" value="1">
  Selecione aqui caso voc&ecirc; saiba sua senha antiga.<br>
  <input name="type" type="radio" value="2">
  Selecione aqui caso voc&ecirc; n&atilde;o saiba  sua senha antiga.</td>
</tr>
<tr>
<td></td>
<td><input name="submit" type="submit" value="Mudar Senha"></td>
</tr>
</table>
</center>
</form>
</body>
</html>