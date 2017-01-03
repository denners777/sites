
		<?php /*include 'includes/dialogs/dialog_register.php'?>
		<?php include 'includes/dialogs/dialog_form.php'?>
		<?php include 'includes/dialogs/dialog_delete.php'?>
		<?php include 'includes/dialogs/dialog_welcome.php'?>
		<?php include 'includes/dialogs/dialog_logout.php' */
                $Path = 'assets/adminica/';?>
		<div id="loading_overlay">
			<div class="loading_message round_bottom">
				<img src="<?php echo base_url($Path.'images/interface/loading.gif'); ?>" alt="loading" />
			</div>
		</div>

<!-- Google Analytics Code (Remove if not needed)

		<script type="text/javascript">


		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-*******-*']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();


		</script>
-->

		</div>
<?php echo script_tag($Path.'myscript.js'); ?>
	</body>
</html>