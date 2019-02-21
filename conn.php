
<?php
session_start();
include 'configs/init.php';



	function logar($username,$password){ 
		$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND senha = ? AND is_admin = ? ");
		$stmt->execute([$username,$password, true]);
		if($stmt->rowCount()>0){
			$_SESSION['login'] = $_POST['login']; 
			
			header('Location: /php/cadastro.php');
			
		}else{
			$_SESSION['logErro']=true;
			$_SESSION['erro']=true;
			header('location: login.php');
		}
	}

	logar($nome, $senhacript);
	$nome = "";
	$senhacript = sha1($senha);

?>



<!-- session_start();
$conn = new PDO("mysql:host=localhost;dbname=pep2_reservas", "pep2", "pep2"); -->