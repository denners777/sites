<?php

/**
 * Description of site
 *
 * @author luiz.vinicius73@gmail.com
 */
class Skins extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->ViewTemplate('admin');
        $this->load->model('skin');
    }

    public function _remap($Metodo, $Parametros = array()) {
        $stact = 'stact_' . $Metodo;
        if (method_exists($this, $stact)) {
            $this->sVAR['PAR'] = $Parametros;
            return call_user_func_array(array($this, $stact), $Parametros);
        } else {
            #Valida HOTEL
            $this->sVAR['HOTEL'] = $this->hotel->Get($Metodo);
            if (empty($this->sVAR['HOTEL'])) {
                $this->ReqInvalida();
            } else {
                $this->sVAR['HOTEL'] = end($this->sVAR['HOTEL']);
                #Motedo
                $this->editando();
            }
        }
    }

    public function stact_index() {
        $this->ReqInvalida();
    }

    public function stact_add($Slug = NULL, $Nome = NULL, $Idioma = NULL) {
        if (is_null($Slug) || is_null($Nome) || is_null($Idioma) || empty($this->POST)) {
            $this->ReqInvalida();
        } else {
            $this->_MetaDados();
            if (isset($this->sVAR['FILES'][$Nome])) {
                #Arquivo Existe
                if ($_FILES['IMAGEM']['error'] == 0) {
                    #Config
                    $arqDados = $this->sVAR['FILES'][$Nome];
                    $config = array();
                    $config = $arqDados['config'];
                    $config['upload_path'] = PublicPath . "{$Slug}/skin/{$Idioma}/{$Nome}/";
                    $config['encrypt_name'] = TRUE;
                    $this->ValidaPasta($config['upload_path']);
                    #Library
                    $this->load->library('upload', $config);
                    #Upload
                    if ($this->upload->do_upload('IMAGEM')) {
                        #Dados
                        $DadosArquivo = $this->upload->data();
                        $Dados = array();
                        $Dados[Skin::Nome] = $Nome;
                        $Dados[Skin::Slug] = $Slug;
                        $Dados[Skin::Idioma] = $Idioma;
                        #Criterio
                        $Criterio = $Dados;
                        #MetaDados
                        $Dados[Skin::MetaDados] = str_replace(PublicPath, '', $config['upload_path']) . $DadosArquivo['file_name'];
                        #Ação
                        $Acao = $this->skin->Salva($Dados, $Criterio);
                        if ($Acao) {
                            $this->session->set_flashdata(SessionSUCESSO, 'Acción realizada con éxito.');
                        } else {
                            $this->session->set_flashdata(SessionERRO, 'Error en el registro.');
                        }
                        #FIM
                    } else {
                        $ERRO = 'Erro no upload ' . $this->upload->display_errors('&bull; ', '');
                        $this->session->set_flashdata(SessionERRO, $ERRO);
                    } //Fim Upload
                } else {
                    $this->session->set_flashdata(SessionALERTA, 'Arquivo ausente.');
                }//Fim File
            } else {
                $this->session->set_flashdata(SessionERRO, 'Arquivo solicitado não existe na lista!');
            }//Fim registro
            #Redireciona
            redirect("admin/skins/{$Slug}/");
        }
    }

    private function editando() {
        $this->_MetaDados();
        $this->sVAR['HotelSlug'] = $this->sVAR['HOTEL'][Hotel::Slug];
        $this->ViewAdd('hoteis/hotel_btn', 'HotelBTN');
        #IMAGENS
        $Criterio = array();
        $Criterio[Skin::Slug] = $this->sVAR['HotelSlug'];
        # @var $skin array
        $this->sVAR['Skins'] = array();
        #ES
        $Criterio[Skin::Idioma] = 'ES';
        $this->sVAR['Skins']['ES'] = $this->skin->Get($Criterio);
        #EN
        $Criterio[Skin::Idioma] = 'EN';
        $this->sVAR['Skins']['EN'] = $this->skin->Get($Criterio);
        #View
        $this->SetPageTitle('ID Visual de ' . $this->sVAR['HOTEL'][Hotel::Nome]);
        $this->ViewLoad('skins/editando');
    }

    private function _MetaDados() {
        $this->load->model('habitacione');
        $this->load->model('servicio');
        $Habitaciones = $this->habitacione->TipoDeAbitaciones;
        $Servicios = $this->servicio->TipoDeServicios;
        $File = array();
        $File['eventos'] = array(
            'label' => 'Eventos',
            'config' => array(
                'allowed_types' => 'png',
                'max_size' => '1024',
                'max_width' => '370',
                'max_height' => '490'
            ),
        );

        $File['habitaciones'] = array(
            'label' => 'Habitaciones',
            'config' => array(
                'allowed_types' => 'png',
                'max_size' => '1024',
                'max_width' => '370',
                'max_height' => '490'
            ),
        );

        $File['fotos'] = array(
            'label' => 'Fotos',
            'config' => array(
                'allowed_types' => 'png',
                'max_size' => '1024',
                'max_width' => '370',
                'max_height' => '490'
            ),
        );

        $File['localizacion'] = array(
            'label' => 'Localizácion',
            'config' => array(
                'allowed_types' => 'png',
                'max_size' => '1024',
                'max_width' => '370',
                'max_height' => '490'
            ),
        );

        $File['staff'] = array(
            'label' => 'Staff',
            'config' => array(
                'allowed_types' => 'png',
                'max_size' => '1024',
                'max_width' => '370',
                'max_height' => '490'
            ),
        );

        $File['eventos'] = array(
            'label' => 'Eventos',
            'config' => array(
                'allowed_types' => 'png',
                'max_size' => '1024',
                'max_width' => '370',
                'max_height' => '490'
            ),
        );

        foreach ($Habitaciones as $Label) {
            $File['habitaciones_' . $Label] = array(
                'label' => 'Habitaciones: ' . $Label,
                'config' => array(
                    'allowed_types' => 'png',
                    'max_size' => '1024',
                    'max_width' => '370',
                    'max_height' => '490'
                ),
            );
        }

        foreach ($Servicios as $Label) {
            $File['servicios_' . $Label] = array(
                'label' => 'Servicio: ' . $Label,
                'config' => array(
                    'allowed_types' => 'png',
                    'max_size' => '1024',
                    'max_width' => '370',
                    'max_height' => '490'
                ),
            );
        }

        $this->sVAR['FILES'] = $File;
    }

}