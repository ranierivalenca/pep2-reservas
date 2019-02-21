<?php https://github.com/ranierivalenca/pep2-reservas.git
if (isset( $_POST['login']) && $_POST['senha']){

	$login = $_POST['login'];
	$senha = $_POST['senha'];
	include "configs/init.php";

	$stmt = $conn -> prepare("SELECT * FROM users WHERE username =? AND senha = ?");
	$stmt -> bindValue(1,$login);
	$stmt -> bindValue(2,$senha);
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