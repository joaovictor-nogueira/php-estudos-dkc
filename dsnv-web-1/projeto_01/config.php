<?php 

    session_start();
    date_default_timezone_set('America/Sao_Paulo');

    $autoload = function($class){
        if($class == 'Email'){
            include('vendor/autoload.php');
        }
        include('classes/' . $class . '.php');
    }; 

    spl_autoload_register($autoload);




    define('INCLUDE_PATH','http://localhost/php-estudos-dkc/dsnv-web-1/projeto_01/');
    define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');
    
    define('BASE_DIR_PAINEL',__DIR__.'/painel');

    //Conectar com banco de dados!
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','projeto_01');

    /* constantes PARA O PAINEL DE CONTROLE */
    define('NOME_EMPRESA',"Site do Pout");

    /* FUNÇOES */

    function pegaCargo($cargo){
        $arr = [
            '0' => 'Normal',
            '1' => 'Sub Administrador',
            '2' => 'Administrador'];
           
            return $arr[$cargo];
    }
?>