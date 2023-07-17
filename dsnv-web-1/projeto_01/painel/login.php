<?php 
    if(isset($_COOKIE['lembrar'])){
        $user = $_COOKIE['user'];
        $password = $_COOKIE['password'];
        $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND senha = ?");
        $sql->execute(array($user,$password));
        if($sql->rowCount() == 1){
            $info = $sql->fetch();
            $_SESSION['login'] = true;
            $_SESSION['user'] = $user;
            $_SESSION['senha'] = $password;
            $_SESSION['cargo'] = $info['cargo'];
            $_SESSION['nome'] = $info['nome'];
            $_SESSION['img'] = $info['img'];
            header('Location: ' . INCLUDE_PATH_PAINEL);
            die();
        }
        
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de controle</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL ?>css/style.css ">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,700;0,800;1,300;1,700;1,800&display=swap');
    </style>
</head>
<body>
    
    <div class="box-login">

        <?php 
            if(isset($_POST['acao'])){
                $user = $_POST['user'];
                $password = $_POST['senha'];
                $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND senha = ?");
                $sql->execute(array($user,$password));
                if($sql->rowCount() == 1){
                    $info = $sql->fetch();
                    //Logamos com sucesso
                    $_SESSION['login'] = true;
                    $_SESSION['user'] = $user;
                    $_SESSION['senha'] = $password;
                    $_SESSION['cargo'] = $info['cargo'];
                    $_SESSION['nome'] = $info['nome'];
                    $_SESSION['img'] = $info['img'];
                    if(isset($_POST['lembrar'])){
                        setcookie('lembrar',true,time()+(60*60*24),'/');
                        setcookie('user',$user,time()+(60*60*24),'/');
                        setcookie('password',$password,time()+(60*60*24),'/');
                    }
                    header('Location: ' . INCLUDE_PATH_PAINEL);
                    die();
                }else{
                    //falhou
                    echo '<div class="erro-box"><i class="fa-solid fa-xmark"></i> Usuario ou senha incorretos!</div>';
                }
            }
        ?>
        <h1>Efetue o Login:</h1>
        <form method="post">
            <input type="text" name="user" id="iuser" placeholder="Login..." required>
            <input type="password" name="senha" id="isenha" placeholder="Senha..." required>
            <div class="form-group-login left">
                <input type="submit" value="Logar!" name="acao">
            </div>
            <div class="form-group-login right">
                <label for="ilembrar">Lembrar-me</label>
                <input type="checkbox" name="lembrar" id="ilembrar">
            </div>
            <div class="clear"></div>
            
        </form>
    </div><!-- box-login -->


    <script src="https://kit.fontawesome.com/d709ea726d.js" crossorigin="anonymous"></script>

</body>
</html>