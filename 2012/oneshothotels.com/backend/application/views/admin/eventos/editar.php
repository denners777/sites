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
            <h2><?php echo $SessaoTitulo; ?> <small>- <?php echo $SessaoDescricao; ?></small></h2>
        </div>
        <div class="toggle_container" >
            <div class="block" style="padding: 5px;">
                <?php
                $NN = Evento::MetaDados;
                $Hidden = array();
                $Hidden[Evento::ID] = $Evento[Evento::ID];
                $Hidden[Evento::Slug] = $Evento[Evento::Slug];
                $Hidden[Evento::MetaDados]['FOTO'][0] = $Evento[Evento::MetaDados]['FOTO'][0];
                $Hidden[Evento::MetaDados]['FOTO'][1] = $Evento[Evento::MetaDados]['FOTO'][1];
                echo form_open_multipart('admin/eventos/' . $Evento[Evento::ID], array('class' => 'validate_form'), $Hidden)
                ?>


                <fieldset class="">
                    <label>
                        Título de evento.
                        <span>Introduzca el título de lo evento.</span>
                    </label>
                    <div>
                        <input required="" value="<?php echo $Evento[Evento::MetaDados]['TITLE']; ?>" type="text" name="<?php echo Evento::MetaDados; ?>[TITLE]" id="inputTitulo" placeholder="Introduzca el título de lo evento.">
                    </div>
                </fieldset>
                <div class="columns clearfix">
                    <div class="col_40">
                        <fieldset class="">
                            <label>
                                Data de evento.
                                <span>Introduzca el data de lo evento.</span>
                            </label>
                            <div>
                                <input required="" value="<?php echo $Evento[Evento::Data]; ?>" type="text" name="<?php echo Evento::Data ?>" id="inputData" class="datepicker" placeholder="Introduzca el data de lo evento.">
                            </div>
                        </fieldset>
                    </div>

                    <div class="col_30">
                        <fieldset >
                            <label> Inicio del evento <span>Introduzca el inicio del evento.</span> </label>
                            <div class="clearfix time_picker_holder">
                                <?php echo form_dropdown(Evento::MetaDados . '[INICIO][H]', $Horas, $Evento[Evento::MetaDados]['INICIO']['H'], ' id="h_ini" class="h timepicker"') ?>

<?php echo form_dropdown(Evento::MetaDados . '[INICIO][M]', $Minutos, $Evento[Evento::MetaDados]['INICIO']['M'], ' id="m_ini" class="m timepicker"') ?>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col_30">
                        <fieldset>
                            <label> Final del evento <span>Introduzca el final del evento.</span> </label>
                            <div class="clearfix time_picker_holder">
                                <?php echo form_dropdown(Evento::MetaDados . '[FIM][H]', $Horas, $Evento[Evento::MetaDados]['FIM']['H'], ' id="h_fim" class="h timepicker"') ?>

<?php echo form_dropdown(Evento::MetaDados . '[FIM][M]', $Minutos, $Evento[Evento::MetaDados]['FIM']['M'], ' id="m_fim" class="m timepicker"') ?>
                            </div>
                        </fieldset>
                    </div>


                </div>
                <div class="columns clearfix">
                    <div class="col_50">
                        <fieldset class="">
                            <label>
                                Descripción [EN].
                                <span>Descripción / Texto alternativo. [Inglés]</span>
                            </label>
                            <div>
                                <textarea placeholder="Descripción / Texto alternativo. [Inglés]" name="<?php echo Evento::MetaDados; ?>[DESC][EN]" id="fildDESC" rows="6"> <?php echo $Evento[Evento::MetaDados]['DESC']['EN']; ?></textarea>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col_50">
                        <fieldset class="">
                            <label>
                                Descripción [ES].
                                <span>Descripción / Texto alternativo. [Español]</span>
                            </label>
                            <div>
                                <textarea placeholder="Descripción / Texto alternativo. [Español]" name="<?php echo Evento::MetaDados; ?>[DESC][ES]" id="fildDESC" rows="6"><?php echo $Evento[Evento::MetaDados]['DESC']['ES']; ?></textarea>
                            </div>
                        </fieldset>
                    </div>    

                </div>

                <div class="columns clearfix">
                    <fieldset class="col_50">
                        <label>
                            Foto 1
                        </label>
                        <div>
<?php echo form_upload('FOTO_1', NULL, ''); ?>
                        </div>
                        <div>
                            W.: 670px / H.: 470px / Max.: 1500 kb / Ext.: .jpg , .jpeg
                        </div>
                        <div>
<?php echo (empty($Evento[Evento::MetaDados]['FOTO'][0])) ? 'Sem Imagem' : img(array('style' => 'max-width:100%', 'src' => PublicDomain . $Evento[Evento::MetaDados]['FOTO'][0])) ?>
                        </div>
                    </fieldset>
                    <fieldset class="col_50">
                        <label>
                            Foto 2
                        </label>
                        <div>
<?php echo form_upload('FOTO_2', NULL, ''); ?>
                        </div>
                        <div>
                            W.: 670px / H.: 470px / Max.: 1024 kb / Ext.: .jpg , .jpeg
                        </div>
                        <div>
<?php echo (empty($Evento[Evento::MetaDados]['FOTO'][1])) ? 'Sem Imagem' : img(array('style' => 'max-width:100%', 'src' => PublicDomain . $Evento[Evento::MetaDados]['FOTO'][1])) ?>
                        </div>
                    </fieldset>
                </div>

                <div class="button_bar clearfix">
                    <button class="green" type="submit">
                        <img height="24" width="24" alt="Cadastrar" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/bended_arrow_right.png">
                        <span>Atualizar</span>
                    </button>
                    
                    <button class="blue" type="button" onclick='window.location.href="<?php echo $URLVoltar; ?>"'>
                        <img height="24" width="24" alt="Voltar" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/bended_arrow_left.png">
                        <span>Voltar</span>
                    </button>
                    
                     <button class="red send_right " type="button" href="<?php echo $URLDelet ?>">
                        <span>Delet</span>
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

<?php echo $FOOTER ?>