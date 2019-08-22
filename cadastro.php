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

	<main style="min-height: 100vh">
		<div class="container center">
			<div class='row'><br>
				<h3 class="red-text">Cadastro</h3>

				<form action="acao.php" method="post">
					<div class="row">
						<div class="input-field col l6 s12">
							<i class="material-icons prefix">account_circle</i>
							<input id="nome" name="nome" type="text" class="validate">
							<label for="nome">Nome</label>
						</div>
						<div class="input-field col l6 s12">
							<i class="material-icons prefix">person_outline</i>
							<input id="usuario" type="text" class="validate" name="usuario">
							<label for="usuario">Usuário</label>
						</div>

						<div class="input-field col l6 s12">
							<i class="material-icons prefix">mail</i>
							<input id="email" type="email" class="validate" name="email">
							<label for="email">Email</label>
						</div>

						<div class="input-field col l6 s12">
							<i class="material-icons prefix">phone</i>
							<input id="telefone" type="text" class="validate" name="telefone" data-mask="(00) 00000-0000">
							<label for="telefone">Telefone</label>
						</div>

						<div class="input-field col l6 s12">
							<i class="material-icons prefix">lock</i>
							<input id="password" type="password" class="validate" name="senha">
							<label for="password">Senha</label>
						</div>

						<div class="input-field col l6 s12">
							<i class="material-icons prefix">lock_outline</i>
							<input id="password2" type="password" class="validate" name="confirmacao">
							<label for="password2">Confirmar Senha</label>
						</div>

						<div class="input-field col l6 s12">
							<i class="material-icons prefix">date_range</i>
							<input type="text" class="datepicker grey-text text-darken-3" placeholder="Data de Nascimento" id="dataNascimento" name="dataNascimento" data-mask="00/00/0000">
						</div>

						<div class="input-field col l6 s12">
							<i class="material-icons prefix">shopping_cart</i>
							<input id="codigoCompra" type="number" class="validate" name="codigoCompra">
							<label for="codigoCompra">Código da Compra</label>
						</div>

					</div>
					<div class="row">
						<div class="input-field col l6 offset-l3 s12">
							<button class="waves-effect waves-light btn red white-text" type="submit">continuar<i class="material-icons right">send</i></button>
							<input type="hidden" name="acao" value="cadastrar">
						</div>
					</div>
			</div>
		</div>
		</form>
		</div>
		</div>
	</main>


	<?php 
		gerarFooter();
		gerarScripts();
	?>
	<script src="src/jquery.mask.js"></script>
</body>
</html>