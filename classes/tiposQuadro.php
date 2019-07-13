<?php

	require('../autoload.php');

    $tipoQuadro1 = new TipoQuadro('NULL', 'Mini');
    $tipoQuadro2 = new TipoQuadro('NULL', 'Pequeno');
    $tipoQuadro3 = new TipoQuadro('NULL', 'Médio');
    $tipoQuadro4 = new TipoQuadro('NULL', 'Grande');

    echo $tipoQuadro1 .'<br>';
    echo $tipoQuadro2 .'<br>';
    echo $tipoQuadro3 .'<br>';
    echo $tipoQuadro4 .'<br>';

?>