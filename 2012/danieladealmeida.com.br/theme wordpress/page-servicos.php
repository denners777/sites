<?php get_header();?>

<div role="main" class="main container_16">
  <h1 class="ir hidden">Serviços</h1>
  <article class="container_16">
    <div class="grid_8 servicos">
      <h2>O que podemos fazer por você</h2>
      <ol>
        <?php

                    $Cont = 0;

                    $args = array( 'post_type' => 'servicos', 'order' => 'ASC' );

                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();

                ?>
        <li> <a href="#" onclick="carrega('Serv<?php echo $Cont;?>')" id="title<?php echo $Cont;?>">
          <?php the_title();?>
          </a>           <a id="plus" href="#box<?php echo $Cont;?>" rel="facebox" onclick="carrega2('box<?php echo $Cont;?>')" title="Clique para ver em segundo plano."><span></span></a>
          <div style="display: none;" id="Serv<?php echo $Cont;?>">
           
              <h2>
                <?php the_title();?>
              </h2>
              <?php the_content();?>
           
          </div>
          
          <div style="display: none;" id="box<?php echo $Cont;?>">
            <div class="boxservicos">
              <h1>
                <?php the_title();?>
              </h1>
              <?php the_content();?>
            </div>
          </div>
        </li>
        <?php $Cont++;

                    endwhile;

                ?>
      </ol>
      
      <!--Foto -->
      
      <div class="BoxFotos2 grid_8 clearfix"> <img src="<?php bloginfo('home'); ?>/wp-content/uploads/2012/06/serviços.jpg"> </div>
      
      <!--Foto --> 
      
      <!--Foto -->
      
      <div class="BoxFotos2 grid_8 clearfix"> <img src="<?php bloginfo('home'); ?>/wp-content/uploads/2012/06/17.jpg"> </div>
      
      <!--Foto --> 
      
    </div>
    <div class="grid_7">
      <div class="destak Pad13" id="Exibe"> </div>
    </div>
  </article>
</div>
<script>

    function carrega(ID) {
        var HTML = $('#' + ID).html();
        $('#Exibe').html(HTML);
    }
	function carrega2(ID) {
        var HTML = $('#' + ID).html();
        $('#box').html(HTML);
    }

    $(function() {
        carrega('Serv0')
    });

</script>
<?php get_footer();?>
