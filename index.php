<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Quadro Vivo</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap&subset=latin-ext" rel="stylesheet"> 
	<link rel="shortcut icon" type="imagem/x-icon" href="img/mao.svg">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
	<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/carlito" type="text/css"/>
	<style>
		main {
			min-height: 90vh;
		}
	</style>
</head>

<body>
	<header>
		<nav class="white" role="navigation">
			<div class="nav-wrapper">
			<a id="logo-container" href="index.php" class="brand-logo red-text" style="margin-left: 2.5vw"><img src="img/logo/logo.svg" style="height: 3.5rem; margin-top: 0.8vh"></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="sobre.php">Sobre</a></li>
				<li><a href="cadastro.php">Cadastro</a></li>
				<li><a href="login.php">Login</a></li>
			</ul>

			<ul id="nav-mobile" class="sidenav">
				<li><a href="sobre.php"><i class="material-icons green-text">info</i>Sobre</a></li>
				<li><a href="cadastro.php"><i class="material-icons green-text">assignment_ind</i>Cadastro</a></li>
				<li><a href="login.php"><i class="material-icons green-text">account_circle</i>Login</a></li>
			</ul>
			<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons green-text">menu</i></a>
		</div>
		</nav>
	</header>

	<main>

			<div class="row center">
				<div class="col s12 l6 hide-on-small-only">
					<img src="img/humaaans/fundo1.png" width="75%" alt="Pessoas ao redor de uma planta" style="margin-top: 6vh">
				</div>
				<div class="col s12 l6 left-align">
					<h1 class="red-text" style="font-size: 7rem"><br>Quadro Vivo</h1>
					<h4 class="grey-text text-darken-2" style="font-family: 'Carlito'; font-weight: 500">Um jardim vertical automatizado</h4>
				</div>
			</div>

	</main>

	<footer class="page-footer blue lighten-5" style="padding: 2vh 5vw 0 8vw; margin-top: 2.5vh">
		<div class="row">
			<div class="col s12 l3">
				<h5 class="red-text">Contato</h5>
				<ul class="text-darken-4 grey-text text-lighten-4">
					<li class="text-darken-4 grey-text><a href="mailto:quadrovivo.ifc@gmail.com">Email</li>
					<li class="text-darken-4 grey-text><a href="https://www.instagram.com/quadrovivoautomatizado/">Instagram</a></li>
				</ul>
			</div>
			<div class="col s12 l6">
				<h5 class="red-text">Quem somos?</h5>
				<p class="text-darken-4 grey-text text-lighten-4">Estudantes do Técnico em Informática buscando reaproximar as pessoas da natureza por meio da tecnologia.</p>
			</div>
			<div class="col s12 l3 hide-on-small-only center">
				<img class="circle" src="img/equipe/equipe5.jpeg" width="175rem" alt="Foto de Daniele e Daiane, autoras do projeto">
			</div>
		</div>
	</footer>
</body>
</html>