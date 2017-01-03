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
            <h2><?php echo $SessaoTitulo; ?> <small>- <?php echo $SessaoDescricao ?></small>
            </h2>
            <table class=" static">
                <thead>
                    <tr>
                        <th>Hotel</th>
                        <th>Descrição</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Hoteis as $Hotel) { ?>
                        <tr>
                            <td><?php echo $Hotel[Hotel::Nome] ?></td>
                            <td><?php echo(isset($MetaDados['Descricao'])) ? word_limiter($MetaDados['Descricao']) : NULL; ?></td>
                            <td>
                                <button type="button" href="<?php echo site_url("admin/hoteis/editar/{$Hotel[Hotel::Slug]}"); ?>" class="blue  tooltip icon_only div_icon" title="Editar Hotel.">
                                    <div class="ui-icon ui-icon-pencil"></div>
                                </button>
                                <button type="button" href="<?php echo site_url("admin/skins/{$Hotel[Hotel::Slug]}"); ?>" class="orange  tooltip icon_only div_icon" title="ID Visual">
                                    <div class="ui-icon ui-icon-lightbulb"></div>
                                </button>
                                <button type="button" href="<?php echo site_url("admin/hoteis/galerias/{$Hotel[Hotel::Slug]}"); ?>" class="red tooltip icon_only div_icon" title="Galeria">
                                    <div class="ui-icon ui-icon-image"></div>
                                </button>
                                <button type="button" href="<?php echo site_url("admin/staff/galerias/{$Hotel[Hotel::Slug]}"); ?>" class="grey tooltip icon_only div_icon" title="Staff">
                                    <div class="ui-icon ui-icon-person"></div>
                                </button>
                                <button type="button" href="<?php echo site_url("admin/servicios/{$Hotel[Hotel::Slug]}"); ?>" class="black tooltip icon_only div_icon" title="Servicios">
                                    <div class="ui-icon ui-icon-flag"></div>
                                </button>
                                <button type="button" href="<?php echo site_url("admin/mapas/{$Hotel[Hotel::Slug]}"); ?>" class="navy tooltip icon_only div_icon" title="Mapa">
                                    <div class="ui-icon ui-icon-pin-s"></div>
                                </button>
                                <button type="button" href="<?php echo site_url("admin/hoteis/habitaciones/{$Hotel[Hotel::Slug]}"); ?>" class="green tooltip icon_only div_icon" title="Habitaciones">
                                    <div class="ui-icon ui-icon-home"></div>
                                </button>
                                <button class="light  tooltip icon_only div_icon" title="Visualizar Hotel.">
                                    <div class="ui-icon ui-icon-circle-zoomin"></div>
                                </button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>

    <?php echo $FOOTER ?>