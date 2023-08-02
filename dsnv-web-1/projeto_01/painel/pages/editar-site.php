<?php 
    $site = Painel::select('tb_site.config',false); 
?>

<div class="box-content">
    <h2><i class="fa-regular fa-pen-to-square"></i> Editar configurações do Site</h2>

    <form method="post" enctype="multipart/form-data">

        <?php 
            if(isset($_POST['acao'])){
                if(Painel::update($_POST,true)){
                    Painel::alert('sucesso',' O site foi atualizado com sucesso!');
                    $site = Painel::select('tb_site.config',false); 
                }else{
                    Painel::alert('erro',' Campos vazios não são permitidos.');
                }                   
            }

        ?>

        <div class="form-group">
            <label for="titulo">Titulo do site:</label>
            <input type="text" name="titulo" value="<?php echo $site['titulo'] ?>">
        </div><!-- form-group -->

        <div class="form-group">
            <label for="nome_autor">Nome do Autor do Site:</label>
            <input type="text" name="nome_autor" value="<?php echo $site['nome_autor'] ?>">
        </div><!-- form-group -->

        <div class="form-group">
            <label for="descricao">Descrição autor do site</label>
            <textarea name="descricao"><?php echo $site['descricao']; ?></textarea>
        </div><!-- form-group -->

        <?php 
            for($i = 1; $i <=3; $i++){
        ?>

        <div class="form-group">
            <label for="icone1">Icone <?php echo $i;?>:</label>
            <input type="text" name="icone<?php echo $i;?>" value="<?php echo $site['icone'.$i] ?>">
        </div><!-- form-group -->

        <div class="form-group">
            <label for="descricao1">Descrição Icone <?php echo $i; ?>:</label>
            <textarea name="descricao<?php echo $i;?>"><?php echo $site['descricao'.$i]; ?></textarea>
        </div><!-- form-group -->

        <?php } ?>

        <div class="form-group">
			<input type="hidden" name="nome_tabela" value="tb_site.config" />
			<input type="submit" name="acao" value="Atualizar!">
		</div><!--form-group-->

    </form>
</div><!--box-content -->
