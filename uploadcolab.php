<?php
// Pasta onde o arquivo vai ser salvo
$_UP['pasta'] = 'img/colab/';
// Tamanho máximo do arquivo (em Bytes)
$_UP['tamanho'] = 1024 * 1024 * 10; // 10Mb
// Array com as extensões permitidas
$_UP['extensoes'] = array('jpg', 'png', 'jpeg');
// Renomeia o arquivo? (Se true, o arquivo será salvo como .png e um nome único)
$_UP['renomeia'] = true;
// Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite de 2Mb';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
if ($_FILES['arquivo']['error'] != 0) {

  die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo']['error']]);
  exit; // Para a execução do script
}
// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
// Faz a verificação da extensão do arquivo
$extensao = explode('.', $_FILES['arquivo']['name']);
$extensao = strtolower(end($extensao));
if (array_search($extensao, $_UP['extensoes']) === false) {
  echo "Por favor, envie arquivos com as seguintes extensões: png ou jpeg";
  exit;
}
// Faz a verificação do tamanho do arquivo
if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
  echo "O arquivo enviado é muito grande, envie arquivos de até 10Mb.";
  exit;
}
// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
// Primeiro verifica se deve trocar o nome do arquivo
if ($_UP['renomeia'] == true) {
  // Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .png
  include "banco.php";
  $query = "select * from colab order by idcolab desc limit 1";
  $consulta = mysqli_query($con, $query);
  if($f = mysqli_fetch_array($consulta)){
    $idcolab = $f['idcolab'];
  }

  $nome_final = "$idcolab.$extensao";

  // utilizar Where para não ganhar diploma, se não utilizar Where, todos os produtos receberão o mesmo nome de imagem.
  mysqli_query($con, "update colab set img = '$nome_final' where idcolab = $idcolab");


} else {
  // Mantém o nome original do arquivo
  $nome_final = $_FILES['arquivo']['name'];
}

// Depois verifica se é possível mover o arquivo para a pasta escolhida
if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
  // Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
  echo "Upload efetuado com sucesso!";
  header("Refresh: 1, painel.php");
} else {
  // Não foi possível fazer o upload, provavelmente a pasta está incorreta
  echo "Não foi possível enviar o arquivo, tente novamente";
}