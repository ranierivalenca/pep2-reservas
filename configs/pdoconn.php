<?php

global $conn;

function conect($user, $senha){	
	try {
		$conn = new PDO('mysql:host=localhost;dbname=pep2_reservas', $user, $senha);
		
	} catch (PDOException $e) {
		echo "Error :". $e->getMessage();
	}
}

function edit_reservas(){

}

?>