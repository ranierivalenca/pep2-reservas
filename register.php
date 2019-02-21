<?php
include "";

$nome 	     = $_POST['nome'];
$username    = $_POST['username'];
$email 	     = $_POST['email'];
$senha	     = $_POST['senha'];
$conf_senha  = $_POST['confirmarsenha']




function cadastro_de_user($nome,$username,$email,$senha){

	if(ver_user_exis()){
		$stmt = $con->prepare("INSERT INTO users(name,username,email,senha) VALUES (?,?,?,?)");
		$stmt -> execute([$nome,$username,$email,$senha]);
	}


}

//função para verficar se o usuário já está cadastrado
function ver_user_exis($username,$senha){

	$stmt = $con->prepare("SELECT * FROM user WHERE username =? OR email=? ");
	$stmt -> execute([$username,$email]);

	if($stmt -> rowCount()>0){
		return false;
	}else{
		return true;
	}

} 

header("location:register.php");


?>