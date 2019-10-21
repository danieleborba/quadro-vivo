<?php

	require('autoload.php');

	class Planta extends CodigoNomeDescricao {
		private $especie;

        // ESPÉCIE
        function setEspecie($especie) {
            $this->especie = $especie;
        }

        function getEspecie() {
            return $this->especie;
        }

        // TUDO
        function Planta($codigo, $nome, $descricao, $especie) {
            $this->setCodigo($codigo);
            $this->setNome($nome);
            $this->setDescricao($descricao);
            $this->setEspecie($especie);
        }
		
		// INSERIR NO BD
		function salvarPlanta() {
			$crud = new Crud;
			$crud->setTabela('planta');
			if($crud->inserir([
                $this->getCodigo(),
                $this->getEspecie(),
				$this->getNome(),
				$this->getDescricao()
            ])) {
                $cod = $crud->select('select max(codigo) from planta');
                $this->setCodigo($cod[0][0]);
            }
        }

        // MOSTRAR
        public function __toString() {
            return $this->getCodigo() .' '.$this->getEspecie() .' '.$this->getNome() .' '.$this->getDescricao();
        }
	}

?>