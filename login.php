<<<<<<< HEAD
<!DOCTYPE html>
<?php 
  include('conf/conf.inc.php');
  include('connect/connect.php');
  include('funcoes.php');
?>
<html lang="pt-BR">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Login | Quadro Vivo</title>

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
		<?php gerarNavIndex() ?>
	</header>

	<main>
		<div class="container center">
			<div class='row'><br>
				<h3 class="red-text">Login</h3>

				<form action="acao.php" method="post">
					<div class="row">
						<div class="input-field col s12 m6 push-m3 l6 push-l3">
							<i class="material-icons prefix">account_circle</i>
							<input id="icon_prefix" name="usuario" type="text" class="validate">
							<label for="icon_prefix">User</label>
						</div>

					</div>
					<div class="row">
						<div class="input-field col s12 m6 push-m3 l6 push-l3">
							<i class="material-icons prefix">lock</i>
							<input id="icon_prefix" name="senha" type="password" class="validate">
							<label for="icon_prefix">Senha</label>
						</div>
					</div>
					<div class="row"></div>
					<button class="waves-effect waves-light btn red"><input type="submit" name="entrar" class="white-text" value="entrar"><i class="material-icons right">send</i></button>
					<input type="hidden" name="acao" value="login">
					<input type="hidden" name="pagina" value="confirmar_cadastro.php">
					<input type="hidden" name="tabela" value="usuario">
			</div>
		</div>
		</form>
		</div>
		</div>
	</main>

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
=======
<!DOCTYPE html>
<?php 
  include('conf/conf.inc.php');
  include('connect/connect.php');
  include('funcoes.php');
?>
<html lang="pt-BR">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Login | Quadro Vivo</title>

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
		<?php gerarNavIndex() ?>
	</header>

	<main>
		<div class="container center">
			<div class='row'><br>
				<h3 class="red-text">Login</h3>

				<form action="acao.php" method="post">
					<div class="row">
						<div class="input-field col s12 m6 push-m3 l6 push-l3">
							<i class="material-icons prefix">account_circle</i>
							<input id="icon_prefix" name="user" type="text" class="validate">
							<label for="icon_prefix">User</label>
						</div>

					</div>
					<div class="row">
						<div class="input-field col s12 m6 push-m3 l6 push-l3">
							<i class="material-icons prefix">lock</i>
							<input id="icon_prefix" name="senha" type="password" class="validate">
							<label for="icon_prefix">Senha</label>
						</div>
					</div>
					<div class="row"></div>
					<button class="waves-effect waves-light btn red"><input type="submit" name="entrar" class="white-text" value="entrar"><i class="material-icons right">send</i></button>
					<input type="hidden" name="acao" value="login">
					<input type="hidden" name="pagina" value="confirmar_cadastro.php">
					<input type="hidden" name="tabela" value="usuario">
			</div>
		</div>
		</form>
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
>>>>>>> parent of 50e7b66... salvando essa versão dessa bosta do krlho
