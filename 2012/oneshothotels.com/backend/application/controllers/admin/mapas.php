<?php

/**
 * Description of mapas
 *
 * @author luiz.vinicius73@gmail.com
 */
class Mapas extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('mapa');
        $this->ViewTemplate('admin');
    }

    public function _remap($Metodo, $Parametros = array()) {
        $GetMetodo = 'process_' . $Metodo;
        if (method_exists($this, $GetMetodo)) {
            return call_user_func_array(array($this, $GetMetodo), $Parametros);
        } else {
            //Valida Hotel
            $this->sVAR['HOTEL'] = $this->hotel->Get($Metodo);
            if (empty($this->sVAR['HOTEL'])) {
                $this->session->set_flashdata(SessionALERTA, 'Hotel inválido');
                redirect('admin');
            } else {
                $this->sVAR['HOTEL'] = end($this->sVAR['HOTEL']);
                $this->sVAR['HotelSlug'] = $this->sVAR['HOTEL'][Hotel::Slug];
                $this->ViewAdd('hoteis/hotel_btn', 'HotelBTN');
            }

            $this->hotel($Metodo, $Parametros);
        }
    }

    public function process_index() {
        $this->ReqInvalida();
    }

    public function process_DELETAR_REGISTRO($ID = NULL, $CallBack = NULL) {
        if (is_numeric($ID)) {
            $this->mapa->DELETAR_REGISTRO($ID);
            $this->session->set_flashdata(SessionALERTA, 'Registro eliminado.');
            if (is_null($CallBack)) {
                redirect('admin');
            } else {
                redirect("admin/mapas/{$CallBack}");
            }
        } else {
            $this->ReqInvalida();
        }
    }

    public function process_cadastro($Tipo = 'poi') {
        if (empty($this->POST)) {
            $this->ReqInvalida();
        } else {
            $Dados = elements(array(Mapa::Slug), $this->POST, NULL);
            $Dados[Mapa::MetaDados] = $this->POST['Dados'];
            $Dados[Mapa::MetaDados]['LOGO'] = NULL;
            $Dados[Mapa::Tipo] = $Tipo;
            $this->mapa->Salva($Dados);
            
            #Redirect
            $this->session->set_flashdata(SessionSUCESSO, 'Registre registrado.');
            redirect("admin/mapas/{$Dados[Mapa::Slug]}");
        }
    }

    public function process_atualizar() {
        if (empty($this->POST)) {
            $this->ReqInvalida();
        } else {
            $Criterio = array(
                Mapa::ID => $this->POST[Mapa::ID]
            );
            $Dados = elements(array(Mapa::Slug), $this->POST, NULL);
            $Dados[Mapa::MetaDados] = $this->POST['Dados'];
            
             #Upload
            $ERRO = FALSE;
            $MSGERRO = array();
            #PDF
            if ($_FILES['LOGO']['error'] == 0) {
                #Library
                $this->load->library('upload');
                #Config
                $config = array();
                $config['encrypt_name'] = TRUE;
                $config['upload_path'] = PublicPath . "{$Dados[Mapa::Slug]}/poi/{$this->POST[Mapa::ID]}/";
                $config['allowed_types'] = 'jpg|jpeg';
                $config['max_size'] = '1024';
                $config['max_width'] = '100';
                $config['max_height'] = '65';
                #Validapasta
                $this->ValidaPasta($config['upload_path']);
                #Inicializa
               // print_r($config);
                $this->upload->initialize($config);
                #Executa
                if ($this->upload->do_upload('LOGO')) {
                    $DadosArquivo = $this->upload->data();
                    $Dados[Mapa::MetaDados]['LOGO'] = str_replace(PublicPath, '', $config['upload_path']) . $DadosArquivo['file_name'];
                } else {
                    $ERRO = TRUE;
                    $MSGERRO[] = 'Erro no upload ' . $this->upload->display_errors('&bull; ', '');
                }
                
            }
            
            if (!empty($MSGERRO)) {
                $this->session->set_flashdata(SessionALERTA, $MSGERRO);
            }else{
                $this->mapa->Salva($Dados, $Criterio);
                $this->session->set_flashdata(SessionSUCESSO, 'Registro actualizado.');
            }
            
            redirect("admin/mapas/{$Dados[Mapa::Slug]}");
        }
    }

    public function hotel($SlugHotel, $Parametros = array()) {
        $this->sVAR['TiposPOI'] = $this->mapa->GetTipos('ES');
        $this->sVAR['VinculoPOI'] = $SlugHotel;
        $this->sVAR['ListaPontosRef'] = $this->mapa->Get($SlugHotel, TRUE);
        $this->sVAR['ListaAddress'] = $this->mapa->Get(array(Mapa::Slug => $SlugHotel, Mapa::Tipo => 'address'), TRUE);
        $this->SetPageTitle('Mapas', $this->sVAR['HOTEL'][Hotel::Nome]);
        $this->ViewLoad('mapas/mapas_index');
    }

}

/* End of file {name}.php */
/* Location: ./application/controllers/{name}.php */

