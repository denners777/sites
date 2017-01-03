<?php get_header(); ?>

<div role="main" id="TransplanteMedula">
  <hgroup>
    <h1 class="container_12">Agenda</h1>
  </hgroup>
  <div class="container_12">
    <nav class="grid_3">
      <h3>Meses</h3>
      <ul>
        <?php
		$dataarquivo = (!isset($_GET['data'])) ? NULL : $_GET['data'] ;
		$timemachine = ''; 
		$MesCorrido = array();
		if($dataarquivo){
			$args = array( 	'post_type' => 'agendas', 'orderby' => 'meta_value', 'meta_key' => 'dataevento', 'meta_value' => $dataarquivo);
		}else{
			$args = array( 	'post_type' => 'agendas', 'orderby' => 'meta_value', 'meta_key' => 'dataevento', 'order' => 'ASC');
		}
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); 
			
			$d = get_post_meta($post-> ID, 'dataevento', true);
			$data = explode("-",$d);
			$mes = $data[1];
		if(!isset($MesCorrido[$data[1].'-'.$data[0]])){
			switch ($mes) {
				case 1:
					$mes = "jan";
					break;
					
				case 2:
					$mes = "fev";
					break;
					
				case 3:
					$mes = "mar";
					break;
					
				case 4:
					$mes = "abr";
					break;
					
				
				case 5:
					$mes = "jun";
					break;
					
				case 7:
					$mes = "jul";
					break;
					
				case 8:
					$mes = "ago";
					break;
					
				case 9:
					$mes = "set";
					break;
					
				case 10:
					$mes = "out";
					break;
					
				case 11:
					$mes = "nov";
					break;
					
				case 12:
					$mes = "dec";
					break;
			}
			
			$datas = $mes.' - '.$data[0];
						
		?>
        <li>
          <a href="<?php echo 'http://96.125.170.135/~homologa/medcel/agenda/?data=', $d; ?> ">
            <?php echo $datas; ?>
          </a>
        </li>
        <?php $MesCorrido[$data[1].'-'.$data[0]] = $d; }endwhile; wp_reset_postdata();  ?>
      </ul>
    </nav>
    <section class="grid_8" id="ListaArtigos">
      <?php 
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$dataarquivo2 = (!isset($_GET['data'])) ? NULL : $_GET['data'] ;
			
			if($dataarquivo2){
				$args = array( 	'post_type' => 'agendas', 'orderby' => 'meta_value', 'meta_key' => 'dataevento', 'meta_value' => $dataarquivo2);
			}else{
				$args = array( 	'post_type' => 'agendas', 'orderby' => 'meta_value', 'meta_key' => 'dataevento', 'order' => 'ASC', 'paged' => $paged );
			}
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); 
			$d = get_post_meta($post-> ID, 'dataevento', true);
	  	?>
      <article>
        <hgroup>
          <h3>
            <?php the_title(); ?>
          </h3>
          <time datetime="<?php echo $d; ?>">
          	<a href="<?php echo 'http://96.125.170.135/~homologa/medcel/agenda/?data=', $d; ?>">
				<?php echo implode("/",array_reverse(explode("-",$d))); ?></a>
          </time>
        </hgroup>
        <?php the_content(); ?>
      </article>
      <?php endwhile; ?>
    </section>
  </div>
</div>
<?php get_footer(); ?>
