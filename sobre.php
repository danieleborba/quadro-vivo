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
						<h3 class="red-text">Como funciona o Quadro Vivo?</h3>
					</div>
				</div>
			</div>
		</div>


		<div class="container">
			<div class="section">

				<div class="row">
					<div class="col s12 l6">
						<h5 class="center">1</h5>
						<p class="light center">Os sensores detectam a quantidade de água e luz e os microcontroladores decidem se é necessário mais água ou luz. Cada planta receberá o necessário para sobreviver e prosperar, com os valores obtidos por meio de pesquisas e experimentação.</p>
					</div>
					<div class="col s12 l6">
						
					</div>
				</div>

				<div class="row">
					<div class="col s12 l6">
						
					</div>
					<div class="col s12 l6">
						<h5 class="center">2</h5>
						<p class="light center">Acesse a interface do Quadro Vivo em seu computador ou celular e receba gráficos em tempo real mostrando a quantidade de água e luz que as plantas estão recebendo em tempo real. Desligue ou ligue o Quadro a hora que quiser e em qualquer lugar por meio da internet.</p>
					</div>

					<div class="col s12 l6">
						<h5 class="center">3</h5>
						<p class="light center">Selecione as plantas que deseja ter em seu Quadro Vivo. Veja informações sobre os seus benefícios para a saúde e como utilizá-las. Usufrue do que você plantar com pouquíssima manutenção e aproveite os benefícios de ter uma vida mais saudável e conectada à natureza.</p>
					</div>
					<div class="col s12 l6">
						
					</div>
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