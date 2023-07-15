<div class="box-content left w100">
        <h2><i class="fa-solid fa-house"></i> Painel de Controle - <?php echo NOME_EMPRESA ?></h2>

        <div class="box-metricas">
            <div class="box-metrica-single">
                <div class="box-metrica-wraper">
                    <h2>Usuários Online</h2>
                    <p>10</p>
                </div><!-- box-metrica-wraper -->
            </div><!-- box-metrica-single -->
            <div class="box-metrica-single">
                <div class="box-metrica-wraper">
                    <h2>Total de Visitas</h2>
                    <p>100</p>
                </div><!-- box-metrica-wraper -->
            </div><!-- box-metrica-single -->
            <div class="box-metrica-single">
                <div class="box-metrica-wraper">
                    <h2>Visitas Hoje</h2>
                    <p>3</p>
                </div><!-- box-metrica-wraper -->
            </div><!-- box-metrica-single -->
            <div class="clear"></div>
        </div><!-- box-metricas -->
</div><!-- box-content -->
<div class="clear"></div>

<div class="box-content w100">
<h2><i class="fa-solid fa-users"></i> Usuarios Online</h2>
    <div class="table-responsive">
        <div class="row">
            <div class="col">
                <span>IP</span>
            </div><!-- col -->
            <div class="col">
                <span>Ultima ação</span>
            </div><!-- col -->
            <div class="clear"></div>
        </div><!-- row -->

        <?php 
            for($i = 0; $i < 1; $i++){
        ?>

        <div class="row">
            <div class="col">
                <span>199.526.199.199</span>
            </div><!-- col -->
            <div class="col">
                <span>14/07/2023 20:48:00</span>
                <div class="clear"></div>
            </div><!-- col -->
        </div><!-- row -->
        <?php } ?>
        <div class="clear"></div>
    </div><!-- table-responsive -->
</div><!-- box-content -->