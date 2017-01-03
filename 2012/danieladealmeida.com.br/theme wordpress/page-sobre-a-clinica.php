<?php get_header();?>
<script type="text/javascript">

	$(document).ready(function(){
		$('.boxgallery').colorbox({rel:'box', transition:'fade'});
		$('.boxgallery1').colorbox({rel:'box1', transition:'fade'});
	});

</script>

<div role="main" class="main container_16">
  <h1 class="ir" style="display:none;">Sobre a Clínica</h1>
  <?php 
 	if ( have_posts() ) : while ( have_posts() ) : the_post();
 	$images = attachments_get_attachments();
  ?>
  <article class="container_16">
    <?php the_content(); ?>
    <?php
		$newsArgs = array( 'post_type' => 'curriculo', 'posts_per_page' => 1);
		$newsLoop = new WP_Query( $newsArgs );
		while ( $newsLoop->have_posts() ) : $newsLoop->the_post();
	?>
    <div style="display: none;" id="curriculo">
      <div class="grid_8 curriculo">
        <div class="img">
          <?php the_post_thumbnail(array());?>
        </div>
        <h1>
          <?php the_title();?>
        </h1>
        <div class="p">
          <?php the_content();?>
        </div>
      </div>
    </div>
    <?php endwhile;?>
  </article>
  <section class="container_16">
    <div class="label-desk-Laranja"> Veja nossas instalações </div>
    <?php foreach($images as $img){ ?>
    <!--Foto -->
    <div class="BoxFotos grid_4"> 
    	<a href="<?php echo $img['location']?>" class="boxgallery" rel="box"> 
        	<img src="<?php echo $img['location']?>" width="212" height="128"> 
            <a href="<?php echo $img['location']?>" class="ir btnPlus boxgallery1 " rel="box1" >Ver</a> 
        </a> 
    </div>
    <!--Foto -->
    <?php } ?>
  </section>
  <?php endwhile; ?>
  <?php else: ?>
  <?php endif; ?>
</div>
<?php get_footer();?>
