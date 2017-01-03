<?php $this->load->view('comum/header'); ?>
	<div role="main" class="container_24 CORPOPAGINA" id="SERVICOS">
		<div class="grid_17 DivMain">
			<div class="BarraAzul"></div>
			<section>
				<hgroup>
					<h3><?php echo $this->lang->line('sr_title'); ?> //</h3>
					<p><?php echo $this->lang->line('sr_content'); ?></p>
				</hgroup>
				<article style="margin-left:20px;" class="grid_7">
				<h2><?php echo $this->lang->line('sr_serv01_title'); ?></h2>
					<ul>
                    <?php 
						$serv01 = $this->lang->line('sr_serv01'); 
						foreach($serv01 as $serv1){
					?>
						<li><?php echo $serv1; ?></li>
                    <?php } ?>
                    </ul>
				</article>
				<article class="grid_7">
				<h2><?php echo $this->lang->line('sr_serv02_title'); ?></h2>
					<ul>
						<?php 
						$serv02 = $this->lang->line('sr_serv02'); 
						foreach($serv02 as $serv2){
					?>
						<li><?php echo $serv2; ?></li>
                    <?php } ?>
					</ul>
				</article>
				<div class="clear"></div>
				<article class="ListFinal">
				<h2><?php echo $this->lang->line('sr_serv03_title'); ?></h2>
					<ul>
						<?php 
							$serv03 = $this->lang->line('sr_serv03');						
							foreach($serv03 as $serv3){
						?>
						<li><?php echo $serv3; ?></li>
                    	<?php } ?>
					</ul>
				</article>
			</section>
		</div>
		<aside class="grid_7">
			<?php $this->load->view('comum/aside'); ?>
		</aside>
		<div class="clear"></div>
	</div>
	<?php $this->load->view('comum/footer'); ?>
