<?php

	require('autoload.php');

	class CodigoNomeSenha extends CodigoNome {
		private $senha;
	
		function setSenha($senha) {
			$this->senha = hash('sha512', $senha);
		}

		function getSenha() {
			return $this->senha;
		}

		function __toString() {
			parent::__toString()." | Senha: {$this->getSenha()}";
		}
	}

?>