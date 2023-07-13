<?php 

    class MySql{

        private static $pdo;
        public static function conectar(){
            if(self::$pdo == NULL){
                /* CONECTANDO COM O BANCO DE DADOS DE FORMA SEGURA... CASO NAO CONSIGA APARCERA A MSG DE ERRO AO CONECTAR*/
                try{
                self::$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE,USER,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                }catch(Exception $e){
                    echo '<h1>erro ao conectar</h1>';
                }
            
            }

            return self::$pdo;
        }   
    }

?>