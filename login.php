<?php 

if(isset($_SESSION['email'])) {
	header("Location: index.php");
}
$email = $_POST['email'];
$senha = $_POST['senha'];

include "banco.php";

$query = "select * from cadastro where email = '$email' and senha = '$senha' limit 1";
$consulta = mysqli_query($con,$query);
$total = mysqli_num_rows($consulta);
while($f = mysqli_fetch_array($consulta)){
	$email = $f['email'];
	$senha = $f['senha'];
	$adm = $f['adm'];
}

if($total == 0){
	header("Location: index.php");
}else{
	if(isset($_POST['email']) and (isset($_POST['senha']))){
		if($adm == 's'){
			header("Location: painel.php");
			session_start();
			$_SESSION['email'] = $email;
			$_SESSION['senha'] = $senha;
		}else{
			header("Location: index.php");
		}
	}
}


?>