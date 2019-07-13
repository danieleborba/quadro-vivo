<?php

    require('../autoload.php');

    abstract class CodigoNome extends Codigo {
        private $nome;

        function setNome($nome) {
            $this->nome = $nome;
        }
        
        function getNome() {
            return $this->nome;
        }

        public function __toString() {
            parent::__toString()." | Nome: {$this->getNome()}";
        }
    }

?>