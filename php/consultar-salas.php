<?php

	include_once 'conn.php';

	$inicio = $_POST['inicio'];
	$termino = $_POST['termino'];

	$stmt = $pdo->prepare("SELECT * FROM salas LEFT JOIN reservas WHERE !( reservas.hora_ini BETWEEN ? AND ?) OR !(reservas.hora_fim BETWEEN ? AND ?)");
	$stmt->execute([$termino, $inicio]);
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<pre>
	<?php print_r($data); ?>
</pre>
