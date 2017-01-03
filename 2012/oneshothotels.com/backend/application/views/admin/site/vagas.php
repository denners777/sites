<?php echo $HEAD; ?>
<div id="pjax">
    <div id="wrapper" data-adminica-nav-top="1" data-adminica-side-top="1">
        <?php echo $STACKBAR; ?>
    </div><!-- Closing Div for Stack Nav, you can boxes under the stack before this -->

    <div id="main_container" class="main_container container_16 clearfix">
        <div class="flat_area grid_16">
            <?php echo $ALERTAS ?>
            <h2><?php echo $SessaoTitulo; ?> <small>- <?php echo $SessaoDescricao ?></small>
            </h2>
        </div>

        <div class="box grid_16 imggal">
            <h2 data-toggle-class="imggal" class="box_head grad_green_reverse round_all" style="cursor: pointer;">Regístrese de ofertas de trabajo</h2>
            <div class="controls">
                <a href="#" class="toggle"></a>
            </div>
            <div class="toggle_container" style="display: none;">
                <?php echo form_open(); ?>
                <!--***-->
                <fieldset class=" top">
                    <label>Local/Hotel</label>
                    <div>
                        <?php echo form_input(Vaga::Local); ?>
                    </div>
                </fieldset>
                <!--***-->
                <fieldset class=" top">
                    <label>Posición [EN]</label>
                    <div>
                        <?php echo form_input('Dados[posicion][EN]'); ?>
                    </div>
                </fieldset>
                <!--***-->
                <fieldset class="">
                    <label>Posición [ES]</label>
                    <div>
                        <?php echo form_input('Dados[posicion][ES]'); ?>
                    </div>
                </fieldset>
                <!--***-->
                <fieldset class="">
                    <label>Habilidades [EN]</label>
                    <div>
                        <?php echo form_textarea('Dados[habilidades][EN]'); ?>
                    </div>
                </fieldset>
                <!--***-->
                <fieldset class="">
                    <label>Habilidades [ES]</label>
                    <div>
                        <?php echo form_textarea('Dados[habilidades][ES]'); ?>
                    </div>
                </fieldset>

                <div class="button_bar clearfix">
                    <button class="green" type="submit">
                        <img height="24" width="24" alt="Cadastrar" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/bended_arrow_right.png">
                        <span>Registrar</span>
                    </button>

                    <button class="orange send_right " type="reset">
                        <img height="24" width="24" alt="Reset" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/refresh_4.png">
                        <span>Reset</span>
                    </button>

                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
        <!--FIM Cadastro-->
        <div class="flat_area grid_16">
            <h2>Lista de vacantes</h2>
        </div>
        <?php
        foreach ($Lista as $Vaga) {
            $Class = "Vaga{$Vaga[Vaga::ID]}";
            $Hidden = array(
                Vaga::ID => $Vaga[Vaga::ID]
            );
            ?>
            <div class="box grid_8 <?php echo $Class; ?>">
                <h2 data-toggle-class="<?php echo $Class; ?>" class="box_head grad_brown round_all" style="cursor: pointer;"><?php echo $Vaga[Vaga::Local] ?> &bull; <?php echo $Vaga[Vaga::MetaDados]['posicion']['ES'] ?></h2>
                <div class="controls">
                    <a href="#" class="toggle"></a>
                </div>
                <div class="toggle_container" style="display: none;">
                    <div class="block" style="padding: 5px;">
                        <?php echo form_open(); ?>
                        <!--***-->
                        <fieldset class=" top">
                            <label>Local/Hotel</label>
                            <div>
                                <?php echo form_input(Vaga::Local,$Vaga[Vaga::Local]); ?>
                            </div>
                        </fieldset>
                        <!--***-->
                        <fieldset class=" top">
                            <label>Posición [EN]</label>
                            <div>
                                <?php echo form_input('Dados[posicion][EN]',$Vaga[Vaga::MetaDados]['posicion']['EN']); ?>
                            </div>
                        </fieldset>
                        <!--***-->
                        <fieldset class="">
                            <label>Posición [ES]</label>
                            <div>
                                <?php echo form_input('Dados[posicion][ES]',$Vaga[Vaga::MetaDados]['posicion']['ES']); ?>
                            </div>
                        </fieldset>
                        <!--***-->
                        <fieldset class="">
                            <label>Habilidades [EN]</label>
                            <div>
                                <?php echo form_textarea('Dados[habilidades][EN]',$Vaga[Vaga::MetaDados]['habilidades']['EN']); ?>
                            </div>
                        </fieldset>
                        <!--***-->
                        <fieldset class="">
                            <label>Habilidades [ES]</label>
                            <div>
                                <?php echo form_textarea('Dados[habilidades][ES]',$Vaga[Vaga::MetaDados]['habilidades']['ES']); ?>
                            </div>
                        </fieldset>

                        <div class="button_bar clearfix">
                            <button class="green" type="submit">
                                <img height="24" width="24" alt="Cadastrar" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/bended_arrow_right.png">
                                <span>Atualizar</span>
                            </button>
                            
                            <button class="red send_right " type="button"  href="<?php echo site_url("admin/site/vagas/{$Vaga[Vaga::ID]}/DELETAR_REGISTRO"); ?>">
                                <img height="24" width="24" alt="Reset" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/bended_arrow_left.png">
                                <span>*DELETAR*</span>
                            </button>
                            
                            <button class="orange send_right " type="reset">
                                <img height="24" width="24" alt="Reset" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/refresh_4.png">
                                <span>Reset</span>
                            </button>

                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php echo $FOOTER ?>