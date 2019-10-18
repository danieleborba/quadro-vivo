
<?php

	require('autoload.php');

    $wifi = new Wifi('NULL', 'Voigt', 'jipe1959');
    echo $wifi;
    $wifi->salvarWifi();

?>