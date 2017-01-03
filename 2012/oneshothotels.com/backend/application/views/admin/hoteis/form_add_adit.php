<?php
$Var = (isset($Valor)) ? $Valor : NULL ;
$GetCampo = new GeraCampo($SLUG, $Campo['type'],$Var);
$GetCampo->AddClass('autogrow');
if (isset($Campo['options'])) {
    $GetCampo->SetOPT($Campo['options']);
}
if (isset($Campo['class'])) {
    $GetCampo->AddClass($Campo['class']);
}
$Required = (isset($Campo['required'])) ? $Campo['required'] : FALSE;
if ($Required) {
    $GetCampo->SerRequired();
}
if (isset($Campo['placeholder'])) {
    $GetCampo->SetMETA(array('placeholder' => $Campo['placeholder']));
}
if (isset($Campo['readonly'])) {
    $GetCampo->SetMETA(array('readonly' => $Campo['readonly']));
}
if (isset($Campo['disabled'])) {
    $GetCampo->SetMETA(array('disabled' => $Campo['disabled']));
}
?>
<fieldset class="">
    <label>
        <?php echo $Campo['label']; ?>
        <span><?php echo $Campo['desc']; ?></span>
    </label>
    <div>
        <?php
        echo $GetCampo->Make();
        if ($Required) {
            echo '<div class="required_tag tooltip hover left" title="Campo obligatorio."></div>';
        }
        ?>

    </div>
</fieldset>
<?php
unset($GetCampo);