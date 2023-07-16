<?php 
    verificaPermissaoPagina(2);
?>

<div class="box-content">
    <h2><i class="fa-regular fa-pen-to-square"></i>  Adicionar Usuario</h2>

    <form method="post" enctype="multipart/form-data">

    <?php 
        if(isset($_POST['acao'])){
            $login = $_POST['login'];
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];
            $imagem = $_FILES['imagem'];
            $cargo = $_POST['cargo'];

            if($login == ''){
                Painel::alert('erro',' O login esta vazio !');
            }else if($nome == ''){
                Painel::alert('erro',' O nome esta vazio !');
            }else if($senha == ''){
                Painel::alert('erro',' A senha esta vazia !');
            }else if($cargo == ''){
                Painel::alert('erro',' O cargo precisa estar selecionado!');
            }else if($imagem['name'] == ''){
                Painel::alert('erro',' A imagem precisa ser selecionada!');
            }else{
                /* podemos cadastrar */
                if($cargo >= $_SESSION['cargo']){
                    Painel::alert('erro',' Voce precisa selecionar um cargo menor que o seu!');
                }else if(Painel::imagemValida($imagem) == false){
                    Painel::alert('erro',' O formato selecionado não esta correto!');
                }else if(Usuario::userExists($login)){
                    Painel::alert('erro',' O login já existe, selecione outro por favor!');
                }else{
                    /* apenas cadastrar no banco de dados */
                    $usuario = new Usuario();
                    $imagem = Painel::uploadFile($imagem);
                    $usuario->cadastrarUsuario($login,$senha,$imagem,$nome,$cargo);
                    Painel::alert('sucesso','O cadastro do usuario '.$login.' foi feito com sucesso!');
                }
            }
 

        }

    ?>

    <div class="form-group">
        <label for="ilogin">Login: </label>
        <input type="text" name="login" id="ilogin">
    </div><!-- form-group -->
    <div class="form-group">
        <label for="inome">Nome: </label>
        <input type="text" name="nome" id="inome">
    </div><!-- form-group -->
    <div class="form-group">
        <label for="isenha">Senha: </label>
        <input type="password" name="senha" id="isenha">
    </div><!-- form-group -->

    <div class="form-group">
        <label for="icargo">Cargo: </label>
        <select name="cargo" id="icargo">
            <?php 
                foreach (Painel::$cargos as $key => $value) {
                    if($key < $_SESSION['cargo']) echo '<option value="'.$key.'">'.$value.'</option>';
                }            
            ?>
        </select>
    </div><!-- form-group -->

    <div class="form-group">
        <label for="iimagem">Imagem: </label>
        <input type="file" name="imagem" id="iimagem">
    </div><!-- form-group -->

    <div class="form-group">
        <input type="submit" name="acao" value="Atualizar!">
    </div><!-- form-group -->



    </form>

</div>