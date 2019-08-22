<?php

    require('autoload.php');

    class TipoPlanta extends CodigoDescricao {
        // TUDO
		function TipoPlanta($descricao) {
			$crud = new Crud;
			$GLOBALS['tipo'] = $crud->select('select * from tipoPlanta where descricao = "'.$descricao.'"');
			$this->setCodigo($GLOBALS['tipo'][0][0]);
			$this->setDescricao($GLOBALS['tipo'][0][1]);
		}
    }

?>