<!DOCTYPE html>
<?php 
  include('conf/conf.inc.php');
  include('connect/connect.php');
  include('funcoes.php');
?>
<html lang="pt-BR">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Quadro Vivo</title>

	<!-- CSS  -->
	<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
	<link rel="shortcut icon" type="imagem/x-icon" href="img/plant.png">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href="css/material-icons.css" rel="stylesheet">
</head>

<body>
	<header>
		<?php gerarNavIndex() ?>
	</header>

	<main>
<<<<<<< HEAD
		<div class="pagina">
			<div id="index-banner" class="parallax-container">
				<div class="section no-pad-bot white-text margem__mobile--titulo">
					<div class="container-1">
						<br><br>
						<div class="row center" style="margin-top: 10vh">
							<h1 style="text-shadow: 2px 2px black; margin-bottom: 0; font-size: 7rem" class="white-text"><br>Quandros</h1>
							<h3 class="light white-text" style="margin-bottom: 3rem; font-family: 'Raleway'; font-weight: 500; text-shadow: 2px 2px black;">Um jardim vertical automatizado</h3>
							<a href="compre.php" id="download-button" class="btn-large waves-effect waves-light red"><b>Adquira</b></a>
						</div>
						<br><br>
=======
		<div id="index-banner" class="parallax-container">
			<div class="section no-pad-bot white-text margem__mobile--titulo">
				<div class="container-1">
					<br><br>
					<h1 class="header center titulooo"><br>Quadro Vivo</h1>
					<div class="row center">
						<h5 class="header col s12 light">Um jardim vertical automatizado</h5>
					</div>
					<div class="row center">
						<a href="compre.php" id="download-button" class="btn-large waves-effect waves-light red">Adquira</a>
>>>>>>> parent of 50e7b66... salvando essa versão dessa bosta do krlho
					</div>
					<br><br>

				</div>
			</div>
			<div class="parallax"><img src="img/background1.jpeg" alt="Unsplashed background img 1"></div>
		</div>


		<div class="container">
			<div class="section">

				<!--   Icon Section   -->
				<div class="row">
					<div class="col s12 m4">
						<div class="icon-block">
							<h2 class="center red-text"><i class="material-icons">flash_on</i></h2>
							<h5 class="center">Automatizado</h5>

							<p class="light center">A rega e a iluminação acontecem automaticamente por meio de sensores e microcontroladores.</p>
						</div>
					</div>

					<div class="col s12 m4">
						<div class="icon-block">
							<h2 class="center red-text"><i class="material-icons">group</i></h2>
							<h5 class="center">Interativo</h5>

							<p class="light center">Receba gráficos e informações sobre a saúde e a utilidade de suas plantas.</p>
						</div>
					</div>

					<div class="col s12 m4">
						<div class="icon-block">
							<h2 class="center red-text"><i class="material-icons">settings</i></h2>
							<h5 class="center">Personalizável</h5>

							<p class="light center">Escolha a arquitetura que melhor se adequea à sua casa e selecione as plantas que deseja.</p>
						</div>
					</div>
				</div>

			</div>
		</div>


		<div class="parallax-container valign-wrapper">
			<div class="section no-pad-bot">
				<div class="container">
					<div class="row center">
						<h5 class="header col s12 light">Tenha um pedaço da natureza dentro da sua casa.</h5>
					</div>
				</div>
			</div>
			<div class="parallax"><img src="img/background2.jpg" alt="Unsplashed background img 2"></div>
		</div>

		<div class="container">
			<div class="section">

				<div class="row">
					<div class="col s12 center">
						<h3><i class="mdi-content-send red-text"></i></h3>
						<h4 class="red-text">Como funciona?</h4>
						<p class="center">Escolha seu modelo, escolha suas plantas, e o Quadro Vivo cuida do resto. Por meio de sensores e microcontroladores, suas plantas receberão as quantidades de água e luz necessárias para cresceram e prosperarem. Receba em tempo real informações sobre o estado de suas plantas. Usufrua de seus benefícios e aplicações com alta praticidade e baixa manutenção.</p>
					</div>
				</div>

			</div>
		</div>


		<div class="parallax-container valign-wrapper">
			<div class="section no-pad-bot">
				<div class="container">
					<div class="row center">
						<h5 class="header col s12 light">Acabe com as preocupações sobre a saúde das suas plantas.</h5>
					</div>
				</div>
			</div>
			<div class="parallax"><img src="img/quadrovivo.jpeg" alt="Unsplashed background img 3"></div>
		</div>
	</main>

	<?php echo gerarFooter() ?>
	
	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/init.js"></script>

</body>

</html>
