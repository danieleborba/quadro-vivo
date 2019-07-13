<!DOCTYPE html>
<?php	
	include('conf/conf.inc.php');
	include('connect/connect.php');
	include('valida.php');
	include('funcoes.php');
?>
	<html lang="pt-BR">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8">
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
			<?php gerarNavUsuario() ?>
		</header>

		<main>
			<br>
			<div class="container center">
				<h4 class="title" style="color: green">Perfil</h4>
				<div class="row">
					<div class="col s12 m12 l6 push-l3">
						<?php 
							gerarImagem('250rem', 'circle', '');
							echo '<p><h5>' .$_SESSION['nome'].' '.$_SESSION['sobrenome']. '</h5>';
							echo $_SESSION['usuario']. '<br>' .$_SESSION['email']. '<br>' .$_SESSION['data_nascimento']. '</p>';
						?>
						<br>
					</div>
				</div>
				<div class="row center">
					<div class="col s12 m12 l3 offset-l3">
						<!-- Modal Trigger -->
						<a href="config.php" class="waves-effect waves-light btn red" style="margin-bottom: 1rem"><i class="material-icons left">settings</i>CONFIGURAÇÕES</a>
					</div>
					<div class="col s12 m12 l3">
						<a href="#alterarImagem" class="waves-effect waves-light btn modal-trigger red"><i class="material-icons left">account_box</i>Alterar imagem</a>
					</div>
				</div>
				<div class="row">
					<div id="alterarImagem" class="modal bottom-sheet">
						<div class="modal-content">
							<h4 class="center">Alterar Imagem de Perfil</h4>
							<?php
						      	alterarImagem();
						      ?>
						</div>
					</div>
				</div>
			</div>
		</main>


		<br><br>
		<?php echo gerarFooter() ?>

		<!--  Scripts-->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="js/materialize.js"></script>
		<script src="js/init.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('select').formSelect();
				$('.modal').modal();
			});

		</script>

	</body>

	</html>
