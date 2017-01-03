<?php $this->load->view('comum/header'); ?>
	<div role="main" class="container_24 CORPOPAGINA" id="HOME">
		<div class="grid_17 DivMain">
			<div class="BarraAzul"></div>
			<!--Slider -->
			<div id="Slider">
            <?php 
				$banner = $this->lang->line('banner');
				$acao = $this->lang->line('action');
			?>
				<figure>
                <?php echo img('assets/img/banner/01.jpg');?>
					<figcaption>
						<p> <?php echo $banner[0]; ?> </p>
						<?php echo anchor('contato', $acao); ?>
					</figcaption>
				</figure>
				<figure>
                     <?php echo img('assets/img/banner/02.jpg');?>
					<figcaption>
						<p> <?php echo $banner[1]; ?> </p>
						<?php echo anchor('contato', $acao); ?>
					</figcaption>
				</figure>
				<figure>
                     <?php echo img('assets/img/banner/03.jpg');?>
					<figcaption>
						<p> <?php echo $banner[2]; ?> </p>
						<?php echo anchor('contato', $acao); ?>
					</figcaption>
				</figure>
			</div>
			<!--Fim Slider -->
			<article>
				<h2><?php echo $this->lang->line('qs_title'); ?> //</h2>
				<p><?php echo $this->lang->line('qs_content'); ?></p>
			</article>
			<section>
				<table id="Clocks">
					<thead>
						<tr>
							<th>Brasilia
								</td>
							<th>NewYork
								</td>
							<th>London
								</td>
							<th>Tokyo
								</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><canvas id="clk1" class="CoolClock::50:noSeconds:-3:showDigital"></canvas></td>
							<td><canvas id="clk2" class="CoolClock::50:noSeconds:-4:showDigital"></canvas></td>
							<td><canvas id="clk3" class="CoolClock::50:noSeconds:+1:showDigital"></canvas></td>
							<td><canvas id="clk4" class="CoolClock::50:noSeconds:-3:showDigital"></canvas></td>
						</tr>
					</tbody>
				</table>
			</section>
		</div>
		<aside class="grid_7">
			<?php $this->load->view('comum/aside'); ?>
		</aside>
		<div class="clear"></div>
	</div>
	<?php $this->load->view('comum/footer'); ?>