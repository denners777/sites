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
            <h2><?php echo $SessaoTitulo; ?> <small>- <?php echo $SessaoDescricao ?></small> </h2>
        </div>

        <?php echo (isset($HotelBTN)) ? $HotelBTN : NULL; ?>

        <div class="box grid_16">
            <!--  -->
            <div class="toggle_container">
                <div class="block">
                    <?php echo form_open('admin/hoteis/editar', array('class' => 'validate_form'), array(Hotel::ID => $Hotel[Hotel::ID], Hotel::Slug => $Hotel[Hotel::Slug])) ?>
<!--                    <h2 class="section">Cadastro de Cidade <small>Formulário de cadastro de cidades</small></h2>-->

                    <fieldset class="label_side">
        				<label>Status</label>
    					<div>
    						<div class="jqui_radios">
    							<input type="radio" value='1' <?php echo ($Hotel[Hotel::Status]==1) ? 'checked="checked"' : NULL ; ?> name="<?php echo Hotel::Status ?>" id="yes5"/><label for="yes5">Ativo</label>
    							<input type="radio" value='0' <?php echo ($Hotel[Hotel::Status]==0) ? 'checked="checked"' : NULL ; ?> name="<?php echo Hotel::Status ?>" id="no5"/><label for="no5">Inativo</label>																												</div>
    					</div>
					</fieldset>
                    <?php
                    foreach ($CamposPadrao as $Campo) {
                        $SLUG = $Campo['slug'];
                        $Valor = $Hotel[$SLUG];
                        include('form_add_adit.php');
                        unset($SLUG, $Valor);
                    }
?>
                    <fieldset class="">
                        <label>
                            Color [ID Visual]
                            <span>El color en hexadecimal con #</span>
                        </label>
                        <div>
                            <input type="text" name="<?php echo Hotel::MetaDados ?>[COLOR]" value="<?php echo (isset($Hotel[Hotel::MetaDados]['COLOR'])) ? $Hotel[Hotel::MetaDados]['COLOR'] : NULL; ?>" class="colorpicker_input">
                        </div>
                    </fieldset>
                    <?php
                    foreach ($CamposExtras as $Campo) {
                        $SLUG = Hotel::MetaDados . "[{$Campo['slug']}]";
                        $Valor = (isset($Hotel[Hotel::MetaDados][$Campo['slug']])) ? $Hotel[Hotel::MetaDados][$Campo['slug']] : NULL;
                        include('form_add_adit.php');
                        unset($SLUG, $Valor);
                    }
                    ?>

                    
                    <div class="grid_16">
                        <div class="isotope_holder indented_area">
                            <ul class="gallery clearfix"> 
                                <?php
                                foreach ($Imagens as $SLUG => $Foto) {
                                    $IMG = (isset($MetaDados[$SLUG]['IMAGEM'])) ? $MetaDados[$SLUG]['IMAGEM'] : NULL;
                                    /* @var $LINKUrl type string */
                                    $LINKUrl = (isset($MetaDados[$SLUG]['URL'])) ? $MetaDados[$SLUG]['URL'] : NULL;
                                    /* @var $DESC type string */
                                    $DESC = (isset($MetaDados[$SLUG]['DESC'])) ? $MetaDados[$SLUG]['DESC'] : array('EN' => NULL, 'ES' => NULL);
                                    ;
                                    $Descricao = "Nome: {$Foto['label']} <br>";
                                    $Descricao .= "Tipo de Arquivo: {$Foto['config']['allowed_types']} <br>";
                                    $Descricao .= "Tamanho maximo: {$Foto['config']['max_size']} <br>";
                                    $Descricao .= "Dimeções maximas: {$Foto['config']['max_width']}px x {$Foto['config']['max_height']}px <br>";
                                    
                                    if($Foto['config']['allowed_types']=='pdf'){
                                        $exibeImagem = base_url(THEMEASETS . 'images/IMG/pdf.png');
                                    }else{
                                        $exibeImagem = (is_null($IMG)) ? base_url(THEMEASETS . 'images/IMG/no-image.png') : PublicDomain . $IMG;;
                                    }
                                    ?>
                                    <li class="blue">
                                        <a rel="collection"  class="no_loading open_dialog_edit dialog_button" href="javascript:;" data-dialog="dialog_edit">
                                            <dl style="display: none">
                                                <post><?php echo site_url('admin/hoteis/uploadImagem/' . $SLUG . '/' . $Hotel[Hotel::Slug] . '/add'); ?></post>
                                                <url><?php echo $LINKUrl; ?></url>
                                                <info><?php echo $Descricao; ?></info>
                                                <desk_en><?php echo $DESC['EN']; ?></desk_en>
                                                <desk_es><?php echo $DESC['ES']; ?></desk_es>
                                                <imagem><?php echo $IMG; ?></imagem>
                                            </dl>
                                            <img src="<?php echo $exibeImagem; ?>"/>
                                            <span class="name"><?php echo $Foto['label']; ?></span>
                                            <span class="size"><?php echo $LINKUrl; ?></span></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>

                    <div class="button_bar clearfix">
                        <button class="green" type="submit">
                            <img height="24" width="24" alt="Cadastrar" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/bended_arrow_right.png">
                            <span>Atualizar</span>
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
                    </form>
                </div>
            </div>
            <!--  -->
        </div>

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

            <fieldset class="label_side">
                <label>Descripción. [EN]<span>El texto alternativo o descripción de la imagen.</span></label>
                <div class="clearfix">
                    <textarea name="DESC[EN]" id="D_EN" class="" rows="10"></textarea>
                </div>
            </fieldset>
            <fieldset class="label_side">
                <label>Descripción. [ES]<span>El texto alternativo o descripción de la imagen.</span></label>
                <div class="clearfix">
                    <textarea name="DESC[ES]" id="D_ES" class="" rows="10"></textarea>
                </div>
            </fieldset>
            <fieldset class="label_side">
                <label>enlace<span>URL de destino de la imagen.</span></label>
                <div>
                    <input name="URL" type="text" class="uniform">
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