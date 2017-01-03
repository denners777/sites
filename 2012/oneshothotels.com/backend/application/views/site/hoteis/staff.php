<?php echo $HEADER; ?>
<style>
.container_free{
	position: relative;
	top:-10px;
}
</style>
<div role="main" id="container" class="container_12 container_free" >
<?php foreach ($Galeria as $Imagem){ ?>
    <figure class="element">
        <?php echo img($Imagem[Galeria::MetaDados]['IMG']); ?>
    </figure>
<?php } ?>
</div>

<?php echo $FOOTER; ?>