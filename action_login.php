<?php https://github.com/ranierivalenca/pep2-reservas.git

if (isset( $_POST['login']) && isset($_POST['senha'])){

	$login = $_POST['login'];
	$senha = $_POST['senha'];
	include "configs/init.php";

	$stmt = $conn -> prepare("SELECT * FROM users WHERE username = :login AND senha = :senha");
	$stmt -> bindParam(':login' ,$login);
	$stmt -> bindParam(':senha',md5($senha));
	$stmt -> execute();

	if ($stmt -> rowCount() >= 1){
		$result = $stmt -> fetch();
		session_start();
		$_SESSION['username'] = $login;
		$_SESSION['id_user'] = $result['id'];
		echo "logado";

	}else{

		echo "não logado";

	}
}
?>