<?php get_header(); ?>
<div role="main" class="clearfix" id="clientes" >
    <div class="container_12">
        <div class="grid_8">
            <section class="clearfix sec">
                <h1 class="h13">Clientes</h1>
                <div class="boxcliente">
                    <img src="http://teste2.heian.com.br/wp-content/uploads/2012/06/rede-globo.jpg" width="136" height="90" />
                </div>
                <div class="boxcliente">
                    <img src="http://teste2.heian.com.br/wp-content/uploads/2012/06/tim.jpg" width="136" height="90" />
                </div>
                <div class="boxcliente">
                    <img src="http://teste2.heian.com.br/wp-content/uploads/2012/06/Funda%C3%A7%C3%A3o-Roberto-Marinho.jpg" width="136" height="90" />
                </div>
                <div class="clean"></div>
                <div class="boxcliente">
                    <img src="http://teste2.heian.com.br/wp-content/uploads/2012/06/genzyme.jpg" width="136" height="90" />
                </div>
                <div class="boxcliente">
                    <img src="http://teste2.heian.com.br/wp-content/uploads/2012/06/coppead.jpg" width="136" height="90" />
                </div>
                <div class="clean" style="padding-top:25px; letter-spacing: 1px;">
                <h2><img src="<?php bloginfo('template_url');?>/assets/img/item.png" /> Com quem já nos relacionamos</h2>
                <p style="border-bottom:1px solid #767676; width:450px;">Algumas grandes empresas nacionais e multinacionais para as quais os nossos consultores já prestaram serviços:</p>
                </div>

                <?php 
					$i = 1;
                    $newsArgs = array( 'post_type' => 'clientes', 'posts_per_page' => 30, 'order' => 'ASC');

                    $newsLoop = new WP_Query( $newsArgs );

                    while ( $newsLoop->have_posts() ) : $newsLoop->the_post();

                ?>
                <div class="boxcliente">
                	<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post-> ID));?>" width="136" height="90" />
                </div>
				<?php if(($i % 3) == 0) {?>
                <div class="clean"></div>
                <?php }$i++; endwhile;?>
				<div class="clean"></div>
            </section>

        </div>

        <div class="grid_4">

    <?php 

        get_template_part('areadocliente'); 

    ?>

    </div>

    </div>

</div>

<?php get_footer(); ?>