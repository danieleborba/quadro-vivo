<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
<?php

	function gerarImagem($tamanho, $estilo) {
		if ($_SESSION['imagem'] == 'null') {
			return '<img class="circle" src="img/usuarios/fazendeiro.png" style="width: '.$tamanho. '; '.$estilo.'>';
		} else {
			return '<img class="circle" src="'.$_SESSION['imagem'].'" style="max-width: '.$tamanho. '; min-width: '.$tamanho. '; '.$estilo.'>';
		}
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
		echo '<footer class="page-footer red" style="padding: 2vh 5vw 0 8vw; margin-top: 2.5vh">
				<div class="row">
					<div class="col s12 l3">
						<h5 class="white-text">Contato</h5>
						<ul class="grey-text text-lighten-4">
							<li><a href="mailto:quadrovivo.ifc@gmail.com">Email</li>
							<li><a href="https://www.instagram.com/quadrovivoautomatizado/">Instagram</a></li>
						</ul>
					</div>
					<div class="col s12 l6">
						<h5 class="white-text">Quem somos?</h5>
						<p class="grey-text text-lighten-4">Estudantes do Técnico em Informática buscando reaproximar as pessoas da natureza por meio da tecnologia.</p>
					</div>
					<div class="col s12 l3 hide-on-small-only center">
						<img class="circle" src="img/equipe/equipe5.jpeg" width="175rem">
					</div>
				</div>
		</footer>';
	}

	function gerarScripts() {
		echo '<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
			<script src="js/materialize.js"></script>
			<script src="js/init.js"></script>
			<script src="js/jquery.mask.js"></script>
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
			  <link rel="shortcut icon" type="imagem/x-icon" href="img/mao.png">
			  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
			  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
			  <link href="css/material-icons.css" rel="stylesheet">
			  <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/carlito" type="text/css"/>';
	}

	function selectFuso() {
		echo "<select name='fuso'>
								<option disabled=' selected='true'>Escolha seu fuso horário</option>
								<option timeZoneId='1' gmtAdjustment='GMT-12:00' useDaylightTime='0' value='-12'>(GMT-12:00) International Date Line West</option>
								<option timeZoneId='2' gmtAdjustment='GMT-11:00' useDaylightTime='0' value='-11'>(GMT-11:00) Midway Island, Samoa</option>
								<option timeZoneId='3' gmtAdjustment='GMT-10:00' useDaylightTime='0' value='-10'>(GMT-10:00) Hawaii</option>
								<option timeZoneId='4' gmtAdjustment='GMT-09:00' useDaylightTime='1' value='-9'>(GMT-09:00) Alaska</option>
								<option timeZoneId='5' gmtAdjustment='GMT-08:00' useDaylightTime='1' value='-8'>(GMT-08:00) Pacific Time (US & Canada)</option>
								<option timeZoneId='6' gmtAdjustment='GMT-08:00' useDaylightTime='1' value='-8'>(GMT-08:00) Tijuana, Baja California</option>
								<option timeZoneId='7' gmtAdjustment='GMT-07:00' useDaylightTime='0' value='-7'>(GMT-07:00) Arizona</option>
								<option timeZoneId='8' gmtAdjustment='GMT-07:00' useDaylightTime='1' value='-7'>(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
								<option timeZoneId='9' gmtAdjustment='GMT-07:00' useDaylightTime='1' value='-7'>(GMT-07:00) Mountain Time (US & Canada)</option>
								<option timeZoneId='10' gmtAdjustment='GMT-06:00' useDaylightTime='0' value='-6'>(GMT-06:00) Central America</option>
								<option timeZoneId='11' gmtAdjustment='GMT-06:00' useDaylightTime='1' value='-6'>(GMT-06:00) Central Time (US & Canada)</option>
								<option timeZoneId='12' gmtAdjustment='GMT-06:00' useDaylightTime='1' value='-6'>(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
								<option timeZoneId='13' gmtAdjustment='GMT-06:00' useDaylightTime='0' value='-6'>(GMT-06:00) Saskatchewan</option>
								<option timeZoneId='14' gmtAdjustment='GMT-05:00' useDaylightTime='0' value='-5'>(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
								<option timeZoneId='15' gmtAdjustment='GMT-05:00' useDaylightTime='1' value='-5'>(GMT-05:00) Eastern Time (US & Canada)</option>
								<option timeZoneId='16' gmtAdjustment='GMT-05:00' useDaylightTime='1' value='-5'>(GMT-05:00) Indiana (East)</option>
								<option timeZoneId='17' gmtAdjustment='GMT-04:00' useDaylightTime='1' value='-4'>(GMT-04:00) Atlantic Time (Canada)</option>
								<option timeZoneId='18' gmtAdjustment='GMT-04:00' useDaylightTime='0' value='-4'>(GMT-04:00) Caracas, La Paz</option>
								<option timeZoneId='19' gmtAdjustment='GMT-04:00' useDaylightTime='0' value='-4'>(GMT-04:00) Manaus</option>
								<option timeZoneId='20' gmtAdjustment='GMT-04:00' useDaylightTime='1' value='-4'>(GMT-04:00) Santiago</option>
								<option timeZoneId='21' gmtAdjustment='GMT-03:30' useDaylightTime='1' value='-3.5'>(GMT-03:30) Newfoundland</option>
								<option timeZoneId='22' gmtAdjustment='GMT-03:00' useDaylightTime='1' value='-3'>(GMT-03:00) Brasilia</option>
								<option timeZoneId='23' gmtAdjustment='GMT-03:00' useDaylightTime='0' value='-3'>(GMT-03:00) Buenos Aires, Georgetown</option>
								<option timeZoneId='24' gmtAdjustment='GMT-03:00' useDaylightTime='1' value='-3'>(GMT-03:00) Greenland</option>
								<option timeZoneId='25' gmtAdjustment='GMT-03:00' useDaylightTime='1' value='-3'>(GMT-03:00) Montevideo</option>
								<option timeZoneId='26' gmtAdjustment='GMT-02:00' useDaylightTime='1' value='-2'>(GMT-02:00) Mid-Atlantic</option>
								<option timeZoneId='27' gmtAdjustment='GMT-01:00' useDaylightTime='0' value='-1'>(GMT-01:00) Cape Verde Is.</option>
								<option timeZoneId='28' gmtAdjustment='GMT-01:00' useDaylightTime='1' value='-1'>(GMT-01:00) Azores</option>
								<option timeZoneId='29' gmtAdjustment='GMT+00:00' useDaylightTime='0' value='0'>(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
								<option timeZoneId='30' gmtAdjustment='GMT+00:00' useDaylightTime='1' value='0'>(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
								<option timeZoneId='31' gmtAdjustment='GMT+01:00' useDaylightTime='1' value='1'>(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
								<option timeZoneId='32' gmtAdjustment='GMT+01:00' useDaylightTime='1' value='1'>(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
								<option timeZoneId='33' gmtAdjustment='GMT+01:00' useDaylightTime='1' value='1'>(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
								<option timeZoneId='34' gmtAdjustment='GMT+01:00' useDaylightTime='1' value='1'>(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
								<option timeZoneId='35' gmtAdjustment='GMT+01:00' useDaylightTime='1' value='1'>(GMT+01:00) West Central Africa</option>
								<option timeZoneId='36' gmtAdjustment='GMT+02:00' useDaylightTime='1' value='2'>(GMT+02:00) Amman</option>
								<option timeZoneId='37' gmtAdjustment='GMT+02:00' useDaylightTime='1' value='2'>(GMT+02:00) Athens, Bucharest, Istanbul</option>
								<option timeZoneId='38' gmtAdjustment='GMT+02:00' useDaylightTime='1' value='2'>(GMT+02:00) Beirut</option>
								<option timeZoneId='39' gmtAdjustment='GMT+02:00' useDaylightTime='1' value='2'>(GMT+02:00) Cairo</option>
								<option timeZoneId='40' gmtAdjustment='GMT+02:00' useDaylightTime='0' value='2'>(GMT+02:00) Harare, Pretoria</option>
								<option timeZoneId='41' gmtAdjustment='GMT+02:00' useDaylightTime='1' value='2'>(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
								<option timeZoneId='42' gmtAdjustment='GMT+02:00' useDaylightTime='1' value='2'>(GMT+02:00) Jerusalem</option>
								<option timeZoneId='43' gmtAdjustment='GMT+02:00' useDaylightTime='1' value='2'>(GMT+02:00) Minsk</option>
								<option timeZoneId='44' gmtAdjustment='GMT+02:00' useDaylightTime='1' value='2'>(GMT+02:00) Windhoek</option>
								<option timeZoneId='45' gmtAdjustment='GMT+03:00' useDaylightTime='0' value='3'>(GMT+03:00) Kuwait, Riyadh, Baghdad</option>
								<option timeZoneId='46' gmtAdjustment='GMT+03:00' useDaylightTime='1' value='3'>(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
								<option timeZoneId='47' gmtAdjustment='GMT+03:00' useDaylightTime='0' value='3'>(GMT+03:00) Nairobi</option>
								<option timeZoneId='48' gmtAdjustment='GMT+03:00' useDaylightTime='0' value='3'>(GMT+03:00) Tbilisi</option>
								<option timeZoneId='49' gmtAdjustment='GMT+03:30' useDaylightTime='1' value='3.5'>(GMT+03:30) Tehran</option>
								<option timeZoneId='50' gmtAdjustment='GMT+04:00' useDaylightTime='0' value='4'>(GMT+04:00) Abu Dhabi, Muscat</option>
								<option timeZoneId='51' gmtAdjustment='GMT+04:00' useDaylightTime='1' value='4'>(GMT+04:00) Baku</option>
								<option timeZoneId='52' gmtAdjustment='GMT+04:00' useDaylightTime='1' value='4'>(GMT+04:00) Yerevan</option>
								<option timeZoneId='53' gmtAdjustment='GMT+04:30' useDaylightTime='0' value='4.5'>(GMT+04:30) Kabul</option>
								<option timeZoneId='54' gmtAdjustment='GMT+05:00' useDaylightTime='1' value='5'>(GMT+05:00) Yekaterinburg</option>
								<option timeZoneId='55' gmtAdjustment='GMT+05:00' useDaylightTime='0' value='5'>(GMT+05:00) Islamabad, Karachi, Tashkent</option>
								<option timeZoneId='56' gmtAdjustment='GMT+05:30' useDaylightTime='0' value='5.5'>(GMT+05:30) Sri Jayawardenapura</option>
								<option timeZoneId='57' gmtAdjustment='GMT+05:30' useDaylightTime='0' value='5.5'>(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
								<option timeZoneId='58' gmtAdjustment='GMT+05:45' useDaylightTime='0' value='5.75'>(GMT+05:45) Kathmandu</option>
								<option timeZoneId='59' gmtAdjustment='GMT+06:00' useDaylightTime='1' value='6'>(GMT+06:00) Almaty, Novosibirsk</option>
								<option timeZoneId='60' gmtAdjustment='GMT+06:00' useDaylightTime='0' value='6'>(GMT+06:00) Astana, Dhaka</option>
								<option timeZoneId='61' gmtAdjustment='GMT+06:30' useDaylightTime='0' value='6.5'>(GMT+06:30) Yangon (Rangoon)</option>
								<option timeZoneId='62' gmtAdjustment='GMT+07:00' useDaylightTime='0' value='7'>(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
								<option timeZoneId='63' gmtAdjustment='GMT+07:00' useDaylightTime='1' value='7'>(GMT+07:00) Krasnoyarsk</option>
								<option timeZoneId='64' gmtAdjustment='GMT+08:00' useDaylightTime='0' value='8'>(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
								<option timeZoneId='65' gmtAdjustment='GMT+08:00' useDaylightTime='0' value='8'>(GMT+08:00) Kuala Lumpur, Singapore</option>
								<option timeZoneId='66' gmtAdjustment='GMT+08:00' useDaylightTime='0' value='8'>(GMT+08:00) Irkutsk, Ulaan Bataar</option>
								<option timeZoneId='67' gmtAdjustment='GMT+08:00' useDaylightTime='0' value='8'>(GMT+08:00) Perth</option>
								<option timeZoneId='68' gmtAdjustment='GMT+08:00' useDaylightTime='0' value='8'>(GMT+08:00) Taipei</option>
								<option timeZoneId='69' gmtAdjustment='GMT+09:00' useDaylightTime='0' value='9'>(GMT+09:00) Osaka, Sapporo, Tokyo</option>
								<option timeZoneId='70' gmtAdjustment='GMT+09:00' useDaylightTime='0' value='9'>(GMT+09:00) Seoul</option>
								<option timeZoneId='71' gmtAdjustment='GMT+09:00' useDaylightTime='1' value='9'>(GMT+09:00) Yakutsk</option>
								<option timeZoneId='72' gmtAdjustment='GMT+09:30' useDaylightTime='0' value='9.5'>(GMT+09:30) Adelaide</option>
								<option timeZoneId='73' gmtAdjustment='GMT+09:30' useDaylightTime='0' value='9.5'>(GMT+09:30) Darwin</option>
								<option timeZoneId='74' gmtAdjustment='GMT+10:00' useDaylightTime='0' value='10'>(GMT+10:00) Brisbane</option>
								<option timeZoneId='75' gmtAdjustment='GMT+10:00' useDaylightTime='1' value='10'>(GMT+10:00) Canberra, Melbourne, Sydney</option>
								<option timeZoneId='76' gmtAdjustment='GMT+10:00' useDaylightTime='1' value='10'>(GMT+10:00) Hobart</option>
								<option timeZoneId='77' gmtAdjustment='GMT+10:00' useDaylightTime='0' value='10'>(GMT+10:00) Guam, Port Moresby</option>
								<option timeZoneId='78' gmtAdjustment='GMT+10:00' useDaylightTime='1' value='10'>(GMT+10:00) Vladivostok</option>
								<option timeZoneId='79' gmtAdjustment='GMT+11:00' useDaylightTime='1' value='11'>(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
								<option timeZoneId='80' gmtAdjustment='GMT+12:00' useDaylightTime='1' value='12'>(GMT+12:00) Auckland, Wellington</option>
								<option timeZoneId='81' gmtAdjustment='GMT+12:00' useDaylightTime='0' value='12'>(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
								<option timeZoneId='82' gmtAdjustment='GMT+13:00' useDaylightTime='0' value='13'>(GMT+13:00) Nuku'alofa</option>
							</select>";
	}

?>
