<?php 
$_UP['pasta'] = 'img/colab/';
$_UP['tamanho'] = 1024 * 1024 * 10;
$_UP['extensoes'] = array('jpg', 'jpeg', 'png');
$_UP['renomeia'] = true;

$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite de 10Mb';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
	// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
if ($_FILES['arquivo']['error'] != 0) {
	
	die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo']['error']]);
	  exit; // Para a execução do script
	}
	$extensao = explode('.', $_FILES['arquivo']['name']);
	$extensao = strtolower(end($extensao));
	if (array_search($extensao, $_UP['extensoes']) === false) {
		echo "Por favor, envie arquivos com as seguintes extensões: jpeg ou png";
		exit;
	}
	if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
		echo "O arquivo enviado é muito grande, envie arquivos de até 10Mb.";
		exit;
	}
	// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
	// Primeiro verifica se deve trocar o nome do arquivo
	if ($_UP['renomeia'] == true) {
	  // Cria um nome baseado no UNIX TIMESTAMP atual e com extensão
		include "banco.php";
		$query = "select * from colab where idcolab = '$idcolab' limit 1";
		$consulta = mysqli_query($con, $query);
		if($f = mysqli_fetch_array($consulta)){
			$idcolab = $f['idcolab'];
		}

		$nome_final = "$idcolab.$extensao";
		mysqli_query($con, "update colab set img = '$nome_final' where idcolab = $idcolab");


	} else {
	  // Mantém o nome original do arquivo
		$nome_final = $_FILES['arquivo']['name'];
	}
	
	// Depois verifica se é possível mover o arquivo para a pasta escolhida
	if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
	  // Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
		echo "Upload efetuado com sucesso!";
		header("Refresh: 1, altcolab.php");
		
	} else {
	  // Não foi possível fazer o upload, provavelmente a pasta está incorreta
		echo "Não foi possível enviar o arquivo, tente novamente";
	}
	?>