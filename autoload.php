<?php
    spl_autoload_register(function($nomeClasse){
        if(file_exists("classes".DIRECTORY_SEPARATOR.$nomeClasse.".class.php"))
            return require_once('classes'.DIRECTORY_SEPARATOR.$nomeClasse.'.class.php');
        elseif(file_exists($nomeClasse.".class.php"))
            return require_once($nomeClasse.'.class.php');
    });
?>