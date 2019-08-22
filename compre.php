<?php 
	include('funcoes.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Compre | Quadro Vivo</title>
	<?php gerarCSS() ?>
</head>

<body>
	<header>
		<?php gerarNavIndex() ?>
	</header>

	<main style="min-height: 90vh">
		<div class="container">
			<div class="section">

				<div class="row">
					<div class="col s12 center">
						<h3 class="red-text">Adquira seu próprio Quadro Vivo Automatizado!</h3>
					</div>
				</div>
			</div>
		</div>

		<div class="container center">
			<div class="row" style="margin-bottom: 0">

				<div class="col s12 m6 l3">
					<div class="icon-block">
						<h2 class="center red-text menos"><i class="material-icons">filter</i></h2>
						<p class="light center">Receba um Quadro Vivo com três pequenos vasos de 10cm, completamente automatizado, e acesso às plataformas de apoio.</p>
						<p class="center"><a class="waves-effect waves-light btn green"><i class="material-icons right">send</i>COMPRAR</a></p>
						<br><br>
					</div>
				</div>

				<div class="col s12 m6 l3">
					<div class="icon-block">
						<h2 class="center red-text menos"><i class="material-icons">filter_1</i></h2>
						<p class="light center">Receba um Quadro Vivo com uma floreira de 30cm, completamente automatizado, e acesso às plataformas de apoio.</p>
						<p class="center"><a class="waves-effect waves-light btn green"><i class="material-icons right">send</i>COMPRAR</a></p>
						<br><br>
					</div>
				</div>

				<div class="col s12 m6 l3">
					<div class="icon-block">
						<h2 class="center red-text menos"><i class="material-icons">filter_2</i></h2>
						<p class="light center">Receba um Quadro Vivo com duas floreiras de 30cm, completamente automatizado, e acesso às plataformas de apoio.</p>
						<p class="center"><a class="waves-effect waves-light btn green"><i class="material-icons right">send</i>COMPRAR</a></p>
						<br><br>
					</div>
				</div>

				<div class="col s12 m6 l3">
					<div class="icon-block">
						<h2 class="center red-text menos"><i class="material-icons">filter_2</i></h2>
						<p class="light center">Receba um Quadro Vivo com três floreiras de 30cm, completamente automatizado, e acesso às plataformas de apoio.</p>
						<p class="center"><a class="waves-effect waves-light btn green"><i class="material-icons right">send</i>COMPRAR</a></p>
						<br><br>
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