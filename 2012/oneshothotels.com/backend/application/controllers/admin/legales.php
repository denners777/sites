<?php

/**
 * Description of home.php
 *
 * @author Conecte_Estudio
 */
class Legales extends MY_Controller {
    /*
     * Metodo construtor
     * Inicia MY_controller
     * Define Propriedades principais da classe
     */

    public function __construct() {
        parent::__construct();
        $this->ViewTemplate('admin');
        $this->load->model('legale');
    }

    /*
     * @name index
     * Define página inicial
     */

    public function index() {
        $this->load->helper('text');
        $this->sVAR['LEGALESLISTA'] = $this->legale->GetList();
        $this->SetPageTitle('Legales');
        $this->ViewLoad('legales/legales_index');
    }

    public function cadastro($Legale = NULL) {
        if (empty($this->POST)) {
            $this->ReqInvalida('admin/legales');
        } else {
            $Dados = elements(array(Legale::Nome, Legale::Valor), $this->POST, NULL);
            $Dados[Legale::Nome] = json_encode($Dados[Legale::Nome]);
            $Dados[Legale::Valor] = json_encode($Dados[Legale::Valor]);
            if (is_numeric($Legale)) {
                $Criterio = array(Legale::ID => $Legale);
                $INFO = 'Pregunta actualizado correctamente.';
            } else {
                $Criterio = NULL;
                $INFO = 'Pregunta registrado con éxito.';
            }
            $this->legale->Salva($Dados, $Criterio);
            $this->session->set_flashdata(SessionSUCESSO, $INFO);
            redirect('admin/legales');
        }
    }

    public function atualizar($Legale = NULL) {
        $this->cadastro($Legale);
    }

    public function deletar($Legale = NULL) {
        if (is_numeric($Legale)) {
            $this->legale->Deletar($Legale);
            $this->session->set_flashdata(SessionALERTA, 'Pregunta eliminada.');
            redirect('admin/legales');
        } else {
            $this->ReqInvalida('admin/legales');
        }
    }

}

/* End of file Legales.php */
/* Location: ./application/controllers/Legales.php */

