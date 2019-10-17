<?php	
	include('valida.php');
	include('funcoes.php');
	include('autoload.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Quadro Vivo</title>
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

		h4 {
			letter-spacing: 0.05rem;
		}

		@media only screen and (max-width: 600px) {
		  .frame {
			max-width: 100%;
		  
		  }
		}

		.collection {
			width: 60%;
			text-align: center;
		}

		table {
			border: none;			
		}
	</style>
</head>
<body>

		

	<main>
		<div class="row">
			<div class="col l3">
				<ul id="slide-out" class="sidenav sidenav-fixed black-text center" style="padding-top: 20vh">
					<li><img src="img/mao.svg" width="80rem" alt="logo do Quadro Vivo"></li>
					<li><a href="home.php">Monitoramento</a></li>
					<li><a href="plantas3.php">Plantas</a></li>
					<li class="grey lighten-3"><a href="configuracoes.php">Configurações</a></li>
					<li><a href="acao.php?acao=logout">Sair</a></li>
				</ul>
			</div>

			<div class="col l8 s12 center" style="margin-top: 5vh">
				<h3 class="red-text text-darken-1">Configurações</h4><br>
				<div class="row center">
                    <div class="col s12">
						<?php 
							echo '<p>'. gerarImagem('15rem', 'alt="Imagem de perfil do usuário"') .'</p>';
						?>
						<?php 
							echo '<p><h5>' .$_SESSION['nome']. '</h5>';
							echo $_SESSION['usuario']. '<br>' .$_SESSION['email']. '</p>';
						?>
					
						<div class="collection">
							<a href="wifi_manager.php" class="collection-item">Configurar conexão wi-fi</a>
							<a href="#!" class="collection-item">Alterar plantas</a>
							<a href="#!" class="collection-item">Alterar senha</a>
							<a href="#!" class="collection-item">Alterar dados</a>
							<a href="#alterarImagem" class="collection-item modal-trigger">Alterar imagem</a>
						</div>
                    </div>
				</div>
			</div>
		</div>
	</main>

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="js/materialize.js"></script>
	<?php
		gerarScripts();
	?>
</body>
</html>