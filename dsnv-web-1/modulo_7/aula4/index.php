<?php 

    abstract class Teste{

        public function func1(){
            echo '<br>';
            echo "Chamando func1";
        }

    }

    class Principal extends Teste{

        public function  func2(){
            echo '<br>';
            echo "Estou delcarando oficialmente um metodo abstrato";
        }

        public static function metodoestatico(){
            echo '<br>';
            echo "metodo estatico";
        }
        public function funcao(){
            //Principal::metodoestatico();
            self::metodoestatico();
        }
    }

    $principal = new Principal;

/*  $principal->func1();
    $principal->func2(); */

    $principal->funcao();

    //Principal::metodoestatico();
?>