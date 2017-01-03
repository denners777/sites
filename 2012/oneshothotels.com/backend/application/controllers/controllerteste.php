<?php

class Controllerteste extends MY_Controller {

    public $Migalhas = array();
    public $MenuTop = array();
    public $MenuFooter = array();
    public $MetaTags = array();

    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->model('evento');
        $Dado = $this->evento->Busca('6113938bed9f59cbba5011a91e446afc');
        print_r($Dado);
    }

}