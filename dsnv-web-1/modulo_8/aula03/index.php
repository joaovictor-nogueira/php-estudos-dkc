<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');
    $nome = "João";
    $nome2 = "Mario";
    $nome_novo = "Victor";
    $sobrenome_novo = "Doratioto";
    //$id = 3;

    $sql = $pdo->prepare("UPDATE `clientes` SET nome=?, sobrenome=? WHERE nome=? OR nome=?");

    if($sql->execute(array($nome_novo, $sobrenome_novo, $nome, $nome2))){
        echo 'Meu cliente foi atualizado com sucesso!';
    }
?>