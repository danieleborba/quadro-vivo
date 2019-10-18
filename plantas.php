<!DOCTYPE html>
<?php 
	include('valida.php');
	include('autoload.php');
	include('funcoes.php');
?>
<html lang="pt-BR">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Plantas | Quadro Vivo</title>

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="shortcut icon" type="imagem/x-icon" href="img/plant.png">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
	<header>
		<?php gerarNavUsuario() ?>
	</header>

	<main>

		<div class="container center">
			<div class="section" style="min-height: 90vh">
				<div class="row">
					<div class="col s12 center">
						<h3><i class="mdi-content-send red-text"></i></h3>
						<h3 class="red-text">Plantas</h3>
					</div>
				</div>

				<div class="row">
					<div class="col l12">
						<?php
							$usuario = new Usuario($_SESSION['codigo']);
							$quadro = new QuadroVivo;
							$quadro->mostrarPlantas($usuario->getCodigo());
						?>
					</div>
				</div>
			</div>
		</div>
		<br>
	</main>

	<?php 
		echo gerarFooter();
		echo gerarScripts() 
	?>

</body>
</html>