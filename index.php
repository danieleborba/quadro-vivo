<?php 
  include('funcoes.php');
  include('autoload.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Quadro Vivo</title>
	<style type="text/css">		
		@media only screen and (max-width : 1080px) {
		  .pagina {
		    background-image: url(img/quadro/quadrovivomobile.jpeg);
		    background-size: cover;
		  }
		}
	</style>

	<?php
		gerarCSS();
	?>
</head>

<body>
	<header>
		<?php 
			gerarLogin();
			gerarNavIndex() 
		?>
	</header>

	<main>
		<div class="pagina" style="min-height: 95vh;">
			<div id="index-banner" class="parallax-container">
				<div class="section no-pad-bot white-text margem__mobile--titulo">
					<div class="container-1">
						<br><br>
						<div class="row center" style="margin-top: 10vh">
							<h1 style="text-shadow: 2px 2px black; margin-bottom: 0; font-size: 7rem" class="white-text"><br>Quadro Vivo</h1>
							<h3 class="light white-text" style="margin-bottom: 3rem; font-family: 'Carlito'; font-weight: 500; text-shadow: 2px 2px black;">Um jardim vertical automatizado</h3>
							<a href="compre.php" id="download-button" class="btn-large waves-effect waves-light red"><b>Adquira</b></a>
						</div>
						<br><br>
					</div>
				</div>
				<div class="parallax hide-on-small-only"><img src="img/quadro/quadrovivodelado2.jpeg" alt="Unsplashed background img 1" style="width: 100vw"></div>
			</div>
		</div>


		<div class="container">
			<div class="section">

				<!--   Icon Section   -->
				<div class="row">
					<div class="col s12 m4">
						<div class="icon-block">
							<h2 class="center red-text"><i class="material-icons">flash_on</i></h2>
							<h5 class="center">Automatizado</h5>

							<p class="center">A rega e a iluminação acontecem automaticamente por meio de sensores e microcontroladores.</p>
						</div>
					</div>

					<div class="col s12 m4">
						<div class="icon-block">
							<h2 class="center red-text"><i class="material-icons">group</i></h2>
							<h5 class="center">Interativo</h5>

							<p class="center">Receba gráficos e informações sobre a saúde e a utilidade de suas plantas.</p>
						</div>
					</div>

					<div class="col s12 m4">
						<div class="icon-block">
							<h2 class="center red-text"><i class="material-icons">settings</i></h2>
							<h5 class="center">Personalizável</h5>

							<p class="center">Escolha a arquitetura que melhor se adequea à sua casa e selecione as plantas que deseja.</p>
						</div>
					</div>
				</div>

			</div>
		</div>

	</main>

	<?php 
		gerarFooter();
		gerarScripts();
	?>
</body>
</html>