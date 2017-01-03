<?php echo $HEADER; ?>
<div role="main">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="page-header">
                    <h1>Projeto Música Gravada <small>Área restrita</small></h1>
                </div>
                <div class="row">
                    <div class="span3">
                        &nbsp;
                    </div>
                    <div class="span6">
                        <?php
                        $class = array('class' => 'form-horizontal well');
                        echo form_open('login', $class);
                        ?>

                        <fieldset>
                            <legend>Login</legend>
                            <div class="control-group">
                                <label class="control-label" for="login">Login</label>
                                <div class="controls">
                                    <?php
                                    echo form_input('login', NULL, "class=input-xlarge");
                                    ?>
                                    <p class="help-block">Digite o usuário</p>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="senha">Senha</label>
                                <div class="controls">
                                    <?php
                                    $input = array('class=input-xlarge');
                                    echo form_password('senha', NULL, $input[0]);
                                    ?>
                                    
                                    <p class="help-block">Digite a Senha</p>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input name="Cadastrar" class="btn btn-warning btn-large offset2" type="submit">
                            </div> <?php
                                if ($this->session->flashdata('ERRO')) {
                                    echo '<hr>'. $this->session->flashdata('ERRO');
                                }
                                ?>
                        </fieldset>
                        <?php echo form_close(''); ?>
                    </div>
                    <div class="span3">
                        &nbsp;
                    </div>
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/span-->
    </div>
    <!--/row-->
</div>
<hr>
<?php echo $FOOTER; ?>