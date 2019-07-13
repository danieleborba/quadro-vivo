<!DOCTYPE html>
<?php 
  include('conf/conf.inc.php');
  include('connect/connect.php');
//   include('valida.php');
  include('funcoes.php');
?>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Plantas | Quadro Vivo</title>

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="shortcut icon" type="imagem/x-icon" href="img/plant.png">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
	<header>
		<?php gerarNavUsuario() ?>
	</header>

	<main>

		<div class="container center">
			<div class="section">
				<div class="row">
					<div class="col s12 center">
						<h3><i class="mdi-content-send red-text"></i></h3>
						<h3 class="red-text">Plantas</h3>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col s12 m6 l4">
					<div class="card hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/plantas/agriao.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Agrião<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Agrião<i class="material-icons right">close</i></span>
							<p></p>
						</div>
					</div>
				</div>


				<div class="col s12 m6 l4">
					<div class="card hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/plantas/rucula.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Rúcula<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Rúcula<i class="material-icons right">close</i></span>
							<p></p>
						</div>
					</div>
				</div>


				<div class="col s12 m6 l4">
					<div class="card hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/plantas/alface.jpg">
						</div>
						<div class="card-content center">
							<span class="card-title activator grey-text text-darken-4">Alface<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Alface<i class="material-icons right">close</i></span>
							<p></p>
						</div>
					</div>
				</div>

				<div class="col s12 m6 l4">
					<div class="card hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/plantas/alfaceroxo.png">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Alface Roxo<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Alface Roxo<i class="material-icons right">close</i></span>
							<p></p>
						</div>
					</div>
				</div>

				<div class="col s12 m6 l4">
					<div class="card hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/plantas/chicoria.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Chicória<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Chicória<i class="material-icons right">close</i></span>
							<p></p>
						</div>
					</div>
				</div>

				<div class="col s12 m6 l4">
					<div class="card hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/plantas/alecrim.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Alecrim<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Alecrim<i class="material-icons right">close</i></span>
							<p></p>
						</div>
					</div>
				</div>
	
				<div class="col s12 m6 l4">
					<div class="card hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/plantas/arruda.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Arruda<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Arruda<i class="material-icons right">close</i></span>
							<p></p>
						</div>
					</div>
				</div>


				<div class="col s12 m6 l4">
					<div class="card hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/plantas/hortela.jpg">
						</div>
						<div class="card-content center">
							<span class="card-title activator grey-text text-darken-4">Hortelã<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Hortelã<i class="material-icons right">close</i></span>
							<p></p>
						</div>
					</div>
				</div>

				<div class="col s12 m6 l4">
					<div class="card hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/plantas/artemisia.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Artemísia<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Artemísia<i class="material-icons right">close</i></span>
							<p></p>
						</div>
					</div>
				</div>

				<div class="col s12 m6 l4">
					<div class="card hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/plantas/prontoalivio.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Pronto Alívio<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Pronto Alívio<i class="material-icons right">close</i></span>
							<p></p>
						</div>
					</div>
				</div>

				<div class="col s12 m6 l4">
					<div class="card hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/plantas/tomilho.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Tomilho<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Tomilho<i class="material-icons right">close</i></span>
							<p></p>
						</div>
					</div>
				</div>

				<div class="col s12 m6 l4">
					<div class="card hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/plantas/cebolinha.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Cebolinha<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Cebolinha<i class="material-icons right">close</i></span>
							<p></p>
						</div>
					</div>
				</div>

				<div class="col s12 m6 l4">
					<div class="card hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/plantas/salsa.jpg">
						</div>
						<div class="card-content center">
							<span class="card-title activator grey-text text-darken-4">Salsa<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Salsa<i class="material-icons right">close</i></span>
							<p></p>
						</div>
					</div>
				</div>

				<div class="col s12 m6 l4">
					<div class="card hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/plantas/babosa.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Babosa<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Babosa<i class="material-icons right">close</i></span>
							<p></p>
						</div>
					</div>
				</div>

				<div class="col s12 m6 l4">
					<div class="card hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/plantas/mosquitinho.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Mosquitinho<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Mosquitinho<i class="material-icons right">close</i></span>
							<p></p>
						</div>
					</div>
				</div>


				<div class="col s12 m6 l4">
					<div class="card hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/plantas/trevo.jpg">
						</div>
						<div class="card-content center">
							<span class="card-title activator grey-text text-darken-4">Trevo de 4 Folhas<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Trevo de Quatro Folhas<i class="material-icons right">close</i></span>
							<p></p>
						</div>
					</div>
				</div>
				
					<div class="col s12 m6 l4">
						<div class="card hoverable">
							<div class="card-image waves-effect waves-block waves-light">
								<img class="activator fotos" src="img/plantas/espada.jpg">
							</div>
							<div class="card-content">
								<span class="card-title activator grey-text text-darken-4">Espada de São Jorge<i class="material-icons right">more_vert</i></span>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">Espada de São Jorge<i class="material-icons right">close</i></span>
								<p></p>
							</div>
						</div>
					</div>
			</div>
		</div>
		<br>
	</main>

	<?php echo gerarFooter() ?>

	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/init.js"></script>

</body>

</html>
