<?php
echo $HEAD;
$HMetaName = Metadata::MetaDados;
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
        
        <?php echo (isset($HotelBTN)) ? $HotelBTN : NULL;  ?>
        
        <div class="box grid_16"> 
            <?php echo form_open("admin/servicios/info/{$HOTEL[Hotel::Slug]}"); ?>
            <fieldset class="">
                <label>
                    Titulo
                </label>
                <div>
                    <?php echo form_input("{$HMetaName}[TITULO]", $HOTELMETADATA['TITULO']); ?>
                </div>
            </fieldset>
            <fieldset class="">
                <label>
                    Descripción [EN]
                    <span>Descripción de los servicios.</span>
                </label>
                <div>
                    <?php echo form_textarea("{$HMetaName}[DESC][EN]", $HOTELMETADATA['DESC']['EN']); ?>
                </div>
            </fieldset>
            <fieldset class="">
                <label>
                    Descripción [ES]
                    <span>Descripción de los servicios.</span>
                </label>
                <div>
                    <?php echo form_textarea("{$HMetaName}[DESC][ES]", $HOTELMETADATA['DESC']['ES']); ?>
                </div>
            </fieldset>
            <fieldset class="">
                <label>
                    Enlace
                    <span>enlace para la reserva.</span>
                </label>
                <div>
                    <?php echo form_input("{$HMetaName}[LINK]", $HOTELMETADATA['LINK']); ?>
                </div>
            </fieldset>
            <div class="button_bar clearfix">
                <button class="green" type="submit">
                    <img height="24" width="24" alt="registrar" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/bended_arrow_right.png">
                    <span>Confirmar</span>
                </button>
            </div>
            <?php echo form_close(); ?>

        </div>
        <?php
        foreach ($TIPO_SERVICIOS as $TServicio) {
            $MetaName = Servicio::MetaDados;
            if (isset($SERVICIOSDADOS[$TServicio])) {
                $Servicio = $SERVICIOSDADOS[$TServicio];
                $Ativo = $Servicio[Servicio::Ativo];
                $Titulo = $Servicio[$MetaName]['TITULO'];
                $DESC = $Servicio[$MetaName]['DESC'];
                $IMG = $Servicio[$MetaName]['IMG'];
                $LINK = $Servicio[$MetaName]['LINK'];
            } else {
                $Ativo = 'N';
                $DESC = array('EN' => NULL, 'ES' => NULL);
                $IMG = NULL;
                $Titulo = NULL;
                $LINK = NULL;
            }

            $Cor = ($Ativo == 'S') ? 'grad_green' : 'grad_red';
            ?>
            <div class="box grid_8 <?php echo $TServicio; ?>">
                <h2 data-toggle-class="<?php echo $TServicio; ?>" class="box_head <?php echo $Cor; ?> round_all" style="cursor: pointer;"><?php echo strtoupper($TServicio) ?></h2>
                <div class="controls">
                    <a href="#" class="toggle"></a>
                </div>
                <div class="toggle_container" style="display: none;">
                    <?php echo form_open_multipart(NULL, array('class' => ''), array("{$MetaName}[IMG]" => $IMG, Servicio::Slug => $HOTEL[Hotel::Slug], Servicio::Tipo => $TServicio)); ?>
                    <div class="columns clearfix no_lines">
                        <div class="col_40">
                            <fieldset class="">
                                <label>
                                    Ativo?
                                    <span>Determina si el servicio debe aparecer.</span>
                                </label>
                                <div>
                                    <div class="jqui_radios">
                                        <input value="S" type="radio" name="<?php echo Servicio::Ativo ?>" id="yes<?php echo $TServicio, '"', ($Ativo == 'S') ? 'checked="checked' : NULL; ?>"/><label for="yes<?php echo $TServicio ?>">Yes</label>
                                        <input value="N"  type="radio" name="<?php echo Servicio::Ativo ?>" id="no<?php echo $TServicio, '"', ($Ativo == 'N') ? 'checked="checked' : NULL; ?>" /><label for="no<?php echo $TServicio ?>">No</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col_60">
                            <fieldset class="">
                                <label>
                                    Titulo
                                    <span>Título de imagen.</span>
                                </label>
                                <div>
                                    <?php echo form_input("{$MetaName}[TITULO]", $Titulo); ?>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="columns clearfix no_lines">
                        <div class="col_50">
                            <fieldset class="bottom">
                                <label>
                                    Descripción. [EN]
                                    <span>Descripción imagen.</span>
                                </label>
                                <div>
                                    <?php echo form_textarea("{$MetaName}[DESC][EN]", $DESC['EN']); ?>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col_50">
                            <fieldset class="bottom">
                                <label>
                                    Descripción. [ES]
                                    <span>Descripción imagen.</span>
                                </label>
                                <div>
                                    <?php echo form_textarea("{$MetaName}[DESC][ES]", $DESC['ES']); ?>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="columns clearfix no_lines">
                        <fieldset class="">
                            <label>
                                Enlace
                            </label>
                            <div>
                                <?php echo form_input("{$MetaName}[LINK]", $LINK); ?>
                            </div>
                        </fieldset>
                    </div>
                    <div class="columns clearfix no_lines">
                        <div class="col_40">
                            <fieldset class="bottom">
                                <label>
                                    Imagen
                                </label>
                                <div>
                                    <?php echo form_upload(array('name' => 'IMAGEM', 'class' => 'uniform')); ?>
                                    <br><br><br><br>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col_60">
                            <?php
                            echo (empty($IMG)) ? 'Sem imagem' : img(array(
                                        'src' => PublicDomain . $IMG,
                                        'style' => 'margin: auto auto; display: block',
                                        'width' => '100%'
                                    ));
                            ?>                            
                        </div>
                    </div>

                    <div class="button_bar clearfix">
                        <button class="green" type="submit">
                            <img height="24" width="24" alt="registrar" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/bended_arrow_right.png">
                            <span>Confirmar</span>
                        </button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        <?php } ?>

        <?php echo $FOOTER ?>
