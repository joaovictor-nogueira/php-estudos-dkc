<?php 

    $autoload = function($class){
        if($class == 'Email'){
            include('vendor/autoload.php');
        }
        include('classes/' . $class . '.php');
    }; 

    spl_autoload_register($autoload);




    define('INCLUDE_PATH','http://localhost/php-estudos-dkc/dsnv-web-1/projeto_01/');

?>