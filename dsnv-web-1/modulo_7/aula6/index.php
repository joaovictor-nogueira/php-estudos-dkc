<?php 
    include('class1.php');
    $teste = new class1("joao", 23);

    echo $teste->getNome();
    echo $teste->getIdade();
?>