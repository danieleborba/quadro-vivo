<?php

    require_once('autoload.php');

    abstract class CodigoDescricao extends Codigo {
        private $descricao;

        function setDescricao($descricao) {
            $this->descricao = $descricao;
        }
        
        function getDescricao() {
            return $this->descricao;
        }
    }

?>