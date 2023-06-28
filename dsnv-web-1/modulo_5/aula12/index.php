<?php 
    //laço de repetição for (cont dentro)
/*     
    for($cont=10;$cont>=0;$cont--){
        echo "Olá Mundo!";
        echo $cont;
        echo '<hr>';
    }
 */
/*
     while (cont fora)

    $contador = 0;
    while($contador < 10){
        $contador++;
        echo "Hello World!";
        echo $contador;
        echo '<hr>';
    }
 */
 // LACO DE REPETIÇÃO COM DO (SEMPRE VAI FAZER 1 VES PRIMEIRO ANTES DE VER A CONDIÇÃO)
    $cont = 0;
    do{
        echo "Olá Mundo!";
        echo '<br>';
        $cont++;
    }while($cont < 10);

?>