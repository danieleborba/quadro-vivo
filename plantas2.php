<?php 
  include('funcoes.php');
  include('autoload.php');
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
		h5 {
			font-family: sans-serif;
		}
		a {
			text-decoration: none;
		}
	</style>
</head>
<body>
	<header>
		<?php 
			gerarLogin();
			gerarNavPlantas() 
		?>
	</header>
	<main>
		<div class="container center">
			<div class="row">
				<div class="col s12 center">
					<h3 class="red-text">Plantas</h3>
				</div>
			</div>
			<div class="row">
				<?php
					$crud = new Crud;
					$crud->mostrarPlantas();
				?>
			</div>
		</div>
	</main>
	<?php echo gerarFooter() ?>

	<!--  Scripts-->
	<?php echo gerarScripts() ?>
	<script type="text/javascript">
		 $(document).ready(function(){
		    $('.modal').modal();
		  });
	</script>
</body>
</html>