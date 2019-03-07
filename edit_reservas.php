<?php

require_once 'configs/pdoconn.php';

$dados = filter_input_array(INPUT_POST);

$horaIni = $dados['date']." ".$dados['hora-inicio'];
$horaFim = $dados['date']." ".$dados['hora-fim'];

$query=$conn->prepare("SELECT salas.id, salas.nome, salas.bloco FROM salas 
	JOIN reservas ON salas.id != reservas.sala_id OR (? NOT BETWEEN reservas.hora_ini AND reservas.hora_fim AND ? NOT BETWEEN reservas.hora_ini AND reservas.hora_fim) OR (? >= reservas.hora_fim OR ? <= reservas.hora_ini)");

$query->execute([$horaIni, $horaFim, $horaIni, $horaFim]);

$result = $query->fetchAll(PDO::FETCH_ASSOC);

?>
	<table id="form-table">
		<thead>
			<tr>
				<th>Salas</th>
				<th>Blocos</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
				<tr>
					<?php foreach ($result as $key => $value): ?>
				</tr>
		</tbody>
	</table>

