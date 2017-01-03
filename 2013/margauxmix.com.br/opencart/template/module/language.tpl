<?php if (count($languages) > 1) { ?>

<form action="<?php echo $action; ?>" id="formLang" method="post" enctype="multipart/form-data">
  <?php foreach ($languages as $language) { ?>
  <span alt="<?php echo $language['name']; ?>" class="<?php echo $language['name']; ?> codeLang" title="<?php echo $language['name']; ?>" data-code="<?php echo $language['code']; ?>">
  </span>
  <?php } ?>
    <input id="setlang" type="hidden" name="language_code" value="" />
  <input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />
</form>

<script>
    $(document).ready(function(){
        $('.codeLang').click(function(){
            code = $(this).data('code');
            $('#setlang').val(code);
            $('#formLang').submit(); 
        });
    });
</script>

<?php } ?>