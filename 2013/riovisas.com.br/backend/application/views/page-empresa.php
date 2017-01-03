<?php $this->load->view('comum/header'); ?>
	<div role="main" class="container_24 CORPOPAGINA" id="EMPRESA">
		<div class="grid_17 DivMain">
			<div class="BarraAzul"></div>
			<figure>
                <?php echo img('assets/img/page_empresa.jpg');?>
			</figure>
			<article>
				<h2><?php echo $this->lang->line('ae_title'); ?> //</h2>
				<p><?php echo $this->lang->line('ae_content'); ?></p>
			</article>
		</div>
		<aside class="grid_7">
			<?php $this->load->view('comum/aside'); ?>
		</aside>
		<div class="clear"></div>
	</div>
	<?php $this->load->view('comum/footer'); ?>