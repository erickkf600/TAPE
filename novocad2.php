<?php 
$nome = $_POST['nome'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$cargo = $_POST['cargo'];
$adm = $_POST['adm'];
$senha = $_POST['senha'];

include "banco.php";

$query = "insert into cadastro(nome, celular, email, cargo, adm, senha) values ('$nome', '$celular', '$email', '$cargo', '$adm', '$senha')";

mysqli_query($con, $query);

header("Location: altcad.php");

?>