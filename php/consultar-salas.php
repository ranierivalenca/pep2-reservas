<?php

	include_once 'conn.php';

	$dia = $_POST['dia'];
	//horário de início da reserva
	$inicio = $dia . " " . $_POST['inicio'];
	//horário de término da reserva
	$termino = $dia . " " . $_POST['termino'];
	//array para guardar salas disponíveis
	$disponiveis = [];

	//query guardando todas as salas cadastradas
	$salas = $pdo->prepare("SELECT * FROM salas");
	$salas->execute();
	$salas = $salas->fetchAll(PDO::FETCH_ASSOC);

	//query guardando todas as salas reservadas na data e horário designados
	$reservadas = $pdo->prepare("SELECT sala_id FROM reservas WHERE ? BETWEEN hora_ini AND hora_fim OR ? BETWEEN hora_ini AND hora_fim");
	$reservadas->execute([$inicio, $termino]);
	$reservadas = $reservadas->fetchAll(PDO::FETCH_ASSOC);

	//caso não haja reservas no dia e horário designados, todas as salas são disponíveis
	if(count($reservadas) < 1){
		$disponiveis = $salas;

	//caso contrário é comparado o id da sala com o id da sala reservada (FK) 
	}else{
		for($i=0; $i < sizeof($salas); $i++){
			for($j=0; $j < sizeof($reservadas); $j++){
				//caso as id's sejam diferentes a sala está disponível, preenchendo um espaço na array de salas disponíveis
				if($salas[$i]['id'] != $reservadas[$j]['sala_id']){
					array_push($disponiveis, ['nome' => $salas[$i]['nome'], 'bloco' => $salas[$i]['bloco']]);
				}
			}
		}
	}
?>

<h2>Salas Disponíveis</h2>
<table width="50%" cellspacing="0" cellpadding="10" align="center" border="1">
	<tr>
		<th>Nome</th>
		<th>Bloco</th>
	</tr>
	<?php foreach ($disponiveis as $sala): ?>
		<tr>
			<td><?= $sala['nome'] ?></td>
			<td><?= $sala['bloco'] ?></td>
		</tr>
	<?php endforeach; ?> 
</table>
