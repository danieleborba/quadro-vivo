<!DOCTYPE html>
<?php	
	include('funcoes.php');
	include('valida.php');
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
		<div class="container center">
			<div class="section" style="min-height: 90vh">
				<h4 class="title red-text">Perfil</h4>
				<div class="row center">
					<div class="col s12 l6 offset-l3">
						<?php 
							gerarImagem('15rem', '');
							echo '<br><p><h5>' .$_SESSION['nome']. '</h5>';
							echo $_SESSION['usuario']. '<br>' .$_SESSION['email']. '</p>';
						?>
					</div>
				</div>

				<br>

				<div class="col s12 l6 offset-l3">
					<h5 class="green-text text-darken-3">Configurações</h5>
					<div class="collection">
						<a href="wifi_manager.php" class="collection-item">Configurar conexão wi-fi</a>
						<a href="#!" class="collection-item">Alterar plantas</a>
						<a href="#!" class="collection-item">Alterar senha</a>
						<a href="#alterarImagem" class="collection-item modal-trigger">Alterar imagem</a>
					</div>
				</div>
			</div>
		</div>
	</main>

	<?php echo gerarFooter() ?>
</body>
</html>