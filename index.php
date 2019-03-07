<?php require_once "configs/pdoconn.php"  ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Edite sua reserva</title>
	<link rel="stylesheet" href="edit.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<!-- Div container onde todo conteúdo ficará presente	 -->
	<div id="container">
		<!-- Div do formulário -->
		<div id="form-camp">
			<form action="edit_reservas.php" method="post" id="form">	
			<h2>Olá, <span><?= $_SESSION['user']."  =)"?></span></h2><br>
				<br>
				<h2>Horários <span>Disponíveis :</span></h2><br><hr><br>
				<label for="1">Data :
					<input type="date" name="date" style="width: 130px;">
				</label><br>
				<label for="2">Hora de inicio:	
					<!-- inputs de hora, seus values serão o retorno do banco de dados -->
					<input type="time" name="hora-inicio" id="2" value="00:00" min="1:00" max="3:00" required="">
				</label>
				<label for="3">Hora do término:
					<input type="time" name="hora-fim" id="3" value="00:00" required="">
				</label><br><br>
				<input type="submit"><br><br>
				<h2>Salas <span> Disponíveis :</span></h2><br>
			</form>
			<div id="list-salas"></div>
				<table id="form-table">
<script>

	$("#form").on('submit', function(e){
					e.preventDefault();
					$.ajax({
						url: 'edit_reservas.php',
						type: 'POST',
						data:$(this).serialize(),
						success: function(a){
							$("#list-salas").html(a);
						},
					});
				});
</script>
		</div>
	</div>	
</body>
</html>