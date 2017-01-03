<section id="bottom" class="container_12 clearfix">
    <div class="grid_2 prefix_1">
        <a href="#" class="facebook ir" title="Facebook">Facebook</a>
        <a href="#" class="twitter ir" title="Twitter">Twitter</a>
    </div>
    <?php $frase = ""; ?>
    <?php
    if (is_home()) {
        $frase = 'Frida Kahlo';
    }
    ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php $frase = get_post_meta($post-> ID, 'frase', true); ?>
            <?php endwhile; endif; ?>

    <div class="grid_6">
        <?php if ($frase != "") { ?>
            <?php
            $args = array('post_type' => 'frase', 'name' => "$frase");
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
                ?>
                <div class="frase_frida"><?php echo get_the_content(); ?>
                    <span><?php the_title(); ?></span>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
            ?>
        <?php }else{ echo '<br />';} ?>
    </div>
    <div class="grid_3">
        <div class="tels">
            <div class="tel">
                <span>21</span>
                2425.7840
            </div>
            <div class="tel">
                <span>21</span>
                6923.4748
            </div>
        </div>
    </div>
</section>
