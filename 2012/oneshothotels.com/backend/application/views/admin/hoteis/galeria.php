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
            <h2><?php echo $SessaoTitulo, ' : ', $HOTEL[Hotel::Nome]; ?> <small>- <?php echo $SessaoDescricao ?></small></h2>
        </div>
        
        <?php echo (isset($HotelBTN)) ? $HotelBTN : NULL;  ?>

        <div class="box grid_16 imggal">
            <h2 data-toggle-class="imggal" class="box_head round_all" style="cursor: pointer;">Regístrese fotos.</h2>
            <div class="controls">
                <a href="#" class="toggle"></a>
            </div>
            <div class="toggle_container" style="display: none;">
                <div class="block" style="padding: 5px;">
                    <?php echo form_open_multipart("admin/galerias/cadastra/{$G_VINCULO}/{$G_SLUG}", 'class="form_validate clearfix formImg "'); ?>
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
                                <input type="file" name="IMAGEM" id="fildDESC" class="uniform"> <br><br><br> Max.: 1Mb /  W.: 400px / H.: 1000px /
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

        <div class="box grid_16" id="ModGaleria">

            <div class="toggle_container">
                <div class="block">

                    <div class="flat_area grid_16">
                        <h3>Imagens</h3> <?php #print_r($Galeria) ; # echo json_encode(array('IMG'=>'http://1.bp.blogspot.com/-ifenRjnUWNc/TMxcV99WE0I/AAAAAAAAALQ/gESqWXBNP40/s1600/czd-2.jpg','DESC'=>'cdz'));                    ?>
                    </div>

                    <div class="grid_16">
                        <div class="isotope_holder indented_area" style="padding: 5px;">
                            <ul class="gallery fancybox delete_buttons clearfix">
                                <?php
                                $defIMG = base_url(THEMEASETS . 'images/IMG/no-image.png');
                                foreach ($Galeria as $Imagem) {
                                    $Dados = json_decode($Imagem[Galeria::MetaDados], TRUE);
                                    $IMG = (isset($Dados['IMG'])) ? PublicDomain . $Dados['IMG'] : $defIMG;
                                    $Titulo = (isset($Dados['TITLE'])) ? $Dados['TITLE'] : 'indefinido';
                                    $DESC = (isset($Dados['DESC'])) ? implode(' * / * ',$Dados['DESC']) : '';
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
                                <?php } ?>
                            </ul>
                        </div>
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


    <?php echo $FOOTER ?>