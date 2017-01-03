<?php get_header(); ?>
<div id="main" class="main">
    <section class="servico container_12 clearfix">
        <div class="grid_10 prefix_1 suffix_1">
            <div class="alpha grid_3">
                <nav class="menu-port box2">
                    <h2 class="inbox">Portfólio
                        <span class="ir">e</span>
                    </h2>
                    <ul>
                        <li class="active">
                            <a href="<?php echo bloginfo('url'); ?>/cp-potfolio/batizados">Batizados</a>
                        </li>
                        <li>
                            <a href="<?php echo bloginfo('url'); ?>/cp-potfolio/gestantes">Gestantes</a>
                        </li>
                        <li>
                            <a href="<?php echo bloginfo('url'); ?>/cp-potfolio/festas-infantis">Festas Infantis</a>
                        </li>
                        <li>
                            <a href="<?php echo bloginfo('url'); ?>/cp-potfolio/natureza">Natureza</a>
                        </li>
                        <li class="drop">
                            <a href="#book">Book</a>
                            <ul>
                                <li>
                                    <a href="<?php echo bloginfo('url'); ?>/cp-potfolio/infantil">Infantil</a>
                                </li>
                                <li>
                                    <a href="<?php echo bloginfo('url'); ?>/cp-potfolio/teen">Teen</a>
                                </li>
                                <li>
                                    <a href="<?php echo bloginfo('url'); ?>/cp-potfolio/modelos">Modelos</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo bloginfo('url'); ?>/cp-potfolio/paisagem-pumana">Paisagem Humana</a>
                        </li>
                        <li>
                            <a href="<?php echo bloginfo('url'); ?>/cp-potfolio/fotolivro">Tratamento do Fotolivro</a>
                        </li>
                    </ul>
                    <div class="traco2">
                    </div>
                </nav>
            </div>
            <div class="omega grid_7">
                <article class="box2">
                    <?php
                    $args = array('post_type' => 'cp-potfolio', 'post-per-page' => 1);
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post();
                        $attachments = new Attachments('attachments');
                        ?>
                        <h1>Título da Foto</h1>
                        <nav class="navs">
                            <a id="prev" class="ir">Prev</a>
                            <a id="next" class="ir">Next</a>
                        </nav>
                        <figure id="banner-port" class="figure-port">
                            <?php
                            $attachments = new Attachments('my_attachments');
                            if ($attachments->exist()) : while ($attachments->get()) :
                                    ?>
                                    <img src="<?php echo get_bloginfo('template_url') . '/timthumb.php?q=100&w=612&h=336&src=' . $attachments->src('full'); ?>"  title="<?php echo $attachments->field('title'); ?>" />
                                <?php endwhile;
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
                            <?php endwhile;
                        endif; ?>
                        </figure>
                        <?php
                    endwhile;
                    wp_reset_postdata();
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