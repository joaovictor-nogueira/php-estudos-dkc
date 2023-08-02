
<section class="banner-container">
    <div class="banner-single" style="background-image: url('<?php echo INCLUDE_PATH; ?>imagens/back-banner.jpg');" ></div><!-- banner single -->
    <div class="banner-single" style="background-image: url('<?php echo INCLUDE_PATH; ?>imagens/background2.jpg');" ></div><!-- banner single -->
    <div class="banner-single" style="background-image: url('<?php echo INCLUDE_PATH; ?>imagens/background3.jpg');" ></div><!-- banner single -->
    <div class="overlay"></div><!-- overlay -->
        <div class="center">
       <!--  <?php 
         /* if(isset($_POST['acao'])){
                                                # Enviei o form 
            if($email != ''){
                $email = $_POST['email'];
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){ */
                    /* TUDO CERTO É um email
                    pode enviar */
                   # $email = new Email;
               /*  }else{
                    echo '<script>alert("Não é um email valido!")</script>';
                }
            }else{
                echo '<script>alert("Campos vazios não sao permitidos")</script>';
            }
            
         } */
        ?> -->
        <form method="post">
            <h2>Qual o seu melhor e-mail?</h2>
            <input type="email" name="email" id="iemail" required>
            <input type="submit" value="Cadastrar!" name="acao">
        </form>
        </div> <!-- center -->
        <div class="bullets"></div><!-- bullets -->

    </section> <!-- BANNER PRINCIPAL -->

    <section class="descricao-autor">

        <div class="center">
        <div class="w50 left">
            <h2><?php echo $infoSite['nome_autor']; ?></h2>
            <p><?php echo $infoSite['descricao']; ?></p>
            
            
        </div> <!-- W50 -->  
        <div class="w50 left">
            <!-- PEGAR IMG DPS -->
            <img class="right" src="<?php echo INCLUDE_PATH; ?>imagens/foto1.jpeg" alt="imagem">
        </div> <!-- W50 -->
        <div class="clear"></div>
        </div> <!-- center -->

    </section><!-- DESCRIÇÃO-AUTOR -->

    <section class="especialidades">
        
        <div class="center">
            <h2 class="title">Minhas Especialidades</h2>
            <div class="w33 left box-especialidade">
                <h3><i class="<?php echo $infoSite['icone1']; ?>"></i></h3>
                <h4>CSS3</h4>
                <p><?php echo $infoSite['descricao1']; ?></p>
            </div><!-- box-especialidades -->
            <div class="w33 left box-especialidade">
                <h3><i class="<?php echo $infoSite['icone2']; ?>"></i></h3>
                <h4>HTML5</h4>
                <p><?php echo $infoSite['descricao2']; ?></p>
            </div><!-- box-especialidades -->
            <div class="w33 left box-especialidade">
                <h3><i class="<?php echo $infoSite['icone3']; ?>"></i></h3>
                <h4>Javascript</h4>
                <p><?php echo $infoSite['descricao3']; ?></p>
            </div><!-- box-especialidades -->
            <div class="clear"></div>
        </div> <!-- center -->

    </section> <!-- ESPECIALIDADES -->

    <section class="extras">

        <div class="center">
            <div id="depoimentos" class="w50 left depoimentos-container">
                <h2 class="tittle">Depoimentos dos nossos clientes</h2>
                <?php 
                    $sql = MySql::conectar()->prepare("SELECT * FROM `tb_site.depoimentos` ORDER BY order_id ASC LIMIT 3");
                    $sql->execute();
                    $depoimentos = $sql->fetchAll();
                    foreach ($depoimentos as $key => $value) {
                    
                ?>
                <div class="depoimentos-single">
                    <p class="depoimento-descrição">"<?php echo $value['depoimento']; ?>"</p>
                    <p class="nome-autor"><?php echo $value['nome']; ?> - <?php echo $value['data']; ?></p>
                </div><!-- depoimento-single -->
                <?php 
                    }
                ?>
            </div><!-- w50 -->
            <div id="servicos" class="w50 left servicos-container">
                <h2 class="tittle">Serviços</h2>
                <div class="servicos">
                    <ul>
                        <?php 
                            $sql = MySql::conectar()->prepare("SELECT * FROM `tb_site.servicos` ORDER BY order_id ASC LIMIT 3");
                            $sql->execute();
                            $servicos = $sql->fetchAll();
                            foreach ($servicos as $key => $value) {
                        ?>
                        <li><?php echo $value['servico']; ?></li>
                        
                        <?php } ?>
                    </ul>
                </div><!-- Servicos -->
            </div><!-- w50 -->
            <div class="clear"></div>
        </div><!-- center -->

    </section><!-- Extras -->