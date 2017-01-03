<?php get_header(); ?>

<div id="main" class="main">
    <section class="servico container_12 clearfix">
        <div class="grid_10 prefix_1 suffix_1">
            <div class="alpha grid_10 omega box">
                <h2 class="alpha grid_3">Serviços
                    <span class="ir">E</span>
                </h2>
                <a class="grid_5 push_2 prefix_1 omega ir a_fotolivro" href="#">Conheça nosso serviço de fotolivro</a>
                <div class="clear">
                </div>
                <nav class="menu-serv clearfix">
                    <ul>
                        <?php
                        $i = 0;
                        $args = array('post_type' => 'cp-servico');
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post();
                            ?>
                            <?php if (in_array($post->ID, array(32, 34, 35)) == FALSE) { ?>
                                <li>
                                    <a href="#<?php echo $post->post_name; ?>" <?php if ($i == 0) { ?> class="active" <?php } ?>>
                                        <?php the_title(); ?>
                                    </a>
                                </li>
                            <?php } ?>
                            <?php $i++;
                        endwhile;
                        wp_reset_postdata(); ?>
                    </ul>
                </nav>


                <?php
                $j = 0;
                $r = 0;
                $args = array('post_type' => 'cp-servico');
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post();
                    ?>
                    <!-- SERVICOS -->
                        <?php if (in_array($post->ID, array(32, 34, 35)) == FALSE) { ?>
                        <article id="<?php echo $post->post_name; ?>" <?php if ($j == 0) { ?> class="block" <?php } else { ?> class="hide" <?php } ?> >
                            <?php } ?>
                            <?php if (in_array($post->ID, array(32, 34, 35)) == TRUE) { ?>
                            <div class="book<?php echo $r;
                        $r++; ?> hide">
    <?php } ?>

                            <figure class="grid_3 alpha figure-serv"><?php the_post_thumbnail('servico'); ?></figure>
                            <div class="grid_6 omega content">
                                <h1><?php the_title(); ?></h1>
                                <p><?php echo get_the_content(); ?></p>
                                <a href="<?php echo bloginfo('url'); ?>/orcamento/#<?php echo $post->post_name; ?>" class="orca-serv ir">faça um orçamento</a>
                            </div>

                    <?php if (in_array($post->ID, array(32, 34, 35)) == FALSE) { ?>
                        </article>
                <?php } ?>
    <?php if (in_array($post->ID, array(32, 34, 35)) == TRUE) { ?>
                    </div>
                <?php } ?>

                <!-- /SERVICOS -->
    <?php $j++;
endwhile;
wp_reset_postdata(); ?>

            <div class="grid_10 alpha omega traco">
            </div>
        </div>
</div>
</section>
</div>
<?php get_template_part('bottom');
get_footer(); ?>
