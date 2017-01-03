<?php echo $HEADER; echo $Alertas ?>
<div role="main">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="page-header">
                    <h1>Editar<small></small></h1>
                </div>
                <div class="row">
                    <?php
                    $class = array('class' => 'form-horizontal');
                    $hiden = array(Variavel::ID=>$Variavels[Variavel::ID]);
                    echo form_open('admin/variaveis/atualizar', $class,$hiden);
                    ?>
                    <fieldset>
                        <legend>Editor de Intérpretes</legend>
                        <div class="tab">
                            <div class="control-group">
                                <label class="control-label" for="nome">Nome</label>
                                <div class="controls">
                                    <?php
                                    echo form_input(Pessoa::NOME, $Variavels[Variavel::NOME], "class=input-xlarge");
                                    ?>
                                    <p class="help-block">Coloque aqui o nome</p>
                                </div>
                            </div>
                            <div class="form-actions">
                                <?php
                                $info3 = array('class' => 'btn btn-warning btn-large offset2', 'name' => 'Cadastrar');
                                echo form_submit($info3, 'Enviar');
                                ?>
                            </div>
                        </div>
                    </fieldset>
                    <?php echo form_close(''); ?>
                </div>
                <!--/row-->
            </div>
            <!--/span-->
        </div>
        <!--/row-->
    </div>
    <hr>
    <?php echo $FOOTER; ?>