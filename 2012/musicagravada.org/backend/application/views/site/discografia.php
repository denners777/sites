<?php echo $HEADER; ?>
<div role="main" id="main">
    <section class="container_16 clearfix" id="commom">
        <h1>Discografias
            <div class="borda_horizontal">
                <div class="enfeite_ponta"></div>
            </div>
            <div class="borda_vertical"></div>
        </h1>
        <div class="grid_1" style="padding:0; margin:0;">
            <p>&nbsp;</p>
        </div>
        <?php
        $i = 0;
        foreach ($ListaInterpretes as $lst) {
            ?>
            <article class="box_commom grid_5">
                <div class="foto">
                    <a href="<?php echo site_url('discografia/'.$lst[Pessoa::ID]) ?>" >
                    <img src="<?php echo base_url('uploads/capa/' . $lst[Pessoa::FOTO]); ?>" width="100" />
                    </a>
                </div>
                <h2><a href="<?php echo site_url('discografia/'.$lst[Pessoa::ID]) ?>" ><?php echo $lst[Pessoa::NOME]; ?> </a><span></span></h2>
                <p><?php echo $lst[Pessoa::DESC]; ?> 
                    <img src="<?php echo base_url('assets/site/img/ponto_final.png') ?>" width="10" height="11"></p>
            </article>
            <?php
            $i++;
            if ($i > 2) {
                ?>
                <div class="grid_1" style="padding:0; margin:0;">
                    <p>&nbsp;</p>
                </div>
                <?php
                $i = 0;
            }
        }
        ?>
    </section>
</div>
<?php echo $FOOTER; ?>