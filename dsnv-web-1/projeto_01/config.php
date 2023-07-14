<?php 

    session_start();

    $autoload = function($class){
        if($class == 'Email'){
            include('vendor/autoload.php');
        }
        include('classes/' . $class . '.php');
    }; 

    spl_autoload_register($autoload);




    define('INCLUDE_PATH','http://localhost/php-estudos-dkc/dsnv-web-1/projeto_01/');
    define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');

    //Conectar com banco de dados!
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','projeto_01');

    /* FUNÇOES */

    function pegaCargo($cargo){
        $arr = [
            '0' => 'Normal',
            '1' => 'Sub Administrador',
            '2' => 'Administrador'];
           
            return $arr[$cargo];
    }
?>