<?php

/**
 * @author luiz.vinicius73@gmail.com
 */
class Galerias extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->ReqInvalida();
    }

    public function deletar($ID = NULL) {
        if (is_numeric($ID)) {
            $this->load->model('galeria');
            $ACAO = $this->galeria->Deleta($ID);
            if ($ACAO) {
                echo 'DELETADO';
            } else {
                echo 'ERRO';
            }
        } else {
            $this->ReqInvalida();
        }
    }

    public function cadastra($Vinculo = NULL, $Slug = NULL, $Habitacione = NULL) {
        if (is_string($Vinculo) && !empty($this->POST)) {
            if ($_FILES['IMAGEM']['size'] > 0 && $_FILES['IMAGEM']['size'] = !0) {
                //UPLOAD INIT
                $config = array();
                if (is_string($Habitacione)) {
                    $config['upload_path'] = PublicPath . "{$Vinculo}/{$Slug}/habitaciones/{$Habitacione}/";
                } else if ($Vinculo == 'homepage') {
                    $config['upload_path'] = PublicPath . "{$Vinculo}/";
                } else {
                    $config['upload_path'] = PublicPath . "{$Vinculo}/{$Slug}/galeria/";
                }
                $config['allowed_types'] = 'jpg|jpeg';
                $config['max_size'] = '1024';
                $config['max_width'] = '450';
                $config['max_height'] = '1000';
                $config['encrypt_name'] = TRUE;
                $THabitaciones = explode('-', $Habitacione);
                if (@$THabitaciones[1] == 'slider') {
                    $config['max_width'] = '1001';
                    $config['max_height'] = '401';
                } else if ($Vinculo == 'homepage') {
                    $config['max_width'] = '1300';
                    $config['max_height'] = '900';
                }

                $this->ValidaPasta($config['upload_path']);
                $this->load->library('upload', $config);
                //Executa Upload
                if ($this->upload->do_upload('IMAGEM')) {
                    $this->load->model('galeria');
                    //Prepara Dados
                    $DadosArquivo = $this->upload->data();
                    $MetaDados = elements(array('TITLE', 'DESC'), $this->POST);
                    $MetaDados['IMG'] = str_replace(PublicPath, '', $config['upload_path']) . $DadosArquivo['file_name'];
                    $Dados[Galeria::Vinculo] = $Vinculo;
                    $Dados[Galeria::Slug] = $Slug;
                    $Dados[Galeria::Habitacione] = $Habitacione;
                    $Dados[Galeria::MetaDados] = json_encode($MetaDados);
                    ///Executa e Avalia
                    $ACAO = $this->galeria->Salva($Dados);
                    if ($ACAO) {
                        $this->session->set_flashdata(SessionSUCESSO, 'Acción realizada con éxito.');
                    } else {
                        $this->session->set_flashdata(SessionERRO, 'Error en la operación.');
                    }
                    //
                    if (is_string($Habitacione)) {
                        $Habitacione = str_replace('-slider', '', $Habitacione);
                        redirect("admin/{$Vinculo}/habitaciones/{$Slug}/{$Habitacione}");
                    } else if ($Vinculo == 'homepage') {
                        redirect('admin/site/home');
                    } else {
                        redirect("admin/{$Vinculo}/galerias/{$Slug}");
                    }

                    //
                } else {
                    $ERRO = 'Erro no upload ' . $this->upload->display_errors('&bull; ', '');
                    $this->session->set_flashdata(SessionERRO, $ERRO);
                    if (is_string($Habitacione)) {
                        $Habitacione = str_replace('-slider', '', $Habitacione);
                        redirect("admin/{$Vinculo}/habitaciones/{$Slug}/{$Habitacione}");
                    } else if ($Vinculo == 'homepage') {
                        redirect('admin/site/home');
                        print_r($config);
                    } else {
                        redirect("admin/{$Vinculo}/galerias/{$Slug}");
                    }
                }
            } else {
                $this->session->set_flashdata(SessionERRO, 'Error en la operación. No hay un archivo ha sido enviado.');
                if (is_string($Habitacione)) {
                    $Habitacione = str_replace('-slider', '', $Habitacione);
                    redirect("admin/{$Vinculo}/habitaciones/{$Slug}/{$Habitacione}");
                } else if ($Vinculo == 'homepage') {
                    redirect('admin/site/home');
                } else {
                    redirect("admin/{$Vinculo}/galerias/{$Slug}");
                }
            }
        } else {
            $this->ReqInvalida();
        }
    }

}

/* End of file {name}.php */
/* Location: ./application/controllers/{name}.php */

