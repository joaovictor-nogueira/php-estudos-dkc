<?php 
    if(isset($_GET['id'])){
        $id = (int)$_GET['id'];
        $servico = Painel::select('tb_site.servicos','id = ?',array($id)); 
    }else{
        Painel::alert('erro',' Você precisa passar o parametro ID.');
        die();
    }
?>
<div class="box-content">
    <h2><i class="fa-regular fa-pen-to-square"></i> Editar Serviço</h2>

    <form method="post" enctype="multipart/form-data">

        <?php 
            if(isset($_POST['acao'])){
                if(Painel::update($_POST)){
                    Painel::alert('sucesso',' O Serviço foi atualizado com sucesso!');
                    $servico = Painel::select('tb_site.servicos','id = ?',array($id)); 
                }else{
                    Painel::alert('erro',' Campos vazios não são permitidos.');
                }                   
            }

        ?>

        <div class="form-group">
            <label>Serviço: </label>
            <textarea name="servico"> <?php echo $servico['servico']; ?> </textarea>
        </div><!-- form-group -->


        <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="nome_tabela" value="tb_site.servicos">
            <input type="submit" name="acao" value="Atualizar!">
        </div><!-- form-group -->



    </form>
</div><!--box-content -->
