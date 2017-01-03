<?php
foreach ($SessAlertas as $Chave => $Alerta) {
    if (!empty($Alerta)) {
        switch ($Chave) {
            case SessionERRO:
                $Class = 'alert_red';
                $Icon = 'alert.png';
                break;
            case SessionALERTA:
                $Class = 'alert_orange';
                $Icon = 'alert_2.png';
                break;
            case SessionINFO:
                $Class = 'alert_blue';
                $Icon = 'speech_bubble.png';
                break;
            case SessionSUCESSO:
                $Class = 'alert_green';
                $Icon = 'facebook_like.png';
                break;
        }
        $THEMEASETS = THEMEASETS;
        ?>
        <div class="alert dismissible <?php echo $Class ?>">
            <img width="24" height="24" src="<?php echo site_url("{$THEMEASETS}images/icons/small/white/{$Icon}") ?>">
            <?php
            if (is_array($Alerta)) {
                foreach ($Alerta as $A) {
                    echo '<p>', $A, '</p>';
                }
            } else {
                echo $Alerta;
            }
            ?>
        </div>

    <?php } } ?>
