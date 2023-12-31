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

    /* FUNÇOES do PAINEL */

    function pegaCargo($indice){
           
            return Painel::$cargos[$indice];
    }

    function selecionadoMenu($par){
        /* <i class="fa-solid fa-angles-right"></i> */
        $url = explode('/',@$_GET['url'])[0];
        if($url == $par){
            echo 'class="menu-active"';
        }
    }

    function verificaPermissaoMenu($permissao){
        if($_SESSION['cargo'] >= $permissao){
            return;
        }else{
            echo 'style="display:none;"';
        }
    }

    function verificaPermissaoPagina($permissao){
        if($_SESSION['cargo'] >= $permissao){
            return;
        }else{
            include('painel/pages/permissao_negadas.php');
            die();
        }
    }
?>