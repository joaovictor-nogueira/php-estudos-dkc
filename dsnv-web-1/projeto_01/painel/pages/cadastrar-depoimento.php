<div class="box-content">
    <h2><i class="fa-regular fa-pen-to-square"></i> Adicionar Depoimento</h2>

    <form method="post" enctype="multipart/form-data">

        <?php 
            if(isset($_POST['acao'])){
                if(Painel::insert($_POST)){
                    Painel::alert('sucesso',' O cadastro do depoimento foi realizado com sucesso!');
                }else{
                    Painel::alert('erro',' Campos vazios não são permitidos!');
                } 

            }

        ?>

        <div class="form-group">
            <label for="inome">Nome da pessoa: </label>
            <input type="text" name="nome" id="inome">
        </div><!-- form-group -->

        <div class="form-group">
            <label for="idepoimento">Depoimento: </label>
            <textarea name="depoimento" id="idepoimento"></textarea>
        </div><!-- form-group -->

        <div class="form-group">
            <label for="idata">Data: </label>
            <input formato="data" type="text" name="data" id="idata">
        </div><!-- form-group -->


        <div class="form-group">
            <input type="hidden" name="order_id" value="0">
            <input type="hidden" name="nome_tabela" value="tb_site.depoimentos">
            <input type="submit" name="acao" value="Cadastrar!">
        </div><!-- form-group -->



    </form>
</div><!--box-content -->
