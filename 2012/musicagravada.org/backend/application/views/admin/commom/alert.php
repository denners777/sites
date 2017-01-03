<div class="container">
    <?php if ($ERRO) { ?>
        <div class="alert alert-error">
            <button class="close" data-dismiss="alert">×</button>
            <strong> <?php echo $ERRO; ?></strong>
        </div>
    <?php } ?>

    <?php if ($INFO) { ?>
        <div class="alert alert-info">
            <button class="close" data-dismiss="alert">×</button>
            <strong> <?php echo $INFO; ?></strong>
        </div>
    <?php } ?>

    <?php if ($SUCESSO) { ?>
        <div class="alert alert-success">
            <button class="close" data-dismiss="alert">×</button>
            <strong> <?php echo $SUCESSO; ?></strong>
        </div>
    <?php } ?>
</div>