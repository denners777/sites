<div id="stackbar" class="stackbar">
    <div class="user_box dark_box clearfix">
        <a href="http://gravatar.com" target="_new"><img src="<?php echo $UsuarioAtual['AVATAR']; ?>" width="55" alt="<?php echo $UsuarioAtual[Usuario::Nome]; ?>" /></a>
        <h2><?php echo ($UsuarioAtual[Usuario::PERFIL] == 1) ? 'Administrator' : 'Colaborador'; ?></h2>
        <h3><?php echo anchor('admin/usuarios/profile', $UsuarioAtual[Usuario::Nome]); ?></h3>
        <ul>
            <li><?php echo anchor('admin/usuarios/profile', 'settings'); ?><span class="divider">|</span></li>
            <li><a href="<?php echo site_url('login/logof'); ?>" class="dialog_button" data-dialog="dialog_logout">salir</a></li>
        </ul>
        <button id="DeletarCache" data-url="<?php echo site_url('admin/cache/DELET_ALL'); ?>">
            Deletar CACHE
        </button>
    </div>

    <ul class="">
        <li>
            <a href="javascript:;"><img src="<?php echo base_url(THEMEASETS . 'images/icons/large/grey/computer_imac.png'); ?>"/><span>Principal</span></a>
            <ul> 
                <li><a>Principal</a></li>
                <?php foreach ($AdminPages as $Page) { ?>
                    <li><?php echo anchor('admin/' . $Page['slug'], $Page['label'], 'class="pjax"'); ?></li>
                <?php } //fim ?>
            </ul>
        </li>
        <?php foreach ($AdminSidebar as $Chave => $SideBar) { ?>
            <li>
                <a href="javascript:;"><?php echo img(THEMEASETS . 'images/icons/large/grey/' . $SideBar['info']['icon']); ?><span><?php echo $SideBar['info']['label'] ?></span></a>
                <ul>
                    <li><a><?php echo $SideBar['info']['label'] ?></a></li>
                    <?php foreach ($SideBar['links'] as $Page) { ?>
                        <li><?php echo anchor('admin/' . $Page['slug'], $Page['label'], 'class="pjax"'); ?></li>
                    <?php } //fim ?>
                </ul>
            </li>
        <?php } ?>
    </ul>
    <div style="padding: 6px; margin-top: 100px; opacity: 0.4; font-size: 10px; background: #FFF; border-radius: 4px;">

        Carregado em {elapsed_time}<br>
        {memory_usage} de memoria gasta.

    </div>

    <div class="display_none">						
        <div id="dialog_logout" class="dialog_content narrow" title="salir">
            <div class="block">
                <div class="section">
                    <h1>¡Gracias!</h1>
                    <div class="dashed_line"></div>	
                    <p>¿Quieres dejar de salir?</p>
                </div>
                <div class="button_bar clearfix">
                    <button class="dark blue no_margin_bottom link_button" data-link="<?php echo site_url('login/logof'); ?>">
                        <div class="ui-icon ui-icon-check"></div>
                        <span>ok</span>
                    </button>
                    <button class="light send_right close_dialog">
                        <div class="ui-icon ui-icon-closethick"></div>
                        <span>cancelar</span>
                    </button>
                </div>
            </div>
        </div>
    </div> 