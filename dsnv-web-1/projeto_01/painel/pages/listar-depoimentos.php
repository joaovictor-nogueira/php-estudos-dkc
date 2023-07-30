<?php 
    if(isset($_GET['excluir'])){
        $idExcluir = intval($_GET['excluir']);
        Painel::deletar('tb_site.depoimentos',$idExcluir);
        Painel::redirect(INCLUDE_PATH_PAINEL.'listar-depoimentos');
    }

    $paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    $porPagina = 3;

    $depoimentos = Painel::selectAll('tb_site.depoimentos',($paginaAtual - 1) * $porPagina,$porPagina);

    
?>
<div class="box-content">
    <h2><i class="fa-regular fa-address-card"></i> Depoimentos cadastrados</h2>
    <div class="wraper-table">
        <table>
            <tr>
                <td>Nome</td>
                <td>Data</td>
                <td>#</td>
                <td>#</td>
            </tr>

            <?php 
                foreach ($depoimentos as $key => $value) {
            ?>

            <tr>
                <td><?php echo $value['nome']?></td>
                <td><?php echo $value['data']?></td>
                <td><a class="btn edit" href="<?php echo INCLUDE_PATH_PAINEL ?>editar-depoimento?id=<?php echo $value['id']; ?>"><i class="fa-solid fa-pencil"></i> Editar</a></td>
                <td><a actionBtn="delete" class="btn delete" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-depoimentos?excluir=<?php echo $value['id']; ?>"><i class="fa-solid fa-xmark"></i> Excluir</a></td>
            </tr>

            <?php } ?>
        </table>
    </div><!-- wraper-tabl -->    

    <div class="paginacao">
        <?php 
            $totalPaginas = ceil(count(Painel::selectAll('tb_site.depoimentos')) / $porPagina);
            for($i = 1; $i <= $totalPaginas; $i++){
                if($i == $paginaAtual)
                echo '<a class="page-selected" href="'.INCLUDE_PATH_PAINEL.'listar-depoimentos?pagina='.$i.'">'.$i.'</a>';
            else
                echo '<a href="'.INCLUDE_PATH_PAINEL.'listar-depoimentos?pagina='.$i.'">'.$i.'</a>';
            }
        ?>
    </div><!-- paginacao -->
 
</div><!--box-content -->
