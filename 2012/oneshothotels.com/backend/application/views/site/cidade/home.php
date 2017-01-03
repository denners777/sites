<?php echo $HEADER ?>
<div role="main" id="container" class="container_12" >
    <div class="ajust">
        <div class="row1">
            <?php
            $LinkGuia = NULL;
            foreach ($HOTEIS as $Hotel) {
                //print_r($Hotel);
                $Destaque = (isset($Hotel['METADATA']['img_destaque']['IMAGEM'])) ?
                        img(array(
                            'src' => PublicDomain . $Hotel['METADATA']['img_destaque']['IMAGEM'],
                            'alt' => (isset($Hotel['METADATA']['img_destaque']['DESC'][$IDIOMA])) ? $Hotel['METADATA']['img_destaque']['DESC'][$IDIOMA] : NULL,
                            'title' => $Hotel[Hotel::Nome],
                        )) : $IMGPLACEHOLD;
                $LOGO = (isset($Hotel['METADATA']['logo']['IMAGEM'])) ?
                        img(array(
                            'src' => PublicDomain . $Hotel['METADATA']['logo']['IMAGEM'],
                            'alt' => (isset($Hotel['METADATA']['logo']['DESC'][$IDIOMA])) ? $Hotel['METADATA']['logo']['DESC'][$IDIOMA] : NULL,
                            'title' => $Hotel[Hotel::Nome],
                        )) : $IMGPLACEHOLD;
						
						if(is_null($LinkGuia)){
                        	$LinkGuia = site_url("{$CIDADE[Cidade::Slug]}/{$Hotel[Hotel::Slug]}/guia");
						}
                ?>
                <a href="<?php echo site_url("{$CIDADE[Cidade::Slug]}/{$Hotel[Hotel::Slug]}"); ?>" class="grid_6 box">
                    <figure class="elemento"> <?php echo $Destaque; ?>
                        <figcaption><?php echo $LOGO; ?></figcaption>
                    </figure>
                </a>
                <?php
            }
            if ((count($HOTEIS) % 2) == 0) {
                $NIMG = 'img_01';
                $IMG = (isset($CIDADE['METADATA'][$NIMG]['IMAGEM'])) ?
                        img(array(
                            'src' => PublicDomain . $CIDADE['METADATA'][$NIMG]['IMAGEM'],
                            'alt' => (isset($CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA])) ? $CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA] : NULL,
                            'title' => (isset($CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA])) ? $CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA] : NULL
                        )) : $IMGPLACEHOLD;
                if (isset($CIDADE['METADATA'][$NIMG]['URL'])) {
                    $LINK = (empty($CIDADE['METADATA'][$NIMG]['URL'])) ? '#' : $CIDADE['METADATA'][$NIMG]['URL'];
                } else {
                    $LINK = '#';
                }
                ?>
                <a href="<?php echo $LINK ?>" class="grid_6 xxx">
                    <figure class="elemento"><?php echo $IMG ?></figure>
                </a> 
                <?php
            }
            unset($IMG);
            $NIMG = 'img_eventos';
            $IMG = (isset($CIDADE['METADATA'][$NIMG]['IMAGEM'])) ?
                    img(array(
                        'src' => PublicDomain . $CIDADE['METADATA'][$NIMG]['IMAGEM'],
                        'alt' => (isset($CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA])) ? $CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA] : NULL,
                        'title' => (isset($CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA])) ? $CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA] : NULL
                    )) : $IMGPLACEHOLD;
            /* if(isset($CIDADE['METADATA'][$NIMG]['URL'])){
              $LINK = (empty($CIDADE['METADATA'][$NIMG]['URL'])) ? '#' : $CIDADE['METADATA'][$NIMG]['URL'] ;
              }else{
              $LINK = '#';
              } */
            $LINK = site_url("{$CIDADE[Cidade::Slug]}/eventos");
            ?>


            <a href="<?php echo $LINK ?>" class="grid_6">
                <figure class="elemento"> <?php echo $IMG ?>
                    <figcaption class="mark"><img src="<?php echo "{$BASEASSETS}/img/fig/{$IDIOMA}/eventos.png" ?>"></figcaption>
                </figure>
            </a> 


        </div>
        <?php
        unset($IMG);
        $NIMG = 'img_02';
        $IMG = (isset($CIDADE['METADATA'][$NIMG]['IMAGEM'])) ?
                img(array(
                    'src' => PublicDomain . $CIDADE['METADATA'][$NIMG]['IMAGEM'],
                    'alt' => (isset($CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA])) ? $CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA] : NULL,
                    'title' => (isset($CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA])) ? $CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA] : NULL
                )) : $IMGPLACEHOLD;
        if (isset($CIDADE['METADATA'][$NIMG]['URL'])) {
            $LINK = (empty($CIDADE['METADATA'][$NIMG]['URL'])) ? '#' : $CIDADE['METADATA'][$NIMG]['URL'];
        } else {
            $LINK = '#';
        }
        ?>
        <div class="row2"> <a href="<?php echo $LINK ?>" class="grid_4 zzz ">
                <figure class="elemento crop"> <?php echo $IMG ?></figure>
            </a>


            <div class="grid_4"> 
                <?php
                unset($IMG);
                $NIMG = 'img_03';
                $IMG = (isset($CIDADE['METADATA'][$NIMG]['IMAGEM'])) ?
                        img(array(
                            'src' => PublicDomain . $CIDADE['METADATA'][$NIMG]['IMAGEM'],
                            'alt' => (isset($CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA])) ? $CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA] : NULL,
                            'title' => (isset($CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA])) ? $CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA] : NULL
                        )) : $IMGPLACEHOLD;
                if (isset($CIDADE['METADATA'][$NIMG]['URL'])) {
                    $LINK = (empty($CIDADE['METADATA'][$NIMG]['URL'])) ? '#' : $CIDADE['METADATA'][$NIMG]['URL'];
                } else {
                    $LINK = '#';
                }
                ?>
                <a href="<?php echo $LINK ?>">
                    <figure class="elemento elem02"> <?php echo $IMG ?> </figure>
                </a> 
                <?php
                unset($IMG);
                $NIMG = 'img_04';
                $IMG = (isset($CIDADE['METADATA'][$NIMG]['IMAGEM'])) ?
                        img(array(
                            'src' => PublicDomain . $CIDADE['METADATA'][$NIMG]['IMAGEM'],
                            'alt' => (isset($CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA])) ? $CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA] : NULL,
                            'title' => (isset($CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA])) ? $CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA] : NULL
                        )) : $IMGPLACEHOLD;
                if (isset($CIDADE['METADATA'][$NIMG]['URL'])) {
                    $LINK = (empty($CIDADE['METADATA'][$NIMG]['URL'])) ? '#' : $CIDADE['METADATA'][$NIMG]['URL'];
                } else {
                    $LINK = '#';
                }
                ?>
                <a href="<?php echo $LINK ?>">
                    <figure class="elemento elem02"> <?php echo $IMG ?> </figure>
                </a>
            </div>
            <div class="grid_4"> 
                <?php
                unset($IMG);
                $NIMG = 'img_guia';
                $IMG = (isset($CIDADE['METADATA'][$NIMG]['IMAGEM'])) ?
                        img(array(
                            'src' => PublicDomain . $CIDADE['METADATA'][$NIMG]['IMAGEM'],
                            'alt' => (isset($CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA])) ? $CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA] : NULL,
                            'title' => (isset($CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA])) ? $CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA] : NULL
                        )) : $IMGPLACEHOLD;
                if (isset($CIDADE['METADATA'][$NIMG]['URL'])) {
                    $LINK = (empty($CIDADE['METADATA'][$NIMG]['URL'])) ? '#' : $CIDADE['METADATA'][$NIMG]['URL'];
                } else {
                    $LINK = '#';
                }
                ?>
                <a href="<?php echo $LinkGuia ?>">
                    <figure class="elemento elem02"> <?php echo $IMG ?>
                        <figcaption class="mark ajuste"><img src="<?php echo "{$BASEASSETS}/img/fig/{$IDIOMA}/guias.png" ?>"></figcaption>
                    </figure>
                </a> 
                <?php
                unset($IMG);
                $NIMG = 'img_05_'.$IDIOMA;
                $IMG = (isset($CIDADE['METADATA'][$NIMG]['IMAGEM'])) ?
                        img(array(
                            'src' => PublicDomain . $CIDADE['METADATA'][$NIMG]['IMAGEM'],
                            'alt' => (isset($CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA])) ? $CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA] : NULL,
                            'title' => (isset($CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA])) ? $CIDADE['METADATA'][$NIMG]['DESC'][$IDIOMA] : NULL
                        )) : $IMGPLACEHOLD;
                if (isset($CIDADE['METADATA'][$NIMG]['URL'])) {
                    $LINK = (empty($CIDADE['METADATA'][$NIMG]['URL'])) ? '#' : $CIDADE['METADATA'][$NIMG]['URL'];
                } else {
                    $LINK = '#';
                }
                ?>
                <a href="<?php echo $LINK ?>">
                    <figure class="elemento elem02"> <?php echo $IMG ?> </figure>
                </a>
            </div>
        </div>
    </div>
</div>
<?php echo $FOOTER ?>