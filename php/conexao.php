<?php

 class Conexao{

	public $conn;

	function __Construct(){
		global $conn;
		try{
			$this->conn= new PDO("mysql:host=localhost;port=3306;dbname=pep2_reservas;","root","ifpe");
		}catch(PDOException $e){
			echo "conexao failed :" .$e->getMessage() . "se ferrrouu kkkkk";
		}

	}


	
	function cadastroDeTipo($tipo){
			
	
					
			$cad = $this->conn->prepare("INSERT INTO equip_types(tipo) values (?)	");
			$cad->execute([$tipo]);

			
	}

	function cadastroDeEquip($name,$tipoId){
	

		$cadEquip = $this->conn->prepare("INSERT INTO  equips(nome,type_id) values(?,?)");
		$cadEquip->execute([$name,$tipoId]);
	

	}
}

?>