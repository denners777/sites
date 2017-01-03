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
            <h2><?php echo $SessaoTitulo; ?> <small>- <?php echo $SessaoDescricao; //print_r($HABITACIONE);              ?></small></h2>
        </div>

        <?php echo (isset($HotelBTN)) ? $HotelBTN : NULL; ?>

        <div class="box grid_16">
            <div class="toggle_container">
                <div class="block">
                    <?php echo form_open_multipart(NULL, array('class' => 'validate_form'), array('CAPA' => $HABITACIONE['CAPA'])); ?>
                    <fieldset class="label_side top">
                        <label for="Titulo">
                            titulo [EN]
                            <span>Titulo a ser apresentado no detalhe do quarto.</span>
                        </label>
                        <div>
                            <?php echo form_input('TITULO[EN]', $HABITACIONE['TITULO']['EN']); ?>
                        </div>
                    </fieldset>
                     <fieldset class="label_side top">
                        <label for="Titulo">
                            titulo [ES]
                            <span>Titulo a ser apresentado no detalhe do quarto.</span>
                        </label>
                        <div>
                            <?php echo form_input('TITULO[ES]', $HABITACIONE['TITULO']['ES']); ?>
                        </div>
                    </fieldset>
                    
                    <fieldset class="label_side top">
                        <label for="DESC">
                            descripción [EN]
                            <span>Descripción de la habitación. [Inglés]</span>
                        </label>
                        <div>
                            <?php echo form_textarea('DESC[EN]', $HABITACIONE['DESC']['EN']); ?>
                        </div>
                    </fieldset>
                    
                    
                    
                    <fieldset class="label_side top">
                        <label for="DESC">
                            descripción [ES]
                            <span>Descripción de la habitación. [Español]</span>
                        </label>
                        <div>
                            <?php echo form_textarea('DESC[ES]', $HABITACIONE['DESC']['ES']); ?>
                        </div>
                    </fieldset>
                    
                    
                    
                    <fieldset class="label_side top">
                        <label for="DESC">
                            descripción [INDEX][ES]
                            <span>Descripción de la habitación. [Español]</span>
                        </label>
                        <div>
                            <?php echo form_textarea('INDEXDESC[ES]', $HABITACIONE['INDEXDESC']['ES']); ?>
                        </div>
                    </fieldset>
                    
                    <fieldset class="label_side top">
                        <label for="DESC">
                            descripción [INDEX][EN]
                            <span>Descripción de la habitación. [Inglés]</span>
                        </label>
                        <div>
                            <?php echo form_textarea('INDEXDESC[EN]', $HABITACIONE['INDEXDESC']['EN']); ?>
                        </div>
                    </fieldset>
                    
                    
                    
                    <fieldset class="label_side top">
                        <label for="LINK">
                            link
                            <span>Link (url) para las reservas.</span>
                        </label>
                        <div>
                            <?php echo form_input('LINK', $HABITACIONE['LINK']); ?>
                        </div>
                    </fieldset>
                    <fieldset class="label_side top">
                        <label>
                            Arquivo de imagem.
                            <span></span>
                        </label>
                        <div>
                            <input type="file" name="IMAGEM" id="fildDESC" class="uniform"> <br><br><br> Max.: 1Mb / W.: 870px / H.: 370px 
                        </div>
                    </fieldset>
                    <fieldset class="label_side top">
                        <?php
                        if (empty($HABITACIONE['CAPA'])) {
                            echo 'Sem Imagem';
                        } else {
                            echo img(PublicDomain . $HABITACIONE['CAPA']);
                        }
                        ?>

                    </fieldset>
                    <div class="button_bar clearfix">
                        <button class="green" type="submit">
                            <img height="24" width="24" alt="registrar" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/bended_arrow_right.png">
                            <span>Registrar</span>
                        </button>

                        <button class="red send_right " type="button"  href="<?php echo site_url("admin/hoteis/habitaciones/{$SLUG}/"); ?>">
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


        <div class="box grid_16 imggal ">
            <h2 data-toggle-class="imggal" class="box_head round_all" style="cursor: pointer;">Regístrese fotos.</h2>
            <div class="controls">
                <a href="#" class="toggle closed"></a>
            </div>
            <div class="toggle_container" style="display: none;">
                <div class="block" style="padding: 5px;">
                    <?php echo form_open_multipart($LinkCadGaleria, 'class="form_validate clearfix formImg "'); ?>
                    <fieldset class="">
                        <label>
                            Título de imagen.
                            <span>Introduzca el título de la fotografía.</span>
                        </label>
                        <div>
                            <input required="" type="text" name="TITLE" id="inputTitulo" placeholder="Introduzca el título de la fotografía.">
                        </div>
                    </fieldset>

                    <fieldset class="">
                        <label>
                            Descripción [EN].
                            <span>Descripción / Texto alternativo. [Inglés]</span>
                        </label>
                        <div>
                            <textarea placeholder="Descripción / Texto alternativo. [Inglés]" name="DESC[EN]" id="fildDESC"></textarea>
                        </div>
                    </fieldset>
                    <fieldset class="">
                        <label>
                            Descripción [ES].
                            <span>Descripción / Texto alternativo. [Español]</span>
                        </label>
                        <div>
                            <textarea placeholder="Descripción / Texto alternativo. [Español]" name="DESC[ES]" id="fildDESC"></textarea>
                        </div>
                    </fieldset>
                    <div class="col_50">
                        <fieldset class="label_side">
                            <label>
                                Arquivo de imagem.
                                <span></span>
                            </label>
                            <div>
                                <input type="file" name="IMAGEM" id="fildDESC" class="uniform"> <br><br><br> Max.: 1Mb / W.: 400px / H.: 1000px 
                            </div>
                        </fieldset>
                    </div>

                    <div class="col_50">
                        <fieldset class="label_side">

                            <div style="height: 48px;">
                                <button class="navy no_margin_bottom">
                                    <div class="ui-icon ui-icon-check"></div>
                                    <span>Enviar</span>
                                </button>
                            </div>
                        </fieldset>
                    </div>

                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>

        <div class="box grid_16 imgslider ">
            <h2 data-toggle-class="imgslider" class="box_head round_all" style="cursor: pointer;">Regístrese slider.</h2>
            <div class="controls">
                <a href="#" class="toggle closed"></a>
            </div>
            <div class="toggle_container" style="display: none;">
                <div class="block" style="padding: 5px;">
                    <?php echo form_open_multipart($LinkCadSlider, 'class="form_validate clearfix formImg "'); ?>
                    <fieldset class="">
                        <label>
                            Título de imagen.
                            <span>Introduzca el título de la fotografía.</span>
                        </label>
                        <div>
                            <input required="" type="text" name="TITLE" id="inputTitulo" placeholder="Introduzca el título de la fotografía.">
                        </div>
                    </fieldset>

                    <fieldset class="">
                        <label>
                            Descripción [EN].
                            <span>Descripción / Texto alternativo. [Inglés]</span>
                        </label>
                        <div>
                            <textarea placeholder="Descripción / Texto alternativo. [Inglés]" name="DESC[EN]" id="fildDESC"></textarea>
                        </div>
                    </fieldset>
                    <fieldset class="">
                        <label>
                            Descripción [ES].
                            <span>Descripción / Texto alternativo. [Español]</span>
                        </label>
                        <div>
                            <textarea placeholder="Descripción / Texto alternativo. [Español]" name="DESC[ES]" id="fildDESC"></textarea>
                        </div>
                    </fieldset>
                    <div class="col_50">
                        <fieldset class="label_side">
                            <label>
                                Arquivo de imagem.
                                <span></span>
                            </label>
                            <div>
                                <input type="file" name="IMAGEM" id="fildDESC" class="uniform"> <br><br><br> Max.: 1Mb / W.: 400px / H.: 1000px 
                            </div>
                        </fieldset>
                    </div>

                    <div class="col_50">
                        <fieldset class="label_side">

                            <div style="height: 48px;">
                                <button class="navy no_margin_bottom">
                                    <div class="ui-icon ui-icon-check"></div>
                                    <span>Enviar</span>
                                </button>
                            </div>
                        </fieldset>
                    </div>

                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>



        <div class="box grid_16 tabs" style="margin-top: 25px;">
            <ul class="tab_header clearfix">
                <li><a href="#tabs-1">Galeria de Fotos</a></li>
                <li><a href="#tabs-2">Photo Slide</a></li>
            </ul>
            <div class="controls">
                <!--                <a href="#" class="grabber"></a>-->
                <a href="#" class="toggle"></a>
                <a href="#" class="show_all_tabs"></a>
            </div>
            <div class="toggle_container">
                <div id="tabs-1" class="block">
                    <div class="section">

                        <div class="isotope_holder indented_area" style="padding: 5px;">
                            <ul class="gallery fancybox delete_buttons clearfix">
                                <?php
                                $defIMG = base_url(THEMEASETS . 'images/IMG/no-image.png');
                                foreach ($Galeria['IMAGENS'] as $Imagem) {
                                    $Dados = json_decode($Imagem[Galeria::MetaDados], TRUE);
                                    $IMG = (isset($Dados['IMG'])) ? PublicDomain . $Dados['IMG'] : $defIMG;
                                    $Titulo = (isset($Dados['TITLE'])) ? $Dados['TITLE'] : 'indefinido';
                                    $DESC = (isset($Dados['DESC'])) ? implode(' * / * ', $Dados['DESC']) : '';
                                    ?>
                                    <li>
                                        <a rel="collection" class="no_loading" href="<?php echo $IMG; ?>">
                                            <dl style="display: none">
                                                <post><?php echo site_url("admin/{$Imagem[Galeria::Vinculo]}/{$Imagem[Galeria::Slug]}"); ?></post>
                                                <vinculo><?php echo $Imagem[Galeria::Vinculo]; ?></vinculo>
                                                <slug><?php echo $Imagem[Galeria::Slug]; ?></slug>
                                                <id><?php echo $Imagem[Galeria::ID]; ?></id>
                                                <DELETAR><?php echo site_url("admin/galerias/deletar/{$Imagem[Galeria::ID]}"); ?></DELETAR>
                                                <titulo><?php echo $Titulo; ?></titulo>
                                                <IMG><?php echo $IMG; ?></IMG>
                                                <DESC><?php echo $DESC; ?></DESC>
                                            </dl>
                                            <img src="<?php echo $IMG; ?>" title="<?php echo $DESC ?>"/>
                                            <span class="name sort_1"><?php echo $Titulo; ?></span>
                                            <span class="size sort_2"></span>
                                        </a>
                                    </li>
                                    <?php
                                    unset($Imagem);
                                }
                                ?>
                            </ul>
                        </div>   
                    </div>
                </div>
                <div id="tabs-2" class="block">
                    <div class="section">

                        <div class="isotope_holder indented_area" style="padding: 5px;">
                            <ul class="gallery fancybox delete_buttons clearfix">
                                <?php
                                $defIMG = base_url(THEMEASETS . 'images/IMG/no-image.png');
                                foreach ($Galeria['SLIDER'] as $Imagem) {
                                    $Dados = json_decode($Imagem[Galeria::MetaDados], TRUE);
                                    $IMG = (isset($Dados['IMG'])) ? PublicDomain . $Dados['IMG'] : $defIMG;
                                    $Titulo = (isset($Dados['TITLE'])) ? $Dados['TITLE'] : 'indefinido';
                                    $DESC = (isset($Dados['DESC'])) ? implode(' * / * ', $Dados['DESC']) : '';
                                    ?>
                                    <li>
                                        <a rel="collection" class="no_loading" href="<?php echo $IMG; ?>">
                                            <dl style="display: none">
                                                <post><?php echo site_url("admin/{$Imagem[Galeria::Vinculo]}/{$Imagem[Galeria::Slug]}"); ?></post>
                                                <vinculo><?php echo $Imagem[Galeria::Vinculo]; ?></vinculo>
                                                <slug><?php echo $Imagem[Galeria::Slug]; ?></slug>
                                                <id><?php echo $Imagem[Galeria::ID]; ?></id>
                                                <DELETAR><?php echo site_url("admin/galerias/deletar/{$Imagem[Galeria::ID]}"); ?></DELETAR>
                                                <titulo><?php echo $Titulo; ?></titulo>
                                                <IMG><?php echo $IMG; ?></IMG>
                                                <DESC><?php echo $DESC; ?></DESC>
                                            </dl>
                                            <img src="<?php echo $IMG; ?>" title="<?php echo $DESC ?>"/>
                                            <span class="name sort_1"><?php echo $Titulo; ?></span>
                                            <span class="size sort_2"></span>
                                        </a>
                                    </li>
                                    <?php
                                    unset($Imagem);
                                }
                                ?>
                            </ul>
                        </div>   
                    </div>


                </div>
            </div>


        </div>
        <div class="display_none">						
            <div id="dialog_delete" class="dialog_content narrow no_dialog_titlebar" title="Delete Confirmation">
                <div class="block">
                    <div class="section">
                        <h1>Eliminar archivo</h1>
                        <div class="dashed_line"></div>	
                        <p>Por favor confirme que desea eliminar este archivo.</p>
                    </div>
                    <div class="button_bar clearfix">
                        <button class="delete_confirm dark red no_margin_bottom close_dialog">
                            <div class="ui-icon ui-icon-check"></div>
                            <span>Eliminar</span>
                        </button>
                        <button class="light send_right close_dialog">
                            <div class="ui-icon ui-icon-closethick"></div>
                            <span>Cancelar</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $FOOTER?>