<?php

	include_once 'conn.php';

	$dia = $_POST['dia'];
	//horário de início da reserva
	$inicio = $dia . " " . $_POST['inicio'];
	//horário de término da reserva
	$termino = $dia . " " . $_POST['termino'];
	
	//query para seleção das salas onde o id não consta na tabela de reservas ou a data e horário não entram em conflito com
	//as especificadas pelo usuário
	$salas = $pdo->prepare("SELECT salas.id, salas.nome, salas.bloco FROM salas JOIN reservas ON salas.id != reservas.sala_id OR (? NOT BETWEEN reservas.hora_ini AND reservas.hora_fim AND ? NOT BETWEEN reservas.hora_ini AND hora_fim) OR (? >= reservas.hora_fim OR ? <= reservas.hora_ini);");
	$salas->execute([$inicio, $termino, $inicio, $termino]);
	$salas = $salas->fetchAll(PDO::FETCH_ASSOC);

?>

<h2>Salas Disponíveis</h2>
<table width="50%" cellspacing="0" cellpadding="10" align="center" border="1">
	<tr>
		<th>Nome</th>
		<th>Bloco</th>
		<th>---</th>
	</tr>
	<?php foreach ($salas as $sala): ?>
		<tr>
			<td><?= $sala['nome'] ?></td>
			<td><?= $sala['bloco'] ?></td>
			<td><a href="#?idSala=<?=$sala['id']?>">Reservar Sala</a></td>
		</tr>
	<?php endforeach; ?> 
</table>