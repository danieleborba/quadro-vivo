<?php

	require('autoload.php');

	class Usuario extends CodigoNomeSenha {
		private $usuario,
				$email,
				$dataNascimento, 
				$telefone, 
				$fusoHorario, 
				$imagem, 
				$codigoCompra, 
				$endereco, 
				$wifi;

		// USUÁRIO
		function setUsuario($usuario) {
			$this->usuario = $usuario;
		}

		function getUsuario() {
			return $this->usuario;
		}
	
		// EMAIL
		function setEmail($email) {
			$this->email = $email;
		}

		function getEmail() {
			return $this->email;
		}

		// DATA DE NASCIMENTO
		function setDataNascimento($dataNascimento) {
			$this->dataNascimento = $dataNascimento;
		}

		function getDataNascimento() {
			return $this->dataNascimento;
		}

		// TELEFONE
		function setTelefone($telefone) {
			$this->telefone = $telefone;
		}

		function getTelefone() {
			return $this->telefone;
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

		// ENDEREÇO
		function setEndereco($endereco) {
			if ($endereco instanceof Endereco)
				$this->endereco = $endereco;
		}

		function getEndereco() {
			return $this->endereco;
		}

		// WIFI
		function setWifi($wifi) {
			if ($wifi instanceof Wifi)
				$this->wifi[] = $wifi;
		}

		function getWifi() {
			return $this->wifi;
		}

		function getPlanta() {
			for ($i=0; $i < count($this->planta); $i++) { 
				echo $this->planta[$i];
			}
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
					$this->setDataNascimento($dados[0]['dataNascimento']);
					$this->setTelefone($dados[0]['telefone']);
					$this->setFusoHorario($dados[0]['fusoHorario']);
					$this->setImagem($dados[0]['imagem']);
					$this->setCodigoCompra($dados[0]['codigoCompra']);
					// endereço e wifi
				}
			}
		}
		
		// INSERIR NO BD
		function cadastrar_usuario($codigo, $usuario, $nome, $email, $senha, $telefone, $dataNascimento, $codigoCompra, $fusoHorario) {
			$crud = new Crud;
			$crud->setTabela('usuario');

			// Setando os parâmetros como atributos do objeto
			$this->setCodigo($codigo);
			$this->setUsuario($usuario);
			$this->setNome($nome);
			$this->setEmail($email);
			$this->setSenha($senha);
			$this->setTelefone($telefone);
			$this->setDataNascimento($dataNascimento);
			$this->setCodigoCompra($codigoCompra);
			$this->setImagem('img/usuarios/fazendeiro.png');
			$this->setFusoHorario($fusoHorario);

			// Inserindo no BD
			if($crud->inserir([
				$this->getCodigo(),
				$this->getUsuario(),
				$this->getNome(),
				$this->getEmail(),
				$this->getSenha(),
				$this->getTelefone(),
				$this->getDataNascimento(),
				$this->getCodigoCompra(),
				$this->getImagem(),
				'',
				$this->getFusoHorario()
			])) {
				// Atualizando o código do usuário no objeto
				$codigoUsuario = $crud->select('select max(codigo) from usuario');
				$this->setCodigo($codigoUsuario);
				header('location:login.php');
			} else {
				echo 'Erro!';
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
						header('location:home.php');
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
		
	}

?>