<?php

get_header();

?>

<div role="main" class="clearfix" id="page" >

    <div class="container_12">

        <div class="grid_8">

            <section class="clearfix sec sec1">

                <h1 class="h13">Projetos</h1>

                <?php if (have_posts()) :

                ?>

                <?php while ( have_posts() ) : the_post();

                ?>

                <div class="divbig2">

                    <big class="big2"><?php the_title();?></big>

                </div>

                <?php the_content();?>

                <?php endwhile;?>

                <?php endif;?>

            </section>

        </div>

        <div class="grid_4">

            <?php

            get_template_part('areadocliente');

            ?>

            <div class="clarfix sec2">
            
            	<big>OUTROS PROJETOS</big>

                <?php

                    $newsArgs = array( 'post_type' => 'projetos', 'posts_per_page' => 5);

                    $newsLoop = new WP_Query( $newsArgs );

                    while ( $newsLoop->have_posts() ) : $newsLoop->the_post();

                ?>

                <div class="divbig">
                    <a href="<?php the_permalink();?>"><big class="big"><?php the_title();?></big></a>
                    <a href="<?php the_permalink();?>" class="a_big">Ver projeto</a>
                </div>

                <?php endwhile;?>

            </div>

        </div>

    </div>

</div>

<?php get_footer();?>

