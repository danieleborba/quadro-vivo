<!DOCTYPE html>
<?php	
	include('conf/conf.inc.php');
	include('connect/connect.php');
	include('valida.php');
	include('funcoes.php');
?>
	<html lang="en">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Quadro Vivo</title>

		<!-- CSS  -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="shortcut icon" type="imagem/x-icon" href="img/plant.png">
		<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
		<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
		<style type="text/css">
			body {
				display: flex;
				min-height: 100vh;
				flex-direction: column;
			}

			main {
				flex: 1 0 auto;
			}

		</style>
	</head>

	<body>
		<header>
			<?php gerarNavUsuario(); ?>
		</header>

		<main>
			<br>
			<div class="container center">
				<h4 style="color: green">Configurações</h4>
				<div class="row">
					<div class="col s12 m12 l6 push-l3">
						<div class="collection">
							<a href="wifi_manager.php" class="collection-item">Alterar conexão wi-fi</a>
							<a href="#!" class="collection-item">Alterar dispositivo</a>
							<a href="#!" class="collection-item">Alterar senha</a>
							<a href="#!" class="collection-item">Alterar plantas</a>
						</div>
						<br>
						<a class="waves-effect waves-light btn red" href="perfil.php"><i class="material-icons left">arrow_back</i>VOLTAR</a>
					</div>
				</div>
			</div>
		</main>

		<?php echo gerarFooter() ?>

		<!--  Scripts-->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="js/materialize.js"></script>
		<script src="js/init.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('select').formSelect();
			});

		</script>

	</body>

	</html>
