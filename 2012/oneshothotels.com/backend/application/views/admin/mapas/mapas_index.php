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
        
         <?php echo (isset($HotelBTN)) ? $HotelBTN : NULL;  ?>

        <div class="box grid_12 imggal">
            <h2 data-toggle-class="imggal" class="box_head grad_green_reverse" style="cursor: pointer;">Registro de puntos de interés.</h2>
            <div class="controls">
                <a href="#" class="toggle"></a>
            </div>
            <div class="toggle_container">
                <div class="block" style="padding: 5px;">
                    <?php echo form_open('admin/mapas/cadastro', array('class' => 'columns'), array(Mapa::Slug => $VinculoPOI)); ?>
                    <!-- INICIO -->
                    <fieldset class="col_33">
                        <label>
                            Titulo
                        </label>
                        <div>
                            <?php echo form_input('Dados[title]'); ?>
                        </div>
                    </fieldset>

                    <fieldset class="col_33">
                        <label>
                            Content
                        </label>
                        <div>
                            <?php echo form_input('Dados[content]'); ?>
                        </div>
                    </fieldset>

                    <fieldset class="col_33">
                        <label>
                            Tipo
                        </label>
                        <div>
                            <?php echo form_dropdown('Dados[group]', $TiposPOI, NULL, 'class="uniform"'); ?>
                        </div>
                    </fieldset>


                    <fieldset class="col_50">
                        <label>
                            Latitude
                        </label>
                        <div>
                            <?php echo form_input('Dados[latitude]'); ?>
                        </div>
                    </fieldset>

                    <fieldset class="col_50">
                        <label>
                            Longitude
                        </label>
                        <div>
                            <?php echo form_input('Dados[longitude]'); ?>
                        </div>
                    </fieldset>

                    <fieldset class="col_50" style="display: none;">
                        <label>
                            Info
                        </label>
                        <div>
                            <?php echo form_input('Dados[info]'); ?>
                        </div>
                    </fieldset>
                    <fieldset class="col_50" style="display: none;">
                        <label>
                            Telefones
                        </label>
                        <div>
                            <?php echo form_input('Dados[telefone]'); ?>
                        </div>
                    </fieldset>

                    <!--BTN-->
                    <div class="button_bar clearfix">
                        <button class="green" type="submit">
                            <img height="24" width="24" alt="registrar" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/bended_arrow_right.png">
                            <span>Registrar</span>
                        </button>

                        <button class="orange send_right " type="reset">
                            <img height="24" width="24" alt="Reset" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/refresh_4.png">
                            <span>Reset</span>
                        </button>

                    </div>
                    <!-- FIM -->
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>

        <div class="box grid_4 csd">
            <h2 data-toggle-class="csd" class="box_head grad_red" style="cursor: pointer;">Regístrese rutas.</h2>
            <div class="controls">
                <a href="#" class="toggle"></a>
            </div>
            <div class="toggle_container">
                <div class="block" style="padding: 5px;">
                    <?php echo form_open('admin/mapas/cadastro/address', array('class' => 'columns'), array(Mapa::Slug => $VinculoPOI)); ?>
                    <fieldset class="col_100">
                        <label>
                            Titulo [EN]
                        </label>
                        <div>
                            <?php echo form_input('Dados[title][EN]'); ?>
                        </div>
                    </fieldset>
                    <fieldset class="col_100">
                        <label>
                            Titulo [ES]
                        </label>
                        <div>
                            <?php echo form_input('Dados[title][ES]'); ?>
                        </div>
                    </fieldset>
                    <fieldset class="col_100">
                        <label>
                            Endereço
                        </label>
                        <div>
                            <?php echo form_input('Dados[address]'); ?>
                        </div>
                    </fieldset>

                    <!--BTN-->
                    <div class="button_bar clearfix">
                        <button class="green" type="submit">
                            <img height="24" width="24" alt="registrar" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/bended_arrow_right.png">
                            <span>Registrar</span>
                        </button>

                        <button class="orange send_right " type="reset">
                            <img height="24" width="24" alt="Reset" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/refresh_4.png">
                            <span>Reset</span>
                        </button>

                    </div>
                    <!-- FIM -->
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>

        <div class="box grid_16 tabs">
            <ul class="tab_header grad_black clearfix">
                <li><a href="#tabs-1">Puntos de interés</a></li>
                <li><a href="#tabs-2">Direcciones</a></li>
            </ul>
            <div class="toggle_container">
                <div id="tabs-1" class="block container_16">
                    <!-- Inicio -->
                    <div class="flat_area grid_16">
                        <h2>Lista de puntos de ruta.</h2>   
                    </div>

                    <!-- Lista-->
                    <?php
                    foreach ($ListaPontosRef as $KeyID => $Ponto) {
                        $Class = "POI{$KeyID}";
                        $Hidden = array(
                            Mapa::ID => $KeyID,
                            Mapa::Slug => $Ponto[Mapa::Slug],
                            'Dados[LOGO]' => $Ponto[Mapa::MetaDados]['LOGO']
                        );
                        ?>
                        <div class="box grid_8 <?php echo $Class; ?>">
                            <h2 data-toggle-class="<?php echo $Class; ?>" class="box_head grad_brown round_all" style="cursor: pointer;"><?php echo $Ponto[Mapa::MetaDados]['title'] ?></h2>
                            <div class="controls">
                                <a href="#" class="toggle"></a>
                            </div>
                            <div class="toggle_container" style="display: none;">
                                <div class="block" style="padding: 5px;">
                                    <?php echo form_open_multipart("admin/mapas/atualizar", 'class="form_validate clearfix "', $Hidden); ?>
                                    <!-- INICIO -->
                                    <fieldset class="col_33">
                                        <label>
                                            Titulo
                                        </label>
                                        <div>
                                            <?php echo form_input('Dados[title]', $Ponto[Mapa::MetaDados]['title']); ?>
                                        </div>
                                    </fieldset>

                                    <fieldset class="col_33">
                                        <label>
                                            Content
                                        </label>
                                        <div>
                                            <?php echo form_input('Dados[content]', $Ponto[Mapa::MetaDados]['content']); ?>
                                        </div>
                                    </fieldset>

                                    <fieldset class="col_33">
                                        <label>
                                            Tipo
                                        </label>
                                        <div>
                                            <?php echo form_dropdown('Dados[group]', $TiposPOI, $Ponto[Mapa::MetaDados]['group'], 'class="uniform"'); ?>
                                        </div>
                                    </fieldset>


                                    <fieldset class="col_50">
                                        <label>
                                            Latitude
                                        </label>
                                        <div>
                                            <?php echo form_input('Dados[latitude]', $Ponto[Mapa::MetaDados]['latitude']); ?>
                                        </div>
                                    </fieldset>

                                    <fieldset class="col_50">
                                        <label>
                                            Longitude
                                        </label>
                                        <div>
                                            <?php echo form_input('Dados[longitude]', $Ponto[Mapa::MetaDados]['longitude']); ?>
                                        </div>
                                    </fieldset>

                                    <fieldset class="col_50">
                                        <label>
                                            Info
                                        </label>
                                        <div>
                                            <?php echo form_input('Dados[info]', $Ponto[Mapa::MetaDados]['info']); ?>
                                        </div>
                                    </fieldset>
                                    <fieldset class="col_50">
                                        <label>
                                            Telefones
                                        </label>
                                        <div>
                                            <?php echo form_input('Dados[telefone]', $Ponto[Mapa::MetaDados]['telefone']); ?>
                                        </div>
                                    </fieldset>
                                    <fieldset class="col_50">
                                        <label>
                                            Foto
                                        </label>
                                        <div>
                                            <?php echo form_upload('LOGO', NULL, ''); ?>
                                        </div>
                                        <div>
                                            W.: 100px / H.: 65px / Max.: 1024 kb
                                        </div>
                                        <div>
                                            <?php echo (empty($Ponto[Mapa::MetaDados]['LOGO'])) ? 'Sem Imagem' : img(array('src'=> PublicDomain . $Ponto[Mapa::MetaDados]['LOGO']))?>
                                        </div>
                                    </fieldset>

                                    <!--BTN-->
                                    <div class="button_bar clearfix">
                                        <button class="green" type="submit">
                                            <img height="24" width="24" alt="registrar" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/bended_arrow_right.png">
                                            <span>Registrar</span>
                                        </button>

                                        <button class="red send_right " type="button"  href="<?php echo site_url("admin/mapas/DELETAR_REGISTRO/{$KeyID}/{$Ponto[Mapa::Slug]}"); ?>">
                                            <img height="24" width="24" alt="Reset" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/bended_arrow_left.png">
                                            <span>*DELETAR*</span>
                                        </button>

                                        <button class="orange send_right " type="reset">
                                            <img height="24" width="24" alt="Reset" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/refresh_4.png">
                                            <span>Reset</span>
                                        </button>

                                    </div>
                                    <!-- FIM -->
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- Fim -->
                </div>
                <div id="tabs-2" class="block">
                    <!-- Inicio -->
                    <div class="flat_area grid_16">
                        <h2>Lista de las direcciones a las rutas.</h2>   
                    </div>
                    <!-- Lista-->
                    <?php foreach ($ListaAddress as $KeyID => $Address) { 
                        $Class = "Address{$KeyID}";
                        $Hidden = array(
                            Mapa::ID => $KeyID,
                            Mapa::Slug => $Address[Mapa::Slug],
                        );?>
                        <div class="box grid_5 <?php echo $Class; ?>">
                            <h2 data-toggle-class="<?php echo $Class; ?>" class="box_head grad_red" style="cursor: pointer;"><?php echo $Address[Mapa::MetaDados]['title']['ES']; ?></h2>
                            <div class="controls">
                                <a href="#" class="toggle"></a>
                            </div>
                            <div class="toggle_container">
                                <div class="block" style="padding: 5px;">
                                    <?php echo form_open('admin/mapas/atualizar/address', array('class' => 'columns'), $Hidden); ?>
                                    <fieldset class="col_100">
                                        <label>
                                            Titulo [EN]
                                        </label>
                                        <div>
                                            <?php echo form_input('Dados[title][EN]',$Address[Mapa::MetaDados]['title']['EN']); ?>
                                        </div>
                                    </fieldset>
                                    <fieldset class="col_100">
                                        <label>
                                            Titulo [ES]
                                        </label>
                                        <div>
                                            <?php echo form_input('Dados[title][ES]',$Address[Mapa::MetaDados]['title']['ES']); ?>
                                        </div>
                                    </fieldset>
                                    <fieldset class="col_100">
                                        <label>
                                            Endereço
                                        </label>
                                        <div>
                                            <?php echo form_input('Dados[address]',$Address[Mapa::MetaDados]['address']); ?>
                                        </div>
                                    </fieldset>

                                    <!--BTN-->
                                    <div class="button_bar clearfix">
                                        <button class="green" type="submit">
                                            <img height="24" width="24" alt="registrar" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/bended_arrow_right.png">
                                            <span>Registrar</span>
                                        </button>
                                        
                                        <button class="red send_right " type="button"  href="<?php echo site_url("admin/mapas/DELETAR_REGISTRO/{$KeyID}/{$Ponto[Mapa::Slug]}"); ?>">
                                            <img height="24" width="24" alt="Reset" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/bended_arrow_left.png">
                                            <span>*DELETAR*</span>
                                        </button>
                                        
                                        <button class="orange send_right " type="reset">
                                            <img height="24" width="24" alt="Reset" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/refresh_4.png">
                                            <span>Reset</span>
                                        </button>

                                    </div>
                                    <!-- FIM -->
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- Fim -->
                </div>
            </div>
        </div>

    </div>

    <?php echo $FOOTER ?>