<?php
	require('../autoload.php');

    $crud = new Crud;
    $crud->setTabela('tipoQuadro');
    echo $crud->getTabela();

?>