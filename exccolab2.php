<?php
session_start();
if (empty($_SESSION['email'])) {
	header("Location: index.php");
}
?>

<!doctype html>
<html lang="pt-br">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
	<meta http-eqiv="X-UA-Compatible" content="IE=edge" />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/mdb.min.css">
	<!-- ANIMAÇÃO EM CSS -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="shortcut icon" href="icon.png">
	<title>TAPE</title>
</head>

<body style="background: #e8ecef;">
	<div class="wrapper">
		<header>
			<nav id="navbar">
				<div class="menu-icon" onclick="myFunction(this)">
					<div class="bar1"></div>
					<div class="bar2"></div>
					<div class="bar3"></div>
				</div>
				<div class="logo">
					<a href="index.php"><img src="logo.png" width="100%" class="img-fluid"></a>
				</div>
				<div class="menu">
					<ul>
						<li><a href="#demo" id="item">Home</a></li>
						<li><a href="#proj" id="item">Portfólio</a></li>
						<li><a href="#sobre" id="item">Sobre Nós</a></li>
						<li><a href="#colaboradores" id="item">Colaboradores</a></li>
						<li><a href="#contato" id="item">Contato</a></li>
					</ul>
				</div>
			</nav>
		</header>
	</div>
	<div>
		<div class="parallax2 pb-4" id="sobre">
			<div class="container" id="info">
				<div class="card-group pb-5">
					<div class="card" id="card1">
						<a href="" id="item" class="text-center"><h2>Remoção de Projeto</h2></a>
					</div>
				</div>
			</div>
			<div class="card mt-2" id="card1">

				<!-- TRABALHOS -->
				<div class="jumbotron-fluid">
					<div class="container">
					
						<div class="row">

							<?php 
							$idcolab = $_GET['idcolab'];
							include "banco.php";
							echo "Tem certeza que deseja excluir item n° $idcolab?";
							echo "<p><a href='altcolab.php'>Não</a></p>";
							echo "<a href='exccolab3.php?idcolab=$idcolab'>Sim</a>";
							?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="container-fluid sec-footer">
			<div class="container">
				<div class="row">
					<!-- LINKS DO SITE -->
					<div class="col">
						<div class="desc-box">
							<div class="card-body">
								<div class="card-title">Mapa do Site</div>
								<div class="card-text">
									<div class="row">
										<div class="col-md-6">
											<ul id="links">
												<li><a href="#demo" id="foot">Home</a></li>
												<li><a href="#proj" id="foot">Portifólio</a></li>
												<li><a href="#sobre" id="foot">Sobre Nós</a></li>
												<li><a href="#colaboradores" id="foot">Colaboradores</a></li>
											</ul>
										</div>

										<div class="col-md-6">
											<ul id="links">
												<li><a href="#" id="foot">Contato</a></li>
												<li><a href="#" data-toggle="modal" data-target="#modalLRFormDemo" id="foot">Login</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- REDES SOCIAIS -->
					<div class="col text-center mt-5">
						<a href="https://facebook.com/" target="blank" class="social"><i class="fab fa-facebook-f fa-lg"></i></a>
						<a href="https://twitter.com/" target="blank" class="social"><i class="fab fa-twitter fa-lg"></i></a>
						<a href="https://github.com/" target="blank" class="social"><i class="fab fa-github-alt fa-lg"></i></a>
						<a href="https://br.linkedin.com/" target="blank" class="social"><i class="fab fa-linkedin-in"></i></a>
					</div>
					<!-- INFORMAÇÕES DE CONTATO -->
					<div class="col">
						<div class="desc-box">
							<div class="card-body">
								<div class="card-title">Informações de contato </div>
								<div class="card-text">
									<div class="row">
										<div class="col">
											<i class="fas fa-phone ml-3"></i>
											<span>(888) 888 8888</span>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<i class="fas fa-map-marker ml-3"></i>
											<span>514 S. Magnolia St. Orlando, FL 32806</span>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<i class="fas fa-envelope-open ml-3"></i>
											<span>contato@tape.com</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="container-fluid sec-sub-footer">
			<div class="container">
				<p class="text-center">Copyright © TAPE - 2018.</p>
			</div>
		</div>
	</footer>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<script src="js/script.js"></script>
	<script src="js/jquery-3.1.1.min.js"></script>
</body>

</html>