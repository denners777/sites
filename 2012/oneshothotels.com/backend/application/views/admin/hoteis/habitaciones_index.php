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
        <?php echo (isset($HotelBTN)) ? $HotelBTN : NULL; ?>

        <div class="block box grid_16">
            <table class=" static">
                <thead>
                    <tr>
                        <th><b>Habitacione</b></th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ListaHabitaciones as $Habitacione) { ?>
                        <tr>
                            <td><?php echo strtoupper($Habitacione); ?></td>
                            <td>
                                <button type="button" href="<?php echo site_url("admin/hoteis/habitaciones/{$Hotel[Hotel::Slug]}/{$Habitacione}"); ?>" class="blue  tooltip icon_only div_icon" title="Editar Habitacione.">
                                    <div class="ui-icon ui-icon-pencil"></div>
                                </button>
                                <?php
                                if (isset($HabitacionesHotel[$Habitacione])) {
                                    if ($HabitacionesHotel[$Habitacione][Habitacione::Ativo] == 'S') {
                                        ?>
                                        <button type="button" class="green icon_only div_icon tooltip" href="<?php echo site_url("admin/hoteis/habitaciones/{$Hotel[Hotel::Slug]}/{$Habitacione}/N"); ?>" title="Desativar">
                                            <div class="ui-icon ui-icon-check"></div>
                                        </button>
                                    <?php } else { ?>
                                        <button type="button" class="red icon_only div_icon tooltip" href="<?php echo site_url("admin/hoteis/habitaciones/{$Hotel[Hotel::Slug]}/{$Habitacione}/S"); ?>" title="Ativar">
                                            <div class="ui-icon ui-icon-check"></div>
                                        </button>
                                    <?php }
                                }
                                ?>
                            </td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table></div>


    </div>

<?php echo $FOOTER ?>