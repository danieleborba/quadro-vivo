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
            <div class="col s11 l4">
                <br>
                <ul>
                    <li class="nplantas">
                        <div class="input-field">
                            <select class="icons">
                                <option value="" disabled selected>Escolha uma hortaliça:</option>
                                <option value="" data-icon="img/plantas/alface.svg" class="left">Alface</option>
                                <option value="" data-icon="img/plantas/tomilho.svg" class="left">Tomilho</option>
                                <option value="" data-icon="img/plantas/alfaceroxo.svg" class="left">Alface roxa</option>
                                <option value="" data-icon="img/plantas/hortela.svg" class="left">Hortelã</option>
                                <option value="" data-icon="img/plantas/rucula.svg" class="left">Rúcula</option>
                                <option value="" data-icon="img/plantas/trevo.svg" class="left">Trevo de 4 folhas</option>
                            </select>
                        </div>
                    </li>
                    <li class="nplantas">
                    <div class="input-field">
                            <select class="icons">
                            <option value="" disabled selected>Escolha outra hortaliça:</option>
                                <option value="" data-icon="img/plantas/alface.svg" class="left">Alface</option>
                                <option value="" data-icon="img/plantas/tomilho.svg" class="left">Tomilho</option>
                                <option value="" data-icon="img/plantas/alfaceroxo.svg" class="left">Alface roxa</option>
                                <option value="" data-icon="img/plantas/hortela.svg" class="left">Hortelã</option>
                                <option value="" data-icon="img/plantas/rucula.svg" class="left">Rúcula</option>
                                <option value="" data-icon="img/plantas/trevo.svg" class="left">Trevo de 4 folhas</option>
                            </select>
                        </div>
                    </li>
                    <li class="nplantas">
                    <div class="input-field">
                            <select class="icons">
                                <option value="" disabled selected>Escolha um tempero ou chá:</option>
                                <option value="" data-icon="img/plantas/Alface Mimosa.jpeg" class="left">example 1</option>
                                <option value="" data-icon="img/plantas/Alface Mimosa.jpeg" class="left">example 2</option>
                                <option value="" data-icon="img/plantas/Alface Mimosa.jpeg" class="left">example 3</option>
                            </select>
                        </div>
                    </li>
                    <li class="nplantas">
                    <div class="input-field">
                            <select class="icons">
                                <option value="" disabled selected>Escolha outro tempero ou chá:</option>
                                <option value="" data-icon="img/plantas/Alface Mimosa.jpeg" class="left">example 1</option>
                                <option value="" data-icon="img/plantas/Alface Mimosa.jpeg" class="left">example 2</option>
                                <option value="" data-icon="img/plantas/Alface Mimosa.jpeg" class="left">example 3</option>
                            </select>
                        </div>
                    </li>
                    <li class="nplantas">
                    <div class="input-field">
                            <select class="icons">
                                <option value="" disabled selected>Escolha uma planta decorativa:</option>
                                <option value="" data-icon="img/plantas/Alface Mimosa.jpeg" class="left">example 1</option>
                                <option value="" data-icon="img/plantas/Alface Mimosa.jpeg" class="left">example 2</option>
                                <option value="" data-icon="img/plantas/Alface Mimosa.jpeg" class="left">example 3</option>
                            </select>
                        </div>
                    </li>
                    <li class="nplantas">
                    <div class="input-field">
                            <select class="icons">
                                <option value="" disabled selected>Escolha outra planta decorativa:</option>
                                <option value="" data-icon="img/plantas/Alface Mimosa.jpeg" class="left">example 1</option>
                                <option value="" data-icon="img/plantas/Alface Mimosa.jpeg" class="left">example 2</option>
                                <option value="" data-icon="img/plantas/Alface Mimosa.jpeg" class="left">example 3</option>
                            </select>
                        </div>
                    </li>
                </ul>
                <br>
                <button class="waves-effect waves-light btn red white-text" type="submit" name="continuar">continuar<i class="material-icons right">send</i></button>
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