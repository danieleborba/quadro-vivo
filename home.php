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
					<li class="grey lighten-3"><a href="home.php">Monitoramento</a></li>
					<li><a href="plantas3.php">Plantas</a></li>
					<li><a href="configuracoes.php">Configurações</a></li>
					<li><a href="acao.php?acao=logout">Sair</a></li>
				</ul>
			</div>

			<div class="col l9 s12 center">
				<div class="row">
					<div class="col s12" style="padding-right: 3vw">
						<h3 class="red-text text-darken-1">Monitoramento</h3>
						<!-- <div id="curve_chart" style="width: 900px; height: 500px"></div> -->
						<iframe src="https://console.thinger.io/#/dashboard/dash_quadrovivo?authorization=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiJEYXNoYm9hcmRfZGFzaF9xdWFkcm92aXZvIiwidXNyIjoicXVhZHJvdml2byJ9.VorBzHiPp0J-r2viw9CmJae0Ng8OCbBh3WJuk9M3Ctw" frameborder="0" width="100%" height="100%"></iframe>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="js/materialize.js"></script>
	<script type="text/javascript">
	  google.charts.load('current', {'packages':['corechart']});
	  google.charts.setOnLoadCallback(drawChart);

	  function drawChart() {
		var data = google.visualization.arrayToDataTable([
		  ['Horário', 'Humidade 1', 'Luminosidade'],
		  ['2004',  1000,      400],
		  ['2005',  1170,      460],
		  ['2006',  660,       1120],
		  ['2007',  1030,      540]
		]);

		var options = {
		  title: 'Quadro Vivo',
		  curveType: 'function',
		  legend: { position: 'bottom' }
		};

		var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

		chart.draw(data, options);
	  }
	</script>

	<?php
		gerarScripts();
	?>
</body>
</html>