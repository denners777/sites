<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends MY_Controller {

    public $VAR = array();

    public function __construct() {
        parent::__construct();
    }

    public function index($Pagina = 1) {
        $this->load->helper('ajudantes');
        $Pagina--;
        $this->VAR['ListaMusicas'] = $this->musica->GetAll($Pagina);
        $this->ViewLoad('admin/musicas/lista');
    }

}