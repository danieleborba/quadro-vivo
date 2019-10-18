<?php

	require('autoload.php');

	class Wifi extends CodigoNomeSenha {

		// TUDO
		function Wifi($codigo, $nome, $senha) {
			$this->setCodigo($codigo);
			$this->setNome($nome);
			$this->setSenha($senha);
		}
		
		// INSERIR NO BD
		function salvarWifi() {
			$crud = new Crud;
			$crud->setTabela('wifi');
			$crud->inserir([
				$this->getCodigo(),
				$this->getNome(),
				$this->getSenha()
			]);
		}

		// MOSTRAR
		function __toString() {
			return $this->getCodigo() .' '. $this->getNome() .' '. $this->getSenha();
		}

	}

?>