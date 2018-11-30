<?php 
$idcad = $_GET['idcad'];
include "banco.php";
mysqli_query($con, "delete from cadastro where idcad = $idcad");

header("Location: altcad.php");

?>