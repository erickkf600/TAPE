<?php 

$nome = $_POST['nome'];
$site = $_POST['site'];
$descricao = $_POST['descricao'];
$img = $_POST['img'];
$empresa = $_POST['empresa'];

$idproj = $_GET['idproj'];

include "banco.php";

$query = "update projeto set nome = '$nome', site = '$site', descricao = '$descricao', img = '$img', empresa = '$empresa' where idproj = $idproj";

mysqli_query($con, $query);

include "mudafoto.php";
header("Location: altport.php");

?>