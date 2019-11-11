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
			$this->setUsuario($usuario);
			$this->setNome($nome);
			$this->setEmail($email);
			$this->setSenha($senha);
			$this->setCodigoCompra($codigoCompra);
			$this->setImagem('img/usuarios/fazendeiro.png');

			$crud = new Crud;
			$crud->setTabela('usuario');

			echo $this->getUsuario().'", "'.$this->getNome().'", "'.$this->getEmail().'", "'.	$this->getSenha().'", '.$this->getCodigoCompra().', "'.$this->getImagem();

			// Inserindo no BD
			$crud->setTabela('usuario');
			if($crud->insert('INSERT INTO usuario VALUES (null, "'.$this->getUsuario().'", "'.$this->getNome().'", "'.$this->getEmail().'", "'.	$this->getSenha().'", '.$this->getCodigoCompra().', "'.$this->getImagem().'", 10, 0')) {
				// Atualizando o código do usuário no objeto
				$codigoUsuario = $crud->select('select max(codigo) from usuario');
				$this->setCodigo($codigoUsuario);

				$quadro = $crud->SELECT('select max(codigo) from quadro');
				
				$crud->setTabela('quadro_has_usuario');
				$crud->inserir([$quadro[0][0], $this->getCodigo()]);
				header('location:login.php');
			} else {
				echo 'a';
			}

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

						if ($dados[0]['valida'] == 0) {
							$crud->setTabela('quadro');
							$crud->insert('insert into quadro values (null, 1)');
							$quadro = $crud->select('select max(codigo) from quadro');
							$crud->insert('insert into quadro_has_usuario values ('.$quadro[0][0].', '.$dados[0]['codigo'].')');
							header('location:inicio.php');
						} elseif ($dados[0]['valida'] == 1) {
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

		function escolherPlantas($plantas) {
			$crud = new Crud;
			$dados = $crud->select('select quadro from quadro_has_usuario where usuario = ' .$this->getCodigo());
			$quadro = $dados[0][0];
			$this->setQuadro($quadro);
			$crud->insert('insert into quadro_has_planta values (' .$this->getQuadro(). ', '.$plantas[0].')');
			$crud->insert('insert into quadro_has_planta values (' .$this->getQuadro(). ', '.$plantas[1].')');
			$crud->insert('insert into quadro_has_planta values (' .$this->getQuadro(). ', '.$plantas[2].')');
			$crud->insert('insert into quadro_has_planta values (' .$this->getQuadro(). ', '.$plantas[3].')');
			$crud->insert('insert into quadro_has_planta values (' .$this->getQuadro(). ', '.$plantas[4].')');
			$crud->insert('insert into quadro_has_planta values (' .$this->getQuadro(). ', '.$plantas[5].')');

			$crud->insert('update usuario set valida = 1 where codigo = ' .$this->getCodigo());

			header('location:plantas.php');
		}
		
	}

?>