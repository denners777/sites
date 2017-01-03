
<?php get_header(); ?>
<div id="main" class="main">
    <section class="servico container_12 clearfix">
        <div class="grid_10 prefix_1 suffix_1">
            <div class="alpha grid_3">
                <nav class="menu-port box2">
                    <h2 class="inbox">Portfólio
                        <span class="ir">e</span>
                    </h2>
                    <?php
                    $arg = array(
                        'theme_location' => 'menu-port',
                        'menu' => 'menu-portfolio',
                        'container' => 'nav',
                        'container_class' => 'menus',
                        'container_id' => '',
                        'menu_class' => '',
                        'menu_id' => '',
                        'echo' => true,
                        'fallback_cb' => 'wp_page_menu',
                        'before' => '',
                        'after' => '',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth' => 0,
                    );

                    wp_nav_menu($arg);
                    ?>
                    <div class="traco2">
                    </div>
                </nav>
            </div>
            <div class="omega grid_7">
                <article class="box2">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <h1 id="theTitle">Título da Foto</h1>
                            <nav class="navs">
                                <a id="prev" class="ir">Prev</a>
                                <a id="next" class="ir">Next</a>
                            </nav>
                            <figure id="banner-port" class="figure-port">
                                <?php
                                $attachments = new Attachments('my_attachments');
                                if ($attachments->exist()) : while ($attachments->get()) :
                                        ?>
                                <a href="<?php echo $attachments->src('full'); ?>" class="lightbox" rel="lightbox">
                                            <img src="<?php echo get_bloginfo('template_url') . '/timthumb.php?q=100&w=612&h=336&src=' . $attachments->src('full'); ?>"  title="<?php echo $attachments->field('title'); ?>" />
                                        </a>
                                    <?php
                                    endwhile;
                                endif;
                                ?>
                            </figure>
                            <nav class="navs">
                                <a id="prev2" class="ir">Prev</a>
                                <a id="next2" class="ir">Next</a>
                            </nav>
                            <figure id="thumbs" class="clearfix">
                                <?php
                                $attachments2 = new Attachments('my_attachments');
                                if ($attachments2->exist()) : while ($attachments2->get()) :
                                        ?>
                                        <img src="<?php echo get_bloginfo('template_url') . '/timthumb.php?q=100&w=161&h=132&src=' . $attachments2->src('full'); ?>"  title="<?php echo $attachments2->field('title'); ?>" />
                                    <?php
                                    endwhile;
                                endif;
                                ?>
                            </figure>
                        <?php
                        endwhile;
                    endif;
                    ?>
                </article>
            </div>
        </div>
    </section>
</div>
<?php
get_template_part('bottom');
get_footer();
?>