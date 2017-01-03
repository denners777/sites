<?php

/**
 * Description of prencas
 *
 * @author Conecte_Estudio
 */
class Prensas extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->ViewTemplate('admin');
        $this->load->model('prensa');
    }

    public function index() {
        $this->sVAR['PRENSALISTA'] = $this->prensa->Get();
        $this->SetPageTitle('Prensa');
        $this->ViewLoad('prensa/prensa_index');
    }

    public function atualizar($ID = NULL) {
        if (empty($this->POST) or !is_numeric($ID)) {
            $this->ReqInvalida('admin/prensas');
        } else {
            #Prepara Dados
            $Dados = elements(array(Prensa::Titulo, Prensa::Data, Prensa::Dados, Prensa::Arquivo, Prensa::Imagem), $this->POST);

            #Upload
            $this->load->library('upload');

            $ERRO = FALSE;
            $MSGERRO = array();
            #PDF
            if ($_FILES[Prensa::Arquivo]['size'] > 0) {
                $pdf_fonfig = array();
                $pdf_fonfig['encrypt_name'] = TRUE;
                $pdf_fonfig['upload_path'] = PublicPath . "prensa/{$ID}/";
                $pdf_fonfig['allowed_types'] = 'pdf';
                $pdf_fonfig['max_size'] = '1024';
                #Validapasta
                $this->ValidaPasta($pdf_fonfig['upload_path']);
                #Inicializa
                $this->upload->initialize($pdf_fonfig);
                #Executa
                if ($this->upload->do_upload(Prensa::Arquivo)) {
                    $DadosArquivo = $this->upload->data();
                    $Dados[Prensa::Arquivo] = str_replace(PublicPath, '', $pdf_fonfig['upload_path']) . $DadosArquivo['file_name'];
                } else {
                    $ERRO = TRUE;
                    $MSGERRO[] = 'Erro no upload ' . $this->upload->display_errors('&bull; ', '');
                }
            }

            #FOTO
            if ($_FILES[Prensa::Imagem]['size'] > 0) {
                $img_fonfig = array();
                $img_fonfig['encrypt_name'] = TRUE;
                $img_fonfig['upload_path'] = PublicPath . "prensa/{$ID}/";
                $img_fonfig['allowed_types'] = 'jpeg|jpg';
                $img_fonfig['max_size'] = '1024';
                #Validapasta
                $this->ValidaPasta($img_fonfig['upload_path']);
                #Inicializa
                $this->upload->initialize($img_fonfig);
                #Executa
                if ($this->upload->do_upload(Prensa::Imagem)) {
                    $DadosArquivo = $this->upload->data();
                    $Dados[Prensa::Imagem] = str_replace(PublicPath, '', $img_fonfig['upload_path']) . $DadosArquivo['file_name'];
                } else {
                    $ERRO = TRUE;
                    $MSGERRO[] = 'Erro no upload ' . $this->upload->display_errors('&bull; ', '');
                }
            }

            if (!empty($MSGERRO)) {
                $this->session->set_flashdata(SessionALERTA, $MSGERRO);
            }


            $Acao = $this->prensa->Salva($Dados, $ID);
            if ($Acao) {
                #Tudo OK
                $this->session->set_flashdata(SessionSUCESSO, 'Prensa atualizada');
            } else {
                #Erro
                $this->session->set_flashdata(SessionERRO, 'Erro ao atualizar');
            }
            redirect("admin/prensas/");
        }
    }

    public function cadastro() {
        if (empty($this->POST)) {
            $this->ReqInvalida('admin/prensas');
        } else {
            $Dados = elements(array(Prensa::Titulo, Prensa::Data, Prensa::Dados, Prensa::Arquivo), $this->POST, NULL);
            $Acao = $this->prensa->Salva($Dados);
            // var_dump($Acao);
            if ($Acao) {
                #Correto
                $this->session->set_flashdata(SessionSUCESSO, 'Prensa cadastrada');
            } else {
                #Erro
                $this->session->set_flashdata(SessionERRO, 'Ação não executada');
            }
            redirect("admin/prensas/");
        }
    }

    public function DELETAR_REGISTRO($ID = NULL) {
        if (is_numeric($ID)) {
            $this->prensa->DELETAR_REGISTRO($ID);
            $this->session->set_flashdata(SessionINFO, 'Prensa deletada');
            redirect("admin/prensas/");
        } else {
            $this->ReqInvalida('admin/prensas');
        }
    }

}

/* End of file Prencas.php */
/* Location: ./application/controllers/Prencas.php */

