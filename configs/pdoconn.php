<?php

global $conn;

function conect($user, $senha){	
	session_start();
	try {
		$conn = new PDO('mysql:host=localhost;dbname=pep2_reservas', $user, $senha);
		
	} catch (PDOException $e) {
		echo "Error :". $e->getMessage();
	}
}
function queryEquips(){
$query= $conn->prepare("SELECT * FROM equips WHERE")
}
?>