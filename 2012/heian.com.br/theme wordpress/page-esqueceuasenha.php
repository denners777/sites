<?php get_header(); ?>
<style type="text/css">
#page2 {
	min-height:600px;
}
.esqueceu {
	width: 500px;
	margin-top: 100px;
	margin-right: auto;
	margin-bottom: 0;
	margin-left: auto;
}
.esqueceu fieldset {
	margin: 0 auto;
	border: 1px solid #959BA6;
	-webkit-border-radius: 10px;
    border-radius: 10px;
	padding: 30px;
}
.esqueceu fieldset legend {
	margin-left: 25px;
	padding: 0px 10px;
}
.esqueceu fieldset h4 {
	color: #5B6171;
	font-size: 28px;
}
.esqueceu fieldset .email {
	font-size: 25px;
	padding-bottom: 25px;
}
.esqueceu fieldset .input {
	display: block;
	margin-bottom: 5px;
}
.esqueceu fieldset input[type=text] {
	width: 350px;
	height: 25px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	background-color:white;
	border: 1px solid #959BA6;
	font-size: 12px;
	color: #5B6171;
	padding-left: 5px;
	margin-left: 10px;
}
.esqueceu fieldset .submit {
	float: right;
}
.esqueceu fieldset h5{
	font-size: 20px;
	color: #FF6464;
	margin: 0px;
}
.esqueceu fieldset h6{
	font-size: 24px;
	color: #5B6171;
}
.esqueceu fieldset p{
	color: #959BA6;
}
</style>

<?php 
		  		$sucesso = 0;
				switch ($_GET['msg']){
							
				case "1";
					
					$msg = "<h5>Digite um um e-mail.</h5>";
					
					break;
					
				case "2";
					
					$msg = "<h5>Digite um e-mail válido.</h5>";
					
					break;
					
				case "3";
					
					$msg = "<h5>E-mail não cadastrado.</h5>";
					
					break;
					
				case "4";
					
					$sucesso = 1;
					
					break;
					
				}
		  ?>

<div role="main" class="clearfix" id="page2" >
  <div class="container_12">
    <div class="grid_12">
    <?php if($sucesso == 0){ ?>
      <section class="clearfix sec">
        <form class="esqueceu" action="http://sistema.heian.com.br/page-esqueceuasenharecebe.php" method="post">
          <fieldset>
            <legend>
            <h4>Esqueceu sua senha?</h4>
            </legend>
            <div class="email">Digite seu e-mail.</div>
            <span class="input">E-mail: <input id="email" name="email" type="text"></span> 
            <span class="submit">
            	<input class="botao gradient" name="" type="submit" value="Enviar">
            </span> 
            <span style="clear:both; display:block;"></span>
            <span><?php echo $msg; ?></span>
          </fieldset>
        </form>
      </section>
      <?php } else{?>
      <section class="clearfix sec esqueceu">
      <fieldset>
            <legend>
          <h6>E-mail enviado com Sucesso.</h6>
            </legend>
          <p>Verifique a caixa de entrada de seu e-mail. <br />
          Se não visualizar o e-mail com a senha, verifique também sua caixa de spam.</p>
      </fieldset>
      </section>
      <?php } ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
