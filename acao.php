<?php	
	include('funcoes.php');
	include('autoload.php');
	$acao = isset($_POST["acao"]) ? $_POST["acao"] : $_GET['acao'];

	// Direciona pra função certa
	switch ($acao) {
		case 'cadastrar':
			cadastrar();
			break;
		case 'login':
			login();
			break;
		case 'logout':
			logout();
			break;
		case 'loginAdm':
			loginAdm();
			break;
		case 'logoutAdm':
			logoutAdm();
			break;
		case 'escolherPlantas':
			escolherPlantas();
			break;
		case 'adicionarPlanta':
			adicionarPlanta();
			break;
		default:
			header('location:login.php');
			break;
	}

	// ADM
	function loginAdm() {
		$adm = new Adm('NULL', $_POST["usuario"], $_POST["senha"], 'login');
	}
	function logoutAdm() {
		$adm = new Adm('', '', '', 'logout');
	}

	// USUÁRIO
	function cadastrar() {
		$usuario = new Usuario('');
		$usuario->cadastrar_usuario($_POST['usuario'], $_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['codigoCompra']);
	}
	function login() {
		$usuario = new Usuario('');
		$usuario->login($_POST["usuario"], $_POST["senha"]);
	}
	function logout() {
		$usuario = new Usuario('');
		$usuario->logout();
	}

	// PLANTAS
	function adicionarPlanta() {
		$quadro = new QuadroVivo;
		$quadro->adicionarPlanta('NULL', $_POST["especie"], $_POST["nome"], $_POST["descricao"], $_POST["tipo"]);
	}

	function escolherPlantas() {
		$usuario = new Usuario(1);
		$usuario->escolherPlantas([$_POST["p1"], $_POST["p2"], $_POST["p3"], $_POST["p4"], $_POST["p5"], $_POST["p6"]]);
	}

?>