<?php
echo $HEADER;
?>

<div role="main" id="container" class="container_12" >
    <div class="grid_5 nosotros">
        <div class="scroll-pane">
            <h2><?php echo lang('contacto_habla'); ?></h2>
            <p><?php echo lang('contacto_res'); ?><br />
                + 34 222 22 22 22 </p>
            <nav class="hotels">
                <ul>
                    <?php foreach ($HoteisEndereco as $Hotel) { ?>
                        
                            <li>
                                <figure><?php echo img($Hotel['logo']); ?></figure>
                                <h3>
                                    <a href="<?php echo $Hotel['link']; ?>">
                                        <?php echo strtoupper($Hotel['nome']) ?>
                                    </a>
                                </h3>
                                <address>
                                    <?php echo $Hotel['endereco']; ?>
                                </address>
                                <span><?php echo $Hotel['telefone']; ?></span> 
                            </li>
                        
                    <?php } ?>
                </ul> 
            </nav>
        </div>
    </div>
    <figure class="grid_7 figure"><img src="<?php echo $BASEASSETS; ?>/img/contato.jpg" /></figure>
    <article class="box grid_3">
        <h1><?php echo $ContatoDados['title'][$IDIOMA]; ?></h1>
        <?php echo auto_typography($ContatoDados['text'][$IDIOMA]); ?>
    </article>
    <article class="box2 grid_4">
        <?php echo form_open('contacto'); ?>
        <ul>
            <li><h3><?php echo lang('contacto_h3'); ?></h3></li>
            <li>
                <input name="nombre" type="text" placeholder="<?php echo lang('contacto_form_name'); ?>" />
            </li>
            <li>
                <input name="email" type="text" placeholder="E-mail" />
            </li>
            <li>
                <select name="hotels" class="selectyze2">
                    <option value="0"><?php echo lang('contacto_form_select'); ?></option>
                    <?php foreach ($HoteisEndereco as $Hotel) { ?>
                        <option value="<?php echo $Hotel['nome']; ?>"><?php echo $Hotel['nome']; ?></option>
                    <?php } ?>
                </select>
            </li>
            <li>
                <textarea name="mensaje" cols="" rows="" placeholder="<?php echo lang('contacto_form_msg'); ?>"></textarea>
            </li>
            <li><input name="" type="submit" value="<?php echo lang('contacto_form_subm'); ?>" /></li>
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

    </article>
</div>
<?php echo $FOOTER; ?>
