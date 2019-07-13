<?php

	require('../autoload.php');

    $planta = new Planta('NULL', 'Daniele voigt', 'Dani', 'Chá gostoso');
    echo $planta;
    $planta->salvarPlanta();

?>