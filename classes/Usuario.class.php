<?php

	require('../autoload.php');

	class Usuario extends CodigoNomeSenha {
		private $usuario,
				$email,
				$dataNascimento, 
				$telefone, 
				$fusoHorario, 
				$imagem, 
				$codigoCompra, 
				$endereco, 
				$tipoQuadro,
				$wifi;
		public $planta = array();
	
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

		// TIPO DO QUADRO
		function setTipoQuadro($tipoQuadro) {
			if ($tipoQuadro instanceof TipoQuadro)
				$this->tipoQuadro = $tipoQuadro;
		}

		function getTipoQuadro() {
			return $this->tipoQuadro;
		}

		// WIFI
		function setWifi($wifi) {
			if ($wifi instanceof Wifi)
				$this->wifi[] = $wifi;
		}

		function getWifi() {
			return $this->wifi;
		}

		// PLANTAS
		function setPlanta($planta) {
			for ($i=0; $i < count($planta); $i++) { 
				if ($planta instanceof Planta)
				$this->planta[$i] = $planta[$i];
			}
		}

		function getPlanta() {
			for ($i=0; $i < count($this->planta); $i++) { 
				echo $this->planta[$i];
			}
		}

		// TUDO
		//function Usuario($codigo, $planta) {
		// , $nome, $senha, $usuario, $dataNascimento, $telefone, $fusoHorario, $imagem, $codigoCompra, $endereco, $tipoQuadro, $wifi, $planta) {
			//$this->setCodigo($codigo);
			// $this->setNome($nome);
			// $this->setSenha($senha);
			// $this->setUsuario($usuario);
			// $this->setDataNascimento($dataNascimento);
			// $this->setTelefone($telefone);
			// $this->setFusoHorario($fusoHorario);
			// $this->setImagem($imagem);
			// $this->setCodigoCompra($codigoCompra);
			// $this->setEndereco($endereco);
			// $this->setTipoQuadro($tipoQuadro);
			// $this->setWifi($wifi);
			//$this->setPlanta($planta);
		//}
		
		// INSERIR NO BD
		function salvarUsuario() {
			// Salvar dados do usuário e chaves estrangeiras N:1
			$crud = new Crud;
			$crud->setTabela('usuario');
			
			$crud->inserir([
				$this->getCodigo(),
				$this->getUsuario(),
				$this->getNome(),
				$this->getEmail(),
				$this->getSenha(),
				$this->getTelefone(),
				$this->getDataNascimento(),
				$this->getFusoHorario(),
				$this->getCodigoCompra(),
				$this->getImagem(),
				$this->getEndereco()->getCodigo(),
				$this->getTipoQuadro()->getCodigo()
			]);

			// Atualizando o código do usuário no objeto
			$codigoUsuario = $crud->select('select max(codigo) from usuario');
			$this->setCodigo($codigoUsuario);

			// Inserindo na tabela N:N do wifi
			$crud->setTabela('usuario_has_wifi');
			$crud->inserir([
				$this->getCodigo(),
				$this->getWifi()->getCodigo()
			]);

			// Inserindo na tabela N:N das plantas
			$crud->setTabela('usuario_has_planta');
			for ($i=0; $i < count($this->getPlanta()); $i++) { 
				$crud->inserir([
					$this->getCodigo(),
					$this->getPlanta($i)->getCodigo()
				]);
			}
		}

		function __toString() {
			parent::__toString()."| Usuário: {$this->getUsuario()}";
		}
	}

?>