<?php

/**
 * Description of site
 *
 * @author luiz.vinicius73@gmail.com
 */
class Site extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->ViewTemplate('admin');
    }

    public function index() {
        $this->ReqInvalida();
    }

    public function home($Acao = NULL) {
        #Não é POST
        if (empty($this->POST)) {
            #Galeria
            $this->load->model('galeria');
            $Criterio = array();
            $Criterio[Galeria::Vinculo] = 'homepage';
            $Criterio[Galeria::Slug] = 'slider';
            $this->sVAR['Galeria'] = $this->galeria->Get($Criterio);
            $this->sVAR['MetaDados'] = $this->metadata->Get('homepage');
            $this->sVAR['Hoteis'] = $this->_link_hoteis();
            ##View
            $this->SetPageTitle('Home Page');
            $this->ViewLoad('site/homepage');
        } else {
            $Dados = elements(array(Metadata::MetaDados), $this->POST);
            $Dados[Metadata::Vinculo] = 'homepage';
            $Dados[Metadata::Slug] = 'info';
            $Criterio = elements(array(Metadata::Slug, Metadata::Vinculo), $Dados);
            $Acao = $this->metadata->Salva($Dados, $Criterio);
            if ($Acao) {
                $this->session->set_flashdata(SessionSUCESSO, 'Homepage actualizada.');
            } else {
                $this->session->set_flashdata(SessionERRO, 'Error en la actualización.');
            }
            redirect('admin/site/home');
        }
    }

    public function contato() {
        if (empty($this->POST)) {
            #Dados
            $Criterio = array();
            $Criterio[Metadata::Vinculo] = 'contato';
            $Criterio[Metadata::Slug] = 'testo';
            $Dados = $this->metadata->Get($Criterio);
            $Dados = end($Dados);
            $this->sVAR['Dados'] = json_decode($Dados[Metadata::MetaDados], TRUE);
            #Titulo
            $this->SetPageTitle('Página de contacto');
            #View
            $this->ViewLoad('site/contato');
        } else {
            $Dados = array();
            $Criterio = array();
            $Dados[Metadata::Vinculo] = 'contato';
            $Dados[Metadata::Slug] = 'testo';
            $Criterio = $Dados;
            $Dados[Metadata::MetaDados] = $this->POST['Dados'];

            $Acao = $this->metadata->Salva($Dados, $Criterio);
            if ($Acao) {
                $this->session->set_flashdata(SessionSUCESSO, 'actualizado');
            } else {
                $this->session->set_flashdata(SessionERRO, 'No actualizado');
            }
            redirect('admin/site/contato');
        }
    }

    public function vagas($VagaID = NULL, $Acao = NULL) {
        $this->load->model('vaga');
        #Deletar Registro
        if ($Acao == 'DELETAR_REGISTRO' && is_numeric($VagaID)) {
            $this->vaga->DELETAR_REGISTRO($VagaID);
            $this->session->set_flashdata(SessionALERTA, 'Vacante eliminado');
            redirect('admin/site/vagas');
        }

        #View de Cadastro
        if (empty($this->POST)) {
            $this->SetPageTitle('Ofertas de trabajo');
            $this->sVAR['Lista'] = $this->vaga->Get(NULL, TRUE);
            $this->ViewLoad('site/vagas');
        } else {
            $Dados = elements(array(Vaga::Local), $this->POST);
            $Dados[Vaga::MetaDados] = $this->POST['Dados'];
            //Atualiza ou Cadastra
            if (is_numeric($Criterio)) {
                $Criterio = $VagaID;
            } else {
                $Criterio = NULL;
            }
            //Persistindo dados
            $Acao = $this->vaga->Salva($Dados, $Criterio);
            if ($Acao) {
                $this->session->set_flashdata(SessionSUCESSO, 'Éxito.');
            } else {
                $this->session->set_flashdata(SessionERRO, 'Falha.');
            }
            redirect('admin/site/vagas');
        }
    }

    private function _link_hoteis() {
        $Hoteis = $this->sVAR['Hoteis'] = $this->hotel->GetAll(TRUE);
        $Lista = array();
        foreach ($Hoteis as $Hotel) {
            $Lista[$Hotel[Hotel::Slug]] = $Hotel[Hotel::Nome];
        }
        return $Lista;
    }

}

/* End of file {name}.php */
/* Location: ./application/controllers/{name}.php */

