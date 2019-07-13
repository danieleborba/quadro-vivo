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
	<title>Contato | Quadro Vivo</title>

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="shortcut icon" type="imagem/x-icon" href="img/plant.png">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
	<header>
		<?php gerarNavIndex() ?>
	</header>

	<main>
		<div class="container center">
			<div class="section">
				<div class="row">
					<div class="col s12 center">
						<h3><i class="mdi-content-send red-text"></i></h3>
						<h3 class="red-text">Contato</h3>
					</div>
				</div>
				<div class="row">
					<div class="col s6 push-s3">
						<div class="card-panel green">
							<span class="white-text center"><h5>quadrovivo.ifc@gmail.com</h5>
        </span>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="container center">
			<div class="row">
				<h4 class="red-text">Equipe Quadro Vivo</h4>
			</div>
		</div>

		<div class="container center">
			<div class="row">
				<!-- DANI -->
				<div class="col s3">
					<img src="img/dani.jpg" class="fota">
					<p>
						<h6 class="nomePlanta-m">Daniele Borba</h6>daniborbavoigt@gmail.com</p>
				</div>


				<!-- DAI -->
				<div class="col s3">
					<img src="img/dai.jpg" class="fota">
					<p>
						<h6 class="nomePlanta-m">Daiane Carl</h6>daianecarl@hotmail.com</p>
				</div>

				<!-- EDUARDO -->
				<div class="col s3">
					<img src="img/eduardo.jpg" class="fota">
					<p>
						<h6 class="nomePlanta-m">Eduardo Puhl</h6>eduardo.puhl@ifc.edu.br</p>
				</div>


				<!-- DENISE -->
				<div class="col s3">
					<img src="img/denise.jpg" class="fota">
					<p>
						<h6 class="nomePlanta-m">Denise Fernandes</h6>denise.fernandes@ifc.edu.br</p>
				</div>
			</div>
		</div>
	</main>



	<footer class="page-footer red">
		<div class="container center">
			<div class="row">
				<div class="col s12">
					<h5 class="white-text">Quem somos?</h5>
					<p class="grey-text text-lighten-4">Estudantes do Técnico em Informática buscando reaproximar as pessoas da natureza por meio da tecnologia.</p>
				</div>
			</div>
			<div class="center">Icons made by <a href="https://www.flaticon.com/authors/good-ware" title="Good Ware">Good Ware</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
		</div>

	</footer>


	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/init.js"></script>

</body>

</html>
