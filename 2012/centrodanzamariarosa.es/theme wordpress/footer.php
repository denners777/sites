<?php require_once('form-matricula.php'); ?>
<footer>
	<div class="container_12"> 
		<!--Copy -->
		<div class="grid_4 widgetFooter alpha"><p class="aviso" >Centro de Danza Maria Rosa © Todos los derechos reservados <a rel="#aviso" class="BOX" href="javascript:;">Avisos Legales</a></p></div>
		<!--/Copy -->
		<div class="grid_4 widgetFooter"> <?php dynamic_sidebar('telefones');?> </div>
		<div class="grid_2 widgetFooter"> <small> <a href="mailto:contacto@centrodanzamariarosa.es" class="ir iconEmail">E-Mail</a> <a href="http://www.facebook.com/pages/Centro-de-Danza-Maria-Rosa/161123637345674" target="_blank" class="ir iconFacebook">Facebook</a> </small> </div>
		<div class="grid_2"> <a href="http://www.oihola.com/" class="ir inconVictor" title="hecho con ♥ por Victor Bittencourt">hecho con ♥ por Victor Bittencourt</a> </div>
	</div>
</footer>
<div id="aviso" class="overlay" >
<p>Politica de Privacidad.</p>

<p>1.- Información legal.</p>

<p>Las presentes disposiciones regulan el uso del web site administrado por Ballet María Rosa,
S.L., con C.I.F. B-79990511 y domicilio en Madrid, calle Nicasio Gallego num. 10, 1º B.
Inscrita en el Registro Mercantil de Madrid: Tomo 1.980, Folio 149, Sección 8ª, Hoja M-
33.642).</p>

<p>2.- Propiedad Intelectual e Industrial.</p>

<p>Todos los contenidos del Web Site, entendiendo por éstos a título enunciativo marcas,
imágenes, logotipos, iconos, fotografías, textos y demás contenidos, así como su diseño gráfico
y códigos fuente son propiedad intelectual de Ballet María Rosa, S.L. o tiene la correspondiente
licencia de uso, sin que puedan entenderse cedidos al usuario ninguno de los derechos de
explotación sobre los mismos, más allá de lo estrictamente necesario para el correcto uso del
Web Site.</p>

<p>3.- Protección de Datos Personales.</p>

<p>Los datos recabados a través de los formularios de recogida de datos del Web Site, a lo que el
usuario presta su expreso consentimiento al rellenarlos y enviarlos, serán incorporados a un
fichero informatizado de datos de carácter personal del que es responsable Ballet María Rosa,
S.L. Dicha entidad tratará los datos de forma confidencial y exclusivamente con la finalidad de
gestionar la relación con sus clientes y promocionar las actividades de la empresa, asumiendo
las medidas de índole técnica, organizativa y de seguridad necesarias para evitar su alteración,
pérdida, tratamiento o acceso no autorizado, de acuerdo con lo establecido en la Ley Orgánica
15/1999 de 13 de diciembre, de Protección de Datos de Carácter Personal, y demás legislación
aplicable. Asimismo, Ballet María Rosa, S.L. cancelará, borrará, bloqueará los datos cuando
sean incorrectos o así lo estimara, de conformidad con lo previsto en la legislación vigente.</p>

<p>El usuario podrá, en cualquier momento y de forma totalmente gratuita, ejercer el derecho a
acceder, rectificar y, en su caso, cancelar sus datos de carácter personal suministrados, mediante
petición escrita dirigida a la dirección de correo electrónico ………………………… o por
correo postal a Ballet María Rosa, S.L. (Att. Departamento Atención al Cliente), calle Nicasio
Gallego num. 10, 1º B, Madrid 280…… Además, en cualquier momento, el Usuario podrá
manifestar su deseo de NO recibir ningún tipo de publicidad.</p>

<p>BALLET MARIA ROSA, S.L. 2012</p>
<p>Política de Privacidad</p>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
<script>window.jQuery || document.write('<script src="<?php bloginfo('template_url');?>/assets/js/libs/jquery-1.7.1.min.js"><\/script>')</script> 
<script src="<?php bloginfo('template_url');?>/assets/js/libs/jquery.tools.min.js"></script> 
<script src="<?php bloginfo('template_url');?>/assets/js/libs/jquery-ui/jquery-ui-1.8.21.custom.min.js"></script> 
<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
<script src="<?php bloginfo('template_url');?>/assets/js/libs/qtip/jquery.qtip.min.js"></script> 
<!-- --> 
<script type='text/javascript' src='<?php bloginfo('template_url');?>/assets/js/libs/fullcalendar/fullcalendar.min.js'></script> 
<script type='text/javascript' src='<?php bloginfo('template_url');?>/assets/js/libs/fullcalendar/gcal.js'></script> 
<!-- --> 
<script src="<?php bloginfo('template_url');?>/assets/js/plugins.js"></script> 
<script src="<?php bloginfo('template_url');?>/assets/js/script.js"></script> 
<script>

<?php if(is_home()){?>

$(function() {
 ////Verifica Compatibilidade
 if(typeof(Storage)=="undefined"){
  Visualizacao = false;
 }else{ 
  Visualizacao = sessionStorage['VisuMatricula']
 }
 //Avalia e Executa ação
 if( !Visualizacao ){
  setTimeout( function() {
   $("#Matricula").overlay({  mask: { color: '#535353', loadSpeed: 200, opacity: 0.9,}, fixed: false, effect: 'apple',  load: true })
   sessionStorage['VisuMatricula'] = true
  }, 10000 );
 }
})

<?php } ?>
    
	var _gaq=[['_setAccount','UA-XXX'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  
  </script>
  <style>
  	.ui-tooltip-content{
		font-size:14px;
		font-family:'Droid Sans';
		padding:10px;
		line-height:1.2;
	}
	.ui-tooltip-content *{
		display:block;
	}
	.ui-tooltip-content big{
		font-size:30px;
	}
  </style>
  <?php require_once('share.php'); ?>
</body></html>