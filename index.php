<?php
session_start();
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
						<?php if (isset($_SESSION['email'])){
							echo "<li><a href='painel.php' id='item'>Painel</a></li>";
						} else{
							echo "<li><a href='' data-toggle='modal' data-target='#modalLRFormDemo' id='item'>Login</a></li>";
						}
						?>
						
					</ul>
				</div>
			</nav>
		</header>
	</div>

	<!-- MODAL LOGIN -->
	<div class="modal fade" id="modalLRFormDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog cascading-modal" role="document">
			<div class="modal-content">

				<div class="modal-c-tabs">

					<ul class="nav nav-tabs tabs-2 light-blue darken-3" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#panel17" role="tab">
								<i class="fa fa-user mr-1"></i> Logar</a>
							</li>
						</ul>
						<form method="post" action="login.php">
							<div class="tab-content">

								<div class="tab-pane fade in show active" id="panel17" role="tabpanel">

									<div class="modal-body mb-1">
										<div class="md-form form-sm">
											<i class="fa fa-envelope prefix"></i>
											<input type="email" id="email" name="email" class="form-control form-control-sm" placeholder="Email" required>
										</div>

										<div class="md-form form-sm">
											<i class="fa fa-lock prefix"></i>
											<input type="password" id="senha" name="senha" class="form-control form-control-sm" placeholder="Senha" required>
										</div>
										<div class="text-center mt-4">
											<button type="submit" class="btn btn-info">Logar
												<i class="fas fa-sign-in-alt ml-1"></i>
											</button>
										</div>
									</div>

									<div class="modal-footer">
										<div class="options text-center text-md-right mt-1">
											<p>Esqueceu a
												<a href="#" class="blue-text">Senha?</a>
											</p>
										</div>
										<button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Fechar</button>
									</div>

								</div>

							</div>
						</form>
					</div>
				</div>
				<!--/.Content-->
			</div>
		</div>
		<!-- FIM MODAL LOGIN -->
		<div id="demo" class="carousel slide" data-ride="carousel">
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
			</ul>
			<div class="carousel-inner">
				<div class="carousel-item active" id="img01">
					<img src="img/01.jpg" alt="img01" class="img-fluid">
					<div class="container" id="text">
						<h3 class="animated bounceInLeft">Soluções em<br>Desenvolvimento<br>Web</h3>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/responsivo.jpg" alt="img02">
					<div class="container" id="text">
						<h3 class="animated bounceInLeft">Design<br>100% responsivo</h3>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/03.jpg" alt="img02">
					<div class="container" id="text">
						<h3 class="animated bounceInLeft">Códigos<br>limpos e organizados</h3>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
		<!-- TRABALHOS -->
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="text-center" id="proj">Portfólio</h1>
				<div class="row">

					<?php 
					include "banco.php"; 
					$query = "select * from projeto limit 12";
					$consulta = mysqli_query($con, $query);
					while($f = mysqli_fetch_array($consulta)){
						$idproj = $f['idproj'];
						$nome = $f['nome'];
						$site = $f['site'];
						$descricao = $f['descricao'];
						$img = $f['img'];
						$empresa = $f['empresa'];
						?>
						<div class="col-md-4">
							<div class="basic-widgets">
								<div class="project-hover">
									<img src="<?php echo "img/port/$img" ?>" class="img-responsive transition">
									<div class="text-view transition text-center">
										<h3><?php echo $nome ?></h3>
										<p><?php echo $descricao ?></p>
									</div>
									<div class="btn-view transition text-center">
										<a href="https://<?php echo $site ?>/" class="btn btn-light"><?php echo $site ?></a>
									</div>
								</div>
							</div>
						</div>
						<?php 
					}
					?>
				</div>
			</div>
		</div>
		<div class="parallax2 pb-4" id="sobre">
			<div class="container" id="info">
				<?php 
				$query = "select * from sobre";
				$consulta = mysqli_query($con, $query);
				while($f = mysqli_fetch_array($consulta)){
					$idsobre = $f['idsobre'];
					$missao = $f['missao'];
					$visao = $f['visao'];
					$valores = $f['valores'];
					$nossahistoria = $f['nossahistoria'];
					?>

					<div class="card-group pb-5">
						<div class="card mr-5" id="card1">
							<h2>Missão</h2>
							<p><?php echo $missao; ?></p>
						</div>
						<div class="card mr-5" id="card1">
							<h2>Visão</h2>
							<p><?php echo $visao; ?></p>
						</div>
						<div class="card" id="card1">
							<h2>Valores</h2>
							<p><?php echo $valores; ?></p>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="card" id="historia">
						<div class="row">

							<div class="col-md-7">
								<div class="card-block ">
									<h4 class="card-title text-light" style="font-family: Aero; font-size: 30px;">Nossa História</h4>
									<p class="card-text" id="textcard">
										<?php echo $nossahistoria; ?>

									</p>
								</div>
							</div>
							<?php 
						}
						?>
						<!-- Carousel start -->
						<div class="col-md-5">
							<div id="CarouselTest" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block" src="https://picsum.photos/450/300?image=1072" alt="">
									</div>
									<div class="carousel-item">
										<img class="d-block" src="https://picsum.photos/450/300?image=855" alt="">
									</div>
									<div class="carousel-item">
										<img class="d-block" src="https://picsum.photos/450/300?image=355" alt="">
									</div>
									<a class="carousel-control-prev" href="#CarouselTest" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#CarouselTest" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
							</div>
						</div>
						<!-- End of carousel -->
					</div>
				</div>
			</div>
		</div>
		<!-- CARDS COM OS FUNCIONARIOS -->
		<div class="jumbotron jumbotron-fluid">
			<div class="container" id="colaboradores">
				<div class="row">
					<!-- php Iniciar while aqui -->
					<?php 
					$query = "select * from colab";
					$consulta = mysqli_query($con, $query);
					while($f = mysqli_fetch_array($consulta)){
						$idcolab = $f['idcolab'];
						$nome = $f['nome'];
						$telefone = $f['telefone'];
						$descricao = $f['descricao'];
						$subdescricao = $f['subdescricao'];
						$img = $f['img'];
						$facebook = $f['facebook'];
						$twitter = $f['twitter'];
						$github = $f['github'];
						?>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
								<div class="mainflip">
									<div class="frontside">
										<div class="card">
											<div class="card-body text-center">
												<p><img class="rounded-circle" src="img/colab/<?php echo $img; ?>" width="100" alt="<?php echo $nome; ?>"></p>
												<h4 class="card-title"><?php echo $nome; ?></h4>
												<p class="card-text"><?php echo $subdescricao ?></p>
												<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
											</div>
										</div>
									</div>
									<div class="backside">
										<div class="card">
											<div class="card-body text-center mt-4">
												<h4 class="card-title"><?php echo $nome; ?></h4>
												<p class="card-text"><?php echo $descricao ?></p>
												<div style="font-size:2em">
													<a href="https://<?php echo $facebook ?>/""><i class="fab fa-facebook-square"></i></a>
													<a href="https://<?php echo $twitter ?>/"><i class="fab fa-twitter-square"></i></a>
													<a href="https://<?php echo $github ?>/""><i class="fab fa-github-square"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php 
					}
					?>
					<!-- ?> fechar php -->
				</div>
			</div>
		</div>
		<div class="parallax" id="contato">
			<h1 class="text-center pt-5" id="cont">CONTATO</h1>
			<hr id="linha">
			<p class="text-center" id="slogan">O melhor caminho a gente cria para você!</p>
			<div class="container col-md-6 col-sm-2 mt-5" id="form">
				<div class="card col-md-12 col-sm-2 pt-5 pb-5" style="background: rgba(0,0,0,0.5);">
					<div class="card-body text-center col-md-12">
						<div class="row">
							<div class="col-md-12">
								<form>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" class="form-control" id="input" name="nome" placeholder="Nome *" required>
											</div>
											<div class="form-group">
												<div class="input-group">
													<input type="email" class="form-control" id="input" placeholder="Email *" name="email" required>
												</div>
											</div>
											<div class="form-group">
												<div class="input-group">
													<input type="text" class="form-control" id="input" placeholder="Telefone *" name="telefone" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<textarea name="mensagem" id="input" class="form-control" rows="6" cols="50" required="required" placeholder="Mensagem"></textarea>
											</div>
										</div>
										<div class="col-md-12 d-flex justify-content-end">
											<button type="submit" class="btn btn-light btn-block" id="btnContactUs">
												Enviar <i class="fas fa-paper-plane"></i></button>
											</div>
										</div>
									</form>
								</div>
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
													<li><a href="#proj" id="foot">Portfólio</a></li>
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