<?php

	require('autoload.php');

	class Usuario extends CodigoNomeSenha {
		private $usuario,
				$email,
				$dataNascimento, 
				$fusoHorario, 
				$imagem, 
				$codigoCompra, 
				$wifi,
				$quadro;

		// USUÁRIO
		function setUsuario($usuario) {
			$this->usuario = $usuario;
		}

		function getUsuario() {
			return $this->usuario;
		}

		// QUADRO
		function setQuadro($quadro) {
			$this->quadro = $quadro;
		}

		function getQuadro() {
			return $this->quadro;
		}
	
		// EMAIL
		function setEmail($email) {
			$this->email = $email;
		}

		function getEmail() {
			return $this->email;
		}

		// FUSO HORÁRIO
		function setFusoHorario($fusoHorario) {
			$this->fusoHorario = $fusoHorario;
		}

		function getFusoHorario() {
			return $this->fusoHorario;
		}

		// IMAGEM
		function setImagem($imagem) {
			$this->imagem = $imagem;
		}

		function getImagem() {
			return $this->imagem;
		}

		// CÓDIGO DA COMPRA
		function setCodigoCompra($codigoCompra) {
			$this->codigoCompra = $codigoCompra;
		}

		function getCodigoCompra() {
			return $this->codigoCompra;
		}

		// WIFI
		function setWifi($wifi) {
			if ($wifi instanceof Wifi)
				$this->wifi[] = $wifi;
		}

		function getWifi() {
			return $this->wifi;
		}

		// TUDO
		function Usuario($codigo) {
			if(!is_null($codigo)) {
				$crud = new Crud;
				$dados = $crud->select('select * from usuario where codigo = ' .$codigo);
				if(!is_null($dados)) {
					$this->setCodigo($dados[0]['codigo']);
					$this->setNome($dados[0]['nome']);
					$this->setSenha($dados[0]['senha']);
					$this->setUsuario($dados[0]['usuario']);
					$this->setImagem($dados[0]['imagem']);
					$this->setCodigoCompra($dados[0]['codigoCompra']);
				}
			}
		}
		
		// INSERIR NO BD
		function cadastrar_usuario($usuario, $nome, $email, $senha, $codigoCompra) {

			// Setando os parâmetros como atributos do objeto
			// $this->setUsuario($usuario);
			// $this->setNome($nome);
			// $this->setEmail($email);
			// $this->setSenha($senha);
			// $this->setCodigoCompra($codigoCompra);
			// $this->setImagem('img/usuarios/fazendeiro.png');

			// $crud = new Crud;
			// $crud->setTabela('usuario');

			// // Inserindo no BD
			// if(
				// $crud->inserir([
				// echo $this->getUsuario();
				// echo $this->getNome();
				// echo $this->getEmail();
				// echo $this->getSenha();
				// echo $this->getCodigoCompra();
				// echo $this->getImagem();
			// 	'10',
			// 	0
			// ])) 
			// {
			// 	echo 'a';
			// 	// Atualizando o código do usuário no objeto
			// 	$codigoUsuario = $crud->select('select max(codigo) from usuario');
			// 	$this->setCodigo($codigoUsuario);

			// 	// erro aqui
			// 	$crud->setTabela('quadro');
			// 	$this->setQuadro($crud->select('select max(codigo) from quadro'));
			// 	if ($crud->select('insert into quadro_has_usuario values ('.$this->getQuadro().', '.$this->getCodigo().')')) {
			// 		// header('location:login.php');
				// }
				
			// } else {
			// 	echo 'Erro!';
			// }


		}

		function login($usuario, $senha) {
			$crud = new Crud;
			$crud->setTabela('usuario');
			$this->setUsuario($usuario);
			$this->setSenha($senha);
			$dados = $crud->select("select * from usuario where usuario = '" .$this->getUsuario(). "'");
			if(!is_null($dados)) {
				if(count($dados) != 0) {
					if ($this->getSenha() == $dados[0]['senha']) {
						session_start();
						$this->setNome($dados[0]['nome']);
						$this->setUsuario($dados[0]['usuario']);
						$this->setEmail($dados[0]['email']);
						$this->setCodigo($dados[0]['codigo']);
						$this->setImagem($dados[0]['imagem']);
						$_SESSION['usuario'] = $this->getUsuario();
						$_SESSION['nome'] = $this->getNome();
						$_SESSION['codigo'] = $this->getCodigo();
						$_SESSION['email'] = $this->getEmail();
						$_SESSION['imagem'] = $this->getImagem();

						// $crud->setTabela('quadro_has_usuario');
						// $codigo_quadro = $crud->select('select quadro from quadro_has_usuario where usuario = ' .$this->getCodigo());
						// $this->setQuadro($codigo_quadro[0][0]);

						$crud->insert('insert into quadro values (null, 1)');
						$quadro = $crud->select('select max(codigo) from quadro');
						$crud->insert('insert into quadro_has_usuario values ('.$quadro[0][0].', '.$this->getCodigo().')');


						if ($dados[0]['valida'] == 0) {
							header('location:inicio.php');
						} elseif (condition) {
							header('location:home.php');
						}
					}
				}
			} else {
				echo 'Erro no login!';
			}
		}

		function logout() {
			session_start();
			session_destroy();
			header('location:login.php');
		}

		function alterar_imagem() {
			
		}

		function alterar_dados() {
			$banco = new banco;
			$banco->setTabela('usuario');
			$banco->update([$codigo, $matricula, $nome, $dataNascimento, $usuario, $senha, $img]);
			if ($banco->update([$codigo, $matricula, $nome, $dataNascimento, $usuario, $senha, $img])) {
				$_SESSION['usuario'] = $usuario;
				$_SESSION['nome'] = $nome;
				$_SESSION['dataNascimento'] = $dataNascimento;
				header('location:painel-de-controle-'.$_SESSION['tipo_usuario'].'.php');
			} else {
				echo 'Erro!';
			}
		}

		function alterar_plantas() {
			
		}

		function configurar_wifi() {
			
		}

		function escolherPlantas($p1, $p2, $p3, $p4, $p5, $p6) {
			$crud = new Crud;
			$dados = $crud->select('select quadro from quadro_has_usuario where usuario = ' .$this->getCodigo());
			$quadro = $dados[0][0];
			$this->setQuadro($quadro);
			$crud->insert('insert into quadro_has_planta values (' .$this->getQuadro(). ', '.$p1.')');
			$crud->insert('insert into quadro_has_planta values (' .$this->getQuadro(). ', '.$p2.')');
			$crud->insert('insert into quadro_has_planta values (' .$this->getQuadro(). ', '.$p3.')');
			$crud->insert('insert into quadro_has_planta values (' .$this->getQuadro(). ', '.$p4.')');
			$crud->insert('insert into quadro_has_planta values (' .$this->getQuadro(). ', '.$p5.')');
			$crud->insert('insert into quadro_has_planta values (' .$this->getQuadro(). ', '.$p6.')');

			$crud->insert('update usuario set valida = 1 where codigo = ' .$this->getCodigo());

			header('location:plantas.php');
		}
		
	}

?>