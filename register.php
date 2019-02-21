<?php
include "configs/init.php";



$nome 	     = $_POST['nome'];
$username    = $_POST['username'];
$email 	     = $_POST['email'];
$senha	     = $_POST['senha'];

function cadastro_de_user($nome,$username,$email,$senha){
	global $conn;
	if(ver_user_exis($username,$email)){
		$stmt = $conn->prepare("INSERT INTO users(name,username,email,senha) VALUES (?,?,?,?)");
		$stmt -> execute([$nome,$username,$email,$senha]);
		//echo "SEJA BEM VINDO";
	}


}

//função para verficar se o usuário já está cadastrado
function ver_user_exis($username,$email){
	global $conn;
	$stmt = $conn->prepare("SELECT * FROM users WHERE username =? OR email=? ");
	$stmt -> execute([$username,$email]);

	 

	if($stmt -> rowCount()>0){
		return false;
		
	}else{
		return true;
		echo "oi";
	}

} 

cadastro_de_user($nome,$username,$email,$senha);


?>