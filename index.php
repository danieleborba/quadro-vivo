<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="author" content="Daniele Borba Voigt">
	<meta name="description" content="Página inicial do Quadro Vivo, um jardim vertical automatizado">
	  <meta name="keywords" content="automação, jardinagem, informática, plantas">
	<title>Quadro Vivo</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
				<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap&subset=latin-ext" rel="stylesheet"> 
			  <link rel="shortcut icon" type="imagem/x-icon" href="img/mao.svg">
			  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
			  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
	<style>
		body {
			display: flex;
			min-height: 95vh;
			flex-direction: column;
		}

		main {
			flex: 1 0 auto;
			min-height: 95vh;
		}
		
		h5 {
			font-family: "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
			font-weight: 450;
		}
	</style>
</head>

<body>
	<header>
		<nav class="white" role="navigation" style="box-shadow: none">
			<div class="nav-wrapper">
			<a id="logo-container" href="index.php" class="brand-logo red-text" style="margin-left: 2.5vw">
				<img src="img/logo/logo.svg" style="height: 3.5rem; margin-top: 0.8vh" alt="Logo do Quadro Vivo, uma mão segurando uma muda de planta">
			</a>
			<ul class="right hide-on-med-and-down">
				<li><a href="sobre.php">Sobre</a></li>
				<li><a href="fotos.php">Fotos</a></li>
				<li><a href="cadastro.php">Cadastro</a></li>
				<li><a href="login.php">Login</a></li>
			</ul>

			<ul id="nav-mobile" class="sidenav">
				<li><a href="sobre.php"><i class="material-icons green-text">info</i>Sobre</a></li>
				<li><a href="cadastro.php"><i class="material-icons green-text">assignment_ind</i>Cadastro</a></li>
				<li><a href="login.php"><i class="material-icons green-text">account_circle</i>Login</a></li>
			</ul>
			<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons green-text text-darken-3">menu</i></a>
		</div>
		</nav>
	</header>

	<main>
		<div class="container" style="width: 100vw">
			<div class="valign-wrapper">
				<div class="row center" style="min-height: 100%">
					<div class="col s12 l7 hide-on-small-only left" style="min-height: 100%; padding: none">
						<img src="img/humaaans/fundo1.svg" width="90%" alt="Pessoa rodeada de plantas, tocando em uma planta" style="margin-top: 6vh">
					</div>
					<div class="col s12 l4 left-align" style="min-height: 100%; width: 40%; padding-top: 3rem">
						<h1 class="red-text" style="font-size: 6rem"><br>Quadro Vivo</h1>
						<h5 class="grey-text text-darken-2">Um jardim vertical automatizado</h5>
					</div>
				</div>
			</div>
		</div>
	</main>

	<footer class="page-footer light-blue lighten-5" style="padding: 2vh 5vw 0 8vw; margin-top: 2.5vh">
		<div class="row">
			<div class="col s12 l3">
				<h5 class="red-text text-darken-3">Contato</h5>
				<ul class="text-darken-4 grey-text text-lighten-4">
					<li class="text-darken-4 grey-text><a href="mailto:quadrovivo.ifc@gmail.com">Email</li>
					<li class="text-darken-4 grey-text><a href="https://www.instagram.com/quadrovivoautomatizado/">Instagram</a></li>
				</ul>
			</div>
			<div class="col s12 l6">
				<h5 class="red-text text-darken-3">Quem somos?</h5>
				<p class="text-darken-4 grey-text text-lighten-4">Estudantes do Técnico em Informática buscando reaproximar as pessoas da natureza por meio da tecnologia.</p>
			</div>
			<div class="col s12 l3 hide-on-small-only center">
				<img class="circle" src="img/equipe/equipe5.jpeg" width="175rem" alt="Foto de Daniele e Daiane, autoras do projeto">
			</div>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
</body>
</html>