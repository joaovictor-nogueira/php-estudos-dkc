<?php 

    $conteudo = "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).";

    #para recortar uma string
    //echo substr($conteudo,0,20);

    $nome = "João Victor Nogueira Doratioto";

    $nomes = explode(' ',$nome);
    
    #print_r($nome);

    #serve para juntar um array com um delimitador. (no caso o espaço)
    $nomes = implode(' ',$nomes);

    # echo $nomes

    $conteudo = '<h1>Guilherme</> Outra coisa';
    // serve para retirar todo o codigo html.
    #echo strip_tags($conteudo);


    // htmlentities que mostra o cofigo na pagina

    echo htmlentities('<div></div>')
?>