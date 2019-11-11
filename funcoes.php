<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
<?php

	function gerarImagem($tamanho, $estilo) {
		if ($_SESSION['imagem'] == 'null') {
			return '<img class="circle" src="img/usuarios/fazendeiro.png" style="width: '.$tamanho. '; '.$estilo.'>';
		} else {
			return '<img class="circle" src="'.$_SESSION['imagem'].'" style="max-width: '.$tamanho. '; min-width: '.$tamanho. '; '.$estilo.'>';
		}
	}

	function geraSelectPlantas($default, $tabela, $selecao, $value, $descricao, $select, $tipo) {
		$sql = 'select * from ' .$tabela. ' where tipo = '.$tipo.' order by ' .$descricao;
		echo '<select class="icons" name="'.$select.'" id="'.$select.'">';
		echo '<option value="" disabled selected>'.$default.'</option>';
		$crud = new Crud;
		$row = $crud->select($sql);
		$cont = 0;
		while ($cont < count($row)) {
			$birobiro = "";
			if ($row[$cont][$value] == $selecao) {
				$birobiro = ' selected';
			}
			echo '<option value="'.$row[$cont][$value].'" data-icon="img/plantas/'.$row[$cont][$descricao].'.svg" ' .$birobiro. '>' .$row[$cont][$descricao]. '</option>';
			$cont++;
		}
		echo '</select>';
	}

	function geraSelect($default, $tabela, $selecao, $value, $descricao, $select) {
		$sql = 'select * from ' .$tabela. ' order by ' .$descricao;
		echo '<select class="icons" name="'.$select.'" id="'.$select.'">';
		echo '<option value="0" disabled>'.$default.'</option>';
		$crud = new Crud;
		$row = $crud->select($sql);
		$cont = 0;
		while ($cont < count($row)) {
			$birobiro = "";
			if ($row[$cont][$value] == $selecao) {
				$birobiro = ' selected';
			}
			echo '<option value="'.$row[$cont][$value].'" ' .$birobiro. '>' .$row[$cont][$descricao]. '</option>';
			$cont++;
		}
		echo '</select>';
	}

	function gerarNavIndex() {
		echo '<nav class="white" role="navigation">
    <div class="nav-wrapper">
      <a id="logo-container" href="index.php" class="brand-logo red-text" style="margin-left: 2.5vw"><img src="img/logo/logo.svg" style="height: 3.5rem; margin-top: 0.8vh"></a>
      <ul class="right hide-on-med-and-down">
	  <li><a href="sobre.php">Sobre</a></li>
        <li><a href="cadastro.php">Cadastro</a></li>
		<li><a href="login.php">Login</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
	  	<li><a href="sobre.php"><i class="material-icons green-text">info</i>Sobre</a></li>
        <li><a href="cadastro.php"><i class="material-icons green-text">assignment_ind</i>Cadastro</a></li>
		<li><a href="login.php"><i class="material-icons green-text">account_circle</i>Login</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons green-text">menu</i></a>
    </div>
  </nav>';
	}

	function gerarNavPlantas() {
		echo '<nav class="white" role="navigation">
    <div class="nav-wrapper">
      <a id="logo-container" href="index.php" class="brand-logo red-text" style="margin-left: 1em"><img src="img/logo/logo3.png" style="height: 2rem; width: 7em;"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#login" class="modal-trigger">Login</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#login"><i class="material-icons green-text">account_circle</i>Login</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons green-text">menu</i></a>
    </div>
  </nav>';
	}

	function gerarNavAdm() {
		echo '<nav class="white" role="navigation">
    <div class="nav-wrapper">
      <a id="logo-container" href="index.php" class="brand-logo red-text" style="margin-left: 1em"><img src="img/logo/logo3.png" style="height: 2em; width: 7em;"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="acao.php?acao=logoutAdm" class="modal-trigger">Sair</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="acao.php?acao=logoutAdm"><i class="material-icons green-text">power_settings_new</i>Sair</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons green-text">menu</i></a>
    </div>
  </nav>';
	}

	function gerarNavUsuario() { ?>
	<nav class="white" role="navigation">
		<div class="nav-wrapper">
			<ul class="left grey-text text-darken-3 hide-on-med-and-down">
				<li>
					<?php gerarImagem('3rem', 'margin-right: 1em; margin-top: 10px; margin-left: 3em; width: 1rem"')?>
				</li>
				<li>Olá, <?php echo $_SESSION['nome'] ?>!</li>
			</ul>
			<a id="logo-container" href="home.php" class="brand-logo red-text center"><img src="img/logo/logo3.png" style="height: 3rem; width: 16rem; margin-top: .6rem"></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="plantas.php">Plantas</a></li>
				<li><a href="perfil.php">Perfil</a></li>
				<li><a href="acao.php?acao=logout">Sair</a></li>
			</ul>

			<ul id="nav-mobile" class="sidenav">
				<li style="padding-left: 2.2rem; margin-top: .5rem">
					<?php gerarImagem('5rem', 'margin-right: 1em; margin-top: 10px') ?>
					<a href="#" class="red-text" style="margin-left: 1.7rem; padding-top: .7rem; margin-bottom: 1.5rem; font-size: 1.5rem; font-family: 'lobster">Olá, <?php echo $_SESSION['nome'] ?>!</a>
				</li>
				<li><a href="plantas.php"><i class="material-icons green-text">nature</i>Plantas</a></li>
				<li><a href="perfil.php"><i class="material-icons green-text">account_circle</i>Perfil</a></li>
				<footer style="bottom: 0px"><li><a href="acao.php?acao=logout"><i class="material-icons green-text">power_settings_new</i>Sair</a></li></footer>
				
			</ul>
			<a href="#" data-target="nav-mobile" class="sidenav-trigger green-text"><i class="material-icons">menu</i></a>
		</div>
	</nav>
	<?php 
	}

	function gerarFooter() {
		echo '<footer class="page-footer blue lighten-5" style="padding: 2vh 5vw 0 8vw; margin-top: 2.5vh">
				<div class="row">
					<div class="col s12 l3">
						<h5 class="red-text">Contato</h5>
						<ul class="text-darken-4 grey-text text-lighten-4">
							<li class="text-darken-4 grey-text><a href="mailto:quadrovivo.ifc@gmail.com">Email</li>
							<li class="text-darken-4 grey-text><a href="https://www.instagram.com/quadrovivoautomatizado/">Instagram</a></li>
						</ul>
					</div>
					<div class="col s12 l6">
						<h5 class="red-text">Quem somos?</h5>
						<p class="text-darken-4 grey-text text-lighten-4">Estudantes do Técnico em Informática buscando reaproximar as pessoas da natureza por meio da tecnologia.</p>
					</div>
					<div class="col s12 l3 hide-on-small-only center">
						<img class="circle" src="img/equipe/equipe5.jpeg" width="175rem" alt="Foto de Daniele e Daiane, autoras do projeto">
					</div>
				</div>
		</footer>';
	}

	function gerarScripts() {
		echo '<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
			<script src="js/jquery.mask.js"></script>
			<script src="js/materialize.min.js"></script>
			<script type="text/javascript">
				jQuery(function($){
					$("#telefone").mask("(47) 99999-9999");
				});
				$(document).ready(function() {
					$(".modal").modal();
					$("select").formSelect();
					$(".sidenav").sidenav();
					$("textarea#descricao").characterCounter();
					$(".datepicker").datepicker({
						format: "dd/mm/yyyy",
						yearRange: 100,
						maxDay: (new Date).getDate(),
						maxMonth: (new Date).getMonth(),
						maxYear: (new Date).getFullYear(),
						i18n: {
							months: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
							monthsShort: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
							weekdays: ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sabádo"],
							weekdaysShort: ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"],
							weekdaysAbbrev: ["D", "S", "T", "Q", "Q", "S", "S"],
							today: "Hoje",
							clear: "Limpar",
							close: "Pronto",
							labelMonthNext: "Próximo mês",
							labelMonthPrev: "Mês anterior",
							labelMonthSelect: "Selecione um mês",
							labelYearSelect: "Selecione um ano",
							selectMonths: true,
							cancel: "Cancelar",
							clear: "Limpar"
						}
					});
				});
			</script>';
	}

	function gerarLogin() {
		echo '<div id="login" class="modal center">
				<div class="modal-content">
				<h3 class="red-text">Login</h3>
					<form action="acao.php" method="post">
						<div class="row">
							<div class="input-field col s8 offset-s2">
								<i class="material-icons prefix">account_circle</i>
								<input id="usuario" name="usuario" type="text">
								<label for="usuario">User</label>
							</div>

						</div>
						<div class="row">
							<div class="input-field col s8 offset-s2">
								<i class="material-icons prefix">lock</i>
								<input id="senha" name="senha" type="password" class="validate">
								<label for="senha">Senha</label>
							</div>
						</div>
						<div class="row"></div>
						<button class="waves-effect waves-light btn red">
							<input type="submit" name="entrar" class="white-text" value="entrar"><i class="material-icons right">send</i>
						</button>
						<input type="hidden" name="acao" value="loginAdm">
					</form>
				</div>
			</div>';
	}

	function gerarCSS() {
		echo '<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
				<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap&subset=latin-ext" rel="stylesheet"> 
			  <link rel="shortcut icon" type="imagem/x-icon" href="img/mao.svg">
			  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
			  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
			  <link href="css/material-icons.css" rel="stylesheet">
			  <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/carlito" type="text/css"/>';
	}

?>
