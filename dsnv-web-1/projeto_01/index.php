<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave,do,meu,site">
    <meta name="description" content="Descrição do Website">
    <title>Projeto 01</title>
    <link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="imagens/jota-vermelho.ico" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,700;0,800;1,300;1,700;1,800&display=swap');
    </style>
</head>
<body>
<base base="<?php echo INCLUDE_PATH; ?>"/>

    <?php 
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        switch ($url) {
            case 'depoimentos':
                echo '<target target="depoimentos" />';
                break;
            case 'servicos':
                echo '<target target="servicos" />';
                break;
        }
    ?>

   <?php //new Email(); ?>

    <header>
        <div class="center">
            <div class="logo left"><a href="/">Logomarca</a></div> <!-- LOGO -->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu-mobile"><i class="fa-solid fa-bars"></i></div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
        <div class="clear"></div><!-- clear -->
        </div> <!--  center -->
    </header>

    <div class="container-principal">
    <?php 
        
        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }else{
            /* podemos fazer o que quiser pois a pag n existe */
            if($url != 'depoimentos' && $url != 'servicos'){
                $pagina404 = true;
                include('pages/404.php');
            }else{
                include('pages/home.php');
            }
        }

    ?>    

    </div><!-- container principal -->

    <footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixeds"'; ?>>
        <div class="center">
        <p>Todos os direitos reservados </p>
        </div><!-- center -->
    </footer>
 
    
    <script src="https://kit.fontawesome.com/d709ea726d.js" crossorigin="anonymous"></script>


    
    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/constants.js"></script>
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4&callback=Function.prototype'></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
    
    <?php 
        if($url == 'home' || $url == ''){
    ?>
    
    <?php } ?>
    <?php 
    
        if($url == 'contato'){

    ?>
    <?php } ?>
    
    <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/exemplo.js"></script>

    
</body>
</html>