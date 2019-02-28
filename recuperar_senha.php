<?php session_start();
$_SESSION['user_name'] = "admin";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recuperar Senha</title>
	<script src="jquery-3.3.1.min.js"></script>
	<style>
		body{
			background: #FFFDFD;
		}
		.container{	
			margin: 1em auto;  	
			width: 960px;  	
		}
		.pos{
			width: 15%;
			height: 27%;
			left: 40%;
			top: 30%;
			position: absolute;
			border-radius: 2px;
			background-color: #FCFBFB;
		}

		input{
			border-radius: 5px;
		}

	</style>
</head>
<body>
	<div class="container">
		<div class="pos" align="center" >
			<h1>Mudar Senha</h1>
			<form action="recSenha.php" onclick="valSenha()" method="POST" id="form-senha">
				<h3>Digite sua senha atual:</h3>
				<input type="password" name="senha_atual" placeholder="senha">
				<br>
				<h3>Digite sua nova senha:</h3>
				<input type="password" name="senha_01" id="n1" placeholder="nova senha">
				<br>
				<h3>Confirme sua nova senha:</h3>
				<input type="password" name="senha_02" id="n2" placeholder="nova senha">
				<br>
				<input type="submit" value="Salvar">
			</form>
		</div>
	</div>
<script>
	function valSenha(){
		var n1 = document.getElementById('n1').value;
		var n2 = document.getElementById('n2').value;
		$("#form-senha").on("submit", function(e){
			e.preventDefault();

			if (n1 != n2) {
				alert("As senhas devem ser iguais");
			} else {
				$.ajax({
					type: "POST",
					datatype: 'json',
					url: $(this).attr('action'),
					data: $(this).serialize(),
					success: function(row){
						row = JSON.parse(row);

						if (row.status == "ok") {
							alert("Senha alterada com secesso");
						} else {
							alert("Senha incorreta");
						}

					}
				});	

			}
		});
	}

	valSenha();
</script>
</body>
</html>