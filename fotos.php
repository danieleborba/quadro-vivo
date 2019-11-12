<!DOCTYPE html>
<html lang="pt-BR">
<?php
  include('funcoes.php');
?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="author" content="Daniele Borba Voigt">
	<meta name="description" content="Página de fotos do Quadro Vivo, um jardim vertical automatizado">
	  <meta name="keywords" content="automação, jardinagem, informática, plantas">
	<title>Fotos | Quadro Vivo</title>

	<!-- CSS  -->
	<link rel="shortcut icon" type="imagem/x-icon" href="img/mao.svg">
	<?php
		gerarCSS();
	?>
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
			<div class="row center">
                <h3 class="red-text">Fotos</h3>
            </div>
            <div class="row">
                <div class="col s6">
                    <img src="img/quadro/quadrovivo5.jpeg" alt="Fpto do Quadro Vivo" width="92%">
                </div>
                <div class="col s6">
                    <div class="row">
                        <div class="col s12">
                            <img src="img/quadro/quadrovivotop.jpeg" alt="Fpto do Quadro Vivo" width="85%">
                        </div>
                        <div class="col s12">
                            <img src="img/quadro/quadrovivodelado.jpeg" alt="Fpto do Quadro Vivo" width="85%">
                        </div>
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