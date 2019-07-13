<?php

	require('../autoload.php');

    $endereco = new Endereco('NULL', 'Abraham Lincoln', 2, '301', 'Jd. América', 'Rio do Sul', 'SC');

    echo $endereco;

    $endereco->salvarEndereco();

?>