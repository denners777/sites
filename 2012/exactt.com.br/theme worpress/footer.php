<footer class="clearfix">
  <div class="container_12">
    <div class="grid_4 copyright">
      Exactt© - Todos os direitos reservados
    </div>
    <div class="grid_3 redesocial">
      Entre em contato com a Exactt!
      <figure>
        <a href="mailto:exactt@exactt.com.br">
          <img src="<?php echo bloginfo('template_url'); ?>/assets/img/email.png" title="Clique aqui para enviar-nos um e-mail." width="32" height="19">
        </a>
        <a href="https://www.facebook.com/Exactturismo" target="_blank">
          <img src="<?php echo bloginfo('template_url'); ?>/assets/img/facebook.png" title="Facebook" width="10" height="23">
        </a>
        <a href="https://twitter.com/exactttour" target="_blank">
          <img src="<?php echo bloginfo('template_url'); ?>/assets/img/twitter.png" title="Twitter" width="16" height="23">
        </a>
        <a href="http://br.linkedin.com/pub/exactt-tour/57/87b/554" target="_blank">
          <img src="<?php echo bloginfo('template_url'); ?>/assets/img/linkedin.png" title="LinkedIn" width="23" height="23">
        </a>
      </figure>
    </div> 
    <div class="grid_3 telbottom">
      Ligue agora mesmo! <strong>+55 (21) 2254-3049</strong>
    </div>
    <div class="grid_2 conecte">
      <figure>
        <a href="http://conectedesign.com.br/" target="_blank">
          <img src="<?php echo bloginfo('template_url'); ?>/assets/img/logoconecte.png" width="140">
        </a>
      </figure>
    </div>
  </div>
  <div class="container_12 rodape clearfix">
    <div class="grid_6 afiliados">
      <img src="<?php echo bloginfo('template_url'); ?>/assets/img/logo_afiliados.jpg" title="Somos afiliados: ABAV, EMBRATUR, RIOTUR, CADASTUR E MINISTÉRIO DO TURISMO" width="490" height="50" />
    </div>
    <div class="grid_6">
      <!-- INICIO CODIGO PAGSEGURO -->
      <center>
        <a href='https://pagseguro.uol.com.br' target='_blank'>
          <img alt='Logotipos de meios de pagamento do PagSeguro' src='https://p.simg.uol.com.br/out/pagseguro/i/banners/pagamento/todos_animado_550_50.gif' title='Este site aceita pagamentos com Visa, MasterCard, Diners, American Express, Hipercard, Aura, Elo, PLENOCard, PersonalCard, BrasilCard, FORTBRASIL, Bradesco, Itaú, Banco do Brasil, Banrisul, Banco HSBC, Oi Paggo, saldo em conta PagSeguro, boleto e PinCode PagSeguro.' border='0' width="490" height="50">
        </a>
      </center>
      <!-- FINAL CODIGO PAGSEGURO -->
    </div>
  </div>
</footer>
<div class="apple_overlay" id="form_custom">
  <?php get_template_part('form-custom'); ?>
</div>
<div class="apple_overlay" id="form_parceiros">
  <?php get_template_part('form-parceiros'); ?>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/js/libs/hyphenate.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo bloginfo('template_url'); ?>/assets/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
<script src=" https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/assets/js/jquery.lightbox.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/js/plugins.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/js/script.js"></script>
<script> 
$(document).ready(function(e) {
    
      
<?php
	$chat = (isset($_GET['chat'])) ? $_GET['chat'] : NULL;
	if (isset($_POST['_wpcf7'])) {
		if ($_POST['_wpcf7'] == '72') {
			if (isset($_POST['nome_function'])) {
				$var = $_POST['nome_function'];
				?>						
				LK = new Object();			
				$(LK).attr('data-id','<?php echo $var; ?>');			
				$("#form_custom").overlay({effect: 'apple', mask: '#38A4AF', top: '2%', fixed: false, load: true, onLoad: carrega(LK)});		
				<?php
			}
		}  else if($_POST['_wpcf7'] == '185') {
			?>							
			$("#form_parceiros").overlay({effect: 'apple', mask: '#38A4AF', top: '2%', fixed:false, load: true});		
			<?php
		}else if($_POST['_wpcf7'] != '109') {
			?>							
			$("#form_custom").overlay({effect: 'apple', mask: '#38A4AF', top: '2%', fixed:false, load: true});		
			<?php
		}
	}
	if ($chat == 'offline') {
			?>		
			LK = new Object();			
			$(LK).attr('data-id','reservas');				
			$("#form_custom").overlay({effect: 'apple', mask: '#38A4AF', top: '2%', fixed:false, load: true, onLoad: carrega(LK)});		
			<?php
		}
?>
}); 
</script>
</body></html>