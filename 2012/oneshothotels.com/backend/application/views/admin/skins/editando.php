<?php echo $HEAD; ?>
<div id="pjax">
    <div id="wrapper" data-adminica-nav-top="1" data-adminica-side-top="1">
        <?php echo $STACKBAR; ?>
    </div><!-- Closing Div for Stack Nav, you can boxes under the stack before this -->

    <div id="main_container" class="main_container container_16 clearfix">
        <div class="flat_area grid_16">
            <?php echo $ALERTAS ?>
            <h2><?php echo $SessaoTitulo; ?> <small>- <?php echo $SessaoDescricao ?></small> </h2>
        </div>

        <?php echo (isset($HotelBTN)) ? $HotelBTN : NULL; ?>


        <!--TABS-->
        <div class="box container_16 tabs">
            <ul class="tab_header clearfix">
                <li><a href="#tabs-1">Inglés</a></li>
                <li><a href="#tabs-2">Español</a></li>
            </ul>

            <div class="toggle_container"> 
                <!--TAB1-->
                <div id="tabs-1" class="block">
                    <!--INICIO-->
                    <div class="grid_16" style="padding-top: 10px;">

                        <div class="isotope_holder indented_area" style="padding-top: 5px;">
                            <ul class="gallery clearfix"> 
                                <?php
                                foreach ($FILES as $Slug => $Arq) {
                                    $post = site_url("admin/skins/add/{$HotelSlug}/{$Slug}/EN");
                                    $info = "Nome: {$Arq['label']} <br>";
                                    $info .= "Tipo de Arquivo: {$Arq['config']['allowed_types']} <br>";
                                    $info .= "Tamanho maximo: {$Arq['config']['max_size']} <br>";
                                    $info .= "Dimeções maximas: {$Arq['config']['max_width']}px x {$Arq['config']['max_height']}px <br>";
                                    $imagem = (isset($Skins['EN'][$Slug])) ? PublicDomain . $Skins['EN'][$Slug][Skin::MetaDados] : NULL;
                                    ?>
                                    <li>
                                        <a rel="collection"  class="no_loading open_dialog_edit dialog_button" href="javascript:;" data-dialog="dialog_edit">
                                            <dl style="display: none">
                                                <post><?php echo $post; ?></post>
                                                <info><?php echo $info; ?></info>
                                                <imagem><?php echo $imagem; ?></imagem>
                                                <idioma>EN</idioma>
                                            </dl>
                                            <?php echo (is_null($imagem)) ? img(THEMEASETS . 'images/IMG/no-image.png') : img($imagem); ?>
                                            <span class="name"><?php echo $Arq['label']; ?></span>
                                            <span class="size">Inglés</span>
                                        </a>

                                    </li>
                                <?php } ?>
                            </ul>

                        </div>

                    </div>
                    <!--FIM-->
                </div>
                <!--FIM TAB2-->
                <!--TAB1-->
                <div id="tabs-2" class="block">
                    <!--INICIO-->
                    <div class="grid_16" style="padding-top: 10px;">

                        <div class="isotope_holder indented_area"  style="padding-top: 5px;">
                            <ul class="gallery clearfix"> 
                                <?php
                                foreach ($FILES as $Slug => $Arq) {
                                    $post = site_url("admin/skins/add/{$HotelSlug}/{$Slug}/ES");
                                    $info = "Nome: {$Arq['label']} <br>";
                                    $info .= "Tipo de Arquivo: {$Arq['config']['allowed_types']} <br>";
                                    $info .= "Tamanho maximo: {$Arq['config']['max_size']} <br>";
                                    $info .= "Dimeções maximas: {$Arq['config']['max_width']}px x {$Arq['config']['max_height']}px <br>";
                                    $imagem = (isset($Skins['ES'][$Slug])) ? PublicDomain . $Skins['ES'][$Slug][Skin::MetaDados] : NULL;
                                    ?>
                                    <li>
                                        <a rel="collection"  class="no_loading open_dialog_edit dialog_button" href="javascript:;" data-dialog="dialog_edit">
                                            <dl style="display: none">
                                                <post><?php echo $post; ?></post>
                                                <info><?php echo $info; ?></info>
                                                <imagem><?php echo $imagem; ?></imagem>
                                            </dl>
                                            <?php echo (is_null($imagem)) ? img(THEMEASETS . 'images/IMG/no-image.png') : img($imagem); ?>
                                            <span class="name"><?php echo $Arq['label']; ?></span>
                                            <span class="size">Español</span>
                                        </a>

                                    </li>
                                <?php } ?>
                            </ul>
                        </div>

                    </div>
                    <!--FIM-->
                </div>
                <!--FIM TAB2-->
            </div>

        </div>
        <!--FIM TABS-->

    </div>

    <!--FIM PJAX-->
</div>

<div class="display_none">
    <div id="dialog_edit" class="dialog_content" title="Enviar imagen.">
        <?php echo form_open_multipart(NULL, array('class' => 'block')) ?>
        <div class="section">

        </div>
        <input type="hidden" name="IMAGEM" >
        <fieldset class="label_side top">
            <label>Archivo de imagen.</label>
            <div>
                <input type="file" name="IMAGEM" class="uniform">
            </div>
        </fieldset>
        <div class="button_bar clearfix">

            <input type="submit" class="button btn green" value="Enviar">

            <button class="dark red close_dialog">
                <div class="ui-icon ui-icon-closethick"></div>
                <span>Cancelar</span>
            </button>
        </div>
        </form>
    </div>
</div>
<?php echo $FOOTER; ?>