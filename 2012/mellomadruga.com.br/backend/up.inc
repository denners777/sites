<?php 

$ftps="50.116.113.38";
$ftpu="mellomad";
$ftpus="2r9Wp7n9eU";
$paths="/public_html/cadastro/upload";
$conn_id=ftp_connect($ftps);
$login_result = ftp_login($conn_id, $ftpu, $ftpus);

// check connection
if ((!$conn_id) || (!$login_result)) {
       header("Location:f_envia.php?m=e-ftp");
       exit;
   } 
?>