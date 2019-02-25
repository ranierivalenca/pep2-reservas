<?php 
try {
	$conect = new PDO('mysql:host=localhost; dbname=pep2_reservas', "root", "");
} catch (PDOException $e) {
		echo "Erro: ".$e->getmessage();
}
//Consultando as reservas
	$sql = "SELECT * FROM reservas";
	$queryOne = $conect->prepare($sql);
	$queryOne->execute();
	$stmt = $queryOne->fetchAll();

//Listando as reservas
	foreach ($stmt as $atributo => $reserva) {
		//Consultando os usuários
		$sql2 = "SELECT * FROM users WHERE id = ?";
		$querytwo = $conect->prepare($sql2);
		$querytwo->bindParam(1, $reserva["user_id"]);
		$querytwo->execute();
		$stmt2 = $querytwo->fetchAll();
			//Listando o nome do usuário
			foreach ($stmt2 as $key => $value) {
			echo $value["name"]." - ";
		}
		//Consultando as salas
		$sql3 = "SELECT * FROM salas WHERE id = ?";
		$querythree = $conect->prepare($sql3);
		$querythree->bindParam(1, $reserva["sala_id"]);
		$querythree->execute();
		$stmt3 = $querythree->fetchAll();
		//Listando o nome da sala
			foreach ($stmt3 as $chave => $valor) {
				echo $valor ["nome"]." - "; 
		}
		//Listando as horas
		echo $reserva["hora_ini"]." - ";
		echo $reserva["hora_fim"]." - ";
		echo "<br>";
	}
?>