<?php	
	// include('valida.php');
	include('funcoes.php');
	include('autoload.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> 
	<title>Quadro Vivo</title>
	<?php gerarCSS() ?>
	<style type="text/css">
		body {
			display: flex;
			min-height: 100vh;
            flex-direction: column;
            text-align: center;
		}

		main {
			flex: 1 0 auto;
		}

		h4 {
			letter-spacing: 0.05rem;x
		}

		@media only screen and (max-width: 600px) {
		  .frame {
			max-width: 100%;
		  
		  }
        }
        
        h3 {
            font-family: 'Lobster';
        }

        h5 {
            font-family: 'Montserrat';
        }

        option {
            font-family: 'Montserrat';
        }

        li h4 {
            color: green;
            font-family: 'Lobster';
        }

	</style>
</head>
<body>

	<main>
		<div class="row">
			<div class="col s12">
                <h3 class="titulo">Bem vindo!</h3>
                <h5>Escolha as plantas que possui em seu Quadro Vivo:</h5>
            </div>
        </div>
        <div class="row">
            <div class="col s12 l6">
                <img src="img/qv.svg" alt="">
            </div>
            <div class="col s1 l1">
                <br>
                <ul>
                    <li><h4>1</h4></li>
                    <li><h4>2</h4></li>
                    <li><h4>3</h4></li>
                    <li><h4>4</h4></li>
                    <li><h4>5</h4></li>
                    <li><h4>6</h4></li>
                </ul>
            </div>
            <form action="acao.php" method="post">
            <div class="col s11 l4">
                <br>
                <ul>
                    <li class="nplantas">
                        <div class="input-field">
                            <?php
                                geraSelectPlantas('Escolha uma hortaliça:', 'planta_tipo', 0, 'codigo_planta', 'nome', 'p1', 3);
                            ?>
                        </div>
                    </li>
                    <li class="nplantas">
                        <div class="input-field">
                            <?php
                                geraSelectPlantas('Escolha uma hortaliça:', 'planta_tipo', 0, 'codigo_planta', 'nome', 'p2', 3);
                            ?>
                        </div>
                    </li>
                    <li class="nplantas">
                        <div class="input-field">
                            <?php
                                geraSelectPlantas('Escolha uma hortaliça:', 'planta_tipo', 0, 'codigo_planta', 'nome', 'p3', '1 or tipo = 2');
                            ?>
                        </div>
                    </li>
                    <li class="nplantas">
                        <div class="input-field">
                            <?php
                                geraSelectPlantas('Escolha uma hortaliça:', 'planta_tipo', 0, 'codigo_planta', 'nome', 'p4', '1 or tipo = 2');
                            ?>
                        </div>
                    </li>
                    <li class="nplantas">
                        <div class="input-field">
                            <?php
                                geraSelectPlantas('Escolha uma hortaliça:', 'planta_tipo', 0, 'codigo_planta', 'nome', 'p5', '4 or tipo = 5');
                            ?>
                        </div>
                    </li>
                    <li class="nplantas">
                        <div class="input-field">
                            <?php
                                geraSelectPlantas('Escolha uma hortaliça:', 'planta_tipo', 0, 'codigo_planta', 'nome', 'p6', '4 or tipo = 5');
                            ?>
                        </div>
                    </li>
                </ul>
                <br>
                <input type="hidden" name="acao" value="escolherPlantas">
                <button class="waves-effect waves-light btn red white-text" type="submit" name="continuar">continuar<i class="material-icons right">send</i></button>
            </div>
            </form>
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