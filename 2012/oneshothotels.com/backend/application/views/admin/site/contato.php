<?php echo $HEAD; ?>
<div id="pjax">
    <div id="wrapper" data-adminica-nav-top="1" data-adminica-side-top="1">
        <?php echo $STACKBAR; ?>
    </div><!-- Closing Div for Stack Nav, you can boxes under the stack before this -->

    <div id="main_container" class="main_container container_16 clearfix">
        <div class="flat_area grid_16">
            <?php echo $ALERTAS ?>
            <h2><?php echo $SessaoTitulo; ?> <small>- <?php echo $SessaoDescricao ?></small></h2>
        </div>

        <div class="box grid_16">
            <?php echo form_open(); ?>
            <div class="toggle_container">
                <div class="block">
                    <h2 class="section">Texto de la página de contacto</h2>
                    <!--***-->
                    <fieldset class=" top">
                        <label>Titulo [EN]</label>
                        <div>
                            <?php echo form_input('Dados[title][EN]', $Dados['title']['EN']); ?>
                        </div>
                    </fieldset>
                    <!--***-->
                    <fieldset class="">
                        <label>Titulo [ES]</label>
                        <div>
                            <?php echo form_input('Dados[title][ES]', $Dados['title']['ES']); ?>
                        </div>
                    </fieldset>
                    <!--***-->
                    <fieldset class="">
                        <label>Texto [EN]</label>
                        <div>
                            <?php echo form_textarea('Dados[text][EN]', $Dados['text']['EN']); ?>
                        </div>
                    </fieldset>
                    <!--***-->
                    <fieldset class="">
                        <label>Texto [ES]</label>
                        <div>
                            <?php echo form_textarea('Dados[text][ES]', $Dados['text']['ES']); ?>
                        </div>
                    </fieldset>

                    <div class="button_bar clearfix">
                        <button class="green" type="submit">
                            <img height="24" width="24" alt="Cadastrar" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/bended_arrow_right.png">
                            <span>Atualizar</span>
                        </button>

                        <button class="orange send_right " type="reset">
                            <img height="24" width="24" alt="Reset" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/refresh_4.png">
                            <span>Reset</span>
                        </button>

                    </div>

                </div>
            </div>
            <?php echo form_close(); ?>
        </div>


    </div>

    <?php echo $FOOTER ?>