<?php 
$idproj = $_GET['idproj'];
include "banco.php";
mysqli_query($con, "delete from projeto where idproj = $idproj");

header("Location: altport.php");

?>