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
            <h2 data-toggle-class="imggal" class="box_head grad_green_reverse round_all" style="cursor: pointer;">Inscripción Preguntas frecuentes</h2>
            <div class="controls">
                <a href="#" class="toggle"></a>
            </div>
            <div class="toggle_container" style="display: none;">
                <div class="block" style="padding: 5px;">
                    <?php echo form_open_multipart('admin/faqs/cadastro', 'class="form_validate clearfix "'); ?>
                    <fieldset class="">
                        <label>
                            Question [EN]
                            <span>Enter the title of the question.</span>
                        </label>
                        <div>
                            <input required="" type="text" name="<?php echo Faq::Pergunta ?>[EN]" id="inputTitulo" placeholder="Enter the title of the question.">
                        </div>
                    </fieldset>
                    <fieldset class="">
                        <label>
                            Cuestión [ES]
                            <span>Introduzca el título de la pregunta.</span>
                        </label>
                        <div>
                            <input required="" type="text" name="<?php echo Faq::Pergunta ?>[ES]" id="inputTitulo" placeholder="Introduzca el título de la pregunta.">
                        </div>
                    </fieldset>
                    
                    <fieldset class="">
                        <label>
                            Respuesta. [EN]
                            <span>Introduzca el título de la pregunta.</span>
                        </label>
                        <div>
                            <textarea name="<?php echo Faq::Resposta ?>[EN]"></textarea>
                        </div>
                    </fieldset>
                    
                    <fieldset class="">
                        <label>
                            Respuesta. [ES]
                            <span>Introduzca el título de la pregunta.</span>
                        </label>
                        <div>
                            <textarea name="<?php echo Faq::Resposta ?>[ES]"></textarea>
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
            <h2>Lista de preguntas frecuentes</h2>   
        </div>
        <?php foreach ($FAQLISTA as $FAQ){
            $Class = "Faq{$FAQ[Faq::ID]}";
            ?>
        <div class="box grid_8 <?php echo $Class; ?>">
            <h2 data-toggle-class="<?php echo $Class; ?>" class="box_head grad_brown round_all" style="cursor: pointer;"><?php echo '[',$FAQ[Faq::ID],'] ',word_limiter($FAQ[Faq::Pergunta]['EN'],6),' | ',word_limiter($FAQ[Faq::Pergunta]['ES'],6) ?></h2>
            <div class="controls">
                <a href="#" class="toggle"></a>
            </div>
            <div class="toggle_container" style="display: none;">
                <div class="block" style="padding: 5px;">
                    <?php echo form_open_multipart("admin/faqs/atualizar/{$FAQ[Faq::ID]}", 'class="form_validate clearfix "'); ?>
                    <fieldset class="">
                        <label>
                            Question [EN]
                            <span>Enter the title of the question.</span>
                        </label>
                        <div>
                            <input required="" type="text" name="<?php echo Faq::Pergunta ?>[EN]" value="<?php echo $FAQ[Faq::Pergunta]['EN'] ?>" id="" placeholder="Enter the title of the question.">
                        </div>
                    </fieldset>
                    <fieldset class="">
                        <label>
                            Cuestión [ES]
                            <span>Introduzca el título de la pregunta.</span>
                        </label>
                        <div>
                            <input required="" type="text" name="<?php echo Faq::Pergunta ?>[ES]"  value="<?php echo $FAQ[Faq::Pergunta]['ES'] ?>"  id="" placeholder="Introduzca el título de la pregunta.">
                        </div>
                    </fieldset>
                    
                    <fieldset class="">
                        <label>
                            Respuesta. [EN]
                            <span>Introduzca el título de la pregunta.</span>
                        </label>
                        <div>
                            <textarea name="<?php echo Faq::Resposta ?>[EN]"><?php echo $FAQ[Faq::Resposta]['EN'] ?></textarea>
                        </div>
                    </fieldset>
                    
                    <fieldset class="">
                        <label>
                            Respuesta. [ES]
                            <span>Introduzca el título de la pregunta.</span>
                        </label>
                        <div>
                            <textarea name="<?php echo Faq::Resposta ?>[ES]"><?php echo $FAQ[Faq::Resposta]['ES'] ?></textarea>
                        </div>
                    </fieldset>
                    
                    <div class="button_bar clearfix">
                        <button class="green" type="submit">
                            <img height="24" width="24" alt="registrar" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/bended_arrow_right.png">
                            <span>Registrar</span>
                        </button>

                        <button class="red send_right " type="button"  href="<?php echo site_url("admin/faqs/deletar/{$FAQ[Faq::ID]}"); ?>">
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