<?php 
    if(isset($_GET['id'])){
        $id = (int)$_GET['id'];
        $depoimento = Painel::select('tb_site.depoimentos','id = ?',array($id)); 
    }else{
        Painel::alert('erro',' Você precisa passar o parametro ID.');
        die();
    }
?>
<div class="box-content">
    <h2><i class="fa-regular fa-pen-to-square"></i> Editar Depoimento</h2>

    <form method="post" enctype="multipart/form-data">

        <?php 
            if(isset($_POST['acao'])){
                if(Painel::update($_POST)){
                    Painel::alert('sucesso',' O depoimento foi atualizado com sucesso!');
                    $depoimento = Painel::select('tb_site.depoimentos','id = ?',array($id)); 
                }else{
                    Painel::alert('erro',' Campos vazios não são permitidos.');
                }                   
            }

        ?>

        <div class="form-group">
            <label for="inome">Nome da pessoa: </label>
            <input type="text" name="nome" id="inome" value="<?php echo $depoimento['nome']; ?>">
        </div><!-- form-group -->

        <div class="form-group">
            <label for="idepoimento">Depoimento: </label>
            <textarea name="depoimento" id="idepoimento"><?php echo $depoimento['depoimento']; ?></textarea>
        </div><!-- form-group -->

        <div class="form-group">
            <label for="idata">Data: </label>
            <input formato="data" type="text" name="data" id="idata" value="<?php echo $depoimento['data']; ?>">
        </div><!-- form-group -->


        <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="nome_tabela" value="tb_site.depoimentos">
            <input type="submit" name="acao" value="Atualizar!">
        </div><!-- form-group -->



    </form>
</div><!--box-content -->
