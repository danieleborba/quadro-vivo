<?php 
  include('funcoes.php');
  include('autoload.php');
//   include('valida.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Plantas | Quadro Vivo</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="shortcut icon" type="imagem/x-icon" href="img/plant.png">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
	<style>
		main {
			min-height: 100vh;
        }
	</style>
</head>
<body>
	<header>
		<?php 
			gerarLogin();
			gerarNavAdm() 
		?>
	</header>
	<main>
		<div class="container center">
			<div class="row">
				<div class="col s12 center">
					<h3 class="red-text">Gerenciar Plantas</h3>
				</div>
			</div>
			<div class="row">
				<?php
					$crud = new Crud;
					$crud->mostrarPlantasAdm();
				?>
			</div>
		</div>
	</main>
	<?php echo gerarFooter() ?>

	<!--  Scripts-->
	<?php echo gerarScripts() ?>
</body>
</html>