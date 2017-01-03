<?php

/**
 * Description of home.php
 *
 * @author Conecte_Estudio
 */
class Home extends MY_Controller {
    /*
     * Metodo construtor
     * Inicia MY_controller
     * Define Propriedades principais da classe
     */
    public function __construct() {
        parent::__construct();
        $this->ViewTemplate('admin');
    }
    
    /*
     * @name index
     * Define página inicial
     */
    public function index() {
        //Carregar VIEW
        $this->ViewLoad('home');
    }

}

/* End of file {name}.php */
/* Location: ./application/controllers/{name}.php */

