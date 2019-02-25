<?php https://github.com/ranierivalenca/pep2-reservas.git

if (isset( $_POST['login']) && isset($_POST['senha'])){ //verifica se as variaveis estão setadas

	$login = $_POST['login'];
	$senha = $_POST['senha'];
	include "configs/init.php";

	$stmt = $conn -> prepare("SELECT * FROM users WHERE username = :login AND senha = :senha"); 
	$stmt -> bindParam(':login' ,$login); //seleciona o login e senha correspondente ao user e senha
	$stmt -> bindParam(':senha',md5($senha));
	$stmt -> execute();

	if ($stmt -> rowCount() >= 1){ //se a consulta for bem sucessida ele loga o user com, o login "id " and "username"
 		$result = $stmt -> fetch();
		session_start();
		$_SESSION['username'] = $login;
		$_SESSION['id_user'] = $result['id'];
		echo "logado";

	}else{

		echo "não logado"; //teste do não logado para substituir posteriormente

	}
}
?>