<?php get_header(); ?>
<div id="main" class="main">
    <section class="fotolivro container_12 clearfix">
        <div class="grid_10 prefix_1 suffix_1">
            <div class="alpha box2 grid_10 omega">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="alpha grid_5 clearfix">
                    <h2 class="inbox"><?php the_title(); ?>
                        <span class="ir">e</span>
                    </h2>
                    <?php the_content(); ?>
                    <a class="a_orcamento ir" href="#">Faça um orçamento</a>
                </article>
                <div class="omega grid_5 clearfix">
                    <figure class="figure-fotolivro">
                        <?php
                            $attachments = new Attachments( 'my_attachments' );
                            if ($attachments->exist()) : while ($attachments->get()) :
                        ?>
                            <a href="<?php echo $attachments->src('full'); ?>" class="lightbox" rel="lightbox">
                                <img src="<?php echo get_bloginfo('template_url') . '/timthumb.php?q=100&w=334&h=281&src=' . $attachments->src('full'); ?>"  title="<?php echo $attachments->field('title'); ?>" />
                            </a>
                        <?php
                            endwhile;
                            endif;
                        ?>
                        <figcaption>
                            <span class="frase">Fotos do Fotolivro</span>
                            <span class="ir rosas">Rosas</span>
                        </figcaption>
                    </figure>
                    <span class="seta ir">Seta</span>
                </div>
                <?php endwhile; endif; ?>
                <div class="clear"></div>
                <div class="traco">
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_template_part('bottom');
get_footer();
?>