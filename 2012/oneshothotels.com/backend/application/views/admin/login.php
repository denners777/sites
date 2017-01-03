<?php echo $HEADER;
$Path = 'assets/adminica/'; ?>
<div id="pjax">
    <div id="wrapper">
        <div class="isolate">
            <div class="center narrow">
                <div class="main_container full_size container_16 clearfix">
                    <div class="box">
                        <div class="block">
                            <div class="section">
                                <?php echo $ALERTAS; ?>
                            </div>
                        <?php echo form_open('login/logar', array('class' => 'validate_form')) ?>
                            <fieldset class="label_side top">
                                <label for="<?php echo Usuario::Apelido ?>">Usuario <span>o el correo electrónico</span></label>
                                <div>
                                    <input type="text" id="<?php echo Usuario::Apelido ?>" name="<?php echo Usuario::Apelido ?>" class="required">
                                </div>
                            </fieldset>
                            <fieldset class="label_side">
                                <label for="<?php echo Usuario::Senha ?>">la contraseña</label>
                                <div>
                                    <input type="password" id="<?php echo Usuario::Senha ?>" name="<?php echo Usuario::Senha ?>" class="required">
                                </div>
                            </fieldset>
                            <div class="button_bar clearfix">
                                <button class="wide" type="submit">
                                   <?php echo img($Path . 'images/icons/small/white/key_2.png'); ?>
                                    <span>iniciar sesión</span>
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <a href="index.php" id="login_logo"><span>Adminica</span></a>
            </div>
        </div>
    </div>
<?php
echo $FOOTER?>