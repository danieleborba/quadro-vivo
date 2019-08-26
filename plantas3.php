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
				<ul id="slide-out" class="sidenav sidenav-fixed black-text center" style="padding-top: 20vh">
					<li><img src="img/mao.svg" width="80rem" alt="logo do Quadro Vivo"></li>
					<li><a href="home.php">Monitoramento</a></li>
					<li class="grey lighten-3"><a href="plantas3.php">Plantas</a></li>
					<li><a href="configuracoes.php">Configurações</a></li>
					<li><a href="acao.php?acao=logout">Sair</a></li>
				</ul>
			</div>

			<div class="col l9 s12 center">
				<div class="row">
                    <div class="col s12 center">
                        <h4 class="red-text text-darken-1">Plantas</h4>
                    </div>
                </div>
                <div class="row" style="padding-right: 3vw">
                    <?php
                        $usuario = new Usuario($_SESSION['codigo']);
                        $quadro = new QuadroVivo;
                        $quadro->mostrarPlantas($usuario->getCodigo());
                    ?>
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