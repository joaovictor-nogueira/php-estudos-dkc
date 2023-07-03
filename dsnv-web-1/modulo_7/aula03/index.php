<?php 

    

    class Filha{
/* 
        protected function funcaoTeste(){
            echo "Chamando função teste";
        }
 */
        private function funcaoTeste(){
            echo "Chamando function teste private";
        }
        public function mostrarOla(){
            $this->funcaoTeste();
            echo '<br>';
            echo "Olá Mundo!";
            
            
        }

    }

    class Pai extends Filha{

        public function mostrarOla()
        {
            parent::mostrarOla();
            echo '<br>';
            echo "nova função";
        }

        public function mostrarTchau(){
            echo "Tchau Mundo!";
            echo '<br>';
       #    $this->funcaoTeste();
        }
    }
/* 
    $pai = new Pai;

    $pai->mostrarTchau();

    $filha = new Filha();

    $filha->mostrarOla();
 */
    $pai = new Pai;
  # $pai->mostrarOla();

    //$pai->mostrarTchau();
    $pai->mostrarOla();
?>