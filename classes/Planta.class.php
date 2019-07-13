<?php

	require('../autoload.php');

	class Planta extends CodigoNomeDescricao {
		private $especie;

        function setEspecie($especie) {
            $this->especie = $especie;
        }

        function getEspecie($especie) {
            return $this->especie;
        }
	}

?>