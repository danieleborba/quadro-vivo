<!DOCTYPE html>
<html lang="pt-BR">
<?php
	include('funcoes.php');
	include('autoload.php');
?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="author" content="Daniele Borba Voigt">
	<meta name="description" content="Página de login do sistema do Quadro Vivo, no qual é possível monitorar a performance do produto">
	  <meta name="keywords" content="automação, jardinagem, informática, plantas, login">
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
					<div class="col l4">
						<img src="img/humaaans/p1.svg" width="90%" alt="Pessoa esticando a mão até a palavra 'Login'">
					</div>
					<div class="col l4">
						<h3 class="red-text">Login</h3>
						<div class="input-field col s12">
							<input name="usuario" type="text" class="validate">
							<label>User</label>
						</div>
						<div class="input-field col s12">
							<input name="senha" type="password" class="validate">
							<label>Senha</label>
						</div>
						<div class="input-field col s12">
							<button class="waves-effect waves-light btn-large red white-text" type="submit" name="entrar">entrar</button>
							<input type="hidden" name="acao" value="login">
						</div>
						<div class="col s12">
							<p>Não tem uma conta? <a href="cadastro.php" class="blue-text text-darken-2">Cadastre-se</a></p>
						</div>
					</div>
					<div class="col l4">
						<img src="img/humaaans/p2.svg" width="90%" alt="Pessoa esticando a mão até a palavra 'Login'">
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