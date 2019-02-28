<?php

session_start();

$_SESSION['user'] = "floki";

// function conect($user, $pass){

	try {

		$conn = new PDO('mysql:host=localhost;dbname=pep2_reservas', "pep2", "pep2");

	} catch (PDOException $e) {

		echo "Error :". $e->getMessage();

		}

// }

// function listClassRooms($conn){

	$query=$conn->prepare("SELECT s.id, s.nome, s.bloco, r.id FROM salas s INNER JOIN reservas r ON s.id = r.sala_id");

	$query->execute();

	$result = $query->fetchAll(PDO::FETCH_ASSOC);

// }

	$queryEquips=$conn->prepare("SELECT te.id, te.tipo, e.id, e.nome, e.type_id, r.id, r.user_id, r.sala_id, re.id, re.equip_id FROM type_equips te 
		INNER JOIN equips e ON type.id = e.type_id 	
		INNER JOIN reservas_equips re ON e.id = re.equip_id 		
		INNER JOIN reservas r 
		");
	$queryEquips->execute([$_SESSION['user']]);

	$resultEquips = $queryEquips->fetchAll(PDO::FETCH_ASSOC);

	echo "<pre>";

	print_r($resultEquips);

	echo "</pre>";
?>