<?php 

$nome = $_POST['nome'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$cargo = $_POST['cargo'];
$adm = $_POST['adm'];
$senha = $_POST['senha'];

$idcad = $_GET['idcad'];

include "banco.php";

$query = "update cadastro set nome = '$nome', celular = '$celular', email = '$email', cargo = '$cargo', adm = '$adm', senha = '$senha' where idcad = $idcad";

mysqli_query($con, $query);

header("Location: altcad.php");

?>