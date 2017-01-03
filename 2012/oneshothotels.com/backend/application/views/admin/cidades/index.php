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
            <h2><?php echo $SessaoTitulo; ?> <small>- <?php echo $SessaoDescricao ?></small>
            </h2>
                <table class=" static">
                    <thead>
                        <tr>
                            <th>Cidade</th>
                            <th>Descrição</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($Cidades as $Cidade) {
                            $MetaDados = json_decode($Cidade[Cidade::MetaDados],TRUE);
                            ?>
                            <tr>
                                <td><?php echo $Cidade[Cidade::Nome] ?></td>
                                <td><?php echo(isset($MetaDados['Descricao'])) ? word_limiter($MetaDados['Descricao']) : NULL ; ?></td>
                                <td>
                                    <button type="button" href="<?php echo site_url("admin/cidades/editar/{$Cidade[Cidade::Slug]}"); ?>" class="blue small tooltip icon_only div_icon" title="Editar cidade.">
                                        <div class="ui-icon ui-icon-pencil"></div>
                                    </button>
                                    <button type="button" href="<?php echo site_url("admin/eventos/{$Cidade[Cidade::Slug]}"); ?>" class="green small tooltip icon_only div_icon" title="Eventos.">
                                        <div class="ui-icon ui-icon-calendar"></div>
                                    </button>
                                    <button type="button" href="<?php echo site_url("{$Cidade[Cidade::Slug]}"); ?>" class="light small tooltip icon_only div_icon" title="Visualizar cidade.">
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