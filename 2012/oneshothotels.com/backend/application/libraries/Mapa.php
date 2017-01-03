<?php

/**
 * Description of Mapa
 *
 * @author luiz.vinicius73@gmail.com
 */
class Mapa {

    private $CI = NULL;
    private $api_key = 'AIzaSyDcGSGqf02jLj8MjLjrmbh7InFmXbF9Ng0';
   

    public function __construct($Acao = NULL) {
        $this->CI = &get_instance();
        $Acao = $Acao['action'];
        
    }

}