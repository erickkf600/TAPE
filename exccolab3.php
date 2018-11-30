<?php 
$idcolab = $_GET['idcolab'];
include "banco.php";
mysqli_query($con, "delete from colab where idcolab = $idcolab");

header("Location: altcolab.php");

?>