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
                    <?php echo form_open_multipart('admin/prensas/cadastro', 'class="form_validate clearfix "'); ?>
                    <fieldset class="">
                        <label>
                            Título del Archivo
                            <span>Introduzca el título del archivo.</span>
                        </label>
                        <div>
                            <input required="" type="text" name="<?php echo Prensa::Titulo ?>" id="" placeholder="Introduzca el título del archivo.">
                        </div>
                    </fieldset>
                    <fieldset class="">
                        <label>
                            Data del Archivo
                            <span>Introduzca la fecha de archivo.</span>
                        </label>
                        <div>
                            <input style="width: 50px;" required="" class="datepicker" type="text" name="<?php echo Prensa::Data ?>" id="" placeholder="Introduzca la fecha de archivo.">
                        </div>
                    </fieldset>
                    <div class="columns clearfix">
                        <fieldset class="col_50">
                            <label>
                                Descripción.[EN]
                            </label>
                            <div>
                                <?php echo form_textarea(Prensa::Dados . '[DESC][EN]'); ?>
                            </div>
                        </fieldset>
                        <fieldset class="col_50">
                            <label>
                                Descripción.[ES]
                            </label>
                            <div>
                                <?php echo form_textarea(Prensa::Dados . '[DESC][ES]'); ?>
                            </div>
                        </fieldset>
                    </div>

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
            <h2>Lista de prensa</h2>   
        </div>
        <?php
        foreach ($PRENSALISTA as $Prensa) {
            $Class = "Prensa{$Prensa[Prensa::ID]}";
            $Hidden = array(
                Prensa::ID => $Prensa[Prensa::ID],
                Prensa::Imagem => $Prensa[Prensa::Imagem],
                Prensa::Arquivo => $Prensa[Prensa::Arquivo]
            );
            ?>
            <div class="box grid_8 <?php echo $Class; ?>">
                <h2 data-toggle-class="<?php echo $Class; ?>" class="box_head grad_brown round_all" style="cursor: pointer;"><?php echo $Prensa[Prensa::Titulo] ?></h2>
                <div class="controls">
                    <a href="#" class="toggle"></a>
                </div>
                <div class="toggle_container" style="display: none;">
                    <div class="block" style="padding: 5px;">
                        <?php echo form_open_multipart("admin/prensas/atualizar/{$Prensa[Prensa::ID]}", 'class="form_validate clearfix "',$Hidden); ?>
                        <fieldset class="">
                            <label>
                                Título del Archivo
                                <span>Introduzca el título del archivo.</span>
                            </label>
                            <div>
                                <input required="" type="text" value="<?php echo $Prensa[Prensa::Titulo] ?>" name="<?php echo Prensa::Titulo ?>" id="" placeholder="Introduzca el título del archivo.">
                            </div>
                        </fieldset>
                        <fieldset class="">
                            <label>
                                Data del Archivo
                                <span>Introduzca la fecha de archivo.</span>
                            </label>
                            <div>
                                <input style="width: 50px;"  value="<?php echo $Prensa[Prensa::Data] ?>" required="" class="datepicker" type="text" name="<?php echo Prensa::Data ?>" id="" placeholder="Introduzca la fecha de archivo.">
                            </div>
                        </fieldset>
                        <div class="columns clearfix">
                            <fieldset class="col_50">
                                <label>
                                    Descripción.[EN]
                                </label>
                                <div>
                                    <?php echo form_textarea(Prensa::Dados . '[DESC][EN]', $Prensa[Prensa::Dados]['DESC']['EN']); ?>
                                </div>
                            </fieldset>
                            <fieldset class="col_50">
                                <label>
                                    Descripción.[ES]
                                </label>
                                <div>
                                    <?php echo form_textarea(Prensa::Dados . '[DESC][ES]', $Prensa[Prensa::Dados]['DESC']['ES']); ?>
                                </div>
                            </fieldset>
                        </div>

                        <div class="columns clearfix">
                            <fieldset class="col_50">
                                <label>
                                    Foto
                                </label>
                                <div>
                                    <?php echo form_upload(Prensa::Imagem, NULL, ''); ?>
                                </div>
                                <div>
                                    W.: 160px / H.: 180px / Max.: 1024 kb
                                </div>
                                <div>
                                    <?php echo (empty($Prensa[Prensa::Imagem])) ? 'Sem Imagem' : img(array('width'=>'100%','src'=> PublicDomain . $Prensa[Prensa::Imagem]))?>
                                </div>
                            </fieldset>
                            <fieldset class="col_50">
                                <label>
                                    PDF
                                </label>
                                <div>
                                    <?php echo form_upload(Prensa::Arquivo, NULL, ''); ?>
                                </div>
                                 <div>
                                   Max.: 1024 kb
                                </div>
                                <div>
                                    <?php echo (empty($Prensa[Prensa::Arquivo])) ? 'Sem Arquivo' : anchor(PublicDomain . $Prensa[Prensa::Arquivo],'VER PDF'); ;?>
                                </div>
                            </fieldset>
                        </div>

                        <div class="button_bar clearfix">
                            <button class="green" type="submit">
                                <img height="24" width="24" alt="registrar" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/bended_arrow_right.png">
                                <span>Registrar</span>
                            </button>

                            <button class="red send_right " type="button"  href="<?php echo site_url("admin/prensas/DELETAR_REGISTRO/{$Prensa[Prensa::ID]}"); ?>">
                                <img height="24" width="24" alt="Reset" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/bended_arrow_left.png">
                                <span>*DELETAR*</span>
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