<?php

    require('../autoload.php');

    class TipoQuadro extends CodigoDescricao {
        function TipoQuadro($codigo, $descricao) {
            $this->setCodigo($codigo);
            $this->setDescricao($descricao);
        }

        function __toString() {
            return $this->getCodigo() .' '. $this->getDescricao();
        }
    }

?>