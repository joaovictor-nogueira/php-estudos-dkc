<?php 
    date_default_timezone_set('America/Sao_Paulo');
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

    if(isset($_POST['acao'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $momento_registro = date('Y-m-d H:i:s');

        $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)");
    
        $sql->execute(array($nome, $sobrenome, $momento_registro));
        echo 'Cliente inserido com sucesso!';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro no banco de dados</title>
</head>
<body>
    <form method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" require>
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" name="sobrenome" id="sobrenome" require>
        <input type="submit" value="Enviar" name="acao">

    </form>
</body>
</html>