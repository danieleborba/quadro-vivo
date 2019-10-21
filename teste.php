<?php
	require('autoload.php');

    $crud = new Crud;
    $crud->setTabela('usuario');
    echo $crud->getTabela();
    $crud->select("select * from usuario where usuario = 'arvore'");

?>