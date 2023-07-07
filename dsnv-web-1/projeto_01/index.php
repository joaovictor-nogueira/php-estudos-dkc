<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave,do,meu,site">
    <meta name="description" content="Descrição do Website">
    <title>Projeto 01</title>
    <link rel="stylesheet" href="estilo/style.css">
    <link rel="shortcut icon" href="imagens/jota-vermelho.ico" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,700;0,800;1,300;1,700;1,800&display=swap');
    </style>
</head>
<body>
    <header>
        <div class="center">
            <div class="logo left"><a href="/">Logomarca</a></div> <!-- LOGO -->
            <nav class="desktop right">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu-mobile"><i class="fa-solid fa-bars"></i></div>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
        <div class="clear"></div><!-- clear -->
        </div> <!--  center -->
    </header>

    <section class="banner-principal">
    <div class="overlay"></div><!-- overlay -->
        <div class="center">
        <form action="" method="post">
            <h2>Qual o seu melhor e-mail?</h2>
            <input type="email" name="email" id="iemail" required>
            <input type="submit" value="Cadastrar!" name="acao">
        </form>
        </div> <!-- center -->

    </section> <!-- BANNER PRINCIPAL -->

    <section class="descricao-autor">

        <div class="center">
        <div class="w50 left">
            <h2>João victor N. D.</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, dignissimos dolor! Dignissimos iusto vel eius ad dolorum dolor tempora dolorem. Asperiores sit omnis quidem quasi sequi obcaecati blanditiis inventore modi.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, saepe. At recusandae unde sunt odio molestiae odit? Nam dolor dignissimos neque, reprehenderit laboriosam
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis architecto aperiam magnam ducimus repudiandae aspernatur saepe fugiat corrupti beatae sapiente doloribus labore, vero, unde quas ullam dicta consectetur, voluptatibus libero.
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit nostrum delectus dolorem accusamus architecto, doloremque consectetur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis illo ducimus enim, minima ab non in laboriosam at dolorem ut optio, provident voluptatibus totam rerum nobis. Iure, maiores laborum. Reprehenderit.</p>
            
            
        </div> <!-- W50 -->  
        <div class="w50 left">
            <!-- PEGAR IMG DPS -->
            <img class="right" src="imagens/foto1.jpeg" alt="imagem">
        </div> <!-- W50 -->
        <div class="clear"></div>
        </div> <!-- center -->

    </section><!-- DESCRIÇÃO-AUTOR -->

    <section class="especialidades">
        
        <div class="center">
            <h2 class="title">Minhas Especialidades</h2>
            <div class="w33 left box-especialidade">
                <h3><i class="fa-brands fa-css3-alt"></i></h3>
                <h4>CSS3</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem assumenda id delectus sunt commodi rerum harum aliquam libero cum magni in, omnis sequi ipsa at, blanditiis, ipsum porro alias architecto?</p>
            </div><!-- box-especialidades -->
            <div class="w33 left box-especialidade">
                <h3><i class="fa-brands fa-html5"></i></h3>
                <h4>HTML5</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit voluptates, minima laudantium beatae unde dolorum. In hic explicabo harum illo non tempora ducimus eum quibusdam fugit, rem facilis dolore veritatis!</p>
            </div><!-- box-especialidades -->
            <div class="w33 left box-especialidade">
                <h3><i class="fa-brands fa-js"></i></h3>
                <h4>Javascript</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti consequuntur atque, hic quod earum minima eius laudantium ab quo culpa inventore fugit quibusdam. Sequi a reiciendis itaque ullam eaque nulla!</p>
            </div><!-- box-especialidades -->
            <div class="clear"></div>
        </div> <!-- center -->

    </section> <!-- ESPECIALIDADES -->

    <section class="extras">

        <div class="center">
            <div class="w50 left depoimentos-container">
                <h2 class="tittle">Depoimentos dos nossos clientes</h2>
                <div class="depoimentos-single">
                    <p class="depoimento-descrição">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia hic fugiat ratione beatae? Non aliquid ut dolorem eligendi voluptatum pariatur, tenetur placeat nisi fugit nostrum explicabo optio quos! Ipsam, vel."</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!-- depoimento-single -->
                <div class="depoimentos-single">
                    <p class="depoimento-descrição">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia hic fugiat ratione beatae? Non aliquid ut dolorem eligendi voluptatum pariatur, tenetur placeat nisi fugit nostrum explicabo optio quos! Ipsam, vel."</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!-- depoimento-single -->
                <div class="depoimentos-single">
                    <p class="depoimento-descrição">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia hic fugiat ratione beatae? Non aliquid ut dolorem eligendi voluptatum pariatur, tenetur placeat nisi fugit nostrum explicabo optio quos! Ipsam, vel."</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!-- depoimento-single -->
            </div><!-- w50 -->
            <div class="w50 left servicos-container">
                <h2 class="tittle">Serviços</h2>
                <div class="servicos">
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum obcaecati tempora ut quas! Omnis, earum. Ex aliquam id, magni facilis fuga doloribus accusantium reiciendis adipisci debitis, ratione molestias minima molestiae.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit minima similique, expedita ducimus aliquam sequi asperiores odio quod dolorum mollitia sint facilis magnam cupiditate nisi, numquam eveniet nulla quaerat vero.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum explicabo saepe, eligendi eius necessitatibus aut tempore laboriosam voluptatem quos odio nisi quaerat aliquid quisquam vitae error quasi nobis? Possimus, quia?</li>
                    </ul>
                </div><!-- Servicos -->
            </div><!-- w50 -->
            <div class="clear"></div>
        </div><!-- center -->

    </section>

    <footer>
        <div class="center">
        <p>Todos os direitos reservados </p>
        </div><!-- center -->
    </footer>


    <script src="https://kit.fontawesome.com/d709ea726d.js" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>