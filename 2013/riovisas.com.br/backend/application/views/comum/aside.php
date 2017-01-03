<nav>
	<h3>Links Uteis //</h3>
	<ul>
    	<?php foreach($LINKS as $li){ ?>
		<li>
			<a href="<?php echo $li[0]; ?>" target="_blank"><?php echo $li[1]; ?></a>
		</li> 
        <?php } ?>
	</ul>
</nav>
