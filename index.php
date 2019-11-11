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
		    background-size: cover;
			background-position: center;
			margin-bottom: -20px;
		  }
		}

		main {
			margin-bottom: -20px;
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
			<div class="row center">
				<div class="col s6">
					<img src="img/humaaans/1.png" alt="Pessoas ao redor de uma planta">
				</div>
				<div class="col s6 left-align">
					<h1 class="red-text" style="font-size: 7rem"><br>Quadro Vivo</h1>
					<h4 class="grey-text text-darken-2" style="font-family: 'Carlito'; font-weight: 500">Um jardim vertical automatizado</h4>
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