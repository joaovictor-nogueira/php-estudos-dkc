<div class="box-content">
    <h2><i class="fa-regular fa-pen-to-square"></i> Cadastrar Categoria </h2>

    <form method="post" enctype="multipart/form-data">

    <?php 
        if(isset($_POST['acao'])){

            $nome = $_POST['nome'];

            if($nome == ''){
                Painel::alert('erro',' O campo nome não pode ficar vazio!');
            }else{
                /* apenas cadastrar no banco de dados */
                $slug = Painel::generateSlug($nome);
                $arr = ['nome'=>$nome,'slug'=>$slug,'order_id'=>'0','nome_tabela'=>'tb_site.categorias'];
                Painel::insert($arr);
                Painel::alert('sucesso','O cadastro da categoria foi realizado com sucesso!');
            }
        }

    ?>

    <div class="form-group">
        <label for="inome">Nome da Categoria: </label>
        <input type="text" name="nome" id="inome">
    </div><!-- form-group -->
    

    <div class="form-group">
        <input type="submit" name="acao" value="Adicionar!">
    </div><!-- form-group -->



    </form>

</div>