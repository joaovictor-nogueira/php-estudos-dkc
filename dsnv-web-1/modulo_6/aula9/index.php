<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form method="post">
        <?php 
/* 
        if(isset($_GET['acao'])){
            $nome = @$_GET['nome'];
            $email = @$_GET['email'];

            echo $nome;
            echo '<br>';
            echo $email;
            echo '<br>';
        }
 */

        if(isset($_POST['acao'])){
            $nome = @$_POST['nome'];
            $email = @$_POST['email'];

            echo $nome;
            echo '<br>';
            echo $email;
            echo '<br>';
}
        ?>
        <input type="text" name="nome" id="inome">
        <input type="text" name="email" id="iemail">
        <input type="submit" value="Enviar" name="acao">
    </form>
</body>
</html>