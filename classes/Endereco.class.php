<?php

	require('autoload.php');

	class Endereco extends Codigo {
		private $rua,
				$numero, 
				$complemento, 
				$bairro, 
				$cidade, 
				$estado;

		// RUA
		function setRua($rua) {
			$this->rua = $rua;
		}

		function getRua() {
			return $this->rua;
		}

		// NÚMERO
		function setNumero($numero) {
			$this->numero = $numero;
		}

		function getNumero() {
			return $this->numero;
		}

		// COMPLEMENTO
		function setComplemento($complemento) {
			$this->complemento = $complemento;
		}

		function getComplemento() {
			return $this->complemento;
		}

		// BAIRRO
		function setBairro($bairro) {
			$this->bairro = $bairro;
		}

		function getBairro() {
			return $this->bairro;
		}

		// CIDADE
		function setCidade($cidade) {
			$this->cidade = $cidade;
		}

		function getCidade() {
			return $this->cidade;
		}

		// ESTADO
		function setEstado($estado) {
			$this->estado = $estado;
		}

		function getEstado() {
			return $this->estado;
		}

        // TUDO
        function Endereco($codigo, $rua, $numero, $complemento, $bairro, $cidade, $estado) {
            $this->setCodigo($codigo);
            $this->setRua($rua);
            $this->setNumero($numero);
            $this->setComplemento($complemento);
            $this->setBairro($bairro);
            $this->setCidade($cidade);
            $this->setEstado($estado);
        }
		
		// INSERIR NO BD
		function salvarEndereco() {
			$crud = new Crud;
			$crud->setTabela('endereco');
			$crud->inserir([
				$this->getCodigo(),
				$this->getRua(),
				$this->getNumero(),
				$this->getComplemento(),
				$this->getBairro(),
				$this->getCidade(),
				$this->getEstado(),
			]);
			
			$cod = $crud->select('select max(codigo)from endereco');
			$this->setCodigo($codigoEndereco);
		}
        
		function __toString() {
			return $this->getCodigo()." ".$this->getRua(). " ".$this->getNumero(). " ".$this->getComplemento(). " ".$this->getBairro(). " ".$this->getCidade(). " ".$this->getEstado();
		}
	}

?>