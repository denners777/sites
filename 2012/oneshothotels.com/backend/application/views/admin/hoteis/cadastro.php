<?php
echo $HEAD;
$Path = 'assets/adminica/';
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

        <div class="box grid_16">
            <!--  -->
            <div class="toggle_container">
                <div class="block">
                    <?php echo form_open('admin/hoteis/cadastro', array('class' => 'validate_form')) ?>
                    <?php
                    foreach ($CamposPadrao as $Campo) {
                       $SLUG = $Campo['slug'];
                       include('form_add_adit.php');
                    } ?>
                    
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
                    </form>
                </div>
            </div>
            <!--  -->
        </div>

    </div>
<?php echo $FOOTER ?>