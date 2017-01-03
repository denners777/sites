<?php echo $HEADER; ?>
<?php $Imagens = array();
 foreach ($METADADOSIMAGEM as $Nome => $Dados){
     $Imagens[$Nome] = array();
     $Imagens[$Nome]['DESC'] = (isset($Dados['DESC'][$IDIOMA])) ? $Dados['DESC'][$IDIOMA] : NULL;
     $Imagens[$Nome]['URL'] = (empty($Dados['URL'])) ? '#' : $Dados['URL'];
     $Imagens[$Nome]['IMAGEM'] = (isset($Dados['IMAGEM'])) ? img(PublicDomain.$Dados['IMAGEM']) : $IMGPLACEHOLD;
 }
 
 
 
 function SetIMG($IMGPLACEHOLD){
    return array(
        'DESK'=>NULL,
        'URL'=>'#',
        'IMAGEM'=> $IMGPLACEHOLD
    );
 }

 #Habitaciones
$Habitaciones = (isset($Imagens['habitaciones'])) ? $Imagens['habitaciones'] : SetIMG($IMGPLACEHOLD);
$Habitaciones['URL'] = site_url("{$CIDADE[Cidade::Slug]}/{$HOTEL[Hotel::Slug]}/habitaciones");
#Fotos 01 e 02
$foto01 = (isset($Imagens['foto01_'.$IDIOMA])) ? $Imagens['foto01_'.$IDIOMA] : SetIMG($IMGPLACEHOLD);
$foto02 = (isset($Imagens['foto02'])) ? $Imagens['foto02'] : SetIMG($IMGPLACEHOLD);
$foto03 = (isset($Imagens['foto03'])) ? $Imagens['foto03'] : SetIMG($IMGPLACEHOLD);
#Fotos
$fotos = (isset($Imagens['fotos'])) ? $Imagens['fotos'] : SetIMG($IMGPLACEHOLD);
$fotos['URL'] = site_url("{$CIDADE[Cidade::Slug]}/{$HOTEL[Hotel::Slug]}/fotos");
#Eventos
$Eventos = (isset($Imagens['eventos'])) ? $Imagens['eventos'] : SetIMG($IMGPLACEHOLD);
$Eventos2 = (isset($Imagens['eventos2'])) ? $Imagens['eventos2'] : SetIMG($IMGPLACEHOLD);
$Eventos['URL'] = site_url("{$CIDADE[Cidade::Slug]}/{$HOTEL[Hotel::Slug]}/eventos");
$Eventos2['URL'] = $Eventos['URL'];
#Staff
$staff = (isset($Imagens['staff'])) ? $Imagens['staff'] : SetIMG($IMGPLACEHOLD);
$staff['URL'] = site_url("{$CIDADE[Cidade::Slug]}/{$HOTEL[Hotel::Slug]}/staff");
#Localization
$localization = (isset($Imagens['localization'])) ? $Imagens['localization'] : SetIMG($IMGPLACEHOLD);
$localization['URL'] = site_url("{$CIDADE[Cidade::Slug]}/{$HOTEL[Hotel::Slug]}/localizacion");
?>
<div role="main" id="container" class="container_12" >
    <div class="grid_6"> 
        <a href="<?php echo $Habitaciones['URL']; ?>">
            <figure class="elemento"> <?php echo $Habitaciones['IMAGEM']; ?>
                <figcaption class="mark ajuste"><?php echo img($Skin['habitaciones']); ?></figcaption>
            </figure>
        </a>
        <a href="<?php echo $foto01['URL']; ?>">
            <figure class="elemento"> <?php echo $foto01['IMAGEM']; ?> </figure>
        </a> 
    </div>
    <div class="grid_4"> 
        <a href="<?php echo $foto02['URL']; ?>">
            <figure class="elemento"> <?php echo $foto02['IMAGEM']; ?> </figure>
        </a> 
        <a href="<?php echo $fotos['URL']; ?>">
            <figure class="elemento"> <?php echo $fotos['IMAGEM']; ?>
                <figcaption class="mark ajuste"><?php echo img($Skin['fotos']); ?></figcaption>
            </figure>
        </a> 
    </div>
    <div class="grid_2"> 
        <a href="<?php echo $Eventos['URL']; ?>" class="hidefoto2">
            <figure class="elemento"> <?php echo $Eventos['IMAGEM']; ?>
                <figcaption class="mark ajuste"> <?php echo img($Skin['eventos']); ?></figcaption>
            </figure>
        </a>
        <a href="<?php echo $Eventos2['URL']; ?>" class="hidefoto">
            <figure class="elemento "> <?php echo $Eventos2['IMAGEM']; ?>
                <figcaption class="mark ajuste"> <?php echo img($Skin['eventos']); ?></figcaption>
            </figure>
        </a> 
    </div>

    <div class="grid_4"> 
        <a href="<?php echo $staff['URL']; ?>">
            <figure class="elemento"> <?php echo $staff['IMAGEM']; ?>
                <figcaption class="mark ajuste"> <?php echo img($Skin['staff']); ?></figcaption>
            </figure>
        </a>
    </div>
    <div class="grid_4"> 
        <a href="<?php echo $foto03['URL']; ?>">
            <figure class="elemento">  <?php echo $foto03['IMAGEM']; ?>
            </figure>
        </a>
    </div>
    <div class="grid_4"> 
        <a href="<?php echo $localization['URL']; ?>">
            <figure class="elemento"> <?php echo $localization['IMAGEM']; ?>
                <figcaption class="mark ajuste"><?php echo img($Skin['localizacion']); ?></figcaption>
            </figure>
        </a>
    </div>

</div>
<?php echo $FOOTER; ?>