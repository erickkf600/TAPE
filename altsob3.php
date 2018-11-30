<?php 

$missao = $_POST['missao'];
$visao = $_POST['visao'];
$valores = $_POST['valores'];
$nossahistoria = $_POST['nossahistoria'];

$idsobre = $_GET['idsobre'];

include "banco.php";

$query = "update sobre set missao = '$missao', visao = '$visao', valores = '$valores', nossahistoria = '$nossahistoria' where idsobre = $idsobre";


mysqli_query($con, $query);
header("Location: altsob.php");

?>