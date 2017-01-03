<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of hoteis
 *
 * @author Conecte_Estudio
 */
class Hoteis extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->ViewTemplate('admin');
    }

    public function index($Criterio = NULL) {
        if (is_null($Criterio)) {
            //Helpers
            $this->load->helper('text');
            //Pega Lista
            $this->sVAR['Hoteis'] = $this->hotel->GetAll(TRUE);
            //Define Titulo
            $this->SetPageTitle('Lista de Hoteis');
            //Carrega VIEW
            $this->ViewLoad('hoteis/index');
        } else {
            
        }
    }

    public function cadastro() {
        if (!empty($this->POST)) {
            $this->exeCadastra();
        } else {
            $this->SetPageTitle('Registro Hoteles');
            $this->_setMetadados();
            $this->ViewLoad('hoteis/cadastro');
        }
    }

    public function editar($Criterio = NULL) {
        //Existe Post executa Atualiza
        if (!empty($this->POST)) {
            $this->exeAtualiza();
        } else if (is_string($Criterio)) {

            $this->sVAR['MetaDados'] = $this->metadata->Get($Criterio);

            //Pega cidade
            $this->sVAR['Hotel'] = $this->hotel->Get($Criterio);
            $this->sVAR['Hotel'] = $this->sVAR['Hotel'][0];
            $this->sVAR['Hotel'][Hotel::MetaDados] = json_decode($this->sVAR['Hotel'][Hotel::MetaDados], TRUE);
            $this->_setMetadados();
            unset($this->sVAR['CamposPadrao'][Hotel::Cidade]);
            $this->sVAR['CamposPadrao'][Hotel::Slug]['disabled'] = 'disabled';
            ##
            $Cidade = $this->cidade->Get($this->sVAR['Hotel'][Hotel::Cidade]);
            $Cidade = end($Cidade);
            $this->SetPageTitle('edición de hotel &bull; ' . $this->sVAR['Hotel'][Hotel::Nome], $Cidade[Cidade::Nome]);
            //Carrega VIEW
            $this->sVAR['HotelSlug'] = $this->sVAR['Hotel'][Hotel::Slug];
            $this->ViewAdd('hoteis/hotel_btn', 'HotelBTN');
            $this->ViewLoad('hoteis/editar');
        } else {
            redirect('admin/hoteis');
        }
    }

    private function exeCadastra() {
        //Cidade Inválida
        if ($this->POST[Hotel::Cidade] == 0 or !is_numeric($this->POST[Hotel::Cidade])) {
            $this->session->set_flashdata(SessionERRO, 'Ciudad no válida.');
            //Slug ou Nome inválido
        } else if (empty($this->POST[Hotel::Nome]) or empty($this->POST[Hotel::Slug])) {
            $this->session->set_flashdata(SessionERRO, 'Datos incompletos.');
        } else {
            //Helper
            $this->load->helper('slug');
            //Campos
            $Campos = array(Hotel::Cidade, Hotel::Slug, Hotel::Nome);
            //Valores
            $Dados = elements($Campos, $this->POST);
            //Slug
            $Dados[Hotel::Slug] = criaSlug(strtolower($Dados[Hotel::Slug]));
            $this->hotel->Salva($Dados);
            $this->session->set_flashdata(SessionSUCESSO, 'Hotel registrado con éxito.');
            redirect('admin/hoteis/editar/' . $Dados[Hotel::Slug]);
        }
    }

    private function exeAtualiza() {
        if (isset($this->POST[Hotel::ID])) {
            //Define Campos a serem Salvos
            $Campos = array(Hotel::Nome, Hotel::MetaDados, Hotel::Status);
            $Dados = elements($Campos, $this->POST, NULL);
            //Trata MetaDados
            $Dados[Hotel::MetaDados] = json_encode($Dados[Hotel::MetaDados]);
            //Adciona no Banco de Dados
            $this->hotel->Salva($Dados, $this->POST[Hotel::ID]);
            //Retorno Hotel q acaba de ser atualizada
            $this->session->set_flashdata(SessionSUCESSO, 'Ciudad actualizado correctamente!');
            redirect('admin/hoteis/editar/' . $this->POST[Hotel::Slug]);
        } else {
            $this->session->set_flashdata(SessionERRO, 'Invalid petición.');
            redirect('admin/hoteis');
        }
    }

    public function _setMetadados() {
        $CamposPadrao = array();
        $Imagens = array();
        $CamposExtras = array();
        $CamposPadrao[Hotel::Cidade] = array(
            'slug' => Hotel::Cidade,
            'label' => 'Ciudad',
            'desc' => 'seleccionar un hotel de ciudad.',
            'type' => 'option',
            'options' => array(),
            'class' => 'uniform',
            'required' => true
        );
        $CamposPadrao[Hotel::Nome] = array(
            'slug' => Hotel::Nome,
            'label' => 'nombre',
            'desc' => 'Nombre de la ciudad',
            'type' => 'text',
            'required' => true
        );
        $CamposPadrao[Hotel::Slug] = array(
            'slug' => Hotel::Slug,
            'label' => 'Slug',
            'desc' => 'Slug para una URL amigable.',
            'type' => 'text',
            'required' => true
        );

        $CamposExtras['Descricao_EN'] = array(
            'slug' => 'Descricao_EN',
            'label' => 'Descripción [EN]',
            'desc' => 'Descripción',
            'type' => 'textarea',
            'required' => true
        );

        $CamposExtras['Descricao_ES'] = array(
            'slug' => 'Descricao_ES',
            'label' => 'Descripción [ES]',
            'desc' => 'Descripción',
            'type' => 'textarea',
            'required' => true
        );

        $CamposExtras['endereco'] = array(
            'slug' => 'endereco',
            'label' => 'Direccion',
            'desc' => 'Hotel Dirección',
            'type' => 'text',
        ); //
        
        $CamposExtras['telefone'] = array(
            'slug' => 'telefone',
            'label' => 'Teléfono',
            'desc' => 'Hotel Teléfono',
            'type' => 'text',
        );

        $CamposExtras['longitude'] = array(
            'slug' => 'longitude',
            'label' => 'Longitude',
            'desc' => 'Longitude para marcação no mapa',
            'type' => 'text',
        );

        $CamposExtras['latitude'] = array(
            'slug' => 'latitude',
            'label' => 'Latitude',
            'desc' => 'Latitude para marcação no mapa',
            'type' => 'text',
        );

        $Imagens['pdf_guia'] = array(
            'label' => 'PDF Guia',
            'config' => array(
                'allowed_types' => 'pdf',
                'max_size' => '1024',
                'max_width' => NULL,
                'max_height' => NULL,
            ),
        );

        $Imagens['logo'] = array(
            'label' => 'Logo',
            'config' => array(
                'allowed_types' => 'jpg|png',
                'max_size' => '1024',
                'max_width' => '350',
                'max_height' => '350',
            ),
        );

        $Imagens['img_destaque'] = array(
            'label' => 'Imagem Principal',
            'config' => array(
                'allowed_types' => 'jpg',
                'max_size' => '1024',
                'max_width' => '600',
                'max_height' => '600',
            ),
        );
        $Imagens['habitaciones'] = array(
            'label' => 'Habitaciones',
            'config' => array(
                'allowed_types' => 'jpg',
                'max_size' => '1024',
                'max_width' => '600',
                'max_height' => '600',
            ),
        );

        $Imagens['foto01_ES'] = array(
            'label' => 'Promo [ES]',
            'config' => array(
                'allowed_types' => 'jpg',
                'max_size' => '1024',
                'max_width' => '570',
                'max_height' => '260',
            ),
        );
        
        $Imagens['foto01_EN'] = array(
            'label' => 'Promo [EN]',
            'config' => array(
                'allowed_types' => 'jpg',
                'max_size' => '1024',
                'max_width' => '570',
                'max_height' => '260',
            ),
        );

        $Imagens['eventos'] = array(
            'label' => 'Eventos',
            'config' => array(
                'allowed_types' => 'jpg',
                'max_size' => '1024',
                'max_width' => '170',
                'max_height' => '765',
            ),
        );
        $Imagens['eventos2'] = array(
            'label' => 'Eventos',
            'config' => array(
                'allowed_types' => 'jpg',
                'max_size' => '1024',
                'max_width' => '320',
                'max_height' => '185',
            ),
        );

        $Imagens['foto02'] = array(
            'label' => 'Foto02',
            'config' => array(
                'allowed_types' => 'jpg',
                'max_size' => '1024',
                'max_width' => '370',
                'max_height' => '490'
            ),
        );


        $Imagens['fotos'] = array(
            'label' => 'Fotos',
            'config' => array(
                'allowed_types' => 'jpg',
                'max_size' => '1024',
                'max_width' => '370',
                'max_height' => '255',
            ),
        );

        $Imagens['staff'] = array(
            'label' => 'Staff',
            'config' => array(
                'allowed_types' => 'jpg',
                'max_size' => '1024',
                'max_width' => '600',
                'max_height' => '600',
            ),
        );

        $Imagens['foto03'] = array(
            'label' => 'Foto04',
            'config' => array(
                'allowed_types' => 'jpg',
                'max_size' => '1024',
                'max_width' => '370',
                'max_height' => '400'
            ),
        );

        $Imagens['localization'] = array(
            'label' => 'Localization',
            'config' => array(
                'allowed_types' => 'jpg',
                'max_size' => '1024',
                'max_width' => '600',
                'max_height' => '600',
            ),
        );

        $Imagens['icon_maps'] = array(
            'label' => 'Icone MAPS',
            'config' => array(
                'allowed_types' => 'jpg|png',
                'max_size' => '512',
                'max_width' => '65',
                'max_height' => '90',
            ),
        );

        $this->sVAR['CamposPadrao'] = $CamposPadrao;
        $this->sVAR['CamposExtras'] = $CamposExtras;
        $this->sVAR['Imagens'] = $Imagens;
        //Define Cidades
        $Cidades = $this->cidade->GetList();
        $Cidades[''] = '-selecione uma cidade';
        asort($Cidades);
        $this->sVAR['CamposPadrao'][Hotel::Cidade]['options'] = $Cidades;
        //Apaga Variaveis
        unset($CamposPadrao, $Cidades, $CamposExtras, $Imagens);
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
        $this->SetPageTitle('Galaria do Hotel');
        //Carrega VIEW
        $this->ViewLoad('hoteis/galeria');
    }

    public function habitaciones($Slug = NULL, $Tipo = NULL, $hAcao = NULL) {
        $this->load->model('habitacione');
        #POST
        if (!empty($this->POST)) {
            $this->_habitacione_save($Slug, $Tipo);
            #SOMENTE SLUG/HOTEL
        } else if (is_string($Slug) && is_null($Tipo)) {
            //Valida Hotel
            $this->sVAR['Hotel'] = $this->hotel->Get($Slug);
            //não existe hotel
            if (empty($this->sVAR['Hotel'])) {
                $this->ReqInvalida('admin/hoteis');
            } else {
                //Carrega View
                $this->sVAR['Hotel'] = $this->sVAR['Hotel'][0];
                $this->sVAR['ListaHabitaciones'] = $this->habitacione->TipoDeAbitaciones;
                $this->sVAR['HabitacionesHotel'] = $this->habitacione->GetByHotel($Slug, TRUE);
                $this->SetPageTitle('Lista de habitaciones', $this->sVAR['Hotel'][Hotel::Nome]);
                $this->sVAR['HotelSlug'] = $this->sVAR['Hotel'][Hotel::Slug];
                $this->ViewAdd('hoteis/hotel_btn', 'HotelBTN');
                $this->ViewLoad('hoteis/habitaciones_index');
            }

            #SLUG/HOTEL E TIPO E ACAO
        } else if (is_string($Slug) && is_string($Tipo) && is_string($hAcao)) {

            if ($hAcao == 'N' or $hAcao == 'S') {
                $Criterio = array();
                $Criterio[Habitacione::Slug] = $Slug;
                $Criterio[Habitacione::Tipo] = $Tipo;
                $Dados = array();
                $Dados[Habitacione::Ativo] = $hAcao;
                $this->habitacione->Salva($Dados, $Criterio);
                $this->session->set_flashdata(SessionSUCESSO, 'Habitacione actualizado correctamente');
                redirect("admin/hoteis/habitaciones/$Slug/");
            } else {
                $this->ReqInvalida("admin/hoteis/$Slug");
            }

            #SLUG/HOTEL E TIPO
        } else if (is_string($Slug) && is_string($Tipo)) {
            //Valida Hotel e $Tito
            $this->sVAR['Hotel'] = $this->hotel->Get($Slug);

            if (empty($this->sVAR['Hotel']) && !in_array($Tipo, $this->habitacione->TipoDeAbitaciones)) {
                $this->ReqInvalida('admin/hoteis');
            } else {

                $this->sVAR['Hotel'] = $this->sVAR['Hotel'][0];
                //Pega Dados no Banco de Dados
                $Criterio = array(Habitacione::Slug => $Slug, Habitacione::Tipo => $Tipo);
                $this->sVAR['HABITACIONE'] = $this->habitacione->Get($Criterio);
                if (!empty($this->sVAR['HABITACIONE'])) {
                    $this->sVAR['HABITACIONE'] = $this->sVAR['HABITACIONE'][0];
                }
                //Preparando Dados
                $DadosHabitation = array('ID', 'TITULO', 'DESC', 'LINK', 'CAPA','INDEXDESC');

                //Existem Meta Dados
                if (isset($this->sVAR['HABITACIONE'][Habitacione::MetaDados])) {
                    $META = json_decode($this->sVAR['HABITACIONE'][Habitacione::MetaDados], TRUE);
                    $DadosHabitation = elements($DadosHabitation, $META);
                    $DadosHabitation['ID'] = $this->sVAR['HABITACIONE'][Habitacione::ID];
                    unset($META);
                    //Não Existe
                } else {
                    $DadosHabitation = elements($DadosHabitation, array(), NULL);
                    $DadosHabitation['DESC']['EN'] = NULL;
                    $DadosHabitation['DESC']['ES'] = NULL;
                    $DadosHabitation['INDEXDESC']['EN'] = NULL;
                    $DadosHabitation['INDEXDESC']['ES'] = NULL;
                    $DadosHabitation['CAPA'] = NULL; //
                }
                $this->sVAR['HABITACIONE'] = $DadosHabitation;
                $this->sVAR['LinkCadGaleria'] = site_url("admin/galerias/cadastra/hoteis/{$Slug}/{$Tipo}");
                $this->sVAR['LinkCadSlider'] = site_url("admin/galerias/cadastra/hoteis/{$Slug}/{$Tipo}-slider");

                $this->sVAR['SLUG'] = $Slug;
                $this->sVAR['TIPO'] = $Tipo;

                unset($Criterio);
                $this->load->model('galeria');
                $Criterio[Galeria::Vinculo] = 'hoteis';
                $Criterio[Galeria::Slug] = $Slug;
                $Criterio[Galeria::Habitacione] = $Tipo;

                //IMAGENS
                $this->sVAR['Galeria']['IMAGENS'] = $this->galeria->Get($Criterio);
                $Criterio[Galeria::Habitacione] = $Criterio[Galeria::Habitacione] . '-slider';
                $this->sVAR['Galeria']['SLIDER'] = $this->galeria->Get($Criterio);

                if (!is_array($this->sVAR['Galeria']['IMAGENS'])) {
                    $this->sVAR['Galeria']['IMAGENS'] = array();
                }
                if (!is_array($this->sVAR['Galeria']['SLIDER'])) {
                    $this->sVAR['Galeria']['SLIDER'] = array();
                }
                //Carrega View
                $this->SetPageTitle('Editar de habitacione: ' . strtoupper($Tipo), $this->sVAR['Hotel'][Hotel::Nome]);
                $this->sVAR['HotelSlug'] = $this->sVAR['Hotel'][Hotel::Slug];
                $this->ViewAdd('hoteis/hotel_btn', 'HotelBTN');
                $this->ViewLoad('hoteis/habitaciones_edit');
            }

            #ERRO
        } else {
            $this->ReqInvalida('admin/hoteis');
        }
    }

    private function _habitacione_save($Slug, $Tipo) {
        //Dados
        $Metadados = elements(array('TITULO', 'DESC','INDEXDESC', 'LINK', 'CAPA'), $this->POST, NULL);

        $Dados = array();
        $Dados[Habitacione::Slug] = $Slug;
        $Dados[Habitacione::Tipo] = $Tipo;
        $Dados[Habitacione::Ativo] = 'S';

        $TudoOK = TRUE;
        // @action upload
        // @to do upload
        if ($_FILES['IMAGEM']['size'] > 0 && $_FILES['IMAGEM']['size'] = !0) {
            $config = array();
            $config['upload_path'] = PublicPath . "hoteis/{$Slug}/habitaciones/{$Tipo}/capa/";
            $config['allowed_types'] = 'jpg|jpeg';
            $config['max_size'] = '1024';
            $config['max_width'] = '870';
            $config['max_height'] = '370';
            $config['encrypt_name'] = TRUE;

            $this->ValidaPasta($config['upload_path']);
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('IMAGEM')) {
                //Prepara Dados
                $DadosArquivo = $this->upload->data();
                $Metadados['CAPA'] = str_replace(PublicPath, '', $config['upload_path']) . $DadosArquivo['file_name'];
            } else {
                $ERRO = 'Erro no upload ' . $this->upload->display_errors('&bull; ', '');
                $this->session->set_flashdata(SessionALERTA, $ERRO);
                $TudoOK = FALSE;
            }
        }

        if ($TudoOK) {
            $Dados[Habitacione::MetaDados] = json_encode($Metadados);
            $Criterio = elements(array(Habitacione::Slug, Habitacione::Tipo), $Dados, NULL);
            $ACAO = $this->habitacione->Salva($Dados, $Criterio);
        } else {
            $ACAO = FALSE;
        }
        //Criterio
        if ($ACAO) {
            $this->session->set_flashdata(SessionSUCESSO, 'Actualizado correctamente');
        } else {
            $this->session->set_flashdata(SessionERRO, 'Error. No se actualiza.');
        }
        redirect("admin/hoteis/habitaciones/{$Slug}/$Tipo");
    }

}

/* End of file {name}.php */
/* Location: ./application/controllers/{name}.php */

