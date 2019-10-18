<?php

	require('autoload.php');

    $endereco = new Endereco('NULL', 'Marte', 4, '', 'Em cima', 'Sistema Solar', 'Via Láctea');

    echo $endereco;

    $endereco->salvarEndereco();

?>