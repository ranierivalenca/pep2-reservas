<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reservas PeP2</title>
</head>
<body>

	<h1>Reservas</h1>
	<br>
	
	<form id="busca">
		<h3>Buscar salas por horário</h3>
		<hr><br>
		<label>
			Dia: <input type="date" name="dia" required>
		</label><br><br>
		<label>
			Início: <input type="time" name="inicio" required>
		</label><br><br>
		<label>
			Término: <input type="time" name="termino" required>
		</label>
		<br><br>
		<button type="submit">Buscar Salas</button>
	</form>
	<br><hr>

	<div id="list-salas"></div>


	<script src="../js/jquery-3.3.1.min.js"></script>
	<script>
		
	$("#busca").on('submit', function(e){
		e.preventDefault();

		var dia = $("#busca input[name='dia']").val();
		var inicio = $("#busca input[name='inicio']").val();
		var termino = $("#busca input[name='termino']").val();

		$.ajax({
			url:'consultar-salas.php',
			type:'POST',
			data:{dia:dia, inicio:inicio, termino:termino},
			success: function(data){
				$("#list-salas").html(data);
			}
		});
	});

	</script>

</body>
</html>