<?php

	require('../autoload.php');

	class Usuario extends CodigoNomeSenha {
		private $usuario,
				$dataNascimento, 
				$telefone, 
				$fusoHorario, 
				$imagem, 
				$codigoCompra, 
				$endereco, 
				$tipoQuadro,
				$wifi,
				$planta;
	
		// USUÁRIO
		function setUsuario($usuario) {
			$this->usuario = $usuario;
		}

		function getUsuario() {
			return $this->usuario;
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

		function getImagem($imagem) {
			return $this->imagem;
		}

		// CÓDIGO DA COMPRA
		function setCodigoCompra($codigoCompra) {
			$this->codigoCompra = $codigoCompra;
		}

		function getCodigoCompra($codigoCompra) {
			return $this->codigoCompra;
		}

		// ENDEREÇO
		function setEndereco($endereco) {
			if ($endereco instanceof Endereco)
				$this->endereco = $endereco;
		}

		function getEndereco($endereco) {
			return $this->endereco;
		}

		// TIPO DO QUADRO
		function setTipoQuadro($tipoQuadro) {
			if ($tipoQuadro instanceof TipoQuadro)
				$this->tipoQuadro = $tipoQuadro;
		}

		function getTipoQuadro($tipoQuadro) {
			return $this->tipoQuadro;
		}

		// WIFI
		function setWifi($wifi) {
			if ($wifi instanceof Wifi)
				$this->wifi[] = $wifi;
		}

		function getWifi($wifi) {
			return $this->wifi;
		}

		// PLANTAS
		function setPlanta($planta) {
			if ($planta instanceof Planta)
				$this->planta[] = $planta;
		}

		function getPlanta($planta) {
			return $this->planta ;
		}

		function __toString() {
			parent::__toString()."| Usuário: {$this->getUsuario()}";
		}
	}

?>