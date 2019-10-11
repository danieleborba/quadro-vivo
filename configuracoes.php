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

	</style>
</head>
<body>

	<header>
		<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
	</header>

	<main>
		<div class="row">
			<div class="col l3">
				<ul id="slide-out" class="sidenav sidenav-fixed black-text center" style="padding-top: 25vh">
					<li><img src="img/mao.svg" width="80rem" alt="logo do Quadro Vivo"></li>
					<li><a href="home.php">Monitoramento</a></li>
					<li><a href="plantas3.php">Plantas</a></li>
					<li class="grey lighten-3"><a href="configuracoes.php">Configurações</a></li>
					<li><a href="acao.php?acao=logout">Sair</a></li>
				</ul>
			</div>

			<div class="col l9 s12 center">
				<div class="row">
					<div class="col s12" style="padding-right: 3vw">
						<div class="row center">
                            <div class="col s12 l6 offset-l3">
                            	<h4 class="red-text text-darken-1">Configurações</h4>
								
									<?php 
										echo '<p>'. gerarImagem('15rem', 'alt="Imagem de perfil do usuário"') .'</p>';
									?>
									<?php 
										echo '<p><h5>' .$_SESSION['nome']. '</h5>';
										echo $_SESSION['usuario']. '<br>' .$_SESSION['email']. '</p>';
									?>
                            </div>
                        </div>
                        <div class="col s12 l6 offset-l3">
                            <div class="collection">
                                <a href="wifi_manager.php" class="collection-item">Configurar conexão wi-fi</a>
                                <a href="#!" class="collection-item">Alterar plantas</a>
                                <a href="#!" class="collection-item">Alterar senha</a>
                                <a href="#alterarImagem" class="collection-item modal-trigger">Alterar imagem</a>
                            </div>
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