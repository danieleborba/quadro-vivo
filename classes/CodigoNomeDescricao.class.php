<?php

	require('../autoload.php');

	class CodigoNomeDescricao extends CodigoNome {
		private $descricao;

        function setDescricao($descricao) {
            $this->descricao = $descricao;
        }
        
        function getDescricao() {
            return $this->descricao;
        }
	}

?>