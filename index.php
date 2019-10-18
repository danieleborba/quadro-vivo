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
						</div>
						<br><br>
					</div>
				</div>
				<div class="parallax hide-on-small-only"><img src="img/quadro/quadrovivo2.jpeg" alt="Unsplashed background img 1" style="width: 100vw"></div>
			</div>
		</div>

	</main>

	<?php 
		gerarFooter();
		gerarScripts();
	?>
</body>
</html>