<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cache
 *
 * @author Conecte_Estudio
 */
class Cache extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('cache');
    }

    public function index() {
        $this->ReqInvalida();
    }

    public function DELET_ALL() {
        delete_all_cache();
        echo json_encode(array(TRUE));
    }

}

/* End of file {name}.php */
/* Location: ./application/controllers/{name}.php */

