<?php $this->load->view('comum/header'); ?>

<div role="main" class="container_24 CORPOPAGINA" id="CONTATO">
    <div class="grid_17 DivMain">
        <div class="BarraAzul"></div>
        <hgroup>
            <h2><?php echo $this->lang->line('co_title'); ?> //</h2>
            <p><?php echo $this->lang->line('co_content'); ?></p>
        </hgroup>
        <?php echo form_open('contato'); ?>
        <?php
        $input = $this->lang->line('co_input');
        echo form_input('nome', NULL, "placeholder=$input[0]");
        ?>
        <?php
        $tel = array(
            'name' => 'telefone',
            'id' => 'telefone',
            'value' => '',
            'type' => 'tel',
            'placeholder' => "$input[1]",
        );
        echo form_input($tel);
        $select = $this->lang->line('co_select');

        echo form_dropdown('achou', $select, '0', ' class="selectyze"');

        echo form_textarea('msg', NULL, "placeholder=$input[2]");

        echo form_submit('sub', "$input[3]");
        echo form_close('');
        ?>
        <p>
            <?php
            if ($this->session->flashdata('OK')) {
                echo $this->session->flashdata('OK');
            }

            if ($this->session->flashdata('ERRO')) {
                echo $this->session->flashdata('ERRO');
            }
            ?>
        </p>
    </div>
    <aside class="grid_7">
<?php $this->load->view('comum/aside'); ?>
    </aside>
    <div class="clear"></div>
</div>
<?php $this->load->view('comum/footer'); ?>
