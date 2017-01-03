<?php get_header(); ?>


<?php if (get_option_tree('slider_onoff') == 'Yes') { ?>

    <?php include("includes/slider.php"); ?>

<?php } ?>

<ul class="widgets row clearfix">

    <?php include('../cadastro/index.php'); ?>

</ul>

<?php get_footer(); ?>