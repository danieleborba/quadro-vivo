<?php

    require('../autoload.php');

    class TipoQuadro extends CodigoDescricao {
        // TUDO
        function TipoQuadro($descricao) {
            $crud = new Crud;
            $GLOBALS['quadro'] = $crud->select('select * from tipoQuadro where descricao = "'.$descricao.'"');
            $this->setCodigo($GLOBALS['quadro'][0][0]);
            $this->setDescricao($GLOBALS['quadro'][0][1]);
        }
    }

?>