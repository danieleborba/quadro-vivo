<?php

    interface Descricao {
        private $descricao;

        function setDescricao($descricao) {
            $this->descricao = $descricao;
        }
        
        function getDescricao() {
            return $this->descricao;
        }
    }

?>