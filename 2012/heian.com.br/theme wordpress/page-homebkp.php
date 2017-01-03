<?php
include ('header.php');
?>
<div role="main" class="clearfix" id="main" >
    <div class="container_12">
        <!--Coluna01 -->
        <div class="grid_8">
            <section class="clearfix sec">
                <h1 class="h1">Nosso Objetivo</h1>
                <div class="divbig">
                    <big>DESENVOLVA-SE</big>
                </div>
                <p class="p">
                    A <strong>Heian</strong> trabalha com organizações e indivíduos lidam com os acontecimentos e os desafios da transição. Com uma inigualável experiência e liderança, nós fornecemos transições de carreira e soluções para o desenvolvimento do indivíduo e da organização - a garantia de transições bem sucedidas e melhorias tangíveis no desempenho do seu negócio.
                </p>
            </section>
            <section class="clearfix secmenor">
                <h3>SERVIÇOS </h3>
                <p class="p">
                    Nossa abordagem para este programa de aconselhamento em transição de carreira representa uma solução que visa, em um primeiro momento, ajudá-la a avaliar cuidadosamente a sua oferta ao mercado de trabalho, a partir do entendimento de seu perfil pessoal e profissional, competências, valores, interesses, necessidades e preferências pessoais.
                </p>
                <div class="botaoie">
                    <a href="#" class="botao gradient">Conheça nossos serviços</a>
                </div>
            </section>
        </div>
        <!--./Coluna01 -->
        <!--Coluna02 -->
        <div class="grid_4">
            <form action="" method="post" id="login">
                <fieldset>
                    <legend>
                        Área do Cliente
                    </legend>
                    <label for="login">
                        <div class="imginput">
                            <img class="alingcenter" src="<?php bloginfo('template_url');?>/assets/img/login.png" width="15" height="14">
                        </div>
                        <input type="text" name="login" placeholder="nome do cliente" id="login" onfocus="if (this.value == 'nome do cliente') {this.value = '';}" onblur="if (this.value == '') {this.value = 'nome do cliente';}" value="nome do cliente" />
                    </label>
                    <br />
                    <label for="senha">
                        <div class="imginput">
                            <img class="alingcenter" src="<?php bloginfo('template_url');?>/assets/img/senha.png" width="11" height="13">
                        </div>
                        <input type="password" name="senha" placeholder="senha" id="senha" onfocus="if (this.value == 'senha') {this.value = '';}" onblur="if (this.value == '') {this.value = 'senha';}" value="" />
                    </label>
                    <div class="aligndir clearfix">
                        <a href="#">Esqueci minha senha</a>
                        <input class="botao gradient" name="" type="submit" value="Entrar">
                    </div>
                </fieldset>
            </form>
        </div>
        <!--./Coluna02 -->
    </div>
</div>
<?php
    include ('footer.php');
?>