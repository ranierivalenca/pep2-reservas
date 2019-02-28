<?php 
require_once "configs/pdoconn.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Edite sua reserva</title>
	<link rel="stylesheet" href="edit.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
<!-- Div container onde todo conteúdo ficará presente	 -->
	<div id="container">
		<!-- Div do formulário -->
		<div id="form-camp">
			<h2>Olá, <span><?= $_SESSION['user']."  =)"?></span></h2><br>
			<h1>Edite sua <span>Reserva :</span></h1><br>	
			<form action="edit_reservas.php" method="post">
				<label for="salas">Salas :
					<select name="salas" id="salas">
						<?php foreach ($result as $id => $value):?>
							<option value="<?= $id ?>"><?= $value['nome']?></option>
						<?php endforeach; ?>	
					</select>
				</label>
				<br><br>
					<h2>Horários <span>Disponíveis :</span></h2><br><hr><br>	
				<label for="1">Hora de inicio:	
					<!-- inputs de hora, seus values serão o retorno do banco de dados -->
					<input type="time" name="hora-inicio" id="1" value="00:00" min="1:00" max="3:00" required="">
				</label>
				<label for="2">Hora do término:
					<input type="time" name="hora-fim" id="2" value="00:00" required="">
				</label><br><br>
				<h2>Equipamentos <span> Reservados :</span></h2><br>
				<table id="form-table">
					<thead>
						<tr>
							<th>Tipos</th>
							<th>Equipamentos</th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>
						<!-- <tr>
							<td>Projetor</td>
							<td><input type="number" min="0" name="projetor"></td>
							<td><a href=""><i class="fas fa-trash-alt"></i></a></td>
						</tr> -->
					</tbody>
				</table>
			<!-- <a href="#"><button>voltar</button></a>  -->
				<br><button>Atualizar <i class="fas fa-edit"></i></button>
			</form>
		</div>
	</div>	
</body>
</html>