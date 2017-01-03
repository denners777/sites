<?php echo $HEADER; ?>
<div role="main" id="main">
    <section class="container_16 clearfix" id="commom">
        <h1>Contato
            <div class="borda_horizontal">
                <div class="enfeite_ponta"></div>
            </div>
            <div class="borda_vertical"></div>
        </h1>
        <article class="grid_6 push_1 contato">
            <?php echo form_open('contacto'); ?>
            <div class="line">
                <label for="nome">Nome</label>
                <?php echo form_input('nome', NULL); ?>
            </div>
            <div class="line">
                <label for="email">E-mail</label>
                <?php echo form_input('email', NULL); ?>
            </div>
            <div class="line">
                <label for="assunto">Assunto</label>
                <?php echo form_input('assunto', NULL); ?>
            </div>
            <div class="line">
                <label for="msg">Mensagem</label>
            </div>
            <?php echo form_textarea('msg', NULL); ?>
            <?php echo form_submit('', "Enviar"); ?>
            <?php echo form_close(''); ?>
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
        </article>
    </section>
</div>
<?php echo $FOOTER; ?>