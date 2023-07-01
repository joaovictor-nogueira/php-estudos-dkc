<?php 

    class Pessoa{
        
        private $nome = 'João';
        private $idade = '19';
        private $peso = '50kg';

        public function crescer(){
            $this->comer();
            echo 'Estou crescendo';
        }

        private function comer(){
            echo 'Estou comendo';
        }
    }

    $pessoa = new Pessoa;
    $pessoa2 = new Pessoa;

    $pessoa->crescer();

?>