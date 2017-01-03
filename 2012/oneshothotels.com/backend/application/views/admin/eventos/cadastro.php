<?php
echo $HEAD;
?>

<div id="pjax">
    <div id="wrapper" data-adminica-nav-top="1" data-adminica-side-top="1"> <?php echo $STACKBAR; ?> </div>
    <!-- Closing Div for Stack Nav, you can boxes under the stack before this -->

    <div id="main_container" class="main_container container_16 clearfix">
        <div class="flat_area grid_16"> <?php echo $ALERTAS ?>
            <h2><?php echo $SessaoTitulo; ?> <small>- <?php echo $SessaoDescricao ?></small></h2>
        </div>
        <div class="box grid_16 imggal">
            <h2 data-toggle-class="imggal" class="box_head round_all" style="cursor: pointer;">Regístrese eventos.</h2>
            <div class="controls"> <a href="#" class="toggle"></a> </div>
            <div class="toggle_container" style="display: none;">
                <div class="block" style="padding: 5px;"> <?php echo form_open($URLCadastro, 'class="form_validate clearfix formImg "', array(Evento::Slug => $EventoSlug)); ?>
                    <fieldset class="">
                        <label> Título de evento. <span>Introduzca el título de lo evento.</span> </label>
                        <div>
                            <input required="" type="text" name="<?php echo Evento::MetaDados; ?>[TITLE]" id="inputTitulo" placeholder="Introduzca el tÃ­tulo de lo evento.">
                        </div>
                    </fieldset>
                    <div class="columns clearfix">
                        <div class="col_40">
                            <fieldset class="">
                                <label> Data de evento. <span>Introduzca el data de lo evento.</span> </label>
                                <div>
                                    <input required="" type="text" name="<?php echo Evento::Data ?>" id="inputData" class="datepicker" placeholder="Introduzca el data de lo evento.">
                                </div>
                            </fieldset>
                        </div>
                        <div class="col_30">
                            <fieldset >
                                <label> Inicio del evento <span>Introduzca el inicio del evento.</span> </label>
                                <div class="clearfix time_picker_holder">
                                    <?php echo form_dropdown(Evento::MetaDados . '[INICIO][H]', $Horas, 0, ' id="h_ini" class="h timepicker"') ?>

                                    <?php echo form_dropdown(Evento::MetaDados . '[INICIO][M]', $Minutos, 0, ' id="m_ini" class="m timepicker"') ?>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col_30">
                            <fieldset>
                                <label> Final del evento <span>Introduzca el final del evento.</span> </label>
                                <div class="clearfix time_picker_holder">
                                    <?php echo form_dropdown(Evento::MetaDados . '[FIM][H]', $Horas, 0, ' id="h_fim" class="h timepicker"') ?>

                                    <?php echo form_dropdown(Evento::MetaDados . '[FIM][M]', $Minutos, 0, ' id="m_fim" class="m timepicker"') ?>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="columns clearfix">
                        <div class="col_50">
                            <fieldset class="">
                                <label> Descripciõn [EN]. <span>Descripciõn / Texto alternativo. [Inglês]</span> </label>
                                <div>
                                    <textarea placeholder="Descripciõn / Texto alternativo. [Ingles]" name="<?php echo Evento::MetaDados; ?>[DESC][EN]" id="fildDESC" rows="6"></textarea>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col_50">
                            <fieldset class="">
                                <label> Descripciõn [ES]. <span>Descripciõn / Texto alternativo. [Español]</span> </label>
                                <div>
                                    <textarea placeholder="Descripciõn / Texto alternativo. [Espanol]" name="<?php echo Evento::MetaDados; ?>[DESC][ES]" id="fildDESC" rows="6"></textarea>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="button_bar clearfix">
                        <button class="green" type="submit"> <img height="24" width="24" alt="Cadastrar" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/bended_arrow_right.png"> <span>Cadastrar</span> </button>
                        <button class="orange send_right " type="reset"> <img height="24" width="24" alt="Reset" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/refresh_4.png"> <span>Reset</span> </button>
                    </div>
                    <?php echo form_close(); ?> </div>
            </div>
        </div>
        <div class="box grid_16 imggal single_datatable">
            <div id="dt1" class="no_margin">
                <table class=" datatable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titulo</th>
                            <th>Data</th>
                            <th>Inicio</th>
                            <th>Final</th>
                            <th>Fotos</th>
                            <?php echo ($EventoSlug == 'project') ? '<th>Destaque</th>' : NULL; ?>
                            <th>Visualizar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($ListaEventos as $lst) {
                            ?>
                            <tr class="">
                                <td><?php echo $lst[Evento::ID]; ?></td>
                                <td><?php echo $lst[Evento::MetaDados]['TITLE']; ?></td>
                                <td><?php echo $lst[Evento::Data]; ?></td>
                                <td><?php echo $lst[Evento::MetaDados]['INICIO']['H']; ?> : <?php echo $lst[Evento::MetaDados]['INICIO']['M']; ?></td>
                                <td><?php echo $lst[Evento::MetaDados]['FIM']['H']; ?> : <?php echo $lst[Evento::MetaDados]['FIM']['M']; ?></td>
                                <td aling="center">
                                    <?php echo (empty($lst[Evento::MetaDados]['FOTO'][0])) ? 'Sem Imagem' : img(array('style' => 'margin:0 10px; float: left;', 'width' => '25px', 'src' => PublicDomain . $lst[Evento::MetaDados]['FOTO'][0])) ?>
                                    <?php echo (empty($lst[Evento::MetaDados]['FOTO'][1])) ? '' : img(array('width' => '25px', 'src' => PublicDomain . $lst[Evento::MetaDados]['FOTO'][1])) ?>
                                </td>
                                <?php if ($EventoSlug == 'project') { ?>
                                    <td>
                                        <?php if ($lst[Evento::Destaque] == 'S') { ?>
                                            <button class="orange" type="button" href="<?php echo site_url("admin/eventos/DESTAQUE/{$lst[Evento::ID]}/N/{$EventoSlug}"); ?>">
                                                <img height="24" width="24" alt="Editar" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/alert_2.png">
                                            </button>
                                        <?php } else { ?>
                                            <button class="black" type="button" href="<?php echo site_url("admin/eventos/DESTAQUE/{$lst[Evento::ID]}/S/{$EventoSlug}"); ?>">
                                                <img height="24" width="24" alt="Editar" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/alert_2.png">
                                            </button>
                                        <?php } ?>
                                    </td>
                                <?php } ?>
                                <td>
                                    <button class="navy" type="button" onclick='window.location.href="<?php echo "{$lst[Evento::ID]}"; ?>"'>
                                        <img height="24" width="24" alt="Editar" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/pencil.png">
                                        <span>Editar</span>
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>
            </div>
        </div>

        <?php if ($EventoSlug == 'project') { ?>
            <div class="box grid_16">
                <?php echo form_open('admin/eventos/ifoproject'); ?>
                <div class="toggle_container">
                    <div class="block">
                        <h2 class="section">Texto de la página Eventos One Shot Project</h2>
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
        <?php } ?>


    </div>
    <?php echo $FOOTER ?>