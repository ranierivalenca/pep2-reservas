<!DOCTYPE html>
<html>
<head>
	<title>Cadastro usuario</title>
	<link rel="stylesheet" href="/_css/cadastro_user.css">
	<script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>
</head>
<body>
	<fieldset id="fieldform">
		<form action="register.php" method="POST" id="formfield">
			<label for="nome">Name</label>
			<input type="text" title="Nome" name="nome">
			
			<label for="username">Username</label>
			<input type="text" title="Username" name="username">
			
			<label for="email">E-mail</label>
			<input type="text" title="E-mail" name="email">
			
			<label for="senha">Senha</label>
			<input id="senha" type="password" title="Senha" name="senha">
			
			<label for="confirmarsenha">Confirmar Senha</label>
			<input id="confirma" type="password" title="Confirmar senha" name="confirmarsenha">
		
			<input type="submit">
		</form>
	</fieldset>
	<script type="text/javascript">
		$('#formfield').on('submit', function(event) {
			event.preventDefault();
			$.ajax({
				url: $(this).attr('action'),
				type: 'POST',
				data: $(this).serialize(),
				success: function(res){
					$('#formfield').reset();
				}
			})
			
		});
	</script>
</body>
</html>