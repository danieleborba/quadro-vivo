<?php
	include('funcoes.php');
	include('autoload.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Login | Quadro Vivo</title>
	<?php gerarCSS() ?>
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
		<div style="min-height: 90vh">
	<header>
		<?php gerarNavIndex() ?>
	</header>

	<main>
		<div class="container center">
			<form action="acao.php" method="post" style="min-height: 90vh" class="valign-wrapper">
				<div class="row" style="min-height: 100%">
					<h3 class="red-text">Login</h3>
					<div class="input-field col s12 m6 offset-m3">
						<i class="material-icons prefix">account_circle</i>
						<input id="icon_prefix" name="usuario" type="text" class="validate">
						<label for="icon_prefix">User</label>
					</div>
					<div class="input-field col s12 m6 offset-m3">
						<i class="material-icons prefix">lock</i>
						<input id="icon_prefix" name="senha" type="password" class="validate">
						<label for="icon_prefix">Senha</label>
					</div>
					<div class="input-field col s12 m6 offset-m3">
						<button class="waves-effect waves-light btn red white-text" type="submit" name="entrar">entrar<i class="material-icons right">send</i></button>
						<input type="hidden" name="acao" value="login">
					</div>
					<div class="col s12 m6 offset-m3">
						<p>Não tem uma conta? <a href="cadastro.php" class="green-text text-darken-1">Cadastre-se</a></p>
					</div>
				</div>
			</form>
		</div>
	</main>
	</div>

	<?php 
		gerarFooter();
		gerarScripts() 
	?>
</body>
</html>