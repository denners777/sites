<?php

$email 	= $_POST['email'];

if($email == NULL):
?>
<script language="JavaScript">alert('Digite seu e-mail!');
location.href='javascript:history.back()';
</script>
<?php
exit;
endif;
$pattern = "^([A-Z_a-z.0-9])+@([a-zA-Z0-9])+";
if(ereg($pattern,$email) == false):
?>
<script language="JavaScript">alert('Digite um e-mail válido');
location.href='javascript:history.back()';
</script>
<?php
exit;
endif;

$to = $email;
$assunto = "Nova senha";
$mensagem = "Oi sua nova senha é não sei" ;

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: $email <$email>\r\n";
mail($to,$assunto,$mensagem,$headers);

?>
 <script language="JavaScript">alert('Sua mensagem foi enviada com êxito!');
location.href='<?php bloginfo('home');?>';
</script>
