<?php	
	include('funcoes.php');
	include('autoload.php');

	$acao = isset($_POST["acao"]) ? $_POST["acao"] : $_GET['acao'];

	switch ($acao) {
		case 'loginAdm':
			loginAdm();
			break;
		case 'logoutAdm':
			session_destroy();
			header('location:plantas2.php');
			break;
		case 'adicionarPlanta':
			adicionarPlanta();
			break;
		default:
			break;
	}

	function loginAdm() {
		$adm = new Adm('NULL', $_POST["usuario"], $_POST["senha"], 'logar');
	}

	function adicionarPlanta() {
		$crud = new Crud;
		$crud->adicionarPlanta('NULL', $_POST["especie"], $_POST["nome"], $_POST["descricao"]);
	}

	// if ($acao == 'cadastrar') {
	// 	$senha = isset($_POST['senha']) ? $_POST['senha'] : '';
	// 	$confirmacao = isset($_POST['confirmacao']) ? $_POST['confirmacao'] : '';
	// 	if ($senha == $confirmacao) {
	// 		$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
	// 		$sobrenome = isset($_POST['sobrenome']) ? $_POST['sobrenome'] : '';
	// 		$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
	// 		$email = isset($_POST['email']) ? $_POST['email'] : '';
	// 		$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
	// 		$data_nascimento = isset($_POST['data_nascimento']) ? $_POST['data_nascimento'] : '';
	// 		$compra = isset($_POST['compra']) ? $_POST['compra'] : '';
	// 		$fuso = isset($_POST['fuso']) ? $_POST['fuso'] : '';
	// 		$wifi = isset($_POST['wifi']) ? $_POST['wifi'] : '';
	// 		$senha_wifi = isset($_POST['senha_wifi']) ? $_POST['senha_wifi'] : '';
	// 		$sql = "INSERT INTO " .$tabela. " values (null, '".$nome."', '".$sobrenome."', '".$usuario."', '".$email."', '".hash('sha512', $senha)."', '".$telefone."', '".$compra."', 'img/usuarios/user.png', '".(date('Y-m-d', strtotime(str_replace('/', '-', $data_nascimento))))."', 'null', '".$fuso."', '".$wifi."', '".$hash('sha512', $senha_wifi)."')";
	// 		$result = mysqli_query($conexao, $sql);
	// 		$linhas = mysqli_affected_rows($conexao);
	// 		if ($linhas == 1) {
	// 			header('location:'.$pagina); 
	// 		} else {
	// 			echo $sql;
	// 		}
	// 	} else {
	// 		echo 'Confirme a senha corretamente';
	// 	}
		
	// }

	// $acao = '';
	// if (isset($_GET['acao'])) {
	// 	$acao = $_GET['acao'];
	// }

	// if ($acao = 'logoff') {
	// 	session_start();
	// 	session_destroy();
	// 	header('location:login.php');
	// } 
	// if (isset($_POST['acao'])) {
	// 		$acao = $_POST['acao'];
	// 		if ($acao == 'login') {
	// 			$user = $_POST['user'];
	// 			$senha = $_POST['senha'];
	// 			logar($user, $senha);
	// 		}
	// }

	// function logar ($user, $senha) {
	// 	$sql = 'select * from ' .$GLOBALS['tb_usuario']. ' where usuario = "' .$user. '";';
	// 	$result = mysqli_query($GLOBALS['conexao'], $sql);
		
	// 	$senhaDB = '';
	// 	$usuario = '';
	// 	$nome = '';

	// 	while ($row = mysqli_fetch_array($result)) {
	// 		$codigo = $row['codigo'];
	// 		$nome = $row['nome'];
	// 		$email = $row['email'];
	// 		$data_nascimento = date('d/m/Y', strtotime(str_replace('/', '-', $row['data_nascimento'])));
	// 		$sobrenome = $row['sobrenome'];
	// 		$usuario = $row['usuario'];
	// 		$senhaDB = $row['senha'];
	// 	}

	// 	$senha = hash('sha512', $senha);

	// 	if ($senha == $senhaDB) {
	// 		session_start();
	// 		$_SESSION['nome'] = $nome;
	// 		$_SESSION['email'] = $email;
	// 		$_SESSION['data_nascimento'] = $data_nascimento;
	// 		$_SESSION['sobrenome'] = $sobrenome;
	// 		$_SESSION['usuario'] = $usuario;
	// 		$_SESSION['codigo'] = $codigo;
	// 		header('location:home.php');
	// 	} else {
	// 		header('location:login.php');
	// 	}
	// }
?>