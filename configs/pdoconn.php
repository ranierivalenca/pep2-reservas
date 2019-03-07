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


// }
?>