<?php 

$nome = $_POST['nome'];
$site = $_POST['site'];
$descricao = $_POST['descricao'];
$empresa = $_POST['empresa'];

include "banco.php";

$query = "insert into projeto(nome, site, descricao, empresa) values ('$nome', '$site', '$descricao', '$empresa')";

mysqli_query($con, $query);

include "uploadimg.php";

header("Location: altport.php");

?>