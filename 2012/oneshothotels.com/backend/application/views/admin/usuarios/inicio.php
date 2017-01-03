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
        </div>

        <div class="box grid_16 imggal">
            <h2 data-toggle-class="imggal" class="box_head round_all grad_grey_dark" style="cursor: pointer;">Cadastro de Usuários</h2>
            <div class="controls">
                <a href="#" class="toggle"></a>
            </div>
            <div class="toggle_container" style="display: none;">
                <div class="block" style="padding: 5px;">
                    <?php echo form_open('admin/usuarios/cadastro', 'class="columns"'); ?>
                    <fieldset class="col_33">
                        <label>
                            Nome
                        </label>
                        <div>
                            <?php echo form_input(Usuario::Nome); ?>
                        </div>
                    </fieldset>

                    <fieldset class="col_33">
                        <label>
                            Email
                        </label>
                        <div>
                            <?php echo form_input(Usuario::Email); ?>
                        </div>
                    </fieldset>

                    <fieldset class="col_33">
                        <label>
                            Usuário
                        </label>
                        <div>
                            <?php echo form_input(Usuario::Apelido); ?>
                        </div>
                    </fieldset>
                    <fieldset class="col_50">
                        <label>
                            Administrador
                        </label>
                        <div class="inline uniform  clearfix">
                            <label for="no1b"><input type="radio" value="0" checked="checked" name="<?php echo Usuario::PERFIL; ?>" id="no1b"/>No</label>
                            <label for="yes1b"><input type="radio" value="1"  name="<?php echo Usuario::PERFIL; ?>" id="yes1b"/>Yes</label>
                        </div>
                    </fieldset>


                    <div class="button_bar clearfix">
                        <button class="green" type="submit">
                            <img height="24" width="24" alt="registrar" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/bended_arrow_right.png">
                            <span>Registrar</span>
                        </button>

                        <button class="orange send_right " type="reset">
                            <img height="24" width="24" alt="Reset" src="<?php echo base_url(THEMEASETS); ?>/images/icons/small/white/refresh_4.png">
                            <span>Reset</span>
                        </button>

                    </div>
                    <?php form_close(); ?>
                </div>
            </div>
        </div>

        <div class="box grid_16">
            <h2 class="box_head grad_brown">Lista de usuarios</h2>
            <div class="block">
                <table class="static">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>E-Mail</th>
                            <th>Usuário</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($LISTAUSUARIOS as $Usuario) { ?>
                            <tr>
                                <td><?php echo $Usuario[usuario::Nome]; ?></td>
                                <td><?php echo $Usuario[usuario::Email]; ?></td>
                                <td><?php echo $Usuario[usuario::Apelido]; ?></td>
                                <td>??</td>
                                <td><?php echo anchor('admin/usuarios/resetsenha/' . $Usuario[Usuario::ID], '<div class="ui-icon ui-icon-key"></div>', 'class="button light icon_only div_icon tooltip" title="Reset de Senha"'); ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>




    </div>

    <?php echo $FOOTER ?>