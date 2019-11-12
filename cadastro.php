<?php
	include('funcoes.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Cadastro | Quadro Vivo</title>

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="shortcut icon" type="imagem/x-icon" href="img/plant.png">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>

<body>
	<header>
		<?php gerarNavIndex() ?>
	</header>

	<main>
		<div class="row center">
			<div class="col l8	" style="padding-left: 10vw">
				<form action="acao.php" method="post">
					<div class="row">
						<br><br>
						<h3 class="red-text">Cadastro</h3>
						<div class="input-field col s6">
							<i class="material-icons prefix">account_circle</i>
							<input required id="nome" name="nome" type="text" class="validate">
							<label for="nome">Nome</label>
						</div>

						<div class="input-field col s6">
							<i class="material-icons prefix">mail</i>
							<input required id="email" type="email" class="validate" name="email">
							<label for="email">Email</label>
						</div>
						<div class="input-field col s6">
							<i class="material-icons prefix">lock</i>
							<input required id="password" type="password" class="validate" name="senha">
							<label for="password">Senha</label>
						</div>

						<div class="input-field col s6">
							<i class="material-icons prefix">lock_outline</i>
							<input required id="password2" type="password" class="validate" name="confirmacao">
							<label for="password2">Confirmar Senha</label>
						</div>

						<div class="input-field col s6">
							<i class="material-icons prefix">person_outline</i>
							<input required id="usuario" type="text" class="validate" name="usuario">
							<label for="usuario">Usuário</label>
						</div>

						<div class="input-field col s6">
							<i class="material-icons prefix">shopping_cart</i>
							<input required id="codigoCompra" type="number" class="validate" name="codigoCompra">
							<label for="codigoCompra">Código da Compra</label>
						</div>

					</div>
					<div class="row">
						<div class="input-field col l6 offset-l3 s12">
							<button class="waves-effect waves-light btn red white-text" type="submit">continuar<i class="material-icons right">send</i></button>
							<input required type="hidden" name="acao" value="cadastrar">
						</div>
					</div>
					</form>
			</div>
			<div class="col l4" style="padding-right: 5vw">
				<br><br><br>
				<img src="img/humaaans/p3.svg" alt="Pessoa rodeada de plantas apontando para os campos do cadastro" width="85%">
			</div>
		</div>
	</main>


	<?php 
		gerarScripts();
	?>
	<script src="src/jquery.mask.js"></script>
</body>
</html>