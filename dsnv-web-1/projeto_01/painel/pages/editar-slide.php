<?php 
    if(isset($_GET['id'])){
        $id = (int)$_GET['id'];
        $slide = Painel::select('tb_site.slides','id = ?',array($id)); 
    }else{
        Painel::alert('erro',' Você precisa passar o parametro ID.');
        die();
    }
?>
<div class="box-content">
    <h2><i class="fa-regular fa-pen-to-square"></i>  Editar Slide</h2>

    <form method="post" enctype="multipart/form-data">

    <?php 
        if(isset($_POST['acao'])){
            //enviei o form
            
            $nome = $_POST['nome']; 
            $imagem = $_FILES['imagem'];
            $imagem_atual = $_POST['imagem_atual'];
            $usuario = new Usuario();
            if($imagem['name'] != ''){

                //Existe o upload de imagem
                if(Painel::imagemValida($imagem)){
                    Painel::deleteFile($imagem_atual);
                    $imagem = Painel::uploadFile($imagem);
                    $arr = ['nome'=>$nome,'slide'=>$imagem,'id'=>$id,'nome_tabela'=>'tb_site.slides'];
                    Painel::update($arr);
                    $slide = Painel::select('tb_site.slides','id = ?',array($id)); 
                    Painel::alert('sucesso',' O slide foi editado junto com a imagem!');
                }else{
                    Painel::alert('erro',' O formato da imagem não é valido');
                }
            }else{
                $imagem = $imagem_atual;
                $arr = ['nome'=>$nome,'slide'=>$imagem,'id'=>$id,'nome_tabela'=>'tb_site.slides'];
                Painel::update($arr);
                $slide = Painel::select('tb_site.slides','id = ?',array($id)); 
                Painel::alert('sucesso',' O slide foi editado com sucesso!');
            }
        }

    ?>

    <div class="form-group">
        <label for="inome">Nome: </label>
        <input type="text" name="nome" id="inome" required value="<?php echo $slide['nome']; ?>">
    </div><!-- form-group -->
    

    <div class="form-group">
        <label for="iimagem">Imagem: </label>
        <input type="file" name="imagem" id="iimagem">
        <input type="hidden" name="imagem_atual" value="<?php echo $slide['slide']; ?>">
    </div><!-- form-group -->

    <div class="form-group">
        <input type="submit" name="acao" value="Atualizar!">
    </div><!-- form-group -->



    </form>

</div>