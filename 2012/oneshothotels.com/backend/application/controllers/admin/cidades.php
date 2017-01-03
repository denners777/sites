<?php

/**
 * Description of cidades
 *
 * @author Conecte_Estudio
 */
class cidades extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->ViewTemplate('admin');
    }

    public function index($Criterio = NULL) {
        //$this->output->cache(3);
        if (is_null($Criterio)) {
            //Helpers
            $this->load->helper('text');
            //Pega Lista
            $this->sVAR['Cidades'] = $this->cidade->GetAll(TRUE);
            //Define Titulo
            $this->SetPageTitle('Lista de las ciudades');
            //Carrega VIEW
            $this->ViewLoad('cidades/index');
        } else {
            
        }
    }

    public function cadastro() {
        if (!empty($this->POST)) {
            $this->exeCadastra();
        } else {
            $this->SetPageTitle('Regístrese Ciudades.');
            $this->_setMetadados();
            $this->ViewLoad('cidades/cadastro');
        }
    }
    
    public function DELETAR_C($Cidade = NULL){
        if(is_numeric($Cidade)){
            $this->cidade->DELETAR_REGISTRO($Cidade);
            $this->session->set_flashdata(SessionINFO, 'Cidade Deletada');
            redirect('admin/cidades');
        }
    }

    public function _setMetadados() {
        $CamposPadrao = array();
        $CamposMeta = array();
        $CamposArquivos = array();
        $CamposPadrao['NOME'] = array(
            'slug' => Cidade::Nome,
            'label' => 'nombre',
            'desc' => 'Nombre de la ciudad',
            'type' => 'text',
            'required' => true
        );
        $CamposPadrao['SLUG'] = array(
            'slug' => Cidade::Slug,
            'label' => 'Slug',
            'desc' => 'Slug para crear indexación Friendly URL y los datos de la ciudad.',
            'type' => 'text',
            'required' => true
        );

        $CamposMeta[] = array(
            'slug' => '[Descricao_EN]',
            'label' => 'Descripción [EN]',
            'desc' => 'Descripción de la ciudad',
            'type' => 'textarea',
            'required' => true,
            'placeholder' => 'Escriba aquí la descripción de la ciudad'
        );

        $CamposMeta[] = array(
            'slug' => '[Descricao_ES]',
            'label' => 'Descripción [ES]',
            'desc' => 'Descripción de la ciudad',
            'type' => 'textarea',
            'required' => true,
            'placeholder' => 'Escriba aquí la descripción de la ciudad'
        );

        /*         * *********** */
        $Imagens['img_eventos'] = array(
            'label' => 'Imagem Eventos',
            'config' => array(
                'allowed_types' => 'jpg',
                'max_size' => '1024',
                'max_width' => '570',
                'max_height' => '345',
            ),
        );

        $Imagens['img_guia'] = array(
            'label' => 'Imagem Guia',
            'config' => array(
                'allowed_types' => 'jpg',
                'max_size' => '1024',
                'max_width' => '370',
                'max_height' => '220',
            ),
        );

        $Imagens['img_01'] = array(
            'label' => 'Imagem 01',
            'config' => array(
                'allowed_types' => 'jpg',
                'max_size' => '1024',
                'max_width' => '570',
                'max_height' => '345',
            ),
        );

        $Imagens['img_02'] = array(
            'label' => 'Imagem 02',
            'config' => array(
                'allowed_types' => 'jpg',
                'max_size' => '1024',
                'max_width' => '370',
                'max_height' => '451',
            ),
        );

        $Imagens['img_03'] = array(
            'label' => 'Imagem 03',
            'config' => array(
                'allowed_types' => 'jpg',
                'max_size' => '1024',
                'max_width' => '370',
                'max_height' => '220',
            ),
        );

        $Imagens['img_04'] = array(
            'label' => 'Imagem 04',
            'config' => array(
                'allowed_types' => 'jpg',
                'max_size' => '1024',
                'max_width' => '370',
                'max_height' => '220',
            ),
        );

        $Imagens['img_05_ES'] = array(
            'label' => 'Promo [ES]',
            'config' => array(
                'allowed_types' => 'jpg',
                'max_size' => '1024',
                'max_width' => '370',
                'max_height' => '220',
            ),
        );
        
        $Imagens['img_05_EN'] = array(
            'label' => 'Promo [EN]',
            'config' => array(
                'allowed_types' => 'jpg',
                'max_size' => '1024',
                'max_width' => '370',
                'max_height' => '220',
            ),
        );

        $this->sVAR['Imagens'] = $Imagens;
        $this->sVAR['CamposCidade'] = $CamposPadrao;
        $this->sVAR['MetaDados'][Cidade::MetaDados] = $CamposMeta;
        $this->sVAR['Arquivos'] = $CamposArquivos;
        unset($CamposArquivos, $CamposMeta, $CamposPadrao, $Imagens);
    }

    public function editar($Criterio = NULL) {
        if (!empty($this->POST)) {
            $this->exeAtualiza();
        } else if (is_numeric($Criterio) or is_string($Criterio)) {
            //Pega cidade
            $this->sVAR['Cidade'] = $this->cidade->Get($Criterio);
            $this->sVAR['Cidade'] = $this->sVAR['Cidade'][0];
            $this->sVAR['Cidade'][Cidade::MetaDados] = json_decode($this->sVAR['Cidade'][Cidade::MetaDados], TRUE);
            $this->_setMetadados();
            $this->sVAR['METADADOSIMAGEM'] = $this->metadata->Get($Criterio);
            $this->sVAR['CamposCidade']['SLUG']['disabled'] = 'disabled';
            $this->SetPageTitle('edición de ciudad &bull; ' . $this->sVAR['Cidade'][Cidade::Nome]);
            //Carrega VIEW
            $this->ViewLoad('cidades/editar');
        } else {
            redirect('admin/cidades');
        }
    }

    private function exeCadastra() {
        $this->load->helper('slug');
        //Define Campos a serem Salvos
        $Campos = array(Cidade::Nome, Cidade::Slug, Cidade::MetaDados);
        $Dados = elements($Campos, $this->POST, NULL);
        //Trata Slug
        $Dados[Cidade::Slug] = criaSlug(strtolower($Dados[Cidade::Slug]));
        //Trata MetaDados
        $Dados[Cidade::MetaDados] = json_encode($Dados[Cidade::MetaDados]);
        //Adciona no Banco de Dados
        $this->cidade->Salva($Dados);
        //Retorno Cidade q acaba de ser cadastrada
        $this->session->set_flashdata(SessionSUCESSO, 'Ciudad registrado con éxito!');
        redirect('admin/cidades/editar/' . $Dados[Cidade::Slug]);
    }

    private function exeAtualiza() {
        if (isset($this->POST[Cidade::ID])) {
            //Define Campos a serem Salvos
            $Campos = array(Cidade::Nome, Cidade::MetaDados,Cidade::Status);
            $Dados = elements($Campos, $this->POST, NULL);
            //Trata MetaDados
            $Dados[Cidade::MetaDados] = json_encode($Dados[Cidade::MetaDados]);
            //Adciona no Banco de Dados
            $this->cidade->Salva($Dados, $this->POST[Cidade::ID]);
            //Retorno Cidade q acaba de ser atualizada
            $this->session->set_flashdata(SessionSUCESSO, 'Ciudad actualizado correctamente!');
            redirect('admin/cidades/editar/' . $this->POST[Cidade::Slug]);
        } else {
            $this->session->set_flashdata(SessionERRO, 'Invalid petición.');
            redirect('admin/cidades');
        }
    }

}

/* End of file cidades.php */
/* Location: ./application/controllersadmin/cidades.php */

