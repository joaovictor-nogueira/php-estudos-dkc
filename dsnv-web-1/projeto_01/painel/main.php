<?php 
    if(isset($_GET['loggout'])){
        Painel::loggout();
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
    <div class="menu">
        <div class="menu-wraper">
        <div class="box-usuario">
            <?php 
                if($_SESSION['img'] == ''){
            ?>
            <div class="avatar-usuario">
                <i class="fa-solid fa-user"></i>
            </div><!-- avatar-usuario -->
            <?php }else{ ?>
                <div class="imagem-usuario">
                    <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>" alt="imagem de perfil">
                </div><!-- avatar-usuario -->
            <?php } ?>
            <div class="nome-usuario">
                <p><?php echo $_SESSION['nome']; ?></p>
                <p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
            </div><!-- nome-usuario -->
        </div><!-- box-usuario -->
        <div class="items-menu">
                <h2>Cadastro</h2>
                <a href="">Cadastrar Depoimento</a>
                <a href="">Cadastrar Serviço</a>
                <a href="">Cadastrar Slides</a>
                <h2>Gestão</h2>
                <a href="">Listar Depoimentos</a>
                <a href="">Listar Serviços</a>
                <a href="">Listar Slides</a>
                <h2>Administração do painel</h2>
                <a href="">Editar Usuario</a>
                <a href="">Adicionar Usuários</a>
                <h2>Configuração geral</h2>
                <a href="">Editar</a>
        </div><!-- items-menu -->
        </div><!-- menu-wraper -->
    </div><!-- menu -->
        
    <header>
        <div class="center">
            <div class="menu-btn">
                <i class="fa-solid fa-bars"></i>
            </div><!-- menu-btn -->
            <div class="loggout">
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"><span>Sair </span><i class="fa-solid fa-right-from-bracket"></i></a>
            </div><!-- loggout -->

            <div class="clear"></div>
        </div><!-- center -->
    </header>
    
    <div class="content">
        
        <div class="box-content left w100">
            <h2><i class="fa-solid fa-house"></i> Painel de Controle - <?php echo 'Site Pout' ?></h2>

            <div class="box-metricas">
                <div class="box-metrica-single">
                    <div class="box-metrica-wraper">
                        <h2>Usuários Online</h2>
                        <p>10</p>
                    </div><!-- box-metrica-wraper -->
                </div><!-- box-metrica-single -->
                <div class="box-metrica-single">
                    <div class="box-metrica-wraper">
                        <h2>Total de Visitas</h2>
                        <p>100</p>
                    </div><!-- box-metrica-wraper -->
                </div><!-- box-metrica-single -->
                <div class="box-metrica-single">
                    <div class="box-metrica-wraper">
                        <h2>Visitas Hoje</h2>
                        <p>3</p>
                    </div><!-- box-metrica-wraper -->
                </div><!-- box-metrica-single -->
                <div class="clear"></div>
            </div><!-- box-metricas -->

        </div><!-- box-content -->
    </div><!-- content -->
 






    <script src="https://kit.fontawesome.com/d709ea726d.js" crossorigin="anonymous"></script>
    

    <script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script>

</body>
</html>