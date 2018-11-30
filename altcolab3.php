<?php 

$adm = $_POST['adm'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$descricao = $_POST['descricao'];
$subdescricao = $_POST['subdescricao'];
$img = $_POST['img'];
$facebook = $_POST['facebook'];
$twitter = $_POST['twitter'];
$github = $_POST['github'];

$idcolab = $_GET['idcolab'];

include "banco.php";

$query = "update colab set adm = '$adm', nome = '$nome', telefone = '$telefone', descricao = '$descricao', subdescricao = '$subdescricao', img = '$img', facebook = '$facebook', twitter = '$twitter', github = '$github' where idcolab = $idcolab";

mysqli_query($con, $query);

include "mudafotocolab.php";

header("Location: altcolab.php");

?>