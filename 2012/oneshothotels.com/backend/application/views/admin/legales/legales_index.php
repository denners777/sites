<?php
echo $HEAD;
?>
<div id="pjax">
    <div id="wrapper" data-adminica-nav-top="1" data-adminica-side-top="1">
        <?php echo $STACKBAR; ?>
    </div><!-- Closing Div for Stack Nav, you can boxes under the stack before this -->

    <div id="main_container" class="main_container container_16 clearfix">
        <div class="flat_area grid_16">
            <?php echo $ALERTAS ?>
            <h2><?php echo $SessaoTitulo; ?> <small>- <?php echo $SessaoDescricao ?></small></h2>            
        </div>
        
        <div class="box grid_16 imggal">
            <h2 data-toggle-class="imggal" class="box_head grad_green_reverse round_all" style="cursor: pointer;">Registro Legales</h2>
            <div class="controls">
                <a href="#" class="toggle"></a>
            </div>
            <div class="toggle_container" style="display: none;">
                <div class="block" style="padding: 5px;">
                    <?php echo form_open_multipart('admin/legales/cadastro', 'class="form_validate clearfix "'); ?>
                    <fieldset class="">
                        <label>
                            Legale [EN]
                            <span>Enter the name.</span>
                        </label>
                        <div>
                            <input required="" type="text" name="<?php echo Legale::Nome  ?>[EN]" id="inputTitulo" placeholder="Enter the name.">
                        </div>
                    </fieldset>
                    <fieldset class="">
                        <label>
                            Legale [ES]
                            <span>Introduzca el nombre.</span>
                        </label>
                        <div>
                            <input required="" type="text" name="<?php echo Legale::Nome ?>[ES]" id="inputTitulo" placeholder="Introduzca el nombre.">
                        </div>
                    </fieldset>
                    
                    <fieldset class="">
                        <label>
                            Information. [EN]
                            <span>Enter the information.</span>
                        </label>
                        <div>
                            <textarea name="<?php echo Legale::Valor ?>[EN]"></textarea>
                        </div>
                    </fieldset>
                    
                    <fieldset class="">
                        <label>
                            Información. [ES]
                            <span>Introduzca la información.</span>
                        </label>
                        <div>
                            <textarea name="<?php echo Legale::Valor ?>[ES]"></textarea>
                        </div>
                    </fieldset>
                    
                    <div class="button_bar clearfix">
                        <button class="green" type="submit">
                            <img height="24" width="24" alt="registrar" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/bended_arrow_right.png">
                            <span>Registrar</span>
                        </button>

                        <button class="red send_right " type="button"  href="<?php echo site_url('admin/hoteis'); ?>">
                            <img height="24" width="24" alt="Reset" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/bended_arrow_left.png">
                            <span>Cancelar</span>
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
        
        <div class="flat_area grid_16">
            <h2>Lista de legales</h2>   
        </div>
        <?php foreach ($LEGALESLISTA as $Legale){
            $Class = "Legale{$Legale[Legale::ID]}";
            ?>
        <div class="box grid_8 <?php echo $Class; ?>">
            <h2 data-toggle-class="<?php echo $Class; ?>" class="box_head grad_brown round_all" style="cursor: pointer;"><?php echo '[',$Legale[Legale::ID],'] ',word_limiter($Legale[Legale::Nome]['EN'],6),' | ',word_limiter($Legale[Legale::Nome]['ES'],6) ?></h2>
            <div class="controls">
                <a href="#" class="toggle"></a>
            </div>
            <div class="toggle_container" style="display: none;">
                <div class="block" style="padding: 5px;">
                    <?php echo form_open_multipart("admin/legales/atualizar/{$Legale[Legale::ID]}", 'class="form_validate clearfix "'); ?>
                    <fieldset class="">
                        <label>
                            Question [EN]
                            <span>Enter the title of the question.</span>
                        </label>
                        <div>
                            <input required="" type="text" name="<?php echo Legale::Nome ?>[EN]" value="<?php echo $Legale[Legale::Nome]['EN'] ?>" id="" placeholder="Enter the title of the question.">
                        </div>
                    </fieldset>
                    <fieldset class="">
                        <label>
                            Cuestión [ES]
                            <span>Introduzca el título de la pregunta.</span>
                        </label>
                        <div>
                            <input required="" type="text" name="<?php echo Legale::Nome ?>[ES]"  value="<?php echo $Legale[Legale::Nome]['ES'] ?>"  id="" placeholder="Introduzca el título de la pregunta.">
                        </div>
                    </fieldset>
                    
                    <fieldset class="">
                        <label>
                            Respuesta. [EN]
                            <span>Introduzca el título de la pregunta.</span>
                        </label>
                        <div>
                            <textarea name="<?php echo Legale::Valor ?>[EN]"><?php echo $Legale[Legale::Valor]['EN'] ?></textarea>
                        </div>
                    </fieldset>
                    
                    <fieldset class="">
                        <label>
                            Respuesta. [ES]
                            <span>Introduzca el título de la pregunta.</span>
                        </label>
                        <div>
                            <textarea name="<?php echo Legale::Valor ?>[ES]"><?php echo $Legale[Legale::Valor]['ES'] ?></textarea>
                        </div>
                    </fieldset>
                    
                    <div class="button_bar clearfix">
                        <button class="green" type="submit">
                            <img height="24" width="24" alt="registrar" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/bended_arrow_right.png">
                            <span>Registrar</span>
                        </button>

                        <button class="red send_right " type="button"  href="<?php echo site_url("admin/legales/deletar/{$Legale[Legale::ID]}"); ?>">
                            <img height="24" width="24" alt="Reset" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/bended_arrow_left.png">
                            <span>excluir</span>
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

    <?php echo $FOOTER ?>