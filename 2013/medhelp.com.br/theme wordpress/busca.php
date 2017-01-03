<!-- <form role="search" method="post" id="searchform" action="<?php bloginfo('url');?>/search/" class="quest">
    <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="Buscar" class="button"/>
</form>
-->
<!-- .searchForm -->
	<form method="get" class="searchForm quest" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="text" class="field" name="s" id="s" />
		<input type="submit" name="submit" id="searchsubmit" title="Buscar" class="button" value="Buscar"/>
	</form>
	<!-- /.searchForm -->