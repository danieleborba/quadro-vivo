<<<<<<< HEAD
<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
<?php
	include('conf/conf.inc.php');
	include('connect/connect.php');

	function gerarImagem($tamanho, $class, $estilo) {
		$sql0 = "SELECT imagem FROM " .$GLOBALS['tb_usuario']. " where codigo = " .$_SESSION['codigo'];
		$img = mysqli_query($GLOBALS['conexao'], $sql0);

		while ($row_img = mysqli_fetch_array($img)) {
			if ($row_img[0] == 'null') {
				echo '<img width="'.$tamanho.'" class="'.$class.'" src="img/usuarios/user.png" '.$estilo.'>';
			} else {
				echo '<img width="'.$tamanho.'" class="'.$class.'" src="'.$row_img[0].'" '.$estilo.'>';
			}
		}
	}

	function gerarImagem2($tamanho, $class, $estilo) {
		$sql0 = "SELECT imagem FROM " .$GLOBALS['tb_usuario']. " where codigo = " .$_SESSION['codigo'];
		$img = mysqli_query($GLOBALS['conexao'], $sql0);

		while ($row_img = mysqli_fetch_array($img)) {
			if ($row_img[0] == 'null') {
				echo '<img style="width: '.$tamanho.'px" class="'.$class.'" src="img/usuarios/user.png" '.$estilo.'>';
			} else {
				echo '<img width="'.$tamanho.'" class="'.$class.'" src="'.$row_img[0].'" '.$estilo.'>';
			}
		}
	}

	function gerarNavIndex() {
		echo '<nav class="white" role="navigation">
    <div class="nav-wrapper">
      <a id="logo-container" href="index.php" class="brand-logo red-text" style="margin-left: 1em"><img src="img/logo/logo.png" style="height: 2em; width: 7em;"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="contato.php">Contato</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="cadastro.php">Cadastro</a></li>
        <li><a href="compre.php" class="waves-effect waves-light btn red">ADQUIRA</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="sobre.php"><i class="material-icons green-text">info_outline</i>Sobre</a></li>
        <li><a href="contato.php"><i class="material-icons green-text">email</i>Contato</a></li>
        <li><a href="login.php"><i class="material-icons green-text">account_circle</i>Login</a></li>
        <li><a href="cadastro.php"><i class="material-icons green-text">assignment_ind</i>Cadastro</a></li>
        <li><a href="compre.php" class="waves-effect waves-light btn red">ADQUIRA</a></li>
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
					<?php gerarImagem2('30', 'circle', 'style="margin-right: 1em; margin-top: 10px; margin-left: 3em; width: 1rem"')?>
				</li>
				<li>Olá,
					<?php echo $_SESSION['nome'] ?>!</li>
			</ul>
			<a id="logo-container" href="home.php" class="brand-logo red-text center"><img src="img/logo/logo.png" style="height: 2em; width: 7em;"></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="plantas.php">Plantas</a></li>
				<li><a href="perfil.php">Perfil</a></li>
				<li><a href="logout.php">Sair</a></li>
			</ul>

			<ul id="nav-mobile" class="sidenav">
				<li style="padding-left: 2.2rem; margin-top: .5rem"><?php gerarImagem('45rem', 'circle left', 'style="margin-right: 1em; margin-top: 10px"') ?><a href="#" class="red-text" style="margin-left: 1.7rem; padding-top: .7rem; margin-bottom: 1.5rem; font-size: 1.5rem; font-family: 'lobster">Olá, <?php echo $_SESSION['nome'] ?>!</a></li>
				<hr style="border-bottom: .5px solid red; border-top: none;">
				<li><a href="plantas.php"><i class="material-icons green-text">nature</i>Plantas</a></li>
				<li><a href="perfil.php"><i class="material-icons green-text">account_circle</i>Perfil</a></li>
				<footer style="bottom: 0px"><li><a href="logout.php"><i class="material-icons green-text">power_settings_new</i>Sair</a></li></footer>
				
			</ul>
			<a href="#" data-target="nav-mobile" class="sidenav-trigger green-text"><i class="material-icons">menu</i></a>
		</div>
	</nav>
	<?php 
	}

	function alterarImagem() {
		echo '<form method="post" action="recebe_upload.php" enctype="multipart/form-data">
	<div class="row">
		<div class="col s6 push-s2">
			<div class="file-field input-field">
				<button class="btn waves-effect waves-light red white-text" style="width: 200px">
					<span>SELECIONAR IMAGEM</span>
					<input type="file" name="arquivo">
				</button>
			<br>
			<div class="file-path-wrapper">
				<input class="file-path validate" type="text">
			</div>
		</div>
	</div>
		<div class="col s6">
			<input type="submit" value="Enviar" class="white-text btn waves-effect red waves-light">
		</div>
	</div>
</form>';
	}


	function gerarFooter() {
		echo '<footer class="page-footer red">
			<div class="container">
				<div class="row">
					<div class="col s12 l3">
						<img class="circle" src="img/equipe/equipe5.jpeg" width="75%">
					</div>
					<div class="col s12 l6">
						<h5 class="white-text">Quem somos?</h5>
						<p class="grey-text text-lighten-4">Estudantes do Técnico em Informática buscando reaproximar as pessoas da natureza por meio da tecnologia.</p>
					</div>
					<div class="col s12 l3">
						<h5 class="white-text">Links</h5>
						<p class="grey-text text-lighten-4">
							<a href="">teste</a><br>
							<a href="">teste</a><br>
							<a href="">teste</a>
						</p>
					</div>
				</div>
			</div>
		</footer>';
	}

?>
=======
<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
<?php
	include('conf/conf.inc.php');
	include('connect/connect.php');

	function gerarImagem($tamanho, $class, $estilo) {
		$sql0 = "SELECT imagem FROM " .$GLOBALS['tb_usuario']. " where codigo = " .$_SESSION['codigo'];
		$img = mysqli_query($GLOBALS['conexao'], $sql0);

		while ($row_img = mysqli_fetch_array($img)) {
			if ($row_img[0] == 'null') {
				echo '<img width="'.$tamanho.'" class="'.$class.'" src="img/usuarios/user.png" '.$estilo.'>';
			} else {
				echo '<img width="'.$tamanho.'" class="'.$class.'" src="'.$row_img[0].'" '.$estilo.'>';
			}
		}
	}

	function gerarImagem2($tamanho, $class, $estilo) {
		$sql0 = "SELECT imagem FROM " .$GLOBALS['tb_usuario']. " where codigo = " .$_SESSION['codigo'];
		$img = mysqli_query($GLOBALS['conexao'], $sql0);

		while ($row_img = mysqli_fetch_array($img)) {
			if ($row_img[0] == 'null') {
				echo '<img style="width: '.$tamanho.'px" class="'.$class.'" src="img/usuarios/user.png" '.$estilo.'>';
			} else {
				echo '<img width="'.$tamanho.'" class="'.$class.'" src="'.$row_img[0].'" '.$estilo.'>';
			}
		}
	}

	function gerarNavIndex() {
		echo '<nav class="white" role="navigation">
    <div class="nav-wrapper">
      <a id="logo-container" href="index.php" class="brand-logo red-text" style="margin-left: 1em"><img src="img/logo.png" style="height: 2em; width: 7em;"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="contato.php">Contato</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="cadastro.php">Cadastro</a></li>
        <li><a href="compre.php" class="waves-effect waves-light btn red">ADQUIRA</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="sobre.php"><i class="material-icons green-text">info_outline</i>Sobre</a></li>
        <li><a href="contato.php"><i class="material-icons green-text">email</i>Contato</a></li>
        <li><a href="login.php"><i class="material-icons green-text">account_circle</i>Login</a></li>
        <li><a href="cadastro.php"><i class="material-icons green-text">assignment_ind</i>Cadastro</a></li>
        <li><a href="compre.php" class="waves-effect waves-light btn red">ADQUIRA</a></li>
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
					<?php gerarImagem2('30', 'circle', 'style="margin-right: 1em; margin-top: 10px; margin-left: 3em; width: 1rem"')?>
				</li>
				<li>Olá,
					<?php echo $_SESSION['nome'] ?>!</li>
			</ul>
			<a id="logo-container" href="home.php" class="brand-logo red-text center"><img src="img/logo.png" style="height: 2em; width: 7em;"></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="plantas.php">Plantas</a></li>
				<li><a href="perfil.php">Perfil</a></li>
				<li><a href="logout.php">Sair</a></li>
			</ul>

			<ul id="nav-mobile" class="sidenav">
				<li style="padding-left: 2.2rem; margin-top: .5rem"><?php gerarImagem('45rem', 'circle left', 'style="margin-right: 1em; margin-top: 10px"') ?><a href="#" class="red-text" style="margin-left: 1.7rem; padding-top: .7rem; margin-bottom: 1.5rem; font-size: 1.5rem; font-family: 'lobster">Olá, <?php echo $_SESSION['nome'] ?>!</a></li>
				<hr style="border-bottom: .5px solid red; border-top: none;">
				<li><a href="plantas.php"><i class="material-icons green-text">nature</i>Plantas</a></li>
				<li><a href="perfil.php"><i class="material-icons green-text">account_circle</i>Perfil</a></li>
				<footer style="bottom: 0px"><li><a href="logout.php"><i class="material-icons green-text">power_settings_new</i>Sair</a></li></footer>
				
			</ul>
			<a href="#" data-target="nav-mobile" class="sidenav-trigger green-text"><i class="material-icons">menu</i></a>
		</div>
	</nav>
	<?php 
	}

	function alterarImagem() {
		echo '<form method="post" action="recebe_upload.php" enctype="multipart/form-data">
	<div class="row">
		<div class="col s6 push-s2">
			<div class="file-field input-field">
				<button class="btn waves-effect waves-light red white-text" style="width: 200px">
					<span>SELECIONAR IMAGEM</span>
					<input type="file" name="arquivo">
				</button>
			<br>
			<div class="file-path-wrapper">
				<input class="file-path validate" type="text">
			</div>
		</div>
	</div>
		<div class="col s6">
			<input type="submit" value="Enviar" class="white-text btn waves-effect red waves-light">
		</div>
	</div>
</form>';
	}


	function gerarFooter() {
		echo '<footer class="page-footer red">
			<div class="container">
				<div class="row">
					<div class="col s12 l3">
						<img class="circle" src="img/equipe.png">
					</div>
					<div class="col s12 l6">
						<h5 class="white-text">Quem somos?</h5>
						<p class="grey-text text-lighten-4">Estudantes do Técnico em Informática buscando reaproximar as pessoas da natureza por meio da tecnologia.</p>
					</div>
					<div class="col s12 l3">
						<h5 class="white-text">Links</h5>
						<p class="grey-text text-lighten-4">
							<a href="">teste</a>
							<a href="">teste</a>
							<a href="">teste</a>
						</p>
					</div>
				</div>
			</div>
		</footer>';
	}

?>
>>>>>>> parent of 50e7b66... salvando essa versão dessa bosta do krlho
