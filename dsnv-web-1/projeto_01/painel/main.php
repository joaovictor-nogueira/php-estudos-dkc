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
                <a <?php selecionadoMenu('cadastrar-depoimento'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-depoimento">Cadastrar Depoimento</a>
                <a <?php selecionadoMenu('cadastrar-serviço'); ?> href="">Cadastrar Serviço</a>
                <a <?php selecionadoMenu('cadastrar-Slides'); ?> href="">Cadastrar Slides</a>
                <h2>Gestão</h2>
                <a <?php selecionadoMenu('listar-depoimentos');  ?> href="<?php echo INCLUDE_PATH_PAINEL ?>listar-depoimentos">Listar Depoimentos</a>
                <a <?php selecionadoMenu('listar-servicos'); ?> href="">Listar Serviços</a>
                <a <?php selecionadoMenu('listar slides'); ?> href="">Listar Slides</a>
                <h2>Administração do painel</h2>
                <a <?php selecionadoMenu('editar-usuario'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>editar-usuario">Editar Usuario</a>
                <a <?php selecionadoMenu('adicionar-usuario'); ?> <?php verificaPermissaoMenu(2); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>adicionar-usuario">Adicionar Usuários</a>
                <h2>Configuração geral</h2>
                <a <?php selecionadoMenu('editar-site'); ?> href="">Editar Site</a>
        </div><!-- items-menu -->
        </div><!-- menu-wraper -->
    </div><!-- menu -->
        
    <header>
        <div class="center">
            <div class="menu-btn">
                <i class="fa-solid fa-bars"></i>
            </div><!-- menu-btn -->
            
            <div class="loggout">
                <a <?php if(@$_GET['url'] == ''){ ?> style="background: #2196f3;padding:11px" <?php } ?> href="<?php echo INCLUDE_PATH_PAINEL ?>"><i class="fa-solid fa-house"></i><span> Pagina Inicial </span></a>
                <div style="padding: 0 20px;display: inline;"></div>
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"><i class="fa-solid fa-right-from-bracket"></i><span> Sair</span></a>
            </div><!-- loggout -->

            <div class="clear"></div>
        </div><!-- center -->
    </header>
    
    <div class="content">
        
        <?php 
            Painel::carregarPagina();
        ?>


    </div><!-- content -->
 



    <script src="https://kit.fontawesome.com/d709ea726d.js" crossorigin="anonymous"></script>
    

    <script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/jquery.mask.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script>

</body>
</html>