<!DOCTYPE html>
<?php	
	include('conf/conf.inc.php');
	include('connect/connect.php');
	include('valida.php');
	include('funcoes.php');
?>
	<html lang="pt-BR">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Quadro Vivo</title>

		<!-- CSS  -->
		<link rel="shortcut icon" type="imagem/x-icon" href="img/plant.png">
		<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
		<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
		<link href="css/material-icons.css" rel="stylesheet">
		<style type="text/css">
			body {
				display: flex;
				min-height: 100vh;
				flex-direction: column;
			}

			main {
				flex: 1 0 auto;
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
			<?php gerarNavUsuario() ?>
		</header>

		<main>

			<div class="container center">
				<div class='row'><br>
					<h4 style="color: green">Monitoramento</h4>
				</div>

				<div class="row">
					<div class="col l12">
						<iframe src="https://console.thinger.io/#/dashboard/dash_quadrovivo?authorization=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiJEYXNoYm9hcmRfZGFzaF9xdWFkcm92aXZvIiwidXNyIjoicXVhZHJvdml2byJ9.VorBzHiPp0J-r2viw9CmJae0Ng8OCbBh3WJuk9M3Ctw" width="600px" height="1000px" class="frame"></iframe>
					</div>
				</div>


			</div>

			</div>
			</div>

			<br><br>

		</main>

		<?php echo gerarFooter() ?>

		<!--  Scripts-->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="js/materialize.js"></script>
		<script src="js/init.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('select').formSelect();
			});

		</script>

	</body>

	</html>
