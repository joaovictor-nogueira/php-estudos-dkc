<?php 
/* 
    class Cachorro{
        public function __construct()
        {
            echo "Classe Cachorro";
        }
    }

    class Gato{
        public function __construct()
        {
            echo "Classe Gato";
        }
    }

    class Animal{

        public static function build($nomeClasse){
            if(class_exists($nomeClasse)){
                return new $nomeClasse;
            }else{
                die("Ops! A classe nao existe!");
            }
            

        }
    }

    Animal::build("Gato"); 
*/

    class Carrinho{
        public function fecharCarrinho(){
            echo "carrinho fechado";
        }
    }

    class Frete{
        public function calcularFrete(){
            echo "caluclar frete";
        }
    }

    class Pedido{
        public function fecharPedido(){

        }
    }


    class Loja{

        public function finalizarCompra(){
            
            $this->fecharCarrinho();            
           // $this->calcularFrete();
         //   $this->fecharPedido();
        }

        public function fecharCarrinho(){
            $carrinho = new Carrinho();
            $carrinho->fecharCarrinho();
        }

    }

    $loja = new Loja();
    $loja->finalizarCompra();

?>
