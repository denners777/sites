<?php echo $HEADER ?>

<div role="main" id="container" class="container_12" >
    <div class="grid_5 trabalhe">
        <div class="scroll-pane">
            <h2><?php echo lang('trabalhe_oferta'); ?></h2>
            <ul>
                <?php foreach ($ListaVagas as $Vaga) { ?>
                    <li>
                        <p><strong><?php echo lang('trabalhe_pos'); ?>:</strong> <?php echo $Vaga[Vaga::MetaDados]['posicion'][$IDIOMA]; ?></p>
                        <p><strong>Hotel:</strong> <?php echo $Vaga[Vaga::Local]; ?></p>
                        <p><strong><?php echo lang('trabalhe_hab'); ?>:</strong> <?php echo $Vaga[Vaga::MetaDados]['habilidades'][$IDIOMA]; ?></p>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <figure class="grid_3 fig"><img src="<?php echo $BASEASSETS; ?>/img/trabalhe.jpg" /></figure>
    <div class="grid_4 form">
        <?php echo form_open_multipart('trabajaconnosotros'); ?>
        <ul>
            <li>
                <h3><?php echo lang('contacto_h3'); ?></h3>
            </li>
            <li>
                <input name="nombre" type="text" placeholder="<?php echo lang('contacto_form_name'); ?>" />
            </li>
            <li>
                <input name="email" type="text" placeholder="E-mail" />
            </li>
            <li>
                <select name="postos" class="selectyze2">
                    <option value="0"><?php echo lang('trabalhe_posto'); ?></option>
                    <?php foreach ($ListaVagas as $Vaga) { ?>
                        <option value="<?php echo $Vaga[Vaga::Local]; ?>"><?php echo $Vaga[Vaga::Local]; ?></option>
                    <?php } ?>
                </select>
            </li>
            <li><input id="curriculo" class="file" name="curriculo" type="text" placeholder="<?php echo lang('trabalhe_cv'); ?>" />
                <input id="file" name="file" type="button" value="<?php echo lang('trabalhe_el'); ?>" />
                <input id="filev" name="ARQUIVO" type="file" style="display: none;" /></li>
            <li>
                <textarea name="mensaje" cols="" rows="" placeholder="<?php echo lang('contacto_form_msg'); ?>" class="msn"></textarea>
            </li>
            <li>
                <input name="" type="submit" value="<?php echo lang('contacto_form_subm'); ?>" />
            </li>
        </ul>
        <div style="clear:both;"></div>
        <?php echo form_close(''); ?>

        <?php
        if ($this->session->flashdata('OK')) {
            echo '<p>' . $this->session->flashdata('OK') . '</p>';
        }

        if ($this->session->flashdata('ERRO')) {
            echo '<p>' . $this->session->flashdata('ERRO') . '</p>';
        }
        ?>

    </div>
</div>
<?php echo $FOOTER; ?>