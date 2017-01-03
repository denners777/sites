<?php get_header(); ?>
	<div role="main" id="Contato">
		<hgroup>
			<h1 class="container_12">Contato</h1>
		</hgroup>
		<section class="container_12">
			<aside class="grid_3">
				<h4>Medcel Medicina Celular</h4>
				Rua Real Grandeza, 108 gr. 329<br />
				CEP 22.281-030<br />
				Botafogo Rio de Janeiro RJ
				<h4>Parcerias</h4>
				Caso haja interesse em parcerias institucionais, entre em contato com nossa equipe. <br />
				<a href="mailto:medicinacelular@medcel.com.br">medicinacelular@medcel.com.br</a>
				<h4>RH</h4>
				Se você se identificou com a área de atuação da empresa, mande seu curriculum. <br />
				<a href="mailto:medicinacelular@medcel.com.br">medicinacelular@medcel.com.br</a>
				
				<h4>Sugestões, dúvidas, reclamações</h4>
				<a href="mailto:medicinacelular@medcel.com.br">medicinacelular@medcel.com.br</a>
			</aside>
			<article class="grid_7 prefix_1">
				<h2>Formulário de Contato</h2>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
				<?php endwhile; ?>
				<?php else: ?>
                <?php endif; ?>
			</article>
		</section>
	</div>
	<?php get_footer(); ?>