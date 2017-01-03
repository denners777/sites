<?php 

	@$msg = $_GET['msg'];
	$p = NULL;
	
	if($msg == '1'){
		$p = '<p>E-mail não cadastrado no sistema.</p>';
	} else
	if($msg == '2'){
		$p = '<p>Senha inválida.</p>';
	}

?>
<script type="text/javascript">

function checkMail(mail){
        var er = new RegExp(/^[A-Za-z0-9_\-\.]+@[A-Za-z0-9_\-\.]{2,}\.[A-Za-z0-9]{2,}(\.[A-Za-z0-9])?/);
        if(typeof(mail) == "string"){
                if(er.test(mail)){ 
					return true; 
				}else{
					return false; 
				}
        }else if(typeof(mail) == "object"){
                if(er.test(mail.value)){ 
                     return true; 
            	}else{
					return false;
				}
        }else{
           return false;
        }
}
function valida() {

        var msg = "";
		var email = $('#email_user').val();
		var senha = $('#senha_user').val();
		var RETORNO = false;
		if(Modernizr.input.placeholder){
			if(email == "" && senha ==""){
				msg = "<p>Digite seu e-mail e sua senha.</p>";
			}else
				if(email == ""){
					msg = "<p>Digite seu e-mail.</p>";
				}else if(checkMail(email)== false){
						msg = "<p>Digite um e-mail válido.</p>";
					}else
						if(senha == ""){
							msg = "<p>Digite sua senha.</p>";
						}else{
							RETORNO = true;
						}
		}else{
			if((email == "e-mail do cliente" && senha == "senha") || (email == "" && senha == "")){
				msg = "<p>Digite seu e-mail e sua senha.</p>";
			}else
				if(email == "e-mail do cliente" || email == ""){
					msg = "<p>Digite seu e-mail.</p>";
				}else if(checkMail(email)== false){
						msg = "<p>Digite um e-mail válido.</p>";
					}else
						if(senha == "senha" || senha == ""){
							msg = "<p>Digite sua senha.</p>";
						}else{
							RETORNO = true;
						}
		}
		
		$('#valida').html(msg);
		return RETORNO;
    }

</script>
<form action="http://sistema.heian.com.br/valida.php" method="post" id="login" onsubmit="return valida(); ">
  <fieldset>
    <legend> Área do Cliente </legend>
    <label for="login">
    <div class="imginput"> <img class="alingcenter" src="<?php bloginfo('template_url');?>/assets/img/login.png" width="15" height="14"> </div>
    <input type="text" name="email_user" placeholder="e-mail do cliente" id="email_user" value="" />
    </label>
    <br />
    <label for="senha">
    <div class="imginput"> <img class="alingcenter" src="<?php bloginfo('template_url');?>/assets/img/senha.png" width="11" height="13"> </div>
    <input type="password" name="senha_user" placeholder="senha" id="senha_user" value="" />
    </label>
    <div class="aligndir clearfix"> <a href="<?php bloginfo('home');?>/esqueceuasenha">Esqueci minha senha</a>
      <input class="botao gradient" name=""  type="submit" value="Entrar">
      <div id="valida" ><?php echo $p; ?></div>
    </div>
  </fieldset>
</form>
