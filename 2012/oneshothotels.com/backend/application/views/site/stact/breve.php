<!DOCTYPE html>
<html lang="<?php echo $IDIOMA; ?>">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $PageTitulo; ?></title>
<?php echo link_tag(SITEASETS . 'css/style_page.css'); ?>
<style>
body {
    background-color:#231F20;
}
p{
    font-size:62px;
	font-family:'din_engschrift_stdregular';
	color:#FFF;
	text-align:center;
	text-transform:uppercase;
	margin-left: auto;
	margin-right:auto;
	margin-top:20%;
}
</style>
<script>
setTimeout(function(){
	history.go(-1);
},3000)
</script>
</head>

<body>
<?php  if($IDIOMA == 'ES'){ ?>

<p>PRÓXIMAMENTE.</p>

<?php }else{ ?>

<p>SOON.</p>

<?php } ?>
</body>
</html>