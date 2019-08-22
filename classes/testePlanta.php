<?php

	require('autoload.php');

    $planta1 = new Planta('NULL', 'Daniele voigt', 'Dani', 'Chá gostoso');
    $planta2 = new Planta('NULL', 'Dani', 'Dani', 'Chá');

    $usuario = new Usuario;
    echo $usuario->setPlanta([$planta1,$planta2]);
    //echo $usuario->getPlanta();

?>