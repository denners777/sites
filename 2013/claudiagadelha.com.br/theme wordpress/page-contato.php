<?php get_header(); ?>
<div id="main" class="main">
    <section class="contato container_12 clearfix">
        <div class="grid_10 prefix_1 suffix_1">
            <article class="alpha grid_6 box2">
                <h2 class="inbox">Contato
                    <span class="ir">e</span>
                </h2>
                <p>Preencha o formulário abaixo para solicitar o seu orçamento.</p>
                <?php dynamic_sidebar('contato'); ?>
            </article>
            <aside class="grid_4 omega">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <figure class="figure-orca">
                        <img src="<?php echo get_bloginfo('template_url') . '/timthumb.php?q=100&w=339&h=593&src=' .wp_get_attachment_url(get_post_thumbnail_id($post-> ID));?>" />
                    </figure>
                <?php endwhile; endif; ?>
            </aside>
        </div>
    </section>
</div>
<?php get_template_part('bottom');
get_footer(); ?>