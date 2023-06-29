<?php 

    //serve pra unir arrays
    $array1 = array("chave1" => "valor1", "chave2" => "valor2");
    $array2 = array("chave3" => "valor3", "chave4" => "valor4");
    $array3 = array("chave5" => "valor5");
    $result = array_merge($array1, $array2, $array3);
    print_r($result);


?>