<?php

/**
 * Description of servicios
 *
 * @author luiz.vinicius73@gmail.com
 */
class Servicios extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('servicio');
        $this->ViewTemplate('admin');
    }

    public function _remap($Metodo, $Parametros = array()) {
        $remapMetodo = 'page_' . $Metodo;
        if (method_exists($this, $remapMetodo)) {
            return call_user_func_array(array($this, $remapMetodo), $Parametros);
        } else {
            $this->sVAR['HOTEL'] = $this->hotel->Get($Metodo);
            if (empty($this->sVAR['HOTEL'])) {
                $this->ReqInvalida();
            } else {
                $this->sVAR['HOTEL'] = $this->sVAR['HOTEL'][0];
                $this->sVAR['HotelSlug'] = $this->sVAR['HOTEL'][Hotel::Slug];
                $this->ViewAdd('hoteis/hotel_btn', 'HotelBTN');
                $this->editando();
            }
        }
    }

    public function page_index() {
        $this->ReqInvalida();
    }

    private function page_info($Hotel = NULL) {
        $Hotel = $this->hotel->Get($Hotel);
        if (empty($Hotel) or empty($this->POST)) {
            $this->ReqInvalida();
        } else {
            $Hotel = $Hotel[0];
            $Dados = elements(array(Metadata::MetaDados), $this->POST);
            $Dados[Metadata::Vinculo] = $Hotel[Hotel::Slug];
            $Dados[Metadata::Slug] = 'servicios';
            $Dados[Metadata::MetaDados] = json_encode($Dados[Metadata::MetaDados]);
            $Criterio = array(
                Metadata::Slug => $Dados[Metadata::Slug],
                Metadata::Vinculo => $Dados[Metadata::Vinculo]
            );

            $ACAO = $this->metadata->Salva($Dados, $Criterio);
            if ($ACAO) {
                $this->session->set_flashdata(SessionSUCESSO, 'Servicio actualizado correctamente.');
            } else {
                $this->session->set_flashdata(SessionERRO, 'Error al actualizar.');
            }
            redirect("admin/servicios/{$Hotel[Hotel::Slug]}");
        }
    }

    public function editando() {
        if (empty($this->POST)) {
            $this->sVAR['TIPO_SERVICIOS'] = $this->servicio->TipoDeServicios;
            $this->sVAR['SERVICIOSDADOS'] = $this->servicio->GetByHotel($this->sVAR['HOTEL'][Hotel::Slug], TRUE);

            $CriterioMeta = array(Metadata::Vinculo => $this->sVAR['HOTEL'][Hotel::Slug], Metadata::Slug => 'servicios');
            $this->sVAR['HOTELMETADATA'] = $this->metadata->Get($CriterioMeta);

            if (!empty($this->sVAR['HOTELMETADATA'])) {
                $this->sVAR['HOTELMETADATA'] = $this->sVAR['HOTELMETADATA'][0];
                $this->sVAR['HOTELMETADATA'] = json_decode($this->sVAR['HOTELMETADATA'][Metadata::MetaDados], TRUE);
            } else {
                $this->sVAR['HOTELMETADATA'] = array(
                    'DESK' => array('EN', 'ES'),
                    'LINK' => NULL,
                    'TITULO' => NULL
                );
            }

            $this->SetPageTitle('Servicios');
            #print_r($this->sVAR);
            $this->ViewLoad('servicios/servicios_index');
        } else {
            $this->exeEditar();
        }
    }

    private function exeEditar() {
        $Dados = elements(array(Servicio::Ativo, Servicio::Slug, Servicio::MetaDados, Servicio::Tipo), $this->POST, NULL);
        $Criterio = array(
            Servicio::Slug => $Dados[Servicio::Slug],
            Servicio::Tipo => $Dados[Servicio::Tipo]
        );

        if ($_FILES['IMAGEM']['size'] > 0 && $_FILES['IMAGEM']['size'] = !0) {
            $config['upload_path'] = PublicPath . "hoteis/{$Dados[Servicio::Slug]}/servicios/{$Dados[Servicio::Tipo]}/";
            $config['allowed_types'] = 'jpg|jpeg';
            $config['max_size'] = '1024';
            $config['max_width'] = '450';
            $config['max_height'] = '1000';
            $config['encrypt_name'] = TRUE;
            $this->ValidaPasta($config['upload_path']);
            $this->load->library('upload', $config);
            //Executa Upload
            if ($this->upload->do_upload('IMAGEM')) {
                $DadosArquivo = $this->upload->data();
                $Dados[Servicio::MetaDados]['IMG'] = str_replace(PublicPath, '', $config['upload_path']) . $DadosArquivo['file_name'];
            } else {
                $ERRO = 'Erro no upload ' . $this->upload->display_errors('&bull; ', '');
                $this->session->set_flashdata(SessionERRO, $ERRO);
            }
        }

        if (isset($ERRO)) {
            redirect("admin/servicios/{$this->sVAR['HOTEL'][Hotel::Slug]}");
        } else {
            $ACAO = $this->servicio->Salva($Dados, $Criterio);
        }



        if ($ACAO) {
            $this->session->set_flashdata(SessionSUCESSO, 'Servicio actualizado correctamente.');
        } else {
            $this->session->set_flashdata(SessionERRO, 'Error al actualizar.');
        }
        redirect("admin/servicios/{$this->sVAR['HOTEL'][Hotel::Slug]}");
    }

}

/* End of file Servicios.php */
/* Location: ./application/controllers/Servicios.php */

