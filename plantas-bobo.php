<!DOCTYPE html>
<?php 
  include('../funcoes.php');
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
		<?php gerarNavIndex() ?>
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
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/agriao.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Agrião<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Agrião<i class="material-icons right">close</i></span>
							<p>É amargo. Faz bem pra saúde.</p>
						</div>
					</div>
				</div>


				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/rucula.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Rúcula<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Rúcula<i class="material-icons right">close</i></span>
							<p>É uma folha muito subestimada. Falam que tem gosto ruim mas é gostoso e fica bom na pizza. Deve fazer bem pra saúde.</p>
						</div>
					</div>
				</div>


				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/alface.jpg">
						</div>
						<div class="card-content center">
							<span class="card-title activator grey-text text-darken-4">Alface<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Alface<i class="material-icons right">close</i></span>
							<p>É difícil de comer mas é muito muito bom. Eu gosto mais quando é picado. O crespo é melhor que o liso.</p>
						</div>
					</div>
				</div>

				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/alfaceroxo.png">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Alface Roxo<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Alface Roxo<i class="material-icons right">close</i></span>
							<p>Não temos opinião sobre ele. É igual alface mas roxo.</p>
						</div>
					</div>
				</div>

				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/chicoria.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Chicória<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Chicória<i class="material-icons right">close</i></span>
							<p>Comida de italiano. Dizem que é bom com bacon mas eu não como carne.</p>
						</div>
					</div>
				</div>

				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/alecrim.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Alecrim<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Alecrim<i class="material-icons right">close</i></span>
							<p>Tem um monte na minha horta. É um tempero muito válido.</p>
						</div>
					</div>
				</div>
	
				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/arruda.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Arruda<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Arruda<i class="material-icons right">close</i></span>
							<p>Tira maus espíritos e o chá é abortivo (lenda urbana).</p>
						</div>
					</div>
				</div>


				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/hortela.jpg">
						</div>
						<div class="card-content center">
							<span class="card-title activator grey-text text-darken-4">Hortelã<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Hortelã<i class="material-icons right">close</i></span>
							<p>Amo fazer chá com hortelã da minha horta. Muito gostoso o chá. Também dá pra fazer mojitos (depois dos 18). Tem muito muito muito na minha casa.</p>
						</div>
					</div>
				</div>

				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/artemisia.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Artemísia<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Artemísia<i class="material-icons right">close</i></span>
							<p>Parece salsa. Mas é artemísia.</p>
						</div>
					</div>
				</div>

				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/prontoalivio.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Pronto Alívio<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Pronto Alívio<i class="material-icons right">close</i></span>
							<p>Nada a declarar.</p>
						</div>
					</div>
				</div>

				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/tomilho.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Tomilho<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Tomilho<i class="material-icons right">close</i></span>
							<p>Minha cachorra gosta de comer da horta.</p>
						</div>
					</div>
				</div>

				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/cebolinha.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Cebolinha<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Cebolinha<i class="material-icons right">close</i></span>
							<p>Fica bom no bolinho de aipim.</p>
						</div>
					</div>
				</div>

				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/salsa.jpg">
						</div>
						<div class="card-content center">
							<span class="card-title activator grey-text text-darken-4">Salsa<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Salsa<i class="material-icons right">close</i></span>
							<p>Bom também. Dá pra por no feijão e nos patÊs. Só e boa fresca. Por isso comprem um Quadro Vivo.</p>
						</div>
					</div>
				</div>

				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/babosa.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Babosa<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Babosa<i class="material-icons right">close</i></span>
							<p>Dá pra passar no cabelo e pra passar em queimaduras. É ornamental também.</p>
						</div>
					</div>
				</div>

				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/mosquitinho.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Mosquitinho<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Mosquitinho<i class="material-icons right">close</i></span>
							<p>É bonito porém meramente decorativo.</p>
						</div>
					</div>
				</div>


				<div class="col s12 m6 l4">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator fotos" src="img/trevo.jpg">
						</div>
						<div class="card-content center">
							<span class="card-title activator grey-text text-darken-4">Trevo de 4 Folhas<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Trevo de Quatro Folhas<i class="material-icons right">close</i></span>
							<p>Dá sorte. Tem uma música da anavitória.</p>
						</div>
					</div>
				</div>
				
					<div class="col s12 m6 l4">
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
								<img class="activator fotos" src="img/espada.jpg">
							</div>
							<div class="card-content">
								<span class="card-title activator grey-text text-darken-4">Espada de São Jorge<i class="material-icons right">more_vert</i></span>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">Espada de São Jorge<i class="material-icons right">close</i></span>
								<p>Meramente decorativo mas eu acho legal.</p>
							</div>
						</div>
					</div>
			</div>
		</div>
		</div>
		</div>
		<br>
	</main>










	<footer class="page-footer red">
		<div class="container center">
			<div class="row" style="font-size: 80%">
				<div class="col s12">
					<h5 class="white-text">Quem somos?</h5>
					<p class="grey-text text-lighten-4">Estudantes do Técnico em Informática buscando reaproximar as pessoas da natureza por meio da tecnologia.</p>
				</div>
				<div class="col s12">
					Icons made by <a href="https://www.flaticon.com/authors/good-ware" title="Good Ware">Good Ware</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a>
				</div>
			</div>
		</div>
	</footer>


	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/init.js"></script>

</body>

</html>
