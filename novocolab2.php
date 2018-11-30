<?php 

$adm = $_POST['adm'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$descricao = $_POST['descricao'];
$subdescricao = $_POST['subdescricao'];
$facebook = $_POST['facebook'];
$twitter = $_POST['twitter'];
$github = $_POST['github'];

include "banco.php";

$query = "insert into colab(adm, nome, telefone, descricao, subdescricao, facebook, twitter, github) values ('$adm', '$nome', '$telefone', '$descricao', '$subdescricao', '$facebook', '$twitter', '$github')";

mysqli_query($con, $query);

include "uploadcolab.php";

header("Location: altcolab.php");

?>