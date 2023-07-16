<?php 
    verificaPermissaoPagina(2);
?>

<div class="box-content">
    <h2><i class="fa-regular fa-pen-to-square"></i>  Adicionar Usuario</h2>

    <form method="post" enctype="multipart/form-data">

    <?php 
        if(isset($_POST['acao'])){

        }

    ?>

    <div class="form-group">
        <label for="ilogin">Login: </label>
        <input type="text" name="login" id="ilogin" required>
    </div><!-- form-group -->
    <div class="form-group">
        <label for="inome">Nome: </label>
        <input type="text" name="nome" id="inome" required>
    </div><!-- form-group -->
    <div class="form-group">
        <label for="isenha">Senha: </label>
        <input type="password" name="senha" id="isenha" required>
    </div><!-- form-group -->

    <div class="form-group">
        <label for="iimagem">Imagem: </label>
        <input type="file" name="imagem" id="iimagem" required>
    </div><!-- form-group -->

    <div class="form-group">
        <input type="submit" name="acao" value="Atualizar!">
    </div><!-- form-group -->



    </form>

</div>