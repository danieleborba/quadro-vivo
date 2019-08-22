<?php
  include('funcoes.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Sobre | Quadro Vivo</title>

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="shortcut icon" type="imagem/x-icon" href="img/plant.png">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Raleway:400,700,700i&display=swap&subset=latin-ext');

		body {
			font-family: 'Raleway';
			padding: 0;
			margin: 0;
			padding-left: -1rem;
			right: 0;
		}
		
	</style>
</head>

<body>
	<header>
		<?php gerarNavIndex() ?>
	</header>

	<main>
		<div class="container">
			<div class="section">

				<div class="row">
					<div class="col s12 center">
						<h3><i class="mdi-content-send red-text"></i></h3>
						<h3 class="red-text">Sobre</h3>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="section">

				<div class="row">
					<div class="col s12 l8 offset-l2">
						<div class="icon-block">
							<h2 class="center red-text"><i class="material-icons">wifi</i></h2>
							<h5 class="center">1</h5>

							<p class="light center">Os sensores detectam a quantidade de água e luz e os microcontroladores decidem se é necessário mais água ou luz. Cada planta receberá o necessário para sobreviver e prosperar, com os valores obtidos por meio de pesquisas e experimentação.</p>
						</div>
					</div>

					<div class="col s12 l8 offset-l2">
						<div class="icon-block">
							<h2 class="center red-text"><i class="material-icons">devices</i></h2>
							<h5 class="center">2</h5>

							<p class="light center">Acesse a interface do Quadro Vivo em seu computador ou celular e receba gráficos em tempo real mostrando a quantidade de água e luz que as plantas estão recebendo em tempo real. Desligue ou ligue o Quadro a hora que quiser e em qualquer lugar por meio da internet.</p>
						</div>
					</div>

					<div class="col s12 l8 offset-l2">
						<div class="icon-block">
							<h2 class="center red-text"><i class="material-icons">nature_people</i></h2>
							<h5 class="center">3</h5>

							<p class="light center">Selecione as plantas que deseja ter em seu Quadro Vivo. Veja informações sobre os seus benefícios para a saúde e como utilizá-las. Usufrue do que você plantar com pouquíssima manutenção e aproveite os benefícios de ter uma vida mais saudável e conectada à natureza.</p>
						</div>
					</div>
				</div>

			</div>
		</div>

		</div>
		</div>

		
		<div class="container">
			<div class="section">

				<!--   Icon Section   -->
				<div class="row">
					<div class="col s12 m4">
						<div class="icon-block">
							<h2 class="center red-text"><i class="material-icons">flash_on</i></h2>
							<h5 class="center">Automatizado</h5>

							<p class="center">A rega e a iluminação acontecem automaticamente por meio de sensores e microcontroladores.</p>
						</div>
					</div>

					<div class="col s12 m4">
						<div class="icon-block">
							<h2 class="center red-text"><i class="material-icons">group</i></h2>
							<h5 class="center">Interativo</h5>

							<p class="center">Receba gráficos e informações sobre a saúde e a utilidade de suas plantas.</p>
						</div>
					</div>

					<div class="col s12 m4">
						<div class="icon-block">
							<h2 class="center red-text"><i class="material-icons">settings</i></h2>
							<h5 class="center">Personalizável</h5>

							<p class="center">Escolha a arquitetura que melhor se adequea à sua casa e selecione as plantas que deseja.</p>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="parallax-container valign-wrapper" style="height: 70vh">
			<div class="section no-pad-bot">
				<div class="container">
					<div class="row center">
						<h5 class="header col s12 light white-text" style="text-shadow: 1.5px 1.5px black; font-size: 2.5rem">Acabe com as preocupações sobre a saúde das suas plantas.</h5>
					</div>
				</div>
			</div>
			<div class="parallax"><img src="img/quadro/quadrovivo2.jpeg" alt="Unsplashed background img 3"></div>
		</div>

		<div class="container center">
			<div class="row">
				<br>
				<h4 class="red-text">Equipe Quadro Vivo</h4>
			</div>
			<div class="row">
				<!-- DANI -->
				<div class="col s12 m6">
					<img src="img/equipe/dani.jpeg" class="fota">
					<p><h6 class="nomePlanta-m">Daniele Borba</h6>daniborbavoigt@gmail.com</p>
					<p>Estudante do Técnico em Informática no IFC - Rio do Sul.</p>
				</div>


				<!-- DAI -->
				<div class="col s12 m6">
					<img src="img/equipe/dai.jpeg" class="fota">
					<p><h6 class="nomePlanta-m">Daiane Carl</h6>daianecarl@hotmail.com</p>
					<p>Estudante do Técnico em Informática no IFC - Rio do Sul.</p>
				</div>

				<!-- EDUARDO -->
				<div class="col s12 m6">
					<img src="img/equipe/eduardo.png" class="fota">
					<p><h6 class="nomePlanta-m">Eduardo Puhl</h6>eduardo.puhl@ifc.edu.br</p>
                    <p>Doutor em Engenharia Elétrica, profesor no IFC - Rio do Sul</p>
				</div>


				<!-- DENISE -->
				<div class="col s12 m6">
					<img src="img/equipe/denise.jpeg" class="fota">
					<p><h6 class="nomePlanta-m">Denise Fernandes</h6>denise.fernandes@ifc.edu.br</p>
					<p>Doutora em Fisiologia Vegetal, professora no IFC - Rio do Sul.</p>
					<br>
				</div>
			</div>
		</div>
	</main>

	<?php echo gerarFooter() ?>

	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/init.js"></script>

</body>

</html>