<?php

/**
 * Description of home.php
 *
 * @author Conecte_Estudio
 */
class Faqs extends MY_Controller {
    /*
     * Metodo construtor
     * Inicia MY_controller
     * Define Propriedades principais da classe
     */

    public function __construct() {
        parent::__construct();
        $this->ViewTemplate('admin');
        $this->load->model('faq');
    }

    /*
     * @name index
     * Define página inicial
     */

    public function index() {
        $this->load->helper('text');
        $this->sVAR['FAQLISTA'] = $this->faq->GetList();
        $this->SetPageTitle('FAQ');
        $this->ViewLoad('faqs/faq_index');
    }

    public function cadastro($FAQ = NULL) {
        if (empty($this->POST)) {
            $this->ReqInvalida('admin/faqs');
        } else {
            $Dados = elements(array(Faq::Pergunta, Faq::Resposta), $this->POST, NULL);
            $Dados[Faq::Pergunta] = json_encode($Dados[Faq::Pergunta]);
            $Dados[Faq::Resposta] = json_encode($Dados[Faq::Resposta]);
            if (is_numeric($FAQ)) {
                $Criterio = array(Faq::ID => $FAQ);
                $INFO = 'Pregunta actualizado correctamente.';
            } else {
                $Criterio = NULL;
                $INFO = 'Pregunta registrado con éxito.';
            }
            $this->faq->Salva($Dados, $Criterio);
            $this->session->set_flashdata(SessionSUCESSO, $INFO);
            redirect('admin/faqs');
        }
    }

    public function atualizar($FAQ = NULL) {
        $this->cadastro($FAQ);
    }

    public function deletar($FAQ = NULL) {
        if (is_numeric($FAQ)) {
            $this->faq->Deletar($FAQ);
            $this->session->set_flashdata(SessionALERTA, 'Pregunta eliminada.');
            redirect('admin/faqs');
        } else {
            $this->ReqInvalida('admin/faqs');
        }
    }

}

/* End of file faqs.php */
/* Location: ./application/controllers/faqs.php */

