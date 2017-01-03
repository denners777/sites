<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of staff
 *
 * @author Conecte_Estudio
 */
class staff extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->ViewTemplate('admin');
    }

    public function index() {
        $this->ReqInvalida();
    }

    public function _galeria() {
        $Hotel = $this->hotel->Get($this->sVAR['G_SLUG']);
        if (empty($Hotel)) {
            $this->ReqInvalida('admin/hoteis');
        } else {
            $this->sVAR['HOTEL'] = $Hotel[0];
            $this->sVAR['HotelSlug'] = $this->sVAR['HOTEL'][Hotel::Slug];
            $this->ViewAdd('hoteis/hotel_btn', 'HotelBTN');
            unset($Hotel);
        }
        $this->SetPageTitle('Staff do Hotel');
        //Carrega VIEW
        $this->ViewLoad('hoteis/galeria');
    }

}

/* End of file {name}.php */
/* Location: ./application/controllers/{name}.php */

