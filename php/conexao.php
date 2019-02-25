<?php

 class users{

	public $conn;

	function conexao(){
		global $conn;
		try{
			$conn= new PDO("mysql:host=localhost;port=3306;dbname=pep2_reservas;","root","junior150305");
		}catch(PDOException $e){
			echo "conexao failed :" .$e->getMessage() . "se ferrrouu kkkkk";
		}

	}


	function logar($login,$pass){

			global $conn;

			session_start();
			//trocar ?? pelos correspondentes nomes! obs.: ? é para deixar assim!
			$stmt = $conn->prepare("SELECT * FROM users  where username = ? and senha = ?"); 
			$stmt->execute([$login,$pass]);

			if($stmt->rowcount() > 0 ){
				$_SESSION['login']= $_POST['login'];
				header('location:home.php');
			}else{
				$_SESSION['logErro']= true;
				$_SESSION['erro'] = true;
				header('location:loginAdmin.php');
			}

	}

	function logout(){
		 session_destroy();
		 header('location:');	
	}

	function cadastroDeTipo($tipo){
			
			global $conn;
					
			$cad = $conn->prepare("INSERT INTO equip_types(tipo) values (?)	");
			$cad->execute([$tipo]);

			
	}

	function cadastroDeEquip($name,$tipoId){
		global $conn;

		$cadEquip = $conn->prepare("INSERT INTO  equips(nome,type_id) values(?,?)");
		$cadEquip->execute([$name,$tipoId]);
		//header('location: cadastroTipo.php');

	}
}

?>