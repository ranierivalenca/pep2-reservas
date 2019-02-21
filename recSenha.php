<?php 
include 'configs/init.php';
$dados = filter_input_array(INPUT_POST);

$senha_atual = md5($dados['senha_atual']);

$senha_nova = md5($dados['senha_01']);

$querySenha = $conn->prepare("SELECT name FROM users WHERE username = :name AND senha = :pw");
$querySenha->bindParam(":name", $_SESSION['user_name']);
$querySenha->bindParam(":pw", $senha_atual);
$querySenha->execute();

$dataSenha = $querySenha->fetchALL(PDO::FETCH_ASSOC);

if (sizeof($dataSenha) > 0) {
	$queryUp_senha = $conn->prepare("UPDATE users SET senha = :senha WHERE username = :user_name");
	$queryUp_senha->bindParam(":senha", $senha_nova);
	$queryUp_senha->bindParam(":user_name", $_SESSION['user_name']);
	$queryUp_senha->execute();

	header('location: recuperar_senha.php');
}
 ?>