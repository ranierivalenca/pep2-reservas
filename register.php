<?php
include "configs/init.php";



$nome 	     = strip_tags($_POST['nome']);
$username    = strip_tags($_POST['username']);
$email 	     = strip_tags($_POST['email']);
$senha	     = md5(strip_tags($_POST['senha']));


//função responsável por cadastrar os usurios
function cadastro_de_user($nome,$username,$email,$senha){
	global $conn;
	if(ver_user_exis($username,$email)){
		$stmt = $conn->prepare("INSERT INTO users(name,username,email,senha,is_admin) VALUES (?,?,?,?,?)");
		$stmt -> execute([$nome,$username,$email,$senha,0]);
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

//chamando a função e passando os parâmetros
cadastro_de_user($nome,$username,$email,$senha);


?>