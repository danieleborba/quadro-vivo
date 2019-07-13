<?php

    abstract class Codigo {
        private $codigo;
        
        function getCodigo() {
            return $this->codigo;
        }

        function setCodigo($codigo) {
            $this->codigo = $codigo;
        }

        function __toString() {
            return "Código:".$this->getCodigo();
        }
    }

?>